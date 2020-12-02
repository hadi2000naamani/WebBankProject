function createRow(number, date, name, time) {
    var tableRow = document.createElement("tr");
    var tableName = document.createElement("td");
    var tableDate = document.createElement("td");
    var tableTime = document.createElement("td");
    var tableApproveButton = document.createElement("button");
    var tableDeleteButton = document.createElement("button");
    var tableButtonContainer = document.createElement("td");
 
    tableName.innerHTML = name;
    tableDate.innerHTML = date;
    tableTime.innerHTML = time;

    tableRow.append(tableName, tableDate, tableTime);

    tableApproveButton.className = "btn btn-success";
    tableApproveButton.addEventListener("click", function(){
    onClickApproveMeeting(tableRow, tableRow.rowIndex -1);
    }, false);


    tableDeleteButton.className = "btn btn-danger";
    tableDeleteButton.style = "margin-left: 5px";
    tableDeleteButton.addEventListener("click", function(){
    onClickDeleteMeeting(tableRow, tableRow.rowIndex -1);
    }, false);


    tableApproveButton.innerHTML = "Approve";
    tableDeleteButton.innerHTML = "Delete";

    tableButtonContainer.append(tableApproveButton, tableDeleteButton);
    tableRow.append(tableButtonContainer);

    var tableBody = document.getElementById("tableBody");
    tableBody.append(tableRow);

    
}


if (localStorage.getItem("userSchedule") !== null) {

    var scheduleArray = localStorage.getItem("userSchedule");
    console.log("Howdy to you Too");
    scheduleArray = JSON.parse(scheduleArray);
    console.log(scheduleArray);

    for(var i = 0; i < scheduleArray.length; i++ ) {
        createRow(i, scheduleArray[i].object_Date, scheduleArray[i].object_Name, scheduleArray[i].object_Time);

    }

}


function onClickDeleteMeeting(row, rowNumber) {
    

        if (localStorage.getItem("userSchedule") !== null) {
        
        var newData = [];
        var scheduleArray = localStorage.getItem("userSchedule");
        console.log("Howdy to you Too")

        scheduleArray = JSON.parse(scheduleArray);

        //Copy all elements of array A to Array B, but when we reach i === rownNumber (Item to delete), don't copy to Array B, and then overwrite Array A with Array B.
        //We use push, to fix the index numbers after the delete. 
        for(var i = 0; i < scheduleArray.length; i++) {
            if (i === rowNumber){
                
                console.log("deleted: " + JSON.stringify(scheduleArray[i]));
                continue;
                //continue, skips pushing the array element i === rowNumber
            }

            newData.push(scheduleArray[i]);
        }

    

        localStorage.setItem("userSchedule", JSON.stringify(newData));



    }


    var tableBody1 = document.getElementById("tableBody");
    tableBody1.removeChild(row);

}


function onClickApproveMeeting(row, rowNumber) {
    



    var approvedArray = [];
    var approvedSchedule = localStorage.getItem("userSchedule");
    var data = JSON.parse(approvedSchedule);

    //took userschedule table as well
    //applied same push as the meetings Page

if (localStorage.getItem("approvedSchedule") !== null) {

    //if there is already data in approved schedule, get data, so we can push to it

    approvedArray = localStorage.getItem("approvedSchedule");
    console.log("Howdy to you Too")

    approvedArray = JSON.parse(approvedArray);

}


    //add object name/date/time through push
    approvedArray.push({ 
        object_Name: data[rowNumber].object_Name,
        object_Date: data[rowNumber].object_Date, 
        object_Time: data[rowNumber].object_Time
    });



  localStorage.setItem("approvedSchedule", JSON.stringify(approvedArray));


    //reset approved schedule as approved array.


    onClickDeleteMeeting(row, rowNumber);
  
    //Delete meeting from the first table after approving

    approvedArray = localStorage.getItem("approvedSchedule")
    console.log(approvedArray);

    addApprovedTable(data[rowNumber].object_Date, data[rowNumber].object_Name, data[rowNumber].object_Time);

    
}


function addApprovedTable(date, name, time) {
    
    var tableRow = document.createElement("tr");
    var tableName = document.createElement("td");
    var tableDate = document.createElement("td");
    var tableTime = document.createElement("td");


    tableName.innerHTML = name;
    tableDate.innerHTML = date;
    tableTime.innerHTML = time;

    tableRow.append(tableName, tableDate, tableTime);
    var tableBody = document.getElementById("approvedBody");
    tableBody.append(tableRow);


}





if (localStorage.getItem("approvedSchedule") !== null) {

    var scheduleArray = localStorage.getItem("approvedSchedule");
    console.log("Howdy to you Too");
    scheduleArray = JSON.parse(scheduleArray);
    console.log(scheduleArray);

    for(var i = 0; i < scheduleArray.length; i++ ) {
        addApprovedTable(scheduleArray[i].object_Date, scheduleArray[i].object_Name, scheduleArray[i].object_Time);

    }

}