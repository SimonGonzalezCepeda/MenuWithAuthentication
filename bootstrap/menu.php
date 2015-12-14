<?php

// Menu
MenuWithAuthentication::menu('home')
    ->title('Home')
    ->icon('fa-dashboard')
    ->url('/home')
    ->rol('home')
    ->permission('home')
    ->user('sergitur');
//Another Link
MenuWithAuthentication::menu('anotlink')
    ->title('Another link')
    ->user(5);
// Multimenu
MenuWithAuthentication::menu()->title('Multimenu');
    App::meno()-title('Link2');
    App::meno()-title('Link3');

