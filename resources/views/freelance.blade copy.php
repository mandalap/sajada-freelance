<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Freelance Sales Tanah Kavling - Kerja Fleksibel, Tanpa Modal, Komisi Jutaan Rupiah bersama Sajada Digital Agency">
    <title>🔥 Freelance Sales Tanah Kavling - Komisi Jutaan! | Sajada Digital Agency</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            overflow-x: hidden;
            background: #FFFFFF;
        }

        /* Scroll Progress Bar */
        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 4px;
            background: linear-gradient(90deg, #E91E8C 0%, #FFD700 100%);
            z-index: 10000;
            transition: width 0.1s ease;
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 100vh;
            min-height: 650px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background: #1a1a1a;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.8;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(233,30,140,0.85) 0%, rgba(194,24,91,0.85) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
            padding: 20px;
            max-width: 1000px;
            animation: fadeInUp 1s ease;
        }

        .hero h1 {
            font-size: 64px;
            font-weight: 800;
            margin-bottom: 25px;
            text-shadow: 3px 3px 15px rgba(0,0,0,0.5);
            line-height: 1.2;
        }

        .hero-subtext {
            font-size: 24px;
            margin-bottom: 45px;
            font-weight: 600;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.4);
            line-height: 1.5;
        }

        .cta-button {
            display: inline-block;
            padding: 22px 55px;
            background: linear-gradient(135deg, #E91E8C 0%, #C2185B 100%);
            color: white;
            text-decoration: none;
            font-size: 22px;
            font-weight: 700;
            border-radius: 50px;
            box-shadow: 0 15px 45px rgba(233,30,140,0.6);
            animation: pulse 2s infinite;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            border: 3px solid rgba(255,255,255,0.3);
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255,255,255,0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .cta-button:hover::before {
            width: 400px;
            height: 400px;
        }

        .cta-button:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 60px rgba(233,30,140,0.8);
        }

        /* Floating Elements */
        .floating-element {
            position: absolute;
            font-size: 45px;
            animation: float 4s ease-in-out infinite;
            opacity: 0.7;
            z-index: 1;
        }

        .floating-element:nth-child(1) { top: 15%; left: 8%; animation-delay: 0s; }
        .floating-element:nth-child(2) { top: 65%; left: 85%; animation-delay: 1s; }
        .floating-element:nth-child(3) { top: 35%; left: 12%; animation-delay: 2s; }
        .floating-element:nth-child(4) { top: 75%; left: 75%; animation-delay: 1.5s; }

        /* Stats Bar */
        .stats-bar {
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
            padding: 70px 20px;
            position: relative;
            overflow: hidden;
        }

        .stats-bar::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 200%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(233,30,140,0.15), transparent);
            animation: shimmer 4s infinite;
        }

        .stats-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 50px;
        }

        .stat-item {
            text-align: center;
            color: white;
            position: relative;
            z-index: 1;
        }

        .stat-number {
            font-size: 60px;
            font-weight: 800;
            background: linear-gradient(135deg, #E91E8C 0%, #FFD700 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 12px;
            display: block;
        }

        .stat-label {
            font-size: 18px;
            color: #ccc;
            font-weight: 600;
        }

        /* Benefits Section */
        .benefits {
            padding: 110px 20px;
            background: linear-gradient(to bottom, #FFFFFF 0%, #F8F9FA 100%);
        }

        .section-title {
            text-align: center;
            font-size: 50px;
            color: #E91E8C;
            margin-bottom: 75px;
            font-weight: 700;
            animation: fadeInUp 0.8s ease;
        }

        .benefit-row {
            max-width: 1200px;
            margin: 0 auto 90px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 70px;
            align-items: center;
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.9s ease;
        }

        .benefit-row.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .benefit-row.reverse {
            direction: rtl;
        }

        .benefit-row.reverse > * {
            direction: ltr;
        }

        .benefit-image {
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 25px 70px rgba(233,30,140,0.25);
            position: relative;
        }

        .benefit-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(233,30,140,0.1) 0%, rgba(46,204,113,0.1) 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .benefit-image:hover::after {
            opacity: 1;
        }

        .benefit-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.6s ease;
        }

        .benefit-image:hover img {
            transform: scale(1.08);
        }

        .benefit-content {
            padding: 45px;
            background: rgba(255,255,255,0.8);
            backdrop-filter: blur(10px);
            border-radius: 25px;
            border: 2px solid transparent;
            background-clip: padding-box;
            position: relative;
            box-shadow: 0 15px 45px rgba(0,0,0,0.08);
        }

        .benefit-content::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(135deg, #E91E8C 0%, #2ECC71 100%);
            border-radius: 25px;
            z-index: -1;
            opacity: 0.4;
        }

        .benefit-content h2 {
            font-size: 38px;
            color: #E91E8C;
            margin-bottom: 22px;
            font-weight: 700;
        }

        .benefit-content p {
            font-size: 18px;
            line-height: 1.9;
            color: #555;
            margin-bottom: 18px;
        }

        .benefit-list {
            list-style: none;
            margin-top: 35px;
        }

        .benefit-list li {
            font-size: 18px;
            color: #333;
            margin-bottom: 18px;
            padding-left: 40px;
            position: relative;
            line-height: 1.6;
        }

        .benefit-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #2ECC71;
            font-weight: 700;
            font-size: 26px;
        }

        /* Commission Showcase */
        .commission-showcase {
            padding: 110px 20px;
            background: linear-gradient(135deg, #2ECC71 0%, #1ABC9C 100%);
            position: relative;
            overflow: hidden;
        }

        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            background: rgba(255,255,255,0.35);
            border-radius: 50%;
            animation: particleFloat 18s infinite ease-in-out;
        }

        .particle:nth-child(1) { width: 12px; height: 12px; left: 10%; animation-delay: 0s; }
        .particle:nth-child(2) { width: 18px; height: 18px; left: 30%; animation-delay: 2s; }
        .particle:nth-child(3) { width: 10px; height: 10px; left: 50%; animation-delay: 4s; }
        .particle:nth-child(4) { width: 15px; height: 15px; left: 70%; animation-delay: 6s; }
        .particle:nth-child(5) { width: 12px; height: 12px; left: 90%; animation-delay: 8s; }

        .commission-content {
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .commission-image {
            max-width: 450px;
            margin: 0 auto 45px;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 35px 90px rgba(0,0,0,0.3);
            animation: float 4s ease-in-out infinite;
        }

        .commission-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .commission-text {
            font-size: 78px;
            font-weight: 800;
            color: white;
            text-shadow: 0 0 25px rgba(255,255,255,0.6), 0 0 50px rgba(255,215,0,0.4);
            margin-bottom: 35px;
            animation: glow 2.5s ease-in-out infinite;
            letter-spacing: 2px;
        }

        .commission-subtext {
            font-size: 26px;
            color: white;
            font-weight: 600;
            margin-bottom: 25px;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
        }

        /* Timeline Section */
        .timeline-section {
            padding: 110px 20px;
            background: #FFFFFF;
        }

        .timeline {
            max-width: 950px;
            margin: 0 auto;
            position: relative;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 4px;
            background: linear-gradient(180deg, #E91E8C 0%, #C2185B 100%);
            transform: translateX(-50%);
        }

        .timeline-item {
            margin-bottom: 70px;
            position: relative;
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.9s ease;
        }

        .timeline-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .timeline-item:nth-child(odd) .timeline-content {
            margin-left: 0;
            margin-right: auto;
            text-align: right;
            padding-right: 70px;
        }

        .timeline-item:nth-child(even) .timeline-content {
            margin-left: auto;
            margin-right: 0;
            padding-left: 70px;
        }

        .timeline-content {
            width: 45%;
            background: white;
            padding: 38px;
            border-radius: 20px;
            box-shadow: 0 12px 35px rgba(233,30,140,0.15);
            position: relative;
            transition: all 0.3s ease;
        }

        .timeline-content:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(233,30,140,0.25);
        }

        .timeline-dot {
            position: absolute;
            left: 50%;
            top: 35px;
            width: 32px;
            height: 32px;
            background: linear-gradient(135deg, #E91E8C 0%, #C2185B 100%);
            border-radius: 50%;
            transform: translateX(-50%);
            box-shadow: 0 0 0 10px rgba(233,30,140,0.25);
            z-index: 2;
        }

        .timeline-number {
            font-size: 52px;
            font-weight: 800;
            color: #E91E8C;
            margin-bottom: 18px;
        }

        .timeline-content h3 {
            font-size: 26px;
            color: #333;
            margin-bottom: 18px;
            font-weight: 700;
        }

        .timeline-content p {
            font-size: 17px;
            color: #666;
            line-height: 1.7;
        }

        /* Target Audience Section */
        .audience-section {
            padding: 110px 20px;
            background: linear-gradient(to bottom, #F8F9FA 0%, #FFFFFF 100%);
        }

        .audience-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 45px;
        }

        .flip-card {
            perspective: 1000px;
            height: 320px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 25px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 35px;
        }

        .flip-card-front {
            background: linear-gradient(135deg, #E91E8C 0%, #C2185B 100%);
            color: white;
        }

        .flip-card-front .emoji {
            font-size: 85px;
            margin-bottom: 25px;
        }

        .flip-card-front h3 {
            font-size: 30px;
            font-weight: 700;
        }

        .flip-card-back {
            background: white;
            color: #333;
            transform: rotateY(180deg);
            box-shadow: 0 20px 50px rgba(233,30,140,0.25);
            border: 3px solid #E91E8C;
        }

        .flip-card-back h3 {
            font-size: 26px;
            color: #E91E8C;
            margin-bottom: 18px;
            font-weight: 700;
        }

        .flip-card-back p {
            font-size: 17px;
            line-height: 1.7;
            text-align: center;
            color: #555;
        }

        /* Countdown Timer */
        .countdown-section {
            padding: 90px 20px;
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
            text-align: center;
        }

        .countdown-title {
            font-size: 46px;
            color: #E91E8C;
            margin-bottom: 25px;
            font-weight: 700;
        }

        .countdown-subtitle {
            font-size: 22px;
            color: #ccc;
            margin-bottom: 50px;
            font-weight: 600;
        }

        .countdown-timer {
            display: flex;
            justify-content: center;
            gap: 35px;
            flex-wrap: wrap;
        }

        .countdown-item {
            background: linear-gradient(135deg, #E91E8C 0%, #C2185B 100%);
            padding: 35px 45px;
            border-radius: 20px;
            min-width: 140px;
            box-shadow: 0 15px 40px rgba(233,30,140,0.4);
        }

        .countdown-number {
            font-size: 60px;
            font-weight: 800;
            color: white;
            display: block;
            margin-bottom: 12px;
        }

        .countdown-label {
            font-size: 17px;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Testimonials */
        .testimonials-section {
            padding: 110px 20px;
            background: #FFFFFF;
        }

        .testimonials-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 45px;
        }

        .testimonial-card {
            background: white;
            padding: 40px;
            border-radius: 25px;
            box-shadow: 0 12px 45px rgba(0,0,0,0.1);
            transition: all 0.4s ease;
            border: 2px solid transparent;
        }

        .testimonial-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 70px rgba(233,30,140,0.25);
            border-color: #E91E8C;
        }

        .testimonial-header {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }

        .testimonial-avatar {
            width: 65px;
            height: 65px;
            border-radius: 50%;
            background: linear-gradient(135deg, #E91E8C 0%, #C2185B 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            margin-right: 18px;
            box-shadow: 0 5px 15px rgba(233,30,140,0.3);
        }

        .testimonial-info h4 {
            font-size: 19px;
            color: #333;
            margin-bottom: 6px;
            font-weight: 700;
        }

        .testimonial-stars {
            color: #FFD700;
            font-size: 18px;
        }

        .testimonial-text {
            font-size: 17px;
            color: #666;
            line-height: 1.7;
            font-style: italic;
        }

        /* Final CTA Section */
        .final-cta {
            min-height: 650px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: #1a1a1a;
        }

        .cta-image-side {
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .cta-image-side::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(233,30,140,0.75) 0%, rgba(46,204,113,0.75) 100%);
        }

        .cta-content-side {
            padding: 90px 70px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: linear-gradient(135deg, #2d2d2d 0%, #1a1a1a 100%);
        }

        .cta-content-side h2 {
            font-size: 52px;
            color: white;
            margin-bottom: 28px;
            font-weight: 700;
            line-height: 1.3;
        }

        .cta-content-side p {
            font-size: 22px;
            color: #ccc;
            margin-bottom: 25px;
            line-height: 1.7;
        }

        .cta-urgency {
            font-size: 20px;
            color: #E91E8C;
            font-weight: 700;
            margin-bottom: 35px;
            animation: pulse 2s infinite;
        }

        .final-cta-button {
            display: inline-block;
            padding: 28px 65px;
            background: linear-gradient(135deg, #E91E8C 0%, #C2185B 100%);
            color: white;
            text-decoration: none;
            font-size: 26px;
            font-weight: 700;
            border-radius: 50px;
            box-shadow: 0 18px 55px rgba(233,30,140,0.6);
            transition: all 0.3s ease;
            border: 3px solid rgba(255,255,255,0.3);
        }

        .final-cta-button:hover {
            transform: translateY(-6px);
            box-shadow: 0 25px 70px rgba(233,30,140,0.8);
        }

        /* Footer */
        footer {
            background: #0a0a0a;
            padding: 70px 20px 35px;
            color: white;
            text-align: center;
        }

        footer h3 {
            font-size: 32px;
            color: #E91E8C;
            margin-bottom: 18px;
            font-weight: 700;
        }

        footer p {
            font-size: 17px;
            color: #999;
            margin-bottom: 12px;
            line-height: 1.6;
        }

        footer .contact-info {
            font-size: 20px;
            font-weight: 600;
            color: #E91E8C;
            margin: 25px 0;
        }

        footer .social-links {
            margin-top: 35px;
        }

        footer .social-links a {
            color: #E91E8C;
            font-size: 26px;
            margin: 0 18px;
            transition: all 0.3s ease;
            display: inline-block;
        }

        footer .social-links a:hover {
            color: #2ECC71;
            transform: translateY(-4px);
        }

        /* Floating WhatsApp Button */
        .whatsapp-float {
            position: fixed;
            bottom: 35px;
            right: 35px;
            width: 75px;
            height: 75px;
            background: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 38px;
            color: white;
            text-decoration: none;
            box-shadow: 0 12px 35px rgba(37,211,102,0.6);
            z-index: 9998;
            animation: pulse 2.5s infinite;
            transition: all 0.3s ease;
        }

        .whatsapp-float:hover {
            transform: scale(1.15);
            box-shadow: 0 18px 45px rgba(37,211,102,0.8);
        }

        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 130px;
            right: 35px;
            width: 55px;
            height: 55px;
            background: linear-gradient(135deg, #E91E8C 0%, #C2185B 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 26px;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 9998;
            box-shadow: 0 8px 25px rgba(233,30,140,0.5);
        }

        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 40px rgba(233,30,140,0.7);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(60px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.06);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-25px);
            }
        }

        @keyframes glow {
            0%, 100% {
                text-shadow: 0 0 25px rgba(255,255,255,0.6), 0 0 50px rgba(255,215,0,0.4);
            }
            50% {
                text-shadow: 0 0 45px rgba(255,255,255,0.9), 0 0 80px rgba(255,215,0,0.6);
            }
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }

        @keyframes particleFloat {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-120px) rotate(360deg);
                opacity: 0;
            }
        }

        /* Responsive Design */
        @media (max-width: 968px) {
            .hero h1 {
                font-size: 44px;
            }

            .hero-subtext {
                font-size: 20px;
            }

            .cta-button {
                padding: 18px 45px;
                font-size: 19px;
            }

            .section-title {
                font-size: 38px;
            }

            .benefit-row {
                grid-template-columns: 1fr;
                gap: 45px;
            }

            .benefit-row.reverse {
                direction: ltr;
            }

            .benefit-content h2 {
                font-size: 32px;
            }

            .commission-text {
                font-size: 54px;
            }

            .commission-subtext {
                font-size: 20px;
            }

            .timeline::before {
                left: 35px;
            }

            .timeline-item:nth-child(odd) .timeline-content,
            .timeline-item:nth-child(even) .timeline-content {
                width: calc(100% - 90px);
                margin-left: 90px;
                margin-right: 0;
                text-align: left;
                padding-left: 35px;
                padding-right: 35px;
            }

            .timeline-dot {
                left: 35px;
            }

            .final-cta {
                grid-template-columns: 1fr;
            }

            .cta-image-side {
                min-height: 350px;
            }

            .cta-content-side {
                padding: 70px 40px;
            }

            .cta-content-side h2 {
                font-size: 40px;
            }

            .countdown-title {
                font-size: 36px;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 34px;
            }

            .hero-subtext {
                font-size: 17px;
            }

            .cta-button {
                padding: 16px 38px;
                font-size: 17px;
            }

            .stat-number {
                font-size: 46px;
            }

            .section-title {
                font-size: 32px;
            }

            .benefit-content {
                padding: 35px;
            }

            .benefit-content h2 {
                font-size: 28px;
            }

            .commission-text {
                font-size: 42px;
            }

            .countdown-item {
                padding: 25px 35px;
            }

            .countdown-number {
                font-size: 48px;
            }

            .whatsapp-float {
                width: 65px;
                height: 65px;
                font-size: 32px;
                bottom: 25px;
                right: 25px;
            }

            .back-to-top {
                bottom: 110px;
                right: 25px;
                width: 50px;
                height: 50px;
            }

            .final-cta-button {
                padding: 22px 50px;
                font-size: 22px;
            }
        }
    </style>
