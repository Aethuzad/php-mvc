<?php

namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\PostModel;
use App\Model\UserModel;
use App\Service\Form;

/**
 *
 */
class ArticleController extends Controller
{

    public function index()
    {
        $articles = PostModel::all();
        $user = new UserModel;
        $count = PostModel::count();
        
        
        $this->render('app.article.index',array(
            'articles' => $articles,
            'user' => $user,
            'count' => $count
            
        ));
    }

    public function add()
    {
        $errors = [];
        $formAdd = new Form($errors);

        $this->render('app.article.addarticle',array(
            'formAdd' => $formAdd,
        ));
    }

    public function show($id)
    {
        $article = $this->isArticleExist($id);
        // $article = PostModel::findById($id);
        $user = new UserModel;

        $this->render('app.article.show',array(
            'article' => $article,
            'user' => $user

        ));
    }

    public function delete($id)
    {
        $articleDelete = $this->isArticleExist($id);
        // Postmodel::delete($id);
        $this->redirect('articles');
    }
    
    public function isArticleExist($id)
    {
        $article = PostModel::findById($id);
        // if (empty($article)) {
        //     $this->Abort404();
        // }
        // return $article;
        return (empty($article)) ? $this->Abort404() : $article;
    }

}
