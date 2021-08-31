<template>
    <header>
        <div class="main-menu">  
            <router-link :to="{name: 'home'}" class="">
                <a href="http://localhost:1234/"><img class="logo" src="../images/logo.png" /></a>
            </router-link>

            <router-link :to="{name: 'categoriesList'}" class="">
                <p class="main-menu__item">Catégories</p>
            </router-link>

            <router-link :to="{name: 'team'}" class="">
                <p class="main-menu__item">Team</p>
            </router-link>

            <!--//IMPORTANT supprimer ce lien quand notre router sera de nouveau opérationnel-->
            <router-link :to="{name: 'game'}" class="">
                <p class="main-menu__item">Game</p>
            </router-link>



        </div>
    </header>
</template>

<script>
export default {
    name: 'shabadabada-header',
    components: {

    },  
}

</script>

<style scoped lang="scss">
@import '../scss/main.scss';

header {
    width: 100%;
    position: fixed;
    top: 0;
}

.main-menu{
    background-color: $color-dark-blue;
    display: flex;
    justify-content: space-around;
}

.logo {
    padding: $spacing-simple;
}

.main-menu__item{
    padding: 1.5rem;
}

.v-application a {
    color:$color-turquoise;
    text-decoration: none;
}


</style>