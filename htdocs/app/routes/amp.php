<?php

Route::get('/amp', [
  'as' => 'amp.index',
  'uses' => 'IndexAmpController@index',
]);

Route::get('amp/lap-dat-camera-tai-{keyword}', [
  'as' => 'amp.provs',
  'uses' => 'DetailAmpController@provs',
]);

Route::get('amp/lap-dat-camera-tai-{prov}/{keyword}', [
  'as' => 'amp.prov.cities',
  'uses' => 'DetailAmpController@prov_cities',
]);

Route::get('amp/gioi-thieu', [
  'as' => 'amp.about',
  'uses' => 'DetailAmpController@abouts',
]);

Route::get('amp/chinh-sach-{keyword}', [
  'as' => 'amp.policy',
  'uses' => 'DetailAmpController@policies',
]);

Route::get('amp/tuyen-{keyword}', [
  'as' => 'amp.recruit',
  'uses' => 'DetailAmpController@recruits',
]);

Route::get('amp/ho-tro-{keyword}', [
  'as' => 'amp.support',
  'uses' => 'DetailAmpController@supports',
]);

Route::get('amp/kien-thuc-san-pham', [
  'as' => 'amp.support.products',
  'uses' => 'DetailAmpController@support_products',
]);

Route::get('amp/kien-thuc-san-pham/{id}', [
  'as' => 'amp.support.product.detail',
  'uses' => 'DetailAmpController@support_product_detail',
]);

Route::get('amp/tu-van-giai-phap-thiet-bi', [
  'as' => 'amp.support.solutions',
  'uses' => 'DetailAmpController@support_solutions',
]);

Route::get('amp/tu-van-giai-phap-thiet-bi/{id}', [
  'as' => 'amp.support.solution.detail',
  'uses' => 'DetailAmpController@support_solution_detail',
]);

Route::get('amp/khuyen-mai', [
  'as' => 'amp.promotions',
  'uses' => 'DetailAmpController@promotions',
]);

Route::get('amp/khuyen-mai/{id}', [
  'as' => 'amp.promotion.detail',
  'uses' => 'DetailAmpController@promotion_detail',
]);

Route::get('amp/qc', [
  'as' => 'amp.ads',
  'uses' => 'DetailAmpController@ads',
]);

Route::get('amp/qc/{id}', [
  'as' => 'amp.ads.detail',
  'uses' => 'DetailAmpController@ads_detail',
]);

Route::get('amp/download', [
  'as' => 'amp.support.download',
  'uses' => 'DetailAmpController@support_downloads',
]);

Route::get('amp/search', [
  'as' => 'amp.search',
  'uses' => 'IndexAmpController@search',
]);

Route::get('amp/dat-hang', [
  'as' => 'amp.order',
  'uses' => 'OrderAmpController@index',
]);

Route::post('amp/dat-hang', [
  'as' => 'amp.order-post',
  'uses' => 'OrderAmpController@order',
]);

Route::get('amp/cong-trinh', [
  'as' => 'amp.projectall',
  'uses' => 'IndexAmpController@projects',
]);

Route::get('amp/cong-trinh/{project}', [
  'as' => 'amp.project',
  'uses' => 'DetailAmpController@project',
]);

Route::get('amp/tin-tuc', [
  'as' => 'amp.newsall',
  'uses' => 'IndexAmpController@news',
]);

Route::get('amp/tin-tuc/{news}', [
  'as' => 'amp.news',
  'uses' => 'DetailAmpController@news',
]);

Route::get('amp/{cate}', [
  'as' => 'amp.category',
  'uses' => 'IndexAmpController@category',
]);

Route::get('amp/{category}/{product}', [
  'as' => 'amp.product',
  'uses' => 'DetailAmpController@product_detail',
]);
