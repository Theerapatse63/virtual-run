<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
                *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial;
            top: 0;
            left: 0;
        }
        * a{
            text-decoration: none;
            color: white;
            font-size:  100%;
            font-weight: bold;
        }
        body {
            background-image: url(back1.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            text-align: center;
            }

/* Style the list inside the menu */
        nav ul {
            list-style-type: none;
            padding: 0;
            }

        section{
            background: rgb(255, 255, 255);
        }

        .event{
            float: left;
            width: 100%;
            height: 300px; 
            background: rgb(251, 252, 252);
            padding: 20px;

        }
                .sidebar{
            float: left;
            width: 2.5%;
            background-color: red;
            height: 100%;
            transition: .3s;
            overflow: hidden;
            position: fixed;

        }

        .sidebar:hover{
            width: 10%;

        }

        .sidebar:hover ul li span{
            opacity: 1;
            visibility:  visible;
        }

        ul li{
            display: flex;
            align-items: center;
            padding: 25px 0 25px 20px;

        }

        ul li i{
            width: 35px;
        }


        ul li span{
            margin-left: 10px;
            opacity: 0;
            visibility: 0;
            transition: .3s ease-in;
        }

        ul li:hover{
            background-color: rgb(250, 110, 110);
        }

        h1.menu{
            font-size: 100%;
            color: aliceblue;
            font-weight: bold;
            background-color: rgb(247, 47, 47);
        }
    </style>
</head>
<body>
<div class= "sidebar" >
        <h1 class="menu">MENU</h1>
        <ul>
        <li> 
                <a href="index.php"><span>หน้าแรก</span></a>
            </li>
            <li> 
                <a href="profile.php"><span>PROFILE</span></a>
            </li>
            <li> 
                <a href="/virtual_run/login-register.php"><span>LOGIN</span></a>
            </li>
            <li> 
                <a href="record.php"><span>RECORD</span></a>
            </li>
            <li> 
                <a href="showevent.php"><span>EVENT</span></a>
            </li>
            <li> 
                <a href="eventform.php"><span>ADD EVENT</span></a>
            </li>
            <li> 
                <a href="eventview.php"><span>MY EVENT</span></a>
            </li>
        </ul>
    </div>

</body>
</html>
