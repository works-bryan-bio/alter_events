<?php
/**
 * Licenses
 *
 * @package Strong_Testimonials
 * @since 2.1
 * @since 2.18 As a partial file. Using action hook for add-ons to append their info.
 *
 * TODO Add link to member account on website.
 */
?>
<div class="tab-header">
<p><?php _e( 'Valid license keys allow you to receive automatic updates.', 'strong-testimonials' ); ?></p>
<p><?php _e( 'If you want to transfer a license to another site or you plan to uninstall the add-on, you must deactivate the license here first.', 'strong-testimonials' ); ?></p>
</div>
<table class="form-table">
	<thead>
	<tr>
		<th><?php _e( 'Add-on', 'strong-testimonials' ); ?></th>
		<th class="for-license-key"><?php _e( 'License Key', 'strong-testimonials' ); ?></th>
		<th class="for-license-status"><?php _e( 'Status', 'strong-testimonials' ); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php do_action( 'wpmtst_licenses' ); ?>
	</tbody>
</table>
