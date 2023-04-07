import {displayAlert} from '../data/data.js'
import { populateForm } from '../data/data.js';
import { setSearch } from '../data/data.js';
import {prevStack,nextStack} from './recordnav.js'
let batchid=document.getElementById("batchid");
export async function searchRecord(e){
    e.preventDefault();
    console.log(batchid.value);
    let result= await fetchRecord(batchid.value);
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
    
    if(id==="")
    {
        displayAlert("Enter batch ID ", "danger", 3000);
        batchid.focus();
        return ;
    }

    let response = await fetch(`./API/batch/searchRecord.php?batchid=${id}`);
    let result = await response.text();
    return result;

  
}