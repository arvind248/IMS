import {displayAlert,populateForm} from '../data/data.js'
const saveBtn=document.querySelector(".save-btn");
const newBtn=document.querySelector(".new-btn");
export default async function newRecord(e){
    e.preventDefault();
    
    
    const rollno=document.getElementById("rollno");
    console.log(rollno.value);
    if(rollno.value==='')
    {
        displayAlert("Enter roll no", "danger", 2000);
        rollno.focus();
        return;
    }
    // let feesData= Object.fromEntries(new FormData(feesForm).entries())
    // console.log(feesData);
    // feesData =new FormData(feesForm)
    // for (var key of feesData.keys()) {
    //     console.log(key);
    // }

    let response = await fetch(`./API/fees/fetchData.php?rollno=${rollno.value}`);
    let result = await response.json();
    console.log(result);
    populateForm(result);
    
    
    newBtn.classList.toggle("hide-btn");
    saveBtn.classList.toggle("hide-btn");
    
    
    saveBtn.addEventListener('click',save)

}

async function save(e){
    let feesData= new FormData(feesForm)    
    let feesObject= Object.fromEntries(feesData.entries())
    console.log(feesObject);
    // console.log(batchData);
    let response = await fetch('./API/fees/newRecord.php', {
      method: 'POST',
      body: feesData
    });
    
    let result = await response.text();
    console.log(result);
    if(result.search("successfully")>=0)
        displayAlert("Record Added Successfully", "success", 2000);
    else
        displayAlert("Record already Exist ", "danger", 2000);
    newBtn.classList.toggle("hide-btn");
    saveBtn.classList.toggle("hide-btn"); 
    feesForm.reset();
    
}


