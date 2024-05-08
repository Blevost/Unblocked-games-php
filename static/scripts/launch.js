function setStringValue(string1) {
  localStorage.setItem('link', string1); // Save to localStorage
}

function openLinkInIframe() {
  var iframe = document.querySelector('iframe');
  iframe.src = localStorage.getItem('link'); // Retrieve from localStorage
}