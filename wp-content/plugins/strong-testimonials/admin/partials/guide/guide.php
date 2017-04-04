<div id="guide">

	<div class="section">

		<h2>How to get started</h2>

		<p>
			<?php _e( 'This plugin is different than others you may have tried.', 'strong-testimonials' ); ?>
            <strong><?php
			printf(
				wp_kses( __( 'You must create a <a href="%s">view</a> first.', 'strong-testimonials' ), $tags ),
				admin_url( 'edit.php?post_type=wpm-testimonial&page=testimonial-views' )
			);
			?></strong>
			<?php _e( 'A view is simply of group of settings with an easy-to-use editor. ', 'strong-testimonials' ); ?>
		</p>
		<p>
			<?php _e( 'You can create an unlimited number of views.', 'strong-testimonials' ); ?>
			<?php _e( 'For example:', 'strong-testimonials' ); ?>
        </p>
        <ul>
        <li><?php _e( 'a view to <b>display</b> your testimonials in a list or a grid', 'strong-testimonials' ); ?></li>
        <li><?php _e( 'another view to display testimonials from a specific <b>category</b>', 'strong-testimonials' ); ?></li>
        <li><?php _e( 'another view for the testimonial submission <b>form</b>', 'strong-testimonials' ); ?></li>
        <li><?php _e( 'another view for a <b>slideshow</b> widget', 'strong-testimonials' ); ?></li>
        </ul>
        <p>
			<?php _e( 'Add the view using its unique shortcode (which you will see after you save it) or the widget.', 'strong-testimonials' ); ?>
		</p>


	</div>

	<hr>

    <div class="section">

        <h2><?php _e( 'How to display the number of testimonials', 'strong-testimonials' ); ?></h2>

        <p>
			<?php printf( __( 'Use the %s shortcode.', 'strong-testimonials' ), '<code>&#91;testimonial_count&#93;</code>' ); ?>
            <?php _e( 'For example:', 'strong-testimonials' ); ?>
        </p>
        <p>
            <span style="background: white; font-family: Consolas, Monaco, monospace; padding: 3px 8px; display: inline-block;">
			    <?php printf( __( 'Read some of our %s testimonials!', 'strong-testimonials' ), '&#91;testimonial_count&#93;' ); ?>
            </span>
        </p>

        <p>
			<?php printf( __( 'To count for a specific category, add the %s attribute with the category slug.', 'strong-testimonials' ), '<code>category</code>' ); ?>
			<?php _e( 'For example:', 'strong-testimonials' ); ?>
        </p>
        <p>
            <span style="background: white; font-family: Consolas, Monaco, monospace; padding: 3px 8px; display: inline-block;">
			    <?php printf( __( 'Here\'s what %s local clients say', 'strong-testimonials' ), '&#91;testimonial_count category="local"&#93;' ); ?>
            </span>
        </p>

    </div>

    <hr>

    <div class="section">

		<h2><?php _e( 'Recently added features' ); ?></h2>

        <p><span class="dashicons dashicons-external"></span><?php _e( 'Form success redirect options.', 'strong-testimonials' ); ?></p>

        <p><span class="dashicons dashicons-editor-kitchensink"></span><?php _e( 'Form success message editor.', 'strong-testimonials' ); ?></p>

		<p><span class="dashicons dashicons-controls-play"></span><?php _e( 'More slideshow options.', 'strong-testimonials' ); ?></p>

		<p><span class="dashicons dashicons-star-filled"></span><?php _e( 'Star ratings.', 'strong-testimonials' ); ?></p>

		<p><span class="dashicons dashicons-performance"></span><?php _e( 'Improved compatibility and performance.', 'strong-testimonials' ); ?></p>

        <p></p>

	</div>

    <hr>

	<div class="section">

		<h2><?php _e( 'Translation', 'strong-testimonials' ); ?></h2>

		<p><?php _e( 'Strong Testimonials is compatible with WPML and Polylang.', 'strong-testimonials' ); ?></p>

		<p><?php _e( 'In each plugin, domains are added to the <strong>String Translation</strong> screens. Those domains encompass the form fields, the form messages, the notification email, and the "Read more" link text in your views. They are updated automatically when your form fields or settings change.', 'strong-testimonials' ); ?></p>

	</div>

	<hr>

	<div class="section">

		<h2><?php _e( 'Troubleshooting' ); ?></h2>

		<h3><?php _e( 'Upgrading from version 1?', 'strong-testimonials' ); ?></h3>

		<p><?php
		printf(
			wp_kses( __( 'The original shortcodes and widget were <a href="%s" target="_blank">removed in version 2</a>. Everything now happens in <strong>views</strong>.', 'strong-testimonials' ), $tags ),
			esc_url( 'https://strongplugins.com/strong-testimonials-version-2-coming-soon/' )
		);
		?></p>

	</div>

</div>
