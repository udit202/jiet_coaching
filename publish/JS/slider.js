
        $(document).ready(function () {
            var currentIndex = 0; // Track the current starting testimonial index
            var testimonials = $('.testimonial'); // All testimonials
            var totalTestimonials = testimonials.length;
            var autoScrollInterval; // For auto-scrolling

            // Function to get the number of items to display based on screen size
            function getItemsToShow() {
                if ($(window).width() >= 992) {
                    return 3; // Show 3 items on desktop
                } else if ($(window).width() >= 576) {
                    return 2; // Show 2 items on tablets
                } else {
                    return 1; // Show 1 item on mobile
                }
            }

            // Function to display testimonials based on the current index and screen size
            function showTestimonials(startIndex) {
                var itemsToShow = getItemsToShow(); // Determine items to show based on screen size
                $(testimonials).hide(); // Hide all testimonials

                // Show the required number of testimonials starting from the current index
                for (var i = 0; i < itemsToShow; i++) {
                    var index = (startIndex + i) % totalTestimonials; // Wrap around the index
                    $(testimonials[index]).fadeIn(); // Show the testimonial with animation
                }
            }

            // Initially show the first set of testimonials
            showTestimonials(currentIndex);

            // Next button handler
            $('#nextBtn').click(function () {

                currentIndex = (currentIndex + 1) % totalTestimonials; // Increment and wrap around
                showTestimonials(currentIndex);
                resetAutoScroll(); // Reset auto-scroll timer on manual interaction
            });

            // Previous button handler
            $('#prevBtn').click(function () {

                currentIndex = (currentIndex - 1 + totalTestimonials) % totalTestimonials; // Decrement and wrap around
                showTestimonials(currentIndex);
                resetAutoScroll(); // Reset auto-scroll timer on manual interaction
            });

            // Auto-scroll functionality
            function startAutoScroll() {
                autoScrollInterval = setInterval(function () {
                    currentIndex = (currentIndex + 1) % totalTestimonials; // Increment and wrap around
                    showTestimonials(currentIndex);
                }, 5000); // Auto-scroll every 5 seconds
            }

            // Reset auto-scroll on user interaction
            function resetAutoScroll() {
                clearInterval(autoScrollInterval);
                startAutoScroll();
            }

            // Adjust testimonials on window resize
            $(window).resize(function () {
                showTestimonials(currentIndex); // Recalculate and update displayed testimonials
            });

            // Start auto-scroll when the page loads
            startAutoScroll();
        });
