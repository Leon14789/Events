function aplicarMascaraRG(input) {
    let valor = input.value;

    // Remove tudo o que não for número
    valor = valor.replace(/\D/g, "");

    // Aplica a máscara
    if (valor.length <= 2) {
        input.value = valor;
    } else if (valor.length <= 5) {
        input.value = valor.replace(/(\d{2})(\d{1,3})/, "$1.$2");
    } else if (valor.length <= 8) {
        input.value = valor.replace(/(\d{2})(\d{3})(\d{1,3})/, "$1.$2.$3");
    } else {
        input.value = valor.replace(/(\d{2})(\d{3})(\d{3})(\d{1})/, "$1.$2.$3-$4");
    }
}