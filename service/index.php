<?php
header('Content-Type: application/json');
// * Connect include */
require_once 'connect.php';

$query = $conn->query('SELECT * FROM products');
$result = $query->fetchAll(PDO::FETCH_ASSOC);

// PDOstatment :: fetch styles */

