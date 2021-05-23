







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<h1  class="btn btn-primary">Submit</h1>

<?php
if(isset($_POST["liked"])){
 echo "skjdkjs" ;
}

echo "ksjdk";
?>

<script>

            $(document).ready(function(){

             var x = 1 ;

               $(".btn").click(function(){
                   
                $.ajax({
            url: "/ajaxtest/text.php?id=x",
            type: 'post',
            data: {
               'liked': 1,
               'post_id': 1,
               'user_id': 1
              }
            });

           

            });
            });



    </script>






    
</body>
</html>









