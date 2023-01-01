<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <style type="text/css">
        table{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td{
            border: 1px solid grey;
        }
    </style>
</head>
<body>
    <center>
        <table id="ta"></table>
    </center>

    <script type="text/javascript">
        $(document).ready(function(){
            $.ajax({
                type: "GET",
                url: "getdata.php",
                success: function(data){
                    document.getElementById("ta").innerHTML += data;
                }
            });
        });
    </script>
</body>
</html>