<template>
    <div class="d-flex">
        <i class="fas fa-star" v-for="star in fullStars" :key="'full' + star"></i>
        <i class="fas fa-star-half-alt" v-if="halfStar"></i>
        <i class="far fa-star" v-for="star in emptyStars" :key="'empty' + star"></i>
    </div>
</template>

<script>
export default {
    props: {
        rating: Number
    },

    computed: {
        halfStar() {
            const fraction = Math.round( (this.rating - Math.floor(this.rating)) * 100 );
            // console.log(fraction);

            return fraction > 0 && fraction < 50;
        },

        fullStars() {
            return Math.round(this.rating);
        },

        emptyStars() {
            // if rating would be 1.9, ceil(1.9) = 2, 5 - 2 = 3, render 3 empty stars
            return 5 - Math.ceil(this.rating);
        }
    }

    // created() {
    //     const numbers = [0.9, 4.0, 4.4, 4.5, 4.6, 4.9];
    //
    //     numbers.forEach(n => {
    //         console.log(`Round for ${n} is ${Math.round(n)}`);
    //         console.log(`Floor for ${n} is ${Math.floor(n)}`);
    //         console.log(`Ceil for ${n} is ${Math.ceil(n)}`);
    //         console.log('====================================')
    //     });
    // }
}
</script>

<style scoped>

</style>
