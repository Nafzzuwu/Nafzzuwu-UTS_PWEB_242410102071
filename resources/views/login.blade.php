@extends('layouts.app')

@section('content')
<style>
body {
  background-color: #1a1f35;
  background-image: 
    radial-gradient(circle at 20% 50%, rgba(30, 60, 114, 0.3) 0%, transparent 50%),
    radial-gradient(circle at 80% 80%, rgba(42, 82, 152, 0.3) 0%, transparent 50%),
    radial-gradient(circle at 40% 20%, rgba(30, 60, 114, 0.2) 0%, transparent 50%);
  min-height: 100vh;
}

.login-wrapper {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 2rem 0;
}

.login-card {
  background: rgba(255, 255, 255, 0.95);
  border-radius: 20px;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
  padding: 3rem 2.5rem;
  max-width: 450px;
  width: 100%;
  backdrop-filter: blur(10px);
}

.login-header {
  text-align: center;
  margin-bottom: 2rem;
}

.login-header h3 {
  color: #1e3c72;
  font-weight: 700;
  font-size: 2rem;
  margin-bottom: 0.5rem;
}

.login-header p {
  color: #6c757d;
  font-size: 0.95rem;
}

.login-icon {
  width: 80px;
  height: 80px;
  background:none
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 1.5rem;
  font-size: 2.5rem;
}

.form-label {
  color: #1e3c72;
  font-weight: 600;
  margin-bottom: 0.5rem;
  font-size: 0.9rem;
}

.form-control {
  border: 2px solid #e9ecef;
  border-radius: 10px;
  padding: 0.75rem 1rem;
  transition: all 0.3s ease;
  font-size: 0.95rem;
}

.form-control:focus {
  border-color: #2a5298;
  box-shadow: 0 0 0 0.2rem rgba(42, 82, 152, 0.15);
}

.btn-login {
  background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
  color: #fff;
  border: none;
  padding: 0.8rem;
  border-radius: 10px;
  font-weight: 600;
  font-size: 1rem;
  transition: all 0.3s ease;
  margin-top: 1rem;
}

.btn-login:hover {
  transform: translateY(-2px);
  box-shadow: 0 5px 20px rgba(30, 60, 114, 0.4);
  color: #fff;
}

.login-footer {
  text-align: center;
  margin-top: 1.5rem;
  padding-top: 1.5rem;
  border-top: 1px solid #e9ecef;
}

.login-footer a {
  color: #2a5298;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.3s ease;
}

.login-footer a:hover {
  color: #1e3c72;
  text-decoration: underline;
}

.input-group-text {
  background: #f8f9fa;
  border: 2px solid #e9ecef;
  border-right: none;
  border-radius: 10px 0 0 10px;
}

.input-with-icon {
  border-left: none;
  border-radius: 0 10px 10px 0;
}

@media (max-width: 576px) {
  .login-card {
    padding: 2rem 1.5rem;
  }
}
</style>

<div class="login-wrapper">
  <div class="login-card">
    <div class="login-header">
      <div class="login-icon">
        <img src="https://cdn2.steamgriddb.com/icon/e1bd06c3f8089e7552aa0552cb387c92/32/256x256.png" alt="CS2 Logo" style="width: 70%; height: 70%; object-fit: contain;">
      </div>
      <h3>Welcome Back!</h3>
      <p>Login to access your CS2 skins collection</p>
    </div>

    <form method="POST" action="{{ route('doLogin') }}">
      @csrf
      
      <div class="mb-3">
        <div class="input-group">
          <span class="input-group-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
            </svg>
          </span>
          <input type="text" name="username" class="form-control input-with-icon" placeholder="Enter your username" required autofocus>
        </div>
      </div>

      <div class="mb-3">
        <div class="input-group">
          <span class="input-group-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
              <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2"/>
            </svg>
          </span>
          <input type="password" name="password" class="form-control input-with-icon" placeholder="Enter your password" required>
        </div>
      </div>

      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="rememberMe">
        <label class="form-check-label" for="rememberMe" style="color: #6c757d; font-size: 0.9rem;">
          Remember me
        </label>
      </div>

      <button class="btn btn-login w-100" type="submit">
        Login
      </button>
    </form>

    <div class="login-footer">
      <p style="color: #6c757d; font-size: 0.9rem; margin-bottom: 0.5rem;">
        Don't have an account? <a href="#">Sign up here</a>
      </p>
      <p style="color: #6c757d; font-size: 0.85rem; margin: 0;">
        <a href="#">Forgot password?</a>
      </p>
    </div>
  </div>
</div>
@endsection