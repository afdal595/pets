<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Pet Guild</title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            padding: 20px;
            position: relative;
            overflow: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path fill="%23FFFFFF" opacity="0.05" d="M45.4,-77.5C59.2,-69.7,71.1,-57.7,78.2,-43.3C85.4,-28.9,87.8,-12,85.8,4.1C83.7,20.2,77.2,35.6,67.4,48.4C57.6,61.2,44.4,71.3,29.5,76.5C14.6,81.7,-2.1,81.9,-17.7,77.3C-33.3,72.7,-47.8,63.3,-59.7,51.1C-71.5,38.9,-80.7,23.9,-84.1,7.3C-87.4,-9.3,-85,-27.5,-76.6,-42.2C-68.3,-56.9,-54.1,-68.1,-39.2,-75.5C-24.3,-82.9,-8.7,-86.4,4.4,-83.8C17.4,-81.2,31.6,-85.3,45.4,-77.5Z" transform="translate(100 100)"/></svg>') center/cover no-repeat;
            animation: rotate 30s linear infinite;
            z-index: 0;
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px 30px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            z-index: 1;
            overflow: hidden;
        }

        .login-container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 60%);
            transform: rotate(30deg);
            pointer-events: none;
            z-index: -1;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }

        .header i {
            font-size: 48px;
            background: linear-gradient(45deg, #fff, #2575fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
            display: inline-block;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .header h1 {
            color: #fff;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 5px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }

        .header p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group label {
            display: block;
            color: #fff;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: 500;
        }

        .input-group {
            position: relative;
        }

        .input-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6a11cb;
            font-size: 18px;
            transition: all 0.3s ease;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px 12px 45px;
            background: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 10px;
            font-size: 14px;
            color: #333;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            background: #fff;
            box-shadow: 0 0 15px rgba(106, 17, 203, 0.3);
        }

        .form-control:focus + i {
            color: #2575fc;
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .login-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: all 0.5s ease;
        }

        .login-btn:hover::before {
            left: 100%;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(106, 17, 203, 0.4);
        }

        .back-to-home {
            display: inline-block;
            margin-top: 20px;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .back-to-home:hover {
            color: #fff;
            text-shadow: 0 0 10px rgba(255,255,255,0.5);
            transform: translateX(-5px);
        }

        .error-message {
            background: rgba(255, 82, 82, 0.1);
            border: 1px solid rgba(255, 82, 82, 0.2);
            color: #fff;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 14px;
            text-align: center;
            animation: shake 0.5s ease-in-out;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 30px 20px;
            }

            .header h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="header">
            <i class="fas fa-paw"></i>
            <h1>Login Admin</h1>
            <p>Masuk ke panel admin Pet Guild</p>
        </div>

        @if ($errors->any())
            <div class="error-message">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <div class="input-group">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email anda" required autofocus>
                    <i class="fas fa-envelope"></i>
                </div>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password" required>
                    <i class="fas fa-lock"></i>
                </div>
            </div>

            <button type="submit" class="login-btn">
                <i class="fas fa-sign-in-alt me-2"></i> Login
            </button>
        </form>

        <div style="text-align: center;">
            <a href="/" class="back-to-home">
                <i class="fas fa-arrow-left me-1"></i> Kembali ke Beranda
            </a>
        </div>
    </div>
</body>
</html>