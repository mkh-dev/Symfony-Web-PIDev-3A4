<?php

namespace App\Controller;




use Knp\Component\Pager\PaginatorInterface;

use Dompdf\Dompdf;
use App\Entity\Abonnement;
use App\Form\AbonnementType;
use App\Repository\AbonnementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/abonnement')]
class AbonnementController extends AbstractController
{
    #[Route('/', name: 'app_abonnement_index', methods: ['GET'])]
    public function index(AbonnementRepository $abonnementRepository, PaginatorInterface $paginator, Request $request): Response
    {

   
    // Get all the abonnements from the repository
    $abonnements = $abonnementRepository->findAll();
    
    // Paginate the results
    $pagination = $paginator->paginate(
        $abonnements, // Query results
        $request->query->getInt('page', 1), // Current page number
        3 // Number of results per page
    );
    
    return $this->render('abonnement/index.html.twig', [
        'abonnements' => $pagination,
    ]);
    }

    #[Route('/new', name: 'app_abonnement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AbonnementRepository $abonnementRepository): Response
    {
        $abonnement = new Abonnement();
        $form = $this->createForm(AbonnementType::class, $abonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $abonnementRepository->save($abonnement, true);

            return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('abonnement/new.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_abonnement_show', methods: ['GET'])]
    public function show(Abonnement $abonnement): Response
    {
        return $this->render('abonnement/show.html.twig', [
            'abonnement' => $abonnement,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_abonnement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Abonnement $abonnement, AbonnementRepository $abonnementRepository): Response
    {
        $form = $this->createForm(AbonnementType::class, $abonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $abonnementRepository->save($abonnement, true);

            return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('abonnement/edit.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_abonnement_delete', methods: ['POST'])]
    public function delete(Request $request, Abonnement $abonnement, AbonnementRepository $abonnementRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$abonnement->getId(), $request->request->get('_token'))) {
            $abonnementRepository->remove($abonnement, true);
        }

        return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}/exportpdf', name: 'exportpdf')]
    public function exportToPdf(AbonnementRepository $repository): Response
    {
      
        $abonnements = $repository->findAll();

        // Créer le tableau de données pour le PDF
        $tableData = [];
        foreach ($abonnements as $abonnement) {
            $tableData[] = [
                'id' => $abonnement->getId(),
                'idUser' => $abonnement->getIdUser(),
                'type' => $abonnement->getType(),
                'renouvellement' => $abonnement->isRenouvellement(),
                'dateExpire' => $abonnement->getDateExpire()->format('Y-m-d H:i:s'),
                'prix' => $abonnement->getPrix(),
                'currency' => $abonnement->getCurrency(),
                'plafond' => $abonnement->getPlafond(),
            ];
        }

        // Créer le PDF avec Dompdf
        $html = $this->renderView('abonnement/export-pdf.html.twig', [
            'tableData' => $tableData,
        ]);
       
        $dompdf = new Dompdf();
        $image = 'public\front\images\logo.png';
        $options = ['png_quality' => 100];

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        // Envoyer le PDF au navigateur
        $response = new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="abonnement.pdf"',
        ]);
        return $response;
    }
}
