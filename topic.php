<?php
    include('database/config.php');
    include('database/db.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Topic</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"  />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    </head>
  <body>
        
        <!-- HEADER -->
        <?php include("includes/header.php") ?>
        <!-- HEADER -->

        <br><br>

        <!-- CONTENT -->
        <div class="container">   
            <a href="add_post.php"><button type="button" class="btn btn-secondary">Thêm bài viết mới</button></a>      
            <br><br>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>
                            Topic x
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a href="post.php"><b>Bài thứ nhất</b></a>
                            <dd style="font-size: 0.8em"><a href="#">Person1</a></dd>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="post.php"><b>Bài thứ hai</b></a>
                            <dd style="font-size: 0.8em"><a href="#">Person2</a></dd>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="post.php"><b>Bài thứ ba</b></a>
                            <dd style="font-size: 0.8em"><a href="#">Person3</a></dd>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="post.php"><b>Bài thứ tư</b></a>
                            <dd style="font-size: 0.8em"><a href="#">Person4</a></dd>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- CONTENT -->
        <br><br>

        <!-- Footer -->
        <?php include("includes/footer.php") ?>
        <!-- Footer -->

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>