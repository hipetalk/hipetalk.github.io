<footer data-aos="fade-up">
        <div class="container">
            <div class="row text-center d-flex justify-content-center pt-3 mb-3">

                <div class="col-md-2 mb-0">
                    <h6 class="footer-links">
                        <a href="#home">Home</a>
                    </h6>
                </div>

                <div class="col-md-2 mb-0">
                    <h6 class="footer-links">
                        <a href="#news">News</a>
                    </h6>
                </div>

                <div class="col-md-2 mb-0">
                    <h6 class="footer-links">
                        <a href="#vision">Vision</a>
                    </h6>
                </div>

                <div class="col-md-2 mb-0">
                    <h6 class="footer-links">
                        <a href="#our-works">Our Works</a>
                    </h6>
                </div>

                <div class="col-md-2 mb-0">
                    <h6 class="footer-links">
                        <a href="#about">Profile</a>
                    </h6>
                </div>

                <div class="col-md-2 mb-0">
                    <h6 class="footer-links">
                        <a href="#contact">Contact</a>
                    </h6>
                </div>

            </div>
        </div>

        <div class="footer-copyright text-center py-3">Copyright © HTS</div>

    </footer>

    <!-- Footer -->

    <!-- Footer ends here -->
    <script src=" https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>

    <script src="https://www.google.com/recaptcha/api.js?render=_reCAPTCHA_site_key"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="sweetalert2.all.min.js"></script>
    
    <script>
        $(document).ready(function () {
            // Add scrollspy to <body>
            $('body').scrollspy({ target: ".navbar", offset: 50 });

            // Add smooth scrolling on all links inside the navbar
            $("#mainNav a").on('click', function (event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                }  // End if
            });
        });


    </script>
    <script>
        AOS.init({
            duration: 1000
        });
    </script>
</body>

</html>