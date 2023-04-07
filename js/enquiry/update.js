import {displayAlert, unsetSearch,isSearch} from '../data/data.js'

export default async function updateRecord(e){
    let enquiryid=document.getElementById("enquiryid");
    e.preventDefault();    
    if(enquiryid.value==="")
    {
        displayAlert("No Record To Update ", "danger", 3000);
        enquiryForm.reset();         
        return;
    }

    if(isSearch==false)
    {
        displayAlert("Search your Record ", "danger", 3000);
        let r=enquiryid.value;
        enquiryForm.reset(); 
        enquiryid.value=r;
        return;
    }
    
    let enData= new FormData(enquiryForm);
    console.log(enquiryid.value);
    let response = await fetch('./API/enquiry/updateRecord.php', {
        method: 'POST',
      body: enData
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
    enquiryForm.reset();

}
