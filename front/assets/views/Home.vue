<template>
    <div class="home">
        <div v-on:click ="scrool" class="home__catchline">
            <p class="word1">wanna</p>
            <p class="word2">have</p>
            <p class="word3">fun ?</p>
        </div>

        <div class="home__principal">
            <div class="home__introduction">
                <h1> Bienvenue sur Shabadabada</h1>
                <h2> Simply the best blindtest musical pour voir la vie en rose</h2>
            </div>
            <div class="home__explanation">
                <h3>Comment ça marche ?</h3>
            </div>
            <div class="home__explanation">
                <ol>
                    <li class="li-border1"><div class="style">1</div><p>Choisis la catégorie de ton blindtest</p></li>
                </ol>   
                <ol>
                    <li class="li-border2"><div class="style">2</div><p>Trouve l'artiste et le titre des chansons qui passent en 30 secondes</p></li>
                </ol>
                <ol> 
                    <li class="li-border3"><div class="style">3</div><p>Ecris ta réponse le plus vite possible et appuie sur entrée. Sois le plus rapide pour marquer le plus de points !</p></li>
                </ol>
            </div>
            <v-btn 
            class="white--text" 
            elevation="3" 
            relatif 
            left :style="{left: '45%', top: '75%'}"
            >Jouer
            </v-btn>
        </div>
    </div>
</template>


<script>

export default {
    name: "shabadabada-home",
    components: {

    },
    methods: {
        scrool: function (event){
            alert("hihi");
            // voir ici pour ajouter par exemple un scrool vers le bas au clic
        }
    }
}

</script>


<style scoped lang="scss">
@import '../scss/main.scss';

.home__catchline {
    color: $color-pink-f0f;
    font-family: "Lunch";
    padding-bottom : $spacing-large;
    padding-left: $spacing-simple;
    text-align: center;
    height: 100vh;

}

.home__introduction{
    color: $color-turquoise;
    text-align: center;
    margin-bottom: $spacing-double;
    margin-top: $spacing-medium;
         
}

.home__explanation{
    display : flex;
    flex-direction: column;
    color: white;
    max-width: 100%;

    ul{
        list-style-type: none;
        padding-left: 2rem;
        list-style-type: none;
        max-width: 32rem;
        padding-left: 0.2rem;
    }
    .style{
        display: inline-block;
        height: 28px;
        background-color: $color-yellow;
        border-radius: 50%;
        color : white;
        font-weight: bold;
        font-size: 1rem;
        padding: 0.2rem 0.5rem;
    }
    p{
        display: inline;
        margin-left: $spacing-simple;
        max-width: 10%;
    }

    h3{
        width: 100%;
        padding-left: 4rem;
        margin-bottom: $spacing-double;
        color : $color-yellow;
        font-weight: bolder;
        text-decoration: underline;

    }
    
}

h1 {
    color: $color-turquoise;
    font-size: 2rem;
    font-weight: bold;
    
}

.word1 {
    display : inline-block;
    font-size: 2rem;
    font-weight: bold;
    padding-right: 10rem;
    padding-top: 5rem;
    text-transform: uppercase;
    letter-spacing: .3rem;
}

.word2 {
    //display : inline-block;
    font-size: 2rem;
    font-weight: bold;
    //padding-left: 25rem;
    padding-top: 5rem;       
    text-transform: uppercase;
    letter-spacing: .3rem;
   
}

.word3 {
    display : inline-block;
    font-size: 2rem;
    font-weight: bold;
    padding-left: 15rem;
    padding-top: 5rem;           
    text-transform: uppercase;
    letter-spacing: .3rem;
}

li {
    padding-bottom: $spacing-double;
    margin-left: $spacing-simple;
    margin-right: $spacing-double;
    width: 9rem;
}

.theme--light.v-btn.v-btn--has-bg {
    background-color: $color-pink-f0f;
}


.v-btn {
    display : fixed;
    text-transform: capitalize;
    margin-bottom: $spacing-simple;
}

.v-btn__content {
    color: white;
    justify-content: inherit;
    line-height: normal;
    transition: inherit;
    transition-property: opacity;
}

@include screen-small{
    li {
    width: 30rem;
}
}


@include screen-medium{
    .home__explanation{
    display : flex;
    flex-direction: row;
}
    p{
        padding : 0;
        margin : 0;
    }
    li {
    width: 100%;
    height: 5rem;
    padding : 0;
    margin-bottom : 3rem;
}
   
    .li-border1{
        border-right: solid $color-yellow;
    }

    .li-border2{
        border-right: solid $color-yellow;
    }

}

@include screen-large{
    li {
    //width: 12rem;
}
.li-border{
        border-right: solid $color-yellow;
    }
}
    
</style>