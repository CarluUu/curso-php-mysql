<?php

$hmtl = '

<body>
<h5>
Preencha os campos abaixo para receber informações sobre as datas de
inscrição para os cursos do IFC Rio do Sul.
<br>Entraremos em contato por e-mail quando editais de ingresso forem
publicados.
<h5/>
<form action="fichacadastro.php" method="get">
<div class="campo">
<label>Endereço de E-mail:<span class="obrigatorio">*<span/></label>
<input type="text" name="email">
<div/>

<div class="campo">
<label>Seu Nome:<span class="obrigatorio">*<span/></label>
<input type="text" name="nome">
<div/>

<div class="campo">
<label>Sua Cidade:<span class="obrigatorio">*<span/></label>
<input type="text" name="cidade">
<div/>

<div class="campo">
<label>Seu Telefone:<span class="obrigatorio">*<span/></label>
<input type="text" name="telefone">
<div/>

<br>
<span>Tenho interesse no(s) seguinte(s) curso(s)*</span>  
<br>
<ul>
  <li><input type="checkbox" name="1">Técnico em Agropecuária Integrado ao Ensino Médio</li>
  <li><input type="checkbox" name="1">Técnico em Agroecologia Integrado ao Ensino Médio</li>
  <li><input type="checkbox" name="1">Técnico em Informática Integrado ao Ensino Médio</li>
  <li><input type="checkbox" name="1">Técnico em Agropecuária Subsequente ao Ensino Médio</li>
  <li><input type="checkbox" name="1">Técnico em Agrimensura Subsequente ao Ensino Médio</li>
  <li><input type="checkbox" name="1">Agronomia</li>
  <li><input type="checkbox" name="1">Engenharia Mecatrônica</li>
  <li><input type="checkbox" name="1">Ciência da Computação</li>
  <li><input type="checkbox" name="1">Licenciatura em Pedagogia</li>
  <li><input type="checkbox" name="1">Licenciatura em Matemática</li>
  <li><input type="checkbox" name="1">Licenciatura em Física</li>
  <li><input type="checkbox" name="1">Pós-Graduação em Agronomia: Sistemas Agrícolas Regionais</li>
  <li><input type="checkbox" name="1">Outros:<input type="text" name="outros"></li>
  </ul>
<input type ="submit" value="Enviar">
<body/>
'';

echo $hmtl;