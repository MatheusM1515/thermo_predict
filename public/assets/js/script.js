function toggleMenu() {
    const menu = document.getElementById("dropdownProjeto");
    menu.classList.toggle("open");
}

// Fecha dropdown ao clicar fora

window.addEventListener("click", function (e) {
    const menu = document.getElementById("dropdownProjeto");
    if (!e.target.closest(".menu-projeto")) {
        menu.classList.remove("open");
    }
});

// SIMULAÇÃO DE DADOS

let temperatura = 5;
let portaAberta = false;

function atualizarSistema() {

    // varia temperatura
    temperatura += (Math.random() - 0.5) * 2;

    // simula porta abrindo
    if (Math.random() < 0.2) {
        portaAberta = !portaAberta;
    }

    document.getElementById("temp").innerText = temperatura.toFixed(1) + "°C";
    document.getElementById("porta").innerText = portaAberta ? "Aberta" : "Fechada";

    // STATUS
    let statusEl = document.getElementById("status");

    if (temperatura > 8 || temperatura < 2) {
        statusEl.innerText = "Crítico";
        statusEl.className = "status critico";
    } else if (temperatura > 6 || temperatura < 3) {
        statusEl.innerText = "Atenção";
        statusEl.className = "status atencao";
    } else {
        statusEl.innerText = "Normal";
        statusEl.className = "status normal";
    }

    // EVENTOS
    if (portaAberta) {
        let lista = document.getElementById("eventos");
        let item = document.createElement("li");
        item.innerText = "Porta aberta detectada!";
        lista.prepend(item);
    }

    atualizarGrafico(temperatura);
}

setInterval(atualizarSistema, 2000);

// GRÁFICO
const ctx = document.getElementById('grafico').getContext('2d');

let dados = [];
let labels = [];

const grafico = new Chart(ctx, {
    type: 'line',
    data: {
        labels: labels,
        datasets: [{
            label: 'Temperatura (°C)',
            data: dados,
            borderColor: '#2E86DE',
            fill: false
        }]
    }
});

function atualizarGrafico(temp) {
    if (dados.length > 10) {
        dados.shift();
        labels.shift();
    }

    dados.push(temp);
    labels.push("");

    grafico.update();
}

// MENU ATIVO

const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll("nav a");

window.addEventListener("scroll", () => {
    let current = "";

    sections.forEach(section => {
        const sectionTop = section.offsetTop - 120;

        if (scrollY >= sectionTop) {
            current = section.getAttribute("id");
        }
    });

    navLinks.forEach(link => {
        link.classList.remove("active");

        if (link.getAttribute("href") === "#" + current) {
            link.classList.add("active");
        }
    });
});

// =========================
// ANIMAÇÃO SCROLL (FUNCIONAL)
// =========================

