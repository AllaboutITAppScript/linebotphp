<?php
$host     = getenv('DB_HOST') ?: 'ep-flat-sunset-anb4bvi6-pooler.c-6.us-east-1.aws.neon.tech';
$port     = getenv('DB_PORT') ?: '5432';
$dbname   = getenv('DB_NAME') ?: 'neondb';
$username = getenv('DB_USER') ?: 'neondb_owner';
$password = getenv('DB_PASSWORD') ?: 'npg_3SWnx6DkNzqV';

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require";
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("เชื่อมต่อฐานข้อมูลล้มเหลว: " . $e->getMessage());
}
?>
