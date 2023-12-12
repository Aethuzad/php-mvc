<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class DocphpController extends Controller
{

    public function index()
    {
        $this->redirect('https://www.php.net/docs.php');
    }

    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

}