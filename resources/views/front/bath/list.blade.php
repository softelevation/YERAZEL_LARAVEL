@include('front/layouts.header')
<div class="box shadow-mobile box-dyob-before" id="box">
    <div id="innerBox" class="row">
        <div class="column sidebar col-xs-0 col-sm-0 col-md-7 col-lg-7" id="sidebar">
            <a class="logo" href="https://paylessbathmakeover.com">
                <div class="logo-spacing">
                    <img class="logoBF" src="assets/images/BFLogo.png" alt="Blue logo - Bain Magique">
                </div>
                <!--<div class="Rectangle-logo"></div>-->
                <span class="fa fa-arrow-left fa-1" style="color: #00747e;" aria-hidden="true"></span> Back to website
            </a>
            <div class=" dyob-base">
                <div class="" id="DYOBResult">
                    <img src="assets/images/selectbath1.jpg" class="bathtub multi_step" id="step1" alt="bathtub">
                    <div class="walls hideBathtub" id="step2-1">
                        <img src="assets/images/selectwall1.jpg" class="multi_step" id="step2" alt="imgwalls">
                    </div>
                    <img src="assets/images/selectfaucet1.jpg" class="fixtures multi_step" id="step3" alt="fixtures">
                    <img src="assets/images/selectaccessories1.jpg" class="cornershelf multi_step" id="step4"
                        alt="cornershelf">
                    <img src="assets/images/selectSoap1.jpg" class="soapdish multi_step" id="step5" alt="soapdish">
                    <img src="assets/images/selectgrab1.jpg" class="grabbar multi_step" id="step6" alt="grabbar">
                    <img src="assets/images/selectdoorrods1.jpg" class="doors multi_step" id="step7" alt="doors">
                </div>
            </div>
        </div>
        <div class="column main scrollable col-md-5 col-lg-5" id="main">
            <div id="projecttype" class="">
                <div class="Select-a-project-typ">
                    Select your project<br><br>
                </div>
                <div class="Use-our-intuitive-an">
                    Use our fun and interactive tool to design your own bath. No interior design skills required.
                </div>
                <div class="projectDiv d-inline-flex">
                    <div class="project-p">
                        <div id="projectbathtub" class="Rectangle col-md-12 col-sm-12 col-xs-12 @if($url_name == 'bath') active-class @endIf">
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
                            <p class="titreSection firstTitreSection">Select your bathtub </p>
                        </div>
                        <div id="Available1" class="row Available-colors-for col-sm-12"> Included in Package : Tub</div>
                        <div id="dyob-item-mobile-wrapper1" class="dyob-item-mobile-wrapper row">
                            <div id="dyob-item-wrapper" class="col-lg-6 col-md-6 col-sm-6 internal dyob-item-wrapper">
                                <div id="" class="item internal" style="padding-left: 0">
                                    <img alt="Alcove" id="122" class="dyob-item item ImgDYOB ImgDYOB1 selectbath1" data-name="29-in W x 60-in L White Rectangular Right-Hand or Left Hand Drain Alcove Bathtub"
                                        src="assets/images/tub1.jpg">
                                    <p class="itemTag">29-in W x 60-in L White Rectangular Right-Hand or Left Hand Drain
                                        Alcove Bathtub
                                    </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class="col-lg-6 col-md-6 col-sm-6 internal dyob-item-wrapper">
                                <div id="" class="item internal" style="padding-left: 0">
                                    <i onclick="clearSelection('step1')"
                                        class="fa fa-ban fa-flip-horizontal fa-3x dyob-item item Imgskip"></i>
                                    <p class="itemTag">Clear</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div id="DYOBColorsText1" class="row Available-colors-for col-sm-12 DYOBColors"
                            style="display:inline-flex;display:-webkit-inline-flex;">Select your color
                        </div>
                        <div id="DYOBColors1" class="DYOBColors"
                            style="display:inline-flex;display:-webkit-inline-flex;">
                            <i id="10step1" onclick="getImage(this.id,1,133,'');"
                                class="inline color10 DYOBColorSelected"></i>
                            <i id="12step1" onclick="getImage(this.id,1,133,'pearl');" class="inline color12 "></i>
                            <i id="11step1" onclick="getImage(this.id,1,133,'whitemarble');"
                                class="inline color11 "></i>
                            <i id="13step1" onclick="getImage(this.id,1,133,'ivorymarble');"
                                class="inline color13"></i>
                        </div>
                    </div> -->
                    <!-- <div id="DYOBColorsText1" class="row Available-colors-for col-sm-12 DYOBColors"
                        style="display:inline-flex;display:-webkit-inline-flex;">Select your Size</div>
                    <div id="DYOBSize1" class="DYOBSize" style="display:inline-flex;display:-webkit-inline-flex;">
                        <form>
                            <div class="form-check">
                                <input type="radio" name="tub_size" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">1X</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="tub_size" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">2X</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="tub_size" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">3X</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="tub_size" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">4X</label>
                            </div>
                        </form>
                    </div>
                </div> -->
                <div class="row">
                    <div class="panel panel-default panel-default-dyob">
                        <div class="panel-body panel-dyob">
                            <p class="did-you-know">DID YOU KNOW</p>
                            <p class="a-team" style="color: #00747e;">Installed in as little as one day</p>
                            <p class="b-team">Your new tub and walls are installed right over your old ones so there's
                                no demolition and it's installed in as little as one day!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="outer DYOBItems2" id="DYOBItems2">
                        <div id="MovableTitle2" class="DYOBColors Select-your">
                            <p class="titreSection">Select your wall</p>
                        </div>
                        <div id="Available2" class="row Available-colors-for col-sm-12 mt-0">
                            included In Package
                        </div>
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-lg-6 col-md-6 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="Gray Diamond"
                                        class="dyob-item item ImgDYOB ImgDYOB2 wall-pattren10white"
                                        src="assets/images/wall-pattren1.jpg">
                                    <p class="itemTag">Gray Diamond</p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class="col-lg-63 col-md-6 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="Almond 8X10"
                                        class="dyob-item item ImgDYOB ImgDYOB2 wall-pattren2whiteivorymarble"
                                        src="assets/images/wall-pattren2.jpg">
                                    <p class="itemTag">Almond 8X10</p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class="col-lg-63 col-md-6 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="White Subway"
                                        class="dyob-item item ImgDYOB ImgDYOB2 wall-pattren3white"
                                        src="assets/images/wall-pattren3.jpg">
                                    <p class="itemTag">White Subway</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="panel panel-default panel-default-dyob">
                        <div class="panel-body panel-dyob">
                            <p class="did-you-know">DID YOU KNOW</p>
                            <p class="a-team" style="color: #00747e;">Unique seamless walls</p>
                            <p class="b-team">Our unique one-piece seamless walls guarantee a watertight fit and are
                                grout-free making them easy to clean!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="outer DYOBItems2" id="DYOBItems2">
                        <div id="MovableTitle2" class="DYOBColors Select-your">
                            <p class="titreSection">Select your faucet</p>
                        </div>
                        <div id="Available2" class="row Available-colors-for col-sm-12 mt-0">
                            Tub Plumbing Fixtures-Included in Package
                        </div>
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-lg-3 col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB3 faucent1white" data-name="3-Handle 1-Spray Tub and Shower Faucet in Chrome (Valve Included)"
                                        src="assets/images/faucet-img1.jpg">
                                    <p class="itemTag">3-Handle 1-Spray Tub and Shower Faucet in Chrome (Valve Included)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="Available3" class="row Available-colors-for col-sm-12 mt-0">
                            Tub Plumbing Fixtures - Free Upgrade
                        </div>
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB3 faucent5white" data-name="Single-Handle 1-Spray 1.75 GPM Tub and Shower Faucet with Valve in Chrome (Valve Included)"
                                        src="assets/images/faucet-free-1.jpg">
                                    <p class="itemTag">Single-Handle 1-Spray 1.75 GPM Tub and Shower Faucet with Valve
                                        in Chrome (Valve Included)
                                    </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB3 faucent5brushednickel" data-name="Single-Handle 1-Spray 1.75 GPM Tub and Shower Faucet with Valve in Spot Resist Brushed Nickel (Valve Included)"
                                        src="assets/images/faucet-free-2.jpg">
                                    <p class="itemTag">Single-Handle 1-Spray 1.75 GPM Tub and Shower Faucet with Valve
                                        in Spot Resist Brushed Nickel (Valve Included)
                                    </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB3 faucent5oilrubbedbronze" data-name="Single-Handle 1-Spray 1.75 GPM Tub and Shower Faucet with Valve in Mediterranean Bronze (Valve Included)"
                                        src="assets/images/faucet-free-3.jpg">
                                    <p class="itemTag">Single-Handle 1-Spray 1.75 GPM Tub and Shower Faucet with Valve
                                        in Mediterranean Bronze (Valve Included)

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div id="Available4" class="row Available-colors-for col-sm-12 mt-0">
                            Tub Plumbing Fixtures - Add On/Upgrade Level 2
                        </div>

                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB3 faucent2white" data-name="Single-Handle 5-Spray Tub and Shower Faucet with H2Okinetic in Chrome (Valve Included)"
                                        src="assets/images/faucet-upgrade-1.jpg">
                                    <p class="itemTag">Single-Handle 5-Spray Tub and Shower Faucet with H2Okinetic in
                                        Chrome (Valve Included)

                                    </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB3 faucent2brushednickel" data-name="Single-Handle 5-Spray Tub and Shower Faucet with H2Okinetic in SpotShield Brushed Nickel (Valve Included)"
                                        src="assets/images/faucet-upgrade-2.jpg">
                                    <p class="itemTag">Single-Handle 5-Spray Tub and Shower Faucet with H2Okinetic in
                                        SpotShield Brushed Nickel (Valve Included)

                                    </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB3 faucent2oilrubbedbronze" data-name="Single-Handle 5-Spray Tub and Shower Faucet with H2Okinetic in Venetian Bronze (Valve Included)"
                                        src="assets/images/faucet-upgrade-3.jpg">
                                    <p class="itemTag">Single-Handle 5-Spray Tub and Shower Faucet with H2Okinetic in
                                        Venetian Bronze (Valve Included)


                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="outer DYOBItems2" id="DYOBItems2">
                        <div id="MovableTitle2" class="DYOBColors Select-your">
                            <p class="titreSection">Select your accessories</p>
                        </div>
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-lg-4 col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB4 corner1white" data-type="png" data-name='8" bright white polished corner shelf Bright White 1-Tier Ceramic Wall Mount Bathroom Shelf'
                                        src="assets/images/corner-shelves-1.jpg">
                                    <p class="itemTag">8" bright white polished corner shelf Bright White 1-Tier Ceramic
                                        Wall Mount Bathroom Shelf
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="outer DYOBItems2" id="DYOBItems2">
                        <div id="DYOBColorsText1" class="row Available-colors-for col-sm-12 DYOBColors"
                            style="display:inline-flex;display:-webkit-inline-flex;">Available Soap Dishes
                        </div>
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-lg-3 col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB5 soap1white" data-name="Oxford"
                                        src="assets/images/soap1.jpg">
                                    <p class="itemTag">Oxford</p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class="col-lg-3 col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB5 soap2white" data-name="Allegra"
                                        src="assets/images/soap2.jpg">
                                    <p class="itemTag">Allegra</p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class="col-lg-3 col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB5 soap3white" data-name="Oxford"
                                        src="assets/images/soap3.jpg">
                                    <p class="itemTag">Oxford</p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class="col-lg-3 col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB5 soap4white" data-name="Bali"
                                        src="assets/images/soap4.jpg">
                                    <p class="itemTag">Bali</p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class="col-lg-3 col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB5 soap5white" data-name="Bali"
                                        src="assets/images/soap5.jpg">
                                    <p class="itemTag">Bali</p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper"
                                class="col-lg-3 col-md-4 col-sm-6 internal equel-height dyob-item-wrapper">
                                <div id="" class="item internal" style="padding-left: 0">
                                    <i onclick="clearSelection('step5')"
                                        class="fa fa-ban fa-flip-horizontal fa-3x dyob-item item Imgskip"></i>
                                    <p class="itemTag">Clear</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div id="DYOBColorsText1" class="row Available-colors-for col-sm-12 DYOBColors"
                        style="display:inline-flex;display:-webkit-inline-flex;">Select your color
                    </div>
                    <div id="DYOBColors3" class="DYOBColors" style="display:inline-flex;display:-webkit-inline-flex;">
                        <i id="14step3" onclick="getImage5(this.id,3,111, '');"
                            class="inline color14 DYOBColorSelected"></i>
                        <i id="16step3" onclick="getImage5(this.id,3,111, 'whitemarble');" class="inline color16 "></i>
                        <i id="17step3" onclick="getImage5(this.id,3,111, 'ivorymarble');" class="inline color17 "></i>
                    </div>
                    <div id="DYOBColorsText1" class="row Available-colors-for col-sm-12 DYOBColors"
                        style="display:inline-flex;display:-webkit-inline-flex;">Select your Size</div>
                    <div id="DYOBSize1" class="DYOBSize" style="display:inline-flex;display:-webkit-inline-flex;">
                        <form>
                            <div class="form-check">
                                <input type="radio" name="dishes_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">1X</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="dishes_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">2X</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="dishes_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">3X</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="dishes_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">4X</label>
                            </div>
                        </form>
                    </div>
                </div>-->
                <div class="row">
                    <div class="outer DYOBItems2" id="DYOBItems2">
                        <p class="titreSection firstTitreSection">Select your grab bars
                        </p>
                        <div id="Available2" class="row Available-colors-for col-sm-12 mt-0">
                            Accessories : Grab Bar - Included in Package
                        </div>

                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-lg-3 col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB6 grab1white" data-name="18-in Stainless Steel Wall Mount (ADA Compliant) Grab Bar"
                                        src="assets/images/grab-bar-l-1.jpg">
                                    <p class="itemTag">18-in Stainless Steel Wall Mount (ADA Compliant) Grab Bar
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div id="Available2" class="row Available-colors-for col-sm-12 mt-0">
                            Accessories : Grab Bar - Add On/Upgrade Level 2
                        </div>
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB6 grab3white" data-name="Traditional 18-in Polished Stainless Wall Mount Grab Bar"
                                        src="assets/images/grab-bar-upgrade-1.jpg">
                                    <p class="itemTag">Traditional 18-in Polished Stainless Wall Mount Grab Bar </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB6 grab3brushednickel" data-name="Traditional 18-in Vibrant Brushed Nickel Wall Mount Grab Bar"
                                        src="assets/images/grab-bar-upgrade-2.jpg">
                                    <p class="itemTag">Traditional 18-in Vibrant Brushed Nickel Wall Mount Grab Bar</p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB6 grab3oilrubbedbronze" data-name="Traditional 18-in Oil-Rubbed Bronze Wall Mount (ADA Compliant) Grab Bar"
                                        src="assets/images/grab-bar-upgrade-3.jpg">
                                    <p class="itemTag">Traditional 18-in Oil-Rubbed Bronze Wall Mount (ADA Compliant)
                                        Grab Bar </p>
                                </div>
                            </div>

                        </div>


                        <div id="Available2" class="row Available-colors-for col-sm-12 mt-0">
                            Accessories : Grab Bar - Add On/Upgrade Level 3
                        </div>
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB6 grab4brushedstainlesssteel" data-name="18-in Chrome Wall Mount (ADA Compliant) Grab Bar"
                                        src="assets/images/grab-bar-upgrad3-1.jpg">
                                    <p class="itemTag">18-in Chrome Wall Mount (ADA Compliant) Grab Bar </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB6 grab4brushednickel" data-name="18-in Brushed Nickel Wall Mount (ADA Compliant) Grab Bar"
                                        src="assets/images/grab-bar-upgrad3-2.jpg">
                                    <p class="itemTag">18-in Brushed Nickel Wall Mount (ADA Compliant) Grab Bar
                                    </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB6 grab4oilrubbedbronze" data-name="18-in Oil Rubbed Bronze Wall Mount (ADA Compliant) Grab Bar"
                                        src="assets/images/grab-bar-upgrad3-3.jpg">
                                    <p class="itemTag">18-in Oil Rubbed Bronze Wall Mount (ADA Compliant) Grab Bar
                                    </p>
                                </div>
                            </div>

                        </div>


                        <div id="Available2" class="row Available-colors-for col-sm-12 mt-0">
                        Add On Upgrade Level 3
                        </div>
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB6 grabringchrome" data-type="png" data-name="2-in-1 13.25 in. x 1.25 in. Shower and Tub Grab Ring with Grips in Chrome -"
                                        src="assets/images/grab-bars-1.jpg">
                                    <p class="itemTag">2-in-1 13.25 in. x 1.25 in. Shower and Tub Grab Ring with Grips
                                        in Chrome -
                                    </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB6 grabringbrushednickel" data-type="png" data-name="13.25 in. x 1.25 in. Shower and Tub Grab Ring with Grips in Brushed Nickel"
                                        src="assets/images/grab-bars-2.jpg">
                                    <p class="itemTag">13.25 in. x 1.25 in. Shower and Tub Grab Ring with Grips in
                                        Brushed Nickel
                                    </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB6 grabringoilrubbedbronze" data-type="png" data-name="2-in-1 13.25 in. x 1.25 in. Shower and Tub Grab Ring with Grips in Oil Rubbed Bronze"
                                        src="assets/images/grab-bars-3.jpg">
                                    <p class="itemTag">2-in-1 13.25 in. x 1.25 in. Shower and Tub Grab Ring with Grips
                                        in Oil Rubbed Bronze

                                    </p>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
                <div class="row">
                    <div class="panel panel-default panel-default-dyob">
                        <div class="panel-body panel-dyob">
                            <p class="did-you-know">DID YOU KNOW</p>
                            <p class="a-team" style="color: #00747e;">30+ years of experience</p>
                            <p class="b-team">Payless Bath Makeover makes it easy to update your tub and with 30+ years of
                                experience we offer a lifetime warranty!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="outer DYOBItems2" id="DYOBItems2">
                        <div id="MovableTitle2" class="DYOBColors Select-your">
                            <p class="titreSection">Select your Curtain Rod</p>
                        </div>
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-lg-3 col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB7 roads4white" data-name="43 in. to 72 in. Steel Adjustable Shower Curtain Rod in Chrome"
                                        src="assets/images/roads-latest-1.jpg">
                                    <p class="itemTag">43 in. to 72 in. Steel Adjustable Shower Curtain Rod in Chrome
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div id="Available2" class="row Available-colors-for col-sm-12 mt-0">
                        Add On Upgrade
                        </div>
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB7 roads4white" data-name="44-in to 72-in Brushed Nickel Tension Single Straight Shower Rod"
                                        src="assets/images/roads-latest-l-1.jpg">
                                    <p class="itemTag">44-in to 72-in Brushed Nickel Tension Single Straight Shower Rod

                                    </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB7 roads4brushednickel"
                                        src="assets/images/roads-latest-l-2.jpg">
                                    <p class="itemTag">44-in to 72-in Brushed Nickel Tension Single Straight Shower Rod

                                    </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB7 roads3oilrubbedbronze" data-name="44-in to 72-in Old World Bronze Tension Single Straight Shower Rod"
                                        src="assets/images/roads-latest-l-3.jpg">
                                    <p class="itemTag">44-in to 72-in Old World Bronze Tension Single Straight Shower
                                        Rod

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div id="Available2" class="row Available-colors-for col-sm-12 mt-0">
                        Add On Upgrade Level 2
                        </div>
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB7 roads3white" data-name="59-in to 60-in Chrome Fixed Single Curve Shower Rod"
                                        src="assets/images/roads-latest-l2-1.jpg">
                                    <p class="itemTag">59-in to 60-in Chrome Fixed Single Curve Shower Rod


                                    </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="59-in to 60-in Brushed Nickel Fixed Single Curve Shower Rod"
                                        class="dyob-item item ImgDYOB ImgDYOB7 roads3brushednickel" src="assets/images/
