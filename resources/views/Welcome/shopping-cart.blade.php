<x-layouts.welcome-layout>
    <section class="my-shopping cmn-gap2">
        <div class="container">
            <h3>My Shopping Cart</h3>
            <div class="order-history">
                <div class="order-table">    
                        <livewire:cart.user-cart-list/>

                    <div class="checkout">
                        <input type="submit" value="Proceed To Checkout"> 
                    </div>

                </div>
            </div>
        </div>
    </section>
</x-layouts.welcome-layout>