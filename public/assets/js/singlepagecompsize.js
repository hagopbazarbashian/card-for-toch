     // Function to check screen size and redirect
     function checkScreenSizeAndRedirect() {
        // Set the breakpoint for the screen size
        var breakpoint = 768; // Adjust this value based on your needs

        // Check the window width
        var windowWidth = $(window).width();

        // Redirect to another route if the window width is greater than the breakpoint
        if (windowWidth > breakpoint) {
            window.location.href = '/single-card-comp/' + encodeURIComponent('{{$cardform->id}}');
        }
    }

    // Call the function on document ready 
    $(document).ready(function(){
        checkScreenSizeAndRedirect();
    });

    // Call the function on window resize
    $(window).resize(function(){
        checkScreenSizeAndRedirect();
    });