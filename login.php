<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.scss">
    <title>WebBanking</title>
</head>
<body>
    <div class="logo">
        <img src="money-transfer.png" alt="logo_money">
    </div>
    <div class="container">
        <div class="login-header">
            <h1>Sign In</h1>
        </div>
        <form action="home.php" 
        class="login-form">
            <div class="login-form-content">
                <div class="form-item">
                    <label for="username"></label>
                    <input type="text" placeholder="Enter Username" id="username" required autofocus>
                </div>
                <div class="form-item">
                    <input type="password" placeholder="Enter Password" id="password"required>
                </div>
                <button type="submit">Sign In</button>
            </div>
            </div>
        </form>
    </div>
</body>
</html>
