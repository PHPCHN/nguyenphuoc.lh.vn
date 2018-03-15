<div class="prov row">
  <amp-accordion>
    <section>
      <h6>LẮP CAMERA CÁC TỈNH</h6>
      <div>
        @foreach(News::const_about('cac-tinh') as $prov)
        <div class="item">
        <a href="/lap-dat-camera-tai-{{$prov}}">
          <p class="h6"><span class="glyphicon">&#xe067</span>
            Lắp đặt <span class="h7"> Camera tại {{News::const_about('prov-title')[$prov]}}</span></p></a>
          <div class="prov-cities">
          @foreach(News::const_about($prov) as $dst)
          <a href="/lap-dat-camera-tai-{{$prov}}/{{$dst}}">
            <p class="h6"><span class="glyphicon">&#xe067</span>
              Lắp đặt <span class="h7"> Camera tại {{News::const_about('prov-title')[$dst]}}</span></p></a>
          @endforeach
          </div>
        </div>
        @endforeach
      </div>
    </section>
  </amp-accordion>
</div>
