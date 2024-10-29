<!-- Body main wrapper start -->
<div class="wrapper fix">
<?php
	$currentFiles=$_SERVER['PHP_SELF'];
	$partss = explode('/', $currentFiles);
	$pagenames = $partss[count($partss) -1];
?> 
    <!-- Header Area Start -->
    <div id="header-area" class="header-area section">

        <!-- Header Top Start -->
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Header Top Left -->
                    <div class="header-top-left col-md-auto col-12">
                        <p><span>Phone:</span> +91 9526 66 6680</p>
                        <p><span>Phone:</span> +91 9847 07 6707</p>
                    </div>
                    <!-- Header Top Right -->
                    <div class="header-top-right col-md-auto col-12 d-none d-md-flex">
                        <!-- Header Social -->
                        <div class="header-social d-md-none d-lg-flex">
                            <a target="_blank" rel="noopener" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" rel="noopener" href="https://www.rss.com/"><i class="fa fa-whatsapp"></i></a>
                            <a target="_blank" rel="noopener" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                            <a target="_blank" rel="noopener" href=""><i class="fa fa-youtube-play"></i></a>
                        </div>
                        <!-- Header Quote Button -->
                        <a href="contact.php" class="get-quote">Enquire Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Header Bottom Start -->
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="header-logo col align-self-center"><a class="logo" href="index.html"><img src="img/logo.png" alt="Image"></a></div>
                    <!-- Main Menu -->
                    <div id="main-menu" class="main-menu col-auto d-none d-lg-block">
                        <nav>
                            <ul>
                                <li class="<?= ($pagenames === 'index.php') ? 'active' : '' ?>"><a href="index.php">home</a>
                                </li>
                                <li class="<?= ($pagenames === 'about.php') ? 'active' : '' ?>"><a href="about.php">about</a></li>
                                <li class="<?= ($pagenames === 'splints.php' || $pagenames === 'veneers.php') ? 'active' : '' ?>"><a href="products.php">Products</a>
                                    <ul>
                                        <li><a href="splints.php">Splints</a></li>
                                        <li><a href="veneers.php">Veneers</a></li>
                                    </ul>
                                </li>
                                <li class="<?= ($pagenames === 'gallery.php') ? 'active' : '' ?>"><a href="gallery.php">Gallery</a></li>
                                <li class="<?= ($pagenames === 'contact.php') ? 'active' : '' ?>"><a href="contact.php">contact us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Search Wrapper -->
                    <!-- Mobile Menu -->
                    <div class="mobile-menu col-12 d-lg-none"></div>
                </div>
            </div>
        </div>
        <!-- Header Bottom End -->

    </div>
    <!-- Header Area End -->