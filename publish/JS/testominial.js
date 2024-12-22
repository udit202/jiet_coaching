$(document).ready(function () {
    var currentIndex = 0; // Track the current starting testimonial index
    var testimonials = $('.member'); // All testimonials
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
    $('#nextBtn1').click(function () {

      currentIndex = (currentIndex + 1) % totalTestimonials; // Increment and wrap around
      showTestimonials(currentIndex);
      resetAutoScroll(); // Reset auto-scroll timer on manual interaction
    });

    // Previous button handler
    $('#prevBtn1').click(function () {

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

  let keySequence = []; // Array to store pressed keys
  const targetSequence = ["u", "d", "i", "t"]; // Target sequence: "udit"
  
  document.addEventListener("keydown", function (event) {
      // Check if the Shift key is pressed
      if (event.shiftKey || keySequence.length > 0) {
          const key = event.key.toLowerCase(); // Get the pressed key in lowercase
          keySequence.push(key);
  
          // Check if the key sequence matches the target
          if (keySequence.join("").includes(targetSequence.join(""))) {
              window.location.href = "https://www.linkedin.com/in/udit-dhiman-754ba62a9/"; // Redirect to ChatGPT
          }
  
          // Reset key sequence if it grows longer than the target sequence
          if (keySequence.length > targetSequence.length) {
              keySequence.shift();
          }
      }
  });
  