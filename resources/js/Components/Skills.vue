<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <main class="overflow-hidden relative mx-auto pl-4 pr-8 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-extrabold tracking-tight text-warm-gray-900 sm:text-5xl lg:text-5xl pb-5 lg:pb-10">What software do I work with?</h2>
        <div class="bg-white shadow overflow-hidden sm:rounded-md">
            <ul role="list" class="divide-y divide-gray-200">
                <li v-for="skill in skills" :key="skill.id">
                    <div class="px-4 py-4 flex items-center sm:px-6">
                        <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                            <div>
                                <div class="flex text-sm">
                                    <p
                                        class="font-medium text-indigo-600"
                                    >{{ skill.title }}</p>
                                </div>
                                <div class="mt-2 flex">
                                    <div class="flex items-center text-sm text-gray-500">
                                        <p>{{ skill.description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </main>
</template>

<script setup>
const skills = [
    {
        id: 1,
        title: 'PHP',
        description: 'A server side programming language',
    },
    {
        id: 2,
        title: 'Laravel',
        description: 'A server side PHP framework to quickly develop web software',
    },
    {
        id: 3,
        title: 'Javascript',
        description: 'A programming language used by your browsers such as chrome and edge',
    },
    {
        id: 4,
        title: 'HTML/CSS',
        description: 'Languages used by the browsers to manage how a site looks',
    },
    {
        id: 5,
        title: 'Vue',
        description: 'A javascript library to easily develop the front end',
    },
    {
        id: 6,
        title: 'MySQL',
        description: 'A database language used to manage large amounts of data',
    },
    {
        id: 7,
        title: 'Linux',
        description: 'Software used by many computers on the web',
    },
    {
        id: 8,
        title: 'Amazon Web Services (AWS) and Google Firebase',
        description: 'A range of software that is commonly used on the web',
    },
    {
        id: 9,
        title: 'Docker',
        description: 'Software to easily maintain and replicate server configuration',
    },
]
</script>
