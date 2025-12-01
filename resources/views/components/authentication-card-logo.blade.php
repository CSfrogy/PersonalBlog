<div {{ $attributes->merge(['class' => 'group']) }}>
    <div class="flex items-center">
        <div class="relative">
            <div class="h-10 w-10 rounded-full bg-gradient-to-r from-indigo-500 to-purple-600
                        transform transition-all duration-300 ease-in-out group-hover:rotate-12">
            </div>
            <div class="absolute inset-0 flex items-center justify-center">
                <span class="text-2xl font-bold text-white transform transition-all duration-300
                             ease-in-out group-hover:scale-110">
                    {{ strtoupper(config('app.name')[0]) }}
                </span>
            </div>
        </div>
        <span class="ml-2 text-xl font-semibold text-gray-900 tracking-tight">
            {{ substr(config('app.name'), 1) }}
            <span class="text-indigo-600 animate-pulse">.</span>
        </span>
    </div>
</div>
