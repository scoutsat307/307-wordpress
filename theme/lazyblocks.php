<?php

if ( function_exists( 'lazyblocks' ) ) :

lazyblocks()->add_block( array(
    'id' => 120,
    'title' => 'Form Card',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3 21h18v-2H3v2zm0-4h18v-2H3v2zm0-4h18v-2H3v2zm0-4h18V7H3v2zm0-6v2h18V3H3z" /></svg>',
    'keywords' => array(
    ),
    'slug' => 'lazyblock/form-card',
    'description' => '',
    'category' => 'reusable',
    'category_label' => 'reusable',
    'supports' => array(
        'customClassName' => true,
        'anchor' => false,
        'align' => array(
            0 => 'wide',
            1 => 'full',
        ),
        'html' => false,
        'multiple' => true,
        'inserter' => true,
    ),
    'ghostkit' => array(
        'supports' => array(
            'spacings' => false,
            'display' => false,
            'scrollReveal' => false,
            'frame' => false,
            'customCSS' => false,
        ),
    ),
    'controls' => array(
        'control_1468544497' => array(
            'type' => 'image',
            'name' => 'image',
            'default' => '',
            'label' => 'Image',
            'help' => '',
            'child_of' => '',
            'placement' => 'content',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'preview_size' => 'medium',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_cb79fc4b7a' => array(
            'type' => 'text',
            'name' => 'title',
            'default' => '',
            'label' => 'Title',
            'help' => '',
            'child_of' => '',
            'placement' => 'content',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'true',
            'placeholder' => 'BSA Registration Form',
            'characters_limit' => '',
        ),
        'control_e95a1c4aa8' => array(
            'type' => 'textarea',
            'name' => 'description',
            'default' => '',
            'label' => 'Description',
            'help' => '',
            'child_of' => '',
            'placement' => 'content',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'true',
            'placeholder' => 'The forms required in order to become a registered member of the Boy Scouts of America.',
            'characters_limit' => '',
        ),
        'control_7fa8d144e4' => array(
            'type' => 'repeater',
            'name' => 'buttons',
            'default' => '',
            'label' => 'Buttons',
            'help' => '',
            'child_of' => '',
            'placement' => 'content',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'rows_min' => '1',
            'rows_max' => '',
            'rows_label' => '{{label}}',
            'rows_add_button_label' => '+ Add Button',
            'rows_collapsible' => 'true',
            'rows_collapsed' => 'false',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_ee39664e30' => array(
            'type' => 'text',
            'name' => 'label',
            'default' => '',
            'label' => 'Label',
            'help' => '',
            'child_of' => 'control_7fa8d144e4',
            'placement' => 'content',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'true',
            'placeholder' => 'Open',
            'characters_limit' => '',
        ),
        'control_f9cb7f4c02' => array(
            'type' => 'url',
            'name' => 'link',
            'default' => '',
            'label' => 'Link',
            'help' => '',
            'child_of' => 'control_7fa8d144e4',
            'placement' => 'content',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'true',
            'placeholder' => '',
            'characters_limit' => '',
        ),
    ),
    'code' => array(
        'output_method' => 'html',
        'editor_html' => '',
        'editor_callback' => '',
        'editor_css' => '',
        'frontend_html' => '<div class="card my-5">
    <img 
        class="card-image" src="{{image.url}}" alt="{{image.alt}}"
        style="margin: 0 auto;display: block;-o-object-fit: contain;object-fit: contain;max-height: 500px;"
    >
    
    <div class="card-content">
        <h1 class="is-size-4 has-text-weight-bold">{{title}}</h1>
        <p class="content">{{description}}</p>
    </div>
    
    <div class="card-footer">
        {{#each buttons }}
            <a class="card-footer-item" href="{{this.link}}" target="_blank">{{this.label}}</a>
        {{/each}}
    </div>
</div>',
        'frontend_callback' => '',
        'frontend_css' => '',
        'show_preview' => 'always',
        'single_output' => false,
    ),
    'condition' => array(
    ),
) );

lazyblocks()->add_block( array(
    'id' => 59,
    'title' => 'Bulma Box',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M18 4H6c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H6V6h12v12z" /></svg>',
    'keywords' => array(
        0 => 'bulma',
    ),
    'slug' => 'lazyblock/bulma-box',
    'description' => '',
    'category' => 'lazyblocks',
    'category_label' => 'lazyblocks',
    'supports' => array(
        'customClassName' => true,
        'anchor' => false,
        'align' => array(
            0 => 'wide',
            1 => 'full',
        ),
        'html' => false,
        'multiple' => true,
        'inserter' => true,
    ),
    'ghostkit' => array(
        'supports' => array(
            'spacings' => false,
            'display' => false,
            'scrollReveal' => false,
            'frame' => false,
            'customCSS' => false,
        ),
    ),
    'controls' => array(
        'control_8f995845d3' => array(
            'type' => 'inner_blocks',
            'name' => 'content',
            'default' => '',
            'label' => '',
            'help' => '',
            'child_of' => '',
            'placement' => 'content',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'placeholder' => '',
            'characters_limit' => '',
        ),
    ),
    'code' => array(
        'output_method' => 'html',
        'editor_html' => '',
        'editor_callback' => '',
        'editor_css' => '',
        'frontend_html' => '<div class="box my-5">
    {{{ content }}}
</div>',
        'frontend_callback' => '',
        'frontend_css' => '',
        'show_preview' => 'always',
        'single_output' => false,
    ),
    'condition' => array(
    ),
) );

endif;