var swiper = new Swiper(".mySwiper", {
    effect: "cube",
    grabCursor: true,
    cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});

var canvas = document.getElementById('snowCanvas');
var snow = canvas.getContext('2d');

function resizeCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
}

resizeCanvas();

var flakes = Array.from({ length: 100 }, () => ({
    x: Math.random() * canvas.width,
    y: Math.random() * canvas.height,
    radius: Math.random() * 3 + 1,
    speed: Math.random() * 2 + 0.5
}));

function drawSnow() {
    snow.clearRect(0, 0, canvas.width, canvas.height);
    flakes.forEach(flake => {
        snow.beginPath();
        snow.arc(flake.x, flake.y, flake.radius, 0, Math.PI * 2);
        snow.fillStyle = 'white';
        snow.fill();

        flake.y += flake.speed;
        flake.x += (Math.random() - 0.5) * 0.5;

        if (flake.y > canvas.height) {
            flake.y = -flake.radius;
            flake.x = Math.random() * canvas.width;
        }
        if (flake.x > canvas.width) flake.x = 0;
        if (flake.x < 0) flake.x = canvas.width;
    });
    requestAnimationFrame(drawSnow);
}

drawSnow();

window.addEventListener('resize', () => {
    resizeCanvas();
    flakes.forEach(flake => {
        flake.y = Math.random() * canvas.height;
        flake.x = Math.random() * canvas.width;
    });
});
