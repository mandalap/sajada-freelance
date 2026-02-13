<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gabung Jadi Agen Freelance Tanah Kavling - Hasilkan Jutaan dari HP!</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>
*, *::before, *::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

:root {
  --primary: #014421;
  --primary-light: #01602f;
  --secondary: #FFD700;
  --secondary-dark: #e6c200;
  --accent: #228B22;
  --white: #FFFFFF;
  --off-white: #f8f9fa;
  --light-green: #e8f5e9;
  --text-dark: #1a1a1a;
  --text-medium: #444444;
  --text-light: #666666;
  --shadow-sm: 0 2px 8px rgba(0,0,0,0.08);
  --shadow-md: 0 4px 20px rgba(0,0,0,0.12);
  --shadow-lg: 0 8px 40px rgba(0,0,0,0.15);
  --radius: 16px;
  --radius-sm: 10px;
  --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

html {
  scroll-behavior: smooth;
  font-size: 16px;
}

body {
  font-family: 'Poppins', sans-serif;
  color: var(--text-dark);
  background: var(--white);
  line-height: 1.7;
  overflow-x: hidden;
}

/* Scroll Animations */
.animate-on-scroll {
  opacity: 0;
  transform: translateY(40px);
  transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

.animate-on-scroll.visible {
  opacity: 1;
  transform: translateY(0);
}

.animate-delay-1 { transition-delay: 0.1s; }
.animate-delay-2 { transition-delay: 0.2s; }
.animate-delay-3 { transition-delay: 0.3s; }
.animate-delay-4 { transition-delay: 0.4s; }
.animate-delay-5 { transition-delay: 0.5s; }
.animate-delay-6 { transition-delay: 0.6s; }

.animate-scale {
  opacity: 0;
  transform: scale(0.9);
  transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.animate-scale.visible {
  opacity: 1;
  transform: scale(1);
}

.animate-left {
  opacity: 0;
  transform: translateX(-40px);
  transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

.animate-left.visible {
  opacity: 1;
  transform: translateX(0);
}

.animate-right {
  opacity: 0;
  transform: translateX(40px);
  transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

.animate-right.visible {
  opacity: 1;
  transform: translateX(0);
}

/* Container */
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 24px;
}

/* Section Styling */
.section {
  padding: 80px 0;
}

.section-header {
  text-align: center;
  margin-bottom: 56px;
}

.section-badge {
  display: inline-block;
  background: linear-gradient(135deg, var(--secondary), var(--secondary-dark));
  color: var(--primary);
  font-size: 13px;
  font-weight: 700;
  padding: 6px 20px;
  border-radius: 50px;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  margin-bottom: 16px;
}

.section-title {
  font-size: 36px;
  font-weight: 800;
  color: var(--primary);
  line-height: 1.2;
  margin-bottom: 16px;
}

.section-subtitle {
  font-size: 17px;
  color: var(--text-light);
  max-width: 650px;
  margin: 0 auto;
  line-height: 1.7;
}

/* ========== HERO SECTION ========== */
.hero {
  background: linear-gradient(160deg, var(--primary) 0%, #01602f 50%, #018a3c 100%);
  padding: 100px 0 80px;
  position: relative;
  overflow: hidden;
  min-height: 100vh;
  display: flex;
  align-items: center;
}

.hero::before {
  content: '';
  position: absolute;
  top: -50%;
  right: -20%;
  width: 600px;
  height: 600px;
  background: radial-gradient(circle, rgba(255,215,0,0.08) 0%, transparent 70%);
  border-radius: 50%;
  animation: pulse-glow 4s ease-in-out infinite;
}

.hero::after {
  content: '';
  position: absolute;
  bottom: -30%;
  left: -10%;
  width: 500px;
  height: 500px;
  background: radial-gradient(circle, rgba(255,215,0,0.05) 0%, transparent 70%);
  border-radius: 50%;
  animation: pulse-glow 5s ease-in-out infinite reverse;
}

@keyframes pulse-glow {
  0%, 100% { transform: scale(1); opacity: 0.5; }
  50% { transform: scale(1.15); opacity: 1; }
}

.hero-content {
  position: relative;
  z-index: 2;
  text-align: center;
  max-width: 800px;
  margin: 0 auto;
}

.hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(255,215,0,0.15);
  border: 1px solid rgba(255,215,0,0.3);
  color: var(--secondary);
  font-size: 14px;
  font-weight: 600;
  padding: 8px 24px;
  border-radius: 50px;
  margin-bottom: 28px;
  backdrop-filter: blur(10px);
  animation: fadeInDown 0.8s ease-out;
}

@keyframes fadeInDown {
  from { opacity: 0; transform: translateY(-20px); }
  to { opacity: 1; transform: translateY(0); }
}

.hero-title {
  font-size: 48px;
  font-weight: 900;
  color: var(--white);
  line-height: 1.15;
  margin-bottom: 20px;
  animation: fadeInUp 0.8s ease-out 0.2s both;
}

.hero-title .highlight {
  color: var(--secondary);
  position: relative;
}

.hero-subtitle {
  font-size: 19px;
  color: rgba(255,255,255,0.85);
  margin-bottom: 40px;
  line-height: 1.7;
  font-weight: 400;
  animation: fadeInUp 0.8s ease-out 0.4s both;
}

@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}

.hero-cta-group {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 16px;
  animation: fadeInUp 0.8s ease-out 0.6s both;
}

.btn-whatsapp {
  display: inline-flex;
  align-items: center;
  gap: 12px;
  background: linear-gradient(135deg, #25D366, #128C7E);
  color: var(--white);
  font-family: 'Poppins', sans-serif;
  font-size: 18px;
  font-weight: 700;
  padding: 18px 40px;
  border: none;
  border-radius: 60px;
  cursor: pointer;
  text-decoration: none;
  transition: var(--transition);
  box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);
  letter-spacing: 0.5px;
}

.btn-whatsapp:hover {
  transform: translateY(-3px) scale(1.02);
  box-shadow: 0 8px 30px rgba(37, 211, 102, 0.5);
}

.btn-whatsapp:active {
  transform: translateY(-1px) scale(0.99);
}

.btn-whatsapp svg {
  width: 24px;
  height: 24px;
  fill: currentColor;
}

.hero-trust {
  color: rgba(255,255,255,0.6);
  font-size: 14px;
  font-weight: 400;
}

.hero-trust strong {
  color: var(--secondary);
  font-weight: 600;
}

.hero-stats {
  display: flex;
  justify-content: center;
  gap: 40px;
  margin-top: 56px;
  animation: fadeInUp 0.8s ease-out 0.8s both;
}

.hero-stat {
  text-align: center;
}

.hero-stat-number {
  font-size: 36px;
  font-weight: 800;
  color: var(--secondary);
  line-height: 1;
}

.hero-stat-label {
  font-size: 13px;
  color: rgba(255,255,255,0.7);
  margin-top: 6px;
  font-weight: 400;
}

/* ========== PAIN POINTS SECTION ========== */
.pain-section {
  background: var(--off-white);
}

.pain-cards {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
}

.pain-card {
  background: var(--white);
  border-radius: var(--radius);
  padding: 40px 32px;
  text-align: center;
  border: 1px solid #eee;
  transition: var(--transition);
  position: relative;
  overflow: hidden;
}

.pain-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(90deg, #ff6b6b, #ee5a24);
  opacity: 0;
  transition: var(--transition);
}

.pain-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-md);
}

.pain-card:hover::before {
  opacity: 1;
}

.pain-icon {
  font-size: 48px;
  margin-bottom: 20px;
  display: block;
}

.pain-title {
  font-size: 22px;
  font-weight: 700;
  color: var(--text-dark);
  margin-bottom: 12px;
}

.pain-desc {
  font-size: 15px;
  color: var(--text-light);
  line-height: 1.7;
}

/* ========== BENEFITS SECTION ========== */
.benefits-section {
  background: var(--white);
}

.benefits-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
}

