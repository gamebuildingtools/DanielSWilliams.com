<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DanielSWilliams.com</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url('assets/css/stylish-portfolio.css')?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url('assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$("#menu-close").click();>Start Bootstrap</a>
            </li>
            <li>
                <a href="#top" onclick=$("#menu-close").click();>Home</a>
            </li>
            <li>
                <a href="#about" onclick=$("#menu-close").click();>About</a>
            </li>
            <li>
                <a href="#services" onclick=$("#menu-close").click();>Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick=$("#menu-close").click();>Portfolio</a>
            </li>
            <li>
                <a href="#contact" onclick=$("#menu-close").click();>Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Daniel S. Williams</h1>
            <div class="container-fluid">
              <div class="col-md-2"></div>
              <div class="col-md-8 center-block">
                <h3>Developer, blogger, husband and father. I am passionate about web tech, building casual 2D mobile game, improving user interfaces and digital marketing.<br><br>This is my corner of the web.</h3>
              </div>
              <div class="col-md-2"></div>
            </div>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Learn More About Me</a>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>A Bit More About Daniel Williams</h2>
                    <p class="lead">I am happily married to my beautiful wife, Rachel Williams, and I have two rambunctious children who are 3 years old and another one that is almost one. I currently live in the Indianapolis, Indiana area.</p>
                    <p class="lead">After my time with the U.S. Army, I attended Ivy Tech Community College and received my degree in Web Management. With degree in hand, I started working for F.C. Tucker Company, Inc. in the digital marketing department. This job role allows me to focus on meeting the digital needs of our real estate agents. I have brought on tools that allow agents to create marketing materials for their listings and themselves. I’ve also helped handle search engine optimization, pay-per-click campaigns, social media efforts, and managed the direction of our online presence.</p>
                    <p class="lead">I’ve continued my education by receiving several certifications from Lynda.com and W3Schools. The certifications I’ve received range from HTML/CSS topics to Design Thinking. I believe it’s important to know and understand different aspects of businesses.</p>
                    <p class="lead">On a personal level, I’ve started my own LLC called Mind Magic Games and I’ve produced over 40+ 2D casual mobile games using Corona SDK <em>(I even wrote a book)</em>. I’ve also worked with recipe bloggers to publish recipe apps and even brought to life a calculator application for engineers. I feel my skillset is strong with HTML/CSS and I’m familiar with JavaScript, PHP, CodeIgniter, and Lua. </p>
                    <p class="lead">You can learn more about me by emailing me at <a href="me@danielswilliams.com">me@DanielSWilliams.com</a>, visiting my <a href="https://www.linkedin.com/in/danswill/">LinkedIn profile</a>, taking a look at my <a href="https://github.com/gamebuildingtools">GitHub</a>, or browsing around my passion project at <a href="http://gamebuildingtools.com">GameBuildingTools.com</a>.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>My Certifications and More About Me</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>W3Schools Certified</strong>
                                </h4>
                                <p>In 2014, I received certifications for HTML5 and PHP.</p>
                                <a href="hhttp://www.refsnesdata.no/certification/w3certified.asp?id=6050657" class="btn btn-light">View Certifications</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Continuing Education</strong>
                                </h4>
                                <p>I'm continuing my education through Lynda.com by learning design, SEO, and programming.</p>
                                <a href="https://www.lynda.com/AllCertificates/User/4258222" class="btn btn-light">View Certifications</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Learn By Doing</strong>
                                </h4>
                                <p>I learn by doing so I published tutorials about Corona SDK.</p>
                                <a href="http://gamebuildingtools.com/category/corona-sdk" class="btn btn-light">Read Posts</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>LinkedIn</strong>
                                </h4>
                                <p>Visit my LinkedIn profile to learn more about me.</p>
                                <a href="https://www.linkedin.com/in/danswill/" class="btn btn-light">View LinkedIn Profile</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center">
            <h1>Web Developer, App Developer, Author.</h1>
        </div>
    </aside>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>A Sample of Some of My Work</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="https://itunes.apple.com/us/app/drizzle-me-skinny-healthy-ww-recipes/id982786999?mt=8">
                                    <img class="img-portfolio img-responsive" src="<?=base_url('assets/img/portfolio-1.jpg')?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="https://itunes.apple.com/us/app/what-the-rebus-a-word-game/id1086498603?mt=8">
                                    <img class="img-portfolio img-responsive" src="<?=base_url('assets/img/portfolio-2.jpg')?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="https://itunes.apple.com/us/app/asterion-tools-calculate-convert-volume-plating-surface/id562914006?mt=8">
                                    <img class="img-portfolio img-responsive" src="<?=base_url('assets/img/portfolio-3.jpg')?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="http://www.packtpub.com/corona-software-development-kit-application-design/book">
                                    <img class="img-portfolio img-responsive" src="<?=base_url('assets/img/portfolio-4.jpg')?>">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <!--<a href="#" class="btn btn-dark">View More Items</a>-->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Want to collaborate on something? Let me know.</h3>
                    <a href="mailto:me@danielswilliams.com" class="btn btn-lg btn-light">Email Me</a>
                    <a href="https://twitter.com/gamebuilding" class="btn btn-lg btn-dark">Twitter</a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Map -->
    <section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d196237.09278169295!2d-86.27283369825204!3d39.7799641553182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886b50ffa7796a03%3A0xd68e9df640b9ea7c!2sIndianapolis%2C+IN!5e0!3m2!1sen!2sus!4v1493148969170"></iframe>
        <br />

        <small>
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d196237.09278169295!2d-86.27283369825204!3d39.7799641553182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886b50ffa7796a03%3A0xd68e9df640b9ea7c!2sIndianapolis%2C+IN!5e0!3m2!1sen!2sus!4v1493148969170"></a>
        </small>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Built with CodeIgniter and Bootstrap</strong>
                    </h4>
                        <br>Indianapolis, IN</p>
                        <ul class="list-unstyled">
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:me@danielswilliams.com">me@danielswilliams.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Daniel Williams <?=date('Y')?></p>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

    <!-- jQuery -->
    <script src="<?=base_url('assets/js/jquery.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
    </script>

</body>

</html>
