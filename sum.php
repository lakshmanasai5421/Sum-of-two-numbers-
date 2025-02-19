<?php
// Get JSON input from frontend (index.html)
$data = json_decode(file_get_contents("php://input"), true);

// Check if values 'a' and 'b' are provided
if (!isset($data['a']) || !isset($data['b'])) {
    echo json_encode(["error" => "Missing parameters"]);
    exit;
}

// Prepare data to send to Flask API
$postData = json_encode([
    "a" => intval($data['a']),
    "b" => intval($data['b'])
]);

// Initialize cURL request to Flask API (running on your server IP)
$ch = curl_init("http://15.207.6.165:5000/sum");  // URL of Flask API
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  // Get response back
curl_setopt($ch, CURLOPT_POST, true);  // POST request
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);  // Data to send
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);  // Set content type

// Execute the request and capture the response
$response = curl_exec($ch);
curl_close($ch);

// Return JSON response (will be a downloadable file)
header("Content-Type: application/json");
header("Content-Disposition: attachment; filename=result.json");
echo $response;
?>
