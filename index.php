<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/navbar.css" type="text/css">

    <title>Basic Banking System</title>

</head>

<body style="background-color: #fffb94;">

    <?php
    include 'navbar.php';
    ?>

    <div class="container-fluid">
        <div class="row py-1">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    <h2>Welcome to</h2>
                    <h1>V Bank</h1>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.jpg" alt="bankimg" class="img-fluid pt-2">
            </div>
        </div>
        <hr>
        <br>
        <div class="row activity text-center">
            <div class="col-md act">
                <img src="img/user.jpg" alt="userimg" class="img-fluid">
                <br>
                <a href="createuser.php"><button class="bg-dark" >Create User</button></a>
            </div>

            <div class="col-md act">
                <img src="img/transfer.jpg" alt="transferimg" class="img-fluid">
                <br>
                <a href="transfermoney.php"><button class="bg-dark">Make a Transaction</button></a>
            </div>

            <div class="col-md act">
                <img src="img/history.jpg" alt="historyimg" class="img-fluid">
                <br>
                <a href="transactionhistory.php"><button class="bg-dark">Transaction History</button></a>
            </div>

        </div>

    </div>

    <footer class="text-center mt-5 py-2 fixed-bottom bg-dark text-light">
        <p>&copy 2021. Made by <b>Vishal Singh</b> under the guidance of Simran Srivastava<br>GRIP TheSparksFoundation.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>