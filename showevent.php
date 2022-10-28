<?php
    require('dbconnect.php');
    require('header1.php');
    require('navbar.php');
    $sql = "SELECT *
    FROM `events`
    WHERE `events`.`number_of_participants` < `events`.`limit_number`; ";
    $results = $conn->query($sql);
    
    ?>
<html>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #fff;
  text-align: left;
  padding: 5px;
}

tr:nth-child(even) {
  background-color: #fff;
}
</style>

    <head>
</head>
    <body>
    <h2>กิจกรรมวิ่ง</h2>
    <hr width="100%" size="5" align="center" color="#d2d2d2" noshade>
      <table style="width:100%">
        <?php
         while($row = $results->fetch_assoc()){
              ?>
              <tr>
                <th><img src="event_img/<?php echo $row['event_image']?>" BORDER="2"	WIDTH="200" HEIGHT="150" ALIGN="top"	></th>
                <th style="width:1000px">กิจกรรม : <?php echo $row['event_id']?> <?php echo $row['event_name']?>
                <br>สถานที่ : <?php echo $row['location']?>
                <br>วัตถุประสงค์ : <?php echo $row['objective']?>
                <br>ระยะทาง : <?php echo $row['distance']?>   กิโลเมตร 
                <br>มีผู้เข้าร่วม : <?php echo $row['number_of_participants']?>   คน
                <br class="limit">รับจำนวน : <?php echo $row['limit_number']?>   คน
                <br>ราคา : <?php echo $row['price']?>   บาท
                <br>เบอร์ผู้จัด : <?php echo $row['organizer_phone_number']?>
                <th><a href="receipt.php?event_id=<?php echo $row['event_id']?>" class="btn btn-warning" style="width:100px;height: 200px;" role="button"><br><br><br><br>เข้าร่วม</a></th>
              </tr><br>
              
              <?php
            } 
            ?>
              </table>


<?php
// require('footer.php');
?>
</body>
</html>