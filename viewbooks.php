<!DOCTYPE html>
<?php
    session_start();

    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Find Posts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" type = "text/css" href = "css/home_style2.css">
</head>

<body>
    <div class = "row">
        <div class = "col-md-12">
            <center><h2><u>BOOKS LIST</u></h2></center><br><br>
            
            <?php 
            include("connect.php");


    $get_books = "select * from book ORDER by 1 DESC ";

    $run_books = mysqli_query($link, $get_books);

    while($row_books = mysqli_fetch_array($run_books)){
        $id = $row_books['id'];
        $name = $row_books['name'];
        $image = $row_books['image'];
        $authorname = $row_books['authorname'];

             echo "
                
                            <div class = 'col-md-6'>
                            
                            <h3>$name<a style = 'text-align:center;'></h3>
                                        <h4><a style = 'text-align:center';>$authorname</h3>
                            </div>
                            <div class = 'col-md-4'>
                            </div>
                        </div>
                        <div class = 'row'>
                            <div class = 'col-md-12'>
                                <img id = 'book-img' src = 'images/$image' style = 'text-align:center' 'height:150px;'>
                            </div>
                        </div><br>
                       
                   
                    
    
                        <a href = 'upload_bookadmin.php' style = 'text-align:center'>
                        <button class = 'btn btn-success'>Upload</button></a><br><br>
                        <a href = 'deletebook.php?id=$id'>
                        <button class = 'btn btn-danger'>Remove</button></a><br><br>
                       
                    </div>
                    <div class = 'col-md-3'>
                    </div>
                </div><br><br>
             ";
         }
         ?>
         

    
</body>
</html>