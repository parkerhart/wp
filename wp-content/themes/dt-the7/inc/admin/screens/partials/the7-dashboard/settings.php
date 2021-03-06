<div class="the7-postbox the7-settings">
	<h2><?php esc_html_e( 'Settings', 'the7mk2' ); ?></h2>
	<form id="the7-settings" type="post">
        <input type="hidden" name="action" value="the7_save_dashboard_settings">
		<?php wp_nonce_field( The7_Admin_Dashboard_Settings::SETTINGS_ID . '-save' ); ?>

		<div class="the7-column-container">
			<div class="the7-column">
				<h3><?php esc_html_e( 'Legacy Features', 'the7mk2' ); ?></h3>

				<table class="the7-system-status" cellspacing="0" cellpadding="0">
                    <tr>
                        <td><label for="the7-legacy-rows"><?php esc_html_e( 'The7 rows', 'the7mk2' ); ?></label></td>
                        <td><input type="checkbox" id="the7-legacy-rows" name="the7_dashboard_settings[rows]" <?php checked( true, The7_Admin_Dashboard_Settings::get( 'rows' ) ); ?>></td>
                    </tr>

                    <tr>
                        <td><label for="the7-legacy-icons-bar"><?php esc_html_e( 'Icons Bar', 'the7mk2' ); ?></label></td>
                        <td><input type="checkbox" id="the7-legacy-icons-bar" name="the7_dashboard_settings[icons-bar]" <?php checked( true, The7_Admin_Dashboard_Settings::get( 'icons-bar' ) ); ?>></td>
                    </tr>
				</table>
			</div>

            <div class="the7-column">
                <h3><?php esc_html_e( 'Bundled Plugins', 'the7mk2' ); ?></h3>

                <table class="the7-system-status" cellspacing="0" cellpadding="0">
                    <tr>
                        <td><label for="the7-silence-bundled-plugins"><?php esc_html_e( 'Silence plugins activation messages', 'the7mk2' ); ?></label></td>
                        <td><input type="checkbox" id="the7-silence-bundled-plugins" name="the7_dashboard_settings[silence-plugins]" <?php checked( true, The7_Admin_Dashboard_Settings::get( 'silence-plugins' ) ); ?>></td>
                    </tr>
                </table>
            </div>

            <div class="the7-column<?php echo ( dt_the7_core_is_enabled() ? '' : ' hide-if-js' ); ?>" style="clear: both; width: 100%;">

                <h3><?php esc_html_e( 'The7 Post Types and Elements', 'the7mk2' ); ?></h3>

                <?php $hide_tr = 'class="hide-if-js"'; ?>
                <table class="the7-system-status" cellspacing="0" cellpadding="0">
                    <?php $portfolio_setting = The7_Admin_Dashboard_Settings::get( 'portfolio' ); ?>
                    <tr>
                        <td><label for="the7-post-type-portfolio"><?php esc_html_e( 'Portfolio', 'the7mk2' ); ?></label></td>
                        <td><input type="checkbox" id="the7-post-type-portfolio" name="the7_dashboard_settings[portfolio]" <?php checked( true, $portfolio_setting ); ?>></td>
                    </tr>
                    <tr <?php echo ( $portfolio_setting ? '' : $hide_tr ); ?>>
                        <td><label for="the7-post-type-portfolio-slug"><?php esc_html_e( 'Portfolio slug', 'the7mk2' ); ?></label></td>
                        <td><input type="text" id="the7-post-type-portfolio-slug" name="the7_dashboard_settings[portfolio-slug]" value="<?php echo The7_Admin_Dashboard_Settings::get( 'portfolio-slug' ); ?>"></td>
                    </tr>
                    <tr <?php echo ( $portfolio_setting ? '' : $hide_tr ); ?>>
                        <td><label for="the7-post-type-portfolio-layout"><?php esc_html_e( 'Project media', 'the7mk2' ); ?></label></td>
                        <td><input type="checkbox" id="the7-post-type-portfolio-layout" name="the7_dashboard_settings[portfolio-layout]" <?php checked( true, The7_Admin_Dashboard_Settings::get( 'portfolio-layout' ) ); ?>> <label for="the7-post-type-portfolio-layout"><?php esc_html_e( '(legacy feature)', 'the7mk2' ); ?></label></td>
                    </tr>
                    <tr>
                        <td><label for="the7-post-type-testimonials"><?php esc_html_e( 'Testimonials', 'the7mk2' ); ?></label></td>
                        <td><input type="checkbox" id="the7-post-type-testimonials" name="the7_dashboard_settings[testimonials]" <?php checked( true, The7_Admin_Dashboard_Settings::get( 'testimonials' ) ); ?>></td>
                    </tr>
	                <?php $team_setting = The7_Admin_Dashboard_Settings::get( 'team' ); ?>
                    <tr>
                        <td><label for="the7-post-type-team"><?php esc_html_e( 'Team', 'the7mk2' ); ?></label></td>
                        <td><input type="checkbox" id="the7-post-type-team" name="the7_dashboard_settings[team]" <?php checked( true, $team_setting ); ?>></td>
                    </tr>
                    <tr <?php echo ( $team_setting ? '' : $hide_tr ); ?>>
                        <td><label for="the7-post-type-team-slug"><?php esc_html_e( 'Team slug', 'the7mk2' ); ?></label></td>
                        <td><input type="text" id="the7-post-type-team-slug" name="the7_dashboard_settings[team-slug]" value="<?php echo The7_Admin_Dashboard_Settings::get( 'team-slug' ); ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="the7-post-type-logos"><?php esc_html_e( 'Partners, Clients, etc.', 'the7mk2' ); ?></label></td>
                        <td><input type="checkbox" id="the7-post-type-logos" name="the7_dashboard_settings[logos]" <?php checked( true, The7_Admin_Dashboard_Settings::get( 'logos' ) ); ?>> <label for="the7-post-type-logos"><?php esc_html_e( '(legacy feature)', 'the7mk2' ); ?></label></td>
                    </tr>
                    <tr>
                        <td><label for="the7-post-type-benefits"><?php esc_html_e( 'Benefits', 'the7mk2' ); ?></label></td>
                        <td><input type="checkbox" id="the7-post-type-benefits" name="the7_dashboard_settings[benefits]" <?php checked( true, The7_Admin_Dashboard_Settings::get( 'benefits' ) ); ?>> <label for="the7-post-type-benefits"><?php esc_html_e( '(legacy feature)', 'the7mk2' ); ?></label></td>
                    </tr>
	                <?php $albums_setting = The7_Admin_Dashboard_Settings::get( 'albums' ); ?>
                    <tr>
                        <td><label for="the7-post-type-albums"><?php esc_html_e( 'Photo Albums', 'the7mk2' ); ?></label></td>
                        <td><input type="checkbox" id="the7-post-type-albums" name="the7_dashboard_settings[albums]" <?php checked( true, The7_Admin_Dashboard_Settings::get( 'albums' ) ); ?>></td>
                    </tr>
                    <tr <?php echo ( $albums_setting ? '' : $hide_tr ); ?>>
                        <td><label for="the7-post-type-albums-slug"><?php esc_html_e( 'Photo Albums slug', 'the7mk2' ); ?></label></td>
                        <td><input type="text" id="the7-post-type-albums-slug" name="the7_dashboard_settings[albums-slug]" value="<?php echo The7_Admin_Dashboard_Settings::get( 'albums-slug' ); ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="the7-post-type-slideshow"><?php esc_html_e( 'Slideshows', 'the7mk2' ); ?></label></td>
                        <td><input type="checkbox" id="the7-post-type-slideshow" name="the7_dashboard_settings[slideshow]" <?php checked( true, The7_Admin_Dashboard_Settings::get( 'slideshow' ) ); ?>></td>
                    </tr>
                </table>
            </div>
		</div>
        <p>
		    <button type="submit" class="button button-primary"><?php esc_html_e( 'Save', 'the7mk2' ); ?></button>
            <span class="spinner" style="float: none; margin: 4px 10px"></span>
        </p>
	</form>
</div>