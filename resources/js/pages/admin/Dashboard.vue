<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { Card, CardContent, CardHeader, CardTitle, CardDescription } from '@/components/ui/card';
import { Button } from '@/components/ui/button';
import { Badge } from '@/components/ui/badge';
import { Avatar, AvatarFallback } from '@/components/ui/avatar';
import { Progress } from '@/components/ui/progress';
import { SidebarTrigger } from '@/components/ui/sidebar';
import {
    Users,
    UserCheck,
    Eye,
    Newspaper,
    FileImage,
    Settings,
    ChevronRight,
    TrendingUp,
    TrendingDown,
    Calendar,
    Clock,
    Activity,
    FileText,
    ImagePlus,
    UserPlus,
    BarChart3,
    MapPin,
    Heart,
    PanelLeftClose,
    PanelLeftOpen,
    Menu
} from 'lucide-vue-next';

// Statistik Utama
const dashboardStats = [
    {
        title: 'Total Anggota',
        value: '86',
        trend: '+12%',
        trendLabel: 'vs bulan lalu',
        icon: Users,
        color: 'blue',
        progress: 85,
        description: '86 dari 100 target'
    },
    {
        title: 'Total Pengurus',
        value: '12',
        trend: '+2',
        trendLabel: 'bulan ini',
        icon: UserCheck,
        color: 'emerald',
        progress: 100,
        description: 'Seluruh pengurus aktif'
    },
    {
        title: 'Pengunjung',
        value: '1,245',
        trend: '+8.5%',
        trendLabel: 'vs minggu lalu',
        icon: Eye,
        color: 'violet',
        progress: 62,
        description: 'Total bulan ini'
    },
    {
        title: 'Konten Berita',
        value: '34',
        trend: '+5',
        trendLabel: 'berita baru',
        icon: Newspaper,
        color: 'amber',
        progress: 45,
        description: '2 draft perlu tinjauan'
    },
];

// Aktivitas terbaru 
const recentActivities = [
    {
        id: 1,
        type: 'news',
        action: 'Mempublikasikan berita',
        target: '"Keseruan Senam Pagi di Balai Desa"',
        time: '2 jam yang lalu',
        user: 'Ahmad Sulaiman',
        initials: 'AS',
        color: 'bg-blue-600',
    },
    {
        id: 2,
        type: 'gallery',
        action: 'Memperbarui galeri',
        target: 'Kegiatan Literasi Digital (12 foto)',
        time: '4 jam yang lalu',
        user: 'Dewi Kusuma',
        initials: 'DK',
        color: 'bg-emerald-600',
    },
    {
        id: 3,
        type: 'member',
        action: 'Mendaftarkan anggota baru',
        target: 'Pak Sutrisno (RT 03)',
        time: '6 jam yang lalu',
        user: 'Budi Santoso',
        initials: 'BS',
        color: 'bg-amber-500',
    },
];

// Akses cepat fungsional
const quickActions = [
    {
        title: 'Tulis Berita Baru',
        description: 'Buat artikel kegiatan sekolah',
        href: '/admin/berita/create',
        icon: FileText,
        bgColor: 'bg-blue-50',
        iconColor: 'text-blue-600',
        hoverColor: 'hover:border-blue-300 hover:shadow-blue-100'
    },
    {
        title: 'Upload Galeri',
        description: 'Tambahkan dokumentasi foto',
        href: '/admin/galeri/create',
        icon: ImagePlus,
        bgColor: 'bg-emerald-50',
        iconColor: 'text-emerald-600',
        hoverColor: 'hover:border-emerald-300 hover:shadow-emerald-100'
    },
    {
        title: 'Tambah Anggota',
        description: 'Registrasi lansia baru',
        href: '/admin/siswa/create',
        icon: UserPlus,
        bgColor: 'bg-amber-50',
        iconColor: 'text-amber-600',
        hoverColor: 'hover:border-amber-300 hover:shadow-amber-100'
    },
];

