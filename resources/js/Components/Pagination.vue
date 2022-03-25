<template>
    <div v-if="links.length > 3">
        <div class="container flex justify-center mx-auto mt-8">
            <ul class="flex last:border-r last:border-gray-400">
                <template v-for="(link, key) in links">
                    <li v-if="link.url === null" :key="key">
                        <button
                            class="h-10 px-5 text-gray-300 bg-white border border-r-0 border-gray-400 hover:bg-gray-100"
                        >
                            <span v-html="link.label"></span>
                        </button>
                    </li>
                    <li
                        v-else
                        :key="link"
                        :class="{ 'bg-white': link.active }"
                        :href="link.url"
                    >
                        <Link
                            class="flex items-center h-10 px-5 text-gray-600 bg-white border border-r-0 border-gray-400"
                            :href="link.url"
                            :class="{ 'bg-gray-200': link.active }"
                        >
                            <span v-html="link.label"></span>
                        </Link>
                    </li>
                </template>
            </ul>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: { Link },
    props: {
        links: Array,
    },
};
</script>