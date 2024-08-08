<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Crear usuario</title>
</head>
<body class="bg-gray-300 flex items-center justify-center h-screen">
    <div class="max-w-sm w-full bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-semibold mb-4">Registrarse</h1>
        <form action="register.php" method="POST">
            <label for="username">Nombre de usuario:</label>
            <input type="text" id="username" name="username" required
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            <br><br>
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Registrarse
            </button>
        </form>
    </div>
</body>

</html>