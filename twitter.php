<?php 

	session_start();
	
	require_once("autoload.php");
	use Abraham\TwitterOAuth\TwitterOAuth; 
	
	
	$apikey="YOUR_CONSUMER_API_KEY";
	$apisecret="YOUR_CONSUMER_SECRET(API SECRET)";
	$accesstoken="YOUR_ACCESS_TOKEN";
	$accesssecret="YOUR_ACCESS_TOKEN_SECRET";
	
	$connection = new TwitterOAuth($apikey, $apisecret, $accesstoken, $accesssecret);
	
	$tweets = $connection->get("statuses/user_timeline", ["screen_name" => "YOURSTWITTERNAME"]);
	
	//foreach($tweets as $tweet) {  //uncomment various lines to complete the lectures from The complete-web-developer-course on Udemy (old version)
		
		
		//echo $tweet->text; 
		
		//echo "<br />";
		
		//echo $tweet->favorite_count;
		
		//echo "<br />";
		
		//$id = $tweet->id;
				
		//$embed = $connection->get("statuses/oembed", ["id" => $id]);
		
		//echo $embed->html;
		
		
	//}
	print_r($tweets); 
	
	//$statuses = $connection->post("statuses/update", ["status" => "PUT YOUR STATUS HERE"]); //use this to post a status, should probably put in a check to limit characters. 
	
	
?>
