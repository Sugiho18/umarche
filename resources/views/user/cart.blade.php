<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            カート
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(count($products) > 0) 
                        @foreach($products as $product) 
                        <div class="md:flex md:items-center mb-2">
                            <div class="md:w-3/12">
                                @if($product->imageFirst->filename !== null) 
                                    <img src="{{ asset('storage/products/' . $product->imageFirst->filename )}}"> 
                                @else 
                                    <img src=""> 
                                @endif </div>
                            <div class="md:w-4/12 ">{{ $product->name }}</div> 
                        <div class="md:w-3/12  ">
                            <div>{{ $product->pivot->quantity }}個</div>
                            <div >{{ number_format($product->pivot->quantity * $product->price )}}円(税込)</div> 
                        </div>
                        <form method="post" action="{{route('user.cart.delete', 
                        ['item' => $product->id ])}}"> 
                        @csrf 
                         <button class="md:w-2/12"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                          </button> 
                        </form>
                            </div> 
                        @endforeach 
                        </div>
                     <div>
                        <div class="md:w-3/12">合計金額: {{ number_format($totalPrice)}}円(税込)</div> 
                    </div>
                    <div>
                        <button onclick="location.href='{{ route('user.cart.checkout')}}'" 
                        class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded" >購入する</button>
                    </div>
                        @else 
                        カートに商品が入っていません。 
                        @endif
                
            </div>
        </div>
    </div>
</x-app-layout>
