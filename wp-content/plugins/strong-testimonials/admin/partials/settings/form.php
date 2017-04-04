<?php
/**
 * Form Settings
 *
 * @package Strong_Testimonials
 * @since 1.13
 */
$pages_list   = wpmtst_get_pages();
$form_options = get_option( 'wpmtst_form_options' );
$plugins      = wpmtst_get_captcha_plugins();

foreach ( $plugins as $key => $plugin ) {

	if ( file_exists( WP_PLUGIN_DIR . '/' . $plugin['file'] ) ) {
		$plugins[ $key ]['installed'] = true;
	}

	$plugins[ $key ]['active'] = is_plugin_active( $plugin['file'] );

	// If current Captcha plugin has been deactivated, disable Captcha
	// so corresponding div does not appear on front-end form.
	if ( $key == $form_options['captcha'] && !$plugins[ $key ]['active'] ) {
		$form_options['captcha'] = '';
		update_option( 'wpmtst_form_options', $form_options );
	}

}
?>
<input type="hidden" name="wpmtst_form_options[default_recipient]" value="<?php echo htmlentities( serialize( $form_options['default_recipient'] ) ); ?>">

<?php
/**
 * ========================================
 * Labels & Messages
 * ========================================
 */
?>
<h2><?php _e( 'Form Labels & Messages', 'strong-testimonials' ); ?></h2>

<?php
do_action( 'wpmtst_before_form_settings' );

// WPML
if ( wpmtst_is_plugin_active( 'wpml' ) ) {
    echo '<span class="dashicons dashicons-info icon-blue"></span>&nbsp;';
	printf( __( 'Translate these fields in <a href="%s">WPML String Translations</a>', 'strong-testimonials' ),
		admin_url( 'admin.php?page=wpml-string-translation%2Fmenu%2Fstring-translation.php&context=strong-testimonials-form-messages' ) );
}

// Polylang
if ( wpmtst_is_plugin_active( 'polylang' ) ) {
	echo '<span class="dashicons dashicons-info icon-blue"></span>&nbsp;';
	printf( __( 'Translate these fields in <a href="%s">Polylang String Translations</a>', 'strong-testimonials' ),
		admin_url( 'options-general.php?page=mlang&tab=strings&s&group=strong-testimonials-form-messages&paged=1' ) );
}
?>

<table class="form-table compact" cellpadding="0" cellspacing="0">
	<?php
    $messages = $form_options['messages'];
	foreach ( $messages as $key => $message ):
        $elid = str_replace( '-', '_', $key );
        $content = apply_filters( 'wpmtst_l10n', $message['text'], wpmtst_get_l10n_context( 'form-messages' ), $key . ' : text' );
        ?>

        <tr>
            <th scope="row">
                <label for="<?php echo $elid; ?>">
                    <?php _ex( $message['description'], 'description', 'strong-testimonials' ); ?>
                </label>
                <input type="hidden" name="wpmtst_form_options[messages][<?php echo $key; ?>][description]"
                       value="<?php esc_attr_e( $message['description'] ); ?>"/>
            </th>
            <td>
                <?php if ( 'submission_success' == $elid ): ?>
				    <?php
					$settings = array(
						'textarea_name' => "wpmtst_form_options[messages][$key][text]",
                        'textarea_rows' => 10,
					);
                    wp_editor( $content, $elid, $settings );
                    ?>
				<?php else: ?>
                    <input type="text" id="<?php echo $elid; ?>"
                           name="wpmtst_form_options[messages][<?php echo $key; ?>][text]"
                           value="<?php echo esc_attr( $content ); ?>" required />
                <?php endif; ?>
            </td>
            <td class="actions">
                <input type="button" class="button secondary restore-default-message"
                       value="<?php _ex( 'restore default', 'singular', 'strong-testimonials' ); ?>"
                       data-target-id="<?php echo $elid; ?>"/>
            </td>
        </tr>

	<?php endforeach; ?>

	<tr>
		<td colspan="3">
			<input type="button" id="restore-default-messages" class="button"
                   name="restore-default-messages"
                   value="<?php _e( 'Restore Default Messages', 'strong-testimonials' ); ?>"/>
		</td>
	</tr>
</table>

<table class="form-table" cellpadding="0" cellspacing="0">
    <tr>
        <th scope="row" class="tall">
			<?php _e( 'Scroll', 'strong-testimonials' ); ?>
        </th>
        <td>
            <fieldset>
                <div>
                    <label>
                        <input type="checkbox" name="wpmtst_form_options[scrolltop_error]" <?php checked( $form_options['scrolltop_error'] ); ?>/>
						<?php printf( __( 'If errors, scroll to the first error minus %s pixels. On by default.', 'strong-testimonials' ), '<input type="text" name="wpmtst_form_options[scrolltop_error_offset]" value="' . $form_options['scrolltop_error_offset'] . '" size="3">' ); ?>
                    </label>
                </div>
                <div>
                    <label class="block">
                        <input type="checkbox" name="wpmtst_form_options[scrolltop_success]" <?php checked( $form_options['scrolltop_success'] ); ?>/>
						<?php printf( __( 'If success, scroll to the success message minus %s pixels. On by default.', 'strong-testimonials' ), '<input type="text" name="wpmtst_form_options[scrolltop_success_offset]" value="' . $form_options['scrolltop_success_offset'] . '" size="3">' ); ?>
                    </label>
                </div>
            </fieldset>
        </td>
    </tr>
