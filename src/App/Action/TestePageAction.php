<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\Response\JsonResponse;
use Zend\Expressive\Router;
use Zend\Expressive\Template;
use Zend\Expressive\Twig\TwigRenderer;

class TestePageAction
{
    /**
     * @var Template\TemplateRendererInterface
     */
    private $template;

    public function __construct(Template\TemplateRendererInterface $template = null)
    {
        $this->template = $template;
    }


    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {



        return new HtmlResponse($this->template->render('app::teste',['data'=>'Minha primeira aplicação']));
    }
}
