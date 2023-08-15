<?php $sede = get_bloginfo( 'name' ); ?>

<div class="col-auto d-flex align-items-center pa-header-logo">
  <a href="<?= get_home_url(); ?>" class="w-auto h-100">
    <img src="<?= get_stylesheet_directory_uri() . "/assets/img/" . LANG . "/logo.svg" ?>" alt="<?= !empty($sede) ? $sede : '' ?>" title="<?= !empty($sede) ? $sede : '' ?>" class="h-100 w-auto pa-logo-iasd">
  </a>
</div>
