<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


//[oxsn_wp_query post_type="any" posts_per_page="-1" pagination="true"]
if ( ! function_exists ( 'oxsn_wp_query_shortcode' ) ) {

	add_shortcode('oxsn_wp_query', 'oxsn_wp_query_shortcode');
	function oxsn_wp_query_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(

			'author' => '',
			'author_name' => '',
			'author__in' => '',
			'author__not_in' => '',

			'cat' => '',
			'category_name' => '',
			'category__and' => '',
			'category__in' => '',
			'category__not_in' => '',

			'tag' => '',
			'tag_id' => '',
			'tag__and' => '',
			'tag__in' => '',
			'tag__not_in' => '',
			'tag_slug__and' => '',
			'tag_slug__in' => '',

			'tax_query_relation' => '',
			'tax_query_one_taxonomy' => '',
			'tax_query_one_field' => '',
			'tax_query_one_terms' => '',
			'tax_query_one_include_children' => '',
			'tax_query_one_operator' => '',
			'tax_query_two_taxonomy' => '',
			'tax_query_two_field' => '',
			'tax_query_two_terms' => '',
			'tax_query_two_include_children' => '',
			'tax_query_two_operator' => '',

			'p' => '',
			'name' => '',
			'page_id' => '',
			'pagename' => '',
			'post_parent' => '',
			'post_parent__in' => '',
			'post_parent__not_in' => '',
			'post__in' => '',
			'post__not_in' => '',
			'has_password' => '',

			'post_password' => '',
			'post_type' => 'any',

			'post_status' => '',

			'posts_per_page' => '-1',

			'posts_per_archive_page' => '',

			'pagination' => '',

			'offset' => '',

			'order' => '',
			'orderby' => '',

			'year' => '',
			'monthnum' => '',
			'w' => '',
			'day' => '',
			'hour' => '',
			'minute' => '',
			'second' => '',
			'm' => '',

			'date_query_year' => '',
			'date_query_month' => '',
			'date_query_week' => '',
			'date_query_day' => '',
			'date_query_hour' => '',
			'date_query_minute' => '',
			'date_query_second' => '',
			'date_query_after' => '',
			'date_query_after_year' => '',
			'date_query_after_month' => '',
			'date_query_after_day' => '',
			'date_query_before' => '',
			'date_query_before_year' => '',
			'date_query_before_month' => '',
			'date_query_before_day' => '',
			'date_query_inclusive' => '',
			'date_query_compare' => '',
			'date_query_column' => '',
			'date_query_relation' => '',

			'meta_key' => '',
			'meta_value' => '',
			'meta_value_num' => '',
			'meta_compare' => '',

			'meta_query_relation' => '',
			'meta_query_one_key' => '',
			'meta_query_one_value' => '',
			'meta_query_one_type' => '',
			'meta_query_one_compare' => '',
			'meta_query_two_key' => '',
			'meta_query_two_value' => '',
			'meta_query_two_type' => '',
			'meta_query_two_compare' => '',

			'perm' => '',

			's' => '',
		), $atts );
		
		$oxsn_wp_query_class = esc_attr($a['class']);

		$args = array();

		$oxsn_wp_query_author = esc_attr($a['author']);
		if ($oxsn_wp_query_author != '') :

			$args['author'] = $oxsn_wp_query_author;

		endif;
		$oxsn_wp_query_author_name = esc_attr($a['author_name']);
		if ($oxsn_wp_query_author_name != '') :

			$args['author_name'] = $oxsn_wp_query_author_name;

		endif;
		$oxsn_wp_query_author__in = esc_attr($a['author__in']);
		if ($oxsn_wp_query_author__in != '') :

			$oxsn_wp_query_author__in = explode(',', $oxsn_wp_query_author__in);
			$args['author__in'] = $oxsn_wp_query_author__in;

		endif;
		$oxsn_wp_query_author__not_in = esc_attr($a['author__not_in']);
		if ($oxsn_wp_query_author__not_in != '') :

			$oxsn_wp_query_author__not_in = explode(',', $oxsn_wp_query_author__not_in);
			$args['author__not_in'] = $oxsn_wp_query_author__not_in;

		endif;

		$oxsn_wp_query_cat = esc_attr($a['cat']);
		if ($oxsn_wp_query_cat != '') :

			$args['cat'] = $oxsn_wp_query_cat;

		endif;
		$oxsn_wp_query_category_name = esc_attr($a['category_name']);
		if ($oxsn_wp_query_category_name != '') :

			$args['category_name'] = $oxsn_wp_query_category_name;

		endif;
		$oxsn_wp_query_category__and = esc_attr($a['category__and']);
		if ($oxsn_wp_query_category__and != '') :

			$oxsn_wp_query_category__and = explode(',', $oxsn_wp_query_category__and);
			$args['category__and'] = $oxsn_wp_query_category__and;

		endif;
		$oxsn_wp_query_category__in = esc_attr($a['category__in']);
		if ($oxsn_wp_query_category__in != '') :

			$oxsn_wp_query_category__in = explode(',', $oxsn_wp_query_category__in);
			$args['category__in'] = $oxsn_wp_query_category__in;

		endif;
		$oxsn_wp_query_category__not_in = esc_attr($a['category__not_in']);
		if ($oxsn_wp_query_category__not_in != '') :

			$oxsn_wp_query_category__not_in = explode(',', $oxsn_wp_query_category__not_in);
			$args['category__not_in'] = $oxsn_wp_query_category__not_in;

		endif;

		$oxsn_wp_query_tag = esc_attr($a['tag']);
		if ($oxsn_wp_query_tag != '') :

			$args['tag'] = $oxsn_wp_query_tag;

		endif;
		$oxsn_wp_query_tag_id = esc_attr($a['tag_id']);
		if ($oxsn_wp_query_tag_id != '') :

			$args['tag_id'] = $oxsn_wp_query_tag_id;

		endif;
		$oxsn_wp_query_tag__and = esc_attr($a['tag__and']);
		if ($oxsn_wp_query_tag__and != '') :

			$oxsn_wp_query_tag__and = explode(',', $oxsn_wp_query_tag__and);
			$args['tag__and'] = $oxsn_wp_query_tag__and;

		endif;
		$oxsn_wp_query_tag__in = esc_attr($a['tag__in']);
		if ($oxsn_wp_query_tag__in != '') :

			$oxsn_wp_query_tag__in = explode(',', $oxsn_wp_query_tag__in);
			$args['tag__in'] = $oxsn_wp_query_tag__in;

		endif;
		$oxsn_wp_query_tag__not_in = esc_attr($a['tag__not_in']);
		if ($oxsn_wp_query_tag__not_in != '') :

			$oxsn_wp_query_tag__not_in = explode(',', $oxsn_wp_query_tag__not_in);
			$args['tag__not_in'] = $oxsn_wp_query_tag__not_in;

		endif;
		$oxsn_wp_query_tag_slug__and = esc_attr($a['tag_slug__and']);
		if ($oxsn_wp_query_tag_slug__and != '') :

			$oxsn_wp_query_tag_slug__and = explode(',', $oxsn_wp_query_tag_slug__and);
			$args['tag_slug__and'] = $oxsn_wp_query_tag_slug__and;

		endif;
		$oxsn_wp_query_tag_slug__in = esc_attr($a['tag_slug__in']);
		if ($oxsn_wp_query_tag_slug__in != '') :

			$oxsn_wp_query_tag_slug__in = explode(',', $oxsn_wp_query_tag_slug__in);
			$args['tag_slug__in'] = $oxsn_wp_query_tag_slug__in;

		endif;

		$oxsn_wp_query_tax_query = array();
		$oxsn_wp_query_tax_query_array_one = array();
		$oxsn_wp_query_tax_query_array_two = array();
		$oxsn_wp_query_tax_query_relation = esc_attr($a['tax_query_relation']);
		$oxsn_wp_query_tax_query_one_taxonomy = esc_attr($a['tax_query_one_taxonomy']);
		$oxsn_wp_query_tax_query_one_field = esc_attr($a['tax_query_one_field']);
		$oxsn_wp_query_tax_query_one_terms = esc_attr($a['tax_query_one_terms']);
		$oxsn_wp_query_tax_query_one_include_children = esc_attr($a['tax_query_one_include_children']);
		$oxsn_wp_query_tax_query_one_operator = esc_attr($a['tax_query_one_operator']);
		$oxsn_wp_query_tax_query_two_taxonomy = esc_attr($a['tax_query_two_taxonomy']);
		$oxsn_wp_query_tax_query_two_field = esc_attr($a['tax_query_two_field']);
		$oxsn_wp_query_tax_query_two_terms = esc_attr($a['tax_query_two_terms']);
		$oxsn_wp_query_tax_query_two_include_children = esc_attr($a['tax_query_two_include_children']);
		$oxsn_wp_query_tax_query_two_operator = esc_attr($a['tax_query_two_operator']);
		if ($oxsn_wp_query_tax_query_relation != '') :

			$oxsn_wp_query_tax_query['relation'] = $oxsn_wp_query_tax_query_relation;

		endif;
		if ($oxsn_wp_query_tax_query_one_taxonomy != '') :

			$oxsn_wp_query_tax_query_array_one['taxonomy'] = $oxsn_wp_query_tax_query_one_taxonomy;

		endif;
		if ($oxsn_wp_query_tax_query_one_field != '') :

			$oxsn_wp_query_tax_query_array_one['field'] = $oxsn_wp_query_tax_query_one_field;

		endif;
		if ($oxsn_wp_query_tax_query_one_terms != '') :

			$oxsn_wp_query_tax_query_one_terms = explode(',', $oxsn_wp_query_tax_query_one_terms);
			$oxsn_wp_query_tax_query_array_one['terms'] = $oxsn_wp_query_tax_query_one_terms;

		endif;
		if ($oxsn_wp_query_tax_query_one_include_children != '') :

			$oxsn_wp_query_tax_query_array_one['include_children'] = $oxsn_wp_query_tax_query_one_include_children;

		endif;
		if ($oxsn_wp_query_tax_query_one_operator != '') :

			$oxsn_wp_query_tax_query_array_one['operator'] = $oxsn_wp_query_tax_query_one_operator;

		endif;
		if ($oxsn_wp_query_tax_query_two_taxonomy != '') :

			$oxsn_wp_query_tax_query_array_two['taxonomy'] = $oxsn_wp_query_tax_query_two_taxonomy;

		endif;
		if ($oxsn_wp_query_tax_query_two_field != '') :

			$oxsn_wp_query_tax_query_array_two['field'] = $oxsn_wp_query_tax_query_two_field;

		endif;
		if ($oxsn_wp_query_tax_query_two_terms != '') :

			$oxsn_wp_query_tax_query_two_terms = explode(',', $oxsn_wp_query_tax_query_two_terms);
			$oxsn_wp_query_tax_query_array_two['terms'] = $oxsn_wp_query_tax_query_two_terms;

		endif;
		if ($oxsn_wp_query_tax_query_two_include_children != '') :

			$oxsn_wp_query_tax_query_array_two['include_children'] = $oxsn_wp_query_tax_query_two_include_children;

		endif;
		if ($oxsn_wp_query_tax_query_two_operator != '') :

			$oxsn_wp_query_tax_query_array_two['operator'] = $oxsn_wp_query_tax_query_two_operator;

		endif;
		if ($oxsn_wp_query_tax_query_one_taxonomy != '' && $oxsn_wp_query_tax_query_two_taxonomy != '') :

			array_push($oxsn_wp_query_tax_query, $oxsn_wp_query_tax_query_array_one, $oxsn_wp_query_tax_query_array_two);
			$args['tax_query'] = $oxsn_wp_query_tax_query;

		elseif ($oxsn_wp_query_tax_query_one_taxonomy != '') :

			array_push($oxsn_wp_query_tax_query, $oxsn_wp_query_tax_query_array_one);
			$args['tax_query'] = $oxsn_wp_query_tax_query;

		elseif ($oxsn_wp_query_tax_query_two_taxonomy != '') :

			array_push($oxsn_wp_query_tax_query, $oxsn_wp_query_tax_query_array_two);
			$args['tax_query'] = $oxsn_wp_query_tax_query;

		endif;

		$oxsn_wp_query_p = esc_attr($a['p']);
		if ($oxsn_wp_query_p != '') :

			$args['p'] = $oxsn_wp_query_p;

		endif;
		$oxsn_wp_query_name = esc_attr($a['name']);
		if ($oxsn_wp_query_name != '') :

			$args['name'] = $oxsn_wp_query_name;

		endif;
		$oxsn_wp_query_page_id = esc_attr($a['page_id']);
		if ($oxsn_wp_query_page_id != '') :

			$args['page_id'] = $oxsn_wp_query_page_id;

		endif;
		$oxsn_wp_query_pagename = esc_attr($a['pagename']);
		if ($oxsn_wp_query_pagename != '') :

			$args['pagename'] = $oxsn_wp_query_pagename;

		endif;
		$oxsn_wp_query_post_parent = esc_attr($a['post_parent']);
		if ($oxsn_wp_query_post_parent != '') :

			$args['post_parent'] = $oxsn_wp_query_post_parent;

		endif;
		$oxsn_wp_query_post_parent__in = esc_attr($a['post_parent__in']);
		if ($oxsn_wp_query_post_parent__in != '') :

			$oxsn_wp_query_post_parent__in = explode(',', $oxsn_wp_query_post_parent__in);
			$args['post_parent__in'] = $oxsn_wp_query_post_parent__in;

		endif;
		$oxsn_wp_query_post_parent__not_in = esc_attr($a['post_parent__not_in']);
		if ($oxsn_wp_query_post_parent__not_in != '') :

			$oxsn_wp_query_post_parent__not_in = explode(',', $oxsn_wp_query_post_parent__not_in);
			$args['post_parent__not_in'] = $oxsn_wp_query_post_parent__not_in;

		endif;
		$oxsn_wp_query_post__in = esc_attr($a['post__in']);
		if ($oxsn_wp_query_post__in != '') :

			$oxsn_wp_query_post__in = explode(',', $oxsn_wp_query_post__in);
			$args['post__in'] = $oxsn_wp_query_post__in;

		endif;
		$oxsn_wp_query_post__not_in = esc_attr($a['post__not_in']);
		if ($oxsn_wp_query_post__not_in != '') :

			$oxsn_wp_query_post__not_in = explode(',', $oxsn_wp_query_post__not_in);
			$args['post__not_in'] = $oxsn_wp_query_post__not_in;

		endif;

		$oxsn_wp_query_has_password = esc_attr($a['has_password']);
		if ($oxsn_wp_query_has_password != '') :

			$args['has_password'] = $oxsn_wp_query_has_password;

		endif;
		$oxsn_wp_query_post_password = esc_attr($a['post_password']);
		if ($oxsn_wp_query_post_password != '') :

			$args['post_password'] = $oxsn_wp_query_post_password;

		endif;

		$oxsn_wp_query_post_type = esc_attr($a['post_type']);
		if ($oxsn_wp_query_post_type != '') :

			$oxsn_wp_query_post_type = explode(',', $oxsn_wp_query_post_type);
			$args['post_type'] = $oxsn_wp_query_post_type;

		endif;

		$oxsn_wp_query_post_status = esc_attr($a['post_status']);
		if ($oxsn_wp_query_post_status != '') :

			$oxsn_wp_query_post_status = explode(',', $oxsn_wp_query_post_status);
			$args['post_status'] = $oxsn_wp_query_post_status;

		endif;

		$oxsn_wp_query_posts_per_page = esc_attr($a['posts_per_page']);
		if ($oxsn_wp_query_posts_per_page != '') :

			$args['posts_per_page'] = $oxsn_wp_query_posts_per_page;

		endif;

		$oxsn_wp_query_posts_per_archive_page = esc_attr($a['posts_per_archive_page']);
		if ($oxsn_wp_query_posts_per_archive_page != '') :

			$args['posts_per_archive_page'] = $oxsn_wp_query_posts_per_archive_page;

		endif;

		$oxsn_wp_query_pagination = esc_attr($a['pagination']);
		if ($oxsn_wp_query_pagination == 'true') :

			$args['paged'] = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

		endif;

		$oxsn_wp_query_offset = esc_attr($a['offset']);
		if ($oxsn_wp_query_offset != '') :

			$args['offset'] = $oxsn_wp_query_offset;

		endif;

		$oxsn_wp_query_order = esc_attr($a['order']);
		if ($oxsn_wp_query_order != '') :

			$args['order'] = $oxsn_wp_query_order;

		endif;
		$oxsn_wp_query_orderby = esc_attr($a['orderby']);
		if ($oxsn_wp_query_orderby != '') :

			$args['orderby'] = $oxsn_wp_query_orderby;

		endif;

		$oxsn_wp_query_year = esc_attr($a['year']);
		if ($oxsn_wp_query_year != '') :

			$args['year'] = $oxsn_wp_query_year;

		endif;
		$oxsn_wp_query_monthnum = esc_attr($a['monthnum']);
		if ($oxsn_wp_query_monthnum != '') :

			$args['monthnum'] = $oxsn_wp_query_monthnum;

		endif;
		$oxsn_wp_query_w = esc_attr($a['w']);
		if ($oxsn_wp_query_w != '') :

			$args['w'] = $oxsn_wp_query_w;

		endif;
		$oxsn_wp_query_day = esc_attr($a['day']);
		if ($oxsn_wp_query_day != '') :

			$args['day'] = $oxsn_wp_query_day;

		endif;
		$oxsn_wp_query_hour = esc_attr($a['hour']);
		if ($oxsn_wp_query_hour != '') :

			$args['hour'] = $oxsn_wp_query_hour;

		endif;
		$oxsn_wp_query_minute = esc_attr($a['minute']);
		if ($oxsn_wp_query_minute != '') :

			$args['minute'] = $oxsn_wp_query_minute;

		endif;
		$oxsn_wp_query_second = esc_attr($a['second']);
		if ($oxsn_wp_query_second != '') :

			$args['second'] = $oxsn_wp_query_second;

		endif;
		$oxsn_wp_query_m = esc_attr($a['m']);
		if ($oxsn_wp_query_m != '') :

			$args['m'] = $oxsn_wp_query_m;

		endif;

		$oxsn_wp_query_date_query = array();
		$oxsn_wp_query_date_query_array_after = array();
		$oxsn_wp_query_date_query_array_before = array();
		$oxsn_wp_query_date_query_year = esc_attr($a['date_query_year']);
		$oxsn_wp_query_date_query_month = esc_attr($a['date_query_month']);
		$oxsn_wp_query_date_query_week = esc_attr($a['date_query_week']);
		$oxsn_wp_query_date_query_day = esc_attr($a['date_query_day']);
		$oxsn_wp_query_date_query_hour = esc_attr($a['date_query_hour']);
		$oxsn_wp_query_date_query_minute = esc_attr($a['date_query_minute']);
		$oxsn_wp_query_date_query_second = esc_attr($a['date_query_second']);
		$oxsn_wp_query_date_query_after_year = esc_attr($a['date_query_after_year']);
		$oxsn_wp_query_date_query_after_month = esc_attr($a['date_query_after_month']);
		$oxsn_wp_query_date_query_after_day = esc_attr($a['date_query_after_day']);
		$oxsn_wp_query_date_query_before_year = esc_attr($a['date_query_before_year']);
		$oxsn_wp_query_date_query_before_month = esc_attr($a['date_query_before_month']);
		$oxsn_wp_query_date_query_before_day = esc_attr($a['date_query_before_day']);
		$oxsn_wp_query_date_query_inclusive = esc_attr($a['date_query_inclusive']);
		$oxsn_wp_query_date_query_compare = esc_attr($a['date_query_compare']);
		$oxsn_wp_query_date_query_column = esc_attr($a['date_query_column']);
		$oxsn_wp_query_date_query_relation = esc_attr($a['date_query_relation']);
		if ($oxsn_wp_query_date_query_year != '') :

			$oxsn_wp_query_date_query['year'] = $oxsn_wp_query_date_query_year;

		endif;
		if ($oxsn_wp_query_date_query_month != '') :

			$oxsn_wp_query_date_query['month'] = $oxsn_wp_query_date_query_month;

		endif;
		if ($oxsn_wp_query_date_query_week != '') :

			$oxsn_wp_query_date_query['week'] = $oxsn_wp_query_date_query_week;

		endif;
		if ($oxsn_wp_query_date_query_day != '') :

			$oxsn_wp_query_date_query['day'] = $oxsn_wp_query_date_query_day;

		endif;
		if ($oxsn_wp_query_date_query_hour != '') :

			$oxsn_wp_query_date_query['hour'] = $oxsn_wp_query_date_query_hour;

		endif;
		if ($oxsn_wp_query_date_query_minute != '') :

			$oxsn_wp_query_date_query['minute'] = $oxsn_wp_query_date_query_minute;

		endif;
		if ($oxsn_wp_query_date_query_second != '') :

			$oxsn_wp_query_date_query['second'] = $oxsn_wp_query_date_query_second;

		endif;
		if ($oxsn_wp_query_date_query_after_year != '') :

			$oxsn_wp_query_date_query_array_after['year'] = $oxsn_wp_query_date_query_after_year;

		endif;
		if ($oxsn_wp_query_date_query_after_month != '') :

			$oxsn_wp_query_date_query_array_after['month'] = $oxsn_wp_query_date_query_after_month;

		endif;
		if ($oxsn_wp_query_date_query_after_day != '') :

			$oxsn_wp_query_date_query_array_after['day'] = $oxsn_wp_query_date_query_after_day;

		endif;
		if ($oxsn_wp_query_date_query_before_year != '') :

			$oxsn_wp_query_date_query_array_before['year'] = $oxsn_wp_query_date_query_before_year;

		endif;
		if ($oxsn_wp_query_date_query_before_month != '') :

			$oxsn_wp_query_date_query_array_before['month'] = $oxsn_wp_query_date_query_before_month;

		endif;
		if ($oxsn_wp_query_date_query_before_day != '') :

			$oxsn_wp_query_date_query_array_before['day'] = $oxsn_wp_query_date_query_before_day;

		endif;

		if ($oxsn_wp_query_date_query_inclusive != '') :

			$oxsn_wp_query_date_query['inclusive'] = $oxsn_wp_query_date_query_inclusive;

		endif;
		if ($oxsn_wp_query_date_query_compare != '') :

			$oxsn_wp_query_date_query['compare'] = $oxsn_wp_query_date_query_compare;

		endif;
		if ($oxsn_wp_query_date_query_column != '') :

			$oxsn_wp_query_date_query['column'] = $oxsn_wp_query_date_query_column;

		endif;
		if ($oxsn_wp_query_date_query_relation != '') :

			$oxsn_wp_query_date_query['relation'] = $oxsn_wp_query_date_query_relation;

		endif;
		if (!empty($oxsn_wp_query_date_query_array_after) && !empty($oxsn_wp_query_date_query_array_before)) :

			$oxsn_wp_query_date_query['after'] = $oxsn_wp_query_date_query_array_after;
			$oxsn_wp_query_date_query['before'] = $oxsn_wp_query_date_query_array_before;
			$args['date_query'] = array($oxsn_wp_query_date_query);

		elseif (!empty($oxsn_wp_query_date_query_array_after)) :

			$oxsn_wp_query_date_query['after'] = $oxsn_wp_query_date_query_array_after;
			$args['date_query'] = array($oxsn_wp_query_date_query);

		elseif (!empty($oxsn_wp_query_date_query_array_before)) :

			$oxsn_wp_query_date_query['before'] = $oxsn_wp_query_date_query_array_before;
			$args['date_query'] = array($oxsn_wp_query_date_query);

		elseif (!empty($oxsn_wp_query_date_query)) :

			$args['date_query'] = array($oxsn_wp_query_date_query);

		endif;

		$oxsn_wp_query_meta_key = esc_attr($a['meta_key']);
		if ($oxsn_wp_query_meta_key != '') :

			$args['meta_key'] = $oxsn_wp_query_meta_key;

		endif;
		$oxsn_wp_query_meta_value = esc_attr($a['meta_value']);
		if ($oxsn_wp_query_meta_value != '') :

			$args['meta_value'] = $oxsn_wp_query_meta_value;

		endif;
		$oxsn_wp_query_meta_value_num = esc_attr($a['meta_value_num']);
		if ($oxsn_wp_query_meta_value_num != '') :

			$args['meta_value_num'] = $oxsn_wp_query_meta_value_num;

		endif;
		$oxsn_wp_query_meta_compare = esc_attr($a['meta_compare']);
		if ($oxsn_wp_query_meta_compare != '') :

			$args['meta_compare'] = $oxsn_wp_query_meta_compare;

		endif;

		$oxsn_wp_query_meta_query = array();
		$oxsn_wp_query_meta_query_array_one = array();
		$oxsn_wp_query_meta_query_array_two = array();
		$oxsn_wp_query_meta_query_relation = esc_attr($a['meta_query_relation']);
		$oxsn_wp_query_meta_query_one_key = esc_attr($a['meta_query_one_key']);
		$oxsn_wp_query_meta_query_one_value = esc_attr($a['meta_query_one_value']);
		$oxsn_wp_query_meta_query_one_type = esc_attr($a['meta_query_one_type']);
		$oxsn_wp_query_meta_query_one_compare = esc_attr($a['meta_query_one_compare']);
		$oxsn_wp_query_meta_query_two_key = esc_attr($a['meta_query_two_key']);
		$oxsn_wp_query_meta_query_two_value = esc_attr($a['meta_query_two_value']);
		$oxsn_wp_query_meta_query_two_type = esc_attr($a['meta_query_two_type']);
		$oxsn_wp_query_meta_query_two_compare = esc_attr($a['meta_query_two_compare']);
		if ($oxsn_wp_query_meta_query_relation != '') :

			$oxsn_wp_query_meta_query['relation'] = $oxsn_wp_query_meta_query_relation;

		endif;
		if ($oxsn_wp_query_meta_query_one_key != '') :

			$oxsn_wp_query_meta_query_array_one['key'] = $oxsn_wp_query_meta_query_one_key;

		endif;
		if ($oxsn_wp_query_meta_query_one_value != '') :

			$oxsn_wp_query_meta_query_array_one['value'] = $oxsn_wp_query_meta_query_one_value;

		endif;
		if ($oxsn_wp_query_meta_query_one_type != '') :

			$oxsn_wp_query_meta_query_array_one['type'] = $oxsn_wp_query_meta_query_one_type;

		endif;
		if ($oxsn_wp_query_meta_query_one_compare != '') :

			$oxsn_wp_query_meta_query_array_one['compare'] = $oxsn_wp_query_meta_query_one_compare;

		endif;
		if ($oxsn_wp_query_meta_query_two_key != '') :

			$oxsn_wp_query_meta_query_array_two['key'] = $oxsn_wp_query_meta_query_two_key;

		endif;
		if ($oxsn_wp_query_meta_query_two_value != '') :

			$oxsn_wp_query_meta_query_array_two['value'] = $oxsn_wp_query_meta_query_two_value;

		endif;
		if ($oxsn_wp_query_meta_query_two_type != '') :

			$oxsn_wp_query_meta_query_array_two['type'] = $oxsn_wp_query_meta_query_two_type;

		endif;
		if ($oxsn_wp_query_meta_query_two_compare != '') :

			$oxsn_wp_query_meta_query_array_two['compare'] = $oxsn_wp_query_meta_query_two_compare;

		endif;
		if ($oxsn_wp_query_meta_query_one_key != '' && $oxsn_wp_query_meta_query_two_key != '') :

			array_push($oxsn_wp_query_meta_query, $oxsn_wp_query_meta_query_array_one, $oxsn_wp_query_meta_query_array_two);
			$args['meta_query'] = $oxsn_wp_query_meta_query;

		elseif ($oxsn_wp_query_meta_query_one_key != '') :

			array_push($oxsn_wp_query_meta_query, $oxsn_wp_query_meta_query_array_one);
			$args['meta_query'] = $oxsn_wp_query_meta_query;

		elseif ($oxsn_wp_query_meta_query_two_key != '') :

			array_push($oxsn_wp_query_meta_query, $oxsn_wp_query_meta_query_array_two);
			$args['meta_query'] = $oxsn_wp_query_meta_query;

		endif;

		$oxsn_wp_query_perm = esc_attr($a['perm']);
		if ($oxsn_wp_query_perm != '') :

			$args['perm'] = $oxsn_wp_query_perm;

		endif;

		$oxsn_wp_query_s = esc_attr($a['s']);
		if ($oxsn_wp_query_s != '') :

			$args['s'] = $oxsn_wp_query_s;

		endif;
		
		$oxsn_wp_query = new WP_Query( $args );
		$output = '';

		while ( $oxsn_wp_query->have_posts() ) : $oxsn_wp_query->the_post();
			$output .=
			do_shortcode($content);
		endwhile;

		if ($oxsn_wp_query_pagination == 'true') :
			$big = 999999999;
			$pagination_content = 
			'<div class="pagination">';
			$pagination_content .=  
			paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $oxsn_wp_query->max_num_pages
			) );	
			$pagination_content .= 
			'</div>';
		else :
			$pagination_content = '';
		endif;

		$output .= $pagination_content;

		$output .= '';

		wp_reset_postdata();
		return $output;

	}

}

