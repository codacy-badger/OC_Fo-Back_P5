<?php
/************************************************ ROUTES EXEMPLES *************************************************/
//    $router->get('', function () { echo 'Homepage !';});
//    $router->get('/posts', function (){ echo 'Tous les articles';});
//    $router->get('/posts/:slug-:id', "Post#showSlug")->with('slug', '([a-z\-0-9]+)')->with('id', '[0-9]+');
//    $router->get('/posts/:id', "Post#show")->with('id', '[0-9]+');
//    $router->post('/posts/:id', function ($id){ echo 'Afficher l\'article '.$id.' la valeur '.$_POST['name'];});
/*****************************************************************************************************************/

    $router->get('', "Default#home");
