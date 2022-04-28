<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link rel="shortcut icon" type="image/png" href="img/favicon.png">

    <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-S377FHR047"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-S377FHR047');
        </script>
    <?php
        wp_head( );
    ?>
</head>
<body>
    <header class="header">
        <nav class="header__menu">
			<ul class="header__list">
				<li><a href="http://utome.ru/novoe/" class="header__link" tabindex="1">Новое</a></li>
				<li><a href="http://utome.ru/foto/" class="header__link" tabindex="2">Фото</a></li>
				<li><a href="http://utome.ru/video/" class="header__link" tabindex="3">Видео</a></li>
				<li><a href="http://utome.ru/svyaz/" class="header__link" tabindex="4">Связь</a></li>
                <li><a href="http://utome.ru/" class="header__link" tabindex="5">N</a></li>	
			</ul>
        </nav>				
    </header>