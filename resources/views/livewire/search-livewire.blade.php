<div class="relative">
    <div class="relative">

        <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
            <!-- Heroicon name: search -->
            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                    clip-rule="evenodd" />
            </svg>
        </div>
        <input wire:model.debounce.250ms="q" id="search" name="search" x-ref="inputSearch"
            x-on:keyup.down="selectNextResult" x-on:keyup.up="selectPreviousResult"
            class="block w-full px-3 py-2 mt-2 text-gray-600 border placeholder-gray-400 bg-white border-gray-400 rounded-md focus:border-blue-200 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-40  pl-10 pr-3 text-sm focus:text-gray-800 sm:text-sm"
            placeholder="Search here ..." type="search">

    </div>

    @if ($q)
        <div
            class="origin-top-right lg:overflow-auto scrollbar:!w-1.5 scrollbar:!h-1.5 scrollbar:bg-transparent1 scrollbar-track:!bg-slate-100 scrollbar-thumb:!rounded scrollbar-thumb:!bg-slate-300 scrollbar-track:!rounded max-h-96 lg:supports-scrollbars:pr-2 lg:max-h-96 right-0 mt-2 w-full rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
            <div class="text-sm text-gray-800">

                @forelse($results as $result)
                    <a href="{{ $result['url'] }}"
                        class="block1 flex items-center font-medium text-gray-700 px-4 py-2 transition border-b hover:text-blue-500 hover:bg-gray-10 focus:bg-gray-100 cursor-pointer  hover:bg-blue-50 hover:shadow-sm duration-250">
                        <span class="w-4 h-4 mr-2 hover:fill-gray-50">
                            {!! $result['icon'] !!}
                        </span>
                        {{ $result['title'] }}
                    </a>
                @empty
                    <div class="block px-4 py-2">No results found for <b>{{ $q }}</b></div>
                @endforelse
            </div>
        </div>
        @if (count($results))
            <p class="text-xs mt-2 1px-4 py-2">
                Search for <b>{{ $q }}</b> has <b>{{ count($results) }}</b> results</p>
        @endif
    @endif
</div>
