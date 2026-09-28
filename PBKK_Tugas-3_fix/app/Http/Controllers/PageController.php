<?php

namespace App\Http\Controllers;

class PageController
{
    // GET /
    public function index()
    {
        $data = [
            'nama'  => 'Fathiya Nayla Husna Wibowo',
            'nrp'   => '5025241204',
            'kelas' => 'PBKK A',
            'kelompok' => '4',
        ];

        return view('home', $data);
    }

    // GET /about
    public function about()
    {
        $profil = [
            'nama_departemen' => 'Departemen Teknik Informatika',
            'institusi'       => 'Institut Teknologi Sepuluh Nopember (ITS)',
            'fakultas'        => 'Fakultas Teknologi Elektro dan Informatika Cerdas (FTEIC)',
            'deskripsi'       => 'Departemen Teknik Informatika di ITS berdedikasi pada keunggulan dalam pendidikan, penelitian, dan inovasi di bidang ilmu komputer dan rekayasa perangkat lunak. Kami mempersiapkan mahasiswa untuk menjadi pemimpin teknologi melalui kurikulum mutakhir dan fasilitas kelas dunia.',
        ];

        return view('about', $profil);
    }

    // GET /dashboard/mahasiswa/{nrp}
    public function mahasiswa(string $nrp)
    {
        // "Database" sederhana profil mahasiswa (contoh data).
        $daftarMahasiswa = [
            '5025241204' => [
                'nama'     => 'Fathiya Nayla Husna Wibowo',
                'prodi'    => 'S1 Teknik Informatika',
                'angkatan' => '2024',
                'ipk'      => '-',
            ],
        ];

        $profil = $daftarMahasiswa[$nrp] ?? null;

        return view('mahasiswa', [
            'nrp'    => $nrp,
            'profil' => $profil,
        ]);
    }

    // GET /agent/{tema?}
    public function agent(?string $tema = null)
    {
        $default = 'Agentic AI untuk keamanan web';
        $tema = $tema ?: $default;

        $katalog = [
            'Agentic AI untuk keamanan web' => [
                'deskripsi' => 'Kami merancang aplikasi Dynamic Application Security Testing (DAST) yang menggunakan Agentic AI untuk membantu menemukan kerentanan pada aplikasi web secara mandiri.
                                Agen ini bekerja seperti pentester: memetakan halaman dan endpoint, membaca respons HTTP, lalu menentukan uji berikutnya berdasarkan temuan sebelumnya. Hasil pengujian dirangkum menjadi
                                laporan yang mudah dipahami, lengkap dengan saran perbaikan di tingkat kode.
                                Versi awal akan berfokus pada crawling halaman, analisis form, pengiriman payload uji untuk SQL Injection dan XSS, serta validasi respons. Pengujian dilakukan secara legal pada target lokal seperti OWASP Juice Shop atau DVWA.',
                'tags'      => ['Reconnaissance', 'AI Reasoning', 'Security Report'],
                'badge'     => 'AGENTIC SECURITY / MVP',
            ],
        ];

        $entry = $katalog[$tema] ?? [
            'deskripsi' => 'Belum ada deskripsi khusus untuk tema "' . $tema . '". Silakan tambahkan penjelasannya di PageController@agent.',
            'tags'      => [],
            'badge'     => null,
        ];

        return view('agent', [
            'tema'      => $tema,
            'deskripsi' => $entry['deskripsi'],
            'tags'      => $entry['tags'],
            'badge'     => $entry['badge'],
            'isDefault' => $tema === $default,
        ]);
    }
    

    // GET /calculator
    public function calculator()
    {
        return view('calculator');
    }

    // GET /hitung-ipk/{ip1}/{ip2}
    public function hitungIpk(string $ip1, string $ip2)
    {
        $ip1 = (float) $ip1;
        $ip2 = (float) $ip2;

        $jumlah   = $ip1 + $ip2;
        $rataRata = round($jumlah / 2, 2);

        return view('hitung-ipk', [
            'ip1'      => number_format($ip1, 2),
            'ip2'      => number_format($ip2, 2),
            'jumlah'   => number_format($jumlah, 2),
            'rataRata' => number_format($rataRata, 2),
        ]);
    }
}
