document.addEventListener('DOMContentLoaded', function() {
    const photoInput = document.getElementById('photo');
    previewImage(photoInput);
  });

  function previewImage(input) {
    const preview = document.getElementById('image-preview'); 
    const noImageMessage = document.getElementById('no-image-message');
    const file = input.files[0];

    if (file) {
      const reader = new FileReader();

      reader.onload = function (e) {
        preview.src = e.target.result;
        preview.style.display = 'block';
        noImageMessage.style.display = 'none';
      };

      reader.readAsDataURL(file);
    } else {
      preview.style.display = 'none';
      noImageMessage.style.display = 'block';
    }
  }



  function toggleInput(socialMedia) {
    // Show the selected social media input field
    var inputId = socialMedia + 'Input';
    var input = document.getElementById(inputId);
    input.style.display = 'block';

    // Show the submit button
    var submitButton = document.getElementById('submitButton');
    submitButton.style.display = 'block';
  }

  function submitForm() {
    var form = document.getElementById('myForm');
    form.submit(); // Submit the form to your Laravel backend
  }


  $(document).ready(function() {
        // Handle click on delete icon
        $('.delete-icon').on('click', function(e) {
            e.preventDefault();
            var deleteFormId = $(this).data('delete-id');
            $('#deleteForm' + deleteFormId).submit();
        });
    });

///////
// close Button with sumbit

const LOADING_CLASS = "is-loading";

class SubmitButton {
    constructor(elem) {
        this.elem = elem;
        this.init();
    }
    init() {
        this.prepButton();
        this.bindEvents();
    }
    prepButton() {
        this.elem.innerHTML = `
            <span class="submit-button__text">${this.elem.innerHTML}</span>
            <span class="submit-button__loader"></span>
        `;
    }

    bindEvents() {
        this.elem.form.addEventListener("submit", ev => {
            this.disableButton();
            this.addLoadingStyles();
        });
    }

    disableButton() {
        this.elem.disabled = true;
    }

    enableButton() {
        this.elem.disabled = false;
    }

    addLoadingStyles() {
        if (!this.elem.classList.contains(LOADING_CLASS)) {
            this.elem.classList.add(LOADING_CLASS);
        }
    }

    removeLoadingStyles() {
        if (this.elem.classList.contains(LOADING_CLASS)) {
            this.elem.classList.remove(LOADING_CLASS);
        }
    }

    reset() {
        this.enableButton();
        this.removeLoadingStyles();
    }
}


// Demo Script
const submitButton = new SubmitButton(document.querySelector(".submit-button"));
document.querySelector("form").addEventListener("submit", function(event) {
    window.setTimeout(function() {
        submitButton.reset();
    }, 7500);

    event.preventDefault();
});
