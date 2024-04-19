$(document).ready(function() {
    $('.iq-quantity-plus').click(function() {
        var qtyValue = $(this).closest('.iq-qty-btn').find('[data-qty="input"]').val(); // Fetch the value of the input field
        sendQuantity(qtyValue);
    });

    $('.iq-quantity-minus').click(function() {
        var qtyValue = $(this).closest('.iq-qty-btn').find('[data-qty="input"]').val(); // Fetch the value of the input field
        sendQuantity(qtyValue);
    });

    function sendQuantity(qty) {
        var formData = {
            'qty': qty
        };
        var price = $('.mypriceee').attr('value');
        var myproductid = $('.my-product-id').attr('value');


        $.ajax({
            type: 'POST',
            url: '/quantity-process',
            data: {
                "_token":$('meta[name="csrf-token"]').attr('content'),
                "formData":qty,
                "price":price,
                "myproductid":myproductid
            },
            dataType: 'json',
            success: function(response) {
                // Handle success response
                $('#displayedQuantity').text(response.quantity);
                $('#displayedPrice').text(response.price);
                $('#displayedsymbole').text(response.symbole);



                $('.priceajax').hide(); // Hide the price element with class 'price'\
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(error);
            }
        });
    }
});
