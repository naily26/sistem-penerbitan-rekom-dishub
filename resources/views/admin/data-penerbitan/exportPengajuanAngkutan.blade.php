<table class="table table-full-width" id="sample_1">
    <thead>
        <tr>
            <th>No Penerbitan</th>
            <th>Nama Perusahaan</th>
            <th>Kode KBLI</th>
            <th>Nomor Kendaraan</th>
            <th>Nomor Rangka</th>
            <th>Keterangan</th>
            <th>Petugas</th>
            <th>Email Pemohon</th>
            <th>Tanggal Permohonan</th>
            <th>Tanggal Pengambilan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item) 
        <tr>
            <td>{{$item->nomor_rekomendasi_peruntukan}}</td>
            <td>{{$item->angkutan->perusahaan->nama_perusahaan}}</td>
            <td>{{$item->angkutan->perusahaan->kbli->kode}}</td>
            <td>{{$item->angkutan->nomor_kendaraan}}</td>
            <td>{{$item->angkutan->nomor_rangka}}</td>
            <td>{{$item->keterangan}}</td>
            <td>{{$item->petugas->kode}}</td>
            <td>{{$item->angkutan->user->email}}</td>
            <td>{{$item->tanggal_permohonan}}</td>
            <td>{{$item->tanggal_pengambilan}}</td>
        </tr>
        @endforeach
    </tbody>
</table>