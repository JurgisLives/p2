<!DOCTYPE html>
<html>
 <head>
 
 <?php require "logic.php"; ?>
 <link rel ="stylesheet" type= "text/css" href="styles.css"/>
  <meta charset="UTF-8">
  <title>xkcd password generator</title>
  <link name = "wordlist" href = 'word_list.txt'/>
  
  
 </head>

  <form class="form" action="index.php" method="post">
<h3>How many words in your password?</h3>
(Up to 9)<br>
<p class = >
<input class="number" type="number" name="request" min= "0" max= "9" placeholder = "#?" required><br>
</p>
<input class= "button" type="radio" name="character" value="yes" checked>Add a character
 <br>
  <input class= "button" type="radio" name="character" value="no">No Thanks!
 <br>
 <br>
 <input  class= "button" type="radio" name="number" value="yes" checked>Add a couple of numbers!
  <br>
  <input  class= "button" type="radio" name="number" value="no">I'll pass on the numbers.<br><br>
  <input  id="press" class= "press" type="submit" value="Submit">
  </form>
  
<body class="body">


<h3 class="intro"> Your Password is:</h3>

<h4 id="password" class="password">
<?php
//echo camel-case password
foreach($key as $item) 
{
    echo ucwords($item);
}?>
</h4>
<br>
</body>

</html>

