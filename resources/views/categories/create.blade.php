<div class="modal fade" id="categoryCreate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Categoria</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('categories.store') }}" method="POST">
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
                            placeholder="Nombre Categoria"
                        />
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripcion</label>
                        <input
                            type="text"
                            class="form-control"
                            name="description"
                            id="description"
                            placeholder="Agregue una Descripcion"
                        />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
