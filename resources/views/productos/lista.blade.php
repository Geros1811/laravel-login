<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="bg-dark py-3">
        <h3 class="text-white text-center"> Dashboard para Administrador </h3>
    </div>

    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{ route('productos.crear') }}" class="btn btn-dark">Crear cursos</a>
            </div>
        </div>


        <div class="row d-flex justify-content-center">

            @if (Session::has('success'))
                <div class="col-md-10 my-4">
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                </div>
            @endif


            <div class="col-md-10">
                <div class="card borde-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white text-center">Cursos</h3>
                    </div>


                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th></th>
                                <th>Titulo</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                                <th>Duracion</th>
                                <th>Categoria</th>
                                <th>Fecha de cracion</th>
                                <th>Accion</th>
                            </tr>
                            @if ($productos->isNotEmpty())
                                @foreach ($productos as $product)
                                    <tr>
                                        <th>{{ $product->id }}</th>
                                        <th>

                                            <img width="50"
                                                src="data:image/jpeg;base64,{{ base64_encode($product->ImgC) }}"
                                                alt="Imagen del curso">
                                        </th>
                                        <th>{{ $product->title }}</th>
                                        <th>{{ $product->description }}</th>
                                        <th>${{ $product->price }}</th>
                                        <th>{{ $product->Duracion }}</th>
                                        <th>{{ $product->categoria }}</th>
                                        <th>{{ \Carbon\Carbon::parse($product->created_at)->format('d M, Y') }}</th>
                                        <th>
                                            <a href="{{ route('productos.editar', $product->id) }}"
                                                class="btn btn-dark">Editar</a>

                                            <form id="delete-curso-form-{{ $product->id }}" action="{{ route('productos.destroy', $product->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger my-2" onclick="return confirm('¿Estás seguro de eliminar este curso?')">Eliminar</button>
                                            </form>
                                            
                                        </th>
                                    </tr>
                                @endforeach
                            @endif
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>

</body>

</html>

<script>
    function deleteCurso(id) {
        if (confirm("¿Estas seguro de eliminar este curso?")) {
            document.getElementById("delete-curso-from-" + id).submit();
        }
    }
</script>
