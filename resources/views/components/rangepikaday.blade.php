@props([ 'start_date', 'end_date' ])

@php( $sharedClasses = "border-0 border-b p-0 w-40 text-base" )

<div x-data="pikaDateRange($wire)" {{ $attributes }}>
    <input x-ref="start" type="text"  placeholder="Start date..."
           {{ $start_date->attributes->merge(['class' => $sharedClasses ]) }} />

    <span class="px-1">to</span>

    <input x-ref="end" type="text"   placeholder="End date..."
           {{ $end_date->attributes->merge(['class' => $sharedClasses ]) }} />
    
</div>
