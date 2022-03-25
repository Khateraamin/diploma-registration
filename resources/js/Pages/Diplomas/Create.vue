<template>
    <app-layout title="Diploma">
        <div
            class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"
            dir="rtl"
        >
            <div
                class="w-full sm:max-w-2xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
            >
                <jet-validation-errors class="mb-4" />

                <form @submit.prevent="submit">
                    <div>
                        <jet-label for="diploma_id" value="نمبر دیپلوم" />
                        <jet-input
                            id="diploma_id"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.diploma_id"
                            required
                            autofocus
                            autocomplete="diploma_id"
                        />
                    </div>
                    <div class="w-full flex gap-4 mt-4">
                        <div class="w-full">
                            <jet-label for="name" value="اسم" />
                            <jet-input
                                id="name"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.name"
                                required
                                autofocus
                                autocomplete="name"
                            />
                        </div>
                        <div class="w-full">
                            <jet-label for="last_name" value="تخلص" />
                            <jet-input
                                id="last_name"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.last_name"
                                required
                                autofocus
                                autocomplete="last_name"
                            />
                        </div>
                    </div>
                    <div class="w-full flex gap-4 mt-4">
                        <div class="w-full">
                            <jet-label for="father_name" value="ولد" />
                            <jet-input
                                id="father_name"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.father_name"
                                required
                                autofocus
                                autocomplete="father_name"
                            />
                        </div>
                        <div class="w-full">
                            <jet-label for="g_father_name" value="ولدیت" />
                            <jet-input
                                id="g_father_name"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.g_father_name"
                                required
                                autofocus
                                autocomplete="g_father_name"
                            />
                        </div>
                    </div>
                    <div class="w-full flex gap-4 mt-4">
                        <div class="w-full">
                            <jet-label for="date_of_birth" value="تاریخ تولد" />
                            <jet-input
                                id="date_of_birth"
                                type="date"
                                class="mt-1 block w-full"
                                v-model="form.date_of_birth"
                                required
                                autofocus
                                autocomplete="date_of_birth"
                            />
                        </div>
                        <div class="w-full">
                            <jet-label
                                for="addmission_date"
                                value="تاریخ شمولیت"
                            />
                            <jet-input
                                id="addmission_date"
                                type="date"
                                class="mt-1 block w-full"
                                v-model="form.addmission_date"
                                required
                                autofocus
                                autocomplete="addmission_date"
                            />
                        </div>
                    </div>
                    <div class="w-full flex gap-4 mt-4">
                        <div class="w-full">
                            <jet-label for="department" value="رشته تحصیلی" />
                            <jet-input
                                id="department"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.department"
                                required
                                autofocus
                                autocomplete="department"
                            />
                        </div>
                        <div class="w-full">
                            <jet-label for="email" value="تکمیل مونوگراف" />
                            <select
                                class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                v-model="form.monograph_completed"
                            >
                                <option :value="true">بلی</option>
                                <option :value="false">نخیر</option>
                            </select>
                        </div>
                    </div>
                    <div class="w-full flex gap-4 mt-4">
                        <div class="w-full">
                            <jet-label
                                for="graduation_date"
                                value="تاریخ فراغت"
                            />
                            <jet-input
                                id="graduation_date"
                                type="date"
                                class="mt-1 block w-full"
                                v-model="form.graduation_date"
                                required
                                autofocus
                                autocomplete="graduation_date"
                            />
                        </div>
                        <div class="w-full">
                            <jet-label for="email" value="ایمیل" />
                            <jet-input
                                id="email"
                                type="email"
                                class="mt-1 block w-full"
                                v-model="form.email"
                                required
                                autofocus
                                autocomplete="email"
                            />
                        </div>
                    </div>
                    <div class="w-full flex gap-4 mt-4">
                        <div class="w-full">
                            <jet-label for="phone" value="شماره موبایل" />
                            <jet-input
                                id="phone"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.phone"
                                required
                                autofocus
                                autocomplete="phone"
                            />
                        </div>
                        <div class="w-full">
                            <jet-label for="province" value="ولایت" />
                            <jet-input
                                id="province"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.province"
                                required
                                autofocus
                                autocomplete="province"
                            />
                        </div>
                    </div>
                    <div class="w-full flex gap-4 mt-4">
                        <div class="w-full">
                            <jet-label for="district" value="ولسوالی" />
                            <jet-input
                                id="district"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.district"
                                required
                                autofocus
                                autocomplete="district"
                            />
                        </div>
                        <div class="w-full">
                            <jet-label for="village" value="قریه" />
                            <jet-input
                                id="village"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.village"
                                required
                                autofocus
                                autocomplete="village"
                            />
                        </div>
                    </div>
                    <div class="w-full flex gap-4 mt-4">
                        <div class="w-full">
                            <jet-label for="current_province" value="ولایت" />
                            <jet-input
                                id="current_province"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.current_province"
                                required
                                autofocus
                                autocomplete="current_province"
                            />
                        </div>
                        <div class="w-full">
                            <jet-label for="current_district" value="ولسوالی" />
                            <jet-input
                                id="current_district"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.current_district"
                                required
                                autofocus
                                autocomplete="current_district"
                            />
                        </div>
                    </div>
                    <div class="w-full flex gap-4 mt-4">
                        <div class="w-full">
                            <jet-label for="current_village" value="قریه" />
                            <jet-input
                                id="current_village"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.current_village"
                                required
                                autofocus
                                autocomplete="current_village"
                            />
                        </div>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <jet-button
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing"
                        >
                            ثبت
                        </jet-button>
                    </div>
                </form>
            </div>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import JetButton from "@/Jetstream/Button.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetCheckbox from "@/Jetstream/Checkbox.vue";
import JetLabel from "@/Jetstream/Label.vue";
import JetValidationErrors from "@/Jetstream/ValidationErrors.vue";

export default defineComponent({
    components: {
        Head,
        Link,
        AppLayout,
        JetButton,
        JetInput,
        JetCheckbox,
        JetLabel,
        JetValidationErrors,
    },

    props: {},

    data() {
        return {
            form: this.$inertia.form({
                diploma_id: "",
                name: "",
                last_name: "",
                father_name: "",
                g_father_name: "",
                graduation_date: "",
                addmission_date: "",
                date_of_birth: "",
                email: "",
                phone: "",
                department: "",
                province: "",
                district: "",
                village: "",
                current_province: "",
                current_district: "",
                current_village: "",
                monograph_completed: false,
            }),
        };
    },

    methods: {
        submit() {
            this.form.post(this.route("diplomas.store"), {
                
            });
        },
    },
});
</script>
