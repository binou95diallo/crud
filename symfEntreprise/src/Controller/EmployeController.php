<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Employe;
use App\Entity\Service;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistance\ObjectManager;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class EmployeController extends AbstractController
{
    /**
     * @Route("/employe", name="employe")
     */
    public function index()
    {
        return $this->render('employe/index.html.twig', [
            'controller_name' => 'EmployeController',
        ]);
    }
    /**
     * @Route("/ajoutEmploye", name="ajoutEmploye")
     * @Route("/affichage/modifier/{id<\d+>}" ,name="modifier")
     */
    public function add(Request $request,Employe $employe=null)
    {
        if(!$employe){
            $employe=new Employe();
        }
        
        $form = $this->createFormBuilder($employe)
            ->add('matricule', TextType::class)
            ->add('nomComplet', TextType::class)
            ->add('dateNaissance', DateType::class,[
                'widget'=>'single_text',
                'format'=>'yyyy-MM-dd'
            ])
            ->add('salaire', IntegerType::class)
            ->add('serviceId',EntityType::class,[
                'class'=>Service::class,'choice_label'=>"libelle"
            ])
            ->getForm();
            $form->HandleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                
                $em->persist($employe);
                $em->flush();
                return $this->redirectToRoute('affichage');
            }
        return $this->render('employe/add.html.twig', [
            'formAjout' => $form->createView(),
            'editMode'=>$employe->getId()!== null
        ]);
    }

     /**
     * @Route("/affichage", name="affichage")
     */
    public function affichage(){
        $recup=$this->getDoctrine()->getRepository(Employe::class) ;
        $employe=$recup->findAll();
        return $this->render('employe/findAll.html.twig',[
            'employe'=>$employe
        ]);
    }

/**
 * @Route("/affichage/delete/{id<\d+>}", name="delete")
 */
public function delete(Employe $employe)
{
    $em = $this->getDoctrine()->getManager();
    
    $em->remove($employe);
    $em->flush();
    // redirige la page
    return $this->redirectToRoute('affichage');
}

 }
