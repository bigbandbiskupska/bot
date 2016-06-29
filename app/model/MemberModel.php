<?php

namespace App\Model;

use Nette;
use Tulinkry;

class MemberModel extends Tulinkry\Model\BaseModel
{

	private $sections;
	private $oldmembers;

	public function __construct ()
	{

		$lorem = ""; /* "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum."; */

		$this -> sections = array (
			"dirigent" => [
				(object) [
					"name" => "Milan Tolkner",
					"instrument" => "dirigent",
					"description" => "Milan Tolkner zasvětil svůj život hudbě. Je sólistou Hudby Hradní stráže a Policie ČR, přičemž při své profesionální dráze ještě vychovává mladé muzikanty nejen v Big Bandu Biskupská. Mladým hudebníkům umožňuje zažít, jaký je to pocit rozdávat druhým radost z hudby.",
					"dirigent" => true,
					"male" => true,
					"coords" => [ 711,278,698,355,703,393,736,406,790,411,797,340,798,300,781,266,753,262,755,239,736,233,724,255,729,268,726,267,727,268 ],
					"flash" => false,
				],
			],
			"zpěvačka" => [
				(object) [
					"name" => "Kateřina Tošnarová",
					"instrument" => "zpěv",
					"description" => "Zpívat začala v 6 letech v DPS Jiskřička. V roce 2007 se začala věnovat sólovému zpěvu, od roku 2011 zpívá pod vedením Václava Třísky v ZUŠ Biskupská. Je členkou pěveckého sboru Pedagogické fakulty UK v Praze, studuje anglický jazyk a chová čtyři kočky.",
					"male" => false,
					"coords" => [ 805,176,804,149,824,146,835,161,837,187,850,197,856,225,845,282,833,324,835,371,838,391,827,388,806,289,820,235,820,186,804,177,805,178 ],
					"flash" => false,
				],
			],
			"flétny" => [
				(object) [
					"name" => "Markéta Veverková",
					"instrument" => "flétna",
					"description" => "Na flétnu hraje od svých 11 let, je absolventkou třídy Pavla Zajíce. V roce 2010 stála u zrodu big bandu pod vedením Milana Tolknera. Kromě hudby se věnuje informatice, tenisu a fotografování.",
					"coords" => [ 712,137,700,145,701,157,696,180,686,195,688,382,697,359,707,274,720,264,733,231,748,226,746,186,729,168,719,142 ],
					"male" => false,
					"flash" => false,
				],
				(object) [
					"name" => "Eva Pelikánová",
					"instrument" => "flétna",
					"description" => "Hře na příčnou flétnu se věnuje od 12 let, kdy po letech ukončila mučení zvané hra na housle. Do ZUŠ Biskupská přestoupila v roce 2014 ze ZUŠ Dobřichovice. Mezi své záliby řadí divadlo, výtvarné umění a cestování. Nejspíš zůstane věčným studentem.",
					"coords" => [ 606,157,592,161,594,178,578,208,571,228,575,276,600,302,603,314,605,382,629,389,618,227,631,196,618,184,614,157 ],
					"male" => false,
					"flash" => false,
				],
			],
			"klarinety" => [
				(object) [
					"name" => "Vojtěch Formánek",
					"instrument" => "klarinet",
					"description" => "Na klarinet hraje od svých 11 let, kdy začal docházet do třídy Antonína Polívky. Během let působil v několika orchestrech pod ZUŠ Biskupská, ale teprve angažmá pod Milanem Tolknerem ho donutilo pořádně cvičit. Mezi jeho další záliby patří motorismus, fotografování, psaní a ponožky.",
					"male" => true,
					"coords" => [ 544,236,533,243,533,258,534,275,510,291,512,346,511,375,533,398,600,403,603,343,601,311,592,297,562,268,557,247,547,236 ],
					"flash" => true,
				],
				(object) [
					"name" => "Hanka Vacková",
					"instrument" => "klarinet",
					"description" => "Vystudovala gymnázium v Praze a v současné době se věnuje studiu na vysoké škole. K hudbě se dostala už jako malá, začínala hrou na akordeon, zobcovou flétnu a zpěvem. Postupem času přidala další druhy fléten, kytaru, housle a v roce 2012 klarinet. Ve volném čase se věnuje zvířatům, četbě a rukodělné tvorbě.",
					"coords" => [ 94,151,82,158,82,172,87,179,68,191,58,206,65,234,62,257,75,313,77,380,127,385,123,326,134,228,110,158 ],
					"male" => false,
					"flash" => false,
				],
				(object) [
					"name" => "Eliška Šimůnková",
					"instrument" => "klarinet",
					"description" => $lorem,
					"male" => false,
					"coords" => [ 485,307,494,376,491,385,510,375,508,342,506,288,527,270,522,195,504,161,493,161,484,168,481,192,473,217,477,272 ],
					"flash" => false,
				],
				(object) [
					"name" => "Václav Koucký",
					"instrument" => "klarinet",
					"description" => "Proč vlastně i po téměř 20 letech stále tak rád zasedá za notový part s klarinetem v ruce? No proto, že to je výborná relaxace a taky skvělá zábava si s dobrou kapelou zahrát známé melodie. A jelikož pracovní vytížení stále narůstá, musí narůstat i hudební relaxace – třeba v Big Bandu Biskupská.",
					"male" => true,
					"coords" => [  ],
					"flash" => false,
				],
				(object) [
					"name" => "Eliška Dundová",
					"instrument" => "klarinet",
					"description" => $lorem,
					"male" => false,
					"coords" => [  ],
					"flash" => false,
				],
			],
			"saxofony" => [
				(object) [
					"name" => "Matyáš Starý",
					"instrument" => "saxofon",
					"description" => "Sluníčkář, idealista, kavárenský povaleč, Pražák, cinefil, bibliofil, keplerák, filmovědec, volnočasový filozof, saxofonista, amatérský broukač, fotbalový analytik, příležitostný squashista, pohodlný běžec, návštěvník posilovny, přeborník v Bangu, osadník z Katanu, popíječ piva, DEZEnazi a latentní bavič.",
					"male" => true,
					"coords" => [ 268,137,262,154,267,171,240,188,239,207,241,233,247,261,273,270,275,298,302,326,296,265,306,211,284,175,284,146,275,135,272,135,272,136,272,135 ],
					"flash" => false,
				],
				(object) [
					"name" => "Tereza Čivrná",
					"instrument" => "saxofon",
					"description" => "Na různé druhy saxofonů hraje již {since: 2003}. Poté, co ukončila ZUŠ ve třídě Jiřího Kobra, se rozhodla věnovat samostudiu. Se zkušenostmi z vrchlabského big bandu se na podzim 2013 vnutila do Big bandu Biskupská. Mimo hudbu je zapálenou architektkou.",
					"male" => false,
					"coords" => [ 634,389,645,375,633,316,621,250,620,229,633,195,650,188,651,160,668,161,678,169,674,192,680,202,681,294,669,386 ],
					"flash" => false,
				],
				(object) [
					"name" => "František Čejka",
					"instrument" => "saxofon",
					"description" => "Něco jako fyzik, něco jako autor. Člověk na pomezí několika oborů, jehož zájmem není ani tak hra na saxofon, jako to, co vlastně bude v životě vůbec dělat. Občas dabuje, občas hraje divadlo, občas něco modeluje. Jo a taky učí děti. To je docela fajn. Má doma boxera. Jakože psa. Ale to železo taky. Miluje svoji intuici, vlasy a Slavii.",
					"male" => true,
					"coords" => [ 333,173,342,164,335,153,336,133,350,132,360,138,357,149,349,162,349,184 ],
					"flash" => false,
				],
				(object) [
					"name" => "Markéta Veselá",
					"instrument" => "saxofon",
					"description" => "Vystudovala gymnázium v Praze a nyní studuje na vysoké škole. Od dětství se věnuje hudbě – začala hrou na flétnu, pokračovala klarinetem a kytarou, v současnosti hraje na saxofon. Ve volném čase se věnuje cestování, sportu a četbě.",
					"male" => false,
					"coords" => [ 228,192,242,170,234,153,222,152,217,160,218,164,222,176,221,185 ],
					"flash" => false,
				],
				(object) [
					"name" => "Klára Tužilová",
					"instrument" => "saxofon",
					"description" => $lorem,
					"male" => false,
					"coords" => [ 285,147,302,155,303,182,286,175,286,173 ],
					"flash" => false,
				],
				(object) [
					"name" => "František Volf",
					"instrument" => "saxofon",
					"male" => true,
					"description" => $lorem,
					"coords" => [ 198,167,195,193,175,213,165,256,168,277,159,288,168,303,185,299,191,385,202,389,206,382,195,374,189,355,195,347,214,344,228,311,238,304,236,218,218,195,219,171,213,163 ],
					"flash" => false,
				],
				(object) [
					"name" => "Jindřich Polák",
					"instrument" => "saxofon",
					"description" => "K tenorsaxofonu přilnul až ve svých 17 letech jako samouk, členem big bandu je však již od jeho počátku. Pokud zrovna nevymýšlí jazzové chorusy, věnuje se studiu práv, deskovým hrám či klasické literatuře.",
					"male" => true,
					"coords" => [ 241,403,325,402,307,383,318,350,274,300,267,268,251,264,243,275,246,300,224,323,212,348,191,355,197,375,226,374,228,385 ],
					"flash" => false,
				],
				(object) [
					"name" => "Martin Kalfař",
					"instrument" => "saxofon",
					"description" => "Na saxofon hraje od svých 14 let. Do bigbandu přišel jako mělnická naplavenina hledající angažmá ve víru velkoměsta v roce (a teď nevím, myslím že 2012). Kromě hudby se věnuje sportu všeho druhu a poznávání světa.",
					"male" => true,
					"coords" => [ 833,155,836,133,855,133,860,150,857,167,866,175,849,191,841,186,839,165 ],
					"flash" => false,
				],
				(object) [
					"name" => "Tereza Kindlová",
					"male" => false,
					"instrument" => "saxofon",
					"description" => "Hrála od šesti let na flétnu, později přestoupila na klarinet, s nímž v orchestru začínala. Když začala být nouze o saxofony, radostně přijala nový úkol a začala se učit na tenor saxofon. Má ráda zmrzlinu, přírodu, pastelky a bojí se pavouků. Je šťastná, když může něco vytvářet rukama a nemusí u toho mluvit.",
					"coords" => [ 922,179,934,173,931,144,943,133,959,137,968,157,964,174,985,188,991,213,989,277,979,278,979,380,984,397,932,390,939,373,930,301,916,270,926,224,927,201 ],
					"flash" => false,
				],
				(object) [
					"name" => "Irena Eichlerová",
					"instrument" => "saxofon",
					"description" => $lorem,
					"male" => false,
					"coords" => [  ],
					"flash" => false,
				],
			],
			"trumpety" => [
				(object) [
					"name" => "Kryštof Tulinger",
					"instrument" => "trumpeta",
					"description" => "Hře na trumpetu se věnuje již {since: 2000} a je absolventem třídy Milana Tolknera. Big band, pod vedením M. Tolknera, zakládal společně s hrstkou ostatních v roce 2010. Mimo hudbu ho zajímá informatika a profesionální gaučing.",
					"male" => true,
					"coords" => [ 760,146,774,138,788,150,784,169,814,185,816,234,803,287,830,407,805,389,798,347,799,299,782,266,758,260,757,237,752,230,753,206,763,184,760,148 ],
					"flash" => false,
				],
				(object) [
					"name" => "Kryštof Knapp",
					"instrument" => "trumpeta",
					"male" => true,
					"description" => "Člen big bandu od roku 2013. Zprvu byla jeho pozice nejistá, dnes by se již dalo říci, že se pevně usadil na pozici pravého záložníka. Často ho můžeme vidět v akcích s hrotovým útočníkem a kapelním géniem Haštalem Hapkou. Rád čte a věnuje se hudbě.",
					"coords" => [ 457,340,469,268,472,201,455,176,464,151,450,139,431,145,429,157,433,167,427,175,407,187,397,219,395,255,420,268,427,288,419,293,441,307 ],
					"flash" => false,
				],
				(object) [
					"name" => "Anastázie Chalupová",
					"instrument" => "trumpeta",
					"description" => "Na trumpetu hraje od svých 10 let, přičemž poslední dva roky je jejím učitelem Milan Tolkner. Studuje na gymnáziu a kromě hudby se odmalička věnuje tanci, a to především moderně a baletu.",
					"male" => false,
					"coords" => [ 545,157,536,187,527,207,527,247,543,231,555,240,564,259,573,269,568,223,573,206,564,159,553,155 ],
					"flash" => true,
				],
				(object) [
					"name" => "David Hübner",
					"instrument" => "trumpeta",
					"description" => $lorem,
					"male" => true,
					"coords" => [ 359,149,352,164,355,178,350,188,335,201,343,321,361,325,376,303,388,297,389,266,396,210,375,178,377,152,365,146 ],
					"flash" => false,
				],
				(object) [
					"name" => "Václav Doležal",
					"instrument" => "trumpeta",
					"description" => $lorem,
					"male" => true,
					"coords" => [  ],
					"flash" => false,
				],
				(object) [
					"name" => "Filip Matějka",
					"instrument" => "trumpeta",
					"description" => "Sedmým rokem studuje na Gymnáziu Christiana Dopplera. Členem big bandu je od ledna 2010. Hře na trumpetu se věnuje {since: 2008}, v roce 2016 absolvoval v ZUŠ Štefánikova, kde studoval u Kamila Brož a Martina Novotného. Hraje Frisbee Ultimate a podílí se na tvorbě her, aplikací a webů.",
					"male" => true,
					"coords" => [ 320,141,308,147,313,167,304,184,299,262,306,329,318,349,326,374,342,381,336,253,332,198,342,183,330,174,334,159,326,143 ],
					"flash" => false,
				],
				(object) [
					"name" => "Antonín Bolardt",
					"instrument" => "trumpeta",
					"description" => $lorem,
					"male" => true,
					"coords" => [ 730,163,725,132,746,126,756,149,760,171,761,181,749,202,747,184 ],
					"flash" => false,
				],
			],
			"lesní rohy" => [
				(object) [
					"name" => "Simona Murínová",
					"instrument" => "lesní roh",
					"description" => "Na lesní roh hraje od svých 11 let, přičemž předtím se učila na klavír v ZUŠ Zbraslav. Patři mezi nejmladší členy orchestru, přesto pamatuje první koncerty z roku 2010. Mezi její zájmy patří jízda na koni, procházky se psem a vaření.",
					"male" => false,
					"coords" => [],
					"flash" => false,
				],
			],
			"trombóny" => [
				(object) [
					"name" => "Martin Hübner",
					"instrument" => "trombón",
					"description" => "Hře na pozoun se věnuje od svých 11 let. Je bývalým žákem Jana Jakubce a v současnosti studuje na KJJ ve třídě Přemka Tomšíčka. Kromě Big Bandu Biskupská je členem kapely J.J. BigBand. V big bandu hraje od roku 2011, kdy svým příchodem rozšířil pozounovou sekci na celkový počet jednoho člena. Mezi jeho záliby patří sóložroutství a vyhřívání se na výsluní kapelníkovy přízně.",
					"male" => true,
					"coords" => [ 391,271,390,294,388,298,378,308,359,330,354,368,385,395,445,396,458,363,448,328,438,308,415,296,423,280,413,266,404,262 ],
					"flash" => false,
				],
				(object) [
					"name" => "Leo Lukáš",
					"instrument" => "trombón",
					"description" => $lorem,
					"male" => true,
					"coords" => [ 198,164,188,151,194,131,214,132,222,151,215,162 ],
					"flash" => false,
				],
				(object) [
					"name" => "Zdeněk Soukup",
					"instrument" => "trombón",
					"male" => true,
					"description" => $lorem,
					"coords" => [ 166,137,150,153,141,182,127,202,134,230,142,249,137,381,187,378,185,303,166,302,155,284,164,248,173,205,192,188,189,162,176,139,170,137 ],
					"flash" => false,
				],
			],
			"klávesy" => [
				(object) [
					"name" => "Haštal Hapka",
					"instrument" => "klávesy",
					"description" => "
//Samo písmo má před tímto hochem úctu a strach, a tak se k zemi sklání. Proto se text zdá být napsán kurzívou.//

//Haštal Hapka, někdy také Hašty, Haštal nebo jen Hapka, je klavíristou a nejdůležitější součástí našeho tělesa. Jeho krása, energie, inteligence, vtip a hlavně jiskrná smyslnost nutí ostatní hráče dívat se naň s hlavou upřenou vzhůru, a to nejen díky jeho výšce. Když má kterýkoli člen problém, může se na Haštala vždy obrátit. Jeho empatie je dechberoucí, až se zdá, že chudák hoch nemá ani čas myslet trochu na sebe. Někdy se stane, že někdo zahraje špatný tón a zhroutí se z toho. Nebo dostane jiný klavírista depresi, že Haštalovu umu se nikdy ani náznakem nepřiblíží. Nebo se bubeník rozpláče z toho, že jeho jméno je palindrom. Haštal všechny tyto problémy rád vyslechne a poté oněm dotyčným pomůže opět se vzchopit a postavit na nohy. Je to ohromující mladík.//

//Kromě těchto kolektiv stmelujících schopností je i báječným hudebníkem. Jeho ohromná ruka je schopna zahrát duodecimu a díky jeho hypermobilitě může hrát oktávy i za pomocí pouhého malíčku a prsteníčku. Traduje se, že sám Fryderyk Chopin mu po jednom koncertě gratuloval a dožadoval se soukromého doučování. Prý by se mu hodilo malinko zlepšit techniku.//

//Další z Haštalových předností je jeho oslnivá krása. Považte, v první třídě dokonce vyhrál třetí místo v soutěži krásy, jež se konala v tělocvičně školy a zúčastnili se jí celí tři hoši.//

//Je až trapné zmiňovat, co vše dalšího dovede, ale, co se týče sportu, umístil se rovněž na třetím místě jednoho z nejprestižnějších cyklistických závodů Bohdanečské Ušlapto. Párkrát sjel černou sjezdovku a uplave až tři bazény svižným kraulem.//

//A co tedy pro shrnutí? Tento neochvějný všestranný talent má velikou budoucnost, kterou však neupřednostňuje, a raději se věnuje svému plnému nasazení v bigbandu. Obětavost, dochvilnost, píle a pokora jsou vlastnosti, kterých si sám na sobě nejvíce cení.//",
					"male" => true,
					"coords" => [ 458,175,466,153,458,138,471,114,480,109,477,82,492,69,502,77,505,95,503,107,522,120,528,154,526,195,504,158,489,161,480,171,475,202,471,195 ],
					"flash" => false,
				],
				(object) [
					"name" => "Petr Mánek",
					"instrument" => "klávesy",
					"description" => "Na klavír hraje od 7 let, absolvoval ZUŠ Biskupská ve třídě Petry Klimešové. Kromě činnosti v orchestru se věnuje především studiu informatiky na Fakultě elektrotechnické ČVUT a Matematicko-fyzikální fakultě UK.",
					"male" => true,
					"coords" => [  ],
					"flash" => false,
				],
				(object) [
					"name" => "Jakub Macar",
					"instrument" => "klávesy",
					"description" => "Narodil se v Praze do hudební rodiny. S klavírem začal v pěti letech a už v šesti chodil do základní umělecké školy Ilji Hurníka. Po osmi letech školu změnil a nyní dochází do ZUŠ Biskupská. Navštěvuje také hodiny jazzové intepretace u Emila Hradeckého. Studuje gymnázium Budějovická a členem big bandu je druhým rokem.",
					"male" => true,
					"coords" => [ 657,154,654,134,670,122,684,136,685,159,693,179,682,189,681,169,670,158 ],
					"flash" => false,
				],
			],
			"basa" => [
				(object) [
					"name" => "Jana Bílá",
					"instrument" => "basa",
					"description" => "Když v patnácti spoluzakládala holčičí kapelu, vyšla na ní losem basová kytara. Od té doby prošla několika skupinami, od poprockové přes komorní či folkovou, přičemž nevynechala ani punk. V big bandu je od roku 2012. Kromě držení rytmu se věnuje botanice, učení na základní škole a hraní deskových her. Ráda spí.",
					"coords" => [  ],
					"male" => false,
					"flash" => false,
				],
				(object) [
					"name" => "Hugo Marek",
					"instrument" => "basa",
					"description" => $lorem,
					"male" => true,
					"coords" => [ 529,194,530,178,539,169,541,138,551,129,569,135,572,147,570,160,555,153,544,154,541,174,532,194 ],
					"flash" => false,
				],
			],
			"kytara" => [
				(object) [
					"name" => "Marek Kodr",
					"instrument" => "kytara",
					"description" => "V big bandu působí od roku 2011. Studuje IT na fakultě informatiky ČVUT, mimo hudby se věnuje různým sportům a extrémním závodům. Rád chodí do každé sebešílenější výzvy a snaží se k tomu motivovat ostatní. Jinak je úplně normální člověk jako všichni ostatní.",
					"male" => true,
					"coords" => [ 865,171,874,163,862,139,886,125,894,138,895,161,921,177,925,203,911,273,918,388,879,394,841,385,859,305,856,239,861,221,852,194,870,176 ],
					"flash" => false,
				],
			],
			"bicí" => [
				(object) [
					"name" => "Natan Sidej",
					"instrument" => "bicí",
					"description" => "Sedmnáctiletý bubeník a student gymnázia. Do big bandu nastoupil v témže roce, kdy začal bubnovat.  Letos je tomu už {since: 2011}. Mimo big band se věnuje své vlastní kapele a také studiu klavíru, ze kterého příští rok absolvuje. Svůj volný čas rád tráví fotografií a prací v temné komoře.",
					"male" => true,
					"coords" => [ 577,162,571,138,588,124,606,133,609,146,604,153,592,160,591,172,574,205,568,174 ],
					"flash" => false,
				],
				(object) [
					"name" => "Josef Krůšek",
					"instrument" => "bicí",
					"description" => "Na bicí hraje od 12. ledna roku 2009, po roce vstoupil do začínajícího big bandu a podílel se na založení jazz-metalové kapely Fon Hönneberg. Dříve hrál 10 let na housle, 8 let zpíval ve sboru a 5 let i sólově, dále je samouk na klavír a na kytaru. Vedle rozvíjení zhoubné závislosti na hudebních nástrojích je také zvukařem rockového klubu Kain.",
					"male" => true,
					"coords" => [ 386,189,392,165,406,124,417,123,426,142,429,167,425,177,408,182,397,208,396,206 ],
					"flash" => false,
				],
			],
		);

		$this -> oldmembers = array (
			(object) [
				"name" => "Jakub Marek",
				"instrument" => "trumpeta",
				"description" => $lorem,
				"male" => true,
				"flash" => false,
			],
			(object) [
				"name" => "Marie Kobrlová",
				"instrument" => "klarinet",
				"description" => $lorem,
				"male" => false,
				"flash" => false,
			],
			(object) [
				"name" => "Eliška Raiterová",
				"instrument" => "flétna",
				"description" => $lorem,
				"male" => false,
				"flash" => false,
			],
		);
	}

	public function item ( $id )
	{
		return isset($this->sections[$id]) ? $this->sections[$id] : NULL;
	}

	public function limit ( $limit = 10, $offset = 0, $by = array (), $order = array () )
	{
		$limited = [];
		for ( $i = $offset; $i < $limit + $offset; $i ++ )
			if ( isset ($this->sections[$i]) )
				$limited [] = $this->sections[$i];
		return $limited;
	}

	public function all ()
	{
		return $this->sections;
	}

	public function by ( $by = array (), $order = array () )
	{
		if ( isset($by["old"]) && $by["old"] === true )
			return $this -> oldmembers;
		return [];
	}
};