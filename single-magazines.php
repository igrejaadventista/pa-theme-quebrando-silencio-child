<?php
get_header();
global $post;
if (have_posts()) {
    the_post();
}
$next_post = get_next_post();
$prev_post = get_previous_post();

?>
<?php

get_template_part('template-parts/header', 'header');

?>


<div class="pa-content-container py-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <article class="col-12 col-md-8">

                <div class="row">
                    <?php
                    $revistas = get_field('magazines', $args['post']->ID);
                    foreach ($revistas as $revista) :
                    ?>
                        <div class="col-4 text-center mt-4">
                            <h3 class="card-title h5 pa-truncate-3 fw-bold"><?= $revista['title']; ?></h3>
                            <div class="ratio mt-3" style="--bs-aspect-ratio: 131%;">
                                <img class="img-fluid rounded" src="<?= $revista['image']; ?>" alt="<?= $revista['title']; ?>">
                            </div>

                            <a class="btn btn-primary mt-3 w-100 rounded" href="<?= $revista['url_download']; ?>" target="_blank" role="button"><?= __('Download', 'iasd') ?></a>
                        </div>

                    <?php
                    endforeach;
                    ?>




                </div>
                <div class="pa-break d-block my-5 py-2"></div>
                <footer class="mb-5">
                    <div class="pa-post-navigation row mt-4">
                        <div class="col-12 col-xl-6 order-xl-2 text-center mb-3">
                            <?php
                            require(get_template_directory() . '/components/parts/share.php');
                            ?>
                        </div>
                        <div class="pa-post-prev col-6 col-xl-3 order-xl-1 text-left">
                            <?php next_post_link('%link', '<i class="fas fa-arrow-left"></i> %title'); ?>
                        </div>
                        <div class="pa-post-next col-6 col-xl-3 order-xl-3 text-right">

                            <?php previous_post_link('%link', '%title <i class="fas fa-arrow-right"></i>'); ?>
                        </div>
                    </div>
                    <?php
                    if (comments_open()) {
                        comments_template();
                    }
                    ?>
                </footer>
            </article>
            <?php if (is_active_sidebar('single')) { ?>
                <aside class="col-md-4 d-none d-xl-block">
                    <?php dynamic_sidebar('single'); ?>
                </aside>
            <?php } ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>