<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url();?>assets/ImmuTrack_logo.png">
    <link href="<?= base_url();?>focus/css/style.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom styles for logo -->
    <style>
        /* Add background image to the entire page */
        body {
            background-image: url('<?= base_url('assets/frontend/img/rhu_loon.jpg') ?>'); /* Specify the path to your image */
            backdrop-filter: blur(3px); /* Apply a blur effect to the background */
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the image */
        }

        .auth-container {
            border-radius: 50px;
            backdrop-filter: blur(5px); /* Apply a blur effect to the background */
            box-shadow: 0 0 30px rgba(0, 0, 0, .5);
            display: flex;
            max-width: 1000px; /* Set maximum width for better responsiveness */
            margin: auto; /* Center the container horizontally */
            font-family: Arial, sans-serif; /* Use Arial font for the container */
        }

        .left-half {
            flex: 1;
            padding: 3px;
            background-color: white; /* White background color */
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            display: flex;
            justify-content: center; /* Center content horizontally */
            align-items: center; /* Center content vertically */
            flex-direction: column; /* Align items vertically */
            padding-top: 30px; /* Add padding to top */
        }

        .right-half {
            flex: 1;
            padding: 20px;
            backdrop-filter: blur(5px); /* Apply a blur effect to the background */
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        .logo img {
            max-width: 100px; /* Adjust maximum width of the logo */
            width: 100%; /* Ensure logo fills container */
            height: auto;
        }

        /* Adjust input field width, EMAOL & PASSWORD */
        .form-control {
            width: 100%; /* Make input fields occupy full width */
            max-width: 500px; /* Set maximum width for input fields */
            margin: auto; /* Center the input fields */
            border-radius: 50px;
            margin-bottom: 30px; /* Add some space between input fields */
            padding-left: 50px; /* Add padding for the icon */
            font-size: 17px; /* Adjust icon size */
        }

        /* Center the text inside the form */
        .auth-form {
            text-align: center;
        }

        /* Center the 'Sign me in' button */
        .text-center button {
            margin-top: 15px; /* Add some space above the button */
            border-radius: 100px;
            width: 150px; /* Adjust button width */
            margin: auto; /* Center the button horizontally */
            display: block; /* Make the button a block element for centering */
            background-color: #3291e6; /* Set button background color */
            color: white; /* Set button text color */
            border: none; /* Remove button border */
        }

        /* Adjust styling for 'Remember me' and 'Forgot Password' links */
        .form-row .form-group {
            flex: 1; /* Occupy remaining space */
            margin-bottom: 0; /* Remove bottom margin to align links horizontally */
        }

        .form-group a {
            display: block; /* Convert link to a block element for better alignment */
            text-align: center; /* Center the text */
            color: white; /* Set color to white */
        }

        /* Style for icons */
        .input-icon {
            position: absolute;
            left: 10px; /* Adjust the position of the icon */
            top: 50%; /* Center the icon vertically */
            transform: translateY(-50%);
            color: #808080; /* Adjust the color of the icon */
            font-size: 23px; /* Adjust icon size */
        }

        /* Style for the heading */
        .heading {
            font-family: Arial, sans-serif; /* Use Arial font for the heading */
            font-weight: bold; /* Make the font bold */
            font-size: 30px; /* Increase the font size */
            margin-bottom: 10px; /* Add some space below the heading */
            margin-top: 0px; /* Add some space above the heading */
            color: #3291e6; /* Set color to #3291e6 */
        }

        /* Style for hello */
        .hello-hello {
            color: white; /* Set color to white */
            font-size: 20px; /* Adjust font size */
            margin-top: 20; /* Add some space below */
            margin-bottom: 0px; /* Add some space below */
        }

        /* Style for welcome */
        .hello-welcome {
            color: white; /* Set color to white */
            font-size: 50px; /* Adjust font size */
            margin-bottom: 0; /* Add some space below */
        }
    </style>
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="auth-container">
                        <div class="left-half">
                            
                            <div class="logo-container">
                                <!-- Insert your logo here -->
                                <img src="<?= base_url();?>assets/ImmuTrack_logo.png" alt="Your Logo" class="logo">
                            </div>
                        </div>
                        <div class="right-half">
                            <div class="hello-hello">Hello,</div>
                            <div class="hello-welcome">Welcome!</div>
                            <div class="auth-form">   
                                <h4 class="heading text-center mb-4">Sign in your account</h4>
                                <label><?= $this->session->flashdata('msg_login'); ?></label>
                                <form action="<?= base_url();?>index.php/login" method="POST">
                                    <div class="form-group position-relative">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                        <i class="fas fa-envelope input-icon"></i>
                                    </div>
                                    <div class="form-group position-relative">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                        <i class="fas fa-lock input-icon"></i>
                                    </div>
                                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                        <div class="form-group">
                                            <div class="form-check ml-2">
                                                <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                <label class="form-check-label" for="basic_checkbox_1" style="color: white;">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a href="page-forgot-password.html" style="color: white;">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" name="login_btn" class="btn btn-primary">Sign me in</button>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p style="color: white;">Don't have an account? <a class="text-primary" href="<?= base_url();?>index.php/register-admin" style="color: #3291e6;">Sign up</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?= base_url();?>focus/vendor/global/global.min.js"></script>
    <script src="<?= base_url();?>focus/js/quixnav-init.js"></script>
    <script src="<?= base_url();?>focus/js/custom.min.js"></script>

</body>

</html>
 