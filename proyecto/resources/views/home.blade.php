@extends('layouts.app')

@section('content')
	<div>
		<div style="margin-top: -10px; margin-bottom: 10px">
			<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		  <!-- Brand -->
			<a class="navbar-brand" href="#">Logo</a>

			  <!-- Links -->
				<ul class="navbar-nav">
			    	<li class="nav-item">
			      		<a class="nav-link" href="#">Link 1</a>
			    	</li>
			    	<li class="nav-item">
			      		<a class="nav-link" href="#">Link 2</a>
			    	</li>

			    <!-- Dropdown -->
			    	<li class="nav-item dropdown">
			      		<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
			        		Dropdown link
			      		</a>
			      		<div class="dropdown-menu">
			        		<a class="dropdown-item" href="#">Link 1</a>
			        		<a class="dropdown-item" href="#">Link 2</a>
			        		<a class="dropdown-item" href="#">Link 3</a>
			      		</div>
			    	</li>
			  	</ul>
			</nav>
		</div>
	<!-- carrusel principal -->
	<div id="nuevo" class="carousel slide" data-ride="carousel">

	  	<!-- Indicators -->
		<ul class="carousel-indicators">
			<li data-target="#nuevo" data-slide-to="0" class="active"></li>
			<li data-target="#nuevo" data-slide-to="1"></li>
			<li data-target="#nuevo" data-slide-to="2"></li>
			<li data-target="#nuevo" data-slide-to="3"></li>
	  	</ul>

	  	<!-- The slideshow -->
	  	<div class="carousel-inner">
			<div class="carousel-item active">
		  		<img src="{{ asset('images/1.jpg') }}" alt="Los Angeles">
			</div>
			<div class="carousel-item">
				<img src="{{ asset('images/2.jpg') }}" alt="Chicago">
			</div>
			<div class="carousel-item">
		  		<img src="{{ asset('images/3.jpg') }}" alt="New York">
			</div>
			<div class="carousel-item">
		  		<img src="{{ asset('images/4.jpg') }}" alt="New York">
			</div>
	  	</div>

	  <!-- Left and right controls -->
	  	<a class="carousel-control-prev" href="#nuevo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
	 	</a>
	  	<a class="carousel-control-next" href="#nuevo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>

	</div>

</div>

<!-- componentes de paquetes -->
<div>
	<div class="row" style="margin-top: 10px">
		<div class="col-md-6">
			<form method="GET" action="">
				<button class="btn btn-secondary btn-block" style="height: 200px">Ceremonias</button>
			</form>
		</div>
		<div class="col-md-6">
			<form method="GET" action="">
				<button class="btn btn-secondary btn-block" style="height: 200px">Recepciones</button>	
			</form>
		</div>
		<div class="col-md-6" style="padding-top: 10px">
			<form method="GET" action="">
				<button class="btn btn-secondary btn-block" style="height: 200px">Preaparaciones previas</button>
			</form>
		</div>
		<div class="col-md-6" style="padding-top: 10px">
			<form method="GET" action="">
				<button class="btn btn-secondary btn-block" style="height: 200px">Lunas de miel</button>
			</form>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12" style="padding-top: 10px">
		<form method="GET" action="">
			<button class="btn btn-secondary btn-block" style="height: 200px">Paquetes preestablecidos</button>
		</form>
	</div>
</div>
@endsection
