--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: amigos_usuario; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE amigos_usuario (
    id_receptor character varying(4) NOT NULL,
    id_emisor character varying(4) NOT NULL,
    estado character varying(15) NOT NULL,
    id integer NOT NULL
);


ALTER TABLE public.amigos_usuario OWNER TO postgres;

--
-- Name: amigos_usuario_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE amigos_usuario_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.amigos_usuario_id_seq OWNER TO postgres;

--
-- Name: amigos_usuario_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE amigos_usuario_id_seq OWNED BY amigos_usuario.id;


--
-- Name: cargo; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE cargo (
    idcar character varying(4) NOT NULL,
    nombre character varying(60) NOT NULL,
    descripcion character varying(200) NOT NULL
);


ALTER TABLE public.cargo OWNER TO postgres;

--
-- Name: carrito; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE carrito (
    usuario character varying(20) NOT NULL,
    juego character varying(20) NOT NULL
);


ALTER TABLE public.carrito OWNER TO postgres;

--
-- Name: clasificacion; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE clasificacion (
    idcla character varying(4) NOT NULL,
    nombre character varying(30) NOT NULL,
    descripcion character varying(50) NOT NULL
);


ALTER TABLE public.clasificacion OWNER TO postgres;

--
-- Name: desarrollador; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE desarrollador (
    iddes character varying(4) NOT NULL,
    nombre character varying(60) NOT NULL,
    cuentabancaria character varying(30) NOT NULL,
    correo character varying(30) NOT NULL
);


ALTER TABLE public.desarrollador OWNER TO postgres;

--
-- Name: empleado; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE empleado (
    idem character varying(4) NOT NULL,
    cedula character varying(12) NOT NULL,
    nombre character varying(30) NOT NULL,
    apellido1 character varying(15) NOT NULL,
    correo character varying(40) NOT NULL,
    contrasena character varying(15) NOT NULL,
    telefono character varying(12) NOT NULL,
    genero character varying(12) NOT NULL,
    fchnacimiento date NOT NULL,
    direccion character varying(40) NOT NULL,
    ciudad character varying(15) NOT NULL,
    departamento character varying(16) NOT NULL,
    id_cargo character varying(4) NOT NULL
);


ALTER TABLE public.empleado OWNER TO postgres;

--
-- Name: factura; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE factura (
    idfac character varying(4) NOT NULL,
    totaldes double precision DEFAULT 0 NOT NULL,
    iva integer NOT NULL,
    total double precision NOT NULL,
    fecha date NOT NULL,
    id_usuario character varying(4) NOT NULL,
    estadopago character varying(15) NOT NULL,
    subtotal double precision NOT NULL,
    direccion character varying(30) NOT NULL,
    depto character varying(30) NOT NULL,
    ciudada character varying(15) NOT NULL
);


ALTER TABLE public.factura OWNER TO postgres;

--
-- Name: factura_juego; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE factura_juego (
    id_factura character varying(4) NOT NULL,
    id_juego character varying(4) NOT NULL
);


ALTER TABLE public.factura_juego OWNER TO postgres;

--
-- Name: juego; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE juego (
    idjuego character varying(4) NOT NULL,
    precio double precision NOT NULL,
    descuento integer NOT NULL,
    imagen character varying(50) NOT NULL,
    nombre character varying(60) NOT NULL,
    id_desarrollador character varying(4) NOT NULL,
    descripcion character varying(2500) NOT NULL,
    id_clasificacion character varying(4) NOT NULL,
    fecha date NOT NULL,
    req character varying(1500) NOT NULL,
    imagen2 character varying(100)
);


ALTER TABLE public.juego OWNER TO postgres;

--
-- Name: listadeseos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE listadeseos (
    id_usuario character varying(4) NOT NULL,
    id_juego character varying(4) NOT NULL
);


ALTER TABLE public.listadeseos OWNER TO postgres;

--
-- Name: mensajes_usuario; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE mensajes_usuario (
    asunto character varying(50) NOT NULL,
    texto character varying(500) NOT NULL,
    fecha date NOT NULL,
    usuario_envio character varying(4) NOT NULL,
    usuario_recibe character varying(4) NOT NULL,
    id integer NOT NULL
);


ALTER TABLE public.mensajes_usuario OWNER TO postgres;

--
-- Name: mensajes_usuario_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE mensajes_usuario_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.mensajes_usuario_id_seq OWNER TO postgres;

--
-- Name: mensajes_usuario_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE mensajes_usuario_id_seq OWNED BY mensajes_usuario.id;


