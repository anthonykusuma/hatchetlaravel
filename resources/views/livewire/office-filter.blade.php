<div class="bg-gray-100 rounded-lg p-4">
    <div class="grid gap-4 sm:grid-cols-4 lg:grid-cols-6 lg:gap-6">
        <div class="sm:col-span-2 lg:col-span-4">
            <label for="name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Name</label>
            <div class="mt-1 sm:col-span-2 sm:mt-0">
                <input wire:model="name" wire:keydown="filter" type="search" name="name" id="name"
                       class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                       placeholder="St George Terrace">
            </div>
        </div>

        <div>
            <label for="offices" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Offices</label>
            <div class="mt-1 sm:col-span-2 sm:mt-0">
                <select wire:model="num_offices" wire:change="filter" id="offices" name="offices"
                        autocomplete="offices-num"
                        class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                    <option value="">Any</option>
                    @foreach($offices as $office)
                        <option value="{{ $office->num_offices }}">{{ $office->num_offices }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div>
            <label for="tables" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Tables</label>
            <div class="mt-1 sm:col-span-2 sm:mt-0">
                <select wire:model="num_tables" wire:change="filter" id="tables" name="tables" autocomplete="tables-num"
                        class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                    <option value="">Any</option>
                    @foreach($tables as $table)
                        <option value="{{ $table->num_tables }}">{{ $table->num_tables }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="sm:col-span-2 md:col-span-3">
            <span class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Price</span>
            <div class="grid grid-cols-2 gap-2">
                <div
                    class="rounded-md border border-gray-300 px-3 py-2 shadow-sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600 bg-white">
                    <label for="min_price" class="block text-xs font-medium text-gray-900">From</label>
                    <input wire:model="min_price" wire:keyup.debounce="filter" type="number" name="min_price"
                           id="min_price"
                           class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"
                           placeholder="$0">
                </div>

                <div
                    class="rounded-md border border-gray-300 px-3 py-2 shadow-sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600 bg-white">
                    <label for="max_price" class="block text-xs font-medium text-gray-900">To</label>
                    <input wire:model="max_price" wire:keyup.debounce="filter" type="number" name="max_price"
                           id="max_price"
                           class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"
                           placeholder="$1,500.00">
                </div>
            </div>
        </div>

        <div class="sm:col-span-2 md:col-span-3">
            <span class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Area Size</span>
            <div class="grid grid-cols-2 gap-2">
                <div
                    class="rounded-md border border-gray-300 px-3 py-2 shadow-sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600 bg-white">
                    <label for="min_price" class="block text-xs font-medium text-gray-900">Size From</label>
                    <input wire:model="min_size" wire:keyup.debounce="filter" type="number" name="min_size"
                           id="min_size"
                           class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"
                           placeholder="0">
                </div>

                <div
                    class="rounded-md border border-gray-300 px-3 py-2 shadow-sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600 bg-white">
                    <label for="max_price" class="block text-xs font-medium text-gray-900">Size To</label>
                    <input wire:model="max_size" wire:keyup.debounce="filter" type="number" name="max_size"
                           id="max_size"
                           class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"
                           placeholder="300">
                </div>
            </div>
        </div>

    </div>


</div>