</table>

<?php
/**
 * ========================================
 * Actions
 * ========================================
 */
?>
<hr>
<h3><?php _e( 'Form Actions', 'strong-testimonials' ); ?></h3>

<table class="form-table" cellpadding="0" cellspacing="0">
	<tr>
		<th scope="row">
            <label for="redirect-page">
			    <?php _e( 'Upon Successful Submission', 'strong-testimonials' ); ?>
            </label>
		</th>
        <td>
            <div>
                <label class="success-action">
                    <input type="radio" name="wpmtst_form_options[success_action]" value="message" <?php checked( 'message', $form_options['success_action'] ); ?>/> <?php _e( 'display message', 'strong-testimonials' ); ?>
                </label>
            </div>

            <div>
                <label class="success-action">
                    <input type="radio" name="wpmtst_form_options[success_action]" value="id" <?php checked( 'id', $form_options['success_action'] ); ?>/> <?php _e( 'redirect to a page', 'strong-testimonials' ); ?>
                </label>

                <select id="redirect-page" name="wpmtst_form_options[success_redirect_id]">

                    <option value=""><?php _e( '&mdash; select a page &mdash;' ); ?></option>

                    <?php foreach ( $pages_list as $pages ) : ?>

                        <option value="<?php echo $pages->ID; ?>" <?php selected( isset( $form_options['success_redirect_id'] ) ? $form_options['success_redirect_id'] : 0, $pages->ID ); ?>>
                            <?php echo $pages->post_title; ?>
                        </option>

                    <?php endforeach; ?>

                </select>

                <div style="display: inline-block;">
                    <label>
                        &nbsp;<?php _ex( 'or enter its ID or slug', 'to select a redirect page', 'strong-testimonials' ); ?>&nbsp;
                        <input type="text" id="redirect-page-2" name="wpmtst_form_options[success_redirect_2]" size="30"/>
                    </label>
                </div>
            </div>

            <div>
                <label class="success-action">
                    <input type="radio" name="wpmtst_form_options[success_action]" value="url" <?php checked( 'url', $form_options['success_action'] ); ?>/> <?php _e( 'redirect to a URL', 'strong-testimonials' ); ?>
                </label>
                <label>
                    <input type="text" id="redirect-page-3"
                           name="wpmtst_form_options[success_redirect_url]"
                           value="<?php echo $form_options['success_redirect_url']; ?>" size="75"/>
                </label>
            </div>

		</td>
	</tr>

	<tr>
		<th scope="row">
            <label>
			    <?php _e( 'Post Status', 'strong-testimonials' ); ?>
            </label>
		</th>
		<td>
			<ul class="compact">
				<li>
					<label>
						<input type="radio" name="wpmtst_form_options[post_status]" value="pending"
                            <?php checked( 'pending', $form_options['post_status'] ); ?>/>
						<?php _e( 'Pending', 'strong-testimonials' ); ?>
					</label>
				</li>
				<li>
					<label>
						<input type="radio" name="wpmtst_form_options[post_status]" value="publish"
                            <?php checked( 'publish', $form_options['post_status'] ); ?>/>
						<?php _e( 'Published' ); ?>
					</label>
				</li>
			</ul>
		</td>
	</tr>

	<tr>
		<th scope="row" class="tall">
            <label for="wpmtst-options-admin-notify">
			    <?php _e( 'Notification', 'strong-testimonials' ); ?>
            </label>
		</th>

		<td class="subsection">

			<fieldset>
				<label>
					<input id="wpmtst-options-admin-notify" type="checkbox" name="wpmtst_form_options[admin_notify]"
                        <?php checked( $form_options['admin_notify'] ); ?>/>
					<?php _e( 'Send an email upon new testimonial submission.', 'strong-testimonials' ); ?>
				</label>
			</fieldset>

			<div id="admin-notify-fields" style="display: none;">
				<?php include 'email-from.php'; ?>
				<?php include 'email-to.php'; ?>
				<?php include 'email.php'; ?>
				<?php
				// WPML
				if ( wpmtst_is_plugin_active( 'wpml' ) ) {
					echo '<p>' . sprintf( __( 'Translate these fields in <a href="%s">WPML String Translations</a>', 'strong-testimonials' ),
						admin_url( 'admin.php?page=wpml-string-translation%2Fmenu%2Fstring-translation.php&context=strong-testimonials-notification' ) ) . '</p>';
				}

				// Polylang
				if ( wpmtst_is_plugin_active( 'polylang' ) ) {
					echo '<p>' . sprintf( __( 'Translate these fields in <a href="%s">Polylang String Translations</a>', 'strong-testimonials' ),
						admin_url( 'options-general.php?page=mlang&tab=strings&s&group=strong-testimonials-notification&paged=1' ) ) . '</p>';
				}
				?>
			</div>

		</td><!-- .subsection -->
	</tr>
