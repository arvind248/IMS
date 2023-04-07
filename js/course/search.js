import {displayAlert} from '../data/data.js'
import { populateForm } from '../data/data.js';
import { setSearch } from '../data/data.js';
import {prevStack,nextStack} from './recordnav.js'
let name=document.getElementById("name");
export async function searchRecord(e){
    e.preventDefault();
    console.log(name.value);
    let result= await fetchRecord(name.value);
    console.log(result);
    if( result===undefined)
        return;        
    if(result.length!=0)
    {
        result = JSON.parse(result);        
        populateForm(result);
        displayAlert("Record Fetched ", "success", 3000);
        setSearch();
        prevStack.clearStack();    
        nextStack.clearStack();    
    }
    else{
        // console.log(result.length);
        displayAlert("Record Not Exist ", "danger", 3000);
        batchForm.reset();
    }

};



async function fetchRecord(id){
    // id=id.toUpperCase();
    if(id==="")
    {
        displayAlert("Enter course name ", "danger", 3000);
        name.focus();
        return ;
    }

    let response = await fetch(`./API/course/searchRecord.php?name=${id}`);
    let result = await response.text();
    return result;

  
}