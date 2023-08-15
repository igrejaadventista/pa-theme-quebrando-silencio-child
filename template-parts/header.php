<section class="pa-header py-3">
	<header class="container">
		<div class="row">
			<div class="col py-5">
				<?php
				$post_type_archive_link = get_post_type_archive_link(get_post_type());
				if ($post_type_archive_link) { ?>
					<a href="<?= $post_type_archive_link ?>"><span class="pa-tag rounded-1 px-3 py-1 d-table-cell"><?= __('Magazines', 'iasd'); ?></span></a>
				<?php
				}
				?>
				<h1 class="mt-2"><?= the_title() ?></h1>
			</div>
		</div>
	</header>
</section>