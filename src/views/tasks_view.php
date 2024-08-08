<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Tasks</title>
</head>
<body>
    <div class="container mx-auto px-4 pt-4">
        <h1 class="text-2xl font-semibold mb-4">Tasks</h1>
        <div class="mb-4">
            <a href="add_task.php" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
                Agregar Task
            </a>
            <a href="logout.php" onclick="return confirm('¿Confirmar cerrrar sesión?')" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                Cerrar sesión
            </a>
        </div>
        <ul class="bg-white shadow-md rounded-lg p-6 w-96">
            <?php foreach ($tasks as $task): ?>
                <li class="border-b border-gray-200 py-2">
                    <h2 class="text-violet-600"><?= htmlspecialchars($task['title']) ?></h2>
                    <p><?= htmlspecialchars($task['description']) ?></p>
                    <p class="text-green-800">Estatus: <?= htmlspecialchars($task['status']) ?></p>
                    <div class="my-3">
                        <a href="edit_task.php?id=<?= $task['id'] ?>" class="text-blue-500 mr-3">Modificar</a>
                        <a href="delete_task.php?id=<?= $task['id'] ?>" class="text-pink-600" onclick="return confirm('¿Confirmar eliminar task?')">Eliminar</a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
