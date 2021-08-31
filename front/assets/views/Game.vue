<template>



    <div class="game">
        <h1>Blind-test</h1>
            <h2>category selon l'id</h2>


                <div class="question">

                    <div>
                        <audio controls :src="source0"></audio>
                        <audio controls :src="source1"></audio>
                        <audio controls :src="source2"></audio>
                        <audio controls :src="source3"></audio>
                        <audio controls :src="source4"></audio>
                        <audio controls :src="source5"></audio>
                        <audio controls :src="source6"></audio>
                        <audio controls :src="source7"></audio>
                        <audio controls :src="source8"></audio>
                        <audio controls :src="source9"></audio>

                    </div>

                    <div>
                        <v-progress-circular
                            :rotate="90"
                            :size="100"
                            :width="15"
                            :value="value"
                            color="red"
                        >
                        {{ value }}
                        </v-progress-circular>
                    </div>


                    <div class="answer">
                        <!--hello world//-->
                        <input name="answer" placeholder="Votre réponse" type="text"/>
                        <!--
                        <div class="input-response">   
                            <v-container>      
                                <v-text-field class= "input" type="texte" id="response" name="response" v-model="response"  placeholder="Tapez le titre et/ou l'artiste " single-line outlined></v-text-field>          
                            </v-container>
                        </div>
                        //-->
                    </div>
                </div>



            <div style="text-align: center">
                <v-btn class="white--text" elevation="2">Start</v-btn>
            </div>
    </div> <!--end of div game-->
</template>


<script>
import axios from 'axios';
export default {
    name: "shabadabada-game",
    components: {

    },

    data() {
        return {
            response: '',
            interval: {},
            value: 0,


            currentQuestion: 0,


            playlist: null,
            source0: '',
            source1: '',
            source2: '',
            source3: '',
            source4: '',
            source5: '',
            source6: '',
            source7: '',
            source8: '',
            source9: '',

        }
    },
    beforeDestroy () {
      clearInterval(this.interval)
    },

    created() {
        // AMANDINE travailler ici
        // il faut appeller le endpoint qui renvoie la playlist à deviner (ici on appelle juste le endpoint qui renvoit les morceaux)
        axios.get('http://localhost/apo-Shabadabada/public/wp-json/wp/v2/music')
        .then ((response) => {

            this.playlist = response.data;
            this.source = response.data[0].meta['sound-excerpt'][0];
            console.log(this.playlist);


            // boucler sur la liste de musiques récupérées
            let i = 0;
            for(let music of this.playlist) {
                let key = 'source' + i;
                console.log(music);

                this[key] = music.meta['sound-excerpt'][0]
                i++;
            }

        });
    },
    // mounted () {
    //   this.interval = setInterval(() => {
    //     if (this.value === 100) {
    //       return (this.value = 0)
    //     }
    //     this.value += 10
    //   }, 1000)
    // },
}

</script>


<style scoped lang="scss">
@import '../scss/main.scss';


audio  {
    //display: none;
}    

.game  {
    padding: 1rem;
    box-sizing: border-box;
}


button {
    background-color: #faf  !important;
}


.question {
    display: flex;
    align-items: center;
    padding: 1rem;
    .answer {
        flex-grow: 1;
        input[type='text'] {
            margin-left: 2rem;
            border: solid 1px black;
            background-color: white;
            border-radius: 1rem;
            padding: 0.5rem 1rem;
            width: calc(100% - 2rem);
        }
    }
}    

h1 {
    font-family: "Kanit";
    text-align: center;
    color: $color-turquoise;  
}

h2 {
    font-family: "Kanit";
    text-align: center;
    color: $color-turquoise;  
    margin-bottom: 20px;
}

 @include screen-small{


.v-progress-circular{
    text-align: center;
}

// ========= INPUT ========== 
 
.container {
    width: 70%;
    padding: 12px;
    margin-right: auto;
    margin-left: auto;
}


.theme--light.v-messages {
    all: unset;
}

.v-messages {
    flex: 1 1 auto;
    font-size: 12px;
    min-height: 14px;
    min-width: 1px;
    position: relative;
}

.v-messages__wrapper {
    all: unset;
    
}

.v-text-field.v-text-field--enclosed .v-text-field__details {
    all: unset; 
}

.v-text-field  .v-input__control .v-input__slot .v-text-field__slot {
    all: unset; 
} 

.v-text-field__details {
    all: unset;
}


// ========= BUTTON ========== 
.theme--light.v-btn.v-btn--has-bg {
    background-color: $color-pink-f0f;
}

.v-btn {
   text-transform: capitalize;
   margin-bottom: $spacing-simple;
}

.v-btn__content {
    color: white;
    display: flex;
    flex: 1 0 auto;
    justify-content: inherit;
    line-height: normal;
    position: relative;
    transition: inherit;
    transition-property: opacity;
}
 }

 .v-application {
    all: unset; 
    font-family: "Roboto", sans-serif;
    line-height: 1.5;
}

</style>