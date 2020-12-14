<?php include("database/config.php") ?>
<?php include("controllers/posts.php") ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Viết bài viết mới | CSE Forum</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <!-- SummerNote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  
  
  </head>
  <body>

    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php" style="width:850px">CSE Forum</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                &emsp;&emsp;&emsp;
                <a href="topic.php"><button type="button" class="btn btn-primary" style="width: 120px">Hủy</button></a>   
            </nav>
        </div>
    </header>

    <br><br><br>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm" style="max-width:1000px; margin:0 auto">
                    <form action="add_post.php" method="post">
                        <!-- Title -->
                        <input class="form-control" style = "font-size: 1.6rem; border:none" type="text" name="title" placeholder="Nhập tiêu đề...">
                        <br><br>
                        <!-- Body -->
                        <textarea class="form-control" style="border:none" name="body" id="body" placeholder="Nhập nội dung bài viết vào đây..." rows = "20"></textarea>
                        <!-- Save -->
                        <br><br><br>
                        <button type="submit" name="add-post" class="btn btn-primary" style = "width:970px">Đăng bài</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>