.benefit-card {
  background: var(--white);
  border: 1px solid #e8e8e8;
  border-radius: var(--radius);
  padding: 36px 28px;
  transition: var(--transition);
  position: relative;
  overflow: hidden;
}

.benefit-card::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(90deg, var(--primary), var(--accent));
  transform: scaleX(0);
  transition: transform 0.4s ease;
}

.benefit-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-md);
  border-color: transparent;
}

.benefit-card:hover::after {
  transform: scaleX(1);
}

.benefit-icon-wrap {
  width: 64px;
  height: 64px;
  background: var(--light-green);
  border-radius: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 32px;
  margin-bottom: 20px;
  transition: var(--transition);
}

.benefit-card:hover .benefit-icon-wrap {
  background: var(--primary);
  transform: rotate(-5deg) scale(1.05);
}

.benefit-card:hover .benefit-icon-wrap .benefit-emoji {
  filter: brightness(2);
}

.benefit-title {
  font-size: 19px;
  font-weight: 700;
  color: var(--primary);
  margin-bottom: 10px;
}

.benefit-desc {
  font-size: 14px;
  color: var(--text-light);
  line-height: 1.7;
}

/* ========== HOW IT WORKS ========== */
.how-section {
  background: linear-gradient(160deg, var(--primary) 0%, #01602f 100%);
  color: var(--white);
  position: relative;
  overflow: hidden;
}

.how-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-image: radial-gradient(rgba(255,215,0,0.06) 1px, transparent 1px);
  background-size: 30px 30px;
}

