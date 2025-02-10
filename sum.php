<?php
// Get JSON input from frontend
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['a']) || !isset($data['b'])) {
    echo json_encode(["error" => "Missing parameters"]);
    exit;
}

// Prepare data for Python script
$postData = json_encode([
    "a" => intval($data['a']),
    "b" => intval($data['b'])
]);

// Initialize cURL request to Flask API
$ch = curl_init("http://localhost:5000/sum");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

// Execute cURL and get response
$response = curl_exec($ch);
curl_close($ch);

// Return JSON response to frontend
header("Content-Type: application/json");
echo $response;
?>
