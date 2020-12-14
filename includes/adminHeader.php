<header>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="../../index.php">CSE Forum</a>
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