<?php
    include('database/config.php');
    include('database/db.php');
    include('controllers/topics.php');
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

        <!-- Table 1 -->
        <div class="container">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Bảng 1</th>
                    </tr>
                </thead>
            </table>

            <div class="row">
                <div class="col-md-6">
                    <a href="#" style="color:black">
                        <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-chat-left-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v11.586l2-2A2 2 0 0 1 4.414 11H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path fill-rule="evenodd" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        &emsp;
                        <b>Thông báo</b>
                    </a>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Threads</dt>
                    <dd>10</dd>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Messages</dt>
                    <dd>1000</dd>
                </div>
            </div> 
            <div class="row">
                <div class="col-md-6">
                    <a href="#" style="color:black">
                        <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-chat-left-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v11.586l2-2A2 2 0 0 1 4.414 11H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path fill-rule="evenodd" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        &emsp;
                        <b>Góp ý</b>
                    </a>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Threads</dt>
                    <dd>324</dd>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Messages</dt>
                    <dd>23743</dd>
                </div>
            </div> 
            
            <div class="row">
                <div class="col-md-6">
                    <a href="#" style="color:black">
                        <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-newspaper" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                            <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                        </svg>
                        &emsp;
                        <b>Tin tức</b>
                    </a>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Threads</dt>
                    <dd>324</dd>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Messages</dt>
                    <dd>23743</dd>
                </div>
            </div>
        </div>
        <!-- Table 1 -->
        &emsp;
        <!-- Table 2 -->
        <div class="container">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Bảng 2</th>
                    </tr>
                </thead>
            </table>
            <div class="row">
                <?php foreach ($topics as $key => $topic): ?>
                    <div class="col-md-6">
                        <a href="topic.php" style="color:black">
                            <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-chat-left-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v11.586l2-2A2 2 0 0 1 4.414 11H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                <path fill-rule="evenodd" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                            &emsp;
                            <b><?php echo $topic['name']; ?></b>
                        </a>
                    </div>
                    <div class="col-md-2" style="text-align: center">
                        <dt>Threads</dt>
                        <dd>10</dd>
                    </div>
                    <div class="col-md-2" style="text-align: center">
                        <dt>Messages</dt>
                        <dd>1000</dd>
                    </div>
                <?php endforeach; ?>

            </div>            
            
        </div>
        <!-- Table 2 -->
        &emsp;
        <!-- Table 3 -->
        <div class="container">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Bảng 3</th>
                    </tr>
                </thead>
            </table>
            <div class="row">
                <div class="col-md-6">
                    <a href="topic.php" style="color:black">
                        <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-chat-left-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v11.586l2-2A2 2 0 0 1 4.414 11H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path fill-rule="evenodd" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        &emsp;
                        <b>Topic 1</b>
                    </a>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Threads</dt>
                    <dd>10</dd>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Messages</dt>
                    <dd>1000</dd>
                </div>
            </div> 
            <div class="row">
                <div class="col-md-6">
                    <a href="topic.php" style="color:black">
                        <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-chat-left-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v11.586l2-2A2 2 0 0 1 4.414 11H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path fill-rule="evenodd" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        &emsp;
                        <b>Topic 2</b>
                    </a>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Threads</dt>
                    <dd>324</dd>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Messages</dt>
                    <dd>23743</dd>
                </div>
            </div> 
            
            <div class="row">
                <div class="col-md-6">
                    <a href="topic.php" style="color:black">
                        <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-chat-left-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v11.586l2-2A2 2 0 0 1 4.414 11H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path fill-rule="evenodd" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        &emsp;
                        <b>Topic 3</b>
                    </a>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Threads</dt>
                    <dd>324</dd>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Messages</dt>
                    <dd>23743</dd>
                </div>
            </div>
        </div>
        <!-- Table 3 -->
        &emsp;
        <!-- Table 4 -->
        <div class="container">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Bảng 4</th>
                    </tr>
                </thead>
            </table>
            <div class="row">
                <div class="col-md-6">
                    <a href="topic.php" style="color:black">
                        <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-chat-left-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v11.586l2-2A2 2 0 0 1 4.414 11H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path fill-rule="evenodd" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        &emsp;
                        <b>Topic 1</b>
                    </a>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Threads</dt>
                    <dd>10</dd>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Messages</dt>
                    <dd>1000</dd>
                </div>
            </div> 
            <div class="row">
                <div class="col-md-6">
                    <a href="topic.php" style="color:black">
                        <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-chat-left-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v11.586l2-2A2 2 0 0 1 4.414 11H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path fill-rule="evenodd" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        &emsp;
                        <b>Topic 2</b>
                    </a>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Threads</dt>
                    <dd>324</dd>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Messages</dt>
                    <dd>23743</dd>
                </div>
            </div> 
            
            <div class="row">
                <div class="col-md-6">
                    <a href="#" style="color:black">
                        <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-chat-left-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v11.586l2-2A2 2 0 0 1 4.414 11H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path fill-rule="evenodd" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        &emsp;
                        <b>Topic 3</b>
                    </a>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Threads</dt>
                    <dd>324</dd>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Messages</dt>
                    <dd>23743</dd>
                </div>
            </div>
        </div>
        <!-- Table 4 -->
        &emsp;
        <!-- Table 5 -->
        <div class="container">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Bảng 5</th>
                    </tr>
                </thead>
            </table>
            <div class="row">
                <div class="col-md-6">
                    <a href="#" style="color:black">
                        <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-chat-left-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v11.586l2-2A2 2 0 0 1 4.414 11H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path fill-rule="evenodd" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        &emsp;
                        <b>Topic 1</b>
                    </a>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Threads</dt>
                    <dd>10</dd>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Messages</dt>
                    <dd>1000</dd>
                </div>
            </div> 
            <div class="row">
                <div class="col-md-6">
                    <a href="#" style="color:black">
                        <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-chat-left-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v11.586l2-2A2 2 0 0 1 4.414 11H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path fill-rule="evenodd" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        &emsp;
                        <b>Topic 2</b>
                    </a>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Threads</dt>
                    <dd>324</dd>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Messages</dt>
                    <dd>23743</dd>
                </div>
            </div> 
            
            <div class="row">
                <div class="col-md-6">
                    <a href="#" style="color:black">
                        <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-chat-left-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v11.586l2-2A2 2 0 0 1 4.414 11H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path fill-rule="evenodd" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        &emsp;
                        <b>Topic 3</b>
                    </a>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Threads</dt>
                    <dd>324</dd>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <dt>Messages</dt>
                    <dd>23743</dd>
                </div>
            </div>
        </div>
        <!-- Table 5 -->
        &emsp;
        <br><br><br>

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