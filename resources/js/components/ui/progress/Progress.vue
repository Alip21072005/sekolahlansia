<script setup lang="ts">
import type { HTMLAttributes } from 'vue'
import { cn } from '@/lib/utils'

interface Props {
  modelValue?: number
  max?: number
  class?: HTMLAttributes['class']
}

const props = withDefaults(defineProps<Props>(), {
  modelValue: 0,
  max: 100,
})
</script>

<template>
  <div
    role="progressbar"
    :aria-valuenow="modelValue"
    :aria-valuemax="max"
    aria-valuemin="0"
    :class="cn('relative h-2 w-full overflow-hidden rounded-full bg-slate-100', props.class)"
  >
    <div
      :class="cn('h-full w-full flex-1 bg-slate-900 transition-all duration-500 ease-out')"
      :style="{ transform: `translateX(-${100 - (modelValue / max) * 100}%)` }"
    />
  </div>
</template>
