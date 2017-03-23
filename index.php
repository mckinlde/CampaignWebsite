<?php
  include 'header.php';

  /*
  $GLOBALS
  $_POST
  $_GET
  $_COOKIE
  $_SESSION
  */

  //echo $_POST['user_first_name'];

  //setcookie("name", "Daniel", time() + 86400);

  //$_SESSION['thisSession'] = "Daniel";
 ?>

  <body>
This is where you can sign up to help Doug McKinley fight for the working class.  If you support a living wage, students graduating without lifelong debt, and a path to citizenship for those striving towards the American dream, enter your information below and we will contact you with our thanks and missions.
<div>
<form action="signup.php" method="POST">
<div>
  <label for="first">First Name:</label>
  <input type="text" name="user_first_name" placeholder = "First Name">
</div>
<div>
  <label for="last">Last Name:</label>
  <input type="text" name="user_last_name">
</div>
<div>
  <label for="mail">E-mail:</label>
  <input type="email" name="user_mail">
</div>
<div>
  <label for="cell">Cell Phone:</label>
  <input type="text" name="user_phone">
</div>
I want to:
<div>
<input type="checkbox" name="register" value="register"> Register to Vote
</div>
<div>
<input type="checkbox" name="phonebank" value="phonebank"> Phonebank
</div>
<div>
<input type="checkbox" name="canvas" value="canvas"> Canvas
</div>
<div class="button">
  <button type="submit">Join the Movement</button>
</div>
</form>
</div>

    <?php
      //echo "Hi there";
      /*
      print 12;
      */
      /*
      $x = 100;
      function newCalc($x) {
        $newnr = $x * 0.75;
        echo "Here is 75% of what you wrote: ".newnr;
      }
      newCalc($x);
      echo "<br";
      $a = 10;
      newCalc($a);
      */

/*
      $array = array($_POST['user_first_name'],
                     $_POST['user_last_name'],
                     $_POST['user_mail'],
                     $_POST['user_phone']);

      //$name = $_GET['user_first_name'];
      //echo $name." is a handsome fellow";

      echo $array[0];
      */
     ?>

  </body>
<!-- Credits and Citations -->
<footer>
</footer>
</html>
