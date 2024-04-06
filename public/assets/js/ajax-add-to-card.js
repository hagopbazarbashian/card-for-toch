$(document).ready(function () {
    $(".basket-card").click(function () {
        var photo = $(this).closest('.product-block').find('.photo').attr('value');
        var title = $(this).closest('.product-block').find('.title-link').attr('value');
        var price = $(this).closest('.product-block').find('.price').attr('value');
        location.reload(true);
        // Perform an AJAX request here
        $.ajax({
            type: 'post',
            url: 'add',
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                "photo": photo,
                "title": title,
                "price": price,
            },
            success: function (response) {
                // Check the response and show SweetAlert accordingly
                if (response.success) {
                    Swal.fire({
                        title: 'Item Added',
                        text: 'The item has been added to your basket.',
                        icon: 'success',
                        confirmButtonText: 'OK',
                        customClass: {
                            popup: 'animated fadeOut' // Add a CSS animation class
                        },
                    });
                }
            },
        });
    });
});

//Update Price Card
$(document).ready(function() {
    $('.iq-quantity-minus, .iq-quantity-plus').on('click', function() {
       var input = $(this).closest('.btn-group').find('input.input-display');
       var product_id = $(this).closest('.btn-group').find('.product_id').attr('value');
       var value = parseInt(input.val());

       if ($(this).hasClass('iq-quantity-plus')) {
          input.val(value + 1);
       } else if (value > 1) {
          input.val(value - 1);
       }

       // Get other necessary data from the HTML (e.g., product ID, etc.)
       var newQuantity = input.val();


       // Send AJAX request to update the cart
       $.ajax({
          type: 'POST',
          url: 'update-price',
          data: {
            "_token": $('meta[name="csrf-token"]').attr('content'),
             productId: product_id,
             newQuantity: newQuantity,
             // Add any other necessary data here
          },
          success: function(response) {
             if (response.success) {
                // Update the HTML with the new data
                // Assuming you have a function to update the cart item HTML
                updateCartItem(productId, response.data);
             } else {
                // Handle error
             }
          },
          error: function(xhr, status, error) {
             // Handle error
          }
       });
    });

    function updateCartItem(productId, newData) {
       // Update the cart item HTML based on the new data
       // You can use jQuery or vanilla JavaScript to update the HTML
    }
 });
