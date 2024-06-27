<?php
header('Content-Type: application/json');

//LOCAL CORS PROBLEM 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

$coding_names = ['Ludwig', 'Aron', 'Lisa', 'Valentin', 'Vincent', 'Theo', 'Julius', 'Julian', 'Niklas', 'Laurenz', 'Johanna', 'Daniela', 'Daniel', 'Garid'];

try {
    // Empfangen und dekodieren der JSON-Daten
    $input = json_decode(file_get_contents('php://input'), true);

    // Überprüfen, ob der Name gesetzt ist
    if (isset($input['name'])) {
        $name = $input['name'];

        if (in_array($name, $coding_names)) {
            $greed = '0100100001100001011011000110110001101111 ' . $name; 
        } else {
            $greed = 'Hi ' . $name; 
        }

        // Erfolgsantwort senden
        echo json_encode(['success' => true, 'message' => $greed]);
    } else {
        throw new Exception('Name nicht gesetzt');
    }
} catch (Exception $e) {
    // Fehlerantwort senden
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
?>
