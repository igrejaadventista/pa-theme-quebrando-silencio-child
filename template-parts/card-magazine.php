<?php if (isset($args['post']) && !empty($args['post'])) :
    $revistas = get_field('magazines', $args['post']->ID);

?>
    <div class="col">

        <a href="<?= the_permalink() ?>" title="<?= the_title() ?>">
            <div class="card border-0">
                <div class="ratio" style="--bs-aspect-ratio: 131%;">
                    <figure class="figure m-xl-0 overflow-hidden">
                        <img class="figure-img img-fluid rounded m-0" src="<?= $revistas[0]['image'] ?>" alt="" />
                        <figcaption class="pa-img-tag figure-caption text-uppercase rounded-right pa-truncate-3">

                            <?= count($revistas) <= 1 ? count($revistas) . " Revista" : count($revistas) . " Revistas" ?>
                        </figcaption>
                    </figure>
                </div>
                <div class="card-body text text-center">
                    <h3 class="card-title h5 pa-truncate-3 fw-bold"><?= the_title() ?></h3>
                </div>
            </div>
        </a>
    </div>
<?php endif; ?>