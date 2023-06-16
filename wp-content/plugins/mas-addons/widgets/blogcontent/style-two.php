<div class="post-content-wrap">

    <div class="post-thumbnail">
        <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail-wrapper">
                <a href="<?php echo esc_url(get_the_permalink()); ?>" class="post-link">
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('full'); ?>
                        <div class="post-category">
                        <?php 
                            $category = get_the_category();
                            if ( $category[0] ) {

                                ?>
                                    <span class="category-list"><?php echo esc_html($category[0]->cat_name); ?></span>
                                <?php
                                }
                            ?>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
    </div>


    <div class="post-content">

        <div class="post-top-meta">
            <span class="post-date"><?php echo get_the_date(); ?></span>
        </div>
        <?php printf('<a href="%s" ><h3 class="post-title">%s</h3></a>', get_the_permalink(), esc_html($title));
        echo 'yes' == $settings['show_excerpt'] ? sprintf('<p> %s </p>', esc_html($excerpt)) : ''; ?>
        <?php if ('yes' == $settings['show_readmore']) : ?>
            <div class="post-btn-wrap">
                <a class='post-btn' href="<?php the_permalink() ?>">
                    <?php if ('before' == $settings['icon_position'] && !empty($settings['btn_icon']['value'])) : ?>
                        <span class="icon-before btn-icon"><?php \Elementor\Icons_Manager::render_icon($settings['btn_icon'], ['aria-hidden' => 'true']) ?></span>
                    <?php endif; ?>
                    <span class="content"><?php echo esc_html($settings['readmore_text']); ?></span>
                    <?php if ('after' == $settings['icon_position'] && !empty($settings['btn_icon']['value'])) : ?>
                        <span class="icon-after btn-icon"><?php \Elementor\Icons_Manager::render_icon($settings['btn_icon'], ['aria-hidden' => 'true']) ?></span>
                    <?php endif; ?>
                </a>
            </div>
        <?php endif; ?>
        <div class="post-meta-bottom">
            <?php printf($bottom_meta); ?>
        </div>
    </div>


</div>