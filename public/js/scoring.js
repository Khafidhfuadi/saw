
const barWrap = document.querySelector(".bar-wrap");
const cv1 = document.createElement("canvas");

barWrap.appendChild(cv1);
const ctx1 = cv1.getContext("2d");

var backgroundC = ctx1.createLinearGradient(0, 0, 0, 200);
backgroundC.addColorStop(1, 'rgba(172, 57, 255, 0)');
backgroundC.addColorStop(0, '#AC39FF');

const barChart = new Chart(ctx1, {
    type: "bar",
    data: {
         // make label months like "Jan", "Feb" until "Dec"
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct","Nov","Dec"],
        datasets: [
            {
                label: "Your legend label",
                // 12 data random for 12 months
                data: [10, 20, 30, 40, 50, 60, 70, 80, 90, 100,90,80],
                backgroundColor: "#FFFFFF",
                // lineTension: 0.4,
                backgroundColor: [backgroundC],
                borderRadius: Number.MAX_VALUE,

            },
        ],
    },
    options: {
        responsive: true,
        tooltips: {
            enabled: false,
        },
        maintainAspectRatio: false,
        plugins: {
            legend: false, // Hide legend
        },
        // scales: {
        //     y: {
        //         display: false, // Hide Y axis labels
        //     },
        //     x: {
        //         display: false, // Hide X axis labels
        //     },
        // },
    },
});
