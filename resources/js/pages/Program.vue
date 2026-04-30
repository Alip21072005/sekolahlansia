<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import Navbar from '@/components/Navbar.vue';
import Footer from '@/components/Footer.vue';
import { 
    Sparkles,
    Heart,
    Brain,
    HandHeart,
    Users,
    Palette,
    Leaf,
    Building2,
    Award,
    Shield,
    Heart as HeartIcon,
    Users as UsersIcon,
    Dumbbell,
    ChevronRight,
    Calendar,
    ArrowRight,
    PlayCircle,
    MapPin
} from 'lucide-vue-next';
import { Card, CardContent } from '@/components/ui/card';
import { Button } from '@/components/ui/button';

withDefaults(
    defineProps<{
        canRegister?: boolean;
    }>(),
    {
        canRegister: true,
    },
);

// Program SMART
const smartProgram = [
    { letter: 'S', title: 'Sehat', description: 'Kesehatan fisik dan mental yang optimal', icon: HeartIcon },
    { letter: 'M', title: 'Mandiri', description: 'Mampu melakukan aktivitas secara mandiri', icon: Award },
    { letter: 'A', title: 'Aktif', description: 'Tetap aktif secara sosial dan fisik', icon: UsersIcon },
    { letter: 'R', title: 'Produktif', description: 'Terus menghasilkan karya dan manfaat', icon: Dumbbell },
    { letter: 'T', title: 'Bermartabat', description: 'Hidup dengan penuh harga diri', icon: Shield },
];

// 7 Dimensi Lansia Tangguh dengan detail kegiatan
const dimensiDetail = [
    {
        icon: Sparkles,
        title: 'Dimensi Spiritual',
        description: 'Pembinaan keagamaan, meditasi, dan ketenangan batin.',
        kegiatan: ['Tahfidz Qur\'an', 'Doa bersama', 'Meditasi mindfulness', 'Kajian keagamaan'],
        color: 'bg-purple-50 text-purple-600',
        jadwal: 'Setiap Jumat, 08:00 - 10:00',
    },
    {
        icon: Heart,
        title: 'Dimensi Fisik',
        description: 'Senam, pemeriksaan kesehatan, dan edukasi nutrisi.',
        kegiatan: ['Senam lansia', 'Yoga ringan', 'Pemeriksaan kesehatan rutin', 'Kelas nutrisi sehat'],
        color: 'bg-red-50 text-red-600',
        jadwal: 'Senin & Rabu, 07:00 - 09:00',
    },
    {
        icon: Brain,
        title: 'Dimensi Intelektual',
        description: 'Melatih daya ingat dan kognitif untuk mencegah pikun.',
        kegiatan: ['Brain games', 'Teka-teki silang', 'Diskusi umum', 'Literasi digital'],
        color: 'bg-blue-50 text-blue-600',
        jadwal: 'Selasa & Kamis, 09:00 - 11:00',
    },
    {
        icon: HandHeart,
        title: 'Dimensi Emosional',
        description: 'Sosialisasi untuk mencegah kesepian dan meningkatkan kesejahteraan.',
        kegiatan: ['Konseling lansia', 'Sharing session', 'Support group', 'Kegiatan rekreasi'],
        color: 'bg-rose-50 text-rose-600',
        jadwal: 'Setiap hari kerja, 13:00 - 15:00',
    },
    {
        icon: Users,
        title: 'Dimensi Sosial Kemasyarakatan',
        description: 'Bakti sosial dan keterlibatan dalam acara masyarakat.',
        kegiatan: ['Bakti sosial', 'Gotong royong', 'Acara kemasyarakatan', 'Kunjungan ke panti'],
        color: 'bg-orange-50 text-orange-600',
        jadwal: 'Satu kali per bulan',
    },
    {
        icon: Palette,
        title: 'Dimensi Profesional Vokasional',
        description: 'Keterampilan tangan dan hobi yang menghasilkan ekonomis.',
        kegiatan: ['Kerajinan tangan', 'Menjahit', 'Memasak', 'Berkebun', 'Budidaya tanaman'],
        color: 'bg-green-50 text-green-600',
        jadwal: 'Selasa & Jumat, 13:00 - 16:00',
    },
    {
        icon: Leaf,
        title: 'Dimensi Lingkungan',
        description: 'Menjaga kebersihan dan kelestarian lingkungan.',
        kegiatan: ['Pemilahan sampah', 'Daur ulang', 'Tanaman hias', 'Kebersihan lingkungan'],
        color: 'bg-emerald-50 text-emerald-600',
        jadwal: 'Kamis, 08:00 - 10:00',
    },
];

