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
                aria-sort="ascending" aria-label="Agent: activate to sort column descending">Product Name <i
                    class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('product_name')"></i>
            </th>
            <th tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 12%;"
                aria-sort="ascending" aria-label="Agent: activate to sort column descending"> Product Price <i
                    class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('price')"></i>
            </th>
            <th tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 18%;"
                aria-sort="ascending" aria-label="Agent: activate to sort column descending">Product Price range <i
                    class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('price_range')"></i>
            </th>
            <th tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 15%;"
                aria-sort="ascending" aria-label="Agent: activate to sort column descending">Product Category <i
                    class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('product_category')"></i>
            </th>
           
            <th class="align-center" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 15%;"
                aria-label="Status: activate to sort column ascending">Status</th>
                <th class="align-center" rowspan="1" colspan="1" style="width: 20%;" aria-label="Actions">Actions</th>
        </tr>

        <tr class="filter">
            <th>
                <x-admin.input type="search" wire:model.defer="searchProductname" placeholder="" autocomplete="off"
                    class="form-control-sm form-filter" />
            </th>
            <th>
                <x-admin.input type="search" wire:model.defer="searchPrice" placeholder="" autocomplete="off"
                    class="form-control-sm form-filter" />
            </th>
            <th>
                <x-admin.input type="search" wire:model.defer="searchPricerange" placeholder="" autocomplete="off"
                    class="form-control-sm form-filter" />
            </th>
            <th>
                <x-admin.input type="search" wire:model.defer="searchProductcategory" placeholder="" autocomplete="off"
                    class="form-control-sm form-filter" />
            </th>
          
            <th>
                <select class="form-control form-control-sm form-filter kt-input" wire:model.defer="searchStatus"
                    title="Select" data-col-index="2">
                    <option value="-1">Select One</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
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
        @forelse($productprices as $product)
            <tr role="row" class="odd">
                <td class="sorting_1" tabindex="0">{{ $product->product->product_name  }}</td>
                <td class="sorting_1" tabindex="0">{{ $product->price  }}</td>
                @if($product->price_range =='500') 
                <td class="sorting_1" tabindex="0">More Than Five Hundred</td>
                @elseif($product->price_range =='200-499') 
                <td class="sorting_1" tabindex="0">Two Hundred to Four Hundred Ninty Nine</td>
                @elseif($product->price_range =='101-199') 
                <td class="sorting_1" tabindex="0">Hundred One to One Hundred Ninty Nine</td>
                @elseif($product->price_range =='51-100') 
                <td class="sorting_1" tabindex="0">FiftyOne to Hundred</td>
                @elseif($product->price_range =='26-50') 
                <td class="sorting_1" tabindex="0">TweentySix to Fifty</td>
                @elseif($product->price_range =='16-25') 
                <td class="sorting_1" tabindex="0">Sixteen to TweentyFive</td>
                @elseif($product->price_range =='6-15') 
                <td class="sorting_1" tabindex="0">Six to Fifteen</td>
                @elseif($product->price_range =='1-5') 
                <td class="sorting_1" tabindex="0">One to Five</td>
                @endif
                <td class="sorting_1" tabindex="0">{{ $product->product_category  }}</td>

                
                <td class="align-center"><span
                        class="kt-badge  kt-badge--{{ $product->active == 1 ? 'success' : 'warning' }} kt-badge--inline kt-badge--pill cursor-pointer"
                        wire:click="changeStatusConfirm({{ $product->id }})">{{ $product->active == 1 ? 'Active' : 'Inactive' }}</span>
                </td>
                <x-admin.td-action>
                    <a class="dropdown-item" href="{{ route('product-price.edit', ['product_price' => $product->id]) }}"><i
                            class="la la-edit"></i> Edit</a>
                    <button href="#" class="dropdown-item" wire:click="deleteAttempt({{ $product->id }})"><i
                            class="fa fa-trash"></i> Delete</button>
                </x-admin.td-action>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="align-center">No records available</td>
            </tr>
        @endforelse
    </x-slot>
    <x-slot name="pagination">
        {{ $productprices->links() }}
    </x-slot>
    <x-slot name="showingEntries">
        Showing {{ $productprices->firstitem() }} to {{ $productprices->lastitem() }} of {{ $productprices->total() }} entries
    </x-slot>
</x-admin.table>
