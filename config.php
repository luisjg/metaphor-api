<?php

return [
    'production' => false,
    'google_analytics' => 'UA-77781058-1',
    'setActiveClass' => function ($page, $section, $active = 'nav__item--active') {
      return str_contains($page->getPath(), 'docs/'.$section) ? $active : '';
    },
    'upperCaseFilename' => function($page){
      return ucfirst($page->getFilename());
    }
];
