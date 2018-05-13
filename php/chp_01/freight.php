<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Bob's Auto Parts - Freight Costs</title>
    <meta charset="utf-8" />
    <style>
      html {
        font-family: sans-serif;
      }

      table {
        border: 0;
        padding: 3px;
      }

      thead tr {
        background: #ccc;
        text-align: center;
      }

      th { padding: 2px; }

      tbody td { text-align: right; }

    </style>
  </head>

  <body>
    <table>
      <thead>
        <tr>
          <th>Distance</th>
          <th>Cost</th>
        </tr>
      </thead>
      <tbody>
        <?php
        for ($distance = 50; $distance <= 250; $distance += 50){
          echo "<tr>
                <td>".$distance."</td>
                <td>".($distance / 10)."</td>
                </tr>\n";
        }
        ?>
      </tbody>
    </table>
  </body>
</html>
