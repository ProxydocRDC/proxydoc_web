<x-filament-panels::page>
    <x-filament::section>
        <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">Classement des pages du site par nombre de vues (du plus visité au moins visité).</p>
        <div class="overflow-x-auto rounded-xl border border-gray-200 dark:border-white/5">
            <table class="w-full text-sm text-left">
                <thead class="bg-gray-50 dark:bg-white/5 text-xs uppercase text-gray-500 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium">#</th>
                        <th scope="col" class="px-6 py-4 font-medium">Page (chemin)</th>
                        <th scope="col" class="px-6 py-4 font-medium text-right">Nombre de vues</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-white/5">
                    @forelse($pages as $index => $row)
                        <tr class="bg-white dark:bg-white/5 hover:bg-gray-50 dark:hover:bg-white/10">
                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-gray-100">{{ $index + 1 }}</td>
                            <td class="px-6 py-4 text-gray-700 dark:text-gray-300 font-mono">{{ $row->path }}</td>
                            <td class="px-6 py-4 text-right">
                                <x-filament::badge color="primary" size="lg">{{ number_format($row->visits, 0, ',', ' ') }}</x-filament::badge>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-6 py-8 text-center text-gray-500 dark:text-gray-400">Aucune visite enregistrée pour le moment.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </x-filament::section>
</x-filament-panels::page>
