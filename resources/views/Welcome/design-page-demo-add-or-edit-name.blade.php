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

            <div class="demo-cont demo-cont-2">
                <p>
                    Please add all the names and quantities you want for your name badges. (All name badges will keep the same design formatting) <br>
                    **You will not see a proof of all the individual name badges. <br>
                    ***We will match all the additional names to your first design and make sure all the text fits properly.
                </p>
            </div>

            <div class="demo-table">
                <form>
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Field 1</th>
                            <th>Quantity</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="form-input">
                                    <input type="text" placeholder="Lorem Ipsum">
                                </div>
                            </td>
                            <td>
                                <div class="quantity">
                                    <div class="quantity-wrap">
                                        <button type="button">-</button>
                                        <input type="text" placeholder="1">
                                        <button type="button">+</button>
                                    </div>
                                  <a class="cmn-btn" href="#url">DONE</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <div class="form-input">
                                    <input type="text" placeholder="Lorem Ipsum">
                                </div>
                            </td>
                            <td>
                                <div class="quantity">
                                    <div class="quantity-wrap">
                                        <button type="button">-</button>
                                        <input type="text" placeholder="1">
                                        <button type="button">+</button>
                                    </div>
                                  <div class="delete-edit">
                                    <a class="cmn-btn" href="#url"><img src="{{asset('welcome_assets/images/edit-icon.svg')}}" alt=""></a>
                                    <a class="cmn-btn" href="#url"><img src="{{asset('welcome_assets/images/delete-icon.svg')}}" alt=""></a>
                                </div>
                                </div>
                                
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <div class="form-input">
                                    <input type="text" placeholder="Lorem Ipsum">
                                </div>
                            </td>
                            <td>
                                <div class="total">
                                    <input type="text" placeholder="1">
                                    <a class="cmn-btn" href="#url">+ Add Name</a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <div class="complete-btn">
                                    <a class="cmn-btn" href="#url">GO BACK</a>
                                    <a class="cmn-btn" href="#url">finished</a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

</x-layouts.welcome-layout>