<?php
use App\t_gmaps;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('map', function(){
			$config['center'] = 'Kamiyama, Tokushima';
			$config['zoom'] = '14';
			$config['map_height'] = '500px';
			$config['geocodeCaching'] = true;
			$config['map_height'] = '500px';
			$config['scrollwheel'] =false;

			GMaps::initialize($config);

		$t_gmaps = t_gmaps::all();
			foreach($t_gmaps as $t_gmap){
				$marker['position'] = $t_gmap['latitude'].', '.$t_gmap['longitude']; 
				$marker['infowindow_content'] = $t_gmap['name'].': '.$t_gmap['message'] ;
				$marker['icon'] = 'http://maps.google.com/mapfiles/ms/micons/'.$t_gmap['marker_color'].'-dot.png';
				GMaps::add_marker($marker);
			}

			$map = GMaps::create_map();

			return view('welcome')->with('map',$map);
});

Route::get('testmap', 'MapController@showmap');


Route::get('/',function(){
	return view('menu');
});
Route::get('home',function(){
	return view('menu');
});

Route::get('myposition',function(){
	$config = array();
	$config['center'] = 'auto';
	$config['onboundschanged'] = 'if (!centreGot) {
	var mapCentre = map.getCenter();
	marker_0.setOptions({
		position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng()) 
	});
}
centreGot = true;';
GMaps::initialize($config);
   
// set up the marker ready for positioning 
// once we know the users location
$marker = array();
GMaps::add_marker($marker);
$map = GMaps::create_map();

});

Route::get('registration','MapController@index');
Route::post('registration','MapController@store');