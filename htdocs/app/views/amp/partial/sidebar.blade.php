<amp-sidebar id="sidebar" class="menu" layout="nodisplay" side="right">
  <ul>
    <li class="item"><a href="/camera" >
      <amp-img alt="cam-icon" src="{{asset('asset/img/cam-icon.png')}}" width="30" height="20"></amp-img>
      CAMERA</a></li>
    <li class="item"><a href="/dau-ghi" >
      <amp-img alt="nvr-icon" src="{{asset('asset/img/nvr-icon.png')}}" width="30" height="20"></amp-img>
      ĐẦU GHI</a></li>
    <li class="item"><a href="/bao-trom" >
      <amp-img alt="icon-alm" src="{{asset('asset/img/icon-alm.png')}}" width="30" height="20"></amp-img>
      BÁO TRỘM</a></li>
    <li class="item"><a href="/bo-dam" >
      <amp-img alt="icon-rad" src="{{asset('asset/img/icon-rad.png')}}" width="30" height="20"></amp-img>
      BỘ ĐÀM</a></li>
    <li class="item"><a href="/chuong-cua" >
      <amp-img alt="icon-dbll" src="{{asset('asset/img/icon-dbll.png')}}" width="30" height="20"></amp-img>
      CHUÔNG CỬA</a></li>
    <li class="item"><a href="/cua-tu-dong" >
      <amp-img alt="icon-otodr" src="{{asset('asset/img/icon-otodr.png')}}" width="30" height="20"></amp-img>
      CỬA TỰ ĐỘNG</a></li>
    <li class="item"><a href="/ups" >
      <amp-img alt="icon-ups" src="{{asset('asset/img/icon-ups.png')}}" width="30" height="20"></amp-img>
      UPS</a></li>
    <li class="item"><a href="/phu-kien" >
      <amp-img alt="icon-acx" src="{{asset('asset/img/icon-acx.png')}}" width="30" height="20"></amp-img>
      PHỤ KIỆN</a></li>
  </ul>
  <div class="extra-title row">
    ĐỐI TÁC KHÁCH HÀNG THƯỜNG XUYÊN
  </div>
  <?php
  $ex_imgs = array(
    'dlink', 'mdli', 'vantech', 'mdla', 'avtech', 'mdlb',
    'vdtech', 'mdlj', 'hikvision', 'mdlc', 'questek', 'mdld',
    'nichietsu', 'mdlk', 'protek', 'mdle', 'icam', 'mdlf',
    'hisharp', 'mdll', 'samsung', 'mdlg', 'kocom', 'mdlh',
    'lilin', 'mdlm', 'tibet', 'mdli', 'panasonic', 'mdlj',
    'sony', 'mdlk', 'commax', 'mdll', 'dmax', 'mdlm',
  );
  ?>
  @foreach($ex_imgs as $ex_img)
    <amp-img alt="{{$ex_img}}" width="101" height="60" src="{{asset('asset/img/'.$ex_img.'.png')}}">
    </amp-img>
  @endforeach
</amp-sidebar>
