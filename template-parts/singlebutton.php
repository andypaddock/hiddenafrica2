<section class="section-singlebutton">
    <div class="row <?php the_sub_field('column_size'); ?>">
        <?php 
$link = get_sub_field('single_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
        <a class="button" href="<?php echo esc_url( $link_url ); ?>"
            target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><i
                class="fa-light fa-chevron-right"></i></a>
        <?php endif; ?>

    </div>
</section>