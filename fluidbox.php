<?php

/**
 * Morfy Fluidbox Plugin
 *
 * (c) Romanenko Sergey / Awilum <awilum@msn.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

Action::add('theme_header', function () {
    echo('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fluidbox/2.0.0/css/fluidbox.min.css" type="text/css" />');
    echo('<style>.fluidbox__wrap { display: inline-block; }</style>');
});

Action::add('theme_footer', function () {
    echo('<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>');
    echo('<script src="https://cdnjs.cloudflare.com/ajax/libs/fluidbox/2.0.0/js/jquery.fluidbox.min.js"></script>');

    $template = Template::factory(PLUGINS_PATH . '/fluidbox/templates/');

    $template->setOptions([
        "strip" => false
    ]);

    $types = '';

    foreach (Config::get('plugins.fluidbox.types') as $type) {
        $types .= 'a[href$=".'.$type.'"],';
    }

    $types = rtrim($types, ",");

    return $template->display('fluidbox.tpl', ['types' => $types]);
});
