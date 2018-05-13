<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Book-O-Rama Search Results</title>
    <meta charset="utf-8" />
    <style>
      body { font-family: sans-serif; }
    </style>
  </head>

  <body>
      <h1>Book-O-Rama Search Results</h1>
      <?php

      // create short variable names
      $search_type = $_POST['search_type'];
      $search_term = trim($_POST['search_term']);

      if (!$search_term || !$search_type) {
          echo '<p>You have not entered search details.<br />
          Please go back and try again.</p>';
          exit;
      }

      // whitelist the searchtype
      switch ($search_type) {
          case 'title':
          case 'author':
          case 'isbn':
            break;
          default:
            echo '<p>That is not a valid search type. <br />
            Please go back and try again.</p>';
            exit;
      }

      // set up for using PDO
      $user = '****';
      $pass = '*****';
      $host = 'localhost';
      $db_name = 'books';

      // set up DSN
      $dsn = "mysql:host=$host;dbname=$db_name";

      // connect to database
      try {
          $db = new PDO($dsn, $user, $pass);

          // perform query
          $query = "SELECT isbn, author, title, price
                    FROM books WHERE $search_type = :searchterm";
          $stmt = $db->prepare($query);
          $stmt->bindParam(':searchterm', $search_term);
          $stmt->execute();

          // get number of retunred row
          echo "<p>Number of books found: ".$stmt->rowCount()."</p>";

          // display each returned row
          while($result = $stmt->fetch(PDO::FETCH_OBJ)) {
              echo "<p><strong>Title: ".$result->title."</strong>";
              echo "<br />Author: ".$result->author;
              echo "<br />ISBN: ".$result->isbn;
              echo "<br />Price: \$".number_format($result->Price, 2)."</p>";
          }

          // disconnect from database
          $db = NULL;
      } catch(PDOException $e) {
          echo "Error: ".$e->getMessage();
          exit;
      }

      ?>
  </body>
</html>
