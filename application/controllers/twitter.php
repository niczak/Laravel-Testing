<?php

class Twitter_Controller extends Base_Controller {
	
	public function action_index() {
		$tweets = $this->_getTweets('niczak');
		return View::make('twitter.index')->nest('header', 'partials.header')->nest('footer', 'partials.footer')->with('tweets', $tweets);
	}


	private function _getTweets($username) {
    $url = 'http://search.twitter.com/search.json?q='.urlencode($username)."&include_entities=true&rpp=3";
    $ch = curl_init($url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $json = curl_exec($ch);
    curl_close ($ch);

    return json_decode($json);
	}


}