// Gallery Images from local folder
const galleryImages = [
    {
        url: '/image/foto1.jpeg',
        title: 'Kegiatan Lansia Bersama',
        category: 'Program SMART'
    },
    {
        url: '/image/foto2.jpeg',
        title: 'Senam Lansia',
        category: 'Dimensi Fisik'
    },
    {
        url: '/image/foto3.jpeg',
        title: 'Kerajinan Tangan',
        category: 'Dimensi Vokasional'
    },
    {
        url: '/image/foto4.jpeg',
        title: 'Kegiatan Sosial',
        category: 'Dimensi Sosial'
    },
];

// Timeline Documentation with local images
const timelineDokumentasi = [
    {
        judul: 'Pelatihan Literasi Digital',
        tanggal: '15 Jan 2025',
        kategori: 'Intelektual',
        deskripsi: 'Peserta mempelajari penggunaan smartphone dan aplikasi modern untuk komunikasi dengan keluarga.',
        image: '/image/foto5.jpeg'
    },
    {
        judul: 'Senam Pagi Bersama',
        tanggal: '10 Jan 2025',
        kategori: 'Fisik',
        deskripsi: 'Kegiatan senam rutin yang diikuti 50+ peserta untuk menjaga kebugaran dan silaturahmi.',
        image: '/image/foto6.jpeg'
    },
    {
        judul: 'Bakti Sosial ke Panti',
        tanggal: '5 Jan 2025',
        kategori: 'Sosial',
        deskripsi: 'Kunjungan ke panti jompo untuk berbagi sembako dan hiburan bersama para lansia.',
        image: '/image/foto7.jpeg'
    },
    {
        judul: 'Workshop Kerajinan',
        tanggal: '20 Des 2024',
        kategori: 'Vokasional',
        deskripsi: 'Pelatihan membuat kerajinan dari barang bekas yang bisa dijual untuk pendapatan tambahan.',
        image: '/image/foto9.jpeg'
    },
];
</script>

