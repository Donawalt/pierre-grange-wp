<!DOCTYPE html> <!-- Déclaration du doctype -->
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,intial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet"> <!-- importer la feuille de style principale -->
    <!-- <script src="<?php //echo esc_utl(get_template_directory_rri()); ?>/js/jquery-3.1.1.min.js"></script> --> <!-- importer un élèment dans le directory du thème -->
  </head>
  <body>
    <div id="conteneur">
      <header>
        <!--<h1><?php // bloginfo('name'); ?></h1>--> <!-- importer le nom du site et l'afficher -->
        <a href="/edsa-Pierre Grange/">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 357.62 17.38" id="logo"><defs><style>.cls-1{fill:#c00;}</style></defs><title>logo-first-pierre-grange</title><g id="Calque_2" data-name="Calque 2"><g id="Calque_2-2" data-name="Calque 2"><path class="cls-1" d="M 0 0.29 H 6.86 c 4 0 6.44 2.38 6.44 5.81 v 0 c 0 3.89 -3 5.91 -6.8 5.91 H 3.7 v 5 H 0 Z M 6.62 8.76 c 1.85 0 2.93 -1.1 2.93 -2.54 v 0 c 0 -1.66 -1.15 -2.54 -3 -2.54 H 3.7 V 8.76 Z" /><path d="M 16.2 0.29 h 3.7 v 16.8 H 16.2 Z" /><path d="M 24.1 0.29 H 36.77 V 3.58 h -9 V 7 h 7.92 v 3.28 H 27.77 V 13.8 h 9.12 v 3.29 H 24.1 Z" /><path d="M 40.18 0.29 h 7.68 A 6.7 6.7 0 0 1 52.75 2 a 5.27 5.27 0 0 1 1.44 3.84 v 0 a 5.22 5.22 0 0 1 -3.6 5.21 l 4.11 6 H 50.38 l -3.6 -5.38 H 43.87 v 5.38 H 40.18 Z m 7.44 8.16 c 1.8 0 2.83 -1 2.83 -2.38 V 6 c 0 -1.58 -1.1 -2.39 -2.91 -2.39 H 43.87 V 8.45 Z" /><path d="M 57.53 0.29 h 7.68 A 6.72 6.72 0 0 1 70.11 2 a 5.31 5.31 0 0 1 1.44 3.84 v 0 A 5.23 5.23 0 0 1 68 11.09 l 4.1 6 H 67.73 l -3.6 -5.38 H 61.22 v 5.38 H 57.53 Z M 65 8.45 c 1.8 0 2.83 -1 2.83 -2.38 V 6 c 0 -1.58 -1.1 -2.39 -2.9 -2.39 H 61.22 V 8.45 Z" /><path d="M 74.88 0.29 H 87.55 V 3.58 h -9 V 7 h 7.92 v 3.28 H 78.55 V 13.8 h 9.12 v 3.29 H 74.88 Z" /><path class="cls-1" d="M 90.22 8.74 V 8.69 A 8.62 8.62 0 0 1 99 0 a 9.29 9.29 0 0 1 6.61 2.3 L 103.3 5.11 a 6.2 6.2 0 0 0 -4.4 -1.7 a 5.05 5.05 0 0 0 -4.82 5.23 v 0 A 5 5 0 0 0 99.17 14 a 5.93 5.93 0 0 0 3.48 -1 v -2.4 H 98.93 V 7.42 h 7.3 v 7.29 a 10.9 10.9 0 0 1 -7.18 2.67 A 8.41 8.41 0 0 1 90.22 8.74 Z" /><path d="M 109.78 0.29 h 7.68 A 6.7 6.7 0 0 1 122.35 2 a 5.27 5.27 0 0 1 1.44 3.84 v 0 a 5.22 5.22 0 0 1 -3.6 5.21 l 4.11 6 H 120 l -3.6 -5.38 h -2.91 v 5.38 h -3.69 Z m 7.44 8.16 c 1.8 0 2.83 -1 2.83 -2.38 V 6 c 0 -1.58 -1.11 -2.39 -2.91 -2.39 h -3.67 V 8.45 Z" /><path d="M 132.89 0.17 h 3.41 l 7.2 16.92 h -3.87 l -1.53 -3.77 H 131 l -1.53 3.77 h -3.77 Z m 3.89 9.89 l -2.24 -5.45 l -2.23 5.45 Z" /><path d="M 146.09 0.29 h 3.41 l 7.87 10.34 V 0.29 H 161 v 16.8 h -3.15 L 149.74 6.41 V 17.09 h -3.65 Z" /><path d="M 164.3 8.74 V 8.69 A 8.62 8.62 0 0 1 173.11 0 a 9.24 9.24 0 0 1 6.6 2.3 l -2.33 2.81 A 6.16 6.16 0 0 0 173 3.41 a 5 5 0 0 0 -4.82 5.23 v 0 A 5 5 0 0 0 173.26 14 a 5.93 5.93 0 0 0 3.48 -1 v -2.4 H 173 V 7.42 h 7.29 v 7.29 a 10.87 10.87 0 0 1 -7.17 2.67 C 167.9 17.38 164.3 13.71 164.3 8.74 Z" /><path d="M 183.86 0.29 h 12.68 V 3.58 h -9 V 7 h 7.92 v 3.28 h -7.92 V 13.8 h 9.12 v 3.29 h -12.8 Z" /><path class="cls-1" d="M 205.7 0.17 h 3.41 l 7.2 16.92 h -3.86 l -1.54 -3.77 h -7.1 l -1.54 3.77 H 198.5 Z m 3.89 9.89 l -2.23 -5.45 l -2.23 5.45 Z" /><path d="M 218.9 0.29 h 7.68 a 6.71 6.71 0 0 1 4.9 1.7 a 5.27 5.27 0 0 1 1.44 3.84 v 0 a 5.22 5.22 0 0 1 -3.6 5.21 l 4.11 6 H 229.1 l -3.6 -5.38 h -2.9 v 5.38 h -3.7 Z m 7.44 8.16 c 1.8 0 2.84 -1 2.84 -2.38 V 6 c 0 -1.58 -1.11 -2.39 -2.91 -2.39 H 222.6 V 8.45 Z" /><path d="M 235.51 8.74 V 8.69 A 8.54 8.54 0 0 1 244.27 0 a 8.7 8.7 0 0 1 6.63 2.59 L 248.54 5.3 a 6.19 6.19 0 0 0 -4.29 -1.89 a 5 5 0 0 0 -4.87 5.23 v 0 A 5 5 0 0 0 244.25 14 a 6.09 6.09 0 0 0 4.42 -2 L 251 14.38 a 8.59 8.59 0 0 1 -6.89 3 A 8.48 8.48 0 0 1 235.51 8.74 Z" /><path d="M 254 0.29 h 3.69 V 6.94 h 6.82 V 0.29 h 3.7 v 16.8 h -3.7 V 10.35 h -6.82 v 6.74 H 254 Z" /><path d="M 272.38 0.29 h 3.69 v 16.8 h -3.69 Z" /><path d="M 284.18 3.7 h -5.11 V 0.29 H 293 V 3.7 h -5.11 V 17.09 h -3.7 Z" /><path d="M 295.82 0.29 H 308.5 V 3.58 h -9 V 7 h 7.92 v 3.28 H 299.5 V 13.8 h 9.12 v 3.29 h -12.8 Z" /><path d="M 344.82 0.29 H 357.5 V 3.58 h -9 V 7 h 7.92 v 3.28 H 348.5 V 13.8 h 9.12 v 3.29 h -12.8 Z" /><path d="M 311.16 8.74 V 8.69 A 8.54 8.54 0 0 1 319.92 0 a 8.68 8.68 0 0 1 6.62 2.59 L 324.19 5.3 a 6.19 6.19 0 0 0 -4.29 -1.89 A 5 5 0 0 0 315 8.64 v 0 A 5 5 0 0 0 319.9 14 a 6.05 6.05 0 0 0 4.41 -2 l 2.35 2.38 a 8.86 8.86 0 0 1 -15.5 -5.64 Z" /><path d="M 333.53 3.7 h -5.11 V 0.29 h 13.92 V 3.7 h -5.12 V 17.09 h -3.69 Z" /></g></g></svg>
    </a>
        <!-- <div id="recherche">
          <?php get_search_form(); ?>
        </div> -->
        <nav id="menu">
          <div class="menu-item">
            <?php wp_nav_menu(array('theme_location' => 'menu_principal')); ?>
          </div>
          <!-- importer le menu -->
          <div class="menu-checker">
            <div id="burger">
              <div id="b-1"></div>
              <div id="b-2"></div>
              <div id="b-3"></div>
            </div>
            <div id="cross">
              <p>✖</p>
            </div>
          </div>
        </nav>
      </header>
