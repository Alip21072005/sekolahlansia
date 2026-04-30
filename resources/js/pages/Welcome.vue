<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { register } from '@/routes';
import { Button } from '@/components/ui/button';
import { Card, CardContent } from '@/components/ui/card';
import Navbar from '@/components/Navbar.vue';
import Footer from '@/components/Footer.vue';
import {
    Calendar,
    Heart,
    Users,
    Phone,
    MapPin,
    Clock,
    ChevronRight,
    ArrowRight,
    Sparkles,
    Brain,
    HandHeart,
    Leaf,
    Building2,
    Award,
    Shield,
    Dumbbell,
    Palette,
    Star,
    CheckCircle2,
    PlayCircle
} from 'lucide-vue-next';

// Featured images from local folder
const featuredImages = [
    { url: '/image/foto1.jpeg', caption: 'Komunitas Lansia' },
    { url: '/image/foto2.jpeg', caption: 'Kegiatan Senam' },
    { url: '/image/foto3.jpeg', caption: 'Sosialisasi' },
    { url: '/image/foto4.jpeg', caption: 'Kerajinan Tangan' },
];

// Quick stats
const quickStats = [
    { number: '50+', label: 'Anggota Aktif', icon: Users },
    { number: '7', label: 'Dimensi Program', icon: Star },
    { number: '5', label: 'Pilar SMART', icon: Award },
];

withDefaults(
    defineProps<{
        canRegister: boolean;
    }>(),
    {
        canRegister: true,
    },
);

// Program SMART (Sehat, Mandiri, Aktif, Produktif, Bermartabat)
const smartProgram = [
    { letter: 'S', title: 'Sehat', description: 'Kesehatan fisik dan mental yang optimal', icon: Heart },
    { letter: 'M', title: 'Mandiri', description: 'Mampu melakukan aktivitas secara mandiri', icon: Award },
    { letter: 'A', title: 'Aktif', description: 'Tetap aktif secara sosial dan fisik', icon: Users },
    { letter: 'R', title: 'Produktif', description: 'Terus menghasilkan karya dan manfaat', icon: Dumbbell },
    { letter: 'T', title: 'Bermartabat', description: 'Hidup dengan penuh harga diri', icon: Shield },
];

// 7 Dimensi Lansia Tangguh
const dimensions = [
    {
        icon: Sparkles,
        title: 'Dimensi Spiritual',
        description: 'Kegiatan keagamaan, meditasi, dan pembinaan ketenangan batin untuk kesejahteraan mental.',
        color: 'bg-purple-50 text-purple-600',
    },
    {
        icon: Heart,
        title: 'Dimensi Fisik',
        description: 'Senam lansia, pemeriksaan kesehatan rutin, dan edukasi nutrisi seimbang.',
        color: 'bg-red-50 text-red-600',
    },
    {
        icon: Brain,
        title: 'Dimensi Intelektual',
        description: 'Melatih daya ingat dan kognitif untuk mencegah pikun melalui permainan dan diskusi.',
        color: 'bg-blue-50 text-blue-600',
    },
    {
        icon: HandHeart,
        title: 'Dimensi Emosional',
        description: 'Sosialisasi dan kegiatan kelompok untuk mencegah kesepian dan meningkatkan kesejahteraan.',
        color: 'bg-rose-50 text-rose-600',
    },
    {
        icon: Users,
        title: 'Dimensi Sosial Kemasyarakatan',
        description: 'Bakti sosial, keterlibatan dalam acara desa, dan kontribusi untuk masyarakat.',
        color: 'bg-orange-50 text-orange-600',
    },
    {
        icon: Palette,
        title: 'Dimensi Profesional Vokasional',
        description: 'Keterampilan tangan, kerajinan, dan hobi yang bisa menghasilkan ekonomis.',
        color: 'bg-green-50 text-green-600',
    },
    {
        icon: Leaf,
        title: 'Dimensi Lingkungan',
        description: 'Menjaga kebersihan, kenyamanan, dan kelestarian lingkungan tempat tinggal.',
        color: 'bg-emerald-50 text-emerald-600',
    },
];
</script>

