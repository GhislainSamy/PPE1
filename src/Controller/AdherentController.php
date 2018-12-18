<?php

namespace App\Controller;

use App\Entity\Adherent;
use App\Form\Adherent1Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/adherent")
 */
class AdherentController extends AbstractController
{
    /**
     * @Route("/", name="adherent_index", methods="GET")
     */
    public function index(): Response
    {
        $adherents = $this->getDoctrine()
            ->getRepository(Adherent::class)
            ->findAll();

        return $this->render('adherent/index.html.twig', ['adherents' => $adherents]);
    }

    /**
     * @Route("/new", name="adherent_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $adherent = new Adherent();
        $form = $this->createForm(Adherent1Type::class, $adherent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($adherent);
            $em->flush();

            return $this->redirectToRoute('adherent_index');
        }

        return $this->render('adherent/new.html.twig', [
            'adherent' => $adherent,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idAdherent}", name="adherent_show", methods="GET")
     */
    public function show(Adherent $adherent): Response
    {
        return $this->render('adherent/show.html.twig', ['adherent' => $adherent]);
    }

    /**
     * @Route("/{idAdherent}/edit", name="adherent_edit", methods="GET|POST")
     */
    public function edit(Request $request, Adherent $adherent): Response
    {
        $form = $this->createForm(Adherent1Type::class, $adherent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('adherent_index', ['idAdherent' => $adherent->getIdAdherent()]);
        }

        return $this->render('adherent/edit.html.twig', [
            'adherent' => $adherent,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idAdherent}", name="adherent_delete", methods="DELETE")
     */
    public function delete(Request $request, Adherent $adherent): Response
    {
        if ($this->isCsrfTokenValid('delete'.$adherent->getIdAdherent(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($adherent);
            $em->flush();
        }

        return $this->redirectToRoute('adherent_index');
    }
}
