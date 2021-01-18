<?php
/**
 * Block Name: Has Side Bar Block
 *
 * This is the template that displays the blcok of cards block.
 */

$custom_margins_toggle =  get_field('custom_margins_toggle');
$custom_margins_top =  get_field('custom_margins_top');
$custom_margins_bottom =  get_field('custom_margins_bottom');
$custom_margins_right =  get_field('custom_margins_right');
$custom_margins_left =  get_field('custom_margins_left');
$custom_margins_mobile_toggle =  get_field('custom_margins_mobile_toggle');
$custom_margins_top_mobile =  get_field('custom_margins_top_mobile');
$custom_margins_bottom_mobile =  get_field('custom_margins_bottom_mobile');
$custom_margins_right_mobile =  get_field('custom_margins_right_mobile');
$custom_margins_left_mobile =  get_field('custom_margins_left_mobile');
$custom_paddings_toggle =  get_field('custom_paddings_toggle');
$custom_paddings_top =  get_field('custom_paddings_top');
$custom_paddings_bottom =  get_field('custom_paddings_bottom');
$custom_paddings_right =  get_field('custom_paddings_right');
$custom_paddings_left =  get_field('custom_paddings_left');
$custom_paddings_mobile_toggle =  get_field('custom_paddings_mobile_toggle');
$custom_paddings_top_mobile =  get_field('custom_paddings_top_mobile');
$custom_paddings_bottom_mobile =  get_field('custom_paddings_bottom_mobile');
$custom_paddings_right_mobile =  get_field('custom_paddings_right_mobile');
$custom_paddings_left_mobile =  get_field('custom_paddings_left_mobile');
// create id attribute for specific styling
$id = 'side-bar-block-item-' . $block['id'];

// create additionnal class options from block additional css settings
$add_class = $block['className'] ? '' . $block['className'] : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// create anchor id ("id") from block setting ("anchor")
$anchor_id = $block['anchor'] ? '' . $block['anchor'] : '';
?>
<?php

// vars
$side_bar_menu_item_anchor_link = get_field('side_bar_menu_item_anchor_link');
$side_bar_menu_item_text = get_sub_field('side_bar_menu_item_text');

?>
<style scoped>
	<?php if ((!empty($custom_margins_toggle)) || (!empty($custom_paddings_toggle)) ) : { ?>@media only screen and (min-width: 48.1rem) {#<?php echo $id; ?> { <?php if (!empty($custom_margins_top)) : echo 'margin-top:'; the_field('custom_margin_top');  echo 'rem; '; endif; if (!empty($custom_margins_right)) : echo 'margin-right:'; the_field('custom_margin_right');  echo 'rem; '; endif; if (!empty($custom_margins_bottom)) : echo 'margin-bottom:'; the_field('custom_margin_bottom');  echo 'rem; '; endif; if (!empty($custom_margins_left)) : echo 'margin-left:'; the_field('custom_margin_left');  echo 'rem; '; endif; ?> <?php if (!empty($custom_paddings_top)) : echo 'padding-top:'; the_field('custom_padding_top');  echo 'rem; '; endif; if (!empty($custom_paddings_right)) : echo 'padding-right:'; the_field('custom_padding_right');  echo 'rem; '; endif; if (!empty($custom_paddings_bottom)) : echo 'padding-bottom:'; the_field('custom_padding_bottom');  echo 'rem; '; endif; if (!empty($custom_paddings_left)) : echo 'padding-left:'; the_field('custom_padding_left');  echo 'rem; '; endif; ?>}}<?php } endif; ?>
	<?php if ((!empty($custom_margins_mobile_toggle)) || (!empty($custom_paddings_mobile_toggle)) ) : { ?>@media only screen and (max-width: 48rem) {#<?php echo $id; ?> { <?php if (!empty($custom_margins_top_mobile)) : echo 'margin-top:'; the_field('custom_margin_top_mobile');  echo 'rem; '; endif; if (!empty($custom_margins_right_mobile)) : echo 'margin-right:'; the_field('custom_margin_right_mobile');  echo 'rem; '; endif; if (!empty($custom_margins_bottom_mobile)) : echo 'margin-bottom:'; the_field('custom_margin_bottom_mobile');  echo 'rem; '; endif; if (!empty($custom_margins_left_mobile)) : echo 'margin-left:'; the_field('custom_margin_left_mobile');  echo 'rem; '; endif; ?><?php if (!empty($custom_paddings_top_mobile)) : echo 'padding-top:'; the_field('custom_padding_top_mobile');  echo 'rem; '; endif; if (!empty($custom_paddings_right_mobile)) : echo 'padding-right:'; the_field('custom_padding_right_mobile');  echo 'rem; '; endif; if (!empty($custom_paddings_bottom_mobile)) : echo 'padding-bottom:'; the_field('custom_padding_bottom_mobile');  echo 'rem; '; endif; if (!empty($custom_paddings_left_mobile)) : echo 'padding-left:'; the_field('custom_padding_left_mobile');  echo 'rem; '; endif; ?>}}<?php } endif; ?>
    h2 { color: FireBrick;   }
    p  { color: SaddleBrown; }
  </style>
<div id="<?php echo $id; ?>" class="blockLayout <?php if (!empty($block['align'])) : echo ' ' . $align_class; endif; if (!empty($block['className'])) : echo ' ' . $add_class; endif; ?>" >

	<InnerBlocks />
</div>

