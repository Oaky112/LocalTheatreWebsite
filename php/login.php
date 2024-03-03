<!-- Establishing connection to connection.php   -->
<?php
include_once('../private/connection.php');
session_start();

?>

<!-- Setting Doc type as HTML -->
<!doctype html>

<!-- Title for webpage as local theatre -->
<head>
    <meta charset="utf-8">
    <title>localTheatre</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="localTheatre" name="keywords">
    <meta content="localTheatre" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Setting up Font Style  -->
    <!-- Inherited from style.css -->
    <style>
        * {
            margin: 0px;
            padding: 0 0 0 0;
            box-sizing: border-box;
            font-family: "Roboto", sans-serif;
        }

        .Anusbg {
            width: 100%;
            margin: 0 auto;

        }

        .bg {
            background-image: url("/img/theatre-inside-1920.jpg");
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 15px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .anusdiv {
            width: 500px;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            padding: 55px 55px 55px 55px;

        }

        /* Form styles */
        .loginForm {
            width: 100%;

        }

        .loginTitle {
            display: block;
            font-size: 28px;
            color: #333333;
            line-height: 1.2;
            text-align: center;
            padding-bottom: 49px;
            padding-top: 50px;
        }

        .labelUsername {
            font-size: 14px;
            color: #333333;
            line-height: 1.5;
            padding-left: 7px;
        }

        .labelPassword {
            font-size: 14px;
            color: #333333;
            line-height: 1.5;
            padding-left: 7px;
        }

        .loginSubmit {
            font-size: 16px;
            color: #fff;
            line-height: 1.2;
            text-transform: uppercase;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
            width: 100%;
            height: 50px;
            background: rgb(0, 0, 0);
            background: linear-gradient(90deg, #E45F4E 0%, black 100%);

        }

        /* Set up header, p and input style */
        .header {
            position: relative;
            width: 100%;
            border-bottom: 2px solid #d9d9d9;
            margin-bottom: 23px;
        }

        .label {
            font-size: 14px;
            color: #333333;
            line-height: 1.5;
            padding-left: 7px;

        }

        .input {
            font-size: 16px;
            color: #333333;
            line-height: 1.2;
            display: block;
            width: 100%;
            height: 55px;
            background: transparent;
            padding: 0 7px 0 10px;
            border: 2px solid #f0f0f0;
        }

        .pos {
            padding: 8px 0px 31px 0px;
            text-align: right !important;

        }

        .gos {
            padding: 40px 0px 31px 0px;
            text-align: right !important;

        }

        .ltTitle {
            margin: 0 !important;
            text-transform: capitalize !important;
            font-style: italic !important;
            color: #E45F4E;
            text-decoration: none;
            background-color: transparent;
            font-weight: 700 !important;
            font-size: 4rem;
            font-family: "Roboto", sans-serif;
            line-height: 1.2;
            color: #262626;
            text-transform: uppercase;
            text-align: center;
        }

        .text-primary {
            color: #E45F4E !important;
            box-sizing: border-box;

        }

        .hoverPoop {
            font-size: 14px;
            line-height: 1.7;
            color: #666666;
            margin: 0px;
            transition: all 0.4s;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;

        }

        .hoverPoop:hover {
            text-decoration: none;
            color: #E45F4E;

        }

        .dos {
            padding-top: 30px;
            text-align: center;
        }

    </style>
</head>

<body>
    <!-- Aligning form inputs -->
    <div class="Anusbg">
        <div class="bg">
            <div class="anusdiv">
                <h1 class="ltTitle">
                    <!-- Logo of local theatre -->
                    <span class="text-primary">local</span>Theatre
                </h1>
                <!-- Setting up register form -->

                <?php
                if (isset($_SESSION['username'])) {
                    echo "  
                    <form class='loginForm' action ='private/logout.php' method='post'>
                        <span class='loginTitle'>Welcome " . $_SESSION['username'] . " </span>
                        <button class='loginSubmit' name='logout'>Logout</button>
                    </form>";
                } else {
                    echo "
                        
                    <form class='loginForm' action ='../private/login_handle.php' method='post'>
                        <span class='loginTitle'>Login </span>
                        <div class='header username'>
                            <span class= 'label username'>Username</span>
                            <input class='user input' type='text' name='username' placeholder ='Type your username'  required>
                        </div>
                        <div class='header password'>
                            <span class= 'label password'>Password</span>
                            <input class='password input' type='password' name='password' placeholder ='Type your password'  required>
                        </div>
                        <div class = 'pos'>
                            <a class = 'hoverPoop' href ='#'> Forgot password?</a>
                        </div>
                        <button class='loginSubmit' name='submit'>Login</button>
                    </form> ";
                }
                ?>
                <!-- Div styles from css -->
                <div class="dos">
                    <a href="register.php" class="hoverPoop signPoop"> Or Sign Up Here</a>
                </div>
                <!-- Div styles from css -->
                <div class="gos">
                    <a href="/index.php" class="hoverPoop signPoop"> Return Home</a>
                </div>
            </div>
        </div>
        <p class="m-0 text-white">
        <!-- Adding copyright legislation -->
        &copy; <a class="text-white font-weight-bold" href="#">localTheatre</a>. All Rights Reserved. Designed by Joshua Oakman
        </p>
    </div>
</body>

</html>