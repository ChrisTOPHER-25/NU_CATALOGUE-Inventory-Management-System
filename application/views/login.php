<style type="text/css">
@import "bourbon";

body {
    height: 50px;
    background-image: url("<?php echo $base_url?>/assets/nulagunalogo.jpg") !important;
    background-color: rgba(0, 0, 0, 0.5);
    /* Dark overlay with 50% opacity */
    background-size: scale-down;
    background-position: center center;
    background-repeat: no-repeat;


}

.wrapper {
    margin-top: 100px;
    margin-bottom: 100x;
    transform-origin: center;
    /* Keep the center fixed when scaling */

}

.form-signin {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    max-width: 450px;
    padding: 25px 35px 60px;

    background-color: rgba(255, 255, 255, 0.83);


    .form-signin-heading,
    .checkbox {
        margin-bottom: 30px;
    }

    .checkbox {
        font-weight: normal;
    }

    .form-control {
        position: relative;
        font-size: 16px;
        height: auto;
        padding: 10px;
        @include box-sizing(border-box);

        &:focus {
            z-index: 2;
        }
    }

    .login-logo {
        max-width: 200px;
        /* Adjust the maximum width as needed */
        height: auto;
        /* Maintain aspect ratio */
        display: block;
        /* To allow margin auto for centering if not using text-center on parent */
        margin: 0 auto 20px auto;
        /* Center horizontally and add bottom spacing */
    }

    /* If you are not using a text-center class on the parent div */
    .logo-container {
        /* You might not need this if text-center is working */
    }

    input[type="text"] {
        margin-bottom: 0px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }

    input[type="password"] {
        margin-bottom: 0px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .form-signin-heading {
        margin-bottom: 30px !important;
    }
}
</style>

<head>
    <link rel="icon" href="assets/nuicon.png" type="image/x-icon">
</head>

<body>
    <div class="wrapper">
        <?php
	$attributes = array( 
	'class' => 'form-signin'
	);
	?>
        <?php echo form_open('AuthController/login_validation',$attributes )?>
        <div class="logo-container text-center">
            <img src="assets/nulogo.png" alt="Your Logo" class="login-logo">
        </div>
        <br>
        <?php if($this->session->flashdata('error')): ?>
        <div class="form-group">
            <?php echo ($this->session->flashdata('error'))?>
        </div>
        <?php endif; ?>
        <div class="input-group form-group">
            <span class="input-group-addon"><i class="fa fa-user " aria-hidden="true"></i></span>
            <input autocomplete="off" id="username" type="text" class="form-control input-md" name="username"
                placeholder="Username">
        </div>
        <div class="input-group form-group">
            <span class="input-group-addon"><i class="fa fa-key " aria-hidden="true"></i></span>
            <input autocomplete="off" id="password" type="password" class="form-control input-md" name="password"
                placeholder="Password">
        </div>

        <div class="form-group">
            <button class="btn btn-md btn-primary btn-block" type="submit">Login</button>
        </div>
        <p class="text-center" style="color: #777">&copy; 2023 All Rights Reserved <br> Developed for: <a
                href="https://national-u.edu.ph/nu-laguna/">NU-Laguna Assets Management Office</a></p>
        <?php echo form_close() ?>
    </div>
</body>