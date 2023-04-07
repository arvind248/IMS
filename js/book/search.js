import {displayAlert,populateForm,setSearch} from '../data/data.js'

import {prevStack,nextStack} from './recordnav.js'
let bookid=document.getElementById("bookid");
export async function searchRecord(e){
    e.preventDefault();
    console.log(bookid.value);
    let result= await fetchRecord(bookid.value);
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
        empForm.reset();
    }

};



async function fetchRecord(id){
    
    if(id==="")
    {
        displayAlert("Enter Employee ID ", "danger", 3000);
        bookid.focus();
        return ;
    }

    let response = await fetch(`./API/book/searchRecord.php?bookid=${id}`);
    let result = await response.text();
    return result;

  
}