<head>
    <style>
        * {
            box-sizing: border-box;
        }

        .foot {
            background-color: #00125b;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }


        .subs-now-outer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 40px;
            /* padding-left: 60px;
        padding-right: 60px; */
            width: 70vw;
            /* background-color: aqua; */
        }

        .subs-now-outer input:focus {
            outline: none;
            border: none;
        }

        .subs-now-outer h3 {
            width: 500px;
            font-size: 2vw;
            font-weight: 600;
        }

        .line-out {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 40px 0;
        }

        .line {
            border-top: 1px solid gray;
            width: 70vw;
        }

        .links {
            padding-top: 30px;
            padding-left: 60px;
            padding-right: 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .green-ln {
            border-top: 3px solid #00a556;
            border-radius: 3px;
            width: 50px;
            margin-top: 14px;
            margin-bottom: 14px;
        }

        .box-4 {
            display: flex;
            flex-direction: column;
            width: 17.2vw;
            /* background-color: #00a556; */
        }

        .box-4 a {
            text-decoration: none;
            color: white;
            margin-bottom: 5px;
        }

        .foot-inner {
            width: 80vw;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-bottom: 3vw;
        }

        .email-part {
            display: flex;
            align-items: center;
        }

        .email-part i {
            background-color: white;
            color: #00125b;
            border: none;
            outline: none;
            font-size: 1.01vw;
            padding: 1vw;
            height: 3.021vw;
        }

        .email-part input {
            border: none;
            font-size: 1vw;
            width: 18vw;
            height: 3vw;
            padding-left: 18px;
        }

        .email-part button {
            text-align: center;
            height: 2.5vw;
            padding: 1vh;
            color: white;
            font-weight: 600;
            font-size: 0.8vw;
            background-color: #0759B1;
            border: none;
            outline: none;
        }

        .sub-bac {
            display: flex;
            justify-content: end;
            align-items: center;
            background-color: white;
            width: 10vw;
            height: 3vw;
            padding: 0.5vw;
        }

        .copyright {
            background-color: #00125B;
            color: white;
            text-align: center;

        }

        .copyright p {
            font-weight: 400;
            margin: auto;

        }

        .copyright p span {
            font-weight: 600;
        }

        @media screen and (max-width: 600px) {
            .subs-now-outer {
                display: flex;
                flex-direction: column;

            }

            .subs-now-outer h3 {
                width: 80vw;
                font-size: 8vw !important;
            }

            .email-part {
                width: 80vw;
                height: 9vw;
            }

            .sub-bac {
                height: 8vw;
                width: 40vw;
            }

            .email-part input {
                width: 48vw;
                height: 8vw;
                font-size: 5vw;
            }

            .email-part i {
                height: 8vw !important;
                width: 6vw;
                font-size: 5vw;
            }

            .email-part button {
                height: 7vw;
                font-size: 3vw !important;
                padding: 0 1vw;
            }

            .box-4 {
                width: 100%;
            }

            .links {
                display: flex;
                flex-direction: column;
                width: 100%;
                padding: 0;
            }
        }
    </style>
</head>
<div class="foot">
    <div class="foot-inner">

        <div class="subs-now-outer">
            <h3>Want Us To Email You About Special Offers And Updates?</h3>
            <div class="email-part">
                <i class="fa-solid fa-paper-plane"></i>
                <input type="text" placeholder="Enter your Email" />
                <div class="sub-bac">
                    <button>Subscribe Now</button>
                </div>
            </div>
        </div>
        <div class="line-out">
            <div class="line"></div>
        </div>

        <div class="links">
            <div class="box-4">
                <div class="ft-head">
                    <h4>Site Map</h4>
                    <div class="green-ln"></div>
                </div>

                <a href="#">Documentation</a>
                <a href="#">Feedback</a>
                <a href="#">Plugins</a>
                <a href="#">Support Forums</a>
                <a href="#">Themes</a>
            </div>
            <div class="box-4">
                <div class="ft-head">
                    <h4>Useful Links</h4>
                    <div class="green-ln"></div>
                </div>

                <a href="#">About Us</a>
                <a href="#">Help Link</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Contact Us</a>
                <a href="#">Privacy Policy</a>
            </div>
            <div class="box-4">
                <div class="ft-head">
                    <h4>Social Contact</h4>
                    <div class="green-ln"></div>
                </div>

                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
                <a href="#">Instagram</a>
                <a href="#">YouTube</a>
                <a href="#">Github</a>
            </div>
            <div class="box-4">
                <div class="ft-head">
                    <h4>Our Support</h4>
                    <div class="green-ln"></div>
                </div>

                <a href="#">Help Center</a>
                <a href="#">Paid with Mollie</a>
                <a href="#">Status</a>
                <a href="#">Changelog</a>
                <a href="#">Contact Support</a>
            </div>
        </div>
    </div>
    <br><br>
    <footer class="copyright">
        <p>&copy Developed and Maintained by : <span></span></p>
    </footer>
</div>