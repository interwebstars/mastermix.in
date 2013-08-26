<?php
    header("Content-Type: application/xml; charset=ISO-8859-1");
    include("includes/config.php");
    echo "<?xml version='1.0' encoding='ISO-8859-1'?>
<rss version='2.0' xmlns:atom='http://www.w3.org/2005/Atom'>
  <channel>
    <title>mastermix.in</title>
    <link>http://lastwish.es/mastermix.in</link>
    <description>latest mixins on mastermix.in</description>
    <atom:link href='http://lastwish.es/mastermix.in/rss' rel='self' type='application/rss+xml' />";

    $sql = "SELECT * FROM mixins ORDER BY id DESC LIMIT 6 " ;
           
    $req = mysql_query($sql) or die('Oh nein !<br>'.$sql.'<br>'.mysql_error());

    while($data = mysql_fetch_array($req)) {

      echo "
    <item>  
      <title>".$data['name']."</title>
      <description><![CDATA[".$data['description']."]]></description>
      <link>http://lastwish.es/mastermix.in/mixin?id=".$data['id']."</link>
      <guid>http://lastwish.es/mastermix.in/mixin?id=".$data['id']."</guid>
      <pubDate>Wed, 02 Oct 2002 13:00:00 GMT</pubDate>
    </item>"
      ;  

    };

    echo "
  </channel>
</rss>";
?>