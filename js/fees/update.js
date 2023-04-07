import {displayAlert, unsetSearch,isSearch} from '../data/data.js'

export default async function updateRecord(e){
    let rollno=document.getElementById("rollno");
    e.preventDefault();    
    if(rollno.value==="")
    {
        displayAlert("No Record To Update ", "danger", 3000);
        feesForm.reset();         
        return;
    }

    if(isSearch==false)
    {
        displayAlert("Search your Record ", "danger", 3000);
        let r=rollno.value;
        feesForm.reset(); 
        rollno.value=r;
        return;
    }
    
    let batchData= new FormData(feesForm);
    console.log(rollno.value);
    let response = await fetch('./API/fees/updateRecord.php', {
        method: 'POST',
        body: batchData
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
    feesForm.reset();

}
