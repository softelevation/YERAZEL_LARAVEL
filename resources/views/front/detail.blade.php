@include('front/layouts.header')
<?php //echo "<pre>";print_r($response);die; ?>

<div class="detail-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="/" class="back-to-listings"></a>
                <div class="main-col-top d-flex justify-content-between">
                    <div class="propertyLocation">
                        <h2>840 Green <span class="property-badge">$ {{@$response['CurrentPrice']}} Rebate</span></h2>
                        <span><a href="#location" class="listing-address"><i
                                    class="fa fa-map-marker"></i>{{@$response['City']}} /
                                {{@$response['StateOrProvince']}}
                                {{@$response['PostalCode']}}</a></span>
                    </div>
                    <div class="property-pricing">
                        <div class="property-price">$ {{@$response['CurrentPrice']}} </div>
                        <div class="sub-price">{{@$response['LotSizeSquareFeet']}} / {{@$response['LotSizeUnits']}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="singlePropertySlider container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo url('/')?>/front/images/img1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo url('/')?>/front/images/img2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo url('/')?>/front/images/img3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<div class="singleProprtyDetail margin-top-65 pb-4 pb-md-5">
    <div class="container">
        <div class="row">
            <div class="sp-content col-lg-8 col-md-7">
                <div class="property-description">
                    <ul class="property-main-features">
                        <li>Area <span>{{@$response['LotSizeSquareFeet']}} / {{@$response['LotSizeUnits']}}</span></li>
                        <li>Bedrooms <span>{{@$response['BedroomsTotal']}}</span></li>
                        <li>Full Bath <span>{{@$response['BathroomsFull']}}</span></li>
                    </ul>
                    <h3 class="desc-headline text-left">Description</h3>
                    <div class="show-more">
                        <p>{{@$response['PublicRemarks']}}</p>
                    </div>
                    <h3 class="desc-headline">Details</h3>
                    <ul class="property-features margin-top-0">
                        <li>Building Age: <span>14 Years</span></li>
                        <li>Cooling: <span>{{@$response['Cooling']}}</span></li>
                        <li>Association Fee: <span>$677 </span></li>
                        <li>School District: <span>{{@$response['HighSchoolDistrict']}}</span></li>
                        <li>Style: <span>{{@$response['ArchitecturalStyle']}}</span></li>
                    </ul>
                    <h3 class="desc-headline">Features</h3>
                    <ul class="property-features checkboxes margin-top-0">
                        <li>Central Air Cooling</li>
                        <li>Central Heating</li>
                        <li>Fenced Pool</li>
                        <li>Laundry Room</li>
                        <li>Gated with Guard</li>
                        <li> Card/Code Access</li>
                        <li>On Site, Controlled Entrance, Covered, Community Structure</li>
                        <li>Bamboo Flooring</li>
                        <li>Courtyard View</li>
                    </ul>
                    <h3 class="desc-headline no-border" id="location">Location</h3>
                    <div id="propertyMap-container">
                        <div id="map-container-google-1" class="z-depth-1-half map-container"><iframe class="w-100"
                                src="https://maps.google.com/maps?q=manhatan&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                frameborder="0"></iframe></div>
                        <a href="#" class="streetView">Street View</a>
                    </div>
                    <h5 class="desc-headline">Listing Sponsored by Hilton &amp; Hyland (CA Lic 00389584)</h5>
                    <ul class="property-features margin-top-0">
                        <li>Agent: <span>{{@$response['ListAgentFirstName']}} {{@$response['ListAgentLastName']}}</span>
                        </li>
                        <li>Phone: <span>310-278-3311</span></li>
                    </ul>
                </div>
            </div>
            <div class="sp-sidebar col-lg-4 col-md-5">
                <div class="sidebar right">
                    <div class="widget margin-bottom-30">
                        <div class="progress-wrapper toolipBar"><span class="d-inline-block"><button type="button"
                                    class="btn btn-primary"><i class="fa fa-print"
                                        aria-hidden="true"></i></button></span><span class="d-inline-block"><button
                                    type="button" class="btn btn-primary"><i class="fa fa-star-o"
                                        aria-hidden="true"></i></button></span><span class="d-inline-block"><button
                                    type="button" class="btn btn-primary"><i class="fa fa-compress"
                                        aria-hidden="true"></i></button></span></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget">
                        <div class="boxed-widget booking-widget margin-top-35">
                            <h3><i class="fa fa-calendar-check-o"></i> Schedule a Tour</h3>
                            <div class="with-forms  margin-top-0 row">
                                <div class="col-md-12">
                                    <form class="">
                                        <div class="form-group"><input placeholder="" type="date" id="formBasicEmail"
                                                class="form-control"></div>
                                        <div class="form-group">
                                            <select id="exampleForm.ControlSelect1" class="form-control">
                                                <option>8:30 am - 9:00 am</option>
                                                <option>8:30 am - 9:00 am</option>
                                                <option>8:30 am - 9:00 am</option>
                                                <option>8:30 am - 9:00 am</option>
                                                <option>8:30 am - 9:00 am</option>
                                                <option>8:30 am - 9:00 am</option>
                                                <option>8:30 am - 9:00 am</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="customBtn w-100 btn btn-primary">Send
                                            Request</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="agent-widget">
                            <div class="agent-title">
                                <div class="agent-details">
                                    <h4>Get a Rebate on this listing</h4>
                                    <span><i class="fa fa-phone" aria-hidden="true"></i>(855) 937-2935</span>
                                </div>
                            </div>
                            <form class="rebateForm mt-3">
                                <div class="form-group"><input placeholder="Your Email" type="email" id="formBasicEmail"
                                        class="form-control"></div>
                                <div class="form-group"><input placeholder="Your Phone" type="number"
                                        id="formBasicEmail" class="form-control"></div>
                                <div class="form-group"><textarea placeholder="Message" rows="3" id="formBasicEmail"
                                        class="form-control"></textarea></div>
                                <button type="submit" class="customBtn w-100 btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                    <div class="widget">
                        <h3 class="margin-bottom-30 margin-top-30">Rebate Calculator</h3>
                        <form class="">
                            <div class="calc-input form-group">
                                <div class="pick-price tip"></div>
                                <input placeholder="Sale Price" type="email" id="exampleForm.ControlInput1"
                                    class="form-control"><label class="form-label" for="exampleForm.ControlInput1"><i
                                        class="fa fa-usd"></i></label>
                            </div>
                            <div class="calc-input form-group">
                                <div class="pick-price tip"></div>
                                <input placeholder="Down Payment" type="email" id="exampleForm.ControlInput1"
                                    class="form-control"><label class="form-label" for="exampleForm.ControlInput1"><i
                                        class="fa fa-usd"></i></label>
                            </div>
                            <div class="calc-input form-group">
                                <div class="pick-price tip"></div>
                                <input placeholder="Loan Term (Years)" type="email" id="exampleForm.ControlInput1"
                                    class="form-control"><label class="form-label" for="exampleForm.ControlInput1"><i
                                        class="fa fa-calendar-o" aria-hidden="true"></i></label>
                            </div>
                            <div class="calc-input form-group">
                                <div class="pick-price tip"></div>
                                <input placeholder="Interst Rate" type="email" id="exampleForm.ControlInput1"
                                    class="form-control"><label class="form-label" for="exampleForm.ControlInput1"><i
                                        class="fa fa-usd"></i></label>
                            </div>
                            <button type="submit" class="customBtn  btn btn-primary">Calculate</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('front/layouts.footer')