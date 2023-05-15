<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<table cellspacing="0" cellpadding="0" style="width:505.15pt; border-collapse:collapse;">
    <tbody>
        <tr>
            <td style="width:75.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:100%; font-size:10pt;"><span
                        style="font-family:Arial; color:#ffffff;">&nbsp;&nbsp;</span></p>
            </td>
        </tr>
    </tbody>
</table>
<p style="margin-top:18pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:13pt;"><strong><span
            style="font-family:Tahoma;">SURAT KETERANGAN</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:13pt;"><strong><u><span
                style="font-family:Tahoma;">PERUSAHAAN ANGKUTAN BARANG UMUM</span></u></strong></p>
<p style="margin-top:3pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:12pt;"><span
        style="font-family:Tahoma;">Nomor : {{$detail->nomor_keterangan_perusahaan}}</span></p>
<p style="margin-top:6pt; margin-bottom:0pt; text-indent:36pt; text-align:justify;"><span
        style="font-family:Tahoma;">Berdasarkan :
    </span></p>
<ol type="1" style="margin:0pt; padding-left:0pt;">
    <li
        style="margin-top:1pt; margin-left:14.33pt; text-align:justify; line-height:normal; padding-left:3.67pt; font-family:Tahoma;">
        Undang Undang Republik Indonesia Nomor 22 Tahun 2009 tentang Lalu Lintas dan Angkutan Jalan;</li>
    <li
        style="margin-top:1pt; margin-left:14.33pt; text-align:justify; line-height:normal; padding-left:3.67pt; font-family:Tahoma;">
        Peraturan Pemerintah Republik Indonesia Nomor 74 Tahun 2014 tentang Angkutan Jalan;</li>
    <li
        style="margin-top:1pt; margin-left:14.33pt; text-align:justify; line-height:normal; padding-left:3.67pt; font-family:Tahoma;">
        Peraturan Pemerintah Republik Indonesia Nomor 37 Tahun 2017 tentang Keselamatan Lalu Lintas dan Angkutan Jalan;
    </li>
    <li
        style="margin-top:1pt; margin-left:14.33pt; text-align:justify; line-height:normal; padding-left:3.67pt; font-family:Tahoma;">
        Peraturan Pemerintah Republik Indonesia Nomor 5 Tahun 2021 tentang Penyelenggaraan Perizinan Berusaha Berbasis
        Resiko;</li>
    <li style="margin-top:1pt; margin-left:14.33pt; text-align:justify; line-height:normal; padding-left:3.67pt; font-

family:Tahoma;">Peraturan Menteri Perhubungan Republik Indonesia Nomor 85 Tahun 2018 tentang Sistem Manajemen
        Keselamatan Perusahaan
        Angkutan Umum;</li>
    <li
        style="margin-top:1pt; margin-left:14.33pt; text-align:justify; line-height:normal; padding-left:3.67pt; font-family:Tahoma;">
        Peraturan Menteri Perhubungan Republik Indonesia Nomor 60 Tahun 2019 tentang Penyelenggaraan Angkutan Barang
        Dengan
        Kendaraan Bermotor Di Jalan;</li>
    <li
        style="margin-top:1pt; margin-left:14.33pt; text-align:justify; line-height:normal; padding-left:3.67pt; font-family:Tahoma;">
        Peraturan Menteri Perhubungan Republik Indonesia Nomor 12 Tahun 2021 tentang Standar Kegiatan Usaha dan Produk
        Pada
        Penyelenggparaan Perizinan Berusaha Berbasis Risiko Sektor Transportasi;</li>
    <li
        style="margin-top:1pt; margin-left:14.33pt; text-align:justify; line-height:normal; padding-left:3.67pt; font-family:Tahoma;">
        Peraturan Gubernur Jawa Timur Nomor 97 Tahun 2021 tentang Kedudukan, Susunan Organisasi, Uraian Tugas dan Fungsi
        Serta Tata Kerja Dinas Perhubungan Provinsi Jawa Timur;</li>
    <li
        style="margin-top:1pt; margin-left:14.33pt; text-align:justify; line-height:normal; padding-left:3.67pt; font-family:Tahoma;">
        Surat permohonan Pimpinan <strong>{{$detail->perusahaan->nama_perusahaan}}&nbsp;</strong>Nomor:
        <strong>{{$detail->nomor_permohonan}}&nbsp;
        </strong>tanggal&nbsp; <strong><?php echo tanggal_indonesia($detail->tanggal_permohonan);?></strong>.</li>
