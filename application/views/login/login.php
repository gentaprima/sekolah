<!-- <div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>PLEASE LOGIN TO APP</h3>
				<p>This is the best app ever!</p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="<?= base_url() ?>login/login_process" method="post" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="Username" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="Password" required="" value="" name="password" id="password" class="form-control">
                               
                            </div>
                           
                            <button class="btn btn-success btn-block loginbtn" type="submit">Login</button>
                            <a class="btn btn-default btn-block" href="#">Register</a>
                        </form>
                    </div>
                </div>
			</div>
			
		</div>   
    </div> -->

<body data-spy="scroll" data-target=".mainmenu-area">

    <div class="preloader">
        <span><i class="lnr lnr-sun"></i></span>
    </div>

    <nav class="mainmenu-area" data-spy="affix" data-offset-top="200">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="primary_menu">
                <ul class="nav navbar-nav mainmenu">
                    <li><a href="index-2.html#home_page">Home</a></li>
                    <li><a href="index-2.html#about_page">About</a></li>
                    <li><a href="index-2.html#features_page">Features</a></li>
                    <li><a href="index-2.html#gallery_page">Gallery</a></li>
                    <li><a href="index-2.html#price_page">Pricing</a></li>
                    <li><a href="index-2.html#questions_page">FAQ</a></li>
                    <li class="active"><a href="blog.html">Blog</a></li>
                    <li><a href="index-2.html#contact_page">Contacts</a></li>
                </ul>
                <div class="right-button hidden-xs">
                    <a href="#">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h1 class="white-color">Login</h1>
                    <ul class="breadcrumb">
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="section-padding">
        <div class="container">
            <div class="row">
                
            </div>
        </div>
    </div>


  


    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/jquery-ui.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/owl.carousel.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/ajaxchimp.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/wow.min.js"></script>

    <script src="js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
</body>