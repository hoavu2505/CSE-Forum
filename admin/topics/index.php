<?php
    include('../../database/config.php');
?>
<?php include("../../controllers/topics.php"); ?>

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
  
    <link rel="stylesheet" href="../../css/style.css">

  </head>
  <body>


  <!-- Admin header -->
  <?php include("../../includes/adminHeader.php") ?>

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
                      <td><a>Quản lý topics</a></td>
                  </tr>
                  <tr>
                      <td><a href="../users/index.php">Quản lý users</a></td>
                  </tr>
                </tbody>
              </table>

            </div>
            <div class="col-md-10">
                <h4 style="text-align:center">QUẢN LÝ TOPICS</h4>
                
                <br><br><br>
                
                <a href="create.php"><button type="button" class="btn btn-secondary">Thêm topic</button></a>
                <br><br><br>

                <table class="table"  style="text-align:center">
                  <thead class="thead-dark">
                    <tr>
                      <th>#</th>
                      <th>Tên topic</th>
                      <th>Hành động</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($topics as $key => $topic): ?>
                      <tr>
                        <td scope="row"><?php echo $key + 1; ?></td>
                        <td><?php echo $topic['name'] ?></td>
                        <td>
                          <a href="edit.php?id=<?php echo $topic['id']; ?>">Sửa</a>
                          &emsp;
                          <a href="index.php?del_id=<?php echo $topic['id']; ?>" style="color: red">Xóa</a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>

            </div>
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