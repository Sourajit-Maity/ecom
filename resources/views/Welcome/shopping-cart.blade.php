<x-layouts.welcome-layout>
    <section class="my-shopping cmn-gap2">
        <div class="container">
            <h3>My Shopping Cart</h3>
            <div class="order-history">
                <div class="order-table">    
                        <livewire:cart.user-cart-list/>

                 <div class="row">
                    <div class="form-group col-md-6"; align="left">
                        <a href="{{ route('welcome.billing-address') }}"><input type="submit" value="${{$subtotal}}"> </a>
                    </div>

                    <div class="form-group col-md-6"; align="right">
                        <a href="{{ route('welcome.billing-address') }}"><input type="submit" value="Proceed To Checkout"> </a>
                    </div> 
                </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.welcome-layout>