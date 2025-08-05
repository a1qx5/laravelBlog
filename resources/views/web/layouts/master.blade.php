<!doctype html>
<html class="is-menu-fixed">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Editor - Responsive HTML5 Template">
    <meta name="keywords" content="editor, blog, html5, portfolio">
    <meta name="author" content="Pixelwars">
    
    <title>Editor - a wordpress blog</title>
    @include('web.layouts.partials.styles')
</head>

<body>

    <!-- page -->
    <div id="page" class="hfeed site">
        
        <!--header-->
        @include('web.layouts.partials.header')
        
        <!--main-->
        @yield('content')
        
        <!--footer-->
        @include('web.layouts.partials.footer')
	</div>
    <!-- page -->
    
    
    <script src="js/fastclick.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.uniform/jquery.uniform.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.fluidbox/jquery.fluidbox.min.js"></script>
    <script src="js/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/readingTime.js"></script>
    <script src="js/selection-sharer/selection-sharer.js"></script>
    <script src="js/responsive-image-gallery/r-gallery.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
