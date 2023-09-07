<div>
    <div class="flex overflow-x-scroll space-x-4 p-4 mt-4 mb-4">
        @foreach($products as $product)
        <form action="{{ route('products.show', $product->id) }}" method="GET">
            @csrf
            <button type="submit">
                <div class="bg-white rounded-lg shadow-md flex flex-col mb-4 w-60 h-50"> 
                    <img src="https://www.teveoenmadrid.com/wp-content/uploads/2023/02/goxo-delivery-de-dabiz-munoz-lasana-panipuri-te-veo-en-madrid.jpg" alt="{{$product->name_product}}" class="w-full h-56 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h5>{{$product->name_product}}</h5>
                    </div>
                </div>
            </button>
        </form>
        @endforeach
    </div>
</div>

