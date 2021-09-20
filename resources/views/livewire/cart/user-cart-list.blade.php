<x-admin.table>

    <x-slot name="perPage">
    </x-slot>

    <x-slot name="thead">
        <tr role="row">
        <th tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 22%;"
                aria-sort="ascending" aria-label="Agent: activate to sort column descending">Product Image <i
                    class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('product_name')"></i>
            </th>
            <th tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 22%;"
                aria-sort="ascending" aria-label="Agent: activate to sort column descending">Product Name <i
                    class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('product_name')"></i>
            </th>
            <th tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 22%;"
                aria-sort="ascending" aria-label="Agent: activate to sort column descending"> Product Category <i
                    class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('product_category')"></i>
            </th>
            <th tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 22%;"
                aria-sort="ascending" aria-label="Agent: activate to sort column descending">Product Price <i
                    class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('price')"></i>
            </th>
            <th tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 22%;"
                aria-sort="ascending" aria-label="Agent: activate to sort column descending">Quantity <i
                    class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('quantity')"></i>
            </th>
            <th tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 22%;"
                aria-sort="ascending" aria-label="Agent: activate to sort column descending">Total Price <i
                    class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('product_category')"></i>
            </th>
              <th class="align-center" rowspan="1" colspan="1" style="width: 20%;" aria-label="Actions">Actions</th>
        </tr>
      
        
    </x-slot>

    <x-slot name="tbody">
        @forelse($usercarts as $usercart)
       
            <tr role="row" class="odd">
                <td class="sorting_1" tabindex="0">{{ $usercart->product->product_photo_path  }}</td>
                <td class="sorting_1" tabindex="0">{{ $usercart->product->product_name  }}</td>
                <td class="sorting_1" tabindex="0">{{ $usercart->product->product_category  }}</td>
                <td class="sorting_1" tabindex="0">{{ $usercart->productprice->price  }}</td>
                <td class="sorting_1" tabindex="0">{{ $usercart->quantity  }}               
                <!-- <livewire:cart-update :usercart="$usercart" :key="$usercart->id"/> -->
                </td>
                <td class="sorting_1" tabindex="0">{{ $usercart->productprice->price  }}</td>
                <td>
                <!-- <a class="dropdown-item" href="{{ route('cart.destroy', ['cart' => $usercart->id]) }}"><i
                            class="la la-edit"></i> Delete</a> -->
                    <button href="#" class="dropdown-item" wire:click="removeCart({{ $usercart->id }})"><i class="fa fa-trash" ></i></button>
                </td>              
            </tr>
        @empty
            <tr>
                <td colspan="4" class="align-center">No records available</td>
            </tr>
        @endforelse
    </x-slot>
  
   
    <x-slot name="pagination">
        {{ $usercarts->links() }}
    </x-slot>
    <x-slot name="showingEntries">
    <button href="#" class="px-6 py-2 text-red-800 bg-red-300" wire:click.prevent="clearAllCart"><i class="fa fa-trash" ></i> Remove All Cart Items</button>
    <!-- <a href="#" class="px-6 py-2 text-red-800 bg-red-300" wire:click.prevent="clearAllCart">Remove All Cart Items</a> -->
    </x-slot>
</x-admin.table>
