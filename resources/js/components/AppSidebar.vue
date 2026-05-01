<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import {
    LayoutDashboard,
    Users,
    Newspaper,
    FileImage,
    Settings,
    LogOut,
    ShieldCheck,
    MessageSquare,
} from 'lucide-vue-next';
import {
    Sidebar,
    SidebarContent,
    SidebarFooter,
    SidebarHeader,
    SidebarMenu,
    SidebarMenuButton,
    SidebarMenuItem,
} from '@/components/ui/sidebar';
import { useCurrentUrl } from '@/composables/useCurrentUrl';
import type { NavItem } from '@/types';

const { isCurrentUrl } = useCurrentUrl();

const mainNavItems: NavItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
        icon: LayoutDashboard,
    },
    {
        title: 'Kelola Berita',
        href: '/admin/berita',
        icon: Newspaper,
    },
    {
        title: 'Galeri & Media',
        href: '/admin/galeri',
        icon: FileImage,
    },
    {
        title: 'Data Anggota',
        href: '/admin/siswa',
        icon: Users,
    },
    {
        title: 'Pengurus',
        href: '/admin/pengurus',
        icon: ShieldCheck,
    },
    {
        title: 'Pesan',
        href: '/admin/pesan',
        icon: MessageSquare,
    },
];

const footerNavItems: NavItem[] = [
    {
        title: 'Pengaturan',
        href: '/admin/settings',
        icon: Settings,
    },
];
</script>

<template>
    <Sidebar collapsible="icon" variant="sidebar">
        <SidebarHeader>
            <SidebarMenu>
                <SidebarMenuItem>
                    <SidebarMenuButton size="lg" as-child>
                        <Link href="/dashboard" class="flex items-center gap-3">
                            <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-blue-600 text-white">
                                <ShieldCheck class="w-5 h-5" />
                            </div>
                            <div class="grid flex-1 text-left text-sm leading-tight">
                                <span class="truncate font-semibold">Panel Pengurus</span>
                                <span class="truncate text-xs text-slate-500">Sekolah Lansia</span>
                            </div>
                        </Link>
                    </SidebarMenuButton>
                </SidebarMenuItem>
            </SidebarMenu>
        </SidebarHeader>

        <SidebarContent>
            <SidebarMenu>
                <SidebarMenuItem v-for="item in mainNavItems" :key="item.title">
                    <SidebarMenuButton as-child :tooltip="item.title">
                        <Link :href="item.href" :class="isCurrentUrl(item.href) ? 'text-blue-600' : ''">
                            <component :is="item.icon" class="w-4 h-4" />
                            <span>{{ item.title }}</span>
                        </Link>
                    </SidebarMenuButton>
                </SidebarMenuItem>
            </SidebarMenu>
        </SidebarContent>

        <SidebarFooter>
            <SidebarMenu>
                <SidebarMenuItem v-for="item in footerNavItems" :key="item.title">
                    <SidebarMenuButton as-child :tooltip="item.title">
                        <Link :href="item.href" :class="isCurrentUrl(item.href) ? 'text-blue-600' : ''">
                            <component :is="item.icon" class="w-4 h-4" />
                            <span>{{ item.title }}</span>
                        </Link>
                    </SidebarMenuButton>
                </SidebarMenuItem>
                <SidebarMenuItem>
                    <SidebarMenuButton as-child class="text-red-600 hover:text-red-600 hover:bg-red-50">
                        <Link href="/logout" method="post" as="button" class="w-full">
                            <LogOut class="w-4 h-4" />
                            <span>Keluar Sistem</span>
                        </Link>
                    </SidebarMenuButton>
                </SidebarMenuItem>
            </SidebarMenu>
        </SidebarFooter>
    </Sidebar>
</template>
