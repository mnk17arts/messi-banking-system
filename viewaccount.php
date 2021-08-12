<!-- CONNECTING TO THE DATABASE -->
<?php include './bits/_connectdb.php' ?>
<?php
    $txnyes = false;
    $txnlow = false;


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $fname = $_POST['fname'] ;
    $faccno = $_POST['faccno'] ;
    $fbal = $_POST['fbal'];
    $tname = $_POST['tname'] ;
    $amount = $_POST['amount'] ;

    $tsql = "SELECT * FROM `customers` WHERE `name`='$tname'";
    // echo $tsql;
    $tresult = mysqli_query($conn, $tsql);
    while($trow = mysqli_fetch_assoc($tresult)){
        $taccno = $trow['accno'];
        $tbal = $trow['balance'];
    }
    if($amount <= $fbal ){
        $asql = "INSERT INTO `transactions` (`fname`, `tname`, `faccno`, `taccno`, `amount`, `date`) VALUES ( '$fname', '$tname', '$faccno', '$taccno', '$amount', current_timestamp())";
        $aresult = mysqli_query($conn, $asql);
        $txnyes = true;     

        $balf = ($fbal - $amount) ;
        $sqlf = "UPDATE `customers` SET `balance` = '$balf' WHERE `customers`.`name` = '$fname'";
        $resultf = mysqli_query($conn, $sqlf);

        $balt = ($tbal + $amount) ;
        $sqlt = "UPDATE `customers` SET `balance` = '$balt' WHERE `customers`.`name` = '$tname'";
        $resultt = mysqli_query($conn, $sqlt);
    }
    else{
        $txnlow = true;
    }



}

if(!isset($_GET['v'])){
    header("Location: listofc.php");
}

if(isset($_GET['v'])){
    $vsno = $_GET['v'];

    $sql = "SELECT * FROM `customers` WHERE `sno`=$vsno";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $vname = $row['name'];
    $vaccno = $row['accno'];
    $vemail = $row['email'];
    $vphno = $row['phno'];
    $vbal = $row['balance'];
    $vadd = $row['address'];
}
?>

<!DOCTYPE html>
<html lang="en">
<!-- HEAD FILE -->
<?php include './bits/_head.php' ?>

<body class="index-body">
    <div class="container mb-2">
        <!-- header (brand name)  -->
        <?php include './bits/_header.php' ?>

        <div class="container indexdiv pb-2">

            <!-- BUTTONS -->
            <div class="btns mt-4 p-4">
                <button id="homebtn"> HOME </button>
                <button id="customersbtn"> CUSTOMERS </button>
                <button id="transactionsbtn"> TRANSACTIONS </button>
            </div>

            <!-- ALERTS -->
            <?php
            if($txnyes){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success</strong> Transaction was successfull
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
            if($txnlow){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Failure</strong> Transaction was unsuccessfull due to insufficient amount
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
            ?>

            <!-- ACCOUNT DETAILS HEADING -->
            <h2 class="text-center"
                style="font-family:Cambria, Cochin, Georgia, Times, Times New Roman, serif;font-weight:700;">Account
                Details</h2>

            <!-- ACCOUNT DETAILS DATA -->
            <div class="container p-4 viewdiv" style="display:flex;justify-content:center;">

                <table>
                    <thead>
                        <tr></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Account Holder Name</th>
                            <td><?php echo $vname; ?></td>
                        </tr>
                        <tr>
                            <th>Account Number</th>
                            <td><?php echo $vaccno; ?></td>
                        </tr>
                        <tr>
                            <th>Balance</th>
                            <td>
                                <div
                                    style="border:2px solid #000;background-color:#fff;width:100px;padding:5px;border-radius:10px;color:#339633 ">
                                    <?php echo $vbal; ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Email Id</th>
                            <td><?php echo $vemail; ?></td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td><?php echo $vphno; ?></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td><?php echo $vadd; ?></td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- TRANSACTION DIV -->
            <div class="form mt-4 container" style="max-width: 800px;border-radius:10px;">

                <!-- TRANSACTION HEADING -->
                <h4 class="text-center mb-0"
                    style="font-family:Cambria, Cochin, Georgia, Times, Times New Roman, serif;font-weight:700;background-color:#fff9;boder-radius:25px;padding:10px;">
                    Transfer/Send Money</h4>

                <!-- TRANSACTION FORM -->
                <form action="" method="post" style="background-color:#fff9;boder-radius:25px;padding:10px;">

                    <input type="text" name="fname" value=<?php echo $vname;?> hidden="hidden">
                    <input type="text" name="faccno" value=<?php echo $vaccno;?> hidden="hidden">
                    <input type="number" name="fbal" value=<?php echo $vbal;?> hidden="hidden">
                    <label class="form-label">
                        <h5 class="mb-0">SELECT RECEIVER<span style="color:red;">*</span></h5>
                    </label>

                    <?php
                $sqls = "SELECT * FROM `customers`";
                $results = mysqli_query($conn, $sqls);
                echo '<select class="form-select" name="tname" style="height:40px;" aria-label="Default select example" required>
                <option selected></option>';
                while($rows = mysqli_fetch_assoc($results)){
                if( $rows['sno'] != $vsno){
                    echo '
                <option value='. $rows['name'] .'>'. $rows['name'] .'</option>';
                }
                }
                echo '</select>';
                ?>
                    <div class="mb-3">
                        <label for="amount" class="form-label">
                            <h5 class="mb-0">AMOUNT<span style="color:red;">*</span></h5>
                        </label>
                        <input type="number" name="amount" class="form-control" id="amount" required>
                        <?php
                    
                    ?>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success">Send Amount</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- including footer (scripts ) -->
    <?php include './bits/_footer.php' ?>
</body>

</html>
