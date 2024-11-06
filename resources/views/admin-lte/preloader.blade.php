<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microsoft Preloader Example</title>
    <style>
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(15px);
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: opacity 1s ease-out; /* Menambahkan transisi untuk memudar */
            opacity: 1;
        }

        .preloader.fade-out {
            opacity: 0;
            pointer-events: none; /* Menghindari interaksi dengan elemen setelah preloader hilang */
        }

        .preloader-dots {
            display: flex;
            gap: 10px;
        }

        .preloader-dots div {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: #0078d4;
            animation: bounce 1.2s infinite ease-in-out;
        }

        .preloader-dots div:nth-child(1) {
            animation-delay: -0.24s;
        }

        .preloader-dots div:nth-child(2) {
            animation-delay: -0.12s;
        }

        .preloader-dots div:nth-child(3) {
            animation-delay: 0;
        }

        @keyframes bounce {
            0%, 100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.5);
            }
        }
    </style>
</head>

<body>
    <div class="preloader" id="preloader">
        <div class="preloader-dots">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <script>
        // Tunggu hingga semua konten halaman selesai dimuat
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            preloader.classList.add('fade-out'); // Tambahkan kelas 'fade-out' untuk memudar
            setTimeout(() => {
                preloader.style.display = 'none'; // Setelah memudar, hilangkan preloader dari tampilan
            }, 1000); // Menyinkronkan dengan durasi transisi CSS (1 detik)
        });
    </script>
</body>

</html>
