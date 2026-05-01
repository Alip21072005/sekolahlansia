<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import Navbar from '@/components/Navbar.vue';
import Footer from '@/components/Footer.vue';
import { 
    Target, 
    Eye, 
    Heart, 
    Users, 
    Award, 
    Building2,
    Star,
    CheckCircle2,
    MessageCircle
} from 'lucide-vue-next';
import { Card, CardContent } from '@/components/ui/card';
import { Button } from '@/components/ui/button';

// Gallery images from local folder
const galleryImages = [
    { url: '/image/foto1.jpeg', caption: 'Aktivitas Lansia' },
    { url: '/image/foto2.jpeg', caption: 'Senam Bersama' },
    { url: '/image/foto3.jpeg', caption: 'Komunitas' },
    { url: '/image/foto4.jpeg', caption: 'Kerajinan Tangan' },
    { url: '/image/foto5.jpeg', caption: 'Bersama Kader' },
    { url: '/image/foto6.jpeg', caption: 'Aktivitas Bersama' },
    { url: '/image/foto7.jpeg', caption: 'Belajar Bersama' },
    { url: '/image/foto9.jpeg', caption: 'Kegiatan Seru' },
    { url: '/image/WhatsApp Image 2026-05-01 at 18.49.53.jpeg', caption: 'Momen Bahagia' },
    { url: '/image/WhatsApp Image 2026-05-01 at 18.49.54.jpeg', caption: 'Senyum Lansia' },
    { url: '/image/WhatsApp Image 2026-05-01 at 18.50.00.jpeg', caption: 'Kegiatan Rutin' },
    { url: '/image/WhatsApp Image 2026-05-01 at 18.50.01.jpeg', caption: 'Bersama Teman' },
];

// Core values
const coreValues = [
    { icon: Heart, title: 'Kasih', description: 'Menciptakan lingkungan penuh kepedulian dan kehangatan' },
    { icon: Users, title: 'Kebersamaan', description: 'Membangun komunitas yang solid dan saling mendukung' },
    { icon: Award, title: 'Kualitas', description: 'Menghadirkan program terbaik dan aman untuk lansia' },
    { icon: Star, title: 'Kebanggaan', description: 'Menghargai lansia sebagai aset berharga bagi desa dan bangsa' },
];

// Tentang page - no registration

const visiMisi = [
    {
        icon: Eye,
        title: 'Visi',
        description: 'Menciptakan lansia Indonesia yang Sehat, Mandiri, Aktif, Produktif, dan Bermartabat (SMART) melalui pendidikan dan pengembangan diri sepanjang hayat.',
        color: 'text-blue-600',
        bg: 'bg-blue-100',
    },
    {
        icon: Target,
        title: 'Misi',
        description: 'Memberikan akses pendidikan dan pelatihan berkualitas, mengembangkan potensi dalam berbagai dimensi kehidupan, serta membangun komunitas lansia yang saling mendukung.',
        color: 'text-blue-600',
        bg: 'bg-blue-100',
    },
];

// Pengurus Utama
const strukturPengurus = [
    {
        nama: 'Mustarrudin, S.E.',
        jabatan: 'Penanggungjawab',
        foto: '/profil/mustarrudin.png',
        deskripsi: 'Kepala Desa Pulai Payung',
    },
    {
        nama: 'Alni, S.Ag, M.Pd',
        jabatan: 'Kepala Sekolah',
        foto: '/profil/alni.png',
        deskripsi: 'Pemimpin Sekolah Lansia Merah Putih Desa Pulai Payung',
    },
    {
        nama: 'Lindar Wani',
        jabatan: 'Ketua Kelas',
        foto: '/profil/lindar.png',
        deskripsi: 'Koordinator kegiatan dan perwakilan peserta',
    },
    {
        nama: 'Leti Listika',
        jabatan: 'Sekretaris',
        foto: '/profil/leti.png',
        deskripsi: 'Mengelola administrasi dan dokumentasi sekolah',
    },
    {
        nama: 'Masriani H.',
        jabatan: 'Bendahara',
        foto: '/profil/masriani.png',
        deskripsi: 'Mengelola keuangan dan dana program',
    },
];

// Daftar Kader
const daftarKader = [
    'Ambar Wati',
    'Darlis',
    'Misbahul Khairi',
    'Dila',
    'Mira Melati',
    'Sumartini',
    'Rini (Subari)',
];

const kontakWhatsApp = 'https://wa.me/6281234567890'; // Sesuaikan nomornya
</script>

