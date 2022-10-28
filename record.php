<?php
    require('session.php');
    require('slidebar.php');
    if (!isset($_SESSION['account'])){
        $_SESSION['error'] = 'You must log in first!';
        header('location: login-register.php');
    }
    $phone_number = $_SESSION['account'];
    $sql = "SELECT `event_payment_list`.`event_payment_list_id`, `events`.`event_id`, `events`.`event_name`, `events`.`event_image`, `events`.`distance`, `events`.`organizer_phone_number`, `event_payment_list`.`pay_time_event`
    FROM `event_payment_list` 
        LEFT JOIN `events` ON `event_payment_list`.`event_id` = `events`.`event_id`
    WHERE `event_payment_list`.`pay_time_event` IS NOT NULL AND phone_number='$phone_number';";
    $results = $conn->query($sql);
    $num = mysqli_num_rows($results)
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
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

    </style>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
        $('#recordeventTabl').DataTable();
            } );
    </script>
    <table id="recordeventTable">
    <thead>
        
        <th>
            หมายเลขรายการ
        </th>
        <th>
            หมายเลขอีเว้น
        </th>
        <th>
            ชื่ออีเว้น
        </th>
        <th>
            รูปภาพ
        </th>
        <th>
            ระยะทาง
        </th>
        <th>
            เบอร์ผู้จัด
        </th>
        <th>
            เวลา
        </th>
    </thead>
    <tbody>

    <?php
         while($row = mysqli_fetch_array($results)){
              ?>
    
            <tr>
                <td><?=$row['event_payment_list_id']?></td>
                <td><?=$row['event_id']?></td>
                <td><?=$row['event_name']?></td>
                <td><img src="event_img/<?=$row['event_image']?>"  width="100px" height="100px"></td>
                <td><?=$row['distance']?></td>
                <td><?=$row['organizer_phone_number']?></td>
                <td><?=$row['pay_time_event']?></td>
            </tr>
    <?php
         }
              ?>


    </tbody>
    </table>
</body>
</html>