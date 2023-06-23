
<?php
require 'connection.php';
?>
<!DOCTYPE html>

<html>
<head>
    
    
    <title>home</title>
    <link rel="stylesheet" href="gallery.css">
</head>
<body>
    <div class="container">
        
        <div class="nav-bar">
            <div class="navbar">
                <img src="" alt="logo" class="logo">
                <a href="upload.html"><button>upload</button></a>
            </div>
        </div>
        <?php
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM tb_upload ORDER BY id DESC")
      ?>
    <?php foreach ($rows as $row) : ?>
    
    <div class="postcard">
        <div class="postcard_left">
            <img src="user.jpg"alt="profile">

        </div>

        <div class="postcard_right">
            <p><?php echo $row["name"]; ?> </p>
            <img src="img/<?php echo $row["image"]; ?>" alt="<?php echo $row['image']; ?>">
        </div>
    </div>
    </br>
    <?php endforeach; ?>
    


    </div>

</body>    
</html>