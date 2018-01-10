<img class="card-img-top" src="{!! Html::image('assets/img/'.$item-images) !!}" alt="">
<img class="card-img-top" src="assets/img/{{ $item['images'] }}" alt="">


@if(isset($vacantion) && is_object($vacantion))
@if(isset($vacantion))


<a {{ ($i != 0) ? 'class="collapsed"' | '' }} data-toggle="collapse" data-parent="#accordion" href="#$c" aria-expanded="{{ ($i != 0) ? 'false' | 'true' }}" aria-controls="$c">{{ $reviews[$i]['name'] }}</a>