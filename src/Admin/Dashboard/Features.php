<?php
/**
 * Local feature catalog aligned with the host's Starter, Pro and Agency builds.
 *
 * @package FormidableGeolocationAutocomplete\Admin\Dashboard
 *
 * @since 1.0.0
 */

namespace FormidableGeolocationAutocomplete\Admin\Dashboard;
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Presentation only, not licenses, remote feeds or runtime entitlement gates.
 *
 * @since 1.0.0
 */
final class Features {

	/**
	 * Prioritize major capabilities without changing comparison-table order.
	 *
	 * @since 1.0.0
	 *
	 * @param array<string,array> $features Existing feature definitions.
	 * @return array<string,array> Overview cards in feature-first order.
	 */
	public static function order_for_overview( $features ) {
		$order = [
			'autocomplete',
			'location-map',
			'geocoder',
			'dynamic-fields',
			'distance',
			'pricing',
			'directions',
			'drawing',
			'nearby',
			'validation',
			'entry-maps',
			'search',
			'entry-details',
			'current-location',
			'coordinates',
			'location-controls',
			'quick-setups',
			'templates',
			'gmw-integration',
		];
		$ordered = [];
		foreach ( $order as $id ) {
			if ( isset( $features[ $id ] ) ) {
				$ordered[ $id ] = $features[ $id ];
			}
		}
		return $ordered + $features;
	}

