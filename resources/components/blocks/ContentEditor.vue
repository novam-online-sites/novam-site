<template>
    <div class="content-editor">
        <slot/>
    </div>
</template>

<script>
export default {
    name: "content-editor",
    props: ['data-id'],
    data(){
        return {}
    },
    methods: {
        showEditor(){
            alert(this.class);
        }
    }
}
</script>

<style>
    .content-editor { border: 1px solid; }
</style>
