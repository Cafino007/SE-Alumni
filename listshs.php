<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
    <meta name="author" content="">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.csss" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/js/tablescript.js"></script>
        <title>WMSU ALUMNI SYSTEM</title>


<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


<!-- Additional CSS Files -->
<link rel="stylesheet" href="assets/css/fontawesome.css">
<link rel="stylesheet" href="assets/css/templatemo-seo-dream.css">
<link rel="stylesheet" href="assets/css/animated.css">
<link rel="stylesheet" href="assets/css/owl.css">


<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.3s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">


<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="list.php">ELEMENTARY</a>
  <a href="listjhs.php">JUNIOR HIGH</a>
  <a href="listshs.php">SENIOR HIGH</a>
  <a href="listcollege.php">COLLEGE</a>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
<h4> WMSU Alumni </h4>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>


<div class="container" style = "padding-top: 5%;">
  <div class="row">
    <div class="col-md-12">
      <div class="table-responsive">
                  <table id="example" class="table table-striped table-boardered" style="width:100%">
                  <thead>
                  <tr>
                  <th>ID</th>
                   <th>First Name</th>
                  <th>Last Name</th>
                  <th>School Name</th>
                  <th>Strand</th>
                  <th>Date Graduated</th>
                   </tr>
                   </thead>
                <tbody>

      
      <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumni";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
					$sql = "select a.id, a.first_name,a.last_name, s.schoolname AS seniorhighschool_school,strand AS strand, s.dategraduated AS seniorhighschool_date FROM alumin a LEFT JOIN seniorhighschool s ON a.seniorhighschool_id = s.seniorhighschool_id";
          $result = $conn->query($sql);

          if (!$result) {
            die("Invalid query: " . $conn->error);
          }
          while($row= $result->fetch_assoc()){
            echo "
                    <tr>
                    <td>  $row[id] </td>
                     <td>  $row[first_name]  </td>
                      <td>  $row[last_name]  </td>
                      <td>  $row[seniorhighschool_school]  </td>
                      <td>  $row[strand]  </td>
                      <td>  $row[seniorhighschool_date]  </td>
                       </tr>
                    
                    ";
          }
          ?>

</tbody>
			  </table>
   
</body>
</html> 
