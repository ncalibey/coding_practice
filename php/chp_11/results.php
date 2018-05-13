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
      $search_type = $_POST['search-type'];
      $search_term = trim($_POST['search-term']);

      if (!$search_type || !$search_term) {
          echo '<p>You have not entered search details.<br />
          Please go back and try again.</p>';
          exit;
      }

      // whitelist the search_type
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

      @$db = new mysqli('localhost', '****', '*****', 'books');
      if (mysqli_connect_errno()) {
          echo '<p>Error: Could not connect to database.<br />
          Please try again later.</p>';
          echo "$db->connect_error";
          exit;
      }

      $query = "SELECT isbn, author, title, price
                FROM books WHERE $search_type = ?";
      $stmt = $db->prepare($query);
      $stmt->bind_param('s', $search_term);
      $stmt->execute();
      $stmt->store_result();

      $stmt->bind_result($isbn, $author, $title, $price);

      echo "<p>Number of books found: ".$stmt->num_rows."</p>";

      while ($stmt->fetch()) {
          echo "<p><strong>Title: ".$title."<strong>";
          echo "<br />Author: ".$author;
          echo "<br />ISBN: ".$isbn;
          echo "<br />Price: \$".number_format($price,2)."</p>";
      }

      $stmt->free_result();
      $db->close();

      ?>
  </body>
</html>
