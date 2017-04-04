<?php /* translators: On the Views admin screen. */ ?>
<th>
	<label for="view-category">
		<?php _e( 'Categories', 'strong-testimonials' ); ?>
	</label>
</th>
<td>
	<div id="view-category" class="row">
		<?php if ( $category_list ) : ?>
			<div class="table">
				<div class="table-row">

					<div class="table-cell select-cell then_display then_slideshow then_not_form">

						<select id="view-category-select" class="if selectper" name="view[data][category_all]">
							<option value="allcats" <?php selected( $view['category'], 'all' ); ?>><?php _e( 'all', 'strong-testimonials' ); ?></option>
							<option value="somecats" <?php echo ( 'all' != $view['category'] ? 'selected' : '' ); ?>><?php _ex( 'select', 'verb', 'strong-testimonials' ); ?></option>
						</select>

					</div>

					<div class="table-cell then then_not_allcats then_somecats" style="display: none;">
						<?php wpmtst_category_checklist( $view_cats_array ); ?>
					</div>

				</div>
			</div>
		<?php else : ?>
			<input type="hidden" name="view[data][category_all]" value="all">
			<p class="description tall"><?php _e( 'No categories found', 'strong-testimonials' ); ?></p>
		<?php endif; ?>
	</div>
</td>
