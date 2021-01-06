@extends('layouts.app_front')

@section('content')
<section class="banner_sec">
         <div class="bannerSection ">
            <div class="bannerContent">
               <h1 class="text-white f-36">Get a Rebate On Your Dream Home</h1>
               <div class="formSection mt-5">
                  <form class="main-search-form">
                     <nav class="nav nav-tabs nav-fill" role="tablist" id="nav-tab">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Any Type</a>
                        <a  class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">House</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Condos</a>
                     </nav>
                     <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                           <div class="innerForm">
                              <div class="row">
                                 <div class="col-md-9">
                                    <div class="form-group"><input placeholder="Enter address e.g. street, city and state or zip" type="text" id="formBasicEmail" class="form-control"></div>
                                 </div>
                                 <div class="col-md-3"><button type="submit" class="customBtn w-100 btn btn-primary">Search</button></div>
                              </div>
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <select id="exampleForm.ControlSelect1" class="form-control">
                                          <option>Any Type</option>
                                          <option>Any Type</option>
                                          <option>Apartment</option>
                                          <option>House</option>
                                          <option>Commercial</option>
                                          <option>Garages</option>
                                          <option>Lots</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="position-relative form-group"><i class="data-unit">USD</i><input placeholder="Min Price" type="text" id="formBasicEmail" class="form-control"></div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="position-relative form-group"><i class="data-unit">USD</i><input placeholder="Max Price" type="text" id="formBasicEmail" class="form-control"></div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="text-left  col-md-12">
                                    <div default="" class="accordion">
                                       <div class="border-0 card">
                                          <div class="card-header">
                                             <button type="button" class="mb-2 btn btn-link" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3"><i class="fa fa-plus-circle" aria-hidden="true"></i> More Option</button>
                                          </div>
                                          <div class="collapse multi-collapse" id="multiCollapseExample3">
                                             <div class="p-0 card-body">
                                                <div class="row">
                                                   <div class="col-md-6">
                                                      <div class="position-relative form-group"><i class="data-unit">Sq Ft</i><input placeholder="Min Area" type="text" id="formBasicEmail" class="form-control"></div>
                                                   </div>
                                                   <div class="col-md-6">
                                                      <div class="position-relative form-group"><i class="data-unit">Sq Ft</i><input placeholder="Max Area" type="text" id="formBasicEmail" class="form-control"></div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-6">
                                                      <div class="form-group">
                                                         <select id="exampleForm.ControlSelect1" class="form-control">
                                                            <option>Beds</option>
                                                            <option>Beds 1</option>
                                                            <option>Beds 2</option>
                                                            <option>Beds 3</option>
                                                            <option>Beds 4</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-6">
                                                      <div class="form-group">
                                                         <select id="exampleForm.ControlSelect1" class="form-control">
                                                            <option>Baths</option>
                                                            <option>Bath 1</option>
                                                            <option>Bath 2</option>
                                                            <option>Bath 3</option>
                                                            <option>Bath 4</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="checkboxInput m-0 row">
                                                   <div class="form-group">
                                                      <div class="form-check"><input type="checkbox" id="formBasicCheckbox1" class="form-check-input"><label title="" for="formBasicCheckbox1" class="form-check-label">Air Conditioning</label></div>
                                                   </div>
                                                   <div class="form-group">
                                                      <div class="form-check"><input type="checkbox" id="formBasicCheckbox2" class="form-check-input"><label title="" for="formBasicCheckbox2" class="form-check-label">Swimming Pool</label></div>
                                                   </div>
                                                   <div class="form-group">
                                                      <div class="form-check"><input type="checkbox" id="formBasicCheckbox3" class="form-check-input"><label title="" for="formBasicCheckbox3" class="form-check-label">Central Heating</label></div>
                                                   </div>
                                                   <div class="form-group">
                                                      <div class="form-check"><input type="checkbox" id="formBasicCheckbox4" class="form-check-input"><label title="" for="formBasicCheckbox4" class="form-check-label">Laundry Room</label></div>
                                                   </div>
                                                   <div class="form-group">
                                                      <div class="form-check"><input type="checkbox" id="formBasicCheckbox5" class="form-check-input"><label title="" for="formBasicCheckbox5" class="form-check-label">Gym</label></div>
                                                   </div>
                                                   <div class="form-group">
                                                      <div class="form-check"><input type="checkbox" id="formBasicCheckbox6" class="form-check-input"><label title="" for="formBasicCheckbox6" class="form-check-label">Alarm</label></div>
                                                   </div>
                                                   <div class="form-group">
                                                      <div class="form-check"><input type="checkbox" id="formBasicCheckbox7" class="form-check-input"><label title="" for="formBasicCheckbox7" class="form-check-label">Window Covering</label></div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                           <div class="innerForm">
                              <div class="row">
                                 <div class="col-md-9">
                                    <div class="form-group"><input placeholder="Enter address e.g. street, city and state or zip" type="text" id="formBasicEmail" class="form-control"></div>
                                 </div>
                                 <div class="col-md-3"><button type="submit" class="customBtn w-100 btn btn-primary">Search</button></div>
                              </div>
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <select id="exampleForm.ControlSelect1" class="form-control">
                                          <option>Any Type</option>
                                          <option>Any Type</option>
                                          <option>Apartment</option>
                                          <option>House</option>
                                          <option>Commercial</option>
                                          <option>Garages</option>
                                          <option>Lots</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="position-relative form-group"><i class="data-unit">USD</i><input placeholder="Min Price" type="text" id="formBasicEmail" class="form-control"></div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="position-relative form-group"><i class="data-unit">USD</i><input placeholder="Max Price" type="text" id="formBasicEmail" class="form-control"></div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="text-left  col-md-12">
                                    <div default="" class="accordion">
                                       <div class="border-0 card">
                                          <div class="card-header">
                                             <button type="button" class="mb-2 btn btn-link" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2"><i class="fa fa-plus-circle" aria-hidden="true"></i> More Option</button>
                                          </div>
                                          <div class="collapse multi-collapse" id="multiCollapseExample2">
                                             <div class="p-0 card-body">
                                                <div class="row">
                                                   <div class="col-md-6">
                                                      <div class="position-relative form-group"><i class="data-unit">Sq Ft</i><input placeholder="Min Area" type="text" id="formBasicEmail" class="form-control"></div>
                                                   </div>
                                                   <div class="col-md-6">
                                                      <div class="position-relative form-group"><i class="data-unit">Sq Ft</i><input placeholder="Max Area" type="text" id="formBasicEmail" class="form-control"></div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-6">
                                                      <div class="form-group">
                                                         <select id="exampleForm.ControlSelect1" class="form-control">
                                                            <option>Beds</option>
                                                            <option>Beds 1</option>
                                                            <option>Beds 2</option>
                                                            <option>Beds 3</option>
                                                            <option>Beds 4</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-6">
                                                      <div class="form-group">
                                                         <select id="exampleForm.ControlSelect1" class="form-control">
                                                            <option>Baths</option>
                                                            <option>Bath 1</option>
                                                            <option>Bath 2</option>
                                                            <option>Bath 3</option>
                                                            <option>Bath 4</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="checkboxInput m-0 row">
                                                   <div class="form-group">
                                                      <div class="form-check"><input type="checkbox" id="formBasicCheckbox1" class="form-check-input"><label title="" for="formBasicCheckbox1" class="form-check-label">Air Conditioning</label></div>
                                                   </div>
                                                   <div class="form-group">
                                                      <div class="form-check"><input type="checkbox" id="formBasicCheckbox2" class="form-check-input"><label title="" for="formBasicCheckbox2" class="form-check-label">Swimming Pool</label></div>
                                                   </div>
                                                   <div class="form-group">
                                                      <div class="form-check"><input type="checkbox" id="formBasicCheckbox3" class="form-check-input"><label title="" for="formBasicCheckbox3" class="form-check-label">Central Heating</label></div>
                                                   </div>
                                                   <div class="form-group">
                                                      <div class="form-check"><input type="checkbox" id="formBasicCheckbox4" class="form-check-input"><label title="" for="formBasicCheckbox4" class="form-check-label">Laundry Room</label></div>
                                                   </div>
                                                   <div class="form-group">
                                                      <div class="form-check"><input type="checkbox" id="formBasicCheckbox5" class="form-check-input"><label title="" for="formBasicCheckbox5" class="form-check-label">Gym</label></div>
                                                   </div>
                                                   <div class="form-group">
                                                      <div class="form-check"><input type="checkbox" id="formBasicCheckbox6" class="form-check-input"><label title="" for="formBasicCheckbox6" class="form-check-label">Alarm</label></div>
                                                   </div>
                                                   <div class="form-group">
                                                      <div class="form-check"><input type="checkbox" id="formBasicCheckbox7" class="form-check-input"><label title="" for="formBasicCheckbox7" class="form-check-label">Window Covering</label></div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                           <div class="innerForm">
                              <div class="row">
                                 <div class="col-md-9">
                                    <div class="form-group"><input placeholder="Enter address e.g. street, city and state or zip" type="text" id="formBasicEmail" class="form-control"></div>
                                 </div>
                                 <div class="col-md-3"><button type="submit" class="customBtn w-100 btn btn-primary">Search</button></div>
                              </div>
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <select id="exampleForm.ControlSelect1" class="form-control">
                                          <option>Any Type</option>
                                          <option>Any Type</option>
                                          <option>Apartment</option>
                                          <option>House</option>
                                          <option>Commercial</option>
                                          <option>Garages</option>
                                          <option>Lots</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="position-relative form-group"><i class="data-unit">USD</i><input placeholder="Min Price" type="text" id="formBasicEmail" class="form-control"></div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="position-relative form-group"><i class="data-unit">USD</i><input placeholder="Max Price" type="text" id="formBasicEmail" class="form-control"></div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="text-left  col-md-12">
                                    <div default="" class="accordion">
                                       <div class="border-0 card">
                                          <div class="card-header">
                                             <button type="button" class="mb-2 btn btn-link" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fa fa-plus-circle" aria-hidden="true"></i> More Option</button>
                                          </div>
                                          <div class="collapse multi-collapse" id="multiCollapseExample1">
                                             <div class="p-0 card-body">
                                                <div class="row">
                                                   <div class="col-md-6">
                                                      <div class="position-relative form-group"><i class="data-unit">Sq Ft</i><input placeholder="Min Area" type="text" id="formBasicEmail" class="form-control"></div>
                                                   </div>
                                                   <div class="col-md-6">
                                                      <div class="position-relative form-group"><i class="data-unit">Sq Ft</i><input placeholder="Max Area" type="text" id="formBasicEmail" class="form-control"></div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-6">
                                                      <div class="form-group">
                                                         <select id="exampleForm.ControlSelect1" class="form-control">
                                                            <option>Beds</option>
                                                            <option>Beds 1</option>
                                                            <option>Beds 2</option>
                                                            <option>Beds 3</option>
                                                            <option>Beds 4</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-6">
                                                      <div class="form-group">
                                                         <select id="exampleForm.ControlSelect1" class="form-control">
                                                            <option>Baths</option>
                                                            <option>Bath 1</option>
                                                            <option>Bath 2</option>
                                                            <option>Bath 3</option>
                                                            <option>Bath 4</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="checkboxInput m-0 row">
                                                   <div class="form-group">
                                                      <div class="form-check"><input type="checkbox" id="formBasicCheckbox1" class="form-check-input"><label title="" for="formBasicCheckbox1" class="form-check-label">Air Conditioning</label></div>
                                                   </div>
                                                   <div class="form-group">
                                                      <div class="form-check"><input type="checkbox" id="formBasicCheckbox2" class="form-check-input"><label title="" for="formBasicCheckbox2" class="form-check-label">Swimming Pool</label></div>
                                                   </div>
                                                   <div class="form-group">
                                                      <div class="form-check"><input type="checkbox" id="formBasicCheckbox3" class="form-check-input"><label title="" for="formBasicCheckbox3" class="form-check-label">Central Heating</label></div>
                                                   </div>
                                                   <div class="form-group">
                                                      <div class="form-check"><input type="checkbox" id="formBasicCheckbox4" class="form-check-input"><label title="" for="formBasicCheckbox4" class="form-check-label">Laundry Room</label></div>
                                                   </div>
                                                   <div class="form-group">
                                                      <div class="form-check"><input type="checkbox" id="formBasicCheckbox5" class="form-check-input"><label title="" for="formBasicCheckbox5" class="form-check-label">Gym</label></div>
                                                   </div>
                                                   <div class="form-group">
                                                      <div class="form-check"><input type="checkbox" id="formBasicCheckbox6" class="form-check-input"><label title="" for="formBasicCheckbox6" class="form-check-label">Alarm</label></div>
                                                   </div>
                                                   <div class="form-group">
                                                      <div class="form-check"><input type="checkbox" id="formBasicCheckbox7" class="form-check-input"><label title="" for="formBasicCheckbox7" class="form-check-label">Window Covering</label></div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <section class="newlyAddedProperty">
         <div class="container">
            <div class="propertyMainHeadding">
               <h1 class=" f-36">Newly Added</h1>
            </div>
         </div>
      </section>
      <section class="getRebate-sec">
         <div class="howGetRetable margin-top-105">
            <div class="container">
               <h2 class="headline-box">How to get a rebate from Yerazel</h2>
               <div class="row">
                  <div class="col-md-4 col-sm-6">
                     <div class="icon-box-1">
                        <div class="icon-container position-relative">
                           <img class="img-fluid" src="<?php echo url('/')?>/front/images/ic_1.png" alt="icon">
                           <div class="icon-links"><a class="text-white" href="#">Register</a></div>
                        </div>
                        <h3>1. Register</h3>
                        <p>Register at Yerazel.com to signup and choose from our approved rebate Lenders.</p>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                     <div class="icon-box-1">
                        <div class="icon-container position-relative">
                           <img class="img-fluid" src="<?php echo url('/')?>/front/images/ic_2.png" alt="icon">
                           <div class="icon-links"><a class="text-white" href="#">Find Home</a></div>
                        </div>
                        <h3>2. Find your Home</h3>
                        <p>Search from our site or any other MLS property.</p>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                     <div class="icon-box-1">
                        <div class="icon-container position-relative">
                           <img class="img-fluid" src="<?php echo url('/')?>/front/images/ic_3.png" alt="icon">
                           <div class="icon-links"><a class="text-white" href="#">Get Rebate</a></div>
                        </div>
                        <h3>3. Get Rebate</h3>
                        <p>At the close of escrow, receive your Rebate!</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="mostPopularPlacesSection">
         <div class="popularPlaces sectionMarginTop">
            <div class="container">
               <h2 class="text-center">Most Popular Places</h2>
               <span class="text-center">Properties In Most Popular Places</span>
               <div class="mt-5 row">
                  <div class="col-md-4">
                     <a class="img-box" href="#">
                        <div class="listing-badges"><span class="featured">Featured</span></div>
                        <div class="img-box-content visible">
                           <h4>Burbank </h4>
                           <span>14 Properties</span>
                        </div>
                        <div class="img-box-background" style="background-image: url('<?php echo url('/')?>/front/images/popular_img1.jpg');"></div>
                     </a>
                  </div>
                  <div class="col-md-8">
                     <a class="img-box" href="#">
                        <div class="img-box-content visible">
                           <h4>North Hollywood </h4>
                           <span>24 Properties</span>
                        </div>
                        <div class="img-box-background" style="background-image: url('<?php echo url('/')?>/front/images/popular_img2.jpg');"></div>
                     </a>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-8">
                     <a class="img-box" href="#">
                        <div class="img-box-content visible">
                           <h4>Van Nuys </h4>
                           <span>12 Properties</span>
                        </div>
                        <div class="img-box-background" style="background-image: url('<?php echo url('/')?>/front/images/popular_img3.jpg');"></div>
                     </a>
                  </div>
                  <div class="col-md-4">
                     <a class="img-box" href="#">
                        <div class="img-box-content visible">
                           <h4>Sun Valley</h4>
                           <span>25 Properties</span>
                        </div>
                        <div class="img-box-background" style="background-image: url('<?php echo url('/')?>/front/images/popular_img4.jpg');"></div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="articelsTips_sec">
         <div class="howGetRetable margin-top-105">
            <div class="container">
               <h2 class="headline-box">Articles &amp; Tips</h2>
               <div class="mt-3 row">
                  <div class="col-md-4 col-sm-6">
                     <div class="blog-post">
                        <a href="#" class="post-img"><img class="img-fluid" src="<?php echo url('/')?>/front/images/blog-post-01.jpg" alt="blog post"></a>
                        <div class="post-content">
                           <h3><a href="#">8 Tips to Help You Finding New Home</a></h3>
                           <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae. </p>
                           <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                     <div class="blog-post">
                        <a href="#" class="post-img"><img class="img-fluid" src="<?php echo url('/')?>/front/images/blog-post-02.jpg" alt="blog post"></a>
                        <div class="post-content">
                           <h3><a href="#">Bedroom Colors You'll Never Regret</a></h3>
                           <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae. </p>
                           <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                     <div class="blog-post">
                        <a href="#" class="post-img"><img class="img-fluid" src="<?php echo url('/')?>/front/images/blog-post-03.jpg" alt="blog post"></a>
                        <div class="post-content">
                           <h3><a href="#">What to Do a Year Before Buying Apartment</a></h3>
                           <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae.</p>
                           <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="browsePropertySection">
         <div class="browserProperties">
            <a href="#" class="flip-banner parallax">
               <div class="parallax-overlay"></div>
               <div class="flip-banner-content">
                  <h2 class="flip-visible">We help people and homes find each other</h2>
                  <h2 class="flip-hidden">Browse Properties <i class="fa fa-angle-right" aria-hidden="true"></i></h2>
               </div>
            </a>
         </div>
      </section>
@endsection