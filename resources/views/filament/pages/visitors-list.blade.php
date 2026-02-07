<x-filament-panels::page>
    <x-filament::section>
        <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">Liste des visiteurs uniques : pays, adresse IP, temps passé sur le site et nombre de pages vues.</p>
        <div class="overflow-x-auto rounded-xl border border-gray-200 dark:border-white/5">
            <table class="w-full text-sm text-left">
                <thead class="bg-gray-50 dark:bg-white/5 text-xs uppercase text-gray-500 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium">Pays</th>
                        <th scope="col" class="px-6 py-4 font-medium">Adresse IP</th>
                        <th scope="col" class="px-6 py-4 font-medium">Première visite</th>
                        <th scope="col" class="px-6 py-4 font-medium">Dernière visite</th>
                        <th scope="col" class="px-6 py-4 font-medium text-right">Temps sur le site</th>
                        <th scope="col" class="px-6 py-4 font-medium text-right">Pages vues</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-white/5">
                    @forelse($visitors as $v)
                        <tr class="bg-white dark:bg-white/5 hover:bg-gray-50 dark:hover:bg-white/10">
                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-gray-100">{{ $v->country ?? '—' }}</td>
                            <td class="px-6 py-4 text-gray-700 dark:text-gray-300 font-mono">{{ $v->ip ?? '—' }}</td>
                            <td class="px-6 py-4 text-gray-600 dark:text-gray-400">{{ $v->first_visit ? \Carbon\Carbon::parse($v->first_visit)->format('d/m/Y H:i') : '—' }}</td>
                            <td class="px-6 py-4 text-gray-600 dark:text-gray-400">{{ $v->last_visit ? \Carbon\Carbon::parse($v->last_visit)->format('d/m/Y H:i') : '—' }}</td>
                            <td class="px-6 py-4 text-right">
                                @php
                                    $seconds = $v->time_spent_seconds ?? 0;
                                    if ($seconds >= 3600) {
                                        $duration = gmdate('H:i:s', $seconds);
                                    } elseif ($seconds >= 60) {
                                        $duration = gmdate('i:s', $seconds) . ' min';
                                    } else {
                                        $duration = $seconds . ' s';
                                    }
                                @endphp
                                {{ $duration }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <x-filament::badge color="gray">{{ $v->page_views }}</x-filament::badge>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-8 text-center text-gray-500 dark:text-gray-400">Aucun visiteur enregistré pour le moment.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </x-filament::section>
</x-filament-panels::page>
