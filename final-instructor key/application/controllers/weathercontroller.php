<?php

class WeatherController extends Controller{
	
	public function index(){
            
            $this->set('result',false);
            
	}
        
        public function getResults() {
            
            $xml = simplexml_load_file('http://api.worldweatheronline.com/free/v2/weather.ashx?q='.$_POST['zip'].'&format=xml&num_of_days=2&key=d494d4d920bccb760b22324add620');

            //var_dump($xml);

            $this->set('result',true);
            $this->set('weather', $xml);
            
        }
}
?>
