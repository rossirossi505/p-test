<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
<?php include("include/data.php") ;

$x=1 ;
//b07d371aff8fc1:a7e356b6@us-cdbr-east-03.cleardb.com/heroku_31be45636b10be3?reconnect=true



if($connection){
 echo "we are connected afterwards" ;
}else{
    echo "we arent connected" ;
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
                    <a href="text.php"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="author_posts.php?author=<?php echo $post_user ?>&p_id=<?php echo $post_id; ?>"><?php echo $post_user ?></a>
                </p>




<h1>this is test</h1>


</body>
</html>