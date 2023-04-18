<section class="no-results not-found">
    <div class="container">
        <div class="page-content page-search-notfound ">
            <h2 class="title"><?php esc_html_e('Nothing Found', 'xadventures'); ?></h2>
            <?php if (is_search()) : ?>
                <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'xadventures'); ?></p>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mx-auto">
                    <form role="search" method="get" id="searchform" class="searchForm" action="<?= home_url('/') ?>">
                        <input type="text" value="<?php get_search_query() ?>" name="s" id="s" placeholder="Nhập từ khóa tìm kiếm" />
                        <input type="submit" value=""></input>
                    </form>
                </div>
            <?php else : ?>
                <p><?php esc_html_e("It seems we can't find what you're looking for. Perhaps searching can help.", 'xadventures'); ?></p>
                <?php get_search_form(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>