@foreach($pdt_udt as $pdt)
  <p>
    insert into products(cate_id, name, code, image, price, description, content, created_at)
    values('{{$pdt[0]}}', 'Router TotoLink {{$pdt[1]}}', 'TLink-{{$pdt[1]}}', 'TLink-{{$pdt[1]}}.png', '{{$pdt[2]}}', '{{$pdt[3]}}', '{{$pdt[4]}}', '{{date('Y-m-d H:i:s')}}');
  </p>
@endforeach
