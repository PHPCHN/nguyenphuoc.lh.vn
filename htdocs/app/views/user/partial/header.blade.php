<div class="header row">
  <div class="col-xs-12">
    <p>Thời gian làm việc : Thứ 2 – Chủ nhật : 08:00 – 17:30</p>
  </div>
  <div class="banner banner-top col-xs-12">
    <div class="logo col-xs-6 col-sm-3">
      <div class="img row"><a href="/">
        <img alt="logo" src="{{asset('asset/img/logoweb.png')}}"></a>
      </div>
    </div>
    <div class="col-xs-6 col-sm-6">
    </div>
    <div class="search-box hidden-xs col-sm-3">
      <form class="col-xs-12" method="get" action="/search">
        <input class="form-control col-xs-12" type="text" name="search">
        <button type="submit" class="btn-default form-control">
          <span class="glyphicon glyphicon-search"></span></button>
      </form>
    </div>
  </div>
  <div class="banner col-xs-12">
    @include('user.partial.menu')
  </div>
</div>
<div class="header row">
