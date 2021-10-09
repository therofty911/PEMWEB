<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="stylesheet" href="../assets/css/pages/auth.css">
</head>
<style>
  #auth #auth-right{
    background:linear-gradient(90deg,#0D1A44,#0D1A44);
  }
  .btn-check:focus + .btn-primary, .btn-primary:focus, .btn-primary:hover{
    background-color: #3950a2;
    border-color: #364b98;
    color: #fff;
  }
</style>
<body style="overflow-x: hidden;">
    <div id="auth">
        
<div class="row h-100">
    <div class="col-lg-5 col-12 justify-content-center text-center">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="..\index.php"><img src="../assets/images/logo/logo.png" alt="Logo" style="width: 250px;height: auto;"></a>
            </div>
            <h1 class="auth-title" style="color: #0D1A44;">Log in.</h1>
            <p class="auth-subtitle mb-2">Silahkan Login ke News Speedy UMN</p>

            <form method="post">
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" placeholder="Username" name="user">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" placeholder="Password" name="pw">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <div class="g-recaptcha" data-sitekey="6LdFmmQcAAAAAGuC6N1MNLbDMeSLwB8n1PR512k8" style="margin-bottom: 10px;"></div>

                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" style="background-color: #0D1A44;" name="signin">Log in</button>
            </form>
            <div class="text-center mt-5 text-lg fs-4">
                <p class="text-gray-600">Don't have an account? <a href="auth-register.html" class="font-bold">Signup</a>.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right" >
        </div>
    </div>
</div>

    </div>
</body>
</html>
<?php
  include '..\controller\login.php';
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signin'])){
    verifiedlogin();
  }
?>






