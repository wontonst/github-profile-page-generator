<?php

require_once('php-github-api/vendor/autoload.php');

$client = new Github\Client();
include('logininfo.php');
$client->authenticate($cid,$cs,Github\Client::AUTH_URL_CLIENT_ID);
//$repositories = $client->api('wontonst')->repositories('writeart');
$wontonst = $client->api('user')->repositories('wontonst');
//var_dump($wontonst[0]);
//var_dump($client);
foreach($wontonst[0] as $k=>$v)
echo $k."\n";

foreach($wontonst as $v)
{
echo $v['name']."\n";
}
?>