<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="css/login.css" rel="stylesheet" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <style>
      
    </style>
    <div class="wrapper"  >
      <div class="image">
        <img src="assets/login_image.png" alt="" />
      </div>
      <form class="shadow-lg" id="form" action="" method="post" style="border-radius: 8px;box-shadow: rgba(220, 220, 225, 0.25) 0px 6px 12px -2px, rgba(233, 230, 230, 0.3) 0px 3px 7px -3px;">
        <div class="border">
        <img src="assets/login_image.jpg" width="100px" alt="">
      </div>
        <h1>LOGIN</h1>
        <div class="input-box">
          <div class="input-contain">
            <input type="email" id="email" placeholder="Enter Email" />
            <i class="bx bxs-user"></i>
          </div>
          <div class="error"></div>
        </div>
        <div class=" password input-box">
          <div class="input-contain">
            <input
              type="password"
              id="password"
              placeholder="Enter password"
            />
            <i class="bx bxs-lock-alt"></i>
            <i class="fa-solid fa-eye"></i><br>
          </div>
          <div class="error"></div>
          <br />
        </div>
        <div class="forgot-pass">
          <a href="#">Forgot Password?</a>
        </div>
        <button class="custom-button" type="submit">Log In</button>
        <div class="registration">
          <p>Don't have an account? <a href="#">Register here</a></p>
        </div>
      </form>
    </div>
    <script>
      const form = document.getElementById("form");
      // const username = document.getElementById('username');
      const email = document.getElementById("email");
      const password = document.getElementById("password");
      // const password2 = document.getElementById('password2');

      form.addEventListener("submit", (e) => {
        e.preventDefault();
        validateInputs();
      });

      const setError = (element, message) => {
        alert("set erreor");
        const inputControl = element.parentElement.parentElement;
        const errorDisplay = inputControl.querySelector(".error");

        errorDisplay.innerText = message;
        inputControl.classList.add("error");
        inputControl.classList.remove("success");
      };

      const setSuccess = (element) => {
        const inputControl = element.parentElement.parentElement;
        const errorDisplay = inputControl.querySelector(".error");
        errorDisplay.innerText = "";
        inputControl.classList.add("success");
        inputControl.classList.remove("error");
      };

      const isValidEmail = (email) => {
        const re =
          /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
      };

      const validateInputs = () => {
        // const usernameValue = username.value.trim();
        const emailValue = email.value.trim();
        const passwordValue = password.value.trim();
        // const password2Value = password2.value.trim();

        // if(usernameValue === '') {
        //     setError(username, 'Username is required');
        // } else {
        //     setSuccess(username);
        // }

        if (emailValue === "") {
          setError(email, "Email is required");
        } else if (!isValidEmail(emailValue)) {
          setError(email, "Provide a valid email address");
        } else {
          setSuccess(email);
        }

        if (passwordValue === "") {
          setError(password, "Password is required");
        } else if (passwordValue.length < 8) {
          setError(password, "Password must be at least 8 character.");
        } else {
          setSuccess(password);
        }

        // if(password2Value === '') {
        //     setError(password2, 'Please confirm your password');
        // } else if (password2Value !== passwordValue) {
        //     setError(password2, "Passwords doesn't match");
        // } else {
        //     setSuccess(password2);
        // }
      };
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
