@extends("layout.uno")

@section('titulo')
Editar Categoría
@endsection

@section('nav')
<i class="em em-pencil2" aria-role="presentation" aria-label="PENCIL"></i> EDITAR ARTICULO {{$item->id}}

@section('link_crear')
<a class="p-2 bg-red-700 hover:bg-red-900" href="{{ route('items.create') }}">Crear Artículo</a>
@endsection
@endsection


@section('main')   

<div class="w-1/2 m-auto p-4 bg-gray-700 rounded">
    <form action="{{ route('items.update',$item) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")

        <div class="mb-6 text-left">
            <label for="nombre" class="mb-2 text-xl font-medium text-gray-900">Nombre Artículo</label>
            <input type="text" id="nombre" name="nombre" value="{{$item->nombre}}"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="Nombre Categoría" required>
            <div class="m-2">
                @error('nombre')
                    <p class="p-2 text-sm bg-red-600 rounded ">{{ $message }}</p>
                @enderror
            </div>
        </div>


        <div class="mb-6 text-left">
            <label for="stock" class="mb-2 text-xl font-medium text-gray-900">Stock </label>
            <input type="text" id="stock" name="stock" value="{{$item->stock}}"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="Descripcion" required>

            <div class="m-2">
                @error('stock')
                    <p class="p-2 text-sm bg-red-600 rounded ">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <div class="mb-6 text-left">
            <label for="precio" class="mb-2 text-xl font-medium text-gray-900">Precio </label>
            <input type="text" id="precio" name="precio" value="{{$item->precio}}"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="Precio (XXX.XX)" required>

            <div class="m-2">
                @error('precio')
                    <p class="p-2 text-sm bg-red-600 rounded ">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <div class="mb-6 text-left">
            <label for="categoria" class="mb-2 text-xl font-medium text-gray-900">Categoría </label>
            <select type="select" id="categoria" name="category_id" value="{{$item->id}}"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                 required>
                 @foreach($categories as $category)
                    <option value="{{$category->id}}">
                        {{$category->nombre}}
                    </option>
                 @endforeach
            </select>     

            <div class="m-2">
                @error('categoría')
                    <p class="p-2 text-sm bg-red-600 rounded ">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editar</button>
    </form>
</div>
   

@endsection
