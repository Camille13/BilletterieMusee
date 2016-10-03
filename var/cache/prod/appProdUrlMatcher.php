<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // musee_billetterie_home
        if ($pathinfo === '/Accueil') {
            return array (  '_controller' => 'Musee\\BilletterieBundle\\Controller\\FormulaireController::indexAction',  '_route' => 'musee_billetterie_home',);
        }

        // panier
        if (0 === strpos($pathinfo, '/panier') && preg_match('#^/panier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'panier')), array (  '_controller' => 'Musee\\BilletterieBundle\\Controller\\FormulaireController::paiementAction',));
        }

        // visiteurs_form
        if (0 === strpos($pathinfo, '/visiteurs') && preg_match('#^/visiteurs/(?P<id>.+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'visiteurs_form')), array (  '_controller' => 'Musee\\BilletterieBundle\\Controller\\FormulaireController::addVisiteursAction',));
        }

        // musee_email
        if (0 === strpos($pathinfo, '/Email') && preg_match('#^/Email/(?P<id>.+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'musee_email')), array (  '_controller' => 'Musee\\BilletterieBundle\\Controller\\FormulaireController::EmailAction',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
