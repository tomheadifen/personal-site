<template>
    <section class="relative mx-auto pl-4 pr-8 sm:px-6 lg:px-8" aria-labelledby="contact-heading">
        <div id="about" class="grid grid-cols-4 mb-10">
            <div class="lg:col-span-2 col-span-4">
                <div class="grid grid-cols-4">
                    <img src="/storage/profile_picture.jpg" class="w-full col-span-3" alt="Tom Headifen Profile Picture">
                </div>
            </div>
            <!-- Order last on smaller screens -->
            <div class="lg:order-last order-first col-span-2 static">
                <div class="absolute bottom-0 right-0 hidden lg:block">
                    <img height="300" width="300" src="/storage/toronto.png" class="z-0 opacity-10"/>
                </div>
                <div class="z-10">
                    <p class="text-8xl font-extrabold text-gray-900 lg:mb-5">Tom Headifen</p>
                    <!-- <p class="text-6xl text-gray-900 lg:mb-5">Software Developer</p> -->
                    <p class="text-3xl text-gray-900 lg:mb-5">
                        A Toronto based software developer    
                    </p>
                    <div class="pb-5">
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
                    <div class="relative right-1">
                        <a class="text-teal-200 hover:text-teal-100" href="https://github.com/tomheadifen">
                            <span class="sr-only">Git Commits</span>
                            <span>
                                <svg class="inline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" height="30" width="30" viewBox="0 0 97 97" enable-background="new 0 0 97 97" xml:space="preserve">
                                    <g>
                                        <path fill="#F05133" d="M92.71,44.408L52.591,4.291c-2.31-2.311-6.057-2.311-8.369,0l-8.33,8.332L46.459,23.19   c2.456-0.83,5.272-0.273,7.229,1.685c1.969,1.97,2.521,4.81,1.67,7.275l10.186,10.185c2.465-0.85,5.307-0.3,7.275,1.671   c2.75,2.75,2.75,7.206,0,9.958c-2.752,2.751-7.208,2.751-9.961,0c-2.068-2.07-2.58-5.11-1.531-7.658l-9.5-9.499v24.997   c0.67,0.332,1.303,0.774,1.861,1.332c2.75,2.75,2.75,7.206,0,9.959c-2.75,2.749-7.209,2.749-9.957,0c-2.75-2.754-2.75-7.21,0-9.959   c0.68-0.679,1.467-1.193,2.307-1.537V36.369c-0.84-0.344-1.625-0.853-2.307-1.537c-2.083-2.082-2.584-5.14-1.516-7.698   L31.798,16.715L4.288,44.222c-2.311,2.313-2.311,6.06,0,8.371l40.121,40.118c2.31,2.311,6.056,2.311,8.369,0L92.71,52.779   C95.021,50.468,95.021,46.719,92.71,44.408z"/>
                                    </g>
                                </svg>
                            </span>
                            <span class="pl-2 text-gray-500 font-semibold">3000+ Commits</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
    defineProps({
        stackOverFlowData: Object,
    })
</script>

<style>
    .silverBadge {
        color: #999c9f
    }

    .bronzeBadge {
        color: #ab825f
    }
</style>