.how-section .section-title {
  color: var(--white);
}

.how-section .section-subtitle {
  color: rgba(255,255,255,0.7);
}

.how-steps {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 32px;
  position: relative;
  z-index: 2;
}

.how-step {
  text-align: center;
  padding: 40px 24px;
  background: rgba(255,255,255,0.07);
  border: 1px solid rgba(255,255,255,0.12);
  border-radius: var(--radius);
  backdrop-filter: blur(10px);
  transition: var(--transition);
}

.how-step:hover {
  background: rgba(255,255,255,0.12);
  transform: translateY(-6px);
}

.step-number {
  width: 64px;
  height: 64px;
  background: linear-gradient(135deg, var(--secondary), var(--secondary-dark));
  color: var(--primary);
  font-size: 28px;
  font-weight: 900;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 20px;
}

.step-icon {
  font-size: 44px;
  margin-bottom: 16px;
  display: block;
}

.step-title {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 10px;
  color: var(--secondary);
}

.step-desc {
  font-size: 15px;
  color: rgba(255,255,255,0.8);
  line-height: 1.7;
}

/* ========== INCOME SIMULATION ========== */
.income-section {
  background: var(--off-white);
}

.income-table-wrap {
  max-width: 750px;
  margin: 0 auto;
  background: var(--white);
  border-radius: var(--radius);
  overflow: hidden;
  box-shadow: var(--shadow-md);
  border: 2px solid var(--primary);
}

.income-table {
  width: 100%;
  border-collapse: collapse;
}

.income-table thead th {
  background: linear-gradient(135deg, var(--primary), var(--primary-light));
  color: var(--white);
  font-size: 15px;
  font-weight: 700;
  padding: 20px 24px;
  text-align: center;
  letter-spacing: 0.5px;
}

.income-table tbody td {
  padding: 20px 24px;
  text-align: center;
  font-size: 16px;
  border-bottom: 1px solid #eee;
  transition: var(--transition);
}

.income-table tbody tr:hover {
  background: var(--light-green);
}

.income-table tbody tr:last-child td {
  border-bottom: none;
}

.income-table .closing-count {
  font-weight: 700;
  color: var(--primary);
  font-size: 18px;
}

.income-table .income-amount {
  font-weight: 800;
  color: var(--accent);
  font-size: 20px;
}

.income-table .income-highlight {
  background: linear-gradient(135deg, rgba(255,215,0,0.1), rgba(34,139,34,0.1));
}

.income-table .income-highlight td {
  border-bottom: none;
}

.income-table .income-highlight .income-amount {
  color: var(--primary);
  font-size: 24px;
}

.income-note {
  text-align: center;
  margin-top: 24px;
  font-size: 14px;
  color: var(--text-light);
  font-style: italic;
}

/* ========== TESTIMONIALS ========== */
.testimonials-section {
  background: var(--white);
}

.testimonials-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
}

.testimonial-card {
  background: var(--white);
  border: 1px solid #e8e8e8;
  border-radius: var(--radius);
  padding: 36px 28px;
  position: relative;
  transition: var(--transition);
}

.testimonial-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-md);
  border-color: var(--secondary);
}

.testimonial-quote-icon {
  font-size: 40px;
  color: var(--secondary);
  opacity: 0.4;
  position: absolute;
  top: 20px;
  right: 24px;
  font-family: Georgia, serif;
  line-height: 1;
}

.testimonial-stars {
  color: var(--secondary);
  font-size: 18px;
  margin-bottom: 16px;
  letter-spacing: 2px;
}

.testimonial-text {
  font-size: 15px;
  color: var(--text-medium);
  line-height: 1.8;
  margin-bottom: 24px;
  font-style: italic;
}

.testimonial-author {
  display: flex;
  align-items: center;
  gap: 14px;
}

.testimonial-avatar {
  width: 52px;
  height: 52px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--primary), var(--accent));
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--white);
  font-weight: 700;
  font-size: 20px;
  flex-shrink: 0;
}

.testimonial-name {
  font-size: 16px;
  font-weight: 700;
  color: var(--text-dark);
}

.testimonial-role {
  font-size: 13px;
  color: var(--text-light);
  font-weight: 500;
}

/* ========== TARGET AUDIENCE ========== */
.target-section {
  background: var(--off-white);
}

.target-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
  max-width: 850px;
  margin: 0 auto;
}

