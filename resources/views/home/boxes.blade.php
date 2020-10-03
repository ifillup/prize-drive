<div class="card-list rounded">



    @foreach($boxes as $box)
    @if ($box->prizes->isNotEmpty())
    <a href="{{url('show/'.$box->id)}}">
        <div id="{{$box->id}}" class="box card bg-light"   >
            <img src="{{env('AWS_URL').'/'.$box->image}}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$box->name}}</h5>

            <a href="{{url('open/'.$box->id)}}" class="btn btn-primary">BUY ${{$box->price}}</a>

            </div>
        </div>
    </a>

    {{--  --}}

    @else

    <div class="card box bg-light"   >
        <img src="{{env('AWS_URL').'/'.$box->image}}" class="card-img-top"  alt="...">
        <div class="card-body">
        <h5 class="card-title">{{$box->name}}</h5>
          <p class="card-text">{{$box->description}}</p>

        </div>
    </div>

    @endif
    @endforeach

</div>
