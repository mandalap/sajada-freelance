<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Agen - Gabung Jadi Agen Sajada Digital Agency</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand">
                <img src="{{ asset('icon_logo.png') }}" alt="Sajada Digital Agency " class="navbar-logo">
                <span class="brand-text">Sajada Digital Agency </span>
            </a>
        </div>
    </nav>

    <!-- Header Section -->
    <section class="register-hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Form Pendaftaran Agen</h1>
                <p class="hero-subtitle">
                    Isi data lengkap di bawah ini untuk mendaftar sebagai agen Sajada Digital Agency kami.
                </p>
            </div>
        </div>
    </section>

    <!-- Registration Form Section -->
    <section class="section">
        <div class="container">
            <form action="{{ route('register.store') }}" method="POST" class="register-form">
                @csrf

                <!-- Informasi Pribadi -->
                <div class="form-section">
                    <h3 class="form-section-title">Informasi Pribadi</h3>
                    <div class="form-grid">
                        <!-- Sapaan -->
                        <div class="form-group">
                            <label for="sapaan" class="form-label">
                                Sapaan <span class="required">*</span>
                            </label>
                            <select id="sapaan" name="sapaan" required class="form-select">
                                <option value="">Pilih Sapaan</option>
                                <option value="Pak">Pak</option>
                                <option value="Bu">Ibu</option>
                                <option value="Bang">Bang</option>
                                <option value="Kak">Kak</option>
                            </select>
                            @error('sapaan')
                                <p class="form-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Nama -->
                        <div class="form-group">
                            <label for="nama" class="form-label">
                                Nama Lengkap <span class="required">*</span>
                            </label>
                            <input type="text" id="nama" name="nama" required
                                   class="form-input"
                                   placeholder="Masukkan nama lengkap">
                            @error('nama')
                                <p class="form-error">{{ $message }}</p>
                            @enderror
                        </div>


                        <!-- Telepon -->
                        <div class="form-group">
                            <label for="telepon" class="form-label">
                                Nomor Telepon/WhatsApp <span class="required">*</span>
                            </label>
                            <input type="tel" id="telepon" name="telepon" required
                                   class="form-input"
                                   placeholder="08xxxxxxxxxx"
                                   title="Pastikan nomor WhatsApp aktif. Satu nomor hanya bisa mendaftar satu kali.">
                            @error('telepon')
                                <p class="form-error">{{ $message }}</p>
                            @enderror
                            <p class="input-hint">Pastikan nomor WhatsApp aktif. Satu nomor hanya bisa mendaftar satu kali.</p>
                        </div>

                        <!-- Gender -->
                        <div class="form-group">
                            <label class="form-label">
                                Gender <span class="required">*</span>
                            </label>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input type="radio" name="gender" value="L" required class="radio-input">
                                    <span class="radio-custom"></span>
                                    <span class="radio-text">Laki-laki</span>
                                </label>
                                <label class="radio-label">
                                    <input type="radio" name="gender" value="P" class="radio-input">
                                    <span class="radio-custom"></span>
                                    <span class="radio-text">Perempuan</span>
                                </label>
                            </div>
                            @error('gender')
                                <p class="form-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Usia -->
                        <div class="form-group">
                            <label for="usia" class="form-label">
                                Usia <span class="required">*</span>
                            </label>
                            <input type="number" id="usia" name="usia" required min="17" max="100"
                                   class="form-input"
                                   placeholder="Contoh: 25">
                            @error('usia')
                                <p class="form-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Domisili -->
                        <div class="form-group">
                            <label for="domisili" class="form-label">
                                Domisili/Kota <span class="required">*</span>
                            </label>
                            <input type="text" id="domisili" name="domisili" required
                                   class="form-input"
                                   placeholder="Contoh: Jakarta Selatan, Bogor">
                            @error('domisili')
                                <p class="form-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Pekerjaan -->
                        <div class="form-group">
                            <label for="pekerjaan" class="form-label">
                                Pekerjaan <span class="required">*</span>
                            </label>
                            <input type="pekerjaan" id="pekerjaan" name="pekerjaan" required
                                   class="form-input"
                                   placeholder="Contah: Swasta">
                            @error('pekerjaan')
                                <p class="form-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Submit Buttons -->
                <div class="form-actions">
                    <a href="{{ route('home') }}" class="btn btn-outline">
                        ← Kembali
                    </a>
                    <button type="submit" class="btn btn-primary btn-large">
                        🚀 Daftar Sekarang - Gratis!
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="footer-text">© {{ date('Y') }} Tanah Kavling Freelance Program. Semua hak dilindungi.</p>
        </div>
    </footer>
</body>
</html>
