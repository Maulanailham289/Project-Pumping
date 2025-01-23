<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <!-- source:https://codepen.io/owaiswiz/pen/jOPvEPB -->
    <div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
        <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
            <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
                <div class="flex justify-center">
                    <img src="{{ asset('img/logo.png') }}" class="w-mx-auto h-11" />
                </div>
                <div class="mt-10 flex flex-col items-center">
                    <div class="w-full flex-1">
                        {{-- FORM ACTION  --}}
                        <form action="/register" method="POST">
                            @csrf
                            <div class="mx-auto max-w-xs">
                                <h1 class="mb-2 md:text-2xl font-semibold font-sans mx-2">Biodata Diri</h1>
                                <input
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    type="text" placeholder="Nama" name="nama" />

                                <input
                                    class="w-full px-8 py-4 my-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    type="text" placeholder="No HP" name="no_hp" />
                                <input
                                    class="w-full px-8 py-4 my-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    type="number" placeholder="Umur" name="umur" />
                                <input
                                    class="w-full px-8 py-4 my-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    type="number" placeholder="Berat Badan" name="berat_badan" />
                                <input
                                    class="w-full px-8 py-4 my-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    type="number" placeholder="Tinggi Badan" name="tinggi_badan" />

                                {{-- BIODATA SIKECIL  --}}
                                <h1 class="mb-2 md:text-2xl font-semibold font-sans mx-2">Biodata Sikecil</h1>
                                <input
                                    class="w-full px-8 my-3 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    type="text" placeholder="Nama Bayi" name="nama_bayi" />
                                <select
                                    class="w-full px-8 py-4 my-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    name="jenis_kelamin">
                                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                                <label for="">Tanggal lahir</label>
                                <input
                                    class="w-full px-8 py-4 my-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    type="date" placeholder="Tanggal Lahir" name="tanggal_lahir" />
                                <input
                                    class="w-full px-8 py-4 my-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    type="number" placeholder="Berat Badan" name="berat_badan_bayi" />
                                <input
                                    class="w-full px-8 py-4 my-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    type="number" placeholder="Tinggi Badan" name="tinggi_badan_bayi" />
                                {{-- END BIODATA SIKECIL --}}
                                {{-- BIODATA SIKECIL  --}}
                                <h1 class="mb-2 md:text-2xl font-semibold font-sans mx-2">Akun</h1>
                                <input
                                    class="w-full px-8 my-3 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    type="text" placeholder="Username" name="username" />
                                <input
                                    class="w-full px-8 my-3 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    type="password" placeholder="Password" name="password" />

                                {{-- END BIODATA SIKECIL --}}
                                <button type="submit"
                                    class="mt-5 tracking-wide font-semibold bg-[#00A6BA] text-white-500 w-full py-4 rounded-lg hover:bg-[#047B87] transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                    <span class="text-white">
                                        Sign Up
                                    </span>
                                </button>
                            </div>
                        </form>
                        {{-- END FORM ACTION  --}}
                    </div>
                </div>
            </div>
            <div class="flex-1 bg-green-100 text-center hidden lg:flex">
                <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat"
                    style="background-image: url('{{ asset('img/anak.png') }}')">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
