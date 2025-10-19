@extends('layouts.app')

@section('content')
<style>
body {
  background-color: #1a1f35;
  background-image: 
    radial-gradient(circle at 20% 50%, rgba(30, 60, 114, 0.3) 0%, transparent 50%),
    radial-gradient(circle at 80% 80%, rgba(42, 82, 152, 0.3) 0%, transparent 50%),
    radial-gradient(circle at 40% 20%, rgba(30, 60, 114, 0.2) 0%, transparent 50%);
}

.profile-wrapper {
  min-height: 100vh;
  padding: 3rem 0;
}

.profile-card {
  background: rgba(255, 255, 255, 0.95);
  border-radius: 20px;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  backdrop-filter: blur(10px);
}

.profile-header {
  background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
  padding: 3rem 2rem;
  text-align: center;
  position: relative;
}

.profile-header::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(255,255,255,0.05)" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,138.7C960,139,1056,117,1152,101.3C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
  background-size: cover;
  background-position: bottom;
  opacity: 0.3;
}

.profile-avatar {
  width: 120px;
  height: 120px;
  background: linear-gradient(135deg, #fff 0%, #e9ecef 100%);
  border-radius: 50%;
  margin: 0 auto 1rem;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 3.5rem;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
  border: 5px solid rgba(255, 255, 255, 0.3);
  position: relative;
  z-index: 1;
}

.profile-name {
  color: #fff;
  font-weight: 700;
  font-size: 2rem;
  margin-bottom: 0.5rem;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
  position: relative;
  z-index: 1;
}

.profile-role {
  color: rgba(255, 255, 255, 0.9);
  font-size: 1rem;
  margin: 0;
  position: relative;
  z-index: 1;
}

.profile-body {
  padding: 2.5rem;
}

.profile-section {
  margin-bottom: 2rem;
}

.section-title {
  color: #1e3c72;
  font-weight: 700;
  font-size: 1.3rem;
  margin-bottom: 1.5rem;
  padding-bottom: 0.5rem;
  border-bottom: 3px solid #e9ecef;
  position: relative;
}

.section-title::after {
  content: '';
  position: absolute;
  bottom: -3px;
  left: 0;
  width: 60px;
  height: 3px;
  background: linear-gradient(90deg, #1e3c72 0%, #2a5298 100%);
}

.info-item {
  background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
  border: none;
  border-radius: 12px;
  padding: 1.2rem 1.5rem;
  margin-bottom: 1rem;
  transition: all 0.3s ease;
  display: flex;
  align-items: center;
}

.info-item:hover {
  transform: translateX(5px);
  box-shadow: 0 5px 15px rgba(30, 60, 114, 0.15);
}

.info-icon {
  width: 45px;
  height: 45px;
  background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.3rem;
  margin-right: 1rem;
  flex-shrink: 0;
}

.info-content {
  flex: 1;
}

.info-label {
  color: #6c757d;
  font-size: 0.85rem;
  margin-bottom: 0.2rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.info-value {
  color: #1e3c72;
  font-size: 1.1rem;
  font-weight: 600;
  margin: 0;
}

.stats-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
  gap: 1rem;
  margin-top: 1.5rem;
}

.stat-card {
  background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
  color: #fff;
  padding: 1.5rem;
  border-radius: 15px;
  text-align: center;
  transition: all 0.3s ease;
}

.stat-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(30, 60, 114, 0.3);
}

.stat-value {
  font-size: 2rem;
  font-weight: 700;
  margin-bottom: 0.3rem;
}

.stat-label {
  font-size: 0.9rem;
  opacity: 0.9;
  margin: 0;
}

.btn-edit-profile {
  background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
  color: #fff;
  border: none;
  padding: 0.8rem 2rem;
  border-radius: 10px;
  font-weight: 600;
  transition: all 0.3s ease;
  width: 100%;
  margin-top: 1rem;
}

.btn-edit-profile:hover {
  transform: translateY(-2px);
  box-shadow: 0 5px 20px rgba(30, 60, 114, 0.4);
  color: #fff;
}

@media (max-width: 768px) {
  .profile-wrapper {
    padding: 1.5rem 0;
  }
  
  .profile-body {
    padding: 1.5rem;
  }
}
</style>

<div class="profile-wrapper">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="profile-card">
          <div class="profile-header">
            <div class="profile-avatar">
              👤
            </div>
            <h2 class="profile-name">{{ $username ?? 'Unknown' }}</h2>
            <p class="profile-role">CS2 Collector</p>
          </div>

          <div class="profile-body">
            <div class="profile-section">
              <h3 class="section-title">📋 Personal Information</h3>
              
              <div class="info-item">
                <div class="info-icon">👤</div>
                <div class="info-content">
                  <p class="info-label">Username</p>
                  <p class="info-value">{{ $username ?? 'Unknown' }}</p>
                </div>
              </div>

              <div class="info-item">
                <div class="info-icon">📧</div>
                <div class="info-content">
                  <p class="info-label">Email Address</p>
                  <p class="info-value">{{ $username ?? 'Unknown' }}@gmail.com</p>
                </div>
              </div>

              <div class="info-item">
                <div class="info-icon">📅</div>
                <div class="info-content">
                  <p class="info-label">Member Since</p>
                  <p class="info-value">January 2024</p>
                </div>
              </div>

              <div class="info-item">
                <div class="info-icon">🌍</div>
                <div class="info-content">
                  <p class="info-label">Location</p>
                  <p class="info-value">Situbondo, East Java, Indonesian</p>
                </div>
              </div>
            </div>

            <div class="profile-section">
              <h3 class="section-title">Your Statistics</h3>
              
              <div class="stats-grid">
                <div class="stat-card">
                  <div class="stat-value">156</div>
                  <p class="stat-label">Total Skins</p>
                </div>
                <div class="stat-card">
                  <div class="stat-value">$2.4K</div>
                  <p class="stat-label">Inventory</p>
                </div>
                <div class="stat-card">
                  <div class="stat-value">24</div>
                  <p class="stat-label">Rare Items</p>
                </div>
                <div class="stat-card">
                  <div class="stat-value">89</div>
                  <p class="stat-label">Trades</p>
                </div>
              </div>
            </div>

            <button class="btn btn-edit-profile">
              Edit Profile
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection