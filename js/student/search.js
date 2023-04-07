import {displayAlert} from '../data/data.js'
import { populateForm } from '../data/data.js';
import { setSearch } from '../data/data.js';
import {prevStack,nextStack} from './recordnav.js'
let rollno=document.getElementById("rollno");
export async function searchRecord(e){
    e.preventDefault();
    console.log(rollno.value );
    let result= await fetchRecord(rollno.value);
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
        displayAlert("Enter student ID ", "danger", 3000);
        rollno.focus();
        return ;
    }

    let response = await fetch(`./API/student/searchRecord.php?rollno=${id}`);
    let result = await response.text();
    return result;

  
}