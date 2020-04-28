CREATE USER 'php_support'@'localhost' IDENTIFIED BY 'TgDId8ZQvkmpkyY7';
GRANT INSERT ON doppelklang.tosupport TO 'php_support'@'localhost';

CREATE USER 'php_register_reader'@'localhost' IDENTIFIED BY 'Fr5x0kWY28wm9WvJ';
GRANT SELECT ON doppelklang.tobrunch TO 'php_register_reader'@'localhost';

CREATE USER 'php_register_writer'@'localhost' IDENTIFIED BY 'uQR5KuiUIQptdlCG';
GRANT INSERT ON doppelklang.tobrunch TO 'php_register_writer'@'localhost';

CREATE USER 'php_register_deleter'@'localhost' IDENTIFIED BY 'ghLj4BGZYbbY99Fz';
GRANT SELECT ON doppelklang.tobrunch TO 'php_register_deleter'@'localhost';
GRANT DELETE ON doppelklang.tobrunch TO 'php_register_deleter'@'localhost';