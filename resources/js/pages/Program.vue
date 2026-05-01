<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { Button } from '@/components/ui/button';
import { Card, CardContent } from '@/components/ui/card';
import Navbar from '@/components/Navbar.vue';
import Footer from '@/components/Footer.vue';
import {
    Heart,
    Brain,
    Palette,
    Activity,
    Users,
    Leaf,
    Dumbbell,
    Sun,
    MessageCircle,
    Clock,
    CheckCircle2
} from 'lucide-vue-next';

// Program page - no registration

// Data Program Kategori
const programList = [
    {
        kategori: 'Kesehatan Fisik',
        ikon: Activity,
        warna: 'text-blue-500',
        bg: 'bg-blue-100',
        program: [
            { judul: 'Senam Sehat Lansia', deskripsi: 'Menjaga kelenturan sendi dan kebugaran jantung dengan gerakan ringan.', waktu: 'Setiap Senin & Kamis Pagi' },
            { judul: 'Cek Kesehatan Rutin', deskripsi: 'Pemeriksaan tensi, gula darah, dan kolesterol oleh tenaga kesehatan desa.', waktu: 'Minggu Pertama Tiap Bulan' },
        ]
    },
    {
        kategori: 'Mental & Spiritual',
        ikon: Brain,
        warna: 'text-emerald-600',
        bg: 'bg-emerald-100',
        program: [
            { judul: 'Kajian & Bimbingan Rohani', deskripsi: 'Memperdalam ilmu agama untuk ketenangan batin dan pikiran.', waktu: 'Setiap Jumat Pagi' },
            { judul: 'Sesi Curhat & Sosialisasi', deskripsi: 'Ruang aman untuk bercerita dan berbagi pengalaman antar anggota.', waktu: 'Setiap Rabu Sore' },
        ]
    },
    {
        kategori: 'Keterampilan & Kreasi',
        ikon: Palette,
        warna: 'text-amber-600',
        bg: 'bg-amber-100',
        program: [
            { judul: 'Kerajinan Tangan', deskripsi: 'Membuat karya seni dari bahan daur ulang yang bernilai ekonomis.', waktu: 'Setiap Selasa Siang' },
            { judul: 'Kebun Mini Pintar', deskripsi: 'Belajar menanam tanaman obat keluarga (TOGA) dan sayuran organik.', waktu: 'Jadwal Fleksibel' },
        ]
    }
];

// Data Manfaat
const manfaatList = [
    { judul: 'Menjaga Kebugaran Fisik', deskripsi: 'Aktivitas yang dirancang khusus aman untuk persendian dan otot lansia.', ikon: Dumbbell },
    { judul: 'Mencegah Kepikunan', deskripsi: 'Stimulasi otak melalui kegiatan baru dan interaksi sosial yang rutin.', ikon: Brain },
    { judul: 'Memperluas Persaudaraan', deskripsi: 'Bertemu teman sebayanya agar tidak merasa kesepian di rumah.', ikon: Users },
    { judul: 'Meningkatkan Kebahagiaan', deskripsi: 'Menikmati masa tua dengan kegiatan yang positif, produktif, dan menyenangkan.', ikon: Sun },
];

const kontakWhatsApp = 'https://wa.me/6281234567890'; // Ganti dengan nomor asli
</script>

<template>
    <Head title="Program Kami - Sekolah Lansia Merah Putih" />

    <div class="min-h-screen bg-slate-50 font-sans">
        <Navbar />

        <!-- Header Halaman -->
        <section class="bg-white border-b border-slate-200">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 text-center">
                <div class="inline-flex items-center gap-2 bg-blue-50 text-blue-500 px-4 py-2 rounded-full text-sm font-medium mb-6">
                    <Heart class="w-4 h-4" />
                    Pendidikan Sepanjang Hayat
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-slate-900 mb-6 leading-tight max-w-3xl mx-auto">
                    Program Unggulan <span class="text-blue-500">Sekolah Lansia</span>
                </h1>
                <p class="text-lg sm:text-xl text-slate-600 mb-0 max-w-2xl mx-auto leading-relaxed">
                    Kami merancang berbagai kegiatan yang menyesuaikan dengan kemampuan fisik dan kebutuhan batin para lansia di Desa Pulai Payung.
                </p>
            </div>
        </section>

        <!-- Daftar Program Utama -->
        <section class="py-16 md:py-24">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl">
                
                <div v-for="(kategori, index) in programList" :key="index" class="mb-16 last:mb-0">
                    <!-- Judul Kategori -->
                    <div class="flex items-center gap-4 mb-8">
                        <div :class="`w-14 h-14 rounded-2xl flex items-center justify-center ${kategori.bg}`">
                            <component :is="kategori.ikon" :class="`w-7 h-7 ${kategori.warna}`" />
                        </div>
                        <h2 class="text-2xl md:text-3xl font-bold text-slate-900">{{ kategori.kategori }}</h2>
                    </div>

                    <!-- Grid Program -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <Card v-for="(item, idx) in kategori.program" :key="idx" class="border-0 shadow-md hover:shadow-lg transition-all rounded-2xl overflow-hidden group">
                            <CardContent class="p-6 sm:p-8">
                                <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-500 transition-colors">
                                    {{ item.judul }}
                                </h3>
                                <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                                    {{ item.deskripsi }}
                                </p>
                                <div class="flex items-center gap-2 text-slate-700 bg-slate-100 w-fit px-4 py-2 rounded-lg text-base font-medium">
                                    <Clock class="w-5 h-5 text-blue-500" />
                                    {{ item.waktu }}
                                </div>
                            </CardContent>
                        </Card>
                    </div>
                </div>

            </div>
        </section>

        <!-- Manfaat Bergabung (Benefit Section) -->
        <section class="py-16 md:py-24 bg-blue-500 text-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Mengapa Harus Bergabung?</h2>
                    <p class="text-lg md:text-xl text-blue-100 max-w-2xl mx-auto">
                        Manfaat nyata yang dirasakan oleh para lansia yang aktif mengikuti program kami.
                    </p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div v-for="(manfaat, index) in manfaatList" :key="index" class="text-center">
                        <div class="w-20 h-20 bg-white/10 rounded-full flex items-center justify-center mx-auto mb-6 backdrop-blur-sm">
                            <component :is="manfaat.ikon" class="w-10 h-10 text-white" />
                        </div>
                        <h3 class="text-xl font-bold mb-3">{{ manfaat.judul }}</h3>
                        <p class="text-blue-100 text-base leading-relaxed">{{ manfaat.deskripsi }}</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section (Call to Action) -->
        <section class="py-16 md:py-24 bg-white border-t border-slate-200">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center max-w-3xl">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">Mulai Harimu dengan Semangat Baru!</h2>
                <p class="text-lg text-slate-600 mb-10 leading-relaxed">
                    Punya pertanyaan mengenai jadwal atau ingin mendaftarkan orang tua/kakek/nenek Anda? Jangan ragu untuk menghubungi pengurus kami.
                </p>
                
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a :href="kontakWhatsApp" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto">
                        <Button class="w-full sm:w-auto bg-green-600 hover:bg-green-700 text-white text-lg px-8 py-6 h-auto rounded-xl shadow-lg shadow-green-200">
                            <MessageCircle class="w-6 h-6 mr-3" />
                            Tanya via WhatsApp
                        </Button>
                    </a>
                </div>
            </div>
        </section>

        <Footer />
    </div>
</template>