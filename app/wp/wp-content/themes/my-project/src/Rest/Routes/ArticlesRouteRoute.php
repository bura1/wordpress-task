<?php

/**
 * The class register route for $className endpoint
 *
 * @package MyProject\Rest\Routes
 */

declare(strict_types=1);

namespace MyProject\Rest\Routes;

use MyProject\Config\Config;
use MyProjectVendor\EightshiftLibs\Rest\Routes\AbstractRoute;
use MyProjectVendor\EightshiftLibs\Rest\CallableRouteInterface;

/**
 * Class ArticlesRouteRoute
 */
class ArticlesRouteRoute extends AbstractRoute implements CallableRouteInterface
{

	/**
	 * Method that returns project Route namespace.
	 *
	 * @return string Project namespace MyProjectVendor\for REST route.
	 */
	protected function getNamespace(): string
	{
		return Config::getProjectRoutesNamespace();
	}

	/**
	 * Method that returns project route version.
	 *
	 * @return string Route version as a string.
	 */
	protected function getVersion(): string
	{
		return Config::getProjectRoutesVersion();
	}

	/**
	 * Get the base url of the route
	 *
	 * @return string The base URL for route you are adding.
	 */
	protected function getRouteName(): string
	{
		return '/articles-route';
	}

	/**
	 * Get callback arguments array
	 *
	 * @return array Either an array of options for the endpoint, or an array of arrays for multiple methods.
	 */
	protected function getCallbackArguments(): array
	{
		return [
			'methods' => static::READABLE,
			'callback' => [$this, 'routeCallback'],
			'permission_callback' => '__return_true'
		];
	}

	/**
	 * Method that returns rest response
	 *
	 * @param \WP_REST_Request $request Data got from endpoint url.
	 *
	 * @return \WP_REST_Response|mixed If response generated an error, WP_Error, if response
	 *                                is already an instance, WP_HTTP_Response, otherwise
	 *                                returns a new WP_REST_Response instance.
	 */
	public function routeCallback(\WP_REST_Request $request)
	{
		$request = wp_remote_get('https://inshortsapi.vercel.app/news?category=science');
		$body = wp_remote_retrieve_body($request);

		$response = json_decode($body, true);

		return \rest_ensure_response($response);
	}
}
