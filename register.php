<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="css/login.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper" style="margin-top: 50px;">
        <form id="form" action="" method="post">
            <h1>Registration</h1>
            <div class="input-box">
                <div class="input-contain">
                    <input type="text" id="JNTU" placeholder="Enter Our JNTU Number"><i class="bx bxs-user"></i>
                </div>
                <div class="error"></div>
            </div>
            <div class="input-box">
                <div class="input-contain">
                    <input type="text" id="name" placeholder="Enter Your full name"><i class="bx bxs-user"></i>
                </div>
                <div class="error"></div>
            </div>
            <div class="input-box">
                <div class="input-contain">
                    <input type="email" id="email" placeholder="Enter Email"><i class="bx bxs-user"></i>
                </div>
                <div class="error"></div>
            </div>
            <div class="input-box">
                <div class="input-contain">
                    <input type="number" id="m-number" placeholder="Ente your Mobile Number"><i class="bx bxs-lock-alt"></i>
                </div>
                <div class="error"></div>
            </div>
            <div class="input-box">
                <div class="input-contain">
                    <input type="text" id="password" placeholder="Enter password"><i class="bx bxs-lock-alt"></i>
                </div>
                <div class="error"></div>
            </div>
            <div class="input-box">
                <div class="input-contain">
                    <input type="text" id="password2" placeholder="confirm password"><i class="bx bxs-lock-alt"></i>
                </div>
                <div class="error"></div>
            </div>
            <button type="submit">REGISTER HERE</button>
            <div class="registration">
                <p>Already have an account? <a href="#">Login here</a></p>
            </div>
        </form>
    </div>

    <script src="js/script.js"></script>
</body>
</html>