</ol>
<p style="margin-top:6pt; margin-bottom:0pt; text-indent:35.45pt; text-align:justify;"><span
        style="font-family:Tahoma;">Yang
        bertandatangan dibawah ini menerangkan bahwa :</span></p>
<table cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
    <tbody>
        <tr>
            <td style="width:143.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:1pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11pt;">
                    <span style="font-family:Tahoma;">Nama Perusahaan</span></p>
            </td>
            <td style="width:3.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:1pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11pt;">
                    <span style="font-family:Tahoma;">:</span></p>
            </td>
            <td style="width:335.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:1pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11pt;">
                    <strong><span style="font-family:Tahoma;">{{$detail->perusahaan->nama_perusahaan}}</span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width:143.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:1pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11pt;">
                    <span style="font-family:Tahoma;">Alamat Perusahaan</span></p>
            </td>
            <td style="width:3.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:1pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11pt;">
                    <span style="font-family:Tahoma;">:</span></p>
            </td>
            <td style="width:335.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:1pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11pt;">
                    <strong><span style="font-family:Tahoma;">{{$detail->perusahaan->alamat}}</span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width:143.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:1pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11pt;">
                    <span style="font-family:Tahoma;">Nama Pimpinan</span></p>
            </td>
            <td style="width:3.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:1pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11pt;">
                    <span style="font-family:Tahoma;">:</span></p>
            </td>
            <td style="width:335.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:1pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11pt;">
                    <strong><span style="font-family:Tahoma;">{{$detail->perusahaan->nama_pimpinan}}</span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width:143.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:1pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11pt;">
                    <span style="font-family:Tahoma;">Nomor NIB</span></p>
            </td>
            <td style="width:3.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:1pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11pt;">
                    <span style="font-family:Tahoma;">:</span></p>
            </td>
            <td style="width:335.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:1pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11pt;">
                    <strong><span style="font-family:Tahoma;">{{$detail->perusahaan->nib}}</span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width:143.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:1pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11pt;">
                    <span style="font-family:Tahoma;">Kode KBLI / Jenis Angkutan</span></p>
            </td>
            <td style="width:3.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:1pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11pt;">
                    <span style="font-family:Tahoma;">:</span></p>

            </td>
            <td style="width:335.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:1pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11pt;">
                    <strong><span style="font-family:Tahoma;">{{$detail->perusahaan->kbli->kode}} / {{$detail->perusahaan->kbli->keterangan}}</span></strong>
                </p>
            </td>
        </tr>
    </tbody>
</table>
<p style="margin-top:6pt; margin-bottom:0pt; text-indent:35.45pt; text-align:justify; line-height:normal;"><span
        style="font-family:Tahoma;">Merupakan perusahaan yang telah terdaftar pada&nbsp;</span><em><span
            style="font-family:Tahoma;">Online Single
            Submision Risk Based Approach</span></em><span style="font-family:Tahoma;">&nbsp;(OSS RBA)&nbsp;</span><a
        name="_Hlk101781671"><span style="font-family:Tahoma;">sebagai perusahaan Angkutan Barang Umum namun NIB dan
            Sertifikat Standar belum terverifikas</span></a>
    <span style="font-family:Tahoma;">i.</span></p>
<p style="margin-top:6pt; margin-bottom:0pt; text-indent:35.45pt; text-align:justify; line-height:normal;"><span
        style="font-family:Tahoma;">Surat Keterangan ini diterbitkan dan berlaku sampai dengan&nbsp;</span><strong><span
            style="font-family:Tahoma;">masa
            berlaku STNK (Surat Tanda Nomor Kendaraan)</span></strong><span style="font-family:Tahoma;">&nbsp;dan tidak
        berlaku sebagai dokumen
        perjalanan serta tidak dapat dipindahtangankan kepada pihak manapun, apabila dalam batas waktu tersebut tidak
        direalisasikan maka
        surat persetujuan ini dinyatakan tidak berlaku lagi.</span></p>
