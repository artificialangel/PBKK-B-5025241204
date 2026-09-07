<?php

namespace App\Http\Controllers;
class PageController
{
    // GET /Home
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
            'deskripsi'       => 'Departemen Teknik Informatika di ITS berdedikasi pada keunggulan dalam pendidikan, penelitian, dan inovasi di bidang ilmu komputer dan rekayasa perangkat lunak. Kami mempersiapkan mahasiswa untuk menjadi pemimpin teknologi melalui kurikulum mutakhir dan fasilitas kelas dunia.​',
        ];

        return view('about', $profil);
    }

    // GET /project
    public function project()
    {
        $project = [
            'judul_ide'   => 'Pengembangan Agentic AI sebagai Dynamic Application Security Testing (DAST)', 
            'sub_tema'    => 'Analisis Kerentanan dan Keamanan Aplikasi Web',
            'deskripsi'   => 'Mengembangkan sistem DAST berbasis Agentic AI yang mampu melakukan reconnaissance, menganalisis endpoint dan form, mengirim payload keamanan secara dinamis, serta mengevaluasi respons HTTP untuk mendeteksi kerentanan seperti SQL Injection dan XSS. Sistem menggunakan LLM dengan tools berbasis Python dan reasoning loop ReAct untuk mensimulasikan proses pentesting secara otonom, kemudian menghasilkan laporan kerentanan beserta rekomendasi perbaikan. Pengujian dilakukan secara lokal menggunakan aplikasi yang memang dirancang untuk pengujian keamanan seperti DVWA atau OWASP Juice Shop.',
            'anggota_kelompok' => [
                'Kamal Zaky Adinata',
                'Angela Vania Sugiyono',
                'Adrian Afzal Zaidana',
                'Rhea Debora Sianturi',
                'Fathiya Nayla Husna Wibowo',
                'Shifa Alya Dewi',
            ],
        ];

        return view('project', $project);
    }

    // GET /calculator: kalkulator
    public function calculator()
    {
        return view('calculator');
    }
}
