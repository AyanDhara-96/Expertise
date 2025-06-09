<?php include("asset/nav.php") ?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                        <div class="col-sm-6">
                            <h3 class="mb-0">Full Name</h3>
                            <p>Head of Sales</p>
                            <h6>Contact Details</h6>
                            <p>Lorem ipsum dolor sit amet conse elit sed eiu smod lab ore.</p>
                            <p class="mb-0">Call: +012 345 6789</p>
                            <p class="mb-0">Email: sales@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                        </div>
                        <div class="col-sm-6">
                            <h3 class="mb-0">Full Name</h3>
                            <p>Head of Marketing</p>
                            <h6>Contact Details</h6>
                            <p>Lorem ipsum dolor sit amet conse elit sed eiu smod lab ore.</p>
                            <p class="mb-0">Call: +012 345 6789</p>
                            <p class="mb-0">Email: sales@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 450px;">
                    <div class="position-relative h-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.6223496391685!2d88.07514130903243!3d22.480821636246162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02843a3e865dc5%3A0xe175b11added28f9!2sCalcutta%20Institute%20of%20Technology%20(CIT)!5e0!3m2!1sen!2sin!4v1714273635170!5m2!1sen!2sin" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">Contact Us</h6>
                        <h1 class="display-6 mb-0">If You Have Any Query, Please Contact Us</h1>
                    </div>
                    <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    <form action="./control/contact-control.php" method="post" >
                        <div class="row g-3">
                            
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="name" name="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0 bg-light" id="email" name="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="subject" name="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0 bg-light" placeholder="Leave a message here" name="message" id="message"  style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit" name="query_submit">Send Message</button>
                            </div>
                        </div>
                    </fo>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <?php include("asset/footer.php") ?>
    <!-- footer end -->