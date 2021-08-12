<!-- CONNECTING TO THE DATABASE -->
<?php include './bits/_connectdb.php' ?>

<!DOCTYPE html>
<html lang="en">
<!-- HEAD FILE -->
<?php include './bits/_head.php' ?>

<body class="index-body">
    <div class="container mb-2">
        <!-- header (brand name)  -->
        <?php include './bits/_header.php' ?>

        <div class="container indexdiv">

            <!-- BUTTONS -->
            <div class="btns mt-4 p-4">
                <button id="homebtn"> HOME </button>
                <button id="customersbtn"> CUSTOMERS </button>
                <button id="transactionsbtn"> TRANSACTIONS </button>
            </div>

            <!-- TRANSACTIONS TABLE DIV -->
            <div class="container tablediv p-4">
                <table class="table" id="myTable" style="font-weight:600;color:#111;margin: 5px 0px;">
                    <thead>
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Sender </th>
                            <th scope="col">Receiver</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php

          // sql query to be executed to FETCH data
          $sql = "SELECT * FROM `transactions`";
          $result = mysqli_query($conn, $sql);
          $sno = 0 ;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1 ;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td><div style='display:flex;flex-direction:column;'> <div>". $row['fname'] . "</div> <div style='color:#555;'>[". $row['faccno'] . "]</div></div></td>
            <td><div style='display:flex;flex-direction:column;'> <div>". $row['tname'] . "</div> <div style='color:#555;'>[". $row['taccno'] . "]</div></div></td>
            <td class='text-danger'>". $row['amount'] . "</td>
            <td>". $row['date'] . "</td>
          </tr>" ;
          }

          ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <!-- including footer (scripts ) -->
    <?php include './bits/_footer.php' ?>
</body>

</html>