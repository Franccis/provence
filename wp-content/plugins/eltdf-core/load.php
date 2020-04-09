<?php

require_once 'const.php';
require_once 'lib/helpers/helpers.php';

//load import
require_once 'import/eltd-import.php';

//load lib
require_once 'lib/post-type-interface.php';
require_once 'lib/google-fonts.php';
require_once 'lib/shortcode-interface.php';

//load post-post-types
require_once 'post-types/portfolio/portfolio-register.php';
require_once 'post-types/portfolio/portfolio-functions.php';
require_once 'post-types/portfolio/shortcodes/portfolio-list.php';
require_once 'post-types/portfolio/shortcodes/portfolio-project-info.php';
require_once 'post-types/portfolio/shortcodes/portfolio-slider.php';
require_once 'post-types/testimonials/testimonials-register.php';
require_once 'post-types/testimonials/shortcodes/testimonials.php';
require_once 'post-types/masonry-gallery/masonry-gallery-register.php';
require_once 'post-types/masonry-gallery/shortcodes/masonry-gallery.php';
require_once 'post-types/post-types-register.php'; //this has to be loaded last

//load shortcodes inteface
require_once 'lib/shortcode-loader.php';