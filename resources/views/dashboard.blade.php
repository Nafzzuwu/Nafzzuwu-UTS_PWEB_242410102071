@extends('layouts.app')

@section('content')
<div class="dashboard-bg">
<style>
body {
  background: linear-gradient(135deg, #0f2027 0%, #203a43 50%, #2c5364 100%);
  min-height: 100vh;
}

.dashboard-bg {
  background-color: #1a1f35;
  background-image: 
    radial-gradient(circle at 20% 50%, rgba(30, 60, 114, 0.3) 0%, transparent 50%),
    radial-gradient(circle at 80% 80%, rgba(42, 82, 152, 0.3) 0%, transparent 50%),
    radial-gradient(circle at 40% 20%, rgba(30, 60, 114, 0.2) 0%, transparent 50%);
  min-height: 100vh;
  padding-bottom: 3rem;
}

.dashboard-hero {
  background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
  padding: 3rem 0;
  margin: -1rem -15px 2rem -15px;
  border-radius: 0 0 20px 20px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.dashboard-hero h2 {
  color: #fff;
  font-weight: 700;
  font-size: 2.5rem;
  margin-bottom: 0.5rem;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}

.dashboard-hero p {
  color: rgba(255, 255, 255, 0.8);
  font-size: 1.2rem;
  margin: 0;
}

.skin-card {
  border: none;
  border-radius: 15px;
  overflow: hidden;
  transition: all 0.4s ease;
  background: #fff;
  height: 100%;
}

.skin-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 35px rgba(30, 60, 114, 0.3) !important;
}

.skin-card .card-img-top {
  height: 220px;
  object-fit: cover;
  transition: transform 0.4s ease;
}

.skin-card:hover .card-img-top {
  transform: scale(1.1);
}

.skin-card .card-body {
  padding: 1.5rem;
  background: linear-gradient(to bottom, #fff 0%, #f8f9fa 100%);
}

.skin-card .card-title {
  color: #1e3c72;
  font-weight: 700;
  font-size: 1.3rem;
  margin-bottom: 0.8rem;
  transition: color 0.3s ease;
}

.skin-card:hover .card-title {
  color: #2a5298;
}

.skin-card .card-text {
  color: #6c757d;
  font-size: 0.95rem;
  line-height: 1.6;
}

.rarity-badge {
  position: absolute;
  top: 15px;
  right: 15px;
  background: rgba(30, 60, 114, 0.9);
  color: #fff;
  padding: 0.4rem 0.8rem;
  border-radius: 20px;
  font-size: 0.75rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1px;
  z-index: 10;
}

.price-tag {
  position: absolute;
  bottom: 15px;
  left: 15px;
  background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
  color: #fff;
  padding: 0.5rem 1rem;
  border-radius: 25px;
  font-weight: 700;
  font-size: 1.1rem;
  box-shadow: 0 4px 10px rgba(40, 167, 69, 0.3);
  z-index: 10;
}

.card-img-container {
  position: relative;
  overflow: hidden;
  background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.section-title {
  font-size: 1.8rem;
  font-weight: 700;
  color: #fff;
  margin-bottom: 1.5rem;
  position: relative;
  padding-bottom: 0.5rem;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.section-title::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 60px;
  height: 4px;
  background: linear-gradient(90deg, #4fc3f7 0%, #29b6f6 100%);
  border-radius: 2px;
}

.stats-card {
  background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
  color: #fff;
  padding: 1.5rem;
  border-radius: 15px;
  text-align: center;
  transition: all 0.3s ease;
  margin-bottom: 1.5rem;
}

.stats-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(30, 60, 114, 0.3);
}

.stats-card h3 {
  font-size: 2.5rem;
  font-weight: 700;
  margin: 0;
}

.stats-card p {
  margin: 0.5rem 0 0 0;
  opacity: 0.9;
  font-size: 1rem;
}

.btn-view-detail {
  background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
  color: #fff;
  border: none;
  padding: 0.6rem 1.5rem;
  border-radius: 25px;
  font-weight: 600;
  transition: all 0.3s ease;
  margin-top: 1rem;
  width: 100%;
}

.btn-view-detail:hover {
  transform: scale(1.05);
  box-shadow: 0 5px 15px rgba(30, 60, 114, 0.4);
  color: #fff;
}

@media (max-width: 768px) {
  .dashboard-hero h2 {
    font-size: 1.8rem;
  }
  
  .skin-card .card-img-top {
    height: 180px;
  }
}
</style>

{{-- Hero Section --}}
<div class="dashboard-hero">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <h2>Welcome Back, {{ $username ?? 'Guest' }}!</h2>
                <p>Explore the finest CS2 skins collection</p>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    {{-- Stats Section --}}
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="stats-card">
                <h3>156</h3>
                <p>Total Skins</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stats-card">
                <h3>$2,450</h3>
                <p>Inventory Value</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stats-card">
                <h3>24</h3>
                <p>Rare Items</p>
            </div>
        </div>
    </div>

    {{-- Section Title --}}
    <div class="row">
        <div class="col-12">
            <h3 class="section-title">Featured Skins</h3>
        </div>
    </div>

    {{-- Skin Cards --}}
    <div class="row mt-4">
        {{-- Card 1 --}}
        <div class="col-md-4 mb-4">
            <div class="card skin-card shadow">
                <div class="card-img-container">
                    <span class="rarity-badge">Legendary</span>
                    <span class="price-tag">$85.50</span>
                    <img src="https://cdn.oneesports.gg/cdn-data/2024/06/CS2_best_cases-450x253.jpg" class="card-img-top" alt="AK-47">
                </div>
                <div class="card-body">
                    <h5 class="card-title">AK-47 | Redline</h5>
                    <p class="card-text">The Redline is a clean and modern skin featuring a sleek black base with bold red accents. Its minimalistic yet aggressive look has made it a long-time favorite among competitive players.</p>
                    <a href="#" class="btn btn-view-detail">View Details</a>
                </div>
            </div>
        </div>

        {{-- Card 2 --}}
        <div class="col-md-4 mb-4">
            <div class="card skin-card shadow">
                <div class="card-img-container">
                    <span class="rarity-badge">Epic</span>
                    <span class="price-tag">$120.00</span>
                    <img src="https://media.sketchfab.com/models/0cd3a01ad5044862bab42a9c2bce5e34/thumbnails/c8c1b26c8e4a496095809927acd59247/1024x576.jpeg" class="card-img-top" alt="M4A1-S">
                </div>
                <div class="card-body">
                    <h5 class="card-title">M4A1-S | Hyper Beast</h5>
                    <p class="card-text">The Hyper Beast is a fan-favorite skin featuring a vibrant, beastly creature design in neon colors. Its striking artwork and high level of detail make it one of the most iconic and sought-after skins in the CS2.</p>
                    <a href="#" class="btn btn-view-detail">View Details</a>
                </div>
            </div>
        </div>

        {{-- Card 3 --}}
        <div class="col-md-4 mb-4">
            <div class="card skin-card shadow">
                <div class="card-img-container">
                    <span class="rarity-badge">Mythical</span>
                    <span class="price-tag">$95.75</span>
                    <img src="https://imageproxy.waxpeer.com/insecure/rs:fit:450:300:0/g:nowe/f:webp/plain/https://images.waxpeer.com/waxpeer-blogpost/1728901711995.png" class="card-img-top" alt="AWP">
                </div>
                <div class="card-body">
                    <h5 class="card-title">AWP | Asiimov</h5>
                    <p class="card-text">The Asiimov is a legendary skin with a futuristic white, orange, and black color scheme. Its distinctive sci-fi design and rarity make it a true status symbol for snipers in CS2.</p>
                    <a href="#" class="btn btn-view-detail">View Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection