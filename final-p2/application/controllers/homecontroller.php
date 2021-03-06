<?php
class HomeController extends Controller{

	public function index(){
	    $feed = 'http://feeds.reuters.com/reuters/technologyNews';

	    //instantiate object
	    $rss = new RssDisplay($feed);

	    $feed_data = $rss->getFeedItems();

//	    var_dump($feed_data);

        $channel = $feed_data->channel;
        $this->set('rss_channel', $channel);

        $channel_items = $feed_data->channel->item;
        $this->set('rss_channel_items', $channel_items);

        $channel_title = $feed_data->channel->title;
        $this->set('rss_title', $channel_title);

        $article_title = $feed_data->channel->item->title;
        $this->set('rss_article_title', $article_title);

        $article_descrip = $feed_data->channel->item->description;
        $this->set('rss_article_descrip', $article_descrip);

        $article_link = $feed_data->channel->item->link;
        $this->set('rss_article_link', $article_link);

        $article_pubDate = $feed_data->channel->item->pubDate;
        $this->set('rss_article_pubDate', $article_pubDate);

	}

}
?>
