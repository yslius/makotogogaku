<?php

class VkBlocksPostList {

	/**
	 * Return html to display latest post list.
	 *
	 * @param $name
	 * @param $attributes
	 *
	 * @return string
	 */
	public static function render_post_list( $attributes, $wp_query, $options_loop ) {

		if ( ! empty($attributes['className'] ) ){
			$options_loop['class_loop_outer'] .= ' '.$attributes['className'];
		}

		if ( ! isset( $wp_query ) || $wp_query === false || $wp_query === 'false' || $wp_query->posts === array() ) {
			return self::renderNoPost();
		}

		$options = array(
			'layout'                     => esc_html( $attributes['layout'] ),
			'slug'                       => '',
			'display_image'              => esc_html( $attributes['display_image'] ),
			'display_image_overlay_term' => esc_html( $attributes['display_image_overlay_term'] ),
			'display_excerpt'            => esc_html( $attributes['display_excerpt'] ),
			'display_author'             => esc_html( $attributes['display_author'] ),
			'display_date'               => esc_html( $attributes['display_date'] ),
			'display_new'                => esc_html( $attributes['display_new'] ),
			'display_taxonomies'         => esc_html( $attributes['display_taxonomies'] ),
			'display_btn'                => esc_html( $attributes['display_btn'] ),
			'image_default_url'          => VK_BLOCKS_URL . 'images/no-image.png',
			'overlay'                    => false,
			'new_text'                   => esc_html( $attributes['new_text'] ),
			'new_date'                   => esc_html( $attributes['new_date'] ),
			'btn_text'                   => esc_html( $attributes['btn_text'] ),
			'btn_align'                  => esc_html( $attributes['btn_align'] ),
			'col_xs'                     => esc_html( $attributes['col_xs'] ),
			'col_sm'                     => esc_html( $attributes['col_sm'] ),
			'col_md'                     => esc_html( $attributes['col_md'] ),
			'col_lg'                     => esc_html( $attributes['col_lg'] ),
			'col_xl'                     => esc_html( $attributes['col_xl'] ),
			'col_xxl'                     => esc_html( $attributes['col_xxl'] ),
			'class_outer'                => '',
			'class_title'                => '',
			'body_prepend'               => '',
			'body_append'                => '',
			'vkb_hidden'                 => $attributes['vkb_hidden'],
			'vkb_hidden_xxl'              => $attributes['vkb_hidden_xxl'],
			'vkb_hidden_xl'              => $attributes['vkb_hidden_xl'],
			'vkb_hidden_lg'              => $attributes['vkb_hidden_lg'],
			'vkb_hidden_md'              => $attributes['vkb_hidden_md'],
			'vkb_hidden_sm'              => $attributes['vkb_hidden_sm'],
			'vkb_hidden_xs'              => $attributes['vkb_hidden_xs'],
		);

		$elm = VK_Component_Posts::get_loop( $wp_query, $options, $options_loop );

		wp_reset_query();
		wp_reset_postdata();

		return $elm;
	}

	private function isArrayExist( $array ) {
		if ( ! $array ) {
			return false;
		}
		return true;
	}

	private static function format_terms( $isCheckedTerms ) {

		$return             = array();
		$return['relation'] = 'OR';

		foreach ( $isCheckedTerms as $key => $value ) {

			$term      = get_term( $value );
			$new_array = array(
				'taxonomy' => isset( $term->taxonomy ) ? $term->taxonomy : $key,
				'field'    => 'term_id',
				'terms'    => $value,
			);
			array_push( $return, $new_array );

		}
		return $return;
	}

	public static function get_loop_query( $attributes ) {

		$isCheckedPostType = json_decode( $attributes['isCheckedPostType'], true );

		$isCheckedTerms = json_decode( $attributes['isCheckedTerms'], true );

		if ( empty( $isCheckedPostType ) ) {
			return false;
		}

		$post__not_in = array();
		if ( ! empty( $attributes['selfIgnore'] ) ) {
			$post__not_in = array( get_the_ID() );
		}
		$offset = '';
		if ( ! empty( $attributes['offset'] ) ) {
			$offset = intval( $attributes['offset'] );
		}

		$args = array(
			'post_type'      => $isCheckedPostType,
			'tax_query'      => self::format_terms( $isCheckedTerms ),
			'paged'          => 1,
			// 0???????????????
			'posts_per_page' => intval( $attributes['numberPosts'] ),
			'order'          => $attributes['order'],
			'orderby'        => $attributes['orderby'],
			'offset'         => $offset,
			'post__not_in'   => $post__not_in,
		);
		return new WP_Query( $args );
	}

	public static function get_loop_query_child( $attributes ) {



		// ParentId?????????
		if ( isset( $attributes['selectId'] ) && $attributes['selectId'] !== 'false' ) {

			$selectId = ($attributes['selectId'] > 0)? $attributes['selectId']: get_the_ID();

			$post__not_in = array();
			if ( ! empty( $attributes['selfIgnore'] ) ) {
				$post__not_in = array( get_the_ID() );
			}

			$offset = '';
			if ( ! empty( $attributes['offset'] ) ) {
				$offset = intval( $attributes['offset'] );
			}

			$args = array(
				'post_type'      => 'page',
				'paged'          => 0,
				// 0???????????????
				'posts_per_page' => -1,
				'order'          => 'ASC',
				'orderby'        => 'menu_order',
				'post_parent'    => intval( $selectId ),
				'offset'         => $offset,
				'post__not_in'   => $post__not_in,
			);
			return new WP_Query( $args );

		} else {
			return false;
		}
	}

	public static function renderNoPost() {
		return '<div class="alert alert-warning text-center">' . __( 'No Post is selected', 'vk-blocks' ) . '</div>';
	}

}
