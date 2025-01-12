<?php
/**
 * States
 *
 * Returns an array of country states. This deprecates and replaces the /states/ directory found in older versions.
 * States /should/ be defined in English and translated native though localisation files.
 * Countries defined with empty arrays have no states.
 *
 * @package WooCommerce/i18n
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

return array(
	'AF' => array(),
	'AO' => array( // Angola states.
		'BGO' => 'Bengo',
		'BLU' => 'Benguela',
		'BIE' => 'Bié',
		'CAB' => 'Cabinda',
		'CNN' => 'Cunene',
		'HUA' => 'Huambo',
		'HUI' => 'Huíla',
		'CCU' => 'Kuando Kubango',
		'CNO' => 'Kwanza-Norte',
		'CUS' => 'Kwanza-Sul',
		'LUA' => 'Luanda',
		'LNO' => 'Lunda-Norte',
		'LSU' => 'Lunda-Sul',
		'MAL' => 'Malanje',
		'MOX' => 'Moxico',
		'NAM' => 'Namibe',
		'UIG' => 'Uíge',
		'ZAI' => 'Zaire',
	),
	'AR' => array( // Argentinian provinces.
		'C' => 'Ciudad Aut&oacute;noma de Buenos Aires',
		'B' => 'Buenos Aires',
		'K' => 'Catamarca',
		'H' => 'Chaco',
		'U' => 'Chubut',
		'X' => 'C&oacute;rdoba',
		'W' => 'Corrientes',
		'E' => 'Entre R&iacute;os',
		'P' => 'Formosa',
		'Y' => 'Jujuy',
		'L' => 'La Pampa',
		'F' => 'La Rioja',
		'M' => 'Mendoza',
		'N' => 'Misiones',
		'Q' => 'Neuqu&eacute;n',
		'R' => 'R&iacute;o Negro',
		'A' => 'Salta',
		'J' => 'San Juan',
		'D' => 'San Luis',
		'Z' => 'Santa Cruz',
		'S' => 'Santa Fe',
		'G' => 'Santiago del Estero',
		'V' => 'Tierra del Fuego',
		'T' => 'Tucum&aacute;n',
	),
	'AT' => array(),
	'AU' => array( // Australian states.
		'ACT' => 'Australian Capital Territory',
		'NSW' => 'New South Wales',
		'NT'  => 'Northern Territory',
		'QLD' => 'Queensland',
		'SA'  => 'South Australia',
		'TAS' => 'Tasmania',
		'VIC' => 'Victoria',
		'WA'  => 'Western Australia',
	),
	'AX' => array(),
	'BD' => array( // Bangladeshi states (districts).
		'BD-05' => 'Bagerhat',
		'BD-01' => 'Bandarban',
		'BD-02' => 'Barguna',
		'BD-06' => 'Barishal',
		'BD-07' => 'Bhola',
		'BD-03' => 'Bogura',
		'BD-04' => 'Brahmanbaria',
		'BD-09' => 'Chandpur',
		'BD-10' => 'Chattogram',
		'BD-12' => 'Chuadanga',
		'BD-11' => "Cox's Bazar",
		'BD-08' => 'Cumilla',
		'BD-13' => 'Dhaka',
		'BD-14' => 'Dinajpur',
		'BD-15' => 'Faridpur ',
		'BD-16' => 'Feni',
		'BD-19' => 'Gaibandha',
		'BD-18' => 'Gazipur',
		'BD-17' => 'Gopalganj',
		'BD-20' => 'Habiganj',
		'BD-21' => 'Jamalpur',
		'BD-22' => 'Jashore',
		'BD-25' => 'Jhalokati',
		'BD-23' => 'Jhenaidah',
		'BD-24' => 'Joypurhat',
		'BD-29' => 'Khagrachhari',
		'BD-27' => 'Khulna',
		'BD-26' => 'Kishoreganj',
		'BD-28' => 'Kurigram',
		'BD-30' => 'Kushtia',
		'BD-31' => 'Lakshmipur',
		'BD-32' => 'Lalmonirhat',
		'BD-36' => 'Madaripur',
		'BD-37' => 'Magura',
		'BD-33' => 'Manikganj ',
		'BD-39' => 'Meherpur',
		'BD-38' => 'Moulvibazar',
		'BD-35' => 'Munshiganj',
		'BD-34' => 'Mymensingh',
		'BD-48' => 'Naogaon',
		'BD-43' => 'Narail',
		'BD-40' => 'Narayanganj',
		'BD-42' => 'Narsingdi',
		'BD-44' => 'Natore',
		'BD-45' => 'Nawabganj',
		'BD-41' => 'Netrakona',
		'BD-46' => 'Nilphamari',
		'BD-47' => 'Noakhali',
		'BD-49' => 'Pabna',
		'BD-52' => 'Panchagarh',
		'BD-51' => 'Patuakhali',
		'BD-50' => 'Pirojpur',
		'BD-53' => 'Rajbari',
		'BD-54' => 'Rajshahi',
		'BD-56' => 'Rangamati',
		'BD-55' => 'Rangpur',
		'BD-58' => 'Satkhira',
		'BD-62' => 'Shariatpur',
		'BD-57' => 'Sherpur',
		'BD-59' => 'Sirajganj',
		'BD-61' => 'Sunamganj',
		'BD-60' => 'Sylhet',
		'BD-63' => 'Tangail',
		'BD-64' => 'Thakurgaon',
	),
	'BE' => array(),
	'BG' => array( // Bulgarian states.
		'BG-01' => 'Blagoevgrad',
		'BG-02' => 'Burgas',
		'BG-08' => 'Dobrich',
		'BG-07' => 'Gabrovo',
		'BG-26' => 'Haskovo',
		'BG-09' => 'Kardzhali',
		'BG-10' => 'Kyustendil',
		'BG-11' => 'Lovech',
		'BG-12' => 'Montana',
		'BG-13' => 'Pazardzhik',
		'BG-14' => 'Pernik',
		'BG-15' => 'Pleven',
		'BG-16' => 'Plovdiv',
		'BG-17' => 'Razgrad',
		'BG-18' => 'Ruse',
		'BG-27' => 'Shumen',
		'BG-19' => 'Silistra',
		'BG-20' => 'Sliven',
		'BG-21' => 'Smolyan',
		'BG-23' => 'Sofia',
		'BG-22' => 'Sofia-Grad',
		'BG-24' => 'Stara Zagora',
		'BG-25' => 'Targovishte',
		'BG-03' => 'Varna',
		'BG-04' => 'Veliko Tarnovo',
		'BG-05' => 'Vidin',
		'BG-06' => 'Vratsa',
		'BG-28' => 'Yambol',
	),
	'BH' => array(),
	'BI' => array(),
	'BO' => array( // Bolivian states.
		'B' => 'Chuquisaca',
		'H' => 'Beni',
		'C' => 'Cochabamba',
		'L' => 'La Paz',
		'O' => 'Oruro',
		'N' => 'Pando',
		'P' => 'Potosí',
		'S' => 'Santa Cruz',
		'T' => 'Tarija',
	),
	'BR' => array( // Brazillian states.
		'AC' => 'Acre',
		'AL' => 'Alagoas',
		'AP' => 'Amap&aacute;',
		'AM' => 'Amazonas',
		'BA' => 'Bahia',
		'CE' => 'Cear&aacute;',
		'DF' => 'Distrito Federal',
		'ES' => 'Esp&iacute;rito Santo',
		'GO' => 'Goi&aacute;s',
		'MA' => 'Maranh&atilde;o',
		'MT' => 'Mato Grosso',
		'MS' => 'Mato Grosso do Sul',
		'MG' => 'Minas Gerais',
		'PA' => 'Par&aacute;',
		'PB' => 'Para&iacute;ba',
		'PR' => 'Paran&aacute;',
		'PE' => 'Pernambuco',
		'PI' => 'Piau&iacute;',
		'RJ' => 'Rio de Janeiro',
		'RN' => 'Rio Grande do Norte',
		'RS' => 'Rio Grande do Sul',
		'RO' => 'Rond&ocirc;nia',
		'RR' => 'Roraima',
		'SC' => 'Santa Catarina',
		'SP' => 'S&atilde;o Paulo',
		'SE' => 'Sergipe',
		'TO' => 'Tocantins',
	),
	'CA' => array( // Canadian states.
		'AB' => 'Alberta',
		'BC' => 'British Columbia',
		'MB' => 'Manitoba',
		'NB' => 'New Brunswick',
		'NL' => 'Newfoundland and Labrador',
		'NT' => 'Northwest Territories',
		'NS' => 'Nova Scotia',
		'NU' => 'Nunavut',
		'ON' => 'Ontario',
		'PE' => 'Prince Edward Island',
		'QC' => 'Quebec',
		'SK' => 'Saskatchewan',
		'YT' => 'Yukon Territory',
	),
	'CH' => array( // Cantons of Switzerland.
		'AG' => 'Aargau',
		'AR' => 'Appenzell Ausserrhoden',
		'AI' => 'Appenzell Innerrhoden',
		'BL' => 'Basel-Landschaft',
		'BS' => 'Basel-Stadt',
		'BE' => 'Bern',
		'FR' => 'Fribourg',
		'GE' => 'Geneva',
		'GL' => 'Glarus',
		'GR' => 'Graub&uuml;nden',
		'JU' => 'Jura',
		'LU' => 'Luzern',
		'NE' => 'Neuch&acirc;tel',
		'NW' => 'Nidwalden',
		'OW' => 'Obwalden',
		'SH' => 'Schaffhausen',
		'SZ' => 'Schwyz',
		'SO' => 'Solothurn',
		'SG' => 'St. Gallen',
		'TG' => 'Thurgau',
		'TI' => 'Ticino',
		'UR' => 'Uri',
		'VS' => 'Valais',
		'VD' => 'Vaud',
		'ZG' => 'Zug',
		'ZH' => 'Z&uuml;rich',
	),
	'CN' => array( // Chinese states.
		'CN1'  => 'Yunnan / &#20113;&#21335;',
		'CN2'  => 'Beijing / &#21271;&#20140;',
		'CN3'  => 'Tianjin / &#22825;&#27941;',
		'CN4'  => 'Hebei / &#27827;&#21271;',
		'CN5'  => 'Shanxi / &#23665;&#35199;',
		'CN6'  => 'Inner Mongolia / &#20839;&#33945;&#21476;',
		'CN7'  => 'Liaoning / &#36797;&#23425;',
		'CN8'  => 'Jilin / &#21513;&#26519;',
		'CN9'  => 'Heilongjiang / &#40657;&#40857;&#27743;',
		'CN10' => 'Shanghai / &#19978;&#28023;',
		'CN11' => 'Jiangsu / &#27743;&#33487;',
		'CN12' => 'Zhejiang / &#27993;&#27743;',
		'CN13' => 'Anhui / &#23433;&#24509;',
		'CN14' => 'Fujian / &#31119;&#24314;',
		'CN15' => 'Jiangxi / &#27743;&#35199;',
		'CN16' => 'Shandong / &#23665;&#19996;',
		'CN17' => 'Henan / &#27827;&#21335;',
		'CN18' => 'Hubei / &#28246;&#21271;',
		'CN19' => 'Hunan / &#28246;&#21335;',
		'CN20' => 'Guangdong / &#24191;&#19996;',
		'CN21' => 'Guangxi Zhuang / &#24191;&#35199;&#22766;&#26063;',
		'CN22' => 'Hainan / &#28023;&#21335;',
		'CN23' => 'Chongqing / &#37325;&#24198;',
		'CN24' => 'Sichuan / &#22235;&#24029;',
		'CN25' => 'Guizhou / &#36149;&#24030;',
		'CN26' => 'Shaanxi / &#38485;&#35199;',
		'CN27' => 'Gansu / &#29976;&#32899;',
		'CN28' => 'Qinghai / &#38738;&#28023;',
		'CN29' => 'Ningxia Hui / &#23425;&#22799;',
		'CN30' => 'Macau / &#28595;&#38376;',
		'CN31' => 'Tibet / &#35199;&#34255;',
		'CN32' => 'Xinjiang / &#26032;&#30086;',
	),
	'CZ' => array(),
	'DE' => array(),
	'DK' => array(),
	'EE' => array(),
	'ES' => array( // Spanish states.
		'C'  => 'A Coru&ntilde;a',
		'VI' => 'Araba/&Aacute;lava',
		'AB' => 'Albacete',
		'A'  => 'Alicante',
		'AL' => 'Almer&iacute;a',
		'O'  => 'Asturias',
		'AV' => '&Aacute;vila',
		'BA' => 'Badajoz',
		'PM' => 'Baleares',
		'B'  => 'Barcelona',
		'BU' => 'Burgos',
		'CC' => 'C&aacute;ceres',
		'CA' => 'C&aacute;diz',
		'S'  => 'Cantabria',
		'CS' => 'Castell&oacute;n',
		'CE' => 'Ceuta',
		'CR' => 'Ciudad Real',
		'CO' => 'C&oacute;rdoba',
		'CU' => 'Cuenca',
		'GI' => 'Girona',
		'GR' => 'Granada',
		'GU' => 'Guadalajara',
		'SS' => 'Gipuzkoa',
		'H'  => 'Huelva',
		'HU' => 'Huesca',
		'J'  => 'Ja&eacute;n',
		'LO' => 'La Rioja',
		'GC' => 'Las Palmas',
		'LE' => 'Le&oacute;n',
		'L'  => 'Lleida',
		'LU' => 'Lugo',
		'M'  => 'Madrid',
		'MA' => 'M&aacute;laga',
		'ML' => 'Melilla',
		'MU' => 'Murcia',
		'NA' => 'Navarra',
		'OR' => 'Ourense',
		'P'  => 'Palencia',
		'PO' => 'Pontevedra',
		'SA' => 'Salamanca',
		'TF' => 'Santa Cruz de Tenerife',
		'SG' => 'Segovia',
		'SE' => 'Sevilla',
		'SO' => 'Soria',
		'T'  => 'Tarragona',
		'TE' => 'Teruel',
		'TO' => 'Toledo',
		'V'  => 'Valencia',
		'VA' => 'Valladolid',
		'BI' => 'Bizkaia',
		'ZA' => 'Zamora',
		'Z'  => 'Zaragoza',
	),
	'FI' => array(),
	'FR' => array(),
	'GP' => array(),
	'GR' => array( // Greek Regions.
		'I' => 'Αττική',
		'A' => 'Ανατολική Μακεδονία και Θράκη',
		'B' => 'Κεντρική Μακεδονία',
		'C' => 'Δυτική Μακεδονία',
		'D' => 'Ήπειρος',
		'E' => 'Θεσσαλία',
		'F' => 'Ιόνιοι Νήσοι',
		'G' => 'Δυτική Ελλάδα',
		'H' => 'Στερεά Ελλάδα',
		'J' => 'Πελοπόννησος',
		'K' => 'Βόρειο Αιγαίο',
		'L' => 'Νότιο Αιγαίο',
		'M' => 'Κρήτη',
	),
	'GF' => array(),
	'HK' => array( // Hong Kong states.
		'HONG KONG'       => 'Hong Kong Island',
		'KOWLOON'         => 'Kowloon',
		'NEW TERRITORIES' => 'New Territories',
	),
	'HU' => array( // Hungary states.
		'BK' => 'Bács-Kiskun',
		'BE' => 'Békés',
		'BA' => 'Baranya',
		'BZ' => 'Borsod-Abaúj-Zemplén',
		'BU' => 'Budapest',
		'CS' => 'Csongrád',
		'FE' => 'Fejér',
		'GS' => 'Győr-Moson-Sopron',
		'HB' => 'Hajdú-Bihar',
		'HE' => 'Heves',
		'JN' => 'Jász-Nagykun-Szolnok',
		'KE' => 'Komárom-Esztergom',
		'NO' => 'Nógrád',
		'PE' => 'Pest',
		'SO' => 'Somogy',
		'SZ' => 'Szabolcs-Szatmár-Bereg',
		'TO' => 'Tolna',
		'VA' => 'Vas',
		'VE' => 'Veszprém',
		'ZA' => 'Zala',
	),
	'ID' => array( // Indonesia Provinces.
		'AC' => 'Daerah Istimewa Aceh',
		'SU' => 'Sumatera Utara',
		'SB' => 'Sumatera Barat',
		'RI' => 'Riau',
		'KR' => 'Kepulauan Riau',
		'JA' => 'Jambi',
		'SS' => 'Sumatera Selatan',
		'BB' => 'Bangka Belitung',
		'BE' => 'Bengkulu',
		'LA' => 'Lampung',
		'JK' => 'DKI Jakarta',
		'JB' => 'Jawa Barat',
		'BT' => 'Banten',
		'JT' => 'Jawa Tengah',
		'JI' => 'Jawa Timur',
		'YO' => 'Daerah Istimewa Yogyakarta',
		'BA' => 'Bali',
		'NB' => 'Nusa Tenggara Barat',
		'NT' => 'Nusa Tenggara Timur',
		'KB' => 'Kalimantan Barat',
		'KT' => 'Kalimantan Tengah',
		'KI' => 'Kalimantan Timur',
		'KS' => 'Kalimantan Selatan',
		'KU' => 'Kalimantan Utara',
		'SA' => 'Sulawesi Utara',
		'ST' => 'Sulawesi Tengah',
		'SG' => 'Sulawesi Tenggara',
		'SR' => 'Sulawesi Barat',
		'SN' => 'Sulawesi Selatan',
		'GO' => 'Gorontalo',
		'MA' => 'Maluku',
		'MU' => 'Maluku Utara',
		'PA' => 'Papua',
		'PB' => 'Papua Barat',
	),
	'IE' => array( // Republic of Ireland.
		'CW' => 'Carlow',
		'CN' => 'Cavan',
		'CE' => 'Clare',
		'CO' => 'Cork',
		'DL' => 'Donegal',
		'D'  => 'Dublin',
		'G'  => 'Galway',
		'KY' => 'Kerry',
		'KE' => 'Kildare',
		'KK' => 'Kilkenny',
		'LS' => 'Laois',
		'LM' => 'Leitrim',
		'LK' => 'Limerick',
		'LD' => 'Longford',
		'LH' => 'Louth',
		'MO' => 'Mayo',
		'MH' => 'Meath',
		'MN' => 'Monaghan',
		'OY' => 'Offaly',
		'RN' => 'Roscommon',
		'SO' => 'Sligo',
		'TA' => 'Tipperary',
		'WD' => 'Waterford',
		'WH' => 'Westmeath',
		'WX' => 'Wexford',
		'WW' => 'Wicklow',
	),
	'IN' => array( // Indian states.
		'AP' => 'Andhra Pradesh',
		'AR' => 'Arunachal Pradesh',
		'AS' => 'Assam',
		'BR' => 'Bihar',
		'CT' => 'Chhattisgarh',
		'GA' => 'Goa',
		'GJ' => 'Gujarat',
		'HR' => 'Haryana',
		'HP' => 'Himachal Pradesh',
		'JK' => 'Jammu and Kashmir',
		'JH' => 'Jharkhand',
		'KA' => 'Karnataka',
		'KL' => 'Kerala',
		'MP' => 'Madhya Pradesh',
		'MH' => 'Maharashtra',
		'MN' => 'Manipur',
		'ML' => 'Meghalaya',
		'MZ' => 'Mizoram',
		'NL' => 'Nagaland',
		'OR' => 'Orissa',
		'PB' => 'Punjab',
		'RJ' => 'Rajasthan',
		'SK' => 'Sikkim',
		'TN' => 'Tamil Nadu',
		'TS' => 'Telangana',
		'TR' => 'Tripura',
		'UK' => 'Uttarakhand',
		'UP' => 'Uttar Pradesh',
		'WB' => 'West Bengal',
		'AN' => 'Andaman and Nicobar Islands',
		'CH' => 'Chandigarh',
		'DN' => 'Dadra and Nagar Haveli',
		'DD' => 'Daman and Diu',
		'DL' => 'Delhi',
		'LD' => 'Lakshadeep',
		'PY' => 'Pondicherry (Puducherry)',
	),
	'IR' => array( // Iran States.
		'KHZ' => 'Khuzestan  (خوزستان)',
		'THR' => 'Tehran  (تهران)',
		'ILM' => 'Ilaam (ایلام)',
		'BHR' => 'Bushehr (بوشهر)',
		'ADL' => 'Ardabil (اردبیل)',
		'ESF' => 'Isfahan (اصفهان)',
		'YZD' => 'Yazd (یزد)',
		'KRH' => 'Kermanshah (کرمانشاه)',
		'KRN' => 'Kerman (کرمان)',
		'HDN' => 'Hamadan (همدان)',
		'GZN' => 'Ghazvin (قزوین)',
		'ZJN' => 'Zanjan (زنجان)',
		'LRS' => 'Luristan (لرستان)',
		'ABZ' => 'Alborz (البرز)',
		'EAZ' => 'East Azarbaijan (آذربایجان شرقی)',
		'WAZ' => 'West Azarbaijan (آذربایجان غربی)',
		'CHB' => 'Chaharmahal and Bakhtiari (چهارمحال و بختیاری)',
		'SKH' => 'South Khorasan (خراسان جنوبی)',
		'RKH' => 'Razavi Khorasan (خراسان رضوی)',
		'NKH' => 'North Khorasan (خراسان شمالی)',
		'SMN' => 'Semnan (سمنان)',
		'FRS' => 'Fars (فارس)',
		'QHM' => 'Qom (قم)',
		'KRD' => 'Kurdistan / کردستان)',
		'KBD' => 'Kohgiluyeh and BoyerAhmad (کهگیلوییه و بویراحمد)',
		'GLS' => 'Golestan (گلستان)',
		'GIL' => 'Gilan (گیلان)',
		'MZN' => 'Mazandaran (مازندران)',
		'MKZ' => 'Markazi (مرکزی)',
		'HRZ' => 'Hormozgan (هرمزگان)',
		'SBN' => 'Sistan and Baluchestan (سیستان و بلوچستان)',
	),
	'IS' => array(),
	'IT' => array( // Italy Provinces.
		'AG' => 'Agrigento',
		'AL' => 'Alessandria',
		'AN' => 'Ancona',
		'AO' => 'Aosta',
		'AR' => 'Arezzo',
		'AP' => 'Ascoli Piceno',
		'AT' => 'Asti',
		'AV' => 'Avellino',
		'BA' => 'Bari',
		'BT' => 'Barletta-Andria-Trani',
		'BL' => 'Belluno',
		'BN' => 'Benevento',
		'BG' => 'Bergamo',
		'BI' => 'Biella',
		'BO' => 'Bologna',
		'BZ' => 'Bolzano',
		'BS' => 'Brescia',
		'BR' => 'Brindisi',
		'CA' => 'Cagliari',
		'CL' => 'Caltanissetta',
		'CB' => 'Campobasso',
		'CE' => 'Caserta',
		'CT' => 'Catania',
		'CZ' => 'Catanzaro',
		'CH' => 'Chieti',
		'CO' => 'Como',
		'CS' => 'Cosenza',
		'CR' => 'Cremona',
		'KR' => 'Crotone',
		'CN' => 'Cuneo',
		'EN' => 'Enna',
		'FM' => 'Fermo',
		'FE' => 'Ferrara',
		'FI' => 'Firenze',
		'FG' => 'Foggia',
		'FC' => 'Forlì-Cesena',
		'FR' => 'Frosinone',
		'GE' => 'Genova',
		'GO' => 'Gorizia',
		'GR' => 'Grosseto',
		'IM' => 'Imperia',
		'IS' => 'Isernia',
		'SP' => 'La Spezia',
		'AQ' => "L'Aquila",
		'LT' => 'Latina',
		'LE' => 'Lecce',
		'LC' => 'Lecco',
		'LI' => 'Livorno',
		'LO' => 'Lodi',
		'LU' => 'Lucca',
		'MC' => 'Macerata',
		'MN' => 'Mantova',
		'MS' => 'Massa-Carrara',
		'MT' => 'Matera',
		'ME' => 'Messina',
		'MI' => 'Milano',
		'MO' => 'Modena',
		'MB' => 'Monza e della Brianza',
		'NA' => 'Napoli',
		'NO' => 'Novara',
		'NU' => 'Nuoro',
		'OR' => 'Oristano',
		'PD' => 'Padova',
		'PA' => 'Palermo',
		'PR' => 'Parma',
		'PV' => 'Pavia',
		'PG' => 'Perugia',
		'PU' => 'Pesaro e Urbino',
		'PE' => 'Pescara',
		'PC' => 'Piacenza',
		'PI' => 'Pisa',
		'PT' => 'Pistoia',
		'PN' => 'Pordenone',
		'PZ' => 'Potenza',
		'PO' => 'Prato',
		'RG' => 'Ragusa',
		'RA' => 'Ravenna',
		'RC' => 'Reggio Calabria',
		'RE' => 'Reggio Emilia',
		'RI' => 'Rieti',
		'RN' => 'Rimini',
		'RM' => 'Roma',
		'RO' => 'Rovigo',
		'SA' => 'Salerno',
		'SS' => 'Sassari',
		'SV' => 'Savona',
		'SI' => 'Siena',
		'SR' => 'Siracusa',
		'SO' => 'Sondrio',
		'SU' => 'Sud Sardegna',
		'TA' => 'Taranto',
		'TE' => 'Teramo',
		'TR' => 'Terni',
		'TO' => 'Torino',
		'TP' => 'Trapani',
		'TN' => 'Trento',
		'TV' => 'Treviso',
		'TS' => 'Trieste',
		'UD' => 'Udine',
		'VA' => 'Varese',
		'VE' => 'Venezia',
		'VB' => 'Verbano-Cusio-Ossola',
		'VC' => 'Vercelli',
		'VR' => 'Verona',
		'VV' => 'Vibo Valentia',
		'VI' => 'Vicenza',
		'VT' => 'Viterbo',
	),
	'IL' => array(),
	'IM' => array(),

	/**
	 * Japan States.
	 *
	 * English notation of prefectures conform to the notation of Japan Post.
	 * The suffix corresponds with the Japanese translation file.
	 */
	'JP' => array(
		'JP01' => 'Hokkaido',
		'JP02' => 'Aomori',
		'JP03' => 'Iwate',
		'JP04' => 'Miyagi',
		'JP05' => 'Akita',
		'JP06' => 'Yamagata',
		'JP07' => 'Fukushima',
		'JP08' => 'Ibaraki',
		'JP09' => 'Tochigi',
		'JP10' => 'Gunma',
		'JP11' => 'Saitama',
		'JP12' => 'Chiba',
		'JP13' => 'Tokyo',
		'JP14' => 'Kanagawa',
		'JP15' => 'Niigata',
		'JP16' => 'Toyama',
		'JP17' => 'Ishikawa',
		'JP18' => 'Fukui',
		'JP19' => 'Yamanashi',
		'JP20' => 'Nagano',
		'JP21' => 'Gifu',
		'JP22' => 'Shizuoka',
		'JP23' => 'Aichi',
		'JP24' => 'Mie',
		'JP25' => 'Shiga',
		'JP26' => 'Kyoto',
		'JP27' => 'Osaka',
		'JP28' => 'Hyogo',
		'JP29' => 'Nara',
		'JP30' => 'Wakayama',
		'JP31' => 'Tottori',
		'JP32' => 'Shimane',
		'JP33' => 'Okayama',
		'JP34' => 'Hiroshima',
		'JP35' => 'Yamaguchi',
		'JP36' => 'Tokushima',
		'JP37' => 'Kagawa',
		'JP38' => 'Ehime',
		'JP39' => 'Kochi',
		'JP40' => 'Fukuoka',
		'JP41' => 'Saga',
		'JP42' => 'Nagasaki',
		'JP43' => 'Kumamoto',
		'JP44' => 'Oita',
		'JP45' => 'Miyazaki',
		'JP46' => 'Kagoshima',
		'JP47' => 'Okinawa',
	),
	'KR' => array(),
	'KW' => array(),
	'LB' => array(),
	'LR' => array( // Liberia provinces.
		'BM' => 'Bomi',
		'BN' => 'Bong',
		'GA' => 'Gbarpolu',
		'GB' => 'Grand Bassa',
		'GC' => 'Grand Cape Mount',
		'GG' => 'Grand Gedeh',
		'GK' => 'Grand Kru',
		'LO' => 'Lofa',
		'MA' => 'Margibi',
		'MY' => 'Maryland',
		'MO' => 'Montserrado',
		'NM' => 'Nimba',
		'RV' => 'Rivercess',
		'RG' => 'River Gee',
		'SN' => 'Sinoe',
	),
	'LU' => array(),
	'MD' => array( // Moldova states.
		'C'  => 'Chi&#537;in&#259;u',
		'BL' => 'B&#259;l&#539;i',
		'AN' => 'Anenii Noi',
		'BS' => 'Basarabeasca',
		'BR' => 'Briceni',
		'CH' => 'Cahul',
		'CT' => 'Cantemir',
		'CL' => 'C&#259;l&#259;ra&#537;i',
		'CS' => 'C&#259;u&#537;eni',
		'CM' => 'Cimi&#537;lia',
		'CR' => 'Criuleni',
		'DN' => 'Dondu&#537;eni',
		'DR' => 'Drochia',
		'DB' => 'Dub&#259;sari',
		'ED' => 'Edine&#539;',
		'FL' => 'F&#259;le&#537;ti',
		'FR' => 'Flore&#537;ti',
		'GE' => 'UTA G&#259;g&#259;uzia',
		'GL' => 'Glodeni',
		'HN' => 'H&icirc;nce&#537;ti',
		'IL' => 'Ialoveni',
		'LV' => 'Leova',
		'NS' => 'Nisporeni',
		'OC' => 'Ocni&#539;a',
		'OR' => 'Orhei',
		'RZ' => 'Rezina',
		'RS' => 'R&icirc;&#537;cani',
		'SG' => 'S&icirc;ngerei',
		'SR' => 'Soroca',
		'ST' => 'Str&#259;&#537;eni',
		'SD' => '&#536;old&#259;ne&#537;ti',
		'SV' => '&#536;tefan Vod&#259;',
		'TR' => 'Taraclia',
		'TL' => 'Telene&#537;ti',
		'UN' => 'Ungheni',
	),
	'MQ' => array(),
	'MT' => array(),
	'MX' => array( // Mexico States.
		'DF' => 'Ciudad de M&eacute;xico',
		'JA' => 'Jalisco',
		'NL' => 'Nuevo Le&oacute;n',
		'AG' => 'Aguascalientes',
		'BC' => 'Baja California',
		'BS' => 'Baja California Sur',
		'CM' => 'Campeche',
		'CS' => 'Chiapas',
		'CH' => 'Chihuahua',
		'CO' => 'Coahuila',
		'CL' => 'Colima',
		'DG' => 'Durango',
		'GT' => 'Guanajuato',
		'GR' => 'Guerrero',
		'HG' => 'Hidalgo',
		'MX' => 'Estado de M&eacute;xico',
		'MI' => 'Michoac&aacute;n',
		'MO' => 'Morelos',
		'NA' => 'Nayarit',
		'OA' => 'Oaxaca',
		'PU' => 'Puebla',
		'QT' => 'Quer&eacute;taro',
		'QR' => 'Quintana Roo',
		'SL' => 'San Luis Potos&iacute;',
		'SI' => 'Sinaloa',
		'SO' => 'Sonora',
		'TB' => 'Tabasco',
		'TM' => 'Tamaulipas',
		'TL' => 'Tlaxcala',
		'VE' => 'Veracruz',
		'YU' => 'Yucat&aacute;n',
		'ZA' => 'Zacatecas',
	),
	'MY' => array( // Malaysian states.
		'JHR' => 'Johor',
		'KDH' => 'Kedah',
		'KTN' => 'Kelantan',
		'LBN' => 'Labuan',
		'MLK' => 'Malacca (Melaka)',
		'NSN' => 'Negeri Sembilan',
		'PHG' => 'Pahang',
		'PNG' => 'Penang (Pulau Pinang)',
		'PRK' => 'Perak',
		'PLS' => 'Perlis',
		'SBH' => 'Sabah',
		'SWK' => 'Sarawak',
		'SGR' => 'Selangor',
		'TRG' => 'Terengganu',
		'PJY' => 'Putrajaya',
		'KUL' => 'Kuala Lumpur',
	),
	'NG' => array( // Nigerian provinces.
		'AB' => 'Abia',
		'FC' => 'Abuja',
		'AD' => 'Adamawa',
		'AK' => 'Akwa Ibom',
		'AN' => 'Anambra',
		'BA' => 'Bauchi',
		'BY' => 'Bayelsa',
		'BE' => 'Benue',
		'BO' => 'Borno',
		'CR' => 'Cross River',
		'DE' => 'Delta',
		'EB' => 'Ebonyi',
		'ED' => 'Edo',
		'EK' => 'Ekiti',
		'EN' => 'Enugu',
		'GO' => 'Gombe',
		'IM' => 'Imo',
		'JI' => 'Jigawa',
		'KD' => 'Kaduna',
		'KN' => 'Kano',
		'KT' => 'Katsina',
		'KE' => 'Kebbi',
		'KO' => 'Kogi',
		'KW' => 'Kwara',
		'LA' => 'Lagos',
		'NA' => 'Nasarawa',
		'NI' => 'Niger',
		'OG' => 'Ogun',
		'ON' => 'Ondo',
		'OS' => 'Osun',
		'OY' => 'Oyo',
		'PL' => 'Plateau',
		'RI' => 'Rivers',
		'SO' => 'Sokoto',
		'TA' => 'Taraba',
		'YO' => 'Yobe',
		'ZA' => 'Zamfara',
	),
	'NL' => array(),
	'NO' => array(),
	'NP' => array( // Nepal states (Zones).
		'BAG' => 'Bagmati',
		'BHE' => 'Bheri',
		'DHA' => 'Dhaulagiri',
		'GAN' => 'Gandaki',
		'JAN' => 'Janakpur',
		'KAR' => 'Karnali',
		'KOS' => 'Koshi',
		'LUM' => 'Lumbini',
		'MAH' => 'Mahakali',
		'MEC' => 'Mechi',
		'NAR' => 'Narayani',
		'RAP' => 'Rapti',
		'SAG' => 'Sagarmatha',
		'SET' => 'Seti',
	),
	'NZ' => array( // New Zealand States.
		'NL' => 'Northland',
		'AK' => 'Auckland',
		'WA' => 'Waikato',
		'BP' => 'Bay of Plenty',
		'TK' => 'Taranaki',
		'GI' => 'Gisborne',
		'HB' => 'Hawke&rsquo;s Bay',
		'MW' => 'Manawatu-Wanganui',
		'WE' => 'Wellington',
		'NS' => 'Nelson',
		'MB' => 'Marlborough',
		'TM' => 'Tasman',
		'WC' => 'West Coast',
		'CT' => 'Canterbury',
		'OT' => 'Otago',
		'SL' => 'Southland',
	),
	'PE' => array( // Peru states.
		'CAL' => 'El Callao',
		'LMA' => 'Municipalidad Metropolitana de Lima',
		'AMA' => 'Amazonas',
		'ANC' => 'Ancash',
		'APU' => 'Apur&iacute;mac',
		'ARE' => 'Arequipa',
		'AYA' => 'Ayacucho',
		'CAJ' => 'Cajamarca',
		'CUS' => 'Cusco',
		'HUV' => 'Huancavelica',
		'HUC' => 'Hu&aacute;nuco',
		'ICA' => 'Ica',
		'JUN' => 'Jun&iacute;n',
		'LAL' => 'La Libertad',
		'LAM' => 'Lambayeque',
		'LIM' => 'Lima',
		'LOR' => 'Loreto',
		'MDD' => 'Madre de Dios',
		'MOQ' => 'Moquegua',
		'PAS' => 'Pasco',
		'PIU' => 'Piura',
		'PUN' => 'Puno',
		'SAM' => 'San Mart&iacute;n',
		'TAC' => 'Tacna',
		'TUM' => 'Tumbes',
		'UCA' => 'Ucayali',
	),

	/**
	 * Philippine Provinces.
	 *
	 * @todo DAC Needs to be updated when ISO code is assigned.
	 */
	'PH' => array(
		'ABR' => 'Abra',
		'AGN' => 'Agusan del Norte',
		'AGS' => 'Agusan del Sur',
		'AKL' => 'Aklan',
		'ALB' => 'Albay',
		'ANT' => 'Antique',
		'APA' => 'Apayao',
		'AUR' => 'Aurora',
		'BAS' => 'Basilan',
		'BAN' => 'Bataan',
		'BTN' => 'Batanes',
		'BTG' => 'Batangas',
		'BEN' => 'Benguet',
		'BIL' => 'Biliran',
		'BOH' => 'Bohol',
		'BUK' => 'Bukidnon',
		'BUL' => 'Bulacan',
		'CAG' => 'Cagayan',
		'CAN' => 'Camarines Norte',
		'CAS' => 'Camarines Sur',
		'CAM' => 'Camiguin',
		'CAP' => 'Capiz',
		'CAT' => 'Catanduanes',
		'CAV' => 'Cavite',
		'CEB' => 'Cebu',
		'COM' => 'Compostela Valley',
		'NCO' => 'Cotabato',
		'DAV' => 'Davao del Norte',
		'DAS' => 'Davao del Sur',
		'DAC' => 'Davao Occidental',
		'DAO' => 'Davao Oriental',
		'DIN' => 'Dinagat Islands',
		'EAS' => 'Eastern Samar',
		'GUI' => 'Guimaras',
		'IFU' => 'Ifugao',
		'ILN' => 'Ilocos Norte',
		'ILS' => 'Ilocos Sur',
		'ILI' => 'Iloilo',
		'ISA' => 'Isabela',
		'KAL' => 'Kalinga',
		'LUN' => 'La Union',
		'LAG' => 'Laguna',
		'LAN' => 'Lanao del Norte',
		'LAS' => 'Lanao del Sur',
		'LEY' => 'Leyte',
		'MAG' => 'Maguindanao',
		'MAD' => 'Marinduque',
		'MAS' => 'Masbate',
		'MSC' => 'Misamis Occidental',
		'MSR' => 'Misamis Oriental',
		'MOU' => 'Mountain Province',
		'NEC' => 'Negros Occidental',
		'NER' => 'Negros Oriental',
		'NSA' => 'Northern Samar',
		'NUE' => 'Nueva Ecija',
		'NUV' => 'Nueva Vizcaya',
		'MDC' => 'Occidental Mindoro',
		'MDR' => 'Oriental Mindoro',
		'PLW' => 'Palawan',
		'PAM' => 'Pampanga',
		'PAN' => 'Pangasinan',
		'QUE' => 'Quezon',
		'QUI' => 'Quirino',
		'RIZ' => 'Rizal',
		'ROM' => 'Romblon',
		'WSA' => 'Samar',
		'SAR' => 'Sarangani',
		'SIQ' => 'Siquijor',
		'SOR' => 'Sorsogon',
		'SCO' => 'South Cotabato',
		'SLE' => 'Southern Leyte',
		'SUK' => 'Sultan Kudarat',
		'SLU' => 'Sulu',
		'SUN' => 'Surigao del Norte',
		'SUR' => 'Surigao del Sur',
		'TAR' => 'Tarlac',
		'TAW' => 'Tawi-Tawi',
		'ZMB' => 'Zambales',
		'ZAN' => 'Zamboanga del Norte',
		'ZAS' => 'Zamboanga del Sur',
		'ZSI' => 'Zamboanga Sibugay',
		'00'  => 'Metro Manila',
	),
	'PK' => array( // Pakistan's states.
		'JK' => 'Azad Kashmir',
		'BA' => 'Balochistan',
		'TA' => 'FATA',
		'GB' => 'Gilgit Baltistan',
		'IS' => 'Islamabad Capital Territory',
		'KP' => 'Khyber Pakhtunkhwa',
		'PB' => 'Punjab',
		'SD' => 'Sindh',
	),
	'PL' => array(),
	'PT' => array(),
	'PY' => array( // Paraguay states.
		'PY-ASU' => 'Asunci&oacute;n',
		'PY-1'   => 'Concepci&oacute;n',
		'PY-2'   => 'San Pedro',
		'PY-3'   => 'Cordillera',
		'PY-4'   => 'Guair&aacute;',
		'PY-5'   => 'Caaguaz&uacute;',
		'PY-6'   => 'Caazap&aacute;',
		'PY-7'   => 'Itap&uacute;a',
		'PY-8'   => 'Misiones',
		'PY-9'   => 'Paraguar&iacute;',
		'PY-10'  => 'Alto Paran&aacute;',
		'PY-11'  => 'Central',
		'PY-12'  => '&Ntilde;eembuc&uacute;',
		'PY-13'  => 'Amambay',
		'PY-14'  => 'Canindey&uacute;',
		'PY-15'  => 'Presidente Hayes',
		'PY-16'  => 'Alto Paraguay',
		'PY-17'  => 'Boquer&oacute;n',
	),
	'RE' => array(),
	'RO' => array( // Romania states.
		'AB' => 'Alba',
		'AR' => 'Arad',
		'AG' => 'Arge&#537;',
		'BC' => 'Bac&#259;u',
		'BH' => 'Bihor',
		'BN' => 'Bistri&#539;a-N&#259;s&#259;ud',
		'BT' => 'Boto&#537;ani',
		'BR' => 'Br&#259;ila',
		'BV' => 'Bra&#537;ov',
		'B'  => 'Bucure&#537;ti',
		'BZ' => 'Buz&#259;u',
		'CL' => 'C&#259;l&#259;ra&#537;i',
		'CS' => 'Cara&#537;-Severin',
		'CJ' => 'Cluj',
		'CT' => 'Constan&#539;a',
		'CV' => 'Covasna',
		'DB' => 'D&acirc;mbovi&#539;a',
		'DJ' => 'Dolj',
		'GL' => 'Gala&#539;i',
		'GR' => 'Giurgiu',
		'GJ' => 'Gorj',
		'HR' => 'Harghita',
		'HD' => 'Hunedoara',
		'IL' => 'Ialomi&#539;a',
		'IS' => 'Ia&#537;i',
		'IF' => 'Ilfov',
		'MM' => 'Maramure&#537;',
		'MH' => 'Mehedin&#539;i',
		'MS' => 'Mure&#537;',
		'NT' => 'Neam&#539;',
		'OT' => 'Olt',
		'PH' => 'Prahova',
		'SJ' => 'S&#259;laj',
		'SM' => 'Satu Mare',
		'SB' => 'Sibiu',
		'SV' => 'Suceava',
		'TR' => 'Teleorman',
		'TM' => 'Timi&#537;',
		'TL' => 'Tulcea',
		'VL' => 'V&acirc;lcea',
		'VS' => 'Vaslui',
		'VN' => 'Vrancea',
	),
	'RS' => array(),
	'SG' => array(),
	'SK' => array(),
	'SI' => array(),
	'TH' => array( // Thailand states.
		'TH-37' => 'Amnat Charoen',
		'TH-15' => 'Ang Thong',
		'TH-14' => 'Ayutthaya',
		'TH-10' => 'Bangkok',
		'TH-38' => 'Bueng Kan',
		'TH-31' => 'Buri Ram',
		'TH-24' => 'Chachoengsao',
		'TH-18' => 'Chai Nat',
		'TH-36' => 'Chaiyaphum',
		'TH-22' => 'Chanthaburi',
		'TH-50' => 'Chiang Mai',
		'TH-57' => 'Chiang Rai',
		'TH-20' => 'Chonburi',
		'TH-86' => 'Chumphon',
		'TH-46' => 'Kalasin',
		'TH-62' => 'Kamphaeng Phet',
		'TH-71' => 'Kanchanaburi',
		'TH-40' => 'Khon Kaen',
		'TH-81' => 'Krabi',
		'TH-52' => 'Lampang',
		'TH-51' => 'Lamphun',
		'TH-42' => 'Loei',
		'TH-16' => 'Lopburi',
		'TH-58' => 'Mae Hong Son',
		'TH-44' => 'Maha Sarakham',
		'TH-49' => 'Mukdahan',
		'TH-26' => 'Nakhon Nayok',
		'TH-73' => 'Nakhon Pathom',
		'TH-48' => 'Nakhon Phanom',
		'TH-30' => 'Nakhon Ratchasima',
		'TH-60' => 'Nakhon Sawan',
		'TH-80' => 'Nakhon Si Thammarat',
		'TH-55' => 'Nan',
		'TH-96' => 'Narathiwat',
		'TH-39' => 'Nong Bua Lam Phu',
		'TH-43' => 'Nong Khai',
		'TH-12' => 'Nonthaburi',
		'TH-13' => 'Pathum Thani',
		'TH-94' => 'Pattani',
		'TH-82' => 'Phang Nga',
		'TH-93' => 'Phatthalung',
		'TH-56' => 'Phayao',
		'TH-67' => 'Phetchabun',
		'TH-76' => 'Phetchaburi',
		'TH-66' => 'Phichit',
		'TH-65' => 'Phitsanulok',
		'TH-54' => 'Phrae',
		'TH-83' => 'Phuket',
		'TH-25' => 'Prachin Buri',
		'TH-77' => 'Prachuap Khiri Khan',
		'TH-85' => 'Ranong',
		'TH-70' => 'Ratchaburi',
		'TH-21' => 'Rayong',
		'TH-45' => 'Roi Et',
		'TH-27' => 'Sa Kaeo',
		'TH-47' => 'Sakon Nakhon',
		'TH-11' => 'Samut Prakan',
		'TH-74' => 'Samut Sakhon',
		'TH-75' => 'Samut Songkhram',
		'TH-19' => 'Saraburi',
		'TH-91' => 'Satun',
		'TH-17' => 'Sing Buri',
		'TH-33' => 'Sisaket',
		'TH-90' => 'Songkhla',
		'TH-64' => 'Sukhothai',
		'TH-72' => 'Suphan Buri',
		'TH-84' => 'Surat Thani',
		'TH-32' => 'Surin',
		'TH-63' => 'Tak',
		'TH-92' => 'Trang',
		'TH-23' => 'Trat',
		'TH-34' => 'Ubon Ratchathani',
		'TH-41' => 'Udon Thani',
		'TH-61' => 'Uthai Thani',
		'TH-53' => 'Uttaradit',
		'TH-95' => 'Yala',
		'TH-35' => 'Yasothon',
	),
	'TR' => array( // Turkey States.
		'TR01' => 'Adana',
		'TR02' => 'Ad&#305;yaman',
		'TR03' => 'Afyon',
		'TR04' => 'A&#287;r&#305;',
		'TR05' => 'Amasya',
		'TR06' => 'Ankara',
		'TR07' => 'Antalya',
		'TR08' => 'Artvin',
		'TR09' => 'Ayd&#305;n',
		'TR10' => 'Bal&#305;kesir',
		'TR11' => 'Bilecik',
		'TR12' => 'Bing&#246;l',
		'TR13' => 'Bitlis',
		'TR14' => 'Bolu',
		'TR15' => 'Burdur',
		'TR16' => 'Bursa',
		'TR17' => '&#199;anakkale',
		'TR18' => '&#199;ank&#305;r&#305;',
		'TR19' => '&#199;orum',
		'TR20' => 'Denizli',
		'TR21' => 'Diyarbak&#305;r',
		'TR22' => 'Edirne',
		'TR23' => 'Elaz&#305;&#287;',
		'TR24' => 'Erzincan',
		'TR25' => 'Erzurum',
		'TR26' => 'Eski&#351;ehir',
		'TR27' => 'Gaziantep',
		'TR28' => 'Giresun',
		'TR29' => 'G&#252;m&#252;&#351;hane',
		'TR30' => 'Hakkari',
		'TR31' => 'Hatay',
		'TR32' => 'Isparta',
		'TR33' => '&#304;&#231;el',
		'TR34' => '&#304;stanbul',
		'TR35' => '&#304;zmir',
		'TR36' => 'Kars',
		'TR37' => 'Kastamonu',
		'TR38' => 'Kayseri',
		'TR39' => 'K&#305;rklareli',
		'TR40' => 'K&#305;r&#351;ehir',
		'TR41' => 'Kocaeli',
		'TR42' => 'Konya',
		'TR43' => 'K&#252;tahya',
		'TR44' => 'Malatya',
		'TR45' => 'Manisa',
		'TR46' => 'Kahramanmara&#351;',
		'TR47' => 'Mardin',
		'TR48' => 'Mu&#287;la',
		'TR49' => 'Mu&#351;',
		'TR50' => 'Nev&#351;ehir',
		'TR51' => 'Ni&#287;de',
		'TR52' => 'Ordu',
		'TR53' => 'Rize',
		'TR54' => 'Sakarya',
		'TR55' => 'Samsun',
		'TR56' => 'Siirt',
		'TR57' => 'Sinop',
		'TR58' => 'Sivas',
		'TR59' => 'Tekirda&#287;',
		'TR60' => 'Tokat',
		'TR61' => 'Trabzon',
		'TR62' => 'Tunceli',
		'TR63' => '&#350;anl&#305;urfa',
		'TR64' => 'U&#351;ak',
		'TR65' => 'Van',
		'TR66' => 'Yozgat',
		'TR67' => 'Zonguldak',
		'TR68' => 'Aksaray',
		'TR69' => 'Bayburt',
		'TR70' => 'Karaman',
		'TR71' => 'K&#305;r&#305;kkale',
		'TR72' => 'Batman',
		'TR73' => '&#350;&#305;rnak',
		'TR74' => 'Bart&#305;n',
		'TR75' => 'Ardahan',
		'TR76' => 'I&#287;d&#305;r',
		'TR77' => 'Yalova',
		'TR78' => 'Karab&#252;k',
		'TR79' => 'Kilis',
		'TR80' => 'Osmaniye',
		'TR81' => 'D&#252;zce',
	),
	'TZ' => array( // Tanzania States.
		'TZ01' => 'Arusha',
		'TZ02' => 'Dar es Salaam',
		'TZ03' => 'Dodoma',
		'TZ04' => 'Iringa',
		'TZ05' => 'Kagera',
		'TZ06' => 'Pemba North',
		'TZ07' => 'Zanzibar North',
		'TZ08' => 'Kigoma',
		'TZ09' => 'Kilimanjaro',
		'TZ10' => 'Pemba South',
		'TZ11' => 'Zanzibar South',
		'TZ12' => 'Lindi',
		'TZ13' => 'Mara',
		'TZ14' => 'Mbeya',
		'TZ15' => 'Zanzibar West',
		'TZ16' => 'Morogoro',
		'TZ17' => 'Mtwara',
		'TZ18' => 'Mwanza',
		'TZ19' => 'Coast',
		'TZ20' => 'Rukwa',
		'TZ21' => 'Ruvuma',
		'TZ22' => 'Shinyanga',
		'TZ23' => 'Singida',
		'TZ24' => 'Tabora',
		'TZ25' => 'Tanga',
		'TZ26' => 'Manyara',
		'TZ27' => 'Geita',
		'TZ28' => 'Katavi',
		'TZ29' => 'Njombe',
		'TZ30' => 'Simiyu',
	),
	'LK' => array(),
	'SE' => array(),
	'US' => array( // United States.
		'AL' => 'Alabama',
		'AK' => 'Alaska',
		'AZ' => 'Arizona',
		'AR' => 'Arkansas',
		'CA' => 'California',
		'CO' => 'Colorado',
		'CT' => 'Connecticut',
		'DE' => 'Delaware',
		'DC' => 'District Of Columbia',
		'FL' => 'Florida',
		'GA' => 'Georgia',
		'HI' => 'Hawaii',
		'ID' => 'Idaho',
		'IL' => 'Illinois',
		'IN' => 'Indiana',
		'IA' => 'Iowa',
		'KS' => 'Kansas',
		'KY' => 'Kentucky',
		'LA' => 'Louisiana',
		'ME' => 'Maine',
		'MD' => 'Maryland',
		'MA' => 'Massachusetts',
		'MI' => 'Michigan',
		'MN' => 'Minnesota',
		'MS' => 'Mississippi',
		'MO' => 'Missouri',
		'MT' => 'Montana',
		'NE' => 'Nebraska',
		'NV' => 'Nevada',
		'NH' => 'New Hampshire',
		'NJ' => 'New Jersey',
		'NM' => 'New Mexico',
		'NY' => 'New York',
		'NC' => 'North Carolina',
		'ND' => 'North Dakota',
		'OH' => 'Ohio',
		'OK' => 'Oklahoma',
		'OR' => 'Oregon',
		'PA' => 'Pennsylvania',
		'RI' => 'Rhode Island',
		'SC' => 'South Carolina',
		'SD' => 'South Dakota',
		'TN' => 'Tennessee',
		'TX' => 'Texas',
		'UT' => 'Utah',
		'VT' => 'Vermont',
		'VA' => 'Virginia',
		'WA' => 'Washington',
		'WV' => 'West Virginia',
		'WI' => 'Wisconsin',
		'WY' => 'Wyoming',
		'AA' => 'Armed Forces (AA)',
		'AE' => 'Armed Forces (AE)',
		'AP' => 'Armed Forces (AP)',
	),
	'VN' => array(),
	'YT' => array(),
	'ZA' => array( // South African states.
		'EC'  => 'Eastern Cape',
		'FS'  => 'Free State',
		'GP'  => 'Gauteng',
		'KZN' => 'KwaZulu-Natal',
		'LP'  => 'Limpopo',
		'MP'  => 'Mpumalanga',
		'NC'  => 'Northern Cape',
		'NW'  => 'North West',
		'WC'  => 'Western Cape',
	),
);
