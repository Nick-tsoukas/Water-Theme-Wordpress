<html>
    <head>
        <?php wp_head(); ?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.3.8/dist/css/splide.min.css" integrity="sha256-OVXMsmJCqhX3zi9RQcEsKdrT7n48kp/3rAghYshy3H0=" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    </head>
    <body>
       <header class="black">
           <div class="logo">
                <h2 style="color: #F7FFF7;"><a style="color: inherit; text-decoration: none;" href="/">NATURE</></h2>
           </div>
            <nav>
            <!-- hard coded menu -->
                <ul class="nav_links nav">
                <li><a style="color: #F7FFF7; text-decoration: none" href="/">Home</a></li>
                <li><a style="color: #F7FFF7; text-decoration: none" href="/about-us">About Us </a></li>
                <li><a style="color: #F7FFF7; text-decoration: none" href="/blog">Blog </a></li>
                <li><a style="color: #F7FFF7; text-decoration: none" href="/nature">Nature </a></li>
                <li><a style="color: #F7FFF7; text-decoration: none" href="/Contact">Contact </a></li>
                </ul>
                
                <!-- this is how to use dynamic wordpress menu wp_nav_menu(array(
                    'theme_location' => 'headerMenuLocation'
                )) -->

            </nav>
       </header>