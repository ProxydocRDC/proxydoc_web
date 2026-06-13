<?php

namespace App\Services;

use Illuminate\Http\Request;

class AppRedirectService
{
  public const PLATFORM_IOS = 'ios';

  public const PLATFORM_ANDROID = 'android';

  public const PLATFORM_UNKNOWN = 'unknown';

  /**
   * Détecte la plateforme mobile à partir du User-Agent HTTP.
   *
   * @param Request $request Requête HTTP entrante
   * @return string Valeur parmi PLATFORM_IOS, PLATFORM_ANDROID ou PLATFORM_UNKNOWN
   */
  public static function detectPlatform(Request $request): string
  {
    $userAgent = $request->userAgent() ?? '';

    if (preg_match('/iPhone|iPad|iPod/i', $userAgent)) {
      return self::PLATFORM_IOS;
    }

    if (preg_match('/Android/i', $userAgent)) {
      return self::PLATFORM_ANDROID;
    }

    return self::PLATFORM_UNKNOWN;
  }
}
