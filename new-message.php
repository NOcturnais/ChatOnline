

<?php
if (empty($_POST['message'])) {
    http_response_code(400);
    header('Content-Type: text/plain');
    echo 'expect a message parameter';
    exit(1);
}
echo $_POST['message'];

$get = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if (!empty($get['dialogue'])) {
try {
$pdo = new PDO('mysql:host=localhost;dbname=Ajax_chat', 'ajax-chat-user', 'ajax');
        // Transforme toutes les erreurs en exception.
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare('INSERT INTO `group` (id, text, timestamp) VALUES (:id, :text, :timestamp ;');

        if (empty($get['dialogue'])) {
            $get['dialogue'] = NULL;
        }$stmt->execute([
            'dialogue' => $get['dialogue'],
            // 'start' => $post['start'],
           
        ]);
}
        catch (Exception $e) {
        header('Content-Type: text/plain');
        echo 'fail to contact DB: ' . $e->getMessage();
        exit(1);
    }
}
