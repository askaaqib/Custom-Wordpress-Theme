<?php 

	function microagility_setup(){
		
		wp_enqueue_style('style',get_template_directory_uri(). '/css/style.css');
		wp_enqueue_style('style',get_template_directory_uri(). '/style.css');
		wp_enqueue_style('style',get_template_directory_uri(). '/updatedstyles1.css');
		
		// wp_enqueue_script('js', get_template_directory_uri(). '/js/jquery.js', array('jquery'), false);
		// wp_enqueue_script('js', get_template_directory_uri().'/js/slick.js', array('slick'));
		// wp_enqueue_script('js', get_template_directory_uri(). '/js/wow.js', array('wow'));
		// wp_enqueue_script('js', get_template_directory_uri().'/js/modalEffects.js', array('modal'), false);
		// wp_enqueue_script('js', get_template_directory_uri().'/js/customjs.js', array('custom'), false);

		wp_enqueue_script('js', get_template_directory_uri(). '/js/js.js', array('jquery'), false);
	}
	register_nav_menus( array(
	'primary' => 'Primary Menu',
	
	));
	
	add_action('wp_enqueue_scripts','microagility_setup');
	
	/****  Custom LOGO Function *******/
	/*********************************/
	function theme_prefix_setup() {
	
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );
	
	function theme_prefix_the_custom_logo() {
	
	if ( function_exists( 'the_custom_logo' ) ) {
		$custom_logo_id = get_theme_mod( ‘custom_logo’ );
		$image = wp_get_attachment_image_src( $custom_logo_id , ‘full’ );
		echo $image[0];

	}

}

function change_logo_class($html)
{
	$html = str_replace('class="custom-logo"', 'logo', $html);
	$html = str_replace('class="custom-logo-link"', 'logo', $html);
	return $html;
}

add_filter('get_custom_logo','change_logo_class');

	/****  Feature Image Enabling *****/
	/*********************************/

