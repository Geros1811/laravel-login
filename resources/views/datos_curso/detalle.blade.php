<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Curso</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .course-details {
            text-align: center;
            margin-bottom: 30px;
        }

        .course-details h1 {
            margin-bottom: 10px;
            font-size: 24px;
            color: #333;
        }

        .course-details img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .course-info {
            margin-bottom: 30px;
        }

        .course-info p {
            margin: 10px 0;
        }

        form {
            text-align: center;
        }

        .buy-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .buy-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="course-details">
            <h1>{{ $curso->title }}</h1>
            <img src="data:image/jpeg;base64,{{ base64_encode($curso->ImgC) }}" alt="Imagen del curso">
        </div>
        <div class="course-info">
            <p><b>Descripción:</b> {{ $curso->description }}</p>
            <p><b>Duración:</b> {{ $curso->Duracion }}</p>
            <p><b>Precio:</b> ${{ $curso->price }}</p>
        </div>
        
        <!-- Formulario de compra con los datos del cliente -->
        <form action="{{ route('checkout') }}" method="POST">
            @csrf
            <input type="hidden" name="course_id" value="{{ $curso->id }}">
            <input type="hidden" name="name" value="{{ Auth::user()->name }}">
            <input type="hidden" name="email" value="{{ Auth::user()->email }}">
            <button type="submit" class="buy-button">Comprar</button>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('form').addEventListener('submit', function(event) {
                event.preventDefault(); // Evitar que el formulario se envíe automáticamente
    
                // Obtener el valor del campo course_id
                var courseId = document.querySelector('input[name="course_id"]').value;
    
                // Imprimir el valor en la consola del navegador
                console.log('Course ID:', courseId);
    
                // Enviar el formulario manualmente
                this.submit();
            });
        });
    </script>
</body>
</html>