<template>
    <Head title="Program - Sekolah Lansia Merah Putih">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    </Head>

    <div class="min-h-screen bg-white">
        <Navbar :can-register="canRegister" />

        <!-- Hero Section -->
        <section class="relative min-h-[50vh] md:min-h-[60vh] flex items-center bg-red-700">
            <div class="absolute inset-0">
                <img src="/image/foto1.jpeg" alt="Program SMART" class="w-full h-full object-cover opacity-20" />
            </div>
            <div class="relative container mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20">
                <div class="max-w-2xl">
                    <span class="inline-flex items-center gap-2 bg-white/20 backdrop-blur text-white px-4 py-2 rounded-full text-sm font-medium mb-6">
                        <MapPin class="w-4 h-4" />
                        Desa Pulai Payung, Kabupaten Mukomuko
                    </span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                        Program <span class="text-yellow-300">SMART</span>
                    </h1>
                    <p class="text-lg md:text-xl text-white/90 mb-8 leading-relaxed">
                        Program pendidikan non-formal sepanjang hayat di bawah naungan BKKBN 
                        melalui Bina Keluarga Lansia (BKL).
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-white/20 text-white rounded-full text-sm font-medium">Sehat</span>
                        <span class="px-3 py-1 bg-white/20 text-white rounded-full text-sm font-medium">Mandiri</span>
                        <span class="px-3 py-1 bg-white/20 text-white rounded-full text-sm font-medium">Aktif</span>
                        <span class="px-3 py-1 bg-white/20 text-white rounded-full text-sm font-medium">Produktif</span>
                        <span class="px-3 py-1 bg-white/20 text-white rounded-full text-sm font-medium">Bermartabat</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- SMART Program -->
        <section class="py-16 md:py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-red-600 font-semibold text-sm uppercase tracking-wide">Konsep Utama</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">Lima Pilar SMART</h2>
                    <p class="text-gray-600 text-lg">Pengembangan lansia Indonesia yang tangguh dan berkualitas</p>
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
        <section class="py-16 md:py-20 bg-gray-50">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-red-600 font-semibold text-sm uppercase tracking-wide">Program Lengkap</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">7 Dimensi Lansia Tangguh</h2>
                    <p class="text-gray-600 text-lg">Pendekatan holistik untuk menciptakan lansia yang berkualitas</p>
                </div>

                <div class="grid md:grid-cols-2 gap-4 md:gap-6">
                    <Card v-for="(dim, index) in dimensiDetail" :key="dim.title" class="border border-gray-100 hover:shadow-md transition-shadow">
                        <CardContent class="p-5">
                            <div class="flex items-start gap-4">
                                <div :class="['w-12 h-12 rounded-xl flex items-center justify-center shrink-0', dim.color]">
                                    <component :is="dim.icon" class="w-6 h-6" />
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-lg font-bold text-gray-900 mb-1">{{ dim.title }}</h3>
                                    <p class="text-gray-600 text-sm mb-3">{{ dim.description }}</p>
                                    <div class="flex flex-wrap gap-1 mb-3">
                                        <span v-for="keg in dim.kegiatan.slice(0, 3)" :key="keg" 
                                              class="px-2 py-0.5 bg-gray-100 rounded text-xs text-gray-600">
                                            {{ keg }}
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-2 text-red-600 text-sm">
                                        <Calendar class="w-4 h-4" />
                                        <span class="font-medium">{{ dim.jadwal }}</span>
                                    </div>
                                </div>
                            </div>
                        </CardContent>
                    </Card>
                </div>
            </div>
        </section>

        <!-- Kegiatan -->
        <section class="py-16 md:py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-red-600 font-semibold text-sm uppercase tracking-wide">Dokumentasi</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">Kegiatan & Aktivitas</h2>
                    <p class="text-gray-600 text-lg">Momen berharga dalam perjalanan Sekolah Lansia Merah Putih</p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
                    <div v-for="item in timelineDokumentasi" :key="item.judul" class="group">
                        <div class="rounded-xl overflow-hidden shadow-md mb-3">
                            <img :src="item.image" :alt="item.judul" class="w-full aspect-video object-cover group-hover:scale-105 transition-transform" />
                        </div>
                        <span class="text-xs font-medium text-red-600 bg-red-50 px-2 py-1 rounded">{{ item.kategori }}</span>
                        <h3 class="font-bold text-gray-900 mt-2 mb-1">{{ item.judul }}</h3>
                        <p class="text-sm text-gray-600 mb-2">{{ item.deskripsi }}</p>
                        <div class="flex items-center gap-1 text-xs text-gray-500">
                            <Calendar class="w-3 h-3" />
                            {{ item.tanggal }}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-16 md:py-20 bg-red-600">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Bergabung dengan Program Kami</h2>
                <p class="text-white/90 text-lg mb-8 max-w-2xl mx-auto">
                    Jadilah bagian dari komunitas lansia tangguh di Desa Pulai Payung. 
                    Daftar sekarang dan nikmati berbagai program pengembangan diri.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <Button class="bg-white text-red-600 hover:bg-gray-100 font-semibold px-8 py-3 h-auto">
                        Daftar Sekarang
                    </Button>
                    <Button variant="outline" class="border-white text-white hover:bg-white/20 px-8 py-3 h-auto">
                        Lihat Jadwal
                    </Button>
                </div>
            </div>
        </section>

        <Footer :can-register="canRegister" />
    </div>
</template>