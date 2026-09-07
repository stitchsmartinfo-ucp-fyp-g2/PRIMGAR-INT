<?php
?>
<style>
  .custom-footer {
    background-color: #000;
    color: #fff;
    padding: 70px 20px 20px;
    font-family: 'Inter', sans-serif;
  }
  .custom-footer-grid {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1.2fr 1fr 1fr 1.5fr;
    gap: 30px;
    border-bottom: 1px solid rgba(255,255,255,0.1);
    padding-bottom: 50px;
  }
  .custom-footer h4 {
    font-size: 1.1rem;
    font-weight: 700;
    margin-bottom: 25px;
    letter-spacing: 0.05em;
    text-transform: uppercase;
  }
  .custom-footer ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  .custom-footer ul li {
    margin-bottom: 15px;
  }
  .custom-footer ul a {
    color: #ccc;
    text-decoration: none;
    transition: color 0.3s;
    font-size: 0.95rem;
  }
  .custom-footer ul a:hover {
    color: #fff;
  }
  .custom-footer .contact-text p {
    margin-bottom: 12px;
    color: #ccc;
    font-size: 0.9rem;
    line-height: 1.6;
  }
  .custom-footer .contact-text strong {
    color: #fff;
  }
  .custom-footer-bottom {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 25px 0 10px;
    flex-wrap: wrap;
    gap: 20px;
  }
  .footer-logo-col {
    display: flex;
    justify-content: center; 
    align-items: flex-start;
    padding-top: 10px; 
  }
  .footer-logo-col a {
    text-decoration: none;
    color: #fff;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  @media (max-width: 992px) {
    .custom-footer-grid {
      grid-template-columns: 1fr 1fr;
    }
    .footer-logo-col {
      justify-content: flex-start;
    }
  }
  @media (max-width: 576px) {
    .custom-footer-grid {
      grid-template-columns: 1fr;
    }
    .custom-footer-bottom {
      flex-direction: column;
      text-align: center;
      justify-content: center;
    }
  }
</style>

<footer class="custom-footer">
  <div class="container custom-footer-grid">
    
    <!-- Logo Column -->
    <div class="footer-logo-col">
      <a href="index.php">
        <img src="images/primgar-logo.png" alt="Primgar International Logo" style="height: 60px; width: auto; margin-bottom: 10px;">
      </a>
    </div>

    <!-- User Info Column -->
    <div>
      <h4>User Info</h4>
      <ul>
        <li><a href="privacy-policy.php">Privacy Policy</a></li>
        <li><a href="terms-of-service.php">Terms Of Service</a></li>
        <li style="margin-bottom: 25px;"><a href="index.php#faq">FAQ</a></li>
      </ul>
    </div>

    <!-- Quick Links Column -->
    <div>
      <h4>Quick Links</h4>
      <ul>
        <li><a href="index.php#about">About</a></li>
        <li><a href="index.php#products">Products</a></li>
        <li><a href="index.php#services">Services</a></li>
        <li><a href="index.php#process">Process</a></li>
        <li><a href="index.php#fabrics">Fabric Library</a></li>
        <li><a href="index.php#rfq">RFQ Calculator</a></li>
      </ul>
    </div>

    <!-- Keep in Touch Column -->
    <div>
      <h4>Keep in touch with us</h4>
      <div class="contact-text" style="margin-bottom: 15px; display: flex; align-items: flex-start; gap: 12px;">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--red-accent, #E51A23)" stroke-width="2" style="margin-top: 2px; flex-shrink: 0;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
        <p style="margin: 0;">+92 314 7560683</p>
      </div>
      <div class="contact-text" style="margin-bottom: 15px; display: flex; align-items: flex-start; gap: 12px;">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--red-accent, #E51A23)" stroke-width="2" style="margin-top: 2px; flex-shrink: 0;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
        <p style="margin: 0;"><a href="mailto:primgarinternational@gmail.com" style="color: #ccc; text-decoration: none;">primgarinternational@gmail.com</a></p>
      </div>
      <div class="contact-text" style="display: flex; align-items: flex-start; gap: 12px;">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--red-accent, #E51A23)" stroke-width="2" style="margin-top: 2px; flex-shrink: 0;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
        <p style="margin: 0;">street-5 Muzaffarpur , Defense Road , Siallkot.</p>
      </div>
    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="container custom-footer-bottom">
    <div style="color: #999; font-size: 0.9rem;">
      Copyright © 2026 Primgar International. All Rights Reserved.
    </div>
    <div style="display: flex; align-items: center; gap: 15px;">
      <a href="https://www.facebook.com/PRIMGARINTERNATIONAL" target="_blank" rel="noopener noreferrer" aria-label="Facebook" style="color: #fff; transition: opacity 0.3s;"><svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
      <a href="https://www.tiktok.com/@primgar_intl" target="_blank" rel="noopener noreferrer" aria-label="TikTok" style="color: #fff; transition: opacity 0.3s;"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"></path></svg></a>
      <a href="https://www.instagram.com/primgar_intl/" target="_blank" rel="noopener noreferrer" aria-label="Instagram" style="color: #fff; transition: opacity 0.3s;"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37zM17.5 6.5h.01"></path></svg></a>
      <a href="https://www.linkedin.com/company/102901404" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" style="color: #fff; transition: opacity 0.3s;"><svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z"></path><circle cx="4" cy="4" r="2"></circle></svg></a>
      <a href="https://wa.me/923147560683" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" style="color: #fff; transition: opacity 0.3s;"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg></a>
      
      <!-- Large WhatsApp Green Bubble -->
      <a href="https://wa.me/923147560683" target="_blank" rel="noopener noreferrer" style="background: #25D366; color: white; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; border-radius: 50%; text-decoration: none; margin-left: 10px; transition: transform 0.3s;">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
      </a>
    </div>
  </div>
</footer>
