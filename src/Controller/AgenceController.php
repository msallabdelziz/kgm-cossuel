<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\AgenceRepository;
use App\Entity\Agence;
use App\Entity\Localite;
use App\Form\AgenceType;
use App\Repository\LocaliteRepository;
use App\Services\Tools;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Notifier\Message\SmsMessage;
use Symfony\Component\Notifier\TexterInterface;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/agence', name: 'app_agence_')]
class AgenceController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(Request $request, AgenceRepository $agenceRepository, LocaliteRepository $localiteRepository,PaginatorInterface $pag): Response
    {
        
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'agence');
        $request->getSession()->set('sousmenu', '');
        
        $val_rech=""; 
        
        $val_filtre = array(); $page = 0; $orderBy = "";
        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            $val_localite = $request->request->get("val_localite");
        }

        $ag = $agenceRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        return $this->render('agence/index.html.twig', [
            'controller_name' => 'AgenceController',
            'les_agence'=> $ag= $pag->paginate(
                $ag,
                $request->query->getInt('page', 1),
                20
            ),
            'val_rech'=> $val_rech,
        ]);
    }

    #[Route('/add', name: 'add')]
    public function create(Request $request, AgenceRepository $agenceRepository,PaginatorInterface $pag): Response
    {
        $ag = new Agence();
        $form = $this->createForm(AgenceType::class, $ag);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $agenceRepository->add($ag);
            return $this->redirectToRoute('app_agence_index', [], Response::HTTP_SEE_OTHER);
        }
        $agence =$agenceRepository->findBy([],['code'=>'asc']);
        return $this->renderForm('agence/add.html.twig', [
            'agence' => $ag,
            'les_agence' => $agence,
            'agenceForm' => $form,
        ]);

    }

    #[Route('/update/{id}', name: 'edit')]
    public function update(Agence $id,Request $request, AgenceRepository $agenceRepository, Tools $tools,PaginatorInterface $pag): Response
    {
        $agence = $agenceRepository->find($id);
        $form = $this->createForm(AgenceType::class, $agence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $agenceRepository->add($agence);


           $tools->notifSMS('221773799200', 'MaJ Agence réussie !');

            return $this->redirectToRoute("app_agence_show", ['id'=>$agence->getId()]);
        }
        $agenc =$agenceRepository->findBy([],['code'=>'asc']);
        return $this->renderForm('agence/edit.html.twig', [
            'les_agence' => $agenc= $pag->paginate(
                $agenc,
                $request->query->getInt('page', 1),
                20
            ),
            'agence' => $agence,
            'agenceForm' => $form,
        ]);

    }

    #[Route('/localite/{id}', name: 'localite')]
    public function addlocalite(Agence $id, PaginatorInterface $pag, ManagerRegistry $doctrine, Request $request, LocaliteRepository $localiteRepository, AgenceRepository $agenceRepository): Response
    {
        $em = $doctrine->getManager();
        $agence = $agenceRepository->find($id);
        $form = $this->createFormBuilder()
        ->add('localite', EntityType::class, [
            'mapped' => false,
            'multiple' => true,
            'attr' => [
                'class' => 'form-select',
                'size' => '10'
            ],
            'query_builder' => function (LocaliteRepository $er) use ($agence) {
                return $er->createQueryBuilder('loc')
                ->where('loc.agence is null')
                ;
            },
            'class' => Localite::class,
            'label' => 'Localités couvertes',
            'group_by' => 'departement',
            'choice_label' => function ($loc) {
                return "[".$loc->getCode()."] ".$loc->getNom();
            },
            'required' => false,
            'data' => $agence->getLocalite()
        ])
        ->getForm();

        $form->handleRequest($request);

        $les_localite0 = $agence->getLocalite();
        if ($form->isSubmitted() && $form->isValid()) {
            $les_localite1 = $form->get('localite')->getData();

            foreach($les_localite1 as $loc) { 
                $loc_ = $localiteRepository->find($loc);
                $loc_->setAgence($agence);
                $localiteRepository->add($loc_);
                // $agence = $agence->addLocalite($loc_);
                // $agenceRepository->add($agence);
            }            

            return $this->redirectToRoute("app_agence_show", ['id'=>$agence->getId()]);
        }
        $agenc =$agenceRepository->findBy([],['code'=>'asc']);
        return $this->renderForm('agence/localite.html.twig', [
            'les_agence' => $agenc= $pag->paginate(
                $agenc,
                $request->query->getInt('page', 1),
                20
            ),
            'agence' => $agence,
            'agenceForm' => $form,
        ]);

    }

    #[Route('{id}/dellocalite/{idL}', name: 'localitedel')]
    public function dellocalite(Agence $id, Localite $idL, ManagerRegistry $doctrine, Request $request, LocaliteRepository $localiteRepository, AgenceRepository $agenceRepository): Response
    {
        $em = $doctrine->getManager();
        $agence = $agenceRepository->find($id);
        $localite = $localiteRepository->find($idL);
        $localite = $localite->setAgence(null);
        $em->persist($localite);
        $em->flush();
        return $this->redirectToRoute("app_agence_show", ['id'=>$agence->getId()]);
    }

    #[Route('/show/{id}', name: 'show')]
    public function show(Request $request,ManagerRegistry $doctrine, PaginatorInterface $pag,Agence $agence, AgenceRepository $agenceRepository): Response
    {
        $agence = $doctrine->getRepository(Agence::class)->find($agence->getId());

        if (!$agence) {
            throw $this->createNotFoundException(
                'N\'EXISTE PAS'
            );
        }
        $agenc =$agenceRepository->findBy([],['code'=>'asc']);
        return $this->render('agence/show.html.twig', [
            'les_agence' => $agenc= $pag->paginate(
                $agenc,
                $request->query->getInt('page', 1),
                20
            ),
            'agence' => $agence,
        ]);
    }


    #[Route('/delete/{id}', name: 'delete')]
    public function delete(ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $ag = $entityManager->getRepository(Agence::class)->find($id);
        $entityManager->remove($ag);
        $entityManager->flush();
        return new Response('Suppression effectué!');
    }

}
