<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --med-primary: #214a68;
            --med-secondary: #21b6bc;
            --med-accent: #b3cd48;
            --med-light: #f8fafc;
            --med-gray: #f1f5f9;
            --med-text-dark: #334155;
            --med-text-muted: #64748b;
        }

        body {
            background-color: var(--med-light);
            color: var(--med-text-dark);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .thank-you-container {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            padding: 3rem;
            text-align: center;
            max-width: 650px;
            width: 90%;
            position: relative;
            overflow: hidden;
        }

        .thank-you-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 8px;
            background: linear-gradient(90deg, var(--med-primary), var(--med-secondary), var(--med-accent));
        }

        .success-icon {
            background-color: var(--med-accent);
            color: white;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            font-size: 3rem;
            box-shadow: 0 10px 20px rgba(179, 205, 72, 0.3);
        }

        h1 {
            color: var(--med-primary);
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        p {
            color: var(--med-text-muted);
            font-size: 1.1rem;
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .redirect-text {
            font-size: 0.95rem;
            color: var(--med-text-muted);
            font-style: italic;
        }

        .progress-container {
            width: 100%;
            background-color: var(--med-gray);
            border-radius: 50px;
            height: 8px;
            margin: 2rem 0 1rem;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            width: 0;
            background: linear-gradient(90deg, var(--med-secondary), var(--med-accent));
            border-radius: 50px;
            transition: width 0.1s linear;
        }

        .back-btn {
            background-color: var(--med-primary);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            margin-top: 1.5rem;
        }

        .back-btn:hover {
            background-color: var(--med-secondary);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(33, 182, 188, 0.3);
        }

        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            overflow: hidden;
        }

        .shape {
            position: absolute;
            opacity: 0.1;
            border-radius: 50%;
        }

        .shape-1 {
            background-color: var(--med-primary);
            width: 80px;
            height: 80px;
            top: -20px;
            left: -30px;
        }

        .shape-2 {
            background-color: var(--med-secondary);
            width: 60px;
            height: 60px;
            bottom: 30px;
            right: -20px;
        }

        .shape-3 {
            background-color: var(--med-accent);
            width: 40px;
            height: 40px;
            bottom: -10px;
            left: 30%;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }

        .success-icon {
            animation: pulse 2s infinite;
        }
    </style>
</head>
<body>
    <div class="thank-you-container">
        <div class="floating-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
        </div>
        
        <div class="success-icon">
            <i class="fas fa-check"></i>
        </div>
        
        <h1>Thank You!</h1>
        <p>Your submission has been received successfully. We appreciate your time and will get back to you as soon as possible.</p>
        
        <div class="progress-container">
            <div class="progress-bar" id="redirect-progress"></div>
        </div>
        
        <p class="redirect-text">You will be redirected to the homepage in <span id="countdown">10</span> seconds</p>
        
        <a href="index" class="btn back-btn">Go Back Now</a>
    </div>

    <script>
        // Countdown and redirect functionality
        let secondsLeft = 10;
        const countdownElement = document.getElementById('countdown');
        const progressBar = document.getElementById('redirect-progress');
        
        function updateCountdown() {
            secondsLeft--;
            countdownElement.textContent = secondsLeft;
            
            // Update progress bar
            const progressPercentage = ((10 - secondsLeft) / 10) * 100;
            progressBar.style.width = progressPercentage + '%';
            
            if (secondsLeft <= 0) {
                window.location.href = 'index';
            } else {
                setTimeout(updateCountdown, 1000);
            }
        }
        
        // Start the countdown
        setTimeout(updateCountdown, 1000);
    </script>
</body>
</html>
