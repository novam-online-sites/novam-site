<template>
    <div class="wysiwyg-editor">
        <div class="content">
            <wysiwyg v-model="model.value" />
            <div class="content-saver">
                <button @click.prevent="saveContent">save</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "wysiwyg-editor",
    props: ['id', 'api', 'edit', 'name'],
    data(){
        return {
            editing: this.edit || false,
            model: {
                id: this.id,
                name: this.name,
                value: this.$slots.default[0].text
            }
        }
    },
    mounted(){
        this.setContent();
    },
    methods: {
        setContent(){
            if(this.editing) return;
            $('.wysiwyg-editor>.content').html(this.value);
        },
        getContent(){
            axios.get(this.api)
                .then(res => self.model.value = res.data)
                .catch(err => console.log(err.response));
        },
        saveContent(){
            self = this;
            self.editing = false;

            axios.put(self.api, self.model)
                .then(res => self.value = res.data)
                .catch(err => console.log(err.response));
        }

    }
}
</script>

<style>
</style>
