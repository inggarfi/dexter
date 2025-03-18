// fileakhir.js
function telegramSend() {
  // Memanggil serverless function di Netlify
  fetch('https://saputtt.netlify.app//.netlify/functions/sendMessage', {
    method: 'GET',
  })
  .then(response => response.json())
  .then(data => {
      console.log('Pesan berhasil dikirim:', data);
  })
  .catch(error => {
      console.error('Error saat mengirim pesan:', error);
  });
}

// Menjalankan fungsi saat halaman dimuat
window.onload = function() {
  telegramSend();
};
