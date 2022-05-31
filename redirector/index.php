
<?php


 $url = $_SERVER['REQUEST_URI'];
$url_components = parse_url($url);
parse_str($url_components['query'], $params);
$cloakjson = file_get_contents('http://66.59.199.128/json/'.$params['t'].'?e='.$params['e'].'&p='.$params['p'].'&f='.$params['f'].'');
$cloakjsons = json_decode($cloakjson, true);
print_r($cloakjsons);
// header("Location: ".$cloakjsons);
?>
