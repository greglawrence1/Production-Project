<h1>Climbing Website</h1>
<div class="grid grid-cols-4">
    @foreach($products as $product)
        <x-product-card :product="$product"/>
    @endforeach
</div>