@include('front/layouts.header')
<div class="box custom-box box-dyob-before {{$data['page_name_header']}}" id="box">
    <div id="innerBox" class="row">
        <div class="column sidebar col-xs-0 col-sm-0 col-md-7 col-lg-7" id="sidebar">
            <a class="logo" href="https://paylessbathmakeover.com">
                <div class="logo-spacing">
                    <img class="logoBF" src="<?php echo url('/')?>/assets/images/BFLogo.png"
                        alt="Blue logo - Bain Magique">
                </div>
                <!--<div class="Rectangle-logo"></div>-->
                <span class="fa fa-arrow-left fa-1" style="color: #00747e;" aria-hidden="true"></span> Back to website
            </a>
            <div class=" dyob-base">
                <div class="" id="DYOBResult">
                    <img src="<?php echo $data['step1']; ?>"
                        class="{{$data['page_name']}} {{ (!$data['step1']) ? 'multi_step':'' }}" id="step1"
                        alt="bathtub">
                    <div class="walls hideBathtub" id="step2-1">
                        <img src="<?php echo $data['step2']; ?>" class=" {{ (!$data['step2']) ? 'multi_step':'' }}"
                            alt="imgwalls">
                    </div>
                    <img src="<?php echo $data['step3']; ?>" class="fixtures {{ (!$data['step3']) ? 'multi_step':'' }}"
                        id="step3" alt="fixtures">
                    <img src="<?php echo $data['step4']; ?>"
                        class="cornershelf {{ (!$data['step4']) ? 'multi_step':'' }}" id="step4" alt="cornershelf">
                    <img src="<?php echo $data['step5']; ?>" class="soapdish {{ (!$data['step5']) ? 'multi_step':'' }}"
                        id="step5" alt="soapdish">
                    <img src="<?php echo $data['step6']; ?>" class="grabbar {{ (!$data['step6']) ? 'multi_step':'' }}"
                        id="step6" alt="grabbar">
                    <img src="<?php echo $data['step7']; ?>" class="doors {{ (!$data['step7']) ? 'multi_step':'' }}"
                        id="step7" alt="doors">
                </div>
            </div>
        </div>
        <div class="column main scrollable col-md-5 col-lg-5" id="main">
            <div id="projecttype" class="">
                <div class="Select-a-project-typ Select-your border-top">
                    Congratulations, you've designed your new bath!
                </div>
                <div class="normal-text-margin">
                    The next step towards your new bath is to request a free consultation.
                </div>
                <div class="projectDiv d-inline-flex">
                    <div class="project-p">
                        <div id="projectbathtub" class="Rectangle col-md-12 col-sm-12 col-xs-12">
                            <a href="#">Get a free consultation</a>
                        </div>
                    </div>
                    <div class="project-p">
                        <div id="projectbathtub" class="Rectangle col-md-12 col-sm-12 col-xs-12">
                            <a href="#">Save this design</a>
                        </div>
                    </div>
                    <div class="project-p">
                        <div id="projectshower" class="Rectangle col-md-12 col-sm-12 col-xs-12">
                            <a href="<?php echo ($data['page_name']== 'bathtub') ? '../bath':'../shower'; ?>">Start
                                over</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="out-div-col">
                <div class="share-with-friends" style="transition: all 0s ease 0s;">Share with friends</div>
                <div class="d-inline-flex" style="transition: all 0s ease 0s;">
                    <div class="SmallRectangle" style="transition: all 0s ease 0s;">
                        <span class="fa fa-envelope-o fa-1.75x" aria-hidden="true"
                            style="transition: all 0s ease 0s;"></span>
                    </div>
                    <div id="shareOnFacebookID" class="SmallRectangle " style="transition: all 0s ease 0s;">
                        <span class="fa fa-facebook  fa-1.75x" aria-hidden="true"
                            style="transition: all 0s ease 0s;"></span>
                    </div>
                    <div id="twitter-wjs" class="SmallRectangle twitter-share-button"
                        style="transition: all 0s ease 0s;">
                        <span class="fa fa-twitter fa-1.75x" aria-hidden="true"
                            style="transition: all 0s ease 0s;"></span>
                    </div>
                </div>
            </div>
            <div class="mainOuterDiv design-details">
                <div class="optDiv clearOptDiv">
                    <div class="mid-text">Design details</div>
                </div>
                <div class="table-col" id="DYOBItems">
                    <table class="table-DYOB">
                        <tbody>
                            <tr>
                                <td class="text-td-bold">Bathtub</td>
                            </tr>
                            <tr @if($data["step1"])>
							
                                <td class="text-td text-td-mod">Model: {{ isset($data['step1_name']) ? $data['step1_name']:'Aristocrat' }} </td>
                            </tr>
                            <tr>
                                <td class="text-td text-td-col">Color: Pearl</td>
                            </tr @endif>
                            <tr>
                                <td class="text-td-bold">Wall</td>
                            </tr>
                            <tr @if($data["step2"])>
                                <td class="text-td text-td-mod">Model: {{ ($data['step2_name']) ? $data['step2_name']:'' }}</td>
                            </tr>
                            <tr>
                                <td class="text-td text-td-col">Color: Pearl</td>
                            </tr @endif>
                            <tr>
                                <td class="text-td-bold">Faucet</td>
                            </tr>
                            <tr @if($data["step3"])>
                                <td class="text-td text-td-mod">Model: {{ ($data['step3_name']) ? $data['step3_name']:'' }}</td>
                            </tr>
                            <tr>
                                <td class="text-td text-td-col">Color: Brushed nickel</td>
                            </tr @endif>
                            <tr>
                                <td class="text-td-bold">Corner shelf</td>
                            </tr>
                            <tr @if($data["step4"])>
                                <td class="text-td text-td-mod">Model: {{ ($data['step4_name']) ? $data['step4_name']:'' }} </td>
                            </tr>
                            <tr>
                                <td class="text-td text-td-col">Color: Pearl</td>
                            </tr @endif>
                            <tr>
                                <td class="text-td-bold">Soap dish</td>
                            </tr>
                            <tr @if($data["step5"])>
                                <td class="text-td text-td-mod">Model: {{ ($data['step5_name']) ? $data['step5_name']:'' }}</td>
                            </tr>
                            <tr>
                                <td class="text-td text-td-col">Color: Pearl</td>
                            </tr @endif>
                            <tr>
                                <td class="text-td-bold">Grab bar</td>
                            </tr>
                            <tr @if($data["step6"])>
                                <td class="text-td text-td-mod">Model: {{ ($data['step6_name']) ? $data['step6_name']:'' }}</td>
                            </tr>
                            <tr>
                                <td class="text-td text-td-col">Color: Chrome</td>
                            </tr @endif>
                            <tr>
                                <td class="text-td-bold">Door and rod</td>
                            </tr>
                            <tr @if($data["step7"])>
                                <td class="text-td text-td-mod">Model: {{ ($data['step7_name']) ? $data['step7_name']:'' }} </td>
                            </tr>
                            <tr>
                                <td class="text-td text-td-col">Color: Chrome</td>
                            </tr @endif>
                        </tbody>
                    </table>
                </div>
                <div class="row mt-3 mb-5">
                    <div class="col-lg-2 col-md-1 ButtonFirstNext mb-5">
                        <button id="nextButtonID" class="btn rect-button buy_Now">Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="mainOuterDiv">
                <div class="optDiv clearOptDiv">
                    <div class="mid-text">Payment</div>
                </div>
                <div class="payment-getway" style="display: none;">
                    <div class="card_form_div">
                        <div class="payment">
                            <form id="general_form" method="post" action="{{ url('addmoney') }}"
                                novalidate="novalidate">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="form-group col-md-8 owner">
                                        <label for="owner">Card Holder's Name</label>
                                        <input type="text" name="name" class="form-control" id="owner" value=""
                                            placeholder="Enter card holder's name">
                                    </div>
                                    <div class="form-group col-md-4 CVV">
                                        <label for="cvc">CVC</label>
                                        <input type="text" name="cvc" class="form-control" id="cvv"
                                            placeholder="Enter CVV number">
                                    </div>
                                    <div class="form-group col-md-12" id="card-number-field">
                                        <label for="cardNumber">Card Number</label>
                                        <input type="text" maxlength="16" name="card_number" class="form-control"
                                            id="cardNumber" value="" placeholder="Enter 16 digits card number">
                                    </div>
                                    <div class="form-group col-md-6" id="expiration-date">
                                        <label>Expiration Month</label>
                                        <div>
                                            <select class="form-control" name="expire_month">
                                                <option value="01">January</option>
                                                <option value="02">February </option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6" id="expiration-date">
                                        <label>Expiration Year</label>
                                        <div>
                                            <select class="form-control" name="expire_year">
                                                <option value="20"> 2020</option>
                                                <option value="21"> 2021</option>
                                                <option value="22"> 2022</option>
                                                <option value="23"> 2023</option>
                                                <option value="24"> 2024</option>
                                                <option value="25"> 2025</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 pt-4 " id="credit_cards">
                                        <img src="<?php echo url('/')?>/assets/images/visa.jpg" id="visa">
                                        <img src="<?php echo url('/')?>/assets/images/mastercard.jpg" id="mastercard">
                                        <img src="<?php echo url('/')?>/assets/images/amex.jpg" id="amex">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <!-- input type="checkbox" name="save_card_deail" id="save_card_deail" value="1">
                              <label>Save Card Detail</label -->
                                        <button type="submit" class="button btn rect-button">Make Payment</button>
                                    </div>
                                </div>
                                <hr>
                                <!-- <div class="form-group" id="pay-now">
                            <button type="submit" class="btn btn-default" id="confirm-purchase">Confirm</button>
                          </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer" style="">
                <div class="DYOBDescription">
                    <div class="StepFormation" id="StepFormation">
                        <span id="crumb1" class="crumbs" data-tooltip="Bathtub" data-link="DYOBItems1"><i
                                class="fa fa-circle-o" aria-hidden="true"> </i></span>
                        <span id="crumb2" class="crumbs" data-tooltip="Wall" data-link="DYOBItems2"><i
                                class="fa fa-check" aria-hidden="true"> </i></span>
                        <span id="crumb3" class="crumbs" data-tooltip="Faucet" data-link="DYOBItems3"><i
                                class="fa fa-check" aria-hidden="true"> </i></span>
                        <span id="crumb4" class="crumbs" data-tooltip="Accessories" data-link="DYOBItems4"><i
                                class="fa fa-check" aria-hidden="true"> </i></span>
                        <span id="crumb7" class="crumbs crumbsactive" data-tooltip="Door" data-link="DYOBItems7"><i
                                class="fa fa-check" aria-hidden="true"> Door</i></span>
                        <span id="crumb8" class="crumbs" data-tooltip="Summary" data-link="DYOBItems8"><i
                                class="fa fa-circle-o" aria-hidden="true"> </i></span>
                    </div>
                </div>
            </footer>
        </div>

        @include('front/layouts.footer')