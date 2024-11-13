<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: gray;">
<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
include 'navbar.php';
include 'db_conn.php';
$user = $_SESSION["user_name"];

$sql = "SELECT * from mycart where user='".$user."';";
$sql1 = "SELECT sum(amount) as 'total' from mycart where user='".$user."';";
$result = $conn->query($sql);
$res = $conn->query($sql1);
$r = $res->fetch_assoc();
$total = $r["total"];
//echo $total;

if ($result->num_rows > 0) {
  // output data of each row
     ?>
     <table>
         <thead>
              <tr>
                   <th>Name</th>
                   <th>Price</th>
                   <th>Quantity</th>
                   <th>Amount</th>
                   <th>Remove</th>
              </tr>
         </thead>
          <tbody>
         <?php
  while($row = $result->fetch_assoc()) {
    ?>
              <tr>
                   <td><?php echo $row["name"]; ?></td>
                   <td><?php echo $row["price"]; ?></td>
                   <td><?php echo $row["quantity"]; ?></td>
                   <td><?php echo $row["amount"]; ?></td>
                   <td><button class="btn btn-danger">Remove</button></td>
              </tr>
         
    <?php
  }
} else {
  echo "0 results";
}
 ?>
</tbody></table>

<h1>Total is     <?php echo $total;?> </h1>   


<?php 

}else{
     header("Location: index.php");
     exit();
}
 ?>
</body>
</html>
