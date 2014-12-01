<?php
namespace OLOLO\Controller;

use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    public function getArticlesAction()
    {
        return new Response('Articles here!');
    }

    public function getArticleAction($id)
    {
        return new Response(sprintf('Get Article with "$s" id action',$id));
    }

    public function putArticleAction($id)
    {
        return new Response(sprintf('put Article with "$s" id action', $id));
    }

    public function postArticleAction($id)
    {
        return new Response(sprintf('Post Article with "$s" id action', $id));
    }

    public function deleteArticleAction($id)
    {
        return new Response(sprintf('Delete Article with "$s" id action', $id));
    }
}