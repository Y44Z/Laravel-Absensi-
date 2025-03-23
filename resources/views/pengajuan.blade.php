<x-layout>
    <x-slot:title>Pengajuan Izin</x-slot:title>
    
    <article class="h-screen flex justify-center items-center bg-gradient-to-r from-blue-900 to-white p-6">
        <section class="bg-white shadow-md rounded-lg p-6 w-full max-w-3xl">
            <h3 class="text-xl font-semibold text-center mb-6">Formulir Pengajuan Izin</h3>
            
            <form class="space-y-4">
                <div>
                    <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                
                <div>
                    <label for="jenis-izin" class="block text-sm font-medium text-gray-700">Jenis Izin</label>
                    <select id="jenis-izin" name="jenis-izin" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
                        <option value="sakit">Sakit</option>
                        <option value="cuti">Cuti</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
                
                <div>
                    <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
                    <textarea id="keterangan" name="keterangan" rows="3" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"></textarea>
                </div>
                
                <div>
                    <label for="bukti" class="block text-sm font-medium text-gray-700">Upload Bukti (Opsional)</label>
                    <input type="file" id="bukti" name="bukti" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                
                <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-md hover:bg-blue-700">Ajukan Izin</button>
            </form>
        </section>
    </article>
</x-layout>
