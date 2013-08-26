<?php include("includes/config.php") ?>
<?php

  $title = "mastemix.in";

  $searchp = true;
  $gridp = true;

  $search_query = $_GET["q"];
  $re = $_GET["restrict"];
  $pp = $_GET["processor"];

?>
<?php include("includes/head.php") ?>
<main>

  <form method="get" action="search" class="search-form">

    <div>
      <input type="search" placeholder="search" value="<?php echo $search_query ?>" name="q" required >
    </div>

    <div>
      <label>Restrict search to:</label>
      <select name="restrict">
        <option value="nothing" <?php if ($re == "nothing") echo "selected" ?> >Nothing</option>
        <option value="title" <?php if ($re == "title") echo "selected" ?> >Title only</option>
        <option value="t-d-t" <?php if ($re == "t-d-t") echo "selected" ?> >Title, description and tags</option>
        <option value="code" <?php if ($re == "code") echo "selected" ?> >Code only</option>
        <option value="user" <?php if ($re == "user") echo "selected" ?> >User only</option>
      </select>
    </div>
  
    <div>
      <label>Preprocessor:</label>
      <select name="processor">
        <option value="idontcare" <?php if ($pp == "idontcare") echo "selected" ?> >I don't Care</option>
        <option value="scss" <?php if ($pp == "scss") echo "selected" ?> >scss</option>
        <option value="sass" <?php if ($pp == "sass") echo "selected" ?> >sass</option>
        <option value="less" <?php if ($pp == "less") echo "selected" ?> >less</option>
        <option value="stylus" <?php if ($pp == "stylus") echo "selected" ?> >stylus</option>
      </select>
    </div>

    <div>
      <input type="submit" >
    </div>

  </form>

  </div>
    <?php

      // sets the query for the preprocessor ( has to be done for the restriction / filter )

      switch ($pp) {
        case "idontcare":
          $preprocessor = "";
          break;
        
        case "scss":
          $preprocessor = "preprocessor LIKE 'scss' AND";
          break;
        
        case "sass":
          $preprocessor = "preprocessor LIKE 'sass' AND";
          break;
        
        case "less":
          $preprocessor = "preprocessor LIKE 'less' AND";
          break;
        
        case "stylus":
          $preprocessor = "preprocessor LIKE 'stylus' AND";
          break;
        
        default:
          $preprocessor = "";
          break;
      }
      
      switch ($re) {
        case "nothing":
          $query = " name LIKE '%".$search_query."%' OR author LIKE '%".$search_query."%' OR code LIKE '%".$search_query."%' OR description LIKE '%".$search_query."%' OR tags LIKE '%".$search_query."%' ";
          break;
        
        case "title":
          $query = " name LIKE '%".$search_query."%' ";
          break;
        
        case "t-d-t":
          $query = " name LIKE '%".$search_query."%' OR description LIKE '%".$search_query."%' OR tags LIKE '%".$search_query."%' ";
          break;
          
        case "code":
          $query = " code LIKE '%".$search_query."%' ";
          break;
          
        case "user":
          $query = " author LIKE '%".$search_query."%' ";
          break;
          
        default:
          $query = " name LIKE '%".$search_query."%' OR author LIKE '%".$search_query."%' OR code LIKE '%".$search_query."%' OR description LIKE '%".$search_query."%' OR tags LIKE '%".$search_query."%' ";
          break;
      }

      //  $sql = "SELECT * FROM mixins WHERE name LIKE '%".$search_query."%' OR code LIKE '%".$search_query."%' OR description LIKE '%".$search_query."%' OR tags LIKE '%".$search_query."%' ".$preprocessor." ";

      //  $sql = "SELECT * FROM mixins WHERE name LIKE '%' ".$preprocessor." ";

      //  $sql = "SELECT * FROM mixins WHERE ".$preprocessor." name LIKE '%".$search_query."%' OR code LIKE '%".$search_query."%' OR description LIKE '%".$search_query."%' OR tags LIKE '%".$search_query."%' ";
      
          $sql = "SELECT * FROM mixins WHERE".$query;

      //echo "pp: ".$preprocessor."<br>";
      //echo "sql: ".$sql;


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