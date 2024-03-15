<!-- whatsapp-button -->
<a data-action="open" data-phone="966543954867" data-message="" role="button" tabindex="0" target="_blank" href="https://web.whatsapp.com/send?phone=966543954867&amp;text=" style="position:fixed; left: 29px; bottom: 15px; z-index: 9999;">
    <img src="https://i.ibb.co/VgSspjY/whatsapp-button.png" alt="whatsapp icon">
  </a>


<!-- Footer Style Two -->
<footer class="ft1-main-footer style-two" style="background-image:url(assets/img/background/pattern-12.png)">
    <div class="auto-container">
        <!-- Widgets Section -->
        <div class="widgets-section">
            <div class="row clearfix">

                <!-- Big Column -->
                <div class="big-column col-lg-12 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget newsletter-widget">
                                <!--<h5>Newsletter</h5>
                                <div class="text">Subscribe our newsletter to get our latest update & news</div>-->
<div class="ft-brand-logo mb-4">
						<a href="index.php"><img src="assets/img/logo-2.png" alt=""></a>
					</div>
                                <!-- Email Box -->
                                <div class="email-box">
                                    <form method="post" action="">
                                        <div class="form-group">
                                            <input type="email" name="search-field" value="" placeholder="Your mail address" required>
                                            <button type="submit"><span class="icon far fa-paper-plane"></span></button>
                                        </div>
                                    </form>
                                </div>

                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li>
                                        <a href="https://www.linkedin.com/company/beez-logistics" target="_blank" class="fab fa-linkedin-in"></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/beezlogistics" target="_blank" class="fab fa-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/beezlogistics/" target="_blank" class="fab fa-instagram"></a>
                                    </li>
                                </ul>
                                <!-- End Social Box -->

                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-4 col-md-6 col-sm-12 ps-5">
                            <div class="ft-footer-widget ul-li-block headline pera-content footer-widget newsletter-widget">
                                <div class="menu-widget">
                                    <h5 class="widget-title">Quick Links</h5>
                                    <ul>

                                        
                                        <li><a href="complaint.php">Complaint</a></li>
                                        <li><a href="pdf/Rules-Protection-Rights-Beneficiaries.pdf" target="_blank>The rights of postal service users</a></li>
                                        <li><a href="terms&condition.php">Terms & Conditions</a></li>

                                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                        <!--<li><a href="faq.php">F.A.Q</a></li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget contact-widget">
                                <h5>Info:</h5>
                                <ul class="contact-list">
                                    <li><span class="icon fa fa-map-marker-alt"></span> <a href="https://goo.gl/maps/VGwUUVP3qNfWo82N7" target="_blank">King Fahd Branch Rd, Riyadh 12341, Saudi Arabia</a></li>
                                    <li><span class="icon fa fa-phone"></span> 8001240172</li>
                                    <li><span class="icon fa fa-envelope"></span> info@beezlogistics.com</li>
                                </ul>

                            </div>
                        </div>



                    </div>
                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="copyright">&copy; 2022 Beez Logistics – Family Care Trading Company. All rights reserved.</div>
        </div>

    </div>
</footer>



<!-- For Js Library -->

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/jquery.filterizr.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.cssslider.min.js"></script>
<script src="assets/js/rbtools.min.js"></script>
<script src="assets/js/rs6.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/script-two.js"></script>
<script src="assets/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('.select2_from').select2();

    });
    $(document).ready(function() {
        $('.select2_to').select2();

    });
</script>
<script>
function expand(card) {
            card.classList.toggle('profile--expanded');

            // If card is not expanded after toggle, add 'unexpanded' class
            if (!card.classList.contains('profile--expanded')) card.classList.toggle('profile--unexpanded');
            // Else if card is expanded after toggle and still contains 'unexpanded' class, remove 'unexpanded'
            else if (card.classList.contains('profile--expanded') && card.classList.contains('profile--unexpanded')) card.classList.toggle('profile--unexpanded');
        }
</script>
<script>
document.getElementById("box-1").addEventListener("click", function() {
    this.classList.toggle("is-active");
});
document.getElementById("box-2").addEventListener("click", function() {
    this.classList.toggle("is-active");
});
</script>


<script>
// client slick slider
$(document).ready(function () {
  $('.customer-logos').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false,
    dots: true,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 3,
        },
      },
    ],
  });
});
</script>


</script>
</body>

</html>