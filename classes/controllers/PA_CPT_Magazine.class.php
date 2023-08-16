<?php

use WordPlate\Acf\Fields\Image;
use WordPlate\Acf\Fields\Repeater;
use WordPlate\Acf\Fields\Text;
use WordPlate\Acf\Fields\Url;
use WordPlate\Acf\Location;

class PaCptMagazines
{

	public function __construct()
	{
		add_action('init', [$this, 'CreatePostType'], 10, 2);
		add_action('init', [$this, 'createACFFields']);
	}

	function CreatePostType()
	{
		$labels = array(
			'name'                  => __('Magazines', 'iasd'),
			'singular_name'         => __('Magazine', 'iasd'),
			'menu_name'             => __('Magazines', 'iasd'),
			'name_admin_bar'        => __('Magazines', 'iasd'),
			'add_new'               => __('Add New', 'iasd'),
			'add_new_item'          => __('Add New Item', 'iasd'),
			'new_item'              => __('New item', 'iasd'),
			'edit_item'             => __('Edit item', 'iasd'),
			'view_item'             => __('View item', 'iasd'),
			'all_items'             => __('All items', 'iasd'),
			'search_items'          => __('Search item', 'iasd'),
			'not_found'             => __('Not found.', 'iasd'),
			'not_found_in_trash'    => __('Not found in Trash.', 'iasd'),
		);
		$args = array(
			'label'                 => __('Magazine', 'iasd'),
			'labels'                => $labels,
			'supports'              => array('title'),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => sanitize_title(__('campaigns', 'iasd')),
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
			'show_in_rest'          => true,
			'rewrite'				=> array('slug' => sanitize_title(__('Magazines', 'iasd')))
		);
		register_post_type('magazines', $args);
	}

	function CreateACFFields()
	{
		register_extended_field_group([
			'title' => 'Revistas',
			'style' => 'default',
			'fields' => [
				Repeater::make(__('List', 'iasd'), 'magazines')
					->min(1)
					->layout('block')
					->collapsed('name')
					->required()
					->fields([
						Text::make(__('Titulo', 'iasd'), 'title'),
						Url::make(__('Link para download', 'iasd'), 'url_download'),
						Image::make(__('Image - Mobile', 'iasd'), 'image')
							->mimeTypes(['jpg', 'jpeg', 'png'])
							->library('all') // all or uploadedTo
							->returnFormat('url') // id, url or array (default)
							->previewSize('medium'), // thumbnail, medium or large
					])
			],
			'location' => [
				Location::if('post_type', 'magazines'),
			],
		]);
	}
}

$PaCptMagazines = new PaCptMagazines();
