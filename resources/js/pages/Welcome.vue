<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { ref, onMounted, onUnmounted } from 'vue';
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
    ChevronLeft,
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
    { url: '/image/foto5.jpeg', caption: 'Bersama Kader' },
    { url: '/image/foto6.jpeg', caption: 'Aktivitas Bersama' },
    { url: '/image/foto7.jpeg', caption: 'Belajar Bersama' },
    { url: '/image/foto9.jpeg', caption: 'Kegiatan Seru' },
    { url: '/image/WhatsApp Image 2026-05-01 at 18.49.53.jpeg', caption: 'Momen Bahagia' },
    { url: '/image/WhatsApp Image 2026-05-01 at 18.49.54.jpeg', caption: 'Senyum Lansia' },
    { url: '/image/WhatsApp Image 2026-05-01 at 18.50.00.jpeg', caption: 'Kegiatan Rutin' },
    { url: '/image/WhatsApp Image 2026-05-01 at 18.50.01.jpeg', caption: 'Bersama Teman' },
];

// Hero Slider Logic
const currentSlide = ref(0);
const autoPlayInterval = ref<number | null>(null);
const isPaused = ref(false);

const nextSlide = () => {
    currentSlide.value = (currentSlide.value + 1) % featuredImages.length;
};

const prevSlide = () => {
    currentSlide.value = (currentSlide.value - 1 + featuredImages.length) % featuredImages.length;
};

const goToSlide = (index: number) => {
    currentSlide.value = index;
};

const startAutoPlay = () => {
    if (autoPlayInterval.value) return;
    autoPlayInterval.value = window.setInterval(() => {
        if (!isPaused.value) {
            nextSlide();
        }
    }, 4000);
};

const stopAutoPlay = () => {
    if (autoPlayInterval.value) {
        clearInterval(autoPlayInterval.value);
        autoPlayInterval.value = null;
    }
};

onMounted(() => {
    startAutoPlay();
});

onUnmounted(() => {
    stopAutoPlay();
});

// Quick stats
const quickStats = [
    { number: '50+', label: 'Anggota Aktif', icon: Users },
    { number: '7', label: 'Dimensi Program', icon: Star },
    { number: '5', label: 'Pilar SMART', icon: Award },
];

// Welcome page props - no registration needed

// Program SMART (Sehat, Mandiri, Aktif, Produktif, Bermartabat)
const smartProgram = [
    { letter: 'S', title: 'Sehat', description: 'Kesehatan fisik dan mental yang optimal', icon: Heart },
    { letter: 'M', title: 'Mandiri', description: 'Mampu melakukan aktivitas secara mandiri', icon: Award },
    { letter: 'A', title: 'Aktif', description: 'Tetap aktif secara sosial dan fisik', icon: Users },
    { letter: 'R', title: 'Produktif', description: 'Terus menghasilkan karya dan manfaat', icon: Dumbbell },
    { letter: 'T', title: 'Bermartabat', description: 'Hidup dengan penuh harga diri', icon: Shield },
];

// Weekly Schedule Data
const jadwalMingguan = [
    { hari: 'Senin', kegiatan: 'Senam Lansia', waktu: '07:00 - 08:30', lokasi: 'Balai Desa', foto: '/image/foto1.jpeg' },
    { hari: 'Selasa', kegiatan: 'Literasi Digital', waktu: '09:00 - 11:00', lokasi: 'Ruang Kelas', foto: '/image/foto2.jpeg' },
    { hari: 'Rabu', kegiatan: 'Kerajinan Tangan', waktu: '13:00 - 15:00', lokasi: 'Studio Kreatif', foto: '/image/foto3.jpeg' },
    { hari: 'Kamis', kegiatan: 'Senam Lansia', waktu: '07:00 - 08:30', lokasi: 'Balai Desa', foto: '/image/foto4.jpeg' },
    { hari: 'Jumat', kegiatan: 'Kajian Spiritual', waktu: '09:00 - 10:30', lokasi: 'Aula Utama', foto: '/image/foto6.jpeg' },
];

// Contact info
const kontakInfo = {
    telepon: '0812-3456-7890',
    whatsapp: 'https://wa.me/6281234567890',
    alamat: 'Desa Pulai Payung, Kec. Ipuh, Kab. Mukomuko, Bengkulu',
};
</script>

