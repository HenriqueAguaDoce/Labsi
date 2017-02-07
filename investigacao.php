<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>LABSI2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="style/style2.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<?php
$current = "";
include ('db.php');

include ('session.php');

include('header.php');
?>
<div class="container-fluid wraper">
	<?php include('sidenav.php'); ?>
    <br>
    <div class="col-sm-8 textcontent">
        <h1 class="title" ><strong>Investigação</strong></h1>
        <br><br><br><br>
        <h4><strong>Artigos</strong></h4>
        <br>
        <p>Barry Burd, João Paulo Barros, Chris Johnson, Stan Kurkovsky, Arnold Rosenbloom e Nikolai Tillman.
            Educating for mobile computing: addressing the new challenges. In Proceedings of the final reports on Innovation e technology in computer science education
        </p>
        <hr>
        <p>Maria Teresa Godinho, Luis Gouveia, Pierre Pesneau, Natural and extended formulations for the Time-Dependent Traveling Salesman Problem, Discrete Applied Mathematics, Available online 27 December 2011, ISSN 0166-218X, <a href="http://dx.doi.org/10.1016/j.dam.2011">http://dx.doi.org/10.1016/j.dam.2011</a>.</p>
        <hr>
        <p>Garcia, L., Luís Oliveira & David Matos (2013). Word and Sentence Prediction: Using the Best of the Two Worlds to Assist AAC Users. In Proceedings of the 12th European AAATE Conference, Portugal, Vilamoura (pp.326-331). IOS Press.</p>
        <hr>
        <p>Elsa R. Rodrigues e J. M. Moreno. Main Path to Learning Using Interactive Adjustable Software. In ICERI2009 Proceedings, 2nd International Conference of Education, Research and Innovation, páginas 2506–2513. IATED, 16-18 November, 2009.</p>
        <hr>
        <p>Luís Bruno, João Pereira, Joaquim Jorge, A New Approach to Walking in Place, Human-Computer Interaction – INTERACT 2013, Lecture Notes in Computer Science Volume 8119, 2013, pp 370-387, (<a href="http://dx.doi.org/10.1007/978-3-642-40477-1_23">http://dx.doi.org/10.1007/978-3-642-40477-1_23</a>).</p>
        <br><br>
        <h4><strong>Projetos</strong></h4>
        <br>
        <p>PetriRig - Ambiente de desenvolvimento de sitemas embutidos baseado em redes de Petri (Projecto FCT PTDC/EEI-AUT/2641/2012)</p>
        <hr>
        <p>Curso de Formação com o “Eugénio o Génio das Palavras V3 para Técnicos de Reabilitação e Professores do Ensino Especial</p>
        <hr>
        <p>Ferramentas de Comunicação Aumentativa em Português para Pessoas com Necessidades Especiais (financiado pelo Secretariado Nacional de Reabilitação e Integração das Pessoas com Deficiência)</p>
        <hr>
        <p>ADAPT – Criação de um Centro de Dinamização de Oportunidades Associadas à Sociedade de Informação</p>
        <hr>
        <p>Caderno Escolar Eletrónico (CEE) (financiado pela Instituição Calouste Gulbenkian)</p>
        <br>
    </div>
</div>
<?php
include('footer.php');
?>
</body>
</html>