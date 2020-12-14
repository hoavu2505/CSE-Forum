<?php
    require("database/config.php");
    include("controllers/users.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <title>CSE Forum</title>
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
            <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm">
                    <div class="card text-white bg-outline-secondary mb-3 d-inline-block">
                        <form action="register.php" method="post">
                        
                            <?php
                                include("helpers/formErrors.php");
                            ?>

                            <div class="card-header"><h2 class="text-center">Đăng ký</h2></div>                              
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Tên người dùng</label>
                                            <input type="text" name="username" value="<?php echo $username ?>" class="form-control" id="formGroupExampleInput" placeholder="Nhập tên người dùng">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Email</label>
                                            <input type="text" name="email" value="<?php echo $email ?>" class="form-control" id="formGroupExampleInput2" placeholder="Nhập email">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput3">Mật khẩu</label>
                                            <input type="password" name="password" value="<?php echo $password ?>" class="form-control" id="formGroupExampleInput3" placeholder="Nhập mật khẩu">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput4">Nhập lại mật khẩu</label>
                                            <input type="password" name="passwordConf" value="<?php echo $passwordConf ?>" class="form-control" id="formGroupExampleInput4" placeholder="Nhập lại mật khẩu">
                                        </div>
                                    </form>
                                    <br>
                                    <div class="text-center">
                                        <button type="submit" name="register-btn" class="btn btn-dark">Đăng ký</button>
                                    </div>
                                    <br><br>
                                    <p class="text-center">Bạn đã có tài khoản? <a href="login.php">Đăng nhập tại đây</a></p>
                                </div>
                        </form>                      
                    </div>
                </div>
                <div class="col-sm"></div>
            </div>
        </div>
        <!-- CONTENT -->

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