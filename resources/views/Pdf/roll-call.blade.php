<link rel="stylesheet" href="assets/css/pdf.css" />

    <!-- Cabeçalho -->
    <div class="header">
        <img src="assets/images/header.png" alt="Header Image">
    </div>

    <!-- Informações da Escola -->
    <div class="content">
        <p><strong>Escola Técnica Estadual Professor Elias Miguel Junior - 197</strong></p>
        <p>R. IRMA FERRAREZI, S/N VOTOCEL CEP: 18115-350 Fone: (15) 32426636 - Votorantim-SP</p>
        <p><strong>ATIVIDADE:</strong> {{ $activityName }} | <strong> CONDUTOR(a): </strong>  {{$supervisor}} </p>
    </div>

    <!-- Tabela de Alunos -->
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Registro Geral</th>
                <th>Turma</th>
                <th>Assinatura</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->rg }}</td>
                <td> {{ $student->class }} | {{ $student->period }} </td>
                <td></td> 
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Data Atual -->
    <div class="footer text-aling-center">
        <p>Votorantim - {{ $date }}</p>
    </div>


