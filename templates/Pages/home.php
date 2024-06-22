<div class="container" style="margin-top: 10%;">
    <h2>Calculadora de IMC</h2>
    <form id="imcForm">
        <div class="form-group">
            <label for="weight">Peso (kg):</label>
            <input type="text" id="weight" name="weight" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="height">Altura (m):</label>
            <input type="text" id="height" name="height" class="form-control" required>
        </div>
        <button type="submit" id="calculateBtn" class="btn btn-primary">Calcular</button>
    </form>
    <div id="result" style="margin-top: 20px;"></div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#height').mask('0,00', {
            reverse: true
        });
        $('#weight').mask('#0,0', {
            reverse: true
        });

        $('#imcForm').on('submit', function(event) {
            event.preventDefault();

            $('#calculateBtn').prop('disabled', true);

            var weight = parseFloat($('#weight').val().replace(',', '.'));
            var height = parseFloat($('#height').val().replace(',', '.'));

            if (weight > 0 && height > 0) {
                var imc = weight / (height * height);
                var category = '';

                if (imc < 18.5) {
                    category = 'Baixo peso';
                } else if (imc >= 18.5 && imc < 24.9) {
                    category = 'Peso normal';
                } else if (imc >= 25 && imc < 29.9) {
                    category = 'Sobrepeso';
                } else {
                    category = 'Obesidade';
                }

                $('#result').html('<h3>Seu IMC é ' + imc.toFixed(2) + ' (' + category + ')</h3>');
            } else {
                $('#result').html('<h3>Por favor, insira valores válidos para peso e altura.</h3>');
            }

            setTimeout(function() {
                $('#calculateBtn').prop('disabled', false);
            }, 1000);
        });
    });
</script>