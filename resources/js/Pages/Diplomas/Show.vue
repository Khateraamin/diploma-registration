<template>
    <app-layout title="Diploma">
        <div
            class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"
            dir="rtl"
        >
            <div
                v-if="diploma"
                class="w-full sm:max-w-2xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
            >
                <div>
                    <jet-label for="diploma_id" value="نمبر دیپلوم" />
                    <jet-label :value="diploma.diploma_id" />
                </div>
                <div class="w-full flex gap-4 mt-4">
                    <div class="w-full">
                        <jet-label for="name" value="اسم" />
                        <jet-label :value="diploma.name" />
                    </div>
                    <div class="w-full">
                        <jet-label for="last_name" value="تخلص" />
                        <jet-label :value="diploma.last_name" />
                    </div>
                </div>
                <div class="w-full flex gap-4 mt-4">
                    <div class="w-full">
                        <jet-label for="father_name" value="ولد" />
                        <jet-label :value="diploma.father_name" />
                    </div>
                    <div class="w-full">
                        <jet-label for="g_father_name" value="ولدیت" />
                        <jet-label :value="diploma.g_father_name" />
                    </div>
                </div>
                <div class="w-full flex gap-4 mt-4">
                    <div class="w-full">
                        <jet-label for="date_of_birth" value="تاریخ تولد" />
                        <jet-label :value="diploma.date_of_birth" />
                    </div>
                    <div class="w-full">
                        <jet-label for="addmission_date" value="تاریخ شمولیت" />
                        <jet-label :value="diploma.addmission_date" />
                    </div>
                </div>
                <div class="w-full flex gap-4 mt-4">
                    <div class="w-full">
                        <jet-label for="department" value="رشته تحصیلی" />
                        <jet-label :value="diploma.department" />
                    </div>
                    <div class="w-full">
                        <jet-label for="email" value="تکمیل مونوگراف" />
                        <jet-label
                            :value="
                                diploma.monograph_completed ? 'بلی' : 'نخیر'
                            "
                        />
                    </div>
                </div>
                <div class="w-full flex gap-4 mt-4">
                    <div class="w-full">
                        <jet-label for="graduation_date" value="تاریخ فراغت" />
                        <jet-label :value="diploma.graduation_date" />
                    </div>
                    <div class="w-full">
                        <jet-label for="email" value="ایمیل" />
                        <jet-label :value="diploma.email" />
                    </div>
                </div>
                <div class="w-full flex gap-4 mt-4">
                    <div class="w-full">
                        <jet-label for="phone" value="شماره موبایل" />
                        <jet-label :value="diploma.phone" />
                    </div>
                    <div class="w-full">
                        <jet-label for="province" value="ولایت" />
                        <jet-label :value="diploma.province" />
                    </div>
                </div>
                <div class="w-full flex gap-4 mt-4">
                    <div class="w-full">
                        <jet-label for="district" value="ولسوالی" />
                        <jet-label :value="diploma.district" />
                    </div>
                    <div class="w-full">
                        <jet-label for="village" value="قریه" />
                        <jet-label :value="diploma.village" />
                    </div>
                </div>
                <div class="w-full flex gap-4 mt-4">
                    <div class="w-full">
                        <jet-label for="current_province" value="ولایت" />
                        <jet-label :value="diploma.current_province" />
                    </div>
                    <div class="w-full">
                        <jet-label for="current_district" value="ولسوالی" />
                        <jet-label :value="diploma.current_district" />
                    </div>
                </div>
                <div class="w-full flex gap-4 mt-4">
                    <div class="w-full">
                        <jet-label for="current_village" value="قریه" />
                        <jet-label :value="diploma.current_village" />
                    </div>
                </div>
            </div>

            <div
                v-if="!diploma"
                class="w-full sm:max-w-2xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
            >
                <div class="text-center">
                    <h1 class="text-2xl font-bold">
                        دیپلوم مورد نظر شما یافت نشد
                    </h1>
                    <Link
                        :href="route('diplomas.create')"
                        class="block mt-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    >
                        ثبت دیپلوم
                    </Link>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import JetLabel from "@/Jetstream/Label.vue";

export default defineComponent({
    components: {
        Head,
        Link,
        AppLayout,
        JetLabel,
    },

    props: {
        diploma: Object,
    },
});
</script>
