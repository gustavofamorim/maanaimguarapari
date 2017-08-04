<?php 

// Home
Breadcrumbs::register('home', function($breadcrumbs) {
    $breadcrumbs->push('Home', route('index'));
});

// Home > Projeto Aprendiz Júnior
Breadcrumbs::register('aprendiz-jr', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Projeto Aprendiz Júnior', route('aprendiz-jr'));
});

// Home > Coral Preciosa Semente
Breadcrumbs::register('preciosa-semente', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Coral Preciosa Semente', route('preciosa-semente'));
});

// Home > Coral de Jovens
Breadcrumbs::register('coral-jovens', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Coral de Jovens', route('coral-jovens'));
});
