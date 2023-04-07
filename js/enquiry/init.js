
// const stateElem=document.getElementById("state");
// const cityElem=document.getElementById("city");

import { addStateOption } from "../data/data";

export default function init(){
   
    addStateOption();
    

}


function populateState(){
    stateElem.innerHTML=`<option  hidden selected></option>`;
    for (const key in states) {
        stateElem.innerHTML+=`<option value='${states[key]}' >${states[key]}</option>`;
    }
    stateElem.addEventListener("change",addCityOption);

}

export async function addCityOption(){

   
    let selectedState=stateElem.value;
    let response= await fetch(`./cityAPI.php?state=${selectedState}`)
    let cities=await  response.json()
    // console.log(cities);
    cityElem.innerHTML=`<option  hidden selected></option>`;
    cities.forEach(city => {
            cityElem.innerHTML+=`<option name='${city.name}'>${city.name}</option>`;        
       
        });
    
    
}


