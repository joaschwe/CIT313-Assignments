<?php
class WeatherController extends Controller{

	public function index() {
	    $xml = simplexml_load_file('http://api.worldweatheronline.com/premium/v1/weather.ashx?key=c915aee8414440959f752714180904&q=46076&format=xml&num_of_days=2');
	    $this->set(weather, $xml);

	}
	
}
?>