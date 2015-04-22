-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-04-2015 a las 18:38:15
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `note_datanetwork`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descargas`
--

CREATE TABLE IF NOT EXISTS `descargas` (
`id` int(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `intro` varchar(400) NOT NULL,
  `texto` text NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `descargas`
--

INSERT INTO `descargas` (`id`, `titulo`, `intro`, `texto`, `tipo`, `fecha`) VALUES
(1, 'Call Of Duty Modern Warfare 3 Full Mega', 'Hola amigos de les traigo este espectacular juego llamado .\r\nCall Of Duty Modern Warfare 3. comencemos asi.\r\n', 'La versiÃ³n para PC de Modern Warfare 3 ha sido trabajada a conciencia y desde Infinity Ward esperan poder ofrecer un tÃ­tulo de gran nivel en compatibles, algo esencial para poder luchar contra su gran rival en este terreno: Battlefield 3. Parece que en consolas parte con ventaja dada su posiciÃ³n lÃ­der, pero en PC la batalla aÃºn estÃ¡ por decidir.\r\n\r\nREQUISITOS RECOMENDADOS\r\nâ€“ Windows XP o Windows Vista  Windows 7 x32.x64.w8x32.x64\r\nâ€“ Intel Core 2 Duo E6600 o AMD Phenom X3 8750 o superior.\r\nâ€“ 2 GB RAM.\r\nâ€“ Shader 3.0 o superior 256 MB NVIDIA GeForce 8600GT / ATI Radeon X1950 o superior.\r\nâ€“ DirectX 9.0c en adelante.\r\nâ€“ Hard Drive: 16 GB de espacio libre.\r\n\r\n\r\n\r\nlos links \r\n\r\nhttps://mega.co.nz/#!PgRV0RTZ!ttu2YPnQM9KBbkzGXtgQNFVb5pPnldRmIydLCc8UqZg\r\nhttps://mega.co.nz/#!jhpmiSRI!-LDtnILMkao8oyUwpM_S14f5b45TCdlR13jsdEJiC_c\r\nhttps://mega.co.nz/#!S5gWATKQ!9e459yZmvJFOgLyOESEQc8IwvTYOSjgeqCVtbr3MV9I\r\nhttps://mega.co.nz/#!PtJziJYZ!55nyKGLMK-Tb1F0-qYx1R-GT-dd0x5f0HsQ7k8sGJJI\r\nhttps://mega.co.nz/#!H8pyTKbR!0xtdtDPb4-OtQwXA82wI9ASFGIQwF0n35uJj-1fe24g\r\nhttps://mega.co.nz/#!u8BmTBiD!rRumdjoUmim3D5iL6mzEoN_UUAIFaOuF3R2uc0ffzHU\r\nhttps://mega.co.nz/#!ylBSnDoA!jrOpKwvQPDIlUKTEyjTnCuF3g3_oOKigSEwc177JA7c\r\nhttps://mega.co.nz/#!60whjJrS!GJvx3L3y8seU70je3JWiwepU3YDHE0mUtKJrtnb-5mI\r\nhttps://mega.co.nz/#!r1BFmBRa!KcEH_WhmRD6zRO6XTCoCA_zn0se84Fg35D-Akawgy9c\r\nhttps://mega.co.nz/#!akRGyBAI!Cqwlus8mT-AJiwwZZDo0602ms3Z10qcLkOw2BYt30xk\r\nhttps://mega.co.nz/#!OxBUyB7T!H1RO-N6tsg16QcEPMqxZFztsT3VZYCEVywXW9xsbL1Q\r\nhttps://mega.co.nz/#!GhpR3AxT!rNsrB7aD87BNRwBfKnelVZNx1Lgvj5AGf_MsMZ_wVXY\r\nhttps://mega.co.nz/#!6wBH2AgZ!oAXGpS9Tj9wGPK8SduLiJ-JlIksFJgcDUH4E2gyiXSM\r\nhttps://mega.co.nz/#!j4IWyahC!uuB9wQADQmhKjFn53P68Tl83_TlqarrKRaAw9KY5RZc\r\n\r\n\r\ncontraseÃ±a:www.blizzboygames ', '13', '2015-03-19 09:45:44'),
(2, 'LIMBO', 'SINOPSIS:\r\nEn Limbo seremos un niÃ±o pequeÃ±o que emprende una gigantesca odisea en busca de su \r\nhermana perdida. Nuestro protagonista no es mÃ¡s que una silueta oscura con forma de niÃ±o, con\r\n dos brillantes puntos claros a modo de ojos en su cara. Un simpatiquÃ­simo diseÃ±o que entronca \r\nclaramente con la filosofÃ­a del videojuego, un tÃ­tulo que nos mueve hacia delante en su historia \r\nel mi', 'DATOS:\r\nPlataforma: PC\r\nGÃ©nero: Independiente , Aventura (Arcade / Logica)\r\nDesarrollador: Playdead\r\nIdioma: EspaÃ±ol\r\nTamaÃ±o: 81 Mb\r\n\r\n\r\nSistema Operativo:\r\nWindows XP/Vista/7\r\nProcesador: 2 GHz\r\nMemoria: 512MB\r\nDirectX: 9c\r\nDisco duro: 150MB de espacio libre\r\n\r\n\r\nLink: \r\nhttps://mega.co.nz/#!0l81nK7T!9yqR-PUlVuOeIBEZpQb8F04SS32U6kjmABqZZYCMcwc ', '13', '2015-03-19 12:11:34'),
(3, 'PokÃ©mon Black Ghost (Beta) (MEGA)', 'Muchos de ustedes habrÃ¡n oÃ­do hablar de este misterioso hack que tanto revuelo ha causado y que ha dado pie a la creaciÃ³n de tantos creepypastas. QuizÃ¡ algunos lo conozcan como Pokemon Creepy Black, otros como Pokemon Ghost y el resto, simplemente, como aquÃ­ lo pone: Pokemon Black Ghost. \r\n', 'Es un juego muy muy muy difÃ­cil de encontrar y, aunque me gustarÃ­a subirlo completo, me es imposible a causa de la caÃ­da masiva de links. Pero, como no querÃ­a decepcionar a la gente de esta magnÃ­fica web y, menos aÃºn, dejarles a ustedes sin probar aunque fuera una pequeÃ±a parte de este juego, les traigo una beta. \r\n\r\n\r\nLa trama del juego se centra en Red (personaje principal de la primera generaciÃ³n de PokÃ©mon), a cuyo equipo se une el Pokemon Ghost -ese que se ve dentro de la Torre Lavanda y que Ãºnicamente es identificable con el Scope Silph-, el cual es capaz de acabar tanto con los Pokemon rivales y sus entrenadores sin tan siquiera dejarlos atacar, y no hablo de debilitarlos. \r\nSin mÃ¡s, disfrÃºtenlo tanto como yo lo hice. \r\n<iframe width="640" height="360" src="https://www.youtube.com/embed/wV68EQ7DU8g?feature=player_embedded" frameborder="0" allowfullscreen></iframe>\r\nLink de descarga: https://mega.co.nz/#!PJ5CASIA!-ZnRqw-nbLkkE4jhGpxReM3ttWcuoHat0FWxjX4KhOI - See more at: http://www.identi.li/index.php?topic=366089#sthash.qcujG6mh.dpuf', '13', '2015-03-19 12:15:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(255) NOT NULL,
  `empresa` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tel1` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tel2` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `web` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `region` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `eslogan` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `intro` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `empresa`, `nit`, `direccion`, `ciudad`, `tel1`, `tel2`, `web`, `correo`, `region`, `eslogan`, `intro`) VALUES
(1, 'NoteInsideNetwork', '00', 'Heroico Colegio Militar #3, Col Centro', 'Pedro Escobedo, Qro.', '(448) 112 9368', '(448) 112 9368', 'www.noteinsidenetwork.com', 'contacto@noteinsidenetwork.com', '151', 'Desarrollo e InformaciÃ³n de Tecnologias', 'Stefani Joanne Angelina Germanotta (Nueva York, 28 de marzo de 1986), mÃ¡s conocida por su nombre artÃ­stico, Lady Gaga, es una cantante, compositora, productora, bailarina, activista y diseÃ±adora de moda estadounidense. TambiÃ©n ha dedicado parte de su vida a la actuaciÃ³n y la filantropÃ­a. Nacida y criada en la ciudad de Nueva York, estudiÃ³ en la escuela Convent of the Sacred Heart y asistiÃ³ por un tiempo breve a la Tisch School of the Arts, perteneciente a la Universidad de Nueva York, hasta que abandonÃ³ sus estudios para enfocarse en su carrera musical. Fue asÃ­ como irrumpiÃ³ en la escena del rock en el Lower East Side de Manhattan y firmÃ³ un contrato con Streamline Records hacia fines de 2007. En la Ã©poca en que trabajaba como compositora para dicha discogrÃ¡fica, su voz llamÃ³ la atenciÃ³n del artista Akon, quien la hizo firmar un contrato con Kon Live Distribution.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
`id` int(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `intro` varchar(400) NOT NULL,
  `texto` text NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `intro`, `texto`, `tipo`, `fecha`) VALUES
(1, 'Pablo AlborÃ¡n', 'Pablo AlborÃ¡n en Mexico en lo personal no soy fan de este cantante espaÃ±ol pero no quier decir que por que no me guste sea malo.', 'Teatro MetropÃ³litan\r\n - MÃ©xico\r\n, DF\r\n - jue 13 mar 2014', '4', '2015-04-16 17:00:11'),
(2, 'System of a Down', 'System of a Down en MÃ©xico, DF', 'La banda de metal alternativo originaria de L.A California se precentara en el palacio de los deportes el 6 de octubre del 2015 alas 20:30 Hrs en lo general es una banda que esta entre mis 10 banda favoritas y espero poder estar ese gran dia para poder disfrutar de sus canciones.', '4', '2015-04-16 17:24:54'),
(3, 'Imagine Dragons', 'Imagine Dragons en MÃ©xico, DF', 'La banda originaria de las Vegas, Nevada que fue la banda revelaciÃ³n del 2013 con el sencillo Radioactive se precentara en el palacio de los deportes en la ciudad de mÃ©xico el dia lunes 27 de abril del 2015', '4', '2015-04-16 17:50:35'),
(4, 'Fiesta Tauriana', 'Fiesta Taurian en Aguascalientes', ' No te pierdas la fista breva los dias 19,23,24,25 y 26 de Abril del 2015 el evento se realizara en Cda. Rafael RodrÃ­guez Dominguez Esq., Blvd. Adolfo LÃ³pez Mateos 57N, Expoplaza,  Aguascalientes,  AGS  08400.', '4', '2015-04-16 18:03:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotografia`
--

