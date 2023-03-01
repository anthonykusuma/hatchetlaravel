<div class="py-8 px-4 mt-4">
    <div class="grid gap-4 space-x-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4" wire:loading.remove>
        @if(count($offices) > 0)
            @foreach($offices as $office)
                <x-card title="{{ $office->name }}" price="{{ $office->price }}" numOffices="{{ $office->num_offices }}"
                        numTables="{{ $office->num_tables }}" sqm="{{ $office->sqm }}"/>
            @endforeach
        @else
            <div class="sm:col-span-2 md:col-span-3 lg:col-span-4 px-2 py-8 text-center">
                <p class="text-lg">It's empty here. 🍃</p>
            </div>
        @endif
    </div>

    <div class="flex items-center justify-center mt-10">
        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
             viewBox="0 0 24 24" wire:loading>
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor"
                  d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
    </div>
</div>


