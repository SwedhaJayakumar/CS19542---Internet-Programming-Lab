<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Academy</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.php">
    <style>
        body {
            background-image: url('images/bground/bg1.jpg'); /* Replace with your background image */
            background-size: cover; /* Cover ensures the image covers the entire background */
            background-position: center; /* Center the background image */
            background-repeat: no-repeat; /* Prevent the image from repeating */
            color: #333;
        }
        .welcome-box {
            background-color: rgba(173, 216, 230, 0.7); /* Light Blue with 70% opacity */

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
            height: 300px; /* Set a fixed height for the course card */
        }
        .course-card:hover {
            transform: scale(1.05);
        }
        .course-image {
            width: 100%;
            height: 150px; /* Set a fixed height for images to maintain uniformity */
            object-fit: cover; /* Ensures images fit within the set height without distortion */
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
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">View Courses <span class="sr-only">(current)</span></a>
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

    <!-- Course Grid -->
    <div class="container">
        <div class="row">
            <!-- C++ Course Card -->
            <div class="col-md-6">
                <div class="course-card">
                    <img src="images/cpp/cpp.jpg" alt="C++ Course" class="course-image">
                    <h5>C++ Course</h5>
                    <button class="btn btn-primary" onclick="addToCart({ name: 'C++', description: 'Deep dive into C++ programming with hands-on projects.', image: 'images/cpp/cpp.jpg' })">Add to Cart</button>
                    <a href="cpp_course.php" class="btn btn-secondary">See Details</a>
                </div>
            </div>
            <!-- Python Course Card -->
            <div class="col-md-6">
                <div class="course-card">
                    <img src="images/python/python.jpg" alt="Python Course" class="course-image">
                    <h5>Python Course</h5>
                    <button class="btn btn-primary" onclick="addToCart({ name: 'Python', description: 'Learn Python programming from scratch.', image: 'images/python/python.jpg' })">Add to Cart</button>
                    <a href="python_course.php" class="btn btn-secondary">See Details</a>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Java Course Card -->
            <div class="col-md-6">
                <div class="course-card">
                    <img src="images/java/java.jpg" alt="Java Course" class="course-image">
                    <h5>Java Course</h5>
                    <button class="btn btn-primary" onclick="addToCart({ name: 'Java', description: 'Master Java programming with hands-on projects.', image: 'images/java/java.jpg' })">Add to Cart</button>
                    <a href="java_course.php" class="btn btn-secondary">See Details</a>
                </div>
            </div>
            <!-- UI/UX Course Card -->
            <div class="col-md-6">
                <div class="course-card">
                    <img src="images/uiux/uiux.jpg" alt="UI/UX Course" class="course-image">
                    <h5>UI/UX Course</h5>
                    <button class="btn btn-primary" onclick="addToCart({ name: 'UI/UX', description: 'Explore the world of UI/UX design.', image: 'images/uiux/uiux.jpg' })">Add to Cart</button>
                    <a href="uiux_course.php" class="btn btn-secondary">See Details</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function addToCart(course) {
            alert(course.name + ' has been added to your cart!');

            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            
            // Check if the course is already in the cart
            const existingCourse = cart.find(item => item.name === course.name);
            if (!existingCourse) {
                cart.push(course);
                localStorage.setItem('cart', JSON.stringify(cart));
            } else {
                alert(course.name + ' is already in your cart.');
            }
        }
    </script>

</body>
</html>
