<?php
# Back-end


echo "\n<pre>\n";
print_r($_GET);#Array;
echo "\n</pre>\n";


print("<strong>Nome:</strong>");
print("$_GET[nomeCompleto]");

print("<strong>E-mail:</strong>");
print("$_GET[e-mail]");

print("<strong>Senha:</strong>");
print("$_GET[senha]");

print("<strong>Data de Nascimento:</strong>");
print("$_GET[dataNascimento]");
