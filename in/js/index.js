// Wait for the DOM to load
document.addEventListener('DOMContentLoaded', function() {
    // Get the login form elements
    const usernameInput = document.querySelector('input[name="uname"]');
    const passwordInput = document.querySelector('input[name="psw"]');
    const loginButton = document.querySelector('button[type="submit"]');
    const cancelButton = document.querySelector('.cancelbtn');
  
    // Add event listener for the login button
    loginButton.addEventListener('click', function(event) {
      event.preventDefault(); // Prevent form submission
  
      const username = usernameInput.value;
      const password = passwordInput.value;
  
      // Perform validation (replace with your own logic)
      if (username === 'admin' && password === 'password') {
        alert('Login successful');
        // Redirect to another page
        window.location.href = 'dashboard.html';
      } else {
        alert('Invalid username or password');
      }
    });
  
    // Add event listener for the cancel button
    cancelButton.addEventListener('click', function() {
      // Clear input fields
      usernameInput.value = '';
      passwordInput.value = '';
    });
  });