//[oxsn_permalink_query class="" page_id=""]
if ( ! function_exists ( 'oxsn_permalink_query_shortcode' ) ) {
	
	add_shortcode('oxsn_permalink_query', 'oxsn_permalink_query_shortcode');
	function oxsn_permalink_query_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(
			'page_id' => '',
			'class' => '',
		), $atts );

		$oxsn_permalink_query_page_id = esc_attr($a['page_id']);
		$oxsn_permalink_query_class = esc_attr($a['class']);
		
		if ($oxsn_permalink_query_page_id != '') :

			$oxsn_permalink_query = get_permalink($oxsn_permalink_query_page_id);

		else :

			$oxsn_permalink_query = get_permalink();

		endif;

		$oxsn_permalink_query = '<a href="' . $oxsn_permalink_query . '" class="' . $oxsn_permalink_query_class . '">' . do_shortcode($content) . '</a>';
		
		return $oxsn_permalink_query;

	}

}

//[oxsn_featured_image_query class="" page_id=""]
if ( ! function_exists ( 'oxsn_featured_image_query_shortcode' ) ) {
	
	add_shortcode('oxsn_featured_image_query', 'oxsn_featured_image_query_shortcode');
	function oxsn_featured_image_query_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(
			'class' => '',
			'img_size' => 'thumbnail',
			'page_id' => '',
		), $atts );

		$oxsn_featured_image_query_page_id = esc_attr($a['page_id']);
		$oxsn_featured_image_query_img_size = esc_attr($a['img_size']);
		$oxsn_featured_image_query_class = esc_attr($a['class']);

		if ($oxsn_featured_image_query_page_id != '') {
			$url = wp_get_attachment_image_src( get_post_thumbnail_id($oxsn_featured_image_query_page_id), $oxsn_featured_image_query_img_size ); 
			$oxsn_featured_image_query_url = $url[0];
		} else {
			$url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $oxsn_featured_image_query_img_size ); 
			$oxsn_featured_image_query_url = $url[0];
		}

		$oxsn_featured_image_query =
		'<img src="' .
		$oxsn_featured_image_query_url .
		'" class="oxsn_featured_image ' .
		$oxsn_featured_image_query_class .
		'"/>';

		return $oxsn_featured_image_query;

	}

}

