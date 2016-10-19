<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Comments</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <h1>Comments</h1>
    </header>
    <section>
        <form action="comment.php" method="post">
            <label for="comment">Comment body</label><br>
            <textarea id="comment" name="comment" rows="8" cols="40" required="true"></textarea>
            <br><br>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required="true">
            <br><br>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" required="true">
            <br><br>
            <input type="submit" value="Send">
        </form>
    </section>
    <section>
<?php
require 'common.php';
commentsRender();
?>        
    </section>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>