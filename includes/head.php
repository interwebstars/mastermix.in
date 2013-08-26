<!doctype html>
<!--                  _                      _        _       
                     | |                    (_)      (_)      
  _ __ ___   __ _ ___| |_ ___ _ __ _ __ ___  ___  __  _ _ __  
 | '_ ` _ \ / _` / __| __/ _ \ '__| '_ ` _ \| \ \/ / | | '_ \ 
 | | | | | | (_| \__ \ ||  __/ |  | | | | | | |>  < _| | | | |
 |_| |_| |_|\__,_|___/\__\___|_|  |_| |_| |_|_/_/\_(_)_|_| |_|

 by interweb★s

-->
<html>
<head>
  
  <title><?php echo $title ?></title>
  <meta charset="UTF-8"/>

  <!-- different icons -->

  <link rel="icon" type="image/x-icon" href="assets/logo.ico" >
  <link rel="fluid-icon" href="assets/fluidicon.png" title="mastermix.in">
  <link rel="logo" type="image/svg" href="http://lastwish.es/mastermix.in/assets/logo.svg">

  <!-- different things -->

  <link rel="alternate" type="application/rss+xml" title="mastermix.in" href="http://lastwish.es/mastermix.in/rss" />
  <link rel="search" type="opensearchdescription+xml" title="mastermix.in" href="opensearch.xml">

  <!-- ios optimization -->

  <meta name="apple mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width">
  <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1" media="(device-height: 568px)">
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/iOS.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/iOS.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/iOS.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/iOS.png">

  <!-- IE 10 optimization -->

  <meta name="application-name" content="mastermix.in"/>
  <meta name="msapplication-TileColor" content="#87CA63"/>
  <meta name="msapplication-square70x70logo" content="assets/ie10-tiny.png"/>
  <meta name="msapplication-square150x150logo" content="assets/ie10-square.png"/>
  <meta name="msapplication-wide310x150logo" content="assets/ie10-wide.png"/>
  <meta name="msapplication-square310x310logo" content="assets/ie10-large.png"/>
  <meta name="msapplication-notification" content="frequency=30;polling-uri=http://notifications.buildmypinnedsite.com/?feed=http://lastwish.es/mastermix.in/rss&amp;id=1;polling-uri2=http://notifications.buildmypinnedsite.com/?feed=http://lastwish.es/mastermix.in/rss&amp;id=2;polling-uri3=http://notifications.buildmypinnedsite.com/?feed=http://lastwish.es/mastermix.in/rss&amp;id=3;polling-uri4=http://notifications.buildmypinnedsite.com/?feed=http://lastwish.es/mastermix.in/rss&amp;id=4;polling-uri5=http://notifications.buildmypinnedsite.com/?feed=http://lastwish.es/mastermix.in/rss&amp;id=5; cycle=1"/>

  <!-- style sheets -->

  <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
  <link rel="stylesheet" type="text/css" href="assets/css/global.css">
  <?php if ($searchp) echo '<link rel="stylesheet" type="text/css" href="assets/css/search.css">' ?>
  <?php if ($mixinp) echo '<link rel="stylesheet" type="text/css" href="assets/css/mixin.css">' ?>
  <?php if ($gridp) echo '<link rel="stylesheet" type="text/css" href="assets/css/grid.css">' ?>

  <!-- font -->
  
  <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro' rel='stylesheet' type='text/css'>

</head>
</head>
<body>
  <header>
    <a href="/mastermix.in" class="heading">mastermix.in</a>
    <button id="toggleabout">about</button>
    <a class="logo" href="/mastermix.in">
      <img class="logosvg" src="logo.svg" alt="logo">
    </a>
    <button id="toggleadd">add</button>
    <form action="search" accept-charset="utf-8">
      <input type="search" class="search" placeholder="search" name="q"/>
    </form>
  </header>