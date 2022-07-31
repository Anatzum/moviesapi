<?php

/**
 * Local variables
 * @var \Phalcon\Mvc\Micro $app
 */

 use Phalcon\Mvc\Micro\Collection as MicroCollection;

//  use TestApp\CastController;

/**
 * Add your routes here
 */
$app->get('/', function () {
    echo $this['view']->render('index');
});

/**
 * Cast
 */
$cast = new MicroCollection();
$cast
    ->setHandler(CastController::class, true)
    ->setPrefix('/api/cast')
    ->get('/', 'index')
    ->get('/search/{name}', 'search')
    ->get('/{id}', 'show')
    ->post('/', 'store')
    ->put('/{id}', 'update')
    ->delete('/{id}', 'destroy');
$app->mount($cast);


/**
 * Companies
 */
$companies = new MicroCollection();
$companies
    ->setHandler(CompaniesController::class, true)
    ->setPrefix('/api/companies')
    ->get('/', 'index')
    ->get('/search/{name}', 'search')
    ->get('/{id}', 'show')
    ->post('/', 'store')
    ->put('/{id}', 'update')
    ->delete('/{id}', 'destroy');
$app->mount($companies);


/**
 * Crew
 */
$crew = new MicroCollection();
$crew
    ->setHandler(CrewController::class, true)
    ->setPrefix('/api/crew')
    ->get('/', 'index')
    ->get('/search/{name}', 'search')
    ->get('/{id}', 'show')
    ->post('/', 'store')
    ->put('/{id}', 'update')
    ->delete('/{id}', 'destroy');
$app->mount($crew);


/**
 * Generes
 */
$generes = new MicroCollection();
$generes
    ->setHandler(GeneresController::class, true)
    ->setPrefix('/api/generes')
    ->get('/', 'index')
    ->get('/search/{name}', 'search')
    ->get('/{id}', 'show')
    ->post('/', 'store')
    ->put('/{id}', 'update')
    ->delete('/{id}', 'destroy');
$app->mount($generes);


/**
 * Keywords
 */
$keywords = new MicroCollection();
$keywords
    ->setHandler(KeywordsController::class, true)
    ->setPrefix('/api/keywords')
    ->get('/', 'index')
    ->get('/search/{name}', 'search')
    ->get('/{id}', 'show')
    ->post('/', 'store')
    ->put('/{id}', 'update')
    ->delete('/{id}', 'destroy');
$app->mount($keywords);


/**
 * Languages
 */
$languages = new MicroCollection();
$languages
    ->setHandler(LanguagesController::class, true)
    ->setPrefix('/api/languages')
    ->get('/', 'index')
    ->get('/search/{name}', 'search')
    ->get('/{id}', 'show')
    ->post('/', 'store')
    ->put('/{id}', 'update')
    ->delete('/{id}', 'destroy');
$app->mount($languages);


/**
 * Movies
 */
$movies = new MicroCollection();
$movies
    ->setHandler(MoviesController::class, true)
    ->setPrefix('/api/movies')
    ->get('/', 'index')
    ->get('/search/{name}', 'search')
    ->get('/{id}', 'show')
    ->post('/', 'store')
    ->put('/{id}', 'update')
    ->delete('/{id}', 'destroy');
    // TODO Add a bunch more buisness routes to movies to make it more usefull
$app->mount($movies);


/**
 * ratings crud
 */
$ratings = new MicroCollection();
$ratings
    ->setHandler(RatingsController::class, true)
    ->setPrefix('/api/ratings')
    ->get('/', 'index')
    ->get('/search/{name}', 'search')
    ->get('/{id}', 'show')
    ->post('/', 'store')
    ->put('/{id}', 'update')
    ->delete('/{id}', 'destroy');
$app->mount($ratings);



/**
 * Not found handler
 */
$app->notFound(function () use($app) {
    $app->response->setStatusCode(404, "Not Found")->sendHeaders();
    echo $app['view']->render('404');
});
