// this file will allow us to interact with wp api
console.log('%c' + 'service.js loaded', 'color: #0bf; font-size: 1rem; background-color:#fff');


// import axios (js framework) to facilitate ajax use
import axios from 'axios';


export default class Service 
{
    configuration;

    constructor(configuration) {
        this.configuration = configuration;
    }

}