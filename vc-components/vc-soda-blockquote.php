<?php
class VcRepeaterBlock extends WPBakeryShortCode {

    function __construct() {
        add_action( 'init', array( $this, 'create_shortcode' ), 999 );
        add_shortcode( 'vc_repeater_block', array( $this, 'render_shortcode' ) );

    }

    public function create_shortcode() {
        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }

        // Map blockquote with vc_map()
        vc_map( array(
            'name'          => __('Repeater', 'bakerytest'),
            'base'          => 'vc_repeater_block',
            'description'  	=> '',
            'category'      => __( 'Content', 'bakerytest'),
            'params' => array(

                array(
                    'type'          => 'textfield',
                    'holder'        => 'div',
                    'heading'       => __( 'Title block', 'bakerytest' ),
                    'param_name'    => 'title_block',
                    'value'         => __( '', 'bakerytest' ),
                    'description'   => __( 'Add Title block', 'bakerytest' ),
                ),

                array(
                    'type' => 'param_group',
                    "heading" => __( "Block Repeater", 'bakerytest' ),
                    'value' => '',
                    'param_name' => 'steps',
                    'params' => array(
                        array(
                          'type' => 'attach_image',
                          'value' => '',
                          'heading' => __( 'Icon', 'bakerytest'),
                          'param_name' => 'icon_repeat_item'
                        ),
                        array(
                            'type' => 'textfield',
                            'value' => '',
                            'heading' => __( 'Tite', 'bakerytest'),
                            'param_name' => 'title',
                        ),
                        array(
                            "type" => "textfield",
                            'value' => '',
                            'heading' => __( 'Description',  'bakerytest'),
                            'param_name' => 'desc',
                        )
                    ),
                ),
            ),
        ));

    }

    public function render_shortcode( $atts, $content, $tag ) {

        $atts = (shortcode_atts(array(
            'title_block'   => '',
            'steps'      => '',
        ), $atts));

        //Title
        $title_block = esc_html($atts['title_block']) ?? '';
        // Items
        $steps = vc_param_group_parse_atts($atts['steps']) ?? '';

        $output = '';
        $output .= '<section class="industries"><h1>' .$title_block. '</h1>';
        $output .= '<div class="four-columns">';
        if (isset($steps)){
            foreach ($steps as $el) {
                $el_title = $el['title'] ?? '';
                $el_desc = $el['desc'] ?? '';
                $el_icon = $el['icon_repeat_item'] ?? '';

                $output .= '<div class="col">';
                $output .= '<div class="image-box">' . wp_get_attachment_image($el_icon, 'full') . '</div>';
                $output .= '<div class="text-holder">';
                $output .= '<strong class="title">' . $el_title . '</strong>';
                $output .= '<p>' . $el_desc . '</p>';
                $output .= '</div>';
                $output .= '</div>';
            }
        }
        $output .= '</div>';
        $output .= '</section>';

        return $output;

    }

}

new VcRepeaterBlock();
