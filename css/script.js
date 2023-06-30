// Retrieve the checkbox element from the second page


// Retrieve the buttons from the first page
const login = document.getElementById('login-btn');
const signup = document.getElementById('signup-btn');

signup.addEventListener('click', () => {
    checkbox.checked = true; // Check the checkbox
    console.log('working');
    window.location.href = 'register.php';
  });
  
  login.addEventListener('click', () => {
    checkbox.checked = false; // Uncheck the checkbox
    window.location.href = 'register.php';
  });