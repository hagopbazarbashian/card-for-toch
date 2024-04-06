document.getElementById('shareButton').addEventListener('click', function () {
    // Check if the Web Share API is supported
    if (navigator.share) {
        navigator.share({
            title: 'Cardform Share',
            text: 'Check out this cardform!',
            url: window.location.href
        })
        .then(() => console.log('Shared successfully'))
        .catch((error) => console.error('Error sharing:', error));
    } else {
        // Fallback for devices or browsers that do not support the Web Share API
        // You can provide your own custom sharing logic or UI here
        alert('Web Share API is not supported on this device/browser.');
    }
});
