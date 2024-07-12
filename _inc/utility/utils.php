<?php

// DISPLAY PRODUCT CATEGORY IMAGE
function wct_display_cat_thumbnail($cat_id)
{
    $thumbnail_id = get_term_meta($cat_id, 'thumbnail_id', true);
    return wp_get_attachment_url($thumbnail_id);
}

// CALCULATE PRODUCT DISCOUNT AMOUNT
function wct_discount_calculator($regularPrice, $salePrice)
{
    $regular = intval($regularPrice);
    $sale = intval($salePrice);

    return ceil(($regular - $sale) / $regular) * 100;
}
