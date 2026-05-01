<script setup lang="ts">
import { Head, Link, useForm } from '@inertiajs/vue3';
import { Button } from '@/components/ui/button';
import { Card, CardContent, CardHeader, CardTitle, CardDescription } from '@/components/ui/card';
import { KeyRound, ArrowLeft, Mail, Loader2, CheckCircle2 } from 'lucide-vue-next';

// Form untuk reset password
const form = useForm({
    email: '',
});

const submit = () => {
    form.post('/forgot-password', {
        onFinish: () => form.reset('email'),
    });
};

defineProps<{
    status?: string;
}>();
</script>

<template>
    <Head title="Lupa Kata Sandi - Sekolah Lansia Merah Putih" />

    <div class="min-h-screen bg-linear-to-br from-slate-50 to-slate-100 flex flex-col justify-center items-center p-4 sm:p-6 lg:p-8 font-sans">
        
        <!-- Tombol Kembali ke Login -->
        <div class="fixed top-6 left-6 sm:top-8 sm:left-8 z-10">
            <Link href="/login" class="flex items-center text-sm font-medium text-slate-500 hover:text-slate-900 transition-colors bg-white/80 backdrop-blur-sm px-4 py-2 rounded-full shadow-sm">
                <ArrowLeft class="w-4 h-4 mr-2" />
                Kembali ke Login
            </Link>
        </div>

        <div class="w-full max-w-lg">
            <!-- Logo / Header Icon -->
            <div class="text-center mb-6">
                <div class="w-20 h-20 bg-linear-to-br from-blue-100 to-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-4 border border-blue-200 shadow-lg shadow-blue-100">
                    <KeyRound class="w-10 h-10 text-blue-600" />
                </div>
                <h1 class="text-3xl font-bold text-slate-900 mb-2">Lupa Kata Sandi?</h1>
                <p class="text-slate-500">Sekolah Lansia Merah Putih Desa Pulai Payung</p>
            </div>

            <!-- Success Message -->
            <div v-if="status" class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl">
                <div class="flex items-center gap-3">
                    <CheckCircle2 class="w-5 h-5 text-green-600 shrink-0" />
                    <p class="text-sm text-green-700">{{ status }}</p>
                </div>
            </div>

            <!-- Forgot Password Card -->
            <Card class="border border-slate-200 shadow-2xl rounded-2xl overflow-hidden bg-white">
                <!-- Aksen Garis Biru di Atas Card -->
                <div class="h-2 bg-blue-600 w-full"></div>
                
                <CardHeader class="pb-6">
                    <CardTitle class="text-xl text-center">Reset Kata Sandi</CardTitle>
                    <CardDescription class="text-center text-slate-500">
                        Masukkan alamat email Anda dan kami akan mengirimkan link untuk mereset kata sandi.
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
                                    autocomplete="email"
                                    class="block w-full pl-12 pr-4 py-3.5 border border-slate-200 rounded-xl text-slate-900 focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all bg-slate-50 focus:bg-white text-base" 
                                    placeholder="admin@pulaipayung.desa.id" 
                                />
                            </div>
                            <div v-if="form.errors.email" class="text-sm text-blue-600 mt-1">
                                {{ form.errors.email }}
                            </div>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="pt-2">
                            <Button 
                                type="submit" 
                                :disabled="form.processing" 
                                class="w-full bg-linear-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold py-4 rounded-xl transition-all shadow-lg shadow-blue-200 text-base h-auto"
                            >
                                <Loader2 v-if="form.processing" class="w-5 h-5 mr-2 animate-spin" />
                                <span v-else>Kirim Link Reset Password</span>
                            </Button>
                        </div>

                    </form>

                    <!-- Back to Login Link -->
                    <div class="mt-6 text-center">
                        <p class="text-sm text-slate-500">
                            Ingat kata sandi Anda? 
                            <Link href="/login" class="text-blue-600 hover:text-blue-700 font-medium">
                                Masuk sekarang
                            </Link>
                        </p>
                    </div>
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
