<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/abonnement' => [[['_route' => 'app_abonnement_index', '_controller' => 'App\\Controller\\AbonnementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/abonnement/new' => [[['_route' => 'app_abonnement_new', '_controller' => 'App\\Controller\\AbonnementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/abonnement_mobile' => [[['_route' => 'abonnemnt_mobile', '_controller' => 'App\\Controller\\AbonnementMobileController::abonnementmobile'], null, null, null, false, false, null]],
        '/SupprimerAbonnement' => [[['_route' => 'SupprimerAbonnement', '_controller' => 'App\\Controller\\AbonnementMobileController::SupprimerAbonnement'], null, null, null, false, false, null]],
        '/updateAbonnement' => [[['_route' => 'updateAbonnement', '_controller' => 'App\\Controller\\AbonnementMobileController::updateAbonnement'], null, null, null, false, false, null]],
        '/calendrier' => [[['_route' => 'app_calendrier', '_controller' => 'App\\Controller\\CalendrierController::indexC'], null, null, null, false, false, null]],
        '/categorie/event' => [[['_route' => 'app_categorie_event', '_controller' => 'App\\Controller\\CategorieEventController::index'], null, null, null, false, false, null]],
        '/categorie/prod' => [[['_route' => 'app_categorie_prod_index', '_controller' => 'App\\Controller\\CategorieProdController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/prod/new' => [[['_route' => 'app_categorie_prod_new', '_controller' => 'App\\Controller\\CategorieProdController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement' => [[['_route' => 'app_evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evenement/back' => [[['_route' => 'app_evenement_back', '_controller' => 'App\\Controller\\EvenementController::indexA'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/new' => [[['_route' => 'app_evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/facture' => [[['_route' => 'app_facture_index', '_controller' => 'App\\Controller\\FactureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/facture/new' => [[['_route' => 'app_facture_new', '_controller' => 'App\\Controller\\FactureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'login_home', '_controller' => 'App\\Controller\\FrontController::home'], null, null, null, false, false, null]],
        '/utilisateur' => [[['_route' => 'login_utilisateur', '_controller' => 'App\\Controller\\FrontController::utilisateur'], null, null, null, false, false, null]],
        '/organisateur' => [[['_route' => 'login_organisateur', '_controller' => 'App\\Controller\\FrontController::organisateur'], null, null, null, false, false, null]],
        '/partenaire' => [[['_route' => 'login_partenaire', '_controller' => 'App\\Controller\\FrontController::partenaire'], null, null, null, false, false, null]],
        '/transporteur' => [[['_route' => 'login_transporteur', '_controller' => 'App\\Controller\\FrontController::transporteur'], null, null, null, false, false, null]],
        '/administrateur' => [[['_route' => 'login_administrateur', '_controller' => 'App\\Controller\\FrontController::administrateur'], null, null, null, false, false, null]],
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
        '/reclamations/Reclams' => [[['_route' => 'app_reclamationsusers_index', '_controller' => 'App\\Controller\\ReclamationsController::indexReclams'], null, ['GET' => 0], null, false, false, null]],
        '/reclamations/new' => [[['_route' => 'app_reclamations_new', '_controller' => 'App\\Controller\\ReclamationsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reservation2' => [[['_route' => 'app_reservation2_index', '_controller' => 'App\\Controller\\Reservation2Controller::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation2/new' => [[['_route' => 'app_reservation2_new', '_controller' => 'App\\Controller\\Reservation2Controller::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservations/json' => [[['_route' => 'app_reservations_json', '_controller' => 'App\\Controller\\ReservationControllerMobile::index'], null, null, null, false, false, null]],
        '/listReservationsJson' => [[['_route' => 'list', '_controller' => 'App\\Controller\\ReservationControllerMobile::getRes'], null, null, null, false, false, null]],
        '/addReservationJSON' => [[['_route' => 'updateStudentJSON', '_controller' => 'App\\Controller\\ReservationControllerMobile::updateStudentJSON'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/forgot-password' => [[['_route' => 'app_forgot_password', '_controller' => 'App\\Controller\\SecurityController::forgotPassword'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_code_password', '_controller' => 'App\\Controller\\SecurityController::codePassword'], null, null, null, false, false, null]],
        '/new-password' => [[['_route' => 'app_new_password', '_controller' => 'App\\Controller\\SecurityController::newPassword'], null, null, null, false, false, null]],
        '/transport/front' => [[['_route' => 'app_transport_index', '_controller' => 'App\\Controller\\TransportController::index'], null, ['GET' => 0], null, false, false, null]],
        '/transport/back' => [[['_route' => 'app_transport_back', '_controller' => 'App\\Controller\\TransportController::indexA'], null, ['GET' => 0], null, false, false, null]],
        '/transport/back/new' => [[['_route' => 'app_transport_back_new', '_controller' => 'App\\Controller\\TransportController::newA'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/transport/front/new' => [[['_route' => 'app_transport_front_new', '_controller' => 'App\\Controller\\TransportController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/transport/back/transportStats' => [[['_route' => 'app_transport_back_stats', '_controller' => 'App\\Controller\\TransportController::transportStats'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users' => [
            [['_route' => 'app_users_index', '_controller' => 'App\\Controller\\UsersController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'app_users_list', '_controller' => 'App\\Controller\\UsersController::index'], null, null, null, false, false, null],
        ],
        '/users/new' => [[['_route' => 'app_users_new', '_controller' => 'App\\Controller\\UsersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users_mobile' => [[['_route' => 'users_mobile', '_controller' => 'App\\Controller\\UsersMobileController::usersmobile'], null, null, null, false, false, null]],
        '/SupprimerUsers' => [[['_route' => 'SupprimerUsers', '_controller' => 'App\\Controller\\UsersMobileController::SupprimerUsers'], null, null, null, false, false, null]],
        '/updateUsers' => [[['_route' => 'updateUsers', '_controller' => 'App\\Controller\\UsersMobileController::updateUsers'], null, null, null, false, false, null]],
        '/vehicule/front' => [[['_route' => 'app_vehicule_index', '_controller' => 'App\\Controller\\VehiculeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/vehicule/back' => [[['_route' => 'app_vehicule_back_index', '_controller' => 'App\\Controller\\VehiculeController::indexB'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/produits/tri' => [[['_route' => 'triProd', '_controller' => 'App\\Http\\Controllers\\ProduitsController@triProd'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|bonnement/([^/]++)(?'
                        .'|(*:33)'
                        .'|/e(?'
                            .'|dit(*:48)'
                            .'|xportpdf(*:63)'
                        .')'
                        .'|(*:71)'
                    .')'
                    .'|pi(?'
                        .'|/\\.well\\-known/genid/([^/]++)(*:113)'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:149)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:180)'
                            .'|contexts/([^.]+)(?:\\.(jsonld))?(*:219)'
                        .')'
                    .')'
                .')'
                .'|/new(?'
                    .'|abonnement_mobile/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:317)'
                    .'|produit_mobile/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:411)'
                    .'|users_mobile/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:494)'
                .')'
                .'|/categorie/prod/([^/]++)(?'
                    .'|(*:530)'
                    .'|/edit(*:543)'
                    .'|(*:551)'
                .')'
                .'|/evenement/(?'
                    .'|([^/]++)(?'
                        .'|(*:585)'
                        .'|/edit(*:598)'
                        .'|(*:606)'
                    .')'
                    .'|eventStats(*:625)'
                .')'
                .'|/facture/([^/]++)(?'
                    .'|(*:654)'
                    .'|/edit(*:667)'
                    .'|(*:675)'
                .')'
                .'|/produit/([^/]++)(?'
                    .'|(*:704)'
                    .'|/(?'
                        .'|edit(*:720)'
                        .'|like(*:732)'
                        .'|dislike(*:747)'
                    .')'
                    .'|(*:756)'
                .')'
                .'|/re(?'
                    .'|clamations/([^/]++)(?'
                        .'|(*:793)'
                        .'|/edit(*:806)'
                        .'|(*:814)'
                    .')'
                    .'|servation(?'
                        .'|2/([^/]++)(?'
                            .'|(*:848)'
                            .'|/edit(*:861)'
                            .'|(*:869)'
                        .')'
                        .'|/([^/]++)(?'
                            .'|(*:890)'
                            .'|/edit(*:903)'
                            .'|(*:911)'
                        .')'
                    .')'
                .')'
                .'|/ReservationJson/(?'
                    .'|([^/]++)(*:950)'
                    .'|edit(*:962)'
                .')'
                .'|/u(?'
                    .'|pdateReservationJSON/([^/]++)(*:1005)'
                    .'|sers/(?'
                        .'|show/([^/]++)(*:1035)'
                        .'|([^/]++)(?'
                            .'|/edit(*:1060)'
                            .'|(*:1069)'
                        .')'
                    .')'
                .')'
                .'|/deleteReservationJSON/([^/]++)(*:1112)'
                .'|/transport/([^/]++)/(?'
                    .'|front(?'
                        .'|(*:1152)'
                        .'|/(?'
                            .'|edit(*:1169)'
                            .'|new(*:1181)'
                        .')'
                    .')'
                    .'|back(?'
                        .'|(*:1199)'
                        .'|/edit(*:1213)'
                        .'|(*:1222)'
                    .')'
                .')'
                .'|/vehicule(?'
                    .'|back/new([^/]++)(*:1261)'
                    .'|front/new([^/]++)(*:1287)'
                    .'|/(?'
                        .'|([^/]++)(*:1308)'
                        .'|back/([^/]++)(*:1330)'
                        .'|([^/]++)(?'
                            .'|/edit(?'
                                .'|(*:1358)'
                            .')'
                            .'|(*:1368)'
                        .')'
                    .')'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:1408)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:1445)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'app_abonnement_show', '_controller' => 'App\\Controller\\AbonnementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        48 => [[['_route' => 'app_abonnement_edit', '_controller' => 'App\\Controller\\AbonnementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        63 => [[['_route' => 'exportpdf', '_controller' => 'App\\Controller\\AbonnementController::exportToPdf'], ['id'], null, null, false, false, null]],
        71 => [[['_route' => 'app_abonnement_delete', '_controller' => 'App\\Controller\\AbonnementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        113 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        149 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        180 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        219 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        317 => [[['_route' => 'newabonnement_mobile', '_controller' => 'App\\Controller\\AbonnementMobileController::newabonnement'], ['idUser', 'prix', 'type', 'renouvellement', 'dateExpire', 'plafond', 'currency'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        411 => [[['_route' => 'newproduit_mobile', '_controller' => 'App\\Controller\\ProduitMobileController::newproduit'], ['nomProd', 'description', 'prix', 'quantite', 'nomPart', 'image', 'nbLikes', 'nbDislikes'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        494 => [[['_route' => 'newusers_mobile', '_controller' => 'App\\Controller\\UsersMobileController::newusers'], ['prenom', 'nom', 'email', 'datenaissance', 'numtel', 'userrole', 'password'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        530 => [[['_route' => 'app_categorie_prod_show', '_controller' => 'App\\Controller\\CategorieProdController::show'], ['idCatProd'], ['GET' => 0], null, false, true, null]],
        543 => [[['_route' => 'app_categorie_prod_edit', '_controller' => 'App\\Controller\\CategorieProdController::edit'], ['idCatProd'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        551 => [[['_route' => 'app_categorie_prod_delete', '_controller' => 'App\\Controller\\CategorieProdController::delete'], ['idCatProd'], ['POST' => 0], null, false, true, null]],
        585 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['idEvent'], ['GET' => 0], null, false, true, null]],
        598 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['idEvent'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        606 => [[['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['idEvent'], ['POST' => 0], null, false, true, null]],
        625 => [[['_route' => 'app_evenement_stats', '_controller' => 'App\\Controller\\EvenementController::indexB'], [], ['GET' => 0], null, false, false, null]],
        654 => [[['_route' => 'app_facture_show', '_controller' => 'App\\Controller\\FactureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        667 => [[['_route' => 'app_facture_edit', '_controller' => 'App\\Controller\\FactureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        675 => [[['_route' => 'app_facture_delete', '_controller' => 'App\\Controller\\FactureController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        704 => [[['_route' => 'app_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['idProd'], ['GET' => 0], null, false, true, null]],
        720 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['idProd'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        732 => [[['_route' => 'app_produit_like', '_controller' => 'App\\Controller\\ProduitController::like'], ['idProd'], ['POST' => 0], null, false, false, null]],
        747 => [[['_route' => 'app_produit_dislike', '_controller' => 'App\\Controller\\ProduitController::dislike'], ['idProd'], ['POST' => 0], null, false, false, null]],
        756 => [[['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['idProd'], ['POST' => 0], null, false, true, null]],
        793 => [[['_route' => 'app_reclamations_show', '_controller' => 'App\\Controller\\ReclamationsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        806 => [[['_route' => 'app_reclamations_edit', '_controller' => 'App\\Controller\\ReclamationsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        814 => [[['_route' => 'app_reclamations_delete', '_controller' => 'App\\Controller\\ReclamationsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        848 => [[['_route' => 'app_reservation2_show', '_controller' => 'App\\Controller\\Reservation2Controller::show'], ['numres'], ['GET' => 0], null, false, true, null]],
        861 => [[['_route' => 'app_reservation2_edit', '_controller' => 'App\\Controller\\Reservation2Controller::edit'], ['numres'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        869 => [[['_route' => 'app_reservation2_delete', '_controller' => 'App\\Controller\\Reservation2Controller::delete'], ['numres'], ['POST' => 0], null, false, true, null]],
        890 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['numres'], ['GET' => 0], null, false, true, null]],
        903 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['numres'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        911 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['numres'], ['POST' => 0], null, false, true, null]],
        950 => [[['_route' => 'reservation', '_controller' => 'App\\Controller\\ReservationControllerMobile::ReservationId'], ['numRes'], null, null, false, true, null]],
        962 => [[['_route' => 'editfr', '_controller' => 'App\\Controller\\ReservationControllerMobile::Modifier'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1005 => [[['_route' => 'updateReservationJSON', '_controller' => 'App\\Controller\\ReservationControllerMobile::updateReservationJSON'], ['numRes'], null, null, false, true, null]],
        1035 => [[['_route' => 'app_users_show', '_controller' => 'App\\Controller\\UsersController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1060 => [[['_route' => 'app_users_edit', '_controller' => 'App\\Controller\\UsersController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1069 => [[['_route' => 'app_users_delete', '_controller' => 'App\\Controller\\UsersController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1112 => [[['_route' => 'deleteReservationJSON', '_controller' => 'App\\Controller\\ReservationControllerMobile::deleteStudentJSON'], ['numRes'], null, null, false, true, null]],
        1152 => [[['_route' => 'app_transport_front_show', '_controller' => 'App\\Controller\\TransportController::show'], ['idTransport'], ['GET' => 0], null, false, false, null]],
        1169 => [[['_route' => 'app_transport_front_edit', '_controller' => 'App\\Controller\\TransportController::edit'], ['idTransport'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1181 => [[['_route' => 'app_transport_front_delete', '_controller' => 'App\\Controller\\TransportController::deleteA'], ['idTransport'], ['POST' => 0], null, false, false, null]],
        1199 => [[['_route' => 'app_transport_back_show', '_controller' => 'App\\Controller\\TransportController::showA'], ['idTransport'], ['GET' => 0], null, false, false, null]],
        1213 => [[['_route' => 'app_transport_back_edit', '_controller' => 'App\\Controller\\TransportController::editA'], ['idTransport'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1222 => [[['_route' => 'app_transport_back_delete', '_controller' => 'App\\Controller\\TransportController::delete'], ['idTransport'], ['POST' => 0], null, false, false, null]],
        1261 => [[['_route' => 'app_vehicule_back_new', '_controller' => 'App\\Controller\\VehiculeController::new'], ['idTransport'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1287 => [[['_route' => 'app_vehicule_front_new', '_controller' => 'App\\Controller\\VehiculeController::newv'], ['idTransport'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1308 => [[['_route' => 'app_vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['idVehicule'], ['GET' => 0], null, false, true, null]],
        1330 => [[['_route' => 'app_vehicule_b_show', '_controller' => 'App\\Controller\\VehiculeController::showBack'], ['idVehicule'], ['GET' => 0], null, false, true, null]],
        1358 => [
            [['_route' => 'app_vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['idVehicule'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [['_route' => 'app_vehicule_back_edit', '_controller' => 'App\\Controller\\VehiculeController::editB'], ['idVehicule'], ['GET' => 0, 'POST' => 1], null, false, false, null],
        ],
        1368 => [
            [['_route' => 'app_vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['idVehicule'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_vehicule_back_delete', '_controller' => 'App\\Controller\\VehiculeController::deleteB'], ['idVehicule'], ['POST' => 0], null, false, true, null],
        ],
        1408 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        1445 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
