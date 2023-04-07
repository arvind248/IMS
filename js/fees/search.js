import {displayAlert} from '../data/data.js'
import { populateForm } from '../data/data.js';
import { setSearch } from '../data/data.js';
import {prevStack,nextStack} from './recordnav.js'
let rollno=document.getElementById("rollno");
export async function searchRecord(e){
    e.preventDefault();
    console.log(rollno.value);
    let result= await fetchRecord(rollno.value);
    console.log(result);
    if( result===undefined)
        return;        
    if(result.length!=0)
    {
        result = JSON.parse(result);        
        populateForm(result);
        displayAlert("Record Fetched ", "success", 3000);
        setSearch();
        let response = await fetch(`./API/fees/fetchData.php?rollno=${rollno.value}`);
        let result2 = await response.json();
        console.log(result2);
        populateForm(result2);
        prevStack.clearStack();    
        nextStack.clearStack();    
    }
    else{
        // console.log(result.length);
        displayAlert("Record Not Exist ", "danger", 3000);
        feesForm.reset();
    }

};



async function fetchRecord(id){
    
    if(id==="")
    {
        displayAlert("Enter rollno", "danger", 3000);
        rollno.focus();
        return ;
    }

    let response = await fetch(`./API/fees/searchRecord.php?rollno=${id}`);
    let result = await response.text();
    return result;

  
}