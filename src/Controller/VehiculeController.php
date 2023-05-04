<?php

namespace App\Controller;

use App\Entity\Vehicule;
use App\Entity\Transport;
use App\Form\VehiculeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/vehicule')]
class VehiculeController extends AbstractController
{
    #[Route('/front', name: 'app_vehicule_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $vehicules = $entityManager
            ->getRepository(Vehicule::class)
            ->findAll();

        return $this->render('vehicule/index.html.twig', [
            'vehicules' => $vehicules,
        ]);
    }

    #[Route('/back', name: 'app_vehicule_back_index', methods: ['GET'])]
    public function indexB(EntityManagerInterface $entityManager): Response
    {
        $vehicules = $entityManager
            ->getRepository(Vehicule::class)
            ->findAll();

        return $this->render('back/vehicule/indexv.html.twig', [
            'vehicules' => $vehicules,
        ]);
    }

    #[Route('back/new{idTransport}', name: 'app_vehicule_back_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, $idTransport): Response
    {
        $vehicule = new Vehicule();
        $transport  = $entityManager->getRepository(Transport::class)->find($idTransport);
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $form->add('save',SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $vehicule->setTransport($transport);
            $entityManager->persist($vehicule);
            $entityManager->flush();

            return $this->redirectToRoute('app_vehicule_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/vehicule/newv.html.twig', [
            'vehicule' => $vehicule,
            'form' => $form,
        ]);
    }


    #[Route('front/new{idTransport}', name: 'app_vehicule_front_new', methods: ['GET', 'POST'])]
    public function newv(Request $request, EntityManagerInterface $entityManager, $idTransport): Response
    {
        $vehicule = new Vehicule();
        $transport  = $entityManager->getRepository(Transport::class)->find($idTransport);
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $form->add('save',SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $vehicule->setTransport($transport);
            $entityManager->persist($vehicule);
            $entityManager->flush();

            return $this->redirectToRoute('app_vehicule_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('vehicule/new.html.twig', [
            'vehicule' => $vehicule,
            'form' => $form,
        ]);
    }



    #[Route('/{idVehicule}', name: 'app_vehicule_show', methods: ['GET'])]
    public function show(Vehicule $vehicule): Response
    {
        return $this->render('vehicule/show.html.twig', [
            'vehicule' => $vehicule,
        ]);
    }



    // #[Route('/{idVehicule}', name: 'app_vehicule_back_show', methods: ['GET'])]
    // public function showB(Vehicule $vehicule): Response
    // {
    //     return $this->render('back/vehicule/showv.html.twig', [
    //         'vehicule' => $vehicule,
    //     ]);
    // }

    #[Route('/back/{idVehicule}', name: 'app_vehicule_b_show', methods: ['GET'])]
    public function showBack(Vehicule $vehicule): Response
    {
        return $this->render('back/vehicule/showv.html.twig', [
            'vehicule' => $vehicule,
        ]);
    }

    

    #[Route('/{idVehicule}/edit', name: 'app_vehicule_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Vehicule $vehicule, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_vehicule_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('vehicule/edit.html.twig', [
            'vehicule' => $vehicule,
            'form' => $form,
        ]);
    }



    #[Route('/{idVehicule}/edit', name: 'app_vehicule_back_edit', methods: ['GET', 'POST'])]
    public function editB(Request $request, Vehicule $vehicule, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_vehicule_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('vehicule/edit.html.twig', [
            'vehicule' => $vehicule,
            'form' => $form,
        ]);
    }


    #[Route('/{idVehicule}', name: 'app_vehicule_delete', methods: ['POST'])]
    public function delete(Request $request, Vehicule $vehicule, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$vehicule->getIdVehicule(), $request->request->get('_token'))) {
            $entityManager->remove($vehicule);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_vehicule_index', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/{idVehicule}', name: 'app_vehicule_back_delete', methods: ['POST'])]
    public function deleteB(Request $request, Vehicule $vehicule, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$vehicule->getIdVehicule(), $request->request->get('_token'))) {
            $entityManager->remove($vehicule);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_vehicule_index', [], Response::HTTP_SEE_OTHER);
    }

}
