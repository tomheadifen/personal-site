<template>
	<div class="min-h-screen bg-white">
		<Disclosure as="nav" class="bg-white border-b border-gray-200">
			<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
				<div class="flex justify-end h-16">

					<div class="flex justify-end">
						<div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
							<a v-for="item in navigation" :key="item.name" :href="item.href" :class="[item.current ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700', 'inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium']" :aria-current="item.current ? 'page' : undefined">
								{{ item.name }}
							</a>
						</div>
					</div>
				</div>
			</div>
		</Disclosure>

		<div class="py-10">
			<main>
				<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
					<slot />
				</div>
			</main>
		</div>
	</div>
</template>

<script setup>
import { Disclosure } from '@headlessui/vue'

const navigation = [
	{ name: 'Contact', href: '#', current: false },
	{ name: 'About', href: '#', current: true },
]
</script>
