@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Paramètres</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/Categories</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
				
						<div class="mb-3 mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div>
							</div>
						</div>
					</div>
					<div class="modal" id="modaldemo1">
						<div class="modal-dialog" role="document">
							<div class="modal-content modal-content-demo">
								<div class="modal-header">
									<h6 class="modal-title">Basic Modal</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<h6>Ajouter categorie</h6>
									<p>Vous voulez ajouter cette categorie?</p>
								</div>
								<div class="modal-footer">
									<button class="btn ripple btn-primary" type="button">Save changes</button>
									<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
				
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
									
				
								
								<div class="card-body">
									<div class="table-responsive">
										<table class="table text-md-nowrap" id="example1">
											<thead>
												<tr>
													<th class="wd-20p border-bottom-0">#</th>
													<th class="wd-15p border-bottom-0">numéro de facture</th>
													<th class="wd-15p border-bottom-0"> date_debut</th>
													<th class="wd-25p border-bottom-0">date_fin</th>
													<th class="wd-15p border-bottom-0">image</th>
													<th class="wd-15p border-bottom-0">catégorie</th>


												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>01</td>
													<td> 18/05/2001</td>
													<td>2018/03/12</td>
													<td></td>
													<td>électricité</td>
												</tr>
				
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->
	
						
							
									
										
											</tfoot>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->
	@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
@endsection
