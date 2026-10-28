<?php
require_once __DIR__ . '/src/Carro.php';
require_once __DIR__ . '/src/Moto.php';

$carro = new Carro('Toyota', 'Corolla', 2022, 150.00, 4);
$moto = new Moto('Honda', 'CB 300F', 2023, 70.00, 300);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de veículos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Veículos para alugar</h1>
        <p>Escolha o veículo ideal para sua próxima viagem.</p>
    </header>

    <main class="conteudo">
        <section class="lista-veiculos">
            <article class="cartao">
                <span class="tipo">Carro</span>
                
                <h2>
                    <?= htmlspecialchars($carro->getMarca() . ' ' . $carro->getModelo(), ENT_QUOTES, 'UTF-8') ?>
                </h2>
                
                <p class="detalhe">
                    Ano: <?= $carro->getAno() ?>
                </p>
                
                <p class="detalhe">
                    <?= htmlspecialchars($carro->getCaracteristica(), ENT_QUOTES, 'UTF-8') ?>
                </p>
                
                <p class="preco">
                    Diária: R$ <?= number_format($carro->getDiaria(), 2, ',', '.') ?>
                </p>
            </article>

            <article class="cartao">
                <span class="tipo">Moto</span>
                <h2>
                    <?= htmlspecialchars($moto->getMarca() . ' ' . $moto->getModelo(), ENT_QUOTES, 'UTF-8') ?>
                </h2>

                <p class="detalhe">
                    Ano: <?= $moto->getAno() ?>
                </p>
                
                <p class="detalhe">
                    <?= htmlspecialchars($moto->getCaracteristica(), ENT_QUOTES, 'UTF-8') ?>
                </p>
                <p class="preco">
                    Diária: R$ <?= number_format($moto->getDiaria(), 2, ',', '.') ?>
                </p>
            </article>
        </section>
    </main>

    <footer class="rodape">
        <p>Catálogo demonstrativo de veículos para aluguel.</p>
    </footer>
</body>
</html>