<p style="margin-top:6pt; margin-bottom:0pt; text-indent:35.4pt; text-align:justify;"><span
        style="font-family:Tahoma;">Demikian
        untuk dapat dipergunakan dengan semestinya.</span></p>
<p
    style="margin-top:9pt; margin-left:255.15pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:12pt;">
    <span style="font-family:Tahoma; font-size:11pt;">Surabaya,&nbsp;</span><strong><span style="font-family:Tahoma;"><?php echo tanggal_indonesia($today);?></span>
    </strong></p>
<p style="margin-top:3pt; margin-left:255.15pt; margin-bottom:0pt; text-align:center; line-height:normal;"><span
        style="font-family:Tahoma;">An. KEPALA DINAS PERHUBUNGAN</span></p>
<p style="margin-top:0pt; margin-left:255.15pt; margin-bottom:0pt; text-align:center; line-height:normal;"><span
        style="font-family:Tahoma;">PROVINSI JAWA TIMUR</span></p>
<p style="margin-top:0pt; margin-left:255.15pt; margin-bottom:0pt; text-align:center; line-height:normal;"><span
        style="font-family:Tahoma;">Plt. Kepala Bidang Angkutan Jalan</span></p>
<p style="margin-top:0pt; margin-left:255.15pt; margin-bottom:0pt; text-align:center; line-height:normal;"><span
        style="font-family:Tahoma;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-left:255.15pt; margin-bottom:0pt; text-align:center; line-height:normal;"><span
        style="font-family:Tahoma;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-left:255.15pt; margin-bottom:0pt; text-align:center; line-height:normal;"><a
        name="_Hlk128552191">
        <u><span style="font-family:Tahoma;">Drs. PADELAN, M.Si</span></u></a></p>
<p style="margin-top:0pt; margin-left:255.15pt; margin-bottom:0pt; text-align:center; line-height:normal;"><a
        name="_Hlk128552099">
        <span style="font-family:Tahoma;">Pembina Tingkat I</span></a></p>
<p style="margin-top:0pt; margin-left:255.15pt; margin-bottom:0pt; text-align:center; line-height:normal;"><span
        style="font-family:Tahoma;">NIP.&nbsp;</span><a name="_Hlk128552111"><span style="font-family:Tahoma;">19651117
            199202 1 002</span></a></p>
<table cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
    <tbody>
        <tr style="height:16.65pt;">


            <td colspan="3" style="width:314.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11pt;">
                    <span style="font-family:Tahoma;">Tembusan :</span></p>
            </td>
        </tr>
        <tr style="height:7.8pt;">
            <td style="width:15.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:11pt;"><span
                        style="font-family:Tahoma;">Yth.</span></p>
            </td>
            <td style="width:3.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:11pt;"><span
                        style="font-family:Tahoma;">1.</span></p>
            </td>
            <td style="width:274.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:11pt;"><span
                        style="font-family:Tahoma;">Pemilik Kendaraan;</span></p>
            </td>
        </tr>
        <tr style="height:11.85pt;">
            <td style="width:15.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;"><span
                        style="font-family:Tahoma;">&nbsp;</span></p>
            </td>
            <td style="width:3.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;"><span
                        style="font-family:Tahoma;">2.</span></p>
            </td>
            <td style="width:274.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:11pt;"><span
                        style="font-family:Tahoma;">Kepala Bapenda Prov. Jatim di Surabaya;</span></p>
            </td>
        </tr>
        <tr style="height:4pt;">
            <td style="width:15.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;"><span
                        style="font-family:Tahoma;">&nbsp;</span></p>
            </td>
            <td style="width:3.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;"><span
                        style="font-family:Tahoma;">3.</span></p>
            </td>

            <td style="width:274.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:11pt;"><span
                        style="font-family:Tahoma;">Arsip</span></p>
            </td>
        </tr>
    </tbody>
</table>
<p style="margin-top:3pt; margin-bottom:0pt; line-height:normal; font-size:1pt;"><strong><span
            style="font-family:Tahoma;">&nbsp;
        </span></strong></p>
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