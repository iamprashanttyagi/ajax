<?php

    error_reporting(1);
    include("db.php");
    if(isset($_POST['sub']))
    {
        extract($_POST);
        if(($usr!="") && ($em!="") && ($msg!="") )
        {
            $id="uid".rand();
            $sql = "insert into data (uid, name, email, msg, dat) VALUES ('$id', '$usr', '$em', '$msg', NOW())";
                        
            if (mysqli_query($link, $sql)) {
                $msg = "New Data Inserted successfully";
            } else {
                $msg= "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            mysqli_close($conn);
        }
        else
        {
            $msg="Fill the blank input";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX with JSON</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
     

</head>
<body>
<div class="container">
  <h3>Enter Details</h3><HR/>
  <form method="post" id="fm">
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control" name="usr">
    </div>
    <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" name="em">
    </div>
    <div class="form-group">
        <label>Message:</label>
        <textarea class="form-control" rows="5" name="msg"></textarea>
    </div>
    <div id="" style="color:red">
        <?php echo $msg;?>
    </div>
    <div class="form-group">        
        <button type="submit" name="sub" class="btn btn-success">Submit</button>
    </div>

  </form>

    <div>
        <div id="results" style="color:green"></div>
    </div>

<!-- <script>
$(document).ready(function()
{
setInterval(function() {
$.get('table.php', function(data) {
  $('.results').html(data);
});

}, 1000);
    
});

</script> -->



<script type="text/javascript">
    $(document).ready(function(){
      refreshTable();
    });

    function refreshTable(){
        $('#results').load('table.php', function(){
           setTimeout(refreshTable, 1000);
        });
    }
</script>

</body>
</html>