roads-latest-l2-3.jpg">
                                    <p class="itemTag">59-in to 60-in Brushed Nickel Fixed Single Curve Shower Rod


                                    </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="59-in to 60-in Old World Bronze Fixed Single Curve Shower Rod"
                                        class="dyob-item item ImgDYOB ImgDYOB7 roads3oilrubbedbronze" src="assets/images/
roads-latest-l2-2.jpg">
                                    <p class="itemTag">59-in to 60-in Old World Bronze Fixed Single Curve Shower Rod


                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="row">
                    <div class="outer DYOBItems2" id="DYOBItems2">
                        <div id="MovableTitle2" class="DYOBColors Select-your">
                            <p class="titreSection">Included Sealant & Adhesive</p>
                        </div>
                        <!-- <div id="Available2" class="row Available-colors-for col-sm-12 mt-0">
                            Included Sealant & Adhesive
                        </div> -->
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-lg-3 col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB7 roads1white"
                                        src="assets/images/Sealant-img.jpg">
                                    <p class="itemTag">Sealant
                                    </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class="col-lg-3 col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB7 roads1white"
                                        src="assets/images/Adhesive-img.jpg">
                                    <p class="itemTag">Adhesive
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 mb-5">
                    <div class="col-lg-2 col-md-1 ButtonFirstNext mb-5">
                        <a href="add-one"><button id="nextButtonID" class="btn rect-button"
                                disabled>Next</button></a>
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