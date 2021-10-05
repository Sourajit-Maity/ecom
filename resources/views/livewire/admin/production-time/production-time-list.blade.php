<x-admin.table>
    {{-- <x-slot name="search">
        <x-admin.input type="search" class="form-control form-control-sm" wire:model.debounce.500ms="search"
            aria-controls="kt_table_1" id="generalSearch" />
    </x-slot> --}}
    <x-slot name="perPage">
        <label>Show
            <x-admin.dropdown wire:model="perPage" class="custom-select custom-select-sm form-control form-control-sm">
                @foreach ($perPageList as $page)
                    <x-admin.dropdown-item :value="$page['value']" :text="$page['text']" />
                @endforeach
            </x-admin.dropdown> entries
        </label>
    </x-slot>

    <x-slot name="thead">
        <tr role="row">
            <th tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 22%;"
                aria-sort="ascending" aria-label="Agent: activate to sort column descending">Production Time Name <i
                    class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('production_time_name')"></i>
            </th>
            <th tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 22%;"
                aria-sort="ascending" aria-label="Agent: activate to sort column descending">Production Time Price <i
                    class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('price')"></i>
            </th>
 
            <th class="align-center" rowspan="1" colspan="1" style="width: 20%;" aria-label="Actions">Actions</th>
        </tr>

        <tr class="filter">
            <th>
                <x-admin.input type="search" wire:model.defer="searchProductiontimename" placeholder="" autocomplete="off"
                    class="form-control-sm form-filter" />
            </th>
            <th>
                <x-admin.input type="search" wire:model.defer="searchProductiontimeprice" placeholder="" autocomplete="off"
                    class="form-control-sm form-filter" />
            </th>
          
            <th>
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-brand kt-btn btn-sm kt-btn--icon" wire:click="search">
                            <span>
                                <i class="la la-search"></i>
                                <span>Search</span>
                            </span>
                        </button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-secondary kt-btn btn-sm kt-btn--icon" wire:click="resetSearch">
                            <span>
                                <i class="la la-close"></i>
                                <span>Reset</span>
                            </span>
                        </button>
                    </div>
                </div>
            </th>
        </tr>
    </x-slot>

    <x-slot name="tbody">
        @forelse($productiontimes as $productiontime)
            <tr role="row" class="odd">
                <td class="sorting_1" tabindex="0">{{ $productiontime->production_time_name  }}</td>
                <td class="sorting_1" tabindex="0">{{ $productiontime->price  }}</td>
              
                <x-admin.td-action>
                    <a class="dropdown-item" href="{{ route('timeproduction.edit', ['timeproduction' => $productiontime->id]) }}"><i
                            class="la la-edit"></i> Edit</a>
                    <!-- <button href="#" class="dropdown-item" wire:click="deleteAttempt({{ $productiontime->id }})"><i
                            class="fa fa-trash"></i> Delete</button> -->
                </x-admin.td-action>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="align-center">No records available</td>
            </tr>
        @endforelse
    </x-slot>
    <x-slot name="pagination">
        {{ $productiontimes->links() }}
    </x-slot>
    <x-slot name="showingEntries">
        Showing {{ $productiontimes->firstitem() }} to {{ $productiontimes->lastitem() }} of {{ $productiontimes->total() }} entries
    </x-slot>
</x-admin.table>
