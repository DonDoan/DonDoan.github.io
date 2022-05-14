<!DOCTYPE html>
<html>
<?php require 'startSession.php';?>
<head>
    <title>DOANBADON</title>
    <meta charset="UTF-8">
    <!-- <link rel="icon" type="image/x-icon" href="/img/donSimple.jpg"> -->
    <!-- <link rel="icon" type="image/x-icon" href="/images/favicon.ico"> -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <!-- <meta http-equiv="refresh" content="0;URL='https://googiehost.com/pages/pending.html'" />  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <style>
        .navbar {
            overflow: hidden;
            background-color: #333;
            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .navbar a:hover,
        .dropdown:hover .dropbtn {
            background-color: red;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .wrapper {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-auto-rows: minmax(100px, auto);
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 10%;
            border-radius: 15%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- <?php include 'footer.php';?> -->
    
    <div class="navbar">
        <a href="http://www.conandon.cu.ma">Home</a>
        <!-- <a href="https://www.facebook.com/Qu%E1%BA%A3ng-%C4%90%C3%A0-X%C6%B0a-V%C3%A0-Nay-115532959996247/photos/pcb.507824754100397/507798670769672">News</a> -->
        <a href="https://www.facebook.com/Qu%E1%BA%A3ng-%C4%90%C3%A0-X%C6%B0a-V%C3%A0-Nay-115532959996247">Quảng Đà Xưa
            Và Nay</a>
        <div class="dropdown">
            <button class="dropbtn">More
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="https://mb.dkn.tv">Đại Kỷ Nguyên</a>
                <a href="https://giacngo.vn/muon-tu-hoc-phat-nen-bat-dau-tu-dau-post49038.html">Học Phật Pháp</a>
                <a href="https://vi.wikipedia.org/wiki/L%E1%BB%8Bch_s%E1%BB%AD_Vi%E1%BB%87t_Nam">Lịch Sử Việt Nam</a>
            </div>
        </div>

    </div>
    <div>
        <!-- <h2>Modal Login Form</h2> -->

        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign-Up</button>

        <div id="id01" class="modal">

            <!-- <form class="modal-content animate" action="/action_page.php" method="post" enctype = "multipart/form-data"> -->
            <!-- <form class="modal-content animate" action="/badon_test20220420/inputFormDbSql.php" method="post" enctype = "multipmultipart/form-data"> -->
            <form class="modal-content animate" action="/badon_test20220420/signUp.php" method="post" enctype = "multipmultipart/form-data">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                        title="Close Modal">&times;</span>
                    <img src="/img/donSimple.jpg" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit">Sign-Up</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'"
                        class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>

        <!-- <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script> -->
        <!-- <?php echo "This message is from server side." ?> -->
        <!-- <?php include 'startSession.php';?> -->
        <!-- <?php require 'startSession.php'; ?>  -->
        <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button>

        <div id="id02" class="modal">

            <!-- <form class="modal-content animate" action="/action_page.php" method="post" enctype = "multipart/form-data"> -->
            <!-- <form class="modal-content animate" action="/badon_test20220420/inputFormDbSql.php" method="post" enctype = "multipmultipart/form-data"> -->
            <form class="modal-content animate" action="/badon_test20220420/login.php" method="post" enctype = "multipmultipart/form-data">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id02').style.display='none'" class="close"
                        title="Close Modal">&times;</span>
                    <img src="/img/donSimple.jpg" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit">Login</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'"
                        class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>

        <script>
            // Get the modal
            var modal = document.getElementById('id01');
            var modal2 = document.getElementById('id02');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
                if (event.target == modal2) {
                    modal2.style.display = "none";
                }
            }
        </script>
    </div>
    <!-- <h3>More Button/Dropdown Menu inside a Navigation Bar</h3>
    <p>Hover over the "More" link to see the dropdown menu.</p>     -->
    <h2>Conan KIDS TV Videos</h2>
    <!-- <p><a href="https://www.w3.org/">W3C</a></p> -->
    <!-- <p><a href="https://www.google.com/">Google</a></p> -->
    <div class="wrapper">
        <div>
            <p><a href="https://www.youtube.com/watch?v=QpGugCfqwf0">Đếm Số Từ 1 Đến 10 | Conan Tập Đếm - Phần 1 | Conan
                    KIDS TV</a></p>
            <iframe width="420" height="315" 
            src="https://www.youtube.com/embed/QpGugCfqwf0?autoplay=1&mute=1"></iframe>
            > </iframe>
        </div>
        <div>
            <p><a href="https://www.youtube.com/watch?v=gH_23LvPZO8">Học Bảng Chữ Cái Tiếng Việt | Bé Tự Học Bảng Chữ
                    Cái | Conan KIDS TV</a></p>
            <iframe width="420" height="315" src="https://www.youtube.com/embed/gH_23LvPZO8"> </iframe>
        </div>
        <div>
            <p><a href="https://www.youtube.com/watch?v=p5PGVgU5pb4">Bảy Sắc Cầu Vồng | Hình Dáng Màu Sắc | Bé Tự Học
                    Màu Sắc Phần 2 | Conan KIDS TV</a></p>
            <iframe width="420" height="315" src="https://www.youtube.com/embed/p5PGVgU5pb4"> </iframe>
        </div>
    </div>


    <h2>Cute Videos</h2>
    <div>
        <video autoplay loop muted>
            <source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
        </video>
        <!-- <video autoplay loop muted>
            <source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
        </video> -->
        <video autoplay loop muted>
            <source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
        </video>
        <video autoplay loop muted>
            <source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
        </video>
    </div>


    <h2>Relative URLs</h2>
    <p><a href="penguinByCSS.html">penguinByCSS.html</a></p>
    <p><a href="borderRadiusCircle.html">borderRadiusCircle.html</a></p>
    <p><a href="survey1.html">survey1</a></p>
    <!-- penguinByCSS.html
    borderRadiusCircle.html -->
</body>

</html>