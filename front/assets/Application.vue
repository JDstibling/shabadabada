<template>
    <!-- IMPORTANT  to use vuetify, the application must be encapsuled in a v-app balise //-->
    <v-app>
        <main>
    
            <shabadabada-header></shabadabada-header>

            <section class="background">
                <router-view></router-view>
                
            </section>
            
            <shabadabada-footer></shabadabada-footer>

        </main>
    </v-app>
</template>


<script>

//=========== import services =============


//=========== import components =============
import Header from './components/Header';
import Footer from './components/Footer';


// =========== import views =============
import CategoriesList from './views/CategoriesList';
import Error404 from './views/Error404';
import Game from './views/Game';
import Home from './views/Home';
import Team from './views/Team';
import Carrousel from './views/Carrousel';



export default {
    name: "application",
    components: {
        //'tagName': componentClasName, 
        'shabadabada-header': Header,
        'shabadabada-footer': Footer,
        //view list
        'shabadabada-category': CategoriesList,
        'shabadabada-error404': Error404,
        'shabadabada-game': Game,
        'shabadabada-home': Home,
        'shabadabada-team': Team,
        'shabadabada-carrousel': Carrousel,

    },

    methods: {

    }
};

</script>

<style scoped lang="scss">
@import './scss/main.scss';

.background {
    margin: 0 auto;
    background-image: url("./images/background.jpg");
    background-size: cover;
    background-attachment: fixed;
    width: 100%;
    //height: 100%;
    //padding-top: 50px;
    //align-self: center;
}

main {
    height: 100%;
    display: flex;
    flex-wrap: wrap;
    align-content: space-between;
    background-image: url("./images/background.jpg");
    background-size: cover;
    background-attachment: fixed;
    //padding: 100px 0;
    padding-top: 90px;
}


</style>