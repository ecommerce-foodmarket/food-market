<div>
    <div class="flex overflow-x-scroll space-x-4 p-4 mt-4 mb-4">
        @foreach($products as $product)
        <div class="bg-white rounded-lg shadow-md flex flex-col mb-4" style="width: 12.5rem; height: auto; flex-shrink: 0;">
            <img src="{{ asset('images/Products/'.$product->picture) }}" alt="{{$product->name_product}}" class="w-full h-56 object-cover rounded-t-lg">
            <div class="p-4">
                <h5>{{$product->name_product}}</h5>
            </div>
        </div>
        @endforeach
    </div>
</div>

