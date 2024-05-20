document.addEventListener("DOMContentLoaded", function () {

  const myForm = document.querySelector('#form'); /*This gets the form from the html that uses that id and assigns it to a variable*/
  const message1 = document.querySelector('#email1'); /*This gets the email input from the html that uses that id and assigns it to a variable*/
  const message2 = document.querySelector('#name1'); /*This gets the name input from the html that uses that id and assigns it to a variable*/
  const message3 = document.querySelector('#enquiry1'); /*This gets the enqueiry input from the html that uses that id and assigns it to a variable*/

  myForm.addEventListener('submit', function(event){  /*This creates a function that runs when submit button is clicked*/
    //event.preventDefault();
    
    let errorCounter = 0;
    
    message1.classList.remove('error');
    message2.classList.remove('error');
    message3.classList.remove('error');
    
    

    const nameField = document.querySelector('#name');  /*Bellow this it runs a check on whatever the user has inputted and if it meets the requirements then allow them to pass and submit*/
    if (
        nameField.value == null ||
        nameField.value.length < 5 ||
        nameField.value.length > 50
    ){
        errorCounter++;
        
        message1.innerText = "Name must be between 5-50 characters.";
        message1.classList.remove('hidden');
        message1.classList.add('error');
        message1.classList.remove('success');
        //return;
        }
    
    const emailField = document.querySelector('#email'); /*Bellow this it runs a check on whatever the user has inputted and if it meets the requirements then allow them to pass and submit*/
    if(
        
        emailField.value == null||
        emailField.value.length < 5 ||
        emailField.value.length > 30 ||
        emailField.value.match(/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/)
    ) {
        errorCounter++;
        message2.innerText = 'The Email address must be a valid email address which is at least 5 characters long and no longer than 30.';
        message2.classList.remove('hidden');
        message2.classList.add('error');
        message2.classList.remove('success');
        //return;
    }
    
    const enquiryField = document.querySelector('#enquiry'); /*Bellow this it runs a check on whatever the user has inputted and if it meets the requirements then allow them to pass and submit*/
    if (
        enquiryField.value == null ||
        enquiryField.value.length < 10 ||
        enquiryField.value.length > 500
    ) {
        errorCounter++;
        message3.innerText = 'The enquiry must have at least 10 characters and cannot be more than 500 characters long'; 
        message3.classList.remove('hidden');
        message3.classList.add('error');
        message3.classList.remove('success');
        //return;
    }

    console.log(errorCounter);

    if (errorCounter > 0)
    {
        event.preventDefault();
        return;
    }

})
    
});