.target-card {
  background: var(--white);
  border: 1px solid #e8e8e8;
  border-radius: var(--radius-sm);
  padding: 28px 20px;
  text-align: center;
  transition: var(--transition);
}

.target-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-md);
  border-color: var(--secondary);
}

.target-emoji {
  font-size: 44px;
  margin-bottom: 12px;
  display: block;
}

.target-label {
  font-size: 16px;
  font-weight: 600;
  color: var(--primary);
}

/* ========== FAQ SECTION ========== */
.faq-section {
  background: var(--white);
}

.faq-list {
  max-width: 780px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: 14px;
}

.faq-item {
  background: var(--off-white);
  border: 1px solid #e8e8e8;
  border-radius: var(--radius-sm);
  overflow: hidden;
  transition: var(--transition);
}

.faq-item:hover {
  border-color: var(--primary);
}

.faq-question {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 22px 28px;
  background: transparent;
  border: none;
  cursor: pointer;
  font-family: 'Poppins', sans-serif;
  font-size: 16px;
  font-weight: 600;
  color: var(--text-dark);
  text-align: left;
  gap: 16px;
  transition: var(--transition);
}

.faq-question:hover {
  color: var(--primary);
}

.faq-toggle {
  width: 32px;
  height: 32px;
  background: var(--primary);
  color: var(--white);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
  font-weight: 300;
  flex-shrink: 0;
  transition: var(--transition);
}

.faq-item.active .faq-toggle {
  background: var(--secondary);
  color: var(--primary);
  transform: rotate(45deg);
}

.faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.4s ease, padding 0.4s ease;
}

.faq-item.active .faq-answer {
  max-height: 300px;
}

.faq-answer-inner {
  padding: 0 28px 24px;
  font-size: 15px;
  color: var(--text-light);
  line-height: 1.8;
}

/* ========== FINAL CTA ========== */
.final-cta-section {
  background: linear-gradient(160deg, var(--primary) 0%, #013318 100%);
  padding: 100px 0;
  text-align: center;
  position: relative;
  overflow: hidden;
}

.final-cta-section::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 800px;
  height: 800px;
  background: radial-gradient(circle, rgba(255,215,0,0.06) 0%, transparent 60%);
  border-radius: 50%;
}

.final-cta-content {
  position: relative;
  z-index: 2;
}

.final-urgency-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(255,69,58,0.15);
  border: 1px solid rgba(255,69,58,0.3);
  color: #ff6b6b;
  font-size: 14px;
  font-weight: 700;
  padding: 10px 28px;
  border-radius: 50px;
  margin-bottom: 28px;
  animation: pulse-badge 2s ease-in-out infinite;
}

@keyframes pulse-badge {
  0%, 100% { transform: scale(1); }
  50% { transform: scale(1.05); }
}

.final-title {
  font-size: 40px;
  font-weight: 900;
  color: var(--white);
  margin-bottom: 16px;
  line-height: 1.2;
}

.final-title .gold {
  color: var(--secondary);
}

.final-subtitle {
  font-size: 18px;
  color: rgba(255,255,255,0.75);
  margin-bottom: 40px;
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
}

.btn-whatsapp-large {
  display: inline-flex;
  align-items: center;
  gap: 14px;
  background: linear-gradient(135deg, #25D366, #128C7E);
  color: var(--white);
  font-family: 'Poppins', sans-serif;
  font-size: 20px;
  font-weight: 800;
  padding: 22px 52px;
  border: none;
  border-radius: 60px;
  cursor: pointer;
  text-decoration: none;
  transition: var(--transition);
  box-shadow: 0 6px 30px rgba(37, 211, 102, 0.45);
  letter-spacing: 0.5px;
}

.btn-whatsapp-large:hover {
  transform: translateY(-4px) scale(1.03);
  box-shadow: 0 10px 40px rgba(37, 211, 102, 0.55);
}

.btn-whatsapp-large svg {
  width: 28px;
  height: 28px;
  fill: currentColor;
}

.final-slots {
  margin-top: 20px;
  font-size: 14px;
  color: rgba(255,255,255,0.5);
}

/* ========== FOOTER ========== */
.footer {
  background: #0a0f0a;
  padding: 36px 0;
  text-align: center;
}

.footer-text {
  font-size: 13px;
  color: rgba(255,255,255,0.4);
  line-height: 1.8;
}

.footer-text a {
  color: var(--secondary);
  text-decoration: none;
}

/* ========== FLOATING WHATSAPP BUTTON ========== */
.floating-wa {
  position: fixed;
  bottom: 28px;
  right: 28px;
  z-index: 9999;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 8px;
  text-decoration: none;
  animation: float-bounce 3s ease-in-out infinite;
}

@keyframes float-bounce {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-8px); }
}

