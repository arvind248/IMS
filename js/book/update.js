import {displayAlert, unsetSearch,isSearch} from '../data/data.js'

export default async function updateRecord(e){
    let bookid=document.getElementById("bookid");
    e.preventDefault();    
    if(bookid.value==="")
    {
        displayAlert("No Record To Update ", "danger", 3000);
        bookform.reset();         
        return;
    }

    if(isSearch==false)
    {
        displayAlert("Search your Record ", "danger", 3000);
        let r=bookid.value;
        bookform.reset(); 
        bookid.value=r;
        return;
    }
    
    let bookData= new FormData(bookform);
    console.log(bookid.value);
    let response = await fetch('./API/book/updateRecord.php', {
        method: 'POST',
      body: bookData
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
    bookform.reset();

}
