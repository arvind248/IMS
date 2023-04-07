import {displayAlert} from '../data/data.js'
import { populateForm } from '../data/data.js';
import { setSearch } from '../data/data.js';
import {prevStack,nextStack} from './recordnav.js'
let empid=document.getElementById("empid");
export async function searchRecord(e){
    e.preventDefault();
    console.log(empid.value );
    let result= await fetchRecord(empid.value);
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
        empForm.reset();
    }

};



async function fetchRecord(id){
    
    if(id==="")
    {
        displayAlert("Enter Employee ID ", "danger", 3000);
        empid.focus();
        return ;
    }

    let response = await fetch(`./API/employee/searchRecord.php?empid=${id}`);
    let result = await response.text();
    return result;

  
}