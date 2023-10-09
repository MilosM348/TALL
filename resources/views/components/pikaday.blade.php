<div class="container mx-auto px-4 py-2 md:py-10">
    <div
        x-data="{ date: @entangle($attributes->wire('model')) }"
        x-on:change="date = $event.target.value"
        x-init="
            new Pikaday({ field: $refs.pikadate, 'format': 'DD.MM.YYYY', firstDay: 1 });"
    >
        <label class="font-bold mb-3 text-gray-700 block">Select Date</label>
        <input 
            x-ref="pikadate"
            x-bind:value="date"
            type="text" 
            placeholder="Select date"
            class="pl-10 block w-full shadow-sm sm:text-lg bg-gray-50 border-gray-300 rounded-md" 
            {{ $attributes->whereDoesntStartWith('wire:model') }} 
        />
    </div>
</div>