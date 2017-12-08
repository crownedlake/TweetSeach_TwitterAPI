<?php

$q = $_REQUEST["q"];

require_once('TwitterAPIExchange.php');

$settings = array(
    'oauth_access_token' => "170997791-9SozcSp1vLrmwc6QgNNnrypydbb2E6MbZT9rOjh4",
    'oauth_access_token_secret' => "uIMwakXgYCd3RM0zwdJb8USPzzUJpEWSbL1MlZ8jYktNf",
    'consumer_key' => "761S9Nd8dIimdRRgdful1lWPX",
    'consumer_secret' => "XaWHHHImL9Qke5CEE0oL5YMgfYwjrFwyslWhcEBwp41SmBiwMg"
);


$url = 'https://api.twitter.com/1.1/search/tweets.json';
$requestMethod = 'GET';
$getfield = "?q=".$q."&count=10";


$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest(); 
?>
