<?php

namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\PostModel;
use App\Model\UserModel;

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
        
        
        $this->render('app.articles.index',array(
            'articles' => $articles,
            'user' => $user,
            'count' => $count
            
        ));
    }

    public function show($id)
    {
        $article = PostModel::findById($id);
        $user = new UserModel;

        $this->render('app.articles.show',array(
            'article' => $article,
            'user' => $user

        ));
    }

    public function delete($id)
    {
        // Postmodel::delete($id);
        $this->redirect('articles');
    }
}
