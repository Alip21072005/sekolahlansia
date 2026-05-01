<script setup lang="ts">
import { Head, Link, useForm } from '@inertiajs/vue3';
import { Button } from '@/components/ui/button';
import { Card, CardContent, CardHeader, CardTitle, CardDescription } from '@/components/ui/card';
import { Shield, ArrowLeft, Loader2, Mail, Lock, Eye, EyeOff } from 'lucide-vue-next';
import { ref } from 'vue';

// Toggle password visibility
const showPassword = ref(false);

// Inisialisasi form menggunakan helper dari Inertia
const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post('/login', {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Login Pengurus - Sekolah Lansia Merah Putih" />

    <div class="min-h-screen bg-linear-to-br from-slate-50 to-slate-100 flex flex-col justify-center items-center p-4 sm:p-6 lg:p-8 font-sans">
        
        <!-- Tombol Kembali ke Beranda -->
        <div class="fixed top-6 left-6 sm:top-8 sm:left-8 z-10">
            <Link href="/" class="flex items-center text-sm font-medium text-slate-500 hover:text-slate-900 transition-colors bg-white/80 backdrop-blur-sm px-4 py-2 rounded-full shadow-sm">
                <ArrowLeft class="w-4 h-4 mr-2" />
                Kembali
            </Link>
        </div>

        <div class="w-full max-w-lg">
            <!-- Logo / Header Icon -->
            <div class="text-center mb-6">
                <div class="w-20 h-20 bg-linear-to-br from-blue-100 to-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-4 border border-blue-200 shadow-lg shadow-blue-100">
                    <Shield class="w-10 h-10 text-blue-600" />
                </div>
                <h1 class="text-3xl font-bold text-slate-900 mb-2">Ruang Pengurus</h1>
                <p class="text-slate-500">Sekolah Lansia Merah Putih Desa Pulai Payung</p>
            </div>

            <!-- Login Card -->
            <Card class="border border-slate-200 shadow-2xl rounded-2xl overflow-hidden bg-white">
                <!-- Aksen Garis Merah di Atas Card -->
                <div class="h-2 bg-blue-600 w-full"></div>
                
                <CardHeader class="pb-6">
                    <CardTitle class="text-xl text-center">Masuk ke Dashboard</CardTitle>
                    <CardDescription class="text-center text-slate-500">
                        Silakan masukkan kredensial Anda untuk mengelola data.
                    </CardDescription>
                </CardHeader>

                <CardContent class="px-6 sm:px-8 pb-8">
                    <form @submit.prevent="submit" class="space-y-6">
                        
                        <!-- Input Email -->
                        <div class="space-y-2">
                            <label for="email" class="text-sm font-medium text-slate-700">Alamat Email</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <Mail class="h-5 w-5 text-slate-400" />
                                </div>
                                <input 
                                    id="email" 
                                    type="email" 
                                    v-model="form.email" 
                                    required 
                                    autofocus 
                                    autocomplete="username"
                                    class="block w-full pl-12 pr-4 py-3.5 border border-slate-200 rounded-xl text-slate-900 focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all bg-slate-50 focus:bg-white text-base" 
                                    placeholder="admin@pulaipayung.desa.id" 
                                />
                            </div>
                            <div v-if="form.errors.email" class="text-sm text-blue-600 mt-1">
                                {{ form.errors.email }}
                            </div>
                        </div>

                        <!-- Input Password -->
                        <div class="space-y-2">
                            <label for="password" class="text-sm font-medium text-slate-700">Kata Sandi</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <Lock class="h-5 w-5 text-slate-400" />
                                </div>
                                <input 
                                    id="password" 
                                    :type="showPassword ? 'text' : 'password'" 
                                    v-model="form.password" 
                                    required 
                                    autocomplete="current-password"
                                    class="block w-full pl-12 pr-12 py-3.5 border border-slate-200 rounded-xl text-slate-900 focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all bg-slate-50 focus:bg-white text-base" 
                                    placeholder="Masukkan kata sandi Anda" 
                                />
                                <button 
                                    type="button"
                                    @click="showPassword = !showPassword"
                                    class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-600 transition-colors"
                                >
                                    <Eye v-if="showPassword" class="h-5 w-5" />
                                    <EyeOff v-else class="h-5 w-5" />
                                </button>
                            </div>
                            <div v-if="form.errors.password" class="text-sm text-blue-600 mt-1">
                                {{ form.errors.password }}
                            </div>
                        </div>

                        <!-- Remember Me -->
                        <div class="flex items-center justify-between">
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input 
                                    type="checkbox" 
                                    name="remember" 
                                    v-model="form.remember" 
                                    class="rounded border-slate-300 text-blue-600 shadow-sm focus:ring-blue-600 w-5 h-5" 
                                />
                                <span class="text-sm text-slate-600">Ingat Saya</span>
                            </label>
                            <Link href="/forgot-password" class="text-sm text-blue-600 hover:text-blue-700 font-medium">
                                Lupa kata sandi?
                            </Link>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="pt-2">
                            <Button 
                                type="submit" 
                                :disabled="form.processing" 
                                class="w-full bg-linear-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold py-4 rounded-xl transition-all shadow-lg shadow-blue-200 text-base h-auto"
                            >
                                <Loader2 v-if="form.processing" class="w-5 h-5 mr-2 animate-spin" />
                                <span v-else>Masuk Dashboard</span>
                            </Button>
                        </div>

                    </form>
                </CardContent>
            </Card>

            <!-- Footer Tambahan -->
            <div class="text-center mt-8">
                <p class="text-xs text-slate-400">
                    Sistem Informasi Terpadu &copy; {{ new Date().getFullYear() }}<br>
                    Sekolah Lansia Merah Putih
                </p>
            </div>
        </div>
    </div>
</template>