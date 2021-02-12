@include('front/layouts.agent_header')


   
         
         <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
               <div class="row align-items-center">
                  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                     <h3 class="page-title font-bold">Dashboard</h3>
                  </div>
               </div>
               <!-- /.col-lg-12 -->
            </div>
            <div class="container-fluid">
               <div class="row">
                   <div class="col-lg-3 col-md-4 col-sm-6">
                       <div class="ms-card-body media">
                           <a href="#">
                            <div class="card-dashboard-cont">
                                <h5>New Client Alerts</h5>
                                <p class="card-num">{{ count($clients) }}</p>
                            </div>
                              <img src="{{ url('agents/images/img-card-img1.png') }}" class="img-fluid" alt="card-icon"> 
                           </a>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-4 col-sm-6">
                       <div class="ms-card-body media">
                           <a href="#">
                            <div class="card-dashboard-cont">
                                <h5>Total Showing</h5>
                                <p class="card-num color-initial">24</p>
                            </div>
                              <img src="{{ url('agents/images/img-card-img2.png') }}" class="img-fluid" alt="card-icon"> 
                           </a>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-4 col-sm-6">
                       <div class="ms-card-body media">
                           <a href="#">
                            <div class="card-dashboard-cont">
                                <h5>Sales YTD</h5>
                                <p class="card-num color-initial">$5,889,000</p>
                            </div>
                              <img src="{{ url('agents/images/img-card-img3.png') }}" class="img-fluid" alt="card-icon"> 
                           </a>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-4 col-sm-6">
                       <div class="ms-card-body media">
                           <a href="#">
                            <div class="card-dashboard-cont">
                                <h5>Pending</h5>
                                <p class="card-num color-initial">$3,2/5,000</p>
                            </div>
                              <img src="{{ url('agents/images/img-card-img1.png') }}" class="img-fluid" alt="card-icon"> 
                           </a>
                       </div>
                   </div>
               </div>
              <div class="row">
                  <div class="col-md-12 mb-5">
                    <div class="main-table-col">
                      <div class="d-flex justify-content-between">
                          <h4>New Client Alerts</h4>
                          <select class="table-show">
                              <option>October</option>
                              <option>November</option>
                              <option>December</option>
                          </select>
                      </div>
                      <div class="table-responsive custom-res-table">
                          <table class="table calender-table">
                               <thead class="thead-dark">
                                 <tr>
                                   <th scope="col">Client Name</th>
                                   <th scope="col">Property</th>
                                   <th scope="col">City</th>
                                   <th scope="col">Showing Request</th>
                                   <th scope="col">Sale Price</th>
                                   <th scope="col">Status</th>
                                 </tr>
                               </thead>
                               <tbody>
								 @foreach($clients as $client)
								 <tr>
                                   <td>{{($client->status == '2') ? $client->name : '...'}}</td>
                                   <td>{{($client->status == '3') ? '...':$client->property}}</td>
                                   <td>{{$client->city}}</td>
                                   <td>{{$client->showing_request}}</td>
                                   <td>${{$client->sale_price}}</td>
								   @if($client->status == '1')
										<td><a class="custom-status-btn accept-btn" href="#">Accept</td>
								   @elseIf($client->status == '2')
										<td><a class="custom-status-btn assigned-btn" href="#">Assigned</td>
								   @elseIf($client->status == '3')
										<td><a class="custom-status-btn lost-btn" href="#">Lost</td>
								   @endIf
								   
                                 </tr>
								 @endforeach
                               </tbody>
                             </table>
                         </div>
                      </div>
                  </div>
              </div>
              
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © Yerazel <a
               href="#">yerazel.com</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
         </div>

@include('front/layouts.agent_footer')