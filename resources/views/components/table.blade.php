<div class="relative p-6 overflow-x-auto shadow-md bg-inherit sm:rounded-lg dark:bg-zinc-900">
    <h3 class="text-lg/7 font-semibold tracking-[-0.015em] text-zinc-950 sm:text-base/7 dark:text-white m-6">
        Subscribers
    </h3>
    <br>
    <table class="min-w-full text-sm text-left text-zinc-950 dark:text-white">
        <thead class="text-zinc-500 dark:text-zinc-400">
            <tr>
                <th class="px-4 py-2 border-b border-zinc-300 dark:border-zinc-700">Purchase Date</th>
                <th class="px-4 py-2 border-b border-zinc-300 dark:border-zinc-700">Customer</th>
                <th class="px-4 py-2 text-right border-b border-zinc-300 dark:border-zinc-700">Amount</th>
                <th class="px-4 py-2 border-b border-zinc-300 dark:border-zinc-700">Status</th>
                <th class="px-4 py-2 border-b border-zinc-300 dark:border-zinc-700">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-inherit dark:bg-zinc-800">
                <td class="px-4 py-4 border-b border-zinc-300 dark:border-zinc-700">Mar 6, 2023</td>
                <td class="px-4 py-4 border-b border-zinc-300 dark:border-zinc-700">
                    <div class="flex items-center gap-2">
                        <img class="w-8 h-8 rounded-full" src="{{asset('assets/img/logo/favicon.png')}}"
                            alt="Leslie Alexander">
                        <span class="font-medium">Leslie Alexander</span>
                    </div>
                </td>
                <td class="px-4 py-4 text-right border-b border-zinc-300 dark:border-zinc-700">CA$60.00</td>
                <td class="px-4 py-4 border-b border-zinc-300 dark:border-zinc-700">
                    <span
                        class="inline-flex items-center gap-1.5 rounded-md px-2 py-1 text-sm font-medium bg-lime-400/20 text-lime-700 dark:bg-lime-400/10 dark:text-lime-300">
                        Success
                    </span>
                </td>
                <td class="px-4 py-4 border-b border-zinc-300 dark:border-zinc-700">
                    <button class="text-blue-500 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-600">
                        More Options
                    </button>
                </td>
            </tr>
            <!-- Additional rows can go here -->
        </tbody>
    </table>
</div>