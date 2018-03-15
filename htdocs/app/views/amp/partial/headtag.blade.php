<link rel="icon" href="{{asset('asset/img/icon.png')}}">
<title>@yield('title')</title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<meta name="keywords" content="@yield('keywords')">
<link rel="canonical" href="{{asset(str_replace('amp','',str_replace('amp/','',Request::path())))}}">
<script src="https://cdn.ampproject.org/v0.js" async></script>
<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
<script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
<script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
<script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
<script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
<noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<meta itemprop="name" property="og:title" content="@yield('title')" name="twitter:title"/>
<meta itemprop="url" property="og:url" content="{{asset(Request::path())}}"/>
<meta itemprop="description" property="og:description" name="twitter:description" content="@yield('description')"/>
<meta itemprop="image" property="og:image" content="@yield('og-image')"/>
<meta property="og:type" content="website"/>
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@dhn" />
<meta name="description" content="@yield('description')" />
<link rel="profile" href="http://microformats.org/profile/hcard">
@include('amp.partial.style')
@yield('css')
