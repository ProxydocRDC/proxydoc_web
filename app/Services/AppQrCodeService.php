<?php

namespace App\Services;

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AppQrCodeService
{
  public const DEFAULT_LOGO_PATH = 'assets/images/LOGO-P-1.png';

  public const QR_SIZE = 800;

  public const LOGO_WIDTH = 160;

  /**
   * Retourne l'URL absolue de la page de redirection QR (/app).
   *
   * @return string URL complète pointant vers la route app.redirect
   */
  public static function getRedirectUrl(): string
  {
    return route('app.redirect', absolute: true);
  }

  /**
   * Retourne le chemin absolu du logo ProxyDoc pour le centre du QR code.
   *
   * @return string|null Chemin du fichier logo ou null si absent
   */
  public static function getLogoPath(): ?string
  {
    $logoPath = public_path(self::DEFAULT_LOGO_PATH);

    if (! is_file($logoPath)) {
      return null;
    }

    return $logoPath;
  }

  /**
   * Génère un QR code PNG encodant l'URL de redirection /app.
   *
   * @param bool $withLogo Inclure le logo ProxyDoc au centre si disponible
   * @return string Contenu binaire PNG
   */
  public static function generate(bool $withLogo = true): string
  {
    $logoPath = $withLogo ? self::getLogoPath() : null;

    if ($logoPath !== null) {
      $builder = new Builder(
        writer: new PngWriter(),
        writerOptions: [],
        validateResult: false,
        data: self::getRedirectUrl(),
        encoding: new Encoding('UTF-8'),
        errorCorrectionLevel: ErrorCorrectionLevel::High,
        size: self::QR_SIZE,
        margin: 20,
        roundBlockSizeMode: RoundBlockSizeMode::Margin,
        logoPath: $logoPath,
        logoResizeToWidth: self::LOGO_WIDTH,
        logoPunchoutBackground: true,
      );
    } else {
      $builder = new Builder(
        writer: new PngWriter(),
        writerOptions: [],
        validateResult: false,
        data: self::getRedirectUrl(),
        encoding: new Encoding('UTF-8'),
        errorCorrectionLevel: ErrorCorrectionLevel::High,
        size: self::QR_SIZE,
        margin: 20,
        roundBlockSizeMode: RoundBlockSizeMode::Margin,
      );
    }

    return $builder->build()->getString();
  }

  /**
   * Retourne le QR code encodé en base64 pour affichage inline.
   *
   * @param bool $withLogo Inclure le logo ProxyDoc au centre si disponible
   * @return string Chaîne base64 du PNG
   */
  public static function toBase64(bool $withLogo = true): string
  {
    return base64_encode(self::generate($withLogo));
  }

  /**
   * Prépare une réponse HTTP de téléchargement du QR code PNG.
   *
   * @param bool $withLogo Inclure le logo ProxyDoc au centre si disponible
   * @return StreamedResponse Réponse de téléchargement
   */
  public static function downloadResponse(bool $withLogo = true): StreamedResponse
  {
    $suffix = $withLogo ? 'avec-logo' : 'sans-logo';
    $filename = 'proxydoc-qrcode-'.$suffix.'.png';
    $binary = self::generate($withLogo);

    return response()->streamDownload(function () use ($binary) {
      echo $binary;
    }, $filename, [
      'Content-Type' => 'image/png',
    ]);
  }
}
