<?php include("includes/config.php") ?>
<?php

  $title = "mastermix.in | The repository for mixins";

  $gridp = true;
  
?>
<?php include("includes/head.php") ?>
<main>
    <?php 
      
        $sql = "SELECT * From mixins ORDER BY id DESC"; 
           
        $req = mysql_query($sql) or die('Oh nein !<br>'.$sql.'<br>'.mysql_error());
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
          <div class="preprocessor '.$data['preprocessor'].'">'.$data['preprocessor'].'</div>
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

<?php 

if (isset($_POST["submit"]) && $_POST["name"] != "" && $_POST["author"] != "" && $_POST["author_link"] != "" && $_POST["code"] != "") {
  
  if(isset($_POST['code'])) {
    $name= $_POST['name'];
    $author= $_POST['author'];
    $author_link= $_POST['author_link'];
    $code= $_POST['code'];
    $preprocessor= $_POST['preprocessor'];
    $email=$_POST['email'];
    $description=$_POST['description'];
    $example_user=$_POST['example_user'];
    $example_hash=$_POST['example_hash'];
  } else {
    $code="";
  }
  
  if(isset($_POST['tags'])) {
    $tags= $_POST['tags'];
  } else {
    $tags="";
  }
  
  
    $sql = " INSERT IGNORE INTO `mixins` (`id`, `name`, `author`, `author_link`,`email`,`code`,`preprocessor`,`description`,`example_user`,`example_hash`,`tags`) VALUES (NULL,'$name','$author','$author_link','$email','$code','$preprocessor','$description','$example_user','$example_hash','$tags')";
     
    mysql_query($sql) or  die(mysql_error()); 
}

?>