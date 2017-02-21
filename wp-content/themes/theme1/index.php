<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
<div class="head-wrapper">
    <div class="head">
        <div class="head-logo"><img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" alt=""/></div>
        <div class="head-banner"><img src="<?php bloginfo('template_url'); ?>/images/728x90.jpg" alt=""/></div>
    </div>
</div>
<div class="menu-wrapper">
    <div class="menu-main">
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Me</a></li>
            <li><a href="#">Design Services</a></li>
            <li><a href="#">Request Quote</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Contact Me</a></li>
        </ul>
        <ul class="ico-social">
            <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ico-vk.png" alt="мы вконтакте"/></a>
            </li>
            <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ico-youtobe.png"
                                 alt="канал youtobe"/></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ico-facebook.png" alt="мы на facebook"/></a>
            </li>
            <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ico-twitter.png" alt="наш twitter"/></a>
            </li>
        </ul>
    </div>
</div>
<div class="content-wrapper">
    <div class="content-main">

        <div class="content">

            <div id='slideshowHolder'>

                <img src="<?php bloginfo('template_url'); ?>/images/img1.jpg" alt=''/>

                <img src="<?php bloginfo('template_url'); ?>/images/img1.jpg" alt=''/>

                <img src="<?php bloginfo('template_url'); ?>/images/img1.jpg" alt=''/>

            </div>

            <div class="articles">

                <div class="articles-gen-img">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/post-img1.jpg" alt="Preview image"/></a>
                </div>
                <div class="articles-head">
                    <span class="articles-date"><img src="<?php bloginfo('template_url'); ?>/images/articles-autor.jpg"
                                                     alt="admin"/> <span>Admin</span> - Nov 28th, 2010</span>
                    <span class="articles-comments"><img
                            src="<?php bloginfo('template_url'); ?>/images/articles-comment.jpg" alt="commets"/> <a
                            href="#">10 комментариев</a></span>
                </div>

                <h1><a href="#">Thanksgiving greeting card PSD</a></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum malesuada orci a commodo.
                    Aenean dapibus urna quis nulla consequat sagittis. Quisque ut ultrices massa. Mauris felis felis,
                    rutrum sit amet vehicula ut, tempus quis lectus...</p>

                <p><a href="#">Read More</a></p>

            </div>

            <div class="pager">
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <span>of</span>
                <a href="#">75</a>
                <a href="#" class="prev-next">Next</a>
            </div>

        </div>

        <div class="sidebar-main">

            <div class="sidebar-widget">
                <div class="search-main">
                    <form action="" id="search-form" method="get">

                        <input class="search-txt" type="text" value="Поиск"
                               onBlur="if(this.value=='')this.value='Поиск'"
                               onFocus="if(this.value=='Поиск')this.value=''"/>
                        <input type="image" src="<?php bloginfo('template_url'); ?>/images/search-btn.jpg"/>

                    </form>
                </div>
            </div>

            <div class="sidebar-widget">
                <ul class="ads-main">
                    <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ads1.jpg" alt=""/></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ads2.jpg" alt=""/></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ads3.jpg" alt=""/></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ads4.jpg" alt=""/></a></li>
                </ul>
            </div>

            <div class="sidebar-widget">
                <h3>Категории</h3>

                <ul class="side-categories">
                    <li><a href="#">Backgrounds</a></li>
                    <li><a href="#">Brushes</a></li>
                    <li><a href="#">Design Articles</a></li>
                    <li><a href="#">Fonts</a></li>
                    <li><a href="#">Free PSD Files</a></li>
                    <li><a href="#">Icons</a></li>
                    <li><a href="#">Logos</a></li>
                    <li><a href="#">Patterns</a></li>
                    <li><a href="#">Textures</a></li>
                    <li><a href="#">Tools & Utilities</a></li>
                </ul>
                <ul class="side-categories">
                    <li><a href="#">Backgrounds</a></li>
                    <li><a href="#">Brushes</a></li>
                    <li><a href="#">Design Articles</a></li>
                    <li><a href="#">Fonts</a></li>
                    <li><a href="#">Free PSD Files</a></li>
                    <li><a href="#">Icons</a></li>
                    <li><a href="#">Logos</a></li>
                    <li><a href="#">Patterns</a></li>
                    <li><a href="#">Textures</a></li>
                    <li><a href="#">Tools & Utilities</a></li>
                </ul>

            </div>

            <div class="sidebar-widget">
                <h3>Последние записи</h3>
                <p class="latest-post">
                    <img src="<?php bloginfo('template_url'); ?>/images/latest-past1.jpg" alt=""/>
                    <a href="#">Thanksgiving greeting card PSD</a>
                </p>
                <p class="latest-post">
                    <img src="<?php bloginfo('template_url'); ?>/images/latest-past1.jpg" alt=""/>
                    <a href="#">Thanksgiving greeting card PSD</a>
                </p>
                <p class="latest-post">
                    <img src="<?php bloginfo('template_url'); ?>/images/latest-past1.jpg" alt=""/>
                    <a href="#">Thanksgiving greeting card PSD</a>
                </p>
                <p class="latest-post">
                    <img src="<?php bloginfo('template_url'); ?>/images/latest-past1.jpg" alt=""/>
                    <a href="#">Thanksgiving greeting card PSD</a>
                </p>
                <p class="latest-post">
                    <img src="<?php bloginfo('template_url'); ?>/images/latest-past1.jpg" alt=""/>
                    <a href="#">Thanksgiving greeting card PSD</a>
                </p>
                <p class="latest-post">
                    <img src="<?php bloginfo('template_url'); ?>/images/latest-past1.jpg" alt=""/>
                    <a href="#">Thanksgiving greeting card PSD</a>
                </p>

            </div>

            <div class="sidebar-widget">
                <div class="facebook">
                    <img src="<?php bloginfo('template_url'); ?>/images/facebook.jpg" alt=""/>
                </div>
            </div>

        </div>
    </div>

</div>
<div class="footer-info-wrapper">
    <div class="footer-info-main">
        <div class="footer-info">
            <h3>about</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut purus odio, quis rutrum nibh. Etiam nec
                tellus malesuada odio tincidunt fringilla quis vitae nisi. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Nullam fringilla malesuada convallis. Morbi laoreet volutpat rhoncus.</p>
        </div>
        <div class="footer-info">
            <h3>Browse</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Me</a></li>
                <li><a href="#">Design Services</a></li>
                <li><a href="#">Request Quote</a></li>
                <li><a href="#">Advertise</a></li>
                <li><a href="#">Contact Me</a></li>
            </ul>
        </div>
        <div class="footer-info">
            <h3>write for us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut purus odio, quis rutrum nibh. Etiam nec
                tellus malesuada odio tincidunt fringilla quis vitae nisi. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Nullam fringilla malesuada convallis. </p>
            <p><a href="#">Contact Us Now</a></p>
        </div>
    </div>
</div>
<div class="footer-copy">
    <p class="copy">Copyright © 2010 All Rights Reserved</p>
    <p class="by-st">Designed by <a href="#">GraphicsFuel.com</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Powered by <a href="#">Wordpress</a></p>
</div>
<script>
    $(document).ready(function () {
        $('#slideshowHolder').jqFancyTransitions({navigation: true, width: 594, height: 279});
    });
</script>
<?php wp_footer(); ?>
</body>
</html>