.floating-wa-btn {
  width: 64px;
  height: 64px;
  background: linear-gradient(135deg, #25D366, #128C7E);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 24px rgba(37, 211, 102, 0.5);
  transition: var(--transition);
}

.floating-wa:hover .floating-wa-btn {
  transform: scale(1.1);
  box-shadow: 0 6px 32px rgba(37, 211, 102, 0.6);
}

.floating-wa-btn svg {
  width: 34px;
  height: 34px;
  fill: white;
}

.floating-wa-label {
  background: var(--primary);
  color: var(--white);
  font-size: 11px;
  font-weight: 600;
  padding: 4px 12px;
  border-radius: 20px;
  white-space: nowrap;
}

/* ========== RESPONSIVE ========== */
@media (max-width: 900px) {
  .hero-title { font-size: 36px; }
  .hero-subtitle { font-size: 16px; }
  .section-title { font-size: 30px; }
  .hero-stats { gap: 24px; }
  .hero-stat-number { font-size: 28px; }

  .pain-cards,
  .benefits-grid,
  .how-steps,
  .testimonials-grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .target-grid {
    grid-template-columns: repeat(3, 1fr);
  }
}

@media (max-width: 600px) {
  .section { padding: 60px 0; }
  .container { padding: 0 16px; }

  .hero { padding: 80px 0 60px; min-height: auto; }
  .hero-title { font-size: 28px; }
  .hero-subtitle { font-size: 15px; }
  .hero-stats { flex-direction: column; gap: 20px; margin-top: 40px; }
  .hero-stat-number { font-size: 30px; }

  .btn-whatsapp {
    font-size: 16px;
    padding: 16px 32px;
    width: 100%;
    justify-content: center;
  }

  .section-title { font-size: 26px; }
  .section-subtitle { font-size: 15px; }
  .section-header { margin-bottom: 40px; }

  .pain-cards,
  .benefits-grid,
  .how-steps,
  .testimonials-grid {
    grid-template-columns: 1fr;
  }

  .target-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
  }

  .income-table thead th { padding: 14px 12px; font-size: 13px; }
  .income-table tbody td { padding: 14px 12px; font-size: 14px; }
  .income-table .income-amount { font-size: 16px; }
  .income-table .income-highlight .income-amount { font-size: 18px; }

  .faq-question { padding: 18px 20px; font-size: 15px; }
  .faq-answer-inner { padding: 0 20px 20px; }

  .final-title { font-size: 28px; }
  .final-subtitle { font-size: 16px; }
  .btn-whatsapp-large {
    font-size: 17px;
    padding: 18px 36px;
    width: 100%;
    justify-content: center;
  }

  .floating-wa { bottom: 20px; right: 20px; }
  .floating-wa-btn { width: 56px; height: 56px; }
  .floating-wa-btn svg { width: 28px; height: 28px; }
}
</style>
</head>
<body>

<!-- ========== HERO SECTION ========== -->
<section class="hero" id="hero">
  <div class="container">
    <div class="hero-content">
      <div class="hero-eyebrow">🔥 Peluang Terbatas — Daftar Sekarang!</div>
      <h1 class="hero-title">
        Hasilkan <span class="highlight">Jutaan Rupiah</span> dari HP,<br>Tanpa Modal, Tanpa Ribet!
      </h1>
      <p class="hero-subtitle">
        Bergabunglah sebagai agen freelance pemasaran Tanah Kavling dan raih penghasilan tambahan hingga puluhan juta rupiah per bulan — cukup dari smartphone Anda.
      </p>
      <div class="hero-cta-group">
        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20tertarik%20gabung%20jadi%20agen%20freelance%20Tanah%20Kavling" class="btn-whatsapp" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          Gabung Sekarang via WhatsApp
        </a>
        <span class="hero-trust">✅ Gratis pendaftaran · <strong>100+ agen</strong> sudah bergabung</span>
      </div>
      <div class="hero-stats">
        <div class="hero-stat">
          <div class="hero-stat-number">100+</div>
          <div class="hero-stat-label">Agen Aktif</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-number">500+</div>
          <div class="hero-stat-label">Kavling Terjual</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-number">2-5 Jt</div>
          <div class="hero-stat-label">Komisi / Closing</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== PAIN POINTS ========== -->
