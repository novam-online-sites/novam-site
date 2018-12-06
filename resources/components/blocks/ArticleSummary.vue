<template>
    <article :class="[ order? 'dark-overlay': '', 'inner-box', 'bg-img-cover']" :style="bgImage">
        <div class="content">
            <h3>{{ title }}</h3>
            <div class="text">
                <p>
                    <slot></slot>
                </p>
            </div>
            <div class="link">
                <a :href="link" class="thm-btn inverse"><i class="fa fa-caret-right text-text-thmed"></i>
                    Learn More
                </a>
            </div>
        </div>
    </article>
</template>

<script>
export default {
    name: "article-summary",
    props: [ 'title', 'odd', 'link', 'image'],
    data(){
        return {}
    },
    computed: {
        order(){
            return this.odd !== undefined && this.odd == 'true';
        },
        bgImage(){
            return this.image? 'background-image: url(' + this.image + ');': '';
        }
    }
}
</script>

<style>

</style>
