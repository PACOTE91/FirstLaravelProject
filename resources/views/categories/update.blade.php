@extends("layout.uno")

@section('titulo')
Editar Categoría
@endsection

@section('nav')
<i class="em em-pencil2" aria-role="presentation" aria-label="PENCIL"></i> EDITAR CATEGORIAS {{$category->id}}
@section('link_crear')

<a class="p-2 bg-red-700 hover:bg-red-900" href="{{ route('categories.create') }}">Crear Artículo</a>
@endsection
@endsection

@section('main')   
   
<div class="w-1/2 m-auto p-4 bg-gray-700 rounded">
    <form action="{{route('categories.update',$category)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method("PUT")
        <div class="mb-6 text-left">
          <label for="nombre" class="mb-2 text-xl font-medium text-gray-900">Nombre Categoría</label>
          <input type="text" id="nombre" name="nombre" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" value="{{$category->nombre}}" required>
        </div>


        <div class="mb-6 text-left">
          <label for="descripcion" class="mb-2 text-xl font-medium text-gray-900">Descripción</label>
          <input type="text" id="descripcion" name="descripcion" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" value="{{$category->descripcion}}"  required>
        </div>        
        
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editar</button>
      </form>
</div>

@endsection
