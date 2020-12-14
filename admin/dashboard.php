<?php
    include('../database/config.php');
    include('../database/db.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Trang quản trị</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"  />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <link rel="stylesheet" href="../css/style.css">

  </head>
  <body>


  <header>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="../index.php">CSE Forum</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm" aria-label="Search">
                        <button class="btn btn-dark my-2 my-sm-0" type="submit">
                            <svg width="1.15em" height="1.15em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                            </svg>
                        </button>
                        &emsp;&emsp;&emsp;


                        <?php if (isset($_SESSION['id'])): ?>
                            <div class="dropdown">
                                <a href="#" style="color:black; font-size: 1.1rem">
                                    <i class="fas fa-user-circle" style="font-size: 1.3rem;" ></i>
                                    &ensp;
                                    <?php echo $_SESSION['username']; ?>
                                </a>
                                <div class="dropdown-content">
                                    <a href="<?php echo('account.php') ?>">Tài khoản</a>
                                    <a href="<?php echo('logout.php') ?>">Đăng xuất</a>
                                </div>
                            </div>
                            &emsp;&emsp;
                            <a href="#" style="color:black"><i class="far fa-envelope" style="font-size: 1.3rem; margin-top: 5px;"></i></a>
                            &emsp;&emsp;
                            <a href="#" style="color:black"><i class="far fa-bell" style="font-size: 1.3rem; margin-top: 5px;"></i></a>
                        <?php else: ?>
                            <a href="../login.php" class="nav-link" style="color:black">Đăng nhập</a>
                            <a href="../register.php" class="nav-link" style="color:black">Đăng ký</a>
                        <?php endif; ?>                     

                        
                    </form>
                </div>
            </div>
    </nav>
    <!-- NAVBAR -->
  </header>

  <br><br><br><br><br>

  <!-- Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2" style="background-color: #f4f4f2">
              <table class="table" style="text-align:center">
                <thead class="thead">
                  <tr>
                      <th><h5><b>CHỨC NĂNG</b></h5></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td><a href="topics/index.php">Quản lý topics</a></td>
                  </tr>
                  <tr>
                      <td><a href="users/index.php">Quản lý users</a></td>
                  </tr>
                </tbody>
              </table>

            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
  <!-- Content -->
    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>