<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

class The7UltimateAddon extends BundledContent {

	public function activatePlugin() {
		$this->disableNotification();
	}

	public function deactivatePlugin() {
		$this->disableNotification();
	}

	public function isActivatedPlugin() {
		return false;
	}

	protected function getBundledPluginCode() {
		return '';
	}

	private function disableNotification(){
		if (dt_is_plugins_silenced()) {
			if ( class_exists( 'Ultimate_VC_Addons', false ) ) {
				$constants = array(
					'ULTIMATE_USE_BUILTIN'           => true,
					'ULTIMATE_NO_UPDATE_CHECK'       => true,
					'ULTIMATE_NO_EDIT_PAGE_NOTICE'   => true,
					'ULTIMATE_NO_PLUGIN_PAGE_NOTICE' => true,
					'BSF_PRODUCTS_NOTICES'           => false,
					'BSF_CHECK_PRODUCT_UPDATES'      => false,
				);

				foreach ( $constants as $const => $val ) {
					if ( ! defined( $const ) ) {
						define( $const, $val );
					}
				}
			}
		}
	}
}