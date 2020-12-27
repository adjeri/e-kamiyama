@extends('template')

@section('title')
                Kamiya-map | Enjoy Kamiyama
@endsection('title')

@section('contenu')

	<br>
	        <div class="container col-sm-6">
		<div class="form-group">
		 <h1 style="color: #d54d7b; font-family: Georgia; font-size: 100px;  font-weight: normal; margin-bottom: 0px; margin-top: 40px; text-align: center; text-shadow: 0 1px 1px #fff;">Kamiya-map </h1>
		 <h1 style="color: #d57f7b; font-family: Georgia; font-size: 50px;  font-weight: normal; margin-bottom: 0px; margin-top: 40px; text-align: center; text-shadow: 0 1px 1px #fff;">Enjoy Kamiyama </h1>
		</div>
		<br>
		<div class="form-group" align="center">
		  <div class="col-md-8">
		    <a class="btn btn-success" href="map">Map view</a>
		    <a class="btn btn-info" href="{{action('MapController@store')}}">Registration</a>
		  </div>
		</div>
	        </div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">


@endsection