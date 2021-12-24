<a href="{{ route('categorias.create') }}">Crear</a>
<table border="1">
    <thead>
        <th>id</th>
        <th>codigo</th>
        <th>nombre</th>
        <th>opciones</th>
    </thead>
    <tbody>
        @foreach ($categorias as $categoria)
            <tr>
                <td>{{$categoria->id}}</td>
                <td>{{$categoria->codigo}}</td>
                <td>{{$categoria->nombre}}</td>
                <td>
                    <a href="{{ route('categorias.show', $categoria->id) }}">+</a>
                    <a href="{{ route('categorias.edit', $categoria->id) }}">Editar</a>
                    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>