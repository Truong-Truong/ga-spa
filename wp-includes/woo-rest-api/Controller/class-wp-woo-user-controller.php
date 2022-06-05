<?php
/**
 * REST API: WP_REST_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 4.7.0
 */

/**
 * Core base controller for managing and interacting with REST API items.
 *
 * @since 4.7.0
 */
class WP_WOO_USER_Controller extends WP_WOO_REST_Controller
{
    public function __construct()
    {
		$this->namespace = 'wc/v3';
		$this->rest_base = 'users/';
    }

	/**
	 * Registers the REST API routes for the application passwords controller.
	 *
	 * @since 5.6.0
	 */
	public function register_routes() {
		register_rest_route(
			$this->namespace,
			'/' . $this->rest_base,
			array(
				array(
					'methods'             => WP_REST_Server::READABLE,
					'callback'            => array( $this, 'get_custom_users_data' ),
					// 'permission_callback' => array( $this, 'get_items_permissions_check' ),
					'args'                => $this->get_collection_params(),
				),
				// 'schema' => array( $this, 'get_public_item_schema' ),
			)
		);
	}

    public function get_custom_users_data()
    {
        return new WP_REST_Response('abc');
    }
}
