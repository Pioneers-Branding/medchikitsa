
  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
  
     <style>

        @media only screen and (min-width: 300px) {
    .g-recaptcha {
        transform:scale(0.77);
        transform-origin:0 0;
    }
}
         
     </style>
     
     <script>
                document.addEventListener('DOMContentLoaded', function() {
                var form = document.querySelector('.contact-form');
            
                form.addEventListener('submit', function(event) {
                    event.preventDefault(); // Prevent form from submitting initially
            
                    var recaptchaResponse = document.querySelector('#g-recaptcha-response').value;
            
                    if (recaptchaResponse.length === 0) {
                        alert('Please complete the reCAPTCHA challenge.');
                    } else {
                        // If reCAPTCHA is valid, submit the form
                        form.submit();
                    }
                });
            });
        </script>
