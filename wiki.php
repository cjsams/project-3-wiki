<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <link rel="stylesheet" href="wiki.css">
        <title>Wiki</title>
    </head>

    <body>
      <div>
        Leave a message for the next person.
      </div>

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

    ?>

  <form action="wiki.php" class="hidden">

    <textarea name="content" rows="8" cols="80"></textarea>
    <input type="submit" value="Save">
    <?php

    $safe_content = htmlentities($content);

    ?>
  <div id="content">
    <?php echo $safe_content; ?>
  </div>
  </form>


    <script src="wiki.js"></script>
  </body>

</html>
