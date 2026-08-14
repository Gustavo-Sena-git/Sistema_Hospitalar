const sidebar = document.querySelector(".sidebar");
const sidebarToggleBtn = document.querySelectorAll(".sidebar-toggle");
const themeToggleBtn = document.querySelector(".theme-toggle");
const themeIcon = themeToggleBtn ? themeToggleBtn.querySelector(".theme-icon") : null;
const searchForm = document.querySelector(".search-form");



const updateThemeIcon = () => {
    if (!themeIcon) return;

    const isDark = document.body.classList.contains("dark-theme");
    themeIcon.textContent = isDark ? "light_mode" : "dark_mode";
};
//Apply dark thame if saved or system prefers 
const savedTheme = localStorage.getItem("theme");
const systemPrefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
const shouldUseDarkTheme = savedTheme === "dark" || (!savedTheme && systemPrefersDark);

document.body.classList.toggle("dark-theme", shouldUseDarkTheme);
updateThemeIcon();

// Toggle sidebar collapse state on button click
sidebarToggleBtn.forEach((btn) => {
    btn.addEventListener("click", () => {
        if (!sidebar) return;

        sidebar.classList.toggle("collapsed");
        updateThemeIcon();
    });
});

if (searchForm) {
    searchForm.addEventListener("click", () => {
        if (sidebar && sidebar.classList.contains("collapsed")) {
            sidebar.classList.remove("collapsed");
            const input = searchForm.querySelector("input");
            if (input) input.focus();
        }
    });
}

if (themeToggleBtn) {
    themeToggleBtn.addEventListener("click", () => {
        const isDark = document.body.classList.toggle("dark-theme");
        localStorage.setItem("theme", isDark ? "dark" : "light");
        updateThemeIcon();
    });
}
//---dashboard---

let numeroPacientes = 42;

document.getElementById("pacientes").textContent = numeroPacientes + " cadastrados";

let numeroConsultas = 15;

document.getElementById("consultas").textContent = numeroConsultas + " agendadas";

let numeroMedicos = 10;

document.getElementById("medicos").textContent = numeroMedicos + " cadastrados";

let numeroInternacoes = 5;

document.getElementById("internacoes").textContent = numeroInternacoes + " em andamento";

//Codigo das tabelas de consultas




//Codigo ocupação de leitos

let numeroLeitos = 25;

document.getElementById("beds").textContent = numeroLeitos + "/40 leitos ocupados"