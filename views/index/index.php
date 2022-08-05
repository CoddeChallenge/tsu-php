<?php require 'views/header.php';?>
<main>
    <div class="container">
        <div class="container-info">
            <div class="info-header">
                <p class="titulo"><?php echo $this->dataDiaMes;?></p>
                <p class="sub-titulo"><?php echo $this->dataSemana;?></p>
            </div>
            <div class="info-header center">
                <p class="titulo-s">Sálario:</p>
                <p class="sub-t">0,00 MT</p>
            </div>
            <div class="info-header">
                <p class="titulo"><?php echo $this->dataHora;?></p>
            </div>
        </div>
        <div class="main-info">
            <div class="combobox">
                <select >
                    <option value="volvo">Tempo Efectivo</option>
                    <option value="saab">Saab</option>
                </select>
            </div>
            <div class="combobox">
                <select>
                    <option value="volvo">Idade</option>
                    <option value="saab">Saab</option>
                </select>
            </div>
             <div class="combobox">
                <select >
                    <option value="volvo">Habilações Literárias</option>
                    <option value="saab">Saab</option>
                </select>
            </div>
            <div class="combobox">
                <select>
                    <option value="volvo">Tempo de Serviço</option>
                    <option value="saab">Saab</option>
                </select>
            </div>
        </div>
        <div class="main-title">
           <p>Pontuação Segundo os Critérios da TSU</p>
        </div>
        <div class="pontos-info">
            <div class="output">
                <p>Pontos Tempo Efectivo</p>
                <p>0</p>
            </div>
            <div class="output">
                <p>Pontos da Idade</p>
                <p>0</p>
            </div>
            <div class="output">
                <p>Pontos das Habilações Literárias</p>
                <p>0</p>
            </div>
            <div class="output">
                <p>Pontos deTempo de Serviço</p>
                <p>0</p>
            </div>
        </div>
        <div class="salario-info">
            <div class="output">
                <p>Nivel Sálarial</p>
                <p>0</p>
            </div>
            <div class="output">
                <p>Escalão</p>
                <p>A</p>
            </div>
        </div>
        <div class="btn">
            <button>Calcular</button>
        </div>
    </div>
</main>
<?php require 'views/footer.php';?>