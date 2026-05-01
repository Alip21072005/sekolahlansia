<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Button } from '@/components/ui/button';
import {
    Breadcrumb,
    BreadcrumbItem,
    BreadcrumbLink,
    BreadcrumbList,
    BreadcrumbPage,
    BreadcrumbSeparator,
} from '@/components/ui/breadcrumb';
import { Bell, Menu } from 'lucide-vue-next';
import { useSidebar } from '@/components/ui/sidebar';
import type { BreadcrumbItem as BreadcrumbItemType } from '@/types';

type Props = {
    breadcrumbs?: BreadcrumbItemType[];
    pageTitle?: string;
};

withDefaults(defineProps<Props>(), {
    breadcrumbs: () => [],
    pageTitle: 'Dashboard Admin',
});

const { toggleSidebar } = useSidebar();
</script>

<template>
    <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-4 sm:px-6 lg:px-8 z-10">
        <div class="flex items-center gap-4">
            <Button
                variant="ghost"
                size="icon"
                class="lg:hidden"
                @click="toggleSidebar"
            >
                <Menu class="w-5 h-5" />
            </Button>
            
            <div v-if="breadcrumbs.length > 0">
                <Breadcrumb>
                    <BreadcrumbList>
                        <BreadcrumbItem v-for="(item, index) in breadcrumbs" :key="item.title">
                            <BreadcrumbSeparator v-if="index > 0" />
                            <BreadcrumbLink v-if="item.href" as-child>
                                <Link :href="item.href">{{ item.title }}</Link>
                            </BreadcrumbLink>
                            <BreadcrumbPage v-else>{{ item.title }}</BreadcrumbPage>
                        </BreadcrumbItem>
                    </BreadcrumbList>
                </Breadcrumb>
            </div>
            <h1 v-else class="text-xl font-semibold text-slate-900 hidden sm:block">{{ pageTitle }}</h1>
        </div>

        <div class="flex items-center gap-4">
            <button class="p-2 text-slate-400 hover:text-blue-600 transition-colors relative">
                <Bell class="w-5 h-5" />
                <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full"></span>
            </button>
            <div class="flex items-center gap-3 border-l border-slate-200 pl-4">
                <div class="text-right hidden sm:block">
                    <p class="text-sm font-semibold text-slate-900">Admin Utama</p>
                    <p class="text-xs text-slate-500">Sekolah Lansia</p>
                </div>
                <div class="w-9 h-9 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-sm shadow-sm">
                    AD
                </div>
            </div>
        </div>
    </header>
</template>