<section class="section pain-section" id="masalah">
  <div class="container">
    <div class="section-header animate-on-scroll">
      <span class="section-badge">Kenali Masalahnya</span>
      <h2 class="section-title">Apakah Kamu Mengalami Ini?</h2>
      <p class="section-subtitle">Banyak orang ingin penghasilan tambahan, tapi terhalang berbagai kendala. Apakah kamu salah satunya?</p>
    </div>
    <div class="pain-cards">
      <div class="pain-card animate-on-scroll animate-delay-1">
        <span class="pain-icon">😩</span>
        <h3 class="pain-title">Gaji Pas-pasan?</h3>
        <p class="pain-desc">Setiap bulan habis untuk kebutuhan pokok. Nggak ada sisa untuk ditabung, apalagi investasi. Terasa stuck dan sulit berkembang.</p>
      </div>
      <div class="pain-card animate-on-scroll animate-delay-2">
        <span class="pain-icon">🤔</span>
        <h3 class="pain-title">Mau Side Income Tapi Bingung Mulai?</h3>
        <p class="pain-desc">Sudah coba berbagai cara tapi belum ketemu yang cocok. Banyak peluang ternyata butuh skill rumit atau waktu yang nggak fleksibel.</p>
      </div>
      <div class="pain-card animate-on-scroll animate-delay-3">
        <span class="pain-icon">💸</span>
        <h3 class="pain-title">Nggak Punya Modal Bisnis?</h3>
        <p class="pain-desc">Ingin usaha sendiri tapi terkendala modal. Bisnis online butuh stok barang, sewa tempat, dan biaya operasional yang nggak sedikit.</p>
      </div>
    </div>
  </div>
</section>

<!-- ========== BENEFITS ========== -->
<section class="section benefits-section" id="keuntungan">
  <div class="container">
    <div class="section-header animate-on-scroll">
      <span class="section-badge">Kenapa Harus Gabung?</span>
      <h2 class="section-title">Keuntungan Jadi Agen Freelance</h2>
      <p class="section-subtitle">Kami sudah siapkan semuanya untuk kamu. Tinggal promosi, closing, dan terima komisi!</p>
    </div>
    <div class="benefits-grid">
      <div class="benefit-card animate-on-scroll animate-delay-1">
        <div class="benefit-icon-wrap"><span class="benefit-emoji">🆓</span></div>
        <h3 class="benefit-title">Tanpa Modal</h3>
        <p class="benefit-desc">Daftar 100% gratis. Tidak perlu keluar uang sepeser pun untuk mulai menghasilkan.</p>
      </div>
      <div class="benefit-card animate-on-scroll animate-delay-2">
        <div class="benefit-icon-wrap"><span class="benefit-emoji">🏠</span></div>
        <h3 class="benefit-title">Kerja dari Rumah</h3>
        <p class="benefit-desc">Cukup dari HP atau laptop. Bisa dikerjakan kapan saja dan di mana saja tanpa terikat waktu.</p>
      </div>
      <div class="benefit-card animate-on-scroll animate-delay-3">
        <div class="benefit-icon-wrap"><span class="benefit-emoji">💰</span></div>
        <h3 class="benefit-title">Komisi Besar</h3>
        <p class="benefit-desc">Dapatkan Rp 2 - 5 Juta untuk setiap closing. Semakin banyak closing, semakin besar penghasilanmu.</p>
      </div>
      <div class="benefit-card animate-on-scroll animate-delay-4">
        <div class="benefit-icon-wrap"><span class="benefit-emoji">📦</span></div>
        <h3 class="benefit-title">Materi Promosi Siap Pakai</h3>
        <p class="benefit-desc">Kami sediakan foto, video, brosur digital, dan copywriting yang tinggal kamu share ke sosial media.</p>
      </div>
      <div class="benefit-card animate-on-scroll animate-delay-5">
        <div class="benefit-icon-wrap"><span class="benefit-emoji">⚡</span></div>
        <h3 class="benefit-title">Sistem Simpel</h3>
        <p class="benefit-desc">Alur kerja mudah dipahami. Share link, follow up calon pembeli, dan kami yang handle sisanya.</p>
      </div>
      <div class="benefit-card animate-on-scroll animate-delay-6">
        <div class="benefit-icon-wrap"><span class="benefit-emoji">🤝</span></div>
        <h3 class="benefit-title">Bimbingan Tim Support</h3>
        <p class="benefit-desc">Ada tim support dan mentor yang siap membantu kamu dari awal sampai berhasil closing pertama.</p>
      </div>
    </div>
  </div>
</section>

