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
            width: 350px;
        }
    }
</style>

<body>
    <div id="firefly"></div>

    <div class="card position-absolute top-50 start-50 translate-middle col-lg-7 col-sm-7 rounded" style="background-color: #000B2E;color:white;">
        <div class="title text-center">
            <img src="https://media.discordapp.net/attachments/692662918562578513/915571133854658581/rem.png?width=436&height=116">
            <h3>Welcome to facility booking page</h3>
        </div>
        <hr style="width:50%; margin-left:25% !important; margin-right:25% !important;" />
        <div class="card-body">
            <div class="text-center">
                <button type="button" class="btn btn-primary col-lg-2 col-sm-4 mx-lg-4 mx-xs-3" style="background-color: #BAA360;"><a href="<?= base_url('auth/login'); ?>" style="color:white;text-decoration:none;">Login</a></button>
                <button type="button" class="btn btn-primary col-lg-2 col-sm-4 mx-lg-4 mx-xs-3"><a href="<?= base_url('auth/registration'); ?>" style="color:white;text-decoration:none;">Register</a></button>
            </div>
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
</body>

</html>