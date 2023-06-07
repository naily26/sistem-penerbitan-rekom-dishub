<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nontifikasi Rekom Dishub</title>
</head>
<body>
    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/Logo_Dishub.png" />
    <h2>Yth. Pimpinan <b>{{$data_mail->perusahaan->nama_perusahaan}}</b>,</h2>
    <p>Dengan ini kami ingin memberitahukan bahwa status permohonan surat yang anda ajukan pada tanggal @php  echo tanggal_indonesia($data_mail->pengajuan_angkutan->tanggal_permohonan);  @endphp dengan rincian : </p>
    <table>
        <tr>
            <td>Keterangan/tujuan </td>
            <td>: {{$data_mail->pengajuan_angkutan->keterangan}}</td>
        </tr>
        <tr>
            <td>Nomor Rangka </td>
            <td>: {{$data_mail->nomor_rangka}}</td>
        </tr>
        <tr>
            <td>Nomor Kendaraan </td>
            <td>: {{$data_mail->nomor_kendaraan}}</td>
        </tr>
        <tr>
            <td>Nomor Uji </td>
            <td>: {{$data_mail->nomor_uji}}</td>
        </tr>
        <tr>
            <td>Nomor Mesin </td>
            <td>: {{$data_mail->nomor_mesin}}</td>
        </tr>
    </table>
    <p> sudah disetujui dan diteritkan. Silahkan mengambil surat tersebut di kantor Dinas Perhubungan Provinsi Jawa Timur.</p>
    <p style="text-align:right"><b>Petugas Layanan Angkutan</b></p>
</body>
</html>

<?php 
        function tanggal_indonesia($tanggal){
        $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
        );
        
        $pecahkan = explode('-', $tanggal);
        
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
         
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
?>