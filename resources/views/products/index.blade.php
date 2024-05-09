@extends('welcome')

@section('content')

    <h2 class="text-center">Productos</h2>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productCreate">
        Nuevo Producto
    </button>

    <div
        class="table-responsive"
    >
    <br>
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
                        <td>$ {{ $product->price }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#productEdit{{ $product->id }}">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#productDelete{{ $product->id }}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    @include('products.info')
                @endforeach
            </tbody>
        </table>
    </div>

    @include('products.create')

@endsection
