<div>
    <div class="flex overflow-x-scroll space-x-4 p-4 mt-4 mb-4">
        @foreach($products as $product)
        <div class="bg-white rounded-lg shadow-md  flex flex-col"> 
            <img src="#" alt="{{$product->name_product}}" class="w-200 h-140 object-cover rounded-t-lg">
            <div class="p-4">
                <h4>{{$product->name_product}}</h4>
            </div>
        </div>
        @endforeach
    </div>
</div>
