<div class="flex items-center justify-center">
    <form wire:submit.prevent="datepicker">
        <div class="flex flex-col justify-around">
            <div class="flex items-center justify-center">
                <div class="antialiased">
                    <x-datepicker wire:model="datepicker">
                    </x-datepicker>
                </div>
                <div class="antialiased">
                    <x-rangepicker>
                        <x-slot name="rangedate_from" wire:model="rangedate.rangedate_from"></x-slot>
                        <x-slot name="rangedate_to"   wire:model="rangedate.rangedate_to"></x-slot>
                    </x-rangepicker>
                </div>
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
        </div>
    </form>
</div>
