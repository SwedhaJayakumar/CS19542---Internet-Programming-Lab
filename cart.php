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

    <div class="container">
        <div class="welcome-box">
            <h1>Your Cart</h1>
        </div>

        <div id="cartItems"></div>
        <h2 id="totalCost">Total: Rs: 0</h2>

        <!-- Payment button moved to the end -->
        <div id="makePayment" class="text-center">
            <a href="payment.php" class="btn btn-success">Make Payment</a>
        </div>
    </div>

    <script>
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        function displayCart() {
            const cartItemsContainer = document.getElementById('cartItems');
            cartItemsContainer.innerHTML = '';
            let totalCost = 0;

            cart.forEach((course, index) => {
                totalCost += course.cost;
                cartItemsContainer.innerHTML += `
                    <div class="course-card">
                        <img src="${course.image}" alt="${course.name} Course" class="course-image">
                        <h5>${course.name}</h5>
                        <p>COST: Rs: ${course.cost}</p>
                        <button class="btn btn-danger" onclick="removeFromCart(${index})">Remove from Cart</button>
                    </div>
                `;
            });

            document.getElementById('totalCost').innerText = 'Total: Rs: ' + totalCost;
            if (totalCost > 0) {
                document.getElementById('makePayment').style.display = 'block'; // Show payment button
            } else {
                document.getElementById('makePayment').style.display = 'none'; // Hide payment button if cart is empty
            }
        }

        function removeFromCart(index) {
            cart.splice(index, 1);
            localStorage.setItem('cart', JSON.stringify(cart));
            displayCart();
        }

        // Display cart items when the page loads
        window.onload = displayCart;
    </script>

</body>
</html>
