<?php
  require_once "file_exceptions.php";

  // create short variable names
  $tireqty = $_POST['tireqty'];
  $oilqty = $_POST['oilqty'];
  $sparkqty = $_POST['sparkqty'];
  $address = preg_replace('/\t|\R/', ' ', $_POST['address']);
  $document_root = $_SERVER['DOCUMENT_ROOT'];
  $date = date('H:i, jS F Y')
    ?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Bob's Auto Parts - Order Result</title>
    <meta charset="utf-8" />
    <style>
      html {
        font-family: Helvetica, Arial, sans-serif;
      }
    </style>
  </head>

  <body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2>
    <?php
      $totalqty = $tireqty + $oilqty + $sparkqty;

    if ($totalqty == 0) {
        echo '<p style="color: red;">';
        echo 'You did not order anything on the previous page!';
        echo '</p>';
        exit;
    } else {
        echo "<p>Order processed at ".$date."</p>";
        echo '<p>Your order is as follows:</p>';
        if ($tireqty > 0) {
            echo htmlspecialchars($tireqty).' tires<br />';
        }
        if ($oilqty > 0) {
            echo htmlspecialchars($oilqty).' bottles of oil<br />';
        }
        if ($sparkqty > 0) {
            echo htmlspecialchars($sparkqty).' spark plugs<br />';
        }
    }

      echo "<p>Items ordered: ".$totalqty."<br />";
      $totalamount = 0.00;

      define('TIREPRICE', 100);
      define('OILPRICE', 10);
      define('SPARKPRICE', 4);

      // calculate tire discount
    if ($tireqty < 10) {
        $discount = 0;
    } elseif (($tireqty >= 10) && ($tireqty <= 49)) {
        $discount = TIREPRICE * 0.05;
    } elseif (($tireqty >= 50) && ($tireqty <= 99)) {
        $discount = TIREPRICE * 0.10;
    } elseif (($tireqty >= 100)) {
        $discount = TIREPRICE * 0.15;
    }

      $totalamount = ($tireqty * TIREPRICE - $discount)
                   + $oilqty * OILPRICE
                   + $sparkqty * SPARKPRICE;

      echo "Subtotal: $".number_format($totalamount, 2)."<br />";

      $taxrate = 0.10;  // local sales tax is 10%
      $totalamount *= (1 + $taxrate);
      echo "Total including tax: $".number_format($totalamount, 2)."</p>";
      echo "<p>Address to ship to is ".htmlspecialchars($address)."</p>";

      $outputstring = $date."\t".$tireqty." tires \t".$oilqty." oil\t"
                      .$sparkqty." spark plugs\t\$".$totalamount
                      ."\t". $address."\n";

      // open file for appending
    try {
        if (!(@$fp = fopen("$document_root/php_practice/chp_02/orders/orders.txt", 'ab'))) {
            throw new FileOpenException();
        }

        if (!flock($fp, LOCK_EX)) {
            throw new FileLockException();
        }

        if (!fwrite($fp, $outputstring, strlen($outputstring))) {
            throw new FileWriteException();
        }

        flock($fp, LOCK_UN);
        fclose($fp);
        echo "<p>Order written.</p>";
    } catch (FileOpenException $foe) {
        echo "<p><strong>Orders file could not be opened.<br />
             Please contact our webmaster for help.</strong></p>";
    } catch (Exception $e) {
        echo "<p><strong> Your order could not be processed at this time.
             Please try again later.</strong></p>";
    }

    ?>
  </body>
</html>
