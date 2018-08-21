<?php

class RssDisplay extends Model {

        protected $feed_url;
        protected $num_items;

       public function __construct($url) {
           parent::__construct();
           
           $this->feed_url = $url;
       }
       
       public function getFeedItems($num_feed_items){

           $this->num_items = $num_feed_items;

            $items = simplexml_load_file($this->feed_url);
           
           return $items;
       }
       
       public function getChannelInfo(){

           $items = simplexml_load_file($this->feed_url);

           $channel_title = $items->channel->title;
           
           return $channel_title;
           
       }
  
}
