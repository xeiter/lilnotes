<?php

/*
Title: Options
Post Type: recipe
*/

// User list options for the dropdown
$user_options = piklist(
	get_users(['role__in' => ['administrator', 'author']]),
	['ID', 'display_name']
);

// Skill level options for the dropdown
$skill_level_options = [
	'novice' => 'Novice',
	'medium' => 'Medium',
	'experienced' => 'Experienced'
];

piklist('field', array(
	'type' => 'text',
	'field' => XC_TEXT_DOMAIN . '_prep_time',
	'label' => 'Prep time',
	'value' => '',
	'help' => 'Time (in minutes) that it takes to prepare ingridients',
));

piklist('field', array(
	'type' => 'text',
	'field' => XC_TEXT_DOMAIN . '_cook_time',
	'label' => 'Cook time',
	'value' => '',
	'help' => 'Time (in minutes) that it takes to cook the meal',
));

piklist('field', array(
	'type' => 'select',
	'field' => XC_TEXT_DOMAIN . '_author',
	'label' => 'Author',
	'value' => '',
	'choices' => $user_options
));

piklist('field', array(
	'type' => 'select',
	'field' => XC_TEXT_DOMAIN . '_skill_level',
	'label' => 'Skill level',
	'value' => '',
	'choices' => $skill_level_options
));

piklist('field', array(
	'type' => 'text',
	'field' => XC_TEXT_DOMAIN . '_cost',
	'label' => 'Cost to make',
	'value' => '',
	'help' => 'How much does it cost to make this meal (i.e. $19)'
));

piklist('field', array(
	'type' => 'number',
	'field' => XC_TEXT_DOMAIN . '_serving',
	'label' => 'Serving',
	'value' => '',
	'help' => 'How many people doee this meal serve'
));

piklist('field', array(
	'type' => 'text',
	'field' => XC_TEXT_DOMAIN . '_ingredients',
	'label' => 'Ingredients',
	'value' => '',
	'help' => 'Please enter ingredients one by one',
	'add_more' => true,
));

piklist('field', array(
	'type' => 'editor',
	'field' => XC_TEXT_DOMAIN . '_instructions',
	'label' => 'Instructions',
	'value' => '',
));


