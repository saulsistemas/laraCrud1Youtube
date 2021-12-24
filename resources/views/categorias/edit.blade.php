<form action="{{ route('categorias.update',$categoria->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="">Código</label>
        <input type="text" name="codigo" value="{{$categoria->codigo}}">
    </div>
    <div>
        <label for="">nombre</label>
        <input type="text" name="nombre" value="{{$categoria->nombre}}">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>