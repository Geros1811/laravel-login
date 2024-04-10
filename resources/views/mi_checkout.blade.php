<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
    <h1>Checkout</h1>
    <form id="checkout-form">
        <!-- Campos de información del usuario -->
        <input type="text" id="name" placeholder="Nombre">
        <input type="email" id="email" placeholder="Correo electrónico">
        <!-- Otros campos de información del usuario -->

        <!-- Botón de pago de Stripe -->
        <div id="stripe-payment-button"></div>
    </form>

    <!-- Script para cargar Stripe.js y manejar el pago -->
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        // Configurar la clave pública de Stripe
        var stripe = Stripe('pk_test_51OXSQHDoFxv8ulDuXQIF5uqqHZ91Wouine8p7tTzQgni3e584nooTs5wcNTbEZDLj9p5JbyKRfYvXIfxkkzITSxI00zJiuWwSO');

        // Configurar el formulario de checkout de Stripe
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        cardElement.mount('#stripe-payment-button');

        // Capturar los datos del formulario de Stripe y enviarlos al backend
        document.getElementById('checkout-form').addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(cardElement).then(function(result) {
                if (result.error) {
                    console.error(result.error);
                } else {
                    var token = result.token.id;
                    var name = document.getElementById('name').value;
                    var email = document.getElementById('email').value;
                    var courseId = obtenerCourseId(); // Implementa esta función para obtener el ID del curso
                    var status = 'pending'; // Opcional: establece el estado de la transacción

                    // Enviar los datos al backend
                    enviarDatosAlBackend(token, name, email, courseId, status);
                }
            });
        });

        // Función para enviar los datos al backend
        function enviarDatosAlBackend(token, name, email, courseId, status) {
            var data = {
                token: token,
                name: name,
                email: email,
                courseId: courseId,
                status: status
            };

            fetch('/procesar-transaccion', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            }).then(function(response) {
                return response.json();
            }).then(function(data) {
                console.log(data);
                // Manejar la respuesta del backend
            }).catch(function(error) {
                console.error('Error:', error);
            });
        }
    </script>
</body>
</html>