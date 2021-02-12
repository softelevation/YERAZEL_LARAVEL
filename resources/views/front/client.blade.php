@include('front/layouts.agent_header')

			<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
               <div class="row align-items-center">
                  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                     <h3 class="page-title font-bold">Clients</h3>
                  </div>
               </div>
               <!-- /.col-lg-12 -->
            </div>
            <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12 ">
                    <div class="main-table-col box-shadow-none mt-0 pt-0">
                      <div class="table-responsive custom-res-table border-radius-8">
                          <table class="table calender-table mt-0 mb-0 client-table ">
                               <thead class="thead-dark">
                                 <tr>
                                   <th scope="col">ID</th>
                                   <th scope="col">Name</th>
                                   <th scope="col">Address</th>
                                   <th scope="col">Assigned</th>
                                   <th scope="col">Type</th>
                                   <th scope="col">Status</th>
                                 </tr>
                               </thead>
                               <tbody>
                                 <tr>
                                   <td>0001</td>
                                   <td><a class="detail-page" href="client-detail.html">Christine Brooks</a></td>
                                   <td>3801 N Arroyo Ln, Los Angeles CA 90032</td>
                                   <td>jan 4 2021</td>
                                   <td>Registerd</td>
                                   <td><a class="custom-status-btn closed-btn" href="#">Closed</td>
                                 </tr>
                                  <tr>
                                   <td>0001</td>
                                   <td><a class="detail-page" href="client-detail.html">Christine Brooks</a></td>
                                   <td>3801 N Arroyo Ln, Los Angeles CA 90032</td>
                                   <td>jan 4 2021</td>
                                   <td>Registerd</td>
                                   <td><a class="custom-status-btn showing-btn" href="#">Showing</td>
                                 </tr>
                                  <tr>
                                   <td>0001</td>
                                   <td><a class="detail-page" href="client-detail.html">Christine Brooks</a></td>
                                   <td>3801 N Arroyo Ln, Los Angeles CA 90032</td>
                                   <td>jan 4 2021</td>
                                   <td>Registerd</td>
                                   <td><a class="custom-status-btn lost-client-btn" href="#">Lost</td>
                                 </tr>
                                 <tr>
                                   <td>0001</td>
                                   <td><a class="detail-page" href="client-detail.html">Christine Brooks</a></td>
                                   <td>3801 N Arroyo Ln, Los Angeles CA 90032</td>
                                   <td>jan 4 2021</td>
                                   <td>Registerd</td>
                                   <td><a class="custom-status-btn closed-btn" href="#">Closed</td>
                                 </tr>
                                  <tr>
                                   <td>0001</td>
                                   <td><a class="detail-page" href="client-detail.html">Christine Brooks</a></td>
                                   <td>3801 N Arroyo Ln, Los Angeles CA 90032</td>
                                   <td>jan 4 2021</td>
                                   <td>Registerd</td>
                                   <td><a class="custom-status-btn showing-btn" href="#">Showing</td>
                                 </tr>
                                  <tr>
                                   <td>0001</td>
                                   <td><a class="detail-page" href="client-detail.html">Christine Brooks</a></td>
                                   <td>3801 N Arroyo Ln, Los Angeles CA 90032</td>
                                   <td>jan 4 2021</td>
                                   <td>Registerd</td>
                                   <td><a class="custom-status-btn lost-client-btn" href="#">Lost</td>
                                 </tr>
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