<?php

namespace Container3eXcBqx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XwRqSJUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XwRqSJU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XwRqSJU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CategorieEventController::delete' => ['privates', '.service_locator.T_GcY.G', 'get_ServiceLocator_TGcY_GService', true],
            'App\\Controller\\CategorieEventController::edit' => ['privates', '.service_locator.T_GcY.G', 'get_ServiceLocator_TGcY_GService', true],
            'App\\Controller\\CategorieEventController::index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CategorieEventController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CategorieEventController::show' => ['privates', '.service_locator.9v.k8D5', 'get_ServiceLocator_9v_K8D5Service', true],
            'App\\Controller\\CategorieProdController::delete' => ['privates', '.service_locator.hWmt98O', 'get_ServiceLocator_HWmt98OService', true],
            'App\\Controller\\CategorieProdController::edit' => ['privates', '.service_locator.hWmt98O', 'get_ServiceLocator_HWmt98OService', true],
            'App\\Controller\\CategorieProdController::index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CategorieProdController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CategorieProdController::show' => ['privates', '.service_locator.VQlfM9F', 'get_ServiceLocator_VQlfM9FService', true],
            'App\\Controller\\EvenementController::delete' => ['privates', '.service_locator.wXSRjZL', 'get_ServiceLocator_WXSRjZLService', true],
            'App\\Controller\\EvenementController::edit' => ['privates', '.service_locator.wXSRjZL', 'get_ServiceLocator_WXSRjZLService', true],
            'App\\Controller\\EvenementController::index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\EvenementController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\EvenementController::show' => ['privates', '.service_locator.yAvMNdP', 'get_ServiceLocator_YAvMNdPService', true],
            'App\\Controller\\FactureController::delete' => ['privates', '.service_locator.njvUyPK', 'get_ServiceLocator_NjvUyPKService', true],
            'App\\Controller\\FactureController::edit' => ['privates', '.service_locator.njvUyPK', 'get_ServiceLocator_NjvUyPKService', true],
            'App\\Controller\\FactureController::index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\FactureController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\FactureController::show' => ['privates', '.service_locator.XVjfyza', 'get_ServiceLocator_XVjfyzaService', true],
            'App\\Controller\\ProduitController::delete' => ['privates', '.service_locator.HkHf8J3', 'get_ServiceLocator_HkHf8J3Service', true],
            'App\\Controller\\ProduitController::edit' => ['privates', '.service_locator.HkHf8J3', 'get_ServiceLocator_HkHf8J3Service', true],
            'App\\Controller\\ProduitController::index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProduitController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProduitController::show' => ['privates', '.service_locator.iGUm1r8', 'get_ServiceLocator_IGUm1r8Service', true],
            'App\\Controller\\ReclamationsController::delete' => ['privates', '.service_locator.MHm6mei', 'get_ServiceLocator_MHm6meiService', true],
            'App\\Controller\\ReclamationsController::edit' => ['privates', '.service_locator.MHm6mei', 'get_ServiceLocator_MHm6meiService', true],
            'App\\Controller\\ReclamationsController::index' => ['privates', '.service_locator.Zhsi5nT', 'get_ServiceLocator_Zhsi5nTService', true],
            'App\\Controller\\ReclamationsController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReclamationsController::show' => ['privates', '.service_locator.oEfCGgo', 'get_ServiceLocator_OEfCGgoService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.UnjcfIq', 'get_ServiceLocator_UnjcfIqService', true],
            'App\\Controller\\Reservation2Controller::delete' => ['privates', '.service_locator.gZIaKpL', 'get_ServiceLocator_GZIaKpLService', true],
            'App\\Controller\\Reservation2Controller::edit' => ['privates', '.service_locator.gZIaKpL', 'get_ServiceLocator_GZIaKpLService', true],
            'App\\Controller\\Reservation2Controller::index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Reservation2Controller::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Reservation2Controller::show' => ['privates', '.service_locator.y.Ows6z', 'get_ServiceLocator_Y_Ows6zService', true],
            'App\\Controller\\ReservationController::delete' => ['privates', '.service_locator.CT.Cplt', 'get_ServiceLocator_CT_CpltService', true],
            'App\\Controller\\ReservationController::edit' => ['privates', '.service_locator.CT.Cplt', 'get_ServiceLocator_CT_CpltService', true],
            'App\\Controller\\ReservationController::index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReservationController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReservationController::show' => ['privates', '.service_locator.jtI7Unb', 'get_ServiceLocator_JtI7UnbService', true],
            'App\\Controller\\SecurityController::forgotPassword' => ['privates', '.service_locator.RYu7BDn', 'get_ServiceLocator_RYu7BDnService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\SecurityController::newPassword' => ['privates', '.service_locator.EbrO3QW', 'get_ServiceLocator_EbrO3QWService', true],
            'App\\Controller\\TransportController::delete' => ['privates', '.service_locator.CoH4_pD', 'get_ServiceLocator_CoH4PDService', true],
            'App\\Controller\\TransportController::edit' => ['privates', '.service_locator.CoH4_pD', 'get_ServiceLocator_CoH4PDService', true],
            'App\\Controller\\TransportController::index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\TransportController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\TransportController::show' => ['privates', '.service_locator.PKdMXit', 'get_ServiceLocator_PKdMXitService', true],
            'App\\Controller\\UsersController::delete' => ['privates', '.service_locator.cyg1ViB', 'get_ServiceLocator_Cyg1ViBService', true],
            'App\\Controller\\UsersController::edit' => ['privates', '.service_locator.yRRNQrI', 'get_ServiceLocator_YRRNQrIService', true],
            'App\\Controller\\UsersController::index' => ['privates', '.service_locator.ZBo6i.8', 'get_ServiceLocator_ZBo6i_8Service', true],
            'App\\Controller\\UsersController::new' => ['privates', '.service_locator.d2simGl', 'get_ServiceLocator_D2simGlService', true],
            'App\\Controller\\UsersController::show' => ['privates', '.service_locator.1IVjUnt', 'get_ServiceLocator_1IVjUntService', true],
            'App\\Controller\\VehiculeController::delete' => ['privates', '.service_locator.iVJ8gI9', 'get_ServiceLocator_IVJ8gI9Service', true],
            'App\\Controller\\VehiculeController::edit' => ['privates', '.service_locator.iVJ8gI9', 'get_ServiceLocator_IVJ8gI9Service', true],
            'App\\Controller\\VehiculeController::index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\VehiculeController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\VehiculeController::show' => ['privates', '.service_locator.pB20uqv', 'get_ServiceLocator_PB20uqvService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\CategorieEventController:delete' => ['privates', '.service_locator.T_GcY.G', 'get_ServiceLocator_TGcY_GService', true],
            'App\\Controller\\CategorieEventController:edit' => ['privates', '.service_locator.T_GcY.G', 'get_ServiceLocator_TGcY_GService', true],
            'App\\Controller\\CategorieEventController:index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CategorieEventController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CategorieEventController:show' => ['privates', '.service_locator.9v.k8D5', 'get_ServiceLocator_9v_K8D5Service', true],
            'App\\Controller\\CategorieProdController:delete' => ['privates', '.service_locator.hWmt98O', 'get_ServiceLocator_HWmt98OService', true],
            'App\\Controller\\CategorieProdController:edit' => ['privates', '.service_locator.hWmt98O', 'get_ServiceLocator_HWmt98OService', true],
            'App\\Controller\\CategorieProdController:index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CategorieProdController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CategorieProdController:show' => ['privates', '.service_locator.VQlfM9F', 'get_ServiceLocator_VQlfM9FService', true],
            'App\\Controller\\EvenementController:delete' => ['privates', '.service_locator.wXSRjZL', 'get_ServiceLocator_WXSRjZLService', true],
            'App\\Controller\\EvenementController:edit' => ['privates', '.service_locator.wXSRjZL', 'get_ServiceLocator_WXSRjZLService', true],
            'App\\Controller\\EvenementController:index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\EvenementController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\EvenementController:show' => ['privates', '.service_locator.yAvMNdP', 'get_ServiceLocator_YAvMNdPService', true],
            'App\\Controller\\FactureController:delete' => ['privates', '.service_locator.njvUyPK', 'get_ServiceLocator_NjvUyPKService', true],
            'App\\Controller\\FactureController:edit' => ['privates', '.service_locator.njvUyPK', 'get_ServiceLocator_NjvUyPKService', true],
            'App\\Controller\\FactureController:index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\FactureController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\FactureController:show' => ['privates', '.service_locator.XVjfyza', 'get_ServiceLocator_XVjfyzaService', true],
            'App\\Controller\\ProduitController:delete' => ['privates', '.service_locator.HkHf8J3', 'get_ServiceLocator_HkHf8J3Service', true],
            'App\\Controller\\ProduitController:edit' => ['privates', '.service_locator.HkHf8J3', 'get_ServiceLocator_HkHf8J3Service', true],
            'App\\Controller\\ProduitController:index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProduitController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProduitController:show' => ['privates', '.service_locator.iGUm1r8', 'get_ServiceLocator_IGUm1r8Service', true],
            'App\\Controller\\ReclamationsController:delete' => ['privates', '.service_locator.MHm6mei', 'get_ServiceLocator_MHm6meiService', true],
            'App\\Controller\\ReclamationsController:edit' => ['privates', '.service_locator.MHm6mei', 'get_ServiceLocator_MHm6meiService', true],
            'App\\Controller\\ReclamationsController:index' => ['privates', '.service_locator.Zhsi5nT', 'get_ServiceLocator_Zhsi5nTService', true],
            'App\\Controller\\ReclamationsController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReclamationsController:show' => ['privates', '.service_locator.oEfCGgo', 'get_ServiceLocator_OEfCGgoService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.UnjcfIq', 'get_ServiceLocator_UnjcfIqService', true],
            'App\\Controller\\Reservation2Controller:delete' => ['privates', '.service_locator.gZIaKpL', 'get_ServiceLocator_GZIaKpLService', true],
            'App\\Controller\\Reservation2Controller:edit' => ['privates', '.service_locator.gZIaKpL', 'get_ServiceLocator_GZIaKpLService', true],
            'App\\Controller\\Reservation2Controller:index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Reservation2Controller:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Reservation2Controller:show' => ['privates', '.service_locator.y.Ows6z', 'get_ServiceLocator_Y_Ows6zService', true],
            'App\\Controller\\ReservationController:delete' => ['privates', '.service_locator.CT.Cplt', 'get_ServiceLocator_CT_CpltService', true],
            'App\\Controller\\ReservationController:edit' => ['privates', '.service_locator.CT.Cplt', 'get_ServiceLocator_CT_CpltService', true],
            'App\\Controller\\ReservationController:index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReservationController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReservationController:show' => ['privates', '.service_locator.jtI7Unb', 'get_ServiceLocator_JtI7UnbService', true],
            'App\\Controller\\SecurityController:forgotPassword' => ['privates', '.service_locator.RYu7BDn', 'get_ServiceLocator_RYu7BDnService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\SecurityController:newPassword' => ['privates', '.service_locator.EbrO3QW', 'get_ServiceLocator_EbrO3QWService', true],
            'App\\Controller\\TransportController:delete' => ['privates', '.service_locator.CoH4_pD', 'get_ServiceLocator_CoH4PDService', true],
            'App\\Controller\\TransportController:edit' => ['privates', '.service_locator.CoH4_pD', 'get_ServiceLocator_CoH4PDService', true],
            'App\\Controller\\TransportController:index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\TransportController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\TransportController:show' => ['privates', '.service_locator.PKdMXit', 'get_ServiceLocator_PKdMXitService', true],
            'App\\Controller\\UsersController:delete' => ['privates', '.service_locator.cyg1ViB', 'get_ServiceLocator_Cyg1ViBService', true],
            'App\\Controller\\UsersController:edit' => ['privates', '.service_locator.yRRNQrI', 'get_ServiceLocator_YRRNQrIService', true],
            'App\\Controller\\UsersController:index' => ['privates', '.service_locator.ZBo6i.8', 'get_ServiceLocator_ZBo6i_8Service', true],
            'App\\Controller\\UsersController:new' => ['privates', '.service_locator.d2simGl', 'get_ServiceLocator_D2simGlService', true],
            'App\\Controller\\UsersController:show' => ['privates', '.service_locator.1IVjUnt', 'get_ServiceLocator_1IVjUntService', true],
            'App\\Controller\\VehiculeController:delete' => ['privates', '.service_locator.iVJ8gI9', 'get_ServiceLocator_IVJ8gI9Service', true],
            'App\\Controller\\VehiculeController:edit' => ['privates', '.service_locator.iVJ8gI9', 'get_ServiceLocator_IVJ8gI9Service', true],
            'App\\Controller\\VehiculeController:index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\VehiculeController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\VehiculeController:show' => ['privates', '.service_locator.pB20uqv', 'get_ServiceLocator_PB20uqvService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\CategorieEventController::delete' => '?',
            'App\\Controller\\CategorieEventController::edit' => '?',
            'App\\Controller\\CategorieEventController::index' => '?',
            'App\\Controller\\CategorieEventController::new' => '?',
            'App\\Controller\\CategorieEventController::show' => '?',
            'App\\Controller\\CategorieProdController::delete' => '?',
            'App\\Controller\\CategorieProdController::edit' => '?',
            'App\\Controller\\CategorieProdController::index' => '?',
            'App\\Controller\\CategorieProdController::new' => '?',
            'App\\Controller\\CategorieProdController::show' => '?',
            'App\\Controller\\EvenementController::delete' => '?',
            'App\\Controller\\EvenementController::edit' => '?',
            'App\\Controller\\EvenementController::index' => '?',
            'App\\Controller\\EvenementController::new' => '?',
            'App\\Controller\\EvenementController::show' => '?',
            'App\\Controller\\FactureController::delete' => '?',
            'App\\Controller\\FactureController::edit' => '?',
            'App\\Controller\\FactureController::index' => '?',
            'App\\Controller\\FactureController::new' => '?',
            'App\\Controller\\FactureController::show' => '?',
            'App\\Controller\\ProduitController::delete' => '?',
            'App\\Controller\\ProduitController::edit' => '?',
            'App\\Controller\\ProduitController::index' => '?',
            'App\\Controller\\ProduitController::new' => '?',
            'App\\Controller\\ProduitController::show' => '?',
            'App\\Controller\\ReclamationsController::delete' => '?',
            'App\\Controller\\ReclamationsController::edit' => '?',
            'App\\Controller\\ReclamationsController::index' => '?',
            'App\\Controller\\ReclamationsController::new' => '?',
            'App\\Controller\\ReclamationsController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\Reservation2Controller::delete' => '?',
            'App\\Controller\\Reservation2Controller::edit' => '?',
            'App\\Controller\\Reservation2Controller::index' => '?',
            'App\\Controller\\Reservation2Controller::new' => '?',
            'App\\Controller\\Reservation2Controller::show' => '?',
            'App\\Controller\\ReservationController::delete' => '?',
            'App\\Controller\\ReservationController::edit' => '?',
            'App\\Controller\\ReservationController::index' => '?',
            'App\\Controller\\ReservationController::new' => '?',
            'App\\Controller\\ReservationController::show' => '?',
            'App\\Controller\\SecurityController::forgotPassword' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::newPassword' => '?',
            'App\\Controller\\TransportController::delete' => '?',
            'App\\Controller\\TransportController::edit' => '?',
            'App\\Controller\\TransportController::index' => '?',
            'App\\Controller\\TransportController::new' => '?',
            'App\\Controller\\TransportController::show' => '?',
            'App\\Controller\\UsersController::delete' => '?',
            'App\\Controller\\UsersController::edit' => '?',
            'App\\Controller\\UsersController::index' => '?',
            'App\\Controller\\UsersController::new' => '?',
            'App\\Controller\\UsersController::show' => '?',
            'App\\Controller\\VehiculeController::delete' => '?',
            'App\\Controller\\VehiculeController::edit' => '?',
            'App\\Controller\\VehiculeController::index' => '?',
            'App\\Controller\\VehiculeController::new' => '?',
            'App\\Controller\\VehiculeController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\CategorieEventController:delete' => '?',
            'App\\Controller\\CategorieEventController:edit' => '?',
            'App\\Controller\\CategorieEventController:index' => '?',
            'App\\Controller\\CategorieEventController:new' => '?',
            'App\\Controller\\CategorieEventController:show' => '?',
            'App\\Controller\\CategorieProdController:delete' => '?',
            'App\\Controller\\CategorieProdController:edit' => '?',
            'App\\Controller\\CategorieProdController:index' => '?',
            'App\\Controller\\CategorieProdController:new' => '?',
            'App\\Controller\\CategorieProdController:show' => '?',
            'App\\Controller\\EvenementController:delete' => '?',
            'App\\Controller\\EvenementController:edit' => '?',
            'App\\Controller\\EvenementController:index' => '?',
            'App\\Controller\\EvenementController:new' => '?',
            'App\\Controller\\EvenementController:show' => '?',
            'App\\Controller\\FactureController:delete' => '?',
            'App\\Controller\\FactureController:edit' => '?',
            'App\\Controller\\FactureController:index' => '?',
            'App\\Controller\\FactureController:new' => '?',
            'App\\Controller\\FactureController:show' => '?',
            'App\\Controller\\ProduitController:delete' => '?',
            'App\\Controller\\ProduitController:edit' => '?',
            'App\\Controller\\ProduitController:index' => '?',
            'App\\Controller\\ProduitController:new' => '?',
            'App\\Controller\\ProduitController:show' => '?',
            'App\\Controller\\ReclamationsController:delete' => '?',
            'App\\Controller\\ReclamationsController:edit' => '?',
            'App\\Controller\\ReclamationsController:index' => '?',
            'App\\Controller\\ReclamationsController:new' => '?',
            'App\\Controller\\ReclamationsController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\Reservation2Controller:delete' => '?',
            'App\\Controller\\Reservation2Controller:edit' => '?',
            'App\\Controller\\Reservation2Controller:index' => '?',
            'App\\Controller\\Reservation2Controller:new' => '?',
            'App\\Controller\\Reservation2Controller:show' => '?',
            'App\\Controller\\ReservationController:delete' => '?',
            'App\\Controller\\ReservationController:edit' => '?',
            'App\\Controller\\ReservationController:index' => '?',
            'App\\Controller\\ReservationController:new' => '?',
            'App\\Controller\\ReservationController:show' => '?',
            'App\\Controller\\SecurityController:forgotPassword' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:newPassword' => '?',
            'App\\Controller\\TransportController:delete' => '?',
            'App\\Controller\\TransportController:edit' => '?',
            'App\\Controller\\TransportController:index' => '?',
            'App\\Controller\\TransportController:new' => '?',
            'App\\Controller\\TransportController:show' => '?',
            'App\\Controller\\UsersController:delete' => '?',
            'App\\Controller\\UsersController:edit' => '?',
            'App\\Controller\\UsersController:index' => '?',
            'App\\Controller\\UsersController:new' => '?',
            'App\\Controller\\UsersController:show' => '?',
            'App\\Controller\\VehiculeController:delete' => '?',
            'App\\Controller\\VehiculeController:edit' => '?',
            'App\\Controller\\VehiculeController:index' => '?',
            'App\\Controller\\VehiculeController:new' => '?',
            'App\\Controller\\VehiculeController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
