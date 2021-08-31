<template>
    <div class="cardCategory">
        <a :href="link">
            <div class="icon">
                <img :src="icon" alt="">
            </div>
            <div class="name">
                <span>{{category}}</span>
            </div>
        </a>     
    </div>
    
</template>
<script>

export default {
    name: "shabadabada-category",
    props: {
        category: {
            type: String,
            default: 'category'
        },
        icon : {
            type: String,
            default: require('../images/playIcone.png')
        },
        link: {
            type: String,
            default: 'http://localhost:1234/categories/1'
        },
    },
      
    }


</script>

<style scoped lang="scss">
    @import '../scss/main.scss';
        a{
        text-decoration: none;
    }
    .cardCategory{
        display: flex;
        justify-content :center;
        background-color: $color-pink-f0f;
        border-radius: 15%;
        padding : 0rem;
        width: 7rem;
        height: 7rem;
    
        
        .icon{
            display: flex;
            background-color: white;
            justify-content :center;
            align-items: center;
            border-radius: 50%;
            margin-top: 0.3rem;
            padding: 2.5rem;
            width: 5em;
            height: 4.5em;
                img{
                    width: 5rem;
                    height: 4rem
                }
            }
            }
    .name{
        display : flex;
        margin: 0rem;
        font-size: 1em;
            
        span{
            min-width: 100%;
            color: white;
            text-align: center;
            }
        }
    .icon :hover{
        transform: rotateZ(10deg);
        box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
    }
</style>