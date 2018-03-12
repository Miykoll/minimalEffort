<h1>Settings Page</h1>

<form action="" method="POST">
    <?php settings_fields( 'theme-option-group' ); 
    do_settings_sections('theme-options');
    submit_button( 'Save!'); ?>
</form>