<!-- ========== HOW IT WORKS ========== -->
<section class="section how-section" id="cara-kerja">
  <div class="container">
    <div class="section-header animate-on-scroll">
      <span class="section-badge">Mudah & Simpel</span>
      <h2 class="section-title">Cara Kerjanya</h2>
      <p class="section-subtitle">Hanya 3 langkah sederhana untuk mulai menghasilkan uang dari pemasaran tanah kavling</p>
    </div>
    <div class="how-steps">
      <div class="how-step animate-on-scroll animate-delay-1">
        <div class="step-number">1</div>
        <span class="step-icon">📝</span>
        <h3 class="step-title">Daftar & Gabung Gratis</h3>
        <p class="step-desc">Klik tombol WhatsApp, isi data singkat, dan kamu langsung resmi menjadi agen freelance kami. Tanpa biaya apapun.</p>
      </div>
      <div class="how-step animate-on-scroll animate-delay-2">
        <div class="step-number">2</div>
        <span class="step-icon">📱</span>
        <h3 class="step-title">Promosi dari HP</h3>
        <p class="step-desc">Gunakan materi promosi yang kami sediakan. Share ke WhatsApp, Instagram, Facebook, TikTok, atau platform manapun.</p>
      </div>
      <div class="how-step animate-on-scroll animate-delay-3">
        <div class="step-number">3</div>
        <span class="step-icon">🎉</span>
        <h3 class="step-title">Closing & Terima Komisi</h3>
        <p class="step-desc">Setiap ada calon pembeli yang closing melalui referral kamu, komisi Rp 2-5 juta langsung ditransfer ke rekeningmu.</p>
      </div>
    </div>
  </div>
</section>

<!-- ========== INCOME SIMULATION ========== -->
<section class="section income-section" id="simulasi">
  <div class="container">
    <div class="section-header animate-on-scroll">
      <span class="section-badge">Simulasi Penghasilan</span>
      <h2 class="section-title">Berapa Potensi Penghasilanmu?</h2>
      <p class="section-subtitle">Lihat simulasi penghasilan berdasarkan jumlah closing per bulan. Semua ini bisa kamu raih hanya dari HP!</p>
    </div>
    <div class="income-table-wrap animate-scale">
      <table class="income-table">
        <thead>
          <tr>
            <th>Jumlah Closing / Bulan</th>
            <th>Komisi per Closing</th>
            <th>Total Penghasilan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="closing-count">1 Closing</td>
            <td>Rp 2 - 5 Juta</td>
            <td class="income-amount">Rp 2 - 5 Juta</td>
          </tr>
          <tr>
            <td class="closing-count">3 Closing</td>
            <td>Rp 2 - 5 Juta</td>
            <td class="income-amount">Rp 6 - 15 Juta</td>
          </tr>
          <tr class="income-highlight">
            <td class="closing-count">5 Closing ⭐</td>
            <td>Rp 2 - 5 Juta</td>
            <td class="income-amount">Rp 10 - 25 Juta</td>
          </tr>
        </tbody>
      </table>
    </div>
    <p class="income-note animate-on-scroll">💡 Bayangkan, hanya dengan 5 closing per bulan, penghasilanmu bisa setara bahkan melebihi gaji karyawan kantoran!</p>
  </div>
</section>

<!-- ========== TESTIMONIALS ========== -->
<section class="section testimonials-section" id="testimoni">
  <div class="container">
    <div class="section-header animate-on-scroll">
      <span class="section-badge">Testimoni</span>
      <h2 class="section-title">Apa Kata Mereka yang Sudah Bergabung?</h2>
      <p class="section-subtitle">Ratusan agen sudah membuktikannya. Sekarang giliran kamu!</p>
    </div>
    <div class="testimonials-grid">
      <div class="testimonial-card animate-on-scroll animate-delay-1">
        <div class="testimonial-quote-icon">"</div>
        <div class="testimonial-stars">⭐⭐⭐⭐⭐</div>
        <p class="testimonial-text">"Awalnya cuma iseng daftar, ternyata bulan pertama langsung dapat komisi 8 juta! Materinya lengkap, tinggal share aja. Nggak nyesal gabung!"</p>
        <div class="testimonial-author">
          <div class="testimonial-avatar">RA</div>
          <div>
            <div class="testimonial-name">Rina Amelia</div>
            <div class="testimonial-role">Karyawan Swasta, Jakarta</div>
          </div>
        </div>
      </div>
      <div class="testimonial-card animate-on-scroll animate-delay-2">
        <div class="testimonial-quote-icon">"</div>
        <div class="testimonial-stars">⭐⭐⭐⭐⭐</div>
        <p class="testimonial-text">"Sebagai mahasiswa, ini peluang luar biasa. Saya bisa bayar kuliah sendiri sekarang. Kerjanya fleksibel, nggak ganggu jadwal kuliah sama sekali."</p>
        <div class="testimonial-author">
          <div class="testimonial-avatar">DP</div>
          <div>
            <div class="testimonial-name">Dimas Pratama</div>
            <div class="testimonial-role">Mahasiswa, Bandung</div>
          </div>
        </div>
      </div>
      <div class="testimonial-card animate-on-scroll animate-delay-3">
        <div class="testimonial-quote-icon">"</div>
        <div class="testimonial-stars">⭐⭐⭐⭐⭐</div>
        <p class="testimonial-text">"Alhamdulillah, sambil urus anak di rumah bisa dapat penghasilan tambahan. Bulan kemarin closing 4x, dapat lebih dari 12 juta. Suami sampai kaget!"</p>
        <div class="testimonial-author">
          <div class="testimonial-avatar">SN</div>
          <div>
            <div class="testimonial-name">Siti Nurhaliza</div>
            <div class="testimonial-role">Ibu Rumah Tangga, Surabaya</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== TARGET AUDIENCE ========== -->
