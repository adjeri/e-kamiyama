<?php

namespace FarhanWazir\GoogleMaps\Facades\GMapsFacade;

namespace App\Http\Controllers;

use App\t_gmaps;
use Illuminate\Http\Request;
use App\Http\Requests\MapRequest;
use FarhanWazir\GoogleMaps\GMaps;

class MapController extends Controller
{
	public function showmap()
	{
		$myMap = new GMaps();

		$config['center'] = 'Kamiyama, Tokushima';
		$config['zoom'] = '17';
		$config['map_height'] = '500px';
		$config['geocodeCaching'] = true;
		// $config['map_height'] = '500px';
		$config['scrollwheel'] = false;

		$myMap->initialize($config);

		//add marker
		$marker['position'] = 'Kamiyama Fire Department, Tokushima';
		$marker['infowindow_content'] = 'Atsuki san would like to discuss with all tourists';
		$myMap->add_marker($marker);

		$marker['position'] = 'Café on y va, Tokushima';
		$marker['infowindow_content'] = 'Salut: Venez me visiter.';
		$marker['icon'] = 'http://maps.google.com/mapfiles/ms/micons/orange-dot.png';
		$myMap->add_marker($marker);

		$marker['position'] = 'Kamiyama Junior High School, Tokushima';
		$marker['infowindow_content'] = 'Kaz Sensei: Konnichiwa, you are all welcome to Kamiyama.';
		$marker['icon'] = 'http://maps.google.com/mapfiles/ms/micons/green-dot.png';
		$myMap->add_marker($marker);

		$marker['position'] = 'Kamiyama, Tokushima';
		$marker['infowindow_content'] = 'Yamashita san: Please come and lets have a chat together by 1pm';
		$marker['icon'] = 'http://maps.google.com/mapfiles/ms/micons/green-dot.png';
		$myMap->add_marker($marker);

		$marker['position'] = 'Kamiyama Wakamiya Shrine, Tokushima';
		$marker['infowindow_content'] = 'Do you want your own design type of shoes... Come and lets make it together';
		$marker['icon'] = 'http://maps.google.com/mapfiles/ms/micons/pink-dot.png';
		$myMap->add_marker($marker);

		$map = $myMap->create_map();

		return view('welcome')->with('map', $map);
	}

	public function index()
	{
		return view('register');
	}
	public function store(Request $request)
	{
		$t_gmaps = new t_gmaps;
		$t_gmaps->name = $request->input('name');
		$t_gmaps->message = $request->input('message');
		$t_gmaps->longitude = $request->input('longitude');
		$t_gmaps->latitude = $request->input('latitude');
		$t_gmaps->marker_color = $request->input('marker_color');

		$t_gmaps->save();
		return redirect('/map');
	}
}
