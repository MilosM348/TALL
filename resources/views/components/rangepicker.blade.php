@props([ 'rangedate_from', 'rangedate_to' ])

<div x-data="rangepicker($wire)" x-cloak>
    <div class="container mx-auto px-4 py-2 md:py-10">
        <div>
            <label for="rangepicker" class="font-bold mb-1 text-gray-700 block">Select Date Range</label>
            <div class="relative" @keydown.escape="closeDatepicker()" @click.outside="closeDatepicker()">
                <div class="inline-flex items-center border rounded-md mt-3 bg-gray-200">
                    <div x-on:change="outputDateFromValue = $event.target.value">
                        <input type="text" 
                            @click="endToShow = 'from'; init(); showDatepicker = true"  
                            x-bind:value="outputDateFromValue"
                            :class="{'font-semibold': endToShow == 'from' }" 
                            class="focus:outline-none border-0 p-2 w-40 border-gray-300 rounded-l-md border-r"
                            />
                    </div>
                    <div class="inline-block px-2 h-full">to</div>
                    <div x-on:change="outputDateToValue = $event.target.value">
                        <input type="text" 
                            @click="endToShow = 'to'; init(); showDatepicker = true" 
                            x-bind:value="outputDateToValue" 
                            :class="{'font-semibold': endToShow == 'to' }" 
                            class="focus:outline-none border-0 p-2 w-40 border-gray-300 rounded-r-md border-l"
                            />
                    </div>
                </div>
                <div 
                    class="bg-white mt-2 rounded-lg shadow p-4 absolute" 
                    style="width: 17rem" 
                    x-show="showDatepicker"
                    x-transition
                >
                    <div class="flex flex-col items-center">

                        <div class="w-full flex justify-between items-center mb-2">
                            <div>
                                <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                                <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                            </div>
                            <div>
                                <button 
                                    type="button"
                                    class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full" 
                                    @click="if (month == 0) {year--; month=11;} else {month--;} getNoOfDays()">
                                    <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                    </svg>  
                                </button>
                                <button 
                                    type="button"
                                    class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full" 
                                    @click="if (month == 11) {year++; month=0;} else {month++;}; getNoOfDays()">
                                    <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>									  
                                </button>
                            </div>
                        </div>

                        <div class="w-full flex flex-wrap mb-3 -mx-1">
                            <template x-for="(day, index) in DAYS" :key="index">	
                                <div style="width: 14.26%" class="px-1">
                                    <div
                                        x-text="day" 
                                        class="text-gray-800 font-medium text-center text-xs"
                                    ></div>
                                </div>
                            </template>
                        </div>

                        <div class="flex flex-wrap -mx-1">
                            <template x-for="blankday in blankdays">
                                <div 
                                    style="width: 14.28%"
                                    class="text-center border p-1 border-transparent text-sm"	
                                ></div>
                            </template>	
                            <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">	
                                <div style="width: 14.28%">
                                    <div
                                        @click="getDateValue(date, false)"
                                        @mouseover="getDateValue(date, true)"
                                        x-text="date"
                                        class="p-1 cursor-pointer text-center text-sm leading-loose transition ease-in-out duration-100"
                                        :class="{'font-bold': isToday(date) == true, 'bg-blue-800 text-white rounded-l-full': isDateFrom(date) == true, 'bg-blue-800 text-white rounded-r-full': isDateTo(date) == true, 'bg-blue-200': isInRange(date) == true }"	
                                    ></div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>

            </div>	 
        </div>

    </div>
</div>