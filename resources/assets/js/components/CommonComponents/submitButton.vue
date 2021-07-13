<template>
    <button class="btn btn-info mobile-btn d-inline d-inline-flex" @click.prevent="submit()" type="submit" :disabled="isDisabled">
        <span class="w-100">{{buttonText}}</span>
    </button>
</template>

<script>
    export default {
        props:["buttonText","isDisabled","isActiveText"],
        methods: {
            submit() {
                let instance = this;
                instance.$emit("submit");
            }
        }
    }
</script>

<style scoped>

</style>
