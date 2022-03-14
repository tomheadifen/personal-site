<template>
    <div class="bg-white">
        <main class="mx-auto pl-4 pr-8 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-extrabold tracking-tight text-warm-gray-900 sm:text-5xl lg:text-5xl pb-5 lg:pb-10">Who am I?</h2>
            <div class="grid grid-cols-12">
                <div class="col-span-12 lg:col-span-6">
                    <ul class="text-3xl lg:text-4xl list-none pl-1 lg:pl-6 space-y-1 lg:space-y-5">
                        <li><ChevronRightIcon class="h-19 w-10 inline-block"/> Team Leader</li>
                        <li><ChevronRightIcon class="h-19 w-10 inline-block"/> Public Speaker</li>
                        <li><ChevronRightIcon class="h-19 w-10 inline-block"/> Software Developer</li>
                        <li><ChevronRightIcon class="h-19 w-10 inline-block"/> Problem Solver</li>
                    </ul>
                </div>
                <video class="grid col-span-12 lg:col-span-6 lg:w-full h-64 pt-5 lg:pt-0 lg:h-auto" role="application" preload="metadata" autoplay="autoplay" muted="muted" loop src="/storage/tom_talk.mp4"></video>
            </div>
        </main>
    </div>
</template>

<script setup>
import { ChevronRightIcon } from '@heroicons/vue/solid'
</script>