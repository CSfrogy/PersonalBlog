@if ($paginator->hasPages())
    <nav aria-label="Page navigation" class="mt-6">
        <ul class="flex -space-x-px text-sm">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li>
                    <span class="flex items-center justify-center text-gray-700 bg-gray-100 border border-gray-300 font-medium rounded-l-lg text-sm w-9 h-9 cursor-not-allowed opacity-50">
                        <span class="sr-only">Previous</span>
                        <svg class="w-4 h-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/>
                        </svg>
                    </span>
                </li>
            @else
                <li>
                    <button wire:click="previousPage" class="flex items-center justify-center text-gray-700 bg-gray-100 border border-gray-300 hover:bg-gray-200 hover:text-gray-900 font-medium rounded-l-lg text-sm w-9 h-9 focus:outline-none focus:ring-2 focus:ring-gray-300">
                        <span class="sr-only">Previous</span>
                        <svg class="w-4 h-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/>
                        </svg>
                    </button>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach (range(1, $paginator->lastPage()) as $page)
                <li>
                    @if ($page == $paginator->currentPage())
                        <span class="flex items-center justify-center bg-black text-white border border-black font-medium text-sm w-9 h-9">
                            {{ $page }}
                        </span>
                    @else
                        <button wire:click="gotoPage({{ $page }})" class="flex items-center justify-center text-gray-700 bg-gray-100 border border-gray-300 hover:bg-gray-200 hover:text-gray-900 font-medium text-sm w-9 h-9 focus:outline-none focus:ring-2 focus:ring-gray-300">
                            {{ $page }}
                        </button>
                    @endif
                </li>
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <button wire:click="nextPage" class="flex items-center justify-center text-gray-700 bg-gray-100 border border-gray-300 hover:bg-gray-200 hover:text-gray-900 font-medium rounded-r-lg text-sm w-9 h-9 focus:outline-none focus:ring-2 focus:ring-gray-300">
                        <span class="sr-only">Next</span>
                        <svg class="w-4 h-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                        </svg>
                    </button>
                </li>
            @else
                <li>
                    <span class="flex items-center justify-center text-gray-700 bg-gray-100 border border-gray-300 font-medium rounded-r-lg text-sm w-9 h-9 cursor-not-allowed opacity-50">
                        <span class="sr-only">Next</span>
                        <svg class="w-4 h-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                        </svg>
                    </span>
                </li>
            @endif
        </ul>
    </nav>
@endif
