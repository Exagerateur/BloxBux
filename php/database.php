<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Status</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Database Status</h1>

        <!-- You can display a message from the backend PHP file -->
        <p id="statusMessage"></p>

        <script>
            // Example JavaScript code to dynamically load status from PHP
            fetch('database.php', { method: 'GET' })
                .then(response => response.json())
                .then(data => {
                    document.getElementById('statusMessage').textContent = data.message;
                })
                .catch(error => {
                    document.getElementById('statusMessage').textContent = "Error loading database status.";
                });
        </script>
    </div>
</body>
</html>
