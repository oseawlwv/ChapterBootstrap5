<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Send mail to OSEA Chapter 102</title>
  <link href="_CSS/main.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Gruppo&family=Martel:wght@700&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="icon" href="_Graphics/Logos/favicon.ico" type="image/ico"/>

</head>

<body class="mail">

 <?php include("header.html");?>
  <br>


<form class="email" action="mailer.php" method="post">
  <h5>Contact Chapter 102</h5>
<p>Name:</p>
<input type="text" name="name" />
<p>E-mail:</p>
<input type="text" name="email" />
<p>Subject:</p>
<input type="text" name="subject" />
<p>Message:</p>
<textarea name="message"></textarea></p>
<input class="send" type="submit" value="Send">
</form>
<br>

<?php include("footer.html");?>

</body>



</html>
