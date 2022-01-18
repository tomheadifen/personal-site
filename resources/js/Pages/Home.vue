<template>
    <div>
        <intro :stackOverFlowData="stackOverFlowData" />
        <my-values class="mb-10" />
        <skills />
        <contact />
    </div>
</template>

<script setup>
    import Skills from '../Components/Skills';
    import MyValues from '../Components/MyValues';
    import Contact from '../Components/Contact';
    import Intro from '../Components/Intro';

    defineProps({
        stackOverFlowData: Object,
    })
</script>
