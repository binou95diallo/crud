<?php

namespace App\Controller;

use App\Entity\AdminPartenaire;
use App\Form\AdminPartenaireType;
use App\Repository\AdminPartenaireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/adminPartenaire")
 */
class AdminPartenaireController extends AbstractController
{
    /**
     * @Route("/", name="adminPartenaireIndex", methods={"GET"})
     */
    public function index(AdminPartenaireRepository $adminPartenaireRepository): Response
    {
        return $this->render('adminPartenaire/index.html.twig', [
            'admin_partenaires' => $adminPartenaireRepository->findAll(),
        ]);
    }

    /**
     * @Route("/ajout", name="adminPartenaireAjout", methods={"POST","GET"})
     */
    public function ajout(Request $request,SerializerInterface $serializer): Response
    {
        $adminPartenaire = new AdminPartenaire();
        $form = $this->createForm(AdminPartenaireType::class, $adminPartenaire);
        $form->handleRequest($request);

        //if ($form->isSubmitted() && $form->isValid()) {
            //$data = $request->getContent();
            //$adminPartenaire= $this->get('jms_serializer')->deserialize($data);
            $adminPartenaire=$serializer->deserialize($request->getContent(), AdminPartenaire::class, 'json');
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($adminPartenaire);
            $entityManager->flush();

            return new Response('', Response::HTTP_CREATED);
            //return $this->redirectToRoute('admin_partenaire_index');
       // }

        return $this->render('adminPartenaire/new.html.twig', [
            'admin_partenaire' => $adminPartenaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_partenaire_show", methods={"GET"})
     */
    public function show(AdminPartenaire $adminPartenaire): Response
    {
        return $this->render('admin_partenaire/show.html.twig', [
            'admin_partenaire' => $adminPartenaire,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_partenaire_edit", methods={"GET"})
     */
    public function edit(Request $request, AdminPartenaire $adminPartenaire): Response
    {
        $form = $this->createForm(AdminPartenaireType::class, $adminPartenaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_partenaire_index');
        }

        return $this->render('admin_partenaire/edit.html.twig', [
            'admin_partenaire' => $adminPartenaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_partenaire_delete", methods={"DELETE"})
     */
    public function delete(Request $request, AdminPartenaire $adminPartenaire): Response
    {
        if ($this->isCsrfTokenValid('delete'.$adminPartenaire->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($adminPartenaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_partenaire_index');
    }
}
