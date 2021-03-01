<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MACA</title>

    <?php wp_head(); ?>
</head>
<body>

<div class="header">
    <img src="/wp-content/themes/maca/images/Logo.png" alt="Manchester Animal Climate Action">
    <input class="noSelect" type="checkbox" id="toggler"/>
    <div id="burger-menu"><div></div></div>
    <?php wp_nav_menu(
        array(
            'theme_location' => 'top-menu'
        )
    ); ?>
</div>