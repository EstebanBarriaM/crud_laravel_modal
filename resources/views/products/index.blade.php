@extends('welcome')

@section('content')

    <h2 class="text-center">Productos</h2>
    <div
        class="table-responsive"
    >
        <table
            class="table table-primary"
        >
            <thead >
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="text-center">
                        <td scope="row">{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->category_id }}</td>
                        <td>Editar | Eliminar</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
