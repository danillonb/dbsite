@extends('layouts.blank')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')

    <!-- page content -->
	<div class="right_col" role="main">

		<div class="x_panel">
			<div class="x_title">
				<h2>Contatos Recebidos<small>Total</small></h2>
				<ul class="nav navbar-right panel_toolbox">
					<li>
						<a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="#">Settings 1</a>
							</li>
							<li>
								<a href="#">Settings 2</a>
							</li>
						</ul>
					</li>
                      			<li>
						<a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<p class="text-muted font-13 m-b-30">Todos os contatos recebidos com qualquer status</p>
					
				<div id="datatable-responsive_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
					<div class="row">
						<div class="col-sm-6">
							<div class="dataTables_length" id="datatable-responsive_length">
								<label>Show 
									<select name="datatable-responsive_length" aria-controls="datatable-responsive" class="form-control input-sm">
										<option value="10">10</option>
										<option value="25">25</option>
										<option value="50">50</option>
										<option value="100">100</option>
									</select> entries
								</label>
							</div>
						</div>
						<div class="col-sm-6">
							<div id="datatable-responsive_filter" class="dataTables_filter">
								<label>Search:
									<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable-responsive">
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" cellspacing="0" width="100%" role="grid" aria-describedby="datatable-responsive_info" style="width: 100%;">
								<thead>
									<tr role="row">
										<th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First name: activate to sort column descending">Contato</th>
										<th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" aria-label="Last name: activate to sort column ascending">Cliente</th>
										<th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" aria-label="E-mail: activate to sort column ascending">E-mail</th>
										<th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Telefone</th>
										<th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending">Status</th>
										<th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Recebido</th>
										<th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" aria-label="Extn.: activate to sort column ascending">Respondido</th>
									</tr>
								</thead>
								<tbody>
									<tr role="row" class="odd">
										<td tabindex="0" class="sorting_1" style="">Airi</td>
										<td>Satou</td>
										<td style="">Accountant</td>
										<td style="">Tokyo</td>
										<td style="">33</td>
										<td style="">dfSIDHFaissidassdfasd</td>
										<td style="">$162,700</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-5">
							<div class="dataTables_info" id="datatable-responsive_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
						</div>
						<div class="col-sm-7">
							<div class="dataTables_paginate paging_simple_numbers" id="datatable-responsive_paginate">
								<ul class="pagination">
									<li class="paginate_button previous disabled" id="datatable-responsive_previous">
										<a href="#" aria-controls="datatable-responsive" data-dt-idx="0" tabindex="0">Previous</a>
									</li>
									<li class="paginate_button active">
										<a href="#" aria-controls="datatable-responsive" data-dt-idx="1" tabindex="0">1</a>
									</li>
									<li class="paginate_button ">
            									<a href="#" aria-controls="datatable-responsive" data-dt-idx="2" tabindex="0">2</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
					
					
			</div>
		</div>

	</div>
    <!-- /page content -->
@endsection