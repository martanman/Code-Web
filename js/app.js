function registerSubmit(){
    var x = document.forms["sign-up"]["email"].value;
    if (x == null || x == " "){
        alert("The are 'Email' must be filled out");
        return false;
    }
}