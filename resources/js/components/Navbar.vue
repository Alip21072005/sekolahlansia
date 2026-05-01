<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Button } from '@/components/ui/button';
import { Menu, X, Phone } from 'lucide-vue-next';
import { ref } from 'vue';
import { dashboard } from '@/routes';

// Navbar component - no auth buttons for visitors

const mobileMenuOpen = ref(false);
</script>

<template>
    <header class="sticky top-0 z-50 w-full border-b border-slate-200 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <!-- Logo -->
                <Link href="/" class="flex items-center gap-3">
                    <img src="/image/logo.png" alt="Sekolah Lansia Merah Putih" class="h-10 w-10 object-contain" />
                    <div class="hidden sm:block">
                        <h1 class="text-base font-semibold text-slate-900">Sekolah Lansia Merah Putih</h1>
                        <p class="text-xs text-slate-500">Desa Pulai Payung</p>
                    </div>
                </Link>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center gap-8">
                    <Link href="/" :class="[$page.url === '/' ? 'text-blue-600' : 'text-slate-600', 'text-sm font-medium hover:text-blue-600 transition-colors']">Beranda</Link>
                    <Link href="/program" :class="[$page.url.startsWith('/program') ? 'text-blue-600' : 'text-slate-600', 'text-sm font-medium hover:text-blue-600 transition-colors']">Program</Link>
                    <Link href="/tentang" :class="[$page.url.startsWith('/tentang') ? 'text-blue-600' : 'text-slate-600', 'text-sm font-medium hover:text-blue-600 transition-colors']">Tentang Kami</Link>
                </nav>

                <!-- Auth Buttons - Hanya Dashboard jika sudah login -->
                <div v-if="$page.props.auth.user" class="hidden md:flex items-center gap-3">
                    <Link :href="dashboard()">
                        <Button class="bg-blue-600 hover:bg-blue-700 text-white text-sm px-5 h-10 rounded-lg">
                            Dashboard
                        </Button>
                    </Link>
                </div>
                <div v-else class="hidden md:flex items-center gap-3">
                    <!-- Tidak ada tombol untuk visitor -->
                </div>

                <!-- Mobile Actions -->
                <div class="flex items-center gap-2 md:hidden">
                    <a href="https://wa.me/6281234567890" target="_blank" class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg">
                        <Phone class="h-5 w-5" />
                    </a>
                    <button 
                        class="p-2 hover:bg-slate-100 rounded-lg"
                        @click="mobileMenuOpen = !mobileMenuOpen"
                    >
                        <Menu v-if="!mobileMenuOpen" class="h-6 w-6 text-slate-700" />
                        <X v-else class="h-6 w-6 text-slate-700" />
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div v-if="mobileMenuOpen" class="md:hidden border-t border-slate-100 bg-white">
            <div class="container mx-auto px-4 py-4 space-y-3">
                <Link href="/" :class="[$page.url === '/' ? 'text-blue-600 bg-blue-50' : 'text-slate-700', 'block text-base font-medium py-3 px-2 rounded-lg transition-colors']" @click="mobileMenuOpen = false">Beranda</Link>
                <Link href="/program" :class="[$page.url.startsWith('/program') ? 'text-blue-600 bg-blue-50' : 'text-slate-700', 'block text-base font-medium py-3 px-2 rounded-lg transition-colors']" @click="mobileMenuOpen = false">Program</Link>
                <Link href="/tentang" :class="[$page.url.startsWith('/tentang') ? 'text-blue-600 bg-blue-50' : 'text-slate-700', 'block text-base font-medium py-3 px-2 rounded-lg transition-colors']" @click="mobileMenuOpen = false">Tentang Kami</Link>
                <div v-if="$page.props.auth.user" class="flex flex-col gap-3 pt-4 border-t">
                    <Link :href="dashboard()">
                        <Button class="w-full bg-blue-600 hover:bg-blue-700 text-white text-base py-3 h-auto rounded-lg">
                            Dashboard
                        </Button>
                    </Link>
                </div>
            </div>
        </div>
    </header>
</template>
