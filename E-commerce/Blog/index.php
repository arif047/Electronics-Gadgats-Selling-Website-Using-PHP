<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blog Registration</title>
    <link rel="stylesheet" type="text/css" href="css/blog.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  

  
  </style>




  </head>

  <body style="background-image: url('image/bg-1.jpg'); background-size: cover; background-position: center; background-attachment: fixed;background-size: 1600px 800px;">
    

    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Signup Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">

          <form action="login.php" class="login" method="post">
            <div class="field">
              <input type="text" name="uname" placeholder="Enter Your Name..." maxlength="12" minlength="4" required>
            </div>
            <div class="field">
              <input type="password" name="pass" placeholder="Password" maxlength="12" minlength="4" required>
            </div>
            <div class="pass-link"><a href="#">Forgot password?</a></div>



            <div class="field btn">
              <div class="btn-layer"></div>

              <input type="submit" value="Login">
            </div>
            <div class="signup-link">Not a member? <a href="">Signup now</a></div>
          </form>







          <form action="signup.php" class="signup" method="post">
            <div class="field">
              <input type="text" name="name" placeholder="Enter Your Name..." maxlength="12" minlength="4" required>
            </div>
            <div class="field">
              <input type="password" name="pass" placeholder="Password" maxlength="12" minlength="4" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Confirm password" required>
            </div><br>


              <div class="g-recaptcha" data-sitekey="6LfQ0JMaAAAAAEiTGHWWq2dIz5e_QnYOfuAPhsbU" style="display: flex; align-items: center; justify-content: center;">
        
                          </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Signup">
            </div>
          </form>
        </div>
      </div>
    </div>

    <script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
    </script>

  </body>
</html>
