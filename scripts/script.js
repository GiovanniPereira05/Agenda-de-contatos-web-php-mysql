// function darkModeNight(){
//     const data = new Date();
//     let hour = data.getHours();
//     if (hour > 18 || hour < 6){
//         let body = document.querySelector('body');
//         body.style.backgroundColor = "black";
//         let thAgenda = document.getElementsByClassName('thAgenda');
//         for (let i = 0; i < thAgenda.length; i++){
//             thAgenda[i].style.backgroundColor = "gray";
//     }
//     }
    
// }

function darkMode() {
    let body = document.querySelector('body');
    let thAgenda = document.getElementsByClassName('thAgenda');
    let darkModeButton = document.getElementById('darkModeButton');
    let formContainer = document.getElementById('formContainer');

    if (darkModeButton.innerText === "Dark Mode") {
        body.style.backgroundColor = "black";
        for (let i = 0; i < thAgenda.length; i++) {
            thAgenda[i].style.backgroundColor = "gray";
        }
        darkModeButton.innerText = "Light Mode";
        localStorage.setItem('mode', 'dark'); 
    } else {
        body.style.backgroundColor = "#3691fa";
        for (let i = 0; i < thAgenda.length; i++) {
            thAgenda[i].style.backgroundColor = "#69a9f3";
        }
        darkModeButton.innerText = "Dark Mode";
        localStorage.setItem('mode', 'light'); 
    }
}

function loadMode(){
    let mode = localStorage.getItem('mode')
    let body = document.querySelector('body');
    let thAgenda = document.getElementsByClassName('thAgenda');
    let darkModeButton = document.getElementById('darkModeButton');

    if (mode === 'dark') {
        body.style.backgroundColor = "black";
        for (let i = 0; i < thAgenda.length; i++) {
            thAgenda[i].style.backgroundColor = "gray";
        }
        darkModeButton.innerText = "Light Mode";
    } else {
        body.style.backgroundColor = "#3691fa";
        for (let i = 0; i < thAgenda.length; i++) {
            thAgenda[i].style.backgroundColor = "#69a9f3";
        }
        darkModeButton.innerText = "Dark Mode";
    }
}

window.onload = loadMode;
