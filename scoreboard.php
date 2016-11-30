<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>snakeFake | The Game</title>
 <!-- JavaScript -->
<script src="//cdn.jsdelivr.net/alertifyjs/1.8.0/alertify.min.js"></script>



  
<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/themes/bootstrap.min.css"/>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<style>

.highlight{
background-color: #D1D1D1;

}

</style>
</head>
<body>

<div class="container">
  <h2>snakeFake | The Game</h2>
  <p>Scoreboard</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Name</th>
        <th>Highest Score</th>
      </tr>
    </thead>
    <tbody>
      
<?php


  $servername = "localhost";
$username = "root";
$password = "myniki123";
$dbname = "games";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_get = mysqli_query($conn, "SELECT DISTINCT `name`, `pinnacle` FROM `snake` ORDER BY `pinnacle` DESC LIMIT 15");
   
    
$i = 1;
 while($row = mysqli_fetch_assoc($sql_get)){
             echo"  

   <tr id=".$row['name'].">
   <td>".$i."</td>
   <td>".$row['name']."</td>
   <td>".$row['pinnacle']."</td>
   </tr>


    "; 
    $i++;
              }

?>      
      
    </tbody>
  </table>
</div>
<div class="col-md-8 text-center">
  
  
</div>
<script>

$(document).ready(function(){

var encoded_name = location.search.split('temp=')[1] ? location.search.split('temp=')[1] : 'anonymous';
        var name = decodeURI(encoded_name);

var highlight = document.getElementById(name);
highlight.className += " highlight";


});



</script>
</body>
</html>