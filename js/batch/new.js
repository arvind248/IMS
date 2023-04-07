import {displayAlert} from '../data/data.js'
const saveBtn=document.querySelector(".save-btn");
const newBtn=document.querySelector(".new-btn");

 export default async function newRecord(e){
    e.preventDefault();
    batchForm.reset();

    
//testting form data    
    console.log("hello");
    // // let empData= Object.fromEntries(new FormData(batchForm).entries())
    // let batchData =new FormData(batchForm)
    // for (var key of batchData.keys()) {
    //     console.log(key);
    //  }

    let response = await fetch('./API/batch/fetchid.php');
    let result = await response.json();    
    console.log(result);
    let batchid=document.getElementById("batchid");
    batchid.value=result;
    batchid.ReadOnly=true;
    newBtn.classList.toggle("hide-btn");
    saveBtn.classList.toggle("hide-btn");
    displayAlert("Batch id: "+result, "success", 3000);
    batchid.focus();
    saveBtn.addEventListener('click',save)

}

async function save(e){
    let batchData= new FormData(batchForm)    
    // console.log(batchData);
    let response = await fetch('./API/batch/newRecord.php', {
      method: 'POST',
      body: batchData
    });
    
    let result = await response.text();
    console.log(result);
    if(result.search("successfully")>=0)
        displayAlert("Record Added Successfully", "success", 2000);
    else
        displayAlert("book id already Exist ", "danger", 2000);
    newBtn.classList.toggle("hide-btn");
    saveBtn.classList.toggle("hide-btn"); 
    batchForm.reset();
    
}


