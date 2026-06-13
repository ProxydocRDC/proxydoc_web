<x-filament-panels::page>
    <div class="grid gap-6">
        <x-filament::section>
            <x-slot name="heading">État des migrations</x-slot>
            <x-slot name="description">
                {{ $pendingCount }} migration(s) en attente. Les migrations déjà exécutées sont listées ci-dessous et seront ignorées lors de l'exécution.
            </x-slot>

            <div class="overflow-x-auto rounded-xl border border-gray-200 dark:border-white/5">
                <table class="w-full text-sm text-left">
                    <thead class="bg-gray-50 dark:bg-white/5 text-xs uppercase text-gray-500 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-4 font-medium">Migration</th>
                            <th scope="col" class="px-6 py-4 font-medium">Statut</th>
                            <th scope="col" class="px-6 py-4 font-medium text-right">Batch</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-white/5">
                        @forelse($migrations as $migration)
                            <tr class="bg-white dark:bg-white/5 hover:bg-gray-50 dark:hover:bg-white/10">
                                <td class="px-6 py-4 font-mono text-gray-700 dark:text-gray-300">{{ $migration['name'] }}</td>
                                <td class="px-6 py-4">
                                    @if($migration['status'] === 'executed')
                                        <x-filament::badge color="success">Exécutée</x-filament::badge>
                                    @else
                                        <x-filament::badge color="warning">En attente</x-filament::badge>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-right text-gray-500 dark:text-gray-400">
                                    {{ $migration['batch'] ?? '—' }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="px-6 py-8 text-center text-gray-500 dark:text-gray-400">
                                    Aucun fichier de migration trouvé.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </x-filament::section>

        @if($lastOutput !== '')
            <x-filament::section>
                <x-slot name="heading">Dernière sortie console</x-slot>
                <pre class="overflow-x-auto rounded-lg bg-gray-950 p-4 text-xs text-gray-100">{{ $lastOutput }}</pre>
            </x-filament::section>
        @endif
    </div>
</x-filament-panels::page>
