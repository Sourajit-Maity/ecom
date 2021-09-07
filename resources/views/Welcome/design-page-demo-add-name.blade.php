<x-layouts.welcome-layout>

    <section class="design-page-sec cmn-gap2">
        <div class="container">
            <div class="order-tab">
                <ul>
                    <li>
                        <a href="{{route('welcome.design-tool')}}">
                            <span>1</span>
                            <span>DESIGN YOUR BADGE</span> 
                        </a>
                    </li>

                    <li class="active">
                        <a href="{{route('welcome.design-page-demo-add-name')}}">                            <span>2</span>
                            <span>ADD NAMES</span> 
                        </a>
                    </li>

                    <li>
                        <a href="#url">
                            <span>3</span>
                            <span>COMPLETE ORDER</span> 
                        </a>
                    </li>

                </ul>
            </div>

            <div class="demo-cont">
                <p>
                    If you require additional badges with different names, click the "Add or edit names"
                    button.If you do not need badges with different names, click "I am finished adding 
                    names" to continue your order.
                </p>
            </div>

            <div class="your-text-box">
                <h3>Your Text</h3>
            </div>

            <div class="button-section">
                <ul>
                    <li><a class="cmn-btn" href="#url">Go back and edit badge</a></li>
                    <li><a class="cmn-btn" href="{{route('welcome.design-page-demo-add-or-edit-name')}}">Add or edit names</a></li>
                    <li><a class="cmn-btn" href="#url">I am finished adding names</a></li>
                </ul>
            </div>

        </div>
    </section>


</x-layouts.welcome-layout>