<div class="container d-flex">



    @foreach($boxes as $box)
    @if ($box->prizes->isNotEmpty())
        <div class="card" style="width: 18rem;">
            <img src="{{url('storage/'.$box->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$box->name}}</h5>
            <p class="card-text">{{$box->description}}</p>
            <a href="{{url('open/'.$box->id)}}" class="btn btn-primary">BUY</a>
            <span>${{$box->cost}}</span>
            </div>
        </div>



    @else

    <div class="card bg-secondary" style="width: 18rem;">
        <img src="{{url('storage/'.$box->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{$box->name}}</h5>
          <p class="card-text">{{$box->description}}</p>
          <a href="{{url('open/'.$box->id)}}" class="btn btn-primary">BUY</a>
          <span>${{$box->cost}}</span>
        </div>
    </div>

    @endif
    @endforeach

</div>
