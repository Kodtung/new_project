<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
  die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
}

if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "" . $conn->error;
}


if (isset($_POST['AllMoney'])) {
	$withdraw = (int) $_POST['withdraw'];

	if ($withdraw > 0) {
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			$balance = (int) $row["AllMoney"];
			$sum = $balance - $withdraw;
        }

        $sql_update = "UPDATE SET AllMoney ='$sum', withdraw ='$withdraw'";
    }
}

$conn->close();
?>