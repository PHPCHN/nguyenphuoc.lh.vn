@if(Session::has('product_seens'))
<div class="product-seen row">
  <amp-accordion>
    <section expanded>
      <h6>SẢN PHẨM VỪA XEM</h6>
      <div class="product-box">
        @foreach (array_reverse(Session::get('product_seens')) as $product)
        <div class="item left">
          <a href="/{{$product->link}}/{{$product->code}}">
          <div class="item-box col-12">
            <div class="img left">
              <amp-img alt="{{$product->image}}" width="100" height="100" src="{{asset($product->image_link())}}" layout="responsive"></amp-img>
            </div>
            <div class="detail">
              <p class="name">{{$product->name}}</p>
              <p class="code">{{$product->code}}</p>
              <p class="price">{{$product->price_label()}}</p>
            </div>
          </div>
          </a>
        </div>
        @endforeach
      </div>
    </section>
  </amp-accordion>
</div>
@endif
<div class="new row">
  <amp-accordion>
    <section>
      <h6>TIN TỨC</h6>
      <div>
        <div class="more">
          <a href="/tin-tuc">Xem tất cả</a>
        </div>
        @foreach (Session::get('news_list') as $index => $news)
        <div class="item col-12">
          <a href="/tin-tuc/{{$news->id}}">
          <div class="row">
            <div class="img col-6 left">
              <amp-img alt="{{$news->image}}" width="100" height="52" src="{{asset($news->image_link())}}" layout="responsive"></amp-img>
            </div>
            <div class="detail">
              <p class="title">{{$news->title}}<p>
              <p class="description"><?=strip_tags($news->description) ?></p>
              <p class="date">{{date_format($news->created_at, 'd/m/Y G:iA')}}</p>
            </div>
          </div>
          </a>
        </div>
        @endforeach
      </div>
    </section>
  </amp-accordion>
</div>
@include('amp.partial.ads-news')
@include('amp.partial.prov-news')
