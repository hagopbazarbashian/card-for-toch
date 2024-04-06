document.getElementById('phoneInput').addEventListener('input', function (e) {
    // Remove all non-numeric characters
    var inputValue = e.target.value.replace(/\D/g, '');

    // Format the input as (XXX) XXX-XXXX
    if (inputValue.length > 0) {
        inputValue = '(' + inputValue;
    }
    if (inputValue.length > 4) {
        inputValue = inputValue.substring(0, 4) + ') ' + inputValue.substring(4);
    }
    if (inputValue.length > 9) {
        inputValue = inputValue.substring(0, 9) + '-' + inputValue.substring(9);
    }

    // Update the input field
    e.target.value = inputValue;
});
