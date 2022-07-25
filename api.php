<?php

if (isset($_GET["endpoint"])) {
	$endpoint = urldecode($_GET["endpoint"]);
    $url = 'https://guarden:kdS1zit{GJ@api.guarden.jp/wp-json/wp/v2/'.$endpoint;
    $basic = array(
		'User-Agent: My User Agent 1.0',
		'Authorization: Basic '.base64_encode('guarden:kdS1zit{GJ')
	);
    $options = array(
		'http' => array(
		'header' => implode("\r\n", $basic)
		)
    );
    $html = file_get_contents($url, false, stream_context_create($options));
    echo $html;
} else {
    echo 'error';
}
