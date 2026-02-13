<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil - Tanah Kavling Freelance</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand">
                <img src="{{ asset('icon_logo.png') }}" alt="Tanah Kavling Freelance" class="navbar-logo">
                <span class="brand-text">Tanah Kavling Freelance</span>
            </a>
        </div>
    </nav>

    <!-- Header Section -->
    <section class="hero success-hero">
        <div class="container">
            <div class="hero-content">
                <div class="success-icon">✓</div>
                <h1 class="hero-title">Pendaftaran Berhasil!</h1>
                <p class="hero-subtitle">
                    Selamat! Data Anda telah berhasil tersimpan. Anda sekarang resmi terdaftar sebagai agen freelance Tanah Kavling kami.
                </p>
            </div>
        </div>
    </section>

    <!-- Next Steps -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Langkah Selanjutnya</span>
                <h2 class="section-title">Apa yang Harus Dilakukan?</h2>
            </div>

            <div class="steps-cards">
                <div class="step-card">
                    <div class="success-step-icon">📱</div>
                    <h3 class="success-step-title">Tunggu Kontak</h3>
                    <p class="success-step-desc">
                        Tim kami akan menghubungi Anda melalui WhatsApp atau email dalam 1-2 hari kerja. Pastikan kontak yang Anda berikan aktif.
                    </p>
                </div>

                <div class="step-card">
                    <div class="success-step-icon">📦</div>
                    <h3 class="success-step-title">Ikuti Training</h3>
                    <p class="success-step-desc">
                        Anda akan mendapatkan akses ke materi training, brosur digital, dan panduan promosi. Pelajari semuanya dengan baik.
                    </p>
                </div>

                <div class="step-card">
                    <div class="success-step-icon">📱</div>
                    <h3 class="success-step-title">Mulai Promosi</h3>
                    <p class="success-step-desc">
                        Gunakan materi promosi yang kami sediakan. Share ke WhatsApp, Instagram, Facebook, TikTok, dan media sosial lainnya.
                    </p>
                </div>

                <div class="step-card">
                    <div class="success-step-icon">🎯</div>
                    <h3 class="success-step-title">Closing & Komisi</h3>
                    <p class="success-step-desc">
                        Setiap ada pembeli yang closing melalui referral Anda, komisi Rp 1-5 juta akan langsung ditransfer ke rekening Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Reminder -->
    <section class="section benefits-section">
        <div class="container">
            <div class="benefits-highlight">
                <h2 class="benefits-highlight-title">💰 Ingat Keuntungannya:</h2>
                <ul class="benefits-list">
                    <li>✅ <strong>Tanpa Modal</strong> - Daftar dan mulai kerja 100% gratis</li>
                    <li>✅ <strong>Kerja Fleksibel</strong> - Dari mana saja, kapan saja</li>
                    <li>✅ <strong>Komisi Besar</strong> - Rp 1-5 juta per closing</li>
                    <li>✅ <strong>Materi Lengkap</strong> - Tinggal pakai dan share</li>
                    <li>✅ <strong>Support Tim</strong> - Tim bantuan siap membantu</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="final-cta-section">
        <div class="container">
            <h2 class="final-title">Siap Mulai Menghasilkan? 🚀</h2>
            <p class="final-subtitle">
                Sambil menunggu tim kami menghubungi, Anda bisa mulai persiapkan diri. Join grup komunitas agen untuk tips dan trik.
            </p>
            <div class="cta-buttons">
                <a href="{{ route('home') }}" class="btn btn-outline">
                    ← Kembali ke Beranda
                </a>
                <a href="https://wa.me/6285828744944?text=Halo%2C%20saya%20sudah%20daftar%2C%20mau%20tanya%20info%20selanjutnya" class="btn btn-primary btn-large" target="_blank">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.888 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    Hubungi via WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="footer-text">© {{ date('Y') }} Tanah Kavling Freelance Program. Semua hak dilindungi.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tampilkan toast success
            Swal.fire({
                icon: 'success',
                title: 'Pendaftaran Berhasil! 🎉',
                text: 'Selamat! Data Anda telah berhasil tersimpan. Tim kami akan segera menghubungi Anda.',
                timer: 4000,
                timerProgressBar: true,
                showConfirmButton: false,
                toast: true,
                position: 'top-end',
                background: '#014421',
                color: '#fff',
                iconColor: '#FFD700',
                customClass: {
                    popup: 'animated fadeInRight'
                }
            });
        });
    </script>
</body>
</html>
