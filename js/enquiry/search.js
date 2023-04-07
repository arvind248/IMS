import {displayAlert} from '../data/data.js'
import { populateForm } from '../data/data.js';
import { setSearch } from '../data/data.js';
import {prevStack,nextStack} from './recordnav.js'

// import {displayAlert} from './data.js'
// import { populateForm } from './data.js';
// import { setSearch } from './data.js';
// import {prevStack,nextStack} from './recordnav.js'
let enquiryid=document.getElementById("enquiryid");
export async function searchRecord(e){
    
    e.preventDefault();
    console.log(enquiryid.value );
    let result= await fetchRecord(enquiryid.value);
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
        enquiryForm.reset();
    }

};



async function fetchRecord(id){
    
    if(id==="")
    {
        displayAlert("Enter enquiry ID ", "danger", 3000);
        enquiryid.focus();
        return ;
    }

    let response = await fetch(`./API/enquiry/searchRecord.php?enquiryid=${id}`);
    let result = await response.text();
    return result;

  
}