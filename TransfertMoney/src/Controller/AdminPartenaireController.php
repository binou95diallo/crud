<?php

namespace App\Controller;

use App\Entity\AdminPartenaire;
use App\Form\AdminPartenaireType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\AdminPartenaireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

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
            $adminPartenaire=$serializer->deserialize($request->getContent(), AdminPartenaire::class, 'json');
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($adminPartenaire);
            $entityManager->flush();
            
            return new Response('users adding', Response::HTTP_CREATED);
    }

    /**
     * @Route("/{id}", name="adminPartenaireShow", methods={"GET"})
     */
    public function show(AdminPartenaire $adminPartenaire,AdminPartenaireRepository $adminPartenaireRepo,SerializerInterface $serializer): Response
    {
        $adminPartenaire= $adminPartenaireRepo->find($adminPartenaire->getId());
        $data = $serializer->serialize($adminPartenaire, 'json');
        return new Response($data, 200, [
            'Content-Type' => 'application/json'
        ]);
    }

    /**
     * @Route("/{id}/edit", name="adminPartenaireEdit", methods={"GET"})
     */
    public function edit(Request $request, AdminPartenaire $adminPartenaire,SerializerInterface $serializer,ValidatorInterface $validator,
                         EntityManagerInterface $entityManager): Response
    {
        $data=[];
        $adminPartenaire = $entityManager->getRepository(AdminPartenaire::class)->find($adminPartenaire->getId());
        $data = json_decode($request->getContent(),true);
        var_dump($data); die();
        foreach ($data as $key => $value){
         
            if($key && !empty($value)) {
                $name = ucfirst($key);
                $setter = 'set'.$name;
                $adminPartenaire->$setter($value);
            }
        }
        $errors = $validator->validate($adminPartenaire);
        if(count($errors)) {
            $errors = $serializer->serialize($errors, 'json');
            return new Response($errors, 500, [
                'Content-Type' => 'application/json'
            ]);
        }
        $entityManager->flush();
        $data = [
            'status' => 200,
            'message' => 'L \'utilisateur a bien été mis à jour'
        ];
        return new JsonResponse($data);
 
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
