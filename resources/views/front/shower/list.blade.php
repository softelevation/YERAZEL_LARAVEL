@include('front/layouts.header')
<div class="box shadow-mobile box-dyob-before-shower" id="box">
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
                    <img src="assets/images/showertub-whitemarble.jpg" class="shower" id="step1" alt="bathtub">
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
                        <p>$1500</p>
                    </div>
                </div>
            </div>
            <div id="MovableTitle" class="Select-your MovableTitle">
                <hr>
            </div>
            <div id="DYOBItems" class="DYOBItems">



                <div class="row">
                    <div class="outer DYOBItems2" id="DYOBItems2">
                        <div id="MovableTitle2" class="DYOBColors Select-your">
                            <p class="titreSection">Select your Pan</p>
                        </div>
                        <div id="Available2" class="row Available-colors-for col-sm-12 mt-0">
                            Pan - Included in Package
                        </div>
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="ALCOVE CORNER"
                                        class="dyob-item item ImgDYOB ImgDYOB2 wall-pattren1white"
                                        src="assets/images/pan-1.jpg">
                                    <p class="itemTag">ALCOVE CORNER</p>
                                </div>
                            </div>

                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="NEO ANGLE"
                                        class="dyob-item item ImgDYOB ImgDYOB2 wall-pattren1white"
                                        src="assets/images/pan-2.jpg">
                                    <p class="itemTag">NEO ANGLE</p>
                                </div>
                            </div>

                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="ROUND CORNER"
                                        class="dyob-item item ImgDYOB ImgDYOB2 wall-pattren1white"
                                        src="assets/images/pan-3.jpg">
                                    <p class="itemTag">ROUND CORNER </p>
                                </div>
                            </div>


                        </div>

                        <div id="Available2" class="row Available-colors-for col-sm-12 mt-0">
                            Pan Size Selection :Alcove Corner
                        </div>
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="ALCOVE 32x32 White Acrylic Shower Base 35.875-in W x 35.875-in L with Center Drain"
                                        class="dyob-item item ImgDYOB ImgDYOB2 wall-pattren1white"
                                        src="assets/images/pan-4.jpg">
                                    <p class="itemTag"> ALCOVE 32x32
                                        White Acrylic Shower Base 35.875-in W x 35.875-in L with Center Drain
                                    </p>
                                </div>
                            </div>

                            <div id="dyob-item-wrapper" class="col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="ALCOVE 36x36 White Acrylic Shower Base 35.875-in W x 35.875-in L with Center Drain"
                                        class="dyob-item item ImgDYOB ImgDYOB2 wall-pattren1white"
                                        src="assets/images/pan-5.jpg">
                                    <p class="itemTag">ALCOVE 36x36
                                        White Acrylic Shower Base 35.875-in W x 35.875-in L with Center Drain
                                    </p>
                                </div>
                            </div>




                        </div>



                        <div id="Available2" class="row Available-colors-for col-sm-12 mt-0">
                            Pan Size Selection :Alcove Corner Upgrade Level 2
                        </div>
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="42 in. W x 42 in. D Center Drain Single Threshold Shower Base in White"
                                        class="dyob-item item ImgDYOB ImgDYOB2 wall-pattren1white"
                                        src="assets/images/pan-6.jpg">
                                    <p class="itemTag"> 42 in. W x 42 in. D Center Drain Single Threshold Shower Base in
                                        White

                                    </p>
                                </div>
                            </div>

                            <div id="dyob-item-wrapper" class="col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="48 in. x 32 in. Acrylic White, Single-Threshold, Center Drain, Shower Base"
                                        class="dyob-item item ImgDYOB ImgDYOB2 wall-pattren1white"
                                        src="assets/images/pan-7.jpg">
                                    <p class="itemTag">48 in. x 32 in. Acrylic White, Single-Threshold, Center Drain,
                                        Shower Base

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div id="Available2" class="row Available-colors-for col-sm-12 mt-0">
                            Pan Size Selection :Neo Angle ANGLE CORNER
                        </div>
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB2 wall-pattren1white" data-name="NEO ANGLE- 36x36 36 in. x 36 in. Acrylic White, Single-Threshold, Center Drain, Neo-angle Shower Base"
                                        src="assets/images/pan-8.jpg">
                                    <p class="itemTag"> NEO ANGLE- 36x36
                                         36 in. x 36 in. Acrylic White, Single-Threshold, Center Drain, Neo-angle Shower
                                        Base
                                    </p>
                                </div>
                            </div>

                            <div id="dyob-item-wrapper" class="col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112"
                                        class="dyob-item item ImgDYOB ImgDYOB2 wall-pattren1white" data-name="Neo Angle 38x38 38 in. x 38 in. Neo-Angle Shower Tray in White "
                                        src="assets/images/pan-9.jpg">
                                    <p class="itemTag">Neo Angle 38x38
                                        38 in. x 38 in. Neo-Angle Shower Tray in White 


                                    </p>
                                </div>
                            </div>

                        </div>


                        <div id="Available2" class="row Available-colors-for col-sm-12 mt-0">
                            Pan Size Selection :Neo Angle ANGLE CORNER Upgrade Level 2
                        </div>
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="42-in L x 42-in W White Acrylic Neo-Angle Corner Shower Base"
                                        class="dyob-item item ImgDYOB ImgDYOB2 wall-pattren1white"
                                        src="assets/images/pan-10.jpg">
                                    <p class="itemTag"> 42-in L x 42-in W White Acrylic Neo-Angle Corner Shower Base


                                    </p>
                                </div>
                            </div>


                        </div>


                        <div id="Available2" class="row Available-colors-for col-sm-12 mt-0">
                            Pan Size Selection : Round Corner
                        </div>
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="ROUND CORNER 36x36 White Acrylic Shower Base 35.875-in W x 35.875-in L with Center Drain"
                                        class="dyob-item item ImgDYOB ImgDYOB2 wall-pattren1white"
                                        src="assets/images/pan-11.jpg">
                                    <p class="itemTag"> ROUND CORNER 36x36
                                        White Acrylic Shower Base 35.875-in W x 35.875-in L with Center Drain



                                    </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class="col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="ROUND CORNER 38x38 38-in L x 38-in W White Acrylic Round Corner Shower Base"
                                        class="dyob-item item ImgDYOB ImgDYOB2 wall-pattren1white"
                                        src="assets/images/pan-12.jpg">
                                    <p class="itemTag"> ROUND CORNER 38x38
                                        38-in L x 38-in W White Acrylic Round Corner Shower Base
                                    </p>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>






                <div class="row">
                    <div class="outer DYOBItems1" id="DYOBItems1">
                        <div class="MovableTitle1" class="DYOBColors Select-your">
                            <p class="titreSection firstTitreSection">Shower base</p>
                        </div>
                    </div>
                    <div class="row">
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
                                class="inline color13 "></i>
                        </div>
                    </div>
                    <div id="DYOBColorsText1" class="row Available-colors-for col-sm-12 DYOBColors"
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
                </div>
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
                            Available wall patterns
                        </div>
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="Gray Diamond"
                                        class="dyob-item item ImgDYOB ImgDYOB2 wall-pattren10white"
                                        src="assets/images/wall-pattren1.jpg">
                                    <p class="itemTag">Gray Diamond</p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="Almond 8X10"
                                        class="dyob-item item ImgDYOB ImgDYOB2 wall-pattren2whiteivorymarble"
                                        src="assets/images/wall-pattren2.jpg">
                                    <p class="itemTag">Almond 8X10</p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
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
                <!-- <div class="row">
                    <div id="DYOBColorsText1" class="row Available-colors-for col-sm-12 DYOBColors"
                        style="display:inline-flex;display:-webkit-inline-flex;">Select your color
                    </div>
                    <div id="DYOBColors1" class="DYOBColors" style="display:inline-flex;display:-webkit-inline-flex;">
                        <i id="10step1" onclick="getImage2(this.id,1,133,'');"
                            class="inline color10 DYOBColorSelected"></i>
                        <i id="12step1" onclick="getImage2(this.id,1,133,'pearl');" class="inline color12 "></i>
                        <i id="11step1" onclick="getImage2(this.id,1,133,'whitemarble');" class="inline color11 "></i>
                        <i id="13step1" onclick="getImage2(this.id,1,133,'ivorymarble');" class="inline color13 "></i>
                    </div>
                    <div id="DYOBColorsText1" class="row Available-colors-for col-sm-12 DYOBColors"
                        style="display:inline-flex;display:-webkit-inline-flex;">Select your Size</div>
                    <div id="DYOBSize1" class="DYOBSize" style="display:inline-flex;display:-webkit-inline-flex;">
                        <form>
                            <div class="form-check">
                                <input type="radio" name="wall_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">1X</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="wall_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">2X</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="wall_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">3X</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="wall_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">4X</label>
                            </div>
                        </form>
                    </div>
                </div> -->
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
                            <p class="titreSection">Select your Shower Plumbing</p>
                        </div>
                        <div id="Available2" class="row Available-colors-for col-sm-12 mt-0">
                            Select your Shower Plumber
                        </div>
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-lg-3 col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="Single-Handle 1-Spray Shower Faucet in Chrome (Valve Included)"
                                        class="dyob-item item ImgDYOB ImgDYOB3 showerhandlewhite" data-type="png"
                                        src="assets/images/shower-plumber.jpg">
                                    <p class="itemTag">Single-Handle 1-Spray Shower Faucet in Chrome (Valve Included)

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div id="Available3" class="row Available-colors-for col-sm-12 mt-0">
                        Select your Shower Fixture - Free Upgrade
                        </div>
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="Single-Handle 3-Spray Shower Faucet in Chrome (Valve Included)"
                                        class="dyob-item item ImgDYOB ImgDYOB3 faucent5white"
                                        src="assets/images/shower-plumber-1.jpg">
                                    <p class="itemTag">Single-Handle 3-Spray Shower Faucet in Chrome (Valve Included)

                                    </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="Single-Handle 3-Spray Shower Faucet in Brushed Nickel (Valve Included)"
                                        class="dyob-item item ImgDYOB ImgDYOB3 faucent5brushednickel"
                                        src="assets/images/shower-plumber-2.jpg">
                                    <p class="itemTag">Single-Handle 3-Spray Shower Faucet in Brushed Nickel (Valve
                                        Included)

                                    </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="Single-Handle 3-Spray Shower Faucet in Legacy Bronze (Valve Included)"
                                        class="dyob-item item ImgDYOB ImgDYOB3 faucent5oilrubbedbronze"
                                        src="assets/images/shower-plumber-3.jpg">
                                    <p class="itemTag">Single-Handle 3-Spray Shower Faucet in Legacy Bronze (Valve
                                        Included)


                                    </p>
                                </div>
                            </div>
                        </div>

                        <div id="Available3" class="row Available-colors-for col-sm-12 mt-0">
                        Add On Upgrade
                        </div>
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="Single-Handle 1-Spray Shower Faucet with Valve in Chrome (Valve Included)"
                                        class="dyob-item item ImgDYOB ImgDYOB3 sprayshowerlong1" data-type="png"
                                        src="assets/images/shower-plumber-4.jpg">
                                    <p class="itemTag">Single-Handle 1-Spray Shower Faucet with Valve in Chrome (Valve
                                        Included)
                                    </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="Single-Handle 1-Spray Shower Faucet with Valve in Brushed Nickel (Valve Included)"
                                        class="dyob-item item ImgDYOB ImgDYOB3 sprayshowerlong2" data-type="png"
                                        src="assets/images/shower-plumber-5.jpg">
                                    <p class="itemTag">Single-Handle 1-Spray Shower Faucet with Valve in Brushed Nickel
                                        (Valve Included)
                                    </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="Single-Handle 1-Spray Shower Faucet with Valve in Oil Rubbed Bronze (Valve Included)"
                                        class="dyob-item item ImgDYOB ImgDYOB3 sprayshowerlong3" data-type="png"
                                        src="assets/images/shower-plumber-6.jpg">
                                    <p class="itemTag">Single-Handle 1-Spray Shower Faucet with Valve in Oil Rubbed
                                        Bronze (Valve Included)
                                    </p>
                                </div>
                            </div>
                        </div>








                    </div>
                </div>
                <!-- <div class="row">
                    <div id="DYOBColorsText1" class="row Available-colors-for col-sm-12 DYOBColors"
                        style="display:inline-flex;display:-webkit-inline-flex;">Select your color
                    </div>
                    <div id="DYOBColors3" class="DYOBColors" style="display:inline-flex;display:-webkit-inline-flex;">
                        <i id="14step3" onclick="getImage3(this.id,3,111,'');"
                            class="inline color14 DYOBColorSelected"></i>
                        <i id="16step3" onclick="getImage3(this.id,3,111, 'brushednickel');"
                            class="inline color16 "></i>
                        <i id="17step3" onclick="getImage3(this.id,3,111, 'oilrubbedbronze');"
                            class="inline color17 "></i>
                    </div>
                    <div id="DYOBColorsText1" class="row Available-colors-for col-sm-12 DYOBColors"
                        style="display:inline-flex;display:-webkit-inline-flex;">Select your Size</div>
                    <div id="DYOBSize1" class="DYOBSize" style="display:inline-flex;display:-webkit-inline-flex;">
                        <form>
                            <div class="form-check">
                                <input type="radio" name="faucet_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">1X</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="faucet_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">2X</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="faucet_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">3X</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="faucet_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">4X</label>
                            </div>
                        </form>
                    </div>
                </div> -->
                <div class="row">
                    <div class="outer DYOBItems2" id="DYOBItems2">
                        <div id="MovableTitle2" class="DYOBColors Select-your">
                            <p class="titreSection">Select your grab bars</p>
                        </div>
                        <div id="Available2" class="row Available-colors-for col-sm-12 mt-0">
                            Accessories : Corner Sheleves Add on level-2
                        </div>
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-lg-3 col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="Traditional 8.92-in Polished Chrome Wall Mount Grab Bar"
                                        class="dyob-item item ImgDYOB ImgDYOB6 grab1white"
                                        src="assets/images/grab-bars-corner-1.jpg">
                                    <p class="itemTag">Traditional 8.92-in Polished Chrome Wall Mount Grab Bar
                                        <straong> - $45.65/ea </strong>

                                    </p>
                                </div>
                            </div>

                            <div id="dyob-item-wrapper" class="col-lg-3 col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="8.92-in Venetian Bronze Wall Mount Grab Bar"
                                        class="dyob-item item ImgDYOB ImgDYOB6 grab1white"
                                        src="assets/images/grab-bars-corner-2.jpg">
                                    <p class="itemTag">8.92-in Venetian Bronze Wall Mount Grab Bar

                                        <straong> - $78.33/ea </strong>

                                    </p>
                                </div>
                            </div>


                        </div>



                        <div id="Available2" class="row Available-colors-for col-sm-12 mt-0">
                            Accessories : Corner Grab Bar - Add On/Upgrade Level 2
                        </div>

                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="2-in-1 13.25 in. x 1.25 in. Shower and Tub Grab Ring with Grips in Chrome -"
                                        class="dyob-item item ImgDYOB ImgDYOB6 grabringchrome" data-type="png"
                                        src="assets/images/grab-bars-1.jpg">
                                    <p class="itemTag">2-in-1 13.25 in. x 1.25 in. Shower and Tub Grab Ring with Grips
                                        in Chrome -
                                    </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="13.25 in. x 1.25 in. Shower and Tub Grab Ring with Grips in Brushed Nickel"
                                        class="dyob-item item ImgDYOB ImgDYOB6 grabringbrushednickel" data-type="png"
                                        src="assets/images/grab-bars-2.jpg">
                                    <p class="itemTag">13.25 in. x 1.25 in. Shower and Tub Grab Ring with Grips in
                                        Brushed Nickel
                                    </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="2-in-1 13.25 in. x 1.25 in. Shower and Tub Grab Ring with Grips in Oil Rubbed Bronze"
                                        class="dyob-item item ImgDYOB ImgDYOB6 grabringoilrubbedbronze" data-type="png"
                                        src="assets/images/grab-bars-3.jpg">
                                    <p class="itemTag">2-in-1 13.25 in. x 1.25 in. Shower and Tub Grab Ring with Grips
                                        in Oil Rubbed Bronze

                                    </p>
                                </div>
                            </div>

                        </div>




                    </div>
                </div>
                <!-- <div class="row">
                    <div id="DYOBColorsText1" class="row Available-colors-for col-sm-12 DYOBColors"
                        style="display:inline-flex;display:-webkit-inline-flex;">Select your color
                    </div>
                    <div id="DYOBColors3" class="DYOBColors" style="display:inline-flex;display:-webkit-inline-flex;">
                        <i id="14step3" onclick="getImage4(this.id,3,111,'');"
                            class="inline color14 DYOBColorSelected"></i>
                        <i id="16step3" onclick="getImage4(this.id,3,111, 'whitemarble');" class="inline color16 "></i>
                        <i id="17step3" onclick="getImage4(this.id,3,111, 'ivorymarble');" class="inline color17 "></i>
                    </div>
                    <div id="DYOBColorsText1" class="row Available-colors-for col-sm-12 DYOBColors"
                        style="display:inline-flex;display:-webkit-inline-flex;">Select your Size</div>
                    <div id="DYOBSize1" class="DYOBSize" style="display:inline-flex;display:-webkit-inline-flex;">
                        <form>
                            <div class="form-check">
                                <input type="radio" name="accessories_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">1X</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="accessories_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">2X</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="accessories_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">3X</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="accessories_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">4X</label>
                            </div>
                        </form>
                    </div>
                </div> -->
                <div class="row">
                    <div class="outer DYOBItems2" id="DYOBItems2">
                        <div id="MovableTitle2" class="DYOBColors Select-your">
                            <p class="titreSection">Select your corner shelves</p>
                        </div>
                        <div id="DYOBColorsText1" class="row Available-colors-for col-sm-12 DYOBColors"
                            style="display:inline-flex;display:-webkit-inline-flex;">
                            Available corner shelves Included in Package
                        </div>

                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-lg-4 col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name='8" bright white polished corner shelf Bright White 1-Tier Ceramic Wall Mount Bathroom Shelf'
                                        class="dyob-item item ImgDYOB ImgDYOB4 corner-shelves-bg" data-type="png"
                                        src="assets/images/corner-shelves-1.jpg">
                                    <p class="itemTag">8" bright white polished corner shelf Bright White 1-Tier Ceramic
                                        Wall Mount Bathroom Shelf
                                    </p>
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
                </div>
                <div class="row">
                    <div class="outer DYOBItems2" id="DYOBItems2">
                        <div id="MovableTitle2" class="DYOBColors Select-your">
                            <p class="titreSection">Select your Curtain Rods</p>
                        </div>
                        <!-- <div id="Available2" class="row Available-colors-for col-sm-12 mt-0">
                            Available Curtain Rods Included in Package
                        </div> -->
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-lg-3 col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="43 in. to 72 in. Steel Adjustable Shower Curtain Rod in Chrome"
                                        class="dyob-item item ImgDYOB ImgDYOB7 roads4white"
                                        src="assets/images/roads-latest-1.jpg">
                                    <p class="itemTag">43 in. to 72 in. Steel Adjustable Shower Curtain Rod in Chrome
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div id="Available2" class="row Available-colors-for col-sm-12 mt-0">
                        Add On Upgrade Level 1
                        </div>

                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="44-in to 72-in Brushed Nickel Tension Single Straight Shower  Rod"
                                        class="dyob-item item ImgDYOB ImgDYOB7 roads4white"
                                        src="assets/images/roads-latest-l-1.jpg">
                                    <p class="itemTag">44-in to 72-in Brushed Nickel&nbsp;Tension Single Straight Shower
                                        Rod

                                    </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="44-in to 72-in Brushed Nickel Tension Single Straight Shower Rod"
                                        class="dyob-item item ImgDYOB ImgDYOB7 roads4brushednickel"
                                        src="assets/images/roads-latest-l-2.jpg">
                                    <p class="itemTag">44-in to 72-in Brushed Nickel Tension Single Straight Shower Rod

                                    </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class=" col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="44-in to 72-in Old World Bronze Tension Single Straight Shower Rod"
                                        class="dyob-item item ImgDYOB ImgDYOB7 roads3oilrubbedbronze"
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
                                    <img alt="4x4 tile pattern" id="112" data-name="59-in to 60-in Chrome Fixed Single Curve Shower Rod"
                                        class="dyob-item item ImgDYOB ImgDYOB7 roads3white"
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
                                        class="dyob-item item ImgDYOB ImgDYOB7 roads3oilrubbedbronze " src="assets/images/
