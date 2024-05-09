<!-- Modal Editar -->
<div class="modal fade" id="productEdit{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editando: {{ $product->id }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input
                            value="{{ $product->name }}"
                            type="text"
                            class="form-control"
                            name="name"
                            id="name"
                            placeholder="Aregar Nombre"
                        />
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Cantidad</label>
                        <input
                            value="{{ $product->stock }}"
                            type="text"
                            class="form-control"
                            name="stock"
                            id="stock"
                            placeholder="Aregar Stock"
                        />
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Precio</label>
                        <input
                            value="{{ $product->price }}"
                            type="text"
                            class="form-control"
                            name="price"
                            id="price"
                            placeholder="Aregar Precio"
                        />
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Categoria</label>
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach ($categories as $category)
                                @if ($category->id === $product->category_id)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Eliminar -->
<div class="modal fade" id="productDelete{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminando: {{ $product->name }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Estas seguro de eliminar <strong> {{ $product->name }} ? </strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>
