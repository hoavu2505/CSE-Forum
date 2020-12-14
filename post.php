<?php
    require('database/config.php');
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

    <link href="vendor/emoji-picker/lib/css/emoji.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style_cmtlist.css">


    </head>
  <body>

        <!-- HEADER -->
        <?php include("includes/header.php") ?>
        <!-- HEADER -->
        
        <br><br>

        <!-- CONTENT -->
        <div class="container">           
            <div class="row">
                <div class="post" style="text-align:center">
                    <h2><b>Tiêu đề bài viết</b></h2>

                    <br><br><br>
                    <!-- Body -->
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, impedit. Natus commodi non officia aperiam temporibus voluptatibus distinctio quasi beatae ipsam voluptatem doloremque delectus, eligendi nesciunt est ad veniam! Inventore!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, facere. Ut odit dolores aliquid cupiditate corrupti quam impedit placeat dolor repellat consequatur? Dolor dicta doloremque sapiente odio sed aliquid consectetur.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit laborum, non nihil laudantium cumque ducimus quia aliquam, quod illo obcaecati dolores praesentium hic aperiam error repellat. Velit magni consectetur exercitationem.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, incidunt officia. Officia facere accusantium cum fugit ratione sapiente hic earum magnam ipsum deserunt aperiam praesentium error, provident repellendus repudiandae. Voluptatum.
                    </p>
                    <!-- /Body -->
                    
                    <br><br><br><br><br><br><br><br><br>
                </div>
            </div>

            <div class="line"></div>
            <br><br><br>
            <!-- Comment Box -->
            <?php if (isset($_SESSION['id'])): ?>
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="comment">
                        <form id="frm-comment">
                                <div class="input-row">
                                    <input type="hidden" name="comment_id" id="commentId"
                                        placeholder="Name" /> 
                                    <input class="input-field" type="text"
                                        name="name" id="name" style="border:none" value="<?php echo $_SESSION['username']; ?>" readonly="true" />
                                </div>
                                
                                <div class="input-row">
                                    <textarea class="form-control comment_text" data-emojiable="true" data-emoji-input="unicode" 
                                            style="height:80px; border:none; border-bottom: 1px solid #aaa" 
                                                name="comment" id="comment" placeholder="Để lại bình luận tại đây..."></textarea>
                                </div>
                                <br>
                                <div class="btn_comment">
                                    <input type="button" class="btn-submit" id="submitButton" style="padding: 4px 10px; border-radius: 5px; text-transform:uppercase; font-weight:bold; cursor:pointer; color: #ffffff; background-color: #2D6187" value="Đăng">
                                    <div id="comment-message">Bình luận đã được thêm!</div>
                                </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3"></div>
                </div>
            <?php else: ?>
                <p style="text-align:center">Hãy <a href="login.php">đăng nhập</a> để đăng bình luận</p>
            <?php endif; ?>
            <br><br><br><br>
            <!-- Comment List -->
            <div id="output"></div>
        </div>

        <!-- CONTENT -->
        <br><br>

        <!-- Footer -->
        <?php include("includes/footer.php") ?>
        <!-- Footer -->

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!-- Emoji JS -->
    <script src="vendor/emoji-picker/lib/js/config.js"></script>
    <script src="vendor/emoji-picker/lib/js/util.js"></script>
    <script src="vendor/emoji-picker/lib/js/jquery.emojiarea.js"></script>
    <script src="vendor/emoji-picker/lib/js/emoji-picker.js"></script>

    <!-- Custom -->
    <script>
        function postReply(commentId) {
            $('#commentId').val(commentId);
            $("#name").focus();
        }

        $("#submitButton").click(function () {
            $("#comment-message").css('display', 'none');
            var str = $("#frm-comment").serialize();
            $

            $.ajax({
                url: "comment-add.php",
                data: str,
                type: 'post',
                success: function (response)
                {
                    $("#comment-message").css('display', 'inline-block');
                    $("#name").val("");
                    $("#comment").val("");
                    $("#commentId").val("");
                    listComment();
                }
            });
        });

        $(document).ready(function () {
            listComment();
        });

        $(function () {
                // Initializes and creates emoji set from sprite sheet
                window.emojiPicker = new EmojiPicker({
                    emojiable_selector: '[data-emojiable=true]',
                    assetsPath: 'vendor/emoji-picker/lib/img/',
                    popupButtonClasses: 'icon-smile'
                });

                window.emojiPicker.discover();
            });

        function listComment() {
            $.post("comment-list.php",
                    function (data) {
                        var data = JSON.parse(data);

                        var comments = "";
                        var replies = "";
                        var item = "";
                        var parent = -1;
                        var results = new Array();

                        var list = $("<ul class='outer-comment'>");
                        var item = $("<li>").html(comments);

                        for (var i = 0; (i < data.length); i++)
                        {
                            var commentId = data[i]['comment_id'];
                            parent = data[i]['parent_comment_id'];

                            if (parent == "0")
                            {
                                comments =  "<div class='comment-row'>"+
                                "<div class='comment-info'><span class='posted-by'>" + data[i]['comment_sender_name'] + "</span></div>" + 
                                "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                                "<div><a style='list-style:none; color:white' class='btn-reply btn btn-primary' onClick='postReply(" + commentId + ")'>Reply</a></div>"+
                                "</div>";
                                var item = $("<li>").html(comments);
                                list.append(item);
                                var reply_list = $('<ul>');
                                item.append(reply_list);
                                listReplies(commentId, data, reply_list);
                            }
                        }
                        $("#output").html(list);
                    });
        }

        function listReplies(commentId, data, list) {

            for (var i = 0; (i < data.length); i++)
            {
                if (commentId == data[i].parent_comment_id)
                {
                    var comments = "<div class='comment-row'>"+
                    " <div class='comment-info'><span class='posted-by'>" + data[i]['comment_sender_name'] + " </span></div>" + 
                    "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                    "<div><a style='color: white' class='btn-reply btn btn-primary' onClick='postReply(" + data[i]['comment_id'] + ")'>Reply</a></div>"+
                    "</div>";
                    var item = $("<li>").html(comments);
                    var reply_list = $('<ul>');
                    list.append(item);
                    item.append(reply_list);
                    listReplies(data[i].comment_id, data, reply_list);

                }
            }
        }
    </script>
  </body>
</html>