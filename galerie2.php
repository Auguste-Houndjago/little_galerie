<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css'> 
    <link rel="stylesheet" href="style_page2.css">


    <style>

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

main {
  height: 100vh;
  height: 100svh;
  display: grid;
  place-items: center;
  background-color: black;
}

.accordion {
  list-style-type: none;
  display: flex;
  gap: 0.15rem;
  padding: 0.15rem;

  &:hover :not(.item:hover) {
    flex: 1;

    & img {
      transform: scale(1.5);
    }
  }

  & .item {
    flex: 1;
    height: 70vmin;
    cursor: pointer;
    overflow: hidden;
    transition: flex 1s;

    &:last-of-type {
      flex: 5;

      & img {
        transform: scale(1);
      }
    }

    &:hover {
      flex: 5;

      & img {
        transform: scale(1);
      }
    }

    & img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transform: scale(1.5);
      transition: transform 0.75s ease-in-out;
    }
  }
}

.container{
    border: 10px solid  #e4babae8;

}
    </style>

</head>
<body>
    
<div class="container">
  <?php
  require("navigation.php") ;
  ?>

<main>
  <ul class='accordion'>
<?php
$dir = 'images/'; 
$files = scandir($dir);
foreach($files as $file) {
    if($file == '.' || $file == '..') continue;
?>
    <li class='item'><img src='<?php echo $dir . $file; ?>'></li>
<?php
}
?>
  </ul>
</main>

</div>



</body>
</html>