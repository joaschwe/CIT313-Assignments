<?php

class HomeController extends Controller{

      //protected $user;
	
	public function index() {

           

            $url = "http://rss.cnn.com/rss/cnn_us.rss";
            $rss = new RssDisplay($url);
            
            //get title from model
            $rss_title = $rss->getChannelInfo();

            $this->set('rss_title', $rss_title);
            //var_dump($rss_title);

           

            $data = $rss->getFeedItems();
            $items = $data->channel->item;
            $this->set('items', $items);
 
	}
}
?>

    

            
         