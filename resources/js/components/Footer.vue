<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { login, register } from '@/routes';

withDefaults(
    defineProps<{
        canRegister?: boolean;
    }>(),
    {
        canRegister: true,
    },
);
</script>

<template>
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div class="md:col-span-2">
                    <div class="flex items-center gap-3 mb-4">
                        <img src="/image/logo.png" alt="Sekolah Lansia Merah Putih" class="h-12 w-12 object-contain" />
                        <div>
                            <h3 class="text-xl font-bold">Sekolah Lansia Merah Putih</h3>
                            <p class="text-sm text-gray-400">Desa Pulai Payung, Kab.Mukomuko</p>
                        </div>
                    </div>
                    <p class="text-gray-400 max-w-md">
                        Model pendidikan non-formal sepanjang hayat di bawah naungan BKKBN melalui Bina Keluarga Lansia (BKL).
                    </p>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-4">Menu Cepat</h4>
                    <ul class="space-y-2">
                        <li><Link href="/" class="text-gray-400 hover:text-white transition-colors">Beranda</Link></li>
                        <li><Link href="/program" class="text-gray-400 hover:text-white transition-colors">Program</Link></li>
                        <li><Link href="/tentang" class="text-gray-400 hover:text-white transition-colors">Tentang Kami</Link></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-4">Tautan</h4>
                    <ul class="space-y-2">
                        <li><Link :href="login()" class="text-gray-400 hover:text-white transition-colors">Masuk</Link></li>
                        <li><Link v-if="canRegister" :href="register()" class="text-gray-400 hover:text-white transition-colors">Daftar</Link></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 text-center">
                <p class="text-gray-400">© 2025 Sekolah Lansia Merah Putih. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>
</template>
