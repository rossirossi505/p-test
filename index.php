<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$x=1 ;



$db['db_host'] = "localhost"; 
$db['db_user'] = 'root' ;
$db['db_pass'] = '' ;
$db['db_name'] = 'cms' ;


foreach($db as $key=>$value){
    define(strtoupper($key),$value) ;
}


$connection = mysqli_connect(DB_HOST, DB_USER , DB_PASS , DB_NAME); 



if($connection){
   echo 'connected' ;
}






$query = "SELECT * FROM posts" ;
                   $query_selection = mysqli_query($connection, $query); 

                   while($row =mysqli_fetch_assoc($query_selection)){

                       $post_id = $row['post_id'];
                       $post_title = $row['post_title'];
                       $post_user = $row['post_user'];
                       $post_date = $row['post_date'];
                       $post_image = $row['post_image'];
                       $post_status = $row['post_status'];
                       $post_content = substr($row['post_content'],0,50);
               
                    
                   } ;
                 ?>
                 
                <h2>
                    <a href="post/<?php echo $post_id; ?>"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="author_posts.php?author=<?php echo $post_user ?>&p_id=<?php echo $post_id; ?>"><?php echo $post_user ?></a>
                </p>






</body>
</html>