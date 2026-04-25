<?php
session_start();
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($username === '' || $password === '') {
        $message = 'Please enter both username and password.';
    } else {
        $message = 'Welcome back, ' . htmlspecialchars($username) . '!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | My App</title>
    <style>
        :root {
            --bg-dark: #0f172a;
            --bg-panel: rgba(15, 23, 42, 0.92);
            --accent: #4f46e5;
            --accent-soft: #6366f1;
            --text-light: #f8fafc;
            --text-muted: #cbd5e1;
            --border: rgba(148, 163, 184, 0.18);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: radial-gradient(circle at top, rgba(79, 70, 229, 0.24), transparent 28%),
                        radial-gradient(circle at right, rgba(56, 189, 248, 0.18), transparent 22%),
                        linear-gradient(180deg, #020617 0%, #0f172a 100%);
            color: var(--text-light);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
        }

        .login-shell {
            width: min(460px, 100%);
            backdrop-filter: blur(18px);
            background: var(--bg-panel);
            border: 1px solid var(--border);
            border-radius: 28px;
            padding: 34px 32px;
            box-shadow: 0 28px 80px rgba(7, 15, 34, 0.26);
        }

        .brand {
            text-align: center;
            margin-bottom: 26px;
        }

        .brand h1 {
            font-size: 2rem;
            letter-spacing: -0.04em;
            margin-bottom: 6px;
        }

        .brand p {
            color: var(--text-muted);
            font-size: 0.95rem;
        }

        .login-shell form {
            display: grid;
            gap: 16px;
        }

        .field {
            display: grid;
            gap: 8px;
        }

        .field label {
            font-size: 0.95rem;
            color: var(--text-muted);
        }

        .field input {
            width: 100%;
            border: 1px solid rgba(148, 163, 184, 0.2);
            border-radius: 16px;
            padding: 14px 16px;
            background: rgba(15, 23, 42, 0.7);
            color: var(--text-light);
            font-size: 1rem;
        }

        .field input:focus {
            outline: none;
            border-color: rgba(99, 102, 241, 0.85);
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.12);
        }

        .actions {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
        }

        .checkbox {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--text-muted);
            font-size: 0.94rem;
        }

        .checkbox input {
            width: 18px;
            height: 18px;
            accent-color: var(--accent);
        }

        .submit-btn {
            width: 100%;
            margin-top: 6px;
            padding: 14px 18px;
            border: none;
            border-radius: 16px;
            background: linear-gradient(135deg, var(--accent), var(--accent-soft));
            color: white;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .submit-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 18px 40px rgba(79, 70, 229, 0.2);
        }

        .message {
            padding: 14px 16px;
            border-radius: 16px;
            background: rgba(15, 23, 42, 0.76);
            border: 1px solid rgba(99, 102, 241, 0.2);
            color: #e2e8f0;
            font-size: 0.96rem;
            text-align: center;
        }

        .hint {
            color: var(--text-muted);
            font-size: 0.9rem;
            text-align: center;
            margin-top: 18px;
        }

        .footer {
            margin-top: 22px;
            color: var(--text-muted);
            font-size: 0.88rem;
            text-align: center;
        }

        .footer a {
            color: var(--accent-soft);
            text-decoration: none;
        }
    </style>
</head>
<body>

     <?php include('header.php')?>

    <div class="login-shell">
        <div class="brand">
            <h1>Welcome Back</h1>
            <p>Sign in to access your dashboard and manage your data.</p>
        </div>

        <?php if ($message !== ''): ?>
            <div class="message"><?= htmlspecialchars($message) ?></div>
        <?php endif; ?>

        <form method="post" action="login.php" autocomplete="off">
            <div class="field">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Your username" value="<?= htmlspecialchars($_POST['username'] ?? '') ?>" required />
            </div>

            <div class="field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Your password" required />
            </div>

            <div class="actions">
                <label class="checkbox">
                    <input type="checkbox" name="remember" /> Remember me
                </label>
                <a href="#" style="color: #a5b4fc; text-decoration: none; font-size: 0.95rem;">Forgot password?</a>
            </div>

            <button type="submit" class="submit-btn">Sign In</button>
        </form>

        <p class="hint">New here? <a href="#">Create an account</a> or contact support.</p>
        <p class="footer">Secure login powered by a clean, responsive interface.</p>
    </div>
</body>
</html>
