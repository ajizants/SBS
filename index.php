<?php
$data = [
    [
        "nomor" => "21./SBS/11/2024",
        "tgl_nomor" => "27 November 2024",
        "hari" => "Rabu, 27 November 2024",
        "tgl_pendapatan" => "26 November 2024",
        "tgl_setor" => "26 November 2024",
        "jumlah" => "Rp. 99.000.000,00",
        "jumlah2" => "Rp. 99.000.000,00",
    ],
    [
        "nomor" => "22./SBS/11/2024",
        "tgl_nomor" => "28 November 2024",
        "hari" => "Kamis, 28 November 2024",
        "tgl_pendapatan" => "27 November 2024",
        "tgl_setor" => "27 November 2024",
        "jumlah" => "Rp. 150.000.000,00",
        "jumlah2" => "Rp. 150.000.000,00",
    ],
    [
        "nomor" => "21./SBS/11/2024",
        "tgl_nomor" => "27 November 2024",
        "hari" => "Rabu, 27 November 2024",
        "tgl_pendapatan" => "26 November 2024",
        "tgl_setor" => "26 November 2024",
        "jumlah" => "Rp. 99.000.000,00",
        "jumlah2" => "Rp. 99.000.000,00",
    ],
    [
        "nomor" => "22./SBS/11/2024",
        "tgl_nomor" => "28 November 2024",
        "hari" => "Kamis, 28 November 2024",
        "tgl_pendapatan" => "27 November 2024",
        "tgl_setor" => "27 November 2024",
        "jumlah" => "Rp. 150.000.000,00",
        "jumlah2" => "Rp. 150.000.000,00",
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAPH</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* .wrapper {
            width: 21cm;
        } */
    </style>
</head>
<body class="text-black">
    <div class="wrapper m-3 pt-2">
        <?php foreach ($data as $doc): ?>
        <table class="w-full table-auto border border-black mb-8">
            <tbody>
                <!-- Header -->
                <tr>
                    <td class="text-center py-2 border-b border-black scale-60">
                        <img src="/banyumas.png" class="w-12 mx-auto" alt="banyumas" />
                    </td>
                    <td class="w-3/6 text-center border-b border-black scale-60">
                        <p class="text-md mb-0">PEMERINTAH KABUPATEN BANYUMAS</p>
                        <p class="text-lg font-semibold mb-0">DINAS KESEHATAN</p>
                        <p class="text-md font-bold mb-0">KLINIK UTAMA KESEHATAN PARU MASYARAKAT KELAS A</p>
                        <p class="text-xs">Jln. A. Yani Nomor 33 Purwokerto Timur, Banyumas, Jawa Tengah</p>
                        <p class="text-xs">Kode Pos 53111, Telepon (0281) 635658</p>
                        <p class="text-xs">Pos-el bkpm_purwokerto@yahoo.com</p>
                    </td>
                    <td class="text-center py-2 border-b border-black scale-60">
                        <img src="/LOGO_KKPM.png" class="w-12 mx-auto" alt="kkpm" />
                    </td>
                    <td class="w-2/6 py-2 border border-black">
                        <div class="w-full mx-2">
                            <div class="text-sm font-bold">
                                BERITA ACARA PENERIMAAN HARIAN
                            </div>
                            <div class="flex py-0">
                                <div class="w-2/6">No</div>
                                <div class="w-1/12">:</div>
                                <div class="flex-1"><?=$doc["nomor"];?></div>
                            </div>
                            <div class="flex py-0">
                                <div class="w-2/6">Tanggal</div>
                                <div class="w-1/12">:</div>
                                <div class="flex-1"><?=$doc["tgl_nomor"];?></div>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Isi Dokumen -->
                <tr>
                    <td colspan="4">
                        <div class="my-3 mx-3">
                            <p class="text-md text-justify">
                                <span class="ml-6"></span>Yang bertanda tangan di bawah ini menyatakan dengan sesungguhnya bahwa pada hari ini
                                <?=$doc["hari"];?> telah melakukan serah terima penerimaan harian BLUD Klinik Utama Kesehatan Paru Masyarakat Kelas A tanggal
                                <?=$doc["tgl_pendapatan"];?>, dengan rincian sebagai berikut:
                            </p>
                            <ul class="list-decimal list-outside space-y-2 ml-6 text-justify">
                                <li>
                                    Jumlah yang diserahkan oleh Bendahara Penerimaan / Kasir adalah sebagai berikut:
                                    <table class="w-full table-auto">
                                        <thead>
                                            <tr class="bg-gray-100">
                                                <th class="py-1 px-2 border border-black text-center">No</th>
                                                <th class="py-1 px-2 border border-black text-center">Kode Akun</th>
                                                <th class="py-1 px-2 border border-black text-center">Uraian Akun</th>
                                                <th class="py-1 px-2 border border-black text-center">Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="py-1 px-2 border border-black text-center">1</td>
                                                <td class="py-1 px-2 border border-black text-center">102010041411</td>
                                                <td class="py-1 px-2 border border-black">
                                                    <p>Pend. Jasa Pel Rawat Jalan 1</p>
                                                    <p>Tanggal disetorkan: <?=$doc["tgl_setor"];?></p>
                                                </td>
                                                <td class="py-1 px-2 border border-black text-left"><?=$doc["jumlah"];?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="py-1 px-2 border border-black text-right">Jumlah</td>
                                                <td class="py-1 px-2 border border-black text-left"><?=$doc["jumlah2"];?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    Jumlah yang diserahkan oleh Bendahara Penerimaan / Kasir sebagaimana tersebut di atas telah diterima oleh Pejabat Perbendaharaan dan setuju untuk disetorkan ke Rekening Kas BLUD. Demikian berita acara ini dibuat dengan
                                    sebenar-benarnya.
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" class="text-center">
                    <!-- Tanda Tangan -->
                    <div class="flex justify-between mt-6">
                        <div class="w-1/2 text-center">
                            <p>Yang menyerahkan,</p>
                            <p>Bendahara Penerimaan / Kasir</p>
                            <div class="h-16"></div>
                            <p>NASIRIN</p>
                            <p>196906022007011039</p>
                        </div>
                        <div class="w-1/2 text-center">
                            <p>Yang menerima,</p>
                            <p>Pejabat Keuangan</p>
                            <div class="h-16"></div>
                            <p>SITI ASMINATUN JARIAH, SE</p>
                            <p>196708081988032010</p>
                        </div>
                    </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php endforeach;?>
    </div>
</body>
</html>
