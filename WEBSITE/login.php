<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - GM Store</title>
    <link rel="stylesheet" href="../css/auth.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Additional styles for login page */
        .login-illustration {
            text-align: center;
            margin: 20px 0;
        }
        .login-illustration img {
            max-width: 200px;
            height: auto;
        }
        .test-credentials {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            border-left: 4px solid #3498db;
        }
        .test-credentials h4 {
            margin-bottom: 10px;
            color: #2c3e50;
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <div class="auth-header">
            <a href="index.php" class="logo">
                <i class="fas fa-store"></i> GM Store
            </a>
            <h1>Welcome Back</h1>
            <p>Login to your GM Store account</p>
        </div>

        <div class="login-illustration">
            <i class="fas fa-user-lock" style="font-size: 4rem; color: #3498db;"></i>
        </div>

        <form id="loginForm" class="auth-form">
            <div class="form-group">
                <label for="email">
                    <i class="fas fa-envelope"></i> Email Address
                </label>
                <input type="email" id="email" name="email" required 
                       placeholder="you@example.com">
                <div class="error-message" id="emailError"></div>
            </div>

            <div class="form-group">
                <label for="password">
                    <i class="fas fa-lock"></i> Password
                </label>
                <input type="password" id="password" name="password" required 
                       placeholder="Enter your password">
                <div class="error-message" id="passwordError"></div>
            </div>

            <div class="form-options">
                <label class="checkbox">
                    <input type="checkbox" name="remember">
                    <span>Remember me</span>
                </label>
                <a href="forgot-password.php" class="forgot-link">
                    Forgot Password?
                </a>
            </div>

            <button type="submit" class="btn btn-primary btn-block">
                <i class="fas fa-sign-in-alt"></i> Login
            </button>

            <div class="test-credentials">
                <h4><i class="fas fa-info-circle"></i> Test Account</h4>
                <p><strong>Email:</strong> customer@gmstore.com</p>
                <p><strong>Password:</strong> Customer123!</p>
            </div>

            <div class="auth-footer">
                <p>New to GM Store? 
                   <a href="register.php">Create an account</a>
                </p>
            </div>
        </form>

        <div class="auth-info">
            <h3><i class="fas fa-question-circle"></i> Need Help?</h3>
            <p><i class="fas fa-user-tie"></i> Contact: General Maungu</p>
            <p><i class="fas fa-phone"></i> +255 763 537 102</p>
            <p><i class="fas fa-map-marker-alt"></i> Ilala, Dar es Salaam</p>
        </div>
    </div>

    <script src="../js/auth.js"></script>
    <script>
        // Simple login validation
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const emailError = document.getElementById('emailError');
            const passwordError = document.getElementById('passwordError');
            
            // Reset errors
            emailError.textContent = '';
            passwordError.textContent = '';
            
            let isValid = true;
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                emailError.textContent = 'Please enter a valid email address';
                isValid = false;
            }
            
            // Password validation
            if (password.length < 6) {
                passwordError.textContent = 'Password must be at least 6 characters';
                isValid = false;
            }
            
            if (isValid) {
                // Simulate login - In real app, this would be an API call
                const userData = {
                    username: email.split('@')[0],
                    email: email,
                    full_name: 'Test Customer'
                };
                
                // Store user data in localStorage
                localStorage.setItem('userData', JSON.stringify(userData));
                localStorage.setItem('token', 'simulated_jwt_token');
                
                // Show success message
                alert('Login successful! Redirecting to homepage...');
                
                // Redirect to homepage
                setTimeout(() => {
                    window.location.href = '../index.php';
                }, 1000);
            }
        });
    </script>
</body>
</html>