<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/login.css" />
    <title>Sign in & Sign up Form</title>
  </head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

    body,
    input {
    font-family: "Poppins", sans-serif;
    }

    .container {
    position: relative;
    width: 100%;
    background-color: #fff;
    min-height: 100vh;
    overflow: hidden;
    }

    .forms-container {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    }

    .signin-signup {
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
    left: 75%;
    width: 50%;
    transition: 1s 0.7s ease-in-out;
    display: grid;
    grid-template-columns: 1fr;
    z-index: 5;
    }

    form {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0rem 5rem;
    transition: all 0.2s 0.7s;
    overflow: hidden;
    grid-column: 1 / 2;
    grid-row: 1 / 2;
    }

    form.sign-up-form {
    opacity: 0;
    z-index: 1;
    }

    form.sign-in-form {
    z-index: 2;
    }

    .title {
    font-size: 2.2rem;
    color: #444;
    margin-bottom: 10px;
    }

    .input-field {
    max-width: 380px;
    width: 100%;
    background-color: #f0f0f0;
    margin: 10px 0;
    height: 55px;
    border-radius: 55px;
    display: grid;
    grid-template-columns: 15% 85%;
    padding: 0 0.4rem;
    position: relative;
    }

    .input-field i {
    text-align: center;
    line-height: 55px;
    color: #acacac;
    transition: 0.5s;
    font-size: 1.1rem;
    }

    .input-field input {
    background: none;
    outline: none;
    border: none;
    line-height: 1;
    font-weight: 600;
    font-size: 1.1rem;
    color: #333;
    }

    .input-field input::placeholder {
    color: #aaa;
    font-weight: 500;
    }

    .social-text {
    padding: 0.7rem 0;
    font-size: 1rem;
    }


    .social-icon {
    height: 46px;
    width: 46px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 0.45rem;
    color: #333;
    border-radius: 50%;
    border: 1px solid #333;
    text-decoration: none;
    font-size: 1.1rem;
    transition: 0.3s;
    }

    .social-icon:hover {
    color: #4481eb;
    border-color: #4481eb;
    }

    .btn {
    width: 150px;
    background-color: #0D1A44;
    border: none;
    outline: none;
    height: 49px;
    border-radius: 49px;
    color: #fff;
    text-transform: uppercase;
    font-weight: 600;
    margin: 10px 0;
    cursor: pointer;
    transition: 0.5s;
    }

    .btn:hover {
    background-color: #04091a;
    }
    .panels-container {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    }

    .container:before {
    content: "";
    position: absolute;
    height: 2099px;
    width: 2000px;
    top: -10%;
    right: 48%;
    transform: translateY(-50%);
    background-image: linear-gradient(-45deg, #0D1A44 50%, #fff 100%);
    transition: 1.8s ease-in-out;
    border-radius: 50%;
    z-index: 6;
    }

    .image {
    width: 100%;
    transition: transform 1.1s ease-in-out;
    transition-delay: 0.4s;
    }

    .panel {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: space-around;
    text-align: center;
    z-index: 6;
    }

    .left-panel {
    pointer-events: all;
    padding: 3rem 17% 2rem 12%;
    }

    .right-panel {
    pointer-events: none;
    padding: 3rem 12% 2rem 17%;
    }

    .panel .content {
    color: #fff;
    transition: transform 0.9s ease-in-out;
    transition-delay: 0.6s;
    }

    .panel h3 {
    font-weight: 600;
    line-height: 1;
    font-size: 1.5rem;
    }

    .panel p {
    font-size: 0.95rem;
    padding: 0.7rem 0;
    }

    .btn.transparent {
    margin: 0;
    background: none;
    border: 2px solid #fff;
    width: 130px;
    height: 41px;
    font-weight: 600;
    font-size: 0.8rem;
    }

    .right-panel .image,
    .right-panel .content {
    transform: translateX(800px);
    }

    /* ANIMATION */

    .container.sign-up-mode:before {
    transform: translate(100%, -50%);
    right: 52%;
    }

    .container.sign-up-mode .left-panel .image,
    .container.sign-up-mode .left-panel .content {
    transform: translateX(-800px);
    }

    .container.sign-up-mode .signin-signup {
    left: 25%;
    }

    .container.sign-up-mode form.sign-up-form {
    opacity: 1;
    z-index: 2;
    }

    .container.sign-up-mode form.sign-in-form {
    opacity: 0;
    z-index: 1;
    }

    .container.sign-up-mode .right-panel .image,
    .container.sign-up-mode .right-panel .content {
    transform: translateX(0%);
    }

    .container.sign-up-mode .left-panel {
    pointer-events: none;
    }

    .container.sign-up-mode .right-panel {
    pointer-events: all;
    }

    @media  screen and (max-width: 1366px) {
    
    }

    @media (max-width: 870px) {
    .container {
        min-height: 800px;
        height: 100vh;
    }
    .signin-signup {
        width: 100%;
        top: 95%;
        transform: translate(-50%, -100%);
        transition: 1s 0.8s ease-in-out;
    }

    .signin-signup,
    .container.sign-up-mode .signin-signup {
        left: 50%;
    }

    .panels-container {
        grid-template-columns: 1fr;
        grid-template-rows: 1fr 2fr 1fr;
    }

    .panel {
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        padding: 2.5rem 8%;
        grid-column: 1 / 2;
    }

    .right-panel {
        grid-row: 3 / 4;
    }

    .left-panel {
        grid-row: 1 / 2;
    }

    .image {
        width: 200px;
        transition: transform 0.9s ease-in-out;
        transition-delay: 0.6s;
    }

    .panel .content {
        padding-right: 15%;
        transition: transform 0.9s ease-in-out;
        transition-delay: 0.8s;
    }

    .panel h3 {
        font-size: 1.2rem;
    }

    .panel p {
        font-size: 0.7rem;
        padding: 0.5rem 0;
    }

    .btn.transparent {
        width: 110px;
        height: 35px;
        font-size: 0.7rem;
    }

    .container:before {
        width: 1500px;
        height: 1500px;
        transform: translateX(-50%);
        left: 30%;
        bottom: 68%;
        right: initial;
        top: initial;
        transition: 2s ease-in-out;
    }

    .container.sign-up-mode:before {
        transform: translate(-50%, 100%);
        bottom: 32%;
        right: initial;
    }

    .container.sign-up-mode .left-panel .image,
    .container.sign-up-mode .left-panel .content {
        transform: translateY(-300px);
    }

    .container.sign-up-mode .right-panel .image,
    .container.sign-up-mode .right-panel .content {
        transform: translateY(0px);
    }

    .right-panel .image,
    .right-panel .content {
        transform: translateY(300px);
    }

    .container.sign-up-mode .signin-signup {
        top: 5%;
        transform: translate(-50%, 0);
    }
    }

    @media (max-width: 570px) {
    form {
        padding: 0 1.5rem;
    }

    .image {
        display: none;
    }
    .panel .content {
        padding: 0.5rem 1rem;
    }
    .container {
        padding: 1.5rem;
    }

    .container:before {
        bottom: 72%;
        left: 50%;
    }

    .container.sign-up-mode:before {
        bottom: 28%;
        left: 50%;
    }
    }


</style>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
            <form class="sign-in-form" method="POST">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="user" placeholder="Username" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="pw" placeholder="Password" />
                </div>
                <input type="submit" value="Login" name="signin" class="btn solid" />
            </form>
            <form action="#" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username" />
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" />
                </div>
                <input type="submit" class="btn" value="Sign up" />
            </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Welcome, do you have a account ?</h3>
            <p>
              SignUp now, if you don't have account just click SIGN UP button on the bellow
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="https://cdn.discordapp.com/attachments/891579314401869864/891681330180522014/news_logo_ts.png" class="image awal" alt=""/>
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Owh i think you have a account, why not to try SIGN IN ?</h3>
            <p>
              Just click the button SIGN IN button on the bellow
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="https://cdn.discordapp.com/attachments/891579314401869864/891681330180522014/news_logo_ts.png" class="image" alt=""/>
        </div>
      </div>
    </div>

    <script src="../assets/js/login.css"></script>
    <script>
        const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});
    </script>
  </body>
</html>

 -->