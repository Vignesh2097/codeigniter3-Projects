<!-- login_view.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <form id="login-form">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#login-form").submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                
                $.ajax({
                    url: "<?php echo site_url('Auth/login'); ?>", // Change this URL
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        if (response === "success") {
                            window.location.href = "<?php echo site_url('dashboard'); ?>"; // Redirect to dashboard
                        } else {
                            alert("Invalid credentials. Please try again.");
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
