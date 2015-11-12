<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <link rel="stylesheet" href="wiki.css">
        <title>Wiki</title>
    </head>

    <body>

      <?php

      if (isset($_GET['content'])) {
        $content = $_GET['content'];
        file_put_contents('wiki.txt', $content);
    }

    if (file_exists('wiki.txt')) {
        $content = file_get_contents('wiki.txt');
    } else {
        $content = '(no content)';
    }

    $safe_content = htmlentities($content);
    echo $safe_content;
    ?>

  <form action="wiki.php" class="hidden">

    <textarea name="content" rows="8" cols="80">
      <?php

      $safe_content = htmlentities($content);

      ?>

    </textarea>
    <input type="submit" value="Save">



  </form>
  <div id="content">
  <?php echo $safe_content; ?>
  <script src="wiki.js"></script>
  </div>
  </body>
</html>
