document.addEventListener("DOMContentLoaded", function () {

    fetch("../JSON/Information.json") /*This gets the json file*/
    .then(response => response.json()) /*This is parsing the json file*/
    

    .then (console.log(data))/*This stores the data and displays it in the console*/
    

});