//[oxsn_date_query format="F jS, Y" page_id=""]
if ( ! function_exists ( 'oxsn_date_query_shortcode' ) ) {

	add_shortcode('oxsn_date_query', 'oxsn_date_query_shortcode');
	function oxsn_date_query_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(
			'page_id' => '',
			'format' => 'F jS, Y',
		), $atts );

		$oxsn_date_query_page_id = esc_attr($a['page_id']);
		$oxsn_date_query_format = esc_attr($a['format']);
		
		if ($oxsn_date_query_page_id != '') :

			$oxsn_date_query = get_the_time($oxsn_date_query_format, $oxsn_date_query_page_id);

		else :

			$oxsn_date_query = get_the_time($oxsn_date_query_format);

		endif;
		
		return $oxsn_date_query;
		
	}

}

//[oxsn_id_query]
if ( ! function_exists ( 'oxsn_id_query_shortcode' ) ) {

	add_shortcode('oxsn_id_query', 'oxsn_id_query_shortcode');
	function oxsn_id_query_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(

		), $atts );

		$oxsn_id_query = get_the_ID();
		
		return $oxsn_id_query;
		
	}

}

//[oxsn_category_query separator=", " parents="" page_id=""]
if ( ! function_exists ( 'oxsn_category_query_shortcode' ) ) {

	add_shortcode('oxsn_category_query', 'oxsn_category_query_shortcode');
	function oxsn_category_query_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(
			'page_id' => '',
			'separator' => ', ',
			'parents' => '',
		), $atts );

		$oxsn_category_query_page_id = esc_attr($a['page_id']);
		$oxsn_category_query_separator = esc_attr($a['separator']);
		$oxsn_category_query_parents = esc_attr($a['parents']);
		
		if ($oxsn_category_query_page_id != '') :

			$oxsn_category_query = get_the_category_list($oxsn_category_query_separator, $oxsn_category_query_parents, $oxsn_category_query_page_id);

		else :

			$oxsn_category_query = get_the_category_list($oxsn_category_query_separator, $oxsn_category_query_parents);

		endif;
		
		return $oxsn_category_query;
		
	}

}

