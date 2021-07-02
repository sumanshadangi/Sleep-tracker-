<?php 
include 'config.php';
// include 'register.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
if (isset($_POST['sleep_duration'])) {
  echo"got it";
$date=$_POST['date'];
$sleep_time=$_POST['sleep_time'];
$wakeup_time=$_POST['wakeup_time'];
$sleep_duration=$_POST['sleep_duration'];
$tablename=$_SESSION['username'];
$sql="INSERT INTO $tablename (`DATE_`, `SLEEP_TIME`, `WAKEUP_TIME`, `SLEEP_DURATION`) VALUES ('$date', '$sleep_time', '$wakeup_time', '$sleep_duration' );";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Entry successful!')</script>";
    header("Location: welcome.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  echo "<script>alert('something went wrong')</script>";
}
}
// isset($_POST['submit'])

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="new_entry_style.css">
    <title>New Entry</title>
  </head>
  <body>

    <div class="new_entry">
        
      <button id="new_entry_button" type="button"   data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">+ New Entry</button><br>
      <button id="new_entry_button" class="viewrecord" type="button" style="color:black;"><a href="viewrecords.php">View Sleep Records</a></button>
  <a class="logout" href="logout.php" style="background-color:white; padding:10px; border-radius:5px;">Logout</a>
  </div>
  
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Enter Sleep Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="welcome.php" method="POST">
                <div class="mb-3">
                    <label for="date" class="col-form-label">Date</label>

                    <input type="date"  class="form-control enter"name="date" id="date">
                  </div>
                  <div class="mb-3">
                    <label for="sleep_time" class="col-form-label">Sleep Time</label>
                    <input type="time" class="form-control" placeholder="e.g. 12 hours 40 mins" name="sleep_time" id="sleep_time">
                  </div>
                  <div class="mb-3">
                    <label for="wakeup_time" class="col-form-label">Wakeup Time</label>
                    <input type="time" class="form-control" placeholder="e.g. 5 hours 40 mins"  name="wakeup_time" id="wakeup_time">
                  </div>
              <div class="mb-3">
                <label for="sleep_duration" class="col-form-label">Total Sleep Duration</label>
                <input type="text" class="form-control" placeholder="e.g. 12 hours 40 mins"  name="sleep_duration" id="sleep_duration" placeholder="e.g. 4 hrs 5 mins">
              </div>
              <p>press enter</p>
              <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary" id="clear">Clear</button>

            <!-- <button type="submit" class="btn btn-primary" id="submit" name="submit"><a href="welcome.php">Submit</a></button> -->
          </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->

    <script>
    //   window.addEventListener('load', () => {
    //     const time_diff = document.querySelector('#sleep_duration');
    //     time_diff.addEventListener('click', () => {
    //     let time1=document.getElementById('sleep_time').value;
    //     let time2=document.getElementById('wakeup_time').value;
    //     var splitted1 = time1.split(":");
    //     var splitted2 = time2.split(":");
    //     time1 = splitted1[0]+splitted1[1];
    //     time2 = splitted2[0]+splitted2[1];
    //     var t1=parseInt(time1);
    //     var t2=parseInt(time2);
    //     // if(t1>1200){t1=t1-1200;
    //     //   var diff = t1-t2
    //     // diff=t1-diff+100;};
    //     // if(t2>1200){t2=t2-1200;
    //     //   var diff = t2-t1;};
       
    //       var diff = t2-t1;
    //     hours = Math.floor((diff/100));
    //     minutes =(diff%100);
    //     var sleep_duration= hours + " hours, " + minutes + " minutes";
    //     // document.getElementById("sleep_duration").innerHTML=sleep_duration;
    //     document.querySelector('#sleep_duration').value =sleep_duration;
    //   });
    // }); 


        window.addEventListener('load', () => {
        const button = document.querySelector('#clear');
        button.addEventListener('click', () => {
            document.querySelector('#date').value = "";
        });
    }); 
    window.addEventListener('load', () => {
        const button = document.querySelector('#clear');
        button.addEventListener('click', () => {
            document.querySelector('#sleep_time').value = "";
        });
    }); 
    window.addEventListener('load', () => {
        const button = document.querySelector('#clear');
        button.addEventListener('click', () => {
            document.querySelector('#wakeup_time').value = "";
        });
    }); 
    window.addEventListener('load', () => {
        const button = document.querySelector('#clear');
        button.addEventListener('click', () => {
            document.querySelector('#sleep_duration').value = "";
        });
    }); 
    </script>
  </body>
</html>