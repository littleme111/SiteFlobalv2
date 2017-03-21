<?php

namespace rssBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Client;
class DefaultController extends Controller
{
    /**
     * @Route("/infos", name="infos")
     */
    public function indexAction()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://newsapi.org/v1/articles?source=techcrunch&sortBy=top&apiKey=9aaa57884f914605955173a5660ec76f');
        //echo $res->getStatusCode();

        //echo $res->getHeaderLine('content-type');

        $data =  $res->getBody();







        return $this->render('rssBundle:Default:index.html.twig', array('data' => $data));
    }
}
