<?php

// Menu
App::menu()
    ->title('Home')
    ->icon('fa-dashboard')
    ->url('/home')
    ->rol('home')
    ->permission('home')
    ->user('sergitur');
//Another Link
App::menu()
    ->title('Another link')
    ->user(5);
// Multimenu
App::menu()->title('Multimenu');
    App::meno()-title('Level2');
    App::meno()-title('Level2');
