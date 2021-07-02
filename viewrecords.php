

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="display.css">
    <title>Document</title>
</head>
<body>
   <div class="main-div">
        <h1>YOUR SLEEP RECORDS</h1>
        <div class="center-div">
            <div class="table-responsive">
              <table>
                  <thead>
                      <tr>
                          <th>DATE</th>
                          <th>SLEEP TIME</th>
                          <th>WAKEUP TIME</th>
                          <th>SLEEP DURATION</th>
                      </tr>
                  </thead>
                  <tbody>

                    <?php
include 'config.php';
session_start();
$tablename=$_SESSION['username']; 
$selectquery = "SELECT * FROM $tablename;";
$query = mysqli_query($conn,$selectquery);
$nums = mysqli_num_rows($query);
$res = mysqli_fetch_array($query);
while($res = mysqli_fetch_array($query))
{
?>

<tr>
                         <td><?php echo $res[1]; ?></td>
                         <td><?php echo $res[2]; ?></td>
                         <td><?php echo $res[3]; ?></td>
                         <td><?php echo $res[4]; ?></td> 
                      </tr>

<?php
}
?>
                      
                  </tbody>
              </table>  
            </div>
        </div>
        <button id="new_entry_button" type="button" style="color:black; background-color: lightcyan; margin: 8px; padding:10px; border-radius: 10px;"><a href="welcome.php" style="text-decoration: none;">GO BACK</a></button> 
    </div>


</body>
</html>