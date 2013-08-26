<?php include("includes/config.php") ?>
<?php
  
  $tagname = $_GET["tag"];

  $title = "Mixins tagged '".$tagname."' - mastemix.in";

  $gridp = true;

?>
<?php include("includes/head.php") ?>
<main>
    <?php
        
        $sql = "SELECT * FROM  mixins WHERE tags LIKE '%".$tagname."%' ORDER BY id DESC"; 
           
        $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
        while($data = mysql_fetch_array($req)) { 
        
        $tag = $data["tags"];
        $tags = explode(",", $tag);

        echo '
        <section>
          <div class="title">'.$data['name'].'</div>
          <div class="author">
            <span>by </span>
            <a href="'.$data['author_link'].'" target="_blank">'.$data['author'].'</a>
          </div>
          <div class="preprocessor '.$data['preprocessor'].'">'.$data['preprocessor'].'
          </div>
          <pre>
'.$data['code'].'
          </pre>
          <div class="more">
            <div class="tags">';
      foreach ($tags as $value) {
        echo '<a href="tag?tag='.$value.'"><span>'.$value.'</span></a>';
      }
      echo '

            </div>
            <div class="info">
              <a href="mixin?id='.$data['id'].'">whole code</a>
            </div>
          </div>
        </section>'; 
        }
      ?>

</main>
<?php include("includes/foot.php") ?>