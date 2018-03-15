@extends('layout.amp')
@section('title')
Camera Đà Nẵng | CÔNG TY PHÂN PHỐI LẮP ĐẶT CAMERA HÀNG ĐẦU ĐÀ NẴNG
@endsection
@section('description')
Camera Đà Nẵng | Công ty phân phối lắp đặt Camera tại Đà Nẵng | Miền Trung | Nhà thầu hệ thống an ninh hàng đầu | Với đội ngũ kỹ thuật tay nghề cao
@endsection
@section('keywords')
Camera Đà Nẵng, nhà thầu camera tại Đà Nẵng, phân phối camera miền trung, máy báo trộm, camera KBVISION
@endsection
@section('og-image')
{{asset('asset/img/logo.png')}}
@endsection
@section('headcontent')
@include('amp.partial.headcontent')
@endsection
@section('content')
<h1 class="hidden-all">Camera Đà Nẵng</h1>
<h2 class="hidden-all">Phân phối camera tại Đà Nẵng</h2>
<h3 class="hidden-all">Nhà thầu hệ thống an ninh hàng đầu</h3>
<div class="product row">
  <amp-accordion>
    <?php $home_projects = Session::get('home_projects'); ?>
    <section>
      <h6>CÔNG TRÌNH</h6>
      <div>
        @foreach($home_projects['top'] as $project)
        <div class="project item col-12">
          <div class="detail">
            <a href="/cong-trinh/{{$project->id}}"><p class="name">{{$project->name}}</p></a>
          </div>
          <div class="img-pj col-6 left">
            <amp-img alt="{{$project->image}}" width="100" height="57" src="{{asset($project->image_link())}}" layout="responsive"></amp-img>
          </div>
          <div class="detail">
            <p class="description"><?=strip_tags($project->description) ?></p>
            <p class="date">{{date_format($project->created_at, 'd/m/Y G:iA')}}</p>
          </div>
        </div>
        @endforeach
        <div class="more-pj">
          <a href="/cong-trinh">Xem thêm</a>
        </div>
      </div>
    </section>
    <section>
      <h6>CÔNG TRÌNH ĐANG THI CÔNG</h6>
      <div>
        @foreach($home_projects['dur'] as $project)
        <div class="project item col-12">
          <div class="detail">
            <a href="/cong-trinh/{{$project->id}}"><p class="name">{{$project->name}}</p></a>
          </div>
          <div class="img-pj col-6 left">
            <amp-img alt="{{$project->image}}" width="100" height="57" src="{{asset($project->image_link())}}" layout="responsive"></amp-img>
          </div>
          <div class="detail">
            <p class="description"><?=strip_tags($project->description) ?></p>
            <p class="date">{{date_format($project->created_at, 'd/m/Y G:iA')}}</p>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    <section>
      <h6>CÔNG TRÌNH TIÊU BIỂU</h6>
      <div>
        @foreach ($home_projects['pro'] as $project)
        <div class="project item top-pj">
          <div class="img-pj">
            <a href="/cong-trinh/{{$project->id}}">
              <amp-img width="100" height="57" alt="{{$project->image}}" src="{{asset($project->image_link())}}" layout="responsive">
              </amp-img></a>
          </div>
          <div class="detail">
            <a href="/cong-trinh/{{$project->id}}"><p class="name">{{$project->name}}</p></a>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    <section expanded>
      <h6>TOP BÁN CHẠY NHẤT</h6>
      <div class="product-box">
        @foreach ($products['top'] as $product)
        <div class="product-item left">
          <div class="p1 row">
            <div class="img">
              <amp-img alt="{{$product->image}}" width="100" height="100" src="{{asset($product->image_link())}}" layout="responsive"></amp-img>
            </div>
            <div class="cont">
              <div class="cont-abs">
                <p>{{$product->name}}</p>
                <p class="code">{{$product->code}}</p>
                <p class="price">{{$product->price_label()}}</p>
              </div>
            </div>
            <form method="get" class="exp" action="/{{$product->link}}" target="_top">
            <button type="submit" class="btn btn-warning">Chi tiết</button>
            </form>
          </div>
        </div>
        @endforeach
      </div>
    </section>
  </amp-accordion>
</div>
<div class="product row">
  <amp-accordion>
    @foreach ($products['categories'] as $category)
    @if($category->sup_id == 0)
      <section>
        <h6>{{$category->name}}</h6>
        <div class="product-box">
          @if(isset($products[$category->id]))
          @foreach ($products[$category->id] as $product)
          <div class="product-item left">
            <div class="p1 row">
              <div class="img">
                <amp-img alt="{{$product->image}}" width="100" height="100" src="{{asset($product->image_link())}}" layout="responsive"></amp-img>
              </div>
              <div class="cont">
                <div class="cont-abs">
                  <p>{{$product->name}}</p>
                  <p class="code">{{$product->code}}</p>
                  <p class="price">{{$product->price_label()}}</p>
                </div>
              </div>
              <form method="get" class="exp" action="/{{$product->link}}" target="_top">
              <button type="submit" class="btn btn-warning">Chi tiết</button>
              </form>
            </div>
          </div>
          @endforeach
          @endif
        </div>
      </section>
    @endif
    @endforeach
  </amp-accordion>
</div>
@endsection
@section('extra')
@include('amp.partial.extra')
@endsection
