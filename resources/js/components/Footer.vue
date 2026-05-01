<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <footer class="bg-slate-900 text-white py-12 md:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8 md:gap-12 mb-8">
                <!-- Brand & Info -->
                <div class="md:col-span-1">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="relative group">
                            <div class="absolute -inset-1 bg-linear-to-r from-blue-500 to-white rounded-xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                            <img src="/image/logo.png" alt="Sekolah Lansia Merah Putih" class="relative h-12 w-12 object-contain rounded-xl border-2 border-white/20 shadow-lg bg-slate-800/50 p-1" />
                        </div>
                        <div>
                            <h3 class="text-lg font-bold">Sekolah Lansia Merah Putih</h3>
                            <p class="text-sm text-slate-400">Desa Pulai Payung, Kab. Mukomuko</p>
                        </div>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed max-w-sm">
                        Model pendidikan non-formal sepanjang hayat di bawah naungan BKKBN melalui Bina Keluarga Lansia (BKL).
                    </p>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="text-base font-semibold mb-4 text-slate-200">Menu Cepat</h4>
                    <ul class="space-y-2">
                        <li><Link href="/" class="text-slate-400 hover:text-white text-sm transition-colors">Beranda</Link></li>
                        <li><Link href="/program" class="text-slate-400 hover:text-white text-sm transition-colors">Program</Link></li>
                        <li><Link href="/tentang" class="text-slate-400 hover:text-white text-sm transition-colors">Tentang Kami</Link></li>
                    </ul>
                </div>
                
                <!-- Location Info -->
                <div>
                    <h4 class="text-base font-semibold mb-4 text-slate-200">Lokasi</h4>
                    <p class="text-slate-400 text-sm leading-relaxed mb-4">
                        Desa Pulai Payung, Kec. Ipuh<br>
                        Kabupaten Mukomuko, Bengkulu
                    </p>
                    <div class="flex flex-col gap-2">
                        <a href="https://wa.me/6281234567890" target="_blank" class="inline-flex items-center gap-2 text-blue-400 hover:text-blue-300 text-sm">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12c0 1.82.38 3.55 1.06 5.12L2 22l5.06-1.06A9.93 9.93 0 0012 22c5.52 0 10-4.48 10-10S17.52 2 12 2zm0 18c-1.54 0-3.04-.42-4.33-1.2l-.31-.19-3.03.63.65-2.94-.19-.32A7.97 7.97 0 014 12c0-4.42 3.58-8 8-8s8 3.58 8 8-3.58 8-8 8zm4.5-5.5c-.25-.12-1.47-.72-1.7-.81-.23-.08-.4-.12-.56.13-.17.25-.64.81-.79.96-.14.15-.29.17-.54.05-.25-.12-1.05-.39-2-1.23-.74-.66-1.24-1.47-1.38-1.72-.15-.25-.02-.38.11-.51.12-.12.25-.29.37-.44.13-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.48-.4-.42-.56-.43-.14 0-.31-.02-.48-.02-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.44 1.03 2.61.13.17 1.78 2.72 4.31 3.81.6.26 1.07.42 1.44.54.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.07-.1-.23-.16-.48-.28z"/></svg>
                            Hubungi via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-slate-800 pt-8 text-center">
                <p class="text-slate-500 text-sm">© 2026 Sekolah Lansia Merah Putih. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>
</template>
