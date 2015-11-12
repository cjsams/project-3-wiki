<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="wiki.css">
        <meta charset="utf-8">
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
  <form action="wiki.php">
    <textarea name="content" rows="8" cols="80"></textarea>
    <input type="submit" value="Save">

    <?php

      $safe_content = htmlentities($content);

    ?>
    <div id="content">
      <?php echo $safe_content; ?>
    </div>
  </form>
  </body>
</html>
