<?php

namespace App\Controller;

use App\Entity\Reservation2;
use App\Form\Reservation2Type;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reservation2')]
class Reservation2Controller extends AbstractController
{
    #[Route('/', name: 'app_reservation2_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $reservation2s = $entityManager
            ->getRepository(Reservation2::class)
            ->findAll();

        return $this->render('reservation2/index.html.twig', [
            'reservation2s' => $reservation2s,
        ]);
    }

    #[Route('/new', name: 'app_reservation2_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservation2 = new Reservation2();
        $form = $this->createForm(Reservation2Type::class, $reservation2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservation2);
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation2_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation2/new.html.twig', [
            'reservation2' => $reservation2,
            'form' => $form,
        ]);
    }

    #[Route('/{numres}', name: 'app_reservation2_show', methods: ['GET'])]
    public function show(Reservation2 $reservation2): Response
    {
        return $this->render('reservation2/show.html.twig', [
            'reservation2' => $reservation2,
        ]);
    }

    #[Route('/{numres}/edit', name: 'app_reservation2_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservation2 $reservation2, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Reservation2Type::class, $reservation2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation2_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation2/edit.html.twig', [
            'reservation2' => $reservation2,
            'form' => $form,
        ]);
    }

    #[Route('/{numres}', name: 'app_reservation2_delete', methods: ['POST'])]
    public function delete(Request $request, Reservation2 $reservation2, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation2->getNumres(), $request->request->get('_token'))) {
            $entityManager->remove($reservation2);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reservation2_index', [], Response::HTTP_SEE_OTHER);
    }
}
