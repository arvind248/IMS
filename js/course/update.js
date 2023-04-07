import {displayAlert, unsetSearch,isSearch} from '../data/data.js'

export default async function updateRecord(e){
    let name=document.getElementById("name");
    e.preventDefault();    
    if(name.value==="")
    {
        displayAlert("No Record To Update ", "danger", 3000);
        courseForm.reset();         
        return;
    }

    if(isSearch==false)
    {
        displayAlert("Search your Record ", "danger", 3000);
        let r=name.value;
        courseForm.reset(); 
        name.value=r;
        return;
    }
    
    let courseData= new FormData(courseForm);
    console.log(name.value);
    let response = await fetch('./API/course/updateRecord.php', {
        method: 'POST',
        body: courseData
    });
    
    let result = await response.text();
    console.log(result);
    if(result==='Record updated Successfully.')
    {
        displayAlert(result, "success", 3000);
        unsetSearch();

    }
    else
    {
        displayAlert(result, "danger", 3000);
    }
    courseForm.reset();

}
