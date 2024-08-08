<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Edit Task</title>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="max-w-sm w-full bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-semibold mb-4">Modificar Task</h1>
        <form action="edit_task.php" method="POST">
            <input type="hidden" name="id" value="<?= htmlspecialchars($task['id']) ?>">
            
            <label for="title" class="text-violet-600">Título:</label>
            <input type="text" id="title" name="title" value="<?= htmlspecialchars($task['title']) ?>" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            <br>
            <label for="description">Descripción:</label>
            <textarea id="description" name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                required><?= htmlspecialchars($task['description']) ?></textarea>
            <br>
            <label for="status">Estatus:</label>
            <select id="status" name="status">
                <option value="pendiente" <?= $task['status'] == 'pendiente' ? 'selected' : '' ?>>Pendiente</option>
                <option value="en progreso" <?= $task['status'] == 'en progreso' ? 'selected' : '' ?>>En progreso
                </option>
                <option value="completada" <?= $task['status'] == 'completada' ? 'selected' : '' ?>>Completada
                </option>
            </select>
            <br><br>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Actualizar Task
            </button>
        </form>
    </div>
</body>

</html>