<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <?php
    echo $css;
    echo $js;
    ?>
</head>
<style>
    body {
        background-color: #0D1A44 !important;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .card {
        box-shadow: 1px 0px 22px 6px rgba(0, 0, 0, 0.75);
    }

    #firefly {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    @media (max-width: 600px) {
        img {
            width: 150px;
        }

        h3 {
            font-size: 20px;
        }
    }
</style>

<body>
    <div id="firefly"></div>

    <div class="card position-absolute top-50 start-50 translate-middle col-lg-7 col-sm-7 my-5 mb-5 rounded" style="background-color: #000B2E;color:white;">
        <div class="title text-center">
            <img src="https://media.discordapp.net/attachments/692662918562578513/915571133854658581/rem.png?width=436&height=116">
            <h3>Welcome to facility booking page</h3>
        </div>
        <hr style="width:50%; margin-left:25% !important; margin-right:25% !important;" />
        <div class="card-body">
            <form class="row g-3" method="post" action="<?= base_url('auth/registration'); ?>" id="myform">
                <div class="col-md-6">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" value="<?= set_value('fname'); ?>">
                    <?= form_error('fname', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-md-6">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" value="<?= set_value('lname'); ?>">
                    <?= form_error('lname', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-md-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-md-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>

                </div>
                <div id="botvalidator" class="my-2"></div>
                <div id="captchaerrors"></div>
                <div class="form-group text-right">
                    <button type="button" class="btn btn-primary col-lg-2 col-sm-4 my-3 float-start"><a href="<?= base_url('auth'); ?>" style="color:white;text-decoration:none;">Back to page</a></button>
                    <button type="submit" class="btn btn-primary col-lg-2 col-sm-4 my-3 float-end" style="background-color: #BAA360;">Register</button>
                </div>
            </form>

        </div>
    </div>


    <script>
        const doParticles = true;

        const getWidth = () => {
            return Math.max(
                document.body.scrollWidth,
                document.documentElement.scrollWidth,
                document.body.offsetWidth,
                document.documentElement.offsetWidth,
                document.documentElement.clientWidth
            );
        };

        if (doParticles) {
            if (getWidth() < 400) $.firefly({
                minPixel: 1,
                maxPixel: 2,
                total: 20
            });
            else $.firefly({
                minPixel: 1,
                maxPixel: 3,
                total: 40
            });
        }
    </script>

    <!-- recaptcha -->
    <script>
        var onloadCallback = function() {
            if ($("#botvalidator").length > 0) {
                grecaptcha.render('botvalidator', {
                    'sitekey': '6Lch8G4dAAAAAOby9rovwyoaQKmPfv8FKbDWEMcJ',
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
                if (debug) console.log("Validating captcha", value);
                if (value.length > 0) {
                    return true;
                } else {
                    return false;
                }
            },
            messages: {
                en: 'HMMM KAMU ROBOT YA..(HMM YOU ARE A ROBOT?)'
            }
        });
    </script>
</body>

</html>