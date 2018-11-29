<template>
    <div class="wysiwyg-editor">
        <div class="content">
            <wysiwyg v-model="content" />
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
            content: this.$slots.default[0].text
        }
    },
    mounted(){
        this.getContent();
    },
    methods: {
        setContent(){
            if(this.editing) return;
            $('.wysiwyg-editor>.content').html(this.content);
        },
        getContent(){
            axios.get(this.api)
                .then(res => self.content = res.data)
                .catch(err => console.log(err.response));
        },
        saveContent(){
            self = this;
            self.editing = false;
            let data = {
                id: this.id,
                name: this.name,
                value: this.content
            };
            axios.put(self.api, data)
                .then(res => self.content = res.data)
                .catch(err => console.log(err.response));
        }

    }
}
</script>

<style>
</style>
