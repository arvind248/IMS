import {addStateOption,addCourseOption, } from '../data/data.js';

// const stateElem=document.getElementById("state");
// const cityElem=document.getElementById("course");
const courseElem=document.getElementById("course");
export default async function init(){
    
    addStateOption();
   addCourseOption(courseElem);

   
}



    

    

