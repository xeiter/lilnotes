<?php

/*
 Title: Clear cache section
 Setting: theme_cache_settings
 */

piklist('field', array(
    'type' => 'checkbox',
    'field' => 'az_cache_clear_all',
    'label' => 'Clear all cache',
    'value' => '', // set default value
    'choices' => array(
        '1' => 'Yes',
    )
));

