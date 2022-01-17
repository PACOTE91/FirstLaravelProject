@extends("layout.dos")
@section("titulo")
Index Proyecto
@endsection

@section("main")
<h1 class="text-3xl md:text-4xl font-medium mb-2 uppercase">Bienvenido a mi Proyecto de Laravel</h1>
<div class="p-5 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-5 bg-white text-black">
    <!--Card 1-->
    <div class="rounded overflow-hidden shadow-lg">
      <img class="w-1/4 inline" src="{{asset("/img/categories.png")}}" alt="Categorías">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Categorías</div>
        <p class="text-gray-700 text-base">
          Acceder al listado de Categorías
        </p>
      </div>
      <div class="px-6 pt-4 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 hover:underline"><a href="{{route("categories.index")}}">Ir a Categorías</a></span>
        
      </div>
    </div>
    <!--Card 2-->
    <div class="rounded overflow-hidden shadow-lg text-center">
      <img class="w-1/2 inline" src="{{asset("/img/items.png")}}" alt="Artículos">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Artículos</div>
        <p class="text-gray-700 text-base">
          Acceder al listado de Artículos

        </p>
      </div>
      <div class="px-6 pt-4 pb-2">
        <span class="inline-block hover:underline bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><a href="{{route("items.index")}}">Ir a Artículos</a></span>

      </div>
    </div>

    
  </div>
</div>

@endsection