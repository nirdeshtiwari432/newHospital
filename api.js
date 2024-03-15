//send api request
const URL = "https://cat-fact.herokuapp.com/facts";
const printFact = document.querySelector("#api1");
//button to send request
const button = document.querySelector("#getfact");


//asyn function to fetch data
const getFact = async ()=>{//first promise
    console.log("geting data ...")
    let response = await fetch(URL); 
    console.log(response);
    let data = await response.json();//second promise
    let x = null;
    for (let i = 0; i < 4;i ++) {
        console.log(i);  
       // printFact.innerText = data[i].text;
        x = x + data[i].text;
    }
    printFact.innerText = x;   
    
}
button.addEventListener("click",getFact);

