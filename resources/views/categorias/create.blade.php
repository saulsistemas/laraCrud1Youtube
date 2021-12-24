<form action="{{ route('categorias.store') }}" method="POST">
    @csrf
    <div>
        <label for="">Código</label>
        <input type="text" name="codigo">
    </div>
    <div>
        <label for="">nombre</label>
        <input type="text" name="nombre">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>