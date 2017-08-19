<?php
  /*
  ** This function for viewing post category as VC param name. Add this function in your theme file function.php
  */
  /* VC CUSTOM PARAMETER */
if( !function_exists('post_category_settings_field') ){

    vc_add_shortcode_param( 'post_category', 'post_category_settings_field' );
    function post_category_settings_field( $settings, $value ) {
        $args = array(
            'taxonomy' => 'category',
            'orderby' => 'name',
            'parent' => 0
        );
        $categories = get_categories( $args );
        
        $output = '';
        $output .= '<select class="wpb_vc_param_value multiple-category'. esc_attr( $settings['param_name'] ) . ' ' .
                 esc_attr( $settings['type'] ) . '_field" name="' . esc_attr( $settings['param_name'] ) . '" multiple="multiple">';
        
            $i = 0;
        foreach ( $categories as $category ) {
            $selected = '';
            foreach ($value as $val) {
                if ( $category->term_id == $val ) {
                    $selected = ' selected="selected"';
                }
            }
            $output .= '<option class="' . esc_attr( $option_class ) . '" value="'.$category->term_id.'"'.$selected.'>'. $category->name .'</option>';
        }
        $output .= '</select>';
        return $output;
    }
}
?>
