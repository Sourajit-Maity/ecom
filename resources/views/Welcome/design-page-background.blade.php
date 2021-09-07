<x-layouts.welcome-layout>

    <section class="design-page-sec cmn-gap2">
        <div class="container">
            <div class="order-tab">
                <ul>
                    <li class="active">
                        <a href="#url">
                            <span>1</span>
                            <span>DESIGN YOUR BADGE</span> 
                        </a>
                    </li>

                    <li>
                        <a href="#url">
                            <span>2</span>
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

                            <li class="active"><a href="#url">
                                <span><img src="{{asset('welcome_assets/images/design-list02.svg')}}" alt=""></span>
                                <span>Background</span>
                            </a></li>

                            <li><a href="#url">
                                <span><img src="{{asset('welcome_assets/images/design-list03.svg')}}" alt=""></span>
                                <span>Border</span>
                            </a></li>

                            <li><a href="#url">
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
                        <div class="ourwork-tab">
                            <ul class="resp-tabs-list hor_1 e-tab">
                                <li class="resp-tab-active">MATERIAL</li>           
                                <li>COLORS</li>            
                                <li>CUSTOM</li>                     
                            </ul>
                            <div class="resp-tabs-container hor_1">
                                <div class="content resp-tab-content-active">
                                    <div class="matirial-list">
                                        <ul>
                                            <li>
                                                <div class="form_input_radio">
                                                    <label>
                                                        <input type="radio" name="name">
                                                        <span><img src="{{asset('welcome_assets/images/mat01.png')}}" alt=""></span>
                                                    </label>
                                                    <span>White - Plastic</span>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form_input_radio">
                                                    <label>
                                                        <input type="radio" name="name">
                                                        <span><img src="{{asset('welcome_assets/images/mat02.png')}}" alt=""></span>
                                                    </label>
                                                    <span>Gold - Plastic</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form_input_radio">
                                                    <label>
                                                        <input type="radio" name="name">
                                                        <span><img src="{{asset('welcome_assets/images/mat03.png')}}" alt=""></span>
                                                    </label>
                                                    <span>Silver - Plastic</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form_input_radio">
                                                    <label>
                                                        <input type="radio" name="name">
                                                        <span><img src="{{asset('welcome_assets/images/mat04.png')}}" alt=""></span>
                                                    </label>
                                                    <span>Gold Metallic</span>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form_input_radio">
                                                    <label>
                                                        <input type="radio" checked name="name">
                                                        <span><img src="{{asset('welcome_assets/images/mat05.png')}}" alt=""></span>
                                                    </label>
                                                    <span>Silver Metallic</span>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form_input_radio">
                                                    <label>
                                                        <input type="radio" name="name">
                                                        <span><img src="{{asset('welcome_assets/images/mat06.png')}}" alt=""></span>
                                                    </label>
                                                    <span>Wood Grain</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                  
                                <div class="content">

                                 <div class="color-picker">
                                     <img src="{{asset('welcome_assets/images/color-picker.png')}}" alt="">
                                 </div>

                                </div>
                                <div class="content">
                                    <div class="matirial-list">
                                        <ul>
                                            <li>
                                                <div class="form_input_radio">
                                                    <label>
                                                        <input type="radio" name="name">
                                                        <span><img src="{{asset('welcome_assets/images/custom01.png')}}" alt=""></span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form_input_radio">
                                                    <label>
                                                        <input type="radio" name="name">
                                                        <span><img src="{{asset('welcome_assets/images/custom02.png')}}" alt=""></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form_input_radio">
                                                    <label>
                                                        <input type="radio" name="name">
                                                        <span><img src="{{asset('welcome_assets/images/custom03.png')}}" alt=""></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form_input_radio">
                                                    <label>
                                                        <input type="radio" name="name">
                                                        <span><img src="{{asset('welcome_assets/images/custom04.png')}}" alt=""></span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form_input_radio">
                                                    <label>
                                                        <input type="radio" name="name">
                                                        <span><img src="{{asset('welcome_assets/images/custom05.png')}}" alt=""></span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form_input_radio">
                                                    <label>
                                                        <input type="radio" name="name">
                                                        <span><img src="{{asset('welcome_assets/images/custom06.png')}}" alt=""></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form_input_radio">
                                                    <label>
                                                        <input type="radio" name="name">
                                                        <span><img src="{{asset('welcome_assets/images/custom07.png')}}" alt=""></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form_input_radio">
                                                    <label>
                                                        <input type="radio" name="name">
                                                        <span><img src="{{asset('welcome_assets/images/custom08.png')}}" alt=""></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form_input_radio">
                                                    <label>
                                                        <input type="radio" name="name">
                                                        <span><img src="{{asset('welcome_assets/images/custom09.png')}}" alt=""></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form_input_radio">
                                                    <label>
                                                        <input type="radio" name="name">
                                                        <span><img src="{{asset('welcome_assets/images/custom10.png')}}" alt=""></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form_input_radio">
                                                    <label>
                                                        <input type="radio" name="name">
                                                        <span><img src="{{asset('welcome_assets/images/custom11.png')}}" alt=""></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form_input_radio">
                                                    <label>
                                                        <input type="radio" name="name">
                                                        <span><img src="{{asset('welcome_assets/images/custom12.png')}}" alt=""></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form_input_radio">
                                                    <label>
                                                        <input type="radio" name="name">
                                                        <span><img src="{{asset('welcome_assets/images/custom13.png')}}" alt=""></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form_input_radio">
                                                    <label>
                                                        <input type="radio" name="name">
                                                        <span><img src="{{asset('welcome_assets/images/custom14.png')}}" alt=""></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form_input_radio">
                                                    <label>
                                                        <input type="radio" name="name">
                                                        <span><img src="{{asset('welcome_assets/images/custome15.png')}}" alt=""></span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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