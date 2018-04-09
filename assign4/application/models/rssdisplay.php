<?php

class RssDisplay extends Model {

    protected $feed_url;
    protected $num_items;

    public function __construct($url) {
        parent::__construct();

        $this->feed_url = $url;
    }

//    public function getFeedItems() {
    public function getFeedItems($num_items = 8) {

//        if($num_items < 8){
//            $somethingB = ' LIMIT '.$num_items;
//        }
//
//        $somethingA = $somethingB;




        $items = simplexml_load_file($this->feed_url);
        return $items;
//        $array = (array)$items;
//        $array = array($items);
//        echo $array;
//        return $array;

//        ^^ example: $xml = simplexml_load_string($file);
//                 $array = (array)$xml;


//        $arrlength = count($array);

//        for ($x = 0; $x < $num_items; $x++) {
//            array[$array] = $items;
//            echo $array[$x];
//        }
    }
}