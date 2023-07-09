// Retrieve the checkbox element from the second page


// Retrieve the buttons from the first page
const checkbox = document.getElementById('reg-log');
const check = document.getElementById('check');

check.addEventListener('click', () => {
    checkbox.checked = true; // Check the checkbox
    // console.log('working');
    // window.location.href = 'register.php';
  });
  
  // login.addEventListener('click', () => {
  //   checkbox.checked = false; // Uncheck the checkbox
  //   window.location.href = 'register.php';
  // });