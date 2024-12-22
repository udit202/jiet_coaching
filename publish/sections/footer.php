<style>
    .footer {
        background-color: rgb(2, 129, 179);
        color: #ffffff;
        padding: 20px 0;
    }

    .footer-column {
        flex: 1 1 calc(25% - 20px);
        margin: 10px;
        min-width: 200px;
    }

    .footer-column h3 {
        border-bottom: 2px solid white;
        padding-bottom: 10px;
        margin-bottom: 15px;
        font-size: 18px;
    }

    .footer-column ul {
        list-style-type: none;
        padding: 0;
    }

    .footer-column ul li {
        margin: 10px 0;
    }

    .footer-column ul li a {
        text-decoration: none;
        color: #ffffff;
        transition: color 0.3s;
    }

    .footer-column ul li a:hover {
        color: black;
    }

    .social-links {
        display: flex;
        gap: 15px;
        margin-top: 10px;
    }

    .social-links a {
        text-decoration: none;
        color: #ffffff;
        font-size: 20px;
        transition: transform 0.3s, color 0.3s;
    }

    .social-links a:hover {
        color: #ffcc00;
        transform: scale(1.2);
    }

    .social-links a::before {
        content: "";
        display: inline-block;
        width: 30px;
        height: 30px;
        margin-right: 8px;
        background-size: cover;
        vertical-align: middle;
    }

    .footer-bottom {
        text-align: center;
        margin-top: 20px;
        padding-top: 10px;
        border-top: 1px solid #ffffff;
        font-size: 14px;
    }

    @media (max-width: 768px) {
        .footer-container {
            flex-direction: column;
            align-items: center;
        }
    }
</style>
<div class="container-fluid footer p-4 mt-5 bg-primary">
    <div class="row footer-container p-2">
        <div class="col-md-3 footer-column">
            <h3>About JIET</h3>
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Our Mission</a></li>
                <li><a href="#">Success Stories</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-column">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#">Courses Offered</a></li>
                <li><a href="#">Admission Process</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-column">
            <h3>Student Resources</h3>
            <ul>
                <li><a href="#">Study Material</a></li>
                <li><a href="#">Test Series</a></li>
                <li><a href="#">FAQs</a></li>
            </ul>

        </div>
        <div class="col-md-3 footer-column">
            <h3>Contact Us</h3>
            <ul>
                <li>Phone: +91-1234567890</li>
                <li>Email: info@jietcoaching.com</li>
                <li>Address: JIET Coaching, Main Street, City</li>
            </ul>
            <ul class="d-flex">
                <li class="p-2 fs-3"><a href=""><i class="bi bi-facebook"></i></a></li>
                <li class="p-2 fs-3"><a href=""><i class="bi bi-instagram"></i></a></li>
                <li class="p-2 fs-3"><a href=""><i class="bi bi-twitter"></i></a></li>
                <li class="p-2 fs-3"><a href=""><i class="bi bi-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; 2024 JIET Coaching. All Rights Reserved.
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="JS/responsive-menu.js"></script>
<?php
        echo $js;
    ?>
<!-- <script src="JS/activebtn.js"></script> -->
<script>
    $(document).ready(function () {
        // Get the <title> tag's value
        const titleValue = $('title').text().trim();

        // Iterate through each anchor tag inside .link_div
        $('.link_div a').each(function () {
            const anchorText = $(this).text().trim();

            // Check if the anchor text matches the <title> tag's value
            if (anchorText === titleValue) {
                if (anchorText === "Login") {
                    // Change the color to blue initially
                    $(this).css('color', 'rgb(13, 110, 253)');

                    // Add hover effect for the "Login" anchor
                    $(this).hover(
                        function () {
                            $(this).css({
                                'background-color': 'rgb(13, 110, 253)',
                                'color': 'white'
                            });
                        },
                        function () {
                            $(this).css({
                                'background-color': '',
                                'color': 'rgb(13, 110, 253)'
                            });
                        }
                    );
                } else {
                    // Change the color to blue
                    $(this).css('color', 'blue');
                }
            }
        });
    });
    $(document).ready(function () {
        // Get the <title> tag's value
        const titleValue = $('title').text().trim();

        // Iterate through each anchor tag inside .link_div
        $('.side_nav a').each(function () {
            const anchorText = $(this).text().trim();

            // Check if the anchor text matches the <title> tag's value
            if (anchorText === titleValue) {
                if (anchorText === "Login") {
                    // Change the color to blue initially
                    $(this).css('color', 'rgb(13, 110, 253)');

                    // Add hover effect for the "Login" anchor
                    $(this).hover(
                        function () {
                            $(this).css({
                                'background-color': 'rgb(13, 110, 253)',
                                'color': 'white'
                            });
                        },
                        function () {
                            $(this).css({
                                'background-color': '',
                                'color': 'rgb(13, 110, 253)'
                            });
                        }
                    );
                } else {
                    // Change the color to blue
                    $(this).css('color', 'blue');
                }
            }
        });
    });

</script>

</body>

</html>