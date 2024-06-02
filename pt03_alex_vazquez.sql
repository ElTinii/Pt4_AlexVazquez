-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2024 a las 22:49:25
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pt03_alex_vazquez`
--
CREATE DATABASE IF NOT EXISTS `pt03_alex_vazquez` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pt03_alex_vazquez`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `Titol` text NOT NULL,
  `text_adreca` text NOT NULL,
  `usuari_id` int(11) NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`article_id`, `Titol`, `text_adreca`, `usuari_id`) VALUES
(1, 'El impacto de la inteligencia artificial en la atención médica', 'El impacto de la inteligencia artificial en la atención médica\": Este artículo exploraría cómo la inteligencia artificial está revolucionando la atención médica, desde diagnósticos más precisos hasta el monitoreo de pacientes.Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio.', 1),
(2, 'Mbappe al madrid ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.', 2),
(3, 'Consejos para mejorar la productividad en el trabajo desde casa', 'Consejos para mejorar la productividad en el trabajo desde casa\": En este artículo, se ofrecerían consejos prácticos para mantenerse productivo mientras se trabaja desde casa, abordando desafíos comunes como la gestión del tiempo y la autodisciplina.\r\nAl contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. ', 2),
(4, 'La importancia de la educación financiera en tiempos de crisis', 'La importancia de la educación financiera en tiempos de crisis\": Se analizaría la relevancia de la educación financiera y cómo puede ayudar a las personas a tomar decisiones informadas durante crisis económicas.\r\nAl contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. ', 2),
(5, 'Cómo mantener una dieta saludable durante la cuarentena', 'Cómo mantener una dieta saludable durante la cuarentena\": Este artículo proporcionaría pautas y consejos sobre cómo mantener una dieta equilibrada y saludable durante situaciones de cuarentena o aislamiento.\r\nAl contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio.', 3),
(6, 'Tendencias de moda para la temporada de otoño/invierno', 'Tendencias de moda para la temporada de otoño/invierno\": Exploraría las tendencias de moda actuales para la temporada de otoño e invierno, destacando colores, prendas y estilos populares.\r\nAl contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio.', 3),
(7, 'La influencia de las redes sociales en la autoestima de los adolescentes', 'La influencia de las redes sociales en la autoestima de los adolescentes\": Investigaría cómo las redes sociales afectan la autoestima de los adolescentes y ofrecería consejos para un uso saludable de las plataformas digitales.\r\nAl contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio.', 3),
(8, 'Estrategias efectivas para el aprendizaje en línea', 'Estrategias efectivas para el aprendizaje en línea\": Este artículo proporcionaría estrategias y herramientas para maximizar el aprendizaje en línea, especialmente relevante en la era digital.\r\nAl contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio.', 3),
(9, 'Los beneficios del yoga para la salud mental', 'Los beneficios del yoga para la salud mental\": Exploraría cómo la práctica del yoga puede mejorar la salud mental, reducir el estrés y promover el bienestar emocional.\r\nAl contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio.', 4),
(10, 'Innovaciones tecnológicas en la industria automotriz', 'Se describirían las últimas innovaciones tecnológicas en la industria automotriz, como vehículos autónomos y sistemas de propulsión eléctrica.\r\nAl contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio.', 4),
(11, 'Cómo iniciar tu propio negocio en línea', 'Este artículo proporcionaría un paso a paso para emprendedores que desean comenzar su propio negocio en línea, incluyendo consejos sobre la elección de nicho y plataformas.\r\nAl contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio.', 4),
(12, 'La importancia de la conservación del medio ambiente', 'Se discutiría la importancia de la conservación del medio ambiente y cómo las acciones individuales y colectivas pueden marcar la diferencia.\r\nAl contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, \"consecteur\", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, descubrió la fuente indudable.', 4),
(13, 'Técnicas de meditación para reducir el estrés', ' Ofrecería técnicas de meditación simples y efectivas para reducir el estrés y mejorar la salud mental.\r\nAl contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, \"consecteur\", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, descubrió la fuente indudable.', 4),
(14, 'Los desafíos de la educación a distancia en la era digital', 'Este artículo abordaría los desafíos y beneficios de la educación a distancia, especialmente en un entorno digital en constante cambio.\r\nAl contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, \"consecteur\", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, descubrió la fuente indudable.', 4),
(15, 'El impacto de la pandemia en la salud mental de los trabajadores de la salud', 'Se analizaría cómo la pandemia ha afectado la salud mental de los profesionales de la salud y se explorarían formas de apoyarlos.\r\nAl contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, \"consecteur\", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, descubrió la fuente indudable.', 4),
(16, 'Consejos para mejorar tus habilidades de comunicación', 'Ofrecería consejos prácticos para mejorar las habilidades de comunicación interpersonal, tanto en el ámbito personal como profesional.\r\nAl contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, \"consecteur\", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, descubrió la fuente indudable.', 5),
(17, 'El auge de la alimentación vegana y vegetariana', 'Exploraría la creciente popularidad de las dietas veganas y vegetarianas, junto con sus beneficios para la salud y el medio ambiente.\r\nAl contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, \"consecteur\", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, descubrió la fuente indudable.', 5),
(18, 'La importancia de la igualdad de género en el lugar de trabajo', 'Se discutiría la necesidad de promover la igualdad de género en el lugar de trabajo y cómo las empresas pueden lograrlo.\r\nAl contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, \"consecteur\", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, descubrió la fuente indudable.', 5),
(19, 'La psicología de la toma de decisiones en situaciones de crisis', 'Este artículo exploraría cómo las personas toman decisiones en momentos de crisis y cómo se pueden mejorar las decisiones bajo presión.\r\nAl contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, \"consecteur\", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, descubrió la fuente indudable.', 5),
(20, 'Los avances en la exploración espacial y la colonización de Marte', 'Se describirían los avances recientes en la exploración espacial y los planes para colonizar Marte en el futuro.\r\nAl contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, \"consecteur\", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, descubrió la fuente indudable.', 6),
(21, 'La historia y evolución de la música electrónica', 'Este artículo ofrecería un recorrido histórico por la música electrónica, desde sus raíces hasta su influencia en la música contemporánea.\r\nAl contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, \"consecteur\", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, descubrió la fuente indudable.', 6),
(22, 'El impacto de la inteligencia emocional en el liderazgo', 'Se discutiría cómo la inteligencia emocional puede mejorar el liderazgo y las habilidades de gestión.\r\nAl contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, \"consecteur\", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, descubrió la fuente indudable.', 6),
(23, 'Las implicaciones éticas de la edición genética', 'Exploraría las implicaciones éticas de la edición genética, incluyendo la modificación de genes humanos.\r\nAl contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, \"consecteur\", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, descubrió la fuente indudable.', 6),
(24, 'Cómo crear una rutina de ejercicios efectiva en casa', 'Ofrecería consejos y ejercicios para mantenerse en forma desde casa, adaptados a diferentes niveles de condición física.\r\nAl contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, \"consecteur\", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, descubrió la fuente indudable.', 6),
(25, 'El futuro de la educación: Aprendizaje virtual y realidades extendidas', ' Se discutiría cómo la educación está evolucionando con la tecnología, incluyendo la realidad virtual y aumentada en el aula.\r\nAl contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, \"consecteur\", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, descubrió la fuente indudable.', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuaris`
--

DROP TABLE IF EXISTS `usuaris`;
CREATE TABLE IF NOT EXISTS `usuaris` (
  `usuari_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `correu` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` text NOT NULL,
  `data_entrada` date DEFAULT NULL,
  `google` tinyint(1) NOT NULL,
  `github` tinyint(1) NOT NULL,
  PRIMARY KEY (`usuari_id`),
  UNIQUE KEY `usuari_id` (`usuari_id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuaris`
--

INSERT INTO `usuaris` (`usuari_id`, `username`, `correu`, `password`, `token`, `data_entrada`, `google`, `github`) VALUES
(2, 'username', 'alexinyo2003@gmail.com', '$2y$10$UNU.yAq67PiyIjcUtJPiX.j4ijCObFOCK.yvzAQQZctQ1IbEJz3R2', '832e7739d0c0abc3d55eb9b700cfcadb', NULL, 0, 0),
(5, 'cap3', 'b.martinez2@sapalomera', '$2y$10$6W5QVvvXCCgynAAsIJUHMOcGJoxy7jZpZ/svqCgDOzcG2Wwo6tv1K', '', NULL, 0, 0),
(6, 'pablo', 'm.maricon@gmail.com', '$2y$10$jbyf/C6.EUsKufo/w0es2uf3dbyKvQjr.NpzG5NcaKNZJSh/NqCLa', '', NULL, 0, 0),
(7, 'alex', 'd.buesa@sapalomera.cat', '$2y$10$eMNMbQQ9eDvVZg2cbw.0quDQD1giGUDftlt51SUW0n/NRKPUeG46a', '', NULL, 0, 0),
(9, 'admin', 'a.tarensi2@sapalomera.cat', '$2y$10$PScGkv2WiB1Wlu8LaLquuOY1njd8H/m/IeLm1Wx6zqFJWJ8YO53LC', '', NULL, 0, 0),
(10, 'uripto', 'a.morcillo@sapalomera.cat', '$2y$10$vTLlD1s2pEA6xL71pwxXVe/PAcUJzHs3QsQ0cyE8T2Dwf4w5DvYcC', '', NULL, 0, 0),
(24, 'alex vazquez carrion', 'thos.vazquez.alex@gmail.com', '', '', NULL, 1, 0),
(27, 'Alejandro Vázquez Carrión', 'a.vazquez2@sapalomera.cat', '', '', NULL, 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
