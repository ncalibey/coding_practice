<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Book-O-Rama Entry Results</title>
    <meta charset="utf-8" />
    <style>
      body { font-family: sans-serif; }
    </style>
  </head>

  <body>
      <h1>Book-O-Rama Entry Results</h1>
      <?php

      if (!isset($_POST['isbn']) || !isset($_POST['author']) ||
          !isset($_POST['title']) || !isset($_POST['price'])) {
              echo "<p>You have not entred all the required details.<br />
                   Please go back and try again.</p>";
              exit;
          }

      // create short variable names
      $isbn   = $_POST['isbn'];
      $author = $_POST['author'];
      $title  = $_POST['title'];
      $price  = $_POST['price'];
      $price  = doubleval($price);

      @$db = new mysqli('localhost', '****', '*****', 'books');

      if (mysqli_connect_errno()) {
          echo "<p>Error: Could not connect to database.<br />
                Please try again later.</p>";
          exit;
      }

      $query = "INSERT INTO books VALUES (?, ?, ?, ?)";
      $stmt = $db->prepare($query);
      $stmt->bind_param('sssd', $isbn, $author, $title, $price);
      $stmt->execute();

      if ($stmt->affected_rows > 0) {
          echo '<p>Book inserted into the database.</p>';
      } else {
          echo '<p>An error has occured.<br />
                The item was not added.</p>';
      }

      $db->close();

      ?>
  </body>
</html>
