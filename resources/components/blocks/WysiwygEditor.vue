<template>
    <div class="content-editable" id="wysiwyg-content">
        <slot></slot>
        <div v-html="content"></div>
    </div>
</template>

<script>
export default {
    name: "wysiwyg-editor",
    props: ['content_id'],
    data(){
        return {
        }
    },
    mounted(){
        $('#wysiwyg-content').html(this.content);
    },
    computed:{
        content(){
            return this.$slots.default[0].text;
        }
    },
    methods: {
        getContent(){

        }
    }
}
</script>

<style>

</style>
