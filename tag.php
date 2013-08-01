<?php include("includes/config.php") ?>
<?php $title = "mastemix.in" ?>
<?php include("includes/head.php") ?>
<main>
    <?php

    $tagname = $_GET["tag"];
        
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
          <pre>
'.$data['code'].'
          </pre>
          <div class="preprocessor '.$data['preprocessor'].'">'.$data['preprocessor'].'</div>
          <div class="more">
            <div>
              <div class="tags">';
        foreach ($tags as $value) {
          echo '<a href="tag.php?tag='.$value.'"><span>'.$value.'</span></a>';
        }
        echo '

              </div>
              <div class="info">
                <a href="mixin.php?id='.$data['id'].'">whole code</a>
              </div>
            </div> 
          </div>
        </section>'; 
        }
      ?>

</main>
<?php include("includes/foot.php") ?>