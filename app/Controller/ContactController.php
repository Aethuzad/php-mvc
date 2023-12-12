<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class ContactController extends Controller
{

    public function index()
    {
        $titreContact = 'Bienvenue sur la page de contact';

        $persons = [
            [
            'nom' => 'Dupont',
            'prenom' => 'Jean',
            'age' => 30
            ],
            [
            'nom' => 'Durand',
            'prenom' => 'Marie',
            'age' => 25
            ]
        ];

        // Render s'occupe du chemin
        $this->render('app.contact.index',[
            'titrePage' => $titreContact,
            'persons' => $persons
        ]);
    }

    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

}
