function showCourses() {
    const courses = [
        {
            name: 'Java',
            description: 'Learn Java programming from basics to advanced.',
            image: 'images/java.jpg',
            detailPage: 'java_course.php',
            cost: 2000 // Added cost for Java course
        },
        {
            name: 'UI/UX',
            description: 'Understand the essentials of User Interface and Experience design.',
            image: 'images/ui_ux.jpg',
            detailPage: 'uiux_course.php',
            cost: 1500 // Added cost for UI/UX course
        },
        {
            name: 'Python',
            description: 'Master Python programming for data science and web development.',
            image: 'images/python.jpg',
            detailPage: 'python_course.php',
            cost: 1800 // Added cost for Python course
        },
        {
            name: 'C++',
            description: 'Deep dive into C++ programming with hands-on projects.',
            image: 'images/c++.jpg',
            detailPage: 'cpp_course.php',
            cost: 2200 // Added cost for C++ course
        }
    ];

    let courseSection = document.getElementById('course-section');
    courseSection.innerHTML = ''; // Clear the section

    courses.forEach(course => {
        let courseDiv = document.createElement('div');
        courseDiv.classList.add('course-item');
        let img = document.createElement('img');
        img.src = course.image;
        courseDiv.appendChild(img);

        let h3 = document.createElement('h3');
        h3.innerText = course.name;
        courseDiv.appendChild(h3);

        let p = document.createElement('p');
        p.innerText = course.description;
        courseDiv.appendChild(p);

        // Display course cost
        let costParagraph = document.createElement('p');
        costParagraph.innerText = Cost: Rs: ${course.cost};
        courseDiv.appendChild(costParagraph);

        let detailButton = document.createElement('button');
        detailButton.innerText = 'View Details';
        detailButton.onclick = function() {
            window.location.href = course.detailPage; // Redirect to course detail page
        };
        courseDiv.appendChild(detailButton);

        let addButton = document.createElement('button');
        addButton.innerText = 'Add to Cart';
        addButton.onclick = function() {
            addToCart(course);
        };
        courseDiv.appendChild(addButton);

        courseSection.appendChild(courseDiv);
    });
}

// Function to add course to cart
function addToCart(course) {
    // Retrieve the current cart from local storage
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    
    // Check if the course is already in the cart
    const existingCourse = cart.find(item => item.name === course.name);
    if (!existingCourse) {
        // Add the course to the cart if not already present
        cart.push(course);
        alert(course.name + ' has been added to your cart!');
    } else {
        alert(course.name + ' is already in your cart.');
    }

    // Save the updated cart back to local storage
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartCount();
}

// Function to update cart count
function updateCartCount() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    document.getElementById('cartCount').innerText = cart.length;
}

// Function to display cart items
function displayCart() {
    const cart = JSON.parse(localStorage.getItem('cart'));
    const cartContainer = document.getElementById('cartItems');
    cartContainer.innerHTML = ''; // Clear previous items

    if (cart.length === 0) {
        cartContainer.innerHTML = '<p>Your cart is empty.</p>';
        return;
    }

    let totalCost = 0;
    cart.forEach(item => {
        totalCost += item.cost; // Use item.cost directly
        const courseItem = document.createElement('div');
        courseItem.className = 'course-item';
        courseItem.innerHTML = `
            <h5>${item.name}</h5>
            <p>${item.description}</p>
            <p>Cost: Rs: ${item.cost}</p>
            <button class="btn btn-danger" onclick="removeFromCart('${item.name}')">Remove from Cart</button>
        `;
        cartContainer.appendChild(courseItem);
    });

    const totalCostElement = document.getElementById('totalCost');
    totalCostElement.innerText = Total Cost: Rs: ${totalCost};
}

// Function to remove course from cart
function removeFromCart(courseName) {
    const cart = JSON.parse(localStorage.getItem('cart'));
    const updatedCart = cart.filter(item => item.name !== courseName);
    localStorage.setItem('cart', JSON.stringify(updatedCart));
    
    alert(courseName + ' has been removed from your cart.');
    updateCartCount();
    displayCart();
}

// Call displayCart on page load
window.onload = function() {
    displayCart();
    updateCartCount();
};