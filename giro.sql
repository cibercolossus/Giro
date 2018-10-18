-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 18-10-2018 a las 16:18:29
-- Versión del servidor: 5.7.23-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `giro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `academic_information`
--

CREATE TABLE `academic_information` (
  `id` int(11) NOT NULL,
  `observations_Academic_information` text NOT NULL,
  `home_visity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `academic_information`
--

INSERT INTO `academic_information` (`id`, `observations_Academic_information`, `home_visity_id`) VALUES
(18, 'fsdfs fsdfsdfsd fsd fsdfskdjkfksld fklsdjf sdklfsdklfjksjf sdfsd fklsdksdjf sdjkfsdkjlf sdflsf', 4),
(19, 'rtytryrtyrt yrtyrty', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `control_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bank_accounts`
--

CREATE TABLE `bank_accounts` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `economy_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `characters`
--

CREATE TABLE `characters` (
  `id` int(11) NOT NULL,
  `birth_place` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `birth_date` date NOT NULL,
  `expedition_place` varchar(255) NOT NULL,
  `expedition_date` date NOT NULL,
  `blood_type` varchar(255) NOT NULL,
  `height` decimal(10,0) NOT NULL,
  `particular_signs` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `observations_personal_information` text NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo_dir` varchar(255) DEFAULT NULL,
  `home_visity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `characters`
--

INSERT INTO `characters` (`id`, `birth_place`, `age`, `birth_date`, `expedition_place`, `expedition_date`, `blood_type`, `height`, `particular_signs`, `nickname`, `civil_status`, `time`, `email`, `observations_personal_information`, `photo`, `photo_dir`, `home_visity_id`) VALUES
(46, 'cali, Valle', 45, '1977-11-19', 'Barranquilla, Atlantico', '2002-11-19', 'O+', '179', 'Tatuaje Brazo izquierdo', 'No refiere', 'Casado(a)', 10, 'pedroarce@gmail.com', 'sdsadasd asdas asda sdasdasdasd asdsadasdas', 'ejemplo.jpg', 'bc9a2250-3a79-4b26-9b56-5ced6811a365', 4),
(47, 'cali, Valle', 60, '1984-07-13', 'Barranquilla, Atlantico', '2001-09-07', 'B+', '179', 'Tatuaje Brazo izquierdo', 'Flaco', 'Concubinato', 12, 'alguien@dominio.com', 'sfs dfsdfsdfsdf sdfsdklfjksdf fsdklsjfklsfjs sdfljsdkfjsdklf sdfksdfjkswereuiw weriuweiru sfsd fsdfkjsdk fsf sfljksd fskjldf sdfkljsd kljg cxg lkxg sdlk sdflk ', 'armario.jpg', '89c0548f-fd35-4b86-a111-f4003aad5f02', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `nit` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`id`, `nit`, `name`, `phone`, `address`, `email`, `slug`, `created`, `modified`) VALUES
(1, '901067903', 'Master Security Consulting', '3001234567', 'Puerto Colombia, Atlantico', 'gerencia@mastersecurityconsulting.com', 'Master-Security-Consulting', '2018-08-31 10:16:14', '2018-08-31 10:16:14'),
(2, '455885228-2', 'SurtiBarrotes International', '3002552525', 'Barranquilla', 'gerencia@surtibarrotes.com', 'SurtiBarrotes-International', '2018-08-25 19:47:32', '2018-08-25 19:47:32'),
(3, '258963741-3', 'Hotel Estelar Santa Marta', '3150255658', 'Santa Marta', 'gerencia@hotelestelar.com', 'Hotel-Estelar-Santa-Marta', '2018-08-25 19:48:22', '2018-08-25 19:48:22'),
(4, '147852365-5', 'Teccbaco', '3120256565', 'Santa Marta', 'gerencia@teccbaco.com', 'Teccbaco', '2018-08-25 19:49:05', '2018-08-25 19:49:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `close_relatives`
--

CREATE TABLE `close_relatives` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `cc` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `family_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `close_relatives`
--

INSERT INTO `close_relatives` (`id`, `name`, `last_name`, `relationship`, `age`, `cc`, `occupation`, `address`, `family_id`) VALUES
(2, 'Aura', 'Arce', 'MADRE', 65, '5446545645', 'Hogar', 'Barrio Nápoles, Cali. Reside con el Esposo', 15),
(3, 'Hernando', 'PErez', 'PADRE', 64, '454564556', 'Pensionado. Gane', 'Barrio Nápoles, Cali. Reside con la Esposa', 15),
(4, 'Aura', 'Arce', 'HERMANO (A)', 28, '5446545645', 'Hogar', 'Barrio Nápoles, Cali. Reside con el Esposo', 16),
(5, 'Hernando', 'PErez', 'TIO (A)', 59, '454564556', 'Pensionado. Gane', 'Barrio Nápoles, Cali. Reside con la Esposa', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `components`
--

CREATE TABLE `components` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `system_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `components`
--

INSERT INTO `components` (`id`, `name`, `slug`, `created`, `modified`, `system_id`) VALUES
(1, 'SEGURIDAD EN PROFUNDIDAD', 'SEGURIDAD-EN-PROFUNDIDAD', '2018-08-25 17:19:43', '2018-08-25 17:21:46', 1),
(2, 'ESPACIO DEFENDIBLE', 'ESPACIO-DEFENDIBLE', '2018-08-25 17:22:21', '2018-08-25 17:22:21', 1),
(3, 'PROTECCIÓN PERIMETRAL', 'PROTECCION-PERIMETRAL', '2018-08-25 17:22:38', '2018-08-25 17:22:38', 1),
(4, 'CONTROL DE ACCESO', 'CONTROL-DE-ACCESO', '2018-08-25 17:22:50', '2018-08-25 17:22:50', 1),
(5, 'PROTECCIÓN DE AREAS INTERNAS, COMUNES Y RESTRINGIDAS ', 'PROTECCION-DE-AREAS-INTERNAS-COMUNES-Y-RESTRINGIDAS', '2018-08-25 17:23:04', '2018-08-25 17:23:04', 1),
(6, 'CONTROL DE DISPOSITIVOS', 'CONTROL-DE-DISPOSITIVOS', '2018-08-25 17:23:14', '2018-08-25 17:23:14', 1),
(7, 'EMPRESA DE VIGILANCIA', 'EMPRESA-DE-VIGILANCIA', '2018-08-25 17:23:23', '2018-08-25 17:23:23', 1),
(8, 'INVESTIGACIONES', 'INVESTIGACIONES', '2018-08-25 17:23:42', '2018-08-25 17:23:42', 1),
(9, 'CONTROL DE COMUNICACIÓN Y APOYO', 'CONTROL-DE-COMUNICACION-Y-APOYO', '2018-08-25 17:23:48', '2018-08-25 17:23:48', 1),
(10, 'VARIABLES DE SEGURIDAD FÍSICA', 'VARIABLES-DE-SEGURIDAD-FISICA', '2018-08-25 17:24:10', '2018-08-25 17:24:10', 1),
(11, 'CCTV', 'CCTV', '2018-08-25 17:25:02', '2018-08-25 17:25:02', 2),
(12, 'ALARMAS DE INTRUSIÓN ', 'ALARMAS-DE-INTRUSION', '2018-08-25 17:25:13', '2018-08-25 17:25:13', 2),
(13, 'ALARMAS DE DETECCIÓN ', 'ALARMAS-DE-DETECCION', '2018-08-25 17:25:27', '2018-08-25 17:25:27', 2),
(14, 'SISTEMA DE CONTROL DE ACCESO DE VISITANTES', 'SISTEMA-DE-CONTROL-DE-ACCESO-DE-VISITANTES', '2018-08-25 17:25:42', '2018-08-25 17:25:42', 2),
(15, 'SISTEMA DE CONTROL DE ACCESO EMPLEADOS', 'SISTEMA-DE-CONTROL-DE-ACCESO-EMPLEADOS', '2018-08-25 17:25:49', '2018-08-25 17:25:49', 2),
(16, 'SISTEMA DE CONTROL DE ACCESO VEHICULAR', 'SISTEMA-DE-CONTROL-DE-ACCESO-VEHICULAR', '2018-08-25 17:25:56', '2018-08-25 17:25:56', 2),
(17, 'VARIABLES DE SEGURIDAD ELECTRÓNICA', 'VARIABLES-DE-SEGURIDAD-ELECTRONICA', '2018-08-25 17:26:29', '2018-08-25 17:26:29', 2),
(18, 'CONTRATACIÓN DE PERSONAS Y EMPRESAS ', 'CONTRATACION-DE-PERSONAS-Y-EMPRESAS', '2018-08-25 17:27:24', '2018-08-25 17:27:24', 3),
(19, 'PROTECCION A DIGNATARIOS', 'PROTECCION-A-DIGNATARIOS', '2018-08-25 17:27:30', '2018-08-25 17:27:30', 3),
(20, 'EXTORSIÓN Y SECUESTRO', 'EXTORSION-Y-SECUESTRO', '2018-08-25 17:27:43', '2018-08-25 17:27:43', 3),
(21, 'SABOTAJE Y TERRORISMO', 'SABOTAJE-Y-TERRORISMO', '2018-08-25 17:27:48', '2018-08-25 17:27:48', 3),
(22, 'SISTEMA DE GESTIÓN DE TALENTO HUMANO', 'SISTEMA-DE-GESTION-DE-TALENTO-HUMANO', '2018-08-25 17:29:16', '2018-08-25 17:29:16', 4),
(23, 'IMPLEMENTACION DE LA NORMA ISO 27000 - 27001', 'IMPLEMENTACION-DE-LA-NORMA-ISO-27000-27001', '2018-08-25 17:29:32', '2018-08-25 17:29:32', 5),
(24, 'INFORMACIÓN ELECTRONICA', 'INFORMACION-ELECTRONICA', '2018-08-25 17:29:58', '2018-08-25 17:29:58', 5),
(25, ' MANEJO DE DOCUMENTACION DE ARCHIVO', 'MANEJO-DE-DOCUMENTACION-DE-ARCHIVO', '2018-08-25 17:30:05', '2018-08-25 17:30:05', 5),
(26, 'STRIP TELEFÓNICO, CABLEADO Y CANALETAS', 'STRIP-TELEFONICO-CABLEADO-Y-CANALETAS', '2018-08-25 17:30:14', '2018-08-25 17:30:14', 5),
(27, 'SISTEMA DE REDES', 'SISTEMA-DE-REDES', '2018-08-25 17:30:24', '2018-08-25 17:30:24', 5),
(28, 'PROVEEDORES Y ACCIONISTAS', 'PROVEEDORES-Y-ACCIONISTAS', '2018-08-25 17:31:16', '2018-08-25 17:31:16', 6),
(29, 'LOGÍSTICA', 'LOGISTICA', '2018-08-25 17:31:20', '2018-08-25 17:31:20', 6),
(30, 'TRANSPORTE, RECOLECCIÓN Y MANEJO DE MERCANCÍAS', 'TRANSPORTE-RECOLECCION-Y-MANEJO-DE-MERCANCIAS', '2018-08-25 17:31:32', '2018-08-25 17:31:32', 6),
(31, 'MANEJO DE DINEROS EN TIENDAS Y OFICINAS', 'MANEJO-DE-DINEROS-EN-TIENDAS-Y-OFICINAS', '2018-08-25 17:31:38', '2018-08-25 17:31:38', 6),
(32, 'CAPACITACIONES', 'CAPACITACIONES', '2018-08-25 17:31:44', '2018-08-25 17:31:44', 6),
(33, 'PROVEEDORES Y ACCIONISTAS CC', 'PROVEEDORES-Y-ACCIONISTAS-CC', '2018-08-25 17:33:15', '2018-08-25 17:33:15', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concepts`
--

CREATE TABLE `concepts` (
  `id` int(11) NOT NULL,
  `neighbornhood` text NOT NULL,
  `friends` text NOT NULL,
  `family` text NOT NULL,
  `characterization` text NOT NULL,
  `visit` text NOT NULL,
  `home_visity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controls`
--

CREATE TABLE `controls` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `element_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `controls`
--

INSERT INTO `controls` (`id`, `name`, `slug`, `created`, `modified`, `element_id`) VALUES
(1, 'Se realizan programas  de aceramiento a la comunidad adyacente a las instalaciones?', 'Se-realizan-programas-de-aceramiento-a-la-comunidad-adyacente-a-las-instalaciones', '2018-08-25 18:14:41', '2018-08-25 18:14:41', 1),
(2, 'Se realizan obras sociales de acercamiento a la comunidad vecina de las instalaciones?', 'Se-realizan-obras-sociales-de-acercamiento-a-la-comunidad-vecina-de-las-instalaciones', '2018-08-25 18:14:47', '2018-08-25 18:14:47', 1),
(3, 'Se relizan actividades y campañas de sensibilizacion para el acercamiento a la comunidad?', 'Se-relizan-actividades-y-campanas-de-sensibilizacion-para-el-acercamiento-a-la-comunidad', '2018-08-25 18:14:54', '2018-08-25 18:14:54', 1),
(4, '¿La entidad hace parte de algún frente de seguridad?', 'La-entidad-hace-parte-de-algun-frente-de-seguridad', '2018-08-25 18:15:19', '2018-08-25 18:15:19', 2),
(5, '¿Se hacen reuniones periódicas con la Fuerza Pública?', 'Se-hacen-reuniones-periodicas-con-la-Fuerza-Publica', '2018-08-25 18:15:24', '2018-08-25 18:15:24', 2),
(6, '¿La entidad hace parte de la Red de Apoyo y Solidaridad Ciudadana?', 'La-entidad-hace-parte-de-la-Red-de-Apoyo-y-Solidaridad-Ciudadana', '2018-08-25 18:15:29', '2018-08-25 18:15:29', 2),
(7, 'En el sector norte se cuenta con visibilidad periférica?', 'En-el-sector-norte-se-cuenta-con-visibilidad-periferica', '2018-08-25 18:15:58', '2018-08-25 18:15:58', 3),
(8, 'En el sector sur se cuenta con visibilidad periférica?', 'En-el-sector-sur-se-cuenta-con-visibilidad-periferica', '2018-08-25 18:16:04', '2018-08-25 18:16:04', 3),
(9, 'En el sector oriente se cuenta con visibilidad periférica?', 'En-el-sector-oriente-se-cuenta-con-visibilidad-periferica', '2018-08-25 18:16:09', '2018-08-25 18:16:09', 3),
(10, 'Los muros perimetrales están conformado con materiales adecuados?', 'Los-muros-perimetrales-estan-conformado-con-materiales-adecuados', '2018-08-25 18:16:30', '2018-08-25 18:16:30', 4),
(11, 'La altura total del muro perimetral  es minimo de 2,50 metros?', 'La-altura-total-del-muro-perimetral-es-minimo-de-2-50-metros', '2018-08-25 18:16:36', '2018-08-25 18:16:36', 4),
(12, 'La conformacion del muro perimetral impide el esacalamineto?', 'La-conformacion-del-muro-perimetral-impide-el-esacalamineto', '2018-08-25 18:16:43', '2018-08-25 18:16:43', 4),
(13, 'Existen procedimientos para el control de ingresos de los colaboradores?', 'Existen-procedimientos-para-el-control-de-ingresos-de-los-colaboradores', '2018-08-25 18:17:02', '2018-08-25 18:17:02', 5),
(14, 'Existen procedimientos para el control de ingresos del personal suministrado?', 'Existen-procedimientos-para-el-control-de-ingresos-del-personal-suministrado', '2018-08-25 18:17:10', '2018-08-25 18:17:10', 5),
(15, 'Existen procedimientos para el  control de ingresos de los visitantes?', 'Existen-procedimientos-para-el-control-de-ingresos-de-los-visitantes', '2018-08-25 18:17:15', '2018-08-25 18:17:15', 5),
(16, 'Se ha establecido por la alta dirección o el personal encargado de la seguridad de la organización que debe controlar la entrega y devolución de carnés de identificación de empleados, visitantes y proveedores?', 'Se-ha-establecido-por-la-alta-direccion-o-el-personal-encargado-de-la-seguridad-de-la-organizacion-que-debe-controlar-la-entrega-y-devolucion-de-carnes-de-identificacion-de-empleados-visitant', '2018-08-25 18:17:42', '2018-08-25 18:17:42', 6),
(17, 'Existen procedimientos documentados para la entrega, eliminación, devolución y cambio de dispositivos de acceso como carné corporativo, tarjetas de identificación, llaves, tarjetas de acceso, claves, etc. ?', 'Existen-procedimientos-documentados-para-la-entrega-eliminacion-devolucion-y-cambio-de-dispositivos-de-acceso-como-carne-corporativo-tarjetas-de-identificacion-llaves-tarjetas-de-acceso-clave', '2018-08-25 18:18:00', '2018-08-25 18:18:00', 6),
(18, 'Existe un mecanismo para exhibir el carné o identificación en un lugar visible de los trabajadores, bajo las normas de seguridad industrial vigentes dentro de las instalaciones y equipos donde permanezcan más de 50 trabajadores. ?', 'Existe-un-mecanismo-para-exhibir-el-carne-o-identificacion-en-un-lugar-visible-de-los-trabajadores-bajo-las-normas-de-seguridad-industrial-vigentes-dentro-de-las-instalaciones-y-equipos-donde', '2018-08-25 18:18:09', '2018-08-25 18:18:09', 6),
(19, '¿Existe un proceso documentado para el control de parqueaderos?', 'Existe-un-proceso-documentado-para-el-control-de-parqueaderos', '2018-08-25 18:18:25', '2018-08-25 18:18:25', 7),
(20, '¿Cuenta con servicio de parqueaderos en las instalaciones?', 'Cuenta-con-servicio-de-parqueaderos-en-las-instalaciones', '2018-08-25 18:18:30', '2018-08-25 18:18:30', 7),
(21, '¿Los parqueaderos se encuentran independizados para funcionarios y visitantes?', 'Los-parqueaderos-se-encuentran-independizados-para-funcionarios-y-visitantes', '2018-08-25 18:18:38', '2018-08-25 18:18:38', 7),
(22, '¿Existe un protocolo para el manejo seguro de vehiculos?', 'Existe-un-protocolo-para-el-manejo-seguro-de-vehiculos', '2018-08-25 18:18:51', '2018-08-25 18:18:51', 7),
(24, 'Existen procedimientos para el control de ingresos de los vehiculos de los colaboradores, visitantes, contratistas Y proveedores?', 'Existen-procedimientos-para-el-control-de-ingresos-de-los-vehiculos-de-los-colaboradores-visitantes-contratistas-Y-proveedores', '2018-08-25 18:19:36', '2018-08-25 18:19:36', 8),
(25, 'Existen procedimientos para el control de ingresos de los vehiculos del personal suministrado?', 'Existen-procedimientos-para-el-control-de-ingresos-de-los-vehiculos-del-personal-suministrado', '2018-08-25 18:20:13', '2018-08-25 18:20:13', 8),
(26, 'Existen procedimientos para el control de salida de los vehiculos de los colaboradores?', 'Existen-procedimientos-para-el-control-de-salida-de-los-vehiculos-de-los-colaboradores', '2018-08-25 18:20:18', '2018-08-25 18:20:18', 8),
(27, 'Existe señalización peatonal para el control de circulación de personas ?', 'Existe-senalizacion-peatonal-para-el-control-de-circulacion-de-personas', '2018-08-25 18:20:35', '2018-08-25 18:20:35', 9),
(28, 'Existe señalización vehicular para el control de circulación de vehiculos ?', 'Existe-senalizacion-vehicular-para-el-control-de-circulacion-de-vehiculos', '2018-08-25 18:20:41', '2018-08-25 18:20:41', 9),
(29, 'Los visitantes son acompañados por colaboradores o guardas de seguridad?', 'Los-visitantes-son-acompanados-por-colaboradores-o-guardas-de-seguridad', '2018-08-25 18:20:46', '2018-08-25 18:20:46', 9),
(30, '¿Existe un protocolo de seguridad para el manejo de llaves, candados y cerraduras?', 'Existe-un-protocolo-de-seguridad-para-el-manejo-de-llaves-candados-y-cerraduras', '2018-08-25 18:21:28', '2018-08-25 18:21:28', 10),
(31, '¿Se hacen investigaciones internas cuando se presentan pérdidas o daños de llaves, candados y cerraduras?', 'Se-hacen-investigaciones-internas-cuando-se-presentan-perdidas-o-danos-de-llaves-candados-y-cerraduras', '2018-08-25 18:21:35', '2018-08-25 18:21:35', 10),
(32, '¿Las llaves de puertas y candados de zonas críticas están asignadas mediante acta?', 'Las-llaves-de-puertas-y-candados-de-zonas-criticas-estan-asignadas-mediante-acta', '2018-08-25 18:21:47', '2018-08-25 18:21:47', 10),
(33, 'El cerramiento del area interna está conformado con materiales adecuados?', 'El-cerramiento-del-area-interna-esta-conformado-con-materiales-adecuados', '2018-08-25 18:22:08', '2018-08-25 18:22:08', 11),
(34, 'La altura total del cerramiento del area interna  es mayor de 2,4 metros?', 'La-altura-total-del-cerramiento-del-area-interna-es-mayor-de-2-4-metros', '2018-08-25 18:22:13', '2018-08-25 18:22:13', 11),
(35, 'La conformacion del ceramiento del area interna impide el esacalamineto?', 'La-conformacion-del-ceramiento-del-area-interna-impide-el-esacalamineto', '2018-08-25 18:22:18', '2018-08-25 18:22:18', 11),
(36, 'Se utiliza personal de seguridad fijo para la proteccion de areas comunes?', 'Se-utiliza-personal-de-seguridad-fijo-para-la-proteccion-de-areas-comunes', '2018-08-25 18:22:35', '2018-08-25 18:22:35', 12),
(37, 'Se utilizan guardas de seguridad Recorredores para la proteccion de areas comunes?', 'Se-utilizan-guardas-de-seguridad-Recorredores-para-la-proteccion-de-areas-comunes', '2018-08-25 18:22:42', '2018-08-25 18:22:42', 12),
(38, 'Se utilizan medios electronicos de seguridad para la proteccion de areas comunes?', 'Se-utilizan-medios-electronicos-de-seguridad-para-la-proteccion-de-areas-comunes', '2018-08-25 18:22:47', '2018-08-25 18:22:47', 12),
(39, 'Las areas restringidas se encuentran alejadas de las zonas comunes donde permanece personal?', 'Las-areas-restringidas-se-encuentran-alejadas-de-las-zonas-comunes-donde-permanece-personal', '2018-08-25 18:23:14', '2018-08-25 18:23:14', 13),
(40, 'Se restringe el transito y circulacion de personas en las areas restrigidas?', 'Se-restringe-el-transito-y-circulacion-de-personas-en-las-areas-restrigidas', '2018-08-25 18:23:20', '2018-08-25 18:23:20', 13),
(41, 'Se cuenta con personal de seguridad para evitar el ingreso de personal a las areas restringidas?', 'Se-cuenta-con-personal-de-seguridad-para-evitar-el-ingreso-de-personal-a-las-areas-restringidas', '2018-08-25 18:23:26', '2018-08-25 18:23:26', 13),
(42, 'Se cuenta con personal de seguridad encargado de monitorear el adecuado fucnionamento  y operación del CCTV?', 'Se-cuenta-con-personal-de-seguridad-encargado-de-monitorear-el-adecuado-fucnionamento-y-operacion-del-CCTV', '2018-08-25 18:23:54', '2018-08-25 18:23:54', 14),
(43, 'Se cuenta con personal de seguridad encargado de monitorear el adecuado fucnionamiento  y operación del Sistema de Alarma?', 'Se-cuenta-con-personal-de-seguridad-encargado-de-monitorear-el-adecuado-fucnionamiento-y-operacion-del-Sistema-de-Alarma', '2018-08-25 18:24:00', '2018-08-25 18:24:00', 14),
(44, 'Se cuenta con personal de seguridad encargado de monitorear el adecuado fucnionamiento  y operación del Sistema de Control de Accesos?', 'Se-cuenta-con-personal-de-seguridad-encargado-de-monitorear-el-adecuado-fucnionamiento-y-operacion-del-Sistema-de-Control-de-Accesos', '2018-08-25 18:24:07', '2018-08-25 18:24:07', 14),
(45, '¿Posee unas medidas de seguridad para contratar Empresas de Vigilancia que este debidamente documentado?', 'Posee-unas-medidas-de-seguridad-para-contratar-Empresas-de-Vigilancia-que-este-debidamente-documentado', '2018-08-25 18:24:24', '2018-08-25 18:24:24', 15),
(46, 'Se Verifica que la empresa que ofrece el servicio este debidamente autorizada por la Superintendencia de Vigilancia y Seguridad Privada?', 'Se-Verifica-que-la-empresa-que-ofrece-el-servicio-este-debidamente-autorizada-por-la-Superintendencia-de-Vigilancia-y-Seguridad-Privada', '2018-08-25 18:24:30', '2018-08-25 18:24:30', 15),
(47, 'Se Verifica que la licencia de funcionamiento esté al día y habilite la prestación del servicio que ofrece?', 'Se-Verifica-que-la-licencia-de-funcionamiento-este-al-dia-y-habilite-la-prestacion-del-servicio-que-ofrece', '2018-08-25 18:24:35', '2018-08-25 18:24:35', 15),
(48, '¿Existen investigaciones internas cuando se presentan irregularidades con el personal?', 'Existen-investigaciones-internas-cuando-se-presentan-irregularidades-con-el-personal', '2018-08-25 18:25:20', '2018-08-25 18:25:20', 16),
(49, '¿El Departamento de Seguridad registra la totalidad de investigaciones realizadas?', 'El-Departamento-de-Seguridad-registra-la-totalidad-de-investigaciones-realizadas', '2018-08-25 18:25:26', '2018-08-25 18:25:26', 16),
(50, '¿El Departamento de Seguridad establece en una investigación: Hipótesis, personal implicado y hallazgos encontrados?', 'El-Departamento-de-Seguridad-establece-en-una-investigacion-Hipotesis-personal-implicado-y-hallazgos-encontrados', '2018-08-25 18:25:35', '2018-08-25 18:25:35', 16),
(51, 'La empresa hace parte de algun convenio de asitencia o ayuda mutua en el sector?', 'La-empresa-hace-parte-de-algun-convenio-de-asitencia-o-ayuda-mutua-en-el-sector', '2018-08-25 18:25:56', '2018-08-25 18:25:56', 17),
(52, 'Se tiene establecido con algun proveedor el suministro de informacion de interes para el area de seguridad?', 'Se-tiene-establecido-con-algun-proveedor-el-suministro-de-informacion-de-interes-para-el-area-de-seguridad', '2018-08-25 18:26:04', '2018-08-25 18:26:04', 17),
(53, 'Se tiene establecido con algun proveedor el suministro de personal de \"ayuda\" apoyo especial para el area de seguridad?', 'Se-tiene-establecido-con-algun-proveedor-el-suministro-de-personal-de-ayuda-apoyo-especial-para-el-area-de-seguridad', '2018-08-25 18:26:11', '2018-08-25 18:26:11', 17),
(54, 'Existe un plan de seguridad en los desplazamientos terrestres y sobre las vías de acceso a la empresa?', 'Existe-un-plan-de-seguridad-en-los-desplazamientos-terrestres-y-sobre-las-vias-de-acceso-a-la-empresa', '2018-08-25 18:26:33', '2018-08-25 18:26:33', 18),
(55, '¿La empresa cuenta con estadísticas para cada uno de los riesgos?', 'La-empresa-cuenta-con-estadisticas-para-cada-uno-de-los-riesgos', '2018-08-25 18:26:42', '2018-08-25 18:26:42', 18),
(56, '¿La empresa cuenta con estadísticas de incidentes internos?', 'La-empresa-cuenta-con-estadisticas-de-incidentes-internos', '2018-08-25 18:26:53', '2018-08-25 18:26:53', 18),
(57, '¿La compañía cuenta con dispositivos de Circuito Cerrado de Televisión (CCTV)?', 'La-compania-cuenta-con-dispositivos-de-Circuito-Cerrado-de-Television-CCTV', '2018-08-25 18:27:26', '2018-08-25 18:27:26', 19),
(58, '¿La cantidad de cámaras es adecuada para cumplir su tarea principal enfocada a la prevención de incidentes?', 'La-cantidad-de-camaras-es-adecuada-para-cumplir-su-tarea-principal-enfocada-a-la-prevencion-de-incidentes', '2018-08-25 18:27:54', '2018-08-25 18:27:54', 20),
(59, '¿Todas las cámaras son monitoreadas permanentemente, sin excepción?', 'Todas-las-camaras-son-monitoreadas-permanentemente-sin-excepcion', '2018-08-25 18:28:24', '2018-08-25 18:28:24', 20),
(60, '¿Los monitores dispuestos permiten el seguimiento adecuado del total de las cámaras instaladas?', 'Los-monitores-dispuestos-permiten-el-seguimiento-adecuado-del-total-de-las-camaras-instaladas', '2018-08-25 18:28:31', '2018-08-25 18:28:31', 20),
(61, '¿Las características técnicas de las cámaras que componen el CCTV cumplen con el objetivo para el cual fueron instaladas?', 'Las-caracteristicas-tecnicas-de-las-camaras-que-componen-el-CCTV-cumplen-con-el-objetivo-para-el-cual-fueron-instaladas', '2018-08-25 18:28:47', '2018-08-25 18:28:47', 21),
(62, '¿Las características técnicas de cada una de las cámaras están disponibles?', 'Las-caracteristicas-tecnicas-de-cada-una-de-las-camaras-estan-disponibles', '2018-08-25 18:28:54', '2018-08-25 18:28:54', 21),
(63, '¿Las características técnicas de las cámaras instaladas son aprovechadas por el operario?', 'Las-caracteristicas-tecnicas-de-las-camaras-instaladas-son-aprovechadas-por-el-operario', '2018-08-25 18:29:01', '2018-08-25 18:29:01', 21),
(64, '¿El DVR tiene la suficiente capacidad técnica para soportar la información del CCTV instalado?', 'El-DVR-tiene-la-suficiente-capacidad-tecnica-para-soportar-la-informacion-del-CCTV-instalado', '2018-08-25 18:29:16', '2018-08-25 18:29:16', 22),
(65, '¿El DVR posee un Plan de Mantenimiento preventivo semestral?', 'El-DVR-posee-un-Plan-de-Mantenimiento-preventivo-semestral', '2018-08-25 18:29:24', '2018-08-25 18:29:24', 22),
(66, '¿Se hacen Back up del sistema?', 'Se-hacen-Back-up-del-sistema', '2018-08-25 18:29:33', '2018-08-25 18:29:33', 22),
(67, '¿La empresa instaladora del CCTV realiza las capacitaciones que sean necesarias para que sus operadores optimicen su funcion preventiva de seguridad?', 'La-empresa-instaladora-del-CCTV-realiza-las-capacitaciones-que-sean-necesarias-para-que-sus-operadores-optimicen-su-funcion-preventiva-de-seguridad', '2018-08-25 18:29:44', '2018-08-25 18:29:44', 23),
(68, '¿La empresa instaladora del CCTV realiza, por lo menos, una visita mensual?', 'La-empresa-instaladora-del-CCTV-realiza-por-lo-menos-una-visita-mensual', '2018-08-25 18:29:49', '2018-08-25 18:29:49', 23),
(69, '¿Cuándo se han detectado fallas en el sistema operativo se ha recibido la asesoría inmediata para resolver el conflicto?', 'Cuando-se-han-detectado-fallas-en-el-sistema-operativo-se-ha-recibido-la-asesoria-inmediata-para-resolver-el-conflicto', '2018-08-25 18:29:54', '2018-08-25 18:29:54', 23),
(70, '¿El CCTV cuenta con un Esquema de ubicación de cámaras, para evidenciar fallas y puntos críticos?', 'El-CCTV-cuenta-con-un-Esquema-de-ubicacion-de-camaras-para-evidenciar-fallas-y-puntos-criticos', '2018-08-25 18:30:05', '2018-08-25 18:30:05', 24),
(71, '¿El esquema de ubicación de las cámaras está actualizado y es fácil de entender?', 'El-esquema-de-ubicacion-de-las-camaras-esta-actualizado-y-es-facil-de-entender', '2018-08-25 18:30:10', '2018-08-25 18:30:10', 24),
(72, '¿El esquema del CCTV se encuentra en un recinto libre del acceso del público? (Área restringida)', 'El-esquema-del-CCTV-se-encuentra-en-un-recinto-libre-del-acceso-del-publico-Area-restringida', '2018-08-25 18:30:16', '2018-08-25 18:30:16', 24),
(73, '¿La empresa cuenta con alarmas de intrusión?', 'La-empresa-cuenta-con-alarmas-de-intrusion', '2018-08-25 18:30:45', '2018-08-25 18:30:45', 25),
(74, '¿La cantidad de alarmas es adecuada para cumplir su tarea principal?', 'La-cantidad-de-alarmas-es-adecuada-para-cumplir-su-tarea-principal', '2018-08-25 18:31:01', '2018-08-25 18:31:01', 25),
(75, '¿Las alarmas instaladas tienen asignadas tareas específicas?', 'Las-alarmas-instaladas-tienen-asignadas-tareas-especificas', '2018-08-25 18:31:08', '2018-08-25 18:31:08', 25),
(76, '¿Las características técnicas de los sensores cumplen con el objetivo para el cual fueron instalados?', 'Las-caracteristicas-tecnicas-de-los-sensores-cumplen-con-el-objetivo-para-el-cual-fueron-instalados', '2018-08-25 18:31:23', '2018-08-25 18:31:23', 26),
(77, '¿Todos los sensores instalados están disponibles?', 'Todos-los-sensores-instalados-estan-disponibles', '2018-08-25 18:31:27', '2018-08-25 18:31:27', 26),
(78, '¿Las características técnicas de los sensores apoyan o soportan al CCTV?', 'Las-caracteristicas-tecnicas-de-los-sensores-apoyan-o-soportan-al-CCTV', '2018-08-25 18:31:34', '2018-08-25 18:31:34', 26),
(79, '¿Se han hecho pruebas de operatividad de los sensores con la Empresa de Monitoreo de la Alarma, por lo menos una vez quincenal?', 'Se-han-hecho-pruebas-de-operatividad-de-los-sensores-con-la-Empresa-de-Monitoreo-de-la-Alarma-por-lo-menos-una-vez-quincenal', '2018-08-25 18:31:49', '2018-08-25 18:31:49', 27),
(80, '¿Los tiempos de respuesta de la Empresa de Monitoreo de la Alarma son adecuados?', 'Los-tiempos-de-respuesta-de-la-Empresa-de-Monitoreo-de-la-Alarma-son-adecuados', '2018-08-25 18:31:54', '2018-08-25 18:31:54', 27),
(81, '¿Se han hecho Encuestas de satisfacción del servicio por parte de la Empresa prestadora del servicio de Monitoreo?', 'Se-han-hecho-Encuestas-de-satisfaccion-del-servicio-por-parte-de-la-Empresa-prestadora-del-servicio-de-Monitoreo', '2018-08-25 18:32:00', '2018-08-25 18:32:00', 27),
(82, '¿La edificación cuenta con sensores de movimiento?', 'La-edificacion-cuenta-con-sensores-de-movimiento', '2018-08-25 18:32:16', '2018-08-25 18:32:16', 28),
(83, '¿El tipo de detector elegido en cada zona es el adecuado respecto a su dimension?', 'El-tipo-de-detector-elegido-en-cada-zona-es-el-adecuado-respecto-a-su-dimension', '2018-08-25 18:32:21', '2018-08-25 18:32:21', 28),
(84, 'Estos sensores son monitoreados mediante dispositivos de CCTV?', 'Estos-sensores-son-monitoreados-mediante-dispositivos-de-CCTV', '2018-08-25 18:32:45', '2018-08-25 18:32:45', 28),
(85, '¿La edificación cuenta con un dispositivo de sensores de rayos infrarrojos activos?', 'La-edificacion-cuenta-con-un-dispositivo-de-sensores-de-rayos-infrarrojos-activos', '2018-08-25 18:33:30', '2018-08-25 18:33:30', 29),
(86, '¿Los sensores de rayos infrarrojos activos son adecuados?', 'Los-sensores-de-rayos-infrarrojos-activos-son-adecuados', '2018-08-25 18:33:34', '2018-08-25 18:33:34', 29),
(87, '¿Los sensores de rayos infrarrojos activos son suficientes?', 'Los-sensores-de-rayos-infrarrojos-activos-son-suficientes', '2018-08-25 18:33:38', '2018-08-25 18:33:38', 29),
(88, '¿La edificación cuenta con un dispositivo de barreras de rayos infrarrojos activos?', 'La-edificacion-cuenta-con-un-dispositivo-de-barreras-de-rayos-infrarrojos-activos', '2018-08-25 18:33:50', '2018-08-25 18:33:50', 30),
(89, '¿Las barreras de rayos infrarrojos activos son adecuadas?', 'Las-barreras-de-rayos-infrarrojos-activos-son-adecuadas', '2018-08-25 18:33:54', '2018-08-25 18:33:54', 30),
(90, '¿Las barreras de rayos infrarrojos activos son suficientes?', 'Las-barreras-de-rayos-infrarrojos-activos-son-suficientes', '2018-08-25 18:33:58', '2018-08-25 18:33:58', 30),
(91, '¿La edificación cuenta con sensores magneticos para proteger puertas y ventanas con bisagras o corredizas, y en general todo tipo de apertura?', 'La-edificacion-cuenta-con-sensores-magneticos-para-proteger-puertas-y-ventanas-con-bisagras-o-corredizas-y-en-general-todo-tipo-de-apertura', '2018-08-25 18:34:17', '2018-08-25 18:34:17', 31),
(92, '¿El tipo de magnetico utilizado cumple con su funcion para el cual fueron istalados?', 'El-tipo-de-magnetico-utilizado-cumple-con-su-funcion-para-el-cual-fueron-istalados', '2018-08-25 18:34:23', '2018-08-25 18:34:23', 31),
(93, 'La brecha o la distancia entre el imán y el contacto debe ser la menor posible dentro de la especificada por el fabricante?', 'La-brecha-o-la-distancia-entre-el-iman-y-el-contacto-debe-ser-la-menor-posible-dentro-de-la-especificada-por-el-fabricante', '2018-08-25 18:34:42', '2018-08-25 18:34:42', 31),
(94, '¿La edificacion cuenta con sensores de rutura en las  vidrieras, ventanales, exhibidores de vidrio, etc.?', 'La-edificacion-cuenta-con-sensores-de-rutura-en-las-vidrieras-ventanales-exhibidores-de-vidrio-etc', '2018-08-25 18:34:57', '2018-08-25 18:34:57', 32),
(95, '¿Se encuentran instalados en vidrieras cerradas, para evitar la rotura accidental de un vidrio que pueda provocar una falsa alarma?', 'Se-encuentran-instalados-en-vidrieras-cerradas-para-evitar-la-rotura-accidental-de-un-vidrio-que-pueda-provocar-una-falsa-alarma', '2018-08-25 18:35:05', '2018-08-25 18:35:05', 32),
(96, '¿Las instalaciones cuentan con Detectores de rotura de vidrios ambientales donde su radio de acción sea de aproximadamente 5m y pueda proteger varios paneles en distintas paredes?', 'Las-instalaciones-cuentan-con-Detectores-de-rotura-de-vidrios-ambientales-donde-su-radio-de-accion-sea-de-aproximadamente-5m-y-pueda-proteger-varios-paneles-en-distintas-paredes', '2018-08-25 18:35:10', '2018-08-25 18:35:10', 32),
(97, '¿Las instalaciones cuentan con detectores de vibración?', 'Las-instalaciones-cuentan-con-detectores-de-vibracion', '2018-08-25 18:35:24', '2018-08-25 18:35:24', 33),
(98, '¿Las instalaciones cuentan con detectores sismicos utilizados para proteger cajas fuertes, tesoros bancarios y en general cualquier pared vulnerable a perforaciones o roturas, sea de concreto o de acero?.', 'Las-instalaciones-cuentan-con-detectores-sismicos-utilizados-para-proteger-cajas-fuertes-tesoros-bancarios-y-en-general-cualquier-pared-vulnerable-a-perforaciones-o-roturas-sea-de-concreto-o-', '2018-08-25 18:35:30', '2018-08-25 18:35:30', 33),
(99, '¿Estos sensores estan firmemente atornillados a la superficie a proteger y su eficacia se limita a la superficie recomendada por el fabricante?.', 'Estos-sensores-estan-firmemente-atornillados-a-la-superficie-a-proteger-y-su-eficacia-se-limita-a-la-superficie-recomendada-por-el-fabricante', '2018-08-25 18:35:35', '2018-08-25 18:35:35', 33),
(100, '¿Las instalaciones cuentan con botones de pánico para enviar una señal manual a una estación de monitoreo?. Esta puede ser aviso de incendio o de asalto, entre otras.', 'Las-instalaciones-cuentan-con-botones-de-panico-para-enviar-una-senal-manual-a-una-estacion-de-monitoreo-Esta-puede-ser-aviso-de-incendio-o-de-asalto-entre-otras', '2018-08-25 18:35:49', '2018-08-25 18:35:49', 34),
(101, '¿Hay botones de panico colocados en lugares ocultos pero a mano del usuario. Por ejemplo, debajo de un escritorio, dentro de un baño o cerca de una puerta, para dar avisos de forma silenciosa?.', 'Hay-botones-de-panico-colocados-en-lugares-ocultos-pero-a-mano-del-usuario-Por-ejemplo-debajo-de-un-escritorio-dentro-de-un-bano-o-cerca-de-una-puerta-para-dar-avisos-de-forma-silenciosa', '2018-08-25 18:35:54', '2018-08-25 18:35:54', 34),
(102, '¿Se entrena al personal de como usar los botones de panico?. Ya que no se puede usar en situaciones de asaltos donde peligre la seguridad de las víctimas.', 'Se-entrena-al-personal-de-como-usar-los-botones-de-panico-Ya-que-no-se-puede-usar-en-situaciones-de-asaltos-donde-peligre-la-seguridad-de-las-victimas', '2018-08-25 18:36:05', '2018-08-25 18:36:05', 34),
(103, '¿La malla electrificada es la adecuadas, hay sufucientes y son resistentes?', 'La-malla-electrificada-es-la-adecuadas-hay-sufucientes-y-son-resistentes', '2018-08-25 18:36:20', '2018-08-25 18:36:20', 35),
(104, '¿El sistema eléctrico es probado periódicamente (semanalmente)?', 'El-sistema-electrico-es-probado-periodicamente-semanalmente', '2018-08-25 18:36:26', '2018-08-25 18:36:26', 35),
(105, '¿La malla electrificada se encuentra monitoreada?', 'La-malla-electrificada-se-encuentra-monitoreada', '2018-08-25 18:36:37', '2018-08-25 18:36:37', 35),
(106, '¿Los funcionarios autorizados para armar y desactivar el Sistema de Alarmas tienen asignada una Clave de Acceso?', 'Los-funcionarios-autorizados-para-armar-y-desactivar-el-Sistema-de-Alarmas-tienen-asignada-una-Clave-de-Acceso', '2018-08-25 18:36:50', '2018-08-25 18:36:50', 36),
(107, '¿Los funcionarios autorizados para armar y desactivar el Sistema de Alarmas tienen asignada una Clave de Acceso adicional para ser empleada en caso de una situación delictiva?', 'Los-funcionarios-autorizados-para-armar-y-desactivar-el-Sistema-de-Alarmas-tienen-asignada-una-Clave-de-Acceso-adicional-para-ser-empleada-en-caso-de-una-situacion-delictiva', '2018-08-25 18:36:56', '2018-08-25 18:36:56', 36),
(108, '¿Las claves de acceso son actualizadas cada seis meses?', 'Las-claves-de-acceso-son-actualizadas-cada-seis-meses', '2018-08-25 18:37:01', '2018-08-25 18:37:01', 36),
(109, '¿La empresa cuenta con dispositivos alarmas contra incendio?', 'La-empresa-cuenta-con-dispositivos-alarmas-contra-incendio', '2018-08-25 18:37:19', '2018-08-25 18:37:19', 37),
(110, '¿La empresa cuenta con dispositivos alarmas para derramamiento de agua?', 'La-empresa-cuenta-con-dispositivos-alarmas-para-derramamiento-de-agua', '2018-08-25 18:37:24', '2018-08-25 18:37:24', 37),
(111, '¿La cantidad de sensores es adecuada para cumplir su tarea principal?', 'La-cantidad-de-sensores-es-adecuada-para-cumplir-su-tarea-principal', '2018-08-25 18:37:32', '2018-08-25 18:37:32', 37),
(112, '¿Las características técnicas de los sensores cumplen con el objetivo para el cual fueron instalados AI?', 'Las-caracteristicas-tecnicas-de-los-sensores-cumplen-con-el-objetivo-para-el-cual-fueron-instalados-AI', '2018-08-25 18:38:13', '2018-08-25 18:38:13', 38),
(113, '¿Todos los sensores instalados están disponibles AI?', 'Todos-los-sensores-instalados-estan-disponibles-AI', '2018-08-25 18:38:28', '2018-08-25 18:38:28', 38),
(114, '¿Las características técnicas de los sensores apoyan o soportan al CCTV AI?', 'Las-caracteristicas-tecnicas-de-los-sensores-apoyan-o-soportan-al-CCTV-AI', '2018-08-25 18:38:37', '2018-08-25 18:38:37', 38),
(115, '¿Se han hecho pruebas de operatividad de los sensores con la Empresa de Monitoreo de la Alarma, por lo menos una vez quincena AD?', 'Se-han-hecho-pruebas-de-operatividad-de-los-sensores-con-la-Empresa-de-Monitoreo-de-la-Alarma-por-lo-menos-una-vez-quincena-AD', '2018-08-25 18:39:53', '2018-08-25 18:39:53', 39),
(116, '¿Los tiempos de respuesta de la Empresa de Monitoreo de la Alarma son adecuados AD?', 'Los-tiempos-de-respuesta-de-la-Empresa-de-Monitoreo-de-la-Alarma-son-adecuados-AD', '2018-08-25 18:40:06', '2018-08-25 18:40:06', 39),
(117, '¿Se han hecho Encuestas de satisfacción del servicio por parte de la Empresa prestadora del servicio de Monitoreo AD? ', 'Se-han-hecho-Encuestas-de-satisfaccion-del-servicio-por-parte-de-la-Empresa-prestadora-del-servicio-de-Monitoreo-AD', '2018-08-25 18:40:28', '2018-08-25 18:40:28', 39),
(118, 'tecnología  analógica', 'tecnologia-analogica', '2018-08-25 18:41:40', '2018-08-25 18:41:40', 40),
(119, 'tecnología  convencional', 'tecnologia-convencional', '2018-08-25 18:42:44', '2018-08-25 18:42:44', 40),
(120, 'detectores ópticos de humo', 'detectores-opticos-de-humo', '2018-08-25 18:42:50', '2018-08-25 18:42:50', 40),
(121, 'detectores iónicos de humo', 'detectores-ionicos-de-humo', '2018-08-25 18:42:55', '2018-08-25 18:42:55', 40),
(122, 'detectores térmicos', 'detectores-termicos', '2018-08-25 18:42:59', '2018-08-25 18:42:59', 40),
(123, '1. la velocidad probable de desarrollo del fuego', '1-la-velocidad-probable-de-desarrollo-del-fuego', '2018-08-25 18:43:55', '2018-08-25 18:43:55', 41),
(124, '2. la altura del local', '2-la-altura-del-local', '2018-08-25 18:43:59', '2018-08-25 18:43:59', 41),
(125, '3. la temperatura ambiente', '3-la-temperatura-ambiente', '2018-08-25 18:44:04', '2018-08-25 18:44:04', 41),
(126, '4. el movimiento del aire', '4-el-movimiento-del-aire', '2018-08-25 18:44:30', '2018-08-25 18:44:30', 41),
(127, '5. las vibraciones previsibles', '5-las-vibraciones-previsibles', '2018-08-25 18:44:35', '2018-08-25 18:44:35', 41),
(128, '¿La superficie vigilada por cada detector es inferior a los valores máximos admitidos?', 'La-superficie-vigilada-por-cada-detector-es-inferior-a-los-valores-maximos-admitidos', '2018-08-25 18:44:57', '2018-08-25 18:44:57', 42),
(129, '¿Las distancias entre detectores y muros son superiores a 0,5 m., salvo en pasillos de 1 m. de ancho?', 'Las-distancias-entre-detectores-y-muros-son-superiores-a-0-5-m-salvo-en-pasillos-de-1-m-de-ancho', '2018-08-25 18:45:03', '2018-08-25 18:45:03', 42),
(130, '¿Las distancias de los detectores al suelo son inferiores a 12 m?', 'Las-distancias-de-los-detectores-al-suelo-son-inferiores-a-12-m', '2018-08-25 18:45:08', '2018-08-25 18:45:08', 42),
(131, '¿Esta libre de obstaculos una zona de 0,5 m. alrededor de cada detector?', 'Esta-libre-de-obstaculos-una-zona-de-0-5-m-alrededor-de-cada-detector', '2018-08-25 18:45:13', '2018-08-25 18:45:13', 42),
(132, '¿La superficie vigilada por cada detector es inferior a los valores máximos admitidos? DT', 'La-superficie-vigilada-por-cada-detector-es-inferior-a-los-valores-maximos-admitidos-DT', '2018-08-25 18:46:28', '2018-08-25 18:46:28', 43),
(133, '¿Las distancias entre detectores y muros son superiores a 0,5 m., salvo en pasillos de 1 m. de ancho? DT', 'Las-distancias-entre-detectores-y-muros-son-superiores-a-0-5-m-salvo-en-pasillos-de-1-m-de-ancho-DT', '2018-08-25 18:46:56', '2018-08-25 18:46:56', 43),
(134, '¿Esta  libre de obstáculos una zona de 0,5 m.  alrededor de cada detector,  lateralmente y  por  debajo  del mismo?', 'Esta-libre-de-obstaculos-una-zona-de-0-5-m-alrededor-de-cada-detector-lateralmente-y-por-debajo-del-mismo', '2018-08-25 18:47:04', '2018-08-25 18:47:04', 43),
(135, 'existen los extintores adecuados a las clases de fuego posibles', 'existen-los-extintores-adecuados-a-las-clases-de-fuego-posibles', '2018-08-25 18:47:27', '2018-08-25 18:47:27', 44),
(136, 'la distancia desde cualquier punto al extintor más cercano no excede de: 25 m. para extintores que han de usarse en fuegos de clase A - 50 m. para extintores que han de usarse en fuegos de tipo B', 'la-distancia-desde-cualquier-punto-al-extintor-mas-cercano-no-excede-de-25-m-para-extintores-que-han-de-usarse-en-fuegos-de-clase-A-50-m-para-extintores-que-han-de-usarse-en-fuegos-de-tipo-B', '2018-08-25 18:52:44', '2018-08-25 18:52:44', 44),
(137, 'El emplazamiento de los extintores es correcto', 'El-emplazamiento-de-los-extintores-es-correcto', '2018-08-25 18:53:16', '2018-08-25 18:53:16', 44),
(138, 'Existe señalización de los extintores', 'Existe-senalizacion-de-los-extintores', '2018-08-25 18:53:21', '2018-08-25 18:53:21', 44),
(139, 'existen puntos de limpieza correctamente  instalados?', 'existen-puntos-de-limpieza-correctamente-instalados', '2018-08-25 18:54:13', '2018-08-25 18:54:13', 45),
(140, 'existen puntos de prueba correctamente instalados?', 'existen-puntos-de-prueba-correctamente-instalados', '2018-08-25 18:54:21', '2018-08-25 18:54:21', 45),
(141, 'existe un soporte como máximo cada 4 m.?', 'existe-un-soporte-como-maximo-cada-4-m', '2018-08-25 18:54:44', '2018-08-25 18:54:44', 45),
(142, 'Los cálculos  del diseño, concentración y diámetros son correctos?', 'Los-calculos-del-diseno-concentracion-y-diametros-son-correctos', '2018-08-25 18:55:38', '2018-08-25 18:55:38', 46),
(143, 'La tubería utilizada es la correcta en términos de presión?', 'La-tuberia-utilizada-es-la-correcta-en-terminos-de-presion', '2018-08-25 18:56:04', '2018-08-25 18:56:04', 46),
(144, 'La soportación utilizada es correcta (soportes fijos)?', 'La-soportacion-utilizada-es-correcta-soportes-fijos', '2018-08-25 18:56:14', '2018-08-25 18:56:14', 46),
(145, 'Existe un mecanismo para detectar una fuga o derramamiento de agua?', 'Existe-un-mecanismo-para-detectar-una-fuga-o-derramamiento-de-agua', '2018-08-25 18:56:43', '2018-08-25 18:56:43', 47),
(146, '¿La cantidad de detectores son adecuados para cumplir su tarea principal?', 'La-cantidad-de-detectores-son-adecuados-para-cumplir-su-tarea-principal', '2018-08-25 18:56:49', '2018-08-25 18:56:49', 47),
(147, 'Es el techo del área de servidores impermeable para evitar el paso de agua desde niveles superiores?', 'Es-el-techo-del-area-de-servidores-impermeable-para-evitar-el-paso-de-agua-desde-niveles-superiores', '2018-08-25 18:56:54', '2018-08-25 18:56:54', 47),
(148, '¿La central es individual y exclusiva del usuario?', 'La-central-es-individual-y-exclusiva-del-usuario', '2018-08-25 18:57:07', '2018-08-25 18:57:07', 48),
(149, '¿Las pruebas de funcionamiento se han realizado con resultado favorable?', 'Las-pruebas-de-funcionamiento-se-han-realizado-con-resultado-favorable', '2018-08-25 18:57:11', '2018-08-25 18:57:11', 48),
(150, '¿Esta situada en las cercanias de un acceso principal a nivel de calle y accesible?', 'Esta-situada-en-las-cercanias-de-un-acceso-principal-a-nivel-de-calle-y-accesible', '2018-08-25 18:57:15', '2018-08-25 18:57:15', 48),
(151, '¿Los funcionarios autorizados para armar y desactivar el Sistema de Alarmas tienen asignada una Clave de Acceso? AD', 'Los-funcionarios-autorizados-para-armar-y-desactivar-el-Sistema-de-Alarmas-tienen-asignada-una-Clave-de-Acceso-AD', '2018-08-25 18:57:51', '2018-08-25 18:57:51', 49),
(152, '¿Los funcionarios autorizados para armar y desactivar el Sistema de Alarmas tienen asignada una Clave de Acceso adicional para ser empleada en caso de una situación delictiva? AD', 'Los-funcionarios-autorizados-para-armar-y-desactivar-el-Sistema-de-Alarmas-tienen-asignada-una-Clave-de-Acceso-adicional-para-ser-empleada-en-caso-de-una-situacion-delictiva-AD', '2018-08-25 18:58:03', '2018-08-25 18:58:03', 49),
(153, '¿Las claves de acceso son actualizadas cada seis meses? AD', 'Las-claves-de-acceso-son-actualizadas-cada-seis-meses-AD', '2018-08-25 18:58:15', '2018-08-25 18:58:15', 49),
(154, '¿Existe un procedimiento para el control de acceso de visitantes?', 'Existe-un-procedimiento-para-el-control-de-acceso-de-visitantes', '2018-08-25 18:58:42', '2018-08-25 18:58:42', 50),
(155, '¿Existe un software que agilice y optimice el control de acceso de visitantes?', 'Existe-un-software-que-agilice-y-optimice-el-control-de-acceso-de-visitantes', '2018-08-25 18:58:48', '2018-08-25 18:58:48', 50),
(156, '¿Dentro de los procedimientos se encuentra el registro fotográfico de la persona visitante?', 'Dentro-de-los-procedimientos-se-encuentra-el-registro-fotografico-de-la-persona-visitante', '2018-08-25 18:58:52', '2018-08-25 18:58:52', 50),
(157, '¿El control de acceso de visitantes cuenta con una inspección personal mediante la ayuda de un Garrett?', 'El-control-de-acceso-de-visitantes-cuenta-con-una-inspeccion-personal-mediante-la-ayuda-de-un-Garrett', '2018-08-25 18:59:05', '2018-08-25 18:59:05', 51),
(158, 'Para casos especiales ¿La empresa de vigilancia cuenta con caninos entrenados que ayuden a prevenir la entrada de elementos peligrosos o sustancias psico-activas?', 'Para-casos-especiales-La-empresa-de-vigilancia-cuenta-con-caninos-entrenados-que-ayuden-a-prevenir-la-entrada-de-elementos-peligrosos-o-sustancias-psico-activas', '2018-08-25 18:59:09', '2018-08-25 18:59:09', 51),
(159, '¿El control de acceso de visitantes cuenta con Arcos infra-rojos y Rayos X para objetos?', 'El-control-de-acceso-de-visitantes-cuenta-con-Arcos-infra-rojos-y-Rayos-X-para-objetos', '2018-08-25 18:59:20', '2018-08-25 18:59:20', 51),
(160, 'Para casos especiales ¿La empresa de vigilancia le suministra al visitante una tarjeta RIF para su desplazamiento al interior de las instalaciones?', 'Para-casos-especiales-La-empresa-de-vigilancia-le-suministra-al-visitante-una-tarjeta-RIF-para-su-desplazamiento-al-interior-de-las-instalaciones', '2018-08-25 18:59:27', '2018-08-25 18:59:27', 51),
(161, '¿Existe un procedimiento para el control de acceso de funcionarios?', 'Existe-un-procedimiento-para-el-control-de-acceso-de-funcionarios', '2018-08-25 18:59:57', '2018-08-25 18:59:57', 52),
(162, '¿Existe  un software que agilice y optimice el control de acceso de funcionarios?', 'Existe-un-software-que-agilice-y-optimice-el-control-de-acceso-de-funcionarios', '2018-08-25 19:00:05', '2018-08-25 19:00:05', 52),
(163, '¿La empresa de vigilancia cuenta con ayudas electrónicas que fortalezcan este procedimiento?', 'La-empresa-de-vigilancia-cuenta-con-ayudas-electronicas-que-fortalezcan-este-procedimiento', '2018-08-25 19:00:09', '2018-08-25 19:00:09', 52),
(164, '¿Existe un procedimiento para el control de acceso de vehículos?', 'Existe-un-procedimiento-para-el-control-de-acceso-de-vehiculos', '2018-08-25 19:00:36', '2018-08-25 19:00:36', 53),
(165, '¿Existe  un software que agilice y optimice el control de acceso de vehículos?', 'Existe-un-software-que-agilice-y-optimice-el-control-de-acceso-de-vehiculos', '2018-08-25 19:00:53', '2018-08-25 19:00:53', 53),
(166, '¿La empresa de vigilancia cuenta con ayudas electrónicas que fortalezcan este procedimiento? SCAV ', 'La-empresa-de-vigilancia-cuenta-con-ayudas-electronicas-que-fortalezcan-este-procedimiento-SCAV', '2018-08-25 19:01:29', '2018-08-25 19:01:29', 53),
(167, '¿Los parqueaderos son amplios y suficientes para la cantidad de funcionarios y visitantes?', 'Los-parqueaderos-son-amplios-y-suficientes-para-la-cantidad-de-funcionarios-y-visitantes', '2018-08-25 19:01:51', '2018-08-25 19:01:51', 54),
(168, '¿Los parqueaderos son vigilados o monitoreados mediante CCTV?', 'Los-parqueaderos-son-vigilados-o-monitoreados-mediante-CCTV', '2018-08-25 19:01:56', '2018-08-25 19:01:56', 54),
(169, '¿Los parqueaderos destinados a despacho de mercancías están monitoreados individualmente?', 'Los-parqueaderos-destinados-a-despacho-de-mercancias-estan-monitoreados-individualmente', '2018-08-25 19:02:03', '2018-08-25 19:02:03', 54),
(170, '¿El guarda de seguridad se percata de la identidad de la persona y su vehículo mediante una cámara del CCTV?', 'El-guarda-de-seguridad-se-percata-de-la-identidad-de-la-persona-y-su-vehiculo-mediante-una-camara-del-CCTV', '2018-08-25 19:02:15', '2018-08-25 19:02:15', 55),
(171, '¿El guarda de seguridad es quien activa el sistema de apertura y cierres de portones del acceso vehicular, en el caso de visitantes?', 'El-guarda-de-seguridad-es-quien-activa-el-sistema-de-apertura-y-cierres-de-portones-del-acceso-vehicular-en-el-caso-de-visitantes', '2018-08-25 19:02:21', '2018-08-25 19:02:21', 55),
(172, '¿Los propietarios de vehículos cuentan con tarjeta RIF u otros mecanismos electrónicos para su acceso y salida a las instalaciones ó edificaciones?', 'Los-propietarios-de-vehiculos-cuentan-con-tarjeta-RIF-u-otros-mecanismos-electronicos-para-su-acceso-y-salida-a-las-instalaciones-o-edificaciones', '2018-08-25 19:02:25', '2018-08-25 19:02:25', 55),
(173, 'Se capacita al personal de seguridad en la utilizacion de los dispositivos y herramientas tecnologicas de seguridad?.', 'Se-capacita-al-personal-de-seguridad-en-la-utilizacion-de-los-dispositivos-y-herramientas-tecnologicas-de-seguridad', '2018-08-25 19:02:51', '2018-08-25 19:02:51', 56),
(174, 'Se recibe capacitación frecuentemente acerca de los avances tecnológicos y actualizaciones de los sistemas?', 'Se-recibe-capacitacion-frecuentemente-acerca-de-los-avances-tecnologicos-y-actualizaciones-de-los-sistemas', '2018-08-25 19:03:01', '2018-08-25 19:03:01', 56),
(175, 'Existe alguna bitácora de funcionamiento del sistema?', 'Existe-alguna-bitacora-de-funcionamiento-del-sistema', '2018-08-25 19:03:32', '2018-08-25 19:03:32', 56),
(176, '¿La empresa dispone de unas políticas de seguridad para la selección e incorporación de sus funcionarios?', 'La-empresa-dispone-de-unas-politicas-de-seguridad-para-la-seleccion-e-incorporacion-de-sus-funcionarios', '2018-08-25 19:03:57', '2018-08-25 19:03:57', 57),
(177, '¿La empresa dispone de unas políticas de seguridad para el desempeño de sus funcionarios?', 'La-empresa-dispone-de-unas-politicas-de-seguridad-para-el-desempeno-de-sus-funcionarios', '2018-08-25 19:04:03', '2018-08-25 19:04:03', 57),
(178, '¿En la selección se contemplan pruebas para detectar nexos con organizaciones armadas al margen de la Ley?', 'En-la-seleccion-se-contemplan-pruebas-para-detectar-nexos-con-organizaciones-armadas-al-margen-de-la-Ley', '2018-08-25 19:04:08', '2018-08-25 19:04:08', 57),
(179, '¿Se realizan Estudios de Confiabilidad a todos los empleados incluyendo contratistas y temporales?', 'Se-realizan-Estudios-de-Confiabilidad-a-todos-los-empleados-incluyendo-contratistas-y-temporales', '2018-08-25 19:04:21', '2018-08-25 19:04:21', 58),
(180, '¿Se realizan Estudios de Confiabilidad a todas las empresas con quienes se tendran vinculos contractuales?', 'Se-realizan-Estudios-de-Confiabilidad-a-todas-las-empresas-con-quienes-se-tendran-vinculos-contractuales', '2018-08-25 19:04:26', '2018-08-25 19:04:26', 58),
(181, '¿Se verifican los antecedentes policiales?', 'Se-verifican-los-antecedentes-policiales', '2018-08-25 19:04:30', '2018-08-25 19:04:30', 58),
(182, '¿Se verifican los antecedentes disciplinarios (Procuraduría)?', 'Se-verifican-los-antecedentes-disciplinarios-Procuraduria', '2018-08-25 19:04:35', '2018-08-25 19:04:35', 58),
(183, '¿Se hacen pruebas de poligrafo para la selección de cargos críticos para la empresa?', 'Se-hacen-pruebas-de-poligrafo-para-la-seleccion-de-cargos-criticos-para-la-empresa', '2018-08-25 19:04:57', '2018-08-25 19:04:57', 59),
(184, '¿Se hacen pruebas de poligrafo periódicamente a todos los empleados de la empresa?', 'Se-hacen-pruebas-de-poligrafo-periodicamente-a-todos-los-empleados-de-la-empresa', '2018-08-25 19:05:02', '2018-08-25 19:05:02', 59),
(185, '¿Se hacen pruebas de poligrafo para el desarrollo de investigaciones al interior de la empresa?', 'Se-hacen-pruebas-de-poligrafo-para-el-desarrollo-de-investigaciones-al-interior-de-la-empresa', '2018-08-25 19:05:06', '2018-08-25 19:05:06', 59),
(186, '¿La empresa tiene diseñados Planes de Protección de Dignatarios?', 'La-empresa-tiene-disenados-Planes-de-Proteccion-de-Dignatarios', '2018-08-25 19:05:28', '2018-08-25 19:05:28', 60),
(187, '¿Los Planes de Protección diseñados son ensayados bimensualmente?', 'Los-Planes-de-Proteccion-disenados-son-ensayados-bimensualmente', '2018-08-25 19:05:32', '2018-08-25 19:05:32', 60),
(188, '¿La empresa cuenta con las evidencias físicas (actas) de los ensayos y simulacros?', 'La-empresa-cuenta-con-las-evidencias-fisicas-actas-de-los-ensayos-y-simulacros', '2018-08-25 19:05:38', '2018-08-25 19:05:38', 60),
(189, '¿Dentro del Plan de Protección se contempla un Esquema para entender con mayor facilidad el desarrollo del mismo?', 'Dentro-del-Plan-de-Proteccion-se-contempla-un-Esquema-para-entender-con-mayor-facilidad-el-desarrollo-del-mismo', '2018-08-25 19:05:55', '2018-08-25 19:05:55', 61),
(190, '¿El Esquema de protección es robusto pero a su vez es fácil de entender y aplicar?', 'El-Esquema-de-proteccion-es-robusto-pero-a-su-vez-es-facil-de-entender-y-aplicar', '2018-08-25 19:06:00', '2018-08-25 19:06:00', 61),
(191, '¿Las personas comprometidas con la Protección de los dignatarios y que participan en su desarrollo comprenden las tareas asignadas?', 'Las-personas-comprometidas-con-la-Proteccion-de-los-dignatarios-y-que-participan-en-su-desarrollo-comprenden-las-tareas-asignadas', '2018-08-25 19:06:06', '2018-08-25 19:06:06', 61),
(193, '¿La empresa tiene diseñados Planes de Protección de Dignatarios en los que haya necesidad de incluir escoltas armados?', 'La-empresa-tiene-disenados-Planes-de-Proteccion-de-Dignatarios-en-los-que-haya-necesidad-de-incluir-escoltas-armados', '2018-08-25 19:06:57', '2018-08-25 19:06:57', 62),
(194, '¿La empresa ha capacitado o solicitado la capacitación de sus escoltas en el manejo de armas?', 'La-empresa-ha-capacitado-o-solicitado-la-capacitacion-de-sus-escoltas-en-el-manejo-de-armas', '2018-08-25 19:07:08', '2018-08-25 19:07:08', 62),
(195, '¿Los escoltas armados han realizado ejercicios de tiro instintivo mensualmente?', 'Los-escoltas-armados-han-realizado-ejercicios-de-tiro-instintivo-mensualmente', '2018-08-25 19:07:13', '2018-08-25 19:07:13', 62),
(196, '¿La empresa cuenta con las evidencias físicas (actas) de los resultados de los ejercicios de tiro?', 'La-empresa-cuenta-con-las-evidencias-fisicas-actas-de-los-resultados-de-los-ejercicios-de-tiro', '2018-08-25 19:07:34', '2018-08-25 19:07:34', 62),
(197, 'Tiene identificado los incidentes  que afecten la seguridad de los directivos y familias.', 'Tiene-identificado-los-incidentes-que-afecten-la-seguridad-de-los-directivos-y-familias', '2018-08-25 19:07:56', '2018-08-25 19:07:56', 63),
(198, 'las amenazas contra la empresa y residencia, se tiene identificados?', 'las-amenazas-contra-la-empresa-y-residencia-se-tiene-identificados', '2018-08-25 19:08:07', '2018-08-25 19:08:07', 63),
(199, 'Actividades  sociales,  fuera de la oficina y actividades rutinarias (Club, Gimnasio, almuerzos) durante la semana?', 'Actividades-sociales-fuera-de-la-oficina-y-actividades-rutinarias-Club-Gimnasio-almuerzos-durante-la-semana', '2018-08-25 19:08:24', '2018-08-25 19:08:24', 63),
(200, 'La Información personal del directivo es manejada de manera segura y profesional?', 'La-Informacion-personal-del-directivo-es-manejada-de-manera-segura-y-profesional', '2018-08-25 19:08:39', '2018-08-25 19:08:39', 63),
(201, 'El directivo y su familia tienen conocimiento sobre técnicas de observación, identificación de sospechosos, conocimiento de la amenaza, manejo de crisis y medidas de seguridad?', 'El-directivo-y-su-familia-tienen-conocimiento-sobre-tecnicas-de-observacion-identificacion-de-sospechosos-conocimiento-de-la-amenaza-manejo-de-crisis-y-medidas-de-seguridad', '2018-08-25 19:09:10', '2018-08-25 19:09:10', 64),
(202, 'Los empleados cercanos al directivo y su familia están capacitados para el manejo de la información, medidas para manejar el acercamiento de extraños, identificación de sospechosos, conocimiento de la amenaza y el manejo de su seguridad personal.', 'Los-empleados-cercanos-al-directivo-y-su-familia-estan-capacitados-para-el-manejo-de-la-informacion-medidas-para-manejar-el-acercamiento-de-extranos-identificacion-de-sospechosos-conocimiento', '2018-08-25 19:09:17', '2018-08-25 19:09:17', 64),
(203, 'El directivo y su familia han realizado prácticas de evasión en la residnecia frente a la acción de elementos delincuenciales.', 'El-directivo-y-su-familia-han-realizado-practicas-de-evasion-en-la-residnecia-frente-a-la-accion-de-elementos-delincuenciales', '2018-08-25 19:09:25', '2018-08-25 19:09:25', 64),
(204, '¿La empresa tiene diseñado un Manual de Procedimientos para el manejo de situaciones de Extorsión y Secuestro?', 'La-empresa-tiene-disenado-un-Manual-de-Procedimientos-para-el-manejo-de-situaciones-de-Extorsion-y-Secuestro', '2018-08-25 19:10:09', '2018-08-25 19:10:09', 65),
(205, '¿Dentro de las Matrices de Riesgos se contemplan los Planes de Acción ó Acciones a seguir en este tipo de eventos?', 'Dentro-de-las-Matrices-de-Riesgos-se-contemplan-los-Planes-de-Accion-o-Acciones-a-seguir-en-este-tipo-de-eventos', '2018-08-25 19:10:14', '2018-08-25 19:10:14', 65),
(206, '¿La empresa cuenta con una acertada comunicación con los organismos de Seguridad del Estado que le permitan orientar sus acciones ante este tipo de riesgos?', 'La-empresa-cuenta-con-una-acertada-comunicacion-con-los-organismos-de-Seguridad-del-Estado-que-le-permitan-orientar-sus-acciones-ante-este-tipo-de-riesgos', '2018-08-25 19:10:19', '2018-08-25 19:10:19', 65),
(207, '¿La empresa tiene diseñado un Manual de Procedimientos para el manejo de situaciones de sabotaje y terrorismo?', 'La-empresa-tiene-disenado-un-Manual-de-Procedimientos-para-el-manejo-de-situaciones-de-sabotaje-y-terrorismo', '2018-08-25 19:10:40', '2018-08-25 19:10:40', 66),
(208, '¿Dentro de las Matrices de Riesgos se contemplan los Planes de Acción ó Acciones a seguir en este tipo de eventos? ST', 'Dentro-de-las-Matrices-de-Riesgos-se-contemplan-los-Planes-de-Accion-o-Acciones-a-seguir-en-este-tipo-de-eventos-ST', '2018-08-25 19:10:58', '2018-08-25 19:10:58', 66),
(209, '¿La empresa cuenta con una acertada comunicación con los organismos de Seguridad del Estado que le permitan orientar sus acciones ante este tipo de riesgos? ST', 'La-empresa-cuenta-con-una-acertada-comunicacion-con-los-organismos-de-Seguridad-del-Estado-que-le-permitan-orientar-sus-acciones-ante-este-tipo-de-riesgos-ST', '2018-08-25 19:11:15', '2018-08-25 19:11:15', 66),
(210, '¿La empresa ha acudido al desarrollo de talleres o charlas que permitan orientar las actividades para afrontar esta clase de eventos?', 'La-empresa-ha-acudido-al-desarrollo-de-talleres-o-charlas-que-permitan-orientar-las-actividades-para-afrontar-esta-clase-de-eventos', '2018-08-25 19:11:26', '2018-08-25 19:11:26', 66);
INSERT INTO `controls` (`id`, `name`, `slug`, `created`, `modified`, `element_id`) VALUES
(211, '¿La empresa dispone de un protocolo de procedimientos (documentado), en el que se incluyan los procesos de selección de funcionarios propios y subcontratados?', 'La-empresa-dispone-de-un-protocolo-de-procedimientos-documentado-en-el-que-se-incluyan-los-procesos-de-seleccion-de-funcionarios-propios-y-subcontratados', '2018-08-25 19:12:20', '2018-08-25 19:12:20', 67),
(212, '¿Existe un formulario ó formato diseñado por la empresa para la incorporación del personal?', 'Existe-un-formulario-o-formato-disenado-por-la-empresa-para-la-incorporacion-del-personal', '2018-08-25 19:12:27', '2018-08-25 19:12:27', 67),
(213, '¿El formato consta del registro fotográfico y de los empleos anteriores?', 'El-formato-consta-del-registro-fotografico-y-de-los-empleos-anteriores', '2018-08-25 19:12:31', '2018-08-25 19:12:31', 67),
(214, '¿El formato es cotejado con la Hoja de Vida presentada por el aspirante?', 'El-formato-es-cotejado-con-la-Hoja-de-Vida-presentada-por-el-aspirante', '2018-08-25 19:12:35', '2018-08-25 19:12:35', 67),
(215, '¿ Se realizan visitas domiciliarias a los aspirantes?', 'Se-realizan-visitas-domiciliarias-a-los-aspirantes', '2018-08-25 19:12:45', '2018-08-25 19:12:45', 68),
(216, '¿En la visita domiciliaria se coteja la información personal y familiar mencionada en la Hoja de Vida, incluyendo sus Documentos personales (C.C., Diplomas, Certificaciones)?', 'En-la-visita-domiciliaria-se-coteja-la-informacion-personal-y-familiar-mencionada-en-la-Hoja-de-Vida-incluyendo-sus-Documentos-personales-C-C-Diplomas-Certificaciones', '2018-08-25 19:12:51', '2018-08-25 19:12:51', 68),
(217, '¿En la visita domiciliaria se coteja la relación entre su nivel de vida e ingresos con lo encontrado en la vivienda?', 'En-la-visita-domiciliaria-se-coteja-la-relacion-entre-su-nivel-de-vida-e-ingresos-con-lo-encontrado-en-la-vivienda', '2018-08-25 19:12:57', '2018-08-25 19:12:57', 68),
(218, '¿Existen pruebas documentadas sobre la visita domiciliaria?', 'Existen-pruebas-documentadas-sobre-la-visita-domiciliaria', '2018-08-25 19:13:05', '2018-08-25 19:13:05', 68),
(219, '¿Se tiene implantado un Sistema de Gestión de Seguridad de la Información (SGSI) - ISO 27000 - 27001?', 'Se-tiene-implantado-un-Sistema-de-Gestion-de-Seguridad-de-la-Informacion-SGSI-ISO-27000-27001', '2018-08-25 19:17:20', '2018-08-25 19:17:20', 88),
(220, 'La dirección de la organización se compromete con el establecimiento, implementación, operación, monitorización, revisión, mantenimiento y mejora del SGSI).', 'La-direccion-de-la-organizacion-se-compromete-con-el-establecimiento-implementacion-operacion-monitorizacion-revision-mantenimiento-y-mejora-del-SGSI', '2018-08-25 19:17:39', '2018-08-25 19:17:39', 69),
(221, '¿La direccion toma la iniciativa de establecer una política de seguridad de la información?', 'La-direccion-toma-la-iniciativa-de-establecer-una-politica-de-seguridad-de-la-informacion', '2018-08-25 19:17:43', '2018-08-25 19:17:43', 69),
(222, '¿Se aseguran de que se establecen objetivos y planes del SGSI?', 'Se-aseguran-de-que-se-establecen-objetivos-y-planes-del-SGSI', '2018-08-25 19:17:48', '2018-08-25 19:17:48', 69),
(223, 'La dirección garantiza que se asignen los suficientes recursos para establecer, implementar, operar, monitorizar, revisar, mantener y mejorar el SGSI?', 'La-direccion-garantiza-que-se-asignen-los-suficientes-recursos-para-establecer-implementar-operar-monitorizar-revisar-mantener-y-mejorar-el-SGSI', '2018-08-25 19:18:01', '2018-08-25 19:18:01', 70),
(224, 'Garantizan que los procedimientos de seguridad de la información apoyan los requerimientos de negocio?', 'Garantizan-que-los-procedimientos-de-seguridad-de-la-informacion-apoyan-los-requerimientos-de-negocio', '2018-08-25 19:18:09', '2018-08-25 19:18:09', 70),
(225, 'Identifican y tratan todos los requerimientos legales y normativos, así como las obligaciones contractuales de seguridad?', 'Identifican-y-tratan-todos-los-requerimientos-legales-y-normativos-asi-como-las-obligaciones-contractuales-de-seguridad', '2018-08-25 19:18:19', '2018-08-25 19:18:19', 70),
(226, '¿La dirección asegura que todo el personal de la organización al que se le asignen responsabilidades definidas en el SGSI esté suficientemente capacitado?', 'La-direccion-asegura-que-todo-el-personal-de-la-organizacion-al-que-se-le-asignen-responsabilidades-definidas-en-el-SGSI-este-suficientemente-capacitado', '2018-08-25 19:18:53', '2018-08-25 19:18:53', 71),
(227, 'Se determinan las competencias necesarias para el personal que realiza tareas en aplicación del SGSI.', 'Se-determinan-las-competencias-necesarias-para-el-personal-que-realiza-tareas-en-aplicacion-del-SGSI', '2018-08-25 19:18:58', '2018-08-25 19:18:58', 71),
(228, 'Satisfacen dichas necesidades por medio de formación o de otras acciones como, p. ej., contratación de personal ya formado?', 'Satisfacen-dichas-necesidades-por-medio-de-formacion-o-de-otras-acciones-como-p-ej-contratacion-de-personal-ya-formado', '2018-08-25 19:19:04', '2018-08-25 19:19:04', 71),
(229, 'Se revisa el SGSI por parte de la dirección periódicamente para garantizar que el alcance definido sigue siendo el adecuado y que las mejoras en el proceso del SGSI son evidentes.', 'Se-revisa-el-SGSI-por-parte-de-la-direccion-periodicamente-para-garantizar-que-el-alcance-definido-sigue-siendo-el-adecuado-y-que-las-mejoras-en-el-proceso-del-SGSI-son-evidentes', '2018-08-25 19:19:25', '2018-08-25 19:19:25', 72),
(230, 'La direccion recibe una serie de informaciones, que le ayuden a tomar decisiones, como resultados de auditorías y revisiones del SGSI?', 'La-direccion-recibe-una-serie-de-informaciones-que-le-ayuden-a-tomar-decisiones-como-resultados-de-auditorias-y-revisiones-del-SGSI', '2018-08-25 19:19:29', '2018-08-25 19:19:29', 72),
(231, 'Tiene conocimiento de técnicas, productos o procedimientos que pudieran ser útiles para mejorar el rendimiento y eficacia del SGSI?', 'Tiene-conocimiento-de-tecnicas-productos-o-procedimientos-que-pudieran-ser-utiles-para-mejorar-el-rendimiento-y-eficacia-del-SGSI', '2018-08-25 19:19:33', '2018-08-25 19:19:33', 72),
(232, '¿La empresa tiene una política general en materia de seguridad informática?', 'La-empresa-tiene-una-politica-general-en-materia-de-seguridad-informatica', '2018-08-25 19:19:57', '2018-08-25 19:19:57', 73),
(233, '¿Se encuentran documentados los procedimientos para el manejo de la información sistematizada?', 'Se-encuentran-documentados-los-procedimientos-para-el-manejo-de-la-informacion-sistematizada', '2018-08-25 19:20:05', '2018-08-25 19:20:05', 73),
(234, '¿Existen roles y responsabilidades de seguridad de la información definidos dentro de la organización, indicando nombre del empleado, cargo, rol de seguridad y funciones de seguridad?', 'Existen-roles-y-responsabilidades-de-seguridad-de-la-informacion-definidos-dentro-de-la-organizacion-indicando-nombre-del-empleado-cargo-rol-de-seguridad-y-funciones-de-seguridad', '2018-08-25 19:20:10', '2018-08-25 19:20:10', 73),
(235, '¿Se incluyen políticas o cláusulas de seguridad de la información en contratos con terceras partes?', 'Se-incluyen-politicas-o-clausulas-de-seguridad-de-la-informacion-en-contratos-con-terceras-partes', '2018-08-25 19:20:14', '2018-08-25 19:20:14', 73),
(236, '¿La empresa cuenta con una Política Gerencial sobre el manejo del archivo?', 'La-empresa-cuenta-con-una-Politica-Gerencial-sobre-el-manejo-del-archivo', '2018-08-25 19:20:35', '2018-08-25 19:20:35', 74),
(237, '¿La empresa cuenta con un manual de procedimientos para el uso y empleo del Archivo vivo y muerto?', 'La-empresa-cuenta-con-un-manual-de-procedimientos-para-el-uso-y-empleo-del-Archivo-vivo-y-muerto', '2018-08-25 19:20:40', '2018-08-25 19:20:40', 74),
(238, '¿Dentro de los procedimientos se tiene contemplado el uso de cajas de cartón, carpetas celuguías y ganchos legajadores plásticos?', 'Dentro-de-los-procedimientos-se-tiene-contemplado-el-uso-de-cajas-de-carton-carpetas-celuguias-y-ganchos-legajadores-plasticos', '2018-08-25 19:20:45', '2018-08-25 19:20:45', 74),
(239, '¿Los procedimientos para la seguridad del archivo se cumplen a cabalidad?', 'Los-procedimientos-para-la-seguridad-del-archivo-se-cumplen-a-cabalidad', '2018-08-25 19:20:50', '2018-08-25 19:20:50', 74),
(240, '¿El Strip telefónico cuenta con las medidas de seguridad para evitar su manipulación?', 'El-Strip-telefonico-cuenta-con-las-medidas-de-seguridad-para-evitar-su-manipulacion', '2018-08-25 19:21:10', '2018-08-25 19:21:10', 75),
(241, '¿El Strip telefónico cuenta con un esquema o diagrama de consulta?', 'El-Strip-telefonico-cuenta-con-un-esquema-o-diagrama-de-consulta', '2018-08-25 19:21:15', '2018-08-25 19:21:15', 75),
(242, '¿Las líneas telefónicas del Strip se encuentran libres de doble-pases?', 'Las-lineas-telefonicas-del-Strip-se-encuentran-libres-de-doble-pases', '2018-08-25 19:21:19', '2018-08-25 19:21:19', 75),
(243, '¿El acceso al Strip telefónico es restringido?', 'El-acceso-al-Strip-telefonico-es-restringido', '2018-08-25 19:21:24', '2018-08-25 19:21:24', 75),
(244, '¿La empresa cuenta con un Manual de Procedimientos que regulen las peculiaridades del Sistema de redes?', 'La-empresa-cuenta-con-un-Manual-de-Procedimientos-que-regulen-las-peculiaridades-del-Sistema-de-redes', '2018-08-25 19:21:56', '2018-08-25 19:21:56', 76),
(245, '¿La empresa cuenta con un Mapa de Red?', 'La-empresa-cuenta-con-un-Mapa-de-Red', '2018-08-25 19:22:01', '2018-08-25 19:22:01', 76),
(246, '¿La empresa cuenta con las respectivas hojas de vida de cada uno de los equipos que conforman la Red?', 'La-empresa-cuenta-con-las-respectivas-hojas-de-vida-de-cada-uno-de-los-equipos-que-conforman-la-Red', '2018-08-25 19:22:05', '2018-08-25 19:22:05', 76),
(247, '¿La empresa cuenta con el listado de fechas de vencimientos de software y persona encargada de renovarlos?', 'La-empresa-cuenta-con-el-listado-de-fechas-de-vencimientos-de-software-y-persona-encargada-de-renovarlos', '2018-08-25 19:22:09', '2018-08-25 19:22:09', 76),
(248, '¿Posees un procedimiento escrito para evaluar el asociado de negocios?', 'Posees-un-procedimiento-escrito-para-evaluar-el-asociado-de-negocios', '2018-08-25 19:22:48', '2018-08-25 19:22:48', 77),
(249, '¿El asociado de negocios posee certificaciones de entidades que promuevan el comercio seguro (BASC-OEA)?', 'El-asociado-de-negocios-posee-certificaciones-de-entidades-que-promuevan-el-comercio-seguro-BASC-OEA', '2018-08-25 19:22:57', '2018-08-25 19:22:57', 77),
(250, '¿El asociado de negocios posee una certificación  de un programa de seguridad de la cadena de suministros, administrado por una autoridad aduanera nacional o extranjera?', 'El-asociado-de-negocios-posee-una-certificacion-de-un-programa-de-seguridad-de-la-cadena-de-suministros-administrado-por-una-autoridad-aduanera-nacional-o-extranjera', '2018-08-25 19:23:02', '2018-08-25 19:23:02', 77),
(251, '¿Posee acuerdos escritos  de seguridad para aquellos asociados de negocios no certificados por entidades que promueven el comercio seguro?', 'Posee-acuerdos-escritos-de-seguridad-para-aquellos-asociados-de-negocios-no-certificados-por-entidades-que-promueven-el-comercio-seguro', '2018-08-25 19:23:18', '2018-08-25 19:23:18', 77),
(252, '¿Se supervisan los procedimientos de recibo y entrega de carga?', 'Se-supervisan-los-procedimientos-de-recibo-y-entrega-de-carga', '2018-08-25 19:23:49', '2018-08-25 19:23:49', 78),
(253, '¿El área de recibo y entrega de mercancía cuenta con el apoyo del área de seguridad?', 'El-area-de-recibo-y-entrega-de-mercancia-cuenta-con-el-apoyo-del-area-de-seguridad', '2018-08-25 19:23:54', '2018-08-25 19:23:54', 78),
(255, '¿El área de recibo y entrega de mercancía es apoyada por medios de seguridad electrónicos?', 'El-area-de-recibo-y-entrega-de-mercancia-es-apoyada-por-medios-de-seguridad-electronicos', '2018-08-25 19:24:23', '2018-08-25 19:24:23', 78),
(256, '¿Se supervisan los procedimientos de cargue y descargue de mercancia?', 'Se-supervisan-los-procedimientos-de-cargue-y-descargue-de-mercancia', '2018-08-25 19:25:00', '2018-08-25 19:25:00', 79),
(257, '¿Se adelantan auditorías a los vehículos que se encuentran en proceso de cargue y descargue de mercancía?', 'Se-adelantan-auditorias-a-los-vehiculos-que-se-encuentran-en-proceso-de-cargue-y-descargue-de-mercancia', '2018-08-25 19:25:06', '2018-08-25 19:25:06', 79),
(258, 'El proceso de alistamiento de la mercancía es supervisado por el auditor o jefe de bodega?', 'El-proceso-de-alistamiento-de-la-mercancia-es-supervisado-por-el-auditor-o-jefe-de-bodega', '2018-08-25 19:25:12', '2018-08-25 19:25:12', 79),
(259, '¿La empresa cuenta con medidas de seguridad documentado para el manejo de dinero en efectivo?  ', 'La-empresa-cuenta-con-medidas-de-seguridad-documentado-para-el-manejo-de-dinero-en-efectivo', '2018-08-25 19:26:16', '2018-08-25 19:26:16', 81),
(260, '¿El área donde se almacena el dinero en efectivo cuenta con medidas de seguridad adicionales? ', 'El-area-donde-se-almacena-el-dinero-en-efectivo-cuenta-con-medidas-de-seguridad-adicionales', '2018-08-25 19:26:32', '2018-08-25 19:26:32', 81),
(261, '¿Los departamentos de la empresa que manejan dinero en efectivo, tienen documentados sus procedimientos?', 'Los-departamentos-de-la-empresa-que-manejan-dinero-en-efectivo-tienen-documentados-sus-procedimientos', '2018-08-25 19:26:43', '2018-08-25 19:26:43', 81),
(262, '¿Existen medidas de seguridad para el manejo de cheques?', 'Existen-medidas-de-seguridad-para-el-manejo-de-cheques', '2018-08-25 19:27:00', '2018-08-25 19:27:00', 82),
(263, '¿Los cheques, títulos y documentos de valor se encuentran almacenados en un sitio con medidas de seguridad especiales?', 'Los-cheques-titulos-y-documentos-de-valor-se-encuentran-almacenados-en-un-sitio-con-medidas-de-seguridad-especiales', '2018-08-25 19:27:05', '2018-08-25 19:27:05', 82),
(264, '¿Los pagos virtuales se hacen mediante una plataforma segura, a la cual sólo tengan acceso ciertos empleados?', 'Los-pagos-virtuales-se-hacen-mediante-una-plataforma-segura-a-la-cual-solo-tengan-acceso-ciertos-empleados', '2018-08-25 19:27:10', '2018-08-25 19:27:10', 82),
(265, '¿Existe medidas de seguridad en el empleo de caja fuerte?', 'Existe-medidas-de-seguridad-en-el-empleo-de-caja-fuerte', '2018-08-25 19:27:23', '2018-08-25 19:27:23', 83),
(266, '¿La caja fuerte se encuentra empotrada en la pared, de manera que su extracción no se logre con facilidad?', 'La-caja-fuerte-se-encuentra-empotrada-en-la-pared-de-manera-que-su-extraccion-no-se-logre-con-facilidad', '2018-08-25 19:27:28', '2018-08-25 19:27:28', 83),
(267, '¿La combinación de la clave se cambia periodicamente?', 'La-combinacion-de-la-clave-se-cambia-periodicamente', '2018-08-25 19:27:34', '2018-08-25 19:27:34', 83),
(268, '¿El número de personas que tiene acceso a esta información es restringida?', 'El-numero-de-personas-que-tiene-acceso-a-esta-informacion-es-restringida', '2018-08-25 19:27:40', '2018-08-25 19:27:40', 83),
(269, '¿Se hace seguimiento a las obligaciones contractuales de la empresa transportadora de valores? ', 'Se-hace-seguimiento-a-las-obligaciones-contractuales-de-la-empresa-transportadora-de-valores', '2018-08-25 19:27:54', '2018-08-25 19:27:54', 84),
(270, '¿Existe un procedimiento de seguridad documentado para la recolección de dinero en las instalaciones de la empresa?', 'Existe-un-procedimiento-de-seguridad-documentado-para-la-recoleccion-de-dinero-en-las-instalaciones-de-la-empresa', '2018-08-25 19:28:00', '2018-08-25 19:28:00', 84),
(271, '¿Se verifica la identidad de las personas que vienen de la empresa transportadora de valores?', 'Se-verifica-la-identidad-de-las-personas-que-vienen-de-la-empresa-transportadora-de-valores', '2018-08-25 19:28:06', '2018-08-25 19:28:06', 84),
(272, 'Se vinculan a todos los trabajadores de la empresa en capacitaciones y sensibilizaciones en temas de seguridad.', 'Se-vinculan-a-todos-los-trabajadores-de-la-empresa-en-capacitaciones-y-sensibilizaciones-en-temas-de-seguridad', '2018-08-25 19:28:52', '2018-08-25 19:28:52', 85),
(273, 'Se cuenta con un programa de capacitación anual a fin que todo el personal sepa reconocer y reportar amenazas y vulnerabilidades sobre actividades ilícitas, tales como actos de terrorismo y contrabando en toda la cadena de suministro.', 'Se-cuenta-con-un-programa-de-capacitacion-anual-a-fin-que-todo-el-personal-sepa-reconocer-y-reportar-amenazas-y-vulnerabilidades-sobre-actividades-ilicitas-tales-como-actos-de-terrorismo-y-co', '2018-08-25 19:28:57', '2018-08-25 19:28:57', 85),
(274, 'Se cuenta con un programa de capacitación anual a fin que todos los asesores de tiendas sepan reconocer el modus operandi de los delincuentes y reportar dichas amenazas .', 'Se-cuenta-con-un-programa-de-capacitacion-anual-a-fin-que-todos-los-asesores-de-tiendas-sepan-reconocer-el-modus-operandi-de-los-delincuentes-y-reportar-dichas-amenazas', '2018-08-25 19:29:02', '2018-08-25 19:29:02', 85),
(275, 'Se han capacitado a los empleados que laboran en las áreas de envío y recibo de carga y correspondencia.', 'Se-han-capacitado-a-los-empleados-que-laboran-en-las-areas-de-envio-y-recibo-de-carga-y-correspondencia', '2018-08-25 19:29:07', '2018-08-25 19:29:07', 85),
(276, 'Dispone de políticas de Compliance / Control de cumplimiento?', 'Dispone-de-politicas-de-Compliance-Control-de-cumplimiento', '2018-08-25 19:31:21', '2018-08-25 19:31:21', 86),
(277, 'En qué nivel se encuentra su implementación?', 'En-que-nivel-se-encuentra-su-implementacion', '2018-08-25 19:31:27', '2018-08-25 19:31:27', 86),
(278, 'Dispone de una sistemática para identificar los requisitos legales vigentes?', 'Dispone-de-una-sistematica-para-identificar-los-requisitos-legales-vigentes', '2018-08-25 19:31:33', '2018-08-25 19:31:33', 86),
(279, 'Dispone de un sistema, programa con protocolos y procedimientos de compliance?', 'Dispone-de-un-sistema-programa-con-protocolos-y-procedimientos-de-compliance', '2018-08-25 19:32:12', '2018-08-25 19:32:12', 86);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departaments`
--

CREATE TABLE `departaments` (
  `id` int(11) NOT NULL,
  `departament` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departaments`
--

INSERT INTO `departaments` (`id`, `departament`) VALUES
(5, 'ANTIOQUIA'),
(8, 'ATLÁNTICO'),
(11, 'BOGOTÁ, D.C.'),
(13, 'BOLÍVAR'),
(15, 'BOYACÁ'),
(17, 'CALDAS'),
(18, 'CAQUETÁ'),
(19, 'CAUCA'),
(20, 'CESAR'),
(23, 'CÓRDOBA'),
(25, 'CUNDINAMARCA'),
(27, 'CHOCÓ'),
(41, 'HUILA'),
(44, 'LA GUAJIRA'),
(47, 'MAGDALENA'),
(50, 'META'),
(52, 'NARIÑO'),
(54, 'NORTE DE SANTANDER'),
(63, 'QUINDIO'),
(66, 'RISARALDA'),
(68, 'SANTANDER'),
(70, 'SUCRE'),
(73, 'TOLIMA'),
(76, 'VALLE DEL CAUCA'),
(81, 'ARAUCA'),
(85, 'CASANARE'),
(86, 'PUTUMAYO'),
(88, 'ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA'),
(91, 'AMAZONAS'),
(94, 'GUAINÍA'),
(95, 'GUAVIARE'),
(97, 'VAUPÉS'),
(99, 'VICHADA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departures`
--

CREATE TABLE `departures` (
  `id` int(11) NOT NULL,
  `place` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time_stay` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `character_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departures`
--

INSERT INTO `departures` (`id`, `place`, `date`, `time_stay`, `reason`, `character_id`) VALUES
(4, 'Caracas, Venezuela', '2018-08-28', '5 Dias', 'Vacaciones', 46),
(5, 'Valencia, España', '2018-09-11', '1 Mes', 'Curso de Marinero', 46),
(6, 'La Habana, Cuba', '2018-10-02', '4 Dias', 'Jodiendo a los Castro', 46),
(7, 'Caracas, Venezuela', '2018-08-29', '5 Dias', 'Vacaciones', 47),
(8, 'Valencia, España', '2018-09-04', '1 Mes', 'Curso de Marinero', 47),
(9, 'La Habana, Cuba', '2018-09-01', '10 Dias', 'Jodiendo a los Castro', 47);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `economies`
--

CREATE TABLE `economies` (
  `id` int(11) NOT NULL,
  `home_economics` text NOT NULL,
  `current_credits` text NOT NULL,
  `furniture` text NOT NULL,
  `ummovables` text NOT NULL,
  `home_visity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elements`
--

CREATE TABLE `elements` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `component_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `elements`
--

INSERT INTO `elements` (`id`, `name`, `slug`, `created`, `modified`, `component_id`) VALUES
(1, 'SEGURIDAD EN PROFUNDIDAD GENERAL', 'SEGURIDAD-EN-PROFUNDIDAD-GENERAL', '2018-08-25 17:44:23', '2018-08-25 17:44:23', 1),
(2, 'ÍNDICES DELICTIVOS Y NIVEL DE SEGURIDAD', 'INDICES-DELICTIVOS-Y-NIVEL-DE-SEGURIDAD', '2018-08-25 17:44:34', '2018-08-25 17:44:34', 1),
(3, 'ESPACIO DEFENDIBLE GENERAL', 'ESPACIO-DEFENDIBLE-GENERAL', '2018-08-25 17:45:11', '2018-08-25 17:45:11', 2),
(4, 'PROTECCIÓN PERIMETRAL GENERAL', 'PROTECCION-PERIMETRAL-GENERAL', '2018-08-25 17:45:27', '2018-08-25 17:45:27', 3),
(5, 'CONTROL DE ACCESO GENERAL', 'CONTROL-DE-ACCESO-GENERAL', '2018-08-25 17:45:55', '2018-08-25 17:45:55', 4),
(6, 'IDENTIFICACIÓN', 'IDENTIFICACION', '2018-08-25 17:46:02', '2018-08-25 17:46:02', 4),
(7, 'PARQUEADEROS', 'PARQUEADEROS', '2018-08-25 17:46:13', '2018-08-25 17:46:13', 4),
(8, 'CONTROL DE ACCESO A VEHICULOS', 'CONTROL-DE-ACCESO-A-VEHICULOS', '2018-08-25 17:46:20', '2018-08-25 17:46:20', 4),
(9, 'CIRCULACIÓN DE PERSONAS', 'CIRCULACION-DE-PERSONAS', '2018-08-25 17:46:26', '2018-08-25 17:46:26', 4),
(10, 'LLAVES, CANDADOS Y CERRADURAS. APERTURA  Y CIERRE DE INSTALACIONES', 'LLAVES-CANDADOS-Y-CERRADURAS-APERTURA-Y-CIERRE-DE-INSTALACIONES', '2018-08-25 17:46:37', '2018-08-25 17:46:37', 4),
(11, 'AREAS INTERNAS', 'AREAS-INTERNAS', '2018-08-25 17:46:51', '2018-08-25 17:46:51', 5),
(12, 'AREAS COMUNES', 'AREAS-COMUNES', '2018-08-25 17:47:02', '2018-08-25 17:47:02', 5),
(13, 'AREAS RESTRINGIDAS', 'AREAS-RESTRINGIDAS', '2018-08-25 17:47:08', '2018-08-25 17:47:08', 5),
(14, 'CONTROL DE DISPOSITIVOS GENERAL', 'CONTROL-DE-DISPOSITIVOS-GENERAL', '2018-08-25 17:47:24', '2018-08-25 17:47:24', 6),
(15, 'EMPRESA DE VIGILANCIA GENERAL', 'EMPRESA-DE-VIGILANCIA-GENERAL', '2018-08-25 17:47:42', '2018-08-25 17:47:42', 7),
(16, 'INVESTIGACIONES GENERAL', 'INVESTIGACIONES-GENERAL', '2018-08-25 17:48:12', '2018-08-25 17:48:12', 8),
(17, 'CONTROL DE COMUNICACIÓN Y APOYO GENERAL', 'CONTROL-DE-COMUNICACION-Y-APOYO-GENERAL', '2018-08-25 17:48:31', '2018-08-25 17:48:31', 9),
(18, 'VARIABLES SF GENERAL', 'VARIABLES-SF-GENERAL', '2018-08-25 17:50:46', '2018-08-25 17:50:46', 10),
(19, 'CCTV GENERAL', 'CCTV-GENERAL', '2018-08-25 17:54:56', '2018-08-25 17:54:56', 11),
(20, 'CANTIDAD DE CÁMARAS', 'CANTIDAD-DE-CAMARAS', '2018-08-25 17:55:04', '2018-08-25 17:55:04', 11),
(21, 'CARACTERÍSTICAS TÉCNICAS DE LAS CÁMARAS', 'CARACTERISTICAS-TECNICAS-DE-LAS-CAMARAS', '2018-08-25 17:55:14', '2018-08-25 17:55:14', 11),
(22, 'DVR', 'DVR', '2018-08-25 17:55:20', '2018-08-25 17:55:20', 11),
(23, 'SOPORTE TÉCNICO', 'SOPORTE-TECNICO', '2018-08-25 17:55:25', '2018-08-25 17:55:25', 11),
(24, 'CROQUIS – ESQUEMA DE UBICACIÓN ', 'CROQUIS-ESQUEMA-DE-UBICACION', '2018-08-25 17:55:30', '2018-08-25 17:55:30', 11),
(25, 'CANTIDAD DE ALARMAS', 'CANTIDAD-DE-ALARMAS', '2018-08-25 17:55:44', '2018-08-25 17:55:44', 12),
(26, 'CARACTERÍSTICAS TÉCNICAS DE LOS SENSORES', 'CARACTERISTICAS-TECNICAS-DE-LOS-SENSORES', '2018-08-25 17:55:50', '2018-08-25 17:55:50', 12),
(27, 'COMUNICACIÓN EMPRESA DE MONITOREO', 'COMUNICACION-EMPRESA-DE-MONITOREO', '2018-08-25 17:55:55', '2018-08-25 17:55:55', 12),
(28, 'SENSORES DE MOVIMIENTO', 'SENSORES-DE-MOVIMIENTO', '2018-08-25 17:56:00', '2018-08-25 17:56:00', 12),
(29, 'SENSORES DE RAYOS INFRARROJOS', 'SENSORES-DE-RAYOS-INFRARROJOS', '2018-08-25 17:56:06', '2018-08-25 17:56:06', 12),
(30, 'BARRERAS DE RAYOS INFRARROJOS', 'BARRERAS-DE-RAYOS-INFRARROJOS', '2018-08-25 17:56:13', '2018-08-25 17:56:13', 12),
(31, 'SENSORES MAGNETICOS', 'SENSORES-MAGNETICOS', '2018-08-25 17:56:20', '2018-08-25 17:56:20', 12),
(32, 'SENSORES DE ROTURA DE VIDRIOS', 'SENSORES-DE-ROTURA-DE-VIDRIOS', '2018-08-25 17:56:25', '2018-08-25 17:56:25', 12),
(33, 'SENSORES DE VIBRACIÓN', 'SENSORES-DE-VIBRACION', '2018-08-25 17:56:31', '2018-08-25 17:56:31', 12),
(34, 'BOTONES DE PANICO', 'BOTONES-DE-PANICO', '2018-08-25 17:56:36', '2018-08-25 17:56:36', 12),
(35, 'MALLA ELECTRIFICADA', 'MALLA-ELECTRIFICADA', '2018-08-25 17:56:43', '2018-08-25 17:56:43', 12),
(36, 'CLAVES DE ACCESO', 'CLAVES-DE-ACCESO', '2018-08-25 17:56:48', '2018-08-25 17:56:48', 12),
(37, 'CANTIDAD DE ALARMAS DE DETECCIÓN ', 'CANTIDAD-DE-ALARMAS-DE-DETECCION', '2018-08-25 17:57:32', '2018-08-25 17:57:32', 13),
(38, 'CARACTERÍSTICAS TÉCNICAS DE LOS SENSORES DE DETECCIÓN', 'CARACTERISTICAS-TECNICAS-DE-LOS-SENSORES-DE-DETECCION', '2018-08-25 17:58:14', '2018-08-25 17:58:14', 13),
(39, 'COMUNICACIÓN EMPRESA DE MONITOREO DE DETECCIÓN ', 'COMUNICACION-EMPRESA-DE-MONITOREO-DE-DETECCION', '2018-08-25 17:58:31', '2018-08-25 17:58:31', 13),
(40, 'SISTEMAS DE DETECCIÓN Y ALARMA', 'SISTEMAS-DE-DETECCION-Y-ALARMA', '2018-08-25 17:58:37', '2018-08-25 17:58:37', 13),
(41, 'EL TIPO DE DETECTOR ELEGIDO EN CADA ZONA ES ADECUADO RESPECTO A:', 'EL-TIPO-DE-DETECTOR-ELEGIDO-EN-CADA-ZONA-ES-ADECUADO-RESPECTO-A', '2018-08-25 17:59:03', '2018-08-25 17:59:03', 13),
(42, 'DETECTORES DE HUMO', 'DETECTORES-DE-HUMO', '2018-08-25 17:59:09', '2018-08-25 17:59:09', 13),
(43, 'DETECTORES TÉRMICOS - TERMOVELOCIMÉTRICOS', 'DETECTORES-TERMICOS-TERMOVELOCIMETRICOS', '2018-08-25 17:59:16', '2018-08-25 17:59:16', 13),
(44, 'EXTINTORES', 'EXTINTORES', '2018-08-25 17:59:21', '2018-08-25 17:59:21', 13),
(45, 'SISTEMAS DE ROCIADORES AUTOMÁTICOS ', 'SISTEMAS-DE-ROCIADORES-AUTOMATICOS', '2018-08-25 17:59:31', '2018-08-25 17:59:31', 13),
(46, 'SISTEMAS DE EXTINCIÓN AUTOMÁTICA POR GAS', 'SISTEMAS-DE-EXTINCION-AUTOMATICA-POR-GAS', '2018-08-25 18:00:27', '2018-08-25 18:00:44', 13),
(47, 'DETECTORES DE DERRAMAMIENTO DE AGUA', 'DETECTORES-DE-DERRAMAMIENTO-DE-AGUA', '2018-08-25 18:01:09', '2018-08-25 18:01:09', 13),
(48, 'CENTRAL Y CONTROL DE DETECCIÓN', 'CENTRAL-Y-CONTROL-DE-DETECCION', '2018-08-25 18:01:15', '2018-08-25 18:01:15', 13),
(49, 'CLAVES DE ACCESO AD', 'CLAVES-DE-ACCESO-AD', '2018-08-25 18:01:51', '2018-08-25 18:01:51', 13),
(50, 'PROCEDIMIENTOS', 'PROCEDIMIENTOS', '2018-08-25 18:02:26', '2018-08-25 18:02:26', 14),
(51, 'AYUDAS ELECTRÓNICAS', 'AYUDAS-ELECTRONICAS', '2018-08-25 18:02:32', '2018-08-25 18:02:32', 14),
(52, 'PROCEDIMIENTOS SCAE', 'PROCEDIMIENTOS-SCAE', '2018-08-25 18:02:55', '2018-08-25 18:02:55', 15),
(53, 'PROCEDIMIENTOS SCAV', 'PROCEDIMIENTOS-SCAV', '2018-08-25 18:03:19', '2018-08-25 18:03:19', 16),
(54, 'PARQUEADEROS SCAV', 'PARQUEADEROS-SCAV', '2018-08-25 18:03:53', '2018-08-25 18:03:53', 16),
(55, 'AYUDAS MANUALES Y ELECTRÓNICAS', 'AYUDAS-MANUALES-Y-ELECTRONICAS', '2018-08-25 18:04:02', '2018-08-25 18:04:02', 16),
(56, 'VARIABLES SE GENERAL', 'VARIABLES-SE-GENERAL', '2018-08-25 18:04:29', '2018-08-25 18:04:29', 17),
(57, 'CONTRATACIÓN DE PERSONAS Y EMPRESAS  GENERAL', 'CONTRATACION-DE-PERSONAS-Y-EMPRESAS-GENERAL', '2018-08-25 18:05:16', '2018-08-25 18:05:16', 18),
(58, 'ESTUDIOS DE SEGURIDAD', 'ESTUDIOS-DE-SEGURIDAD', '2018-08-25 18:05:24', '2018-08-25 18:05:24', 18),
(59, 'PRUEBAS DE POLÍGRAFO', 'PRUEBAS-DE-POLIGRAFO', '2018-08-25 18:05:30', '2018-08-25 18:05:30', 18),
(60, 'PLAN DE PROTECCIÓN', 'PLAN-DE-PROTECCION', '2018-08-25 18:05:46', '2018-08-25 18:05:46', 19),
(61, 'ESQUEMA DE PROTECCIÓN', 'ESQUEMA-DE-PROTECCION', '2018-08-25 18:05:51', '2018-08-25 18:05:51', 19),
(62, 'ESCOLTAS ', 'ESCOLTAS', '2018-08-25 18:05:58', '2018-08-25 18:05:58', 19),
(63, 'SEGURIDAD PERSONAL', 'SEGURIDAD-PERSONAL', '2018-08-25 18:06:03', '2018-08-25 18:06:03', 19),
(64, 'CAPACITACIONES', 'CAPACITACIONES', '2018-08-25 18:06:09', '2018-08-25 18:06:09', 19),
(65, 'MANUAL DE PROCEDIMIENTOS', 'MANUAL-DE-PROCEDIMIENTOS', '2018-08-25 18:06:32', '2018-08-25 18:06:32', 20),
(66, 'MANUAL DE PROCEDIMIENTOS SABOTAJE Y TERRORISMO', 'MANUAL-DE-PROCEDIMIENTOS-SABOTAJE-Y-TERRORISMO', '2018-08-25 18:07:07', '2018-08-25 18:07:07', 21),
(67, 'POLÍTICAS Y PROCEDIMIENTOS', 'POLITICAS-Y-PROCEDIMIENTOS', '2018-08-25 18:07:30', '2018-08-25 18:07:30', 22),
(68, 'VISITAS DOMICILIARIAS', 'VISITAS-DOMICILIARIAS', '2018-08-25 18:07:36', '2018-08-25 18:07:36', 22),
(69, 'COMPROMISO DE LA DIRECCIÓN', 'COMPROMISO-DE-LA-DIRECCION', '2018-08-25 18:08:00', '2018-08-25 18:08:00', 23),
(70, 'ASIGNACION DE RECURSOS', 'ASIGNACION-DE-RECURSOS', '2018-08-25 18:08:06', '2018-08-25 18:08:06', 23),
(71, 'FORMACION Y CONCIENTIZACIÓN', 'FORMACION-Y-CONCIENTIZACION', '2018-08-25 18:08:13', '2018-08-25 18:08:13', 23),
(72, 'REVISIÓN DEL SGSI', 'REVISION-DEL-SGSI', '2018-08-25 18:08:19', '2018-08-25 18:08:19', 23),
(73, 'INFORMACIÓN ELECTRONICA GENERAL', 'INFORMACION-ELECTRONICA-GENERAL', '2018-08-25 18:08:40', '2018-08-25 18:08:40', 24),
(74, ' MANEJO DE DOCUMENTACION DE ARCHIVO GENERAL', 'MANEJO-DE-DOCUMENTACION-DE-ARCHIVO-GENERAL', '2018-08-25 18:08:58', '2018-08-25 18:08:58', 25),
(75, 'STRIP TELEFÓNICO, CABLEADO Y CANALETAS GENERAL', 'STRIP-TELEFONICO-CABLEADO-Y-CANALETAS-GENERAL', '2018-08-25 18:09:23', '2018-08-25 18:09:23', 26),
(76, 'SISTEMA DE REDES GENERAL', 'SISTEMA-DE-REDES-GENERAL', '2018-08-25 18:09:37', '2018-08-25 18:09:37', 27),
(77, 'PROVEEDORES Y ACCIONISTAS GENERAL', 'PROVEEDORES-Y-ACCIONISTAS-GENERAL', '2018-08-25 18:10:20', '2018-08-25 18:10:20', 28),
(78, 'RECIBO Y ENTREGA DE CARGA', 'RECIBO-Y-ENTREGA-DE-CARGA', '2018-08-25 18:10:37', '2018-08-25 18:10:37', 29),
(79, 'CARGUE Y DESCARGUE', 'CARGUE-Y-DESCARGUE', '2018-08-25 18:10:42', '2018-08-25 18:10:42', 29),
(80, 'TRANSPORTE, RECOLECCIÓN Y MANEJO DE MERCANCÍAS GENERAL', 'TRANSPORTE-RECOLECCION-Y-MANEJO-DE-MERCANCIAS-GENERAL', '2018-08-25 18:11:06', '2018-08-25 18:11:06', 30),
(81, 'PROCEDIMIENTO RECEPCIÓN DE DINEROS', 'PROCEDIMIENTO-RECEPCION-DE-DINEROS', '2018-08-25 18:11:19', '2018-08-25 18:11:19', 31),
(82, 'PROCEDIMIENTO MANEJO CHEQUES, TARJETAS DE CRÉDITO Y PAGOS VIRTUALES', 'PROCEDIMIENTO-MANEJO-CHEQUES-TARJETAS-DE-CREDITO-Y-PAGOS-VIRTUALES', '2018-08-25 18:11:27', '2018-08-25 18:11:27', 31),
(83, 'EMPLEO DE CAJA FUERTE', 'EMPLEO-DE-CAJA-FUERTE', '2018-08-25 18:11:33', '2018-08-25 18:11:33', 31),
(84, 'EMPLEO EMPRESA TRANSPORTADORA DE VALORES', 'EMPLEO-EMPRESA-TRANSPORTADORA-DE-VALORES', '2018-08-25 18:11:39', '2018-08-25 18:11:39', 31),
(85, 'CAPACITACIONES GENERAL', 'CAPACITACIONES-GENERAL', '2018-08-25 18:12:01', '2018-08-25 18:12:01', 32),
(86, 'PROVEEDORES Y ACCIONISTAS CC GENERAL', 'PROVEEDORES-Y-ACCIONISTAS-CC-GENERAL', '2018-08-25 18:13:13', '2018-08-25 18:13:13', 33),
(88, 'NORMA ISO 27000 - 27001', 'NORMA-ISO-27000-27001', '2018-08-25 19:17:06', '2018-08-25 19:17:06', 23),
(90, '¿La empresa cuenta con los servicios de una empresa transportadora?', 'La-empresa-cuenta-con-los-servicios-de-una-empresa-transportadora', '2018-08-25 19:25:29', '2018-08-25 19:25:29', 30),
(91, '¿Se adelantan estudios de confiabilidad al personal de conductores y ayudantes que transportan la mercancía de la empresa?', 'Se-adelantan-estudios-de-confiabilidad-al-personal-de-conductores-y-ayudantes-que-transportan-la-mercancia-de-la-empresa', '2018-08-25 19:25:35', '2018-08-25 19:25:35', 30),
(92, '¿Se exige a la empresa transportadora o al personal a cargo de los vehículos de carga, informes periódicos sobre las novedades presentadas en los recorridos?', 'Se-exige-a-la-empresa-transportadora-o-al-personal-a-cargo-de-los-vehiculos-de-carga-informes-periodicos-sobre-las-novedades-presentadas-en-los-recorridos', '2018-08-25 19:25:40', '2018-08-25 19:25:40', 30),
(93, '¿Se adelantan pruebas de lealtad para determinar la honestidad de conductores y ayudantes?', 'Se-adelantan-pruebas-de-lealtad-para-determinar-la-honestidad-de-conductores-y-ayudantes', '2018-08-25 19:25:49', '2018-08-25 19:25:49', 30),
(94, '¿Existe un procedimiento para la colocación y retiro de los precintos o sellos de seguridad?', 'Existe-un-procedimiento-para-la-colocacion-y-retiro-de-los-precintos-o-sellos-de-seguridad', '2018-08-25 19:25:54', '2018-08-25 19:25:54', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evidences`
--

CREATE TABLE `evidences` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `answer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `monthly_expense` varchar(255) NOT NULL,
  `value` int(11) NOT NULL,
  `economy_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `families`
--

CREATE TABLE `families` (
  `id` int(11) NOT NULL,
  `family_information_analysis` text NOT NULL,
  `home_visity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `families`
--

INSERT INTO `families` (`id`, `family_information_analysis`, `home_visity_id`) VALUES
(15, 'sad sadas dasdsadas dsadasidjas djalskd salkdsa djlsa dlkas aslkd aslkdjlak sdas dasljkd asdljksa dsalkjjsakls', 4),
(16, 'dasdasda sdsadasdsa asdasiodpuewq qwoieqwuoie qwosad asjkdh asd', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `home_visities`
--

CREATE TABLE `home_visities` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `cc` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `phone2` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `home_visities`
--

INSERT INTO `home_visities` (`id`, `code`, `name`, `last_name`, `cc`, `phone`, `phone2`, `address`, `status`, `created`, `modified`, `user_id`, `client_id`) VALUES
(4, '20180903-1', 'Alfredo', 'suarez', '45645654', '123456789', '321654987', 'Barranquilla, karrera 50 con calle 73. casa #58a', 'Terminada', '2018-09-03 21:52:42', '2018-09-29 15:01:28', 1, 1),
(5, '20180903-2', 'Julian', 'Assange', '124587896', '3001255599', '3053669698', 'Santa Marta, karrera 57 con calle 22, # 24b', 'Terminada', '2018-09-03 22:06:38', '2018-09-29 15:07:28', 1, 1),
(6, '20180903-3', 'Juan Camilo', 'Lopez Pereira', '152369871', '302556361', '3194147871', 'karrera 25 con calle 31, #35-b, Puerto Colombia', 'En Proceso', '2018-09-04 14:46:06', '2018-09-11 13:46:25', 7, 4),
(7, '20180903-4', 'Pedro Antonio', 'Perez Arce', '1254789635', '3005523698', '3125258778', 'Karrera 56, #65-A', 'En Proceso', '2018-09-04 15:34:02', '2018-09-28 20:52:22', 7, 4),
(8, '20180903', 'Lui Miguel', 'Perez Bonaide', '254178963', '3001452525', '3125996565', 'karrera 56 con calle 25, #22-B, Barranquilla.', 'En Proceso', '2018-09-04 16:55:35', '2018-09-11 14:39:24', 7, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `monthly_income` varchar(255) NOT NULL,
  `value` decimal(10,0) NOT NULL,
  `total` int(11) NOT NULL,
  `economy_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inspections`
--

CREATE TABLE `inspections` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `last_position` varchar(255) NOT NULL,
  `entry` date NOT NULL,
  `retirement` date NOT NULL,
  `reason` varchar(255) NOT NULL,
  `immediate_boos` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `home_visity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licenses`
--

CREATE TABLE `licenses` (
  `id` int(11) NOT NULL,
  `number` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `fines` tinyint(1) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo_dir` varchar(255) DEFAULT NULL,
  `character_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `licenses`
--

INSERT INTO `licenses` (`id`, `number`, `categories`, `fines`, `photo`, `photo_dir`, `character_id`) VALUES
(22, '7000265657', 'A2, B2, C2', 1, 'Captura de pantalla de 2018-09-26 14-27-12.png', 'ea7a469e-ad0e-4bbc-b5c0-6b74430212ef', 46),
(23, '7000265657', 'A2, B2, C2', 1, 'Captura de pantalla de 2018-09-26 14-27-12.png', '3283d629-3203-4e10-86ff-dd6422be722a', 47);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maps`
--

CREATE TABLE `maps` (
  `id` int(11) NOT NULL,
  `map` varchar(255) NOT NULL,
  `commune` varchar(255) NOT NULL,
  `sector_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipalities`
--

CREATE TABLE `municipalities` (
  `id` int(11) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `departament_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipalities`
--

INSERT INTO `municipalities` (`id`, `municipality`, `departament_id`) VALUES
(1, 'Abriaquí', 5),
(2, 'Acacías', 50),
(3, 'Acandí', 27),
(4, 'Acevedo', 41),
(5, 'Achí', 13),
(6, 'Agrado', 41),
(7, 'Agua de Dios', 25),
(8, 'Aguachica', 20),
(9, 'Aguada', 68),
(10, 'Aguadas', 17),
(11, 'Aguazul', 85),
(12, 'Agustín Codazzi', 20),
(13, 'Aipe', 41),
(14, 'Albania', 18),
(15, 'Albania', 44),
(16, 'Albania', 68),
(17, 'Albán', 25),
(18, 'Albán (San José)', 52),
(19, 'Alcalá', 76),
(20, 'Alejandria', 5),
(21, 'Algarrobo', 47),
(22, 'Algeciras', 41),
(23, 'Almaguer', 19),
(24, 'Almeida', 15),
(25, 'Alpujarra', 73),
(26, 'Altamira', 41),
(27, 'Alto Baudó (Pie de Pato)', 27),
(28, 'Altos del Rosario', 13),
(29, 'Alvarado', 73),
(30, 'Amagá', 5),
(31, 'Amalfi', 5),
(32, 'Ambalema', 73),
(33, 'Anapoima', 25),
(34, 'Ancuya', 52),
(35, 'Andalucía', 76),
(36, 'Andes', 5),
(37, 'Angelópolis', 5),
(38, 'Angostura', 5),
(39, 'Anolaima', 25),
(40, 'Anorí', 5),
(41, 'Anserma', 17),
(42, 'Ansermanuevo', 76),
(43, 'Anzoátegui', 73),
(44, 'Anzá', 5),
(45, 'Apartadó', 5),
(46, 'Apulo', 25),
(47, 'Apía', 66),
(48, 'Aquitania', 15),
(49, 'Aracataca', 47),
(50, 'Aranzazu', 17),
(51, 'Aratoca', 68),
(52, 'Arauca', 81),
(53, 'Arauquita', 81),
(54, 'Arbeláez', 25),
(55, 'Arboleda (Berruecos)', 52),
(56, 'Arboledas', 54),
(57, 'Arboletes', 5),
(58, 'Arcabuco', 15),
(59, 'Arenal', 13),
(60, 'Argelia', 5),
(61, 'Argelia', 19),
(62, 'Argelia', 76),
(63, 'Ariguaní (El Difícil)', 47),
(64, 'Arjona', 13),
(65, 'Armenia', 5),
(66, 'Armenia', 63),
(67, 'Armero (Guayabal)', 73),
(68, 'Arroyohondo', 13),
(69, 'Astrea', 20),
(70, 'Ataco', 73),
(71, 'Atrato (Yuto)', 27),
(72, 'Ayapel', 23),
(73, 'Bagadó', 27),
(74, 'Bahía Solano (Mútis)', 27),
(75, 'Bajo Baudó (Pizarro)', 27),
(76, 'Balboa', 19),
(77, 'Balboa', 66),
(78, 'Baranoa', 8),
(79, 'Baraya', 41),
(80, 'Barbacoas', 52),
(81, 'Barbosa', 5),
(82, 'Barbosa', 68),
(83, 'Barichara', 68),
(84, 'Barranca de Upía', 50),
(85, 'Barrancabermeja', 68),
(86, 'Barrancas', 44),
(87, 'Barranco de Loba', 13),
(88, 'Barranquilla', 8),
(89, 'Becerríl', 20),
(90, 'Belalcázar', 17),
(91, 'Bello', 5),
(92, 'Belmira', 5),
(93, 'Beltrán', 25),
(94, 'Belén', 15),
(95, 'Belén', 52),
(96, 'Belén de Bajirá', 27),
(97, 'Belén de Umbría', 66),
(98, 'Belén de los Andaquíes', 18),
(99, 'Berbeo', 15),
(100, 'Betania', 5),
(101, 'Beteitiva', 15),
(102, 'Betulia', 5),
(103, 'Betulia', 68),
(104, 'Bituima', 25),
(105, 'Boavita', 15),
(106, 'Bochalema', 54),
(107, 'Bogotá D.C.', 11),
(108, 'Bojacá', 25),
(109, 'Bojayá (Bellavista)', 27),
(110, 'Bolívar', 5),
(111, 'Bolívar', 19),
(112, 'Bolívar', 68),
(113, 'Bolívar', 76),
(114, 'Bosconia', 20),
(115, 'Boyacá', 15),
(116, 'Briceño', 5),
(117, 'Briceño', 15),
(118, 'Bucaramanga', 68),
(119, 'Bucarasica', 54),
(120, 'Buenaventura', 76),
(121, 'Buenavista', 15),
(122, 'Buenavista', 23),
(123, 'Buenavista', 63),
(124, 'Buenavista', 70),
(125, 'Buenos Aires', 19),
(126, 'Buesaco', 52),
(127, 'Buga', 76),
(128, 'Bugalagrande', 76),
(129, 'Burítica', 5),
(130, 'Busbanza', 15),
(131, 'Cabrera', 25),
(132, 'Cabrera', 68),
(133, 'Cabuyaro', 50),
(134, 'Cachipay', 25),
(135, 'Caicedo', 5),
(136, 'Caicedonia', 76),
(137, 'Caimito', 70),
(138, 'Cajamarca', 73),
(139, 'Cajibío', 19),
(140, 'Cajicá', 25),
(141, 'Calamar', 13),
(142, 'Calamar', 95),
(143, 'Calarcá', 63),
(144, 'Caldas', 5),
(145, 'Caldas', 15),
(146, 'Caldono', 19),
(147, 'California', 68),
(148, 'Calima (Darién)', 76),
(149, 'Caloto', 19),
(150, 'Calí', 76),
(151, 'Campamento', 5),
(152, 'Campo de la Cruz', 8),
(153, 'Campoalegre', 41),
(154, 'Campohermoso', 15),
(155, 'Canalete', 23),
(156, 'Candelaria', 8),
(157, 'Candelaria', 76),
(158, 'Cantagallo', 13),
(159, 'Cantón de San Pablo', 27),
(160, 'Caparrapí', 25),
(161, 'Capitanejo', 68),
(162, 'Caracolí', 5),
(163, 'Caramanta', 5),
(164, 'Carcasí', 68),
(165, 'Carepa', 5),
(166, 'Carmen de Apicalá', 73),
(167, 'Carmen de Carupa', 25),
(168, 'Carmen de Viboral', 5),
(169, 'Carmen del Darién (CURBARADÓ)', 27),
(170, 'Carolina', 5),
(171, 'Cartagena', 13),
(172, 'Cartagena del Chairá', 18),
(173, 'Cartago', 76),
(174, 'Carurú', 97),
(175, 'Casabianca', 73),
(176, 'Castilla la Nueva', 50),
(177, 'Caucasia', 5),
(178, 'Cañasgordas', 5),
(179, 'Cepita', 68),
(180, 'Cereté', 23),
(181, 'Cerinza', 15),
(182, 'Cerrito', 68),
(183, 'Cerro San Antonio', 47),
(184, 'Chachaguí', 52),
(185, 'Chaguaní', 25),
(186, 'Chalán', 70),
(187, 'Chaparral', 73),
(188, 'Charalá', 68),
(189, 'Charta', 68),
(190, 'Chigorodó', 5),
(191, 'Chima', 68),
(192, 'Chimichagua', 20),
(193, 'Chimá', 23),
(194, 'Chinavita', 15),
(195, 'Chinchiná', 17),
(196, 'Chinácota', 54),
(197, 'Chinú', 23),
(198, 'Chipaque', 25),
(199, 'Chipatá', 68),
(200, 'Chiquinquirá', 15),
(201, 'Chiriguaná', 20),
(202, 'Chiscas', 15),
(203, 'Chita', 15),
(204, 'Chitagá', 54),
(205, 'Chitaraque', 15),
(206, 'Chivatá', 15),
(207, 'Chivolo', 47),
(208, 'Choachí', 25),
(209, 'Chocontá', 25),
(210, 'Chámeza', 85),
(211, 'Chía', 25),
(212, 'Chíquiza', 15),
(213, 'Chívor', 15),
(214, 'Cicuco', 13),
(215, 'Cimitarra', 68),
(216, 'Circasia', 63),
(217, 'Cisneros', 5),
(218, 'Ciénaga', 15),
(219, 'Ciénaga', 47),
(220, 'Ciénaga de Oro', 23),
(221, 'Clemencia', 13),
(222, 'Cocorná', 5),
(223, 'Coello', 73),
(224, 'Cogua', 25),
(225, 'Colombia', 41),
(226, 'Colosó (Ricaurte)', 70),
(227, 'Colón', 86),
(228, 'Colón (Génova)', 52),
(229, 'Concepción', 5),
(230, 'Concepción', 68),
(231, 'Concordia', 5),
(232, 'Concordia', 47),
(233, 'Condoto', 27),
(234, 'Confines', 68),
(235, 'Consaca', 52),
(236, 'Contadero', 52),
(237, 'Contratación', 68),
(238, 'Convención', 54),
(239, 'Copacabana', 5),
(240, 'Coper', 15),
(241, 'Cordobá', 63),
(242, 'Corinto', 19),
(243, 'Coromoro', 68),
(244, 'Corozal', 70),
(245, 'Corrales', 15),
(246, 'Cota', 25),
(247, 'Cotorra', 23),
(248, 'Covarachía', 15),
(249, 'Coveñas', 70),
(250, 'Coyaima', 73),
(251, 'Cravo Norte', 81),
(252, 'Cuaspud (Carlosama)', 52),
(253, 'Cubarral', 50),
(254, 'Cubará', 15),
(255, 'Cucaita', 15),
(256, 'Cucunubá', 25),
(257, 'Cucutilla', 54),
(258, 'Cuitiva', 15),
(259, 'Cumaral', 50),
(260, 'Cumaribo', 99),
(261, 'Cumbal', 52),
(262, 'Cumbitara', 52),
(263, 'Cunday', 73),
(264, 'Curillo', 18),
(265, 'Curití', 68),
(266, 'Curumaní', 20),
(267, 'Cáceres', 5),
(268, 'Cáchira', 54),
(269, 'Cácota', 54),
(270, 'Cáqueza', 25),
(271, 'Cértegui', 27),
(272, 'Cómbita', 15),
(273, 'Córdoba', 13),
(274, 'Córdoba', 52),
(275, 'Cúcuta', 54),
(276, 'Dabeiba', 5),
(277, 'Dagua', 76),
(278, 'Dibulla', 44),
(279, 'Distracción', 44),
(280, 'Dolores', 73),
(281, 'Don Matías', 5),
(282, 'Dos Quebradas', 66),
(283, 'Duitama', 15),
(284, 'Durania', 54),
(285, 'Ebéjico', 5),
(286, 'El Bagre', 5),
(287, 'El Banco', 47),
(288, 'El Cairo', 76),
(289, 'El Calvario', 50),
(290, 'El Carmen', 54),
(291, 'El Carmen', 68),
(292, 'El Carmen de Atrato', 27),
(293, 'El Carmen de Bolívar', 13),
(294, 'El Castillo', 50),
(295, 'El Cerrito', 76),
(296, 'El Charco', 52),
(297, 'El Cocuy', 15),
(298, 'El Colegio', 25),
(299, 'El Copey', 20),
(300, 'El Doncello', 18),
(301, 'El Dorado', 50),
(302, 'El Dovio', 76),
(303, 'El Espino', 15),
(304, 'El Guacamayo', 68),
(305, 'El Guamo', 13),
(306, 'El Molino', 44),
(307, 'El Paso', 20),
(308, 'El Paujil', 18),
(309, 'El Peñol', 52),
(310, 'El Peñon', 13),
(311, 'El Peñon', 68),
(312, 'El Peñón', 25),
(313, 'El Piñon', 47),
(314, 'El Playón', 68),
(315, 'El Retorno', 95),
(316, 'El Retén', 47),
(317, 'El Roble', 70),
(318, 'El Rosal', 25),
(319, 'El Rosario', 52),
(320, 'El Tablón de Gómez', 52),
(321, 'El Tambo', 19),
(322, 'El Tambo', 52),
(323, 'El Tarra', 54),
(324, 'El Zulia', 54),
(325, 'El Águila', 76),
(326, 'Elías', 41),
(327, 'Encino', 68),
(328, 'Enciso', 68),
(329, 'Entrerríos', 5),
(330, 'Envigado', 5),
(331, 'Espinal', 73),
(332, 'Facatativá', 25),
(333, 'Falan', 73),
(334, 'Filadelfia', 17),
(335, 'Filandia', 63),
(336, 'Firavitoba', 15),
(337, 'Flandes', 73),
(338, 'Florencia', 18),
(339, 'Florencia', 19),
(340, 'Floresta', 15),
(341, 'Florida', 76),
(342, 'Floridablanca', 68),
(343, 'Florián', 68),
(344, 'Fonseca', 44),
(345, 'Fortúl', 81),
(346, 'Fosca', 25),
(347, 'Francisco Pizarro', 52),
(348, 'Fredonia', 5),
(349, 'Fresno', 73),
(350, 'Frontino', 5),
(351, 'Fuente de Oro', 50),
(352, 'Fundación', 47),
(353, 'Funes', 52),
(354, 'Funza', 25),
(355, 'Fusagasugá', 25),
(356, 'Fómeque', 25),
(357, 'Fúquene', 25),
(358, 'Gachalá', 25),
(359, 'Gachancipá', 25),
(360, 'Gachantivá', 15),
(361, 'Gachetá', 25),
(362, 'Galapa', 8),
(363, 'Galeras (Nueva Granada)', 70),
(364, 'Galán', 68),
(365, 'Gama', 25),
(366, 'Gamarra', 20),
(367, 'Garagoa', 15),
(368, 'Garzón', 41),
(369, 'Gigante', 41),
(370, 'Ginebra', 76),
(371, 'Giraldo', 5),
(372, 'Girardot', 25),
(373, 'Girardota', 5),
(374, 'Girón', 68),
(375, 'Gonzalez', 20),
(376, 'Gramalote', 54),
(377, 'Granada', 5),
(378, 'Granada', 25),
(379, 'Granada', 50),
(380, 'Guaca', 68),
(381, 'Guacamayas', 15),
(382, 'Guacarí', 76),
(383, 'Guachavés', 52),
(384, 'Guachené', 19),
(385, 'Guachetá', 25),
(386, 'Guachucal', 52),
(387, 'Guadalupe', 5),
(388, 'Guadalupe', 41),
(389, 'Guadalupe', 68),
(390, 'Guaduas', 25),
(391, 'Guaitarilla', 52),
(392, 'Gualmatán', 52),
(393, 'Guamal', 47),
(394, 'Guamal', 50),
(395, 'Guamo', 73),
(396, 'Guapota', 68),
(397, 'Guapí', 19),
(398, 'Guaranda', 70),
(399, 'Guarne', 5),
(400, 'Guasca', 25),
(401, 'Guatapé', 5),
(402, 'Guataquí', 25),
(403, 'Guatavita', 25),
(404, 'Guateque', 15),
(405, 'Guavatá', 68),
(406, 'Guayabal de Siquima', 25),
(407, 'Guayabetal', 25),
(408, 'Guayatá', 15),
(409, 'Guepsa', 68),
(410, 'Guicán', 15),
(411, 'Gutiérrez', 25),
(412, 'Guática', 66),
(413, 'Gámbita', 68),
(414, 'Gámeza', 15),
(415, 'Génova', 63),
(416, 'Gómez Plata', 5),
(417, 'Hacarí', 54),
(418, 'Hatillo de Loba', 13),
(419, 'Hato', 68),
(420, 'Hato Corozal', 85),
(421, 'Hatonuevo', 44),
(422, 'Heliconia', 5),
(423, 'Herrán', 54),
(424, 'Herveo', 73),
(425, 'Hispania', 5),
(426, 'Hobo', 41),
(427, 'Honda', 73),
(428, 'Ibagué', 73),
(429, 'Icononzo', 73),
(430, 'Iles', 52),
(431, 'Imúes', 52),
(432, 'Inzá', 19),
(433, 'Inírida', 94),
(434, 'Ipiales', 52),
(435, 'Isnos', 41),
(436, 'Istmina', 27),
(437, 'Itagüí', 5),
(438, 'Ituango', 5),
(439, 'Izá', 15),
(440, 'Jambaló', 19),
(441, 'Jamundí', 76),
(442, 'Jardín', 5),
(443, 'Jenesano', 15),
(444, 'Jericó', 5),
(445, 'Jericó', 15),
(446, 'Jerusalén', 25),
(447, 'Jesús María', 68),
(448, 'Jordán', 68),
(449, 'Juan de Acosta', 8),
(450, 'Junín', 25),
(451, 'Juradó', 27),
(452, 'La Apartada y La Frontera', 23),
(453, 'La Argentina', 41),
(454, 'La Belleza', 68),
(455, 'La Calera', 25),
(456, 'La Capilla', 15),
(457, 'La Ceja', 5),
(458, 'La Celia', 66),
(459, 'La Cruz', 52),
(460, 'La Cumbre', 76),
(461, 'La Dorada', 17),
(462, 'La Esperanza', 54),
(463, 'La Estrella', 5),
(464, 'La Florida', 52),
(465, 'La Gloria', 20),
(466, 'La Jagua de Ibirico', 20),
(467, 'La Jagua del Pilar', 44),
(468, 'La Llanada', 52),
(469, 'La Macarena', 50),
(470, 'La Merced', 17),
(471, 'La Mesa', 25),
(472, 'La Montañita', 18),
(473, 'La Palma', 25),
(474, 'La Paz', 68),
(475, 'La Paz (Robles)', 20),
(476, 'La Peña', 25),
(477, 'La Pintada', 5),
(478, 'La Plata', 41),
(479, 'La Playa', 54),
(480, 'La Primavera', 99),
(481, 'La Salina', 85),
(482, 'La Sierra', 19),
(483, 'La Tebaida', 63),
(484, 'La Tola', 52),
(485, 'La Unión', 5),
(486, 'La Unión', 52),
(487, 'La Unión', 70),
(488, 'La Unión', 76),
(489, 'La Uvita', 15),
(490, 'La Vega', 19),
(491, 'La Vega', 25),
(492, 'La Victoria', 15),
(493, 'La Victoria', 17),
(494, 'La Victoria', 76),
(495, 'La Virginia', 66),
(496, 'Labateca', 54),
(497, 'Labranzagrande', 15),
(498, 'Landázuri', 68),
(499, 'Lebrija', 68),
(500, 'Leiva', 52),
(501, 'Lejanías', 50),
(502, 'Lenguazaque', 25),
(503, 'Leticia', 91),
(504, 'Liborina', 5),
(505, 'Linares', 52),
(506, 'Lloró', 27),
(507, 'Lorica', 23),
(508, 'Los Córdobas', 23),
(509, 'Los Palmitos', 70),
(510, 'Los Patios', 54),
(511, 'Los Santos', 68),
(512, 'Lourdes', 54),
(513, 'Luruaco', 8),
(514, 'Lérida', 73),
(515, 'Líbano', 73),
(516, 'López (Micay)', 19),
(517, 'Macanal', 15),
(518, 'Macaravita', 68),
(519, 'Maceo', 5),
(520, 'Machetá', 25),
(521, 'Madrid', 25),
(522, 'Magangué', 13),
(523, 'Magüi (Payán)', 52),
(524, 'Mahates', 13),
(525, 'Maicao', 44),
(526, 'Majagual', 70),
(527, 'Malambo', 8),
(528, 'Mallama (Piedrancha)', 52),
(529, 'Manatí', 8),
(530, 'Manaure', 44),
(531, 'Manaure Balcón del Cesar', 20),
(532, 'Manizales', 17),
(533, 'Manta', 25),
(534, 'Manzanares', 17),
(535, 'Maní', 85),
(536, 'Mapiripan', 50),
(537, 'Margarita', 13),
(538, 'Marinilla', 5),
(539, 'Maripí', 15),
(540, 'Mariquita', 73),
(541, 'Marmato', 17),
(542, 'Marquetalia', 17),
(543, 'Marsella', 66),
(544, 'Marulanda', 17),
(545, 'María la Baja', 13),
(546, 'Matanza', 68),
(547, 'Medellín', 5),
(548, 'Medina', 25),
(549, 'Medio Atrato', 27),
(550, 'Medio Baudó', 27),
(551, 'Medio San Juan (ANDAGOYA)', 27),
(552, 'Melgar', 73),
(553, 'Mercaderes', 19),
(554, 'Mesetas', 50),
(555, 'Milán', 18),
(556, 'Miraflores', 15),
(557, 'Miraflores', 95),
(558, 'Miranda', 19),
(559, 'Mistrató', 66),
(560, 'Mitú', 97),
(561, 'Mocoa', 86),
(562, 'Mogotes', 68),
(563, 'Molagavita', 68),
(564, 'Momil', 23),
(565, 'Mompós', 13),
(566, 'Mongua', 15),
(567, 'Monguí', 15),
(568, 'Moniquirá', 15),
(569, 'Montebello', 5),
(570, 'Montecristo', 13),
(571, 'Montelíbano', 23),
(572, 'Montenegro', 63),
(573, 'Monteria', 23),
(574, 'Monterrey', 85),
(575, 'Morales', 13),
(576, 'Morales', 19),
(577, 'Morelia', 18),
(578, 'Morroa', 70),
(579, 'Mosquera', 25),
(580, 'Mosquera', 52),
(581, 'Motavita', 15),
(582, 'Moñitos', 23),
(583, 'Murillo', 73),
(584, 'Murindó', 5),
(585, 'Mutatá', 5),
(586, 'Mutiscua', 54),
(587, 'Muzo', 15),
(588, 'Málaga', 68),
(589, 'Nariño', 5),
(590, 'Nariño', 25),
(591, 'Nariño', 52),
(592, 'Natagaima', 73),
(593, 'Nechí', 5),
(594, 'Necoclí', 5),
(595, 'Neira', 17),
(596, 'Neiva', 41),
(597, 'Nemocón', 25),
(598, 'Nilo', 25),
(599, 'Nimaima', 25),
(600, 'Nobsa', 15),
(601, 'Nocaima', 25),
(602, 'Norcasia', 17),
(603, 'Norosí', 13),
(604, 'Novita', 27),
(605, 'Nueva Granada', 47),
(606, 'Nuevo Colón', 15),
(607, 'Nunchía', 85),
(608, 'Nuquí', 27),
(609, 'Nátaga', 41),
(610, 'Obando', 76),
(611, 'Ocamonte', 68),
(612, 'Ocaña', 54),
(613, 'Oiba', 68),
(614, 'Oicatá', 15),
(615, 'Olaya', 5),
(616, 'Olaya Herrera', 52),
(617, 'Onzaga', 68),
(618, 'Oporapa', 41),
(619, 'Orito', 86),
(620, 'Orocué', 85),
(621, 'Ortega', 73),
(622, 'Ospina', 52),
(623, 'Otanche', 15),
(624, 'Ovejas', 70),
(625, 'Pachavita', 15),
(626, 'Pacho', 25),
(627, 'Padilla', 19),
(628, 'Paicol', 41),
(629, 'Pailitas', 20),
(630, 'Paime', 25),
(631, 'Paipa', 15),
(632, 'Pajarito', 15),
(633, 'Palermo', 41),
(634, 'Palestina', 17),
(635, 'Palestina', 41),
(636, 'Palmar', 68),
(637, 'Palmar de Varela', 8),
(638, 'Palmas del Socorro', 68),
(639, 'Palmira', 76),
(640, 'Palmito', 70),
(641, 'Palocabildo', 73),
(642, 'Pamplona', 54),
(643, 'Pamplonita', 54),
(644, 'Pandi', 25),
(645, 'Panqueba', 15),
(646, 'Paratebueno', 25),
(647, 'Pasca', 25),
(648, 'Patía (El Bordo)', 19),
(649, 'Pauna', 15),
(650, 'Paya', 15),
(651, 'Paz de Ariporo', 85),
(652, 'Paz de Río', 15),
(653, 'Pedraza', 47),
(654, 'Pelaya', 20),
(655, 'Pensilvania', 17),
(656, 'Peque', 5),
(657, 'Pereira', 66),
(658, 'Pesca', 15),
(659, 'Peñol', 5),
(660, 'Piamonte', 19),
(661, 'Pie de Cuesta', 68),
(662, 'Piedras', 73),
(663, 'Piendamó', 19),
(664, 'Pijao', 63),
(665, 'Pijiño', 47),
(666, 'Pinchote', 68),
(667, 'Pinillos', 13),
(668, 'Piojo', 8),
(669, 'Pisva', 15),
(670, 'Pital', 41),
(671, 'Pitalito', 41),
(672, 'Pivijay', 47),
(673, 'Planadas', 73),
(674, 'Planeta Rica', 23),
(675, 'Plato', 47),
(676, 'Policarpa', 52),
(677, 'Polonuevo', 8),
(678, 'Ponedera', 8),
(679, 'Popayán', 19),
(680, 'Pore', 85),
(681, 'Potosí', 52),
(682, 'Pradera', 76),
(683, 'Prado', 73),
(684, 'Providencia', 52),
(685, 'Providencia', 88),
(686, 'Pueblo Bello', 20),
(687, 'Pueblo Nuevo', 23),
(688, 'Pueblo Rico', 66),
(689, 'Pueblorrico', 5),
(690, 'Puebloviejo', 47),
(691, 'Puente Nacional', 68),
(692, 'Puerres', 52),
(693, 'Puerto Asís', 86),
(694, 'Puerto Berrío', 5),
(695, 'Puerto Boyacá', 15),
(696, 'Puerto Caicedo', 86),
(697, 'Puerto Carreño', 99),
(698, 'Puerto Colombia', 8),
(699, 'Puerto Concordia', 50),
(700, 'Puerto Escondido', 23),
(701, 'Puerto Gaitán', 50),
(702, 'Puerto Guzmán', 86),
(703, 'Puerto Leguízamo', 86),
(704, 'Puerto Libertador', 23),
(705, 'Puerto Lleras', 50),
(706, 'Puerto López', 50),
(707, 'Puerto Nare', 5),
(708, 'Puerto Nariño', 91),
(709, 'Puerto Parra', 68),
(710, 'Puerto Rico', 18),
(711, 'Puerto Rico', 50),
(712, 'Puerto Rondón', 81),
(713, 'Puerto Salgar', 25),
(714, 'Puerto Santander', 54),
(715, 'Puerto Tejada', 19),
(716, 'Puerto Triunfo', 5),
(717, 'Puerto Wilches', 68),
(718, 'Pulí', 25),
(719, 'Pupiales', 52),
(720, 'Puracé (Coconuco)', 19),
(721, 'Purificación', 73),
(722, 'Purísima', 23),
(723, 'Pácora', 17),
(724, 'Páez', 15),
(725, 'Páez (Belalcazar)', 19),
(726, 'Páramo', 68),
(727, 'Quebradanegra', 25),
(728, 'Quetame', 25),
(729, 'Quibdó', 27),
(730, 'Quimbaya', 63),
(731, 'Quinchía', 66),
(732, 'Quipama', 15),
(733, 'Quipile', 25),
(734, 'Ragonvalia', 54),
(735, 'Ramiriquí', 15),
(736, 'Recetor', 85),
(737, 'Regidor', 13),
(738, 'Remedios', 5),
(739, 'Remolino', 47),
(740, 'Repelón', 8),
(741, 'Restrepo', 50),
(742, 'Restrepo', 76),
(743, 'Retiro', 5),
(744, 'Ricaurte', 25),
(745, 'Ricaurte', 52),
(746, 'Rio Negro', 68),
(747, 'Rioblanco', 73),
(748, 'Riofrío', 76),
(749, 'Riohacha', 44),
(750, 'Risaralda', 17),
(751, 'Rivera', 41),
(752, 'Roberto Payán (San José)', 52),
(753, 'Roldanillo', 76),
(754, 'Roncesvalles', 73),
(755, 'Rondón', 15),
(756, 'Rosas', 19),
(757, 'Rovira', 73),
(758, 'Ráquira', 15),
(759, 'Río Iró', 27),
(760, 'Río Quito', 27),
(761, 'Río Sucio', 17),
(762, 'Río Viejo', 13),
(763, 'Río de oro', 20),
(764, 'Ríonegro', 5),
(765, 'Ríosucio', 27),
(766, 'Sabana de Torres', 68),
(767, 'Sabanagrande', 8),
(768, 'Sabanalarga', 5),
(769, 'Sabanalarga', 8),
(770, 'Sabanalarga', 85),
(771, 'Sabanas de San Angel (SAN ANGEL)', 47),
(772, 'Sabaneta', 5),
(773, 'Saboyá', 15),
(774, 'Sahagún', 23),
(775, 'Saladoblanco', 41),
(776, 'Salamina', 17),
(777, 'Salamina', 47),
(778, 'Salazar', 54),
(779, 'Saldaña', 73),
(780, 'Salento', 63),
(781, 'Salgar', 5),
(782, 'Samacá', 15),
(783, 'Samaniego', 52),
(784, 'Samaná', 17),
(785, 'Sampués', 70),
(786, 'San Agustín', 41),
(787, 'San Alberto', 20),
(788, 'San Andrés', 68),
(789, 'San Andrés Sotavento', 23),
(790, 'San Andrés de Cuerquía', 5),
(791, 'San Antero', 23),
(792, 'San Antonio', 73),
(793, 'San Antonio de Tequendama', 25),
(794, 'San Benito', 68),
(795, 'San Benito Abad', 70),
(796, 'San Bernardo', 25),
(797, 'San Bernardo', 52),
(798, 'San Bernardo del Viento', 23),
(799, 'San Calixto', 54),
(800, 'San Carlos', 5),
(801, 'San Carlos', 23),
(802, 'San Carlos de Guaroa', 50),
(803, 'San Cayetano', 25),
(804, 'San Cayetano', 54),
(805, 'San Cristobal', 13),
(806, 'San Diego', 20),
(807, 'San Eduardo', 15),
(808, 'San Estanislao', 13),
(809, 'San Fernando', 13),
(810, 'San Francisco', 5),
(811, 'San Francisco', 25),
(812, 'San Francisco', 86),
(813, 'San Gíl', 68),
(814, 'San Jacinto', 13),
(815, 'San Jacinto del Cauca', 13),
(816, 'San Jerónimo', 5),
(817, 'San Joaquín', 68),
(818, 'San José', 17),
(819, 'San José de Miranda', 68),
(820, 'San José de Montaña', 5),
(821, 'San José de Pare', 15),
(822, 'San José de Uré', 23),
(823, 'San José del Fragua', 18),
(824, 'San José del Guaviare', 95),
(825, 'San José del Palmar', 27),
(826, 'San Juan de Arama', 50),
(827, 'San Juan de Betulia', 70),
(828, 'San Juan de Nepomuceno', 13),
(829, 'San Juan de Pasto', 52),
(830, 'San Juan de Río Seco', 25),
(831, 'San Juan de Urabá', 5),
(832, 'San Juan del Cesar', 44),
(833, 'San Juanito', 50),
(834, 'San Lorenzo', 52),
(835, 'San Luis', 73),
(836, 'San Luís', 5),
(837, 'San Luís de Gaceno', 15),
(838, 'San Luís de Palenque', 85),
(839, 'San Marcos', 70),
(840, 'San Martín', 20),
(841, 'San Martín', 50),
(842, 'San Martín de Loba', 13),
(843, 'San Mateo', 15),
(844, 'San Miguel', 68),
(845, 'San Miguel', 86),
(846, 'San Miguel de Sema', 15),
(847, 'San Onofre', 70),
(848, 'San Pablo', 13),
(849, 'San Pablo', 52),
(850, 'San Pablo de Borbur', 15),
(851, 'San Pedro', 5),
(852, 'San Pedro', 70),
(853, 'San Pedro', 76),
(854, 'San Pedro de Cartago', 52),
(855, 'San Pedro de Urabá', 5),
(856, 'San Pelayo', 23),
(857, 'San Rafael', 5),
(858, 'San Roque', 5),
(859, 'San Sebastián', 19),
(860, 'San Sebastián de Buenavista', 47),
(861, 'San Vicente', 5),
(862, 'San Vicente del Caguán', 18),
(863, 'San Vicente del Chucurí', 68),
(864, 'San Zenón', 47),
(865, 'Sandoná', 52),
(866, 'Santa Ana', 47),
(867, 'Santa Bárbara', 5),
(868, 'Santa Bárbara', 68),
(869, 'Santa Bárbara (Iscuandé)', 52),
(870, 'Santa Bárbara de Pinto', 47),
(871, 'Santa Catalina', 13),
(872, 'Santa Fé de Antioquia', 5),
(873, 'Santa Genoveva de Docorodó', 27),
(874, 'Santa Helena del Opón', 68),
(875, 'Santa Isabel', 73),
(876, 'Santa Lucía', 8),
(877, 'Santa Marta', 47),
(878, 'Santa María', 15),
(879, 'Santa María', 41),
(880, 'Santa Rosa', 13),
(881, 'Santa Rosa', 19),
(882, 'Santa Rosa de Cabal', 66),
(883, 'Santa Rosa de Osos', 5),
(884, 'Santa Rosa de Viterbo', 15),
(885, 'Santa Rosa del Sur', 13),
(886, 'Santa Rosalía', 99),
(887, 'Santa Sofía', 15),
(888, 'Santana', 15),
(889, 'Santander de Quilichao', 19),
(890, 'Santiago', 54),
(891, 'Santiago', 86),
(892, 'Santo Domingo', 5),
(893, 'Santo Tomás', 8),
(894, 'Santuario', 5),
(895, 'Santuario', 66),
(896, 'Sapuyes', 52),
(897, 'Saravena', 81),
(898, 'Sardinata', 54),
(899, 'Sasaima', 25),
(900, 'Sativanorte', 15),
(901, 'Sativasur', 15),
(902, 'Segovia', 5),
(903, 'Sesquilé', 25),
(904, 'Sevilla', 76),
(905, 'Siachoque', 15),
(906, 'Sibaté', 25),
(907, 'Sibundoy', 86),
(908, 'Silos', 54),
(909, 'Silvania', 25),
(910, 'Silvia', 19),
(911, 'Simacota', 68),
(912, 'Simijaca', 25),
(913, 'Simití', 13),
(914, 'Sincelejo', 70),
(915, 'Sincé', 70),
(916, 'Sipí', 27),
(917, 'Sitionuevo', 47),
(918, 'Soacha', 25),
(919, 'Soatá', 15),
(920, 'Socha', 15),
(921, 'Socorro', 68),
(922, 'Socotá', 15),
(923, 'Sogamoso', 15),
(924, 'Solano', 18),
(925, 'Soledad', 8),
(926, 'Solita', 18),
(927, 'Somondoco', 15),
(928, 'Sonsón', 5),
(929, 'Sopetrán', 5),
(930, 'Soplaviento', 13),
(931, 'Sopó', 25),
(932, 'Sora', 15),
(933, 'Soracá', 15),
(934, 'Sotaquirá', 15),
(935, 'Sotara (Paispamba)', 19),
(936, 'Sotomayor (Los Andes)', 52),
(937, 'Suaita', 68),
(938, 'Suan', 8),
(939, 'Suaza', 41),
(940, 'Subachoque', 25),
(941, 'Sucre', 19),
(942, 'Sucre', 68),
(943, 'Sucre', 70),
(944, 'Suesca', 25),
(945, 'Supatá', 25),
(946, 'Supía', 17),
(947, 'Suratá', 68),
(948, 'Susa', 25),
(949, 'Susacón', 15),
(950, 'Sutamarchán', 15),
(951, 'Sutatausa', 25),
(952, 'Sutatenza', 15),
(953, 'Suárez', 19),
(954, 'Suárez', 73),
(955, 'Sácama', 85),
(956, 'Sáchica', 15),
(957, 'Tabio', 25),
(958, 'Tadó', 27),
(959, 'Talaigua Nuevo', 13),
(960, 'Tamalameque', 20),
(961, 'Tame', 81),
(962, 'Taminango', 52),
(963, 'Tangua', 52),
(964, 'Taraira', 97),
(965, 'Tarazá', 5),
(966, 'Tarqui', 41),
(967, 'Tarso', 5),
(968, 'Tasco', 15),
(969, 'Tauramena', 85),
(970, 'Tausa', 25),
(971, 'Tello', 41),
(972, 'Tena', 25),
(973, 'Tenerife', 47),
(974, 'Tenjo', 25),
(975, 'Tenza', 15),
(976, 'Teorama', 54),
(977, 'Teruel', 41),
(978, 'Tesalia', 41),
(979, 'Tibacuy', 25),
(980, 'Tibaná', 15),
(981, 'Tibasosa', 15),
(982, 'Tibirita', 25),
(983, 'Tibú', 54),
(984, 'Tierralta', 23),
(985, 'Timaná', 41),
(986, 'Timbiquí', 19),
(987, 'Timbío', 19),
(988, 'Tinjacá', 15),
(989, 'Tipacoque', 15),
(990, 'Tiquisio (Puerto Rico)', 13),
(991, 'Titiribí', 5),
(992, 'Toca', 15),
(993, 'Tocaima', 25),
(994, 'Tocancipá', 25),
(995, 'Toguí', 15),
(996, 'Toledo', 5),
(997, 'Toledo', 54),
(998, 'Tolú', 70),
(999, 'Tolú Viejo', 70),
(1000, 'Tona', 68),
(1001, 'Topagá', 15),
(1002, 'Topaipí', 25),
(1003, 'Toribío', 19),
(1004, 'Toro', 76),
(1005, 'Tota', 15),
(1006, 'Totoró', 19),
(1007, 'Trinidad', 85),
(1008, 'Trujillo', 76),
(1009, 'Tubará', 8),
(1010, 'Tuchín', 23),
(1011, 'Tulúa', 76),
(1012, 'Tumaco', 52),
(1013, 'Tunja', 15),
(1014, 'Tunungua', 15),
(1015, 'Turbaco', 13),
(1016, 'Turbaná', 13),
(1017, 'Turbo', 5),
(1018, 'Turmequé', 15),
(1019, 'Tuta', 15),
(1020, 'Tutasá', 15),
(1021, 'Támara', 85),
(1022, 'Támesis', 5),
(1023, 'Túquerres', 52),
(1024, 'Ubalá', 25),
(1025, 'Ubaque', 25),
(1026, 'Ubaté', 25),
(1027, 'Ulloa', 76),
(1028, 'Une', 25),
(1029, 'Unguía', 27),
(1030, 'Unión Panamericana (ÁNIMAS)', 27),
(1031, 'Uramita', 5),
(1032, 'Uribe', 50),
(1033, 'Uribia', 44),
(1034, 'Urrao', 5),
(1035, 'Urumita', 44),
(1036, 'Usiacuri', 8),
(1037, 'Valdivia', 5),
(1038, 'Valencia', 23),
(1039, 'Valle de San José', 68),
(1040, 'Valle de San Juan', 73),
(1041, 'Valle del Guamuez', 86),
(1042, 'Valledupar', 20),
(1043, 'Valparaiso', 5),
(1044, 'Valparaiso', 18),
(1045, 'Vegachí', 5),
(1046, 'Venadillo', 73),
(1047, 'Venecia', 5),
(1048, 'Venecia (Ospina Pérez)', 25),
(1049, 'Ventaquemada', 15),
(1050, 'Vergara', 25),
(1051, 'Versalles', 76),
(1052, 'Vetas', 68),
(1053, 'Viani', 25),
(1054, 'Vigía del Fuerte', 5),
(1055, 'Vijes', 76),
(1056, 'Villa Caro', 54),
(1057, 'Villa Rica', 19),
(1058, 'Villa de Leiva', 15),
(1059, 'Villa del Rosario', 54),
(1060, 'Villagarzón', 86),
(1061, 'Villagómez', 25),
(1062, 'Villahermosa', 73),
(1063, 'Villamaría', 17),
(1064, 'Villanueva', 13),
(1065, 'Villanueva', 44),
(1066, 'Villanueva', 68),
(1067, 'Villanueva', 85),
(1068, 'Villapinzón', 25),
(1069, 'Villarrica', 73),
(1070, 'Villavicencio', 50),
(1071, 'Villavieja', 41),
(1072, 'Villeta', 25),
(1073, 'Viotá', 25),
(1074, 'Viracachá', 15),
(1075, 'Vista Hermosa', 50),
(1076, 'Viterbo', 17),
(1077, 'Vélez', 68),
(1078, 'Yacopí', 25),
(1079, 'Yacuanquer', 52),
(1080, 'Yaguará', 41),
(1081, 'Yalí', 5),
(1082, 'Yarumal', 5),
(1083, 'Yolombó', 5),
(1084, 'Yondó (Casabe)', 5),
(1085, 'Yopal', 85),
(1086, 'Yotoco', 76),
(1087, 'Yumbo', 76),
(1088, 'Zambrano', 13),
(1089, 'Zapatoca', 68),
(1090, 'Zapayán (PUNTA DE PIEDRAS)', 47),
(1091, 'Zaragoza', 5),
(1092, 'Zarzal', 76),
(1093, 'Zetaquirá', 15),
(1094, 'Zipacón', 25),
(1095, 'Zipaquirá', 25),
(1096, 'Zona Bananera (PRADO - SEVILLA)', 47),
(1097, 'Ábrego', 54),
(1098, 'Íquira', 41),
(1099, 'Úmbita', 15),
(1100, 'Útica', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notebooks`
--

CREATE TABLE `notebooks` (
  `id` int(11) NOT NULL,
  `number` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `military_district` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo_dir` varchar(255) DEFAULT NULL,
  `character_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `notebooks`
--

INSERT INTO `notebooks` (`id`, `number`, `class`, `military_district`, `photo`, `photo_dir`, `character_id`) VALUES
(22, '16879172', 'Primera', '16, Cali', 'Captura de pantalla de 2018-09-26 14-15-37.png', '008667a9-6e79-45d6-8273-12d34682bebc', 46),
(23, '16879172', 'Primera', '16, Cali', 'Captura de pantalla de 2018-09-26 14-26-23.png', '53f73085-27b7-467e-ae88-554a830e55a6', 47);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `passports`
--

CREATE TABLE `passports` (
  `id` int(11) NOT NULL,
  `number` varchar(255) NOT NULL,
  `expiration_date` date NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo_dir` varchar(255) DEFAULT NULL,
  `character_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `passports`
--

INSERT INTO `passports` (`id`, `number`, `expiration_date`, `photo`, `photo_dir`, `character_id`) VALUES
(22, 'AL923457', '2023-12-19', 'Captura de pantalla de 2018-09-26 14-26-23.png', '5eb07c86-1b90-4523-8268-8fee2d1b8fda', 46),
(23, 'AL923457', '2022-03-29', 'raw.jpg', '9ca44933-36f9-43c4-8464-3adf7c22a2cb', 47);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20180703140118, 'CreateDepartaments', '2018-09-03 21:49:30', '2018-09-03 21:49:30', 0),
(20180703140557, 'CreateMunicipalities', '2018-09-03 21:49:30', '2018-09-03 21:49:32', 0),
(20180825161347, 'CreateSystems', '2018-09-03 21:49:32', '2018-09-03 21:49:32', 0),
(20180825161430, 'CreateComponents', '2018-09-03 21:49:32', '2018-09-03 21:49:34', 0),
(20180825161439, 'CreateElements', '2018-09-03 21:49:34', '2018-09-03 21:49:35', 0),
(20180825161452, 'CreateControls', '2018-09-03 21:49:35', '2018-09-03 21:49:36', 0),
(20180825161513, 'CreateClients', '2018-09-03 21:49:37', '2018-09-03 21:49:37', 0),
(20180825161525, 'CreateInspections', '2018-09-03 21:49:37', '2018-09-03 21:49:38', 0),
(20180825161538, 'CreateAnswers', '2018-09-03 21:49:38', '2018-09-03 21:49:40', 0),
(20180825161555, 'CreateEvidences', '2018-09-03 21:49:40', '2018-09-03 21:49:42', 0),
(20180825161607, 'CreateResults', '2018-09-03 21:49:42', '2018-09-03 21:49:43', 0),
(20180829160444, 'CreateUsers', '2018-09-03 21:49:43', '2018-09-03 21:49:45', 0),
(20180901193634, 'CreateHomeVisities', '2018-09-03 21:49:45', '2018-09-03 21:49:47', 0),
(20180901201154, 'CreateCharacters', '2018-09-27 03:28:54', '2018-09-27 03:28:56', 0),
(20180901202241, 'CreateLicenses', '2018-09-27 03:28:56', '2018-09-27 03:28:57', 0),
(20180901203134, 'CreateNotebooks', '2018-09-27 22:02:17', '2018-09-27 22:02:19', 0),
(20180901203746, 'CreatePassports', '2018-09-27 03:28:59', '2018-09-27 03:29:00', 0),
(20180901204431, 'CreateDepartures', '2018-09-27 22:02:19', '2018-09-27 22:02:20', 0),
(20180903133043, 'CreateAcademicInformation', '2018-09-03 21:49:57', '2018-09-03 21:49:59', 0),
(20180903133513, 'CreateStudies', '2018-09-03 21:49:59', '2018-09-03 21:50:01', 0),
(20180903133942, 'CreateFamilies', '2018-09-03 21:50:01', '2018-09-03 21:50:02', 0),
(20180903134446, 'CreateRelatives', '2018-09-03 21:50:02', '2018-09-03 21:50:04', 0),
(20180903134754, 'CreateCloseRelatives', '2018-09-03 21:50:04', '2018-09-03 21:50:06', 0),
(20180903144852, 'CreateSectors', '2018-09-03 21:50:06', '2018-09-03 21:50:07', 0),
(20180903145431, 'CreateMaps', '2018-09-03 21:50:07', '2018-09-03 21:50:09', 0),
(20180903150950, 'Createphotographies', '2018-09-03 21:50:09', '2018-09-03 21:50:10', 0),
(20180903151400, 'CreateEconomies', '2018-09-03 21:50:10', '2018-09-03 21:50:12', 0),
(20180903151746, 'CreateIncome', '2018-09-03 21:50:12', '2018-09-03 21:50:14', 0),
(20180903152506, 'CreateExpenses', '2018-09-03 21:50:14', '2018-09-03 21:50:16', 0),
(20180903153114, 'CreateBankAccounts', '2018-09-03 21:50:16', '2018-09-03 21:50:17', 0),
(20180903153413, 'CreateSocialAspects', '2018-09-03 21:50:17', '2018-09-03 21:50:19', 0),
(20180903153956, 'CreateJobs', '2018-09-03 21:50:19', '2018-09-03 21:50:21', 0),
(20180903161635, 'CreateConcepts', '2018-09-03 21:50:21', '2018-09-03 21:50:22', 0),
(20180907140205, 'CreateUserVisities', '2018-09-10 22:45:12', '2018-09-10 22:45:14', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `photographies`
--

CREATE TABLE `photographies` (
  `id` int(11) NOT NULL,
  `nomeclature` varchar(255) NOT NULL,
  `facade` varchar(255) NOT NULL,
  `candidate_family` varchar(255) NOT NULL,
  `home_visity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relatives`
--

CREATE TABLE `relatives` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `cc` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `family_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `relatives`
--

INSERT INTO `relatives` (`id`, `name`, `last_name`, `relationship`, `age`, `cc`, `occupation`, `phone`, `family_id`) VALUES
(1, 'Juan', 'Arce', 'HIJO (A)', 10, 'No refiere', 'Estudiante de 5° primaria', 'No refiere', 15),
(2, 'Maria', 'Lara', 'ESPOSO (A)', 43, '54454545554', 'Hogar', '3128876431', 15),
(3, 'Juan', 'Arce', 'HIJO (A)', 12, 'No refiere', 'Estudiante de 5° primaria', 'No refiere', 16),
(4, 'Maria', 'Lara', 'ESPOSO (A)', 44, '54454545554', 'Hogar', '3128876431', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `yes` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `na` int(11) NOT NULL,
  `qty_question` varchar(255) NOT NULL,
  `component_id` int(11) NOT NULL,
  `inspection_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectors`
--

CREATE TABLE `sectors` (
  `id` int(11) NOT NULL,
  `departament_id` int(11) NOT NULL,
  `municipality_id` int(11) NOT NULL,
  `neighborhood` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `stratum` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `recidence_time` int(11) NOT NULL,
  `commune` varchar(255) NOT NULL,
  `risk_level` varchar(255) NOT NULL,
  `geographic_location` text NOT NULL,
  `description_home` text NOT NULL,
  `zone` varchar(255) NOT NULL,
  `school` tinyint(1) NOT NULL,
  `supermarket` tinyint(1) NOT NULL,
  `pilice_estation` tinyint(1) NOT NULL,
  `hospitals` tinyint(1) NOT NULL,
  `parks` tinyint(1) NOT NULL,
  `colleges` tinyint(1) NOT NULL,
  `shops` tinyint(1) NOT NULL,
  `cai` tinyint(1) NOT NULL,
  `clinic` tinyint(1) NOT NULL,
  `parkland` tinyint(1) NOT NULL,
  `university` tinyint(1) NOT NULL,
  `mall` tinyint(1) NOT NULL,
  `center_christian` tinyint(1) NOT NULL,
  `church` tinyint(1) NOT NULL,
  `stadium` tinyint(1) NOT NULL,
  `access_roads` char(255) NOT NULL,
  `transportation_service` char(255) NOT NULL,
  `relationship_neighbors` char(255) NOT NULL,
  `drug_dispensing` char(255) NOT NULL,
  `prostitution_zone` char(255) NOT NULL,
  `high_impact_area` char(255) NOT NULL,
  `presence_animals` char(255) NOT NULL,
  `sewage` char(255) NOT NULL,
  `dump` varchar(255) NOT NULL,
  `home_visity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `social_aspects`
--

CREATE TABLE `social_aspects` (
  `id` int(11) NOT NULL,
  `health` text NOT NULL,
  `legal_status` text NOT NULL,
  `social_report` text NOT NULL,
  `home_visity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `studies`
--

CREATE TABLE `studies` (
  `id` int(11) NOT NULL,
  `studies` varchar(255) NOT NULL,
  `name_institution` varchar(255) NOT NULL,
  `obtained_title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `city` varchar(255) NOT NULL,
  `registry_number` varchar(255) NOT NULL,
  `academic_information_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `studies`
--

INSERT INTO `studies` (`id`, `studies`, `name_institution`, `obtained_title`, `date`, `city`, `registry_number`, `academic_information_id`) VALUES
(4, 'PRIMARIA', 'Escuela', 'Basica', '2018-09-05', 'Cali, Valle', 'No refiere', 18),
(5, 'BACHILLER', 'Colegio', 'Bachiller', '2018-08-29', 'Medellin, Antoquia', '4565464565', 18),
(6, 'UNIVERSITARIO', 'Universidad', 'Ingeniero', '2018-09-12', 'Barranquilla, Atlantico', '45654654456', 18),
(7, 'PRIMARIA', 'Escuela', 'Basica', '2018-08-28', 'Cali, Valle', 'No refiere', 19),
(8, 'BACHILLER', 'Colegio', 'Bachiller', '2018-09-06', 'Medellin, Antoquia', '4565464565', 19),
(9, 'UNIVERSITARIO', 'Universidad', 'Ingeniero', '2018-09-08', 'Barranquilla, Atlantico', '45654654456', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `systems`
--

CREATE TABLE `systems` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `systems`
--

INSERT INTO `systems` (`id`, `name`, `slug`, `created`, `modified`) VALUES
(1, 'SEGURIDAD FÍSICA', 'SEGURIDAD-FISICA', '2018-08-25 16:55:54', '2018-08-25 17:00:18'),
(2, 'SEGURIDAD ELECTRÓNICA', 'SEGURIDAD-ELECTRONICA', '2018-08-25 16:59:10', '2018-08-25 16:59:10'),
(3, 'SEGURIDAD A PERSONAS', 'SEGURIDAD-A-PERSONAS', '2018-08-25 17:12:20', '2018-08-25 17:12:20'),
(4, 'RR HH', 'RR-HH', '2018-08-25 17:12:52', '2018-08-25 17:12:52'),
(5, 'SEGURIDAD DE LA INFORMACIÓN', 'SEGURIDAD-DE-LA-INFORMACION', '2018-08-25 17:13:11', '2018-08-25 17:13:11'),
(6, 'SEGURIDAD EN LA CADENA DE SUMINISTRO', 'SEGURIDAD-EN-LA-CADENA-DE-SUMINISTRO', '2018-08-25 17:13:27', '2018-08-25 17:13:27'),
(7, 'CONTROL DE CUMPLIMIENTO', 'CONTROL-DE-CUMPLIMIENTO', '2018-08-25 17:13:50', '2018-08-25 17:13:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `cc` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `client_id` int(11) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `cc`, `name`, `last_name`, `position`, `email`, `password`, `phone`, `role`, `client_id`, `slug`, `created`, `modified`, `active`) VALUES
(1, '19638868', 'Yohanny', 'Lugo', 'Gerente TIC', 'tic@mastersecurityconsulting.com', '$2y$10$wgi40movnveKsbV4HFRR8OpQpswq9efYSBzc7X4hwIyWipkHcbRfK', '3193675659', 'SuperAdministrador', 1, 'tic-mastersecurityconsulting-com', '2018-08-31 15:19:08', '2018-08-31 15:19:08', 1),
(2, '702870', 'Wilfredo', 'Campos', 'Gerente de Ventas', 'salesmanager@mastersecurityconsulting.com', '$2y$10$JSM56sXnRczrQHkkljMiNOwrwzRebFMTF5t1zi3UjrkhyMs2BPssG', '3007189083', 'Comercial', 1, 'salesmanager-mastersecurityconsulting-com', '2018-08-31 15:21:56', '2018-08-31 15:21:56', 1),
(3, '123456789', 'Joany', 'Guerrero', 'Gerente General', 'gerencia@mastersecurityconsulting.com', '$2y$10$35E6rPBgrAIqka.vOSp6cOUAuoprEaxtun8RVHW/7iRbtogF5ZM3m', '3165429295', 'Administrador', 1, 'gerencia-mastersecurityconsulting-com', '2018-08-31 16:54:19', '2018-08-31 16:54:19', 1),
(4, '1098718689', 'Julieth', 'Amorocho', 'Administradora', 'administrativa@mastersecurityconsulting.com', '$2y$10$pO2kmNZDz7zgF8jyeUMXjuU/SI7o6JoiB.94t12HUz5TRFBHBRa/m', '3001234556', 'Operador', 1, 'administrativa-mastersecurityconsulting-com', '2018-08-31 17:17:46', '2018-08-31 17:17:46', 1),
(5, '123456987', 'Juan ', 'Perez', 'Visitador', 'visitadorperez@mastersecurityconsulting.com', '$2y$10$wLIhIdkBBNQOz49Qo/PSRujEAcnY2uRYdv.TVD9Hj0rE/bt9ZLb5G', '3120023232', 'Visitador', 1, 'visitadorperez-mastersecurityconsulting-com', '2018-08-31 17:21:27', '2018-08-31 17:21:27', 1),
(6, '321654987', 'Maria', 'Lara', 'Auditora', 'auditoria@mastersecurityconsulting.com', '$2y$10$CBUramhe1LRPc8A7DNJf4O3TGyGfnaRB7LCxDeG2qoxqok7EpIezK', '3012588552', 'Auditor', 1, 'auditoria-mastersecurityconsulting-com', '2018-08-31 17:23:11', '2018-08-31 17:23:11', 1),
(7, '1245789632', 'Maria Claudia ', 'Buendia', 'Gerente de RR.HH', 'mcbuendia@teccbaco.com', '$2y$10$q8InCu93dvDO/5KPwHEik.3y4IiEM1DE3kz8TZpfT7eDYN5CLmTCm', '3002589663', 'Cliente', 4, 'mcbuendia-teccbaco-com', '2018-09-03 22:37:44', '2018-09-04 16:03:20', 1),
(8, '123456875', 'Julieth ', 'Amorocho', 'Gerente de Operaciones', 'operaciones@mastersecurityconsulting.com', '$2y$10$G.3OL9wDZTEZHoSx87ENRefwRQEVEroS9LT7efjX0jO.Mi3Lia6Qq', '3012556633', 'Operador', 1, 'operaciones-mastersecurityconsulting-com', '2018-09-05 13:14:03', '2018-09-05 13:14:03', 1),
(9, '256389741', 'Jose ', 'Mendez', 'Visitador', 'visitadormendez@mastersecurityconsulting.com', '$2y$10$37R27ns1Rr8D6BIuSkHRLO06L6HI5jERF0rOI/YF8ZFyWw0aNQ22K', '3123669887', 'Visitador', 1, 'visitadormendez-mastersecurityconsulting-com', '2018-09-11 14:36:29', '2018-09-11 14:37:11', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_visities`
--

CREATE TABLE `user_visities` (
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `home_visity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_visities`
--

INSERT INTO `user_visities` (`created`, `modified`, `user_id`, `home_visity_id`) VALUES
('2018-09-11 13:46:04', '2018-09-11 13:46:04', 5, 4),
('2018-09-11 13:46:20', '2018-09-11 13:46:20', 5, 5),
('2018-09-11 13:46:24', '2018-09-11 13:46:24', 5, 6),
('2018-09-11 14:39:17', '2018-09-11 14:39:17', 9, 7),
('2018-09-11 14:39:23', '2018-09-11 14:39:23', 9, 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `academic_information`
--
ALTER TABLE `academic_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_visity_id` (`home_visity_id`);

--
-- Indices de la tabla `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `control_id` (`control_id`);

--
-- Indices de la tabla `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `economy_id` (`economy_id`);

--
-- Indices de la tabla `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_visity_id` (`home_visity_id`);

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `close_relatives`
--
ALTER TABLE `close_relatives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `family_id` (`family_id`);

--
-- Indices de la tabla `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_id` (`system_id`);

--
-- Indices de la tabla `concepts`
--
ALTER TABLE `concepts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_visity_id` (`home_visity_id`);

--
-- Indices de la tabla `controls`
--
ALTER TABLE `controls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `element_id` (`element_id`);

--
-- Indices de la tabla `departaments`
--
ALTER TABLE `departaments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departures`
--
ALTER TABLE `departures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `character_id` (`character_id`);

--
-- Indices de la tabla `economies`
--
ALTER TABLE `economies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_visity_id` (`home_visity_id`);

--
-- Indices de la tabla `elements`
--
ALTER TABLE `elements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `component_id` (`component_id`);

--
-- Indices de la tabla `evidences`
--
ALTER TABLE `evidences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answer_id` (`answer_id`);

--
-- Indices de la tabla `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `economy_id` (`economy_id`);

--
-- Indices de la tabla `families`
--
ALTER TABLE `families`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_visity_id` (`home_visity_id`);

--
-- Indices de la tabla `home_visities`
--
ALTER TABLE `home_visities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indices de la tabla `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`),
  ADD KEY `economy_id` (`economy_id`);

--
-- Indices de la tabla `inspections`
--
ALTER TABLE `inspections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_visity_id` (`home_visity_id`);

--
-- Indices de la tabla `licenses`
--
ALTER TABLE `licenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `character_id` (`character_id`);

--
-- Indices de la tabla `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sector_id` (`sector_id`);

--
-- Indices de la tabla `municipalities`
--
ALTER TABLE `municipalities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departament_id` (`departament_id`);

--
-- Indices de la tabla `notebooks`
--
ALTER TABLE `notebooks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `character_id` (`character_id`);

--
-- Indices de la tabla `passports`
--
ALTER TABLE `passports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `character_id` (`character_id`);

--
-- Indices de la tabla `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `photographies`
--
ALTER TABLE `photographies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_visity_id` (`home_visity_id`);

--
-- Indices de la tabla `relatives`
--
ALTER TABLE `relatives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `family_id` (`family_id`);

--
-- Indices de la tabla `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `component_id` (`component_id`),
  ADD KEY `inspection_id` (`inspection_id`);

--
-- Indices de la tabla `sectors`
--
ALTER TABLE `sectors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_visity_id` (`home_visity_id`);

--
-- Indices de la tabla `social_aspects`
--
ALTER TABLE `social_aspects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_visity_id` (`home_visity_id`);

--
-- Indices de la tabla `studies`
--
ALTER TABLE `studies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `academic_information_id` (`academic_information_id`);

--
-- Indices de la tabla `systems`
--
ALTER TABLE `systems`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indices de la tabla `user_visities`
--
ALTER TABLE `user_visities`
  ADD PRIMARY KEY (`user_id`,`home_visity_id`),
  ADD KEY `home_visity_id` (`home_visity_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `academic_information`
--
ALTER TABLE `academic_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `bank_accounts`
--
ALTER TABLE `bank_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT de la tabla `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `close_relatives`
--
ALTER TABLE `close_relatives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `components`
--
ALTER TABLE `components`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `concepts`
--
ALTER TABLE `concepts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `controls`
--
ALTER TABLE `controls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;
--
-- AUTO_INCREMENT de la tabla `departaments`
--
ALTER TABLE `departaments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT de la tabla `departures`
--
ALTER TABLE `departures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `economies`
--
ALTER TABLE `economies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `elements`
--
ALTER TABLE `elements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT de la tabla `evidences`
--
ALTER TABLE `evidences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `families`
--
ALTER TABLE `families`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `home_visities`
--
ALTER TABLE `home_visities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inspections`
--
ALTER TABLE `inspections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `licenses`
--
ALTER TABLE `licenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `maps`
--
ALTER TABLE `maps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `municipalities`
--
ALTER TABLE `municipalities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1101;
--
-- AUTO_INCREMENT de la tabla `notebooks`
--
ALTER TABLE `notebooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `passports`
--
ALTER TABLE `passports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `photographies`
--
ALTER TABLE `photographies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `relatives`
--
ALTER TABLE `relatives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sectors`
--
ALTER TABLE `sectors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `social_aspects`
--
ALTER TABLE `social_aspects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `studies`
--
ALTER TABLE `studies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `systems`
--
ALTER TABLE `systems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `academic_information`
--
ALTER TABLE `academic_information`
  ADD CONSTRAINT `academic_information_ibfk_1` FOREIGN KEY (`home_visity_id`) REFERENCES `home_visities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`control_id`) REFERENCES `controls` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD CONSTRAINT `bank_accounts_ibfk_1` FOREIGN KEY (`economy_id`) REFERENCES `economies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `characters`
--
ALTER TABLE `characters`
  ADD CONSTRAINT `characters_ibfk_1` FOREIGN KEY (`home_visity_id`) REFERENCES `home_visities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `close_relatives`
--
ALTER TABLE `close_relatives`
  ADD CONSTRAINT `close_relatives_ibfk_1` FOREIGN KEY (`family_id`) REFERENCES `families` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `components`
--
ALTER TABLE `components`
  ADD CONSTRAINT `components_ibfk_1` FOREIGN KEY (`system_id`) REFERENCES `systems` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `concepts`
--
ALTER TABLE `concepts`
  ADD CONSTRAINT `concepts_ibfk_1` FOREIGN KEY (`home_visity_id`) REFERENCES `home_visities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `controls`
--
ALTER TABLE `controls`
  ADD CONSTRAINT `controls_ibfk_1` FOREIGN KEY (`element_id`) REFERENCES `elements` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `departures`
--
ALTER TABLE `departures`
  ADD CONSTRAINT `departures_ibfk_1` FOREIGN KEY (`character_id`) REFERENCES `characters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `economies`
--
ALTER TABLE `economies`
  ADD CONSTRAINT `economies_ibfk_1` FOREIGN KEY (`home_visity_id`) REFERENCES `home_visities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `elements`
--
ALTER TABLE `elements`
  ADD CONSTRAINT `elements_ibfk_1` FOREIGN KEY (`component_id`) REFERENCES `components` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `evidences`
--
ALTER TABLE `evidences`
  ADD CONSTRAINT `evidences_ibfk_1` FOREIGN KEY (`answer_id`) REFERENCES `answers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_ibfk_1` FOREIGN KEY (`economy_id`) REFERENCES `economies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `families`
--
ALTER TABLE `families`
  ADD CONSTRAINT `families_ibfk_1` FOREIGN KEY (`home_visity_id`) REFERENCES `home_visities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `home_visities`
--
ALTER TABLE `home_visities`
  ADD CONSTRAINT `home_visities_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `home_visities_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `income`
--
ALTER TABLE `income`
  ADD CONSTRAINT `income_ibfk_1` FOREIGN KEY (`economy_id`) REFERENCES `economies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inspections`
--
ALTER TABLE `inspections`
  ADD CONSTRAINT `inspections_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`home_visity_id`) REFERENCES `home_visities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `licenses`
--
ALTER TABLE `licenses`
  ADD CONSTRAINT `licenses_ibfk_1` FOREIGN KEY (`character_id`) REFERENCES `characters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `maps`
--
ALTER TABLE `maps`
  ADD CONSTRAINT `maps_ibfk_1` FOREIGN KEY (`sector_id`) REFERENCES `sectors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `municipalities`
--
ALTER TABLE `municipalities`
  ADD CONSTRAINT `municipalities_ibfk_1` FOREIGN KEY (`departament_id`) REFERENCES `departaments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `notebooks`
--
ALTER TABLE `notebooks`
  ADD CONSTRAINT `notebooks_ibfk_1` FOREIGN KEY (`character_id`) REFERENCES `characters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `passports`
--
ALTER TABLE `passports`
  ADD CONSTRAINT `passports_ibfk_1` FOREIGN KEY (`character_id`) REFERENCES `characters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `photographies`
--
ALTER TABLE `photographies`
  ADD CONSTRAINT `photographies_ibfk_1` FOREIGN KEY (`home_visity_id`) REFERENCES `home_visities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `relatives`
--
ALTER TABLE `relatives`
  ADD CONSTRAINT `relatives_ibfk_1` FOREIGN KEY (`family_id`) REFERENCES `families` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`component_id`) REFERENCES `components` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `results_ibfk_2` FOREIGN KEY (`inspection_id`) REFERENCES `inspections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sectors`
--
ALTER TABLE `sectors`
  ADD CONSTRAINT `sectors_ibfk_1` FOREIGN KEY (`home_visity_id`) REFERENCES `home_visities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `social_aspects`
--
ALTER TABLE `social_aspects`
  ADD CONSTRAINT `social_aspects_ibfk_1` FOREIGN KEY (`home_visity_id`) REFERENCES `home_visities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `studies`
--
ALTER TABLE `studies`
  ADD CONSTRAINT `studies_ibfk_1` FOREIGN KEY (`academic_information_id`) REFERENCES `academic_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `user_visities`
--
ALTER TABLE `user_visities`
  ADD CONSTRAINT `user_visities_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_visities_ibfk_2` FOREIGN KEY (`home_visity_id`) REFERENCES `home_visities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
