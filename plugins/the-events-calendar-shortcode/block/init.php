<?php
/**
 * Register the block assets and server render callback
 *
 * @since 1.9.0
 */
function ecs_register_block() {
    if ( ! function_exists( 'register_block_type' ) ) {
        return;
    }

    // Avoid loading if the cornerstone page builder plugin is installed due to conflicts
    if ( class_exists( 'Cornerstone_Plugin' ) ) {
        return;
    }

    // Avoid loading if Divi (or other elegant themes) are activated due to core JS conflicts
    if ( defined( 'ET_CORE_PATH' ) || function_exists( 'et_setup_theme' ) ) {
        return;
    }

    $script_dependencies = ecs_get_block_dependencies();

    wp_register_script(
        'ecs-block-js',
        plugins_url( 'static/block.js', __DIR__ ),
        $script_dependencies['dependencies'],
        Events_Calendar_Shortcode::VERSION
    );

    if ( function_exists( 'wp_set_script_translations' ) ) {
        wp_set_script_translations( 'ecs-block', 'the-events-calendar-shortcode' );
    }

    wp_register_style(
        'ecs-block-css',
        plugins_url( 'static/ecs-block.css', __DIR__ ),
        [],
        Events_Calendar_Shortcode::VERSION
    );

    $attributes = apply_filters( 'ecs_block_attributes', [
        'design' => [
            'type' => 'string',
            'default' => 'standard',
        ],
        'limit' => [
            'type' => 'number',
        ],
        'settings' => [
            'type' => 'string',
            'default' => json_encode( [ 'design', 'limit', 'order', 'thumb', 'venue', 'excerpt', 'contentorder' ] ),
        ],
        'cat' => [ 'type' => 'string' ],
        'month' => [ 'type' => 'string' ],
        'thumb' => [
            'type' => 'string',
        ],
        'thumbsize' => [
            'type' => 'string',
            'default' => '',
        ],
        'thumbwidth' => [
            'type' => 'string',
            'default' => '',
        ],
        'thumbheight' => [
            'type' => 'string',
            'default' => '',
        ],
        'venue' => [
            'type' => 'string',
        ],
        'past' => [ 'type' => 'string' ],
        'orderby' => [
            'type' => 'string',
        ],
        'order' => [
            'type' => 'string',
        ],
        'excerpt' => [
            'type' => 'string',
        ],
        'contentorder' => [
            'type' => 'array',
        ],
        'keyValue' => [ 'type' => 'string' ],
    ] );

    register_block_type( 'events-calendar-shortcode/block', [
        'editor_style' => 'ecs-block-css',
        'editor_script' => 'ecs-block-js',
        'render_callback' => 'ecs_render_block',
        'attributes' => $attributes,
    ] );
}
add_action( 'init', 'ecs_register_block' );

/**
 * Maps the saved block attributes to the existing shortcode for front-end render
 *
 * @param array $attributes
 *
 * @since 1.9.0
 */
function ecs_render_block( $attributes ) {
    $attribute_str = '';

    foreach ( $attributes as $key => $value ) {
        if ( $key === 'settings' ) {
            continue;
        }

        if ( $key === 'keyValue' ) {
            $kv_attributes = json_decode( $value );

            foreach ( $kv_attributes as $kv_attribute ) {
                $attribute_str .= " {$kv_attribute->key}=\"{$kv_attribute->value}\"";
            }
            continue;
        }

        if ( $key === 'contentorder' ) {
            $contentorder_items = array_filter( $value, function( $option ) {
                return in_array( $option['checked'], [ 'true', true ], true ); // we need to check both string and boolean values for ServerSideRender to work
            } );

            if ( ! empty( $contentorder_items ) ) {
                $contentorder_items = array_map( function( $option ) {
                    return $option['value'];
                }, $contentorder_items );

                $attribute_str .= " contentorder=\"" . implode( ',', $contentorder_items ) . "\"";
            }

            continue;
        }

        if ( isset( $attributes[ $key ] ) && ! empty( $attributes[ $key ] ) ) {
            $attribute_str .= " {$key}=\"{$value}\"";
        }
    }

    $shortcode_str = "[ecs-list-events{$attribute_str}]";

    return do_shortcode( $shortcode_str );
}

/**
 * Retrieves the block dependencies generated by webpack dependency extract plugin.
 *
 * @return array $script_dependencies
 */
function ecs_get_block_dependencies() {
    $asset_manifest_file = plugin_dir_path( TECS_CORE_PLUGIN_FILE ) . 'static/block.asset.json';
    $asset_manifest = file_exists( $asset_manifest_file ) ? file_get_contents( $asset_manifest_file ) : false;

    if ( $asset_manifest === false ) {
        $script_dependencies = [
            'dependencies' => [],
            'version' => Events_Calendar_Shortcode::VERSION,
        ];
    } else {
        $script_dependencies = json_decode( $asset_manifest, true );
    }

    return $script_dependencies;
}
