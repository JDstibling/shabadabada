<template>
    <footer> 
        <div class="footer">
            <div class="text-footer">
                <p> Ce site est fait avec <i class="fas fa-heart"></i> </p> 
            </div>
            <div class="copyright-footer">
                <p>Copyright <i class="far fa-copyright"></i> 2021 - Promo Oz </p>  
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    name: 'shabadabada-footer',
    components: {

    },  
}

</script>

<style scoped lang="scss">
@import '../scss/main.scss';

footer {
    width: 100%;
    position: fixed;
    bottom: 0;
}

.footer {
    background-color: $color-dark-blue;
    color: $color-turquoise;
    text-align: center;
    width: 100%; 
    font-family: "Roboto";
}

.copyright-footer p {
    margin: unset;
}


</style>