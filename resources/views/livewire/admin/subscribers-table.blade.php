<div class="relative p-6 overflow-x-auto shadow-lg bg-inherit sm:rounded-lg dark:bg-zinc-900">
    <h3 class="text-lg/10 font-mono tracking-[-0.015em] text-zinc-950 sm:text-base/7 dark:text-white m-6">
        Subscribers
    </h3>
    <br>
    <table class="min-w-full text-sm text-left text-zinc-950 dark:text-white">
        <thead class="text-zinc-500 dark:text-zinc-400">
            <tr>
                <th class="px-4 py-2 border-b border-zinc-300 dark:border-zinc-700">S/N</th>
                <th class="px-4 py-2 border-b border-zinc-300 dark:border-zinc-700">Date</th>
                <th class="px-4 py-2 border-b border-zinc-300 dark:border-zinc-700">Customer's Email</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($subscribers as $item => $subscriber)
            <tr class="bg-inherit dark:bg-zinc-800">
                <td class="px-4 py-4 border-b border-zinc-300 dark:border-zinc-700">{{ $item+1 }}</td>
                <td class="px-4 py-4 border-b border-zinc-300 dark:border-zinc-700">{{ $subscriber->created_at->format('F j, Y') }}</td>
                <td class="px-4 py-4 border-b border-zinc-300 dark:border-zinc-700">
                    <div class="flex items-center gap-2">
                        <img class="w-8 h-8 rounded-full" src="{{asset('assets/img/logo/favicon.png')}}"
                            alt="Leslie Alexander">
                        <span class="font-medium">{{$subscriber->email}}</span>
                    </div>
                </td>
            </tr>
            @empty
            <tr class="bg-inherit dark:bg-zinc-800">
                no data avaible
            </tr>
            @endforelse

            <!-- Additional rows can go here -->
        </tbody>
    </table>
</div>