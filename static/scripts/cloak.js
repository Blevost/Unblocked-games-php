function openPage() {

    var win = window.open();
    win.document.title = 'lytning'; // Set the title
    var faviconLink = win.document.createElement('link');
    faviconLink.rel = 'icon';
    faviconLink.href = '../static/images/favicon.ico'; // Set the favicon
    win.document.head.appendChild(faviconLink);
  
    var url = 'home.php';
    var iframe = win.document.createElement('iframe');
    iframe.style.position = 'fixed'; // Set position to fixed
    iframe.style.top = '0'; // Align to the top
    iframe.style.left = '0'; 
    iframe.style.width = '100vw'; // Use viewport width
    iframe.style.height = '100vh'; // Use viewport height
    iframe.style.border = 'none';
    iframe.src = url;
    win.document.body.appendChild(iframe);
  }