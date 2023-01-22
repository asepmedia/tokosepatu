<template>
    <div>
        <h1 v-bind:class="classH1">
            {{ status.success }}
        </h1>
        <button v-on:click="handleOnClickButton()" class="bg-slate-900 px-6 py-3 rounded-xl text-white">Ini Button</button>
    </div>
</template>
<script>
export default {
    data() {
        return {
            msg: 'Test',
            status: {
                success: 'Success'
            },
            isDisabled: true,
            classH1: 'text-3xl font-bold underline'
        }
    },
    methods: {
        handleOnClickButton() {
            this.classH1 = 'text-3xl font-bold underline text-red-900'
        }
    }
}
</script>
