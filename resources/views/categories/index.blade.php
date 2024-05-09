@extends('welcome')

@section('content')

    <h2 class="text-center">Categorias</h2>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoryCreate">
        Nueva Categoria
    </button>

    <div
        class="table-responsive"
    >
        <br>
        <table
            class="table table-primary"
        >
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr class="text-center">
                        <td scope="row">{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#categoryEdit{{ $category->id }}">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#categoryDelete{{ $category->id }}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    @include('categories.info')
                @endforeach
            </tbody>
        </table>
    </div>

    @include('categories.create')

@endsection
