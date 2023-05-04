<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/categorie/event' => [[['_route' => 'app_categorie_event_index', '_controller' => 'App\\Controller\\CategorieEventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/event/new' => [[['_route' => 'app_categorie_event_new', '_controller' => 'App\\Controller\\CategorieEventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorie/prod' => [[['_route' => 'app_categorie_prod_index', '_controller' => 'App\\Controller\\CategorieProdController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/prod/new' => [[['_route' => 'app_categorie_prod_new', '_controller' => 'App\\Controller\\CategorieProdController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement' => [[['_route' => 'app_evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evenement/new' => [[['_route' => 'app_evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/facture' => [[['_route' => 'app_facture_index', '_controller' => 'App\\Controller\\FactureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/facture/new' => [[['_route' => 'app_facture_new', '_controller' => 'App\\Controller\\FactureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'login_home', '_controller' => 'App\\Controller\\FrontController::home'], null, null, null, false, false, null]],
        '/utilisateur' => [[['_route' => 'login_utilisateur', '_controller' => 'App\\Controller\\FrontController::utilisateur'], null, null, null, false, false, null]],
        '/produit_front' => [[['_route' => 'produit_front', '_controller' => 'App\\Controller\\FrontController::produit'], null, null, null, false, false, null]],
        '/produits/recherche' => [[['_route' => 'rechercherParNom', '_controller' => 'App\\Controller\\FrontController::rechercherParNom'], null, ['GET' => 0], null, false, false, null]],
        '/produits/rechercher-par-prix' => [[['_route' => 'rechercherParPrix', '_controller' => 'App\\Controller\\FrontController::rechercherParPrix'], null, null, null, false, false, null]],
        '/produits/rechercher-par-prix-et-nom' => [[['_route' => 'rechercherParPrixEtNom', '_controller' => 'App\\Controller\\FrontController::rechercherParPrixEtNom'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'app_produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produit/new' => [[['_route' => 'app_produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produit_mobile' => [[['_route' => 'produit_mobile', '_controller' => 'App\\Controller\\ProduitMobileController::produitmobile'], null, null, null, false, false, null]],
        '/SupprimerProduit' => [[['_route' => 'SupprimerProduit', '_controller' => 'App\\Controller\\ProduitMobileController::SupprimerProduit'], null, null, null, false, false, null]],
        '/updateProduit' => [[['_route' => 'updateProduit', '_controller' => 'App\\Controller\\ProduitMobileController::updateProduit'], null, null, null, false, false, null]],
        '/produit_mobile_stat' => [[['_route' => 'produit_mobile_stat', '_controller' => 'App\\Controller\\ProduitMobileController::StatAction'], null, ['GET' => 0], null, false, false, null]],
        '/reclamations' => [[['_route' => 'app_reclamations_index', '_controller' => 'App\\Controller\\ReclamationsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamations/new' => [[['_route' => 'app_reclamations_new', '_controller' => 'App\\Controller\\ReclamationsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reservation2' => [[['_route' => 'app_reservation2_index', '_controller' => 'App\\Controller\\Reservation2Controller::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation2/new' => [[['_route' => 'app_reservation2_new', '_controller' => 'App\\Controller\\Reservation2Controller::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/forgot-password' => [[['_route' => 'app_forgot_password', '_controller' => 'App\\Controller\\SecurityController::forgotPassword'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_code_password', '_controller' => 'App\\Controller\\SecurityController::codePassword'], null, null, null, false, false, null]],
        '/new-password' => [[['_route' => 'app_new_password', '_controller' => 'App\\Controller\\SecurityController::newPassword'], null, null, null, false, false, null]],
        '/transport' => [[['_route' => 'app_transport_index', '_controller' => 'App\\Controller\\TransportController::index'], null, ['GET' => 0], null, true, false, null]],
        '/transport/new' => [[['_route' => 'app_transport_new', '_controller' => 'App\\Controller\\TransportController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users' => [
            [['_route' => 'app_users_index', '_controller' => 'App\\Controller\\UsersController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'app_users_list', '_controller' => 'App\\Controller\\UsersController::index'], null, null, null, false, false, null],
        ],
        '/users/new' => [[['_route' => 'app_users_new', '_controller' => 'App\\Controller\\UsersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users_mobile' => [[['_route' => 'users_mobile', '_controller' => 'App\\Controller\\UsersMobileController::usersmobile'], null, null, null, false, false, null]],
        '/SupprimerUsers' => [[['_route' => 'SupprimerUsers', '_controller' => 'App\\Controller\\UsersMobileController::SupprimerUsers'], null, null, null, false, false, null]],
        '/updateUsers' => [[['_route' => 'updateUsers', '_controller' => 'App\\Controller\\UsersMobileController::updateUsers'], null, null, null, false, false, null]],
        '/vehicule' => [[['_route' => 'app_vehicule_index', '_controller' => 'App\\Controller\\VehiculeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vehicule/new' => [[['_route' => 'app_vehicule_new', '_controller' => 'App\\Controller\\VehiculeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/produits/tri' => [[['_route' => 'triProd', '_controller' => 'App\\Http\\Controllers\\ProduitsController@triProd'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/categorie/(?'
                    .'|event/([^/]++)(?'
                        .'|(*:38)'
                        .'|/edit(*:50)'
                        .'|(*:57)'
                    .')'
                    .'|prod/([^/]++)(?'
                        .'|(*:81)'
                        .'|/edit(*:93)'
                        .'|(*:100)'
                    .')'
                .')'
                .'|/evenement/([^/]++)(?'
                    .'|(*:132)'
                    .'|/edit(*:145)'
                    .'|(*:153)'
                .')'
                .'|/facture/([^/]++)(?'
                    .'|(*:182)'
                    .'|/edit(*:195)'
                    .'|(*:203)'
                .')'
                .'|/produit/([^/]++)(?'
                    .'|(*:232)'
                    .'|/(?'
                        .'|edit(*:248)'
                        .'|like(*:260)'
                        .'|dislike(*:275)'
                    .')'
                    .'|(*:284)'
                .')'
                .'|/new(?'
                    .'|produit_mobile/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:386)'
                    .'|users_mobile/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:469)'
                .')'
                .'|/re(?'
                    .'|clamations/([^/]++)(?'
                        .'|(*:506)'
                        .'|/edit(*:519)'
                        .'|(*:527)'
                    .')'
                    .'|servation(?'
                        .'|2/([^/]++)(?'
                            .'|(*:561)'
                            .'|/edit(*:574)'
                            .'|(*:582)'
                        .')'
                        .'|/([^/]++)(?'
                            .'|(*:603)'
                            .'|/edit(*:616)'
                            .'|(*:624)'
                        .')'
                    .')'
                .')'
                .'|/transport/([^/]++)(?'
                    .'|(*:657)'
                    .'|/edit(*:670)'
                    .'|(*:678)'
                .')'
                .'|/users/(?'
                    .'|show/([^/]++)(*:710)'
                    .'|([^/]++)(?'
                        .'|/edit(*:734)'
                        .'|(*:742)'
                    .')'
                .')'
                .'|/vehicule/([^/]++)(?'
                    .'|(*:773)'
                    .'|/edit(*:786)'
                    .'|(*:794)'
                .')'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:839)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:875)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:906)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:945)'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:983)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'app_categorie_event_show', '_controller' => 'App\\Controller\\CategorieEventController::show'], ['idCatEvent'], ['GET' => 0], null, false, true, null]],
        50 => [[['_route' => 'app_categorie_event_edit', '_controller' => 'App\\Controller\\CategorieEventController::edit'], ['idCatEvent'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        57 => [[['_route' => 'app_categorie_event_delete', '_controller' => 'App\\Controller\\CategorieEventController::delete'], ['idCatEvent'], ['POST' => 0], null, false, true, null]],
        81 => [[['_route' => 'app_categorie_prod_show', '_controller' => 'App\\Controller\\CategorieProdController::show'], ['idCatProd'], ['GET' => 0], null, false, true, null]],
        93 => [[['_route' => 'app_categorie_prod_edit', '_controller' => 'App\\Controller\\CategorieProdController::edit'], ['idCatProd'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        100 => [[['_route' => 'app_categorie_prod_delete', '_controller' => 'App\\Controller\\CategorieProdController::delete'], ['idCatProd'], ['POST' => 0], null, false, true, null]],
        132 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['idEvent'], ['GET' => 0], null, false, true, null]],
        145 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['idEvent'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        153 => [[['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['idEvent'], ['POST' => 0], null, false, true, null]],
        182 => [[['_route' => 'app_facture_show', '_controller' => 'App\\Controller\\FactureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        195 => [[['_route' => 'app_facture_edit', '_controller' => 'App\\Controller\\FactureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        203 => [[['_route' => 'app_facture_delete', '_controller' => 'App\\Controller\\FactureController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        232 => [[['_route' => 'app_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['idProd'], ['GET' => 0], null, false, true, null]],
        248 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['idProd'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        260 => [[['_route' => 'app_produit_like', '_controller' => 'App\\Controller\\ProduitController::like'], ['idProd'], ['POST' => 0], null, false, false, null]],
        275 => [[['_route' => 'app_produit_dislike', '_controller' => 'App\\Controller\\ProduitController::dislike'], ['idProd'], ['POST' => 0], null, false, false, null]],
        284 => [[['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['idProd'], ['POST' => 0], null, false, true, null]],
        386 => [[['_route' => 'newproduit_mobile', '_controller' => 'App\\Controller\\ProduitMobileController::newproduit'], ['nomProd', 'description', 'prix', 'quantite', 'nomPart', 'image', 'nbLikes', 'nbDislikes'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        469 => [[['_route' => 'newusers_mobile', '_controller' => 'App\\Controller\\UsersMobileController::newusers'], ['prenom', 'nom', 'email', 'datenaissance', 'numtel', 'userrole', 'password'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        506 => [[['_route' => 'app_reclamations_show', '_controller' => 'App\\Controller\\ReclamationsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        519 => [[['_route' => 'app_reclamations_edit', '_controller' => 'App\\Controller\\ReclamationsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        527 => [[['_route' => 'app_reclamations_delete', '_controller' => 'App\\Controller\\ReclamationsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        561 => [[['_route' => 'app_reservation2_show', '_controller' => 'App\\Controller\\Reservation2Controller::show'], ['numres'], ['GET' => 0], null, false, true, null]],
        574 => [[['_route' => 'app_reservation2_edit', '_controller' => 'App\\Controller\\Reservation2Controller::edit'], ['numres'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        582 => [[['_route' => 'app_reservation2_delete', '_controller' => 'App\\Controller\\Reservation2Controller::delete'], ['numres'], ['POST' => 0], null, false, true, null]],
        603 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['numres'], ['GET' => 0], null, false, true, null]],
        616 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['numres'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        624 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['numres'], ['POST' => 0], null, false, true, null]],
        657 => [[['_route' => 'app_transport_show', '_controller' => 'App\\Controller\\TransportController::show'], ['idTransport'], ['GET' => 0], null, false, true, null]],
        670 => [[['_route' => 'app_transport_edit', '_controller' => 'App\\Controller\\TransportController::edit'], ['idTransport'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        678 => [[['_route' => 'app_transport_delete', '_controller' => 'App\\Controller\\TransportController::delete'], ['idTransport'], ['POST' => 0], null, false, true, null]],
        710 => [[['_route' => 'app_users_show', '_controller' => 'App\\Controller\\UsersController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        734 => [[['_route' => 'app_users_edit', '_controller' => 'App\\Controller\\UsersController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        742 => [[['_route' => 'app_users_delete', '_controller' => 'App\\Controller\\UsersController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        773 => [[['_route' => 'app_vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['idVehicule'], ['GET' => 0], null, false, true, null]],
        786 => [[['_route' => 'app_vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['idVehicule'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        794 => [[['_route' => 'app_vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['idVehicule'], ['POST' => 0], null, false, true, null]],
        839 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        875 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        906 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        945 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        983 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
