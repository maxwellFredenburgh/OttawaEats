<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

<?php
  session_start();
  $conn_string="host=www.eecs.uottawa.ca port=15432 dbname=mfred075 user=mfred075 password=M067857565f";
  $dbconn=pg_connect($conn_string) or die("Connection failed");
  $query="SELECT * FROM restaurant_db.restaurant WHERE name= $1";
  $stmt=pg_prepare($dbconn, "ps", $query);
  $result=pg_execute($dbconn,"ps", array('The Keg'));

  pg_close($dbconn);

 ?>

  <body>
    <header>
      <?php
        $row=pg_fetch_array($result)?>
        <h1><?php echo $row[0]; ?></h1>
        <h1><?php echo $row[1]; ?></h1>
        <h1><?php echo $row[2]; ?></h1>
        <h1><?php echo $row[3]; ?></h1>
    </header>
  </body>
</html>
