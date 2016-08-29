<?php 
// return [
// 	'title' => 'My Blog',
// 	'posts_per_page' => 5,
// 	'uploads' => [
//     'storage' => 'local',
//     'webpath' => '/uploads',
//   	],
// ]; 
return [
  'name' => "L5 Beauty",
  'title' => "Laravel 5.1 Beauty",
  'subtitle' => 'A clean blog written in Laravel 5.1',
  'description' => 'This is my meta description',
  'author' => 'Chuck Heintzelman',
  'page_image' => 'home-bg.jpg',
  'posts_per_page' => 10,
  'contact_email' => env('MAIL_FROM'),
  'uploads' => [
    'storage' => 'local',
    'webpath' => '/uploads/',
  ],
];
