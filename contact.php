<?php
$message_sent = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    if (empty($name) || empty($email) || empty($message)) {
        $error = 'Пожалуйста, заполните все поля';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Введите корректный email';
    } else {
        $data = "---\nДата: " . date('Y-m-d H:i:s') . "\nИмя: $name\nEmail: $email\nСообщение: $message\n---\n\n";
        file_put_contents('messages.txt', $data, FILE_APPEND);
        $message_sent = true;
    }
}

include '../includes/header.php';
?>
<main>
    <h1>Контакты</h1>
    
    <?php if ($message_sent): ?>
        <p style="color: green; background: #e0ffe0; padding: 10px;">✅ Спасибо! Ваше сообщение отправлено.</p>
    <?php endif; ?>
    
    <?php if ($error): ?>
        <p style="color: red; background: #ffe0e0; padding: 10px;">❌ <?= $error ?></p>
    <?php endif; ?>
    
    <form method="post" style="max-width: 400px;">
        <div style="margin-bottom: 10px;">
            <input type="text" name="name" placeholder="Имя" required style="width: 100%; padding: 8px;">
        </div>
        <div style="margin-bottom: 10px;">
            <input type="email" name="email" placeholder="Email" required style="width: 100%; padding: 8px;">
        </div>
        <div style="margin-bottom: 10px;">
            <textarea name="message" placeholder="Сообщение" required rows="5" style="width: 100%; padding: 8px;"></textarea>
        </div>
        <button type="submit" style="background: #007bff; color: white; padding: 10px 20px; border: none;">Отправить</button>
    </form>
</main>
<?php include '../includes/footer.php'; ?><?php include '../includes/header.php'; ?>
<main>
    <h1>Контакты</h1>
    <form method="post">
        <input type="text" name="name" placeholder="Имя">
        <input type="email" name="email" placeholder="Email">
        <textarea name="message"></textarea>
        <button type="submit">Отправить</button>
    </form>
</main>
<?php include '../includes/footer.php'; ?>

