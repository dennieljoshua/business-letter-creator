<?php
session_start();
if(!(isset($_SESSION['log_id']))) echo "<script>location.replace('../');</script>";
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Welcome <?= $first_name.' '.$last_name ?></title>
  <?php include 'css/css.html'; ?>
</head>

<body>
  <div class="form">

          <h1>Welcome</h1>
          <h2><?php echo $first_name.' '.$last_name; ?></h2>
          <p><?= $email ?></p>
          <a href="modified-letter.php"><button class="button button-block" name="modif"/>Modified Letter</button></a>
		  <br><a href="block-letter.php"><button class="button button-block" name="block"/>Block Letter</button></a>
		  <br><a href="semi-block-letter.php"><button class="button button-block" name="semi"/>Semi Block Letter</button></a>
		  <br><a href="log/logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>

    </div>
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
