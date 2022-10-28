<?php
    require('session.php');
    require('slidebar.php');
    if (!isset($_SESSION['account'])){
        $_SESSION['error'] = 'You must log in first!';
        header('location: login-register.php');
    }
    $event_payment_list_id= $_GET['event_payment_list_id'];
    $sql = "SELECT `event_payment_list`.`event_id`, `account`.`phone_number`, `account`.`fname`, `account`.`lname`, `event_payment_list`.`pay_slip_image`, `event_payment_list`.`event_payment_list_id`
    FROM `event_payment_list` 
        LEFT JOIN `account` ON `event_payment_list`.`phone_number` = `account`.`phone_number`
    WHERE `event_payment_list`.`event_payment_list_id` = '$event_payment_list_id	'";
    $results = $conn->query($sql);
    
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
        #recordeventTable {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 80%;
        margin-left: 10%;
        margin-top: 2%;
        }

        #recordeventTable td, #customers th {
        border: 1px solid #500000;
        padding: 8px;
        }

        #recordeventTable tr:nth-child(even){background-color: #f2f2f2;}

        #recordeventTable tr:hover {background-color: #C0C0C0;}

        #recordeventTable th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #880000;
        color: white;
        }

</style>
    </head>
    <body>
    <table id="recordeventTable">
    <thead>
        
        <th>
            รูปสลิป
        </th>
    </thead>
    <tbody>

    <?php
         while($row = mysqli_fetch_array($results)){
              ?>
    
            <tr>
                <td>
                    <img src="slip_img/<?=$row['pay_slip_image']?>" alt="">
                </td>
            </tr>
    <?php
         }
              ?>


    </tbody>
    </table>
    </body>
    </html>