<!DOCTYPE html>
<html>
<head>
  <title>Login Admin - GrowTogether</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f5f5f5; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
    .form { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); width: 300px; }
    .form h2 { text-align: center; margin-bottom: 20px; color: #ec4899; }
    .form input { width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
    .form button { width: 100%; padding: 10px; background: #ec4899; color: white; border: none; border-radius: 5px; cursor: pointer; margin-top: 10px; }
    .form a { display: block; text-align: center; margin-top: 15px; color: #666; text-decoration: none; }
  </style>
</head>
<body>
  <div class="form">
    <h2>🔐 Login Admin</h2>
    @if($errors->any())
      <p style="color:red; text-align:center;">{{ $errors->first('error') }}</p>
    @endif
    <form method="POST" action="/admin/login">
      @csrf
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
    <a href="/">← Kembali ke Beranda</a>
  </div>
</body>
</html>