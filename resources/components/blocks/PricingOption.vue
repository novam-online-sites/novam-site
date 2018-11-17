<template>
    <div class="pricingTable">
        <div class="pricingTable-header">
            <div class="heading">
                <h3>{{ pLabel }}</h3>
            </div>
            <span class="price-value">
                <span class="currency">$</span>{{ oPrice }}<span class="mo"> {{ oPer }}</span>
            </span>
        </div>

        <div class="pricingContent">
            <slot></slot>
        </div>

        <div class="pricingTable-sign-up">
            <a :href="pLink" class="thm-btn normal-btn">sign up</a>
        </div>
    </div>
</template>

<script>
export default {
    name: "pricing-option",
    props: ['label', 'price', 'link', 'per'],
    data(){
        return {
            pLabel: this.label || '',
            pLink: this.link || '',
            oPrice: this.price || '',
            oPer: this.per || 'month'
        }
    }
}
</script>

<style>

</style>
