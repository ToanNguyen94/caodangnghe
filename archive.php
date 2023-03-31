<?php get_header(); ?>

<main id="primary" class="main site-main">
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">Giới thiệu</h1>
                        </div>
                        <!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="https://hnivc.edu.vn/"><i class="ti ti-home"></i>&nbsp;&nbsp;Trang chủ </a>
                            </span>

                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <a href="https://hnivc.edu.vn/gioi-thieu.html">Giới thiệu</a>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <div class="main-new">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="content-new">
                        <?php if (have_posts()) : ?>
                            <div class="post-list">
                                <?php
                                /* Start the Loop */
                                while (have_posts()) :
                                    the_post();
                                    get_template_part('template-parts/content', get_post_type());
                                endwhile;
                                ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php


                            the_posts_pagination([
                                'prev_next' => false,
                                'next_text' => false,
                            ]);
                        else :

                            get_template_part('template-parts/content', 'none');

                        endif;
?>

</main><!-- #main -->

<?php get_footer(); ?>