<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - GM Store</title>
    <link rel="stylesheet" href="../css/auth.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .register-illustration {
            text-align: center;
            margin: 20px 0;
        }
        .register-illustration img {
            max-width: 150px;
            height: auto;
        }
        .password-strength {
            margin-top: 5px;
            font-size: 0.85rem;
        }
        .strength-meter {
            height: 5px;
            background: #eee;
            border-radius: 3px;
            margin-top: 5px;
            overflow: hidden;
        }
        .strength-fill {
            height: 100%;
            width: 0%;
            transition: width 0.3s ease;
        }
        .terms {
            margin: 20px 0;
            font-size: 0.9rem;
        }
        .terms a {
            color: #3498db;
            text-decoration: none;
        }
        .terms a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <div class="auth-header">
            <a href="index.php" class="logo">
                <i class="fas fa-store"></i> GM Store
            </a>
            <h1>Create Account</h1>
            <p>Join GM Store today for the best shopping experience</p>
        </div>

        <div class="register-illustration">
            <i class="fas fa-user-plus" style="font-size: 4rem; color: #3498db;"></i>
        </div>

        <form id="registerForm" class="auth-form">
            <div class="form-group">
                <label for="fullName">
                    <i class="fas fa-user"></i> Full Name
                </label>
                <input type="text" id="fullName" name="fullName" required 
                       placeholder="Enter your full name">
                <div class="error-message" id="nameError"></div>
            </div>

            <div class="form-group">
                <label for="email">
                    <i class="fas fa-envelope"></i> Email Address
                </label>
                <input type="email" id="email" name="email" required 
                       placeholder="you@example.com">
                <div class="error-message" id="emailError"></div>
            </div>

            <div class="form-group">
                <label for="phone">
                    <i class="fas fa-phone"></i> Phone Number
                </label>
                <input type="tel" id="phone" name="phone" 
                       placeholder="+255 XXX XXX XXX">
                <div class="error-message" id="phoneError"></div>
            </div>

            <div class="form-group">
                <label for="password">
                    <i class="fas fa-lock"></i> Password
                </label>
                <input type="password" id="password" name="password" required 
                       placeholder="Create a strong password">
                <div class="error-message" id="passwordError"></div>
                <div class="password-strength">
                    <div id="strengthText">Password strength: </div>
                    <div class="strength-meter">
                        <div class="strength-fill" id="strengthFill"></div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="confirmPassword">
                    <i class="fas fa-lock"></i> Confirm Password
                </label>
                <input type="password" id="confirmPassword" name="confirmPassword" required 
                       placeholder="Confirm your password">
                <div class="error-message" id="confirmError"></div>
            </div>

            <div class="terms">
                <label class="checkbox">
                    <input type="checkbox" name="terms" required>
                    <span>I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></span>
                </label>
            </div>

            <button type="submit" class="btn btn-primary btn-block">
                <i class="fas fa-user-plus"></i> Create Account
            </button>

            <div class="auth-footer">
                <p>Already have an account? 
                   <a href="login.php">Login here</a>
                </p>
            </div>
        </form>

        <div class="auth-info">
            <h3><i class="fas fa-star"></i> Benefits of Registering</h3>
            <p><i class="fas fa-shopping-cart"></i> Faster checkout</p>
            <p><i class="fas fa-history"></i> Order history tracking</p>
            <p><i class="fas fa-tag"></i> Exclusive deals & offers</p>
            <p><i class="fas fa-headset"></i> Priority customer support</p>
        </div>
    </div>

    <script src="../js/auth.js"></script>
    <script>
        // Password strength indicator
        const passwordInput = document.getElementById('password');
        const strengthText = document.getElementById('strengthText');
        const strengthFill = document.getElementById('strengthFill');
        
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            
            // Length check
            if (password.length >= 8) strength += 25;
            if (password.length >= 12) strength += 25;
            
            // Complexity checks
            if (/[A-Z]/.test(password)) strength += 25;
            if (/[0-9]/.test(password)) strength += 25;
            if (/[^A-Za-z0-9]/.test(password)) strength += 25;
            
            // Cap at 100
            strength = Math.min(strength, 100);
            
            strengthFill.style.width = strength + '%';
            
            // Color coding
            if (strength < 40) {
                strengthFill.style.backgroundColor = '#e74c3c';
                strengthText.textContent = 'Password strength: Weak';
            } else if (strength < 70) {
                strengthFill.style.backgroundColor = '#f39c12';
                strengthText.textContent = 'Password strength: Fair';
            } else {
                strengthFill.style.backgroundColor = '#27ae60';
                strengthText.textContent = 'Password strength: Strong';
            }
        });
        
        // Registration form validation
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const fullName = document.getElementById('fullName').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            
            const nameError = document.getElementById('nameError');
            const emailError = document.getElementById('emailError');
            const phoneError = document.getElementById('phoneError');
            const passwordError = document.getElementById('passwordError');
            const confirmError = document.getElementById('confirmError');
            
            // Reset errors
            [nameError, emailError, phoneError, passwordError, confirmError].forEach(el => {
                el.textContent = '';
            });
            
            let isValid = true;
            
            // Name validation
            if (fullName.length < 2) {
                nameError.textContent = 'Name must be at least 2 characters';
                isValid = false;
            }
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                emailError.textContent = 'Please enter a valid email address';
                isValid = false;
            }
            
            // Phone validation (optional)
            if (phone && !/^\+?[\d\s-]{10,}$/.test(phone)) {
                phoneError.textContent = 'Please enter a valid phone number';
                isValid = false;
            }
            
            // Password validation
            if (password.length < 6) {
                passwordError.textContent = 'Password must be at least 6 characters';
                isValid = false;
            }
            
            // Confirm password
            if (password !== confirmPassword) {
                confirmError.textContent = 'Passwords do not match';
                isValid = false;
            }
            
            // Terms checkbox
            const termsCheckbox = document.querySelector('input[name="terms"]');
            if (!termsCheckbox.checked) {
                alert('Please agree to the Terms of Service and Privacy Policy');
                isValid = false;
            }
            
            if (isValid) {
                // Simulate registration - In real app, this would be an API call
                const userData = {
                    username: email.split('@')[0],
                    email: email,
                    full_name: fullName,
                    phone: phone
                };
                
                // Store user data in localStorage
                localStorage.setItem('userData', JSON.stringify(userData));
                localStorage.setItem('token', 'simulated_jwt_token');
                
                // Show success message
                alert('Registration successful! Welcome to GM Store.');
                
                // Redirect to homepage
                setTimeout(() => {
                    window.location.href = '../index.php';
                }, 1000);
            }
        });
    </script>
</body>
</<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    </body>
</html>>