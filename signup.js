function validateForm(event) {
  event.preventDefault();

  const username = document.getElementById('username').value;
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;
  const confirmPassword = document.getElementById('confirm-password').value;

  const errorMessage = document.getElementById('error-message');


  if (!username || !email || !password || !confirmPassword) {
      errorMessage.textContent = 'All fields are required.';
      return;
  }


  if (password !== confirmPassword) {
      errorMessage.textContent = 'Passwords do not match.';
      return;
  }

 
  errorMessage.textContent = 'Sign-up successful!';


  document.getElementById('username').value = '';
  document.getElementById('email').value = '';
  
  document.getElementById('password').value = '';
  document.getElementById('confirm-password').value = '';
}
