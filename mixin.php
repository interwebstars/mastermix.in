<?php include("includes/config.php") ?>
<?php

  $mixinid = $_GET["id"];

  $mixinp = true;

  $sql = "SELECT * FROM mixins WHERE id = '".$mixinid."' "; 
  $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
  $data = mysql_fetch_array($req);
  $tag = $data["tags"];
  $tags = explode(",", $tag);
  $email = $data["email"];
  $img = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=blank&s=100";
  $title = $data['name']." by ".$data['author']." - mastemix.in";

?>
<?php include("includes/head.php") ?>
<main>

  <article>
    <div class="title"><?php echo $data["name"] ?></div>
    <div class="author"><span>by </span><a href="<?php echo $data['author_link'] ?>"><?php echo $data["author"] ?></a><img src="<?php echo $img ?>" class="authorimg" alt="<?php echo $data['author'] ?>"></div>
    <div class="tags">
      <?php 
      foreach ($tags as $value) {
          echo '<a href="tag?tag='.$value.'"><span>'.$value.'</span></a>';
        }
       ?>
    </div>
    <p>
      <?php echo $data["description"] ?>
    </p>
    <pre>
<?php echo $data["code"] ?>
    </pre>
    <div class="example">
      <iframe src="http://codepen.io/<?php echo $data['example_user'] ?>/full/<?php echo $data['example_hash'] ?>"  frameborder="0" class="pen"></iframe>
    </div>
  </article>
</main>
<?php include("includes/foot.php") ?>