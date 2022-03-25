<template>
    <app-layout title="Diploma">
        <div
            class="min-h-screen flex flex-col mt-6 items-center sm:pt-0 bg-gray-100"
            dir="rtl"
        >
            <div class="w-full sm:max-w-4xl px-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <table class="border-collapse table-fixed w-full text-sm">
                    <thead>
                        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">نمبر دیپلوم</th>
                        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">اسم</th>
                        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">تخلص</th>
                        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">ولد</th>
                        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">ولدیت</th>
                        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">رشته تحصیلی</th>
                        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">تاریخ شمولیت</th>
                        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">تاریخ فراغت</th>
                    </thead>
                    <tbody>
                        <tr v-for="diploma in diplomas.data" :key="diploma.id" class="py-2 cursor-pointer" @click="show(diploma.id)">
                            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ diploma.diploma_id }}</td>
                            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ diploma.name }}</td>
                            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ diploma.last_name }}</td>
                            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ diploma.father_name }}</td>
                            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ diploma.g_father_name }}</td>
                            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ diploma.department }}</td>
                            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ diploma.addmission_date }}</td>
                            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ diploma.graduation_date }}</td>
                        </tr>
                    </tbody>
                </table>

                <pagination :links="diplomas.links"/>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import AppLayout from "@/Layouts/AppLayout.vue";
    import Pagination from "@/Components/Pagination.vue";

    export default defineComponent({
        components: {
            Head,
            Link,
            AppLayout,
            Pagination
        },

        props: {
            diplomas: Object,
        },

        methods: {
            show(id) {
                this.$inertia.visit(`/diplomas/${id}`)
            }
        }
    })
</script>
