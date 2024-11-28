<link rel="stylesheet" href="assets/css/certificate.css" />
<div class="container">
    <div class="certificate">
        <!-- Header -->
        <div class="header">
            <img src="assets/images/oldLogo.png" alt="Logo Esquerda">
            <h1>ETEC PROFESSOR ELIAS MIGUEL JUNIOR – VOTORANTIM</h1>
            <img src="assets/images/Logo.png" alt="Logo Direita">

        </div>

        <!-- Title -->
        <div class="title">
            CERTIFICADO
        </div>

        <!-- Description -->
        <div class="description">
            Certificamos que <strong>{{ $nameStudent }}</strong> participou do <strong>{{ $activityName }}</strong>,
            inserido na programação  <strong>{{ $eventName }}</strong>, nesta unidade escolar, no dia
            <strong>{{ $dateActivity }}</strong>.
        </div>

        <!-- Date and Location -->
        <div class="date-location">
            Votorantim, {{ now()->format('d') }} de {{ now()->format('F') }} de {{ now()->format('Y') }}
        </div>

        <!-- Footer -->
        <div class="footer">
            <img src="assets/images/signatureDiana.png" alt="Assinatura Esquerda">
            <img class="logo-center" src="assets/images/header.png" alt="Logo Centro">
            <img src="assets/images/signatureCibele.png" alt="Assinatura Direita">
        </div>
    </div>
</div>