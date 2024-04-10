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
                <a href="{{ route('productos.productos') }}" class="btn btn-dark">Cursos</a>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card borde-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white text-center">Editar curso</h3>
                    </div>

                    <form enctype="multipart/form-data" action="{{ route('productos.update', $producto->id) }}"
                        method="post">
                        @method('put')
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="title" class="form-label h5">Titulo</label>
                                <input value="{{ old('title', $producto->title) }}" type="text"
                                    class="@error('title') is-invalid @enderror form-control form-control-lg"
                                    placeholder="Titulo" name="title">
                            </div>
                            @error('title')
                                <p class="invalid-feedback"> {{ $message }} </p>
                            @enderror
                            <div class="mb-3">
                                <label for="description" class="form-label h5">Descripción</label>
                                <textarea value="{{ old('description') }}" type="text" class="form-control" placeholder="Descripción"
                                    name="description" cols="20" rows="5"> {{ $producto->description }} </textarea>
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label h5">Precio</label>
                                <input value="{{ old('price', $producto->price) }}" type="text"
                                    class="@error('price') is-invalid @enderror form-control form-control-lg"
                                    placeholder="Precio" name="price">
                            </div>
                            @error('price')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                            <div class="mb-3">
                                <label for="Duracion" class="form-label h5">Duración</label>
                                <input value="{{ old('Duracion', $producto->Duracion) }}" type="text"
                                    class="@error('Duracion') is-invalid @enderror form-control form-control-lg"
                                    placeholder="Duración" name="Duracion">
                            </div>

                            @error('Duracion')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                            <div class="mb-3">
                                <label for="categoria" class="form-label h5">categoria</label>
                                <input value="{{ old('categoria', $producto->categoria) }}" type="text"
                                    class=" @error('categoria') is-invalid @enderror form-control form-control-lg"
                                    placeholder="categoria" name="categoria">
                            </div>
                            @error('categoria')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                            <div class="mb-3">
                                <label for="imgC" class="form-label h5">Imagen</label>
                                <input type="file" class="form-control form-control-lg" name="imgC">

                                <img class="w-50 my-3 "
                                    src="data:image/jpeg;base64,{{ base64_encode($producto->ImgC) }}"
                                    alt="Imagen del curso">
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-lg btn-primary">Actualizar Curso</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
