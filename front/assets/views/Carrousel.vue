<template>

<div class="wrapper">
    <h1>Notre Dream Team</h1>
    
    <div class="container-carrousel">
        <div class="previous-button">
            <i class="fas fa-chevron-left circle">
        </div>
        <div class="images-carrousel">
            <img class="image" src="../images/amandine_picture_profile.jpg"/>
        </div>
        <div class="next-button">
            <i class="fas fa-chevron-right circle">
        </div>
    </div>
</div>

</template>

<script>

export default {
    name : "shabadabada-carrousel",
    components: {
        
    },
}
</script>

<style scoped lang="scss">
@import '../scss/main.scss';

.wrapper {
    width: 100%;
    margin: 0 auto;
}

h1 {
    color: $color-turquoise;
    font-size: 2rem;
    font-weight: bold;
    text-align: center;
    font-family: "Kanit";
    margin-bottom: $spacing-double;
}

.image {
    max-height: 50%;
    align-self: center;
}

.circle {
    border-radius: 50%;
    width: 30px;
    height: 30px;
    text-align: center;
    vertical-align: middle;
    padding-top: 6px;
    background:grey;
}

.container-carrousel {
    width: 100%;
    display: flex;
    justify-content: center;
}

.previous-button,
.next-button {
    display: flex;
    max-height: 50%;
    align-items: center;
}



.images-carrousel {
    display: flex;
}


</style>
