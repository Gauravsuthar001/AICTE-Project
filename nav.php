<?php

if (!isset($_SESSION)) {
    session_start();
}
?>

<head>
    <link href="./fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="./fontawesome/css/brands.css" rel="stylesheet">
    <link href="./fontawesome/css/solid.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            /* user-select: none; */
            font-family: 'Andika', sans-serif;
            font-family: 'Montserrat', sans-serif;
            font-family: 'Roboto', sans-serif;
            box-sizing: border-box;
        }

        i {
            font-family: font-awesome;
        }

        .edu1 {
            color: #0759b1;
            font-weight: 500;
            font-size: 4vw;
            filter: drop-shadow(3px 3px 2px grey);
        }

        nav {
            /* position: fixed; */
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: calc(100%-20px);
            height: 15vh;
            font-size: 16px;
            padding: 20px;
            z-index: 99;
            background-color: #edf6ff;
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            /* box-shadow: 0px 1px 5px rgb(0 0 150); */
            border-bottom: 1px solid rgb(0, 0, 200);
        }

        .nav-items1 {
            display: flex;
            justify-content: center;
            align-items: center;

        }

        /* .nav.fixed {
        position: fixed;
    } */

        .logo-part {
            height: 15vh;
            width: 35%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            /* background-color: aqua; */
        }

        .img1 {
            width: auto;
            height: 15vh;
            background-color: transparent;
        }

        .img1 img {
            filter: drop-shadow(1px 1px 2px black);
            mix-blend-mode: multiply;
            width: auto;
            height: 13vh;
            object-fit: contain;
        }

        .drop1 {
            display: flex;
            align-items: center;
            justify-content: space-around;
            width: 670px;
            height: 50px;
        }

        #sel1 {
            padding: 10px;
            border: 1px solid rgb(223, 223, 223);
            width: 336px;
            font-size: 1vw;
            height: auto;
        }

        #sel1 option {
            font-size: 1vw;
        }


        .in1 {
            width: 178px;
            height: 20px;
            padding: 10px;
            font-size: 1vw;
            border: 0;
            outline: none;
        }

        .btn1 {
            background-color: white;
            border: 0;
            width: 4vw;
            height: 4.5vh;
            padding: 13px 15px;
        }

        .btn1 i {
            height: auto;
            width: auto;
            text-align: center;
            font-size: 1vw;
        }

        .formnav {
            background-color: white;
            border: none;
            display: flex;
            align-items: center;
            width: 250px;
            height: 41px;
        }

        .menu1 {
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 16vw;
            height: 6vh;
        }

        .log1 {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1vw;
            font-weight: 600;
            width: 10vw;
            height: 5vh;
            padding: 1vw;
            color: #0759b1;
            text-decoration: none;
        }

        .sign1 {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1vw;
            font-weight: 600;
            background-color: #0759b1;
            width: 10vw;
            height: 5vh;
            padding: 1vw;
            color: white;
            text-decoration: none;
        }

        .sign1 span,
        .log1 span {
            margin-left: 0.5vw;
        }


        /* hamborger */

        .burger {
            position: relative;
            width: 40px;
            height: 30px;
            background: transparent;
            cursor: pointer;
            display: none;
        }

        .burger input {
            display: none;
        }

        .burger span {
            display: block;
            position: absolute;
            height: 4px;
            width: 100%;
            background: black;
            border-radius: 9px;
            opacity: 1;
            left: 0;
            transform: rotate(0deg);
            transition: .25s ease-in-out;
        }

        .burger span:nth-of-type(1) {
            top: 0px;
            transform-origin: left center;
        }

        .burger span:nth-of-type(2) {
            top: 50%;
            transform: translateY(-50%);
            transform-origin: left center;
        }

        .burger span:nth-of-type(3) {
            top: 100%;
            transform-origin: left center;
            transform: translateY(-100%);
        }

        .burger input:checked~span:nth-of-type(1) {
            transform: rotate(45deg);
            top: 0px;
            left: 5px;
        }

        .burger input:checked~span:nth-of-type(2) {
            width: 0%;
            opacity: 0;
        }

        .burger input:checked~span:nth-of-type(3) {
            transform: rotate(-45deg);
            top: 28px;
            left: 5px;
        }

        /* nav2 */
        .nav-bottom-1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            height: auto;
            padding: 0.3vw;
            background: #2a64b1;
        }

        .nav-bottom-1-1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 60%;
            margin-left: 2vw;
        }

        .nav-2-1 a {
            text-decoration: none;
            font-size: 1.3vw;
            color: #fff;
        }

        .nav-2-1 a:hover {
            text-decoration: underline;
        }

        .forms {
            /* background-color: #0759b1; */
            width: 10vw;
        }

        .dropbtn {
            background-color: #1d46a8;
            color: white;
            width: 10vw;
            height: 4vh;
            padding: 0.1vw;
            font-size: 0.9vw;
            border: none;
            border: 1px solid lightblue;
            cursor: pointer;
        }

        .forms-dropdown {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            width: 10vw;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .forms-dropdown a {
            color: black;
            font-size: 1vw;
            padding: 1vw 1vw;
            text-decoration: none;
            display: block;
            /* border-bottom: 0.2px solid gray;
  border-width: 2px; */
        }

        .forms-dropdown a:hover {
            background-color: #f1f1f1;
        }

        .forms:hover .forms-dropdown {
            display: block;
        }

        .forms:hover .dropbtn {
            background-color: #2a64b1;
        }


        @media screen and (max-width: 1150px) {
            .burger {
                display: block;
                z-index: 10;
            }

            .nav-items1 {
                display: none;
            }

            .nav-items1.active {
                display: flex;
                align-items: center;
                justify-content: space-around;
                flex-direction: column;
                transition: all 0.1s ease-in;
                width: auto;
                position: fixed;
                top: 0%;
                left: 40%;
                background-color: #6CA0DC;
                height: 101vh;
                width: 60vw;
                z-index: 5;
                transition-property: all;
                transition-duration: 0.3s;
            }

            /* .email-part input,
        .email-part i {
            z-index: -1;
        } */

            .drop1 {
                width: 100%;
                display: flex;
                flex-direction: column-reverse;
                justify-content: space-around;
                align-items: center;
            }

            .drop1 select {
                width: 35vw;
                margin: 5vw 0;
            }

            .menu1 {
                width: 30vw;
            }

            .log1 {
                border: 1px solid #edf6ff;
                background-color: #edf6ff;
                color: #000;
                font-size: 2vw;
                width: 15vw;
            }

            .sign1 {
                border: 1px solid #edf6ff;
                font-size: 2vw;
                width: 15vw;
                color: white;
            }

            .formnav {
                width: 35vw;
                /* background-color: #0759b1; */
            }

            .formnav input {
                width: 80%;
            }

            .btn1 {
                padding: 0;
                margin: 0;
                /* background-color: #0759b1; */
            }

            .btn1 i {
                font-size: 2.5vw;
            }
        }

        @media screen and (max-width: 600px) {
            nav {
                height: 25vw;
            }

            .logo-part {
                width: 100%;
            }

            .edu1 {
                width: 100%;
                margin: 0;
                padding: 0;
                font-size: 8vw;
            }

            .nav-items1.active {
                display: flex;
                align-items: center;
                justify-content: space-around;
                flex-direction: column;
                transition: all 0.1s ease-in;
                width: auto;
                position: fixed;
                top: 0%;
                right: 0;
                height: 101vh;
                width: 60vw;
                z-index: 5;
                transition-property: all;
                transition-duration: 0.3s;
            }

            .ooptions1 {
                width: 60% !important;
            }

            .ooptions1,
            .ooptions1 option {
                font-size: 3vw !important;
            }

            .drop1 {
                width: 100%;
                display: flex;
                flex-direction: column-reverse;
                justify-content: space-around;
                align-items: center;
            }

            .drop1 select {
                width: 35vw;
                margin: 5vw 0;
            }

            #searchbar {
                font-size: 3vw;
            }

            .menu1 {
                /* background-color: #0759b1; */
                width: 80%;
            }

            .log1 {
                font-size: 3vw;
                width: 25vw;

            }

            .sign1 {
                font-size: 3vw;
                width: 30vw;
            }

            .sign1 i,
            .log1 i {
                font-size: 3vw;
            }

            .formnav {
                width: 35vw;
                /* background-color: #0759b1; */
            }

            .formnav input {
                width: 80%;
            }

            .btn1 {
                padding: 0;
                margin: 0;
                /* background-color: #0759b1; */
            }

            .btn1 i {
                font-size: 4vw;
            }

            .img1 {
                height: 20vw;
            }

            .img1 img {
                height: 20vw;
            }

            /* nav2 */
            .nav-bottom-1 {
                height: auto;
                display: flex;
                align-items: center;
                justify-content: end;
            }

            .nav-bottom-1-1 {
                margin-top: 70vh;
                margin-right: 12vw;
                position: fixed;
                display: flex;
                align-items: end;
                /* background-color: #000; */
                justify-content: center;
                flex-direction: column;
                width: 40%;
            }

            .nav-bottom-1-1 {
                display: none;
            }

            .nav-bottom-1-1.act {
                display: flex;
            }

            .nav-2-1 {
                margin-bottom: 3vw;

            }

            .nav-2-1 a {
                font-size: 4vw !important;
            }

            .forms {
                margin-right: 20vw;
                font-size: 3vw;
            }

            .dropbtn {
                width: 30vw;
                font-size: 3vw !important;
            }

            .forms-dropdown {
                width: 30vw;
                font-size: 3vw !important;
            }

            .forms-dropdown a {
                font-size: 3vw !important
            }
        }

        #loader {
            width: 100%;
            height: 100vh;
            position: fixed;
            z-index: 100;
            background: #fff url("./Loading/Spinningline.gif") no-repeat center center;
            background-size: auto;
        }
    </style>
