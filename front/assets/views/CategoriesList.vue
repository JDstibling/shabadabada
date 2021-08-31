<template>
     <section >
         <h1 class="titlePage">Choisissez une catégorie</h1>
         <div class="all">
             <div class="cards">
                 <card-category><card-category>
             </div>
             <div class="cards">
                 <card-category><card-category>
             </div>
             <div class="cards">
                 <card-category><card-category>
             </div>
             <div class="cards">
                 <card-category><card-category>
             </div>
             <div class="cards">
                 <card-category><card-category>
             </div>
             <div class="cards">
                 <card-category><card-category>
             </div>
             <div class="cards">
                 <card-category><card-category>
             </div>
             <div class="cards">
                 <card-category><card-category>
             </div>
        </div>
     </section>
     
</template>
<script>
import cardCategory from "../components/cardCategory";
export default {
    name: "shabadabada-category",
    components: {
        cardCategory
    },
    props: {
    }
}

</script>

<style scoped lang="scss">
    @import '../scss/main.scss';
    section{
            display : flex;
            flex-wrap: wrap;
            justify-content: center;
            align-content: center;
            min-height: 100vh;

        }
        .all{
        display: flex;
        box-sizing: border-box;
        flex-direction: column;
        align-content: center;
        align-items: center;
        flex-wrap: wrap;
        max-width: 80%;
        max-height: 100%;
        .cards{
            width: 100%;
            //height: 100%;
            justify-content: center;
            align-content: center;
        }
    }
    
    .titlePage{
            font-size : 2rem;
            color: $color-turquoise;
            font-weight: bold;
            text-align: center;
            padding: 0rem 2rem 2rem 2rem;
            min-width: 100%;
            width: 100%;
        }
    .cards :hover{
        transition: all 1s;
        background-color : $color-pink-f0f;
    }

    @include screen-small{
        .all{
        height: 35rem;
        max-width: 80%;
        max-height: 30%;
        }
        h1{
            max-width: 80%;
            padding : 0;
            margin: 0;
        }
        .cards{
            justify-content: center;
            align-content: center;
            padding: 0.7rem 0.9rem 0.7rem 0.9rem;
        }
        } 
    
    @include screen-medium{
        .all{
        height: 35rem;
        max-width: 100%;
        max-height: 100%;
        }
        h1{
            max-width: 80%;
            padding : 0;
            margin: 0;
        }
        .cards{
            padding: 2rem 2rem 2rem 2rem;
        }
    }
    @include screen-large{
        .cards{
            padding: 3rem;
        }
        }
</style>