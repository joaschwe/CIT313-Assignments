<?php
class WeatherController extends Controller{

    public $result;

	public function index() {
	    $this->set(result,false);
	}

	public function getResults() {
        $xml = simplexml_load_file('http://api.wunderground.com/api/2510a1887ee3b519/conditions/q/46040.xml');
        $this->set(result,true);
        $this->set(weather, $xml);
    }
	
}
?>