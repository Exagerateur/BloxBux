<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BloxLuck</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sweetalert2-dark.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
</head>
<body>
    <header>
        <h1>BloxLuck Login</h1>
    </header>

    <!-- Login Form -->
    <form id="loginForm">
        <label for="username">Username (ROBLOX)</label>
        <input type="text" id="username" name="username" required>
        <button type="submit">Login</button>
    </form>

    <script>
        $(document).ready(function() {
            // Handle form submission
            $("#loginForm").on("submit", function(event) {
                event.preventDefault();

                var username = $("#username").val();
                
                // Validate the username
                if (username.length < 3 || username.length > 20) {
                    Swal.fire("Invalid Username", "Username must be between 3 and 20 characters long.", "error");
                    return;
                }
                if (!/^[a-zA-Z0-9_]+$/.test(username)) {
                    Swal.fire("Invalid Username", "Username can only contain letters, numbers, and underscores.", "error");
                    return;
                }
                if (username[0] == "_" || username[username.length - 1] == "_") {
                    Swal.fire("Invalid Username", "Username cannot start or end with an underscore.", "error");
                    return;
                }
                if (username.split("_").length > 2) {
                    Swal.fire("Invalid Username", "Username can only have one underscore.", "error");
                    return;
                }

                // Send the username to the server for validation
                $.ajax({
                    url: "php/login_handler.php", // Create this PHP script to handle the login logic
                    type: "POST",
                    data: { username: username },
                    success: function(response) {
                        // Parse the response from the server
                        if (response === "success") {
                            Swal.fire("Logged In!", "You have successfully logged in!", "success")
                                .then(() => {
                                    window.location.href = "index.html"; // Redirect to main page after login
                                });
                        } else {
                            Swal.fire("Error", response, "error");
                        }
                    },
                    error: function() {
                        Swal.fire("Error", "An error occurred. Please try again.", "error");
                    }
                });
            });
        });
    </script>
</body>
</html>
