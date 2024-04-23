<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        .card {
            width: 18rem;
            margin-right: 10px;
        }
    </style>
    <title>iForum</title>
</head>

<body>
    <?php include 'partials/_dbconnect.php'?>
    <?php include 'partials/_header.php'?>
    <!--silder-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/carousel/img-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/carousel/img-3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/carousel/img-2.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
    <!--category container-->
    <div class="container my-4" id="ques">
        <h2 class="text-center my-4">CodingTalks- Browse Categories</h2>
        <div class="row my-4">
            <!--Fetch all the category-->
            <?php
            $sql="SELECT * FROM `categories`";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result))
            {
              //echo $row['category_id'];
              // echo $row['category_name'];
              $id=$row['category_id'];
              $cat=$row['category_name'];
              $desc=$row['category_description'];
              echo '<div class="col-md-4 mb-3">
                  <div class="card">
                    <img src="images/cards/card-'.$id. '.jpg" class="card-img-top" alt= "image for this category" style="height: 200px; width: 287px;">
                      <div class="card-body ">
                          <h5 class="card-title"><a href="threadlist.php?catid='.$id.'">'.$cat.'</a></h5>
                          <h5 class="card-title">'.substr($desc,0,80).'.....</h5>
                          <a href="threadlist.php?catid=' .$id .'" class="btn btn-primary">View Threads</a>
                      </div>
                  </div>
            </div>';
            }
          ?>
        <!--Fetch all categories and use a loop to iterate through categories-->

            <?php include 'partials/_footer.php'?>

            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
                crossorigin="anonymous">
            </script>
</body>
</html>