<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Lead Baru - Database Leads</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen py-8">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-6">
                <a href="{{ route('freelancers.index') }}"
                   class="inline-flex items-center text-green-600 hover:text-green-700 mb-4">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Kembali ke Daftar
                </a>
                <h1 class="text-3xl font-bold text-gray-900">Tambah Lead Baru</h1>
                <p class="mt-2 text-gray-600">Isi form di bawah untuk menambahkan prospek baru</p>
            </div>

            <!-- Form -->
            <div class="bg-white shadow rounded-lg p-6">
                <form action="{{ route('freelancers.store') }}" method="POST">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Sapaan -->
                        <div>
                            <label for="sapaan" class="block text-sm font-medium text-gray-700">
                                Sapaan <span class="text-red-500">*</span>
                            </label>
                            <select id="sapaan" name="sapaan" required
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500">
                                <option value="">Pilih Sapaan</option>
                                <option value="Bapak">Bapak</option>
                                <option value="Ibu">Ibu</option>
                                <option value="Saudara">Saudara</option>
                                <option value="Saudari">Saudari</option>
                            </select>
                            @error('sapaan')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Nama -->
                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-700">
                                Nama Lengkap <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="nama" name="nama" required
                                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500"
                                   placeholder="Masukkan nama lengkap">
                            @error('nama')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Telepon -->
                        <div>
                            <label for="telepon" class="block text-sm font-medium text-gray-700">
                                Nomor Telepon <span class="text-red-500">*</span>
                            </label>
                            <input type="tel" id="telepon" name="telepon" required
                                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500"
                                   placeholder="Contoh: 081234567890">
                            @error('telepon')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Gender -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                Gender <span class="text-red-500">*</span>
                            </label>
                            <div class="mt-2 space-x-4">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="gender" value="L" required
                                           class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">Laki-laki</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="gender" value="P"
                                           class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">Perempuan</span>
                                </label>
                            </div>
                            @error('gender')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Usia -->
                        <div>
                            <label for="usia" class="block text-sm font-medium text-gray-700">
                                Usia <span class="text-red-500">*</span>
                            </label>
                            <input type="number" id="usia" name="usia" required min="17" max="100"
                                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500"
                                   placeholder="Masukkan usia">
                            @error('usia')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Pekerjaan -->
                        <div>
                            <label for="pekerjaan" class="block text-sm font-medium text-gray-700">
                                Pekerjaan <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="pekerjaan" name="pekerjaan" required
                                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500"
                                   placeholder="Contoh: Karyawan Swasta, Wiraswasta">
                            @error('pekerjaan')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Domisili -->
                        <div class="md:col-span-2">
                            <label for="domisili" class="block text-sm font-medium text-gray-700">
                                Domisili <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="domisili" name="domisili" required
                                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500"
                                   placeholder="Contoh: Jakarta Selatan, Bogor">
                            @error('domisili')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700">
                                Status <span class="text-red-500">*</span>
                            </label>
                            <select id="status" name="status" required
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500">
                                <option value="baru">Baru</option>
                                <option value="follow_up">Follow Up</option>
                                <option value="hot">Hot</option>
                                <option value="closed">Closed</option>
                                <option value="tidak_tertarik">Tidak Tertarik</option>
                            </select>
                            @error('status')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Catatan -->
                    <div class="mt-6">
                        <label for="catatan" class="block text-sm font-medium text-gray-700">
                            Catatan
                        </label>
                        <textarea id="catatan" name="catatan" rows="4"
                                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500"
                                  placeholder="Catatan tambahan mengenai lead ini..."></textarea>
                        @error('catatan')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Buttons -->
                    <div class="mt-6 flex justify-end space-x-3">
                        <a href="{{ route('freelancers.index') }}"
                           class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Batal
                        </a>
                        <button type="submit"
                                class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Simpan Lead
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
