@props([ 'start_date', 'end_date' ])

@php( $sharedClasses = "pl-10 block w-full shadow-sm sm:text-lg bg-gray-50 border-gray-300 rounded-md" )

<div class="container mx-auto px-4 py-2 md:py-10">
    <label class="font-bold mb-3 text-gray-700 block">Select Date Range</label>
    <div x-data="pikaDateRange($wire)" {{ $attributes }}>
        <input x-ref="start" type="text"  placeholder="Start date..."
            {{ $start_date->attributes->merge(['class' => $sharedClasses ]) }} />

        <span class="px-1">to</span>

        <input x-ref="end" type="text"   placeholder="End date..."
            {{ $end_date->attributes->merge(['class' => $sharedClasses ]) }} />
        
    </div>
</div>
