<template>
    <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="w-full md:w-[20%]">
            <span class="text-[30px] text-primary font-black">
                KelasKiwari
            </span>
        </div>
        <div class="w-full md:w-[60%]">
            <input
                type="text"
                class="w-full h-[35px] rounded-[30px] px-4 bg-accent-2 text-accent-1 focus:outline-none focus:bg-gray-200"
                placeholder="Mau cari apa..."
            />
        </div>
        <div class="w-full md:w-[20%] flex justify-end font-semibold">
            <a href="/login">Masuk</a>
            <span class="px-2">/</span> 
            <a href="/register">Daftar</a>
        </div>
    </div>
</template>