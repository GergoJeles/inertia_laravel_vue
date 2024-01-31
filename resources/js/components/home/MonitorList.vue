<template>
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-6 md:space-x-10">
            <h1
                class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate"
            >
                All your sites
            </h1>

            <button
                @click="createSite"
                class="rounded-md border border-transparent bg-blue-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
            >
                Add Site
            </button>
        </div>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            A list of all the users in your account including their name, title,
            email and role.
        </p>
        <div class="flex flex-col mt-8">
            <div
                class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg"
            >
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th
                                scope="col"
                                class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            >
                                Name
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            >
                                URL
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            >
                                Status
                            </th>

                            <th
                                scope="col"
                                class="relative px-6 py-3 bg-gray-50"
                            >
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Dynamic rows start here -->
                        <tr v-for="monitor in monitors.data" :key="monitor.id">
                            <td
                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                            >
                                {{ monitor.site_name }}
                            </td>
                            <td
                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                            >
                                {{ monitor.site_url }}
                            </td>
                            <td
                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                            >
                                {{ monitor.site_status }}
                            </td>
                            <td
                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                            >
                                {{ monitor.role }}
                            </td>
                            <td
                                class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium"
                            >
                                <a
                                    href="#"
                                    class="text-blue-600 hover:text-blue-900"
                                    >Edit</a
                                >
                            </td>
                        </tr>
                        <!-- Dynamic rows end here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <Paginate
        :next="monitors.next_page_url"
        :prev="monitors.prev_page_url"
        :currentPage="monitors.current_page"
        :lastPage="monitors.last_page"
        class="mt-4"
    />
</template>

<script setup>
import { router } from "@inertiajs/vue3";
import Paginate from "@/components/Paginate.vue";
defineProps(["monitors"]);

function createSite() {
    router.visit("/site/create");
}
</script>

<style>
@import "tailwindcss/base";
@import "tailwindcss/components";
@import "tailwindcss/utilities";
</style>