</head>
<body>
    <!-- Scroll Progress Bar -->
    <div class="scroll-progress" id="scrollProgress"></div>

    <!-- Hero Section -->
    <section class="hero">
        <img src="https://storage.googleapis.com/dall-e-images/5tLi68t6ahhnLpYjqMW1MO32WGz2%2F734d912e-60c6-408b-bda7-4c2d84c0bc60.png" alt="Freelance Sales Success" class="hero-bg">
        <div class="hero-overlay"></div>
        <div class="floating-element">💰</div>
        <div class="floating-element">⭐</div>
        <div class="floating-element">🔥</div>
        <div class="floating-element">💎</div>
        <div class="hero-content">
            <h1>🔥 DIBUKA! FREELANCE SALES TANAH KAVLING 🔥</h1>
            <p class="hero-subtext">Kerja Fleksibel dari Rumah | Tanpa Modal | Komisi Jutaan Rupiah!</p>
            <a href="https://wa.me/6281234567890?text=Halo!%20Saya%20tertarik%20dengan%20freelance%20sales%20tanah%20kavling%20dan%20ingin%20informasi%20lebih%20lanjut" class="cta-button">
                📱 DAFTAR SEKARANG JUGA!
            </a>
        </div>
    </section>

    <!-- Animated Stats Bar -->
    <section class="stats-bar">
        <div class="stats-container">
            <div class="stat-item">
                <span class="stat-number" data-target="500">0</span>
                <div class="stat-label">Member Aktif</div>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="10">0</span>
                <div class="stat-label">Juta+ Komisi Dibayar</div>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="98">0</span>
                <div class="stat-label">% Kepuasan</div>
            </div>
            <div class="stat-item">
                <span class="stat-number">24/7</span>
                <div class="stat-label">Support</div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits">
        <h2 class="section-title">✨ Keuntungan Bergabung dengan Kami</h2>

        <div class="benefit-row">
            <div class="benefit-image">
                <img src="https://storage.googleapis.com/dall-e-images/5tLi68t6ahhnLpYjqMW1MO32WGz2%2Fdfc9d40f-bb2a-42b6-b5ee-6acff7dfbfb7.png" alt="Kerja dari Rumah">
            </div>
            <div class="benefit-content">
                <h2>🏠 Kerja Fleksibel dari Rumah</h2>
                <p>Bekerja kapan saja dan dari mana saja tanpa harus meninggalkan rumah. Atur jadwal kerja sesuai kenyamanan Anda dan tetap produktif!</p>
                <ul class="benefit-list">
                    <li>Tidak perlu datang ke kantor setiap hari</li>
                    <li>Waktu kerja 100% fleksibel, bebas atur sendiri</li>
                    <li>Work-life balance terjaga dengan sempurna</li>
                    <li>Hemat biaya transportasi dan waktu perjalanan</li>
                </ul>
            </div>
        </div>

        <div class="benefit-row reverse">
            <div class="benefit-content">
                <h2>💰 Tanpa Modal & Tanpa Survey</h2>
                <p>Mulai bekerja tanpa perlu modal sepeser pun! Tidak perlu survey ke lokasi, semua materi marketing sudah kami siapkan lengkap untuk Anda.</p>
                <ul class="benefit-list">
                    <li>Zero investment - tidak butuh modal apapun</li>
                    <li>Materi marketing lengkap disediakan gratis</li>
                    <li>Brosur digital, foto, video semua ada</li>
                    <li>Tim support siap membantu 24/7</li>
                </ul>
            </div>
            <div class="benefit-image">
                <img src="https://storage.googleapis.com/dall-e-images/5tLi68t6ahhnLpYjqMW1MO32WGz2%2F22622b16-f54a-4c94-b08f-93833074fd40.png" alt="Tanpa Modal">
            </div>
        </div>
    </section>

    <!-- Commission Showcase -->
    <section class="commission-showcase">
        <div class="particles">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>
        <div class="commission-content">
            <div class="commission-image">
                <img src="https://storage.googleapis.com/dall-e-images/5tLi68t6ahhnLpYjqMW1MO32WGz2%2F22622b16-f54a-4c94-b08f-93833074fd40.png" alt="Komisi Jutaan">
            </div>
            <div class="commission-text">JUTAAN RUPIAH</div>
            <p class="commission-subtext">Potensi Komisi Setiap Transaksi Closing!</p>
            <p class="commission-subtext">💎 Semakin Banyak Closing = Semakin Besar Penghasilan 💎</p>
            <a href="https://wa.me/6281234567890?text=Halo!%20Saya%20ingin%20mengetahui%20detail%20komisi%20dan%20cara%20kerjanya" class="cta-button">
                🚀 CEK DETAIL KOMISI
            </a>
        </div>
    </section>

    <!-- Timeline: How It Works -->
    <section class="timeline-section">
        <h2 class="section-title">📝 Cara Kerja yang Sangat Mudah!</h2>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="timeline-number">01</div>
                    <h3>Daftar & Dapatkan Materi</h3>
                    <p>Hubungi kami melalui WhatsApp dan dapatkan akses lengkap ke semua materi marketing seperti brosur digital berkualitas, foto lokasi HD, daftar harga, dan informasi produk yang detail.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="timeline-number">02</div>
                    <h3>Promosikan ke Jaringan Anda</h3>
                    <p>Bagikan materi marketing ke media sosial, grup WhatsApp, teman, keluarga, kolega, atau siapapun yang berpotensi tertarik membeli tanah kavling untuk investasi atau hunian.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="timeline-number">03</div>
                    <h3>Follow Up Calon Pembeli</h3>
                    <p>Lakukan komunikasi dan follow up dengan calon pembeli yang menunjukkan ketertarikan. Tim kami akan selalu siap membantu menjawab pertanyaan teknis dan memfasilitasi proses transaksi.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="timeline-number">04</div>
                    <h3>Terima Komisi Langsung!</h3>
                    <p>Begitu transaksi closing berhasil, komisi langsung ditransfer ke rekening Anda! Tidak ada potongan, tidak ada penundaan. Semakin banyak closing, semakin besar penghasilan Anda!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Target Audience -->
    <section class="audience-section">
        <h2 class="section-title">👥 Cocok untuk Siapa Saja!</h2>
        <div class="audience-grid">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <span class="emoji">💼</span>
                        <h3>Karyawan</h3>
                    </div>
                    <div class="flip-card-back">
                        <h3>Karyawan</h3>
                        <p>Cari penghasilan tambahan tanpa mengganggu pekerjaan utama. Kerja di waktu luang setelah kantor, dapat komisi jutaan rupiah per bulan!</p>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <span class="emoji">🎓</span>
                        <h3>Mahasiswa</h3>
                    </div>
                    <div class="flip-card-back">
                        <h3>Mahasiswa</h3>
                        <p>Sambil kuliah bisa cuan! Sangat fleksibel, bisa kerja dari kampus, kosan, atau kafe. Modal HP dan internet saja sudah cukup untuk mulai!</p>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <span class="emoji">👩‍🍳</span>
                        <h3>Ibu Rumah Tangga</h3>
                    </div>
                    <div class="flip-card-back">
                        <h3>Ibu Rumah Tangga</h3>
                        <p>Tetap produktif di rumah sambil mengurus keluarga. Kerja sambil masak, sambil nemenin anak belajar, atau kapanpun Anda sempat!</p>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <span class="emoji">💻</span>
                        <h3>Pebisnis Online</h3>
                    </div>
                    <div class="flip-card-back">
                        <h3>Pebisnis Online</h3>
                        <p>Tambah income stream baru! Manfaatkan network yang sudah ada dan skill marketing untuk menjual properti dengan komisi lebih besar.</p>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <span class="emoji">📢</span>
                        <h3>Freelance Marketer</h3>
                    </div>
                    <div class="flip-card-back">
                        <h3>Freelance Marketer</h3>
                        <p>Skill marketing Anda sangat berharga di sini! Komisi properti jauh lebih besar dibanding produk lain dengan effort yang sama.</p>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <span class="emoji">🌟</span>
                        <h3>Siapa Saja!</h3>
                    </div>
                    <div class="flip-card-back">
                        <h3>Siapa Saja!</h3>
                        <p>Selama punya HP dan internet, semua orang bisa! Tidak peduli background pendidikan atau pengalaman kerja sebelumnya.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Countdown Timer -->
    <section class="countdown-section">
        <h2 class="countdown-title">⏰ PROMO TERBATAS!</h2>
        <p class="countdown-subtitle">Bonus Ekstra untuk 50 Pendaftar Pertama Hari Ini!</p>
        <div class="countdown-timer">
            <div class="countdown-item">
                <span class="countdown-number" id="hours">23</span>
                <span class="countdown-label">Jam</span>
            </div>
            <div class="countdown-item">
                <span class="countdown-number" id="minutes">59</span>
                <span class="countdown-label">Menit</span>
            </div>
            <div class="countdown-item">
                <span class="countdown-number" id="seconds">59</span>
                <span class="countdown-label">Detik</span>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials-section">
        <h2 class="section-title">⭐ Apa Kata Mereka?</h2>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-header">
                    <div class="testimonial-avatar">👨</div>
                    <div class="testimonial-info">
                        <h4>Budi Santoso</h4>
                        <div class="testimonial-stars">⭐⭐⭐⭐⭐</div>
                    </div>
                </div>
                <p class="testimonial-text">"Gak nyangka bisa dapet komisi 15 juta dalam 2 bulan pertama! Padahal sambil kerja kantoran masih bisa fokus. Tim support-nya sangat membantu. Mantap banget!"</p>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-header">
                    <div class="testimonial-avatar">👩</div>
                    <div class="testimonial-info">
                        <h4>Siti Aminah</h4>
                        <div class="testimonial-stars">⭐⭐⭐⭐⭐</div>
                    </div>
                </div>
                <p class="testimonial-text">"Sebagai IRT, ini peluang terbaik yang pernah saya temukan! Kerja dari rumah, dapet penghasilan sendiri tanpa keluar rumah. Suami happy, saya juga seneng!"</p>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-header">
                    <div class="testimonial-avatar">👨‍🎓</div>
                    <div class="testimonial-info">
                        <h4>Rizky Fadillah</h4>
                        <div class="testimonial-stars">⭐⭐⭐⭐⭐</div>
                    </div>
                </div>
                <p class="testimonial-text">"Mahasiswa semester akhir tapi udah punya penghasilan sendiri! Closing pertama langsung 8 juta. Makasih banget tim support-nya yang sabar dan helpful!"</p>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="final-cta">
        <div class="cta-image-side" style="background-image: url('https://storage.googleapis.com/dall-e-images/5tLi68t6ahhnLpYjqMW1MO32WGz2%2F734d912e-60c6-408b-bda7-4c2d84c0bc60.png');"></div>
        <div class="cta-content-side">
            <h2>🔥 Jangan Lewatkan Kesempatan Ini!</h2>
            <p>Ratusan orang sudah menghasilkan jutaan rupiah setiap bulannya dari program ini. Sekarang giliran Anda meraih kesuksesan finansial!</p>
            <p class="cta-urgency">⚡ Slot Terbatas! Daftar Sekarang Sebelum Terlambat!</p>
            <a href="https://wa.me/6281234567890?text=Halo!%20Saya%20siap%20bergabung%20sebagai%20freelance%20sales%20tanah%20kavling!%20Mohon%20info%20lengkapnya" class="final-cta-button">
                📱 HUBUNGI KAMI SEKARANG!
            </a>
            <p style="margin-top: 35px; color: #999; font-size: 15px; line-height: 1.8;">
                ✓ Respon Cepat dalam 5 Menit<br>
                ✓ Support Team 24/7<br>
                ✓ Gratis Konsultasi & Training
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <h3>Sajada Digital Agency</h3>
        <p>Freelance Sales Tanah Kavling</p>
        <p>Raih Penghasilan Jutaan Rupiah dengan Kerja Fleksibel!</p>
        <p class="contact-info">
            📞 WhatsApp: 0812-3456-7890
        </p>
        <div class="social-links">
            <a href="#" aria-label="Facebook">📘</a>
            <a href="#" aria-label="Instagram">📷</a>
            <a href="#" aria-label="Twitter">🐦</a>
        </div>
        <p style="margin-top: 45px; font-size: 14px; opacity: 0.6;">
            © 2024 Sajada Digital Agency - Freelance Sales Tanah Kavling. All Rights Reserved.
        </p>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/6281234567890?text=Halo!%20Saya%20mau%20informasi%20lebih%20lanjut%20tentang%20freelance%20sales%20tanah%20kavling" class="whatsapp-float" target="_blank" aria-label="Chat WhatsApp">
        💬
    </a>

    <!-- Back to Top Button -->
    <div class="back-to-top" id="backToTop" aria-label="Back to top">
        ↑
    </div>

    <script>
        // Scroll Progress Bar
        function updateScrollProgress() {
            const scrollProgress = document.getElementById('scrollProgress');
            const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (window.scrollY / scrollHeight) * 100;
            scrollProgress.style.width = scrolled + '%';
        }

        window.addEventListener('scroll', updateScrollProgress);

        // Back to Top Button
        const backToTop = document.getElementById('backToTop');

        function toggleBackToTop() {
            if (window.scrollY > 500) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        }

        window.addEventListener('scroll', toggleBackToTop);

        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Animated Counter
        function animateCounter(element) {
            const target = parseInt(element.getAttribute('data-target'));
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;

            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    element.textContent = target + (target === 98 ? '' : '+');
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current) + (target === 98 ? '' : '+');
                }
            }, 16);
        }

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');

                    // Animate counters when stat-item becomes visible
                    if (entry.target.classList.contains('stat-item')) {
                        const counter = entry.target.querySelector('.stat-number[data-target]');
                        if (counter && !counter.classList.contains('animated')) {
                            counter.classList.add('animated');
                            animateCounter(counter);
                        }
                    }

                    // Stop observing once animated
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe elements when DOM is ready
        document.addEventListener('DOMContentLoaded', () => {
            // Observe benefit rows
            const benefitRows = document.querySelectorAll('.benefit-row');
            benefitRows.forEach(row => observer.observe(row));

            // Observe timeline items
            const timelineItems = document.querySelectorAll('.timeline-item');
            timelineItems.forEach(item => observer.observe(item));

            // Observe stat items for counter animation
            const statItems = document.querySelectorAll('.stat-item');
            statItems.forEach(item => observer.observe(item));
        });

        // Countdown Timer
        function updateCountdown() {
            const now = new Date().getTime();
            const tomorrow = new Date();
            tomorrow.setHours(24, 0, 0, 0);
            const distance = tomorrow - now;

            if (distance > 0) {
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
                document.getElementById('minutes').textContent = minutes.toString().padStart(2,
