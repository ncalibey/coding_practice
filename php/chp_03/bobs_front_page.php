<!DOCTYPE html>
<html lang="en-us">
<head>
  <title>Bob's Auto Parts</title>
  <meta charset="utf-8" />
  <style>
    html { font-family: sans-serif; }

    .container {
      width: 700px;
      margin: 0 auto;
      background-color: darkgreen;
      height: 250px;
    }

    .logo {
      box-sizing: border-box;
      width: 200px;
      height: 200px;
      margin: 25px 16px;
      float: left;
      background-color: dodgerblue;
    }
  </style>
</head>

<body>
  <header>
    <h1>Bob's Auto Parts</h1>
  </header>
  <main>
    <div class="container">
      <?php
      for ($i = 0; $i < 3; $i++) {
        echo "<div class=\"logo\"></div>";
      }
      ?>
    </div>
  </main>
</body>
</html>
