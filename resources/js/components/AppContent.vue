<script setup lang="ts">
import { computed } from 'vue';
import { cn } from '@/lib/utils';
import type { AppVariant } from '@/types';

type Props = {
    variant?: AppVariant;
    class?: string;
};

const props = withDefaults(defineProps<Props>(), {
    variant: 'sidebar',
});
const className = computed(() => props.class);
</script>

<template>
    <main
        :class="cn(
            'flex min-w-0 flex-1 flex-col',
            props.variant === 'sidebar' ? 'overflow-x-hidden' : 'max-w-7xl mx-auto',
            className
        )"
    >
        <slot />
    </main>
</template>
