<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import Navbar from '@/components/Navbar.vue';
import Footer from '@/components/Footer.vue';
import { 
    Target, 
    Eye, 
    Heart, 
    Users, 
    Award, 
    Building2,
    GraduationCap,
    Phone,
    MapPin,
    Clock,
    ChevronRight,
    Star,
    CheckCircle2,
    ArrowRight,
    Sparkles,
    BookOpen
} from 'lucide-vue-next';
import { Card, CardContent } from '@/components/ui/card';
import { Button } from '@/components/ui/button';

// Gallery images from local folder
const galleryImages = [
    { url: '/image/foto1.jpeg', caption: 'Aktivitas Lansia' },
    { url: '/image/foto2.jpeg', caption: 'Senam Bersama' },
    { url: '/image/foto3.jpeg', caption: 'Komunitas' },
];

// Core values
const coreValues = [
    { icon: Heart, title: 'Kasih', description: 'Menciptakan lingkungan penuh kepedulian' },
    { icon: Users, title: 'Kebersamaan', description: 'Membangun komunitas yang solid' },
    { icon: Award, title: 'Kualitas', description: 'Program berkualitas untuk lansia' },
    { icon: Star, title: 'Kebanggaan', description: 'Lansia sebagai aset bangsa' },
];

withDefaults(
    defineProps<{
        canRegister?: boolean;
    }>(),
    {
        canRegister: true,
    },
);

const visiMisi = [
    {
        icon: Eye,
        title: 'Visi',
        description: 'Menciptakan lansia Indonesia yang Sehat, Mandiri, Aktif, Produktif, dan Bermartabat (SMART) melalui pendidikan dan pengembangan diri sepanjang hayat.',
        color: 'bg-red-50 text-red-600',
    },
    {
        icon: Target,
        title: 'Misi',
        description: 'Memberikan akses pendidikan dan pelatihan yang berkualitas bagi lansia, mengembangkan potensi lansia dalam berbagai dimensi kehidupan, serta membangun komunitas lansia yang solid dan saling mendukung.',
        color: 'bg-rose-50 text-rose-600',
    },
];