</table>

<?php
/**
 * ========================================
 * Spam Control
 * ========================================
 */
?>
<hr>
<h3><?php _e( 'Form Spam Control', 'strong-testimonials' );?></h3>

<table class="form-table" cellpadding="0" cellspacing="0">
	<tr>
		<th scope="row">
            <label>
			    <?php _ex( 'Honeypot', 'spam control techniques', 'strong-testimonials' ); ?>
            </label>
		</th>
		<td>
			<p><?php _e( 'These methods are both time-tested and widely used. They can be used simultaneously for more protection.', 'strong-testimonials' ); ?></p>
			<ul>
				<li class="checkbox">
					<label>
						<input type="checkbox" name="wpmtst_form_options[honeypot_before]" <?php checked( $form_options['honeypot_before'] ); ?>/>
						<?php _e( 'Before', 'strong-testimonials' ); ?>
					</label>
					<p class="description"><strong><?php _e( 'Recommended.', 'strong-testimonials' ); ?></strong>&nbsp;<?php _e( 'Traps spambots by adding an extra empty field that is invisible to humans but not to spambots which tend to fill in every field they find in the form code. Empty field = human. Not empty = spambot.', 'strong-testimonials' ); ?></p>
				</li>
				<li class="checkbox">
					<label>
						<input type="checkbox" name="wpmtst_form_options[honeypot_after]" <?php checked( $form_options['honeypot_after'] ); ?>/>
						<?php _e( 'After', 'strong-testimonials' ); ?>
					</label>
					<p class="description"><?php _e( 'Traps spambots by using JavaScript to add a new field as soon as the form is submitted. Since spambots cannot run JavaScript, the new field never gets added. New field = human. Missing = spambot.', 'strong-testimonials' ); ?></p>
				</li>
			</ul>
		</td>
	</tr>
	<tr valign="top">
		<th scope="row">
            <label>
			    <?php _e( 'Captcha', 'strong-testimonials' ); ?>
            </label>
		</th>
		<td class="stackem">
			<p><?php _e( 'Can be used alongside honeypot methods. Be sure to configure any plugins first, if necessary.', 'strong-testimonials' ); ?></p>
			<ul>
				<li>
					<label>
						<input type="radio" name="wpmtst_form_options[captcha]" <?php checked( '', $form_options['captcha'] ); ?> value=""/> none
					</label>
				</li>

				<?php foreach ( $plugins as $key => $plugin ) : ?>
				<li>
					<label class="inline <?php if ( ! $plugin['active'] ) echo 'disabled'; ?>">
						<input type="radio" id="" name="wpmtst_form_options[captcha]" <?php disabled( ! $plugin['active'] ); ?><?php checked( $key, $form_options['captcha'] ); ?> value="<?php echo $key; ?>"/>
						<?php echo $plugin['name']; ?>
					</label>

					<?php if ( isset( $plugin['installed'] ) && $plugin['installed'] ) : ?>

						<?php if ( $plugin['active'] ) : ?>

							<?php if ( isset( $plugin['settings'] ) && $plugin['settings'] ) : ?>
								<span class="link"><a href="<?php echo $plugin['settings']; ?>"><?php _ex( 'settings', 'link', 'strong-testimonials' ); ?></a></span> |
							<?php else : ?>
								<span class="notice"><?php _e( 'no settings', 'strong-testimonials' ); ?></span> |
							<?php endif; ?>

						<?php else : ?>

							<span class="notice disabled"><?php _ex( 'inactive', 'adjective', 'strong-testimonials' ); ?></span> |

						<?php endif; ?>

					<?php else : ?>

						<span class="notice disabled">(<?php _e( 'not installed', 'strong-testimonials' ); ?>)</span> |
						<span class="link"><a href="<?php echo $plugin['search']; ?>"><?php _ex( 'install plugin', 'link', 'strong-testimonials' ); ?></a></span> |

					<?php endif; ?>

					<span class="link"><a href="<?php echo $plugin['url']; ?>" target="_blank"><?php _ex( 'plugin page', 'link', 'strong-testimonials' ); ?></a></span>
				</li>
				<?php endforeach; ?>
			</ul>
		</td>
	</tr>
</table>