<template>
    <Head title="Tentang Kami - Sekolah Lansia Merah Putih" />

    <div class="min-h-screen bg-slate-50 font-sans">
        <Navbar />

        <!-- Hero Section -->
        <section class="bg-white border-b border-slate-200">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 text-center">
                <div class="inline-flex items-center gap-2 bg-blue-50 text-blue-600 px-4 py-2 rounded-full text-sm font-medium mb-6">
                    <Building2 class="w-4 h-4" />
                    BKKBN & Bina Keluarga Lansia
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 mb-6 leading-tight max-w-4xl mx-auto">
                    Tentang <span class="text-blue-600">Kami</span>
                </h1>
                <p class="text-lg sm:text-xl text-slate-600 mb-0 max-w-3xl mx-auto leading-relaxed">
                    Sekolah Lansia Merah Putih - Model pendidikan non-formal sepanjang hayat 
                    di Desa Pulai Payung, Kabupaten Mukomuko.
                </p>
            </div>
        </section>

        <!-- About Section -->
        <section class="py-16 md:py-24">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                    <div class="order-2 lg:order-1">
                        <div class="inline-flex items-center gap-2 text-blue-600 text-sm font-medium mb-3">
                            <Star class="w-4 h-4" />
                            Mengenal Lebih Dekat
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">
                            Apa itu Sekolah Lansia?
                        </h2>
                        <p class="text-slate-600 text-lg mb-6 leading-relaxed">
                            Sekolah Lansia adalah model pendidikan non-formal sepanjang hayat bagi warga lanjut usia. 
                            Fokus utamanya adalah pengembangan diri agar lansia tetap sehat, aktif, dan bahagia di usia senja.
                        </p>
                        <p class="text-slate-600 text-lg mb-8 leading-relaxed">
                            Program ini berada di bawah naungan <strong>Badan Kependudukan dan Keluarga Berencana Nasional (BKKBN)</strong> 
                            melalui kelompok <strong>Bina Keluarga Lansia (BKL)</strong> Desa Pulai Payung.
                        </p>
                        
                        <!-- Tags Pilar SMART -->
                        <div class="flex flex-wrap gap-3">
                            <span v-for="tag in ['Sehat', 'Mandiri', 'Aktif', 'Produktif', 'Bermartabat']" :key="tag" 
                                  class="px-5 py-2 bg-white border border-slate-200 shadow-sm text-slate-700 rounded-full text-sm font-medium flex items-center gap-2">
                                <CheckCircle2 class="w-4 h-4 text-green-500" />
                                {{ tag }}
                            </span>
                        </div>
                    </div>
                    <div class="order-1 lg:order-2">
                        <div class="relative">
                            <img src="/image/WhatsApp Image 2026-05-01 at 18.49.53 (1).jpeg" alt="Kegiatan Lansia" class="w-full rounded-2xl shadow-xl object-cover aspect-4/3" />
                            <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-2xl shadow-lg border border-slate-100 hidden sm:block">
                                <p class="font-bold text-blue-600 text-2xl">SMART</p>
                                <p class="text-sm text-slate-500 font-medium">Lansia Tangguh</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      

        <!-- Visi Misi -->
        <section id="visi-misi" class="py-16 md:py-24 bg-slate-100">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl">
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Visi & Misi</h2>
                    <p class="text-lg text-slate-600">Komitmen kami dalam mengembangkan lansia Indonesia yang tangguh</p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <Card v-for="item in visiMisi" :key="item.title" class="border-0 shadow-md rounded-2xl hover:shadow-lg transition-shadow">
                        <CardContent class="p-8">
                            <div class="flex items-start gap-6">
                                <div :class="`w-14 h-14 rounded-2xl flex items-center justify-center shrink-0 ${item.bg}`">
                                    <component :is="item.icon" :class="`w-7 h-7 ${item.color}`" />
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-slate-900 mb-3">{{ item.title }}</h3>
                                    <p class="text-slate-600 text-base leading-relaxed">{{ item.description }}</p>
                                </div>
                            </div>
                        </CardContent>
                    </Card>
                </div>
            </div>
        </section>

        <!-- Core Values -->
        <section class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl">
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Nilai-Nilai Kami</h2>
                    <p class="text-lg text-slate-600">Prinsip yang menjiwai setiap kegiatan di Sekolah Lansia Merah Putih</p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <Card v-for="value in coreValues" :key="value.title" class="border border-slate-100 shadow-sm hover:shadow-md transition-all rounded-2xl text-center group">
                        <CardContent class="p-8">
                            <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-600 transition-colors duration-300">
                                <component :is="value.icon" class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors duration-300" />
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">{{ value.title }}</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">{{ value.description }}</p>
                        </CardContent>
                    </Card>
                </div>
            </div>
        </section>

        <!-- Struktur Kepengurusan -->
        <section id="struktur" class="py-16 md:py-24 bg-slate-50 border-t border-slate-200">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl">
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Struktur Kepengurusan</h2>
                    <p class="text-lg text-slate-600">Tim pengurus yang berdedikasi untuk Sekolah Lansia Merah Putih</p>
                </div>

                <!-- Org Chart - Modern Cards -->
                <div class="space-y-10">
                    <!-- Penanggungjawab (Top Tier - Kepala Desa) -->
                    <div class="flex justify-center">
                        <Card class="border-0 shadow-2xl rounded-3xl w-full max-w-md text-center relative overflow-hidden bg-white">
                            <div class="h-4 bg-linear-to-r from-blue-600 to-blue-700 w-full absolute top-0 left-0"></div>
                            <CardContent class="p-8 pt-10">
                                <div class="w-48 h-56 mx-auto mb-6 rounded-2xl border-4 border-blue-100 shadow-xl overflow-hidden">
                                    <img :src="strukturPengurus[0].foto" :alt="strukturPengurus[0].nama" class="w-full h-full object-cover object-top" />
                                </div>
                                <h3 class="text-2xl font-bold text-slate-900 mb-2">{{ strukturPengurus[0].nama }}</h3>
                                <p class="text-blue-600 font-semibold text-lg mb-3">{{ strukturPengurus[0].jabatan }}</p>
                                <p class="text-slate-500">{{ strukturPengurus[0].deskripsi }}</p>
                            </CardContent>
                        </Card>
                    </div>

                    <!-- Kepala Sekolah (Second Tier) -->
                    <div class="flex justify-center">
                        <Card class="border-0 shadow-xl rounded-3xl w-full max-w-sm text-center relative overflow-hidden bg-white">
                            <div class="h-3 bg-blue-500 w-full absolute top-0 left-0"></div>
                            <CardContent class="p-6 pt-8">
                                <div class="w-40 h-48 mx-auto mb-5 rounded-2xl border-4 border-white shadow-lg overflow-hidden">
                                    <img :src="strukturPengurus[1].foto" :alt="strukturPengurus[1].nama" class="w-full h-full object-cover object-top" />
                                </div>
                                <h3 class="text-xl font-bold text-slate-900 mb-2">{{ strukturPengurus[1].nama }}</h3>
                                <p class="text-blue-600 font-semibold mb-2">{{ strukturPengurus[1].jabatan }}</p>
                                <p class="text-slate-500 text-sm">{{ strukturPengurus[1].deskripsi }}</p>
                            </CardContent>
                        </Card>
                    </div>

                    <!-- Pengurus Inti (Third Tier) -->
                    <div class="grid sm:grid-cols-3 gap-8">
                        <Card v-for="pengurus in strukturPengurus.slice(2)" :key="pengurus.nama" class="border-0 shadow-lg rounded-3xl text-center hover:shadow-xl transition-shadow bg-white">
                            <CardContent class="p-6">
                                <div class="w-36 h-44 mx-auto mb-5 rounded-2xl border-4 border-slate-100 shadow-md overflow-hidden">
                                    <img :src="pengurus.foto" :alt="pengurus.nama" class="w-full h-full object-cover object-top" />
                                </div>
                                <h3 class="text-lg font-bold text-slate-900 mb-1">{{ pengurus.nama }}</h3>
                                <p class="text-slate-600 font-medium text-sm mb-2">{{ pengurus.jabatan }}</p>
                                <p class="text-slate-500 text-xs">{{ pengurus.deskripsi }}</p>
                            </CardContent>
                        </Card>
                    </div>
                </div>

                <!-- Kader -->
                <div class="mt-16 text-center">
                    <h3 class="text-xl font-bold text-slate-900 mb-8">Kader Sekolah Lansia</h3>
                    <div class="flex flex-wrap justify-center gap-3">
                        <div v-for="(kader, index) in daftarKader" :key="index" 
                             class="bg-white border border-slate-200 shadow-sm px-6 py-3 rounded-xl">
                            <span class="text-slate-700 font-medium">{{ kader }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-16 md:py-24 bg-blue-600 text-white text-center">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-3xl">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Jadilah Bagian dari Kami</h2>
                <p class="text-lg text-blue-100 mb-10 leading-relaxed">
                    Mari bersama-sama mewujudkan komunitas lansia yang sehat, mandiri, aktif, produktif, dan bermartabat di Desa Pulai Payung.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a :href="kontakWhatsApp" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto">
                        <Button class="w-full sm:w-auto bg-transparent border-2 border-white text-white hover:bg-white hover:text-blue-600 text-lg px-8 py-6 h-auto rounded-xl shadow-lg transition-all duration-300">
                            <MessageCircle class="w-5 h-5 mr-2" />
                            Hubungi Pengurus
                        </Button>
                    </a>
                </div>
            </div>
        </section>

        <Footer />
    </div>
</template>

<style scoped>
@keyframes marquee {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}

.animate-marquee {
    animation: marquee 20s linear infinite;
}
</style>