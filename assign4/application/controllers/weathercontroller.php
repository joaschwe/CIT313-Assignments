<?php
class WeatherController extends Controller{

	public function index(){
	    $xml = simplexml_load_file('api.worldweatheronline.com/free/v2/weather.ashx?q=46076&format=xml&num_of_days=2&key=7360a0596f8f4826b1845340180904');
	    $this->set(weather, $xml);

	}
	
}
?>