//[oxsn_tag_query seperator=", " page_id=""]
if ( ! function_exists ( 'oxsn_tag_query_shortcode' ) ) {

	add_shortcode('oxsn_tag_query', 'oxsn_tag_query_shortcode');
	function oxsn_tag_query_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(
			'page_id' => '',
			'seperator' => ', ',
		), $atts );

		$oxsn_tag_query_page_id = esc_attr($a['page_id']);
		$oxsn_tag_query_seperator = esc_attr($a['seperator']);
		
		if ($oxsn_tag_query_page_id != '') :

			$oxsn_tag_query_tags = get_the_tags($oxsn_tag_query_page_id);

		else :

			$oxsn_tag_query_tags = get_the_tags();

		endif;
		
		if ($oxsn_tag_query_tags) :

			$oxsn_tag_query_tags_last_check = $oxsn_tag_query_tags;

			$oxsn_tag_query = '';

			foreach($oxsn_tag_query_tags as $tag) :

				$oxsn_tag_query .= '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';

				if (next($oxsn_tag_query_tags_last_check)) :

					$oxsn_tag_query .= $oxsn_tag_query_seperator; 

				endif;
			
			endforeach;

		endif;

		return $oxsn_tag_query;
		
	}

}

//[oxsn_title_query characters="35" page_id=""]
if ( ! function_exists ( 'oxsn_title_query_shortcode' ) ) {

	add_shortcode('oxsn_title_query', 'oxsn_title_query_shortcode');
	function oxsn_title_query_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(
			'page_id' => '',
			'characters' => '35',
		), $atts );

		$oxsn_title_query_page_id = esc_attr($a['page_id']);
		$oxsn_title_query_characters = esc_attr($a['characters']);
		
		if ($oxsn_title_query_page_id != '') :

			if ($oxsn_title_query_characters != '') :

				$post = get_post($oxsn_title_query_page_id);
				$title = strip_shortcodes($post->post_title);

	 			if (strlen($title) > $oxsn_title_query_characters) :
					$oxsn_title_query = substr($title, 0, $oxsn_title_query_characters) . '...';
				else : 
					$oxsn_title_query = $title;
				endif;

			else :

				$post = get_post($oxsn_title_query_page_id);
				$title = apply_filters('the_title', $post->post_title);

	 			$oxsn_title_query = $title;

	 		endif;

		else :

			if ($oxsn_title_query_characters != '') :

				global $post;
				$title = strip_shortcodes($post->post_title);

				if (strlen($title) > $oxsn_title_query_characters) :
					$oxsn_title_query = substr($title, 0, $oxsn_title_query_characters) . '...';
				else : 
					$oxsn_title_query = $title;
				endif;

			else :

				global $post;
				$title = apply_filters('the_title', $post->post_title);

				$oxsn_title_query = $title;

			endif;

		endif;
		
		return $oxsn_title_query;
		
	}

}

