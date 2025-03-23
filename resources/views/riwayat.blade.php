<x-layout>
    <x-slot:title>Riwayat Kehadiran</x-slot:title>
    
    <article class="h-screen flex justify-center items-center bg-gradient-to-r from-blue-900 to-white p-6">
        <section class="bg-white shadow-md rounded-lg p-6 w-full max-w-5xl flex gap-6 items-start">
            <!-- Diagram Lingkaran Absensi -->
            <div class="w-1/3 flex flex-col items-center">
                <h4 class="text-lg font-semibold mb-4">Statistik Kehadiran</h4>
                <div class="w-52 h-52">
                    <canvas id="attendanceChart"></canvas>
                </div>
            </div>
            
            <!-- Tabel Riwayat Kehadiran -->
            <div class="w-2/3">
                <h4 class="text-lg font-semibold mb-4">Detail Kehadiran</h4>
                <div class="overflow-auto max-h-[65vh] border border-gray-300 rounded-md">
                    <table class="w-full border-collapse text-sm">
                        <thead class="bg-blue-600 text-white">
                            <tr>
                                <th class="border border-gray-300 p-2">Tanggal</th>
                                <th class="border border-gray-300 p-2">Jam Masuk</th>
                                <th class="border border-gray-300 p-2">Jam Keluar</th>
                                <th class="border border-gray-300 p-2">Status</th>
                            </tr>
                        </thead>
                        <tbody id="attendance-history" class="bg-white text-gray-700">
                            <!-- Data akan dimuat dari database -->
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </article>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const ctx = document.getElementById('attendanceChart').getContext('2d');
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Hadir', 'Terlambat', 'Absen'],
                    datasets: [{
                        data: [60, 25, 15], // Contoh data statis, ubah dengan data dari database
                        backgroundColor: ['#4CAF50', '#FFC107', '#F44336'],
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true
                }
            });
        });
    </script>
</x-layout>