	/**
	 * Return locally curated demos that actually illustrate the feature.
	 *
	 * Empty results deliberately omit links for setup helpers or features without
	 * a relevant demo. These are ordinary outbound links, never remote embeds.
	 *
	 * @since 1.0.0
	 *
	 * @param string $feature_id Public feature identifier.
	 * @return array<array{label:string,url:string}> Feature-specific demo links.
	 */
	public static function get_demo_links( $feature_id ) {
		$demos = [
			'location-map' => [
				[ 'label' => __( 'View demo', 'logical-address-autocomplete-for-formidable-forms' ), 'url' => 'https://demo.formidablegeolocation.com/' ],
			],
			'geocoder' => [
				[ 'label' => __( 'View demo', 'logical-address-autocomplete-for-formidable-forms' ), 'url' => 'https://demo.formidablegeolocation.com/' ],
			],
			'dynamic-fields' => [
				[ 'label' => __( 'View demo', 'logical-address-autocomplete-for-formidable-forms' ), 'url' => 'https://demo.formidablegeolocation.com/' ],
			],
			'distance' => [
				[ 'label' => __( 'View demo', 'logical-address-autocomplete-for-formidable-forms' ), 'url' => 'https://demo.formidablegeolocation.com/distance-duration-price-calculations/' ],
			],
			'pricing' => [
				[ 'label' => __( 'View demo', 'logical-address-autocomplete-for-formidable-forms' ), 'url' => 'https://demo.formidablegeolocation.com/distance-duration-price-calculations/' ],
			],
			'directions' => [
				[ 'label' => __( 'View demo', 'logical-address-autocomplete-for-formidable-forms' ), 'url' => 'https://demo.formidablegeolocation.com/routes-directions/' ],
			],
			'drawing' => [
				[ 'label' => __( 'View demo', 'logical-address-autocomplete-for-formidable-forms' ), 'url' => 'https://demo.formidablegeolocation.com/drawing-tools/' ],
			],
			'nearby' => [
				[ 'label' => __( 'View demo', 'logical-address-autocomplete-for-formidable-forms' ), 'url' => 'https://demo.formidablegeolocation.com/nearest-locations/' ],
			],
			'entry-maps' => [
				[ 'label' => __( 'View mashup demo', 'logical-address-autocomplete-for-formidable-forms' ), 'url' => 'https://demo.formidablegeolocation.com/mashup-map/' ],
			],
			'current-location' => [
				[ 'label' => __( 'View demo', 'logical-address-autocomplete-for-formidable-forms' ), 'url' => 'https://demo.formidablegeolocation.com/' ],
			],
			'coordinates' => [
				[ 'label' => __( 'View demo', 'logical-address-autocomplete-for-formidable-forms' ), 'url' => 'https://demo.formidablegeolocation.com/' ],
			],
		];
		return $demos[ $feature_id ] ?? [];
	}
	/**
	 * Public package headings.
	 *
	 * @return array<string,string> Public package headings.
	 *
	 * @since 1.0.0
	 */
	public static function get_packages() {
		return [
			'free'    => __( 'Free', 'logical-address-autocomplete-for-formidable-forms' ),
			'starter' => __( 'Starter', 'logical-address-autocomplete-for-formidable-forms' ),
			'pro'     => __( 'Pro', 'logical-address-autocomplete-for-formidable-forms' ),
			'agency'  => __( 'Agency', 'logical-address-autocomplete-for-formidable-forms' ),
		];
	}
	/**
	 * Local descriptions of free and premium capabilities.
	 *
	 * @return array Local descriptions of free and premium capabilities.
	 *
	 * @since 1.0.0
	 */
	public static function get_features() {
		return [
			'autocomplete'      => [
				'title'       => __( 'Address autocomplete', 'logical-address-autocomplete-for-formidable-forms' ),
				'description' => __( 'Google Places API (New) in a dedicated single-line field or native Address autofill.', 'logical-address-autocomplete-for-formidable-forms' ),
				'details'     => __( 'Countries, place types, per-field language, location bias, global region and language, and required suggestion selection.', 'logical-address-autocomplete-for-formidable-forms' ),
				'icon'        => 'location-alt',
				'doc'         => '',
				'packages'    => [ 'free', 'starter', 'pro', 'agency' ],
				'included'    => true,
			],
			'location-map'      => [
				'title'       => __( 'Interactive form maps', 'logical-address-autocomplete-for-formidable-forms' ),
				'description' => __( 'Show connected locations and let visitors refine them with a draggable marker.', 'logical-address-autocomplete-for-formidable-forms' ),
				'details'     => __( 'Customize map appearance, zoom, default location and marker behavior.', 'logical-address-autocomplete-for-formidable-forms' ),
				'icon'        => 'location',
				'doc'         => '',
				'packages'    => [ 'starter', 'pro', 'agency' ],
				'included'    => false,
			],
			'geocoder'          => [
				'title'       => __( 'Geocoder & complete location data', 'logical-address-autocomplete-for-formidable-forms' ),
				'description' => __( 'Store formatted addresses, coordinates and individual location components.', 'logical-address-autocomplete-for-formidable-forms' ),
				'details'     => __( 'Connect addresses, maps and ordinary fields to shared geocoding results.', 'logical-address-autocomplete-for-formidable-forms' ),
				'icon'        => 'database',
				'doc'         => '',
				'packages'    => [ 'starter', 'pro', 'agency' ],
				'included'    => false,
			],
			'dynamic-fields'    => [
				'title'       => __( 'Dynamic location fields', 'logical-address-autocomplete-for-formidable-forms' ),
				'description' => __( 'Populate city, region, postal code, coordinates and other location values.', 'logical-address-autocomplete-for-formidable-forms' ),
				'details'     => __( 'Use connected values in native fields and your form workflows.', 'logical-address-autocomplete-for-formidable-forms' ),
				'icon'        => 'randomize',
				'doc'         => '',
				'packages'    => [ 'starter', 'pro', 'agency' ],
				'included'    => false,
			],
			'current-location'  => [
				'title'       => __( 'Current-location detection', 'logical-address-autocomplete-for-formidable-forms' ),
				'description' => __( 'Offer a locator button or detect a location when the form loads.', 'logical-address-autocomplete-for-formidable-forms' ),
				'details'     => __( 'Browser location requires visitor permission; optional IP location needs a provider.', 'logical-address-autocomplete-for-formidable-forms' ),
				'icon'        => 'admin-site-alt3',
				'doc'         => '',
				'packages'    => [ 'starter', 'pro', 'agency' ],
				'included'    => false,
			],
			'coordinates'       => [
				'title'       => __( 'Coordinate inputs', 'logical-address-autocomplete-for-formidable-forms' ),
				'description' => __( 'Collect latitude and longitude directly.', 'logical-address-autocomplete-for-formidable-forms' ),
				'details'     => __( 'A dedicated input for workflows where an address is not the starting point.', 'logical-address-autocomplete-for-formidable-forms' ),
				'icon'        => 'admin-generic',
				'doc'         => '',
				'packages'    => [ 'starter', 'pro', 'agency' ],
				'included'    => false,
			],
			'location-controls' => [
				'title'       => __( 'Standalone Locator & Reset fields', 'logical-address-autocomplete-for-formidable-forms' ),
				'description' => __( 'Place current-location and reset buttons where they fit your form.', 'logical-address-autocomplete-for-formidable-forms' ),
				'details'     => __( 'Separate controls complement the locator inside premium Address fields.', 'logical-address-autocomplete-for-formidable-forms' ),
				'icon'        => 'controls-repeat',
				'doc'         => '',
				'packages'    => [ 'starter', 'pro', 'agency' ],
				'included'    => false,
			],
			'directions'        => [
				'title'       => __( 'Directions & route displays', 'logical-address-autocomplete-for-formidable-forms' ),
				'description' => __( 'Connect an origin, destination and waypoints, and display route details.', 'logical-address-autocomplete-for-formidable-forms' ),
				'details'     => __( 'Route maps, summaries and turn-by-turn directions with connected fields.', 'logical-address-autocomplete-for-formidable-forms' ),
				'icon'        => 'leftright',
				'doc'         => '',
				'packages'    => [ 'pro', 'agency' ],
				'included'    => false,
			],
			'distance'          => [
				'title'       => __( 'Distance & travel time', 'logical-address-autocomplete-for-formidable-forms' ),
				'description' => __( 'Calculate travel distance and duration or straight-line distance.', 'logical-address-autocomplete-for-formidable-forms' ),
				'details'     => __( 'Use readable results or numeric distance and duration in form calculations.', 'logical-address-autocomplete-for-formidable-forms' ),
				'icon'        => 'performance',
				'doc'         => '',
				'packages'    => [ 'pro', 'agency' ],
				'included'    => false,
			],
			'validation'        => [
				'title'       => __( 'Address validation', 'logical-address-autocomplete-for-formidable-forms' ),
				'description' => __( 'Compare addresses with Google Address Validation recommendations.', 'logical-address-autocomplete-for-formidable-forms' ),
				'details'     => __( 'Review corrections and validation results. Requires the Address Validation API.', 'logical-address-autocomplete-for-formidable-forms' ),
				'icon'        => 'yes-alt',
				'doc'         => '',
				'packages'    => [ 'pro', 'agency' ],
				'included'    => false,
			],
			'entry-maps'        => [
				'title'       => __( 'Saved-entry maps', 'logical-address-autocomplete-for-formidable-forms' ),
				'description' => __( 'Display a saved location on its own map or multiple locations together.', 'logical-address-autocomplete-for-formidable-forms' ),
				'details'     => __( 'Single-entry and mashup map shortcodes outside your form.', 'logical-address-autocomplete-for-formidable-forms' ),
				'icon'        => 'admin-multisite',
				'doc'         => '',
				'packages'    => [ 'pro', 'agency' ],
				'included'    => false,
			],
			'nearby'            => [
				'title'       => __( 'Nearby locations & result panels', 'logical-address-autocomplete-for-formidable-forms' ),
				'description' => __( 'Find destinations near a visitor and display selectable results.', 'logical-address-autocomplete-for-formidable-forms' ),
				'details'     => __( 'Configure destination sources and results with an optional map.', 'logical-address-autocomplete-for-formidable-forms' ),
				'icon'        => 'search',
				'doc'         => '',
				'packages'    => [ 'agency' ],
				'included'    => false,
			],
			'drawing'           => [
				'title'       => __( 'Drawing Tools & Drawing Shape', 'logical-address-autocomplete-for-formidable-forms' ),
				'description' => __( 'Draw markers, lines, polygons, rectangles, circles and freehand shapes.', 'logical-address-autocomplete-for-formidable-forms' ),
				'details'     => __( 'Collect shapes and geometry outputs on a connected map.', 'logical-address-autocomplete-for-formidable-forms' ),
				'icon'        => 'edit',
				'doc'         => '',
				'packages'    => [ 'agency' ],
				'included'    => false,
			],
		];
	}
}
