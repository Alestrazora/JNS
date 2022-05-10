<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheets" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Our contacts</title>
</header>
<body>
  <?php require "blocks/header.php" ?>
  <div class="container mt-5">
  <h3>Contact form</h3>
  <form action = "check.php" method="post">
    <input type ="email" name ="email" placeholder ="Enter Email" class ="form-control"><br>
    <textarea name="message" class ="form-control" placeholder ="Enter Your message"></textarea>
    <button type ="submit" name="Send" class="btn btn-success">Send Message</button>
  </form>
</div>
  
  <?php require "blocks/footer.php" ?>
  </body>
</html>
