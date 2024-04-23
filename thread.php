<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
    #ques {
        min-height: 433px;
    }
    </style>
    <title>iForum</title>
</head>

<body>
    <?php include 'partials/_dbconnect.php'?>
    <?php include 'partials/_header.php'?>
    
    <?php
        $id = $_GET['threadid'];
        $sql = "SELECT * FROM `threads` WHERE thread_id=$id"; 
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result))
        {
            $title = $row['thread_title'];
            $desc = $row['thread_desc'];

            //query the user table  to find out the name of original poster.
            $thread_user_id=$row['thread_user_id'];
            $sql2="SELECT user_name FROM `users` Where SrNo='$thread_user_id'";
            $result2 = mysqli_query($conn, $sql2);
            $row2=mysqli_fetch_assoc($result2);
            $posted_by=$row2['user_name'];
        }
    ?>

    <?php
        $showAlert = false;
        $method = $_SERVER["REQUEST_METHOD"];
        if($method=="POST"){   
            // Insert into comment db
            $comment = $_POST['comment'];
            $Sno=$_POST['SrNo'];

            $comment = str_replace("<", "&lt;",$comment);
            $comment = str_replace(">", "&gt;",$comment);

            $sql = "INSERT INTO `comments` (`comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ('$comment', '$id', '$Sno', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            $showAlert = true;
            if($showAlert)
            {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Your comment has been added!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                 </div>';
            
            }
        }
    ?>


    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4"><?php echo $title; ?> </h1>
            <p class="lead"> <?php echo $desc; ?></p>
            <hr class="my-4">
            <p>This is a peer to peer forum. No Spam / Advertising / Self-promote in the forums is not allowed. Do not
                post copyright-infringing material.
                Do not post “offensive” posts, links or images. Do not cross post questions. Remain respectful of other
                members at all times.</p>
            <p>Posted by: <b><?php echo $posted_by; ?></b></p>
        </div>
    </div>

    <?php
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
            echo '<div class="container">
            <h1 class="py-2">Post a Comment</h1>
            <form action="'. $_SERVER["REQUEST_URI"] . '" method="post">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Type your comment</label>
                    <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                    <input type="hidden" name="SrNo" value="' . $_SESSION["SrNo"]. '">
                </div>
                <input type="hidden" name="catid" value="' . (isset($id) ? $id : '') . '">
                <button type="submit" class="btn btn-success">Post Comment</button>
            </form>
        </div>';
        }
        else
        {
            echo '
            <div class="container">
            <h3 class="py-2">Post a Comment</h3>
                <p class="lead">You are not logged in. Please login to be able to post comments.</p>
            </div>';
        }
    ?>

    <div class="container mb-5" id="ques">
        <h1 class="py-2">Discussion</h1>
        <?php
            $id = $_GET['threadid'];
            $sql = "SELECT * FROM `comments` WHERE thread_id=$id"; 
            $result = mysqli_query($conn, $sql);
            $noresult=true;
            while($row = mysqli_fetch_assoc($result)){
                $noresult=false;
                $id = $row['comment_id'];
                $content = $row['comment_content'];
                $comment_time = $row['comment_time'];

                $thread_user_id=$row['comment_by'];
                $sql2="SELECT user_name FROM `users` Where SrNo='$thread_user_id'";
                $result2 = mysqli_query($conn, $sql2);
                $row2=mysqli_fetch_assoc($result2);
           
                echo '<div class="media my-3">
                <img src="images/user1.png" width="54px" class="mr-3" alt="...">
                <div class="media-body">
                   <p class="font-weight-bold my-0">'. $row2['user_name'] .' at '. $comment_time. '</p> '. $content . '
                </div>
            </div>';
        
            } 
            if ($noresult) {
                echo '<div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <p class="display-4">No Comments Found</p>
                        <p class="lead"><b>Be the first person to ask a question</b></p>
                    </div>
                    </div>';
            }
        ?>
        </div>
        <?php include 'partials/_footer.php'?>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
        </script>
</body>

</html>