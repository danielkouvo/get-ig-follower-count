<?php

// Access token for the Instagram account
$access_token = 'Insert Instagram access token here';

// Get data from Instagram API
$data = file_get_contents("https://api.instagram.com/v1/users/self/?access_token=" . $access_token);

// Convert json with objects converted into associative arrays
$json = json_decode($data, true);

// Output follower count
echo $json['data']['counts']['followed_by'];

?>