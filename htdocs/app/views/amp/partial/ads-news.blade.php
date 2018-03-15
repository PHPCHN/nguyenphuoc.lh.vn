<div class="new ads-news row">
  <amp-accordion>
    <section>
      <header class="row ads-h6">
        <h6>QUẢNG CÁO</h6>
        <div class="ads-mark">
          <amp-img alt="ads-mark" width="29" height="29" src="{{asset('asset/img/ads-mark.png')}}"></amp-img>
        </div>
      </header>
      <div>
        <a href="/qc"></a>
        @foreach (Session::get('ads_list') as $index => $news)
        <div class="item col-12">
          <a href="/qc/{{$news->id}}">
          <div class="row">
            <div class="img col-12">
              <amp-img alt="{{$news->image}}" width="100" height="46" src="{{asset($news->image_link())}}" layout="responsive"></amp-img>
            </div>
          </div>
          </a>
        </div>
        @endforeach
      </div>
    </section>
  </amp-accordion>
</div>
