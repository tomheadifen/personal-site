<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <h2 class="text-5xl mb-10">What can I do?</h2>
    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <ul role="list" class="divide-y divide-gray-200">
            <li v-for="skill in skills" :key="skill.id">
                <a href="#" class="block hover:bg-gray-50">
                    <div class="px-4 py-4 flex items-center sm:px-6">
                        <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                            <div class="truncate">
                                <div class="flex text-sm">
                                    <p
                                        class="font-medium text-indigo-600 truncate"
                                    >{{ skill.title }}</p>
                                </div>
                                <div class="mt-2 flex">
                                    <div class="flex items-center text-sm text-gray-500">
                                        <p>{{ skill.description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ml-5 flex-shrink-0">
                            <ChevronRightIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</template>

<script setup>
import { ChevronRightIcon } from '@heroicons/vue/solid'

const skills = [
    {
        id: 1,
        title: 'PHP',
        description: 'A server side programming language',
    },
    {
        id: 2,
        title: 'Javascript',
        description: 'A programming language used by your browsers such as chrome and edge',
    },
    {
        id: 3,
        title: 'MySQL',
        description: 'A database language used to manage large amounts of data',
    },
]
</script>