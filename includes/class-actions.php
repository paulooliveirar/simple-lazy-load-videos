<?php
/**
 * Class Actions
 *
 * @package simple-lazy-load-videos
 * @since 0.6.0
 */

namespace SLLV;

if ( ! class_exists( 'Actions' ) ) {
	/**
	 * Plugin actions
	 *
	 * Activation, deactivation and uninstalling actions
	 *
	 * @since 0.6.0
	 */
	class Actions {

		/**
		 * Plugin activation actions
		 *
		 * @since 0.6.0
		 */
		public static function activate( $network_wide ) {

		}


		/**
		 * Plugin deactivation actions
		 *
		 * @since 0.6.0
		 */
		public static function deactivate() {

		}


		/**
		 * Plugin uninstalling actions
		 *
		 * @since 0.6.0
		 */
		public static function uninstall() {
			delete_option( 'sllv_version' );
			delete_option( 'sllv_settings' );
		}

	}
}
