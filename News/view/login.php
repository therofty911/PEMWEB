<?php
  include '../controller/login.php';
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signin'])){
    verifiedlogin();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="stylesheet" href="../assets/css/pages/auth.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.2/parsley.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/arrive/2.4.1/arrive.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
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
                    <p class="auth-subtitle mb-2">Silahkan Login To News Speedy UMN</p>

                    <form method="post" id="myform">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username / Email" name="user" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" name="pw" required>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <!--<div class="g-recaptcha" data-sitekey="6LdFmmQcAAAAAGuC6N1MNLbDMeSLwB8n1PR512k8" style="margin-bottom: 10px;"></div>-->
                        <div id="botvalidator"></div>
                        <div id="captchaerrors"></div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" style="background-color: #0D1A44;" name="signin">Log in</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Don't have an account? <a href="register.php" class="font-bold">Signup</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right" >
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/extensions/sweetalert2.js"></script>
<script src="assets/vendors/sweetalert2/sweetalert2.all.min.js"></script>
<script>
var onloadCallback = function() {
        if($("#botvalidator").length > 0) {
            grecaptcha.render('botvalidator', {
                'sitekey' : '6LdFmmQcAAAAAGuC6N1MNLbDMeSLwB8n1PR512k8',
                'callback': cleanErrors
            });
            addCaptchaValidation();
            $(document).arrive("#g-recaptcha-response", function() {
                // 'this' refers to the newly created element
                addCaptchaValidation();
            });
        }
    };

        /* ini akan menghilangkan semua pesan error. */
    var cleanErrors = function() {
        $("#captchaerrors").empty();
    };
    
    var addCaptchaValidation = function() {
        console.log("Adding captcha validation");
        
        cleanErrors();

        $('#myform').parsley().destroy();

        $('#g-recaptcha-response').attr('required', true);
        // dibawah ini untu membuat sebuah attribute dari JSparsley validasi
        $('#g-recaptcha-response').attr('data-parsley-captcha-validation', true);
        $('#g-recaptcha-response').attr('data-parsley-error-message', "We know it, but we need you to confirm you are not a robot. Thanks.");
        $('#g-recaptcha-response').attr('data-parsley-errors-container', "#captchaerrors");
    $('#myform').parsley();
    };
    

    /*dibawah ini untuk membuat/menambah sebuah parsley validasi baru
    #g-recaptcha-response saat mengklik login button*/

    window.Parsley.addValidator('captchaValidation', {

            validateString: function(value) {
                if(debug) console.log("Validating captcha", value);
                if(value.length > 0) {
                    return true;
                } else {
                    return false;
                }                    
            },
            messages: {en: 'Hmmm....Are u a robot?!!!'}
          });
    </script>
</body>
</html>