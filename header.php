<!DOCTYPE html>
<html>

<head>
    <title>Sistemas de Cursos</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <header>
        <div class="container">

            <div id="menu">
                <a href="?pagina=cursos">Cursos</a>
                <a href="?pagina=alunos">Alunos</a>
                <a href="?pagina=matriculas">Matrículas</a>
                <?php if(isset($_SESSION['login'])){ ?>
                <a href="logout.php">
                    <?php echo $_SESSION['usuario']; ?> (sair)
                </a>
                <?php } ?>
            </div>
        </div>
    </header>

    <div id="conteudo" class="container">