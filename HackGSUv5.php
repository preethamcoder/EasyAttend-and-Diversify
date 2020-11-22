<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, intial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            background: url("https://github.com/preethampython101/Hackathon2020/blob/main/Img-1.jpg?raw=true");
            background-repeat: no-repeat;
            background-size: 100%;
            font-family: "Courier New", Courier, monospace;
            /* background-color: #cccccc; */
        }


        .nav-bar {
            width: fit-content;
            height: fit-content;
            padding: 0.5%;
            float: right;
            color: rgb(255, 255, 255);
            text-align: center;
            font-size: 25px;
            text-decoration: none;
            text-shadow:
                0px 1px 3px rgba(000, 000, 000, 0.3),
                0px 0px 0px rgba(255, 255, 255, 0);
            position: absolute;
            clear: both;
            /* margin-top: 12%; */
        }

        .nav-bar:hover {
            background: #c78cfa;
            border-radius: 25px;
            border: 1px solid rgb(69, 9, 104);
            box-shadow:
                0px 5px 5px rgba(000, 000, 000, 0.1),
                inset 0px 1px 0px rgba(255, 255, 255, 0.5);
            color: white;
        }

        .home {
            margin-left: 43%;
            margin-top: 2%;
            background: #c78cfa;
            border-radius: 25px;
            border: 1px solid rgb(69, 9, 104);
            box-shadow:
                0px 5px 5px rgba(000, 000, 000, 0.1),
                inset 0px 1px 0px rgba(255, 255, 255, 0.5);
            color: white;
        }

        .about {
            margin-left: 65%;
            margin-top: 2%;
        }

        .course-select {
            margin-left: 62%;
            margin-top: 0%;
        }
        #main-col{
            width: 30%;
            margin-top: 20%;
            margin-left: 15%;
            position: absolute;
        }

        input[type="text"] {
            background: #ffffff;
            padding: 1.2% 2%;
            width: 20%;
            margin-bottom: 5%;
            clear: both;
            border-radius: 15px;
            border: none;
            color: #2b2b2b;
            margin-top: 20%;
            margin-left: 10%;
            position: absolute;
        }

        input[type=text]:focus {
            outline: none;
        }

        input[type="number"] {
            background: #ffffff;
            padding: 1.2% 2%;
            width: 20%;
            margin-bottom: 5%;
            clear: both;
            border-radius: 15px;
            border: none;
            color: #2b2b2b;
            margin-top: 20%;
            margin-left: 10%;
            position: absolute;
        }

        input[type=submit] {
            display: inline-block;
            padding: 10px 20px;
            width: 20%;
            margin-top: 20%;
            margin-left: 40%;
            padding: 2.5%;
            color: #ebebeb;
            font-size: 1.5vw;
            font-family: Tahoma, Geneva, sans-serif;
            text-align: center;
            text-decoration: none;
            background: #c78cfa;
            border-radius: 15px;
            box-shadow: 10px 10px 10px #7228bd,
                -5px -5px 12px #9c4ced;
            text-shadow:
                0px 1px 3px rgba(000, 000, 000, 0.3),
                0px 0px 0px rgba(255, 255, 255, 0);
            position: absolute;
            clear: both;
            border: none;
            font-weight: strong;
        }

        input[type=submit]:hover {
            box-shadow: inset -3px -3px 3px rgba(255, 255, 255, 0.5),
                inset 5px 5px 5px rgba(0, 0, 0, 0.1);
        }

        ::placeholder {
            font-size: 17px;
            font-family: Tahoma, Geneva, sans-serif;
        }

        .welcome {
            font-size: 70px;
            margin-top: 5%;
            margin-left: 10%;
            position: absolute;
            color: rgb(255, 255, 255);
        }
    </style>
</head>

<body>
    <a href="#" class="nav-bar home">Student Access</a>
    <a href="Homeschool_construction.php" class="nav-bar about">Professor Access</a>
    <!--<a href="Homeschool_register.php" class="login-button login">Log-Out</a>-->

    <div class="welcome">
        Welcome to <br>EasyAttend
    </div>
    <div id="main-col">
        <table>
            <tr>
                <td>Building</td>
                <td>Room</td>
            </tr>
            <tr>
                <td>
                    <div id="building_select">
                        <select>
                        </select>
                    </div>
                </td>
                
            </tr>
            <table>
                <P>
                    <!--button type="button" onclick="getRoomDetails()">Get Room Details</button-->
                    <!--P-->
                    <h3>Result:</h3>
                    <div id="room_details">
                    </div>
    </div>


</body>

</html>