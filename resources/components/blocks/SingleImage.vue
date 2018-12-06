<template>
    <img :src="model.file" />
</template>

<script>
export default {
    name: "singe-image",
    props: ["id", "name", "edit", "api"],
    data(){
        return {
            model: {
                id: '',
                name: '',
                edit: '',
                api: ''
            }
        }
    },
    methods: {
        
    }
}
</script>

<style>

</style>
