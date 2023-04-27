<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_categorie_event_index' => [[], ['_controller' => 'App\\Controller\\CategorieEventController::index'], [], [['text', '/categorie/event/']], [], [], []],
    'app_categorie_event_new' => [[], ['_controller' => 'App\\Controller\\CategorieEventController::new'], [], [['text', '/categorie/event/new']], [], [], []],
    'app_categorie_event_show' => [['idCatEvent'], ['_controller' => 'App\\Controller\\CategorieEventController::show'], [], [['variable', '/', '[^/]++', 'idCatEvent', true], ['text', '/categorie/event']], [], [], []],
    'app_categorie_event_edit' => [['idCatEvent'], ['_controller' => 'App\\Controller\\CategorieEventController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idCatEvent', true], ['text', '/categorie/event']], [], [], []],
    'app_categorie_event_delete' => [['idCatEvent'], ['_controller' => 'App\\Controller\\CategorieEventController::delete'], [], [['variable', '/', '[^/]++', 'idCatEvent', true], ['text', '/categorie/event']], [], [], []],
    'app_categorie_prod_index' => [[], ['_controller' => 'App\\Controller\\CategorieProdController::index'], [], [['text', '/categorie/prod/']], [], [], []],
    'app_categorie_prod_new' => [[], ['_controller' => 'App\\Controller\\CategorieProdController::new'], [], [['text', '/categorie/prod/new']], [], [], []],
    'app_categorie_prod_show' => [['idCatProd'], ['_controller' => 'App\\Controller\\CategorieProdController::show'], [], [['variable', '/', '[^/]++', 'idCatProd', true], ['text', '/categorie/prod']], [], [], []],
    'app_categorie_prod_edit' => [['idCatProd'], ['_controller' => 'App\\Controller\\CategorieProdController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idCatProd', true], ['text', '/categorie/prod']], [], [], []],
    'app_categorie_prod_delete' => [['idCatProd'], ['_controller' => 'App\\Controller\\CategorieProdController::delete'], [], [['variable', '/', '[^/]++', 'idCatProd', true], ['text', '/categorie/prod']], [], [], []],
    'app_evenement_index' => [[], ['_controller' => 'App\\Controller\\EvenementController::index'], [], [['text', '/evenement/']], [], [], []],
    'app_evenement_new' => [[], ['_controller' => 'App\\Controller\\EvenementController::new'], [], [['text', '/evenement/new']], [], [], []],
    'app_evenement_show' => [['idEvent'], ['_controller' => 'App\\Controller\\EvenementController::show'], [], [['variable', '/', '[^/]++', 'idEvent', true], ['text', '/evenement']], [], [], []],
    'app_evenement_edit' => [['idEvent'], ['_controller' => 'App\\Controller\\EvenementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idEvent', true], ['text', '/evenement']], [], [], []],
    'app_evenement_delete' => [['idEvent'], ['_controller' => 'App\\Controller\\EvenementController::delete'], [], [['variable', '/', '[^/]++', 'idEvent', true], ['text', '/evenement']], [], [], []],
    'app_facture_index' => [[], ['_controller' => 'App\\Controller\\FactureController::index'], [], [['text', '/facture/']], [], [], []],
    'app_facture_new' => [[], ['_controller' => 'App\\Controller\\FactureController::new'], [], [['text', '/facture/new']], [], [], []],
    'app_facture_show' => [['id'], ['_controller' => 'App\\Controller\\FactureController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/facture']], [], [], []],
    'app_facture_edit' => [['id'], ['_controller' => 'App\\Controller\\FactureController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/facture']], [], [], []],
    'app_facture_delete' => [['id'], ['_controller' => 'App\\Controller\\FactureController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/facture']], [], [], []],
    'app_front' => [[], ['_controller' => 'App\\Controller\\FrontController::index'], [], [['text', '/']], [], [], []],
    'login_home' => [[], ['_controller' => 'App\\Controller\\FrontController::home'], [], [['text', '/home']], [], [], []],
    'login_utilisateur' => [[], ['_controller' => 'App\\Controller\\FrontController::utilisateur'], [], [['text', '/utilisateur']], [], [], []],
    'produit_front' => [[], ['_controller' => 'App\\Controller\\FrontController::produit'], [], [['text', '/produit_front']], [], [], []],
    'rechercherParNom' => [[], ['_controller' => 'App\\Controller\\FrontController::rechercherParNom'], [], [['text', '/produits/recherche']], [], [], []],
    'rechercherParPrix' => [[], ['_controller' => 'App\\Controller\\FrontController::rechercherParPrix'], [], [['text', '/produits/rechercher-par-prix']], [], [], []],
    'rechercherParPrixEtNom' => [[], ['_controller' => 'App\\Controller\\FrontController::rechercherParPrixEtNom'], [], [['text', '/produits/rechercher-par-prix-et-nom']], [], [], []],
    'app_produit_index' => [[], ['_controller' => 'App\\Controller\\ProduitController::index'], [], [['text', '/produit/']], [], [], []],
    'app_produit_new' => [[], ['_controller' => 'App\\Controller\\ProduitController::new'], [], [['text', '/produit/new']], [], [], []],
    'app_produit_show' => [['idProd'], ['_controller' => 'App\\Controller\\ProduitController::show'], [], [['variable', '/', '[^/]++', 'idProd', true], ['text', '/produit']], [], [], []],
    'app_produit_edit' => [['idProd'], ['_controller' => 'App\\Controller\\ProduitController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idProd', true], ['text', '/produit']], [], [], []],
    'app_produit_delete' => [['idProd'], ['_controller' => 'App\\Controller\\ProduitController::delete'], [], [['variable', '/', '[^/]++', 'idProd', true], ['text', '/produit']], [], [], []],
    'app_produit_like' => [['idProd'], ['_controller' => 'App\\Controller\\ProduitController::like'], [], [['text', '/like'], ['variable', '/', '[^/]++', 'idProd', true], ['text', '/produit']], [], [], []],
    'app_produit_dislike' => [['idProd'], ['_controller' => 'App\\Controller\\ProduitController::dislike'], [], [['text', '/dislike'], ['variable', '/', '[^/]++', 'idProd', true], ['text', '/produit']], [], [], []],
    'app_reclamations_index' => [[], ['_controller' => 'App\\Controller\\ReclamationsController::index'], [], [['text', '/reclamations/']], [], [], []],
    'app_reclamations_new' => [[], ['_controller' => 'App\\Controller\\ReclamationsController::new'], [], [['text', '/reclamations/new']], [], [], []],
    'app_reclamations_show' => [['id'], ['_controller' => 'App\\Controller\\ReclamationsController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamations']], [], [], []],
    'app_reclamations_edit' => [['id'], ['_controller' => 'App\\Controller\\ReclamationsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reclamations']], [], [], []],
    'app_reclamations_delete' => [['id'], ['_controller' => 'App\\Controller\\ReclamationsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamations']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_reservation2_index' => [[], ['_controller' => 'App\\Controller\\Reservation2Controller::index'], [], [['text', '/reservation2/']], [], [], []],
    'app_reservation2_new' => [[], ['_controller' => 'App\\Controller\\Reservation2Controller::new'], [], [['text', '/reservation2/new']], [], [], []],
    'app_reservation2_show' => [['numres'], ['_controller' => 'App\\Controller\\Reservation2Controller::show'], [], [['variable', '/', '[^/]++', 'numres', true], ['text', '/reservation2']], [], [], []],
    'app_reservation2_edit' => [['numres'], ['_controller' => 'App\\Controller\\Reservation2Controller::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'numres', true], ['text', '/reservation2']], [], [], []],
    'app_reservation2_delete' => [['numres'], ['_controller' => 'App\\Controller\\Reservation2Controller::delete'], [], [['variable', '/', '[^/]++', 'numres', true], ['text', '/reservation2']], [], [], []],
    'app_reservation_index' => [[], ['_controller' => 'App\\Controller\\ReservationController::index'], [], [['text', '/reservation/']], [], [], []],
    'app_reservation_new' => [[], ['_controller' => 'App\\Controller\\ReservationController::new'], [], [['text', '/reservation/new']], [], [], []],
    'app_reservation_show' => [['numres'], ['_controller' => 'App\\Controller\\ReservationController::show'], [], [['variable', '/', '[^/]++', 'numres', true], ['text', '/reservation']], [], [], []],
    'app_reservation_edit' => [['numres'], ['_controller' => 'App\\Controller\\ReservationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'numres', true], ['text', '/reservation']], [], [], []],
    'app_reservation_delete' => [['numres'], ['_controller' => 'App\\Controller\\ReservationController::delete'], [], [['variable', '/', '[^/]++', 'numres', true], ['text', '/reservation']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_forgot_password' => [[], ['_controller' => 'App\\Controller\\SecurityController::forgotPassword'], [], [['text', '/forgot-password']], [], [], []],
    'app_code_password' => [[], ['_controller' => 'App\\Controller\\SecurityController::codePassword'], [], [['text', '/reset-password']], [], [], []],
    'app_new_password' => [[], ['_controller' => 'App\\Controller\\SecurityController::newPassword'], [], [['text', '/new-password']], [], [], []],
    'app_transport_index' => [[], ['_controller' => 'App\\Controller\\TransportController::index'], [], [['text', '/transport/']], [], [], []],
    'app_transport_new' => [[], ['_controller' => 'App\\Controller\\TransportController::new'], [], [['text', '/transport/new']], [], [], []],
    'app_transport_show' => [['idTransport'], ['_controller' => 'App\\Controller\\TransportController::show'], [], [['variable', '/', '[^/]++', 'idTransport', true], ['text', '/transport']], [], [], []],
    'app_transport_edit' => [['idTransport'], ['_controller' => 'App\\Controller\\TransportController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idTransport', true], ['text', '/transport']], [], [], []],
    'app_transport_delete' => [['idTransport'], ['_controller' => 'App\\Controller\\TransportController::delete'], [], [['variable', '/', '[^/]++', 'idTransport', true], ['text', '/transport']], [], [], []],
    'app_users_index' => [[], ['_controller' => 'App\\Controller\\UsersController::index'], [], [['text', '/users/']], [], [], []],
    'app_users_new' => [[], ['_controller' => 'App\\Controller\\UsersController::new'], [], [['text', '/users/new']], [], [], []],
    'app_users_show' => [['id'], ['_controller' => 'App\\Controller\\UsersController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
    'app_users_edit' => [['id'], ['_controller' => 'App\\Controller\\UsersController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
    'app_users_delete' => [['id'], ['_controller' => 'App\\Controller\\UsersController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
    'app_vehicule_index' => [[], ['_controller' => 'App\\Controller\\VehiculeController::index'], [], [['text', '/vehicule/']], [], [], []],
    'app_vehicule_new' => [[], ['_controller' => 'App\\Controller\\VehiculeController::new'], [], [['text', '/vehicule/new']], [], [], []],
    'app_vehicule_show' => [['idVehicule'], ['_controller' => 'App\\Controller\\VehiculeController::show'], [], [['variable', '/', '[^/]++', 'idVehicule', true], ['text', '/vehicule']], [], [], []],
    'app_vehicule_edit' => [['idVehicule'], ['_controller' => 'App\\Controller\\VehiculeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idVehicule', true], ['text', '/vehicule']], [], [], []],
    'app_vehicule_delete' => [['idVehicule'], ['_controller' => 'App\\Controller\\VehiculeController::delete'], [], [['variable', '/', '[^/]++', 'idVehicule', true], ['text', '/vehicule']], [], [], []],
    'api_genid' => [['id'], ['_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/.well-known/genid']], [], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '[^.]+', '_format' => 'jsonld'], [['variable', '.', 'jsonld', '_format', true], ['variable', '/', '[^.]+', 'shortName', true], ['text', '/api/contexts']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_users_list' => [[], ['_controller' => 'App\\Controller\\UsersController::index'], [], [['text', '/users']], [], [], []],
    'triProd' => [[], ['_controller' => 'App\\Http\\Controllers\\ProduitsController@triProd'], [], [['text', '/produits/tri']], [], [], []],
];
