<script setup>
// import { Link } from '@inertiajs/vue3'
import TopBar from './Topbar.vue'
import SideBar from './Sidebar.vue'
import Content from './Content.vue'
import Foooter from './Footer.vue'


</script>

<template>
    <TopBar />
    <SideBar />
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
        <div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>
        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            <Content />
            <Foooter />

        </div>
    </div>
</template>
