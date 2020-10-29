<h4 class='align-self-center mb-2'>featured boxes</h4>
<div class="feature">
    @foreach($boxes as $box)
    @if ($box->prizes->isNotEmpty())
        <article id="{{$box->id}}" class="featured"   >
              <a href="{{url('show/'.$box->id)}}">
                  <img src="{{env('AWS_URL').'/'.$box->image}}" class="" alt="...">
              </a>
        </article>
    @endif
    @endforeach
</div>
