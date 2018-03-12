<?php

function theme_settings() {
    register_setting( 'theme-option-group', 'summary-about-me');
    add_settings_section( 'theme-index-options', 'Homepage Settings', 'theme_option_options', 'theme-options' );
    add_settings_field( 'summary-text', 'Text summary about me', 'summary_about_me_callback' , 'theme-options', 'theme-index-options');
}
add_action( 'admin_init', 'theme_settings');

function theme_homepage_options(){
    echo 'Customize Homepage Settings';
}

function summary_about_me_callback() {
    echo '<input type="text" name="Summary" placeholder="Text">';
}