roads-latest-l2-2.jpg">
                                    <p class="itemTag">59-in to 60-in Old World Bronze Fixed Single Curve Shower Rod


                                    </p>
                                </div>
                            </div>
                        </div>






                    </div>
                </div>
                <!-- <div class="row">
                    <div id="DYOBColorsText1" class="row Available-colors-for col-sm-12 DYOBColors"
                        style="display:inline-flex;display:-webkit-inline-flex;">Select your color
                    </div>
                    <div id="DYOBColors3" class="DYOBColors" style="display:inline-flex;display:-webkit-inline-flex;">
                        <i id="14step3" onclick="getImage6(this.id,3,111,'');"
                            class="inline color14 DYOBColorSelected"></i>
                        <i id="16step3" onclick="getImage6(this.id,3,111, 'brushednickel');"
                            class="inline color16 "></i>
                        <i id="17step3" onclick="getImage6(this.id,3,111, 'oilrubbedbronze');"
                            class="inline color17 "></i>
                    </div>
                    <div id="DYOBColorsText1" class="row Available-colors-for col-sm-12 DYOBColors"
                        style="display:inline-flex;display:-webkit-inline-flex;">Select your Size</div>
                    <div id="DYOBSize1" class="DYOBSize" style="display:inline-flex;display:-webkit-inline-flex;">
                        <form>
                            <div class="form-check">
                                <input type="radio" name="bars_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">1X</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="bars_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">2X</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="bars_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">3X</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="bars_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">4X</label>
                            </div>
                        </form>
                    </div>
                </div> -->
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
                            <p class="titreSection">Select your Sealant & Adhesive</p>
                        </div>
                        <div id="Available2" class="row Available-colors-for col-sm-12 mt-0">
                            Included Sealant & Adhesive
                        </div>
                        <div class="dyob-item-mobile-wrapper clearfix" id="dyob-item-mobile-wrapper2">
                            <div id="dyob-item-wrapper" class="col-lg-3 col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="Sealant"
                                        class="dyob-item item ImgDYOB ImgDYOB7 roads1white"
                                        src="assets/images/Sealant-img.jpg">
                                    <p class="itemTag">Sealant
                                    </p>
                                </div>
                            </div>
                            <div id="dyob-item-wrapper" class="col-lg-3 col-md-4 col-sm-6 internal dyob-item-wrapper">
                                <div id="112" class="item internal" style="padding-left: 0">
                                    <img alt="4x4 tile pattern" id="112" data-name="Adhesive"
                                        class="dyob-item item ImgDYOB ImgDYOB7 roads1white"
                                        src="assets/images/Adhesive-img.jpg">
                                    <p class="itemTag">Adhesive
                                    </p>
                                </div>
                            </div>



                        </div>


                    </div>
                </div>
                <!-- <div class="row">
                    <div id="DYOBColorsText1" class="row Available-colors-for col-sm-12 DYOBColors"
                        style="display:inline-flex;display:-webkit-inline-flex;">Select your color
                    </div>
                    <div id="DYOBColors3" class="DYOBColors" style="display:inline-flex;display:-webkit-inline-flex;">
                        <i id="14step3" onclick="getImage7(this.id,3,111,'oilrubbedbronze');"
                            class="inline color14 DYOBColorSelected"></i>
                        <i id="16step3" onclick="getImage7(this.id,3,111, 'brushednickel');"
                            class="inline color16 "></i>
                        <i id="17step3" onclick="getImage7(this.id,3,111, 'oilrubbedbronze');"
                            class="inline color17 "></i>
                    </div>
                    <div id="DYOBColorsText1" class="row Available-colors-for col-sm-12 DYOBColors"
                        style="display:inline-flex;display:-webkit-inline-flex;">Select your Size</div>
                    <div id="DYOBSize1" class="DYOBSize" style="display:inline-flex;display:-webkit-inline-flex;">
                        <form>
                            <div class="form-check">
                                <input type="radio" name="rods_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">1X</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="rods_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">2X</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="rods_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">3X</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="rods_name" class="form-check-input" id="">
                                <label class="form-check-label" for="exampleCheck1">4X</label>
                            </div>
                        </form>
                    </div>
                </div> -->
                <div class="row mt-3 mb-5">
                    <div class="col-lg-2 col-md-1 ButtonFirstNext mb-5">
                        <a href="shower/detail"><button id="nextButtonID" class="btn rect-button">Next</button></a>
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