<?php
add_action("category_edit_form_fields", 'mayak_category_meta');
function mayak_category_meta( $term ) {
    ?>
        <tr class="form-field">
            <th scope="row" valign="top"><label>Заголовок (title)</label></th>
            <td>
                <input type="text" name="mayak[title]" value="<?php echo esc_attr( get_term_meta( $term->term_id, 'title', 1 ) ) ?>"><br />
                <p class="description">Не более 60 знаков, включая пробелы</p>
            </td>
        </tr>
        <tr class="form-field">
            <th scope="row" valign="top"><label>Заголовок h1</label></th>
            <td>
                <input type="text" name="mayak[h1]" value="<?php echo esc_attr( get_term_meta( $term->term_id, 'h1', 1 ) ) ?>"><br />
                <p class="description">Заголовок страницы</p>
            </td>
        </tr>
        <tr class="form-field">
            <th scope="row" valign="top"><label>Ключевые слова</label></th>
            <td>
                <input type="text" name="mayak[keywords]" value="<?php echo esc_attr( get_term_meta( $term->term_id, 'keywords', 1 ) ) ?>"><br />
                <p class="description">Ключевые слова (keywords)</p>
            </td>
        </tr>
<tr class="form-field">
<th scope="row" valign="top"><label>Краткое описание (description)</label></th>
<td>
<input type="text" name="mayak[description]" value="<?php echo esc_attr( get_term_meta( $term->term_id, 'description', 1 ) ) ?>"><br />
<p class="description">Краткое описание (description)</p>
</td>
</tr>
    <?php
}
// Add custom Theme Functions here
// Добавить вариант сортировки: По названию

add_filter( 'woocommerce_get_catalog_ordering_args', 'custom_woocommerce_get_catalog_ordering_name_args' );

function custom_woocommerce_get_catalog_ordering_name_args( $args ) {
$orderby_value = isset( $_GET['orderby'] ) ? woocommerce_clean( $_GET['orderby'] ) : apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) );

if ( 'name_list' == $orderby_value ) {
$args['orderby'] = 'name';
$args['order'] = 'ASC';
$args['meta_key'] = '';
}

return $args;
}

add_filter( 'woocommerce_default_catalog_orderby_options', 'custom_woocommerce_catalog_name_orderby' );
add_filter( 'woocommerce_catalog_orderby', 'custom_woocommerce_catalog_name_orderby', 1 );

function custom_woocommerce_catalog_name_orderby( $sortby ) {
$sortby['name_list'] = 'По названию';
return $sortby;
}
function custom_woocommerce_catalog_orderby( $orderby ) {
unset($orderby["popularity"]); // по популярности
unset($orderby["rating"]); // по рейтингу
unset($orderby["date"]);
return $orderby;
}
add_filter( "woocommerce_catalog_orderby", "custom_woocommerce_catalog_orderby", 20 );

////добавляем сортировку на страницу//
add_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 1 );

//исключаем некоторые категории товара//
//add_filter( 'woocommerce_product_categories_widget_args', 'organicweb_exclude_widget_category' );
function organicweb_exclude_widget_category( $args ) {
// Enter the id of the category you want to exclude in place of '30'
		$args['exclude'] = array('820, 836, 824, 827, 821, 835, 822, 833, 826, 830, 829, 828, 825, 823, 834, 832 ' );
		return $args;
}

add_filter( 'get_terms', 'organicweb_exclude_category', 10, 3 );
function organicweb_exclude_category( $terms, $taxonomies, $args ) {
  $new_terms = array();
  // if a product category and on a page
  if ( in_array( 'product_cat', $taxonomies ) && ! is_admin() &&  is_shop() ) {
    foreach ( $terms as $key => $term ) {
// Enter the name of the category you want to exclude in place of 'uncategorised, aksessuary'
      if ( ! in_array( $term->slug, array( 'uncategorised' ) ) ) {
        $new_terms[] = $term;
      }
    }
    $terms = $new_terms;
  }
  return $terms;
}
//


