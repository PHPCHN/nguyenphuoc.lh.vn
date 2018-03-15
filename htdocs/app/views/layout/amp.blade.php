<!DOCTYPE html>
<html amp lang="vi-vn" itemscope itemtype="http://schema.org/LocalBusiness">
    <head>
        @include('amp.partial.headtag')
    </head>
    <body>
      <div id="fb-root"></div>
      <div class="wrapper col-12">
        @include('amp.partial.header')
        @yield('headcontent')
        <div id="main-content" class="content row">
          <div class="products col-sm-9">
            @yield('content')
          </div>
          <div id="news" class="news col-sm-3">
            @include('amp.partial.news')
          </div>
        </div>
        @yield('extra')
        @include('amp.partial.about')
        @include('amp.partial.footer')
        @include('amp.partial.extra-fixed')
      </div>
      @include('amp.partial.sidebar')
      <amp-analytics type="googleanalytics">
        <script type="application/json">
          {
            "vars": {
              "account": "UA-86814912-1"
            },
            "triggers": {
              "trackPageview" : {
                "on": "visible",
                "request": "pageview"
              }
            }
          }
        </script>
      </amp-analytics>
      @yield('js')
    </body>
</html>
