<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="withdraw.scss">
    <title>WebBanking</title>
</head>
<body>
    <div class="container">
        <div class="icon-info">
            <div class="user-icon">
                <img src="profile.png" alt="user">    
            </div>
            <div class="user-info">
                <div class="name" href="login.php">
                    <label for="username">Hi! </label><br>
                    <div class="balance">Balance : <strong>
                        <?php
                        $errors = array();
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        $sql = "SELECT AllMoney FROM banking ";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row["AllMoney"];
                            }
                        }
                        echo " THB";
                        mysqli_close($conn);
                        ?>
                        </strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="head">
            <label for="text">Withdraw</label>
        </div>
        <div class="content">
            <form action="finish.php" method="post">
                <div class="form">
                    <input type="text" placeholder="0.00" name = "withdraw">
                </div>
                <div class="button" name="withdraw">
                    <script>
                        function cf(){
                            confirm("ยืนยันที่จะถอนเงินหรือไม่?");
                            if (cancel) {
                                alert("ได้ยันยืนการถอนออกจากระบบเเล้ว");
                            } else {
                                alert("ได้ยกเลิกการถอนเเล้ว!");
                            } return cancel
                        }
                    </script>
                    <div class="add" action="finish.php">
                        <button type="submit" onclick="cf()">
                            <img src="withdraw.png" alt="wd">
                        </button>
                    </div>
                    <div class="back" action="home.php">
                        <button type="submit">
                            <img src="home.png" alt="home">
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>