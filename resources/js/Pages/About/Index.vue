<script setup>
import { computed, reactive } from 'vue';

const message = 'Hello World!'

const state = reactive({
    classH1: 'text-2xl',
    isRed: true
})

const isOriginalClassH1 = computed(() => {
    return state.classH1 === 'text-2xl'
})

const messages = [
    'Hello World',
    'VueJS!',
    'Laravel',
    'Fire!'
]

function handleOnClickButton() {
    state.isRed = !state.isRed

    if (state.classH1 !== 'text-2xl') {
        state.classH1 = 'text-2xl'
        return
    }

    state.classH1 = 'text-4xl'
}

</script>
<template>
    <div class="flex h-screen w-screen justify-center items-center">
        <div class="text-center">
            <h1 v-for="item in messages" :key="item" v-bind:class="state.classH1">
                {{ item }}
            </h1>
            <div v-if="state.isRed" class="bg-red-900 h-[50px] w-[150px]"></div>
            <div v-if="!state.isRed" class="bg-purple-900 h-[50px] w-[150px]"></div>
            <div class="my-2"></div>
            <button v-on:click="handleOnClickButton()" class="bg-slate-900 px-6 py-3 rounded-xl text-white">Ini Button</button>
        </div>
    </div>
</template>