</head>

<body>
    <div id="loader"></div>

    <nav class="nav1">

        <div class="logo-part">
            <div class="img1" onclick="window.location.reload()">
                <a href="./index.php">
                    <img src="./images/logo1.png" alt="" />
                </a>
            </div>
            <h1 class="edu1">𝓔𝓭𝓾 𝓒𝓵𝓲𝓷𝓲𝓬</h1>
        </div>
        <label class="burger" for="active1" onclick="tog()">
            <input type="checkbox" id="active1">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <div class="nav-items1">

            <div class="drop1">
                <select class="ooptions1" name="Hello" id="sel1">
                    <option value="">Select Category</option>
                    <option value="./studentsrel.php">STUDENTS' RELATED INITIATIVES</option>
                    <option value="./faculty.php">FACULTY/STAFF RELATED INITIATIVES</option>
                    <option value="./institutional.php">INSTITUTIONAL INITIATIVES</option>
                    <option value="./curiculam.php">CURRICULUM RELATED INITIATIVES</option>
                    <option value="./nep.php">NEP RELATED INITIATIVES</option>
                    <option value="./accreditation.php">ACCREDITATION RELATED INITIATIVES</option>
                    <option value="./eventmanagement.php">EVENT MANAGEMENT</option>
                    <option value="./governance.php">GOVERNANCE RELATED TASKS</option>
                    <option value="./iprrelated.php">IPR RELATED TASKS</option>
                    <option value="./research.php">RESEARCH RELATED INITIATIVES</option>
                    <option value="./innovation.php">INNOVATION AND ENTREPRENEURSHIP RELATED INITIATIVES</option>

                </select>
                <form class="formnav" action="#" method="get">
                    <input type="text" id="searchbar" onkeyup="search_text()" placeholder="Search Here...." class="in1" />
                    <button type="submit" class="btn1">
                        <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                    </button>
                </form>
            </div>
            <div class="menu1">
                <?php
                if (!isset($_SESSION['username'])) {
                    echo "<a href='./login.php' class='log1'><i class='fa-solid fa-user'></i><span>LOGIN</span></a>
                    <a href='./registration.php' class='sign1'><i class='fa-solid fa-users'></i><span>SIGN
                    UP</span></a>";
                } else {
                    echo "<a href='./logout.php' class='sign1'><i class='fa-solid fa-user'></i><span>LOGOUT</span></a>";
                }
                ?>

            </div>
        </div>
    </nav>
    <div class="nav-bottom-1">
        <div class="nav-bottom-1-1">

            <div class="nav-2-1">
                <a href="./index.php">Home</a>
            </div>
            <div class="nav-2-1">
                <a href="./about.php">About</a>
            </div>
            <div class="nav-2-1">
                <a href="./opportunities.php">Opportunities</a>
            </div>
            <div class="nav-2-1">
                <a href="./Challenges.php">Challenges</a>
            </div>
            <div class="nav-2-1">
                <a href="./professionals.php">Hire Professionals</a>
            </div>
            <div class="forms">
                <button class="dropbtn">Registration Forms</button>
                <div class="forms-dropdown">
                    <a href="./faculty_form.php">Registration form for Faculties</a>
                    <a href="./univ_form.php">Registration form for Universities</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scroll-lock/2.1.2/scroll-lock.min.js" integrity="sha512-MBbICakhGbnckq5iFnAvaoTQwTyZqIEdhXGbzpNvGhkr+ZhjRdaVmJuNCVyZkObp5O/Mlows81qbzLAalgnoIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const in12 = document.querySelector('.burger')
        const navitems1 = document.querySelector('.nav-items1')
        const checkbox1 = document.querySelector("#active1")
        const navbot = document.querySelector(".nav-bottom-1-1");

        function tog() {
            if (checkbox1.checked == true) {
                navitems1.classList.remove('active');
                scrollLock.enablePageScroll();
                checkbox1.checked = false;
                navbot.classList.remove("act");
            } else {
                navitems1.classList.add("active");
                scrollLock.disablePageScroll();
                checkbox1.checked = true

                navbot.classList.add("act");
            }
        }

        function search_text() {
            let input = document.getElementById('searchbar').value;
            input = input.toLowerCase();
            let x = document.getElementsByClassName('litem');
            for (i = 0; i < x.length; i++) {
                if (!x[i].innerHTML.toLowerCase().includes(input)) {
                    x[i].style.display = "none";

                } else {
                    x[i].style.display = "list-item";
                }
            }
        }



        function redirect(goto) {
            if (goto != '') {
                window.location = goto;
            }
        }

        var selectEl = document.getElementById('sel1');

        selectEl.onchange = function() {
            var goto = this.value;
            redirect(goto);

        };

        const loader = document.getElementById("loader");
        window.addEventListener("load", function() {
            loader.style.display = 'none';
        });
    </script>

</body>