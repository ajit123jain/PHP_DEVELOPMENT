<?php
$url = "http://www.w3schools.com";

if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
	//$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	//!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)
    echo("$url is a valid URL");
} else {
    echo("$url is not a valid URL");
}
?>