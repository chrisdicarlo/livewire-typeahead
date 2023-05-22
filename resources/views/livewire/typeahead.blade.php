<div>
    <div x-data="{
        open: @entangle('showDropdown'),
        search: @entangle('search'),
        selected: @entangle('selected'),
        highlightedIndex: 0,
        highlightPrevious() {
            if (this.highlightedIndex > 0) {
                this.highlightedIndex = this.highlightedIndex - 1;
                this.scrollIntoView();
            }
        },
        highlightNext() {
            if (this.highlightedIndex < this.$refs.results.children.length - 1) {
                this.highlightedIndex = this.highlightedIndex + 1;
                this.scrollIntoView();
            }
        },
        updateSelected(id, name) {
            this.selected = id;
            this.search = name;
            this.open = false;
            this.highlightedIndex = 0;
        },
        reset() {
            this.selected = '';
            this.search = '';
            this.open = false;
            this.highlightedIndex = 0;
        },
        scrollIntoView() {
            this.$refs.results.children[this.highlightedIndex].scrollIntoView({
                block: 'nearest',
                behavior: 'smooth'
            });
        },
    }" class="space-y-1">
        <div class="relative" x-on:value-selected="updateSelected($event.detail.id, $event.detail.name)">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <!-- Heroicon name: solid search-circle -->
                    <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 9a2 2 0 114 0 2 2 0 01-4 0z" />
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a4 4 0 00-3.446 6.032l-2.261 2.26a1 1 0 101.414 1.415l2.261-2.261A4 4 0 1011 5z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <input x-ref="input"
                x-on:keydown.arrow-down.stop.prevent="highlightNext()"
                x-on:keydown.arrow-up.stop.prevent="highlightPrevious()"
                x-on:keydown.enter.stop.prevent="(!$refs.input.text) ? $dispatch('value-selected', {
                    id: $refs.results.children[highlightedIndex].getAttribute('data-result-id'),
                    name: $refs.results.children[highlightedIndex].getAttribute('data-result-name')
                }) : ''"
                    wire:model.debounce.300ms="search" type="search"
                    class="block w-full pl-10 border-gray-300 rounded-md focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 sm:text-sm sm:leading-5"
                    placeholder="{{ $placeholder }}"
                    type="search">
            </div>

            <div x-show="open"
                x-on:click.away="open = false"
                x-transition:enter=""
                x-transition:enter-start=""
                x-transition:enter-end=""
                x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute z-10 w-full mt-1 bg-white rounded-md shadow-lg">
                <ul
                    x-ref="results"
                    tabindex="-1" role="listbox"
                    aria-labelledby="listbox-label"
                    aria-activedescendant="listbox-item-3"
                    class="py-1 overflow-auto text-base leading-6 rounded-md shadow-xs max-h-60 focus:outline-none sm:text-sm sm:leading-5">
                    @forelse($results as $index => $result)
                    <li
                        wire:key="{{ $index }}"
                        data-result-id="{{ $result->id }}"
                        data-result-name="{{ $result->name }}"
                        x-on:click.stop="$dispatch('value-selected', {
                            id: {{ $result->id }},
                            name: '{{ addslashes($result->{$typeaheadText}) }}'
                        })"
                        class="relative py-2 pl-10 text-gray-900 cursor-default select-none pr-9 hover:bg-indigo-600 hover:text-white"
                        :class="{
                            'bg-indigo-400': {{ $index }} === highlightedIndex,
                            'text-white': {{ $index }} === highlightedIndex
                        }"
                        role="option">
                        <span class="block truncate">
                            {{ $result->id . ': ' }} {{ $result->{$typeaheadText} }}
                        </span>
                    </li>
                    @empty
                    <li
                        class="relative py-2 pl-10 text-gray-900 cursor-default select-none pr-9 hover:bg-indigo-600 hover:text-white">
                        No results found</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
