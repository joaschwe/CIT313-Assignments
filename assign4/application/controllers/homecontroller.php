<?php
class HomeController extends Controller{

	public function index(){
	    $feed = 'http://fox59.com/feed';

	    //instantiate object
	    $rss = new RssDisplay($feed);

	    $feed_data = $rss->getFeedItems();

//	    var_dump($feed_data);

        $channel_title = $feed_data->channel->title;
        $this->set('rss_title', $channel_title);

        $article_title = $feed_data->channel->item->title;
        $this->set('rss_article_descrip', $article_title);

	}
	
}
?>