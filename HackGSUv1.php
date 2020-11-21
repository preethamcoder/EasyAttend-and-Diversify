<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, intial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <style>

            body {
                background-color: #55b9f3; 
                font-family: 'Muli', sans-serif;
                padding-top: 2%;
                background-image: url("Img-1.jpg");
                background-repeat:initial;
                background-size: cover;
            }

            .nav-bar{
                width: fit-content;
                height:fit-content;
                padding: 0.5%;
                float: left; 
                color: rgb(0, 0, 0);
                text-align: center;
                font-size: 25px;
                text-decoration: none;
                text-shadow:
                    0px 1px 3px rgba(000,000,000,0.3),
                    0px 0px 0px rgba(255,255,255,0);
                position: static;
                clear: both;
                margin-top: 0%;
            }

            .nav-bar:hover {
                background: rgb(172, 5, 238);
                background: linear-gradient(90deg, rgba(172, 5, 238, 1) 0%, rgba(255, 0, 108, 1) 100%);
                border-radius: 25px;
                border: 1px solid rgb(69, 9, 104);
                box-shadow:
                    0px 5px 5px rgba(000, 000, 000, 0.1),
                    inset 0px 1px 0px rgba(255, 255, 255, 0.5);
                color: white;
            }

            .home{
                margin-left: 5%;
                margin-top: 0%;
                z-index: 1;
            }

            .container {
                 /* width: 35%;
                 margin: 0 auto; */
                position: absolute;
                display: flex;
                justify-content:center;
                align-items: center;
                flex-wrap:nowrap;
                width: 99%;
                margin-top: 12%;
            }

            #signup {
                width: 35%;
                margin: -12%;
                padding: 4% 3%;
                background-color: #08AEEA;
                border-radius: 50px;
                background: #55b9f3;
                box-shadow:  20px 20px 60px #489dcf, 
                            -20px -20px 60px #62d5ff;
                /* padding: 0% 10% 10%;
                background: rgb(216, 240, 241);
                box-shadow: 
                     0px 0px 0px 5px rgba( 255,255,255,0.4 ), 
                     0px 4px 20px rgba( 0,0,0,0.33 ); */
            }

            #signup .header {
                margin-bottom: 0%;
                text-align: center;
                color:#ebebeb;
            }
        
            #signup .sep {
             height: 0.01em;
             background: #ebebeb;
             width: 115%;
             margin: 0% -7%;
            }

            #signup .inputs {
                margin-top: 0%;
                color: #ebebeb;
            }

            #signup .inputs input[type=text] {
                background: #55b9f3;
                padding: 3% 2%;
                width: 80%;
                margin-bottom: 5%;
                box-shadow: inset 4px 4px 4px #489dcf,
                            inset -1px -1px 1px #62d5ff;
                clear: both;
                border-radius: 15px;
                border: none;
                color: #2b2b2b;
            }

            #signup .inputs input[type=text]:focus{
                box-shadow: inset 4px 4px 4px #489dcf,
                            inset -7px -7px 7px #62d5ff;
                outline: none;
            }

            #signup .inputs input[type=number] {
                background: #55b9f3;
                padding: 3.5% 2.5%;
                width: 25%;
                margin-bottom: 5%;
                box-shadow: inset 4px 4px 4px #489dcf,
                            inset -1px -1px 1px #62d5ff;
                clear: both;
                border-radius: 15px;
                border: none;
                color: #2b2b2b;
            }

            #signup .inputs input[type=number]:focus{
                box-shadow: inset 4px 4px 4px #489dcf,
                            inset -7px -7px 7px #62d5ff;
                outline: none;
            }

            #signup .inputs input[type=submit]{
                display: inline-block;
                padding: 10px 20px;
                width: 100%;
                margin-top: 2%;
                padding: 4.5%;
                color: #ebebeb;
                font-size: 1.5vw;
                text-align: center;
                text-decoration: none;
                background: #55b9f3;
                border-radius: 15px;
                box-shadow: 30px 30px 30px #489dcf, 
                            -5px -5px 30px #62d5ff;
                text-shadow:
                    0px 1px 3px rgba(000,000,000,0.3),
                    0px 0px 0px rgba(255,255,255,0);
                position: static;
                clear: both;
                border: none;
            }

            #signup .inputs input[type=submit]:hover {
                box-shadow: inset -3px -3px 3px rgba(255, 255, 255, 0.5),
                            inset 5px 5px 5px rgba(0, 0, 0, 0.1);
            }

            

                /* hide the default checkbox */
                input[type="radio"] {
                display: none;
                }
               

                .checkbox-wrapper {
                width: 20%;
                display: grid;
                grid-template-columns: repeat(2, 150px);
                }

                .image-checkbox {
                margin: 5%;
                margin-left: 50%;

                }

                label {
                    border: 2px solid #55b9f3;
                    display: flex;
                    justify-content: center;
                    align-self: center;
                    width: 150%; 
                    height: 100px;
                    padding: 5%;
                    cursor: pointer;
                    overflow: hidden;
                    border-radius: 15px;
                    box-shadow: 10px 10px 30px #489dcf, 
                                -5px -5px 30px #62d5ff;
                    margin-left: 0%;
                }

                ::before {
                    content: " ";
                    position: absolute;
                    border-radius: 50%;
                    background: url(https://www.dropbox.com/s/pjallv03fjsm32s/check.png?raw=1) no-repeat;
                    background-size: contain;
                    width: 0%;
                    height: 0%;
                    transform: scale(0) translateX(-35px);
                    transition: 0.4 ease;
                }

                img {
                    width: 85%;
                    transform-origin: center;
                    opacity: 0.5;
                    margin: 0 auto;
                }

                :checked + label {
                    border: 2px solid #55b9f3;
                    box-shadow: inset -2px -2px 2px rgba(255, 255, 255, 0.5),
                            inset 2px 2px 2px rgba(0, 0, 0, 0.1);
                }

                :checked + label::before {
                    transform: scale(1.3) translateX(-35px);
                }

                :checked ~ label img {
                    opacity: 1;
                    transform: scale(0.9);
                }

                ::placeholder{
                    color: #2b2b2b;
                }

                


        </style>

        <title>Register Page</title>
    </head>
    <body>
        <a href="" class="nav-bar home">HOME</a>
        <div class="container">
            
            <form action="HackGSUv2" method="POST" id="signup">
                <br>
                <div class="header">
                    <h2>Attendance</h2>
                </div>
                <div class="sep">
                    <br>
                </div>
				
                <div class = "inputs">
                
                    <p>First Name: </p>
                    <input type="text" name="name" value="" id="name" placeholder="First Name" ><br>
                    
                    <p>Last Name: </p>
                    <input type="text" name="last" value="" id="last" placeholder="Last Name">

                    <p>Student ID: </p>
                    <input type="number" min="100000000" max="9999999999" name="age" placeholder="ID">

                    <!--<center><h2>Pick your favorite character</h2></center>
                    <div class="checkbox-wrapper">
                        <div class="image-checkbox">
                            <input type="radio" name="character" id="checkbox1" value="Mickey"/>
                            <label for="checkbox1">
                                <img src="http://pngimg.com/uploads/mickey_mouse/mickey_mouse_PNG94.png" alt="" />
                            </label> 
                            <p>Mickey</p>   
                        </div>
    
                    

                        <div class="image-checkbox">
                            <input type="radio" name="character" id="checkbox2" value="Minnie"/>
                            <label for="checkbox2">
                                <img src="https://www.freepngimg.com/thumb/minnie_mouse/32433-7-minnie-mouse-hd-thumb.png" alt="" />
                            </label>
                            <p>Minnie</p>
                        </div>
                    </div> -->
					
					
                    <input type="submit" value="NEXT PAGE">

                
            </form>
        </div>
    </body>
</html>
