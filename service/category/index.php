<?php
header('Content-Type: application/json');
require_once '../connect.php';

$stmt = $conn->query('SELECT * FROM categories');
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// PDOstatment :: fetch styles */
if (count($result)){
    $response = array(
        'status' => true,
        'response' => $result,
        'message' => 'ดึงข้อมูลสำเร็จ'
    );
    http_response_code(200);
    echo json_encode($response);
} else {
    $response = array(
        'status' => false,
        'message' => 'ดึงข้อมูลสำเร็จ'
    );
    http_response_code(400);
    echo json_encode($response);
}
