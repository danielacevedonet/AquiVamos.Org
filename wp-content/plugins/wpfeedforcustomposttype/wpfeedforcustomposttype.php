<?php
	/**
	 * @link              http://codeboxr.com
	 * @since             1.0
	 * @package           wpfeedforcustomposttype
	 *
	 * @wordpress-plugin
	 * Plugin Name:       CBX RSS Feed for Custom Post Types
	 * Plugin URI:        http://codeboxr.com/product/rss-feed-manager-for-custom-post-types
	 * Description:       Shows or merges feeds for custom post type with default posts
	 * Version:           1.4
	 * Author:            Codeboxr Team
	 * Author URI:        http://codeboxr.com
	 * License:           GPL-2.0+
	 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
	 * Text Domain:       wpfeedforcustomposttype
	 * Domain Path:       /languages
	 */


// If this file is called directly, abort.
	if ( ! defined( 'WPINC' ) )
	{
		die;
	}


	//define the constants

	defined( 'WPFEEDFORCUSTOMPOSTTYPE_VERSION' ) or define( 'WPFEEDFORCUSTOMPOSTTYPE_VERSION', '2.4' );
	defined( 'WPFEEDFORCUSTOMPOSTTYPE_PLUGIN_NAME' ) or define( 'WPFEEDFORCUSTOMPOSTTYPE_PLUGIN_NAME', 'wpfeedforcustomposttype' );
	defined( 'WPFEEDFORCUSTOMPOSTTYPE_ROOT_PATH' ) or define( 'WPFEEDFORCUSTOMPOSTTYPE_ROOT_PATH', plugin_dir_path( __FILE__ ) );
	defined( 'WPFEEDFORCUSTOMPOSTTYPE_ROOT_URL' ) or define( 'WPFEEDFORCUSTOMPOSTTYPE_ROOT_URL', plugin_dir_url( __FILE__ ) );
	defined( 'WPFEEDFORCUSTOMPOSTTYPE_BASE_NAME' ) or define( 'WPFEEDFORCUSTOMPOSTTYPE_BASE_NAME', plugin_basename( __FILE__ ) );

	//$wpfeedforcustomposttype = get_option('wpfeedforcustomposttype');

	class WPFeedForCustomPostType {


		// Instnace
		protected static $_instance = null;

		/**
		 * Setup Instance
		 * @since   1.7
		 * @version 1.0
		 */
		public static function instance() {
			if ( is_null( self::$_instance ) )
			{
				self::$_instance = new self();
			}

			return self::$_instance;
		}

		/**
		 * Not allowed
		 * @since   1.7
		 * @version 1.0
		 */
		public function __clone() {
			_doing_it_wrong( __FUNCTION__, 'Cheatin&#8217; huh?', '1.4' );
		}

		/**
		 * Not allowed
		 * @since   1.7
		 * @version 1.0
		 */
		public function __wakeup() {
			_doing_it_wrong( __FUNCTION__, 'Cheatin&#8217; huh?', '1.4' );
		}

		/**
		 * Construct
		 * @since   1.7
		 * @version 1.0
		 */
		public function __construct() {

			register_activation_hook( __FILE__, array( 'WPFeedForCustomPostType', 'activate' ) );
			register_deactivation_hook( __FILE__, array( 'WPFeedForCustomPostType', 'deactivation' ) );




			// Add actions to load language
			add_action( 'init', array( $this, 'textdomain_init' ) ); //text domain init
			add_action( 'admin_menu', array( $this, 'admin_menu' ) );  //adding admin setting menu callback

			add_action( 'init', array( $this, 'create_wpfeedforcustomposttype' ), 0 );

			$plugin = plugin_basename( __FILE__ );
			add_filter( "plugin_action_links_$plugin", array( $this, 'settings_link' ) );

		}

		public function create_wpfeedforcustomposttype() {
			add_filter( 'request', array( $this, 'wpfeedforcustomposttype_feedrequest' ) );
		}

		public function wpfeedforcustomposttype_feedrequest( $qv ) {
			if ( isset( $qv['feed'] ) && ! isset( $qv['post_type'] ) )
			{
				$wpfeedforcustomposttype = get_option( 'wpfeedforcustomposttype' );

				$ptypes = array();
				if ( ! empty( $wpfeedforcustomposttype ) ):
					foreach ( $wpfeedforcustomposttype as $key => $value )
					{
						if ( $value == 'on' )
						{
							$ptypes[] = $key;
						}
					}
					$qv['post_type'] = $ptypes;
				endif;
			}

			return $qv;
		}

		/**
		 * Initialize text domain for the plugin
		 */
		public function textdomain_init() {
			load_plugin_textdomain( 'wpfeedforcustomposttype', false, basename( dirname( __FILE__ ) ) . '/languages' );
		}

		public function admin_menu() {
			//global $wpfeedforcustomposttype_hook, $wpfeedforcustomposttype;
			//add_options_page(page_title, menu_title, access_level/capability, file, [function]);
			if ( function_exists( 'add_options_page' ) )
			{
				$page_hook = add_options_page( esc_html__( 'RSS for Custom Posts types', 'wpfeedforcustomposttype' ), esc_html__( 'Custom Post RSS', 'wpfeedforcustomposttype' ), 'manage_options', 'wpfeedforcustomposttype', array(
					$this,
					'admin_option'
				) );
			}
		}

		/**
		 * Show option page
		 */
		public function admin_option() {


			$builtinposts            = array();
			$customposts             = array();
			$alltypeposts            = array();
			$wpfeedforcustomposttype = array();

			$builtinargs = array(
				'public'   => true,
				'show_ui'  => true,
				'_builtin' => true
				//'publicly_queryable' => true
			);

			$customargs = array(
				'public'             => true,
				'show_ui'            => true,
				'_builtin'           => false,
				'publicly_queryable' => true
			);

			$output   = 'objects'; // names or objects, note names is the default
			$operator = 'and'; // 'and' or 'or'

			$post_typesb = get_post_types( $builtinargs, $output, $operator );
			foreach ( $post_typesb as $post_typeb )
			{
				$label               = $post_typeb->labels->name;
				$name                = $post_typeb->name;
				$alltypeposts[$name] = $label;
				$builtinposts[$name] = $label;
			}

			$post_typesc = get_post_types( $customargs, $output, $operator );

			foreach ( $post_typesc as $post_typec )
			{
				$label               = $post_typec->labels->name;
				$name                = $post_typec->name;
				$alltypeposts[$name] = $label;
				$customposts[$name]  = $label;
			}

			if ( isset( $_POST['uwpfeedforcustomposttype'] ) )
			{
				check_admin_referer( 'wpfeedforcustomposttype' );


				//post var
				foreach ( $alltypeposts as $key => $value )
				{
					$wpfeedforcustomposttype[$key] = isset( $_POST['pt' . $key] ) ? trim( $_POST['pt' . $key] ) : '';

				}
				update_option( 'wpfeedforcustomposttype',  $wpfeedforcustomposttype);




			}//end main if

			$wpfeedforcustomposttype = (array) get_option( 'wpfeedforcustomposttype' );

			if ( isset( $_POST['uwpfeedforcustomposttype'] ) )
			{
				echo '<!-- Last Action --><div id="message" class="updated fade"><p>' . esc_html__( 'Options updated', 'wpfeedforcustomposttype' ) . '</p></div>';
			}

			?>
            <div class="wrap">

                <h2><?php esc_html_e( 'RSS Feed Manager for Custom Post Types', 'wpfeedforcustomposttype' ); ?></h2>

                <div id="poststuff">

                    <div id="post-body" class="metabox-holder columns-2">

                        <!-- main content -->
                        <div id="post-body-content">

                            <div class="meta-box-sortables ui-sortable">

                                <div class="postbox">
                                    <div class="inside">
                                        <h2><?php esc_html_e( 'Plugin Settings', 'wpfeedforcustomposttype' ); ?></h2>
                                        <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
											<?php wp_nonce_field( 'wpfeedforcustomposttype' ); ?>
                                            <table cellspacing="0" class="widefat">
                                                <thead>
                                                <tr>
                                                    <th style="" class="row-title"
                                                        scope="col"><?php esc_html_e( 'Post Types', 'wpfeedforcustomposttype' ) ?></th>
                                                    <th style="" class="row-title"
                                                        scope="col"><?php esc_html_e( 'Selection', 'wpfeedforcustomposttype' ) ?></th>
                                                </tr>
                                                </thead>
                                                <tfoot>
                                                <tr>
                                                    <th style="" class="row-title"
                                                        scope="col"><?php esc_html_e( 'Post Types', 'wpfeedforcustomposttype' ) ?></th>
                                                    <th style="" class="row-title"
                                                        scope="col"><?php esc_html_e( 'Selection', 'wpfeedforcustomposttype' ) ?></th>
                                                </tr>
                                                </tfoot>
                                                <tbody>
												<?php
													//var_dump($alltypeposts);
													echo '<tr><td colspan="2"><h3>' . esc_html__( 'Built-in Posts Types', 'wpfeedforcustomposttype' ), '</h3></td></tr>';
													foreach ( $builtinposts as $key => $value )
													{
														$oldval = isset( $wpfeedforcustomposttype[$key] ) ? $wpfeedforcustomposttype[$key] : '';

														echo '<tr>';
														echo '<td>' . $value . '[' . $key . ']</td>';
														echo '<td><label for="pt' . $key . '"><input id="pt' . $key . '" type="checkbox" name="pt' . $key . '" ' . checked( 'on', $oldval, false ) . ' /> Enable/Disable</label></td>';
														echo '</tr>';
													}
													echo '<tr><td colspan="2"><h3>' . esc_html__( 'Custom Posts Types', 'wpfeedforcustomposttype' ) . '</h3></td></tr>';
													foreach ( $customposts as $key => $value )
													{
														$oldval = isset( $wpfeedforcustomposttype[$key] ) ? $wpfeedforcustomposttype[$key] : '';

														echo '<tr>';
														echo '<td>' . $value . '[' . $key . ']</td>';
														echo '<td><label for="pt' . $key . '"><input id="pt' . $key . '" type="checkbox" name="pt' . $key . '" ' . checked( 'on', $oldval, false ) . ' /> Enable/Disable</label></td>';
														echo '</tr>';
													}
												?>

                                                <tr valign="top">
                                                    <td></td>
                                                    <td><input type="submit" name="uwpfeedforcustomposttype"
                                                               class="button-primary"
                                                               value="<?php esc_html_e( 'Save Changes', 'wpfeedforcustomposttype' ); ?>">
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div> <!-- .inside -->

                                </div> <!-- .postbox -->

                            </div> <!-- .meta-box-sortables .ui-sortable -->

                        </div> <!-- post-body-content -->

                        <!-- sidebar -->
                        <div id="postbox-container-1" class="postbox-container">

                            <div class="meta-box-sortables">

								<?php
									$plugin_data = get_plugin_data( __FILE__ );

								?>
                                <div class="postbox">
                                    <h3><span>Plugin Info</span></h3>
                                    <div class="inside">
                                        <p>Plugin Name
                                            : <?php echo $plugin_data['Title'] ?> <?php echo $plugin_data['Version'] ?></p>
                                        <p>Author : <?php echo $plugin_data['Author'] ?></p>
                                        <p>Website : <a href="http://codeboxr.com" target="_blank">codeboxr.com</a></p>
                                        <p>Email : <a href="mailto:info@codeboxr.com"
                                                      target="_blank">info@codeboxr.com</a></p>
                                    </div> <!-- .inside -->

                                </div> <!-- .postbox -->

                                <div class="postbox">
                                    <h3><span>Help & Supports</span></h3>
                                    <div class="inside">
                                        <p>Support: <a href="http://codeboxr.com/contact-us.html" target="_blank">Contact
                                                Us</a></p>
                                        <p><i class="icon-envelope"></i> <a href="mailto:info@codeboxr.com">info@codeboxr.com</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="postbox">
                                    <h3><span>Codeboxr Updates</span></h3>
                                    <div class="inside">
										<?php
											include_once( ABSPATH . WPINC . '/feed.php' );
											if ( function_exists( 'fetch_feed' ) )
											{
												$feed = fetch_feed( 'http://codeboxr.com/feed' );
												// $feed = fetch_feed('http://feeds.feedburner.com/codeboxr'); // this is the external website's RSS feed URL
												if ( ! is_wp_error( $feed ) ) : $feed->init();
													$feed->set_output_encoding( 'UTF-8' ); // this is the encoding parameter, and can be left unchanged in almost every case
													$feed->handle_content_type(); // this double-checks the encoding type
													$feed->set_cache_duration( 21600 ); // 21,600 seconds is six hours
													$limit = $feed->get_item_quantity( 6 ); // fetches the 18 most recent RSS feed stories
													$items = $feed->get_items( 0, $limit ); // this sets the limit and array for parsing the feed

													$blocks = array_slice( $items, 0, 6 ); // Items zero through six will be displayed here
													echo '<ul>';
													foreach ( $blocks as $block )
													{
														$url = $block->get_permalink();
														echo '<li><a target="_blank" href="' . $url . '">';
														echo '<strong>' . $block->get_title() . '</strong></a><br/>';
														echo '</li>';

													}//end foreach
													echo '</ul>';
												endif;
											} ?>
                                    </div>
                                </div>
                                <div class="postbox">
                                    <h3>Codeboxr on facebook</h3>

                                    <div class="inside">
                                        <iframe
                                                src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fcodeboxr&amp;width=260&amp;height=258&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=false&amp;appId=558248797526834"
                                                scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height:258px;"
                                                allowTransparency="true"></iframe>
                                    </div>
                                </div>
                            </div> <!-- .meta-box-sortables -->

                        </div> <!-- #postbox-container-1 .postbox-container -->

                    </div> <!-- #post-body .metabox-holder .columns-2 -->

                    <br class="clear">
                </div> <!-- #poststuff -->

            </div> <!-- .wrap -->
			<?php
		}


		/**
		 * Plugin activation
		 */
		public static function activate() {

            $wpfeedforcustomposttype = array();
            $defaults = array( 'post' => 'on' );
            foreach ( $defaults as $key => $value )
            {
                $wpfeedforcustomposttype[$key] = $value;
            }

			update_option( 'wpfeedforcustomposttype', $wpfeedforcustomposttype );
		}

		/**
		 * Plugin deactivation
		 */
		public static function deactivation() {
			global $wpfeedforcustomposttype;
			//let's keep the otpion table clean
			delete_option( 'wpfeedforcustomposttype' );

		}

		/**
         * Show setting link from plugin manager
         *
		 * @param $links
		 *
		 * @return mixed
		 */
		public function settings_link( $links ) {
			$settings_link = '<a href="options-general.php?page=wpfeedforcustomposttype">' . esc_html__( 'Setting', 'wpfeedforcustomposttype' ) . '</a>';
			array_unshift( $links, $settings_link );

			return $links;
		}
	}

	function WPFeedForCustomPostType_init() {
		return WPFeedForCustomPostType::instance();
	}

	WPFeedForCustomPostType_init();