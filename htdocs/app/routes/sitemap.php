<?php

Route::get('sitemap.xml', [
  'as' => 'user.sitemap.index',
  'uses' => 'DetailController@get_sitemap_index',
]);

Route::get('sitemap_about.xml', [
  'as' => 'user.sitemap.about',
  'uses' => 'DetailController@get_sitemap_about',
]);

Route::get('sitemap_product.xml', [
  'as' => 'user.sitemap.product',
  'uses' => 'DetailController@get_sitemap_product',
]);

Route::get('sitemap_news.xml', [
  'as' => 'user.sitemap.news',
  'uses' => 'DetailController@get_sitemap_news',
]);

Route::get('sitemap_project.xml', [
  'as' => 'user.sitemap.project',
  'uses' => 'DetailController@get_sitemap_project',
]);

Route::get('sitemap_prov.xml', [
  'as' => 'user.sitemap.prov',
  'uses' => 'DetailController@get_sitemap_prov',
]);
