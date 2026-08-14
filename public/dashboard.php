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
            <p id="beds"></p>
        </div>
    </div>
    <div class="fim">
        <div class="consultas-realizadas">
            <span>Consultas realizadas</span>
        </div>
        <div class="atividade">
            <span>Atividade recente</span>
        </div>
    </div>
</main>

<?php
include '../app/Views/layout/footer.php';
?>