<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_abonnement_index' => [[], ['_controller' => 'App\\Controller\\AbonnementController::index'], [], [['text', '/abonnement/']], [], [], []],
    'app_abonnement_new' => [[], ['_controller' => 'App\\Controller\\AbonnementController::new'], [], [['text', '/abonnement/new']], [], [], []],
    'app_abonnement_show' => [['id'], ['_controller' => 'App\\Controller\\AbonnementController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/abonnement']], [], [], []],
    'app_abonnement_edit' => [['id'], ['_controller' => 'App\\Controller\\AbonnementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/abonnement']], [], [], []],
    'app_abonnement_delete' => [['id'], ['_controller' => 'App\\Controller\\AbonnementController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/abonnement']], [], [], []],
    'exportpdf' => [['id'], ['_controller' => 'App\\Controller\\AbonnementController::exportToPdf'], [], [['text', '/exportpdf'], ['variable', '/', '[^/]++', 'id', true], ['text', '/abonnement']], [], [], []],
    'app_calendrier' => [[], ['_controller' => 'App\\Controller\\CalendrierController::indexC'], [], [['text', '/calendrier']], [], [], []],
    'app_categorie_event' => [[], ['_controller' => 'App\\Controller\\CategorieEventController::index'], [], [['text', '/categorie/event']], [], [], []],
    'app_categorie_prod_index' => [[], ['_controller' => 'App\\Controller\\CategorieProdController::index'], [], [['text', '/categorie/prod/']], [], [], []],
    'app_categorie_prod_new' => [[], ['_controller' => 'App\\Controller\\CategorieProdController::new'], [], [['text', '/categorie/prod/new']], [], [], []],
    'app_categorie_prod_show' => [['idCatProd'], ['_controller' => 'App\\Controller\\CategorieProdController::show'], [], [['variable', '/', '[^/]++', 'idCatProd', true], ['text', '/categorie/prod']], [], [], []],
    'app_categorie_prod_edit' => [['idCatProd'], ['_controller' => 'App\\Controller\\CategorieProdController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idCatProd', true], ['text', '/categorie/prod']], [], [], []],
    'app_categorie_prod_delete' => [['idCatProd'], ['_controller' => 'App\\Controller\\CategorieProdController::delete'], [], [['variable', '/', '[^/]++', 'idCatProd', true], ['text', '/categorie/prod']], [], [], []],
    'app_evenement_index' => [[], ['_controller' => 'App\\Controller\\EvenementController::index'], [], [['text', '/evenement/']], [], [], []],
    'app_evenement_back' => [[], ['_controller' => 'App\\Controller\\EvenementController::indexA'], [], [['text', '/evenement/back']], [], [], []],
    'app_evenement_new' => [[], ['_controller' => 'App\\Controller\\EvenementController::new'], [], [['text', '/evenement/new']], [], [], []],
    'app_evenement_show' => [['idEvent'], ['_controller' => 'App\\Controller\\EvenementController::show'], [], [['variable', '/', '[^/]++', 'idEvent', true], ['text', '/evenement']], [], [], []],
    'app_evenement_edit' => [['idEvent'], ['_controller' => 'App\\Controller\\EvenementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idEvent', true], ['text', '/evenement']], [], [], []],
    'app_evenement_delete' => [['idEvent'], ['_controller' => 'App\\Controller\\EvenementController::delete'], [], [['variable', '/', '[^/]++', 'idEvent', true], ['text', '/evenement']], [], [], []],
    'app_evenement_stats' => [[], ['_controller' => 'App\\Controller\\EvenementController::indexB'], [], [['text', '/evenement/eventStats']], [], [], []],
    'app_facture_index' => [[], ['_controller' => 'App\\Controller\\FactureController::index'], [], [['text', '/facture/']], [], [], []],
    'app_facture_new' => [[], ['_controller' => 'App\\Controller\\FactureController::new'], [], [['text', '/facture/new']], [], [], []],
    'app_facture_show' => [['id'], ['_controller' => 'App\\Controller\\FactureController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/facture']], [], [], []],
    'app_facture_edit' => [['id'], ['_controller' => 'App\\Controller\\FactureController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/facture']], [], [], []],
    'app_facture_delete' => [['id'], ['_controller' => 'App\\Controller\\FactureController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/facture']], [], [], []],
    'app_front' => [[], ['_controller' => 'App\\Controller\\FrontController::index'], [], [['text', '/']], [], [], []],
    'login_home' => [[], ['_controller' => 'App\\Controller\\FrontController::home'], [], [['text', '/home']], [], [], []],
    'login_utilisateur' => [[], ['_controller' => 'App\\Controller\\FrontController::utilisateur'], [], [['text', '/utilisateur']], [], [], []],
    'login_organisateur' => [[], ['_controller' => 'App\\Controller\\FrontController::organisateur'], [], [['text', '/organisateur']], [], [], []],
    'login_partenaire' => [[], ['_controller' => 'App\\Controller\\FrontController::partenaire'], [], [['text', '/partenaire']], [], [], []],
    'login_transporteur' => [[], ['_controller' => 'App\\Controller\\FrontController::transporteur'], [], [['text', '/transporteur']], [], [], []],
    'login_administrateur' => [[], ['_controller' => 'App\\Controller\\FrontController::administrateur'], [], [['text', '/administrateur']], [], [], []],
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
    'produit_mobile' => [[], ['_controller' => 'App\\Controller\\ProduitMobileController::produitmobile'], [], [['text', '/produit_mobile']], [], [], []],
    'newproduit_mobile' => [['nomProd', 'description', 'prix', 'quantite', 'nomPart', 'image', 'nbLikes', 'nbDislikes'], ['_controller' => 'App\\Controller\\ProduitMobileController::newproduit'], [], [['variable', '/', '[^/]++', 'nbDislikes', true], ['variable', '/', '[^/]++', 'nbLikes', true], ['variable', '/', '[^/]++', 'image', true], ['variable', '/', '[^/]++', 'nomPart', true], ['variable', '/', '[^/]++', 'quantite', true], ['variable', '/', '[^/]++', 'prix', true], ['variable', '/', '[^/]++', 'description', true], ['variable', '/', '[^/]++', 'nomProd', true], ['text', '/newproduit_mobile']], [], [], []],
    'SupprimerProduit' => [[], ['_controller' => 'App\\Controller\\ProduitMobileController::SupprimerProduit'], [], [['text', '/SupprimerProduit']], [], [], []],
    'updateProduit' => [[], ['_controller' => 'App\\Controller\\ProduitMobileController::updateProduit'], [], [['text', '/updateProduit']], [], [], []],
    'produit_mobile_stat' => [[], ['_controller' => 'App\\Controller\\ProduitMobileController::StatAction'], [], [['text', '/produit_mobile_stat']], [], [], []],
    'app_reclamations_index' => [[], ['_controller' => 'App\\Controller\\ReclamationsController::index'], [], [['text', '/reclamations/']], [], [], []],
    'app_reclamationsusers_index' => [[], ['_controller' => 'App\\Controller\\ReclamationsController::indexReclams'], [], [['text', '/reclamations/Reclams']], [], [], []],
    'app_reclamations_new' => [[], ['_controller' => 'App\\Controller\\ReclamationsController::new'], [], [['text', '/reclamations/new']], [], [], []],
    'app_reclamations_show' => [['id'], ['_controller' => 'App\\Controller\\ReclamationsController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamations']], [], [], []],
    'app_reclamations_edit' => [['id'], ['_controller' => 'App\\Controller\\ReclamationsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reclamations']], [], [], []],
    'app_reclamations_delete' => [['id'], ['_controller' => 'App\\Controller\\ReclamationsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamations']], [], [], []],
    'add_reclamation' => [[], ['_controller' => 'App\\Controller\\ReclamationsMobileController::ajouterReclamationAction'], [], [['text', '/addReclamation']], [], [], []],
    'delete_reclamation' => [[], ['_controller' => 'App\\Controller\\ReclamationsMobileController::deleteReclamationAction'], [], [['text', '/deleteReclamation']], [], [], []],
    'update_reclamation' => [[], ['_controller' => 'App\\Controller\\ReclamationsMobileController::modifierReclamationAction'], [], [['text', '/updateReclamation']], [], [], []],
    'display_reclamation' => [[], ['_controller' => 'App\\Controller\\ReclamationsMobileController::allRecAction'], [], [['text', '/displayReclamations']], [], [], []],
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
    'app_transport_index' => [[], ['_controller' => 'App\\Controller\\TransportController::index'], [], [['text', '/transport/front']], [], [], []],
    'app_transport_back' => [[], ['_controller' => 'App\\Controller\\TransportController::indexA'], [], [['text', '/transport/back']], [], [], []],
    'app_transport_back_new' => [[], ['_controller' => 'App\\Controller\\TransportController::newA'], [], [['text', '/transport/back/new']], [], [], []],
    'app_transport_front_new' => [[], ['_controller' => 'App\\Controller\\TransportController::new'], [], [['text', '/transport/front/new']], [], [], []],
    'app_transport_front_show' => [['idTransport'], ['_controller' => 'App\\Controller\\TransportController::show'], [], [['text', '/front'], ['variable', '/', '[^/]++', 'idTransport', true], ['text', '/transport']], [], [], []],
    'app_transport_back_show' => [['idTransport'], ['_controller' => 'App\\Controller\\TransportController::showA'], [], [['text', '/back'], ['variable', '/', '[^/]++', 'idTransport', true], ['text', '/transport']], [], [], []],
    'app_transport_front_edit' => [['idTransport'], ['_controller' => 'App\\Controller\\TransportController::edit'], [], [['text', '/front/edit'], ['variable', '/', '[^/]++', 'idTransport', true], ['text', '/transport']], [], [], []],
    'app_transport_back_edit' => [['idTransport'], ['_controller' => 'App\\Controller\\TransportController::editA'], [], [['text', '/back/edit'], ['variable', '/', '[^/]++', 'idTransport', true], ['text', '/transport']], [], [], []],
    'app_transport_back_delete' => [['idTransport'], ['_controller' => 'App\\Controller\\TransportController::delete'], [], [['text', '/back'], ['variable', '/', '[^/]++', 'idTransport', true], ['text', '/transport']], [], [], []],
    'app_transport_front_delete' => [['idTransport'], ['_controller' => 'App\\Controller\\TransportController::deleteA'], [], [['text', '/front/new'], ['variable', '/', '[^/]++', 'idTransport', true], ['text', '/transport']], [], [], []],
    'app_transport_back_stats' => [[], ['_controller' => 'App\\Controller\\TransportController::transportStats'], [], [['text', '/transport/back/transportStats']], [], [], []],
    'app_users_index' => [[], ['_controller' => 'App\\Controller\\UsersController::index'], [], [['text', '/users/']], [], [], []],
    'app_users_new' => [[], ['_controller' => 'App\\Controller\\UsersController::new'], [], [['text', '/users/new']], [], [], []],
    'app_users_show' => [['id'], ['_controller' => 'App\\Controller\\UsersController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/users/show']], [], [], []],
    'app_users_edit' => [['id'], ['_controller' => 'App\\Controller\\UsersController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
    'app_users_delete' => [['id'], ['_controller' => 'App\\Controller\\UsersController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
    'users_mobile' => [[], ['_controller' => 'App\\Controller\\UsersMobileController::usersmobile'], [], [['text', '/users_mobile']], [], [], []],
    'newusers_mobile' => [['prenom', 'nom', 'email', 'datenaissance', 'numtel', 'userrole', 'password'], ['_controller' => 'App\\Controller\\UsersMobileController::newusers'], [], [['variable', '/', '[^/]++', 'password', true], ['variable', '/', '[^/]++', 'userrole', true], ['variable', '/', '[^/]++', 'numtel', true], ['variable', '/', '[^/]++', 'datenaissance', true], ['variable', '/', '[^/]++', 'email', true], ['variable', '/', '[^/]++', 'nom', true], ['variable', '/', '[^/]++', 'prenom', true], ['text', '/newusers_mobile']], [], [], []],
    'SupprimerUsers' => [[], ['_controller' => 'App\\Controller\\UsersMobileController::SupprimerUsers'], [], [['text', '/SupprimerUsers']], [], [], []],
    'updateUsers' => [[], ['_controller' => 'App\\Controller\\UsersMobileController::updateUsers'], [], [['text', '/updateUsers']], [], [], []],
    'app_register_mobile' => [[], ['_controller' => 'App\\Controller\\UtilisateurApiController::signupAction'], [], [['text', '/users/signup']], [], [], []],
    'app_login_mobile' => [[], ['_controller' => 'App\\Controller\\UtilisateurApiController::signinAction'], [], [['text', '/users/signin']], [], [], []],
    'app_vehicule_index' => [[], ['_controller' => 'App\\Controller\\VehiculeController::index'], [], [['text', '/vehicule/front']], [], [], []],
    'app_vehicule_back_index' => [[], ['_controller' => 'App\\Controller\\VehiculeController::indexB'], [], [['text', '/vehicule/back']], [], [], []],
    'app_vehicule_back_new' => [['idTransport'], ['_controller' => 'App\\Controller\\VehiculeController::new'], [], [['variable', '', '[^/]++', 'idTransport', true], ['text', '/vehiculeback/new']], [], [], []],
    'app_vehicule_front_new' => [['idTransport'], ['_controller' => 'App\\Controller\\VehiculeController::newv'], [], [['variable', '', '[^/]++', 'idTransport', true], ['text', '/vehiculefront/new']], [], [], []],
    'app_vehicule_show' => [['idVehicule'], ['_controller' => 'App\\Controller\\VehiculeController::show'], [], [['variable', '/', '[^/]++', 'idVehicule', true], ['text', '/vehicule']], [], [], []],
    'app_vehicule_b_show' => [['idVehicule'], ['_controller' => 'App\\Controller\\VehiculeController::showBack'], [], [['variable', '/', '[^/]++', 'idVehicule', true], ['text', '/vehicule/back']], [], [], []],
    'app_vehicule_edit' => [['idVehicule'], ['_controller' => 'App\\Controller\\VehiculeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idVehicule', true], ['text', '/vehicule']], [], [], []],
    'app_vehicule_back_edit' => [['idVehicule'], ['_controller' => 'App\\Controller\\VehiculeController::editB'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idVehicule', true], ['text', '/vehicule']], [], [], []],
    'app_vehicule_delete' => [['idVehicule'], ['_controller' => 'App\\Controller\\VehiculeController::delete'], [], [['variable', '/', '[^/]++', 'idVehicule', true], ['text', '/vehicule']], [], [], []],
    'app_vehicule_back_delete' => [['idVehicule'], ['_controller' => 'App\\Controller\\VehiculeController::deleteB'], [], [['variable', '/', '[^/]++', 'idVehicule', true], ['text', '/vehicule']], [], [], []],
    'api_genid' => [['id'], ['_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/.well-known/genid']], [], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '[^.]+', '_format' => 'jsonld'], [['variable', '.', 'jsonld', '_format', true], ['variable', '/', '[^.]+', 'shortName', true], ['text', '/api/contexts']], [], [], []],
    'qr_code_generate' => [['builder', 'data'], ['_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['data' => '[\\w\\W]+'], [['variable', '/', '[\\w\\W]+', 'data', true], ['variable', '/', '[^/]++', 'builder', true], ['text', '/qr-code']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_users_list' => [[], ['_controller' => 'App\\Controller\\UsersController::index'], [], [['text', '/users']], [], [], []],
    'triProd' => [[], ['_controller' => 'App\\Http\\Controllers\\ProduitsController@triProd'], [], [['text', '/produits/tri']], [], [], []],
];