//[oxsn_content_query characters="140" page_id=""]
if ( ! function_exists ( 'oxsn_content_query_shortcode' ) ) {

	add_shortcode('oxsn_content_query', 'oxsn_content_query_shortcode');
	function oxsn_content_query_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(
			'page_id' => '',
			'characters' => '140',
		), $atts );

		$oxsn_content_query_page_id = esc_attr($a['page_id']);
		$oxsn_content_query_characters = esc_attr($a['characters']);

		if ($oxsn_content_query_page_id != '') :

			if ($oxsn_content_query_characters != '') :

				$post = get_post($oxsn_content_query_page_id);
				$content = strip_shortcodes($post->post_content);
				$content = strip_tags($content);

	 			if (strlen($content) > $oxsn_content_query_characters) :
					$oxsn_content_query = substr($content, 0, $oxsn_content_query_characters) . '...';
				else : 
					$oxsn_content_query = $content;
				endif;

			else :

				$post = get_post($oxsn_content_query_page_id);
				$content = apply_filters('the_content', $post->post_content);
				
				$oxsn_content_query = $content;

	 		endif;

		else :

			if ($oxsn_content_query_characters != '') :

				global $post;
				$content = strip_shortcodes($post->post_content);
				$content = strip_tags($content);

				if (strlen($content) > $oxsn_content_query_characters) :
					$oxsn_content_query = substr($content, 0, $oxsn_content_query_characters) . '...';
				else : 
					$oxsn_content_query = $content;
				endif;

			else :

				global $post;
				$content = apply_filters('the_content', $post->post_content);
				
				$oxsn_content_query = $content;

			endif;

		endif;
		
		return $oxsn_content_query;

	}

}

