<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WA Test API - Sajada Digital Agency</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .test-container {
            max-width: 900px;
            margin: 40px auto;
            padding: 30px;
        }
        .test-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .test-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #014421;
            margin-bottom: 10px;
        }
        .test-subtitle {
            font-size: 1.1rem;
            color: #666;
        }
        .test-form {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }
        .form-group-full {
            grid-column: 1 / -1;
        }
        .form-label {
            display: block;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }
        .form-input {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 0.95rem;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s;
        }
        .form-input:focus {
            outline: none;
            border-color: #014421;
            box-shadow: 0 0 0 3px rgba(1, 68, 33, 0.1);
        }
        textarea.form-input {
            min-height: 120px;
            resize: vertical;
        }
        .input-hint {
            font-size: 0.85rem;
            color: #888;
            margin-top: 5px;
        }
        .test-button {
            background: linear-gradient(135deg, #014421 0%, #022b15 100%);
            color: white;
            padding: 15px 40px;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            width: 100%;
            margin-top: 20px;
        }
        .test-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(1, 68, 33, 0.3);
        }
        .test-button:active {
            transform: translateY(0);
        }
        .result-box {
            margin-top: 30px;
            padding: 25px;
            border-radius: 12px;
            display: none;
        }
        .result-box.show {
            display: block;
        }
        .result-success {
            background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
            border: 2px solid #28a745;
        }
        .result-error {
            background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
            border: 2px solid #dc3545;
        }
        .result-title {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .result-success .result-title {
            color: #155724;
        }
        .result-error .result-title {
            color: #721c24;
        }
        .result-item {
            margin-bottom: 12px;
            padding: 10px;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 8px;
        }
        .result-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
        }
        .result-value {
            color: #555;
            font-family: 'Courier New', monospace;
            font-size: 0.9rem;
            word-break: break-all;
        }
        .required {
            color: #dc3545;
        }
        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
            .test-container {
                padding: 20px;
                margin: 20px auto;
            }
            .test-form {
                padding: 25px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand">
                <img src="{{ asset('icon_logo.png') }}" alt="Sajada Digital Agency" class="navbar-logo">
                <span class="brand-text">Sajada Digital Agency</span>
            </a>
        </div>
    </nav>

    <!-- Test Container -->
    <div class="test-container">
        <div class="test-header">
            <h1 class="test-title">🧪 WA Test API</h1>
            <p class="test-subtitle">Test konfigurasi API WhatsApp dengan mengirim pesan percobaan</p>
        </div>

        <form action="{{ route('wa-test.send') }}" method="POST" class="test-form" id="testForm">
            @csrf

            <!-- API Configuration -->
            <div class="form-section">
                <h3 class="form-section-title" style="margin-bottom: 20px; color: #014421;">
                    ⚙️ Konfigurasi API
                </h3>

                <div class="form-row">
                    <div class="form-group">
                        <label for="api_key" class="form-label">
                            API Key <span class="required">*</span>
                        </label>
                        <input
                            type="text"
                            id="api_key"
                            name="api_key"
                            value="{{ old('api_key', $defaults['api_key'] ?? '') }}"
                            required
                            class="form-input"
                            placeholder="Masukkan API Key"
                        >
                        <p class="input-hint">Kunci autentikasi untuk API WhatsApp</p>
                    </div>

                    <div class="form-group">
                        <label for="sender" class="form-label">
                            Sender Number <span class="required">*</span>
                        </label>
                        <input
                            type="text"
                            id="sender"
                            name="sender"
                            value="{{ old('sender', $defaults['sender'] ?? '') }}"
                            required
                            class="form-input"
                            placeholder="628xxxxxxxxxx"
                        >
                        <p class="input-hint">Nomor WhatsApp sender (format 62...)</p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group form-group-full">
                        <label for="url" class="form-label">
                            API URL <span class="required">*</span>
                        </label>
                        <input
                            type="url"
                            id="url"
                            name="url"
                            value="{{ old('url', $defaults['url'] ?? '') }}"
                            required
                            class="form-input"
                            placeholder="https://api.example.com/send-message"
                        >
                        <p class="input-hint">URL endpoint API WhatsApp</p>
                    </div>
                </div>
            </div>

            <!-- Message Configuration -->
            <div class="form-section" style="margin-top: 30px;">
                <h3 class="form-section-title" style="margin-bottom: 20px; color: #014421;">
                    📝 Pesan Test
                </h3>

                <div class="form-row">
                    <div class="form-group">
                        <label for="number" class="form-label">
                            Target Number <span class="required">*</span>
                        </label>
                        <input
                            type="text"
                            id="number"
                            name="number"
                            value="{{ old('number') }}"
                            required
                            class="form-input"
                            placeholder="628xxxxxxxxxx"
                        >
                        <p class="input-hint">Nomor tujuan pesan test</p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group form-group-full">
                        <label for="message" class="form-label">
                            Message <span class="required">*</span>
                        </label>
                        <textarea
                            id="message"
                            name="message"
                            required
                            class="form-input"
                            placeholder="Tulis pesan test di sini..."
                        >{{ old('message', $defaults['message'] ?? '') }}</textarea>
                        <p class="input-hint">Pesan yang akan dikirim ke nomor target</p>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="test-button">
                🚀 Kirim Test Message
            </button>
        </form>

        <!-- Result Box -->
        @if(session('test_result'))
            @php
                $result = session('test_result');
            @endphp
            <div class="result-box show {{ $result['success'] ? 'result-success' : 'result-error' }}">
                <div class="result-title">
                    @if($result['success'])
                        ✅ Berhasil!
                    @else
                        ❌ Gagal!
                    @endif
                </div>

                <div class="result-item">
                    <div class="result-label">📡 HTTP Status Code</div>
                    <div class="result-value">{{ $result['http_code'] }}</div>
                </div>

                @if($result['error'])
                    <div class="result-item">
                        <div class="result-label">⚠️ Error</div>
                        <div class="result-value">{{ $result['error'] }}</div>
                    </div>
                @endif

                <div class="result-item">
                    <div class="result-label">📄 Response</div>
                    <div class="result-value">{{ $result['response'] }}</div>
                </div>
            </div>
        @endif
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="footer-text">© {{ date('Y') }} Sajada Digital Agency. Semua hak dilindungi.</p>
        </div>
    </footer>

    <script>
        // Auto-show SweetAlert untuk hasil
        @if(session('test_result'))
            @php
                $result = session('test_result');
            @endphp
            @if($result['success'])
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil! 🎉',
                    text: 'Pesan test berhasil dikirim ke nomor target.',
                    timer: 5000,
                    timerProgressBar: true,
                    showConfirmButton: true,
                    confirmButtonColor: '#014421'
                });
            @else
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal! ❌',
                    text: 'Pesan test gagal dikirim. Silakan cek konfigurasi API Anda.',
                    timer: 5000,
                    timerProgressBar: true,
                    showConfirmButton: true,
                    confirmButtonColor: '#dc3545'
                });
            @endif
        @endif

        // Form validation
        document.getElementById('testForm').addEventListener('submit', function(e) {
            const number = document.getElementById('number').value;
            const sender = document.getElementById('sender').value;

            // Validasi format nomor
            const phoneRegex = /^62\d{8,13}$/;

            if (!phoneRegex.test(number.replace(/\D/g, ''))) {
                e.preventDefault();
                Swal.fire({
                    icon: 'warning',
                    title: 'Format Nomor Salah',
                    text: 'Nomor target harus dimulai dengan 62 dan berisi 8-13 digit angka.',
                    confirmButtonColor: '#014421'
                });
                return;
            }

            if (!phoneRegex.test(sender.replace(/\D/g, ''))) {
                e.preventDefault();
                Swal.fire({
                    icon: 'warning',
                    title: 'Format Sender Salah',
                    text: 'Nomor sender harus dimulai dengan 62 dan berisi 8-13 digit angka.',
                    confirmButtonColor: '#014421'
                });
                return;
            }

            // Show loading
            Swal.fire({
                icon: 'info',
                title: 'Mengirim...',
                text: 'Sedang mengirim pesan test. Mohon tunggu.',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
        });
    </script>
</body>
</html>