CREATE TABLE IF NOT EXISTS `fotografia` (
`id` int(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `intro` varchar(400) NOT NULL,
  `texto` text NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fotografia`
--

INSERT INTO `fotografia` (`id`, `titulo`, `intro`, `texto`, `tipo`, `fecha`) VALUES
(1, 'Cubecraft', 'Una divertida forma de pasar el tiempo ', ' Esta divertidas figuras que podemos conseguir en internet, cual podemos armar alguno de nuestro personajes favoritos con una peculiar forma. ', '6', '2015-04-16 09:20:49'),
(2, 'Gran Muralla China', ' "Larga fortaleza"', 'La caracterÃ­stica imagen de la muralla china data de los siglos XV y XVI, cuando los emperadores Ming reconstruyeron la barrera defensiva al norte de su imperio en ladrillo y piedra, con una serie de torres conectadas mediante lienzos de muralla.', '6', '2015-04-16 16:00:48'),
(3, 'Red Square', 'La Plaza Roja de MoscÃº', 'La plaza Roja lleva desde el siglo 14 antes conocida anteriormente conocida como una plaza de comercio en 1934.', '6', '2015-04-16 16:14:07'),
(4, 'Tom Hoops', 'Fotografo Ingles.', 'su carrera profesional en la fotografÃ­a en 2008 pero el queria ser pintor sus fotografias captura la fortaleza de las pesonas que fotografia ya sea un infante una mujer o un hombre.', '6', '2015-04-16 18:58:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `internacional`
--

CREATE TABLE IF NOT EXISTS `internacional` (
`id` int(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `intro` varchar(400) NOT NULL,
  `texto` text NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `internacional`
--

INSERT INTO `internacional` (`id`, `titulo`, `intro`, `texto`, `tipo`, `fecha`) VALUES
(1, 'La encrucijada del Estrecho', 'Este domingo viajamos al estrecho de Gibraltar, uno de los puntos mÃ¡s calientes del planeta. Consulte el avance de este gran reportaje.', 'El Estrecho de Gibraltar es uno de los puntos mÃ¡s calientes del planeta. Un lugar irrepetible de la geografÃ­a donde se concentran tantos riesgos como oportunidades. Una caprichosa frontera natural que separa dos continentes, culturas, religiones, demografÃ­as y formas de vida, y que es, al mismo tiempo, uno de los enclaves con mayor densidad de trÃ¡fico del mundo. El Estrecho une y separa. Es una encrucijada y el paso obligado entre el sudeste asiÃ¡tico, China y Oriente PrÃ³ximo, sus mercancÃ­as y su energÃ­a, y las costas occidentales de Europa, Ãfrica y AmÃ©rica. Ha ruta obligada. El cordÃ³n umbilical. Por ese mÃ­nimo canal de menos de cien kilÃ³metros de longitud por 14 de ancho en su punto mÃ¡s angosto, el segundo mÃ¡s transitado despuÃ©s del de La Mancha, circulan 110.000 grandes barcos al aÃ±o; un tercio de la energÃ­a que se consume en el planeta y mÃ¡s de un millÃ³n de barriles de petrÃ³leo diarios.\r\n\r\nEl PaÃ­s Semanal ha viajado durante dos semanas por los puntos clave de este territorio y se ha encontrado y entrevistado a los principales actores que conviven en este rincÃ³n de importancia estratÃ©gica mundial. Este domingo se lo cuenta a sus lectores. Para empezar, ha visitado las cuatro fronteras que aquÃ­ se concentran: la que separa la UniÃ³n Europea del Norte de Ãfrica; la de EspaÃ±a con Marruecos, situada en Algeciras; la de La LÃ­nea de la ConcepciÃ³n con Gibraltar, una de las Ãºltimas colonias britÃ¡nicas que perviven en el mundo, y la de Ceuta con Marruecos. Hemos patrullado en buques de la Armada, y junto a la Guardia Civil y Vigilancia Aduanera, la policÃ­a de Hacienda contra el contrabando y el blanqueo; hemos visitado los y hermÃ©ticos centros de control electrÃ³nico del estrecho en Madrid (la Guardia Civil) y Cartagena (la Armada), y el lugar donde se centralizan todas las decisiones sobre la seguridad marÃ­tima en esas aguas, entre Europa y Ãfrica, entre oriente y Occidente, en el bÃºnker del Departamento de Seguridad Nacional, en el Palacio de la Moncloa.', '9', '2015-03-23 11:55:53'),
(2, 'La oposiciÃ³n de Venezuela carga contra la mediaciÃ³n de Unasur', 'El secretario general de la organizaciÃ³n es visto como parte interesada en el conflicto\r\n', 'La posibilidad de que el Gobierno y la oposiciÃ³n de Venezuela se sienten a una mesa a dialogar estÃ¡ mÃ¡s lejos que nunca. La UniÃ³n de Naciones Sudamericanas (Unasur) no es confiable para los adversarios del Gobierno del presidente NicolÃ¡s Maduro. Todo ha quedado demostrado a la salida de la reuniÃ³n que tuvieron en la sede de la Nunciatura ApostÃ³lica en Caracas este viernes. Ninguno de los representantes de la oposiciÃ³n â€“cuatro diputados y dos gobernadores, entre ellos el excandidato presidencial Henrique Capriles- se ha detenido a hablar con la prensa apostada en el sitio. Algunos de ellos han preferido expresar su opiniÃ³n a travÃ©s de las redes sociales. â€œImposible con presos polÃ­ticos dialogo con el Gobiernoâ€, ha escrito el diputado de Proyecto Venezuela, Carlos Berrizbeitia. â€œEn nuestro criterio, este encuentro ni siquiera puede calificarse como una reuniÃ³nâ€, ha opinado a su vez la representante del Parlamento Latinoamericano, Delsa SolÃ³rzano (Un Nuevo Tiempo) en su cuenta de Twitter.', '9', '2015-03-23 11:57:24'),
(3, 'Luis Almagro promete renovar la OEA', 'El excanciller uruguayo es elegido como nuevo secretario general del organismo, en una votaciÃ³n para la que no tenÃ­a rivales.', 'El excanciller uruguayo Luis Almagro se comprometiÃ³ a renovar la OrganizaciÃ³n de Estados Americanos (OEA) para la que fue elegido este miÃ©rcoles como nuevo secretario general, en una votaciÃ³n para la que concurrÃ­a como Ãºnico candidato.\r\n\r\n"No vengo para administrar ninguna crisis, vengo para facilitar y continuar la renovaciÃ³n" de la OEA, dijo Almagro tras ser confirmado como el sucesor del chileno JosÃ© Miguel Insulza al frente del Ãºnico organismo que sienta a todos los paÃ­ses del hemisferio occidental, salvo Cuba.\r\n\r\nAlmagro, que fue elegido con 33 de los 34 sufragios emitidos â€”hubo una abstenciÃ³nâ€” se comprometiÃ³ a ser un "incansable luchador por la unidad americana, mÃ¡s preocupado en buscar soluciones prÃ¡cticas duraderas" que hacer caso a la "retÃ³rica y estridencias".\r\n\r\nPara ello, puntualizÃ³ en posterior rueda de prensa, la OEA necesita tener una â€œabsoluta credibilidad polÃ­ticaâ€, de modo que sea la â€œreferencia polÃ­tica inmediataâ€ para todos los paÃ­ses que la conforman, y mÃ¡s allÃ¡ de sus miembros. Que sea una organizaciÃ³n â€œque acerca soluciones, que sirve para resolver conflictos, solucionar problemas, no para radicalizar conflictos o para alejar solucionesâ€, insistiÃ³.\r\n\r\nSu objetivo es, aseverÃ³, dirigir un organismo hemisfÃ©rico "cada vez mÃ¡s realista" en un contexto en el que la OEA ha dejado de ser un "espacio Ãºnico", ante la competencia de organismos subregionales como Celac, Unasur, Mercosur o la Alianza del PacÃ­fico. Pero la OEA, subrayÃ³ ante los Estados miembros, no es una organizaciÃ³n mÃ¡s. "Abarca todo ello y la suma deberÃ¡ ser mÃ¡s que las partes" para lograr "resultados tangibles" en Ã¡reas "clave para la democracia, los derechos humanos, la seguridad y el desarrollo integral de las AmÃ©ricas", insistiÃ³.\r\n\r\nNo vengo para administrar ninguna crisis, vengo para facilitar y continuar la renovaciÃ³n de la OEA\r\nLa Ãºnica sorpresa de la jornada fue el rechazo de varios paÃ­ses del Caribe, apoyados por CanadÃ¡, a apoyar la propuesta formalizada por Honduras de que Almagro fuera confirmado por aclamaciÃ³n. Ello llevÃ³ a los 19 cancilleres y altos representantes reunidos en la sede de la OEA en Washington a tener que emitir un voto secreto.\r\n\r\nAunque el excanciller consiguiÃ³ un apoyo prÃ¡cticamente unÃ¡nime, el gesto afeÃ³ â€”una vez mÃ¡sâ€” la imagen de unidad que tanto requiere un organismo desgastado por divisiones polÃ­ticas en los Ãºltimos aÃ±os.\r\n\r\nHaber logrado un secretario general por aclamaciÃ³n hubiera sido "preferible" porque esta figura "le da fuerza a la organizaciÃ³n", lamentÃ³ la vicepresidenta y ministra de Relaciones Exteriores de PanamÃ¡, Isabel de Saint Malo, en una opiniÃ³n compartida por MÃ©xico, Brasil y Ecuador.\r\n\r\nSuperar las divisiones es una prioridad para no pocos paÃ­ses de la regiÃ³n, como subrayÃ³ la canciller colombiana, MarÃ­a Ãngela HolguÃ­n.\r\n\r\n"AmÃ©rica ha estado dividida, es hora de reparar las heridas del pasado y construir una AmÃ©rica unida y para todos, ese es un reto vital para la OEA", reclamÃ³ tras la confirmaciÃ³n del uruguayo.\r\n\r\n"Queremos una organizaciÃ³n comprometida con la firme defensa de la democracia, queremos una organizaciÃ³n eficiente y efectiva que respalde la vigencia del Estado de derecho y el pleno ejercicio de los derechos humanos", resumiÃ³ el resto de demandas regionales su par peruano, Gonzalo GutiÃ©rrez Reinel, que tambiÃ©n instÃ³ a Almagro a "facilitar los puentes de diÃ¡logo polÃ­tico y cooperaciÃ³n" que necesita la regiÃ³n.\r\n\r\nEl que fuera jefe de la diplomacia del Gobierno de JosÃ© Mujica se ha impuesto tambiÃ©n como objetivo lograr que Cuba regrese a la OEA\r\nAlmagro (PaysandÃº, 1963) tomarÃ¡ el mando de la OEA el 26 de mayo, un dÃ­a despuÃ©s de la retirada de Insulza, quien ocupÃ³ el cargo durante una dÃ©cada en la que la organizaciÃ³n ha perdido peso ante la competencia de organismos subregionales surgidos en los Ãºltimos aÃ±os.\r\n\r\nRecuperar la credibilidad -y peso- de la OEA serÃ¡ una de las principales tareas de Almagro, quien ademÃ¡s deberÃ¡ lidiar con algunas crisis inmediatas, como la situaciÃ³n en Venezuela. Este asunto de hecho regresa el jueves al organismo en Washington, donde la canciller venezolana, Delcy RodrÃ­guez, ha pedido una reuniÃ³n extraordinaria para denunciar la decisiÃ³n del Gobierno de Barack Obama de declarar una "emergencia nacional" respecto a Venezuela por considerarla una "amenaza inusual". Caracas tambiÃ©n pretende denunciar las sanciones contra siete altos funcionarios venezolanos impuesta por Washington, que ha defendido el paso como una decisiÃ³n "soberana".\r\n\r\nEl que fuera jefe de la diplomacia del Gobierno de JosÃ© Mujica se ha impuesto tambiÃ©n como objetivo lograr que Cuba regrese a la OEA. El organismo levantÃ³ la suspensiÃ³n que pesÃ³ durante dÃ©cadas sobre la isla en 2009, pero desde entonces La Habana ha rechazado regresar a una organizaciÃ³n que considera superada por iniciativas como la Celac, donde sÃ­ participa activamente.\r\n\r\nAlmagro contarÃ¡ con el hasta ahora embajador ante la OEA de Belize, NÃ©stor MÃ©ndez, como su compaÃ±ero de fÃ³rmula. En la segunda votaciÃ³n de la jornada, el beliceÃ±o se impuso por 24 votos frente a 10 a su rival para el cargo de secretario general adjunto de la OEA, el embajador de Guyana, Bayney Karran.', '9', '2015-03-23 11:58:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lecturas`
--

CREATE TABLE IF NOT EXISTS `lecturas` (
`id` int(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `intro` varchar(400) NOT NULL,
  `texto` text NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nacional`
--

CREATE TABLE IF NOT EXISTS `nacional` (
`id` int(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `intro` varchar(400) NOT NULL,
  `texto` text NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nacional`
--

INSERT INTO `nacional` (`id`, `titulo`, `intro`, `texto`, `tipo`, `fecha`) VALUES
(1, 'Recuento de funcionarios que han tenido deslices en redes sociales', 'Son muchos los polÃ­ticos que han publicado mensajes discriminatorios u ofensivos', 'CIUDAD DE MÃ‰XICO (23/MAR/2015).- Con el auge de las redes sociales, diversos funcionarios pÃºblicos han tenido deslices que les han costado sus puestos, pues publicaron mensajes discriminatorios u ofensivos hacia grupos indÃ­genas, mujeres o manifestantes.\r\n\r\nAquÃ­ te damos un recuento de los personajes que han lanzado mensajes de desagrado en Facebook o Twitter hacia la poblaciÃ³n y quÃ© ha pasado con ellos.\r\n\r\nArlem HernÃ¡ndez Moncada\r\n\r\nMejor conocida como "#LadyLerdo" publicÃ³ en Twitter: "Que se sentirÃ¡ ser ama de casa gorda vivir en casa de renta y traer una camioneta vieja y fea. asi pues mejor me muero jajajaja (sic)", burlÃ¡ndose de las mujeres a quienes atendÃ­a mediante talleres y trabajos dirigidos, precisamente, a amas de casa.\r\n\r\nLuego de las crÃ­ticas, insultos y desaprobaciÃ³n de muchos usuarios de la red social hacia la funcionaria cerrÃ³ su cuenta y presentÃ³ su renuncia, la cual fue confirmada mediante un comunicado por parte del ayuntamiento de Lerdo en el estado de Durango.\r\n\r\nLiliana Sevilla Rojas\r\n\r\nLa directora de Immujer Tijuana (Instituto Municipal de la Mujer) escribiÃ³ en su muro de Facebook: "QuÃ© tal si lo mÃ­o estÃ¡ en Europa y yo aquÃ­ sufriendo con estos indÃ­genas".\r\n\r\nTras la publicaciÃ³n, la funcionaria recibiÃ³ duras crÃ­ticas de sus seguidores bajo el "hashtag" "#LadyEuropa" calificaron el acto como xenofÃ³bica, discriminaciÃ³n y racismo.\r\n\r\nMÃ¡s tarde, Sevilla se disculpÃ³: "Lamento si alguien se sintiÃ³ ofendido o discriminado y ofrezco disculpas a quien las quiera recibir", aÃ±adiÃ³.\r\n\r\nCarlos Manuel TreviÃ±o NÃºÃ±ez\r\n\r\nEl ex secretario de Desarrollo Social del municipio de QuerÃ©taro llamÃ³ "simio" al jugador brasileÃ±o Ronaldo de Assis Moreira "Ronaldinho".\r\n\r\nLa publicaciÃ³n en su cuenta de Facebook desatÃ³ una ola de comentarios por parte de aficionados y del club Gallos Blancos de QuerÃ©taro, de donde es jugador, pues pedÃ­an un "castigo ejemplar" por este tipo de comentarios del funcionario.\r\n\r\nEl panista escribiÃ³: â€œâ€¦En serio trato de ser tolerante, pero DETESTO EL FUTBOL, y el fenÃ³meno idiotizante que produce... Lo detesto aÃºn mÃ¡s porque la gente estorba e inunda las avenidas para hacer que tarde dos horas para llegar a casaâ€¦ y todo para ver a un SIMIOâ€¦BrasileÃ±o pero simio aun. Esto ya es un circo ridÃ­culoâ€.\r\n\r\nLaura Romero Montes\r\n\r\nMejor conocida como "#LadyDIF", luego de que se difundiÃ³ un video en redes sociales donde ella mandÃ³, literalmente, "a chin... a su madre" a un grupo de manifestantes que demandaban suministro de agua potable.\r\n\r\nJuan Carlos Carrera CarreÃ±o\r\n\r\nEl ahora ex empleado de promociÃ³n juvenil del municipio de LeÃ³n, Guanajuato e integrante del PRI publicÃ³ en su cuenta de Facebook un mensaje agresivo para los 43 normalistas de Ayotzinapa.\r\n\r\nEl post decÃ­a que ni se le "aparezcan los pu... normalista que los vuelvo a matar (sic)â€ y â€œpu.. mugrosos anarquistas de mier... con secundaria trunca que hacen sus marchas pend... sin tener pu... idea de lo que quieren (sic)â€.\r\n\r\nAl respecto, el Instituto Municipal de la Juventud emitiÃ³ un comunicado donde rechazaba toda expresiÃ³n de violencia por parte de Carrera CarreÃ±o e informaba que el empleado habÃ­a presentado su renuncia.\r\n\r\nLas publicaciones xenofÃ³bicas, discriminatorias y racistas se convirtieron en tendencias en las redes sociales.', '10', '2015-03-23 11:36:45'),
(2, 'Lopez Obrador pide combatir compra de voto', 'RefiriÃ³ las modalidades que se emplean cada elecciÃ³n para traficar con el voto como entrega de despensas y dinero en efectivo, entre otros.', 'CIUDAD DE MÃ‰XICO (23/MAR/2015).- El presidente del Consejo Nacional del partido Movimiento de RegeneraciÃ³n Nacional (Morena), AndrÃ©s Manuel LÃ³pez Obrador, asegurÃ³ que la compra del voto es "pecado social".\r\n\r\nPor eso llamÃ³ a los ministros de todas las iglesias y religiones a combatirlo.\r\n\r\nEn mensajes en sus cuentas de Twitter y Facebook el ex abanderado a la presidencia pidiÃ³ la "valiosa intervenciÃ³n" de los sacerdotes, pastores y ministros de toda denominaciÃ³n para ayudar a vencer ese que considerÃ³ "pecado social".\r\n\r\n"A los ministros de todas las iglesias y religiones: ayuden a combatir el trÃ¡fico con la pobreza y la compra del voto. Es pecado social", expuso en Twitter.\r\n\r\nAmpliÃ³ su mensaje en su Facebook: "No se justifica, bajo ninguna circunstancia, el trÃ¡fico con la pobreza y con el hambre del pueblo y, como es lÃ³gico, la culpa no solo recae en quien por necesidad vende su voto, sino en el que se aprovecha de la miseria de su semejante", escribiÃ³.\r\n\r\n"A los pastores y ministros de las iglesias evangÃ©licas, a los sacerdotes y obispos de la iglesia catÃ³lica, a los maestros de otras religiones: Con todo respeto me dirijo a ustedes para exponerles un asunto de interÃ©s pÃºblico y solicitarles su valiosa intervenciÃ³n.\r\n\r\n"Es muy lamentable que en nuestro paÃ­s, un grupo de potentados, dueÃ±os de la mayorÃ­a de los partidos polÃ­ticos, se valgan de la pobreza de la gente para comprar votos y sostener de modo inmoral, su funesto poder econÃ³mico, polÃ­tico y mediÃ¡tico.\r\n\r\nEnseguida LÃ³pez Obrador refiriÃ³ las modalidades que se emplean cada elecciÃ³n para traficar con el voto: entrega de despensas, materiales de construcciÃ³n, monederos electrÃ³nicos y dinero en efectivo.\r\n\r\nNo se justifica, bajo ninguna circunstancia, el trÃ¡fico con la pobreza y con el hambre del pueblo y, como es lÃ³gico, la culpa no solo recae en quien por necesidad vende su voto, sino en el que se aprovecha de la miseria de su semejante.\r\n\r\nMencionÃ³ un pasaje bÃ­blico para explicar por quÃ© tienen tanta responsabilidad quien vende su voto, como quien lo compra.\r\n\r\n"Es como si solo se juzgara a EsaÃº por haber vendido su herencia por un plato de lentejas y no a Jacob, quien se valiÃ³ del hambre de su hermano.\r\n\r\n"En consecuencia, les pido que se oriente a sus feligreses y a todos los seres humanos para contrarrestar esta prÃ¡ctica muy cercana a lo que podrÃ­amos llamar pecado social", asegurÃ³.\r\n\r\nDijo que se en el paÃ­s "unos pocos controlan a la mayorÃ­a de los medios de informaciÃ³n para administrar la ignorancia y, al mismo tiempo, trafican con la pobreza de la gente. OjalÃ¡ y logremos que la gente vote con libertad, sin condicionamientos de ninguna Ã­ndole', '10', '2015-03-23 11:38:26'),
(3, 'PeÃ±a Nieto recuerda a Colosio a 21 aÃ±os de su muerte', 'El Mandatario asegura que Colosio es una ''inspiraciÃ³n para trabajar por un mejor MÃ©xico''', 'CIUDAD DE MÃ‰XICO (23/MAR/2015).- El Presidente Enrique PeÃ±a Nieto recordÃ³ al ex candidato del PRI, Luis Donaldo Colosio Murrieta a 21 aÃ±os de su muerte.\r\n\r\nEn su cuenta de Twitter, el Mandatario escribiÃ³:\r\n\r\n"La pasiÃ³n e ideales de un hombre como Luis Donaldo Colosio, a 21 aÃ±os de su partida, son inspiraciÃ³n para trabajar por un mejor MÃ©xico".\r\n\r\nEl ex candidato presidencial del PRI fue asesinado el 23 de marzo de 1994 luego de un mitin en la comunidad de Lomas Taurinas, Tijuana.', '10', '2015-03-23 11:40:35'),
(4, 'La CNDH se suma a voces que rechazan privatizar el agua', 'El ombudsman exige garantizar el derecho humano del acceso al vital lÃ­quido a la legislaciÃ³n que se discute.', 'CIUDAD DE MÃ‰XICO (23/MAR/2015).- La discusiÃ³n de la Ley General de Aguas en la CÃ¡mara de Diputados tendrÃ¡, ademÃ¡s de expertos en el tema, otro observador crÃ­tico: la ComisiÃ³n Nacional de los Derechos Humanos (CNDH).\r\n\r\nEl organismo que encabeza Luis RaÃºl GonzÃ¡lez PÃ©rez asegurÃ³ que estarÃ¡n pendientes del debate en la CÃ¡mara baja, para que los diputados garanticen el derecho al acceso del lÃ­quido.\r\n\r\nLa CNDH confÃ­a en que el debate del proyecto de ley sea pÃºblico, objetivo, plural, incluyente e informado, que dÃ© voz y espacio a todas las partes interesadas.\r\n\r\nEn la CÃ¡mara de Diputados se realizarÃ¡n foros donde participarÃ¡n expertos en materia de agua y enriquecer el dictamen de la Ley General de Aguas y que garantice el derecho humano de acceso a este escaso recurso.\r\n\r\nLa CNDH recordÃ³ que el acceso, disposiciÃ³n y saneamiento del agua, no sÃ³lo estÃ¡ contemplado por el ArtÃ­culo 4Âº Constitucional, sino tambiÃ©n en diversos instrumentos y documentos internacionales, como el Pacto Internacional de Derechos EconÃ³micos, Sociales y Culturales, que dan cuenta de un marco amplio de reconocimiento y protecciÃ³n convencional del mismo.\r\n\r\nAsimismo, el organismo indicÃ³ que la OrganizaciÃ³n de las Naciones Unidas (ONU) exhortan a tener como objetivo en la agenda post-2015 el asegurar el acceso al agua, el saneamiento y la higiene en un solo paso.\r\n\r\nâ€œPara que sea mÃ¡s tangible, tenemos que aspirar a una mayor tasa de progreso para los grupos desfavorecidos, de lo contrario no vamos a lograr el acceso para todos en el futuro previsibleâ€.\r\n\r\nDiversas organizaciones como el Frente AutÃ©ntico del Campo (FAC) y acadÃ©micos de la Universidad Nacional AutÃ³noma de MÃ©xico han expresado abiertamente su rechazo a la legislaciÃ³n. â€œLegaliza la contaminaciÃ³n del agua, intensifica conflictos ambientales, elimina la participaciÃ³n ciudadana y viola el derecho humano al aguaâ€.\r\n\r\nÂ¿QUÃ‰ DICE LA LEY?\r\nEl polÃ©mico artÃ­culo\r\n\r\nEl ArtÃ­culo 81 abre la participaciÃ³n a la extracciÃ³n, captaciÃ³n, conducciÃ³n, potabilizaciÃ³n, suministro, tratamiento, desalojo, mediciÃ³n, facturaciÃ³n y cobro de tarifas.\r\n\r\nLa legislaciÃ³n aprobada en comisiones de la CÃ¡mara de Diputados obliga garantizar como mÃ­nimo la dotaciÃ³n equivalente a 50 litros diarios por persona. Sin embargo, el indicador de la OrganizaciÃ³n Mundial de la Salud (OMS) es de 100.\r\n\r\nProtestas en Guadalajara\r\n\r\nDiversos organismos civiles exigen que la Ley General de Aguas sea desechada y no se apruebe, pues consideran que es una violaciÃ³n a derechos humanos como el del acceso libre al lÃ­quido.\r\n\r\nRepresentantes de estas asociaciones se reunieron ayer en la Plaza Universidad, en el Centro tapatÃ­o, para emitir una serie de consignas y realizar actividades con motivo del DÃ­a Mundial del Agua, para despuÃ©s partir en caravana rumbo a las instalaciones en Guadalajara de la ComisiÃ³n Nacional del Agua (Conagua) y realizar un festival cultural.\r\n\r\nUna de las representantes del comitÃ© Salvemos Temaca, Ema JuÃ¡rez, seÃ±alÃ³ que de ser aprobada la Ley General de Aguas, que actualmente se estudia en comisiones del Poder Legislativo federal, traerÃ¡ repercusiones graves, por lo que es necesario que se elimine.\r\n\r\nDenuncia que en 2012 se habÃ­a elaborado un documento en el tema del agua con organismos civiles y acadÃ©micos, acorde a las necesidades de la poblaciÃ³n y el cuidado del agua, pero no fue tomado en cuenta y ahora se promueve una diferente.', '10', '2015-03-23 11:42:02'),
(5, 'Si rebasan topes, no serÃ¡n registrados: INE', 'El titular del Instituto llama a los partidos a debatir sin descalificar', 'CIUDAD DE MÃ‰XICO (23/MAR/2015).- El inicio de registros de los aspirantes a las diputaciones federales incluyÃ³ un recordatorio de parte del consejero presidente del Instituto Nacional Electoral (INE), Lorenzo CÃ³rdova, quien los llamÃ³ a respetar la ley y a no gastar mÃ¡s de lo permitido.\r\n\r\nCÃ³rdova Vianello los conminÃ³ a que, una vez que obtengan el registro correspondiente, aporten su informaciÃ³n curricular al portal â€œCandidatas y candidatos: conÃ³celoâ€, en la pÃ¡gina oficial del organismo.\r\n\r\nLuego de recibir la solicitud de registro de los aspirantes del Movimiento RegeneraciÃ³n Nacional (Morena), reiterÃ³ que el INE serÃ¡ escrupuloso en el cumplimiento de las reglas y aprovechÃ³ para recordarles que el proceso en curso serÃ¡ el mÃ¡s fiscalizado y escrutado. â€œEl rebase de topes de campaÃ±a es causa de nulidad de la elecciÃ³nâ€, recordÃ³. TambiÃ©n mencionÃ³ que los precandidatos no serÃ¡n registrados si gasta mÃ¡s de los permitido.\r\n\r\nCÃ³rdova reconociÃ³ que la informaciÃ³n curricular es un acto voluntario, pero â€œen la coyuntura que atraviesa el paÃ­s contribuirÃ¡ a robustecer la confianza en los distintos candidatos y en los partidos que los postulenâ€.\r\n\r\nLas ideas deben predominar\r\n\r\nTambiÃ©n los conminÃ³ a que haya una confrontaciÃ³n de ideas y de propuestas para enfrentar los problemas del paÃ­s, â€œproblemas que, desafortunadamente, no son pocos, son muchos, son graves y son estructuralesâ€.\r\n\r\nâ€œOjalÃ¡ y Ã©sta sea una campaÃ±a ideolÃ³gicamente intensa para contribuir a la calidad del debate democrÃ¡tico y que transcurra exclusivamente por los medios y mecanismos de promociÃ³n y difusiÃ³n validados por la legislaciÃ³n para honrar las reglas del juego democrÃ¡tico que el pluralismo polÃ­tico ha consensuado en las leyes electoralesâ€.\r\n\r\nSABER MÃS\r\nâ€œMadruganâ€\r\n\r\nMorena solicitÃ³ ante el INE el registro de sus candidatos a diputados federales de mayorÃ­a relativa para la elecciÃ³n del 7 de junio.\r\n\r\nEl PRD tambiÃ©n registro a sus candidatos, de los cuales 50% es mujer.\r\n\r\nNueva Alianza y su dirigente Luis Castro tambiÃ©n acudieron al INE a formalizar el trÃ¡mite.\r\n\r\nLa Iglesia ve la â€œcaballada flacaâ€\r\n\r\nAlgunos de los candidatos que competirÃ¡n en los comicios del prÃ³ximo 7 de junio son â€œverdaderamente impresentablesâ€ debido a sus pasados controvertidos â€œy a relaciones oscuras con ambientes criminalesâ€, afirmÃ³ la ArquidiÃ³cesis de MÃ©xico.\r\n\r\nâ€œNos encontramos con verdaderas colecciones de curiosidades: los que saltan de un partido a otro por oportunismo mÃ¡s que por convicciones. Unos mÃ¡s, carentes de toda experiencia polÃ­tica, son llamados porque gozan de popularidad entre la gente por sus actividades artÃ­sticas o deportivasâ€.\r\n\r\nLas crÃ­ticas fueron vertidas en el Editorial titulado â€œFalta de seriedad polÃ­ticaâ€ del semanario Desde la Fe.\r\n\r\nPese a todo, llamaron a votar porque â€œde muy poco sirve, por no decir de nada, la apatÃ­a, el abstencionismo y los votos nulosâ€.\r\n', '10', '2015-03-23 11:44:01'),
(6, 'El PRI, con sÃ³lo 3 puntos de ventaja sobre el PAN', 'Morena, muy cerca del PRD; deja atras al partido verde por primera vez en sondeo.', 'GUADALAJARA, JALISCO (23/MAR/2015).- La tercera entrega de marzo de la serie de preferencias electorales El Financiero-ParametrÃ­a, Ã©sta de cara a la renovaciÃ³n de la CÃ¡mara de Diputados, tiene al PRI con una ventaja de apenas tres puntos, con 30 por ciento de la intenciÃ³n de voto, por 27 por ciento del PAN. El PRD conserva la tercera posiciÃ³n de la preferencia con 12 por ciento, sÃ³lo un punto por debajo de su mÃ­nimo histÃ³rico de 13 y con Morena muy cerca, a sÃ³lo un punto, con 11 por ciento. En quinto lugar estÃ¡ el Partido Verde Ecologista, con 10 por ciento.\r\n\r\nEsta entrega registra cambios que si se convierten en tendencias podrÃ­an significar un reordenamiento de posiciones en el resultado final de junio. Es pertinente advertir que se registran dentro de los mÃ¡rgenes de error de la mediciÃ³n (2.8 por ciento). Pero si se toman de manera literal, estarÃ­an implicando un cambio en el orden de las preferencias. \r\nNo es casual que el registro de nivel de conocimiento mÃ¡s alto de campaÃ±as sea de los dos partidos que han mostrado mayor crecimiento: el Verde y Morena. Hasta la entrega de febrero, la frase â€œEl Partido Verde sÃ­ cumpleâ€ era identificada por mÃ¡s de 9 de cada 10 mexicanos (92 por ciento) y la de â€œMorena es la esperanza de MÃ©xicoâ€ por mÃ¡s de 7 de cada 10 (73 por ciento). \r\n\r\nAVANCE SISTEMÃTICO\r\n\r\nMorena ha mostrado un crecimiento sistemÃ¡tico desde fines de 2014, y en alguna zonas, como la Ciudad de MÃ©xico, con preferencias de casi 20 por ciento o mÃ¡s. \r\n\r\nEn esta mediciÃ³n es notable que estÃ© por arriba del Partido Verde, la primera vez que sucede en la serie. La preferencia de Morena de 11 por ciento es la mÃ¡s alta que se ha registrado ahÃ­. El nivel de conocimiento del dÃ­a de la elecciÃ³n es un indicador de los niveles de interÃ©s de la ciudadanÃ­a. Y eventualmente se puede convertir en niveles de participaciÃ³n. \r\n\r\nLa fecha con precisiÃ³n del dÃ­a no ha cambiado en el Ãºltimo mes. El nivel de conocimiento del mes de la elecciÃ³n si. El comparativo con respecto a 2006 tal vez no es el mejor, porque compara una elecciÃ³n presidencial con una intermedia. \r\n\r\nAÃºn asÃ­, es notable la baja en el interÃ©s o en el nivel de conocimiento.', '10', '2015-03-23 11:45:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
`id` int(255) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `intro` varchar(400) COLLATE utf8_spanish2_ci NOT NULL,
  `texto` text COLLATE utf8_spanish2_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `intro`, `texto`, `tipo`, `fecha`) VALUES
(1, 'Solar Impulse 2: Volando alrededor del mundo sin usar combustible', 'El Solar Impulse 2, la segunda versiÃ³n del aviÃ³n prototipo impulsado por energÃ­a solar, completÃ³ los primeros dos trayectos', 'El proyecto que comandan los suizos Bertrand Piccard y AndrÃ© Borschberg, del cual ya hemos comentado con anterioridad en unocero, es un esfuerzo sin precedentes que intenta crear consciencia sobre el uso de tecnologÃ­a enfocada a energÃ­as renovables, lo cual seguramente, como pone en evidencia el Solar Impulse, representa el futuro de la aviaciÃ³n en tÃ©rminos de sustentabilidad.\r\n\r\nEl aviÃ³n volÃ³ exitosamente durante 13 horas, desde Abu Dhabi a OmÃ¡n, y posteriormente retomÃ³ el vuelo por espacio de 15 horas para aterrizar en la India el pasado martes 10 de marzo. Entre las paradas que realizarÃ¡ el Solar Impulse en las prÃ³ximas semanas y meses se encuentran China, Hawai, varias ciudades de Estados Unidos, Europa y Ãfrica del Norte. Los puntos mÃ¡s crÃ­ticos de la travesÃ­a serÃ¡n los cruces del OcÃ©ano AtlÃ¡ntico y PacÃ­fico. En total serÃ¡n 12 rutas esparcidas en 25 dÃ­as de vuelo, desde febrero hasta julio o agosto prÃ³ximo, cuando se espera que el aviÃ³n aterrice nuevamente en Abu Dhabi.\r\nEl hecho de que un aviÃ³n piloteado que se valga de la energÃ­a del sol para hacer un viaje tan largo, representa todo un logro tecnolÃ³gico y una ventana de oportunidades a futuro. No sÃ³lo es una medida que tendrÃ­a un impacto positivo en el medio ambiente, sino que tambiÃ©n apuntarÃ­a a vuelos mÃ¡s seguros y eventualmente menos costosos.\r\n\r\nLa tecnologÃ­a implementada se centra en las 17,000 celdas solares que se ubican a lo largo y ancho de las alas del aviÃ³n para absorber la mayor cantidad de energÃ­a solar posible. Los motores elÃ©ctricos, que impulsan el aviÃ³n a unos 45 km/hr, se alimentan de las reservas que acumulan las baterÃ­as de polÃ­mero de litio. El aviÃ³n completo no pesa mÃ¡s que un automÃ³vil y por ahora Ãºnicamente tiene capacidad para transportar al piloto en solitario.\r\n<iframe width="840" height="504" src="https://www.youtube.com/embed/yUpyuORoB8o" frameborder="0" allowfullscreen></iframe>', '1', '2015-03-17 08:59:55'),
(2, 'Â¿Enviado desde mi iPhone?', 'El mundo estÃ¡ lleno de consumidores, muchas veces por obligaciÃ³n. Por ejemplo, necesitamos adquirir alimentos y finalmente eso es parte de la cadena consumista.', 'Las sociedades modernas imponen modas muchas veces a travÃ©s del mecanismo de la publicidad, la cual para incidir tiene que hacerse contÃ­nuamente y por aÃ±os. Por ejemplo, es importante para las empresas que sean reconocidas y por ejemplo, si hablamos de computadoras y le preguntamos quÃ© se le viene a la cabeza a nuestros interlocutores, que indiquen â€œIBMâ€, por ejemplo, muestra que la publicidad sobre lo que es esta empresa ya ha permeado en las cabezas de muchos. Igualmente pasa con otros productos, por ejemplo, si pensamos en paÃ±uelos desechables, mucha gente pensarÃ¡ en â€œkleenexâ€, cuando esto es simplemente una marca de este producto. Y podrÃ­a dar mÃ¡s ejemplos: si pensamos en relojes finos y costosos, probablemente la primera palabra que se nos venga a la mente es â€œRolexâ€.\r\n\r\nY si hablo de esto es porque en la tecnologÃ­a de cÃ³mputo muchos productos no se adquieren no por ser mejores a otros de la competencia, sino por la propaganda y percepciÃ³n que Ã©sta deja en los consumidores. Y esto ocurre con Apple, por ejemplo,  que se ha hecho de un buen nombre entre los que compran sus productos porque para muchos son lo mejor que se produce en la tecnologÃ­a de cÃ³mputo hoy en dÃ­a. No les importa pagar un sobreprecio por ellos y desde luego, que cada quien haga lo que quiera con su dinero.\r\n\r\nPero Apple sin duda ha buscado situarse en la percepciÃ³n de los consumidores como la empresa que es para unos pocos, para los elegidos, para los que â€œpiensan diferenteâ€ y aunque muchos digan que exagero, es evidente que este tipo de publicidad permea. Recordemos por ejemplo los clÃ¡sicos anuncios de PC vs Mac, en donde a la PC la representaba un gordito con traje. La Mac en cambio la representaba un chavo â€œcoolâ€, de jeans y camiseta. Suena como un anuncio mÃ¡s, pero la imagen del producto que Apple quiere dar empieza a permear en cÃ³mo pensamos sobre los productos que compramos. Y no se me malinterprete: Apple hace muy buenos productos aunque siempre he pensado que estÃ¡n sobrevaluados.\r\n\r\nSin ir mÃ¡s lejos, hablemos de esa frase de â€œenviado desde mi iPhoneâ€, cuando alguien usa esta marca de telÃ©fonos para mandar un mensaje. Evidentemente esta firma o rÃºbrica no la puso el consumidor, el dueÃ±o del telÃ©fono, sino Apple, la cual se inserta a cada mensaje que se manda. Y el mensaje se puede cambiar, pero Â¿alguien lo cambia? Si se le pregunta a quienes tienen un iPhone, podremos leer toda clase de argumentos al respecto en donde afirman, por ejemplo, â€œme importa un rÃ¡bano ese mensaje. No tiene nada que ver con mi autoestimaâ€, aunque en realidad sÃ­ les importa y por eso no lo quitan. Como la marca los hace creer que son diferentes, entonces hay que pregonarlo por donde se pueda.\r\n\r\nEl mensaje de la firma del telÃ©fono se puede quitar fÃ¡cilmente siguiendo los siguientes pasos: ConfiguraciÃ³n, correo contactos calendario, firmaâ€, y escribes la firma que quieras que aparezca en vez del egÃ³latra â€œenviado desde mi iPhoneâ€. Si esto no funciona, puedes ver el siguiente video que explica cÃ³mo hacer esto:\r\n<iframe width="840" height="504" src="https://www.youtube.com/embed/U98ZcmCrBHk" frameborder="0" allowfullscreen></iframe>', '1', '2015-03-17 09:05:32'),
(3, '11 reglas para â€˜portarse bienâ€™ en Facebook', 'QuÃ© hicieron cuando salieron videos del grupo terrorista ISIS degollando a periodistas Â¿Lo vieron? Â¿Lo difundieron? o prefirieron â€œdejarla ahÃ­â€, Â¿se debe o no difundir este contenido? Â¿Es informaciÃ³n que el mundo debe conocer o contenido violento que no deberÃ­a promoverse? Estas respuestas se encuentran en las â€œnormas comunitariasâ€ de Facebook que fueron actualizadas el dÃ­a de hoy', 'Las â€œNormas comunitariasâ€ son un reglamento sobre lo que sÃ­ puedes y no publicar en esta red social. Esto no es nada nuevo ni tampoco se trata de censurar los contenidos, simplemente quieren aclararle a los usuarios de una forma mÃ¡s detallada por quÃ© podrÃ­an remover contenido de su perfil y quÃ© pueden hacer en caso de que este sea nocivo para sÃ­ mismos o terceros. Esta nota muestra un breve resumen de las normas que sugerimos sean leÃ­das con mÃ¡s detalle aquÃ­\r\n\r\nSÃ SE PUEDE\r\n\r\nEn resumen, los temas que se enlistan aquÃ­ pueden ser discutidos abiertamente, de manera crÃ­tica, con sensibilidad y tolerancia, mÃ¡s no promoverlos intencionalmente.\r\n\r\nNO SE PUEDE\r\n\r\n1.     Amenazas directas\r\n\r\n2.     Promover la automutilaciÃ³n, desordenes alimenticios y suicidios\r\n\r\n3.     [Contenido de] Organizaciones peligrosas,  actividades terroristas  y criminales  (tambiÃ©n se removerÃ¡ contenido de usuarios que apoyen estos grupos y de comportamiento violento, criminal y de odio).\r\n\r\n4.     Acoso ni bullying\r\n\r\n5.     Ataques a figuras pÃºblicas (amenazas y discurso de odio)\r\n\r\n6.     Actividad criminal (que cause daÃ±o fÃ­sico a gente, negocios y animales o financiero a gente y negocios).\r\n\r\n7.     Violencia y explotaciÃ³n sexual (se eliminan videos y fotografÃ­as, imÃ¡genes de desnudos compartidas por venganza y sin autorizaciÃ³n del afectado).\r\n\r\n8.     Comprar, vender o intercambiar drogas legalizadas (recetas mÃ©dicas y mariguana)\r\n\r\n9.     Desnudos â€“ Se restringe porque en algunas audiencias (hablamos de todo el mundo) este tipo de contenido es sensible por la edad o cultura.\r\n\r\nNo se pueden publicar fotos o imÃ¡genes que:\r\na)    muestren genitales o que expongan totalmente las nalgas\r\nb)   muestren senos enseÃ±ando el pezÃ³n\r\nc)    contenido digital editado (a menos que sea con fines de humor, educativos y satÃ­ricos)\r\nd)   imÃ¡genes de sexo explÃ­cito y descripciones vÃ­vidas de actos sexuales.\r\n*estÃ¡n permitidas las de mujeres amamantando e imÃ¡genes de mastectomÃ­a, fotografÃ­as, pinturas y esculturas [desnudos artÃ­sticos]\r\n\r\n10. Discurso de odio\r\nAtaques por: Raza, origen Ã©tnico, nacionalidad, religiÃ³n, orientaciÃ³n sexual, sexo, gÃ©nero, identidad de gÃ©nero, discapacidades o enfermedades graves.\r\n\r\n11. Violencia y contenido grÃ¡fico\r\nSe remueven imÃ¡genes de actos terroristas o que violen los derechos humanos cuando se comparten por placer sÃ¡dico o para celebrar o glorificar la violencia.\r\nSi alguien te molesta en Facebook puedes denunciarlo aquÃ­ o si estÃ¡s harto de ver sus contenidos (que no son graves) aquÃ­ puedes conocer mÃ¡s para dejar de verlos.', '1', '2015-03-17 09:39:36'),
(4, 'Blackberry lanza una tableta basada principalmente en la seguridad', 'Hay empresas que se niegan a morir y parece que Blackberry es una de ellas. A pesar de que, por ejemplo, la empresa no tiene exactamente una gran historia de Ã©xito en el mercado de las tabletas, en donde por ejemplo, su primer modelo, la PlayBook, no funcionÃ³, ha decidido regresar a este mercado. ', 'Tal vez Blackberry piensa que puede tener Ã©xito en los mundos empresariales y de negocios. Por ello, ahora vienen con un nuevo producto, la SecuTablet, la cual es una tableta que pone mucho Ã©nfasis en la seguridad.\r\n\r\nSi se analiza la SecuTablet de Blackberry, nos daremos cuenta que su hardware es una tableta Samsung Galaxy Tab S 10.5 modificada, incorporando tecnologÃ­a de seguridad como Secusmart, empresa que adquiriÃ³ el aÃ±o pasado la propia Blackberry, de manera que codifica comunicaciones de voz y datos. En un mundo empresarial o de negocios la privacidad de la informaciÃ³n es muy importante y es tal vez el gancho que busca Blackberry para incorporarse a este competido mercado de las tabletas.\r\n\r\nPara la parte de software, Blackberry se ha asociado a IBM, empresa que tiene una vasta experiencia en el nicho empresarial y que ha trabajado duramente para crear software mÃ³vil para este sector. Blackberry ha colaborado con IBM para asegurarse que su nueva tableta sea lo suficientemente segura para el trabajo gubernamental, pero que de todas maneras pueda correr apps como Facebook y Twitter e incluso YouTube. De esta manera, los usuarios no requerirÃ­an de una segunda tableta para estas apps.\r\n\r\nLa seguridad es importante pero desde luego, esto tiene un costo. la SecuTable cuesta unos 2360 dÃ³lares, un precio que ciertamente pone al dispositivo en su propia liga. Sin embargo, los estudios de mercado de Blackberry habrÃ¡n analizado el nicho que quieren atacar y debido al tipo de informaciÃ³n que manejan en este tipo de mercados, podrÃ­a pensarse que es un dinero bien gastado.\r\n\r\nHabrÃ¡ que ver si esta estrategia les funciona. Blackberry fue en algÃºn momento un fuerte jugador en el mercado de la telefonÃ­a celular, pero no pudo mantener el paso y cayÃ³ en un sinfÃ­n de problemas. Tal vez con esta idea empiecen a retomar el rumbo. HabrÃ¡ pues que ver cÃ³mo se comportan los nichos para los cuales la SecuTable fue creada.', '1', '2015-03-17 11:38:19'),
(5, 'Â¿CÃ³mo reaccionan los expertos en Photoshop ante la versiÃ³n 1.0 del programa?', 'Estamos en el 2015, ya tenemos programas bastante complejos que uno nunca sabe a quÃ© hora inventaron algo tan elaborado para hacerlo en un programa que ahora nosotros lo vemos como algo muy simple.', 'Utilizamos en nuestro dÃ­a a dÃ­a un montÃ³n de programas que simplemente utilizamos naturalmente sin pensarlo.\r\n\r\nAhora, imaginen que por alguna razÃ³n su computadora se descompone, al igual que tu celular, tu tableta, etc. etc. y tu Ãºnica opciÃ³n para seguir trabajando es una computadora de hace 25 aÃ±os.\r\n\r\nÂ¿PodrÃ­an utilizar una computadora de hace 25 aÃ±os? Esto fue lo que hizo CreativeLive, poniendo a varios expertos de Photoshop a utilizar nada mÃ¡s y nada menos que Photoshop 1.0, un programa que saliÃ³ a la luz en Febrero de 1990.\r\n\r\nAsÃ­ es, este experimento fue hecho para festejar los 25 aÃ±os del Photoshop de Adobe. 25 aÃ±os de retocar imÃ¡genes y de crear cosas imposibles en una pintura digital.', '1', '2015-03-17 11:45:45'),
(6, 'Juega, diviÃ©rtete y ayuda a la Cruz Roja con videojuegos', 'Convencer a las personas de que donen, sin importar si es dinero, juguetes, tiempo o cualquier otra cosa, siempre ha resultado complicado por distintos factores, es por eso que en los aeropuertos de Estocolmo y Gotenburgo, en Suecia, han decidido optar por los videojuegos como un impulso para que la gente donde dinero para la Cruz Roja.', 'En estos aeropuertos se han colocado maquinitas con tÃ­tulo tradicionales, como MS Pac-Man, Space Invaders o Galaga, para que los viajeros puedan llegar, jugar y distraerse por unos momentos y, de paso, donar dinero a la Cruz Roja, ya que las monedas que se recauden van a parar directamente a la organizaciÃ³n de salud.\r\n\r\nAl estar ubicadas en aeropuertos, las mÃ¡quinas reciben cualquier tipo de monedas, sin importar el paÃ­s del que sean. SÃ³lo es necesaria una moneda para obtener â€œuna vidaâ€ en los juegos.\r\n\r\nEsta curiosa estrategia forma parte del programa Charity Arcade que, de momento, ya le estÃ¡ dando la vuelta al mundo por su novedosa manera de conseguir fondos, y de paso, entretener a los viajeros que pasan por dichos aeropuertos.', '1', '2015-03-17 11:47:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opinion`
--

CREATE TABLE IF NOT EXISTS `opinion` (
`id` int(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `intro` varchar(400) NOT NULL,
  `texto` text NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `random`
--

CREATE TABLE IF NOT EXISTS `random` (
`id` int(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `intro` varchar(400) NOT NULL,
  `texto` text NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `random`
--

INSERT INTO `random` (`id`, `titulo`, `intro`, `texto`, `tipo`, `fecha`) VALUES
(1, 'Trailer Shingeki No kyojin - Live Action', ' Shingeki No kyojin - Live Action', '<br />\r\nLa historia nos traslada a un mundo en el que la humanidad estuvo a punto de ser exterminada cientos de aÃ±os atrÃ¡s por los gigantes. Los gigantes son enormes, parecen no ser inteligentes y devoran seres humanos. Lo peor es que parece que lo hacen por placer y no por alimentarse. Una pequeÃ±a parte de la humanidad ha conseguido sobrevivir protegiÃ©ndose en una ciudad con unos altÃ­simos muros, mÃ¡s altos que el mayor de los gigantes. La ciudad vive su vida tranquila, y hace mÃ¡s de 100 aÃ±os que ningÃºn gigante aparece por allÃ­. Eren y su hermana adoptiva Mikasa son todavÃ­a unos adolescentes cuando ven algo horroroso: un gigante mucho mayor que todos los que la humanidad habÃ­a conocido hasta el momento estÃ¡ destruyendo los muros de la ciudad. No pasa mucho tiempo hasta que los gigantes entran por el hueco abierto en el muro y comienzan a devorar a la gente.\r\n\r\n<iframe width="640" height="360" src="https://www.youtube.com/embed/fJwS0TQv7do?feature=player_embedded" frameborder="0" allowfullscreen></iframe>', '14', '2015-03-23 12:22:53'),
(2, 'El gran libro de HTML5, CSS3 y JavaScript', 'DescripciÃ³n\r\nHTML5 no es una nueva versiÃ³n del antiguo lenguaje de etiquetas, ni siquiera una mejora de esta ya antigua tecnologÃ­a, sino un nuevo concepto para la construcciÃ³n de sitios web y aplicaciones en una era que combina dispositivos mÃ³viles, computaciÃ³n en la nube y trabajos en red. ', 'Todo comenzÃ³ mucho tiempo atrÃ¡s con una simple versiÃ³n de HTML propuesta para crear la estructura bÃ¡sica de pÃ¡ginas web, organizar su contenido y compartir informaciÃ³n. El lenguaje y la web misma nacieron principalmente con la intenciÃ³n de comunicar informaciÃ³n por medio de texto.\r\n\r\nEl limitado objetivo de HTML motivÃ³ a varias compaÃ±Ã­as a desarrollar nuevos lenguajes y programas para agregar caracterÃ­sticas a la web nunca antes implementadas. Estos desarrollos iniciales crecieron hasta convertirse en populares y poderosos accesorios. Simples juegos y bromas animadas pronto se transformaron en sofisticadas aplicaciones, ofreciendo nuevas experiencias que cambiaron el concepto de la web para siempre.\r\n\r\nDe las opciones propuestas, Java y Flash fueron las mÃ¡s exitosas; ambas fueron masivamente adoptadas y ampliamente consideradas como el futuro de Internet. Sin embargo, tan pronto como el nÃºmero de usuarios se incrementÃ³ e Internet pasÃ³ de ser una forma de conectar amantes de los ordenadores a un campo estratÃ©gico para los negocios y la interacciÃ³n social, limitaciones presentes en estas dos tecnologÃ­as probaron ser una sentencia de muerte.\r\n\r\nEl mayor inconveniente de Java y Flash puede describirse como una falta de integraciÃ³n. Ambos fueron concebidos desde el principio como complementos (plug-ins), algo que se inserta dentro de una estructura pero que comparte con la misma solo espacio en la pantalla. No existÃ­a comunicaciÃ³n e integraciÃ³n alguna entre aplicaciones y documentos.\r\n\r\nLa falta de integraciÃ³n resultÃ³ ser crÃ­tica y preparÃ³ el camino para la evoluciÃ³n de un lenguaje que comparte espacio en el documento con HTML y no estÃ¡ afectado por las limitaciones de los plug-ins. Javascript, un lenguaje interpretado incluido en navegadores, claramente era la manera de mejorar la experiencia de los usuarios y proveer funcionalidad para la web. Sin embargo, despuÃ©s de algunos aÃ±os de intentos fallidos para promoverlo y algunos malos usos, el mercado nunca lo adoptÃ³ plenamente y pronto su popularidad declinÃ³. Los detractores tenÃ­an buenas razones para oponerse a su adopciÃ³n. En ese momento, Javascript no era capaz de reemplazar la funcionalidad de Flash o Java. A pesar de ser evidente que ambos limitaban el alcance de las aplicaciones y aislaban el contenido web, populares funciones como la reproducciÃ³n de video se estaban convirtiendo en una parte esencial de la web y solo eran efectivamente ofrecidas a travÃ©s de estas tecnologÃ­as.\r\n\r\nContenido:\r\n\r\nCapÃ­tulo 1. Documentos HTML5\r\n1.1 Componentes bÃ¡sicos\r\n1.2 Estructura global\r\n1.3 Estructura del cuerpo\r\n1.5 Nuevos y viejos elementos\r\n1.6 Referencia rÃ¡pida\r\n\r\nCapÃ­tulo 2. Estilos CSS y modelos de caja\r\n2.1 CSS y HTML\r\n2.2 Estilos y estructura\r\n2.3 Conceptos bÃ¡sicos sobre estilos\r\n2.4 Aplicando CSS a nuestra plantilla\r\n2.5 Modelo de caja tradicional\r\n2.6 Referencia rÃ¡pida\r\n\r\nCapÃ­tulo 3. Propiedades CSS3\r\n3.1 Las nuevas reglas\r\n3.2 Referencia rÃ¡pida\r\n\r\nCapÃ­tulo 4. Javascript\r\n4.1 La relevancia de Javascript\r\n4.2 Incorporando Javascript\r\n4.3 Nuevos selectores\r\n4.4 Manejadores de eventos\r\n4.5 APIs\r\n4.6 LibrerÃ­as externas\r\n4.7 Referencia rÃ¡pida\r\n\r\nCapÃ­tulo 5. Video y audio\r\n5.1 Reproduciendo video con HTML5\r\n5.2 Programando un reproductor de video\r\n5.3 Formatos de video\r\n5.4 Reproduciendo audio con HTML5\r\n5.5 Programando un reproductor de audio\r\n5.6 Referencia rÃ¡pida\r\n\r\nCapÃ­tulo 6. Formularios y API Forms\r\n6.1 Formularios Web\r\n6.2 Nuevos atributos\r\n6.3 Nuevos elementos para formularios\r\n6.4 API Forms\r\n6.5 Referencia rÃ¡pida\r\n\r\nCapÃ­tulo 7. API Canvas\r\n7.1 Preparando el lienzo\r\n7.2 Dibujando en el lienzo\r\n7.3 Procesando imÃ¡genes\r\n7.4 Animaciones en el lienzo\r\n7.5 Procesando video en el lienzo\r\n7.6 Referencia rÃ¡pida\r\n\r\nCapÃ­tulo 8. API Drag and Drop\r\n8.1 Arrastrar y soltar en la web\r\n8.2 Referencia rÃ¡pida\r\n\r\nCapÃ­tulo 9. API Geolocation\r\n9.1 Encontrando su lugar\r\n9.2 Referencia rÃ¡pida\r\n\r\nCapÃ­tulo 10. API Web Storage\r\n10.1 Dos sistemas de almacenamiento\r\n10.2 La sessionStorage\r\n10.3 La localStorage\r\n10.4 Referencia rÃ¡pida\r\n\r\nCapÃ­tulo 11. API IndexedDB\r\n11.1 Una API de bajo nivel\r\n11.2 Implementando IndexedDB\r\n11.3 Listando datos\r\n11.4 Eliminando datos\r\n11.5 Buscando datos\r\n11.6 Referencia rÃ¡pida\r\n\r\nCapÃ­tulo 12. API File\r\n12.1 Almacenamiento de archivos\r\n12.2 Procesando archivos de usuario\r\n12.3 Creando archivos\r\n12.4 Contenido de archivos\r\n12.5 Sistema de archivos de la vida real\r\n12.6 Referencia rÃ¡pida\r\n\r\nCapÃ­tulo 13.API Communication\r\n13.1 Ajax nivel 2\r\n13.2 Cross Document Messaging\r\n13.3 Web Sockets\r\n13.4 Referencia rÃ¡pida\r\n\r\nCapÃ­tulo 14. API Web Workers\r\n14.1 Haciendo el trabajo duro\r\n14.2 Referencia rÃ¡pida\r\n\r\nCapÃ­tulo 15. API History\r\n15.1 Interface History\r\n15.2 Referencia rÃ¡pida\r\n\r\nCapÃ­tulo 16. API Offline\r\n16.1 CachÃ©\r\n16.2 API Offline\r\n16.3 Referencia rÃ¡pida\r\n\r\nInformaciÃ³n TÃ©cnica\r\nComprimido: Rar \r\nFormato: PDF\r\nPeso : 8.51 Mb\r\nIdioma: EspaÃ±ol \r\nAutor (s): Juan Diego Gauchat. \r\n\r\n\r\nlink: https://mega.co.nz/#!moRyXSwD!AP-XlQCcCcD7GwBCVp_QSAChAsoAyI7x-yLgOlbmQKY', '14', '2015-03-23 13:39:49'),
(3, 'ColecciÃ³n de 11000 libros (Mega)', 'ColecciÃ³n de 11000 libros', 'Coleccion de alrededor de 11000 libros de varios autores entre los que se encuentra George R.R. Martin, J.R.R. Tolkien, Isaac Asimov, Gabriel Gacia Marquez, Paulo Coelho, Arthur Conan Doyle, William Shakespeare, entre otro 3500 mas.', '14', '2015-03-23 13:44:38'),
(4, 'Adblock Plus | Todos los navegadores', 'Â¿QuÃ© es Adblock Plus?\r\n\r\nAdblock Plus bloquea anuncios molestos en la web. TambiÃ©n bloquea otros elementos como el seguimiento en web. Con mÃ¡s de 50 millones de usuarios, es la extensiÃ³n para navegadores mÃ¡s popular del mundo. Adblock Plus es un proyecto de cÃ³digo abierto creado en 2006 por Wladimir Palant. Eyeo fue fundada en 2011 por el propio Wladimir Palant y Till Faida, para mantener s', 'Â¿CÃ³mo funciona Adblock Plus?\r\nAdblock Plus no tiene funcionalidad en sÃ­, en el sentido que no bloquea nada hasta que alguna de las listas de filtros disponibles se lo pide. Estas listas de filtros son bÃ¡sicamente un conjunto de reglas que le dicen a AdblockPlus quÃ© elementos de las webs tiene que bloquear. Al margen de usarse para bloquear anuncios, las listas de filtros tambiÃ©n pueden usarse para desactivar el seguimiento en web y los dominios malware.  \r\n\r\nDos listas de filtros vienen activadas por defecto: \r\n\r\nUna lista de bloqueo de anuncios basada en su idioma. \r\nLa lista de excepciones de Anuncios Aceptables. \r\nUsted es libre de desactivar estas listas, aÃ±adir otras o crearlas por sÃ­ mismo. \r\n\r\n<iframe width="640" height="360" src="https://www.youtube.com/embed/ZpXBXwg1kXE?feature=player_embedded" frameborder="0" allowfullscreen></iframe>', '14', '2015-03-23 13:48:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recomendacionesm`
--

CREATE TABLE IF NOT EXISTS `recomendacionesm` (
`id` int(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `intro` varchar(400) NOT NULL,
  `texto` text NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `recomendacionesm`
--

INSERT INTO `recomendacionesm` (`id`, `titulo`, `intro`, `texto`, `tipo`, `fecha`) VALUES
(1, 'Lana del rey', 'Elizabeth Woolridge Grant, mÃ¡s conocida por su nombre artÃ­stico Lana Del Rey', 'es una cantante, actriz y compositora estadounidense. ComenzÃ³ a actuar en clubes de Nueva York a los dieciocho aÃ±os y firmÃ³ su primer contrato discogrÃ¡fico cuando tenÃ­a veinte con 5 Points Records.', '5', '2015-04-20 10:51:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE IF NOT EXISTS `region` (
`id` int(255) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=560 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`id`, `nombre`) VALUES
(3, 'Africa/Abidjan'),
(4, 'Africa/Accra'),
(5, 'Africa/Addis_Ababa'),
(6, 'Africa/Algiers'),
(7, 'Africa/Asmara'),
(8, 'Africa/Asmera'),
(9, 'Africa/Bamako'),
(10, 'Africa/Bangui'),
(11, 'Africa/Banjul'),
(12, 'Africa/Bissau'),
(13, 'Africa/Blantyre'),
(14, 'Africa/Brazzaville'),
(15, 'Africa/Bujumbura'),
(16, 'Africa/Cairo'),
(17, 'Africa/Casablanca'),
(18, 'Africa/Ceuta'),
(19, 'Africa/Conakry'),
(20, 'Africa/Dakar'),
(21, 'Africa/Dar_es_Salaam'),
(22, 'Africa/Djibouti'),
(23, 'Africa/Douala'),
(24, 'Africa/El_Aaiun'),
(25, 'Africa/Freetown'),
(26, 'Africa/Gaborone'),
(27, 'Africa/Harare'),
(28, 'Africa/Johannesburg'),
(29, 'Africa/Kampala'),
(30, 'Africa/Khartoum'),
(31, 'Africa/Kigali'),
(32, 'Africa/Kinshasa'),
(33, 'Africa/Lagos'),
(34, 'Africa/Libreville'),
(35, 'Africa/Lome'),
(36, 'Africa/Luanda'),
(37, 'Africa/Lubumbashi'),
(38, 'Africa/Lusaka'),
(39, 'Africa/Malabo'),
(40, 'Africa/Maputo'),
(41, 'Africa/Maseru'),
(42, 'Africa/Mbabane'),
(43, 'Africa/Mogadishu'),
(44, 'Africa/Monrovia'),
(45, 'Africa/Nairobi'),
(46, 'Africa/Ndjamena'),
(47, 'Africa/Niamey'),
(48, 'Africa/Nouakchott'),
(49, 'Africa/Ouagadougou'),
(50, 'Africa/Porto-Novo'),
(51, 'Africa/Sao_Tome'),
(52, 'Africa/Timbuktu'),
(53, 'Africa/Tripoli'),
(54, 'Africa/Tunis'),
(55, 'Africa/Windhoek'),
(56, 'America/Adak'),
(57, 'America/Anchorage'),
(58, 'America/Anguilla'),
(59, 'America/Antigua'),
(60, 'America/Araguaina'),
(61, 'America/Argentina/Buenos_Aires'),
(62, 'America/Argentina/Catamarca'),
(63, 'America/Argentina/ComodRivadavia'),
(64, 'America/Argentina/Cordoba'),
(65, 'America/Argentina/Jujuy'),
(66, 'America/Argentina/La_Rioja'),
(67, 'America/Argentina/Mendoza'),
(68, 'America/Argentina/Rio_Gallegos'),
(69, 'America/Argentina/San_Juan'),
(70, 'America/Argentina/Tucuman'),
(71, 'America/Argentina/Ushuaia'),
(72, 'America/Aruba'),
(73, 'America/Asuncion'),
(74, 'America/Atikokan'),
(75, 'America/Atka'),
(76, 'America/Bahia'),
(77, 'America/Barbados'),
(78, 'America/Belem'),
(79, 'America/Belize'),
(80, 'America/Blanc-Sablon'),
(81, 'America/Boa_Vista'),
(82, 'America/Bogota'),
(83, 'America/Boise'),
(84, 'America/Buenos_Aires'),
(85, 'America/Cambridge_Bay'),
(86, 'America/Campo_Grande'),
(87, 'America/Cancun'),
(88, 'America/Caracas'),
(89, 'America/Catamarca'),
(90, 'America/Cayenne'),
(91, 'America/Cayman'),
(92, 'America/Chicago'),
(93, 'America/Chihuahua'),
(94, 'America/Coral_Harbour'),
(95, 'America/Cordoba'),
(96, 'America/Costa_Rica'),
(97, 'America/Cuiaba'),
(98, 'America/Curacao'),
(99, 'America/Danmarkshavn'),
(100, 'America/Dawson'),
(101, 'America/Dawson_Creek'),
(102, 'America/Denver'),
(103, 'America/Detroit'),
(104, 'America/Dominica'),
(105, 'America/Edmonton'),
(106, 'America/Eirunepe'),
(107, 'America/El_Salvador'),
(108, 'America/Ensenada'),
(109, 'America/Fort_Wayne'),
(110, 'America/Fortaleza'),
(111, 'America/Glace_Bay'),
(112, 'America/Godthab'),
(113, 'America/Goose_Bay'),
(114, 'America/Grand_Turk'),
(115, 'America/Grenada'),
(116, 'America/Guadeloupe'),
(117, 'America/Guatemala'),
(118, 'America/Guayaquil'),
(119, 'America/Guyana'),
(120, 'America/Halifax'),
(121, 'America/Havana'),
(122, 'America/Hermosillo'),
(123, 'America/Indiana/Indianapolis'),
(124, 'America/Indiana/Knox'),
(125, 'America/Indiana/Marengo'),
(126, 'America/Indiana/Petersburg'),
(127, 'America/Indiana/Vevay'),
(128, 'America/Indiana/Vincennes'),
(129, 'America/Indiana/Winamac'),
(130, 'America/Indianapolis'),
(131, 'America/Inuvik'),
(132, 'America/Iqaluit'),
(133, 'America/Jamaica'),
(134, 'America/Jujuy'),
(135, 'America/Juneau'),
(136, 'America/Kentucky/Louisville'),
(137, 'America/Kentucky/Monticello'),
(138, 'America/Knox_IN'),
(139, 'America/La_Paz'),
(140, 'America/Lima'),
(141, 'America/Los_Angeles'),
(142, 'America/Louisville'),
(143, 'America/Maceio'),
(144, 'America/Managua'),
(145, 'America/Manaus'),
(146, 'America/Martinique'),
(147, 'America/Mazatlan'),
(148, 'America/Mendoza'),
(149, 'America/Menominee'),
(150, 'America/Merida'),
(151, 'America/Mexico_City'),
(152, 'America/Miquelon'),
(153, 'America/Moncton'),
(154, 'America/Monterrey'),
(155, 'America/Montevideo'),
(156, 'America/Montreal'),
(157, 'America/Montserrat'),
(158, 'America/Nassau'),
(159, 'America/New_York'),
(160, 'America/Nipigon'),
(161, 'America/Nome'),
(162, 'America/Noronha'),
(163, 'America/North_Dakota/Center'),
(164, 'America/North_Dakota/New_Salem'),
(165, 'America/Panama'),
(166, 'America/Pangnirtung'),
(167, 'America/Paramaribo'),
(168, 'America/Phoenix'),
(169, 'America/Port-au-Prince'),
(170, 'America/Port_of_Spain'),
(171, 'America/Porto_Acre'),
(172, 'America/Porto_Velho'),
(173, 'America/Puerto_Rico'),
(174, 'America/Rainy_River'),
(175, 'America/Rankin_Inlet'),
(176, 'America/Recife'),
(177, 'America/Regina'),
(178, 'America/Resolute'),
(179, 'America/Rio_Branco'),
(180, 'America/Rosario'),
(181, 'America/Santiago'),
(182, 'America/Santo_Domingo'),
(183, 'America/Sao_Paulo'),
(184, 'America/Scoresbysund'),
(185, 'America/Shiprock'),
(186, 'America/St_Johns'),
(187, 'America/St_Kitts'),
(188, 'America/St_Lucia'),
(189, 'America/St_Thomas'),
(190, 'America/St_Vincent'),
(191, 'America/Swift_Current'),
(192, 'America/Tegucigalpa'),
(193, 'America/Thule'),
(194, 'America/Thunder_Bay'),
(195, 'America/Tijuana'),
(196, 'America/Toronto'),
(197, 'America/Tortola'),
(198, 'America/Vancouver'),
(199, 'America/Virgin'),
(200, 'America/Whitehorse'),
(201, 'America/Winnipeg'),
(202, 'America/Yakutat'),
(203, 'America/Yellowknife'),
(204, 'Antarctica/Casey'),
(205, 'Antarctica/Davis'),
(206, 'Antarctica/DumontDUrville'),
(207, 'Antarctica/Mawson'),
(208, 'Antarctica/McMurdo'),
(209, 'Antarctica/Palmer'),
(210, 'Antarctica/Rothera'),
(211, 'Antarctica/South_Pole'),
(212, 'Antarctica/Syowa'),
(213, 'Antarctica/Vostok'),
(214, 'Arctic/Longyearbyen'),
(215, 'Asia/Aden'),
(216, 'Asia/Almaty'),
(217, 'Asia/Amman'),
(218, 'Asia/Anadyr'),
(219, 'Asia/Aqtau'),
(220, 'Asia/Aqtobe'),
(221, 'Asia/Ashgabat'),
(222, 'Asia/Ashkhabad'),
(223, 'Asia/Baghdad'),
(224, 'Asia/Bahrain'),
(225, 'Asia/Baku'),
(226, 'Asia/Bangkok'),
(227, 'Asia/Beirut'),
(228, 'Asia/Bishkek'),
(229, 'Asia/Brunei'),
(230, 'Asia/Calcutta'),
(231, 'Asia/Choibalsan'),
(232, 'Asia/Chongqing'),
(233, 'Asia/Chungking'),
(234, 'Asia/Colombo'),
(235, 'Asia/Dacca'),
(236, 'Asia/Damascus'),
(237, 'Asia/Dhaka'),
(238, 'Asia/Dili'),
(239, 'Asia/Dubai'),
(240, 'Asia/Dushanbe'),
(241, 'Asia/Gaza'),
(242, 'Asia/Harbin'),
(243, 'Asia/Hong_Kong'),
(244, 'Asia/Hovd'),
(245, 'Asia/Irkutsk'),
(246, 'Asia/Istanbul'),
(247, 'Asia/Jakarta'),
(248, 'Asia/Jayapura'),
(249, 'Asia/Jerusalem'),
(250, 'Asia/Kabul'),
(251, 'Asia/Kamchatka'),
(252, 'Asia/Karachi'),
(253, 'Asia/Kashgar'),
(254, 'Asia/Katmandu'),
(255, 'Asia/Krasnoyarsk'),
(256, 'Asia/Kuala_Lumpur'),
(257, 'Asia/Kuching'),
(258, 'Asia/Kuwait'),
(259, 'Asia/Macao'),
(260, 'Asia/Macau'),
(261, 'Asia/Magadan'),
(262, 'Asia/Makassar'),
(263, 'Asia/Manila'),
(264, 'Asia/Muscat'),
(265, 'Asia/Nicosia'),
(266, 'Asia/Novosibirsk'),
(267, 'Asia/Omsk'),
(268, 'Asia/Oral'),
(269, 'Asia/Phnom_Penh'),
(270, 'Asia/Pontianak'),
(271, 'Asia/Pyongyang'),
(272, 'Asia/Qatar'),
(273, 'Asia/Qyzylorda'),
(274, 'Asia/Rangoon'),
(275, 'Asia/Riyadh'),
(276, 'Asia/Riyadh87'),
(277, 'Asia/Riyadh88'),
(278, 'Asia/Riyadh89'),
(279, 'Asia/Saigon'),
(280, 'Asia/Sakhalin'),
(281, 'Asia/Samarkand'),
(282, 'Asia/Seoul'),
(283, 'Asia/Shanghai'),
(284, 'Asia/Singapore'),
(285, 'Asia/Taipei'),
(286, 'Asia/Tashkent'),
(287, 'Asia/Tbilisi'),
(288, 'Asia/Tehran'),
(289, 'Asia/Tel_Aviv'),
(290, 'Asia/Thimbu'),
(291, 'Asia/Thimphu'),
(292, 'Asia/Tokyo'),
(293, 'Asia/Ujung_Pandang'),
(294, 'Asia/Ulaanbaatar'),
(295, 'Asia/Ulan_Bator'),
(296, 'Asia/Urumqi'),
(297, 'Asia/Vientiane'),
(298, 'Asia/Vladivostok'),
(299, 'Asia/Yakutsk'),
(300, 'Asia/Yekaterinburg'),
(301, 'Asia/Yerevan'),
(302, 'Atlantic/Azores'),
(303, 'Atlantic/Bermuda'),
(304, 'Atlantic/Canary'),
(305, 'Atlantic/Cape_Verde'),
(306, 'Atlantic/Faeroe'),
(307, 'Atlantic/Faroe'),
(308, 'Atlantic/Jan_Mayen'),
(309, 'Atlantic/Madeira'),
(310, 'Atlantic/Reykjavik'),
(311, 'Atlantic/South_Georgia'),
(312, 'Atlantic/St_Helena'),
(313, 'Atlantic/Stanley'),
(314, 'Australia/ACT'),
(315, 'Australia/Adelaide'),
(316, 'Australia/Brisbane'),
(317, 'Australia/Broken_Hill'),
(318, 'Australia/Canberra'),
(319, 'Australia/Currie'),
(320, 'Australia/Darwin'),
(321, 'Australia/Eucla'),
(322, 'Australia/Hobart'),
(323, 'Australia/LHI'),
(324, 'Australia/Lindeman'),
(325, 'Australia/Lord_Howe'),
(326, 'Australia/Melbourne'),
(327, 'Australia/NSW'),
(328, 'Australia/North'),
(329, 'Australia/Perth'),
(330, 'Australia/Queensland'),
(331, 'Australia/South'),
(332, 'Australia/Sydney'),
(333, 'Australia/Tasmania'),
(334, 'Australia/Victoria'),
(335, 'Australia/West'),
(336, 'Australia/Yancowinna'),
(337, 'Brazil/Acre'),
(338, 'Brazil/DeNoronha'),
(339, 'Brazil/East'),
(340, 'Brazil/West'),
(341, 'CET'),
(342, 'CST6CDT'),
(343, 'Canada/Atlantic'),
(344, 'Canada/Central'),
(345, 'Canada/East-Saskatchewan'),
(346, 'Canada/Eastern'),
(347, 'Canada/Mountain'),
(348, 'Canada/Newfoundland'),
(349, 'Canada/Pacific'),
(350, 'Canada/Saskatchewan'),
(351, 'Canada/Yukon'),
(352, 'Chile/Continental'),
(353, 'Chile/EasterIsland'),
(354, 'Cuba'),
(355, 'EET'),
(356, 'EST'),
(357, 'EST5EDT'),
(358, 'Egypt'),
(359, 'Eire'),
(360, 'Etc/GMT'),
(361, 'Etc/GMT+0'),
(362, 'Etc/GMT+1'),
(363, 'Etc/GMT+10'),
(364, 'Etc/GMT+11'),
(365, 'Etc/GMT+12'),
(366, 'Etc/GMT+2'),
(367, 'Etc/GMT+3'),
(368, 'Etc/GMT+4'),
(369, 'Etc/GMT+5'),
(370, 'Etc/GMT+6'),
(371, 'Etc/GMT+7'),
(372, 'Etc/GMT+8'),
(373, 'Etc/GMT+9'),
(374, 'Etc/GMT-0'),
(375, 'Etc/GMT-1'),
(376, 'Etc/GMT-10'),
(377, 'Etc/GMT-11'),
(378, 'Etc/GMT-12'),
(379, 'Etc/GMT-13'),
(380, 'Etc/GMT-14'),
(381, 'Etc/GMT-2'),
(382, 'Etc/GMT-3'),
(383, 'Etc/GMT-4'),
(384, 'Etc/GMT-5'),
(385, 'Etc/GMT-6'),
(386, 'Etc/GMT-7'),
(387, 'Etc/GMT-8'),
(388, 'Etc/GMT-9'),
(389, 'Etc/GMT0'),
(390, 'Etc/Greenwich'),
(391, 'Etc/UCT'),
(392, 'Etc/UTC'),
(393, 'Etc/Universal'),
(394, 'Etc/Zulu'),
(395, 'Europe/Amsterdam'),
(396, 'Europe/Andorra'),
(397, 'Europe/Athens'),
(398, 'Europe/Belfast'),
(399, 'Europe/Belgrade'),
(400, 'Europe/Berlin'),
(401, 'Europe/Bratislava'),
(402, 'Europe/Brussels'),
(403, 'Europe/Bucharest'),
(404, 'Europe/Budapest'),
(405, 'Europe/Chisinau'),
(406, 'Europe/Copenhagen'),
(407, 'Europe/Dublin'),
(408, 'Europe/Gibraltar'),
(409, 'Europe/Guernsey'),
(410, 'Europe/Helsinki'),
(411, 'Europe/Isle_of_Man'),
(412, 'Europe/Istanbul'),
(413, 'Europe/Jersey'),
(414, 'Europe/Kaliningrad'),
(415, 'Europe/Kiev'),
(416, 'Europe/Lisbon'),
(417, 'Europe/Ljubljana'),
(418, 'Europe/London'),
(419, 'Europe/Luxembourg'),
(420, 'Europe/Madrid'),
(421, 'Europe/Malta'),
(422, 'Europe/Mariehamn'),
(423, 'Europe/Minsk'),
(424, 'Europe/Monaco'),
(425, 'Europe/Moscow'),
(426, 'Europe/Nicosia'),
(427, 'Europe/Oslo'),
(428, 'Europe/Paris'),
(429, 'Europe/Podgorica'),
(430, 'Europe/Prague'),
(431, 'Europe/Riga'),
(432, 'Europe/Rome'),
(433, 'Europe/Samara'),
(434, 'Europe/San_Marino'),
(435, 'Europe/Sarajevo'),
(436, 'Europe/Simferopol'),
(437, 'Europe/Skopje'),
(438, 'Europe/Sofia'),
(439, 'Europe/Stockholm'),
(440, 'Europe/Tallinn'),
(441, 'Europe/Tirane'),
(442, 'Europe/Tiraspol'),
(443, 'Europe/Uzhgorod'),
(444, 'Europe/Vaduz'),
(445, 'Europe/Vatican'),
(446, 'Europe/Vienna'),
(447, 'Europe/Vilnius'),
(448, 'Europe/Volgograd'),
(449, 'Europe/Warsaw'),
(450, 'Europe/Zagreb'),
(451, 'Europe/Zaporozhye'),
(452, 'Europe/Zurich'),
(453, 'Factory'),
(454, 'GB'),
(455, 'GB-Eire'),
(456, 'GMT'),
(457, 'GMT+0'),
(458, 'GMT-0'),
(459, 'GMT0'),
(460, 'Greenwich'),
(461, 'HST'),
(462, 'Hongkong'),
(463, 'Iceland'),
(464, 'Indian/Antananarivo'),
(465, 'Indian/Chagos'),
(466, 'Indian/Christmas'),
(467, 'Indian/Cocos'),
(468, 'Indian/Comoro'),
(469, 'Indian/Kerguelen'),
(470, 'Indian/Mahe'),
(471, 'Indian/Maldives'),
(472, 'Indian/Mauritius'),
(473, 'Indian/Mayotte'),
(474, 'Indian/Reunion'),
(475, 'Iran'),
(476, 'Israel'),
(477, 'Jamaica'),
(478, 'Japan'),
(479, 'Kwajalein'),
(480, 'Libya'),
(481, 'MET'),
(482, 'MST'),
(483, 'MST7MDT'),
(484, 'Mexico/BajaNorte'),
(485, 'Mexico/BajaSur'),
(486, 'Mexico/General'),
(487, 'Mideast/Riyadh87'),
(488, 'Mideast/Riyadh88'),
(489, 'Mideast/Riyadh89'),
(490, 'NZ'),
(491, 'NZ-CHAT'),
(492, 'Navajo'),
(493, 'PRC'),
(494, 'PST8PDT'),
(495, 'Pacific/Apia'),
(496, 'Pacific/Auckland'),
(497, 'Pacific/Chatham'),
(498, 'Pacific/Easter'),
(499, 'Pacific/Efate'),
(500, 'Pacific/Enderbury'),
(501, 'Pacific/Fakaofo'),
(502, 'Pacific/Fiji'),
(503, 'Pacific/Funafuti'),
(504, 'Pacific/Galapagos'),
(505, 'Pacific/Gambier'),
(506, 'Pacific/Guadalcanal'),
(507, 'Pacific/Guam'),
(508, 'Pacific/Honolulu'),
(509, 'Pacific/Johnston'),
(510, 'Pacific/Kiritimati'),
(511, 'Pacific/Kosrae'),
(512, 'Pacific/Kwajalein'),
(513, 'Pacific/Majuro'),
(514, 'Pacific/Marquesas'),
(515, 'Pacific/Midway'),
(516, 'Pacific/Nauru'),
(517, 'Pacific/Niue'),
(518, 'Pacific/Norfolk'),
(519, 'Pacific/Noumea'),
(520, 'Pacific/Pago_Pago'),
(521, 'Pacific/Palau'),
(522, 'Pacific/Pitcairn'),
(523, 'Pacific/Ponape'),
(524, 'Pacific/Port_Moresby'),
(525, 'Pacific/Rarotonga'),
(526, 'Pacific/Saipan'),
(527, 'Pacific/Samoa'),
(528, 'Pacific/Tahiti'),
(529, 'Pacific/Tarawa'),
(530, 'Pacific/Tongatapu'),
(531, 'Pacific/Truk'),
(532, 'Pacific/Wake'),
(533, 'Pacific/Wallis'),
(534, 'Pacific/Yap'),
(535, 'Poland'),
(536, 'Portugal'),
(537, 'ROC'),
(538, 'ROK'),
(539, 'Singapore'),
(540, 'Turkey'),
(541, 'UCT'),
(542, 'US/Alaska'),
(543, 'US/Aleutian'),
(544, 'US/Arizona'),
(545, 'US/Central'),
(546, 'US/East-Indiana'),
(547, 'US/Eastern'),
(548, 'US/Hawaii'),
(549, 'US/Indiana-Starke'),
(550, 'US/Michigan'),
(551, 'US/Mountain'),
(552, 'US/Pacific'),
(553, 'US/Pacific-New'),
(554, 'US/Samoa'),
(555, 'UTC'),
(556, 'Universal'),
(557, 'W-SU'),
(558, 'WET'),
(559, 'Zulu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
`id` int(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `intro` varchar(400) NOT NULL,
  `texto` text NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reviews`
--

INSERT INTO `reviews` (`id`, `titulo`, `intro`, `texto`, `tipo`, `fecha`) VALUES
(1, 'UN NUEVO SMARTWATCH DE SAMSUNG PODRÃA SER LANZADO EN SEPTIEMBRE', 'Un nuevo SmartWatch de Samsung podrÃ­a lanzar en septiembre, el SmartWatch llamado Orbis, seria anunciado durante la CTIA en septiembre, pero algunos informes dicen que podrÃ­an ser revelados durante la IFA de 2015, tendrÃ­a mÃ¡s sentido para los Orbis.', 'Se dice que el Orbis incluye una pantalla redonda, bisel giratorio para los controles de software, y tambiÃ©n puede incluir una caracterÃ­stica para controlar televisores y electrodomÃ©sticos inteligentes.\r\n\r\nVarios rumores han mencionado que puede tener una caracterÃ­sticas interesante, una cÃ¡mara incorporada. Samsung se esta centrÃ¡ndo en el diseÃ±o con este SmartWatch para que se vea mÃ¡s como una pieza de joyerÃ­a y no como un gadget.', '3', '2015-03-18 11:47:50'),
(2, 'ZOTAC ANUNCIA SU GEFORCE GTX TITAN X', 'ZOTAC hoy lanza su GeForce GTX Titan X la reina para las nuevas generaciones de juegos. Continuando con el legado de tarjetas Titan, la ZOTAC GeForce GTX Titan X estÃ¡ diseÃ±ado con precisiÃ³n para generar el menor ruido posible, rendimiento tÃ©rmico y eficiencia energÃ©tica. El resultado es una tarjeta grÃ¡fica que ofrece una resoluciÃ³n extrema con detalles excelentes.', 'â€œEstamos muy contentos de trabajar en estrecha colaboraciÃ³n con NVIDIA para llevar a los juegos a resoluciones 4K con esta increÃ­ble tarjetaâ€, dice Tony Wong, director general de ZOTAC International. â€œLa ZOTAC GeForce GTX Titan X traerÃ¡ para los entusiastas mÃ¡s exigentes un rendimiento sin igual en una sola GPU. Con innovaciones tecnolÃ³gicas, esta tarjeta grÃ¡fica representa un paso gigante hacia el espacio de la realidad virtual.â€\r\nPotencia grÃ¡fica sin precedentes\r\nEl aprovechamiento de la arquitectura Maxwell, ofrece las Ãºltimas innovaciones tecnolÃ³gicas y duplica el rendimiento y la eficiencia de energÃ­a con respecto al original GTX Titan. Para los entusiastas, esto significa que la TitÃ¡n X es la Ãºnica GPU que ofrece un buen rendimiento en 4K incluso con ajustes al maximo. La ZOTAC GeForce GTX Titan X tambiÃ©n estÃ¡ preparado para strimear tus partidas. Reproduce tu juego y comparte momentos con los amigos con NVIDIA GameStream y NVIDIA Shadowplay.\r\n\r\nNext Gen Ready\r\nPreparada para los motores de juego de prÃ³xima generaciÃ³n, incluyendo Unreal 4 y el motor de Crytek, la GPU se encarga de las mejoras grÃ¡ficas con suma facilidad, manteniendo mÃ¡s de 60 FPS incluso con una gran cantidad de efectos activados. En combinaciÃ³n con la iluminaciÃ³n hiperrealista y tecnologÃ­as de NVIDIA como NVIDIA G-SYNC, la ZOTAC GeForce GTX Titan X finalmente trae el futuro de los juegos a los hogares.\r\n\r\nVelocidad sin igual\r\nLa ZOTAC GeForce GTX Titan X viene con 12 GB de memoria GDDR5, la poderosa GTX Titan X llega en un color Negro, y esta es la Ãºnica GPU Ãºnica que tiene la capacidad de definir los juegos de prÃ³xima generaciÃ³n y entretenimiento.', '3', '2015-03-18 11:54:03'),
(3, 'EVGA ANUNCIA SU GEFORCE GTX TITAN X HYDROCOPPER', 'La EVGA GeForce GTX TITAN X combina las tecnologÃ­as y rendimiento de la nueva arquitectura NVIDIA Maxwell', 'hoy es la tarjeta grÃ¡fica mÃ¡s rÃ¡pida y mÃ¡s avanzado en el planeta. Este increÃ­ble GPU ofrece grÃ¡ficos sin igual, rendimiento tÃ©rmico y bajo consumo de energÃ­a. El aficionado mÃ¡s exigente ahora puede experimentar resoluciones extremas hasta 4K y mÃ¡s allÃ¡. Disfrute hiperrealismo, iluminaciÃ³n en tiempo real con la avanzada tecnologÃ­a NVIDIA VXGI, asÃ­ como la tecnologÃ­a de pantalla G-SYNC de NVIDIA. AdemÃ¡s llega con la tecnologÃ­a DSR que ofrece una experiencia 4K, incluso en una pantalla 1080p.\r\n', '3', '2015-03-18 11:58:16'),
(4, 'GTA V PARA PC, AHORA TENEMOS UN VIDEO EN 4K, COMPARANDO CON LA PS4 Y PS3', 'No hay duda de que la versiÃ³n de GTA V para PC en resoluciÃ³n 4K parece glorioso', 'No hay duda de que la versiÃ³n de GTA V para PC en resoluciÃ³n 4K parece glorioso, y mas si miramos las imÃ¡genes filtradas. Mientras que muchos quedaron satisfechos al ver imÃ¡genes de GTA V en 4K, algunos han estado esperando pacientemente un vÃ­deos del juego en 4K para PC.\r\n\r\nGrand Theft Auto V para PC funciona a resoluciÃ³n 4K y no se compara en nada a las versiones de PS4 y Xbox One. Rockstar Games parece haber echo un excelente trabajo, con la esperanza de atraer a los jugadores de PC despuÃ©s de retrasar GTA V por varios meses y varias veces.\r\n\r\nAquÃ­ hay un video que compara los grÃ¡ficos de GTA V en 4K la versiÃ³n de PC con la versiÃ³n de PS4, y la de PS3.', '3', '2015-03-18 12:10:23'),
(5, 'BATTLEFIELD HARDLINE, COMPARATIVA DE PC VS PS4', 'Battlefield Hardline PC vs PS4, las imÃ¡genes que les vamos a mostrar a continuaciÃ³n, comparan los grÃ¡ficos del nuevo tÃ­tulo de DICE en ambas plataformas. Hardline en PC estÃ¡ funcionando a una resoluciÃ³n de 1080p, con ajustes mÃ¡ximos, 2x MSAA habilitado y en la Playstation 4 se ejecuta Hardline con una resoluciÃ³n de 900p.', 'AquÃ­ estÃ¡n las imagenes de Battlefield Hardline PC vs PS4, a ver si pueden detectar las diferencias, en el lado izquierdo tenemos la versiÃ³n PC que llega en 1080p (aunque el suavizado sÃ³lo se fija en 2x MSAA), a la derecha estÃ¡ la versiÃ³n de PlayStation.\r\n\r\nLa versiÃ³n para PC se beneficia de sombras de mayor resoluciÃ³n, mayores niveles de AA, mayor nivel de detalle, follaje denso, por nombrar unos pocos.\r\n\r\nLas primeras crÃ­ticas dicen que Battlefield Hardline tiene una campaÃ±a dÃ©bil, pero la parte multijugador del juego es divertida.', '3', '2015-03-18 12:20:25'),
(6, 'NINTENDO ESTA PLANEANDO UNA NUEVA CONSOLA, LA NX', 'Nintendo hizo un gran anuncio hoy, la compaÃ±Ã­a de juegos japonesa anunciÃ³ oficialmente que estÃ¡ trabajando en una nueva consola de juegos. La consola de juegos Nintendo NX fue anunciado por el CEO Satoru Iwata.', 'Nintendo NX es â€œuna plataforma de juego dedicado a un concepto totalmente nuevo.â€ Y eso, amigos, es todo lo que sabemos acerca de la consola de Nintendo NX.\r\n\r\nIwata dijo, que nuevos detalles de la Nintendo NX se darÃ¡n a conocer reciÃ©n el aÃ±o prÃ³ximo, es decir, 2016.\r\n\r\nEso es, literalmente, todo lo que sabemos acerca de Nintendo NX , pero es suficiente para que nos entusiasmemos.\r\n\r\nLa Wii U se dejÃ³ caer, y Nintendo sabe que tiene que hacer las cosas de manera diferente, con su prÃ³xima consola, mas si quiere sobrevivir en el mercado de las consolas hogareÃ±as.\r\n\r\nÂ¿PodrÃ­a la Nintendo NX cambiar las cosas?\r\n\r\nÂ¿CuÃ¡les son tus expectativas sobre la consola Nintendo NX?', '3', '2015-03-18 12:21:34'),
(7, 'LA CABRA DE GOAT SIMULATOR PODRÃA APARECER EN DOTA 2', 'Seguro piensan que Goat Simulator es un juego alegre en el que puedes hacer de todo con una cabra, pero en realidad es un vehÃ­culo para una estratagema mucho mÃ¡s siniestro.', ' Pronto las cabras tomaran el control del mundo virtual, en lugar de Minecraft Creepers habrÃ¡ cabras Minecraft, en lugar de Final Fantasy Chocobos habrÃ¡ cabras de Final Fantasy, en lugar de Kevin Spacey habrÃ¡ una cabra.\r\n\r\nCon la ayuda de Goat Simulator y los Coffee Stain Studios, la cabra pronto podrÃ­an estar en Dota 2 en forma de un servicio de mensajerÃ­a. La cosa es que los usuarios tienen que votar a la cabra para esto,e si quieren ser cÃ³mplices de que la cabra tome el poder.', '3', '2015-03-18 12:22:38'),
(8, 'NVIDIA QUADRO M6000 EN IMÃGENES, CEBIT 2015', 'Ya hemos tenido un vistazo a Quadro M6000 gracias a Deadmau5 . Hoy tenemos la oportunidad de ver el nuevo diseÃ±o de la serie Quadro en plena gloria.', 'En el stand de PNY en el Cebit encontramos la tarjeta grÃ¡fica Quadro M6000, el nuevo modelo basado en Maxwell, que estÃ¡ sustituyendo a la Quadro K6000.\r\n\r\nEsta tarjeta estÃ¡ equipada con un GPU GM200 completo, 3072 CUDA Cores, 192 TMU y 96 ROPS.\r\n\r\nEspecificaciones NVIDIA Quadro M6000:\r\n\r\nGPU GM200\r\n3072 CUDA Cores\r\n192 TMU\r\n96 ROPs\r\nMemoria de 12 GB GDDR5\r\nInterfaz de 384 bits\r\nGPU Clock: 988 MHz\r\nClock de la memoria: 1653 MHz\r\n\r\n ', '3', '2015-03-18 12:23:36'),
(9, 'YOUTUBE CAMBIA LAS ANOTACIONES POR TARJETAS, QUE PUEDEN SER MAS MOLESTAS QUE LAS ANOTACIONES', 'YouTube estÃ¡ empezando a sustituir las anotaciones en los videos con una nueva caracterÃ­stica introducida llamado â€œtarjetasâ€. ', 'La nueva caracterÃ­stica reemplaza las anotaciones, Google busca mejorar esta caracterÃ­stica, con anotadores mas grande y coloridos que muestran la recaudaciÃ³n de fondos de un video, listas de reproducciÃ³n, enlaces, etc. Las tarjetas son mÃ¡s bonitas que las anotaciones, pero son aÃºn mÃ¡s molestas en algunos casos, ya que ocupan mÃ¡s del vÃ­deo. Estas tarjetas son desplegadas en mÃ³viles y PC, en los dispositivos mÃ³viles, las tarjetas aparecen sobre el vÃ­deo en sÃ­, cuando un telÃ©fono esta en forma horizontal, pero se colocarÃ¡ debajo del video en vertical. Las Tarjetas no se muestran de forma automÃ¡tica en su totalidad, sino que aparecen con un sÃ­mbolo de â€œinfoâ€ o se muestran cuando se pasa el mouse sobre el video.\r\n\r\nCon el tiempo, YouTube va a reemplazar todas las anotaciones con las tarjetas.', '3', '2015-03-18 12:24:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salud`
--

CREATE TABLE IF NOT EXISTS `salud` (
`id` int(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `intro` varchar(400) NOT NULL,
  `texto` text NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salud`
--

INSERT INTO `salud` (`id`, `titulo`, `intro`, `texto`, `tipo`, `fecha`) VALUES
(1, 'trabajadores de Salud exigen pagos pendientes', 'El gobernador regional de Piura, Reynaldo Hilbck, se reuniÃ³ con los representantes de la FederaciÃ³n Regional de Trabajadores de Salud ante la situaciÃ³n que atraviesan los trabajadores que ganaron su nombramiento, en diciembre del 2014, quienes hasta el momento no cobran sus sueldos.', '\r\n\r\n    Portada\r\n    Nacional\r\n\r\nPiura: trabajadores de Salud exigen pagos pendientes\r\n\r\nJueves, 16 de Abril 2015  |  6:03 pm\r\nPiura: trabajadores de Salud exigen pagos pendientes\r\nCrÃ©ditos: Referencial (RPP)\r\n\r\nUna comisiÃ³n de los trabajadores impagos se reunirÃ¡n con el director de Salud y autoridad regional maÃ±ana (viernes) para buscar una soluciÃ³n al tema.\r\n\r\n    Compartir:\r\n\r\nTemas relacionados:\r\n\r\n    salud\r\n    impagos\r\n    trabajadores\r\n    Piura\r\n    Nacional\r\n\r\nEl gobernador regional de Piura, Reynaldo Hilbck, se reuniÃ³ con los representantes de la FederaciÃ³n Regional de Trabajadores de Salud ante la situaciÃ³n que atraviesan los trabajadores que ganaron su nombramiento, en diciembre del 2014, quienes hasta el momento no cobran sus sueldos.\r\n\r\nLa autoridad regional informÃ³ que maÃ±ana (viernes) se reunirÃ¡n con el director regional de Salud, Eduardo MontalbÃ¡n para sustentar una propuesta concreta sobre este tema, teniendo en cuenta que hay unidades ejecutoras que no han cubierto los procedimientos y que de acuerdo a un acta existente se pueden hacer de manera sumaria.\r\n\r\nHilbck GuzmÃ¡n reconociÃ³ que es injusto que las personas no reciban su pago y pidiÃ³ disculpas sobre el tema.\r\n\r\nâ€œEso no puede ser bajo ningÃºn caso porque ni siquiera estÃ¡n recibiendo su sueldo como nombrados o no nombradosâ€, acotÃ³.\r\n\r\nEn tanto, JoaquÃ­n PÃ©rez Saavedra, secretario general de la FederaciÃ³n Regional de Trabajadores de Salud refiriÃ³ que el diÃ¡logo es lo primero y en ese sentido agradeciÃ³ al gobernador regional por haberlos recibido y esperan encontrar una soluciÃ³n.', '8', '2015-04-16 21:20:15'),
(2, 'Solicitan a gobiernos latinos que consideren la artritis', 'Solicitud para la artritis', 'Durante el  congreso celebrado en Barranquilla se descutio sobre este tema ya que segun sifras de afecta al 1 % de la poblaciÃ³n mundial, segÃºn la OrganizaciÃ³n Mundial de la Salud (OMS)', '8', '2015-04-18 10:40:18'),
(3, 'ReuniÃ³n Anual del Instituto Nacional de PerinatologÃ­a', 'ReuniÃ³n Anual del Instituto Nacional de PerinatologÃ­ahtdocsProyecto_Notesiteloginadministrationadminarticulo.php</b> on line <b>442</b><br />\r\n', 'Se realiza durante los dia del 20 a24 de Abril del 2015', '8', '2015-04-18 10:45:54'),
(4, '6th IVI International Congress - Reproductive Medicine and Beyond', '6th IVI International Congress - Reproductive Medicine and Beyond', ' se llavara en EspaÃ±a, Alicante del 23 al 25 de Abrl del 2015', '8', '2015-04-18 11:08:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
`id` int(255) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id`, `nombre`, `estado`) VALUES
(1, 'Noticias Tecnológicas', 's'),
(2, 'Video Juegos', 's'),
(3, 'Reviews', 's'),
(4, 'Eventos', 's'),
(5, 'Recomendaciones Musicales', 's'),
(6, 'Fotografía', 's'),
(7, 'Video', 's'),
(8, 'Salud', 's'),
(9, 'Internacional', 's'),
(10, 'Nacional', 's'),
(11, 'Opinion', 's'),
(12, 'Lecturas', 's'),
(13, 'Descargas', 's'),
(14, 'Random', 's');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulos`
--

CREATE TABLE IF NOT EXISTS `titulos` (
  `id` int(255) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `cuadro` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `titulos`
--

INSERT INTO `titulos` (`id`, `titulo`, `cuadro`) VALUES
(1, 'BIENVENIDOS TODOS', 'alert alert-info'),
(2, 'PRINCIPALES NOTICIAS', 'alert alert-error'),
(3, 'FACEBOOK', 'alert alert-info');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(255) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `usu` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `con` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usu`, `con`, `tipo`, `estado`) VALUES
(1, 'Ivan Hurtado', 'ivan', 'ivan', 'a', 's'),
(2, 'Esteban Castillo p', 'Esteban Castillo p', '135698er', 'a', 's'),
(6, 'Gonzalo Alejandro', 'Gonzo', 'gonzo', 'a', 's');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `video`
--

CREATE TABLE IF NOT EXISTS `video` (
`id` int(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `intro` varchar(400) NOT NULL,
  `texto` text NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `video`
--

INSERT INTO `video` (`id`, `titulo`, `intro`, `texto`, `tipo`, `fecha`) VALUES
(2, 'Â¿Es de dÃ­a o de noche? El eclipse solar egaÃ±Ã³ a estas gallinas', '<iframe width="100%" height="200" src="https://www.youtube.com/embed/Vm9v_zc7IUY" frameborder="0" allowfullscreen></iframe>', 'El eclipse engaÃ±o a las gallinas', '7', '2015-03-23 13:59:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuegos`
--

CREATE TABLE IF NOT EXISTS `videojuegos` (
`id` int(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `intro` varchar(400) NOT NULL,
  `texto` text NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `videojuegos`
--

INSERT INTO `videojuegos` (`id`, `titulo`, `intro`, `texto`, `tipo`, `fecha`) VALUES
(1, 'Primer trÃ¡iler de Pixels, la pelÃ­cula para los amantes de los videojuegos', 'Columbia Pictures ha publicado el primer trÃ¡iler en castellano de la pelÃ­cula Pixels que se estrenarÃ¡ el prÃ³ximo 24 de julio y que serÃ¡ un gran homenaje al mundo de los videojuegos. Se trata de una producciÃ³n basada en un corto que se popularizÃ³ en 2010. EstÃ¡ siendo dirigida por Chris Columbus (Solo en casa, Harry Potter y la piedra filosofal). Entre sus actores se encuentran Adam Sandler,', 'El argumento de Pixels nos muestra como unos aliens malinterpretan los videojuegos clÃ¡sicos como una declaraciÃ³n de guerra contra ellos. Para hacernos frente, atacarÃ¡n la Tierra utilizando los modelos de los juegos. El presidente de los Estados Unidos llamarÃ¡ a su mejor amigo, un campeÃ³n del vicio que liderarÃ¡ un equipo de jugones de recreativos. No faltarÃ¡n personajes tan mÃ­ticos como Pac-Man, Donkey Kong, Space Invaders y Centipede. El creador de Pac-Man, Toru Iwatini, tendrÃ¡ un cameo muy especial.\r\n<iframe width="825" height="494" src="https://www.youtube.com/embed/FNDFd6GrK-A" frameborder="0" allowfullscreen></iframe>', '2', '2015-03-18 11:32:11'),
(2, 'Crytek trabaja en un juego sobre la mayor licencia del mundo', '"No puedo contar nada mÃ¡s en detalle, pero creo que pronto anunciaremos ese acuerdo con nuestro nuevo socio. Una gran licencia, probablemente la mayor de todas. Mucha gente tiene la impresiÃ³n equivocada de que tenemos que buscar un nuevo inversor o algo. Pero ese no es el caso, hemos llegado a un acuerdo de licencia."', 'Durante los Ãºltimos tiempos CryTek ha sido protagonista por sus problemas financieros mÃ¡s que por sus futuros proyectos. Esto podrÃ­a cambiar muy pronto ya que Faruk Yerli, uno de los co-fundadores de la compaÃ±Ã­a, ha afirmado que han firmado un gran acuerdo de licencia con uno socio desconocido que les estÃ¡ ayudando a mejorar la estabilidad de la compaÃ±Ã­a. Concretamente hablan sobre la mayor licencia de todas las licencias. El hype estÃ¡ asegurado.', '2', '2015-03-18 11:33:31'),
(3, 'Sony registra por tercera vez consecutiva la marca The Last Guardian', 'Cuenta la leyenda que antiguamente existÃ­a una antigua civilizaciÃ³n que nacÃ­a con cuernos en la cabeza. Vivieron en paz durante muchos aÃ±os pero una extraÃ±a maldiciÃ³n acabÃ³ por exterminarlos a casi todos. Ha pasado mucho tiempo desde todo aquello y solo nos queda el lejano recuerdo de una profecÃ­a que anuncia la llegada del salvador de la humanidad.', 'ICO y Shadow of the Colossus se convirtieron en dos de los mejores juegos con los que creciÃ³ toda una generaciÃ³n de jugadores. El equipo de desarrollo de Fumito Ueda se colocÃ³ en la cima de la industria y anunciaron The Last Guardian, un juego que hizo que muchos de nosotros comprÃ¡semos una Playstation 3 para asegurarnos el poder disfrutar de una experiencia como aquella. Tan solo nos queda el recuerdo de un trÃ¡iler que hemos visto decenas de veces y que nos emociona cada vez que lo vemos.\r\n\r\nLos aÃ±os han pasado rÃ¡pidamente y estamos viviendo una etapa en la que los protagonistas son los contenidos descargables, los frames por segundo los retrasos, la resoluciÃ³n y las exclusividades. Las historias que nos llegan al corazÃ³n pueden contarse con los dedos de la mano y solo la llegada de otro juego como The Last Guardian podrÃ­a salvarnos a todos, tal y como os contÃ¡bamos en el primer pÃ¡rrafo.\r\n\r\nNos hemos puesto tan Ã©picos para decirlos que Sony ha registrado la marca The Last Guardian por tercera vez consecutiva. Â¿SerÃ¡ 2015 el aÃ±o del cambio?\r\n<iframe width="825" height="494" src="https://www.youtube.com/embed/EHzHoMT5eRg" frameborder="0" allowfullscreen></iframe>', '2', '2015-03-18 11:34:40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `descargas`
--
ALTER TABLE `descargas`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fotografia`
--
ALTER TABLE `fotografia`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `internacional`
--
ALTER TABLE `internacional`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lecturas`
--
ALTER TABLE `lecturas`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nacional`
--
ALTER TABLE `nacional`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `opinion`
--
ALTER TABLE `opinion`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `random`
--
ALTER TABLE `random`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recomendacionesm`
--
ALTER TABLE `recomendacionesm`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reviews`
--
ALTER TABLE `reviews`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `salud`
--
ALTER TABLE `salud`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `titulos`
--
ALTER TABLE `titulos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `video`
--
ALTER TABLE `video`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `descargas`
--
ALTER TABLE `descargas`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `fotografia`
--
ALTER TABLE `fotografia`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `internacional`
--
ALTER TABLE `internacional`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `lecturas`
--
ALTER TABLE `lecturas`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `nacional`
--
ALTER TABLE `nacional`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `opinion`
--
ALTER TABLE `opinion`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `random`
--
ALTER TABLE `random`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `recomendacionesm`
--
ALTER TABLE `recomendacionesm`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=560;
--
-- AUTO_INCREMENT de la tabla `reviews`
--
ALTER TABLE `reviews`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `salud`
--
ALTER TABLE `salud`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `video`
--
ALTER TABLE `video`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
