<x-admin.table>

    <x-slot name="perPage">
    </x-slot>

    <x-slot name="thead">
        <tr role="row">
            <th tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 25%;" aria-sort="ascending" aria-label="Agent: activate to sort column descending">Product <i class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('image')"></i>
            </th>
            <th tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 22%;" aria-sort="ascending" aria-label="Agent: activate to sort column descending">Description <i class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('title')"></i>
            </th>
            <th tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 20%;" aria-sort="ascending" aria-label="Agent: activate to sort column descending">Names <i class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('names')"></i>
            </th>
            <th tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 12%;" aria-sort="ascending" aria-label="Agent: activate to sort column descending">Quantity <i class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('quantity')"></i>
            </th>

            <th tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 12%;" aria-sort="ascending" aria-label="Agent: activate to sort column descending"> Price <i class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('payment_price')"></i>
            </th>
            <th tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 18%;" aria-sort="ascending" aria-label="Agent: activate to sort column descending"> Status <i class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('status')"></i>
            </th>

            <!-- <th class="align-center" rowspan="1" colspan="1" style="width: 20%;" aria-label="Actions">Actions</th> -->
        </tr>


    </x-slot>

    <x-slot name="tbody">
        @forelse($usercarts as $usercart)

        <tr role="row" class="odd custom-tr-color">

            <td>
                <div class="image-wraper">
                    <div class="order-image">
                        <img src="{{ $usercart->image }}" class="shadow" alt="">
                    </div>
                </div>
            </td>
            <td class="sorting_1" tabindex="0">{{ $usercart->title  }}</td>
            <td class="sorting_1" tabindex="0"></td>
            <td class="sorting_1" tabindex="0"></td>
            <td class="sorting_1" tabindex="0"></td>
            <td class="sorting_1" tabindex="0"></td>
            <!-- <td> </td> -->
            
        </tr>
        @empty
        <tr>
            <td colspan="4" class="align-center">No records available</td>
        </tr>
        @endforelse
        @forelse($usercarts as $usercart)

        <tr role="row" class="odd">

            <td>
                <h4>Namebadge</h4>
            </td>
            <td class="sorting_1" tabindex="0">--</td>
            <td class="sorting_1" tabindex="0">{{ $usercart->names  }}</td>
            <td class="sorting_1" tabindex="0">{{ $usercart->quantity  }}</td>
            <td class="sorting_1" tabindex="0">${{ $usercart->payment_price  }}</td>
            <td class="sorting_1" tabindex="0">{{ $usercart->status  }}</td>
            <!-- <td> </td> -->
            
        </tr>
        @empty
        <tr>
            <td colspan="4" class="align-center">No records available</td>
        </tr>
        @endforelse
         @forelse($usercartdetails as $usercartdetail)
        <tr role="row" class="odd">

            <td>
                <h4>Namebadge</h4>
            </td>
            <td class="sorting_1" tabindex="0">--</td>
            <td class="sorting_1" tabindex="0">{{ $usercartdetail->name  }}</td>
            <td class="sorting_1" tabindex="0">{{ $usercartdetail->quantity  }}</td>
            <td class="sorting_1" tabindex="0">${{ $usercartdetail->price  }}</td>
           
            @if( $usercartdetail->status == 1 )
                <td class="sorting_1" tabindex="0">Processing</td>
            @elseif( $orderdetail->status == 2 )
                <td class="sorting_1" tabindex="0">Accepted</td>
            @elseif( $orderdetail->status == 4 )
                <td class="sorting_1" tabindex="0">Delivered</td>
            @else
                <td class="sorting_1" tabindex="0">Cancel</td>
            @endif 
             <!-- <td>
                 <button href="#" class="dropdown-item" wire:click="removeCart({{ $usercart->id }})"><i class="fa fa-trash" ></i></button>
            </td>  -->
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
    </x-slot>
</x-admin.table>
<style>
.custom-tr-color{
    background: aliceblue;
    font-weight: 900;
}
</style>