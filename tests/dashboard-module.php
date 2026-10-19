<?php
/**
 * Verify the copyable local dashboard layout and its existing host boundary.
 *
 * @package FormidableGeolocationAutocomplete\Tests
 */

$root = dirname( __DIR__ );
$module = $root . '/src/Admin/Dashboard/';
foreach ( [ 'Loader.php', 'Features.php', 'views/dashboard.php', 'assets/scss/dashboard.scss', 'assets/css/dashboard.css', 'assets/css/dashboard.min.css', 'README.md' ] as $file ) {
	if ( ! is_file( $module . $file ) ) {
		throw new RuntimeException( 'Missing contained dashboard file: ' . $file );
	}
}
foreach ( [ 'src/Admin/Dashboard.php', 'src/Admin/DashboardFeatures.php', 'src/Admin/views/dashboard.php', 'assets/scss/admin/frmgeo-product-dashboard.scss', 'build/css/admin/frmgeo-product-dashboard.css', 'build/css/admin/frmgeo-product-dashboard.min.css' ] as $file ) {
	if ( file_exists( $root . '/' . $file ) ) {
		throw new RuntimeException( 'Retired dashboard file remains: ' . $file );
	}
}
$loader = file_get_contents( $module . 'Loader.php' );
if ( false === strpos( $loader, 'FRMGEOAC_URL . \'src/Admin/Dashboard/assets/css/dashboard.min.css\'' ) || false === strpos( $loader, 'use FormidableGeolocationAutocomplete\Admin\SetupNotice;' ) || false !== strpos( $loader, 'spl_autoload_' ) ) {
	throw new RuntimeException( 'Existing host boundary was changed.' );
}
$view = file_get_contents( $module . 'views/dashboard.php' );
$navigation_end = strpos( $view, '</nav>' );
$notice_anchor = strpos( $view, '<hr class="wp-header-end">' );
if ( false === $navigation_end || false === $notice_anchor || $notice_anchor < $navigation_end || 1 !== substr_count( $view, 'wp-header-end' ) ) {
	throw new RuntimeException( 'The single admin-notice anchor must follow the main navigation.' );
}
if ( ! preg_match( '/<header\b.*?<\/header>/s', $view, $header ) ) {
	throw new RuntimeException( 'Dashboard header missing.' );
}
if ( false === strpos( $loader, '$product_name = __( \'Address Autocomplete\', \'logical-address-autocomplete-for-formidable-forms\' );' )
	|| false === strpos( $header[0], 'For Formidable Forms' )
	|| false === strpos( $header[0], '<h1><?php echo esc_html( $product_name ); ?></h1>' )
	|| strpos( $header[0], 'For Formidable Forms' ) > strpos( $header[0], '<h1>' ) ) {
	throw new RuntimeException( 'The visual heading must be short with its Formidable context above it.' );
}
preg_match_all( '/<a class="([^"]+)".*?esc_html_e\( \'([^\']+)\'/s', $header[0], $actions, PREG_SET_ORDER );
if ( array_column( $actions, 2 ) !== [ 'Open Settings', 'View Live Demos', 'Explore Plugins' ] ) {
	throw new RuntimeException( 'Native settings must be the first header action, before demos and discovery.' );
}
$primary = array_map(
	static function ( $action ) {
		return in_array( 'button-primary', explode( ' ', $action[1] ), true );
	},
	$actions
);
if ( [ true, false, false ] !== $primary ) {
	throw new RuntimeException( 'Only Open Settings may be primary in the header.' );
}
if ( 1 !== substr_count( $view, 'frmgeo-product-dashboard__product-card' ) ) {
	throw new RuntimeException( 'Discovery alignment must be scoped to product cards only.' );
}
$css = file_get_contents( $module . 'assets/css/dashboard.css' );
if ( ! preg_match( '/\.frmgeo-product-dashboard__product-card\s*\{[^}]*display:\s*flex;[^}]*flex-direction:\s*column;/s', $css )
	|| ! preg_match( '/\.frmgeo-product-dashboard__product-card \.button\s*\{[^}]*margin-top:\s*auto;[^}]*align-self:\s*flex-start;/s', $css ) ) {
	throw new RuntimeException( 'Product actions must align at the bottom without stretching their width.' );
}
echo "Contained dashboard layout, host boundary, settings-first header and product alignment passed.\n";
