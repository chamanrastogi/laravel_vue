<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
});
</script>

<template>
    <button
        :type="type"
        class="btn btn-danger text-sm btn-sm px-12 py-16 w-100 radius-12 my-32"
    >
        <slot />
    </button>
</template>
