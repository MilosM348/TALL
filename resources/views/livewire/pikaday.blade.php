<div class="flex items-center justify-center">
    <form wire:submit.prevent="pikaday">

        <div class="flex items-center justify-center">
            <x-pikaday wire:model="pikaday" id="pikaday"
                autocomplete="off" />
            <x-rangepikaday class="flex items-end">
                <x-slot name="start_date" wire:model="rangepikaday.start_date"></x-slot>
                <x-slot name="end_date"   wire:model="rangepikaday.end_date"></x-slot>
            </x-rangepikaday>
        </div>

        <div class="flex items-center justify-center">
            <div class="mt-6">
                <span class="block w-full rounded-md shadow-sm">
                    <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        Save
                    </button>
                </span>
            </div>
        </div>
    </form>
</div>