<?php

$app = require __DIR__ . '/../bootstrap.php';

$question = $_POST['question'] ?? '';
$answer = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $question) {
    $answer = $app->getResponse($question);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Chat IA</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-slate-900 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-xl bg-slate-800 rounded-2xl shadow-2xl p-8 space-y-6">

        <h1 class="text-3xl font-bold text-white text-center">
            🤖 Chat con IA
        </h1>

        <form method="POST" class="flex gap-3">

            <input type="text" name="question" value="<?= htmlspecialchars($question, ENT_QUOTES, 'UTF-8') ?>"
                placeholder="Escribe tu pregunta..." required
                class="flex-1 rounded-xl px-4 py-3 bg-slate-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-400 transition" />

            <button
                class="bg-cyan-500 hover:bg-cyan-400 text-white font-semibold px-6 py-3 rounded-xl transition transform hover:scale-105 shadow-lg">
                Enviar
            </button>

        </form>

        <?php if ($answer): ?>

        <div class="bg-slate-700 p-4 rounded-xl text-gray-200">

            <p class="text-sm text-gray-400 mb-2">
                Respuesta de la IA
            </p>

            <p class="text-lg leading-relaxed">
                <?= htmlspecialchars($answer, ENT_QUOTES, 'UTF-8') ?>
            </p>

        </div>

        <?php endif; ?>

    </div>

</body>

</html>