--
-- Name: nivel; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE nivel (
    idniv character varying(4) NOT NULL,
    nbnivel character varying(60) NOT NULL,
    recompensa character varying(200) NOT NULL,
    puntosneces integer NOT NULL
);


ALTER TABLE public.nivel OWNER TO postgres;

--
-- Name: noticia; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE noticia (
    idnot character varying(4) NOT NULL,
    fecha date NOT NULL,
    titulo character varying(60) NOT NULL,
    descripcion character varying(1000) NOT NULL,
    id_empleado character varying(4) NOT NULL,
    imagen character varying(100)
);


ALTER TABLE public.noticia OWNER TO postgres;

--
-- Name: reclamo; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE reclamo (
    idrec character varying(4) NOT NULL,
    id_juego character varying(4) NOT NULL,
    id_usuario character varying(4) NOT NULL,
    descripcion character varying(200) NOT NULL,
    estado character varying(10) NOT NULL,
    titulo character varying(60) NOT NULL,
    fecha date NOT NULL,
    motivo character varying(50) NOT NULL,
    horas character varying(4) NOT NULL,
    plataforma character varying(20) NOT NULL
);


ALTER TABLE public.reclamo OWNER TO postgres;

--
-- Name: resena; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE resena (
    id_usuario character varying(4) NOT NULL,
    id_juego character varying(4) NOT NULL,
    estrellas integer NOT NULL,
    descripcion character varying(300) NOT NULL,
    fecha date NOT NULL,
    id integer NOT NULL
);


ALTER TABLE public.resena OWNER TO postgres;

--
-- Name: resena_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE resena_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.resena_id_seq OWNER TO postgres;

--
-- Name: resena_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE resena_id_seq OWNED BY resena.id;


--
-- Name: usuario; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE usuario (
    iduser character varying(4) NOT NULL,
    nombre character varying(30) NOT NULL,
    apellido1 character varying(15) NOT NULL,
    dinero bigint DEFAULT 0 NOT NULL,
    nickname character varying(30) NOT NULL,
    correo character varying(40) NOT NULL,
    contrasena character varying(15) NOT NULL,
    genero character varying(12) NOT NULL,
    fchnacimiento date NOT NULL,
    puntos bigint DEFAULT 0 NOT NULL,
    pais character varying(20) NOT NULL,
    id_nivel character varying(4) DEFAULT 1 NOT NULL,
    telefono character varying(12) NOT NULL,
    cargo character varying(2) DEFAULT 1
);


ALTER TABLE public.usuario OWNER TO postgres;

