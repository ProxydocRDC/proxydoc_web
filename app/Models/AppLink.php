<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppLink extends Model
{
  public const DEFAULT_QR_APP_STORE_URL = 'https://apple.co/44uhpIl?r=lp&m=Mpcejx2dj2q';

  public const DEFAULT_QR_PLAY_STORE_URL = 'https://bit.ly/48DlhsV?r=lp&m=Mpcejx2dj2q';

  protected $fillable = [
    'app_store_url',
    'play_store_url',
    'qr_app_store_url',
    'qr_play_store_url',
  ];

  protected $table = 'app_links';

  /**
   * Récupère l'instance unique des liens (premier enregistrement).
   *
   * @return self|null Premier enregistrement ou null si absent
   */
  public static function get(): ?self
  {
    return static::first();
  }

  /**
   * Retourne l'URL App Store utilisée pour la redirection QR.
   *
   * @return string URL de campagne iOS ou valeur par défaut
   */
  public function getQrAppStoreUrl(): string
  {
    return $this->qr_app_store_url ?: self::DEFAULT_QR_APP_STORE_URL;
  }

  /**
   * Retourne l'URL Play Store utilisée pour la redirection QR.
   *
   * @return string URL de campagne Android ou valeur par défaut
   */
  public function getQrPlayStoreUrl(): string
  {
    return $this->qr_play_store_url ?: self::DEFAULT_QR_PLAY_STORE_URL;
  }
}
