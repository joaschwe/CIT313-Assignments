<?php

class RssDisplay extends Model {

    protected $feed_url;
    protected $num_items;

    public function __construct($url) {
        parent::__construct();

        $this->feed_url = $url;
    }

    public function getFeedItems() {
        $items = simplexml_load_file($this->feed_url);
        return $items;
//        $array = (array)$items;
//        return $array;

//        $xml = simplexml_load_string($file);
//        $array = (array)$xml;
    }
}