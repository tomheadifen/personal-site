<template>
    <div>
        <section class="relative mx-auto pl-4 pr-8 sm:px-6 lg:px-8" aria-labelledby="contact-heading">
            <div class="grid grid-cols-4 mb-10">
                <div class="lg:col-span-2 col-span-4">
                    <div class="grid grid-cols-4">
                        <img src="/storage/profile_picture.jpg" class="w-full col-span-3" alt="Tom Headifen Profile Picture">
                    </div>
                </div>
                <!-- Order last on smaller screens -->
                <div class="lg:order-last order-first col-span-2">
                    <p class="text-8xl font-extrabold text-gray-900 lg:mb-5">Thomas Headifen</p>
                    <p class="text-6xl text-gray-900 lg:mb-5">Software Developer</p>
                    <img class="inline mr-2" height="25" width="25" :src="stackOverFlowData.items[0].profile_image" />
                    <a href="https://stackoverflow.com/users/4371791/tom-headifen">
                        <span class="font-semibold pr-1 text-gray-500">{{ stackOverFlowData.items[0].reputation.toLocaleString() }}</span>
                        <span class="pr-1" :title="stackOverFlowData.items[0].badge_counts.silver +  ' silver badges'" aria-hidden="true">
                            <span>
                                <svg class="inline" xmlns="http://www.w3.org/2000/svg" width="12" height="15" fill="none">
                                    <path d="M5 10a3 3 0 100-6 3 3 0 000 6z" fill="#B4B8BC"/>
                                </svg>
                            </span>
                            <span class="silverBadge">
                                {{ stackOverFlowData.items[0].badge_counts.silver }}
                            </span>
                        </span>
                        <span :title="stackOverFlowData.items[0].badge_counts.bronze +  ' bronze badges'" aria-hidden="true">
                            <span class="bronzeBadge">
                                <svg class="inline" xmlns="http://www.w3.org/2000/svg" width="12" height="15" fill="none">
                                    <path d="M5 10a3 3 0 100-6 3 3 0 000 6z" fill="#D1A684" />
                                </svg>
                            </span>
                            <span class="bronzeBadge">
                                {{ stackOverFlowData.items[0].badge_counts.bronze }}
                            </span>
                        </span>
                    </a>
              </div>
            </div>
        </section>
        <my-values class="mb-10" />
        <skills class="mb-10" />
        <contact />
    </div>
</template>

<script setup>
    import Skills from '../Components/Skills';
    import MyValues from '../Components/MyValues';
    import Contact from '../Components/Contact';
    import axios from 'axios';
    import { ref } from 'vue';

    defineProps({
        stackOverFlowData: Object,
    })

    // console.log(stackOverFlowData)

    // const reputation = stackOverFlowData.items[0].reputation.toLocaleString()

    // const getStackExchangeData =  async() => {
    //     const data = await axios.get('https://api.stackexchange.com/2.3/users/4371791?order=desc&sort=reputation&site=stackoverflow')
    //     reputation.value = data.data.items[0].reputation.toLocaleString()
    //     profilePicture.value = data.data.items[0].profile_image
    //     bronzeBadge.value = data.data.items[0].badge_counts.bronze
    //     silverBadge.value = data.data.items[0].badge_counts.silver
    // }

    // getStackExchangeData()
</script>

<style>
    .silverBadge {
        color: #999c9f
    }

    .bronzeBadge {
        color: #ab825f
    }
</style>
