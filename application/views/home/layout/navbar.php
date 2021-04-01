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
<a class="navbar-brand" href="#"><img src="<?= base_url() ?>assets/home/images/logo.png" alt="Logo"></a>
</div>
<div class="collapse navbar-collapse" id="primary_menu">
<ul class="nav navbar-nav mainmenu">
<li class="active"><a href="#home_page">Home</a></li>
<li><a href="#about_page">About</a></li>
<li><a href="#features_page">Features</a></li>
<li><a href="#gallery_page">Gallery</a></li>
 <li><a href="#price_page">Pricing</a></li>
<li><a href="#questions_page">FAQ</a></li>
<li><a href="blog.html">Blog</a></li>
<li><a href="#contact_page">Contacts</a></li>
</ul>
<?php if($this->session->userdata('username')==null){ ?>
<div class="right-button hidden-xs">
<a href="<?= base_url('login') ?>">Login</a>
</div>
<?php }else{ ?>
    <a href="<?= base_url('login') ?>">Login</a>
    <?php } ?>
</div>
</div>
</nav>