// Pengurus Utama
const strukturPengurus = [
    {
        nama: 'Alwi, S.Ag, M.Pd',
        jabatan: 'Kepala Sekolah',
        foto: null,
        deskripsi: 'Pemimpin Sekolah Lansia Merah Putih Desa Pulai Payung',
    },
    {
        nama: 'Lindar Wani',
        jabatan: 'Ketua Kelas',
        foto: null,
        deskripsi: 'Koordinator kegiatan dan perwakilan peserta',
    },
    {
        nama: 'Leti Listika',
        jabatan: 'Sekretaris',
        foto: null,
        deskripsi: 'Mengelola administrasi dan dokumentasi sekolah',
    },
    {
        nama: 'Masriani H.',
        jabatan: 'Bendahara',
        foto: null,
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
</script>

<template>
    <Head title="Tentang Kami - Sekolah Lansia Merah Putih">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    </Head>

    <div class="min-h-screen bg-white">
        <Navbar :can-register="canRegister" />

        <!-- Hero Section -->
        <section class="relative min-h-[50vh] md:min-h-[60vh] flex items-center bg-red-700">
            <div class="absolute inset-0">
                <img src="/image/foto1.jpeg" alt="Tentang Kami" class="w-full h-full object-cover opacity-20" />
            </div>
            <div class="relative container mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20">
                <div class="max-w-2xl">
                    <span class="inline-flex items-center gap-2 bg-white/20 backdrop-blur text-white px-4 py-2 rounded-full text-sm font-medium mb-6">
                        <Building2 class="w-4 h-4" />
                        BKKBN & Bina Keluarga Lansia (BKL)
                    </span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                        Tentang <span class="text-yellow-300">Kami</span>
                    </h1>
                    <p class="text-lg md:text-xl text-white/90 leading-relaxed">
                        Sekolah Lansia Merah Putih - Model pendidikan non-formal sepanjang hayat 
                        di Desa Pulai Payung, Kabupaten Mukomuko.
                    </p>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="py-16 md:py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                    <div class="order-2 lg:order-1">
                        <span class="text-red-600 font-semibold text-sm uppercase tracking-wide">Tentang Sekolah Lansia</span>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">
                            Apa itu Sekolah Lansia?
                        </h2>
                        <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                            Sekolah Lansia adalah model pendidikan non-formal sepanjang hayat bagi warga lanjut usia. 
                            Berbeda dengan sekolah biasa, fokus utamanya bukan pada nilai akademik, melainkan pada 
                            pengembangan diri agar lansia tetap SMART.
                        </p>
                        <p class="text-gray-600 mb-6">
                            Program ini berada di bawah naungan <strong>Badan Kependudukan dan Keluarga Berencana Nasional (BKKBN)</strong> 
                            melalui kelompok <strong>Bina Keluarga Lansia (BKL)</strong>.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-red-50 text-red-700 rounded-full text-sm font-medium">Sehat</span>
                            <span class="px-3 py-1 bg-red-50 text-red-700 rounded-full text-sm font-medium">Mandiri</span>
                            <span class="px-3 py-1 bg-red-50 text-red-700 rounded-full text-sm font-medium">Aktif</span>
                            <span class="px-3 py-1 bg-red-50 text-red-700 rounded-full text-sm font-medium">Produktif</span>
                            <span class="px-3 py-1 bg-red-50 text-red-700 rounded-full text-sm font-medium">Bermartabat</span>
                        </div>
                    </div>
                    <div class="order-1 lg:order-2">
                        <img src="/image/foto2.jpeg" alt="Kegiatan Lansia" class="rounded-2xl shadow-lg w-full object-cover aspect-4/3" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Visi Misi -->
        <section id="visi-misi" class="py-16 md:py-20 bg-gray-50">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-red-600 font-semibold text-sm uppercase tracking-wide">Arah & Tujuan</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">Visi & Misi</h2>
                    <p class="text-gray-600 text-lg">Komitmen kami dalam mengembangkan lansia Indonesia yang tangguh</p>
                </div>

                <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                    <Card v-for="item in visiMisi" :key="item.title" class="border-0 shadow-md hover:shadow-lg transition-shadow">
                        <CardContent class="p-6">
                            <div class="flex items-start gap-4">
                                <div :class="['w-14 h-14 rounded-xl flex items-center justify-center shrink-0', item.color]">
                                    <component :is="item.icon" class="w-7 h-7" />
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ item.title }}</h3>
                                    <p class="text-gray-600">{{ item.description }}</p>
                                </div>
                            </div>
                        </CardContent>
                    </Card>
                </div>
            </div>
        </section>

        <!-- Core Values -->
        <section class="py-16 md:py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-red-600 font-semibold text-sm uppercase tracking-wide">Nilai-Nilai</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">Nilai-Nilai Kami</h2>
                    <p class="text-gray-600 text-lg">Prinsip yang menjiwai setiap kegiatan di Sekolah Lansia Merah Putih</p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 max-w-5xl mx-auto">
                    <Card v-for="value in coreValues" :key="value.title" class="border-0 shadow-md hover:shadow-lg transition-shadow text-center">
                        <CardContent class="p-6">
                            <div class="w-14 h-14 rounded-xl bg-red-100 flex items-center justify-center mx-auto mb-4">
                                <component :is="value.icon" class="w-7 h-7 text-red-600" />
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">{{ value.title }}</h3>
                            <p class="text-gray-600 text-sm">{{ value.description }}</p>
                        </CardContent>
                    </Card>
                </div>
            </div>
        </section>

        <!-- Struktur Kepengurusan -->
        <section id="struktur" class="py-16 md:py-20 bg-gray-50">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-red-600 font-semibold text-sm uppercase tracking-wide">Organisasi</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">Struktur Kepengurusan</h2>
                    <p class="text-gray-600 text-lg">Tim pengurus Sekolah Lansia Merah Putih Desa Pulai Payung</p>
                </div>

                <!-- Org Chart -->
                <div class="max-w-3xl mx-auto mb-12">
                    <div class="bg-white rounded-2xl shadow-md p-6 md:p-8">
                        <!-- Kepala Sekolah -->
                        <div class="text-center mb-8">
                            <div class="w-24 h-24 rounded-full bg-red-600 flex items-center justify-center mx-auto mb-3">
                                <GraduationCap class="w-12 h-12 text-white" />
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">Alwi, S.Ag, M.Pd</h3>
                            <p class="text-red-600 font-medium">Kepala Sekolah</p>
                        </div>

                        <!-- Ketua Kelas -->
                        <div class="text-center mb-8 py-4 bg-red-50 rounded-xl">
                            <h3 class="text-lg font-bold text-gray-900">Lindar Wani</h3>
                            <p class="text-red-600 text-sm">Ketua Kelas</p>
                        </div>

                        <!-- Sekretaris & Bendahara -->
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div class="text-center py-4 border border-red-100 rounded-xl">
                                <h3 class="font-bold text-gray-900">Leti Listika</h3>
                                <p class="text-red-600 text-sm">Sekretaris</p>
                            </div>
                            <div class="text-center py-4 border border-red-100 rounded-xl">
                                <h3 class="font-bold text-gray-900">Masriani H.</h3>
                                <p class="text-red-600 text-sm">Bendahara</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kader -->
                <div class="max-w-3xl mx-auto">
                    <h3 class="text-xl font-bold text-gray-900 text-center mb-6">Kader Sekolah Lansia</h3>
                    <div class="bg-white rounded-2xl shadow-md p-6">
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                            <div v-for="(kader, index) in daftarKader" :key="kader" 
                                 class="flex items-center gap-2 bg-red-50 rounded-lg p-3">
                                <div class="w-8 h-8 rounded-full bg-red-600 flex items-center justify-center text-white text-sm font-bold shrink-0">
                                    {{ index + 1 }}
                                </div>
                                <span class="font-medium text-gray-900 text-sm">{{ kader }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-16 md:py-20 bg-red-600">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Bergabung dengan Kami</h2>
                <p class="text-white/90 text-lg mb-8 max-w-2xl mx-auto">
                    Jadilah bagian dari komunitas lansia tangguh di Desa Pulai Payung. 
                    Bersama-sama kita belajar, berkarya, dan saling mendukung.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <Button class="bg-white text-red-600 hover:bg-gray-100 font-semibold px-8 py-3 h-auto">
                        Daftar Sekarang
                    </Button>
                    <Button variant="outline" class="border-white text-white hover:bg-white/20 px-8 py-3 h-auto">
                        Hubungi Kami
                    </Button>
                </div>
            </div>
        </section>

        <Footer :can-register="canRegister" />
    </div>
</template>