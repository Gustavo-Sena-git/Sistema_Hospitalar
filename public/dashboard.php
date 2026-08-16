<?php
require_once '../config/config.php';
include '../app/Views/layout/header.php';
include '../app/Views/layout/sidebar.php';
?>

<main class="dashboard">

    <header class="dashboard-header">
        <div>
            <h1>Dashboard</h1>
            <p>Bem-vindo de volta!</p>
        </div>
    </header>
    <div class="comeco">
        <div class="dashboard-cards">
            <div class="base-card">
                <span class="material-symbols-rounded">groups</span>
                <span class="card-label">Pacientes</span>
                <p id="pacientes"></p>
            </div>
            <div class="base-card">
                <span class="material-symbols-rounded">medical_services</span>
                <span class="card-label">Médicos</span>
                <p id="consultas"></p>
            </div>
            <div class="base-card">
                <span class="material-symbols-rounded">calendar_month</span>
                <span class="card-label">Consultas</span>
                <p id="medicos"></p>
            </div>
            <div class="base-card">
                <span class="material-symbols-rounded">local_hospital</span>
                <span class="card-label">Internações</span>
                <p id="internacoes"></p>
            </div>
        </div>
    </div>
    <div class="meio">
        <div class="consultations">
            <span>Proximas consultas</span>
            <table class="table-base">
            <tr>
                    <th>Horário</th>
                    <th>Paciente</th>
                    <th>Médico</th>
                    <th>Descrição</th>
            </tr>
            <tr>
                    <td>8:30</td>
                    <td>Jose</td>
                    <td>Dr.Carlos</td>
                    <td>Cardiologia</td>
            </tr>
            </table>
        </div>
        <div class="leitos">
            <span>Ocupação de leitos</span>

            <div class="chart-container">
                <canvas id="leitosChart"></canvas>
            </div>

            <p id="beds"></p>
        </div>
    </div>
    <div class="fim">
        <div class="consultas-realizadas">
            <span>Consultas realizadas</span>

            <div class="chart-container">
                <canvas id="consultasChart"></canvas>
            </div>
        </div>
        <div class="atividade">
            <span>Atividade recente</span>

            <div class="atividade-item">
                <span class="material-symbols-rounded">person_add</span>
                <div>
                    <strong>Novo paciente cadastrado</strong>
                    <small>Há 10 minutos</small>
                </div>
            </div>

            <div class="atividade-item">
                <span class="material-symbols-rounded">event_available</span>
                <div>
                    <strong>Consulta realizada</strong>
                    <small>Há 30 minutos</small>
                </div>
            </div>

            <div class="atividade-item">
                <span class="material-symbols-rounded">local_hospital</span>
                <div>
                    <strong>Nova internação</strong>
                    <small>Há 1 hora</small>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include '../app/Views/layout/footer.php';
?>

<script>
console.log("Script do gráfico carregou");

console.log("Chart:", typeof Chart);

const leitos = document.getElementById("leitosChart");

const consultas = document.getElementById("consultasChart");

console.log("Canvas leitos:", leitos);
console.log("Canvas consultas:", consultas);


new Chart(leitos, {
    type: "doughnut",

    data: {
        labels: ["Ocupados", "Disponíveis"],

        datasets: [{
            data: [32, 8]
        }]
    }
});


new Chart(consultas, {
    type: "line",

    data: {
        labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun"],

        datasets: [{
            label: "Consultas",
            data: [45, 52, 48, 65, 72, 60]
        }]
    }
});
</script>