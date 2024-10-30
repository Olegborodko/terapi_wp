<?php
function my_terapi_pattern_category() {
    register_block_pattern_category(
        'terapi',
        array( 
            'label' => __('A_Terapi', 'text-domain')
        )
    );
}

add_action('init', 'my_terapi_pattern_category');
