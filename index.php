<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENVLD Tools</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <style>
        :root {
            --bg-dark: #121212;
            --card-dark: #1E1E1E;
            --text-primary: #FFFFFF;
            --text-secondary: #B0B0B0;
            --primary-color: #BB86FC;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: var(--bg-dark);
            font-family: 'Montserrat', sans-serif;
            color: var(--text-primary);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            width: 100%;
        }

        h1 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: var(--primary-color);
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .card {
            background-color: var(--card-dark);
            border-radius: 16px;
            padding: 1.5rem;
            transition: transform 0.3s ease;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card h2 {
            margin-top: 0;
            color: var(--primary-color);
        }

        .card p {
            color: var(--text-secondary);
            line-height: 1.6;
        }

        .card-image {
            width: 70%;
            /* height: 200px; */
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 1rem;
            justify-items: center;
            align-items: center;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 15%;
        }

        .material-icons {
            vertical-align: middle;
            margin-left: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- <h1>Meu Portfólio</h1> -->
        <div class="projects-grid">
            <?php
            $projetos = [
                [
                    'titulo' => 'Emoji Finder',
                    'descricao' => 'Um site para encontrar emojis de forma fácil e rápida.',
                    'imagem' => './emoji.webp',
                    'link' => 'https://emoji.envld.com/'
                ],
                [
                    'titulo' => 'Video Finances',
                    'descricao' => 'Um site simples para gerenciar suas finanças. Ideal para editores de vídeos.',
                    'imagem' => './money.png',
                    'link' => 'https://dinheiro.envld.com'
                ],
                [
                    'titulo' => 'Games Finder',
                    'descricao' => 'Projeto feito para encontrar jogos apenas com uma barra de pesquisa.',
                    'imagem' => './gamepad.png',
                    'link' => 'https://games.envld.com'
                ]
            ];

            foreach ($projetos as $projeto) {
                echo '<a href="' . $projeto['link'] . '" target="_blank" style="text-decoration: none;">';
                echo '<div class="card">';
                echo '<img src="' . $projeto['imagem'] . '" alt="' . $projeto['titulo'] . '" class="card-image">';
                echo '<h2>' . $projeto['titulo'] . '<span class="material-icons">launch</span></h2>';
                echo '<p>' . $projeto['descricao'] . '</p>';
                echo '</div>';
                echo '</a>';
            }
            ?>
        </div>
    </div>
</body>
</html> 