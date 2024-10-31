<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if ( ! function_exists ( 'oxsn_wp_query_quicktags' ) ) {

	add_action( 'admin_print_footer_scripts', 'oxsn_wp_query_quicktags' );
	function oxsn_wp_query_quicktags() {

		if ( wp_script_is( 'quicktags' ) ) {

		?>

			<script type="text/javascript">
				QTags.addButton( 'oxsn_wp_query_quicktag', '[oxsn_wp_query]', '[oxsn_wp_query class="" post_type="post" posts_per_page="-1" pagination="true"]', '[/oxsn_wp_query]', 'oxsn_wp_query', 'Wp Query', 201 );
				QTags.addButton( 'oxsn_featured_image_query_quicktag', '[oxsn_featured_image_query]', '[oxsn_featured_image_query class="" page_id=""]', '', 'oxsn_featured_image_query', 'Featured Image', 202 );
				QTags.addButton( 'oxsn_permalink_query_quicktag', '[oxsn_permalink_query]', '[oxsn_permalink_query class="" page_id=""]', '[/oxsn_permalink_query]', 'oxsn_permalink_query', 'Permalink Query', 203 );
				QTags.addButton( 'oxsn_title_query_quicktag', '[oxsn_title_query]', '[oxsn_title_query characters="35" page_id=""]', '', 'oxsn_title_query', 'Title Query', 204 );
				QTags.addButton( 'oxsn_date_query_quicktag', '[oxsn_date_query]', '[oxsn_date_query style="F jS, Y" page_id=""]', '', 'oxsn_date_query', 'Date Query', 205 );
				QTags.addButton( 'oxsn_id_query_quicktag', '[oxsn_id_query]', '[oxsn_id_query]', '', 'oxsn_id_query', 'ID Query', 206 );
				QTags.addButton( 'oxsn_category_query_quicktag', '[oxsn_category_query]', '[oxsn_category_query separator=", " parents="" page_id=""]', '', 'oxsn_category_query', 'Category Query', 207 );
				QTags.addButton( 'oxsn_tag_query_quicktag', '[oxsn_tag_query]', '[oxsn_tag_query seperator=", " page_id=""]', '', 'oxsn_tag_query', 'Tag Query', 208 );
				QTags.addButton( 'oxsn_content_query_quicktag', '[oxsn_content_query]', '[oxsn_content_query characters="140" page_id=""]', '', 'oxsn_content_query', 'Content Query', 209 );
				QTags.addButton( 'oxsn_excerpt_query_quicktag', '[oxsn_excerpt_query]', '[oxsn_excerpt_query characters="140" page_id=""]', '', 'oxsn_excerpt_query', 'Excerpt Query', 210 );
			</script>

		<?php

		}

	}

}


?>