<?php 
        session_start(); 
        error_reporting(0);
        ini_set('display_errors', 0); 
        ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Codice prova</title>
  </head>

  <body>
    <fieldset>
      <legend>Collego DB</legend>
      <form name="frmContact" method="post" action="contact.php">
        <p>
          <label for="Name">Name</label>
          <input type="text" name="name" id="name" />
        </p>
        <p>
          <label for="email">Email</label>
          <input type="text" name="email" id="email" />
        </p>
        <p>
          <label for="id">ID</label>
          <input type="text" name="id" id="id" />
        </p>
        <p>
          <label for="message">Password</label>
          <textarea name="text" id="hashpassword"></textarea>
        </p>
        <p>&nbsp;</p>
        <p>
          <input type="submit" name="Submit" id="Submit" value="Submit" />
        </p>
      </form>
    </fieldset>
  </body>
</html>
