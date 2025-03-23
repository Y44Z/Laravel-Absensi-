<x-layout>
    <x-slot:title>Analisis Kehadiran</x-slot:title>
    
    <article class="h-screen flex justify-center items-center bg-gradient-to-r from-blue-900 to-white p-6">
        <section class="bg-white shadow-md rounded-lg p-6 w-full max-w-6xl flex gap-6">
            <!-- Diagram Statistik Kehadiran -->
            <div class="w-1/2 flex flex-col items-center">
                <h4 class="text-lg font-semibold mb-4">Persentase Kehadiran</h4>
                <div class="w-80 h-80">
                    <canvas id="attendanceChart"></canvas>
                </div>
            </div>
            
            <!-- Ringkasan Data Kehadiran -->
            <div class="w-1/2">
                <h4 class="text-lg font-semibold mb-4">Ringkasan Kehadiran</h4>
                <ul class="space-y-2 text-gray-700">
                    <li class="bg-gray-100 p-3 rounded-md">Total Kehadiran: <span class="font-bold">85%</span> (<span id="totalHadir">170</span> hari)</li>
                    <li class="bg-gray-100 p-3 rounded-md">Terlambat: <span class="font-bold">10%</span> (<span id="totalTerlambat">20</span> hari)</li>
                    <li class="bg-gray-100 p-3 rounded-md">Tidak Hadir: <span class="font-bold">5%</span> (<span id="totalAbsen">10</span> hari)</li>
                </ul>
            </div>
        </section>
    </article>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const ctx = document.getElementById('attendanceChart').getContext('2d');
            const totalDays = 200; // Contoh total hari kerja
            const data = [170, 20, 10]; // Data kehadiran
            
            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Hadir', 'Terlambat', 'Absen'],
                    datasets: [{
                        data: data,
                        backgroundColor: ['#4CAF50', '#FFC107', '#F44336'],
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
            
            // Menampilkan jumlah hari sesuai data
            document.getElementById("totalHadir").textContent = data[0];
            document.getElementById("totalTerlambat").textContent = data[1];
            document.getElementById("totalAbsen").textContent = data[2];
        });
    </script>
</x-layout>
