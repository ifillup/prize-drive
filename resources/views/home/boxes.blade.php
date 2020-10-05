<section class="box-list rounded">



    @foreach($boxes as $box)
    @if ($box->prizes->isNotEmpty())

        <article id="{{$box->id}}" class="box"   >
              <a href="{{url('show/'.$box->id)}}">
                  <img src="{{env('AWS_URL').'/'.$box->image}}" class="" alt="...">
              </a>
            <span class="">{{$box->name}}</span>

            <a href="{{url('open/'.$box->id)}}" class="buy-btn">$ {{$box->price}}</a>


        </article>


    {{--  --}}

    @else

    <article class="box"   >
        <img src="{{env('AWS_URL').'/'.$box->image}}" class="card-img-top"  alt="...">

        <span class="">{{$box->name}}</span>



    </article>

    @endif
    @endforeach

</section>
