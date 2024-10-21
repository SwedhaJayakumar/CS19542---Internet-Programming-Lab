<?php
header("Content-type: text/css");

$primaryColor = '#4CAF50'; // Green for buttons
$sidebarBackgroundColor = '#2C3E50'; // Dark blue for sidebar
$contentBackgroundColor = '#ECF0F1'; // Light grey for content
$welcomeBoxBackgroundColor = '#F7C6C7'; // Soft red for welcome box
$courseBoxBackgroundColor = '#D5DBDB'; // Light grey for course items
$mentorBoxBackgroundColor = '#A2D9CE'; // Light green for mentor items
$clearCartBackgroundColor = '#E74C3C'; // Red for clear cart button
$clearCartHoverColor = '#C0392B'; // Dark red for clear cart button hover

echo <<<EOT
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #F5F5F5; /* Light background color */
    background-image: url('images/bg/bg.jpg'); /* Replace with your background image */
    background-size: cover; /* Ensure the image covers the entire background */
    background-position: center; /* Center the background image */
    background-repeat: no-repeat; /* Prevent the image from repeating */
}

.welcome-box {
    background-color: $welcomeBoxBackgroundColor;
    padding: 30px;
    text-align: center;
    border-radius: 10px;
    margin-bottom: 40px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    font-size: 28px;
    font-weight: bold;
    color: #2C3E50;
    width: 100%;
    margin-top: 20px;
}

.container {
    display: flex;
    flex-direction: row; /* Sidebar and content in one row */
    width: 100%;
    height: auto;
}

.sidebar {
    width: 20%;
    background-color: $sidebarBackgroundColor;
    color: white;
    padding: 20px;
}

.sidebar h2 {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    margin-bottom: 15px;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
}

.content {
    width: 80%;
    padding: 20px;
    background-color: $contentBackgroundColor;
}

.course-list {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.course-item {
    width: calc(50% - 20px); /* Two items per row */
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: $courseBoxBackgroundColor;
    text-align: center;
}

.course-item img {
    width: 100%;
    height: auto;
    max-height: 150px;
    object-fit: cover;
    border-radius: 8px;
}

.course-item h3 {
    margin-top: 10px;
    font-size: 22px;
}

.course-item p {
    margin-top: 5px;
    font-size: 16px;
}

.course-item button {
    margin-top: 10px;
    padding: 10px 20px;
    background-color: $primaryColor;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.course-item button:hover {
    background-color: darken($primaryColor, 10%);
}

.clear-cart {
    display: inline-block;
    padding: 10px 20px;
    background-color: $clearCartBackgroundColor;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
}

.clear-cart:hover {
    background-color: $clearCartHoverColor;
}
.welcome-box {
    background-color: #007bff; /* Bootstrap primary color */
    color: white;
    padding: 10px;
    text-align: center;
    margin-bottom: 20px;
    border-radius: 5px; /* Rounded corners */
    height: 100px; /* Set a fixed height */
    display: flex;
    align-items: center;
    justify-content: center; /* Center the content vertically and horizontally */
}

.welcome-box h1 {
    font-size: 24px; /* Control the size of the heading */
    margin: 0; /* Remove default margin from heading */
    line-height: 1.5; /* Set line height to improve text readability */
}