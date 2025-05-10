<?php
// Configuración de la base de datos
define('DB_HOST', 'localhost');
define('DB_USER', 'usuario');
define('DB_PASS', 'contraseña');
define('DB_NAME', 'gasolinera_xyz');

// Configuración del sitio
define('SITE_NAME', 'Gasolinera Premium XYZ');
define('SITE_EMAIL', 'contacto@gasolinera-premium.com');

// Configuración para el envío de emails
define('MAIL_HOST', 'smtp.example.com');
define('MAIL_USER', 'correo@example.com');
define('MAIL_PASS', 'contraseña_email');

// Iniciar sesión
session_start();

// Conexión a la base de datos
try {
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>