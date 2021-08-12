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

            <!-- CUSTOMER LIST HEADING -->
            <h2 class="text-center"
                style="font-family:Cambria, Cochin, Georgia, Times, Times New Roman, serif;font-weight:700;">Customer
                List</h2>

            <!-- CUSTOMER LIST DIV -->
            <div class="container tablediv p-4">
                <table class="table" id="myTable" style="font-weight:600;color:#111;margin: 5px 0px;">
                    <thead>
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Name </th>
                            <th scope="col">Account No.</th>
                            <th scope="col">Email Id</th>
                            <th scope="col">Balance</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php

          // sql query to be executed to insert data
          $sql = "SELECT * FROM `customers`";
          $result = mysqli_query($conn, $sql);
          $sno = 0 ;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1 ;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['name'] . "</td>
            <td>". $row['accno'] . "</td>
            <td>". $row['email'] . "</td>
            <td style='color:#339633;'>". $row['balance'] . "</td>
            <td>". "<button type='button' style='background-color : orangered;' id=" . $row['sno'] . " class='viewacc btn btn-primary'>View Account</button></td>
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