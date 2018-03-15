<div class="about row">
  <amp-accordion>
    <section>
      <header><p class="h6">GIỚI THIỆU VỀ CÔNG TY</p></header>
      <ul>
      <li><a href="/gioi-thieu">Giới thiệu</a></li>
      <li><a href="/chinh-sach-uu-dai">Chính sách ưu đãi</a></li>
      <li><a href="/chinh-sach-bao-hanh">Chính sách bảo hành</a></li>
      <li><a href="/chinh-sach-van-chuyen">Chính sách vận chuyển</a></li>
      <li><a href="/chinh-sach-doi-tra-hang">Chính sách đổi trả hàng</a></li>
      <li><a href="/chinh-sach-bao-mat-thong-tin">Chính sách bảo mật thông tin</a></li>
      </ul>
    </section>
    <section>
      <header><p class="h6">THÔNG TIN TUYỂN DỤNG</p></header>
      <ul>
      <li><a href="/tuyen-nhan-vien-marketing-online">Tuyển nhân viên Marketing Online tại Đà Nẵng</a></li>
      <li><a href="/tuyen-nhan-vien-ky-thuat">Tuyển nhân viên Kỹ thuật tại Đà Nẵng</a></li>
      </ul>
    </section>
    <section>
      <header><p class="h6">HỖ TRỢ KHÁCH HÀNG</p></header>
      <ul>
      <li><a href="/ho-tro-ky-thuat">Hỗ trợ kỹ thuật</a></li>
      <li><a href="/kien-thuc-san-pham">Kiến thức sản phẩm</a></li>
      <li><a href="/tu-van-giai-phap-thiet-bi">Tư vấn giải pháp - thiết bị</a></li>
      <li><a href="/download">Download tài liệu - phần mềm</a></li>
      </ul>
    </section>
    <section>
      <header><p class="h6">THỐNG KÊ TRUY CẬP</p></header>
      <ul>
      <li>{{trans('messages.online')}}: {{Session::get('mechs')['online']}}</li>
      <li>{{trans('messages.visit-today')}}: {{Session::get('mechs')['visit-today']}}</li>
      <li>{{trans('messages.visit-yesterday')}}: {{Session::get('mechs')['visit-yesterday']}}</li>
      <li>{{trans('messages.this-month')}}: {{Session::get('mechs')['this-month']}}</li>
      <li>{{trans('messages.this-year')}}: {{Session::get('mechs')['this-year']}}</li>
      <li>{{trans('messages.total-visit')}}: {{Session::get('mechs')['total-visit']}}</li>
      </ul>
    </section>
  </amp-accordion>
</div>
<div class="about-b row">
  <?php
    $banks = array(
      'acb' => 39, 'anz' => 71, 'bidv' => 73, 'hsbc' => 43, 'mart' => 68, 'masu' => 41,
      'mb' => 46, 'scd' => 76, 'tech' => 71, 'vcom' => 107, 'vtin' => 73,
    );
  ?>
  <amp-img class="bkard" alt="bkard" width="280" height="61" src="{{asset('asset/img/bkard.png')}}" ></amp-img>

    @foreach($banks as $bank => $width)
      <amp-img alt="{{$bank}}" width="{{$width}}" height="61" src="{{asset('asset/img/'.$bank.'.png')}}"></amp-img>
    @endforeach

</div>
