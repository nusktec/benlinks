
<!-- Footer Section -->
<div class="footer-section">
    <!-- Footer Widget -->
    <div class="footer-widget">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Widget : About -->
                    <aside class="widget widget_about">
                        <h3 class="widget-title">About</h3>
                        <p><?php echo $c['about-us']; ?></p>
                        <ul>
                            <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" title="Google+"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <div class="download-app d-none">
                            <h4>Download Now:</h4>
                            <ul>
                                <li><a href="#" title="Apple"><i class="fa fa-apple"></i></a></li>
                                <li><a href="#" title="Android"><i class="fa fa-android"></i></a></li>
                                <li><a href="#" title="Windows"><i class="fa fa-windows"></i></a></li>
                            </ul>
                        </div>
                    </aside><!-- Widget : About /- -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Widget : Latest Post -->
                    <aside class="widget widget_latest_post">
                        <h3 class="widget-title">People's Hype</h3>
                        <div class="latest-content">
                            <div class="latest-post">
                                <a href="#"><img src="assets/images/latest-post-wid-1.jpg" alt="Post"/></a>
                                <h4>We are too classic to disappoint your trip !</h4>
                                <span><a href="#">April 2, 2019</a><a href="#">Benlinks Official</a></span>
                            </div>
                        </div>
                    </aside><!-- Widget : Latest Post -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Widget: Pages -->
                    <aside id="pages" class="widget widget_pages">
                        <h3 class="widget-title">Links</h3>
                        <ul>
                            <li class="page_item"><a href="app/">Book Now</a></li>
                            <li class="page_item"><a href="contact-us">Contact Us</a></li>
                            <li class="page_item"><a href="about">About Us</a></li>
                        </ul>
                    </aside><!-- Widget: Pages /- -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Widget : Info -->
                    <aside class="widget widget_info">
                        <h3 class="widget-title">Info</h3>
                        <p>You may contact us during working timing </p>
                        <p><i class="icon icon-Phone2"></i> Tel : <a href="tel:2345678190"><?php echo $c['phone'] ?></a></p>
                        <p><i class="icon icon-Mail"></i> Email : <a href="mailto:<?php echo $c['email'] ?>"><?php echo $c['email'] ?></a>
                        </p>
                        <p><i class="icon icon-Time"></i> Working Hours : 24 hours</p>

                        <!-- Widget : Newsletter -->
                        <aside class="widget widget_newsletter d-none">
                            <h3 class="widget-title">SUBCRIBE :</h3>
                            <form method="get" class="searchform" action="#">
                                <div class="input-group">
                                    <input name="email" placeholder="Enter Email..." class="form-control" required=""
                                           type="text"/>
                                    <span class="input-group-btn">
											<button class="btn btn-default" type="submit"><i
                                                    class="fa fa-paper-plane"></i></button>
										</span>
                                </div>
                            </form>
                        </aside><!-- Widget : Newsletter /- -->
                    </aside><!-- Widget : Info /- -->
                </div>
            </div><!-- Row /- -->
        </div><!-- Container /- -->
    </div><!-- Footer Widget /- -->
    <div class="bottom-footer">
        <!-- Container -->
        <div class="container">
            <div class="ftr-content">
                <ul>
                    <li><a href="app/" title="Faq">Login</a></li>
                    <li><a href="app/en/auth/create_user" title="News">Register</a></li>
                    <li><a href="contact-us" title="Client Support">Client Support</a></li>
                </ul>
                <p>&copy; Copyright Benlinks <?php echo Date('Y'); ?>. All Rights reserved | R01 Dev.</p>
            </div>
        </div><!-- Container /- -->
    </div>
</div><!-- Footer Section /- -->

<!-- JQuery v1.12.4 -->
<script src="assets/js/jquery-1.12.4.min.js"></script>

<!-- Library - Js -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/lib.js"></script>

<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript"
        src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>

<!-- Library - Theme JS -->
<script src="assets/js/functions.js"></script>