//[oxsn_excerpt_query characters="140" page_id=""]
if ( ! function_exists ( 'oxsn_excerpt_query_shortcode' ) ) {

	add_shortcode('oxsn_excerpt_query', 'oxsn_excerpt_query_shortcode');
	function oxsn_excerpt_query_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(
			'page_id' => '',
			'characters' => '140',
		), $atts );

		$oxsn_excerpt_query_page_id = esc_attr($a['page_id']);
		$oxsn_excerpt_query_characters = esc_attr($a['characters']);

		if ($oxsn_excerpt_query_page_id != '') :

			if ($oxsn_excerpt_query_characters != '') :

				$post = get_post($oxsn_excerpt_query_page_id);
				$excerpt = strip_shortcodes($post->post_excerpt);
				$excerpt = strip_tags($excerpt);

	 			if (strlen($excerpt) > $oxsn_excerpt_query_characters) :
					$oxsn_excerpt_query = substr($excerpt, 0, $oxsn_excerpt_query_characters) . '...';
				else : 
					$oxsn_excerpt_query = $excerpt;
				endif;

			else :

				$post = get_post($oxsn_excerpt_query_page_id);
				$excerpt = strip_shortcodes($post->post_excerpt);
				
				$oxsn_excerpt_query = $excerpt;

	 		endif;

		else :

			if ($oxsn_excerpt_query_characters != '') :

				global $post;
				$excerpt = strip_shortcodes($post->post_excerpt);
				$excerpt = strip_tags($excerpt);

				if (strlen($excerpt) > $oxsn_excerpt_query_characters) :
					$oxsn_excerpt_query = substr($excerpt, 0, $oxsn_excerpt_query_characters) . '...';
				else : 
					$oxsn_excerpt_query = $excerpt;
				endif;

			else :

				global $post;
				$excerpt = strip_shortcodes($post->post_excerpt);
				
				$oxsn_excerpt_query = $excerpt;

			endif;

		endif;
		
		return $oxsn_excerpt_query;

	}

}


?>