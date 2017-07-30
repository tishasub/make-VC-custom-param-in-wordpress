# How-to-Create-VC( Visual Composer )-custom-param-in-wordpress

Usage:

Write VC type your own VC param name.

array(
   'type' => 'tr_post_category',
   'heading' => esc_html__( 'Post Categories', 'themeregion' ),
   'param_name' => 'category',
   "value"       => "",
   "description" => esc_html__("Select categories", 'themeregion')
),
