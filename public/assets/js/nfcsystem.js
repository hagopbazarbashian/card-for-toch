document.addEventListener('DOMContentLoaded', () => {
    const nfcDataDiv = document.getElementById('nfcData');

    if ('NDEFReader' in window) {
        try {
            const ndef = new NDEFReader();
            ndef.scan();

            ndef.addEventListener('reading', ({ message }) => {
                const textDecoder = new TextDecoder();
                const text = textDecoder.decode(message.records[0].data);
                nfcDataDiv.textContent = `NFC Data: ${text}`;

                // Open the HTTPS link when NFC is detected
                window.location.href = text;
            });

            // Trigger NFC reading when the page loads
            ndef.onreading = () => {
                ndef.start();
            };
        } catch (error) {
            console.error('Error reading NFC:', error);
        }
    } else {
        // Web NFC not supported
        alert('Web NFC not supported in this browser.')
    }
});