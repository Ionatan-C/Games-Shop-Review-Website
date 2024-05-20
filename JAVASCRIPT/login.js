document.addEventListener("DOMContentLoaded", function () {


    const btn = document.querySelector("#btn1") /*This is referencing the button*/
    const container1 = document.querySelector(".center") /*This is referencing the form*/
    

    btn.addEventListener("click", function(){ /*This adds an event when the button is clicked*/

        if(container1.style.display == "block"){ /*This says if the display is equal to block then set it to none*/
            container1.style.display = "none"
        }
        else{ /*This says if not then set it to block*/
            container1.style.display = "block"
        }

    })

    /*This does the same as above but for the second button*/
    const btn1 = document.querySelector("#btn2")
    const container2 = document.querySelector(".center1")

    btn1.addEventListener("click", function(){

        console.log("Hello world!");

        if(container2.style.display == "block"){
            container2.style.display = "none"
        }
        else{
            container2.style.display = "block"
        }
    })




});