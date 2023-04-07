import {displayAlert, unsetSearch,isSearch} from '../data/data.js'

export default async function updateRecord(e){
    let empid=document.getElementById("empid");
    e.preventDefault();    
    if(empid.value==="")
    {
        displayAlert("No Record To Update ", "danger", 3000);
        empForm.reset();         
        return;
    }

    if(isSearch==false)
    {
        displayAlert("Search your Record ", "danger", 3000);
        let r=empid.value;
        empForm.reset(); 
        empid.value=r;
        return;
    }
    
    let empData= new FormData(empForm);
    console.log(empid.value);
    let response = await fetch('./API/employee/updateRecord.php', {
        method: 'POST',
      body: empData
    });
    
    let result = await response.text();
    console.log(result);
    if(result.search("successfully")>=0)
    {
        displayAlert(result, "success", 3000);
        unsetSearch();

    }
    else
    {
        displayAlert(result, "danger", 3000);
    }
    empForm.reset();

}