<template>
    <Head title="Selamat Datang di Sekolah Lansia Merah Putih">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    </Head>

    <div class="min-h-screen bg-white">
        <Navbar :can-register="canRegister" />

        <!-- Hero Section -->
        <section class="relative min-h-[60vh] md:min-h-[70vh] flex items-center bg-gradient-to-br from-red-700 to-red-600">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20">
                <div class="max-w-2xl">
                    <span class="inline-flex items-center gap-2 bg-white/20 backdrop-blur text-white px-4 py-2 rounded-full text-sm font-medium mb-6">
                        <Building2 class="w-4 h-4" />
                        BKKBN & Bina Keluarga Lansia (BKL)
                    </span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                        Sekolah Lansia <span class="text-yellow-300">Merah Putih</span>
                    </h1>
                    <p class="text-lg md:text-xl text-white/90 mb-8 leading-relaxed">
                        Model pendidikan non-formal sepanjang hayat di Desa Pulai Payung, 
                        Kabupaten Mukomuko untuk lansia yang SMART.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <Link v-if="canRegister" :href="register()">
                            <Button class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold px-6 py-3 h-auto">
                                Gabung Sekarang
                                <ArrowRight class="w-4 h-4 ml-2" />
                            </Button>
                        </Link>
                        <a href="#program">
                            <Button variant="outline" class="border-white text-white hover:bg-white/20 px-6 py-3 h-auto">
                                Lihat Program
                            </Button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Bar -->
        <section class="bg-red-600 py-8">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-3 gap-4 md:gap-8 text-center">
                    <div v-for="stat in quickStats" :key="stat.label">
                        <p class="text-3xl md:text-4xl font-bold text-white">{{ stat.number }}</p>
                        <p class="text-white/80 text-sm md:text-base">{{ stat.label }}</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="py-16 md:py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                    <div class="order-2 lg:order-1">
                        <span class="text-red-600 font-semibold text-sm uppercase tracking-wide">Tentang Kami</span>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">
                            Apa itu Sekolah Lansia?
                        </h2>
                        <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                            Sekolah Lansia adalah model pendidikan non-formal sepanjang hayat bagi warga lanjut usia. 
                            Berbeda dengan sekolah biasa, fokus utamanya bukan pada nilai akademik, melainkan pada 
                            pengembangan diri agar lansia tetap SMART.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-red-50 text-red-700 rounded-full text-sm font-medium">Sehat</span>
                            <span class="px-3 py-1 bg-red-50 text-red-700 rounded-full text-sm font-medium">Mandiri</span>
                            <span class="px-3 py-1 bg-red-50 text-red-700 rounded-full text-sm font-medium">Aktif</span>
                            <span class="px-3 py-1 bg-red-50 text-red-700 rounded-full text-sm font-medium">Produktif</span>
                            <span class="px-3 py-1 bg-red-50 text-red-700 rounded-full text-sm font-medium">Bermartabat</span>
                        </div>
                        <Link href="/tentang">
                            <Button variant="outline" class="border-red-600 text-red-600 hover:bg-red-50">
                                Pelajari Lebih Lanjut
                                <ArrowRight class="w-4 h-4 ml-2" />
                            </Button>
                        </Link>
                    </div>
                    <div class="order-1 lg:order-2">
                        <img src="/image/foto3.jpeg" alt="Kegiatan Lansia" class="rounded-2xl shadow-lg w-full object-cover aspect-4/3" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Program SMART -->
        <section id="program" class="py-16 md:py-20 bg-gray-50">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-red-600 font-semibold text-sm uppercase tracking-wide">Program Utama</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">Konsep SMART</h2>
                    <p class="text-gray-600 text-lg">Lima pilar pengembangan lansia yang tangguh dan berkualitas</p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-4 md:gap-6">
                    <Card v-for="item in smartProgram" :key="item.letter" class="border-0 shadow-md hover:shadow-lg transition-shadow">
                        <CardContent class="p-6 text-center">
                            <div class="w-16 h-16 rounded-full bg-red-600 flex items-center justify-center mx-auto mb-4">
                                <span class="text-2xl font-bold text-white">{{ item.letter }}</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">{{ item.title }}</h3>
                            <p class="text-gray-600 text-sm">{{ item.description }}</p>
                        </CardContent>
                    </Card>
                </div>
            </div>
        </section>

        <!-- 7 Dimensi -->
        <section class="py-16 md:py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-red-600 font-semibold text-sm uppercase tracking-wide">Pendekatan Holistik</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">7 Dimensi Lansia Tangguh</h2>
                    <p class="text-gray-600 text-lg">Program lengkap untuk menciptakan lansia yang berdaya</p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                    <Card v-for="(dim, index) in dimensions" :key="dim.title" class="border border-gray-100 hover:shadow-md transition-shadow">
                        <CardContent class="p-5">
                            <div class="flex items-start gap-4">
                                <div :class="['w-12 h-12 rounded-xl flex items-center justify-center shrink-0', dim.color]">
                                    <component :is="dim.icon" class="w-6 h-6" />
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-1">{{ dim.title }}</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">{{ dim.description }}</p>
                                </div>
                            </div>
                        </CardContent>
                    </Card>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-16 md:py-20 bg-red-600">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Bergabung dengan Kami</h2>
                <p class="text-white/90 text-lg mb-8 max-w-2xl mx-auto">
                    Jadilah bagian dari komunitas lansia tangguh di Desa Pulai Payung. 
                    Daftar sekarang dan nikmati berbagai program pengembangan diri.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <Link v-if="canRegister" :href="register()">
                        <Button class="bg-white text-red-600 hover:bg-gray-100 font-semibold px-8 py-3 h-auto">
                            Daftar Sekarang
                        </Button>
                    </Link>
                    <Link href="/program">
                        <Button variant="outline" class="border-white text-white hover:bg-white/20 px-8 py-3 h-auto">
                            Lihat Program
                        </Button>
                    </Link>
                </div>
            </div>
        </section>

        <Footer :can-register="canRegister" />
    </div>
</template>
