
<section class="products-thumbs">
@foreach ($products as $product)
    <div class="border-wrap"><img src="{{env('AWS_URL').'/'. $product->image }}" alt="" class="rounded-circle product-thumb"></div>
@endforeach
</section>
