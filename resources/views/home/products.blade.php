
<section class="products-thumbs">
@foreach ($products as $product)
    <div class="border-wrap"><img src="{{env('AWS_URL').'/'. $product->image }}" alt="" class="rounded-circle product-thumb"></div>
@endforeach

{{-- <div class="border-wrap"><img src="storage/knife.png" alt="" class="col-2 rounded-circle"></div>
    <div class="border-wrap"><img src="storage/knife.png" alt="" class="col-2 rounded-circle"></div>
        <div class="border-wrap"><img src="storage/knife.png" alt="" class="col-2 rounded-circle"></div>
            <div class="border-wrap"><img src="storage/knife.png" alt="" class="col-2 rounded-circle"></div>
                <div class="border-wrap"><img src="storage/knife.png" alt="" class="col-2 rounded-circle"></div>
                    <div class="border-wrap"><img src="storage/knife.png" alt="" class="col-2 rounded-circle"></div>
                    <div class="border-wrap"><img src="storage/knife.png" alt="" class="col-2 rounded-circle"></div>
                    <div class="border-wrap"><img src="storage/knife.png" alt="" class="col-2 rounded-circle"></div>
                        <div class="border-wrap"><img src="storage/knife.png" alt="" class="col-2 rounded-circle"></div>
                            <div class="border-wrap"><img src="storage/knife.png" alt="" class="col-2 rounded-circle"></div>
                                <div class="border-wrap"><img src="storage/knife.png" alt="" class="col-2 rounded-circle"></div>
                                    <div class="border-wrap"><img src="storage/knife.png" alt="" class="col-2 rounded-circle"></div> --}}
</section>
