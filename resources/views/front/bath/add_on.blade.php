@include('front/layouts.header')

<div class="box shadow-mobile box-dyob-before" id="box">
    <div id="innerBox" class="row">
        <div class="column sidebar col-xs-0 col-sm-0 col-md-7 col-lg-7" id="sidebar">
            <a class="logo" href="https://paylessbathmakeover.com">
                <div class="logo-spacing">
                    <img class="logoBF" src="{{ url('assets/images/BFLogo.png') }}" alt="Blue logo - Bain Magique">
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
                <div class="Select-a-project-typ">
                    Add On<br><br>
                </div>
                <!-- <div class="Use-our-intuitive-an">
                    Use our fun and interactive tool to design your own bath. No interior design skills required.
                </div> -->
                <div class="projectDiv d-inline-flex">
                    <div class="project-p">
                        <div id="projectbathtub" class="Rectangle col-md-12 col-sm-12 col-xs-12">
                            <a href="{{ url('bath') }}">Bathtub</a>
                        </div>
                        <p>$1500</p>
                    </div>
                    <div class="project-p">
                        <div id="projectshower" class="Rectangle col-md-12 col-sm-12 col-xs-12">
                            <a href="{{ url('shower') }}">Corner</a>
                        </div>
                        <p>$1500</p>
                    </div>
                    <div class="project-p">
                        <div id="projectshower" class="Rectangle col-md-12 col-sm-12 col-xs-12">
                            <a href="{{ url('alcove-shower') }}">Alcove Shower</a>
                        </div>
                        <p>$1800</p>
                    </div>
                </div>
            </div>
            <div id="MovableTitle" class="Select-your MovableTitle">
                <hr>
            </div>
            <div id="DYOBItems" class="DYOBItems">
                <div class="row">
                    <div class="outer DYOBItems1" id="DYOBItems1">
                        <div class="MovableTitle1" class="DYOBColors Select-your">
                            <p class="titreSection firstTitreSection">Included - Sealand & Adhesive </p>
                        </div>
                        <!-- <div id="Available1" class="row Available-colors-for col-sm-12"> Included in Package : Tub</div> -->
                        <div id="dyob-item-mobile-wrapper1" class="dyob-item-mobile-wrapper row">
                            <div id="dyob-item-wrapper" class="col-lg-4 col-md-6 col-sm-6 internal dyob-item-wrapper">
                                <div id="" class="item internal" style="padding-left: 0">
                                    <img alt="Alcove" id="122" class="dyob-item item ImgDYOB ImgDYOB1 selectbath1" data-name="Alcove"
                                        src="{{ url('assets/images/Sealant-img.jpg') }}">
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class="col-lg-4 col-md-6 col-sm-6 internal dyob-item-wrapper">
                                <div id="" class="item internal" style="padding-left: 0">
                                    <img alt="Alcove" id="122" class="dyob-item item ImgDYOB ImgDYOB1 selectbath1" data-name="Alcove"
                                        src="{{ url('assets/images/adhesive.jpg') }}">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="outer DYOBItems1" id="DYOBItems1">
                        <div class="MovableTitle1" class="DYOBColors Select-your">
                            <p class="titreSection firstTitreSection">Solid Surface Base</p>
                        </div>
                        <div id="dyob-item-mobile-wrapper1" class="dyob-item-mobile-wrapper row">
                            <div id="dyob-item-wrapper" class="col-lg-6 col-md-6 col-sm-6 internal dyob-item-wrapper">
                                <div id="" class="item internal" style="padding-left: 0">
                                    <img alt="Alcove" id="122" class="dyob-item item ImgDYOB ImgDYOB1 selectbath1" data-name="White Solid Surface Shower Base 32-in W x 60-in L with Left or Right Drain - $330"
                                        src="{{ url('assets/images/surface-white.jpg') }}">
                                        <p>White Solid Surface Shower Base 32-in W x 60-in L with Left or Right Drain - $330</p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class="col-lg-6 col-md-6 col-sm-6 internal dyob-item-wrapper">
                                <div id="" class="item internal" style="padding-left: 0">
                                    <img alt="Alcove" id="122" class="dyob-item item ImgDYOB ImgDYOB1 selectbath1" data-name="36 in. L x 60 in. W Alcove Shower Pan Base with Center Drain in White - $480"
                                        src="{{ url('assets/images/showe-pan.jpg') }}">
                                        <p>36 in. L x 60 in. W Alcove Shower Pan Base with Center Drain in White - $480</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="outer DYOBItems1" id="DYOBItems1">
                        <div class="MovableTitle1" class="DYOBColors Select-your">
                            <p class="titreSection firstTitreSection">Seat</p>
                        </div>
                        <div id="dyob-item-mobile-wrapper1" class="dyob-item-mobile-wrapper row">
                            <div id="dyob-item-wrapper" class="col-lg-4 col-md-6 col-sm-6 internal dyob-item-wrapper">
                                <div id="" class="item internal" style="padding-left: 0">
                                    <img alt="Alcove" id="122" class="dyob-item item ImgDYOB ImgDYOB1 selectbath1" data-name="Alcove"
                                        src="{{ url('assets/images/seat-addon.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="outer DYOBItems1" id="DYOBItems1">
                        <div class="MovableTitle1" class="DYOBColors Select-your">
                            <p class="titreSection firstTitreSection">Handheld Plumbing Fixture</p>
                        </div>
                        <div id="dyob-item-mobile-wrapper1" class="dyob-item-mobile-wrapper row">
                            <div id="dyob-item-wrapper" class="col-lg-4 col-md-6 col-sm-6 internal dyob-item-wrapper">
                                <div id="" class="item internal" style="padding-left: 0">
                                    <img alt="Alcove" id="122" class="dyob-item item ImgDYOB ImgDYOB1 selectbath1" data-name="Chrome 1-Handle Bathtub and Shower Faucet with Valve - $269.34"
                                        src="{{ url('assets/images/handheld1.jpg') }}">
                                        <p>Chrome 1-Handle Bathtub and Shower Faucet with Valve - <span class="rate">$269.34</span></p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class="col-lg-4 col-md-6 col-sm-6 internal dyob-item-wrapper">
                                <div id="" class="item internal" style="padding-left: 0">
                                    <img alt="Alcove" id="122" class="dyob-item item ImgDYOB ImgDYOB1 selectbath1" data-name="Spotshield Stainless 1-Handle Bathtub and Shower Faucet with Valve $289.41"
                                        src="{{ url('assets/images/handheld2.jpg') }}">
                                        <p>Spotshield Stainless 1-Handle Bathtub and Shower Faucet with Valve - <span class="rate">$289.41</span></p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class="col-lg-4 col-md-6 col-sm-6 internal dyob-item-wrapper">
                                <div id="" class="item internal" style="padding-left: 0">
                                    <img alt="Alcove" id="122" class="dyob-item item ImgDYOB ImgDYOB1 selectbath1" data-name="Matte Black 1-Handle Bathtub and Shower Faucet with Valve - $288.83"
                                        src="{{ url('assets/images/handheld3.jpg') }}">
                                        <p>Matte Black 1-Handle Bathtub and Shower Faucet with Valve - <span class="rate">$288.83</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div id="DYOBColorsText1" class="row Available-colors-for col-sm-12 DYOBColors"
                        style="display:inline-flex;display:-webkit-inline-flex;">Select your color
                    </div>
                    <div id="DYOBColors3" class="DYOBColors" style="display:inline-flex;display:-webkit-inline-flex;">
                        <span class="text-center">
                            <i id="14step3" onclick="getImage6(this.id,3,111,'');"
                            class="inline  color-gary DYOBColorSelected"></i>
                            <p>Gray</p>
                        </span>
                        <span class="text-center">
                        <i id="16step3" onclick="getImage6(this.id,3,111, 'brushednickel');"
                            class="inline  color-almond "></i>
                            <p>Almond</p>
                        </span>
                        <span class="text-center">
                        <i id="17step3" onclick="getImage6(this.id,3,111, 'oilrubbedbronze');"
                            class="inline  color-white "></i>
                            <p>White</p>
                        </span>
                    </div>
                </div>
                <div class="row mt-3 mb-5">
                        <div class="col-lg-12 col-md-12 ButtonFirstNext mb-5">
                           <a class="mr-3" href="{{ url('bath/details') }}"><button id="nextButtonID" class="btn rect-button">Checkout Anyway</button></a>
                           <a href="{{ url('bath/details') }}"><button id="nextButtonID" class="btn rect-button">Next</button></a>
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
        </div>
    </div>
</div>
@include('front/layouts.footer')