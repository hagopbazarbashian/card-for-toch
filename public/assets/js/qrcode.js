document.querySelectorAll(".qr-icon").forEach(function (qrIcon) {
   qrIcon.addEventListener("click", function () {
      // Toggle a class on the body to change the background color
      document.body.classList.toggle("qrcode-active");
      var url = qrIcon.getAttribute("data-url");

      // Create a new QR code container
      var qrcodeContainer = document.createElement("div");
      qrcodeContainer.className = "qrcode-container text-center";
      qrcodeContainer.style.display = "none";

      // Create a close button for the new container
      var closeButton = document.createElement("div");
      closeButton.className = "qrcode-close";
      closeButton.style.cursor = "pointer";
      closeButton.innerHTML = "&times;";
      closeButton.addEventListener("click", function () {
         document.body.classList.remove("qrcode-active");
         qrcodeContainer.style.display = "none";
      });

      // Create a new div for the QR code
      var qrcodeDiv = document.createElement("div");
      qrcodeDiv.className = "qrcode";

      // Append the close button and QR code div to the container
      qrcodeContainer.appendChild(closeButton);
      qrcodeContainer.appendChild(qrcodeDiv);

      // Create a "Copy Link" button
      var copyLinkButton = document.createElement("button");
      copyLinkButton.textContent = "Copy Link";
      copyLinkButton.className = "copy-link-button action-button"; // Add the "copy-link-button" class here
      copyLinkButton.addEventListener("click", function () {
         copyToClipboard(url);
      });

      // Append the "Copy Link" button to the container
      qrcodeContainer.appendChild(copyLinkButton);

      // Create a "Save QR Code" button
      var saveQRCodeButton = createButton("Save QR Code", "copy-link-buttonqr action-button", function () {
         saveQRCodeImage(qrIcon);
      });

      // Your existing code to create a "Share" button
      var shareButton = createButton("Share", "copy-link-buttonqr share-button action-button", function () {
         shareQRCode(url);
      });

      // Append the action buttons to the container
      qrcodeContainer.appendChild(copyLinkButton);
      qrcodeContainer.appendChild(saveQRCodeButton);
      qrcodeContainer.appendChild(shareButton);

      // Close any existing QR code containers
      document.querySelectorAll(".qrcode-container").forEach(function (container) {
         container.style.display = "none";
      });

      // Generate QR code
      //  var qrcode = new QRCode(qrcodeDiv, {
      //      text: url, // You can use any text here
      //      width: 150, // Set the width of the QR code (larger size)
      //      height: 150, // Set the height of the QR code (larger size)
      //  });

      // URL of the image you want to embed
      var imageUrl = `https://quickchart.io/qr?text=${encodeURIComponent(url)}&ecLevel=H&size=250&centerImageUrl=https%3A%2F%2Ftoch.am%2Fassets%2Fimages%2Ftoch-qr.png`;

      // Generate QR code
      var qrcode = new QRCode(qrcodeDiv, {
         text: url, // You can use any text here
         width: 150, // Set the width of the QR code (larger size)
         height: 150, // Set the height of the QR code (larger size)
      });

      // Create a new image element with the embedded image
      var mergedImage = document.createElement("img");
      mergedImage.src = imageUrl; // Replace with your actual image URL

      // Set styles for centering the image and the additional styles
      mergedImage.style.display = "block";
      mergedImage.style.width = "157PX";
      mergedImage.style.margin = "auto";
      mergedImage.style.position = "absolute";

      // Append the merged image to the qrcodeDiv
      qrcodeDiv.appendChild(mergedImage);

      // Append the new container to the body
      document.body.appendChild(qrcodeContainer);

      // Show the new QR code container
      qrcodeContainer.style.display = "block";
   });
});

function createButton(text, className, clickHandler) {
   var button = document.createElement("button");
   button.textContent = text;
   button.className = className;
   button.addEventListener("click", clickHandler);
   return button;
}

function copyToClipboard(text) {
   var dummyElement = document.createElement("textarea");
   document.body.appendChild(dummyElement);
   dummyElement.value = text;
   dummyElement.select();
   document.execCommand("copy");
   document.body.removeChild(dummyElement);
   alert("Link copied to clipboard: " + text);
}

function saveQRCodeImage(qrIcon) {
   // Get the URL from the data-url attribute
   var url = qrIcon.getAttribute("data-url");
   console.log(url);
   alert(url);

   // Check if the URL is defined
   if (!url) {
      // If data-url attribute is not defined, prompt the user for a URL
      url = prompt("Please enter a URL:");

      // If the user cancels the prompt or provides an empty URL, exit the function
      if (!url) {
         alert("URL is not provided. Unable to generate QR Code.");
         return;
      }

      // Set the data-url attribute on the qrIcon element
      qrIcon.setAttribute("data-url", url);
   }

   // Append the 'url' variable to the QR Code URL
   var imageUrl = `https://quickchart.io/qr?text=${encodeURIComponent(url)}&ecLevel=H&size=250&centerImageUrl=https%3A%2F%2Ftoch.am%2Fassets%2Fimages%2Ftoch-qr.png`;

   // Fetch the image
   fetch(imageUrl)
      .then((response) => response.blob())
      .then((blob) => {
         // Create a link element
         var link = document.createElement("a");
         link.href = URL.createObjectURL(blob);
         link.download = "qrcode.png";

         // Append the link to the document body
         document.body.appendChild(link);

         // Trigger a click on the link
         link.click();

         // Remove the link from the document
         document.body.removeChild(link);
      })
      .catch((error) => {
         console.error("Error fetching image:", error);
         alert("Error fetching image. Unable to generate QR Code.");
      });
}

// Your sharePage function
function shareQRCode() {
   if (navigator.share) {
      var shareUrl = document.body.getAttribute("data-url");
      // Use Web Share API if available
      navigator
         .share({
            title: document.title,
            text: "Check out this page!",
            url: shareUrl,
         })
         .then(() => console.log("Page shared successfully"))
         .catch((error) => console.error("Error sharing page:", error));
   } else {
      // Fallback for browsers that do not support Web Share API
      alert("Share functionality is not supported in your browser. You can manually copy the link: " + window.location.href);
   }
}

// Your sharePage function
function shareQRCode() {
   if (navigator.share) {
      var shareUrl = document.body.getAttribute("data-url"); 
      // Use Web Share API if available
      navigator
         .share({
            title: document.title,
            text: "Check out this page!",
            url: shareUrl,
         })
         .then(() => console.log("Page shared successfully"))
         .catch((error) => console.error("Error sharing page:", error));
   } else {
      // Fallback for browsers that do not support Web Share API
      alert("Share functionality is not supported in your browser. You can manually copy the link: " + window.location.href);
   }
}
