<?php
ini_set('display_errors', 1);
require_once('lib/TwitterAPIPHP/Connector/TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "148360775-mPohhUm5fDYFo93GTSEJY38nhzK3hKXK0ueeryqL",
    'oauth_access_token_secret' => "LAvOfefoKRNJNbcTsCt2wp7VnXWbU5LFSAVlMPV980jGn",
    'consumer_key' => "KLCWXQnv9AIMilDmLWA1BQ",
    'consumer_secret' => "UdXy0uby9Odx1TKb5RwfZGHBtaLTG1vYH6Y4oyera0"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST';

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'screen_name' => 'usernameToBlock', 
    'skip_status' => '1'
);

/** Perform a POST request and echo the response **/
/*$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
             ->setPostfields($postfields)
             ->performRequest();*/

/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/
$url = 'https://api.twitter.com/1.1/followers/ids.json';
$url="https://api.twitter.com/1.1/statuses/user_timeline.json";
$getfield = '?screen_name=menarini_es&count=5';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
