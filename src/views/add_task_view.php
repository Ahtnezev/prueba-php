<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Agregar Task</title>
</head>
<body class="bg-gray-300 flex items-center justify-center h-screen">
    <div class="max-w-sm w-full bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-semibold mb-4">Crear nueva task</h1>
        <form action="add_task.php" method="POST">
            <label for="title">Título:</label>
            <input type="text" id="title" name="title" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            <br>
            <label for="description">Descripción:</label>
            <textarea id="description" name="description" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            <br><br>
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Agregar Task
            </button>
        </form>
    </div>
</body>
</html>