<template>
    <Head title="Selamat Datang di Sekolah Lansia Merah Putih">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    </Head>

    <div class="min-h-screen bg-slate-50">
        <Navbar />

        <!-- Hero Section -->
        <section class="bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20 pb-16 md:pb-24">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                    <!-- Left Content -->
                    <div class="order-2 lg:order-1">
                        <div class="inline-flex items-center gap-2 bg-blue-50 text-blue-600 px-4 py-2 rounded-full text-sm font-medium mb-6">
                            <Building2 class="w-4 h-4" />
                            BKKBN & Bina Keluarga Lansia
                        </div>
                        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 mb-6 leading-tight">
                            Sekolah Lansia <span class="text-blue-600">Merah Putih</span>
                        </h1>
                        <p class="text-base sm:text-lg text-slate-600 mb-8 leading-relaxed max-w-xl">
                            Model pendidikan non-formal sepanjang hayat di Desa Pulai Payung, 
                            Kabupaten Mukomuko. Belajar, berkarya, dan berkumpul bersama.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer">
                                <Button class="bg-blue-600 hover:bg-blue-700 text-white text-base px-8 py-4 h-auto rounded-xl shadow-lg shadow-blue-200">
                                    Hubungi Kami
                                    <ArrowRight class="w-5 h-5 ml-2" />
                                </Button>
                            </a>
                            <Link href="/program">
                                <Button variant="outline" class="border-slate-300 text-slate-700 hover:bg-slate-50 text-base px-8 py-4 h-auto rounded-xl">
                                    Lihat Program
                                </Button>
                            </Link>
                        </div>
                        
                        <!-- Quick Stats -->
                        <div class="grid grid-cols-3 gap-4 mt-10 pt-8 border-t border-slate-100">
                            <div v-for="stat in quickStats" :key="stat.label">
                                <p class="text-2xl md:text-3xl font-bold text-blue-600">{{ stat.number }}</p>
                                <p class="text-slate-500 text-sm">{{ stat.label }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Image Slider -->
                    <div class="order-1 lg:order-2">
                        <div class="relative group" @mouseenter="isPaused = true" @mouseleave="isPaused = false">
                            <!-- Slider Container -->
                            <div class="relative w-full rounded-2xl shadow-2xl overflow-hidden aspect-4/3 bg-slate-100">
                                <!-- Slides -->
                                <div class="relative w-full h-full">
                                    <div v-for="(image, index) in featuredImages" :key="index"
                                         class="absolute inset-0 transition-all duration-700 ease-in-out"
                                         :class="index === currentSlide ? 'opacity-100 scale-100 z-10' : 'opacity-0 scale-105 z-0'">
                                        <img :src="image.url" :alt="image.caption" 
                                             class="w-full h-full object-cover" />
                                        <!-- Caption -->
                                        <div class="absolute bottom-0 left-0 right-0 bg-linear-to-t from-black/70 via-black/30 to-transparent p-6">
                                            <p class="text-white font-semibold text-lg">{{ image.caption }}</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Navigation Arrows -->
                                <button @click="prevSlide"
                                        class="absolute left-3 top-1/2 -translate-y-1/2 w-10 h-10 bg-white/90 hover:bg-white rounded-full shadow-lg flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                                    <ChevronLeft class="w-5 h-5 text-slate-700" />
                                </button>
                                <button @click="nextSlide"
                                        class="absolute right-3 top-1/2 -translate-y-1/2 w-10 h-10 bg-white/90 hover:bg-white rounded-full shadow-lg flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                                    <ChevronRight class="w-5 h-5 text-slate-700" />
                                </button>

                                <!-- Progress Bar -->
                                <div class="absolute top-4 left-4 right-4 h-1 bg-white/30 rounded-full overflow-hidden z-20">
                                    <div class="h-full bg-white rounded-full transition-all duration-300"
                                         :style="{ width: `${((currentSlide + 1) / featuredImages.length) * 100}%` }"></div>
                                </div>
                            </div>

                            <!-- Location Badge -->
                            <div class="absolute -bottom-4 -left-4 bg-blue-600 text-white rounded-xl px-4 py-3 shadow-lg z-20">
                                <p class="text-xs opacity-80">Lokasi</p>
                                <p class="font-semibold text-sm">Desa Pulai Payung</p>
                            </div>

                            <!-- Dot Indicators -->
                            <div class="absolute -bottom-8 left-1/2 -translate-x-1/2 flex gap-2">
                                <button v-for="(image, index) in featuredImages" :key="index"
                                        @click="goToSlide(index)"
                                        class="w-2.5 h-2.5 rounded-full transition-all duration-300"
                                        :class="index === currentSlide ? 'bg-blue-600 w-8' : 'bg-slate-300 hover:bg-slate-400'">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="py-12 md:py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto text-center mb-12">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                        Apa itu <span class="text-blue-600">Sekolah Lansia?</span>
                    </h2>
                    <p class="text-base sm:text-lg text-slate-600 leading-relaxed">
                        Sekolah Lansia adalah model pendidikan non-formal sepanjang hayat bagi warga lanjut usia 
                        di bawah naungan BKKBN melalui Bina Keluarga Lansia (BKL).
                    </p>
                </div>
                
                
                
                <div class="text-center">
                    <Link href="/tentang">
                        <Button variant="outline" class="border-blue-600 text-blue-600 hover:bg-blue-50 px-6 py-3 h-auto rounded-xl">
                            Pelajari Lebih Lanjut
                            <ArrowRight class="w-4 h-4 ml-2" />
                        </Button>
                    </Link>
                </div>
            </div>
        </section>

        <!-- Program Unggulan -->
        <section id="program" class="py-12 md:py-20 bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto mb-12">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-slate-900 mb-4">Program Unggulan</h2>
                    <p class="text-base sm:text-lg text-slate-600 leading-relaxed">
                        Lima pilar pengembangan lansia yang tangguh dan berkualitas
                    </p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-4 md:gap-6">
                    <Card v-for="item in smartProgram" :key="item.letter" class="border-0 shadow-md hover:shadow-lg transition-shadow rounded-xl">
                        <CardContent class="p-6 text-center">
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <component :is="item.icon" class="w-7 h-7 text-blue-600" />
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-1">{{ item.title }}</h3>
                            <p class="text-slate-500 text-sm">{{ item.description }}</p>
                        </CardContent>
                    </Card>
                </div>
            </div>
        </section>

        <!-- Jadwal Mingguan dengan Foto -->
        <section class="py-12 md:py-20 bg-slate-50">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto mb-12">
                    <div class="inline-flex items-center gap-2 text-blue-600 text-sm font-medium mb-3">
                        <Calendar class="w-4 h-4" />
                        Jadwal Rutin
                    </div>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-slate-900 mb-4">Jadwal Mingguan</h2>
                    <p class="text-base sm:text-lg text-slate-600 leading-relaxed">
                        Kegiatan rutin yang bisa Anda ikuti setiap minggu bersama komunitas lansia
                    </p>
                </div>

                <!-- Grid Card dengan Foto -->
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
                    <Card v-for="(item, index) in jadwalMingguan" :key="item.hari" class="border-0 shadow-md hover:shadow-lg transition-shadow rounded-xl overflow-hidden">
                        <!-- Foto -->
                        <div class="relative h-40 overflow-hidden">
                            <img :src="item.foto" :alt="item.kegiatan" class="w-full h-full object-cover" />
                            <div class="absolute top-3 left-3 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                {{ item.hari }}
                            </div>
                        </div>
                        <!-- Konten -->
                        <CardContent class="p-5">
                            <h3 class="font-bold text-lg text-slate-900 mb-2">{{ item.kegiatan }}</h3>
                            <div class="flex items-center gap-1 text-slate-500 text-sm mb-1">
                                <Clock class="w-4 h-4 text-blue-500" />
                                <span>{{ item.waktu }}</span>
                            </div>
                            <div class="flex items-center gap-1 text-slate-500 text-sm">
                                <MapPin class="w-4 h-4 text-blue-500" />
                                <span>{{ item.lokasi }}</span>
                            </div>
                        </CardContent>
                    </Card>
                </div>
            </div>
        </section>

      

        <Footer />
    </div>
</template>
