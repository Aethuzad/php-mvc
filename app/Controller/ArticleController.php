<?php

namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\PostModel;
use App\Model\UserModel;
use App\Service\Form;
use App\Service\Validation;

/**
 *
 */
class ArticleController extends Controller
{

    public function index()
    {
        $articles = PostModel::allOrder('DESC');
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

        if (!empty($_POST['submitted'])) {
            $postArticle = $this->cleanXss($_POST);
            
            $validerArticle = new Validation;

            $errors['titre'] = $validerArticle->textValid($postArticle['titre'],'titre', 5, 100);
            $errors['contenu'] = $validerArticle->textValid($postArticle['contenu'],'contenu', 5, 1500);

            if($validerArticle->IsValid($errors)) {
                // Insertion des données du formulaire en base de donnée
                PostModel::insert($postArticle);
                $this->redirect('articles');
            }
        };

        $formAdd = new Form($errors);
        $users = UserModel::all();

        $this->render('app.article.addarticle',array(
            'formAdd' => $formAdd,
            'users' => $users
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
        Postmodel::delete($id);
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
