DROP USER IF EXISTS 'php_support'@'localhost';
DROP USER IF EXISTS 'php_register_reader'@'localhost';
DROP USER IF EXISTS 'php_register_writer'@'localhost';
DROP USER IF EXISTS 'php_register_deleter'@'localhost';

USE doppelklang;
DROP TABLE IF EXISTS tobrunch;
DROP TABLE IF EXISTS tosupport;