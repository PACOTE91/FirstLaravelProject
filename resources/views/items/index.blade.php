@extends("layout.uno")
@section('estilo')
    .table {
    border-spacing: 0 15px;
    }

    i {
    font-size: 1rem !important;
    }

    .table tr {
    border-radius: 20px;
    }

    tr td:nth-child(n+7),
    tr th:nth-child(n+7) {
    border-radius: 0 .625rem .625rem 0;
    }

    tr td:nth-child(1),
    tr th:nth-child(1) {
    border-radius: .625rem 0 0 .625rem;
    }
@endsection

@section('titulo')
Index Artículos
@endsection

{{-- Inicio Nav --}}
@section('nav')
<i class="em em-notebook_with_decorative_cover" aria-role="presentation" aria-label="NOTEBOOK WITH DECORATIVE COVER"></i> ARTICULOS

{{-- Link Crear Elemento --}}
@section('link_crear')
<a class="p-2 bg-red-700 hover:bg-red-900" href="{{ route('items.create') }}">Crear Artículo</a>
@endsection

@endsection


@section('main')

    {{-- Si existe la variable de sesion --}}
    @if (session('mensaje'))
        <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3" role="alert">
            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path
                    d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
            </svg>
            <p>{{ session('mensaje') }}</p>
        </div>
    @endif

    <table class="table text-gray-400 border-separate space-y-6 text-sm m-auto">
        <thead class="bg-gray-800 text-gray-500">
            <tr>
                <th class="p-3 text-center">ID</th>
                <th class="p-3 text-center">Nombre</th>
                <th class="p-3 text-center">Stock (uds.)</th>
                <th class="p-3 text-center">Precio (€)</th>
                <th class="p-3 text-center">Categoría (ID)</th>
                <th colspan="2" class="p-3 text-center">Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr class="bg-gray-800">
                    <td class="p-3">
                        <div class="flex align-items-center">
                            <div class="ml-3">
                                <div class="text-gray-500">{{ $item->id }}</div>
                            </div>
                            <img class="rounded-full h-12 w-12  object-cover"
                                src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80"
                                alt="unsplash image">

                        </div>
                    </td>
                    <td class="p-3">
                        {{ $item->nombre }}
                    </td>

                    <td class="p-3 font-bold">
                        {{ $item->stock }} uds.
                    </td>

                    <td class="p-3 font-bold">
                        {{ $item->precio }} €
                    </td>

                    <td class="p-3 font-bold">
                        {{ $item->category_id }}
                    </td>


                    <td class="p-3 ">
                        <form action="{{ route('items.destroy', $item) }}" method="post">
                            @csrf
                            @method("delete")

                            <button type="submit"
                                onclick="return confirm('Estas seguro de querer eliminar este artículo')">Eliminar</button>

                        </form>
                        <a href="{{route("items.edit", $item)}}" class="text-gray-400 hover:text-gray-100  mx-2">
                            <i class="material-icons-outlined text-base">Editar</i>
                        </a>
                    </td>
                </tr>

            @endforeach

        </tbody>

    </table>
    <div>
        {{ $items->links() }}
    </div>

@endsection
