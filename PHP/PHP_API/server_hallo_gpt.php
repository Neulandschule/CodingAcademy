<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');


try {
    // Empfangen und dekodieren der JSON-Daten
    $input = json_decode(file_get_contents('php://input'), true);

    // Überprüfen, ob der Name gesetzt ist
    if (isset($input['name']) && isset($input['description'])) {
        $name = $input['name'];
        $description = $input['description'];

        // OpenAI API-Schlüssel
        $apiKey = 'sk-vollgeheim';

        // Prompt für die API erstellen
        $userMessage = "Finde eine passende Begrüßung für den Namen $name. Beschreibung der Person: '$description'. Gib nur den Begrüßungstext zurück.";

        // OpenAI API-Endpunkt
        $url = 'https://api.openai.com/v1/chat/completions';

        // Daten für die Anfrage
        $data = [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => 'You are a helpful assistant.'],
                ['role' => 'user', 'content' => $userMessage]
            ]
        ];

        // cURL-Session initialisieren
        $ch = curl_init($url);

        // cURL-Optionen setzen
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $apiKey
        ]);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        // Anfrage ausführen und Antwort erhalten
        $response = curl_exec($ch);

        // Fehlerprüfung
        if (curl_errno($ch)) {
            throw new Exception(curl_error($ch));
        }

        // cURL-Session schließen
        curl_close($ch);

        // Antwort dekodieren
        $responseData = json_decode($response, true);

        // Begrüßung aus der Antwort extrahieren
        if (isset($responseData['choices'][0]['message']['content'])) {
            $greeting = trim($responseData['choices'][0]['message']['content']);

            // Erfolgsantwort senden
            echo json_encode(['success' => true, 'message' => $greeting]);
        } else {
            throw new Exception('Ungültige Antwort von der API');
        }
    } else {
        throw new Exception('Name nicht gesetzt');
    }
} catch (Exception $e) {
    // Fehlerantwort senden
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
?>