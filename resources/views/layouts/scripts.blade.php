    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('public/assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('public/assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('public/assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('public/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('public/assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('public/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script type="text/javascript" src="{{ asset('public/assets/js/main.js') }}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src='https://www.googletagmanager.com/gtag/js?id={{env("GOOGLE_ANALITICS_G_VAR")}}'></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{env("GOOGLE_ANALITICS_G_VAR")}}');
    </script>

    <!-- Google ReCapcha -->
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <script>
        // Handle send mail button click
        document.getElementById("submit-btn").addEventListener("click", function(e) {
            var recaptchaResponse = document.querySelector('#g-recaptcha-response');
            
            if (!recaptchaResponse || !recaptchaResponse.value) {
                // Show error message
                document.getElementById("recaptcha-error").style.display = 'block';
                return false;
            }
            
            // Hide error and show loading
            document.getElementById("recaptcha-error").style.display = 'none';
            this.disabled = true;
            this.innerHTML = '<span class="spinner-border spinner-border-sm"></span> Sending...';
            
            // Submit the form
            document.getElementById("demo-form").submit();
        });
    </script>
