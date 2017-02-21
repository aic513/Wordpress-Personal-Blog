<?php get_header();?>
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
       <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer();?>