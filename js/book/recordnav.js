import {setSearch, populateForm,FLrecords } from '../data/data.js'

let bookid=document.getElementById("bookid");

export let nextStack={
    stack:[],
    store:async function (){
        // console.log(this.stack);
        if(this.stack.length==0){
            
            let response = await fetch(`./API/book/find.php?bookid=${bookid.value}`);            
            let result = await response.json();
            console.log(result);

            this.stack=result
        }
        console.log("nextStack:");
        console.log(this.stack)
    },
    
    getData:function(){
        // console.log("helo");
        return this.stack.shift();
    },
    setData:function(data){
        this.stack.unshift(data)
    },
    clearStack:function(){
            this.stack=[]
    }
    
}
export let prevStack={
    stack:[],
    store:async function (){
        // console.log(this.stack);
        if(this.stack.length==0){
          
            let response = await fetch(`./API/book/findprev.php?bookid=${bookid.value}`);
            let result = await response.json();
            this.stack=result
        }
        console.log("prevStack");
        console.log(this.stack);
    },
    
    getData:function(){
        // console.log("helo");
        return this.stack.pop();
    },
    setData:function(data){
        this.stack.push(data)
    },
    clearStack:function(){
        this.stack=[]
    }
}
    
    
export async function recordNavigation(e){
    let data;
    let currentStudent= Object.fromEntries( new FormData(bookform).entries())
    setSearch()
    // console.log(currentStudent);
    if(e.currentTarget.classList.contains("prev-btn"))
    {
        await prevStack.store()
        data=prevStack.getData()
        // console.log(data)
        populateForm(data);
        nextStack.setData(currentStudent)
        

    }else if(e.currentTarget.classList.contains("next-btn"))
    {
        
        await nextStack.store();
        data=nextStack.getData()
        prevStack.setData(currentStudent);
        populateForm(data);
        // console.log(data)
    }else if(e.currentTarget.classList.contains("first-btn"))
    {
        let records =await getFirstLastRecord()        
        populateForm(records[0])      
        prevStack.clearStack();    
        nextStack.clearStack();         
    }else if(e.currentTarget.classList.contains("last-btn"))
    {
        let records =await getFirstLastRecord()        
        populateForm(records[1])       
        prevStack.clearStack();    
        nextStack.clearStack();        
    }

    // if(result.length!=0)
    // {
    //     console.log(result);
        
    // }
    // else
    // {
    //     displayAlert(result, "danger", 3000);

    // }

}


async function getFirstLastRecord(){   
    let response = await fetch(`./API/book/init.php`)
    let result = await response.json();
    // console.log(result);
    return result
    // firstRecord =result[0];
    // lastRecord =result[1];
}