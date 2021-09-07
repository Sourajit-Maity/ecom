<x-layouts.welcome-layout>

    <section class="design-page-sec cmn-gap2">
        <div class="container">
            <div class="order-tab">
                <ul>
                    <li class="active">
                        <a href="{{route('welcome.design-tool')}}">
                            <span>1</span>
                            <span>DESIGN YOUR BADGE</span> 
                        </a>
                    </li>

                    <li>
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

            <div class="row design-page-row">
                <div class="col-lg-7 design-page-left">
                    <div class="design-tab">
                        <ul>
                            <li class="visited"><a href="#url">
                                <span><img src="{{asset('welcome_assets/images/design-list01.svg')}}" alt=""></span>
                                <span>Size/Shape</span>
                            </a></li>

                            <li class="visited"><a href="{{route('welcome.design-page-background')}}">
                                <span><img src="{{asset('welcome_assets/images/design-list02.svg')}}" alt=""></span>
                                <span>Background</span>
                            </a></li>

                            <li class="visited"><a href="{{route('welcome.design-page-border')}}">
                                <span><img src="{{asset('welcome_assets/images/design-list03.svg')}}" alt=""></span>
                                <span>Border</span>
                            </a></li>

                            <li class="active"><a href="{{route('welcome.design-page-fastener')}}">
                                <span><img src="{{asset('welcome_assets/images/design-list04.svg')}}" alt=""></span>
                                <span>Fastener</span>
                            </a></li>

                            <li><a href="#url">
                                <span><img src="{{asset('welcome_assets/images/design-list05.svg')}}" alt=""></span>
                                <span>Dome</span>
                            </a></li>
                        </ul>
                    </div>

                    <div class="your-text">
                        <div class="form-input">
                            <textarea placeholder="Your Text"></textarea>
                            <a href="#url"><img src="{{asset('welcome_assets/images/close.svg')}}" alt=""></a>
                        </div>

                        <span class="right">1</span>
                        <span class="bottom">3</span>
                    </div>

                    <div class="text-content">
                        <p>
                            <span>White</span> boxes around logos will not be printed on colored backgrounds.
                            You can click <span>Add Text</span> up to (4) times for multiple lines of text.
                        </p>

                        <ul>
                            <li><a class="cmn-btn" href="#url">Finished Designing</a></li>
                            <li><h3>Price: <span>$9.99 each</span></h3></li>
                        </ul>

                    </div>

                </div>
                <div class="col-lg-5 design-page-right">
                    <div class="add-list">
                        <ul>
                            <li><a href="#url">+ Add Text</a></li>
                            <li><a href="#url">+ Add Logo</a></li>
                            <li><a href="#url">+  Add Clipart</a></li>
                        </ul>
                    </div>

                    <div class="size-sec">
                        <div class="border-option">
                           <a href="#uel">
                            FASTENER OPTIONS
                           </a>
                        </div>
                        <div class="matirial-list fastener-list">
                            <ul>
                                <li>
                                    <div class="form_input_radio">
                                        <label>
                                            <input type="radio" name="name">
                                            <span><img src="{{asset('welcome_assets/images/f-image01.png')}}" alt=""></span>
                                        </label>
                                        <span>Magnetic</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="form_input_radio">
                                        <label>
                                            <input type="radio" name="name">
                                            <span><img src="{{asset('welcome_assets/images/f-image02.png')}}" alt=""></span>
                                        </label>
                                        <span>Swivel clip</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="form_input_radio">
                                        <label>
                                            <input type="radio" name="name">
                                            <span><img src="{{asset('welcome_assets/images/f-image03.png')}}" alt=""></span>
                                        </label>
                                        <span>Military post</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="form_input_radio">
                                        <label>
                                            <input type="radio" name="name">
                                            <span><img src="{{asset('welcome_assets/images/f-image04.png')}}" alt=""></span>
                                        </label>
                                        <span>Pin fastener</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="form_input_radio">
                                        <label>
                                            <input type="radio" name="name">
                                            <span><img src="{{asset('welcome_assets/images/f-image05.png')}}" alt=""></span>
                                        </label>
                                        <span>Pocket clip</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>


            <div class="Product-sec">
                <div class="table-sec">
                    <table>
                        <tr>
                            <th colspan="2">Quantity Price</th>
                            <th colspan="7">*These prices will update automatically based on the design you choose above!</th>
                        </tr>
                        <tr>
                            <td>QTY:</td>
                            <td>1-10</td>
                            <td>11-20</td>
                            <td>21-30</td>
                            <td>31-50</td>
                            <td>51-100</td>
                            <td>101-250</td>
                            <td>251-1000</td>
                            <td>1000+</td>
                        </tr>
                        <tr>
                            <td>Price:</td>
                            <td>$9.99</td>
                            <td>$9.59</td>
                            <td>$9.39</td>
                            <td>$9.24</td>
                            <td>$8.89</td>
                            <td>$8.49</td>
                            <td>$8.24</td>
                            <td>$7.49</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>


</x-layouts.welcome-layout>