@extends('layouts.blank')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')

    <!-- page content -->
	<div class="right_col" role="main">

		<div class="row">
			<h3>Contatos <i class="fa fa-comments-o"></i></h3>
		</div>
		
		<div class="row">

			<!-- start widget -->
			<a href="{{ route('contato_total') }}">
				<div class=" animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tile-stats ">
						<div class="icon"><i class="fa fa-list"></i>
						</div>
						<div class="count">{{$count_contato}}</div>
						<h3>Total de Contatos</h3>
						<p>Listagem com todos os contatos já realizados.</p>
					</div>
				</div>
			</a>
			<!-- end widget -->
			<!-- start widget -->
			<a href="#">
				<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tile-stats">
						<div class="icon"><i class="fa fa-close"></i>
						</div>
						<div class="count">{{$count_contato_recebido}}</div>
						<h3>Contatos Sem Resposta</h3>
						<p>Listagem com os contatos que ainda não foram respondidos.</p>
					</div>
				</div>
			</a>
			<!-- end widget -->
			<!-- start widget -->
			<a href="#">
				<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tile-stats">
						<div class="icon"><i class="fa fa-check"></i>
						</div>
						<div class="count">{{$count_contato_respondido}}</div>
						<h3>Contatos Respondidos</h3>
						<p>Listagem com os contatos que já foram respondidos.</p>
					</div>
				</div>
			</a>
			<!-- end widget -->
		</div>
		<hr>

		<div class="row">
			<h3>Clientes <i class="fa fa-users"></i></h3>
		</div>
		
		<div class="row">

			<!-- start widget -->
			<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="tile-stats">
					<div class="icon"><i class="fa fa-caret-square-o-right"></i>
					</div>
					<div class="count">50</div>
					<h3>New Sign ups</h3>
					<p>Lorem ipsum psdea itgum rixt.</p>
				</div>
			</div>
			<!-- end widget -->
		</div>
		<hr>

		<div class="row">
			<h3>Site <i class="fa fa-at"></i></h3>
		</div>
		
		<div class="row">

			<!-- start widget -->
			<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="tile-stats">
					<div class="icon"><i class="fa fa-caret-square-o-right"></i>
					</div>
					<div class="count">179</div>
					<h3>New Sign ups</h3>
					<p>Lorem ipsum psdea itgum rixt.</p>
				</div>
			</div>
			<!-- end widget -->
		</div>
		<hr>

	</div>
    <!-- /page content -->
@endsection