-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql264.hosting.combell.com:3306
-- Gegenereerd op: 28 jan 2019 om 15:36
-- Serverversie: 5.7.22-22
-- PHP-versie: 7.1.25-1+0~20181207224605.11+jessie~1.gbpf65b84

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ID276018_ma3`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `isb_acts`
--

CREATE TABLE `isb_acts` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `name_act` varchar(255) NOT NULL,
  `classname` varchar(255) NOT NULL,
  `description1` text NOT NULL,
  `description2` text NOT NULL,
  `locatie` int(11) NOT NULL,
  `dag` int(11) NOT NULL,
  `uur` varchar(255) NOT NULL,
  `locatie_adres` varchar(255) NOT NULL,
  `uitgelicht` int(11) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `soort` varchar(255) NOT NULL,
  `fblink` varchar(255) NOT NULL,
  `twitterlink` varchar(255) NOT NULL,
  `instalink` varchar(255) NOT NULL,
  `videolink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `isb_acts`
--

INSERT INTO `isb_acts` (`id`, `naam`, `name_act`, `classname`, `description1`, `description2`, `locatie`, `dag`, `uur`, `locatie_adres`, `uitgelicht`, `genre`, `soort`, `fblink`, `twitterlink`, `instalink`, `videolink`) VALUES
(0, 'Tukkersconnexion ', '', 'tukkers2', 'De twee gladiatoren dobberen over de woelige baren. Lansen en degens worden gekruist. In oerkreten bazelen zij bezopen oneliners.', '', 0, 25, 'Doorlopend', '', 0, 'Mobiel', 'Straatact', '', '', '', ''),
(7, 'The Flying Dutchmen', '', 'dutchmen', 'Een Amsterdamse jongleur en een onbevreesde Canadese éénwielerspecialist tonen met veel humor hun veelvoudige talenten.', '', 1, 24, '18u & 20u15', '', 0, 'Acrobatie', 'Voorstelling', '', '', '', ''),
(8, 'Cie Sitting Duck', '', 'duck', 'Alles staat klaar voor een geslaagde openingsplechtigheid van de cocktailbar. De champagne staat koud. Maar een ongeluk schuilt altijd in een klein hoekje…', '', 1, 24, '18u45 & 21u15', '', 1, 'Acrobatie Comedy', 'Voorstelling', '', '', '', ''),
(9, 'Cie XAV TO YILO', '', 'yilo', 'Dit dansduo, begeleid door een muzikant, ontdekt de sensuele liefde op de grond en aan het luchtkader. De choreografie mengt het horizontale met het verticale.', '', 1, 24, '19u30 & 22u', '', 1, 'Acrobatie', 'Voorstelling', '', '', '', ''),
(10, 'Krijmfresj', '', 'krijmfresj', 'Een steltenloper en een jongleur storten zich in een gekke wereld vol dansende kegels, balletjes … . Maar wat loopt dat verdwaald konijn daar te doen?', '', 2, 24, '18u45 & 21u15', '', 1, 'Acrobatie Comedy', 'Voorstelling', '', '', '', ''),
(11, 'Cie Des Cieux Galvanisés', '', 'calvanises', 'Een acrobaat treft aan zijn Chinese mast een accordeonspeler aan. Een poëtische, energieke en muzikale ontmoeting, waarin het wederzijdse begrip tussen de twee groeit.', '', 2, 24, '19u30 & 22u', '', 1, 'Muziek', 'Voorstelling', '', '', '', ''),
(12, 'Cirque hirsute ', '', 'hirsute', '“Les Butors” (= de roerdompen), die vreemde ‘hoempende’ geluiden voortbrengen, laten ons genieten van hun paringsdans op de roterende ladder van 7 m hoog. ', '', 2, 24, '20u15', '', 0, 'Acrobatie', 'Voorstelling', '', '', '', ''),
(13, 'Cie Lorsque Soudain', '', 'soudain', 'Met heel wat vuur, pyrotechniek en kluchtigheid herneemt dit viertal de ” Kanonman”: het traditionele nummer uit de circussen van weleer.', '', 0, 24, '22u45', '', 1, 'Spectaculair', 'Voorstelling', '', '', '', ''),
(14, 'Close-Act Theatre', '', 'closeact', 'Ogen trekken aan je voorbij. De onderzoekers van deze planeet zijn vreemd, grappig en angstaanjagend.', '', 0, 24, 'Doorlopend', '', 0, 'Mobiel', 'Straatact', '', '', '', ''),
(16, 'Pantoa', '', 'pantoa2', 'Een statige boom en een vogel zijn één geworden. Het bevallig vogelgezichtje bazelt een eigen taaltje en tiereliert er op los. Met de wervelende dans van de mooie Aziatische pop, die kwistig kushandjes geeft, wordt de extase van de lente gevierd.', '', 0, 24, 'Doorlopend', '', 1, 'Mobiel', 'Straatact', '', '', '', ''),
(17, 'Undercover Theater ', '', 'undercover', 'De sympathieke agenten rijden rond in een veel te kleine interventiewagen. Besparingen! Hun alcoholcontroles zijn echter niet wat u denkt! Boetes zijn er nauwelijks, wel positieve aanbevelingen!', '', 0, 24, 'Doorlopend', '', 0, 'Mobiel', 'Straatact', '', '', '', ''),
(18, 'Inpetto', '', 'inpetto', 'Een clownesk typetje hupt op veerstelten door de menigte en brengt alle mensen aan het gniffelen.', '', 0, 24, 'Doorlopend', '', 1, 'Mobiel', 'Straatact', '', '', '', ''),
(19, 'Dirk van \'t Sirk', '', 'dirk2', 'Deze Beverse dansvereniging, waar jezelf inleven en plezier beleven centraal staat, duikt plots op in de straten en verrast. Stilstaan wordt wel heel moeilijk!', '', 0, 24, 'Doorlopend', '', 0, 'Mobiel', 'Straatact', '', '', '', ''),
(21, 'Skriewer', '', 'skriewer', 'Eénmaal langs de kappersstoel van dit kapsalon gepasseerd, zal je leven nooit meer hetzelfde zijn. Opvallen doe je! Niets is onmogelijk voor dit wacko kapsalon.', '', 3, 24, '14u', '', 1, 'Gek Grappig', 'Straatact', '', '', '', ''),
(22, 'Dolle pret', '', 'pret', 'De krachtige ballonnen, die opa voor zijn kleinkind kocht, tillen hem op. Met zijn wandelstok kan hij nog net de bank vastgrijpen. Neem gerust plaats op de bank!', '', 7, 24, '15u', '', 1, 'Grappig', 'Straatact', '', '', '', ''),
(23, 'Dolle pret', '', 'pret', 'De krachtige ballonnen, die opa voor zijn kleinkind kocht, tillen hem op. Met zijn wandelstok kan hij nog net de bank vastgrijpen. Neem gerust plaats op de bank!', '', 2, 25, '17u', '', 0, 'Grappig', 'Straatact', '', '', '', ''),
(31, 'Clown Poefie', '', 'poefie', 'Clown Poefie uit Kieldrecht tovert knappe ballonfiguren uit zijn mouw.', '', 7, 25, '15u', '', 1, 'Clown Balonnen', 'Straatact', '', '', '', ''),
(32, 'Clown Poefie', '', 'poefie', 'Clown Poefie uit Kieldrecht tovert knappe ballonfiguren uit zijn mouw.', '', 2, 25, '17u', '', 0, 'Clown Balonnen', 'Straatact', '', '', '', ''),
(33, 'Mashara', '', 'maschara', 'Mascara uit Beveren tovert bij de kinderen de leukste gezichten tevoorschijn.', '', 2, 25, '18u', '', 0, 'Gezichtsbeschilderingen', 'Straatact', '', '', '', ''),
(34, 'Marino Punk', '', 'marino', 'Vrolijke accordeonmuziek met een hoek af', '', 2, 25, '18u', '', 0, 'Muziek', 'Straatact', '', '', '', ''),
(35, 'Sens Unique', '', 'sensunique', 'Dit vijftal gaat voluit voor een feestelijke mix van rock, folk en chanson française met weerhaken. Een macabere liefdesballade, een tango in de woestijn, een geschilderde wals: ze vertalen de overlevingsdrang van de zoekende ziel. A la mode en toch très unique. Live ontaarden de songs in energetische killers zonder standbymodus of chansons met kippenveloptie. Een sexy basriff of rauwe stem bewijzen dat Frans ook best brutaal kan zijn. Violen uit Melsele doen de rest. Wedden dat ook u niet genoeg kan krijgen van dit werelds feestje? Encore!', '', 2, 25, '20u', '', 1, 'Folk', 'Spiegelbeeld', '', '', '', ''),
(36, 'Slow Pilot', '', 'slowpilot', '“Gentle Intruder”, het debuut van Slow Pilot dat dit jaar het levenslicht zag, is allesbehalve een eerste kennismaking. De stem van frontman Pieter Peirsman klinkt waarschijnlijk bekend in de oren: hij is de eerste mannelijke stem van Hooverphonic  en maakte zijn televisiedebuut in ‘De beste singer-songwriter van Vlaanderen’ op Vier, waarna hij op sleeptouw werd genomen door K’s Choice en Jef Neve.\r\n<br>\r\nVia Neve werd Jasper Maekelberg (Faces On TV, Warhaus) ingelijfd als producer. Het album werd opgenomen in de Brusselse ICP-studio’s, het ideale decor voor de warme weemoed die in elk nummer naar binnen sluipt. Wars van trends of hypes ademt het album een tijdloos karakter uit. Er werd vakkundig aan elk nummer geschaafd, zonder daarbij alle splinters weg te halen. Zeker live kan het er stevig aan toe gaan.\r\n<br>\r\nDe debuutplaat schopte het tot Album Van De Week in De Lage Landen op Radio 2 en het titelnummer en “Anyone” werden ook door Radio 1 opgepikt. Ook het Nederlandse NPO Radio 2 strooide terecht met superlatieven en onlangs stonden ze nog in het voorprogramma van K’s Choice in Amsterdam! Hoog tijd dus om dit Bevers meesterwerk ook in eigen gemeente voor te stellen en staat Slow Pilot na de Gentse feesten en Fonnefeesten op Spiegelbeeld.', '', 2, 25, '22u', '', 1, 'Indie Pop', 'Spiegelbeeld', '', '', '', ''),
(37, 'Trio met 2', '', 'trio2', 'Wordt zelf circusartiest en wordt het derde lid van dit vrolijke trio.', '', 1, 25, '16u30', '', 0, 'Workshop', 'Straatact', '', '', '', ''),
(38, 'Gekkenfietsencircuit', '', 'fietsen', 'Scouts en Chiro Sint-Martinus On Wheels zetten drie dagen lang het centrum op stelten met knotsgek fiets plezier en diertjes op wielen. Lol trappen krijgt plots een andere betekenis.', '', 0, 25, 'Doorlopend', '', 0, 'Activiteit', 'Straatact', '', '', '', ''),
(39, 'Kunst op stelten', '', 'stelten1', 'Deze prachtig verlichte witte viervoeters zijn half vrouw half paard. Zij cre√´ren een magische sprookjessfeer.', '', 0, 25, 'Doorlopend', '', 0, 'Mobiel', 'Straatact', '', '', '', ''),
(40, 'Pantoa', '', 'pantoa1', 'De met wiegende lampionbloemen verlichte ‚Äúwensdroomboom‚Äù torent op sferische klanken boven de hoofden. Met haar wiebelende lichtboom laat Fiolina ons mee genieten van de dromen, die ze van de oude bomen wegplukte.', '', 0, 25, 'Doorlopend', '', 1, 'Mobiel', 'Straatact', '', '', '', ''),
(41, 'Tukkersconnexion', '', 'tukkers1', 'Met veel humor drijven de straffe Kapitein, de punctuele Cartograaf en de olijke Kok hun kleurrijke reuze vissen, door middel van tandwielen, kettingen en raderwerken, aan.', '', 0, 25, 'Doorlopend', '', 0, 'Mobiel', 'Straatact', '', '', '', ''),
(42, 'Ron Jaluai ', '', 'ron', 'Een interactieve, vurige en hilarische zoektocht naar mensen met ‚Äòeen alcoholtekort‚Äô. Een cocktail-consultatie waarbij de lachspieren het hard te verduren krijgen.', '', 0, 25, 'Doorlopend', '', 0, 'Mobiel', 'Straatact', '', '', '', ''),
(43, 'Castart ', '', 'castart', 'Deze Beverse dansvereniging, waar jezelf inleven en plezier beleven centraal staat, duikt plots op in de straten en verrast. Stilstaan wordt wel heel moeilijk!', '', 0, 25, 'Doorlopend', '', 0, 'Mobiel', 'Straatact', '', '', '', ''),
(44, 'Dolle pret', '', 'pret', 'De krachtige ballonnen, die opa voor zijn kleinkind kocht, tilden hem op. Met zijn wandelstok kon hij nog net de bank vastgrijpen. Zo wacht hij nu op zijn kleinkind. Neem gerust plaats op de bank!', '', 6, 25, '19u - 20u30', '', 1, 'Installatie', 'Straatact', '', '', '', ''),
(45, 'Skriewer', '', 'skriewer', 'E√©nmaal langs de kappersstoel van dit kapsalon gepasseerd, zal je leven nooit meer hetzelfde zijn. Opvallen doe je! Niets is onmogelijk voor dit wacko kapsalon.', '', 3, 25, '18u45-21u', '', 0, 'Gek Grappig', 'Straatact', '', '', '', ''),
(46, 'De Toâpe Geraapte ', '', 'geraapte', 'Deze rondwandelende halve garen staan garant voor grappige ontmoetingen en liederen die elke vrouw charmeren. Van snoeiharde rock tot betoverende a-capella.', '', 0, 24, 'Doorlopend', '', 0, 'Mobiel', 'Straatact', '', '', '', ''),
(47, 'Tomcat', '', 'tomcat', 'Geen veredeld balorkest, wel smaakvolle covers voor jongeren √©n oude zakken! Op het repertoire van TomCat staat een breed spectrum aan„ÄÄmuziek. Van pop en rock over disco en soul naar latino en zelfs house. Dansbare nummers die overgoten worden met een flinke portie ambiance', '', 10, 24, '20u', '', 0, 'Muziek', 'Straatact', '', '', '', ''),
(48, 'Tennesse sun', '', 'tennesse', 'Met de vierkoppige band Tennessee Sun flits je terug in de tijd! Oorspronkelijk opgericht als een Johnny Cash tributeband is het repertoire inmiddels uitgebreid met pareltjes uit de jaren 50 en 60. Laat je onderdompelen in een dosis rockabilly, rock-‚Äòn-roll en country.', '', 5, 24, '20u30', '', 1, 'Muziek ', 'Straatact', '', '', '', ''),
(49, 'Gekkenfietsencircuit', '', 'fietsen', 'Scouts en Chiro Sint-Martinus On Wheels zetten drie dagen lang het centrum op stelten met knotsgek fiets plezier en diertjes op wielen. Lol trappen krijgt plots een andere betekenis.', '', 1, 24, 'Doorlopend', '', 1, 'Activiteit', 'Straatact', '', '', '', ''),
(50, 'Reuzen van Beveren', '', 'reuzen', 'Sefken, Diederik, Aldegonde, Cieske, Brigand, Regina, Melkboerinneke, Birken, Judocus en Lodde bekijken het feest vanuit de hoogte.', '', 7, 24, 'Doorlopend', '', 1, 'Reuze poppen', 'Voorstelling', '', '', '', ''),
(51, 'Cie Krak', '', 'krak', 'Victor is jarig en krijgt van het publiek een cadeau dat uiteindelijk zijn leven zal veranderen. Visuele en absurde humor voor en in een caravan. Met publieksinteractie!', '', 1, 25, '14u30 & 16u45', '', 1, 'Toneel', 'Voorstelling', '', '', '', ''),
(52, 'Duo Musa', '', 'musa', 'Slagen Roos en Salim er in, met o.a. acrobatie en vliegwerk aan de trapeze, de 8 m hoge fabriek draaiende te houden? Kunnen ze hun eerste smakelijke lolly maken?', '', 1, 25, '15u15 & 17u30', '', 1, 'Acrobatie', 'Voorstelling', '', '', '', ''),
(53, 'Trio met 2', '', 'trio1', 'De jonge circusartiesten Zakki en Bobo uit Beveren zijn aan het slapen. Lees de brief voor en ga mee in hun levendige dromen … .', '', 1, 25, '15u45 & 16u10', '', 0, 'Clown Humor', 'Voorstelling', '', '', '', ''),
(54, 'Dirk van \'t Sirk', '', 'dirk1', '“Een dagje relaxen vraagt veel inspanning.” Een mimische clown act, doorspekt met slapstick en absurde humor.', '', 2, 25, '16u15', '', 0, 'Clown Humor', 'Voorstelling', '', '', '', ''),
(55, 'Kunst op Stelten', '', 'stelten2', 'De prachtige Lava Queens op stelten zorgen met hun verlichte hoepelrokken voor een sprookjesachtige sfeer. Een vrolijk zonnig tafereel.', '', 0, 25, 'Doorlopend', '', 0, 'Mobiel', 'Straatact', '', '', '', ''),
(56, 'Cie Maintomano', '', 'maintomano', 'Een koppel acteert op diverse houten haspels en combineert dit met acrobatie, messen gooien, evenwicht en objectmanipulatie.', '', 1, 26, '14u30 & 16u30', '', 1, 'Acrobatie', 'Voorstelling', '', '', '', ''),
(57, 'Fabuloka', '', 'fabuloka', 'De artiesten gaan op  zoek naar hun schaduw en gaan er mee in duet of in duel, met technieken zoals acrobatie, mime, theater en maskerspel.', '', 1, 26, '15u15 & 17u15', '', 0, 'Mime Acrobatie', 'Voorstelling', '', '', '', ''),
(58, 'Duo Kaos', '', 'kaos', 'Time to Loop is een verhaal over beweging, transformatie en liefde. De artiesten brengen dit op een elegante en acrobatische wijze en dit onder meer op de fiets. ', '', 1, 26, '16u & 18u', '', 1, 'Acrobatie', 'Voorstelling', '', '', '', ''),
(59, 'Men in coats', '', 'menincoats', 'Een explosief duo, absurd en hilarisch. Hun handelsmerk is sprankelende visuele humor en  surrealistische slapstick die even grappig als inventief is.', 'Men in coats is 1 van de grootsten in de comedy, met verschillende prijzen en internationale bekendheid is iedereen zeer benieuwd naar wat ze nu weer zullen uitsteken.', 2, 26, '14u & 16u25', '', 1, 'Slapstick Humor', 'Voorstelling', '/MenInCoats/', '/menincoats', '/men_in_coats/?hl=nl', 'https://www.youtube.com/embed/4Z6WmIfa1xc'),
(60, 'Ben Zuddhist', '', 'zuddhist', 'De voorstelling zit vol hilarische komedie, improvisatie, circustechnieken en balanceerstunts. Het publiek zet Ben Zuddhist op weg naar een vurige finale.', '', 2, 26, '14u30 & 16u30', '', 0, 'Acrobatie', 'Voorstelling', '', '', '', ''),
(61, 'Ale Risorio', '', 'risorio', 'Een onemanshow met veel humor in een universele taal. Een clown, onschuldig, hartverscheurend, brutaal en meester van de onzin. Veel interactie met het publiek.', 'Geboren in Buenos Aires, Argentinië onder de naam Alejandro Muñoz.\r\n<br />\r\n<br />\r\nZijn vermogen om te entertainen, samen met de smeekbeden of zijn meest fervente bewonderaars, moedigen hem aan om de wereld van de podiumkunsten te betreden.\r\n<br />\r\n<br />\r\nIn 1998 richtte hij het duo \'Los Risorios\' op dat deelneemt aan vele festivals in Latijns-Amerika en Spanje met de show \'Es lo que hay\'.\r\n<br />\r\n<br />\r\nSinds 2005 woont hij in Barcelona, Spanje, waar hij zijn solo-optreden \'AleGrativO\' voorbereidde, gepresenteerd in verschillende festivals, Nederland, Portugal, Frankrijk, Spanje, België, Duitsland, Oostenrijk, Zwitserland, Italië en andere plaatsen.', 2, 26, '15u15 & 17u15', '', 1, 'Onemanshow Humor', 'Voorstelling', '/Ale-Risorio-y-sus-otros-357107967639884/', '/AleRisorio', '/alerisorio/?hl=nl', 'https://www.youtube.com/embed/7HqKtuMi-Y8'),
(62, 'Cie avis de Tempête', '', 'tempete', 'Op een luchtkader van 7 m hoog loert het gevaar om de hoek. Elke acrobaat tart dapper en gracieus de leegte om hem het gevoel te geven dat hij leeft. Met live rock-‘n-roll! ', '', 2, 26, '18u30', '', 1, 'Acrobatie Rock-\'n-roll', 'Voorstelling', '', '', '', ''),
(63, 'Cie Paris Bénarès', '', 'benares', 'Een onbekend eiland dreigt te vergaan. Op de rug van “OISÔH”, een reuzenvogel van 7 bij 5 m, worden twee verkenners uitgestuurd om veiligere oorden op te zoeken en zo landen ze … in Beveren.', '', 0, 26, 'Doorlopend', '', 0, 'Mobiel', 'Straatact', '', '', '', ''),
(64, 'Kunst op stelten', '', 'stelten3', 'De twee steltlopende stijve ouders op wandel met hun huilende baby in een te grote kinderwagen en hun zoontje van zes zijn een lust voor het  oog. De kleine humoristische acts, die zo nu en dan opvoeren, geven het geheel extra cachet.', '', 0, 26, 'Doorlopend', '', 0, 'Mobiel', 'Straatact', '', '', '', ''),
(65, 'Medusa\'s world', '', 'medusa', 'Dit lief verlegen, schattig, sierlijk, speels clowntje danst met haar roze waaiers en glittert in het zonlicht. Een prachtige verschijning met haar lange benen.', '', 0, 26, 'Doorlopend', '', 1, 'Mobiel', 'Straatact', '', '', '', ''),
(66, 'Stiltlife streettheater', '', 'stiltlife', 'Naranja, een straattheater act op hoge stelten, is fris fruitig vrolijk. Zoet sappig en een tikkeltje zuur. Speels ondeugend en verleidelijk sensueel. Feestelijk geurend naar zomerse sinaasappels.', '', 0, 26, 'Doorlopend', '', 0, 'Mobiel', 'Straatact', '', '', '', ''),
(67, 'Zeepbellencompagne', '', 'zeepbellen', 'Francesco zoekt naar de beste locatie om één grote reuzenzeepbel van 5 meter lang uit zijn zeepbellenstokjes te toveren. Een visuele en interactieve act met magie en improvisatie.', '', 0, 26, 'Doorlopend', '', 1, 'Mobiel', 'Straatact', '', '', '', ''),
(68, 'Ballonnenpiraat', '', 'ballonnenpiraat', 'De Ballonnenpiraat uit Beveren tovert in enkele minuten de tofste figuurtjes uit zijn mouw. Zeg nu zelf welk kind is er niet blij met een reuze octopus, een mooie kat of een coole auto, … .', '', 0, 26, 'Doorlopend', '', 0, 'Ballonnen', 'Straatact', '', '', '', ''),
(69, 'Dolle pret', '', 'pret', 'De krachtige ballonnen, die opa voor zijn kleinkind kocht, tilden hem op. Met zijn wandelstok kon hij nog net de bank vastgrijpen. Zo wacht hij nu op zijn kleinkind. Neem gerust plaats op de bank!', '', 4, 26, '15u', '', 0, 'Grappig', 'Straatact', '', '', '', ''),
(70, 'Tukkersconnexion ', '', 'tukkers3', 'Een onvoorspelbaar komische gokkast uit de roerige jaren twintig met binnenin drie illustere menselijke figuren. Haal de hendel over en ze komen één voor één voorbij. Is het geluk aan uw zijde? Drie op een rij is natuurlijk … JACKPOT!', '', 3, 26, '14u', '', 0, 'Humor', 'Straatact', '', '', '', ''),
(71, 'Kartje kilo', '', 'kilo', 'Deze zender geeft bij elke publieke beweging live en rechtstreeks een sportverslaggeving. Tussendoor hoor je krakende vinylplaten, jingles en reclame.', '', 3, 26, '14u30', '', 1, 'Radio', 'Straatact', '', '', '', ''),
(72, 'Levend theater', '', 'levendtheater', 'Een sprookjesachtig typetje met haar nostalgisch suikerspinnenkraam. Gratis deelt zij suikerspinnen uit aan jong en oud.', '', 4, 26, '14u', '', 0, 'Suikerspin', 'Straatact', '', '', '', ''),
(74, 'Reynaert Ridders', '', 'ridders', 'Demonstraties van zwaardvechten en middeleeuws koken.  Kinderen zijn welkom op de kiddy battle en schietstand.', '', 4, 26, '14u', '', 0, 'Demonstraties Zwaardvecht', 'Straatact', '', '', '', ''),
(75, 'Skriewer', '', 'skriewer', 'Eénmaal langs dit kapsalon gepasseerd, zal je leven nooit meer hetzelfde zijn. Opvallen doe je!', '', 3, 26, '14u', '', 0, 'Gek Grappig', 'Straatact', '', '', '', ''),
(76, 'Maschara', '', 'maschara', 'Mascara uit Beveren tovert bij de kinderen de leukste gezichten tevoorschijn.', '', 3, 26, '14u30', '', 0, 'Gezichtbeschildering', 'Straatact', '', '', '', ''),
(77, 'Maschara', '', 'maschara', 'Mascara uit Beveren tovert bij de kinderen de leukste gezichten tevoorschijn.', '', 10, 26, '14u', '', 0, 'Gezichtbeschildering', 'Straatact', '', '', '', ''),
(78, 'Rock au vin', '', 'vin', 'Een mobiele minifanfare wandelt spelend tussen de terrasjes door en brengt de muziek tot bij u. Intiem en gezellig maar evengoed ambiance en dansbaar.', '', 5, 26, '16u', '', 0, 'Fanfare', 'Straatact', '', '', '', ''),
(79, 'Rock au vin', '', 'vin', 'Een mobiele minifanfare wandelt spelend tussen de terrasjes door en brengt de muziek tot bij u. Intiem en gezellig maar evengoed ambiance en dansbaar.', '', 8, 26, '18u', '', 1, 'Fanfare', 'Straatact', '', '', '', ''),
(80, 'Gekkefietsencircuit', '', 'fietsen', 'Scouts Sint-Martinus On Wheels zet drie dagen lang het centrum op stelten met knotsgek fietsplezier en diertjes op wielen. Lol trappen krijgt plots een andere betekenis.', '', 1, 26, '14u', '', 0, 'Activiteit', 'Straatact', '', '', '', ''),
(81, 'Reuzen van Beveren', '', 'reuzen', 'Sefken, Diederik, Aldegonde, Cieske, Brigand, Regina, Melkboerinneke, Birken, Judocus en Lodde bekijken het feest vanuit de hoogte.', '', 7, 26, 'Doorlopend', '', 0, 'De reuzen', 'Straatact', '', '', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `isb_barbecue`
--

CREATE TABLE `isb_barbecue` (
  `id` int(11) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `personen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `isb_barbecue`
--

INSERT INTO `isb_barbecue` (`id`, `voornaam`, `naam`, `email`, `personen`) VALUES
(1, 'jfdklsdj', 'dlskjdflskj', 'dlskjdlsfkj@kjdfslksjdfkl', 4),
(2, 'dqsqsd', 'd', 'sd', 2),
(3, 'df', 'eddf', 'dfdf@df', 2),
(4, 'dsfjkldsfjk', 'dklsjlkdsfjkl', 'kdlfsjlfkdsj@kldfjlkdfjsk', 4),
(5, 'Lennon', 'Puype', 'nostrik@gmldskf', 5),
(6, 'Lennon', 'Puype', 'lennonpuype@hotmail.com', 8),
(7, 'Lennon', 'Puype', 'jdfslksfjdlk@jdkfljdflks', 5),
(8, 'dsjfklfdsjkl', 'jkljdklfsjlsd', 'lkdsfjlkdsfj@kldsjlkdfsj', 5),
(9, 'dkdjfshjk', 'jdfskjdsfhjk', 'sfdfsd@dsfdfsfds', 2),
(10, 'dfsdsf', 'sdfdfs', 'dkjdsfhfkds@sdfdfs', 3),
(11, 'fds', 'dsf', 'dsf@sfddf', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `isb_nieuwsbrief`
--

CREATE TABLE `isb_nieuwsbrief` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `isb_nieuwsbrief`
--

INSERT INTO `isb_nieuwsbrief` (`id`, `email`) VALUES
(1, 'dfdfs@dsdfs'),
(2, 'dsfdfs@dfsfds');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `isb_acts`
--
ALTER TABLE `isb_acts`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `isb_barbecue`
--
ALTER TABLE `isb_barbecue`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `isb_nieuwsbrief`
--
ALTER TABLE `isb_nieuwsbrief`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `isb_acts`
--
ALTER TABLE `isb_acts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT voor een tabel `isb_barbecue`
--
ALTER TABLE `isb_barbecue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT voor een tabel `isb_nieuwsbrief`
--
ALTER TABLE `isb_nieuwsbrief`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
