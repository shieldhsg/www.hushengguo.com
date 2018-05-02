<?php

//基础路由
$rules = [
    /* 基础 */
    '/' => 'site/index',
    '/index'=>'site/index',
    '/index.html'=>'site/index',
    '/morning-news'=>'site/morning-news',
    '/morning-news.html'=>'site/morning-news',
    '/tongqu'=>'site/tongqu',
    '/tongqu.html'=>'site/tongqu',
    '/activity'=>'site/activity',
    '/activity.html'=>'site/activity',
    '/join'=>'site/join',
    '/join.html'=>'site/join',
    '/contact'=>'site/contact-us',
    '/contact.html'=>'site/contact-us',
    '/article/<id:\d+>'=>'site/article',
    '/article/<id:\d+>.html'=>'site/article',
    'download'=>'site/download'
];

//合并整个项目路由
return $rules;
