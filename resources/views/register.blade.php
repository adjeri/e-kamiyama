@extends('template')

@section('title')
                Registration
@endsection('title')

@section('contenu')

	<br>
	        <div class="container col-sm-6" style="border: 1px solid #cecece;">
	              <form id='geolocation' class="form-horizontal" action="{{action('MapController@store')}}" method="post">
	              	 {{ csrf_field() }} 
		<fieldset>

		<!-- Form Name -->
		<legend>Registration</legend>

		<!-- Text input-->
		<div class="form-group">
		  <div class="input-group col-md-12">
		  <input class="form-control col-md-3" type="text" readonly placeholder="Full name">
		  <input id="name" name="name" type="text" placeholder="Please, enter you full name" class="form-control input-md" style="background-color:transparent;" value="">
		  </div>
		   <div class="col-lg-9 col-md-9 col-sm-10 col-xs-12 form-inline"> {!! $errors->first('name', '<span class="btn-danger">:message</span>') !!}</div>
		</div>
		<div class="form-group">
		  <div class="input-group col-md-12">
		  	<input class="form-control col-md-3" type="text" readonly placeholder="Message">
		  	<input id="message" name="message" type="text" placeholder="Please, write your message" class="form-control input-md" required value="">
		  </div>
		   <div class="col-lg-9 col-md-9 col-sm-10 col-xs-12 form-inline"> {!! $errors->first('message', '<span class="btn-danger">:message</span>') !!}</div>
		</div>
		<div class="form-group">
		  <div class="input-group col-md-12">
		  	 <input class="form-control col-md-3" type="text" readonly placeholder="Latitude">
		  	  <input id="latitude" name="latitude" type="text" placeholder="Latitude" class="form-control input-md" required value="">
		  </div>
		   <div class="col-lg-9 col-md-9 col-sm-10 col-xs-12 form-inline"> <!-- {!! $errors->first('datefinactivation', '<span class="btn-danger">:message</span>') !!} --></div>
		</div>
		<div class="form-group">
		  <div class="input-group col-md-12">
		  	 <input class="form-control col-md-3" type="text" readonly placeholder="Longitude">
		  	  <input id="longitude" name="longitude" type="text" placeholder="Longitude" class="form-control input-md" required value="">
		  </div>
		   <div class="col-lg-9 col-md-9 col-sm-10 col-xs-12 form-inline"> <!-- {!! $errors->first('datefinactivation', '<span class="btn-danger">:message</span>') !!} --></div>
		</div>
		<div class="input-group col-md-12">
		      <input class="form-control col-md-3" type="text" readonly placeholder="Choose a color">
		      <select id="marker_color" name="marker_color" class="form-control {{ $errors->has('marker_color') ? 'is-invalid' : '' }}">
			      <option value="red">Red</option>
			      <option value="green">Green</option>
			      <option value="yellow">Yellow</option>
			      <option value="purple">Purple</option>
			      <option value="blue">Blue</option>
			      <option value="brown">Brown</option>
			      <option value="white">White</option>
			      <option value="orange">Orange</option>
		    </select>
		</div>
		<div class="form-group">
		
		</div>
		<div class="form-group">
		  <div class="col-md-8">
		    <input type="submit" class="btn btn-success" value="Save"/>
		    <a id="retour" name="retour" class="btn btn-danger" href="home">Back</a>
		  </div>
		</div>
		</fieldset>
	</form>
	        </div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">

<script type="text/javascript">
window.onload=function(){
if ("geolocation" in navigator){
		navigator.geolocation.getCurrentPosition(function(position){ 
			var currentLatitude = position.coords.latitude;
			var currentLongitude = position.coords.longitude;
 			document.getElementById("latitude").value = currentLatitude;
 			document.getElementById("longitude").value = currentLongitude;
		});
	}
	else{
		alert('Please activate your GPS');
	}
}
</script>

@endsection