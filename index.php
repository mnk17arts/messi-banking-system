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

            <!-- INDEX BODY CONTENT -->
            <div class="container p-4">
                <h2 class="text-center"
                    style="font-family:Cambria, Cochin, Georgia, Times, Times New Roman, serif;font-weight:700;">Welcome</h2>
                <i class="p-4" style="font-size:23px;font-family:cursive,sans-serif;"> Messi Banking Systems never ask
                    for your user id / password / pin no. through phone call / SMSes / e-mails.</i>
                <br><br>
                <i class="p-4" style="font-size:23px;font-family:cursive,sans-serif;"> Any such phone call / SMSes /
                    e-mails asking you to reveal credential or One Time Password through SMS could be attempt to
                    withdraw money from your account.</i>
                <br><br><i class="p-4" style="font-size:23px;font-family:cursive,sans-serif;"> NEVER share these details
                    to anyone. Messi Banking Systems wants you to be secure. If you come across any such instances
                    please inform us through e-mail to the following address <b>helpme@messi.bs.in</b></i>
            </div>
        </div>
    </div>

    <!-- including footer (scripts ) -->
    <?php include './bits/_footer.php' ?>
</body>

</html>

<!-- SOME IMP SQL QUIRIES -->
<!-- CREATE TABLE `mbs`.`customers` ( `sno` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(33) NOT NULL , `accno` VARCHAR(10) NOT NULL , `email` VARCHAR(30) NOT NULL , `phno` VARCHAR(10) NOT NULL , `balance` INT(10) NOT NULL , `address` VARCHAR(355) NOT NULL DEFAULT '4-88-22/12/9 Angara hills, Cyberabad, State - PINCODE ' , PRIMARY KEY (`sno`)) ENGINE = InnoDB; -->
<!-- INSERT INTO `customers` (`sno`, `name`, `accno`, `email`, `phno`, `balance`, `address`) VALUES (NULL, 'Arjun', '8888444422', 'arjun842@gmail.com', '8484848484', '80000', '4-88-22/12/9 Angara hills, Cyberabad, State - PINCODE '); -->
<!-- INSERT INTO `transactions` (`sno`, `fname`, `tname`, `faccno`, `taccno`, `amount`, `date`) VALUES (NULL, 'Arjun', 'Nakula', '8888444422', '8888000022', '1000', '2021-08-11 15:19:46.000000'); -->