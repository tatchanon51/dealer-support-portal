<!DOCTYPE html>
  <html lang="en" dir="ltr">
  
    <head>
    <link rel="icon" href="favicon.ico">
      <meta charset="utf-8">
      <title><?php include("functions.php"); echo $page_name; ?></title>
    </head>
  
    <body>
      <header>
        <div id="headerwarp">
            <h1 id="header_text"><?php echo $page_name; ?></h1>
          
          <div id="logout">
              <form id="logout" method="post">
                <input type="submit" name="submit" value="Logout">
              </form>

              <?php
                switch($_POST['submit']) {
                  case 'Logout':	
                  session_unset(); 	
                    session_destroy();
                    header("Location: index.php");
                  break;
                  }
              ?>
          </div>
        </div>
      </header>

<?php
  session_start();
  echo "<link rel='stylesheet' type='text/css' href='style.css?v=200827-2' />";
if (!isset($_SESSION["dealer_id"])) {
  header("Location: index.php");
}

$query = "SELECT * FROM `users` WHERE dealer_id = '".mysqli_real_escape_string($link, $_SESSION["dealer_id"])."'";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_array($result);

$dealer_id=$row['dealer_id'];
$name=$row['name'];

//Headline ?>
<p id="dealer_name"><?php echo $row['name']; ?> </p>

<form id="upload_box" method="post" enctype="multipart/form-data">
  กรุณาเลือกวันเริ่มกิจกรรม (ระบุเป็นปีค.ศ.)<br />
  <input type="date" name="event_start"><br /><br />
  กรุณาเลือกวันจบกิจกรรม (ระบุเป็นปีค.ศ.)<br />
  <input type="date" name="event_end"><br /><br />
  กรุณาเลือกประเภทกิจกรรม<br />
  <input type="radio" name="event_type" value="Showroom">
  <label >กิจกรรมที่ Showroom</label><br />
  <input type="radio" name="event_type" value="Roadshows">
  <label >Roadshows</label><br />
  <input type="radio" name="event_type" value="Motor Shows">
  <label >Motor Shows</label><br />
  <input type="radio" name="event_type" value="Online">
  <label >Social Platform เช่น Facebook SEM Line</label><br />
  <input type="radio" name="event_type" value="Others">
  <label >อื่นๆ</label><br /><br />
  กรุณากรอกยอดค่าใช้จ่ายทั้งหมดของกิจกรรม<br />
  <input type="number" name="amount"><br /><br />
  <input type="submit" value="ยืนยัน" name="submit"><br />
</form>


<?php
  
switch($_POST['submit']) {
case 'Logout':

  session_unset();

  session_destroy();

  header("Location: index.php");

break;

case 'ยืนยัน':
  $error = "";
  if (mysqli_connect_error()) {

    die ("Database Connection Error");

    } 
    
    if (!$_POST['event_start']) {
      $error = $error."กรุณากรอกวันเริ่มกิจกรรม\\n";
    } 
    
    if (!$_POST['event_end']) {
      $error = $error."กรุณากรอกวันจบกิจกรรม\\n";
    } 
    
    if (!$_POST['event_type']) {
      $error = $error."กรุณาเลือกประเภทกิจกรรม\\n";
    }
    
    if (!$_POST['amount']) {
      $error = $error."กรุณากรอกยอดค่าใช้จ่าย";
    } 

    if (strlen($_POST['amount'])> 10) {
      $error = $error."ยอดค่าใช้จ่ายเกิน 10 หลัก กรุณาแยกค่าใช้จ่าย";
    }

    if ($error == "") {

      $event_start = $_POST['event_start'];
      $event_end = $_POST['event_end'];
      $event_type = $_POST['event_type'];
      $submit_timestamp = date("Y-m-d H:i:s");
      $amount = $_POST['amount'];

      $query = "INSERT INTO `activity_cost` (`dealer_id`, `event_start`, `event_end`, `event_type`, `submit_timestamp`, `amount`) VALUE('$dealer_id', '$event_start', '$event_end', '$event_type', '$submit_timestamp', '$amount')";
      $result = mysqli_query($link, $query);

      //echo $query;

      $error = $error."การบันทึกผล สำเร็จ";
    }  
break;

}

  include("footer.php");

  if ($error != "") {
    ?><script type="text/javascript"> alert('<?php echo $error; ?>') </script><?php
}
?>