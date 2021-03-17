@include('front/layouts.header')

<div class="box shadow-mobile" id="box">
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
                            <a href="{{ route('bath')}}">Bathtub</a>
                        </div>
                        <p>$1500</p>
                    </div>
                    <div class="project-p">
                        <div id="projectshower" class="Rectangle col-md-12 col-sm-12 col-xs-12">
                            <a href="{{ route('shower')}}">Corner</a>
                        </div>
                        <p>$1500</p>
                    </div>
                    <div class="project-p">
                        <div id="projectshower" class="Rectangle col-md-12 col-sm-12 col-xs-12">
                            <a href="{{ route('alcove-shower')}}">Alcove Shower</a>
                        </div>
                        <p>$1800</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('front/layouts.footer')