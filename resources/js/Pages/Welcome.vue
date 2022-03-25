<template>
    <Head title="Welcome" />
    <app-layout>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex flex-col justify-center pt-8 sm:justify-start sm:pt-0">
                    <h2 class="text-2xl font-semibold">به سیستم ثبت دیپلوم خوش آمدید</h2>

                    <div class="mt-8">
                        <form @submit.prevent="search">
                            <jet-label for="diploma_id" value="لطفا نمبر دیپلوم تان را وارد نموده و بعدا دکمه انتر را فشار دهید" />
                            <jet-input id="diploma_id" type="text" class="mt-1 block w-full" v-model="diploma_id" placeholder="نمبر دیپلوم" required autofocus />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import JetButton from '@/Jetstream/Button.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetCheckbox from '@/Jetstream/Checkbox.vue'
    import JetLabel from '@/Jetstream/Label.vue'
    import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'
    import AppLayout from '@/Layouts/AppLayout.vue'

    export default defineComponent({
        components: {
            Head,
            Link,
            JetButton,
            JetInput,
            JetCheckbox,
            JetLabel,
            JetValidationErrors,
            AppLayout
        },

        props: {
           
        },

        data: () => ({
            diploma_id: '',
        }),

        methods: {
            search() {
                this.$inertia.get(route('diplomas.search'), {
                    diploma_id: this.diploma_id,
                });
            },
        },
    })
</script>
