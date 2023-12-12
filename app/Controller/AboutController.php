<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class AboutController extends Controller
{

    public function index()
    {
        $aboutMessage = 'Bienvenue sur la page about !';
        $aboutLorem = 'Lorem ipsum Jeanus Batistus nullos memos avecos nouvo pc cheros de 2000 euros mais 10/20 examos PHPOS';

        $this->render('app.about.index',array(
            'aboutMessage' => $aboutMessage,
            'aboutLorem' => $aboutLorem
        ));
    }

    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

}