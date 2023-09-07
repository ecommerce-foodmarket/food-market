<div class="bg-white p-4 rounded-lg flex-grow">
    {{-- Pestañas --}}
    <div class="max-w-2xl mx-auto">
        <div class="border-b border-gray-200 dark:border-gray-700 mb-4">
            <ul class="flex flex-nowrap -mb-px" 
            id="myTab" 
            data-tabs-toggle="#myTabContent" 
            role="tablist">
                
                <li class="mr-2" role="presentation">
                    <button class="tab-button inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 
                    rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 
                    dark:text-gray-400 dark:hover:text-gray-300" 
                    id="fish_tab" 
                    data-tabs-target="#fish" 
                    type="button" role="tab" 
                    aria-controls="fish" 
                    aria-selected="false">Fish</button>
                </li>

                <li class="mr-2" role="presentation">
                    <button class="tab-button inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 
                    rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 
                    dark:text-gray-400 dark:hover:text-gray-300" 
                    id="rice_tab" 
                    data-tabs-target="#rice" 
                    type="button" role="tab" 
                    aria-controls="rice" 
                    aria-selected="true">Rice and pasta</button>
                </li>

                <li class="mr-2" role="presentation">
                    <button class="tab-button inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 
                    rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 
                    dark:text-gray-400 dark:hover:text-gray-300" 
                    id="meat_tab" 
                    data-tabs-target="#meat" 
                    type="button" role="tab" 
                    aria-controls="meat" 
                    aria-selected="true">Meat</button>
                </li>

                <li class="mr-2" role="presentation">
                    <button class="tab-button inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 
                    rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 
                    dark:text-gray-400 dark:hover:text-gray-300" 
                    id="vegetables_tab" 
                    data-tabs-target="#vegetables" 
                    type="button" role="tab" 
                    aria-controls="vegetables" 
                    aria-selected="true">Vegetables</button>
                </li>
               
            </ul>
    </div>

        
        
        <div id="myTabContent">

            {{-- Pestaña 1 --}}
            
            <div class="tab-content p-4 rounded-lg" id="fish" role="tabpanel" aria-labelledby="fish_tab">
                @foreach ($categories as $category)
                    @foreach ($category->products as $product)
                        @if ($product->id_category === 1)
                            <div class="flex items-center justify-between border-b border-gray-300 pb-4 mb-4">
                                <div class="flex items-center">
                                    <img src="{{ asset('imagen-producto.jpg') }}" alt="Nombre del Producto" class="h-16 w-16 rounded-lg object-cover">
                                    <div class="ml-4">
                                        <h3>{{ $product->name_product }}</h3>
                                        <p>€{{ $product->price }}</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <form action="{{ route('products.show', $product->id) }}" method="GET">
                                        @csrf
                                        <button type="submit">+</button>
                                    </form>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endforeach
            </div>
  

            {{-- SEGUNDA PESTAÑA --}}

            <div class="tab-content p-4 rounded-lg hidden" 
            id="rice" 
                role="tabpanel" 
                aria-labelledby="rice_tab">

                @foreach ($categories as $category)

                @foreach ($category->products as $product)
                @if ($product->id_category === 2)
                <div class="flex items-center justify-between border-b border-gray-300 pb-4 mb-4">
                    <div class="flex items-center">
                        <img src="{{ asset('imagen-producto.jpg') }}" alt="Nombre del Producto" class="h-16 w-16 rounded-lg object-cover">
                        <div class="ml-4">
                            <h3>{{ $product->name_product }}</h3>
                            <p>€{{ $product->price }}</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <form action="{{ route('products.show', $product->id) }}" method="GET">
                            @csrf
                            <button type="submit">+</button>
                        </form>
                    </div>
                </div>
                @endif
                @endforeach
                @endforeach
            </div>

            {{-- TERCERA PESTAÑA --}}

            <div class="tab-content p-4 rounded-lg hidden" 
            id="meat" 
                role="tabpanel" 
                aria-labelledby="meat_tab">

                @foreach ($categories as $category)

                @foreach ($category->products as $product)
                @if ($product->id_category === 3)
                <div class="flex items-center justify-between border-b border-gray-300 pb-4 mb-4">
                    <div class="flex items-center">
                        <img src="{{ asset('imagen-producto.jpg') }}" alt="Nombre del Producto" class="h-16 w-16 rounded-lg object-cover">
                        <div class="ml-4">
                            <h3>{{ $product->name_product }}</h3>
                            <p>€{{ $product->price }}</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <form action="{{ route('products.show', $product->id) }}" method="GET">
                            @csrf
                            <button type="submit">+</button>
                        </form>
                    </div>
                </div>
                @endif
                @endforeach
                @endforeach
            </div>

            {{-- CUARTA PESTAÑA --}}

            <div class="tab-content p-4 rounded-lg hidden" 
            id="vegetables" 
                role="tabpanel" 
                aria-labelledby="vegetables_tab">

                @foreach ($categories as $category)

                @foreach ($category->products as $product)
                @if ($product->id_category === 4)
                <div class="flex items-center justify-between border-b border-gray-300 pb-4 mb-4">
                    <div class="flex items-center">
                        <img src="{{ asset('imagen-producto.jpg') }}" alt="Nombre del Producto" class="h-16 w-16 rounded-lg object-cover">
                        <div class="ml-4">
                            <h3>{{ $product->name_product }}</h3>
                            <p>€{{ $product->price }}</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <form action="{{ route('products.show', $product->id) }}" method="GET">
                            @csrf
                            <button type="submit">+</button>
                        </form>
                    </div>
                </div>
                @endif
                @endforeach
                @endforeach
            </div>

     
            
        


        </div>

       

        




   
    
</div>
