<?php include("header-1.php"); ?>

<!-- Start of Breadcrumb section
	============================================= -->
		<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/bread-bg.jpg">
		<span class="background_overlay"></span>
		<span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh.png" alt=""></span>
		<div class="container">
		<div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
			<div class="ft-breadcrumb-content headline text-center position-relative">
				<h2>Complaint</h2>
				<div class="ft-breadcrumb-list ul-li">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>Complaint</li>
					</ul>
				</div>
			</div>
		</div>
	</section>	
<!-- End of Breadcrumb section
	============================================= -->

<!-- Start of About section
	============================================= -->
	<section id="ft-thx-about" class="ft-contact-page-section page-padding">
		<div class="container">
			<div class="pr-cor-about-content">
				<div class="row">
					<div class="col-lg-12">
                    <div class="ft-faq-content">
				<div class="row">
                <div class="col-lg-8 complaint">
						<div class="ft-contact-page-form-wrapper headline wow fadeInRight" data-wow-delay="500ms" data-wow-duration="300ms">
							<h3 class="text-center">Submit A Complaint</h3>
                            <p class=" pb-3 text-center">To ensure a faster and more efficient service, please fill the fields with accurate details.</p>
							<form action="">
								<div class="row">
									<div class="col-lg-12">
										<input type="text" name="name" placeholder="Name">
									</div>
                                    <div class="col-lg-6">
										<input type="text" name="number" placeholder="Number">
									</div>
									<div class="col-lg-6">
										<input type="email" name="email" placeholder="Email">
									</div>
									
									
									<div class="col-lg-6">
										<input type="text" name="department" placeholder="Tracking Number">
									</div>
									<div class="col-lg-6">
                                    <select name="input_10" id="input_6_10" >
                                        <option value="" selected="selected" class="gf_placeholder">Select Complain Type</option>
                                        <option value="Delayed shipment">Delayed shipment</option>
                                        <option value="Delivery quality">Delivery quality</option>
                                        <option value="Courier complaint">Courier complaint</option>
                                    </select>
									</div>
									<div class="col-lg-12">
										<textarea name="message" placeholder="Your Message"></textarea>
									</div>
									<div class="col-lg-12">
										<button>Submit Complaint</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
<!-- End of About section
	============================================= -->


<?php include("footer.php"); ?>	