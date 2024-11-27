<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BAPH</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const data = {
          nomor: "21./SBS/11/2024",
          tgl_nomor: "27 November 2024",
          hari: "Rabu, 27 November 2024",
          tgl_pendapatan: "26 November 2024",
          tgl_setor: "26 November 2024",
          jumlah: "Rp. 99.000.000,00",
          jumlah2: "Rp. 99.000.000,00",
        };

        // Mengisi elemen berdasarkan id
        for (const key in data) {
          document.getElementById(key).textContent = data[key];
        }
      });
    </script>
  </head>
  <body class="text-black">
    <div class="wrapper m-3">
      <!-- Header -->
      <table class="w-full table-auto border border-black">
        <tbody>
          <tr>
            <td class="w-1/6 text-center py-2 border-b border-black scale-60">
              <img src="/banyumas.png" class="w-12 mx-auto" alt="banyumas" />
              <!-- <img src="/LOGO_KKPM.png" class="w-12 mx-auto" alt="kkpm" /> -->
            </td>
            <td class="w-2/6 text-center border-b border-black scale-60">
              <p class="text-md mb-0">PEMERINTAH KABUPATEN BANYUMAS</p>
              <p class="text-lg font-semibold mb-0">DINAS KESEHATAN</p>
              <p class="text-md font-bold mb-0">KLINIK UTAMA KESEHATAN PARU MASYARAKAT KELAS A</p>
              <p class="text-xs">Jln. A. Yani Nomor 33 Purwokerto Timur, Banyumas, Jawa Tengah</p>
              <p class="text-xs">Kode Pos 53111, Telepon (0281) 635658</p>
              <p class="text-xs">Pos-el bkpm_purwokerto@yahoo.com</p>
            </td>
            <td class="w-1/6 text-center py-2 border-b border-black scale-60">
              <img src="/LOGO_KKPM.png" class="w-12 mx-auto" alt="kkpm" />
            </td>
            <td class="w-2/6 py-2 border border-black">
              <table class="mx-4 w-full table-auto">
                <tbody>
                  <tr>
                    <td colspan="3" class="font-bold text-center">BERITA ACARA PENERIMAAN HARIAN</td>
                  </tr>
                  <tr>
                    <td class="py-0">No</td>
                    <td class="py-0">:</td>
                    <td class="py-0" id="nomor"></td>
                  </tr>
                  <tr>
                    <td class="py-0">Tanggal</td>
                    <td class="py-0">:</td>
                    <td class="py-0" id="tgl_nomor"></td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr>
            <td colspan="4">
              <!-- Isi Dokumen -->
              <div class="my-3 mx-3">
                <p class="text-md text-justify">
                  <span class="ml-6"></span>Yang bertanda tangan di bawah ini menyatakan dengan sesungguhnya bahwa pada hari ini <span id="hari"></span> telah melakukan serah terima penerimaan harian BLUD Klinik Utama Kesehatan Paru
                  Masyarakat Kelas A tanggal <span id="tgl_pendapatan"></span>, dengan rincian sebagai berikut:
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
                          <td class="py-1 px-2 border border-black text-center" id="kode_akun">102010041411</td>
                          <td class="py-1 px-2 border border-black">
                            <p>Pend. Jasa Pel Rawat Jalan 1</p>
                            <p>Tanggal disetorkan: <span id="tgl_setor"></span></p>
                          </td>
                          <td class="py-1 px-2 border border-black text-left" id="jumlah"></td>
                        </tr>
                        <tr>
                          <td colspan="3" class="py-1 px-2 border border-black text-right">Jumlah</td>
                          <td class="py-1 px-2 border border-black text-left" id="jumlah2"></td>
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
    </div>
  </body>
</html>