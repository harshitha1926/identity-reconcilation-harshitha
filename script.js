// script.js
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;

    // Sending the data to the server using Fetch API
    fetch('submit.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'name=' + encodeURIComponent(name) + '&email=' + encodeURIComponent(email)
    })
    .then(response => response.text())
    .then(data => {
        alert(data); // Show the response from the server
    })
    .catch(error => console.error('Error:', error));
});