add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
	) );
	
	/****  Change Excerpt more text *****/
	/*********************************/
	function wpdocs_excerpt_more( $more ) {
    return '<a href="'.get_the_permalink().'" rel="nofollow">...</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
		
		/****  Change Excerpt Limit words *****/
		/*********************************/
		
		function wpdocs_custom_excerpt_length( $length ) {
    return 26;
		}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

		/****  Duplicate Posts *****/
		/*********************************/
function rd_duplicate_post_as_draft(){
	global $wpdb;
	if (! ( isset( $_GET['post']) || isset( $_POST['post'])  || ( isset($_REQUEST['action']) && 'rd_duplicate_post_as_draft' == $_REQUEST['action'] ) ) ) {
		wp_die('No post to duplicate has been supplied!');
	}
 
	/*
	 * get the original post id
	 */
	$post_id = (isset($_GET['post']) ? absint( $_GET['post'] ) : absint( $_POST['post'] ) );
	/*
	 * and all the original post data then
	 */
	$post = get_post( $post_id );
 
	/*
	 * if you don't want current user to be the new post author,
	 * then change next couple of lines to this: $new_post_author = $post->post_author;
	 */
	$current_user = wp_get_current_user();
	$new_post_author = $current_user->ID;
 
	/*
	 * if post data exists, create the post duplicate
	 */
	if (isset( $post ) && $post != null) {
 
		/*
		 * new post data array
		 */
		$args = array(
			'comment_status' => $post->comment_status,
			'ping_status'    => $post->ping_status,
			'post_author'    => $new_post_author,
			'post_content'   => $post->post_content,
			'post_excerpt'   => $post->post_excerpt,
			'post_name'      => $post->post_name,
			'post_parent'    => $post->post_parent,
			'post_password'  => $post->post_password,
			'post_status'    => 'draft',
			'post_title'     => $post->post_title,
			'post_type'      => $post->post_type,
			'to_ping'        => $post->to_ping,
			'menu_order'     => $post->menu_order
		);
 
		/*
		 * insert the post by wp_insert_post() function
		 */
		$new_post_id = wp_insert_post( $args );
 
		/*
		 * get all current post terms ad set them to the new post draft
		 */
		$taxonomies = get_object_taxonomies($post->post_type); // returns array of taxonomy names for post type, ex array("category", "post_tag");
		foreach ($taxonomies as $taxonomy) {
			$post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
			wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
		}
 
		/*
		 * duplicate all post meta just in two SQL queries
		 */
		$post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
		if (count($post_meta_infos)!=0) {
			$sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
			foreach ($post_meta_infos as $meta_info) {
				$meta_key = $meta_info->meta_key;
				$meta_value = addslashes($meta_info->meta_value);
				$sql_query_sel[]= "SELECT $new_post_id, '$meta_key', '$meta_value'";
			}
			$sql_query.= implode(" UNION ALL ", $sql_query_sel);
			$wpdb->query($sql_query);
		}
 
 
		/*
		 * finally, redirect to the edit post screen for the new draft
		 */
		wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
		exit;
	} else {
		wp_die('Post creation failed, could not find original post: ' . $post_id);
	}
}
add_action( 'admin_action_rd_duplicate_post_as_draft', 'rd_duplicate_post_as_draft' );
 
/*
 * Add the duplicate link to action list for post_row_actions
 */
function rd_duplicate_post_link( $actions, $post ) {
	if (current_user_can('edit_posts')) {
		$actions['duplicate'] = '<a href="admin.php?action=rd_duplicate_post_as_draft&amp;post=' . $post->ID . '" title="Duplicate this item" rel="permalink">Duplicate</a>';
	}
	return $actions;
}
add_filter( 'post_row_actions', 'rd_duplicate_post_link', 10, 2 );
add_filter( 'wp_image_editors', 'change_graphic_lib' );
function change_graphic_lib($array) {
return array( 'WP_Image_Editor_GD', 'WP_Image_Editor_Imagick' );
}
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

?>
<?php
class WP_HTML_Compression {
    protected $compress_css = true;
    protected $compress_js = true;
    protected $info_comment = true;
    protected $remove_comments = true;
 
    protected $html;
    public function __construct($html) {
      if (!empty($html)) {
		    $this->parseHTML($html);
	    }
    }
    public function __toString() {
	    return $this->html;
    }
    protected function bottomComment($raw, $compressed) {
	    $raw = strlen($raw);
	    $compressed = strlen($compressed);		
	    $savings = ($raw-$compressed) / $raw * 100;		
	    $savings = round($savings, 2);		
	    return '<!-- HTML Minify | http://fastwp.de/snippets/html-minify/ | Größe reduziert um '.$savings.'% | Von '.$raw.' Bytes, auf '.$compressed.' Bytes -->';
    }
    protected function minifyHTML($html) {
	    $pattern = '/<(?<script>script).*?<\/script\s*>|<(?<style>style).*?<\/style\s*>|<!(?<comment>--).*?-->|<(?<tag>[\/\w.:-]*)(?:".*?"|\'.*?\'|[^\'">]+)*>|(?<text>((<[^!\/\w.:-])?[^<]*)+)|/si';
	    preg_match_all($pattern, $html, $matches, PREG_SET_ORDER);
	    $overriding = false;
	    $raw_tag = false;
	    $html = '';
	    foreach ($matches as $token) {
		    $tag = (isset($token['tag'])) ? strtolower($token['tag']) : null;
		    $content = $token[0];
		    if (is_null($tag)) {
			    if ( !empty($token['script']) ) {
				    $strip = $this->compress_js;
			    }
			    else if ( !empty($token['style']) ) {
				    $strip = $this->compress_css;
			    }
			    else if ($content == '<!--wp-html-compression no compression-->') {
				    $overriding = !$overriding;
				    continue;
			    }
			    else if ($this->remove_comments) {
				    if (!$overriding && $raw_tag != 'textarea') {
					    $content = preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/s', '', $content);
				    }
			    }
		    }
		    else {
			    if ($tag == 'pre' || $tag == 'textarea') {
				    $raw_tag = $tag;
			    }
			    else if ($tag == '/pre' || $tag == '/textarea') {
				    $raw_tag = false;
			    }
			    else {
				    if ($raw_tag || $overriding) {
					    $strip = false;
				    }
				    else {
					    $strip = true;
					    $content = preg_replace('/(\s+)(\w++(?<!\baction|\balt|\bcontent|\bsrc)="")/', '$1', $content);
					    $content = str_replace(' />', '/>', $content);
				    }
			    }
		    }
		    if ($strip) {
			    $content = $this->removeWhiteSpace($content);
		    }
		    $html .= $content;
	    }
	    return $html;
    }
    public function parseHTML($html) {
	    $this->html = $this->minifyHTML($html);
	    if ($this->info_comment) {
		    $this->html .= "\n" . $this->bottomComment($html, $this->html);
	    }
    }
    protected function removeWhiteSpace($str) {
	    $str = str_replace("\t", ' ', $str);
	    $str = str_replace("\n",  '', $str);
	    $str = str_replace("\r",  '', $str);
	    while (stristr($str, '  ')) {
		    $str = str_replace('  ', ' ', $str);
	    }
	    return $str;
    }
}
function wp_html_compression_finish($html) {
    return new WP_HTML_Compression($html);
}
function wp_html_compression_start() {
    ob_start('wp_html_compression_finish');
}
add_action('get_header', 'wp_html_compression_start');

function microagility_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Newsletter', 'twentysixteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your Footer.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'microagility_widgets_init' );
?>