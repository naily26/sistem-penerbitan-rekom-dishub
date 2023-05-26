<table class="table table-full-width" id="sample_1">
    <thead>
        <tr>
            <th>No Penerbitan</th>
            <th>Nama Perusahaan</th>
            <th>NIB</th>
            <th>KBLI</th>
            <th>Petugas</th>
            <th>Email Pemohon</th>
            <th>Tanggal Permohonan</th>
            <th>Tanggal Pengambilan</th>
            {{-- <th>Action</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{$item->nomor_keterangan_perusahaan}}</td>
            <td>{{$item->perusahaan->nama_perusahaan}}</td>
            <td>{{$item->perusahaan->nib}}</td>
            <td>{{$item->perusahaan->kbli->kode}}</td>
            <td>{{$item->petugas->kode}}</td>
            <td>{{$item->perusahaan->user->email}}</td>
            <td>{{$item->tanggal_permohonan}}</td>
            <td>{{$item->tanggal_pengambilan}}</td>
        </tr>
        @endforeach

    </tbody>
</table>