<section class="section target-section" id="untuk-siapa">
  <div class="container">
    <div class="section-header animate-on-scroll">
      <span class="section-badge">Untuk Siapa?</span>
      <h2 class="section-title">Peluang Ini Cocok untuk Kamu!</h2>
      <p class="section-subtitle">Siapapun bisa gabung, tanpa batasan usia, latar belakang, atau pengalaman</p>
    </div>
    <div class="target-grid">
      <div class="target-card animate-on-scroll animate-delay-1">
        <span class="target-emoji">💼</span>
        <div class="target-label">Karyawan</div>
      </div>
      <div class="target-card animate-on-scroll animate-delay-2">
        <span class="target-emoji">🎓</span>
        <div class="target-label">Mahasiswa</div>
      </div>
      <div class="target-card animate-on-scroll animate-delay-3">
        <span class="target-emoji">👩‍👧‍👦</span>
        <div class="target-label">Ibu Rumah Tangga</div>
      </div>
      <div class="target-card animate-on-scroll animate-delay-4">
        <span class="target-emoji">💻</span>
        <div class="target-label">Freelancer</div>
      </div>
      <div class="target-card animate-on-scroll animate-delay-5">
        <span class="target-emoji">🛒</span>
        <div class="target-label">Pebisnis Online</div>
      </div>
      <div class="target-card animate-on-scroll animate-delay-6">
        <span class="target-emoji">🌟</span>
        <div class="target-label">Siapa Saja!</div>
      </div>
    </div>
  </div>
</section>

<!-- ========== FAQ ========== -->
<section class="section faq-section" id="faq">
  <div class="container">
    <div class="section-header animate-on-scroll">
      <span class="section-badge">FAQ</span>
      <h2 class="section-title">Pertanyaan yang Sering Ditanyakan</h2>
    </div>
    <div class="faq-list">
      <div class="faq-item animate-on-scroll animate-delay-1">
        <button class="faq-question" onclick="toggleFaq(this)">
          <span>Apakah benar-benar gratis untuk bergabung?</span>
          <span class="faq-toggle">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-inner">Ya, 100% gratis! Kamu tidak perlu mengeluarkan biaya apapun untuk mendaftar dan mulai menjadi agen freelance. Semua materi promosi juga kami sediakan secara cuma-cuma.</div>
        </div>
      </div>
      <div class="faq-item animate-on-scroll animate-delay-2">
        <button class="faq-question" onclick="toggleFaq(this)">
          <span>Apakah saya perlu pengalaman di bidang properti?</span>
          <span class="faq-toggle">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-inner">Tidak perlu sama sekali! Kami akan memberikan training, materi edukasi, dan bimbingan langsung dari tim support kami. Banyak agen sukses kami yang juga mulai dari nol tanpa pengalaman properti.</div>
        </div>
      </div>
      <div class="faq-item animate-on-scroll animate-delay-3">
        <button class="faq-question" onclick="toggleFaq(this)">
          <span>Kapan komisi akan dibayarkan?</span>
          <span class="faq-toggle">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-inner">Komisi akan ditransfer langsung ke rekening kamu setelah proses closing dan pembayaran dari pembeli dikonfirmasi. Proses biasanya memakan waktu 3-7 hari kerja setelah transaksi selesai.</div>
        </div>
      </div>
      <div class="faq-item animate-on-scroll animate-delay-4">
        <button class="faq-question" onclick="toggleFaq(this)">
          <span>Bagaimana cara promosinya?</span>
          <span class="faq-toggle">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-inner">Sangat mudah! Kami sediakan materi promosi berupa gambar, video, dan teks copywriting yang tinggal kamu bagikan ke media sosial seperti WhatsApp, Instagram, Facebook, TikTok, dan lainnya. Kamu juga bisa mempromosikan secara offline kepada kerabat dan kenalan.</div>
        </div>
      </div>
      <div class="faq-item animate-on-scroll animate-delay-5">
        <button class="faq-question" onclick="toggleFaq(this)">
