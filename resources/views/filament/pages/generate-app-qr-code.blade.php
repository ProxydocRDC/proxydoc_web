<x-filament-panels::page>
    <div class="grid gap-6 lg:grid-cols-2">
        <x-filament::section>
            <x-slot name="heading">Paramètres</x-slot>

            <div class="space-y-4">
                <label class="flex items-center gap-3 cursor-pointer">
                    <input
                        type="checkbox"
                        wire:model.live="withLogo"
                        class="rounded border-gray-300 text-primary-600 shadow-sm focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-900"
                        @disabled(! $logoAvailable)
                    >
                    <span class="text-sm text-gray-700 dark:text-gray-200">
                        Inclure le logo ProxyDoc au centre
                    </span>
                </label>

                @if(! $logoAvailable)
                    <p class="text-sm text-warning-600 dark:text-warning-400">
                        Logo introuvable ({{ \App\Services\AppQrCodeService::DEFAULT_LOGO_PATH }}). Le QR code sera généré sans logo.
                    </p>
                @endif

                <div>
                    <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-gray-400 mb-1">URL encodée dans le QR code</p>
                    <p class="break-all rounded-lg bg-gray-50 px-3 py-2 font-mono text-sm text-gray-800 dark:bg-white/5 dark:text-gray-200">
                        {{ $redirectUrl }}
                    </p>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                        Cette URL redirige automatiquement vers l'App Store (iOS) ou le Play Store (Android).
                    </p>
                </div>
            </div>
        </x-filament::section>

        <x-filament::section>
            <x-slot name="heading">Aperçu</x-slot>
            <x-slot name="description">QR code prêt pour impression ou supports marketing.</x-slot>

            <div class="flex flex-col items-center gap-4">
                <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm dark:border-white/10 dark:bg-white/5">
                    <img
                        src="data:image/png;base64,{{ \App\Services\AppQrCodeService::toBase64($this->withLogo) }}"
                        alt="QR Code ProxyDoc"
                        class="h-72 w-72 max-w-full object-contain"
                        wire:key="qr-preview-{{ $withLogo ? 'logo' : 'plain' }}"
                    >
                </div>
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    {{ $withLogo ? 'Version avec logo' : 'Version sans logo' }} — 800×800 px
                </p>
            </div>
        </x-filament::section>
    </div>
</x-filament-panels::page>