// Jadwal Terdekat (Pengganti Status Sistem)
const upcomingSchedules = [
    {
        title: 'Senam Sehat Lansia',
        day: 'Besok',
        time: '07:00 WIB',
        location: 'Balai Desa Pulai Payung',
        icon: Activity,
        color: 'text-blue-600',
        bg: 'bg-blue-50'
    },
    {
        title: 'Pemeriksaan Kesehatan',
        day: 'Lusa',
        time: '09:00 WIB',
        location: 'Puskesmas Pembantu',
        icon: Heart,
        color: 'text-red-600',
        bg: 'bg-red-50'
    }
];

const getActivityIcon = (type: string) => {
    switch (type) {
        case 'news': return Newspaper;
        case 'gallery': return FileImage;
        case 'member': return Users;
        default: return Settings;
    }
};

const formatDate = () => {
    const options: Intl.DateTimeFormatOptions = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    return new Date().toLocaleDateString('id-ID', options);
};
</script>

<template>
    <Head title="Dashboard Admin - Sekolah Lansia" />

    <div class="max-w-400 mt-10 mx-auto pb-10 font-sans">
        <!-- Header Section -->
        <div class="mb-8">
            <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white border border-slate-200 text-sm text-slate-600 font-medium mb-4 shadow-sm">
                        <Calendar class="w-4 h-4 text-blue-600" />
                        {{ formatDate() }}
                    </div>
                    <h1 class="text-2xl sm:text-3xl font-bold text-slate-900 tracking-tight">Ringkasan Sistem</h1>
                    <p class="text-slate-600 mt-1">Pantau aktivitas dan statistik Sekolah Lansia Merah Putih.</p>
                </div>
                <div class="flex items-center gap-3">
                    <!-- Toggle Sidebar Button (hanya muncul di desktop) -->
                    <SidebarTrigger class="hidden md:flex h-11 w-11 rounded-xl border border-slate-200 bg-white hover:bg-slate-50 hover:border-slate-300 transition-all items-center justify-center [&>button]:h-full [&>button]:w-full [&>button]:rounded-xl [&>button]:border-0 [&>button]:bg-transparent" />
                    
                    <Link href="/admin/berita/create">
                        <Button class="bg-blue-600 hover:bg-blue-700 text-white shadow-md shadow-blue-200 h-11 px-6 rounded-xl transition-all">
                            <Newspaper class="w-4 h-4 mr-2" />
                            Tulis Berita
                        </Button>
                    </Link>
                </div>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-8">
            <Card v-for="(stat, index) in dashboardStats" :key="index"
                  class="border-0 shadow-sm hover:shadow-md transition-shadow duration-300 rounded-2xl overflow-hidden relative group">
                <!-- Aksen Garis Atas -->
                <div :class="`absolute top-0 left-0 right-0 h-1 ${stat.color === 'blue' ? 'bg-blue-500' : stat.color === 'emerald' ? 'bg-emerald-500' : stat.color === 'violet' ? 'bg-violet-500' : 'bg-amber-500'}`"></div>
                
                <CardContent class="p-6">
                    <div class="flex items-start justify-between">
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-slate-500 mb-1 uppercase tracking-wider">{{ stat.title }}</p>
                            <div class="flex items-baseline gap-2 mt-2">
                                <h3 class="text-3xl font-bold text-slate-900">{{ stat.value }}</h3>
                                <Badge variant="outline" :class="[
                                    stat.trend.startsWith('+') ? 'text-emerald-600 border-emerald-200 bg-emerald-50' : 'text-slate-600',
                                    'text-xs font-semibold px-2 py-0.5 rounded-full'
                                ]">
                                    <TrendingUp v-if="stat.trend.startsWith('+')" class="w-3 h-3 mr-1" />
                                    <TrendingDown v-else class="w-3 h-3 mr-1" />
                                    {{ stat.trend }}
                                </Badge>
                            </div>
                            <p class="text-xs text-slate-400 mt-1">{{ stat.trendLabel }}</p>
                        </div>
                        <div :class="`w-12 h-12 rounded-xl flex items-center justify-center shrink-0 ${stat.color === 'blue' ? 'bg-blue-50 text-blue-600' : stat.color === 'emerald' ? 'bg-emerald-50 text-emerald-600' : stat.color === 'violet' ? 'bg-violet-50 text-violet-600' : 'bg-amber-50 text-amber-600'} group-hover:scale-110 transition-transform duration-300`">
                            <component :is="stat.icon" class="w-6 h-6" />
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="flex items-center justify-between text-xs font-medium text-slate-500 mb-2">
                            <span>{{ stat.description }}</span>
                            <span>{{ stat.progress }}%</span>
                        </div>
                        <Progress :model-value="stat.progress" :class="`h-1.5 bg-slate-100 ${stat.color === 'blue' ? '[&>div]:bg-blue-500' : stat.color === 'emerald' ? '[&>div]:bg-emerald-500' : stat.color === 'violet' ? '[&>div]:bg-violet-500' : '[&>div]:bg-amber-500'}`" />
                    </div>
                </CardContent>
            </Card>
        </div>

        <!-- Main Content Grid -->
        <div class="grid lg:grid-cols-3 gap-6 lg:gap-8">
            
            <!-- Left Column (2/3) -->
            <div class="lg:col-span-2 space-y-6 lg:space-y-8">
                
                <!-- Mockup Analitik Pengunjung (Visual Lebih Profesional) -->
                <Card class="border-0 shadow-sm rounded-2xl">
                    <CardHeader class="pb-6 border-b border-slate-100 px-6 sm:px-8 pt-6 sm:pt-8">
                        <div class="flex items-center justify-between">
                            <div>
                                <CardTitle class="text-xl font-bold text-slate-900">Kunjungan Website</CardTitle>
                                <CardDescription class="text-slate-500 mt-1">Tinjauan statistik 7 hari terakhir</CardDescription>
                            </div>
                            <Badge variant="outline" class="text-emerald-600 border-emerald-200 bg-emerald-50 px-3 py-1">
                                <TrendingUp class="w-4 h-4 mr-1.5" />
                                Naik 12.5%
                            </Badge>
                        </div>
                    </CardHeader>
                    <CardContent class="p-6 sm:p-8">
                        <!-- Pseudo Bar Chart -->
                        <div class="h-56 w-full flex items-end justify-between gap-2 sm:gap-4">
                            <div v-for="(height, i) in [40, 65, 30, 85, 50, 95, 70]" :key="i" class="w-full relative group">
                                <div class="absolute -top-10 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                                    {{ height * 12 }} Visit
                                </div>
                                <div :class="`w-full rounded-t-sm transition-all duration-300 ${i === 5 ? 'bg-blue-600' : 'bg-blue-100 hover:bg-blue-200'}`" 
                                     :style="`height: ${height}%`"></div>
                                <div class="text-center mt-3 text-xs font-medium text-slate-400">
                                    {{ ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'][i] }}
                                </div>
                            </div>
                        </div>
                    </CardContent>
                </Card>

                <!-- Activity Feed -->
                <Card class="border-0 shadow-sm rounded-2xl">
                    <CardHeader class="pb-4 border-b border-slate-100 px-6 sm:px-8 pt-6 sm:pt-8">
                        <div class="flex items-center justify-between">
                            <div>
                                <CardTitle class="text-xl font-bold text-slate-900">Aktivitas Pengurus</CardTitle>
                                <CardDescription class="text-slate-500 mt-1">Riwayat tindakan sistem terbaru</CardDescription>
                            </div>
                            <Button variant="ghost" class="text-blue-600 hover:text-blue-700 hover:bg-blue-50 font-medium">
                                Lihat Semua
                            </Button>
                        </div>
                    </CardHeader>
                    <CardContent class="p-0">
                        <div class="divide-y divide-slate-100">
                            <div v-for="activity in recentActivities" :key="activity.id"
                                 class="flex items-start gap-4 p-6 hover:bg-slate-50/80 transition-colors">
                                <Avatar :class="`${activity.color} text-white shrink-0 shadow-sm`">
                                    <AvatarFallback class="text-sm font-semibold">{{ activity.initials }}</AvatarFallback>
                                </Avatar>
                                <div class="flex-1 min-w-0 pt-1">
                                    <p class="text-sm text-slate-800">
                                        <span class="font-bold text-slate-900">{{ activity.user }}</span>
                                        {{ activity.action }}
                                        <span class="font-semibold text-blue-600 cursor-pointer hover:underline">{{ activity.target }}</span>
                                    </p>
                                    <div class="flex items-center gap-2 mt-2 text-xs font-medium text-slate-500">
                                        <Clock class="w-3.5 h-3.5" />
                                        <span>{{ activity.time }}</span>
                                        <span class="w-1 h-1 rounded-full bg-slate-300"></span>
                                        <div class="flex items-center gap-1">
                                            <component :is="getActivityIcon(activity.type)" class="w-3.5 h-3.5" />
                                            <span class="capitalize">{{ activity.type }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </CardContent>
                </Card>
            </div>

            <!-- Right Column (1/3) -->
            <div class="space-y-6 lg:space-y-8">
                
                <!-- Quick Actions -->
                <Card class="border-0 shadow-sm rounded-2xl bg-white">
                    <CardHeader class="pb-4 px-6 pt-6">
                        <CardTitle class="text-lg font-bold text-slate-900">Aksi Cepat</CardTitle>
                    </CardHeader>
                    <CardContent class="px-6 pb-6 pt-0 space-y-3">
                        <Link v-for="action in quickActions" :key="action.title" :href="action.href" class="block group">
                            <div :class="`w-full flex items-center gap-4 p-4 rounded-xl border border-slate-100 bg-white ${action.hoverColor} hover:shadow-md transition-all duration-300`">
                                <div :class="`w-12 h-12 rounded-xl flex items-center justify-center shrink-0 ${action.bgColor} ${action.iconColor}`">
                                    <component :is="action.icon" class="w-6 h-6" />
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="font-bold text-slate-900 group-hover:text-blue-700 transition-colors">{{ action.title }}</p>
                                    <p class="text-sm text-slate-500 mt-0.5">{{ action.description }}</p>
                                </div>
                                <ChevronRight class="w-5 h-5 text-slate-300 group-hover:text-blue-600 shrink-0 transition-colors" />
                            </div>
                        </Link>
                    </CardContent>
                </Card>

                <!-- Jadwal Terdekat -->
                <Card class="border-0 shadow-sm rounded-2xl bg-slate-900 text-white overflow-hidden relative">
                    <!-- Ornamen Background -->
                    <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-white/5 blur-2xl pointer-events-none"></div>
                    <div class="absolute bottom-0 left-0 -ml-8 -mb-8 w-24 h-24 rounded-full bg-blue-500/20 blur-xl pointer-events-none"></div>

                    <CardHeader class="pb-4 px-6 pt-6 relative z-10">
                        <CardTitle class="text-lg font-bold flex items-center gap-2">
                            <Calendar class="w-5 h-5 text-blue-400" />
                            Jadwal Terdekat
                        </CardTitle>
                    </CardHeader>
                    <CardContent class="px-6 pb-6 pt-0 space-y-4 relative z-10">
                        <div v-for="(schedule, idx) in upcomingSchedules" :key="idx" 
                             class="bg-white/10 border border-white/10 rounded-xl p-4 backdrop-blur-sm">
                            <div class="flex items-start gap-3">
                                <div :class="`w-10 h-10 rounded-lg flex items-center justify-center shrink-0 ${schedule.bg}`">
                                    <component :is="schedule.icon" :class="`w-5 h-5 ${schedule.color}`" />
                                </div>
                                <div>
                                    <h4 class="font-semibold text-white">{{ schedule.title }}</h4>
                                    <div class="flex flex-col gap-1 mt-2 text-sm text-slate-300">
                                        <span class="flex items-center gap-1.5">
                                            <Clock class="w-3.5 h-3.5 opacity-70" />
                                            <span class="font-medium text-blue-300">{{ schedule.day }}</span> • {{ schedule.time }}
                                        </span>
                                        <span class="flex items-center gap-1.5">
                                            <MapPin class="w-3.5 h-3.5 opacity-70" />
                                            {{ schedule.location }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </CardContent>
                </Card>

            </div>
        </div>
    </div>
</template>