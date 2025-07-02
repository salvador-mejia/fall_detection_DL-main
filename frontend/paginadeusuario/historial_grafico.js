document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('alertChart').getContext('2d');
    const chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: getLast5Days(),
            datasets: [{
                label: 'Serie 1',
                data: getRandomAlerts(),
                borderColor: 'rgba(0, 204, 255, 1)',
                backgroundColor: 'rgba(0, 204, 255, 0.2)',
                fill: true,
                tension: 0.1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    max: 50
                }
            }
        }
    });
});

function getLast5Days() {
    const dates = [];
    for (let i = 4; i >= 0; i--) {
        const date = new Date();
        date.setDate(date.getDate() - i);
        dates.push(date.toLocaleDateString('es-ES', { day: 'numeric', month: 'short' }));
    }
    return dates;
}

function getRandomAlerts() {
    return Array(5).fill().map(() => Math.floor(Math.random() * 50));
}