<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $freelancer->nama_lengkap }} - Detail Lead</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <!-- Header -->
        <header class="bg-gradient-to-r from-green-600 to-emerald-600 shadow-lg">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <a href="{{ route('freelancers.index') }}" class="inline-flex items-center text-white hover:text-green-100">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Kembali ke Daftar
                </a>
            </div>
        </header>

        <!-- Main Content -->
        <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Profile Card -->
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <!-- Profile Header -->
                <div class="bg-gradient-to-r from-green-600 to-emerald-600 px-6 py-8">
                    <div class="flex items-center space-x-6">
                        <div class="w-24 h-24 rounded-full bg-white flex items-center justify-center shadow-lg">
                            <span class="text-4xl font-bold text-green-600">
                                {{ strtoupper(substr($freelancer->nama, 0, 1)) }}
                            </span>
                        </div>
                        <div class="flex-1">
                            <h1 class="text-3xl font-bold text-white">{{ $freelancer->nama_lengkap }}</h1>
                            <div class="mt-2 flex items-center space-x-3">
                                @php
                                    $statusColors = [
                                        'baru' => 'bg-blue-500',
                                        'follow_up' => 'bg-yellow-500',
                                        'hot' => 'bg-orange-500',
                                        'closed' => 'bg-green-700',
                                        'tidak_tertarik' => 'bg-gray-500',
                                    ];
                                    $statusLabel = [
                                        'baru' => 'Baru',
                                        'follow_up' => 'Follow Up',
                                        'hot' => 'Hot Lead',
                                        'closed' => 'Closed',
                                        'tidak_tertarik' => 'Tidak Tertarik',
                                    ];
                                @endphp
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $statusColors[$freelancer->status] }} text-white">
                                    {{ $statusLabel[$freelancer->status] }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Profile Details -->
                <div class="px-6 py-6">
                    <!-- Contact Information -->
                    <div class="mb-6 pb-6 border-b border-gray-200">
                        <h2 class="text-lg font-semibold text-gray-900 mb-4">Informasi Kontak</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <div>
                                    <p class="text-sm text-gray-500">Telepon</p>
                                    <a href="tel:{{ $freelancer->telepon }}" class="text-gray-900 font-medium hover:text-green-600">
                                        {{ $freelancer->telepon }}
                                    </a>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                <div>
                                    <p class="text-sm text-gray-500">Gender</p>
                                    <p class="text-gray-900 font-medium">
                                        {{ $freelancer->gender === 'L' ? 'Laki-laki' : 'Perempuan' }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <div>
                                    <p class="text-sm text-gray-500">Usia</p>
                                    <p class="text-gray-900 font-medium">{{ $freelancer->usia }} tahun</p>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <div>
                                    <p class="text-sm text-gray-500">Pekerjaan</p>
                                    <p class="text-gray-900 font-medium">{{ $freelancer->pekerjaan }}</p>
                                </div>
                            </div>

                            <div class="flex items-center md:col-span-2">
                                <svg class="w-5 h-5 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <div>
                                    <p class="text-sm text-gray-500">Domisili</p>
                                    <p class="text-gray-900 font-medium">{{ $freelancer->domisili }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Notes -->
                    @if($freelancer->catatan)
                        <div class="mb-6 pb-6 border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-gray-900 mb-4">Catatan</h2>
                            <div class="bg-gray-50 rounded-lg p-4">
                                <p class="text-gray-700 whitespace-pre-line">{{ $freelancer->catatan }}</p>
                            </div>
                        </div>
                    @endif

                    <!-- Timestamp Info -->
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-900 mb-4">Informasi Waktu</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                            <div class="flex items-center text-gray-600">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                </svg>
                                <span>Dibuat: {{ $freelancer->created_at->format('d M Y, H:i') }}</span>
                            </div>
                            <div class="flex items-center text-gray-600">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                                </svg>
                                <span>Diperbarui: {{ $freelancer->updated_at->format('d M Y, H:i') }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="bg-gray-50 px-6 py-4 flex space-x-3">
                    <a href="tel:{{ $freelancer->telepon }}"
                       class="flex-1 flex justify-center items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        Hubungi via Telepon
                    </a>
                    <a href="https://wa.me/{{ preg_replace('/^0/', '62', $freelancer->telepon) }}"
                       target="_blank"
                       class="flex-1 flex justify-center items-center px-6 py-3 border border-green-600 rounded-md shadow-sm text-base font-medium text-green-600 bg-white hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        Hubungi via WhatsApp
                    </a>
                </div>
            </div>

            <!-- Edit Button -->
            <div class="mt-6">
                <a href="{{ route('freelancers.edit', $freelancer) }}"
                   class="w-full flex justify-center items-center px-6 py-3 border border-blue-600 rounded-md shadow-sm text-base font-medium text-blue-600 bg-white hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                    Edit Data Lead
                </a>
            </div>
        </main>
    </div>
</body>
</html>
