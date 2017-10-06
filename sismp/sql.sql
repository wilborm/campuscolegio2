-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 23-05-2011 a las 23:06:14
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `mp`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `mensaje`
-- 

CREATE TABLE `mensaje` (
  `ID` int(9) unsigned NOT NULL auto_increment,
  `para` varchar(180) default NULL,
  `de` varchar(180) default NULL,
  `leido` varchar(180) default NULL,
  `fecha` varchar(180) default NULL,
  `asunto` varchar(180) default NULL,
  `texto` text,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `mensaje`
-- 

INSERT INTO `mensaje` VALUES (1, 'marcofbb', 'entra-ya', 'si', '23/05/2011, 10:58 pm', 'Bienvenido al sistema', 'Hola marcofbb, bienvenido a el sistema de mensajería privada');
INSERT INTO `mensaje` VALUES (2, 'dedydamy', 'marcofbb', NULL, '23/05/2011, 11:04 pm', 'Probando', 'Hola como estas?');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios`
-- 

CREATE TABLE `usuarios` (
  `ID` int(9) unsigned NOT NULL auto_increment,
  `nombre` varchar(180) default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 

INSERT INTO `usuarios` VALUES (1, 'marcofbb');
INSERT INTO `usuarios` VALUES (2, 'entra-ya');
INSERT INTO `usuarios` VALUES (3, 'dedydamy');
