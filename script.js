// Demo handlers for contact & login
function contactSubmit(e){
  e.preventDefault();
  const name = document.getElementById('cname').value;
  alert('Thank you, ' + name + '! Message received. (Demo)');
  document.getElementById('contactForm').reset();
}

function demoLogin(e){
  e && e.preventDefault();
  alert('Demo login: opening admin preview');
  window.location.href = 'dashboard.html';
}

console.log('KMU TRUST demo frontend running');
