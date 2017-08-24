<?php


$app = new Slim\App($config);

// Get container
$container = $app->getContainer();

// Register component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig(TEMPLATEDIR . $container->get('settings')['template_version'], [
        'cache' => TEMPLATEDIR . 'cache',
        'debug' => $container->params['APP_DEBUG']
    ]);

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};

$app->add(new middleware\App($app));
