<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Academy - Java Course Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.php">
    <style>
        body {
            background-image: url('images/bground/bg1.jpg'); /* Replace with your background image */
            background-size: cover;
            color: #333;
        }
        .welcome-box {
           background-color: rgba(173, 216, 230, 0.7); /* Light Blue with 70% opacity */
            ;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            margin: 20px 0;
        }
        .course-card {
            transition: transform 0.2s;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 10px;
            text-align: center;
            margin: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .course-card:hover {
            transform: scale(1.05);
        }
        .course-image {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <!-- Welcome Message -->
    <div class="container">
        <div class="welcome-box">
        <h1><b>WELCOME TO E-LEARNING ACADEMY!</b></h1>
        <p><b>Empowering learners with knowledge at their fingertips, anytime, anywhere</b></p>
        </div>
    </div>

    <!-- Hamburger Button -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">View Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="payment.php">Payment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mentor.php">Mentors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">Cart</a>
                </li>
            </ul>
        </div>
    </nav>


    <!-- Course Detail -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="course-card">
                    <img src="images/java/java.jpg" alt="Java Course" class="course-image" />
                    <h5>Java Course</h5>
                    <p><strong>Description:</strong> Gain a strong foundation in Java programming, covering core concepts, object-oriented design, and application development.</p>
                    <p><strong>Duration:</strong> 14 weeks</p>
                    <p><strong>Prerequisites:</strong> Familiarity with programming basics.</p>
                    <p><strong>COST:</strong> Rs: 3500</p>
                    <button onclick="addToCart({ name: 'Java', description: 'Gain a strong foundation in Java programming, covering core concepts, object-oriented design, and application development.', image: 'images/java/java.jpg' })" class="btn btn-primary">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function addToCart(course) {
            alert(course.name + ' has been added to your cart!');
            // Implement further cart functionality here
        }
    </script>

</body>
</html>
