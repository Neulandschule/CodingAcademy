<?php
#phpinfo();
// Datenbankverbindungsinformationen
$host = 'localhost';
$dbname = 'web058';
$user = 'web058';
$pass = 'dein_plesc_password';

try {
    // Erstellen einer neuen PDO-Instanz und Verbindung zur PostgreSQL-Datenbank
    $dsn = "mysql:host=$host;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    echo "Verbindung erfolgreich!<br>";
	
    // SQL-Abfrage erstellen
    $sql = 'SELECT * FROM user';
    $stmt = $pdo->query($sql);

    // Ergebnisse verarbeiten und anzeigen
    $users = $stmt->fetchAll();
    if ($users) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <!-- Fügen Sie hier weitere Spalten hinzu, die Sie anzeigen möchten -->
                </tr>";

        foreach ($users as $user) {
            echo "<tr>
                    <td>{$user['id']}</td>
                    <td>{$user['username']}</td>
                    <td>{$user['email']}</td>
                    <!-- Fügen Sie hier weitere Spalten hinzu, die Sie anzeigen möchten -->
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "Keine Benutzer gefunden.";
    }
	
} catch (PDOException $e) {
    // Fehlerbehandlung
    echo "Verbindungsfehler: " . $e->getMessage();
}
?>
