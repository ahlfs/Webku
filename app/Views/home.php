<!DOCTYPE html>
<lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>Ahlul Firdaus</title>
    <!-- font icons -->
    <link rel="stylesheet" href="/assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Meyawo main styles -->
    <link rel="stylesheet" href="/assets/css/meyawo.css">
</head>

<?php 
$emailsentmessage = session()->getFlashdata('emailsentmessage');
?>


<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page Navbar -->
    <nav class="custom-navbar" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="logo" href="#">AHLFS</a>
            <ul class="nav">
                <li class="item">
                    <a class="link" href="#home">Home</a>
                </li>
                <li class="item">
                    <a class="link" href="#about">About</a>
                </li>
                <li class="item">
                    <a class="link" href="#portfolio">Portfolio</a>
                </li>
                <li class="item">
                    <a class="link" href="#testmonial">Performance</a>
                </li>
                <li class="item">
                    <a class="link" href="#contact">Contact</a>
                </li>
            </ul>
            <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </a>
        </div>
    </nav><!-- End of Page Navbar -->

    <!-- page header -->
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content container">
            <h1 class="header-title">
                <span class="up">HI!</span>
                <span class="down">I am Ahlul Firdaus</span>
            </h1>
            <p class="header-subtitle">FULLSTACK WEB DEVELOPER</p>

            <button class="btn btn-primary">Visit My Works</button>
        </div>
    </header><!-- end of page header -->

    <!-- about section -->
    <section class="section pt-0" id="about">
        <!-- container -->
        <div class="container text-center">
            <!-- about wrapper -->
            <div class="about">
                <div class="about-img-holder">
                    <img src="/assets/images/mc_sapiens.png" class="about-img" alt="">
                </div>
                <div class="about-caption">
                    <p class="section-subtitle">Who Am I ?</p>
                    <h2 class="section-title mb-3">About Me</h2>
                    <p>
                        My full name is Muhamad Alamsyah Ahlul Firdaus, now i'm an undergraduate student of Mercu Buana University majoring in computer science.
                        <br>I’m on a mission to create software solutions to real-world challenges. I’m always investigating the massive terrain of technology, from AI and machine learning to web development. 
                    </p>
                    <button class="btn-rounded btn btn-outline-primary mt-4">Download CV</button>
                </div>
            </div><!-- end of about wrapper -->
        </div><!-- end of container -->
    </section> <!-- end of about section -->

    <!-- service section -->
    <section class="section" id="service">
        <div class="container text-center">
            <p class="section-subtitle">What I Do ?</p>
            <h6 class="section-title mb-6">Service</h6>
            <!-- row -->
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="body">
                        <a href="https://www.flaticon.com/free-icons/hammer" title="hammer icons"><img src="/assets/images/hammer.png" alt="" class="icon"></a>
                           
                            <h6 class="title">Website Development</h6>
                            <p class="subtitle">Delivering websites or web apps, cybersecurity solutions, UX/UI design, eCommerce solutions, website architectures, QA testing, maintenance, and consulting</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="body">
                        <a href="https://www.flaticon.com/free-icons/graphic-design" title="graphic design icons"><img src="/assets/images/web-design.png" alt="" class="icon"></a>
                            
                            <h6 class="title">Graphic Design</h6>
                            <p class="subtitle">Create visual content to communicate messages. By applying visual hierarchy and page layout techniques</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="body">
                        <a href="https://www.flaticon.com/free-icons/writing" title="writing icons"><img src="/assets/images/copy-writing.png" alt="" class="icon"></a>
                            
                            <h6 class="title">Copywriting</h6>
                            <p class="subtitle">Writing persuasive marketing and promotional materials that motivate people to take some form of action, such as make a purchase</p>
                        </div>
                    </div>
                </div>
            </div><!-- end of row -->
        </div>
    </section><!-- end of service section -->

    <!-- portfolio section -->
    <section class="section" id="portfolio">
        <div class="container text-center">
            <p class="section-subtitle">What I Did ?</p>
            <h6 class="section-title mb-6">Portfolio</h6>
            <!-- row -->
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="portfolio-card">
                        <img src="/assets/images/harmonify.png" class="portfolio-card-img" alt="">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Harmonify</h5>
                                    <p class="font-weight-normal">Social Media Website Development</p>
                            </span>
                        </span>
                    </a>
                </div>

                <!-- <div class="col-md-4">
                    <a href="#" class="portfolio-card">
                        <img class="portfolio-card-img" src="https://i.pinimg.com/originals/5d/7c/d8/5d7cd8f02d391448b68bbe847f5cf1a9.jpg" class="img-responsive rounded" alt="">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Web Designing</h5>
                                <p class="font-weight-normal">Category: Web Templates</p>
                            </span>                         
                        </span>                         
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="portfolio-card">
                        <img class="portfolio-card-img" src="https://i.pinimg.com/originals/5d/7c/d8/5d7cd8f02d391448b68bbe847f5cf1a9.jpg" class="img-responsive rounded" alt="">    
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Web Designing</h5>
                                <p class="font-weight-normal">Category: Web Templates</p>
                            </span>                         
                        </span>                     
                    </a>
                </div> -->


            </div><!-- end of row -->
        </div><!-- end of container -->
    </section> <!-- end of portfolio section -->

    <!-- pricing section -->
    <section class="section" id="pricing">
        <div class="container text-center">
            <p class="section-subtitle">How Much I Charge ?</p>
            <h6 class="section-title mb-6">My Pricing</h6>
            <!-- row -->
            <div class="pricing-wrapper">
                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <img class="pricing-card-icon" src="/assets/imgs/scooter.svg" alt="">
                    </div>
                    <div class="pricing-card-body">
                        <h6 class="pricing-card-title">Copywrite</h6>
                        <div class="pricing-card-list">
                            <p>Unlimited Revisions</p>
                            <p>High-quality work</p>
                            <p>Grammarly Checked Content</p>
                        </div>
                    </div>
                    <div class="pricing-card-footer">
                        <span>$</span>
                        <span>2.99/Page</span>
                    </div>
                   
                </div>
                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <img class="pricing-card-icon" src="/assets/imgs/shipped.svg" alt="">
                    </div>
                    <div class="pricing-card-body">
                        <h6 class="pricing-card-title">Design</h6>
                        <div class="pricing-card-list">
                            <p>Unlimited Revisions</p>
                            <p>High-quality work</p>
                            <p>Original Content</p>
                        </div>
                    </div>
                    <div class="pricing-card-footer">
                        <span>$</span>
                        <span>4.99/Item</span>
                    </div>
                    
                </div>
                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <img class="pricing-card-icon" src="/assets/imgs/startup.svg" alt="">
                    </div>
                    <div class="pricing-card-body">
                        <h6 class="pricing-card-title">Web Build</h6>
                        <div class="pricing-card-list">
                            <p>Unlimited Revisions</p>
                            <p>High-quality work</p>
                            <p>Clean Code</p>
                            <p>Responsive</p>
                        </div>
                    </div>
                    <div class="pricing-card-footer">
                        <span>$</span>
                        <span>3.99/Hour</span>
                    </div>
                
                </div>

            </div><!-- end of pricing wrapper -->
        </div> <!-- end of container -->
    </section><!-- end of pricing section -->

    <!-- section -->
    <section class="section-sm bg-primary">
        <!-- container -->
        <div class="container text-center text-sm-left">
            <!-- row -->
            <div class="row align-items-center">
                <div class="col-sm offset-md-1 mb-4 mb-md-0">
                    <h6 class="title text-light">Want to work with me?</h6>
                    <p class="m-0 text-light">Always feel Free to Contact & Hire me</p>
                </div>
                <div class="col-sm offset-sm-2 offset-md-3">
                    <button class="btn btn-lg my-font btn-light rounded">Hire Me</button>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of section -->

    <!-- testimonial section -->
    <section class="section" id="testmonial">
        <div class="container text-center">
            <p class="section-subtitle">What i have achieved ?</p>
            <h6 class="section-title mb-6">Performance</h6>

            <!-- row -->
            <div class="row">
                <div class="col-md-8">
                    <div class="testimonial-card">
                    <div class="testimonial-card-img-holder">
                            <img src="/assets/images/bronze-trophy.png" draggable="false" class="testimonial-card-img">                           
                        </div>
                        <div class="testimonial-card-body">
                            
                            <p class="testimonial-card-subtitle font-weight-bold">3rd place in Yogyakarta Province LKS Web Technology</p>
                            <h6 class="testimonial-card-title">23 - 24 April 2024</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of testimonial section -->

 

    <!-- contact section -->
    <section class="section" id="contact">
        <div class="container text-center">
            <p class="section-subtitle">How can you communicate?</p>
            <h6 class="section-title mb-5">Contact Me</h6>
            <!-- contact form -->
            <form action="/message" method="post" class="contact-form col-md-10 col-lg-8 m-auto">
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <input type="text" name="sendername" size="50" class="form-control" autocomplete="off" placeholder="Your Name" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="email" name="senderemail" class="form-control" autocomplete="off" placeholder="Enter Email" requried>
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea name="pesan" id="comment" rows="6" class="form-control" placeholder="Write Something"></textarea>
                    </div>
                    <div class="form-group col-sm-12 mt-3">
                        <button type="submit" class="btn btn-outline-primary rounded">Send Message</button>
                    </div>
                </div>
            </form><!-- end of contact form -->
        </div><!-- end of container -->
    </section><!-- end of contact section -->

    <!-- footer -->
    <div class="container">
        <footer class="footer">
            <p class="mb-0">Copyright <script>
                    document.write(new Date().getFullYear())
                </script> &copy; <a href="#">Ahlfs</a></p>
            <div class="social-links text-right m-auto ml-sm-auto">
                <a href="https://www.facebook.com/ahlulfirdaus.firdaus.90" class="link"><i class="ti-facebook"></i></a>
                <a href="https://www.instagram.com/ahlfs_/" class="link"><i class="ti-instagram"></i></a>
                <a href="https://github.com/ahlfs" class="link"><i class="ti-github"></i></a>
            </div>
        </footer>
    </div> <!-- end of page footer -->

    <!-- core  -->
    <script src="/assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="/assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="/assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Meyawo js -->
    <script src="/assets/js/meyawo.js"></script>
    <script src="https://kit.fontawesome.com/6d2fa4f343.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/assets/js/script.js"></script>

    <?php if ($emailsentmessage) : ?>{
        <script>emailsent();</script>
    } ?>
 
    <?php endif; ?>
 

</body>

</html>