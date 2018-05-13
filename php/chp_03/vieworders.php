<?php
  // create short variable name
  $document_root = $_SERVER['DOCUMENT_ROOT'];
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Bob's Auto Parts - Order Results</title>
    <meta charset="utf-8" />
    <style>
      html { font-family: Helvetica, Arial, sans-serif; }

      table { border-collapse: collapse; }

      th, td {
        border: 1px solid black;
        padding: 6px;
      }

      th { background-color: #ccf;}

      .number { text-align: right; }

    </style>
  </head>

  <body>
    <h1>Bob's Auto Parts</h1>
    <h2>Customer Orders</h2>

    <?php
      // Read in the entire file
      // Each order becomes an element in the array
      $orders = file("$document_root/php_practice/chp_03/orders/orders.txt");

      // Count the number of orders in the array
      $number_of_orders = count($orders);

      if ($number_of_orders == 0) {
        echo "<p><strong>No orders pending.<br />
              Please try again later.</strong></p>";
        exit;
      }

      echo "<table>\n";
      echo "<thead>
              <tr>
                <th scope=\"col\">Order Date</th>
                <th scope=\"col\">Tires</th>
                <th scope=\"col\">Oil</th>
                <th scope=\"col\">Spark Plugs</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\">Address</th>
              </tr>
            </thead>
            </tbody>";

      for ($i = 0; $i < $number_of_orders; $i++) {
        // Split up each line
        $line = explode("\t", $orders[$i]);

        // Keep only the number of items ordered
        $line[1] = intval($line[1]);
        $line[2] = intval($line[2]);
        $line[3] = intval($line[3]);

        // Output each order
        echo "<tr>
                <td>".$line[0]."</td>
                <td class=\"number\">".$line[1]."</td>
                <td class=\"number\">".$line[2]."</td>
                <td class=\"number\">".$line[3]."</td>
                <td class=\"number\">".$line[4]."</td>
                <td>".$line[5]."</td>
              </tr>";
      }
      echo "</tbody>";
      echo "</table>";
    ?>
  </body>
</html>
