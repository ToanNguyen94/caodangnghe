<?php get_header(); ?>

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

<?php if (have_posts()) : ?>
    <div class="post-list">
        <?php
        /* Start the Loop */
        while (have_posts()) :
            the_post();

            /*
				* Include the Post-Type-specific template for the content.
				* If you want to override this in a child theme, then include a file
				* called content-___.php (where ___ is the Post Type name) and that will be used instead.
				*/
        ?>

            <div class="post-item">
                <div class="post-item__inner">
                    <div class="container">
                        <?php get_template_part('template-parts/content', get_post_type()); ?>
                    </div>
                </div>
            </div>

        <?php
        endwhile;
        ?>
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

<?php get_footer(); ?>