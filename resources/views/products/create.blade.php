<div class="modal fade" id="productCreate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input
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
                            <option selected>Seleccione Categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" >{{ $category->name }}</option>
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
