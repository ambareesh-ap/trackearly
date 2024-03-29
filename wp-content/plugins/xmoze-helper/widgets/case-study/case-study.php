<?php
if (!defined('ABSPATH')) {
    exit;
}
// Exit if accessed directly
/**
 * Elementor Hello World
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class xmoze_case_study_loop extends \Elementor\Widget_Base
{
    /**
     * Retrieve the widget name.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name()
    {
        return 'xmoze-case-study';
    }

    public function get_script_depends()
    {
        return ['isotope', 'xmoze-addon'];
    }

    /**
     * Retrieve the widget title.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title()
    {
        return __('Case Study', 'xmoze-ts');
    }
    /**
     * Retrieve the widget icon.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon()
    {
        return 'eicon-gallery-grid';
    }
    /**
     * Retrieve the list of categories the widget belongs to.
     *
     * Used to determine where to display the widget in the editor.
     *
     * Note that currently Elementor supports only one category.
     * When multiple categories passed, Elementor uses the first one.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return array Widget categories.
     */
    public function get_categories()
    {
        return ['xmoze-addons'];
    }
    /**
     * Register the widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    protected function register_controls()
    {
        $this->start_controls_section(
            'section_layout',
            [
                'label' => __('Layout', 'xmoze-ts'),
            ]
        );

        $this->add_control(
            'case_style',
            [
                'label'             => __('Case Study Style', 'xmoze-hp'),
                'type'              => \Elementor\Controls_Manager::SELECT,
                'default'           => 'style-one',
                'options'           => [
                    'style-one'   =>   __('Style 01',    'xmoze-hp'),
                    'style-two'   =>   __('Style 02',    'xmoze-hp'),
                ],
                'separator' => 'after',
            ]
        );


        $this->add_control(
            'layout_type',
            [
                'label' => __('Layout type', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => array(
                    'masonry' => 'Masonry',
                    'normal' => 'Normal',
                ),
                'default' => 'masonry',
            ]
        );

        $this->add_control(
            'meta_postition',
            [
                'label' => __('Category Position', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => array(
                    'normal' => 'Normal',
                    'category-top' => 'Top',
                ),
                'default' => 'normal',
            ]
        );


        $this->add_control(
            'enable_loadmore',
            [
                'label' => __('Enable Loadmore?', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'xmoze-ts'),
                'label_off' => __('No', 'xmoze-ts'),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $this->add_control(
            'enable_Pagination',
            [
                'label' => __('Enable Pagination?', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'xmoze-ts'),
                'label_off' => __('No', 'xmoze-ts'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'loadmore_text',
            [
                'label' => __('Loadmore Text', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'default' => __('Load more works', 'xmoze-ts'),
                'condition' => [
                    'enable_loadmore' => 'yes'
                ],
            ]
        );
        $this->add_control(
            'loadmore_align',
            [
                'label' => __('Loadmore Align', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __('Left', 'xmoze-ts'),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __('top', 'xmoze-ts'),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', 'xmoze-ts'),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'condition' => [
                    'enable_loadmore' => 'yes'
                ],
                'default' => 'center',
                'toggle' => true,
            ]
        );
        $this->add_control(
            'loadmore_gap',
            [
                'label' => __('Loadmore Top Gap', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 400,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 100,
                ],

                'selectors' => [
                    '{{WRAPPER}}  .xmoze-loadmore-wrap' => 'margin-top:{{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'enable_loadmore' => 'yes'
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_width_nd_height',
            [
                'label' => __('Width & Height', 'xmoze-ts'),
            ]
        );

        $this->add_control(
            'use_meta_grid',
            [
                'label' => __('Use grid from meta?', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'xmoze-ts'),
                'label_off' => __('No', 'xmoze-ts'),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $this->add_control(
            'post_grid',
            [
                'label' => __('Post Column', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'devices' => ['desktop', 'tablet', 'mobile'],
                'options' => array(
                    'col-md-12' => '1 Column',
                    'col-md-6' => '2 Column',
                    'col-md-4' => '3 Column',
                    'col-md-3' => '4 Column',
                ),
                'default' => 'col-md-4',
                'condition' => [
                    'use_meta_grid!' => 'yes'
                ],
            ]
        );
        $this->add_responsive_control(
            'column_verti_gap',
            [
                'label' => __('Column Vertical Gap', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'devices' => ['desktop', 'tablet', 'mobile'],
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 50,
                    ],
                ],
                'desktop_default' => [
                    'size' => 15,
                    'unit' => 'px',
                ],
                'selectors' => [
                    '{{WRAPPER}}  .xmoze-case-study-item-wrap' => 'padding: 0 {{SIZE}}{{UNIT}} 0;',
                ]
            ]
        );
        $this->add_responsive_control(
            'column_hori_gap',
            [
                'label' => __('Column Horizontal Gap', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'devices' => ['desktop', 'tablet', 'mobile'],
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                    ],
                ],
                'desktop_default' => [
                    'size' => 30,
                    'unit' => 'px',
                ],
                'selectors' => [
                    '{{WRAPPER}}  .xmoze-case-study-item-wrap' => 'padding-bottom: {{SIZE}}{{UNIT}} ;',
                ]
            ]
        );
        $this->add_control(
            'use_custom_height',
            [
                'label' => __('Use custom height?', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'xmoze-ts'),
                'label_off' => __('No', 'xmoze-ts'),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $this->add_responsive_control(
            'normal_image_height',
            [
                'label' => __('Normal Image Height', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'devices' => ['desktop', 'tablet', 'mobile'],
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}}  .xmoze-case-study-item-wrap.height-normal .xmoze-case-study-item img' => 'height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'use_custom_height' => 'yes'
                ],
            ]
        );
        $this->add_responsive_control(
            'big_image_height',
            [
                'label' => __('Big Image Height', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'devices' => ['desktop', 'tablet', 'mobile'],
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}}  .xmoze-case-study-item-wrap.height-big .xmoze-case-study-item img' => 'height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'use_custom_height' => 'yes'
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section_query',
            [
                'label' => __('Query', 'xmoze-ts'),
            ]
        );
        $this->add_control(
            'posts_per_page',
            [
                'label' => __('Posts per page', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 5,
            ]
        );
        $this->add_control(
            'source',
            [
                'label'         => __('Source', 'xmoze-ts'),
                'type'          => \Elementor\Controls_Manager::SELECT,
                'options'       => [
                    'case-study' => 'Case Study',
                    'manual_selection' => 'Manual Selection',
                    'related' => 'Related',
                    'meta' => 'Meta',
                ],
                'default' =>    'case-study',
            ]
        );
        $this->add_control(
            'case_study_type',
            [
                'label'         => __('Case Study type', 'xmoze-ts'),
                'type'          => \Elementor\Controls_Manager::SELECT,
                'options'       => xmoze_get_meta_field_keys('case-study', 'case_study_type'),
                'default' =>    xmoze_get_meta_field_keys('case-study', 'case_study_type', 'value'),
                'condition' => [
                    'source' => 'meta'
                ],
            ]
        );
        $this->add_control(
            'manual_selection',
            [
                'label'         => __('Manual Selection', 'xmoze-ts'),
                'type'          => \Elementor\Controls_Manager::SELECT2,
                'description'   => __('Get specific template posts', 'xmoze-ts'),
                'label_block'   => true,
                'multiple'      => true,
                'options'       => xmoze_cpt_slug_and_id('case-study'),
                'default' =>    [],
                'condition' => [
                    'source' => 'manual_selection'
                ],
            ]
        );
        $this->start_controls_tabs(
            'include_exclude_tabs'
        );
        $this->start_controls_tab(
            'include_tabs',
            [
                'label' => __('Include', 'xmoze-ts'),
                'condition' => [
                    'source!' => 'manual_selection'
                ],
            ]
        );
        $this->add_control(
            'include_by',
            [
                'label'         => __('Include by', 'xmoze-ts'),
                'type'          => \Elementor\Controls_Manager::SELECT2,
                'label_block'   => true,
                'multiple'      => true,
                'options'       => [
                    'tags'  => 'Tags',
                    'category'  => 'Category',
                    'author' => 'Author',
                ],
                'default' =>    [],
                'condition' => [
                    'source!' => 'manual_selection'
                ],
            ]
        );
        $this->add_control(
            'include_categories',
            [
                'label'         => __('Include categories', 'xmoze-ts'),
                'type'          => \Elementor\Controls_Manager::SELECT2,
                'description'   => __('Get templates for specific category(s)', 'xmoze-ts'),
                'label_block'   => true,
                'multiple'      => true,
                'options'       => xmoze_cpt_taxonomy_slug_and_name('case-study-category'),
                'default' =>    [],
                'condition' => [
                    'include_by' => 'category',
                    'source!' => 'related'
                ],
            ]
        );
        $this->add_control(
            'include_tags',
            [
                'label'         => __('Include Tags', 'xmoze-ts'),
                'type'          => \Elementor\Controls_Manager::SELECT2,
                'description'   => __('Get templates for specific tag(s)', 'xmoze-ts'),
                'label_block'   => true,
                'multiple'      => true,
                'options'       => xmoze_cpt_taxonomy_slug_and_name('case-study-tag'),
                'default' =>    [],
                'condition' => [
                    'include_by' => 'tags',
                    'source!' => 'related'
                ],
            ]
        );
        $this->add_control(
            'include_authors',
            [
                'label'         => __('Include authors', 'xmoze-ts'),
                'type'          => \Elementor\Controls_Manager::SELECT2,
                'description'   => __('Get templates for specific tag(s)', 'xmoze-ts'),
                'label_block'   => true,
                'multiple'      => true,
                'options'       => xmoze_cpt_author_slug_and_id('case-study'),
                'default' =>    [],
                'condition' => [
                    'include_by' => 'author',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'exclude_tabs',
            [
                'label' => __('Exclude', 'xmoze-ts'),
                'condition' => [
                    'source!' => 'manual_selection'
                ],
            ]
        );
        $this->add_control(
            'exclude_by',
            [
                'label'         => __('Exclude by', 'xmoze-ts'),
                'type'          => \Elementor\Controls_Manager::SELECT2,
                'label_block'   => true,
                'multiple'      => true,
                'options'       => [
                    'tags'  => 'tags',
                    'category'  => 'Category',
                    'author' => 'Author',
                    'current_post' => 'Current Post',
                ],
                'default' =>    [],
                'condition' => [
                    'source!' => 'manual_selection'
                ],
            ]
        );
        $this->add_control(
            'exclude_categories',
            [
                'label'         => __('Exclude categories', 'xmoze-ts'),
                'type'          => \Elementor\Controls_Manager::SELECT2,
                'description'   => __('Get templates for specific category(s)', 'xmoze-ts'),
                'label_block'   => true,
                'multiple'      => true,
                'options'       => xmoze_cpt_taxonomy_slug_and_name('case-study-category'),
                'default' =>    [],
                'condition' => [
                    'exclude_by' => 'category',
                    'source!' => 'related'
                ],
            ]
        );
        $this->add_control(
            'exclude_tags',
            [
                'label'         => __('Exclude Tags', 'xmoze-ts'),
                'type'          => \Elementor\Controls_Manager::SELECT2,
                'description'   => __('Get templates for specific tag(s)', 'xmoze-ts'),
                'label_block'   => true,
                'multiple'      => true,
                'options'       => xmoze_cpt_taxonomy_slug_and_name('case-study-tag'),
                'default' =>    [],
                'condition' => [
                    'exclude_by' => 'tags',
                    'source!' => 'related'
                ],
            ]
        );
        $this->add_control(
            'exclude_authors',
            [
                'label'         => __('Exclude authors', 'xmoze-ts'),
                'type'          => \Elementor\Controls_Manager::SELECT2,
                'description'   => __('Get templates for specific tag(s)', 'xmoze-ts'),
                'label_block'   => true,
                'multiple'      => true,
                'options'       => xmoze_cpt_author_slug_and_id('case-study'),
                'default' =>    [],
                'condition' => [
                    'exclude_by' => 'author',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_control(
            'orderby',
            [
                'label'         => __('Order By', 'xmoze-ts'),
                'type'          => \Elementor\Controls_Manager::SELECT,
                'options'       => [
                    'date'   => 'Date',
                    'title'    => 'title',
                    'menu_order'    => 'Menu Order',
                    'rand'    => 'Random',
                ],
                'default' =>    'date',
            ]
        );
        $this->add_control(
            'order',
            [
                'label'         => __('Order', 'xmoze-ts'),
                'type'          => \Elementor\Controls_Manager::SELECT,
                'options'       => [
                    'ASC'   => 'ASC',
                    'DESC'    => 'DESC',
                ],
                'default' =>    'DESC',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_content',
            [
                'label' => __('Content', 'xmoze-ts'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'show_title',
            [
                'label' => __('Show Title?', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'xmoze-ts'),
                'label_off' => __('No', 'xmoze-ts'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'show_category',
            [
                'label' => __('Show category?', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'xmoze-ts'),
                'label_off' => __('No', 'xmoze-ts'),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );

        $this->add_control(
            'show_readmore',
            [
                'label' => __('Show Readmore?', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'xmoze-ts'),
                'label_off' => __('No', 'xmoze-ts'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'show_subheading',
            [
                'label' => __('Show Sub Heading?', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'xmoze-ts'),
                'label_off' => __('No', 'xmoze-ts'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'show_date',
            [
                'label' => __('Show Date?', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'xmoze-ts'),
                'label_off' => __('No', 'xmoze-ts'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'show_excerpt',
            [
                'label' => __('Show Excerpt', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'xmoze-ts'),
                'label_off' => __('No', 'xmoze-ts'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_btn',
            [
                'label' => __('Readmore', 'xmoze-hp'),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'show_readmore' => 'yes',
                ]
            ]
        );

        $this->add_control(
            'readmore_text',
            [
                'label'    => __('Readmore text', 'xmoze-hp'),
                'type'     => \Elementor\Controls_Manager::TEXT,
                'default'  => __('Read More', 'xmoze-hp'),
                'conditon' => [
                    'show_readmore' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'icon',
            [
                'label'    => __('Icon', 'xmoze-hp'),
                'type'     => \Elementor\Controls_Manager::ICONS,
                'conditon' => [
                    'show_readmore' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'icon_position',
            [
                'label'    => __('Icon Position', 'xmoze-hp'),
                'type'     => \Elementor\Controls_Manager::SELECT,
                'default'  => 'after',
                'options'  => [
                    'before' => __('Before', 'xmoze-hp'),
                    'after'  => __('After', 'xmoze-hp'),
                ],
                'conditon' => [
                    'show_readmore' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'button_align',
            [
                'label'        => __('Align', 'xmoze-hp'),
                'type'         => \Elementor\Controls_Manager::CHOOSE,
                'options'      => [
                    'left'   => [
                        'title' => __('Left', 'xmoze-hp'),
                        'icon'  => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __('top', 'xmoze-hp'),
                        'icon'  => 'fa fa-align-center',
                    ],
                    'right'  => [
                        'title' => __('Right', 'xmoze-hp'),
                        'icon'  => 'fa fa-align-right',
                    ],
                ],
                'devices'      => ['desktop', 'tablet', 'mobile'],
                'prefix_class' => 'content-align%s-',
                'toggle'       => true,
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_image',
            [
                'label' => __('Image', 'xmoze-ts'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'image_hover_tabs'
        );

        $this->start_controls_tab(
            'image_normal_tab',
            [
                'label' => __('Normal', 'xmoze-ts'),
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'image_shadow',
                'label' => __('Button Shadow', 'xmoze-ts'),
                'selector' => '{{WRAPPER}} .xmoze-case-study-image img',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'image_border',
                'label' => __('Border', 'xmoze-ts'),
                'selector' => '{{WRAPPER}} .xmoze-case-study-image img',
            ]
        );

        $this->add_responsive_control(
            'width',
            [
                'label'          => __('Width', 'xmoze-hp'),
                'type'           => \Elementor\Controls_Manager::SLIDER,
                'size_units'     => ['%', 'px','vw'],
                'range'          => [
                    '%'  => [
                        'min' => 1,
                        'max' => 100,
                    ],
                    'px' => [
                        'min' => 1,
                        'max' => 1000,
                    ],
                    'vw' => [
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
                'selectors'      => [
                    '{{WRAPPER}} .xmoze-case-study-image img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'space',
            [
                'label'          => __('Max Width', 'xmoze-hp'),
                'type'           => \Elementor\Controls_Manager::SLIDER,
                'size_units'     => ['px', '%', 'vw'],
                'range'          => [
                    '%'  => [
                        'min' => 1,
                        'max' => 100,
                    ],
                    'px' => [
                        'min' => 1,
                        'max' => 1000,
                    ],
                    'vw' => [
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
                'selectors'      => [
                    '{{WRAPPER}} .xmoze-case-study-image img' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'height',
            [
                'label'          => __('Height', 'xmoze-hp'),
                'type'           => \Elementor\Controls_Manager::SLIDER,
                'size_units'     => ['px', 'vh'],
                'range'          => [
                    'px' => [
                        'min' => 1,
                        'max' => 1000,
                    ],
                    'vh' => [
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
                'selectors'      => [
                    '{{WRAPPER}} .xmoze-case-study-image img' => 'height: {{SIZE}}{{UNIT}} !important;',
                ],
            ]
        );

        $this->add_responsive_control(
            'object-fit',
            [
                'label'     => __('Object Fit', 'xmoze-hp'),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'condition' => [
                    'height[size]!' => '',
                ],
                'options'   => [
                    ''        => __('Default', 'xmoze-hp'),
                    'fill'    => __('Fill', 'xmoze-hp'),
                    'cover'   => __('Cover', 'xmoze-hp'),
                    'contain' => __('Contain', 'xmoze-hp'),
                ],
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .xmoze-case-study-image img' => 'object-fit: {{VALUE}};',
                ],
            ]
        );


        $this->add_responsive_control(
            'image_box_margin',
            [
                'label'      => __('Margin', 'xmoze-hp'),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .xmoze-case-study-image .case-image img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    'body.rtl {{WRAPPER}} .xmoze-case-study-image .case-image img' => 'margin: {{TOP}}{{UNIT}} {{LEFT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'image_box_padding',
            [
                'label'      => __('Padding', 'xmoze-hp'),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .xmoze-case-study-image .case-image img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    'body.rtl {{WRAPPER}} .xmoze-case-study-image .case-image img' => 'padding: {{TOP}}{{UNIT}} {{LEFT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'image_radius',
            [
                'label' => __('Image Radius', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    ' {{WRAPPER}} a.case-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        // Hover Start
        $this->start_controls_tab(
            'image_hover_tab',
            [
                'label' => __('Hover', 'xmoze-ts'),
            ]
        );

        $this->add_control(
            'case_hover_style',
            [
                'label'             => __('Image Hover Style', 'xmoze-hp'),
                'type'              => \Elementor\Controls_Manager::SELECT,
                'default'           => 'hover-default',
                'options'           => [
                    'hover-default' =>   __('Default',    'xmoze-hp'),
                    'hover-one'     =>   __('Style 01',    'xmoze-hp'),
                ],
                'separator' => 'after',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'image_hover_shadow',
                'label' => __('Button Shadow', 'xmoze-ts'),
                'selector' => '{{WRAPPER}} .xmoze-case-study-image:hover img',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'image_hover_border',
                'label' => __('Border', 'xmoze-ts'),
                'selector' => '{{WRAPPER}} .xmoze-case-study-image:hover a.case-image img',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'image_hover_g',
                'label' => __('Hover Overlay', 'plugin-domain'),
                'types' => ['classic', 'gradient',],
                'selector' => '{{WRAPPER}} .xmoze-case-study-image::before',
            ]
        );
        $this->add_responsive_control(
            'image_hover_radius',
            [
                'label' => __('Box Image Radius', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    ' {{WRAPPER}} .xmoze-case-study-image a.case-image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();


        $this->start_controls_section(
            'section_category_style',
            [
                'label' => __('Category', 'xmoze-hp'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'show_category' => 'yes',
                ]
            ]
        );
        $this->start_controls_tabs(
            'category_style_tabs'
        );
        $this->start_controls_tab(
            'category_style_normal_tab',
            [
                'label' => __('Normal', 'xmoze-hp'),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => __('Category Typography', 'xmoze-ts'),
                'name' => 'category_typo',
                'selector' => '{{WRAPPER}} .xmoze-case-study-content .xmoze-cs-category',
            ]
        );
        $this->add_control(
            'cat_position_toggle',
            [
                'label' => __('Position', 'xmoze-hp'),
                'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
                'label_off' => __('None', 'xmoze-hp'),
                'label_on' => __('Custom', 'xmoze-hp'),
                'return_value' => 'yes',
            ]
        );
        $this->start_popover();

        $this->add_control(
			'category_position',
			[
				'label' => __( 'Position', 'xmoze-ts' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'absolute'  => __( 'Absolute', 'xmoze-hp' ),
					'initial' => __( 'Initial', 'xmoze-hp' ),
					'fixed' => __( 'Fixed', 'xmoze-hp' ),
					'relative' => __( 'Relative', 'xmoze-hp' ),
					'default' => __( 'Default', 'xmoze-hp' ),
				],
                'selectors' => [
                    '{{WRAPPER}} .xmoze-case-study-content .xmoze-cs-category' => 'position: {{VALUE}}',
                ]
			]
		);
        $this->add_responsive_control(
            'cat_position_right',
            [
                'label' => __( 'Horizontal', 'xmoze-hp' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => -2000,
                        'max' => 1000,
                    ],
                    '%' => [
                        'min' => -200,
                        'max' => 200,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .xmoze-case-study-content .xmoze-cs-category' => 'left: {{SIZE}}{{UNIT}} !important; right: auto !important;',
                ],
                'condition' => [
                    'category_position' => 'absolute',
                ],

            ]
        );
        $this->add_responsive_control(
            'cat_position_top',
            [
                'label' => __( 'Vertical', 'xmoze-hp' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => -2000,
                        'max' => 1000,
                    ],
                    '%' => [
                        'min' => -200,
                        'max' => 200,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .xmoze-case-study-content .xmoze-cs-category' => 'top: {{SIZE}}{{UNIT}} !important; button: auto !important;',
                ],
                'condition' => [
                    'category_position' => 'absolute',
                ],

            ]
        );

        $this->end_popover();

        $this->add_control(
            'category_color',
            [
                'label' => __('Category Color', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .xmoze-case-study-content .xmoze-cs-category' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'cat_bg_color',
            [
                'label' => __('Background Color', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .xmoze-case-study-content .xmoze-cs-category' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'cat_border',
                'label' => __('Border', 'xmoze-ts'),
                'selector' => '{{WRAPPER}} .xmoze-case-study-content .xmoze-cs-category',
            ]
        );
        $this->add_responsive_control(
            'cat_radius',
            [
                'label' => __('Image Radius', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    ' {{WRAPPER}} .xmoze-case-study-content .xmoze-cs-category' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
			'cat_padding',
			[
				'label' => __( 'Padding', 'xmoze-hp' ),
				'type' =>  \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .xmoze-case-study-content .xmoze-cs-category' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->add_responsive_control(
            'category_gap',
            [
                'label' => __('Category Gap', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 400,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .xmoze-case-study-content .xmoze-cs-category' => 'margin-bottom:{{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'category_style_hover_tab',
            [
                'label' => __('Hover', 'xmoze-hp'),
            ]
        );
        $this->add_control(
            'category_color_hover',
            [
                'label' => __('Category Color', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .xmoze-cs-category:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_control(
			'icon_divider',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

        $this->add_responsive_control(
            'icon_size',
            [
                'label' => __('Icon Size', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 400,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .xmoze-case-study-content .xmoze-cs-category .cat_icon svg' => ' width :{{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
			'cat_icon_margin',
			[
				'label' => __( 'Margin', 'xmoze-hp' ),
				'type' =>  \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .xmoze-case-study-content .xmoze-cs-category .cat_icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->end_controls_section();

        $this->start_controls_section(
            'section_title_style',
            [
                'label' => __('Title Heading', 'xmoze-hp'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => __('Title Typography', 'xmoze-ts'),
                'name' => 'title_typo',
                'selector' => '{{WRAPPER}} .xmoze-case-study-title h2 a',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .xmoze-case-study-title h2 a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'title_color_hover',
            [
                'label' => __('Title Hover Color', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .xmoze-case-study-title h2 a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'title_margin',
            [
                'label'      => __('Margin', 'xmoze-hp'),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .xmoze-case-study-title h2 a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    'body.rtl {{WRAPPER}} .xmoze-case-study-title h2 a' => 'margin: {{TOP}}{{UNIT}} {{LEFT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_sub_heading_style',
            [
                'label' => __('Sub Heading', 'xmoze-hp'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'show_subheading' => 'yes',
                ]
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => __('SubHeading Typography', 'xmoze-ts'),
                'name' => 'subheading_typo',
                'selector' => '{{WRAPPER}} .xmoze-subheading',
            ]
        );
        $this->add_control(
            'subheading_color',
            [
                'label' => __('SubHeading Color', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .xmoze-subheading' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'title_subheading_color_hover',
            [
                'label' => __('SubHeading Hover Color', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .xmoze-subheading:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'subheading_margin',
            [
                'label'      => __('Margin', 'xmoze-hp'),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .xmoze-subheading' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    'body.rtl {{WRAPPER}} .xmoze-subheading' => 'margin: {{TOP}}{{UNIT}} {{LEFT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        // date control

        $this->start_controls_section(
            'section_date_style',
            [
                'label' => __('Date', 'xmoze-hp'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'show_date' => 'yes',
                ]
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => __('Date Typography', 'xmoze-ts'),
                'name' => 'date_typo',
                'selector' => '{{WRAPPER}} .advice-date',
            ]
        );
        $this->add_control(
            'date_color',
            [
                'label' => __('Date Color', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .advice-date' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'title_date_color_hover',
            [
                'label' => __('Date Hover Color', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .advice-date:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'date_margin',
            [
                'label'      => __('Margin', 'xmoze-hp'),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .advice-date' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    'body.rtl {{WRAPPER}} .advice-date' => 'margin: {{TOP}}{{UNIT}} {{LEFT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_excerpt_style',
            [
                'label' => __('Excerpt', 'xmoze-hp'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'show_excerpt' => 'yes',
                ]
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => __('Excerpt Typography', 'xmoze-ts'),
                'name' => 'excerpt_typo',
                'selector' => '{{WRAPPER}} .studies_content',
            ]
        );
        $this->add_control(
            'excerpt_color',
            [
                'label' => __('Excerpt Color', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .studies_content' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'excerpt_color_hover',
            [
                'label' => __('Excerpt Hover Color', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .studies_content:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'excerpt_margin',
            [
                'label'      => __('Margin', 'xmoze-hp'),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .studies_content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    'body.rtl {{WRAPPER}} .studies_content' => 'margin: {{TOP}}{{UNIT}} {{LEFT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'excerpt_padding',
            [
                'label'      => __('Padding', 'xmoze-hp'),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .studies_content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    'body.rtl {{WRAPPER}} .studies_content' => 'padding: {{TOP}}{{UNIT}} {{LEFT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'link_icon_popup_icon',
            [
                'label' => __('Link/ Popup Icon', 'xmoze-ts'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs(
            'lp_style_tabs'
        );
        $this->start_controls_tab(
            'lp_style_normal_tab',
            [
                'label' => __('Normal', 'xmoze-hp'),
            ]
        );
        $this->add_control(
            'lp_icon_line_color',
            [
                'label' => __('Icon Line Color', 'xmoze-hp'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .links-icons svg path' => 'stroke: {{VALUE}}',
                    '{{WRAPPER}} .links-icons i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'lp_icon_fill_color',
            [
                'label' => __('SVG Fill Color', 'xmoze-hp'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .links-icons svg path' => 'fill: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'lp_bg_color',
            [
                'label' => __('Background Color', 'xmoze-hp'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .links-icons a' => 'background-color: {{VALUE}}',
                ],
            ]
        );



        $this->add_responsive_control(
            'lp_icon_size',
            [
                'label' => __('icon Size', 'xmoze-hp'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => -360,
                        'max' => 360,
                    ],
                ],
                'devices' => ['desktop', 'tablet', 'mobile'],
                'selectors' => [
                    '{{WRAPPER}} .links-icons  svg' => 'width: {{SIZE}}{{UNIT}} ;',
                    '{{WRAPPER}} .links-icons  i' => 'font-size: {{SIZE}}{{UNIT}} ;',
                ],
            ]
        );

        $this->add_responsive_control(
            'lp_icon_margin',
            [
                'label' => __('icon Size', 'xmoze-hp'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => -360,
                        'max' => 360,
                    ],
                ],
                'devices' => ['desktop', 'tablet', 'mobile'],
                'selectors' => [
                    '{{WRAPPER}} .links-icons  svg' => 'margin: {{SIZE}}{{UNIT}} ;',
                    '{{WRAPPER}} .links-icons  i' => 'margin: {{SIZE}}{{UNIT}} ;',
                ],
            ]
        );

        $this->add_responsive_control(
            'lp_icon_box_size',
            [
                'label' => __('icon Hieght Widget', 'xmoze-hp'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .links-icons  a' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );


        $this->add_responsive_control(
            'lp_radius',
            [
                'label'      => __('Border Radius', 'xmoze-hp'),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .links-icons'          => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    'body.rtl {{WRAPPER}} .links-icons' => 'border-radius: {{TOP}}{{UNIT}} {{LEFT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab(
            'lp_style_hover_tab',
            [
                'label' => __('Hover', 'xmoze-hp'),
            ]
        );

        $this->add_control(
            'lp_icon_line_color_hover',
            [
                'label' => __('Icon Line Color', 'xmoze-hp'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .links-icons:hover svg path' => 'stroke: {{VALUE}}',
                    '{{WRAPPER}} .links-icons:hover i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'lp_icon_fill_color_hover',
            [
                'label' => __('SVG Fill Color', 'xmoze-hp'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .links-icons:hover svg path' => 'fill: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'lp_bg_color_hover',
            [
                'label' => __('Background Color', 'xmoze-hp'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .links-icons a:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();


        $this->end_controls_section();

        // $this->start_controls_section(
        //     'section_bottom_style',
        //     [
        //         'label' => __('Content Box', 'xmoze-ts'),
        //         'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        //     ]
        // );
        // $this->end_controls_section();

        $this->start_controls_section(
            'section_content_style',
            [
                'label' => __('Box', 'xmoze-ts'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'content_align',
            [
                'label' => __('Align', 'xmoze-hp'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __('Left', 'xmoze-hp'),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', 'xmoze-hp'),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', 'xmoze-hp'),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .xmoze-case-study-content' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'content_bg_color',
                'label' => __('Content Background Color', 'xmoze-ts'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .xmoze-case-study-content',
            ]
        );
        $this->add_control(
            'content_gap',
            [
                'label' => __('Content gap', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 400,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}}  .xmoze-case-study-content.content-postion-on-image' => 'left:{{SIZE}}{{UNIT}};right:{{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'content_position' => 'on-image',
                ]
            ]

        );
        $this->add_control(
            'content_y_position',
            [
                'label' => __('Content Y Position', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}}  .xmoze-case-study-content.content-postion-on-image' => 'bottom:{{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'content_position' => 'on-image',
                ]
            ]
        );
        $this->add_responsive_control(
            'content_padding',
            [
                'label' => __('Content Padding', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .xmoze-case-study-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    'body.rtl {{WRAPPER}} .xmoze-case-study-content' => 'padding: {{TOP}}{{UNIT}} {{LEFT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'content_margin',
            [
                'label' => __('Content Margin', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .xmoze-case-study-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    'body.rtl {{WRAPPER}} .xmoze-case-study-content' => 'margin: {{TOP}}{{UNIT}} {{LEFT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'content_radius',
            [
                'label' => __('Content Box Radius', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .xmoze-case-study-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    'body.rtl {{WRAPPER}} .xmoze-case-study-content' => 'border-radius: {{TOP}}{{UNIT}} {{LEFT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{RIGHT}}{{UNIT}};',

                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'box_border',
                'label' => __('Border', 'xmoze-ts'),
                'selector' => '{{WRAPPER}} .xmoze-case-study-content',
            ]
        );
        $this->add_responsive_control(
            'box_radius',
            [
                'label' => __('Box Radius', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    ' {{WRAPPER}} .xmoze-case-study-item ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'button_style',
            [
                'label' => __('Button', 'xmoze-hp'),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE, 'condition' => [
                    'show_readmore' => 'yes',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'     => 'btn_typography',
                'label'    => __('Button Typography', 'xmoze-hp'),
                'selector' => '{{WRAPPER}} .case-study-btn',
            ]
        );
        $this->start_controls_tabs(
            'button_style_tabs'
        );
        $this->start_controls_tab(
            'button_style_normal_tab',
            [
                'label' => __('Normal', 'xmoze-hp'),
            ]
        );
        $this->add_control(
            'btn_icon_color',
            [
                'label'     => __('Icon Color', 'xmoze-hp'),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .case-study-btn .btn-icon'      => 'color: {{VALUE}}',
                    '{{WRAPPER}} .case-study-btn .btn-icon path' => 'stroke: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'icon_fill_color',
            [
                'label'     => __('Icon Fill Color', 'xmoze-hp'),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .case-study-btn .btn-icon path' => 'fill: {{VALUE}}',
                ],
                'conditions' => [
                    'relation' => 'or',
                    'terms' => [
                        [
                            'name' => 'icon[library]',
                            'operator' => '==',
                            'value' => 'svg',
                        ],
                    ],
                ],
            ]
        );

        $this->add_control(
            'boxed_btn_color',
            [
                'label'     => __('Button Color', 'xmoze-hp'),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .case-study-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'boxed_btn_background',
            [
                'label'     => __('Background Color', 'xmoze-hp'),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .case-study-btn' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name'     => 'button_shadow',
                'label'    => __('Button Shadow', 'xmoze-hp'),
                'selector' => '{{WRAPPER}} .case-study-btn',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name'     => 'button_border',
                'label'    => __('Border', 'xmoze-hp'),
                'selector' => '{{WRAPPER}} .case-study-btn',
            ]
        );
        $this->add_control(
            'btn_icon_size',
            [
                'label'      => __('Icon Size', 'xmoze-hp'),
                'type'       => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', '%'],
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 50,
                        'step' => 1,
                    ],
                    '%'  => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .case-study-btn .btn-icon'     => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .case-study-btn .btn-icon svg' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );




        $this->add_responsive_control(
            'button_sizesdf',
            [
                'label'          => __('Button size', 'xmoze-hp'),
                'type'           => \Elementor\Controls_Manager::SLIDER,
                'size_units'     => ['px', '%'],
                'range'          => [
                    'px' => [
                        'min' => 0,
                        'max' => 400,
                    ],
                    '%'  => [
                        'min' => 1,
                        'max' => 100,
                    ]
                ],
                'selectors'      => [
                    '{{WRAPPER}} .case-study-btn' => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'btn_icon_vertical_gap',
            [
                'label'      => __('Icon gap Vertical', 'xmoze-hp'),
                'type'       => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', '%'],
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    '%'  => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .case-study-btn .btn-icon i'  => 'margin-top: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .case-study-btn .btn-icon svg' => 'margin-top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'btn_icon_gap',
            [
                'label'      => __('Icon gap', 'xmoze-hp'),
                'type'       => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', '%'],
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    '%'  => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .case-study-btn .icon-before, body.rtl {{WRAPPER}} .case-study-btn .icon-after '  => 'margin-right: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .case-study-btn .icon-after , body.rtl  {{WRAPPER}} .case-study-btn .icon-before' => 'margin-left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'button_radius',
            [
                'label'      => __('Border Radius', 'xmoze-hp'),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .case-study-btn'          => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    'body.rtl {{WRAPPER}} .case-study-btn' => 'border-radius: {{TOP}}{{UNIT}} {{LEFT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'buton_style_divider',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );
        $this->add_responsive_control(
            'button_padding',
            [
                'label'      => __('Button Padding', 'xmoze-hp'),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .case-study-btn'          => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    'body.rtl {{WRAPPER}} .case-study-btn' => 'padding: {{TOP}}{{UNIT}} {{LEFT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'button_margin',
            [
                'label'      => __('Button Margin', 'xmoze-hp'),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .case-study-btn'          => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    'body.rtl {{WRAPPER}} .case-study-btn' => 'margin: {{TOP}}{{UNIT}} {{LEFT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab(
            'button_style_hover_tab',
            [
                'label' => __('Hover', 'xmoze-hp'),
            ]
        );
        $this->add_control(
            'btn_icon_hover_color',
            [
                'label'     => __('Icon Color', 'xmoze-hp'),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .xmoze-case-study-widget-item:hover .case-study-btn .btn-icon'      => 'color: {{VALUE}}',
                    '{{WRAPPER}} .xmoze-case-study-widget-item:hover .case-study-btn .btn-icon path' => 'stroke: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_icon_fill_color_hover',
            [
                'label'     => __('Icon Fill Color', 'xmoze-hp'),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .xmoze-case-study-widget-item:hover .case-study-btn .btn-icon path' => 'fill: {{VALUE}}',
                ],
                'conditions' => [
                    'relation' => 'or',
                    'terms' => [
                        [
                            'name' => 'icon[library]',
                            'operator' => '==',
                            'value' => 'svg',
                        ],
                    ],
                ],
            ]
        );
        $this->add_responsive_control(
            'button_hover_padding',
            [
                'label'      => __('Button Padding', 'xmoze-hp'),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .xmoze-case-study-item-wrap:hover .case-study-btn'          => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    'body.rtl {{WRAPPER}} .xmoze-case-study-item-wrap:hover .case-study-btn' => 'padding: {{TOP}}{{UNIT}} {{LEFT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'button_hover_margin',
            [
                'label'      => __('Button Margin', 'xmoze-hp'),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .xmoze-case-study-item-wrap:hover .case-study-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    'body.rtl {{WRAPPER}} .xmoze-case-study-item-wrap:hover .case-study-btn' => 'margin: {{TOP}}{{UNIT}} {{LEFT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hover_color',
            [
                'label'     => __('Button Color', 'xmoze-hp'),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .case-study-btn:hover .case-readmore-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_hover_background',
            [
                'label'     => __('Background Color', 'xmoze-hp'),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .case-study-btn:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name'     => 'button_hover_border',
                'label'    => __('Border', 'xmoze-hp'),
                'selector' => '{{WRAPPER}} .case-study-btn:hover',
            ]
        );
        $this->add_control(
            'btn_hover_animation',
            [
                'label' => __('Hover Animation', 'xmoze-hp'),
                'type'  => \Elementor\Controls_Manager::HOVER_ANIMATION,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name'     => 'button_hover_shadow',
                'label'    => __('Button Shadow', 'xmoze-hp'),
                'selector' => '{{WRAPPER}} .case-study-btn:hover',
            ]
        );
        $this->add_responsive_control(
            'button_hover_radius',
            [
                'label'      => __('Border Radius', 'xmoze-hp'),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .case-study-btn:hover'          => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    'body.rtl {{WRAPPER}} .case-study-btn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{LEFT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'icon_hover_gap',
            [
                'label'      => __('Icon gap', 'xmoze-hp'),
                'type'       => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', '%'],
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    '%'  => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .case-study-btn:hover .icon-before'          => 'transform: translatex( -{{SIZE}}{{UNIT}} );',
                    '{{WRAPPER}} .case-study-btn:hover .icon-after '          => 'transform: translatex( {{SIZE}}{{UNIT}} );',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();


        $this->start_controls_section(
            'section_loadmore',
            [
                'label' => __('Loadmore', 'xmoze-ts'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'enable_loadmore' => 'yes'
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => __('Typography', 'xmoze-ts'),
                'name' => 'loadmore_typo',
                'selector' => '{{WRAPPER}} .xmoze-pf-loadmore-btn',
            ]
        );
        $this->start_controls_tabs(
            'loadmore_hover_tabs'
        );
        $this->start_controls_tab(
            'loadmore_normal_tab',
            [
                'label' => __('Normal', 'xmoze-ts'),
            ]
        );
        $this->add_control(
            'loadore_color',
            [
                'label' => __('Color', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .xmoze-pf-loadmore-btn' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'loadmore_background_color',
            [
                'label' => __('Background Color', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .xmoze-pf-loadmore-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'loadmore_width',
            [
                'label' => __('Load More Width', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 120,
                ],
                'selectors' => [
                    '{{WRAPPER}} .xmoze-pf-loadmore-btn' => 'min-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'loadmore_height',
            [
                'label' => __('Load More Width', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 5,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 45,
                ],
                'selectors' => [
                    '{{WRAPPER}} .xmoze-pf-loadmore-btn' => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'loadmore_border',
                'label' => __('Border', 'xmoze-ts'),
                'selector' => '{{WRAPPER}} .xmoze-pf-loadmore-btn',
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'loadmore_hover_tab',
            [
                'label' => __('Hover', 'xmoze-ts'),
            ]
        );
        $this->add_control(
            'loadore_hover_color',
            [
                'label' => __('Color', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .xmoze-pf-loadmore-btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'loadmore_hover_bg_color',
            [
                'label' => __('Background Color', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .xmoze-pf-loadmore-btn:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'loadmore_hover_border',
                'label' => __('Border', 'xmoze-ts'),
                'selector' => '{{WRAPPER}} .xmoze-pf-loadmore-btn:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_control(
            'hr',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );
        $this->add_responsive_control(
            'loadmoere_button_padding',
            [
                'label' => __('Button Padding', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'default' => [
                    'top' => '22',
                    'right' => '38',
                    'bottom' => '21',
                    'left' => '38',
                ],
                'selectors' => [
                    '{{WRAPPER}} .xmoze-pf-loadmore-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'loadmoere_button_radius',
            [
                'label' => __('Border Radius', 'xmoze-ts'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'default' => [
                    'top' => '33',
                    'right' => '33',
                    'bottom' => '33',
                    'left' => '33',
                ],
                'selectors' => [
                    '{{WRAPPER}} .xmoze-pf-loadmore-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'loadmoere_button_shadow',
                'label' => __('Button Shadow', 'xmoze-ts'),
                'selector' => '{{WRAPPER}} .xmoze-pf-loadmore-btn',
                'fields_options' =>
                [
                    'box_shadow_type' =>
                    [
                        'default' => 'yes',
                    ],
                    'box_shadow' => [
                        'default' =>
                        [
                            'horizontal' => 0,
                            'vertical' => 0,
                            'blur' => 0,
                            'spread' => 0,
                            'color' => 'rgba(3, 3, 3, 0.14)',
                        ],
                    ],
                ],
            ]
        );


        $this->end_controls_section();
    }
    /**
     * Render the widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    protected function render()
    {
        $settings = $this->get_settings();
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $case_study_data = [];
        $case_study_data['settings'] = $this->get_settings();
        $case_study_data = json_encode($case_study_data);
        $case_hover_style = $settings['case_hover_style'];

        $active_slider = $settings['layout_type'];


        $slider_extraSetting = array(

            'loop' => (!empty($settings['loop']) && 'yes' === $settings['loop']) ? true : false,
            'dots' => (!empty($settings['dots']) && 'yes' === $settings['dots']) ? true : false,
            'autoplay' => (!empty($settings['autoplay']) && 'yes' === $settings['autoplay']) ? true : false,
            'nav' => (!empty($settings['arrows']) && 'yes' === $settings['arrows']) ? true : false,
            'mousedrag' => (!empty($settings['mousedrag']) && 'yes' === $settings['mousedrag']) ? true : false,
            'autoplaytimeout' => !empty($settings['autoplaytimeout']) ? $settings['autoplaytimeout'] : '5000',

            //this a responsive layout
            'per_coulmn' => (!empty($settings['per_coulmn'])) ? $settings['per_coulmn'] : 3,
            'per_coulmn_tablet' => (!empty($settings['per_coulmn_tablet'])) ? $settings['per_coulmn_tablet'] : 2,
            'per_coulmn_mobile' => (!empty($settings['per_coulmn_mobile'])) ? $settings['per_coulmn_mobile'] : 1
        );

        $jasondecode = wp_json_encode($slider_extraSetting);

        $this->add_render_attribute('case_study_attr', 'class', array('row xmoze-case-study-wrap justify-content-center', $case_hover_style));
        $this->add_render_attribute('case_study_attr', 'class', array('layout-mode-' . esc_attr($settings['layout_type'])));


        // Including the query
        include('queries/case-study-query.php');

        if ($the_query->have_posts()) :
?>

            <div <?php echo $this->get_render_attribute_string('case_study_attr'); ?>>
                <?php
                // including the item
                include('contents/case-study-content.php');
                ?>
            </div>


            <div class="xmoze-navigation">

            <?php
                    if ( 'yes' == $settings['enable_Pagination'] ) {
                    $total_pages = $the_query->max_num_pages;

                    if ($total_pages > 1){

                        $current_page = max(1, get_query_var('paged'));

                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => '/page/%#%',
                            'current' => $current_page,
                            'total' => $total_pages,
                            'prev_text'    => __('« prev'),
                            'next_text'    => __('next »'),
                        ));

                    }

                }
            ?>

            </div>


        <?php
            $total_posts = $the_query->found_posts;
            if ('yes' == $settings['enable_loadmore'] && '-1' != $settings['posts_per_page'] && $total_posts >= $settings['posts_per_page']) :
                $posts_per_page = $settings['posts_per_page'];
                $page_amount = ceil($total_posts / $posts_per_page);
                $ajaxurl = admin_url('admin-ajax.php');
                $nonce = wp_create_nonce('xmoze_loadmore_callback');
            ?>

                <div class="row">
                    <div class="col-12">
                        <div class="xmoze-loadmore-wrap text-<?php echo $settings['loadmore_align']; ?>">
                            <span id="load-next-case-studys-message"></span>
                            <span class="xmoze-pf-loadmore-btn" data-url="<?php echo esc_url($ajaxurl) ?>" data-referrar="<?php echo $nonce; ?>" data-total-page="<?php echo $page_amount; ?>" data-paged="<?php echo $paged; ?>" data-case-study-settings='<?php echo $case_study_data ?>'><?php echo $settings['loadmore_text'] ?></span>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif;
        wp_reset_postdata();
    }
}

$widgets_manager->register(new \xmoze_case_study_loop());
