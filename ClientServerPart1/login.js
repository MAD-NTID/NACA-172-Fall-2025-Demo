// Grab the Login Status Element
const loginStatus = document.querySelector("#loginStatus");
const logoutButton = document.querySelector("#logoutButton");

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
        if(data['user'] != null) {
            toggleLoginStatus();
        }
        else {
            alert('Invalid Login. Try again');
        }
    })
    .catch(error => {
        console.log(error);
    });
});

// Add event listener to Logout Button
logoutButton.addEventListener('click', function() {
    fetch('logout.php', {
        method: 'post',
        headers: {'Content-Type': 'application/json'}
    })
    .then(response => {
        if (!response.ok) {
            throw new Error("Logout Failed");
        }

        return response.json();
    })
    .then(data => {
        // Toggle the Login Status
        toggleLoginStatus();
        alert(data['message']);
    })
    .catch(error => {
        console.log(error);
    });
});

// Function to toggle login status visibility
function toggleLoginStatus() {
    loginStatus.classList.toggle('hidden');
    form.classList.toggle('hidden');
}