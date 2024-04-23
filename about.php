<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
    .container.my-3 {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }

    h1,
    h2 {
        color: #007bff;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    ul li {
        margin-bottom: 15px;
    }

    a {
        color: #28a745;
        text-decoration: none;
        transition: color 0.3s;
    }

    a:hover {
        color: #218838;
    }

    p {
        line-height: 1.6;
        color: #6c757d;
    }
    #team-section {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        margin-top: 20px;
    }
    .contact-btn {
        background-color:#28a745;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .contact-btn:hover {
        background-color:#006400;
    }
    </style>
    <title>iForum</title>
</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php'?>

    <div class="container my-3">
        <h1 class="text-center mb-3">About Coding Forum</h1>
        <p>Welcome to Coding Forum, your go-to destination for all things coding and software development!</p>

        <h2>Our Journey</h2>
        <p>Coding Forum has been a hub for developers around the world. From its humble beginnings, the forum has grown
            into a thriving community of passionate coders, learners, and experts.</p>

        <h2>Our Mission</h2>
        <p>At Coding Forum, our mission is to empower and connect developers by providing a platform for learning,
            collaboration, and networking. We strive to make coding accessible to everyone and foster an environment
            where knowledge is shared freely.</p>

        <h2>Key Features</h2>
        <ul>
            <li><strong>Diverse Topics:</strong> Explore a wide range of coding topics, including programming languages,
                frameworks, algorithms, and more.</li>
            <li><strong>Interactive Learning:</strong> Engage in coding challenges, tutorials, and discussions to
                enhance your skills.</li>
            <li><strong>Community Support:</strong> Connect with fellow developers, seek advice, and contribute to a
                supportive community.</li>
            <li><strong>Latest Trends:</strong> Stay updated on the latest industry trends, news, and technology
                advancements.</li>
        </ul>

        <h2>Community Guidelines</h2>
        <p>Our forum follows a set of community guidelines to ensure a positive and inclusive atmosphere for all
            members. </p>

        <h2>Meet the Team</h2>
        <p>Behind Coding Forum is a dedicated team of moderators and administrators who are passionate about fostering a
            vibrant and helpful community. Meet the faces behind Coding Forum!</p>
        <!-- Include team member profiles or links to their profiles here -->

        <h2>Contact Us</h2>
        <p>We value your feedback and are here to assist you. If you have any questions, suggestions, or just want to
            say hello, feel free to reach out. Visit our <a href="contact.php">Contact Us</a> page to get in touch.</p>

        <!-- Add any additional sections or information you want to include -->

    </div>
    <?php include 'partials/_footer.php'?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>