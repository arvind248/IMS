import {displayAlert} from '../data/data.js'
const saveBtn=document.querySelector(".save-btn");
const newBtn=document.querySelector(".new-btn");

 export default async function newRecord(e){
    e.preventDefault();
    enquiryForm.reset();
    
    // let data =new FormData(enquiryForm)
    // for (var key of data.keys()) {
    //             console.log(key);
    // }
   
    let response = await fetch('./API/enquiry/fetchid.php');
    let result = await response.text();
    console.log(result);
    let enquiryid=document.getElementById("enquiryid");
    enquiryid.value=result;
    enquiryid.ReadOnly=true;
    newBtn.classList.toggle("hide-btn");
    saveBtn.classList.toggle("hide-btn");
    displayAlert("Enquiry id : "+result, "success", 3000);
    enquiryid.focus();
    saveBtn.addEventListener('click',save)

}

async function save(e){
    let enData= new FormData(enquiryForm)
    

    // console.log(enData);
    let response = await fetch('./API/enquiry/newRecord.php', {
      method: 'POST',
      body: enData
    });
    
    let result = await response.text();
    
    if(result.search("successfully")>=0)
        displayAlert("Record Added Successfully", "success", 2000);
    else
        displayAlert("Enquiry id already Exist ", "danger", 2000);
    newBtn.classList.toggle("hide-btn");
    saveBtn.classList.toggle("hide-btn"); 
    enquiryForm.reset();
    
}


