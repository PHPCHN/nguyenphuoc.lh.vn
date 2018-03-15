@if(Session::has('product_seens'))
<div class="product-seen row">
  <h6>SẢN PHẨM VỪA XEM</h6>
  @foreach (array_reverse(Session::get('product_seens')) as $product)
  <div class="item col-xs-12">
    <a href="/{{$product->link}}/{{$product->code}}">
    <div class="row">
      <div class="img col-xs-6 col-sm-4">
        <img alt="{{$product->image}}" src="{{asset($product->image_link())}}" >
        <div class="new-pr">
          @if($product->new)
          <img alt="newpr" src="{{asset('asset/img/newpr.png')}}" >
          @endif
          @if($product->pro)
          <img alt="prpr" src="{{asset('asset/img/prpr.png')}}" >
          @endif
        </div>
      </div>
      <div class="detail col-xs-6 col-sm-8">
        <p class="name">{{$product->name}}</p>
        <p class="code">{{$product->code}}</p>
        <p class="price">{{$product->price_label()}}</p>
      </div>
    </div>
    </a>
  </div>
  @endforeach
</div>
@endif
<div class="hotline row">
<p class="title">HOTLINE</p>
<p class="num">0905 350 353</p>
<p class="num">0120 622 1433</p>
<p class="gmail">phuocnguyen018@gmail.com</p>
</div>
<div class="gmap row">
  <h6>BẢN ĐỒ</h6>
<iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/search?q=camera%20nguyen%20phuoc&key=AIzaSyDCf4WNtn_DcqY8f1RTrVpXDnEIGsqzhb8" allowfullscreen></iframe>
</div>
<div class="fbmsg row">
  <a href="#" onclick="$(this).next('.fb-page').toggleClass('hidden-sm')"><h6>HỖ TRỢ TRỰC TUYẾN</h6></a>
<div class="fb-page" data-href="https://www.facebook.com/lapdatcameraphukienlaptopPD/" data-height="300" data-tabs="messages" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/lapdatcameraphukienlaptopPD/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/lapdatcameraphukienlaptopPD/">Chuyên phụ kiện máy tính, lắp đặt camera chính hãng</a></blockquote></div>
</div>
