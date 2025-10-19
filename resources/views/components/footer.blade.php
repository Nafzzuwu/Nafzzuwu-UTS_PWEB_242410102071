<style>
  .footer-modern {
    background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
    color: #fff;
    padding: 3rem 0 1.5rem;
    margin-top: 4rem;
    box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
  }
  
  .footer-modern h5 {
    font-weight: 700;
    margin-bottom: 1.5rem;
    color: #fff;
    font-size: 1.2rem;
    text-transform: uppercase;
    letter-spacing: 1px;
  }
  
  .footer-modern .footer-links {
    list-style: none;
    padding: 0;
  }
  
  .footer-modern .footer-links li {
    margin-bottom: 0.8rem;
  }
  
  .footer-modern .footer-links a {
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-block;
  }
  
  .footer-modern .footer-links a:hover {
    color: #fff;
    transform: translateX(5px);
  }
  
  .footer-social {
    display: flex;
    gap: 1rem;
    margin-top: 1rem;
  }
  
  .footer-social a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    color: #fff;
    text-decoration: none;
    transition: all 0.3s ease;
    font-size: 1.2rem;
  }
  
  .footer-social a:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
  }
  
  .footer-bottom {
    margin-top: 2rem;
    padding-top: 1.5rem;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    text-align: center;
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.9rem;
  }
  
  .footer-modern .contact-info {
    color: rgba(255, 255, 255, 0.8);
    margin-bottom: 0.8rem;
  }
  
  .footer-modern .contact-info i {
    margin-right: 0.5rem;
    color: #fff;
  }
</style>

<footer class="footer-modern">
  <div class="container">
    <div class="row">
      <!-- About Section -->
      <div class="col-12 text-center mb-4">
        <h5>SKINCS2</h5>
        <p style="color: rgba(255, 255, 255, 0.8); line-height: 1.8; max-width: 600px; margin: 0 auto;">
            A trusted and secure platform for trading and collecting CS2 skins.
            Discover your dream skins at the best prices with guaranteed safety, a smooth trading experience, and a growing global community of passionate players.
        </p>
      </div>
    </div>
    
    <!-- Copyright -->
    <div class="footer-bottom">
      <p class="mb-0">
        &copy; <?php echo date('Y'); ?> SkinCS2. All Rights Reserved. 
        <span style="margin: 0 0.5rem;">|</span>
        <a href="#" style="color: rgba(255, 255, 255, 0.7); text-decoration: none;">Privacy Policy</a>
        <span style="margin: 0 0.5rem;">|</span>
        <a href="#" style="color: rgba(255, 255, 255, 0.7); text-decoration: none;">Terms of Service</a>
      </p>
    </div>
  </div>
</footer>