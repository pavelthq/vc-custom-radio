<?php
return array(
	'name' => __( 'Test custom radio', 'js_composer' ),
	'base' => 'vc_test_custom_radio',
	'category' => __( 'Content', 'js_composer' ),
	'description' => __( 'Test custom radio', 'js_composer' ),
	'params' => array(
		// std='' - means that default is all unchecked
		array(
			'type' => 'custom_radio',
			'heading' => __( 'std empty - All unchecked by default', 'js_composer' ),
			'param_name' => 'custom_radio',
			'std' => '',
			// default unchecked
			'value' => array(
				__( 'Test1', 'js_composer' ) => 'Test1',
				__( 'Test2', 'js_composer' ) => 'Test2',
				__( 'Test3', 'js_composer' ) => 'Test3',
			),
			'description' => 'Note that radio button cannot be unchecked after checked',
		),
		// No STD means that default is first value in array, and if empty it will take first as Default value
		array(
			'type' => 'custom_radio',
			'heading' => __( 'First value checked by default', 'js_composer' ),
			'param_name' => 'custom_radio2',
			'value' => array(
				__( 'Test1', 'js_composer' ) => 'Test1',
				__( 'Test2', 'js_composer' ) => 'Test2',
				__( 'Test3', 'js_composer' ) => 'Test3',
			),
		),
		array(
			'type' => 'custom_radio',
			'heading' => __( 'Save always is set, unchecked all by default', 'js_composer' ),
			'param_name' => 'custom_radio2_save_always',
			'value' => array(
				__( 'Test1', 'js_composer' ) => 'Test1',
				__( 'Test2', 'js_composer' ) => 'Test2',
				__( 'Test3', 'js_composer' ) => 'Test3',
			),
			'save_always' => true,
			// This will allow to force save empty value (otherwise in case if emtpy it will take first value in array)
		),
		// Std='Test2' - means that default is Test2 checked
		array(
			'type' => 'custom_radio',
			'heading' => __( 'Std-Test2 second value checked by default', 'js_composer' ),
			'param_name' => 'custom_radio3',
			'std' => 'Test2',
			'value' => array(
				__( 'Test1', 'js_composer' ) => 'Test1',
				__( 'Test2', 'js_composer' ) => 'Test2',
				__( 'Test3', 'js_composer' ) => 'Test3',
			),
		),
	),
);