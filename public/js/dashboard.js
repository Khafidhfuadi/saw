
const employeeWrap = document.querySelector(".employee-wrap");
const cv1 = document.createElement("canvas");

employeeWrap.appendChild(cv1);
const ctx1 = cv1.getContext("2d");


const employeeChart = new Chart(ctx1, {
    type: "bar",
    data: {
        labels: ["Your", "axis", "labels", "here", "1", "2", "3"],
        datasets: [
            {
                label: "Your legend label",
                data: [1, 3, 2, 4, 2, 2, 7],
                backgroundColor: "#FFFFFF",
                borderColor: "#F3695F", // Place your color here
                lineTension: 0.4,
                // backgroundColor: Utils.transparentize(red, 0.5),
                borderWidth: 2,
                borderRadius: Number.MAX_VALUE,
                borderSkipped: false,
                pointRadius: (ctx1) => {
                    // console.log(ctx1.chart.data.labels.length);
                    const pointsLength = ctx1.chart.data.labels.length - 1;
                    const pointsArray = [];

                    for (let i = 0; i <= pointsLength; i++) {
                        if (i === pointsLength) {
                            pointsArray.push(5);
                        } else {
                            pointsArray.push(0);
                        }
                    }
                    return pointsArray;
                },
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
        scales: {
            y: {
                display: false, // Hide Y axis labels
            },
            x: {
                display: false, // Hide X axis labels
            },
        },
    },
});



//   second chart

const KPIWrap = document.querySelector(".kpi-wrap");
const cv2 = document.createElement("canvas");

KPIWrap.appendChild(cv2);
const ctx2 = cv2.getContext("2d");

const KPIChart = new Chart(ctx2, {
    type: "line",
    data: {
        labels: ["Your", "axis", "labels", "here", "1", "2", "3"],
        datasets: [
            {
                label: "Your legend label",
                data: [1, 3, 2, 4, 2, 2, 7],
                backgroundColor: "#FFFFFF",
                borderColor: "#F3695F", // Place your color here
                lineTension: 0.4,
                pointRadius: (ctx2) => {
                    // console.log(ctx2.chart.data.labels.length);
                    const pointsLength = ctx2.chart.data.labels.length - 1;
                    const pointsArray = [];

                    for (let i = 0; i <= pointsLength; i++) {
                        if (i === pointsLength) {
                            pointsArray.push(5);
                        } else {
                            pointsArray.push(0);
                        }
                    }
                    return pointsArray;
                },
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
        scales: {
            y: {
                display: false, // Hide Y axis labels
            },
            x: {
                display: false, // Hide X axis labels
            },
        },
    },
});


//   thrid chart

const attitudeWrap = document.querySelector(".attitude-wrap");
const cv3 = document.createElement("canvas");

attitudeWrap.appendChild(cv3);
const ctx3 = cv3.getContext("2d");

const attitudeChart = new Chart(ctx3, {
    type: "line",
    data: {
        labels: ["Your", "axis", "labels", "here", "1", "2", "3"],
        datasets: [
            {
                label: "Your legend label",
                data: [6, 3, 4, 4, 5, 8, 7],
                borderColor: "#ac39ff", // Place your color here
                lineTension: 0.4,
                pointRadius: (ctx3) => {
                    // console.log(ctx3.chart.data.labels.length);
                    const pointsLength = ctx3.chart.data.labels.length - 1;
                    const pointsArray = [];

                    for (let i = 0; i <= pointsLength; i++) {
                        if (i === pointsLength) {
                            pointsArray.push(5);
                        } else {
                            pointsArray.push(0);
                        }
                    }
                    return pointsArray;
                },
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
        scales: {
            y: {
                display: false, // Hide Y axis labels
            },
            x: {
                display: false, // Hide X axis labels
            },
        },
    },
});

//   fourth chart

const productivityWrap = document.querySelector(".productivity-wrap");
const cv4 = document.createElement("canvas");

productivityWrap.appendChild(cv4);
const ctx4 = cv4.getContext("2d");

const productivityChart = new Chart(ctx4, {
    type: "line",
    data: {
        labels: ["Your", "axis", "labels", "here", "1", "2", "3"],
        datasets: [
            {
                label: "Your legend label",
                data: [6, 3, 4, 4, 5, 8, 7],
                borderColor: "#007aff", // Place your color here
                lineTension: 0.4,
                pointRadius: (ctx4) => {
                    // console.log(ctx4.chart.data.labels.length);
                    const pointsLength = ctx4.chart.data.labels.length - 1;
                    const pointsArray = [];

                    for (let i = 0; i <= pointsLength; i++) {
                        if (i === pointsLength) {
                            pointsArray.push(5);
                        } else {
                            pointsArray.push(0);
                        }
                    }
                    return pointsArray;
                },
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
        scales: {
            y: {
                display: false, // Hide Y axis labels
            },
            x: {
                display: false, // Hide X axis labels
            },
        },
    },
});

//   fifth chart

const disciplineWrap = document.querySelector(".discipline-wrap");
const cv5 = document.createElement("canvas");

disciplineWrap.appendChild(cv5);
const ctx5 = cv5.getContext("2d");

const disciplineChart = new Chart(ctx5, {
    type: "line",
    data: {
        labels: ["Your", "axis", "labels", "here", "1", "2", "3"],
        datasets: [
            {
                label: "Your legend label",
                data: [6, 3, 4, 4, 5, 8, 7],
                borderColor: "#55c2b9", // Place your color here
                lineTension: 0.4,
                pointRadius: (ctx5) => {
                    // console.log(ctx5.chart.data.labels.length);
                    const pointsLength = ctx5.chart.data.labels.length - 1;
                    const pointsArray = [];

                    for (let i = 0; i <= pointsLength; i++) {
                        if (i === pointsLength) {
                            pointsArray.push(5);
                        } else {
                            pointsArray.push(0);
                        }
                    }
                    return pointsArray;
                },
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
        scales: {
            y: {
                display: false, // Hide Y axis labels
            },
            x: {
                display: false, // Hide X axis labels
            },
        },
    },
});



// const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
// const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

