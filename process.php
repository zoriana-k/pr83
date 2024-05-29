<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Результати обчислень через POST</title>
</head>
<body>
    <h2>Результати обчислень через POST</h2>
    <?php
    // Отримання змінних з методу POST
    $c = $_POST['c'] ?? 0; // за замовчуванням 0, якщо параметр не заданий
    $d = $_POST['d'] ?? 0; // за замовчуванням 0, якщо параметр не заданий

    // Перевірка на введення чисел
    if (!is_numeric($c) || !is_numeric($d)) {
        echo "Будь ласка, введіть числа.";
    } else {
        // Обчислення результатів
        $sum = $c + $d;
        $product = $c * $d;
        $difference = $c - $d;
        $quotient = $d != 0 ? $c / $d : "Ділення на нуль";

        // Виведення результатів
        echo "<p>Сума чисел c і d: $sum</p>";
        echo "<p>Добуток чисел c і d: $product</p>";
        echo "<p>Різниця чисел c і d: $difference</p>";
        echo "<p>Частка чисел c і d: $quotient</p>";
    }
    ?>
</body>
</html>
