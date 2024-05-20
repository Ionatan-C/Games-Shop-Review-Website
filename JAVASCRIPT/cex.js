document.addEventListener("DOMContentLoaded", function () {

var btn = document.querySelector("#btn") /*This gets the button from html that uses that id and assigns it to a variable*/
var info_div = document.querySelector("#info-box") /*This gets the div from html that uses that id and assigns it to a variable*/

btn.addEventListener("click", function() {/*This adds an event when the button is clicked*/

    fetch("../JSON/Information.json") /*This gets the json file*/
    .then(response => response.json()) /*This is parsing the json file*/

    .then(data => { /*This runs the code bellow*/
        
        console.log(data[1]) /*This calls the data from the json file and selects a certain bit of it / a certain data from the array*/
        document.querySelector("#info-txt").innerText = data[1].city /*This calls the bit of information from the json data*/
        document.querySelector("#info-txt1").innerText = data[1].location /*This calls the bit of information from the json data*/

        info_div.style.display = "block";/*This adds the attribute of display: block on a div with that id*/

    })

});

});