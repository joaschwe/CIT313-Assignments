<?php
class WeatherController extends Controller{

    public $result;

	public function index() {
	    $this->set(result,false);
	}

	public function getResults() {
        $xml = simplexml_load_file('http://api.worldweatheronline.com/premium/v1/weather.ashx?key=c915aee8414440959f752714180904&q='.$_POST["zip"].'&format=xml&num_of_days=2');
        $this->set(result,true);
        $this->set(weather, $xml);
    }
	
}
?>