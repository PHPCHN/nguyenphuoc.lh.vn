@extends('layout.user')
@section('title')
Camera Đà Nẵng | LẮP ĐẶT CAMERA HÀNG ĐẦU ĐÀ NẴNG
@endsection
@section('description')
Camera Đà Nẵng | Lắp đặt Camera tại Đà Nẵng | Phụ kiện máy tính, laptop
@endsection
@section('keywords')
Camera Đà Nẵng, Camera Nguyen Phuoc, camera KBVISION
@endsection
@section('og-image')
{{asset('asset/img/logoweb.png')}}
@endsection
@section('headcontent')

@endsection
@section('content')
<h1 class="hidden-all">Camera Đà Nẵng</h1>
<h2 class="hidden-all">Lắp đặt camera tại Đà Nẵng</h2>
<h3 class="hidden-all">Phụ kiện máy tính, laptop</h3>
<div class="product row">
  <h6>SẢN PHẨM TIÊU BIỂU</h6>
  @foreach ($products['top'] as $product)
  <div class="item col-xs-6 col-sm-4 col-md-3">
    <a href="/{{$product->link}}">
    <div class="p1 row">
      <div class="img">
        <img alt="{{$product->image}}" src="{{asset($product->image_link())}}" >
      </div>
      <div class="cont">
        <div class="cont-abs">
          <p>{{$product->name}}</p>
          <p class="code">{{$product->code}}</p>
          <p class="price">{{$product->price_label()}}</p>
        </div>
      </div>
    </div>
    </a>
  </div>
  @endforeach
</div>
@endsection
@section('extra')

@endsection
@section('js')
<!--div class="events">
  <div class="back">
  </div>
  <a href="/camera" target="_blank">
    <img alt="events" src="{{asset('asset/img/image10120.jpg')}}">
  </a>
  <div class="close">
    <span class="glyphicon glyphicon-remove-circle"></span>
  </div>
</div>
<script>
  $('.events').on('click', function(){
    $(this).hide();
  });
</script-->
@endsection
