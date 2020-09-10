test items in the requested lootbox <br>
{{$box->name}} <br>
@foreach ($box->prizes as $prize)
    {{$prize}} <br>
@endforeach
