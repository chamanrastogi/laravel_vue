<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { ref } from "vue";
defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});
const showPassword = ref();

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>

        <Head title="Login Page" />

        <section class="auth bg-base d-flex flex-wrap">
            <div class="auth-left d-lg-block d-none">
                <div class="d-flex align-items-center flex-column h-100 justify-content-center">
                    <img src="/backend/assets/images/auth/auth-img.png" alt="">
                </div>
            </div>
            <div class="auth-right py-32 px-24 d-flex flex-column justify-content-center">
                <div class="max-w-464-px mx-auto w-100">
                    <div>
                        <Link href="/" class="mb-40 max-w-290-px">
                        <img src="/backend/assets/images/logo.png" alt="">
                        </Link>
                        <h4 class="mb-12">Sign In to your Account</h4>
                        <p class="mb-32 text-secondary-light text-lg">Welcome back! please enter your detail</p>
                    </div>
                    <form @submit.prevent="submit">
                        <div class="icon-field mb-16">
                            <span class="icon top-50 translate-middle-y">
                                <iconify-icon icon="mage:email"></iconify-icon>
                            </span>

                            <TextInput id="email" type="email" class="form-control h-56-px bg-neutral-50 radius-12"
                                v-model="form.email" required autofocus autocomplete="username" />
                            <InputError class="mt-2" :message="form.errors.email" />
                        </div>

                        <div class="position-relative mb-20">
                            <div class="icon-field">
                                <span class="icon top-50 translate-middle-y">
                                    <iconify-icon icon="solar:lock-password-outline"></iconify-icon>

                                </span>
                                <TextInput id="password" text="password" :type="showPassword ? 'text' : 'password'"
                                    class="form-control h-56-px bg-neutral-50 radius-12" v-model="form.password"
                                    required autocomplete="current-password" placeholder="Password" />
                                <InputError class="mt-2" :message="form.errors.password" />

                            </div>

                            <span @click=" showPassword = !showPassword;"
                                :class="{ 'ri-eye-off-line': showPassword, 'ri-eye-line': !showPassword }"
                                class="toggle-password  cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light"
                                data-toggle="#your-password"></span>
                        </div>
                        <div class="">
                            <div class="d-flex justify-content-between gap-2">
                                <div class="form-check style-check d-flex align-items-center">

                                    <Checkbox class="form-check-input border border-neutral-300" name="remember"
                                        v-model:checked="form.remember" />
                                    <label class="form-check-label" for="remeber">Remember me </label>
                                </div>
                                <Link v-if="canResetPassword" :href="route('password.request')"
                                    class="text-primary-600 fw-medium">
                                Forgot Password?
                                </Link>

                            </div>
                        </div>

                        <button type="submit" :class="{ 'opacity-25': form.processing }" :disabled="form.processing"
                            class="btn btn-primary text-sm btn-sm px-12 py-16 w-100 radius-12 mt-32">
                            Log in</button>
                    </form>
                </div>
            </div>
        </section>

    </GuestLayout>
</template>
