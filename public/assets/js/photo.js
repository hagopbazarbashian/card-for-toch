function validateFile(event) {
    const fileInput = event.target;
    const file = fileInput.files[0];

    if (file && file.type.startsWith('image/')) {
        // Display a preview of the image file
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagePreview').src = e.target.result;
        };
        reader.readAsDataURL(file);
    } else {
        // Handle invalid file type
        alert('Please select a valid image file.');
        fileInput.value = ''; // Clear the file input
    }
}
