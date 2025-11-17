<?php
session_start();

$password = '09102025'; // Mật khẩu để truy cập

if (isset($_POST['password'])) {
    if ($_POST['password'] === $password) {
        $_SESSION['logged_in'] = true;
    } else {
        $error = 'EM KHÔNG NHỚ NGÀY BẮT ĐẦU À!!!!!!!!!!!!!!!!!!!!!!!!';
    }
}

if (!isset($_SESSION['logged_in'])) {
    // Trang đăng nhập
    ?>
    <!DOCTYPE html>
    <html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Đăng nhập</title>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                color: white;
                font-family: 'Arial', cursive;
                overflow: hidden;
            }
            body::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>') repeat;
                animation: twinkle 3s infinite;
                z-index: -1;
            }
            @keyframes twinkle {
                0%, 100% { opacity: 0.5; }
                50% { opacity: 1; }
            }
            form {
                text-align: center;
                background: rgba(255, 255, 255, 0.1);
                padding: 40px;
                border-radius: 20px;
                box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.2);
                animation: fadeIn 2s ease-in-out;
            }
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(-20px); }
                to { opacity: 1; transform: translateY(0); }
            }
            h2 {
                font-size: 28px;
                margin-bottom: 20px;
                color: #ffb3ff;
                text-shadow: 0 0 10px rgba(255, 179, 255, 0.5);
            }
            input[type="password"] {
                padding: 15px;
                font-size: 18px;
                border: none;
                border-radius: 10px;
                background: rgba(255, 255, 255, 0.2);
                color: white;
                width: 250px;
                margin-bottom: 20px;
                outline: none;
                transition: all 0.3s ease;
            }
            input[type="password"]::placeholder {
                color: rgba(255, 255, 255, 0.7);
            }
            input[type="password"]:focus {
                background: rgba(255, 255, 255, 0.3);
                box-shadow: 0 0 10px rgba(255, 179, 255, 0.5);
            }
            input[type="submit"] {
                padding: 15px 30px;
                font-size: 18px;
                background: linear-gradient(45deg, #ff66b2, #ffb3ff);
                color: white;
                border: none;
                border-radius: 10px;
                cursor: pointer;
                transition: all 0.3s ease;
                box-shadow: 0 4px 15px rgba(255, 102, 178, 0.4);
            }
            input[type="submit"]:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 20px rgba(255, 102, 178, 0.6);
            }
            .error {
                color: #ffcccc;
                margin-bottom: 10px;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
        <form method="post">
            <h2>Nhập mật khẩu để truy cập</h2>
            <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
            <input type="password" name="password" placeholder="Mật khẩu" required>
            <br><br>
            <input type="submit" value="Bắt Đầu">
        </form>
    </body>
    </html>
    <?php
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chúc mừng tình yêu</title>
    <style>
      html,
      body {
        margin: 0;
        padding: 0;
        overflow: hidden;
        background: black;
        width: 100%;
        height: 100%;
      }

      canvas {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
      }
    </style>
  </head>
  <body>
    <canvas id="countdownCanvas" style="z-index: 10"></canvas>
    <canvas id="canvas" style="z-index: 5"></canvas>

    <audio id="myAudio" autoplay loop>
      <source src="bicdausaunay.mp3" type="audio/mpeg" />
      Trình duyệt của bạn không hỗ trợ audio.
    </audio>

    <script>
      const canvas = document.getElementById("canvas");
      const ctx = canvas.getContext("2d");

      const countdownCanvas = document.getElementById("countdownCanvas");
      const countdownCtx = countdownCanvas.getContext("2d");

      let W = window.innerWidth;
      let H = window.innerHeight;
      canvas.width = countdownCanvas.width = W;
      canvas.height = countdownCanvas.height = H;

      window.addEventListener("resize", () => {
        W = canvas.width = countdownCanvas.width = window.innerWidth;
        H = canvas.height = countdownCanvas.height = window.innerHeight;
      });

      document.body.addEventListener("click", () => {
        document.getElementById("myAudio").play();
      });

      const messages = [
        "Yêu em, cô gái của anh",
        "Cảm ơn em vì đã đến bên anh ",
        "09/10/2025 - Ngày đặc biệt của chúng ta ",
        "Anh không cần gì nhiều, chỉ cần có em bên cạnh ",
        "Nếu yêu em là sai, anh chấp nhận không đúng bao giờ ",
        "Chúc bé iu luôn xinh đẹp",
        "Anh thương em nhiều lắm",
        "Gửi ngàn nụ hôn đến người con gái anh yêu 💋",
        "Tình yêu của anh dành cho em ngày càng lớn ",
        "Mãi mãi bên nhau nhé, vợ yêu của anh ",
        "Em là cả thế giới của anh",
        "Anh sẽ luôn bảo vệ và chăm sóc cho em ",
        "Cảm ơn em đã làm cho cuộc sống của anh trở nên ý nghĩa hơn ",
        "Mỗi ngày bên em đều là một ngày tuyệt vời ",
      ];

      const imagePaths = Array.from({ length: 20 }, (_, i) => `${i + 1}.jpg`);
      const loadedImages = [];

      function preloadImages(callback) {
        let loadedCount = 0;
        imagePaths.forEach((src) => {
          const img = new Image();
          img.src = src;
          img.onload = () => {
            loadedImages.push(img);
            if (++loadedCount === imagePaths.length) callback();
          };
        });
      }

      let countdownNumber = 3;
      let fragments = [];
      let countdownFinished = false;
      let isTyping = false;
      let showCountdown = true;

      function explodeNumber() {
        fragments = [];
        for (let i = 0; i < 20; i++) {
          fragments.push({
            x: W / 2,
            y: H / 2,
            vx: (Math.random() - 0.5) * 10,
            vy: (Math.random() - 0.5) * 10,
            alpha: 0.8,
            size: 4 + Math.random() * 4,
            color: "white",
          });
        }
      }

      function drawCountdown() {
        if (!showCountdown || isTyping) return;

        countdownCtx.clearRect(0, 0, W, H);
        if (countdownNumber > 0) {
          countdownCtx.fillStyle = "#ff82c2";
          countdownCtx.shadowColor = "#ffb3ff";
          countdownCtx.shadowBlur = 20;

          let mainFontSize = Math.floor(W / 9);
          countdownCtx.font = `bold ${mainFontSize}px 'Segoe Script', cursive`;
          countdownCtx.textAlign = "center";
          countdownCtx.textBaseline = "middle";
          countdownCtx.fillText(countdownNumber, W / 2, H / 2);
        }

        for (let f of fragments) {
          countdownCtx.globalAlpha = f.alpha;
          drawHeart(f.x, f.y, f.size * 2, f.alpha, countdownCtx); // ← thay bằng trái tim
          f.x += f.vx;
          f.y += f.vy;
          f.alpha -= 0.02;
        }

        countdownCtx.globalAlpha = 1;
        requestAnimationFrame(drawCountdown);
      }

      function showLoveMessage() {
        isTyping = true;
        const textLines = ["Anh yêu em", "Vợ Yêu Của LHA <3","Anh xin lỗi vì", "nhiều lần đã làm em buồn"];
        let lineIndex = 0;
        let charIndex = 0;

        countdownCtx.clearRect(0, 0, W, H);
        countdownCtx.font = "bold 42px 'Segoe Script', cursive";
        countdownCtx.fillStyle = "#ff82c2";
        countdownCtx.textAlign = "center";
        countdownCtx.textBaseline = "middle";

        function typeLetter() {
          countdownCtx.clearRect(0, 0, W, H);
          for (let i = 0; i < lineIndex; i++) {
            countdownCtx.fillText(textLines[i], W / 2, H / 2 + (i - 0.5) * 50);
          }
          const currentLine = textLines[lineIndex].substring(0, charIndex);
          countdownCtx.fillText(
            currentLine + "|",
            W / 2,
            H / 2 + (lineIndex - 0.5) * 50
          );

          if (charIndex < textLines[lineIndex].length) {
            charIndex++;
            setTimeout(typeLetter, 100);
          } else {
            lineIndex++;
            charIndex = 0;
            if (lineIndex < textLines.length) {
              setTimeout(typeLetter, 500);
            } else {
              setTimeout(() => {
                showFinalMessage();
              }, 1000);
            }
          }
        }

        typeLetter();
      }

      function showFinalMessage() {
        isTyping = true;
        const finalLines = [
          "Anh yêu em",
          "Tuy là chúng mình chưa được lâu",
          "Nhưng tình cảm của anh dành cho em",
          "Hơn tất cả mọi thứ",
          "09/10/2025"
        ];
        let lineIndex = 0;
        let charIndex = 0;

        countdownCtx.clearRect(0, 0, W, H);
        countdownCtx.font = "bold 42px 'Segoe Script', cursive";
        countdownCtx.fillStyle = "#ff82c2";
        countdownCtx.textAlign = "center";
        countdownCtx.textBaseline = "middle";

        function typeFinalLetter() {
          countdownCtx.clearRect(0, 0, W, H);
          for (let i = 0; i < lineIndex; i++) {
            countdownCtx.fillText(finalLines[i], W / 2, H / 2 + (i - 2) * 50);
          }
          const currentLine = finalLines[lineIndex].substring(0, charIndex);
          countdownCtx.fillText(
            currentLine + "|",
            W / 2,
            H / 2 + (lineIndex - 2) * 50
          );

          if (charIndex < finalLines[lineIndex].length) {
            charIndex++;
            setTimeout(typeFinalLetter, 100);
          } else {
            lineIndex++;
            charIndex = 0;
            if (lineIndex < finalLines.length) {
              setTimeout(typeFinalLetter, 500);
            } else {
              setTimeout(() => {
                countdownCtx.clearRect(0, 0, W, H);
                isTyping = false;
                countdownFinished = true;
                createFloatingImages();
                draw();
              }, 1500);
            }
          }
        }

        typeFinalLetter();
      }

      function startCountdown() {
        // Show initial message
        countdownCtx.clearRect(0, 0, W, H);
        countdownCtx.fillStyle = "#ff82c2";
        countdownCtx.shadowColor = "#ffb3ff";
        countdownCtx.shadowBlur = 20;
        countdownCtx.font = `bold ${Math.floor(W / 15)}px 'Arial', cursive`;
        countdownCtx.textAlign = "center";
        countdownCtx.textBaseline = "middle";
        countdownCtx.fillText("Nhớ Quay Ngang", W / 2, H / 2 - 100);
        countdownCtx.fillText("Màn Hình Nhaaaa", W / 2, H / 2 + 100);
        countdownCtx.fillText("Vợ Iu Củaaa Anhhhhh", W / 2, H / 2 + 300);

        setTimeout(() => {
          let interval = setInterval(() => {
            explodeNumber();
            countdownNumber--;
            if (countdownNumber < 1) {
              clearInterval(interval);
              showCountdown = false;
              setTimeout(() => {
                showLoveMessage();
              }, 1000);
            }
          }, 2000);
          drawCountdown();
        }, 3000); // Show message for 3 seconds before starting countdown
      }

      const particles = [];
      const imageObjects = [];

      function randomMessage() {
        return messages[Math.floor(Math.random() * messages.length)];
      }

      function createFloatingImages() {
        const count = 15;
        for (let i = 0; i < count; i++) {
          const img =
            loadedImages[Math.floor(Math.random() * loadedImages.length)];
          imageObjects.push({
            img: img,
            x: Math.random() * W,
            y: H + Math.random() * 200,
            size: W < 500 ? 60 : 100 + Math.random() * 50,
            speedY: 0.8 + Math.random(),
            alpha: 0.8 + Math.random() * 0.4,
          });
        }
      }

      function spawnParticle() {
        const size = Math.floor(W / 40) + Math.random() * 3;
        const columnWidth = W / 5;
        const column = Math.floor(Math.random() * 5);
        particles.push({
          x: column * columnWidth + columnWidth / 2,
          y: H + 100, // Bắt đầu từ dưới ngoài màn hình
          text: randomMessage(),
          size: size,
          speed: 2, // Tốc độ cố định để chạy đều
          alpha: 1.0,
        });
      }

      function drawHeart(x, y, size = 12, alpha = 1, context = ctx) {
        context.save();
        context.globalAlpha = alpha;
        context.translate(x, y);
        context.scale(size / 64, size / 64); // tỉ lệ chuẩn chỉnh hơn cho kích thước lớn nhỏ

        context.beginPath();
        context.moveTo(0, -20); // Đỉnh tim

        context.bezierCurveTo(25, -50, 75, -20, 0, 40); // Phần lồi bên phải
        context.bezierCurveTo(-75, -20, -25, -50, 0, -20); // Phần lồi bên trái
        context.closePath();

        context.fillStyle = "#ff66b2";
        context.fill();
        context.restore();
      }

      function draw() {
        ctx.clearRect(0, 0, W, H);
        if (!countdownFinished) return;

        if (particles.length < 20 && Math.random() < 0.02) spawnParticle();

        for (let i = particles.length - 1; i >= 0; i--) {
          const p = particles[i];
          ctx.globalAlpha = p.alpha;
          ctx.font = `${p.size}px sans-serif`;
          ctx.fillStyle = "#ffb3ff";
          ctx.fillText(p.text, p.x, p.y);

          p.y -= p.speed;
          p.alpha -= 0.0015;
          if (p.y < -200 || p.alpha <= 0) particles.splice(i, 1);
        }

        for (let imgObj of imageObjects) {
          ctx.globalAlpha = imgObj.alpha;
          ctx.drawImage(
            imgObj.img,
            imgObj.x,
            imgObj.y,
            imgObj.size,
            imgObj.size
          );
          imgObj.y -= imgObj.speedY;
          if (imgObj.y + imgObj.size < 0) {
            imgObj.y = H + Math.random() * 100;
            imgObj.x = Math.random() * W;
          }
        }

        requestAnimationFrame(draw);
      }

      preloadImages(() => {
        startCountdown();
      });
    </script>
  </body>
</html>
