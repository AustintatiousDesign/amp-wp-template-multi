<?php if ((null != $custom_padding_toggle) || (null != $custom_margins_toggle) ) : { ?>@media only screen and (min-width: 48.1rem) {#<?php echo $custom_id ?> { <?php if (!empty($custom_margins_top)) : echo 'margin-top:'; the_field('custom_margin_top');  echo 'rem; '; endif; if (!empty($custom_margins_right)) : echo 'margin-right:'; the_field('custom_margin_right');  echo 'rem; '; endif; if (!empty($custom_margins_bottom)) : echo 'margin-bottom:'; the_field('custom_margin_bottom');  echo 'rem; '; endif; if (!empty($custom_margins_left)) : echo 'margin-left:'; the_field('custom_margin_left');  echo 'rem; '; endif; ?> <?php if (!empty($custom_paddings_top)) : echo 'padding-top:'; the_field('custom_padding_top');  echo 'rem; '; endif; if (!empty($custom_paddings_right)) : echo 'padding-right:'; the_field('custom_padding_right');  echo 'rem; '; endif; if (!empty($custom_paddings_bottom)) : echo 'padding-bottom:'; the_field('custom_padding_bottom');  echo 'rem; '; endif; if (!empty($custom_paddings_left)) : echo 'padding-left:'; the_field('custom_padding_left');  echo 'rem; '; endif; ?>}}<?php } endif; ?>
<?php if ((null != $custom_margins_mobile_toggle) || (null != $custom_paddings_mobile_toggle) ) : { ?>@media only screen and (max-width: 48rem) {#<?php echo $custom_id ?> { <?php if (!empty($custom_margins_top_mobile)) : echo 'margin-top:'; the_field('custom_margin_top_mobile');  echo 'rem; '; endif; if (!empty($custom_margins_right_mobile)) : echo 'margin-right:'; the_field('custom_margin_right_mobile');  echo 'rem; '; endif; if (!empty($custom_margins_bottom_mobile)) : echo 'margin-bottom:'; the_field('custom_margin_bottom_mobile');  echo 'rem; '; endif; if (!empty($custom_margins_left_mobile)) : echo 'margin-left:'; the_field('custom_margin_left_mobile');  echo 'rem; '; endif; ?><?php if (!empty($custom_paddings_top_mobile)) : echo 'padding-top:'; the_field('custom_padding_top_mobile');  echo 'rem; '; endif; if (!empty($custom_paddings_right_mobile)) : echo 'padding-right:'; the_field('custom_padding_right_mobile');  echo 'rem; '; endif; if (!empty($custom_paddings_bottom_mobile)) : echo 'padding-bottom:'; the_field('custom_padding_bottom_mobile');  echo 'rem; '; endif; if (!empty($custom_paddings_left_mobile)) : echo 'padding-left:'; the_field('custom_padding_left_mobile');  echo 'rem; '; endif; ?>}}<?php } endif; ?>

