<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-r from-blue-900 to-white p-4 relative">
        <!-- Switch Lokasi di Pojok Kanan -->
        <div class="absolute top-4 right-4 flex items-center gap-2">
            <span class="text-sm text-white">Lokasi</span>
            <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" class="sr-only peer" id="locationSwitch" onchange="getLocation()">
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-blue-300 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-5 peer-checked:after:border-white after:content-[''] after:absolute after:top-1 after:left-1 after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-blue-600"></div>
            </label>
        </div>

        <!-- Kata Semangat -->
        <h3 class="text-xl font-semibold text-white mb-6 text-center">Selamat datang! Semangat bekerja dan semoga sehat selalu.</h3>
        
        <!-- Container dengan Border -->
        <div class="border border-gray-300 rounded-lg p-6 text-center bg-white shadow-md w-full max-w-md flex flex-col items-center">
            <!-- Tanggal -->
            <div class="mb-2 text-lg font-semibold" id="date"></div>
            <!-- Jam -->
            <div class="mb-4 text-lg font-semibold"><span>Pukul </span><span id="time"></span></div>
            
            <!-- Tombol Absen Masuk dan Keluar -->
            <div class="flex flex-col w-full items-center gap-4">
                <button class="w-3/4 px-6 py-2 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700">Absen Masuk</button>
                <button class="w-3/4 px-6 py-2 bg-red-600 text-white rounded-lg shadow-md hover:bg-red-700">Absen Keluar</button>
            </div>
        </div>
        
        <!-- Statistik Kehadiran & Riwayat Absensi -->
        <div class="w-full flex justify-between mt-6">
            <!-- Statistik Kehadiran -->
            <button class="p-4 bg-white rounded-lg shadow-md hover:bg-gray-200 flex items-center justify-center">
                <i class="fas fa-chart-bar text-blue-600 text-2xl"></i>
            </button>
            
            <!-- Riwayat Absensi -->
            <button class="p-4 bg-white rounded-lg shadow-md hover:bg-gray-200 flex items-center justify-center">
                <i class="fas fa-history text-red-600 text-2xl"></i>
            </button>
        </div>
    </div>

    <script>
        function updateDateTime() {
            const now = new Date();
            document.getElementById('date').textContent = now.toLocaleDateString('id-ID', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
            document.getElementById('time').textContent = now.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit', second: '2-digit' });
        }
        setInterval(updateDateTime, 1000);
        updateDateTime();

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        alert(`Lokasi Anda: Latitude ${position.coords.latitude}, Longitude ${position.coords.longitude}`);
                    },
                    (error) => {
                        alert('Gagal mendapatkan lokasi: ' + error.message);
                    }
                );
            } else {
                alert("Geolokasi tidak didukung oleh browser ini.");
            }
        }
    </script>
</x-layout>
