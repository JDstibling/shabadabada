// this file will allow us to interact with wp api
console.log('%c' + 'CategoryService.js loaded', 'color: #0bf; font-size: 1rem; background-color:#fff');


// import axios (js framework) to facilitate ajax use
import axios from 'axios';


export default class CategoryService 
{
    configuration;

    constructor(configuration) {
        this.configuration = configuration;
        console.log('%c' + 'CategoryService construct', 'color: #0bf; font-size: 1rem; background-color:#fff');
        console.log(this.configuration);
    }


    getTaxonomy(name, slug) {
        return this.get(this.configuration.getURL('taxonomy') + '/' + name + '/?search=' + slug + '&_embed')
        .then(response => {
          if(response.data.length) {
            return response.data[0];
          }
          else {
            return false;
          }
        });
    }


    

}