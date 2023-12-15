<?php

$routes = [
    ['home','default','index'],
    ['contact','contact','index'],
    ['about','about','index'],
    ['docphp','docphp','index'],

    // Articles
    ['articles','article','index'],
    ['article','article','show',['id']],
    ['add','article','add'],
    ['delete','article','delete',['id']],
    ['edit','article','edit',['id']]
];









