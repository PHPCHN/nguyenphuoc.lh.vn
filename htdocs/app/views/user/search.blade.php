@extends('layout.user')
<?php $input_opts = Session::get('input_opts') ?>
@section('title')
Tìm kiếm | Camera Đà Nẵng
@endsection
@section('description')
Kết quả tìm kiếm {{isset($input_opts['search'])?'với từ khoá '.$input_opts['search']:''}} | Lắp đặt Camera tại Đà Nẵng | Phụ kiện máy tính, laptop
@endsection
@section('keywords')
{{isset($input_opts['search'])?$input_opts['search']:'search'}}
@endsection
@section('og-image')
{{asset('asset/img/logo.png')}}
@endsection
@section('headcontent')
<div class="navbar-collapse" id="opt-menu">
  <form method="get">
    @if(isset($input_opts['search']))
    <input type="hidden" name="search" value="{{$input_opts['search']}}">
    @endif
    <ul class="nav navbar-nav">
      @foreach (Session::get('options') as $option)
      <li class="item">
        <select class="form-control" name="{{$option['opt']->keyword}}" onchange="this.form.submit();">
          <option disabled selected value>{{$option['opt']->name}}</option>
          @foreach ($option['val'] as $vals)
          @if(isset($input_opts[$option['opt']->keyword])
            && $input_opts[$option['opt']->keyword] == $vals->keyword)
            <option value="{{$vals->keyword}}" selected>{{$vals->label}}</option>
          @else
            <option value="{{$vals->keyword}}">{{$vals->label}}</option>
          @endif
          @endforeach
        </select>
      </li>
      @endforeach
      <li class="item">
        <select class="form-control" name="sort" onchange="this.form.submit();">
          <option disabled selected value>Sắp xếp</option>
          @foreach (Session::get('sorts') as $sort_label => $sort_key)
          @if(isset($input_opts['sort'])
            && $input_opts['sort'] == $sort_key)
              <option value="{{$sort_key}}" selected>{{$sort_label}}</option>
          @else
              <option value="{{$sort_key}}">{{$sort_label}}</option>
          @endif
          @endforeach
        </select>
      </li>
    </ul>
  </form>
</div>
@endsection
@section('content')
<h1 class="hidden-all">Tìm kiếm | Camera Đà Nẵng</h1>
<h2 class="hidden-all">Lắp đặt camera tại Đà Nẵng</h2>
<h3 class="hidden-all">Phụ kiện máy tính, laptop</h3>
<div class="product row">
  <h6><a href="/">TRANG CHỦ</a>
    -> TÌM KIẾM - {{$products->getTotal()}} KẾT QUẢ</h6>
  <div class="col-xs-12">
  {{$products->appends($input_opts)->links()}}
  </div>
  @foreach ($products as $product)
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
  <div class="col-xs-12">
  {{$products->appends($input_opts)->links()}}
  </div>
</div>
@endsection
@section('extra')
@endsection