--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY amigos_usuario ALTER COLUMN id SET DEFAULT nextval('amigos_usuario_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY mensajes_usuario ALTER COLUMN id SET DEFAULT nextval('mensajes_usuario_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY resena ALTER COLUMN id SET DEFAULT nextval('resena_id_seq'::regclass);


--
-- Data for Name: amigos_usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: amigos_usuario_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('amigos_usuario_id_seq', 8, true);


--
-- Data for Name: cargo; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO cargo VALUES ('0101', 'Soporte', 'Responde los reclamos y ayuda a los usuarios con cualquier duda en general.');
INSERT INTO cargo VALUES ('0202', 'Moderador', 'Revisa que las reseñas sean respetuosas.');
INSERT INTO cargo VALUES ('0303', 'Administrador', 'Se encarga de vigilar que los del departamento de moderación y de soporte hagan bien su trabajo.');


--
-- Data for Name: carrito; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO carrito VALUES ('2', '20');
INSERT INTO carrito VALUES ('2', '10');
INSERT INTO carrito VALUES ('2', '30');
INSERT INTO carrito VALUES ('2', '40');
INSERT INTO carrito VALUES ('2', '70');
INSERT INTO carrito VALUES ('1', '90');


--
-- Data for Name: clasificacion; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO clasificacion VALUES ('0101', 'Familiar', 'Contenido apto para cualquier público.');
INSERT INTO clasificacion VALUES ('0202', '+15', 'Contiene escenas moderadas de sexo o violencia.');
INSERT INTO clasificacion VALUES ('0303', '+18', 'Solo para gente mayor de edad.');


--
-- Data for Name: desarrollador; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO desarrollador VALUES ('0101', 'UltraJuegos', '1545854894848848 BBVA', 'ultrajuegos@gmail.com');
INSERT INTO desarrollador VALUES ('0202', 'Aventuras', '544847848848 Bancolombia', 'aventuras@gmail.com');
INSERT INTO desarrollador VALUES ('23', 'Mojang', '444548875484', 'mojang@gmail.com');
INSERT INTO desarrollador VALUES ('22', 'EA', '154851848484', 'ea@gmail.com');
INSERT INTO desarrollador VALUES ('21', 'Juegos MAX', '48488484487', 'juegosmax@gmail.com');
INSERT INTO desarrollador VALUES ('25', 'Pro Games', '1454788548965', 'progames@gmail.com');


--
-- Data for Name: empleado; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO empleado VALUES ('1', '2451584747', 'David Felipe', 'Rojas', 'daferoca8@hotmail.com', 'prueba123', '3154267548', 'M', '2000-03-03', 'Calle 19 # 24-34 Barrio X', 'Bucaramanga', 'Santander', '0101');
INSERT INTO empleado VALUES ('2', '4575142534', 'Pedro', 'Florez', 'pedrogutierrez21@gmail.com', 'test123', '3142541485', 'M', '1998-02-24', 'Calle 12 # 24-32 Barrio 2', 'Bogotá', 'Cundinamarca', '0101');


--
-- Data for Name: factura; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO factura VALUES ('12', 5, 12, 100, '2020-02-05', '1', 'Pagado', 10, 'XD', 'test2', 'test');
INSERT INTO factura VALUES ('14', 15, 0, 150000, '2020-03-18', '2', 'Pagado', 120000, 'CALLE X', 'SANTANDER', 'BUCARAMANGA');
INSERT INTO factura VALUES ('25', 0, 2, 450000, '2020-03-27', '2', 'Pagado', 450000, 'CALLE X', 'XD', 'XD');
INSERT INTO factura VALUES ('5', 0, 3, 450000, '2020-03-27', '2', 'Pagado', 450000, 'CALLE XD', 'XD', 'XD');
INSERT INTO factura VALUES ('8', 0, 5, 450000, '2020-03-27', '2', 'Pagado', 450000, 'CALLE X', 'XD', 'XD');


--
-- Data for Name: factura_juego; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO factura_juego VALUES ('14', '10');
INSERT INTO factura_juego VALUES ('8', '20');
INSERT INTO factura_juego VALUES ('8', '10');
INSERT INTO factura_juego VALUES ('8', '30');
INSERT INTO factura_juego VALUES ('8', '40');


--
-- Data for Name: juego; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO juego VALUES ('30', 120000, 20, 'needforspeed.jpg', 'Need for Speed', '0101', 'Need for Speed para PC es un juego de carreras en línea, el vigésimo segundo de la franquicia Need for Speed, y una especie de reboot del juego original.<br/>

Su jugabilidad está compuesta por vehículos resistentes y carreras callejeras que exigen un nivel de conducción y aerodinamismo impecables.<br/>

Aceleración, derrapes, terrenos intrincados: ¡las carreras de este videojuego lo tienen todo!<br/>

Acerca del juego<br/>

La historia principal del juego es bastante simple: el jugador se une a un pequeño grupo de aspirantes a corredores, todos deseosos de convertirse en el siguiente gran ícono de las carreras -y cada uno de ellos con su atención centrada en algún héroe del automovilismo en particular. Estos héroes están basados en estrellas de las carreras callejeras y de rallyes o de la personalización de coches de la vida real: todos personajes maravillosamente únicos y pintorescos, y dignos de la fama que ostentan debido a su capacidad de influencia.<br/>

El jugador compite contra uno de estos personajes, Magnus Walker, y termina superándolo, provocando con ello la ira de Spike, uno de los aspirantes a corredor que deseaban vencer a Magnus él mismo. Furioso, Spike busca confrontar a al jugador, pero logra ser tranquilizado por Travis, otro de los aspirantes, quien le hace ver que un poco de fama para alguno de ellos equivale a un poco de fama para todo el grupo.<br/>

Una vez que el jugador obtiene la experiencia y los puntos suficientes, se celebra la carrera definitiva, en la que el jugador, los cinco aspirantes y los cinco iconos del automovilismo compiten por la supremacía. La fotografía de equipo al final de la carrera incluye a todos los participantes, incluyendo al jugador - ¡aunque se le ve portando una máscara para mantener su anonimato!<br/>', '0202', '2020-03-18', 'Configuración mínima* <br/>
OS	Win 7 64 <br/>
CPU	Core i3-4130 3.4GHz / Athlon II X4 559 <br/>
RAM	6 GB <br/>
GPU	GeForce GTX 750 Ti / Radeon HD 7850 <br/>
HDD	30 GB<br/><br/>
Configuración recomendada*<br/>
OS	Win 7 64<br/>
CPU	Core i5-4690 3.5GHz / FX-8370<br/>
RAM	8 GB<br/>
GPU	GeForce GTX 970 4GB / Radeon R9 290<br/>
HDD	30 GB<br/>', 'needforspeed2.jpg');
INSERT INTO juego VALUES ('10', 50000, 0, 'minecraft1.jpg', 'Minecraft', '23', 'La premisa del juego es ridículamente simple: comienzas tu aventura con nada más que tus manos y un inventario limitado. A partir de esto, debes comenzar a minas para reunir materiales que luego utilizarás para fabricar herramientas y construir casas y otros edificios. <br/>

Los recursos que puedes encontrar van desde los más comunes hasta los súper raros, y a menudo los productos más raros y valiosos son los más difíciles de conseguir, requiriendo de minería profunda e incluso de la construcción de túneles reforzados para evitar que desbordamientos de agua o deslaves de rocas te retrases.<br/>

No hay ninguna historia a seguir: el desarrollo del juego depende completamente de ti y de lo que desees lograr. Puedes optar por construir ciudades, o una mansión rural, puedes criar ovejas o ir de pesca. El juego es exactamente lo que tú y tu imaginación quieren que sea.<br/>', '0101', '2020-03-11', 'Configuración mínima*<br/>
OS	Windows 10<br/>
CPU	Pentium 4 1.6GHz / Athlon XP 1600+<br/>
RAM	500 MB<br/>
GPU	GeForce 4 MX 440 / Radeon HD 3200<br/>
HDD	1 GB<br/><br/>
Configuración recomendada*<br/>
OS	Windows 10<br/>
CPU	Pentium 4 3.0GHz / Athlon XP 2600+<br/>
RAM	1 GB<br/>
GPU	GeForce 8600 GS / Radeon HD 6320<br/>
HDD	1 GB<br/>', 'minecraft2.jpg');
INSERT INTO juego VALUES ('20', 180000, 10, 'fifa201.jpg', 'FIFA 20', '22', 'Esta edición del juego cuenta con la habitual oferta de equipos y estadios de la vida real - renderizados con precisión y espléndidos gráficos - que cabría esperar de la exitosa y popular franquicia. Puedes encargarte de la dirección de tu equipo, haciendo que tus jugadores empiecen desde cero, o utilizando a jugadores de la vida real cuyas habilidades con el balón han sido fielmente trasladadas a la pantalla.<br/>

Las mejoras en la captura de movimientos y el código del juego y los controles contribuyen a que las jugadas sean cada vez más precisas, haciendo que el control del balón resulte toda una delicia. Esto brinda la posibilidad de maniobrar el balón para hacerlo llegar exactamente al punto del campo que desees si aplicas la delicadeza adecuada.<br/>

La Inteligencia Artificial de los defensas es ahora más realista, lo cual implica que a veces cometan errores típicos de los humanos. De esta forma se consigue una jugabilidad más equilibrada, ya que en entregas anteriores daban la impresión ser una especie de super atletas que nunca se resbalaban y rara vez dejaban pasar a un jugador o a la pelota.<br/>', '0101', '2020-03-23', 'Configuración mínima*<br/>
OS	64-bit Windows 7/8.1/10<br/>
CPU	Phenom II X4 965 or Equivalent / i3-2100 or Equivalent<br/>
RAM	8 GB<br/>
GPU	Radeon HD 7850 or Equivalent / GeForce GTX 660 or Equivalent<br/>
HDD	50 GB<br/><br/>
Configuración recomendada*<br/>
OS	Win 10 64<br/>
CPU	Athlon X4 870K or Equivalent / i3 6300T or Equivalent<br/>
RAM	8 GB<br/>
GPU	Radeon R9 270X or Equivalent / GeForce GTX 670 or Equivalent<br/>
HDD	50 GB<br/>', 'fifa202.jpg');
INSERT INTO juego VALUES ('40', 100000, 15, 'gtav1.jpg', 'GTA V: Premium Edition', '0202', 'En la versión para un solo jugador del juego, las acciones de los personajes están atados a una narrativa lineal que prácticamente debe ser completada de principio a fin de manera directa. Este no es el caso de la versión en línea, que ofrece más libertad – lo que a veces puede traducirse en mayor complejidad – para explorar y elegir las misiones que se deseen completar, en lugar de tener que ir completando todos los escenarios casi por casilla.<br/>

Los escenarios en los que se desarrolla el juego en línea son los mismos de la versión para un solo jugador, las ciudades ficticias de San Andreas y Los Santos, ubicadas en el condado de Blaine, las cuales cuentan con un mundo completamente funcional y actividades para probar por montones, así como edificios y calles que puedes explorar en todo momento.<br/>

La versión en línea del juego permite que hasta 30 jugadores jueguen de forma cooperativa o competitiva, luchando juntos en contra de otros enemigos, o entre sí, para conseguir una supremacía a corto plazo. Puedes unirte a equipos integrados por desconocidos, o unirte a tus amigos formando tu propio equipo cerrado. <br/>', '0303', '2020-03-06', 'Configuración mínima*<br/>
OS:Windows 10 64 Bit, Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1<br/>
Processor:Intel Core 2 Quad CPU Q6600 @ 2.40GHz (4 CPUs) / AMD Phenom 9850 Quad-Core Processor (4 CPUs) @ 2.5GHz<br/>
Memory:4 GB RAM<br/>
Graphics:NVIDIA 9800 GT 1GB / AMD HD 4870 1GB (DX 10, 10.1, 11)<br/>
Storage:72 GB available space<br/>
Sound Card:100% DirectX 10 compatible<br/><br/>
Configuración recomendada*<br/>
OS:Windows 10 64 Bit, Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1<br/>
Processor:Intel Core i5 3470 @ 3.2GHz (4 CPUs) / AMD X8 FX-8350 @ 4GHz (8 CPUs)<br/>
Memory:8 GB RAM<br/>
Graphics:NVIDIA GTX 660 2GB / AMD HD 7870 2GB<br/>
Storage:72 GB available space<br/>
Sound Card:100% DirectX 10 compatible<br/>', 'gtav2.jpg');
INSERT INTO juego VALUES ('50', 80000, 10, 'sims41.jpg', 'Los Sims 4', '22', 'Al igual que en el resto de juegos y paquetes de expansión de la serie, la jugabilidad consiste en controlar las vidas de tus Sims por completo – o casi por completo – a medida que estas transcurren. A lo largo de ellas, tus Sims se enfrentarán a situaciones tan diversas como tener que comprar o construir una casa, conseguir algún empleo o comenzar adentrarse en el mundo de las citas románticas.<br/>

En un principio, el juego no contaba con una historia definida, pero más tarde se lanzaron paquetes de expansión y complementos que incluyeron desafíos para los Sims, brindándoles misiones que llevar a cabo o carreras profesionales a seguir. El juego continúa siendo, sobre todo, un juego del tipo ‘Sandbox’, lo cual te ofrece un sinfín de posibilidades para que decidas lo que tus Sims deben hacer con sus vidas.<br/>', '0101', '2020-03-02', 'Configuración mínima*<br/>
OS	Windows 7 64 bits<br/>
CPU	Core 2 Duo E4300 1.8GHz / Athlon 64 X2 Dual Core 4000+<br/>
RAM	2 GB<br/>
GPU	GeForce 6600 GT / Radeon X1300 256MB<br/>
HDD	9 GB<br/><br/>
Configuración recomendada*<br/><br/>
OS	Windows 7,8,10 64 bits<br/>
CPU	Core i5-680 3.6GHz / Athlon X4 750K<br/>
RAM	4 GB<br/>
GPU	GeForce GTX 650 1GB / Radeon HD 7750 1GB GDDR5<br/>
HDD	9 GB<br/>', 'sims42.jpg');
INSERT INTO juego VALUES ('60', 90000, 0, 'pubg1.jpg', 'PUBG', '21', 'Hasta cien jugadores ingresar en al juego en una misma partida, cayendo en paracaídas a una isla donde inmediatamente todos comienzan a hurgar en busca de armamento y herramientas que les otorguen ventaja sobre los demás jugadores. Los más incautos son eliminados rápidamente, ya que cada uno se las arregla por su cuenta, ¡así que ten cuidado y asegúrate de cuidar tu espalda en todo momento!<br/>

El juego no sólo resulta compulsivo por sí mismo, sino que también cuenta con un tremendo número de seguidores en línea, quienes adoran ver videos y transmisiones en vivo de gameplays mediante streaming. Así que puedes configurar tu PC para capturar el juego en video y publicar tus mejores partidas con el fin de permitir que otros disfruten de la demostración de tus habilidades -¡o también de tus momentos más chuscos y embarazosos!', '0303', '2020-02-19', 'Configuración mínima*<br/>
OS:64-bit Windows 7, Windows 8.1, Windows 10<br/>
Processor:Intel Core i5-4430 / AMD FX-6300<br/>
Memory:8 GB RAM<br/>
Graphics:NVIDIA GeForce GTX 960 2GB / AMD Radeon R7 370 2GB<br/>
DirectX:Version 11<br/>
Network:Broadband Internet connection<br/>
Storage:30 GB available space<br/><br/>
Configuración recomendada*<br/><br/>
OS:64-bit Windows 7, Windows 8.1, Windows 10<br/>
Processor:Intel Core i5-6600K / AMD Ryzen 5 1600<br/>
Memory:16 GB RAM<br/>
Graphics:NVIDIA GeForce GTX 1060 3GB / AMD Radeon RX 580 4GB<br/>
DirectX:Version 11<br/>
Network:Broadband Internet connection<br/>
Storage:30 GB available space<br/>', 'pubg2.png');
INSERT INTO juego VALUES ('70', 110000, 10, 'f11.jpg', 'F1 2019', '25', 'Comenzarás tu carrera como piloto en la Fórmula 2, una nueva adición a la franquicia del juego, pero no te sientas tentado a subestimarla ni trates de pasar por ella demasiado rápido y sin esfuerzo - aun cuando tu corazón tenga como meta final el conducir en la Fórmula Uno - ya que tu desempeño en esta categoría puede llegar a afectar tu futura carrera en la Fórmula Uno.<br/>

En el modo historia, comenzarás tu carrera junto a otros dos pilotos: Lukas Webber and Devon Butler. Uno de ellos se convertirá en tu acérrimo rival y el otro en tu compañero de equipo – y siempre tendrás que esforzarte para superar a estos dos excelentes corredores, quienes aparecerán en todas las cinemáticas del modo historia, motivándote para ser mejor, alabándote cuando ganes una carrera (o enojándose contigo) y, en general, haciéndote sentir parte de una comunidad.', '0101', '2020-01-14', 'Configuración mínima*<br/>
OS:64 bit Versions of Windows 7, Windows 8, Windows 10<br/>
Processor:Intel i3 2130 / AMD FX4300<br/>
Memory:8 GB RAM<br/>
Graphics:Nvidia GTX640 / HD7750<br/>
DirectX:Version 11<br/>
Network:Broadband Internet connection<br/>
Storage:80 GB available space<br/>
Sound Card:DirectX Compatible Soundcard<br/><br/>
Configuración recomendada*<br/>
OS:64 bit Version of Windows 10<br/>
Processor:Intel i5 9600k / AMD Ryzen 5 2600x<br/>
Memory:16 GB RAM<br/>
Graphics:Nvidia GTX 1660ti / RX590<br/>
DirectX:Version 12<br/>
Network:Broadband Internet connection<br/>
Storage:80 GB available space<br/>
Sound Card:DirectX Compatible Soundcard<br/>', 'f12.png');
INSERT INTO juego VALUES ('90', 75000, 15, 'pvz1.jpg', 'Plantas contra Zombies GW2', '21', 'Prepara los Peashooters y prepárate para el más loco, más divertido juego de disparos en el popular universo : Plants vs Zombies Garden Warfare 2. Dr. Zomboss ha conquistado Suburbia y la transformó en un paraíso libre de plantas y lleno de zombies . Ahora es el turno de las plantas para ir a la ofensiva en el nuevo 24-jugador modo Asalto a base de plantas y recupera tu territorio. O bien, escoge tu lado en 4 jugadores co-op o juega en solitario. Con nuevos modos, clases, y un montón de humor, Plants vs Zombies Garden Warfare 2 te permite declarar la guerra en gravedad (y tus amigos!) como quieras.', '0101', '2019-12-11', 'Configuración mínima*<br/>
OS	Win 7 64<br/>
CPU	Core i5-650 3.2GHz / Phenom 9850 Quad-Core<br/>
RAM	4 GB<br/>
GPU	GeForce GT 640 / Radeon HD 5750 512MB<br/>
HDD	20 GB<br/><br/>
Configuración recomendada*<br/><br/>
OS	Win 10 64<br/>
CPU	Core i5-6600 3.3GHz / FX-8350<br/>
RAM	16 GB<br/>
GPU	GeForce GTX 970 4GB / Radeon R9 290<br/>
HDD	40 GB<br/>', 'pvz2.jpg');


--
-- Data for Name: listadeseos; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO listadeseos VALUES ('2', '20');


--
-- Data for Name: mensajes_usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: mensajes_usuario_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('mensajes_usuario_id_seq', 1, true);


--
-- Data for Name: nivel; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO nivel VALUES ('1', 'Novato', '100 puntos', 10);
INSERT INTO nivel VALUES ('2', 'Soldado', '200 puntos', 30);


--
-- Data for Name: noticia; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO noticia VALUES ('1', '2020-03-26', 'Apertura de Virtual Game', 'Todos son bienvenidos a la apertura de este gran sitio web, en donde podrás comprar tus videojuegos favoritos, hacer amigos, ver noticias, subir de nivel y mucho más. Recuerda que si tienes algún inconveniente con un juego debes acceder a la sección "Ayuda" del menú.

Esperamos que disfruten de la web y la compartan con sus amigos.', '2', 'noticia1.jpg');
INSERT INTO noticia VALUES ('2', '2020-03-26', 'Descuentos de locura', 'Debido a los últimos acontecimientos del coronavirus, estaremos brindando descuentos increíbles para tus juegos favoritos. <br/>

Virtual Game se siente totalmente comprometido con esta situación que se está presentando y esperamos que pronto se solucione. Por eso, te ofrecemos los mejores descuentos con lo que tu tiempo en casa no será aburrido y pasarás horas de diversión. <br/>

Te recordamos que no debes salir de casa en estos días, recuerda que no eres tú el que está en riesgo sino tus seres queridos.', '2', 'noticia2.jpg');
INSERT INTO noticia VALUES ('3', '2020-03-18', 'Teletrabajo en Virtual Game', 'En Virtual Game estamos muy comprometidos con nuestros trabajadores, por lo que les hemos brindado las herramientas necesarias de manera que puedan realizar su trabajo desde sus casas. Debido a esto, los horarios de atención se verán afectados y serán de 10 am a 6 pm. <br/>

Por otro lado, invitamos a toda la comunidad de Virtual Game que se queden en sus casas, recordándoles que esta es una situación bastante delicada y que el compromiso es de todos. <br/>

Finalmente, queremos agradecerles a todos por su paciencia en estos días, ya que por esta situación se ha desmejorado el tiempo de atención y entrega. <br/>', '2', 'noticia3.jpg');


--
-- Data for Name: reclamo; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO reclamo VALUES ('12', '30', '2', 'No funciona el juego al arrancarlo.', 'Pendiente', 'No me sirve el juego', '2020-03-27', 'El juego no funciona', '2', 'Computadora');


--
-- Data for Name: resena; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO resena VALUES ('2', '10', 4, '', '2020-03-27', 1);


--
-- Name: resena_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('resena_id_seq', 1, true);


--
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO usuario VALUES ('2', 'david', 'x', 12, 'david', 'xd2@gmail.com', 'xd123', 'M', '2020-02-02', 10, 'CO', '1', '448544', '4');
INSERT INTO usuario VALUES ('1', 'DAVID FELIPE', 'ROJAS', 10, 'davidrojas', 'davidrojas@gmail.com', 'web123', 'M', '1999-03-10', 10, 'CO', '2', '3124574875', '4');
INSERT INTO usuario VALUES ('3', 'JUAN FELIPE', 'PEREZ', 20000, 'juanperez', 'juanperez@gmail.com', '123', 'M', '1997-02-04', 10, 'CO', '1', '3475485124', '2');
INSERT INTO usuario VALUES ('4', 'JORGE ANDRES', 'DUARTE LOZADA', 100000, 'jorgeduarte', 'jorgeduarte@gmail.com', '456', 'M', '1998-07-14', 20, 'CO', '2', '3145487548', '3');


--
-- Name: amigos_usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY amigos_usuario
    ADD CONSTRAINT amigos_usuario_pkey PRIMARY KEY (id);


--
-- Name: carrito_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY carrito
    ADD CONSTRAINT carrito_pkey PRIMARY KEY (juego);


--
-- Name: listadeseos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY listadeseos
    ADD CONSTRAINT listadeseos_pkey PRIMARY KEY (id_juego);


--
-- Name: mensajes_usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY mensajes_usuario
    ADD CONSTRAINT mensajes_usuario_pkey PRIMARY KEY (id);


--
-- Name: pk_id_cargo; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY cargo
    ADD CONSTRAINT pk_id_cargo PRIMARY KEY (idcar);


--
-- Name: pk_id_clasificacion; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY clasificacion
    ADD CONSTRAINT pk_id_clasificacion PRIMARY KEY (idcla);


--
-- Name: pk_id_desarrollador; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY desarrollador
    ADD CONSTRAINT pk_id_desarrollador PRIMARY KEY (iddes);


--
-- Name: pk_id_empleado; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY empleado
    ADD CONSTRAINT pk_id_empleado PRIMARY KEY (idem);


--
-- Name: pk_id_factura; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY factura
    ADD CONSTRAINT pk_id_factura PRIMARY KEY (idfac);


--
-- Name: pk_id_juego; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY juego
    ADD CONSTRAINT pk_id_juego PRIMARY KEY (idjuego);


--
-- Name: pk_id_nivel; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY nivel
    ADD CONSTRAINT pk_id_nivel PRIMARY KEY (idniv);


--
-- Name: pk_id_noticia; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY noticia
    ADD CONSTRAINT pk_id_noticia PRIMARY KEY (idnot);


--
-- Name: pk_id_reclamo; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY reclamo
    ADD CONSTRAINT pk_id_reclamo PRIMARY KEY (idrec);


--
-- Name: pk_id_usuario; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT pk_id_usuario PRIMARY KEY (iduser);


--
-- Name: pk_registro; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY factura_juego
    ADD CONSTRAINT pk_registro PRIMARY KEY (id_juego, id_factura);


--
-- Name: resena_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY resena
    ADD CONSTRAINT resena_pkey PRIMARY KEY (id);


--
-- Name: unq_cedula; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY empleado
    ADD CONSTRAINT unq_cedula UNIQUE (cedula);


--
-- Name: unq_correo; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY desarrollador
    ADD CONSTRAINT unq_correo UNIQUE (correo);


--
-- Name: unq_nbnivel; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY nivel
    ADD CONSTRAINT unq_nbnivel UNIQUE (nbnivel);


--
-- Name: unq_nickname; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT unq_nickname UNIQUE (nickname);


--
-- Name: amigos_usuario_id_emisor_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY amigos_usuario
    ADD CONSTRAINT amigos_usuario_id_emisor_fkey FOREIGN KEY (id_emisor) REFERENCES usuario(iduser) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: amigos_usuario_id_receptor_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY amigos_usuario
    ADD CONSTRAINT amigos_usuario_id_receptor_fkey FOREIGN KEY (id_receptor) REFERENCES usuario(iduser) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: carrito_juego_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY carrito
    ADD CONSTRAINT carrito_juego_fkey FOREIGN KEY (juego) REFERENCES juego(idjuego) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: carrito_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY carrito
    ADD CONSTRAINT carrito_usuario_fkey FOREIGN KEY (usuario) REFERENCES usuario(iduser) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: id_cargo; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY empleado
    ADD CONSTRAINT id_cargo FOREIGN KEY (id_cargo) REFERENCES cargo(idcar) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: id_desarrollador; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY juego
    ADD CONSTRAINT id_desarrollador FOREIGN KEY (id_desarrollador) REFERENCES desarrollador(iddes) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: id_factura; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY factura_juego
    ADD CONSTRAINT id_factura FOREIGN KEY (id_factura) REFERENCES factura(idfac) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: id_juego; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY resena
    ADD CONSTRAINT id_juego FOREIGN KEY (id_juego) REFERENCES juego(idjuego) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: id_juego; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY reclamo
    ADD CONSTRAINT id_juego FOREIGN KEY (id_juego) REFERENCES juego(idjuego) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: id_juego; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY listadeseos
    ADD CONSTRAINT id_juego FOREIGN KEY (id_juego) REFERENCES juego(idjuego) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: id_juego; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY factura_juego
    ADD CONSTRAINT id_juego FOREIGN KEY (id_juego) REFERENCES juego(idjuego) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: id_nivel; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT id_nivel FOREIGN KEY (id_nivel) REFERENCES nivel(idniv) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: id_usuario; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY reclamo
    ADD CONSTRAINT id_usuario FOREIGN KEY (id_usuario) REFERENCES usuario(iduser) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: juego_id_clasificacion_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY juego
    ADD CONSTRAINT juego_id_clasificacion_fkey FOREIGN KEY (id_clasificacion) REFERENCES clasificacion(idcla) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: listadeseos_id_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY listadeseos
    ADD CONSTRAINT listadeseos_id_usuario_fkey FOREIGN KEY (id_usuario) REFERENCES usuario(iduser) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: mensajes_usuario_usuario_envio_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY mensajes_usuario
    ADD CONSTRAINT mensajes_usuario_usuario_envio_fkey FOREIGN KEY (usuario_envio) REFERENCES usuario(iduser) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: mensajes_usuario_usuario_recibe_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY mensajes_usuario
    ADD CONSTRAINT mensajes_usuario_usuario_recibe_fkey FOREIGN KEY (usuario_recibe) REFERENCES usuario(iduser) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: noticia_id_empleado_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY noticia
    ADD CONSTRAINT noticia_id_empleado_fkey FOREIGN KEY (id_empleado) REFERENCES usuario(iduser) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: resena_id_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY resena
    ADD CONSTRAINT resena_id_usuario_fkey FOREIGN KEY (id_usuario) REFERENCES usuario(iduser) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

