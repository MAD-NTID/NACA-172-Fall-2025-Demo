// Grab the Login Status Element
const loginStatus = document.querySelector("#loginStatus");

// Grab the Form first
const form = document.querySelector("#myForm");

// Add a submit event listener to capture submission event
// and then cancel it
form.addEventListener('submit', function(event){
    event.preventDefault();

    fetch('login.php', {
        method: 'post',
        headers: {'Content-Ttype': 'application/json'},
        body: JSON.stringify({
            username: document.querySelector("#username").value,
            password: document.querySelector("#password").value
        })
    })
    // Get the Promised Response and convert to JS Real Object
    .then(response => response.json())
    .then(data => {
        // Process the login on client side
        // After successfully login in, we display the User is Logged in Message
        console.log(data);
        if(data['user'] != null) {
            loginStatus.classList.toggle('hidden');
        }
        else {
            alert('Invalid Login. Try again');
        }
    })
    .catch(error => {
        console.log(error);
    });
});