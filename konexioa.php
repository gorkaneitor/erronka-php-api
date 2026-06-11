<?php
try {
    // Usamos __DIR__ para crear una ruta relativa exacta al archivo .db
    $db_path = __DIR__ . '/albisteak.db';

    // Conexión PDO para SQLite3 (no lleva usuario ni contraseña)
    $link = new PDO("sqlite:" . $db_path);

    // Configuramos PDO para que lance excepciones si hay errores en el SQL
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Si no encuentra el archivo o falla, muestra el error
    echo "Errorea datu-basera konektatzean: " . $e->getMessage();
    exit();
}
