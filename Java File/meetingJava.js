
function getMeetingData(){ 
  var name=document.getElementById('meetingName').value;
  var date=document.getElementById('meetingDate').value;
  var time=document.getElementById('meetingTime').value;

//   var scheduleObject = { 
//       object_Name: name, 
//       object_Date: date, 
//       object_Time: time
//   };

var scheduleArray = [];
if (localStorage.getItem("userSchedule") !== null) {

    scheduleArray = localStorage.getItem("userSchedule");
    console.log("Howdy to you Too")

    scheduleArray = JSON.parse(scheduleArray);

}



    scheduleArray.push({ 
        object_Name: name, 
        object_Date: date, 
        object_Time: time
    });



  localStorage.setItem("userSchedule", JSON.stringify(scheduleArray));
  
}


function loadItems(){

    //window.localStorage.clear();

    if(window.localStorage.length == 0) {
                console.log("Local storage empty");
                return; 
            }

            // counter = localStorage.getItem("counter");
        
            retrievedData = localStorage.getItem("userSchedule");
            data = JSON.parse(retrievedData)

            for (var i = 0; i < data.length; i++) {
                console.log("I retrieved: " + data[i].object_Name);
            }


            
            

            // for (var i = 0; i < data.length; i++) {
            //     var row = tableBody.insertRow();

            //     var itemId = row.insertCell(0);
            //     var drinkName = row.insertCell(1);
            //     var numOfCups = row.insertCell(2);

            //     itemId.innerHTML = data[i].itemId;
            //     drinkName.innerHTML = data[i].drink;
            //     numOfCups.innerHTML = data[i].numCups;
            // }
    }
