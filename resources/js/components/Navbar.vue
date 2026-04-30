<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Button } from '@/components/ui/button';
import { Menu, X } from 'lucide-vue-next';
import { ref } from 'vue';
import { dashboard, login, register } from '@/routes';

withDefaults(
    defineProps<{
        canRegister?: boolean;
    }>(),
    {
        canRegister: true,
    },
);

const mobileMenuOpen = ref(false);
</script>

<template>
    <header class="sticky top-0 z-50 w-full border-b border-red-100 bg-white/95 backdrop-blur supports-backdrop-filter:bg-white/60">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex h-20 items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center gap-3">
                    <img src="/image/logo.png" alt="Sekolah Lansia Merah Putih" class="h-12 w-12 object-contain" />
                    <div>
                        <h1 class="text-xl font-bold text-gray-900">Sekolah Lansia Merah Putih</h1>
                        <p class="text-sm text-gray-500">Desa Pulai Payung, Kab.Mukomuko</p>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center gap-8">
                    <Link href="/" class="text-lg font-medium text-gray-700 hover:text-red-600 transition-colors">Beranda</Link>
                    <Link href="/program" class="text-lg font-medium text-gray-700 hover:text-red-600 transition-colors">Program</Link>
                    <Link href="/tentang" class="text-lg font-medium text-gray-700 hover:text-red-600 transition-colors">Tentang Kami</Link>
                </nav>

                <!-- Auth Buttons -->
                <div class="hidden md:flex items-center gap-4">
                    <template v-if="$page.props.auth.user">
                        <Link :href="dashboard()">
                            <Button size="lg" class="bg-red-600 hover:bg-red-700 text-white text-lg px-6">
                                Dashboard
                            </Button>
                        </Link>
                    </template>
                    <template v-else>
                        <Link :href="login()">
                            <Button variant="outline" size="lg" class="text-lg border-red-600 text-red-600 hover:bg-red-50 px-6">
                                Masuk
                            </Button>
                        </Link>
                        <Link v-if="canRegister" :href="register()">
                            <Button size="lg" class="bg-red-600 hover:bg-red-700 text-white text-lg px-6">
                                Daftar
                            </Button>
                        </Link>
                    </template>
                </div>

                <!-- Mobile Menu Button -->
                <button 
                    class="md:hidden p-2 rounded-lg hover:bg-gray-100"
                    @click="mobileMenuOpen = !mobileMenuOpen"
                >
                    <Menu v-if="!mobileMenuOpen" class="h-7 w-7 text-gray-700" />
                    <X v-else class="h-7 w-7 text-gray-700" />
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div v-if="mobileMenuOpen" class="md:hidden border-t border-gray-100 bg-white">
            <div class="container mx-auto px-4 py-4 space-y-4">
                <Link href="/" class="block text-lg font-medium text-gray-700 py-2" @click="mobileMenuOpen = false">Beranda</Link>
                <Link href="/program" class="block text-lg font-medium text-gray-700 py-2" @click="mobileMenuOpen = false">Program</Link>
                <Link href="/tentang" class="block text-lg font-medium text-gray-700 py-2" @click="mobileMenuOpen = false">Tentang Kami</Link>
                <a href="#kontak" class="block text-lg font-medium text-gray-700 py-2" @click="mobileMenuOpen = false">Kontak</a>
                <div class="flex flex-col gap-3 pt-4 border-t">
                    <template v-if="$page.props.auth.user">
                        <Link :href="dashboard()">
                            <Button class="w-full bg-red-600 hover:bg-red-700 text-white text-lg">
                                Dashboard
                            </Button>
                        </Link>
                    </template>
                    <template v-else>
                        <Link :href="login()">
                            <Button variant="outline" class="w-full text-lg border-red-600 text-red-600">
                                Masuk
                            </Button>
                        </Link>
                        <Link v-if="canRegister" :href="register()">
                            <Button class="w-full bg-red-600 hover:bg-red-700 text-white text-lg">
                                Daftar
                            </Button>
                        </Link>
                    </template>
                </div>
            </div>
        </div>
    </header>
</template>
