@extends('layouts.master')
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<div>
						  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, welcome back!</h2>
						  <p class="mg-b-0">Votre site de gestion de factures.</p>
						</div>
					</div>
					<div class="main-dashboard-header-right">
						
						</div>
						
					</div>
				</div>
				<!-- /breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-4 col-lg-7 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-primary-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white"> SOMME DES FACTURES</h6>
								</div><br>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">5,74.12 DT</h4>
											
										</div>
										
									</div>
								</div>
							</div>
							<span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-danger-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">FACTURES NON PAYEES </h6>
								</div><br>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">1,230.17 DT</h4>
											
										</div>
									
									</div>
								</div>
							</div>
							<span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-success-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white"> FACTURES PAYEES</h6>
								</div><br>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">7,125.70 DT</h4>
										</div>
									</div>
								</div>
							</div>
							<span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-warning-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">FACTURES PARTIELLEMENT PAYEES </h6>
								</div><br>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">4,820.50 DT</h4>
										
										</div>
										
									</div>
								</div>
							</div>
							<span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
						</div>
					</div>
				</div>
				<!-- row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-md-12 col-lg-12 col-xl-7">
						<div class="card">
							<div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mb-0">Statut des factures</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
							</div>
							<div class="card-body">
								<div class="total-revenue">
									<div>
									  <h4>120,750</h4>
									  <label><span class="bg-primary"></span>success</label>
									</div>
									<div>
									  <h4>56,108</h4>
									  <label><span class="bg-danger"></span>Pending</label>
									</div>
									<div>
									  <h4>32,895</h4>
									  <label><span class="bg-warning"></span>Failed</label>
									</div>
								  </div>
								<div id="bar" class="sales-bar mt-4"></div>
							</div>
						</div>
					</div>
				</div>

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-4 col-md-12 col-lg-12">
						<div class="card">
							<div class="card-header pb-1">
								<h3 class="card-title mb-2">Recent Customers</h3>
								<p class="tx-12 mb-0 text-muted">A customer is an individual or business that purchases the goods service has evolved to include real-time</p>
							</div>
							<div class="card-body p-0 customers mt-1">
								<div class="list-group list-lg-group list-group-flush">
									<div class="list-group-item list-group-item-action" href="#">
										<div class="media mt-0">
											<img class="avatar-lg rounded-circle ml-3 my-auto" src="{{URL::asset('assets/img/faces/3.jpg')}}" alt="Image description">
											<div class="media-body">
												<div class="d-flex align-items-center">
													<div class="mt-0">
														<h5 class="mb-1 tx-15">Samantha Melon</h5>
														<p class="mb-0 tx-13 text-muted">User ID: #1234 <span class="text-success ml-2">Paid</span></p>
													</div>
													<span class="mr-auto wd-45p fs-16 mt-2">
														<div id="spark1" class="wd-100p"></div>
													</span>
												</div>
											</div>
										</div>
									</div>
									<div class="list-group-item list-group-item-action" href="#">
										<div class="media mt-0">
											<img class="avatar-lg rounded-circle ml-3 my-auto" src="{{URL::asset('assets/img/faces/11.jpg')}}" alt="Image description">
											<div class="media-body">
												<div class="d-flex align-items-center">
													<div class="mt-1">
														<h5 class="mb-1 tx-15">Jimmy Changa</h5>
														<p class="mb-0 tx-13 text-muted">User ID: #1234 <span class="text-danger ml-2">Pending</span></p>
													</div>
													<span class="mr-auto wd-45p fs-16 mt-2">
														<div id="spark2" class="wd-100p"></div>
													</span>
												</div>
											</div>
										</div>
									</div>
									<div class="list-group-item list-group-item-action" href="#">
										<div class="media mt-0">
											<img class="avatar-lg rounded-circle ml-3 my-auto" src="{{URL::asset('assets/img/faces/17.jpg')}}" alt="Image description">
											<div class="media-body">
												<div class="d-flex align-items-center">
													<div class="mt-1">
														<h5 class="mb-1 tx-15">Gabe Lackmen</h5>
														<p class="mb-0 tx-13 text-muted">User ID: #1234<span class="text-danger ml-2">Pending</span></p>
													</div>
													<span class="mr-auto wd-45p fs-16 mt-2">
														<div id="spark3" class="wd-100p"></div>
													</span>
												</div>
											</div>
										</div>
									</div>
									<div class="list-group-item list-group-item-action" href="#">
										<div class="media mt-0">
											<img class="avatar-lg rounded-circle ml-3 my-auto" src="{{URL::asset('assets/img/faces/15.jpg')}}" alt="Image description">
											<div class="media-body">
												<div class="d-flex align-items-center">
													<div class="mt-1">
														<h5 class="mb-1 tx-15">Manuel Labor</h5>
														<p class="mb-0 tx-13 text-muted">User ID: #1234<span class="text-success ml-2">Paid</span></p>
													</div>
													<span class="mr-auto wd-45p fs-16 mt-2">
														<div id="spark4" class="wd-100p"></div>
													</span>
												</div>
											</div>
										</div>
									</div>
									<div class="list-group-item list-group-item-action br-br-7 br-bl-7" href="#">
										<div class="media mt-0">
											<img class="avatar-lg rounded-circle ml-3 my-auto" src="{{URL::asset('assets/img/faces/6.jpg')}}" alt="Image description">
											<div class="media-body">
												<div class="d-flex align-items-center">
													<div class="mt-1">
														<h5 class="mb-1 tx-15">Sharon Needles</h5>
														<p class="b-0 tx-13 text-muted mb-0">User ID: #1234<span class="text-success ml-2">Paid</span></p>
													</div>
													<span class="mr-auto wd-45p fs-16 mt-2">
														<div id="spark5" class="wd-100p"></div>
													</span>
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
						</div>
						
				<!-- row close -->

				<!-- row opened -->
				
			</div>
		</div>
		<!-- Container closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!--Internal  Flot js-->
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
<script src="{{URL::asset('assets/js/dashboard.sampledata.js')}}"></script>
<script src="{{URL::asset('assets/js/chart.flot.sampledata.js')}}"></script>
<!--Internal Apexchart js-->
<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>
<!-- Internal Map -->
<script src="{{URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{URL::asset('assets/js/modal-popup.js')}}"></script>
<!--Internal  index js -->
<script src="{{URL::asset('assets/js/index.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.vmap.sampledata.js')}}"></script>	
@endsection
