import {displayAlert, unsetSearch,isSearch} from '../data/data.js'

export default async function updateRecord(e){
    let batchid=document.getElementById("batchid");
    e.preventDefault();    
    if(batchid.value==="")
    {
        displayAlert("No Record To Update ", "danger", 3000);
        batchForm.reset();         
        return;
    }

    if(isSearch==false)
    {
        displayAlert("Search your Record ", "danger", 3000);
        let r=batchid.value;
        batchForm.reset(); 
        batchid.value=r;
        return;
    }
    
    let batchData= new FormData(batchForm);
    console.log(batchid.value);
    let response = await fetch('./API/batch/updateRecord.php', {
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
    batchForm.reset();

}
