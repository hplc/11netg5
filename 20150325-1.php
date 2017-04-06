<?php
$date = date('c');
// ob_start();
echo 'Start at: ' . $date . PHP_EOL;

for ($i=1;$i<=150;$i++)
{
	$ip = "10.1.50.$i";
	$url = "http://$ip:88/users";
	echo $url;
	// echo $ip;
	echo ': ';
	$content = file_get_contents($url);
	echo $content;
	echo PHP_EOL;
}

// $ob = ob_get_contents();
// ob_end_flush();
// file_put_contents('20150325-1_' . $date . '.log', $ob);
