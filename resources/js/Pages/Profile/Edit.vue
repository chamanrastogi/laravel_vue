<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});
</script>

<template>

    <Head title="Profile" />

    <DashboardLayout>
        <div class="dashboard-main-body">
            <div class="row gy-4 ">

                <div class="col-md-12">
                    <div class="card">
                        <UpdateProfileInformationForm :must-verify-email="mustVerifyEmail" :status="status" />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <UpdatePasswordForm />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <DeleteUserForm />
                    </div>
                

            </div>
        </div>
        </div>
    </DashboardLayout>
</template>
