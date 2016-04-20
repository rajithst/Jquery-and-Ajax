<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form submission with ajax</title>
  </head>
  <body>

    <form class="ajax" action="ajax/contact.php" method="post">


      <div>
        <input type="text" name="name" placeholder="name here">
      </div>

      <br>

      <div>
        <input type="text" name="email" placeholder="email here">
      </div>

      <br>

      <div>
        <textarea name="message" rows="8" cols="40"></textarea>
      </div>

      <br>

      <input type="submit" value="send">

    </form>

    <script src="js/jquery.js"></script>
    <script src="js/general.js"></script>

    </script>
  </body>
</html>
