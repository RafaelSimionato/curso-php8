<?php

# No PHP 8 foram introduzidas mais algumas funções para usar com strings

# str_contains()
$nome = "Ana Maria Silva Cardoso";
$x = str_contains($nome, 'Silva');   # True

# str_starts_with()
$x = str_starts_with($nome, 'Ana'); # True
$x = str_starts_with($nome, 'ana'); # False

# str_ends_with()
$x = str_ends_with($nome, 'oso');   # True
$x = str_ends_with($nome, ' oso');  # False
