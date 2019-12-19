/*

function makeRequest(){
    fetch(url, {
        method: method,
        body: formData
    }).then((response) => {
        console.log(response)
        return response.json()
    }).then((result) => {
        console.log(result)
    }).catch((err) => {
        console.log("Error: ", err)
    })

}
*/


function addHoroscope() {

    document.getElementById(date)
    let datum = date.value;
    console.log(datum);

    let url = "./server/addHoroscope.php"
    let method = "POST"
    
    let formData = new FormData()  
    formData.set("date", datum)
 
    fetch(url, {
        method: method,
        body: formData
    }).then((response) => {
        console.log(response)
        return response.json()
    }).then((result) => {
        console.log(result)
        viewHoroscope()
    }).catch((err) => {
        console.log("Error: ", err)
    })
    
 
}





function updateHoroscope(){
    document.getElementById(date)
    let datum = date.value;
    console.log(datum + " updated!");

    let url = "./server/updateHoroscope.php"
    let method = "POST"
    
    let formData = new FormData()  
    formData.set("date", datum)
 
    fetch(url, {
        method: method,
        body: formData
    }).then((response) => {
        console.log(response)
        return response.json()
    }).then((result) => {
        console.log(result)
        viewHoroscope()
    }).catch((err) => {
        console.log("Error: ", err)
    })
    
}


function deleteHoroscope() {

    fetch("./server/deleteHoroscope.php", {
      method: "DELETE",
    }).then((data) => {
        return data.json()
    }).then((result) => {
        console.log(result)
        viewHoroscope();
    }).catch((err) => {
      console.error(err)
    })
  console.log("Successfully delete the saved sign")
  }




function viewHoroscope(){

    fetch("./server/viewHoroscope.php", {   
      method: "GET",
    }).then((data) => {
      return data.json()
    }).then((result) => {
        console.log(result)
        printHoroscope(result)
    }).catch((err) => {
      console.log(err)
    })
  }


function printHoroscope(sign) {
    var div = document.getElementById("showHoroscope")
    if(sign) {
        div.innerHTML = sign
    } else {
        div.innerHTML = ""
    } 
}


  //viewHoroscope();
