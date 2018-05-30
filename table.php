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

</head>
<body>
<div class="container">
    <div>
        <div id="results" style="color:green"></div>
    </div>

    <div class="container">
        <div class="table-responsive">
            <br/>
            <table id="data_table" class="table table-bordered table-striped">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function()
    {
        $.getJSON("get.php",function(data)
        {
            var in_data='';
            $.each(data,function(key,value)
            {
                in_data+='<tr>';
                in_data+='<td>'+value.name+'</td>';
                in_data+='<td>'+value.email+'</td>';
                in_data+='<td>'+value.msg+'</td>';
                in_data+='<td>'+value.dat+'</td>';
                in_data+='</tr>';                
            });
            $('#data_table').append(in_data);
        });
    });


</script>




</body>
</html>