<?php

namespace App\Http\Controllers;

use App\Models\AppLink;
use App\Services\AppRedirectService;
use App\Services\TrackingService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AppRedirectController extends Controller
{
  /**
   * Redirige vers le store correspondant (QR code) ou affiche une page de choix.
   *
   * @param Request $request Requête HTTP (User-Agent pour la détection)
   * @return RedirectResponse|View Redirection 302 ou vue fallback desktop
   */
  public function __invoke(Request $request): RedirectResponse|View
  {
    $appLink = AppLink::get();
    $iosUrl = $appLink?->getQrAppStoreUrl() ?? AppLink::DEFAULT_QR_APP_STORE_URL;
    $androidUrl = $appLink?->getQrPlayStoreUrl() ?? AppLink::DEFAULT_QR_PLAY_STORE_URL;
    $sessionId = $request->session()->getId();
    $platform = AppRedirectService::detectPlatform($request);

    if ($platform === AppRedirectService::PLATFORM_IOS) {
      TrackingService::recordActionClick('qr_redirect_ios', 'app_qr', $sessionId);

      return redirect()->away($iosUrl);
    }

    if ($platform === AppRedirectService::PLATFORM_ANDROID) {
      TrackingService::recordActionClick('qr_redirect_android', 'app_qr', $sessionId);

      return redirect()->away($androidUrl);
    }

    TrackingService::recordActionClick('qr_fallback', 'app_qr', $sessionId);

    return view('frontend.app-download', [
      'iosUrl' => $iosUrl,
      'androidUrl' => $androidUrl,
    ]);
  }
}
