<div class="bg-slate-50 px-4 py-6 shadow-sm rounded-lg group hover:bg-opacity-50">
    <h3 class="font-bold text-2xl">{{ $title }}</h3>
    <span class="font-semibold text-xl">${{ number_format($price, 2) }}</span>
    <hr class="my-2"/>
    <div class="flex flex-row gap-4 mt-4">
        <div class="inline-flex flex-col">
            <span class="font-medium text-lg">{{ $numOffices }}</span>
            <span class="text-xs text-gray-500">Offices</span>
        </div>
        <div class="inline-flex flex-col">
            <span class="font-medium text-lg">{{ $numTables }}</span>
            <span class="text-xs text-gray-500">Tables</span>
        </div>
        <div class="inline-flex flex-col">
            <span class="font-medium text-lg">{{ $sqm }} m<sup class="text-xs">2</sup></span>
            <span class="text-xs text-gray-500">Area Size</span>
        </div>
    </div>
</div>
