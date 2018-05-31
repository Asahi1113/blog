<?php

use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_en = [
            'AED' => 'United Arab Emirates Dirham',
            'AFN' => 'Afghan Afghani',
            'ALL' => 'Albania Lek',
            'AMD' => 'Armenia Dram',
            'ANG' => 'Dutch Guilder',
            'AOA' => 'Angola Kwanza',
            'ARS' => 'Argentina Peso',
            'AUD' => 'Australia Dollar',
            'AWG' => 'Aruba Florin',
            'AZN' => 'Azerbaijan Manat',
            'BAM' => 'Bosnia Convertible Mark',
            'BBD' => 'Barbados Dollar',
            'BDT' => 'Bangladesh Taka',
            'BGN' => 'Bulgaria Lev',
            'BHD' => 'Bahrain Dinar',
            'BIF' => 'Burundi Franc',
            'BMD' => 'Bermudian Dollar',
            'BND' => 'Brunei Dollar',
            'BOB' => 'Bolivian Boliviano',
            'BRL' => 'Brazilian Real',
            'BSD' => 'Bahamian Dollar',
            'BTN' => 'Bhutanese Ngultrum',
            'BWP' => 'Botswana Pula ',
            'BYN' => 'New Belarusian Ruble',
            'BYR' => 'Belarusian Ruble',
            'BZD' => 'Belize Dollar',
            'CAD' => 'Canadian Dollar',
            'CDF' => 'Congolese Franc',
            'CHF' => 'Swiss Franc',
            'CLF' => 'Chilean Unidad de Fomento',
            'CLP' => 'Chilean Peso',
            //'CNH' => 'Chinese Offshore Renminbi',
            'CNY' => 'Chinese Yuan',
            'COP' => 'Colombia Peso ',
            'CRC' => 'Costa Rica Colon',
            'CUP' => 'Cuban Peso',
            'CVE' => 'Cape Verde Escudo',
            'CZK' => 'Czech Republic Koruna',
            'DJF' => 'Djiboutian Franc',
            'DKK' => 'Danish Krone',
            'DOP' => 'Dominican Peso',
            'DZD' => 'Algerian Dinar ',
            'EGP' => 'Egyptian Pound',
            'ERN' => 'Eritrean Nakfa ',
            'ETB' => 'Ethiopian Birr',
            'EUR' => 'Euro',
            'FJD' => 'Fiji Dollar',
            'FKP' => 'Falkland Islands Pound',
            'GBP' => 'British Pound',
            'GEL' => 'Georgian Lari',
            'GHS' => 'Ghanaian Cedi',
            'GIP' => 'Gibraltar Pound',
            'GMD' => 'Gambian Dalasi',
            'GNF' => 'Guinean Franc',
            'GTQ' => 'Guatemalan Quetzal',
            'GYD' => 'Guyanese Dollar',
            'HKD' => 'Hong Kong Dollar',
            'HNL' => 'Honduran Lempira',
            'HRK' => 'Croatian Kuna',
            'HTG' => 'Haitian Gourde',
            'HUF' => 'Hungarian Forint',
            'IDR' => 'Indonesian Rupiah',
            'ILS' => 'Israeli New Shekel',
            'INR' => 'Indian Rupee',
            'IQD' => 'Iraqi Dinar',
            'IRR' => 'Iranian Rial',
            'ISK' => 'Icelandic Krona',
            'JMD' => 'Jamaican Dollar',
            'JOD' => 'Jordanian Dinar',
            'JPY' => 'Japanese Yen',
            'KES' => 'Kenyan Shilling',
            'KGS' => 'Kyrgyzstani Som',
            'KHR' => 'Cambodian Riel',
            'KMF' => 'Comorian franc',
            'KPW' => 'North Korean Won',
            'KRW' => 'South Korean Won',
            'KWD' => 'Kuwaiti Dinar',
            'KYD' => 'Cayman Islands Dollar',
            'KZT' => 'Kazakstani Tenge',
            'LAK' => 'Lao kip',
            'LBP' => 'Lebanese Pound',
            'LKR' => 'Sri Lankan Rupee',
            'LRD' => 'Liberian dollar',
            'LSL' => 'Lesotho Loti',
            'LYD' => 'Libyan Dinar',
            'MAD' => 'Moroccan Dirham',
            'MDL' => 'Moldovan Leu',
            'MGA' => 'Malagasy Ariary',
            'MKD' => 'Macedonian Denar',
            'MMK' => 'Myanmar Kyat',
            'MNT' => 'Mongolian Tugrik',
            'MOP' => 'Macau Pataca',
            'MRO' => 'Mauritania Ouguiya',
            'MUR' => 'Mauritian Rupee',
            'MVR' => 'Maldives Rufiyaa',
            'MWK' => 'Malawian Kwacha',
            'MXN' => 'Mexican Peso',
            'MXV' => 'Mexican Unidad De Inversion',
            'MYR' => 'Malaysian Ringgit',
            'MZN' => 'New Mozambican Metical',
            'NAD' => 'Namibian Dollar',
            'NGN' => 'Nigerian Naira',
            'NIO' => 'Nicaraguan Cordoba Oro',
            'NOK' => 'Norwegian Krone',
            'NPR' => 'Nepalese Rupee',
            'NZD' => 'New Zealand Dollar',
            'OMR' => 'Omani Rial',
            'PAB' => 'Panamanian Balboa',
            'PEN' => 'Peruvian Nuevo Sol',
            'PGK' => 'Papua New Guinea Kina',
            'PHP' => 'Philippine Peso',
            'PKR' => 'Pakistan Rupee',
            'PLN' => 'Polish Zloty',
            'PYG' => 'Paraguayan Guarani',
            'QAR' => 'Qatari Riyal',
            'RON' => 'Romanian Leu',
            'RSD' => 'Serbian Dinar',
            'RUB' => 'Russian Ruble',
            'RWF' => 'Rwandan Franc',
            'SAR' => 'Saudi Arabian Riyal',
            'SBD' => 'Solomon Islands Dollar',
            'SCR' => 'Seychelles Rupee',
            'SDG' => 'Sudanese Pound',
            'SEK' => 'Swedish Krona',
            'SGD' => 'Singapore Dollar',
            'SHP' => 'Saint Helena Pound',
            'SLL' => 'Sierra Leonean Leone',
            'SOS' => 'Somali Shilling',
            'SRD' => 'Suriname Dollar',
            'SSP' => 'South Sudanese Pound',
            'STD' => 'Sao Tome Dobra',
            'SVC' => 'Salvadoran Colon',
            'SYP' => 'Syrian Pound',
            'SZL' => 'Swazi Lilangeni',
            'THB' => 'Thai Baht',
            'TJS' => 'Tajikistan Somoni',
            'TMT' => 'Turkmenistan Manat',
            'TND' => 'Tunisian Dinar',
            'TOP' => 'Tongan paʻanga',
            'TRY' => 'Turkish Lira',
            'TTD' => 'Trinidad and Tobago Dollar',
            'TWD' => 'New Taiwan Dollar',
            'TZS' => 'Tanzanian Shilling',
            'UAH' => 'Ukrainian Hryvnia',
            'UGX' => 'Ugandan Shilling',
            'USD' => 'United States Dollar',
            'UYU' => 'Uruguayan Peso',
            'UZS' => 'Uzbekistani Som',
            'VEF' => 'Venezuelan Bolivar Fuerte',
            'VND' => 'Viet Nam Dong',
            'VUV' => 'Vanuatu Vatu',
            'WST' => 'Samoa Tala',
            'XAF' => 'Central African CFA Franc',
            'XAG' => 'Ounces of Silver',
            'XAU' => 'Ounces of Gold',
            'XCD' => 'East Caribbean Dollar',
            'XDR' => 'IMF Special Drawing Rights',
            'XOF' => 'West African CFA',
            'XPD' => 'Ounces of Palladium',
            'XPF' => 'French Pacific Franc',
            'XPT' => 'Ounces of Platinum',
            'YER' => 'Yemeni Rial',
            'ZAR' => 'South African Rand',
            'ZMW' => 'Zambian Kwacha',
            'ZWL' => 'Zimbabwean Dollar',
            'GGP' => 'Guernsey Pound'
        ];

        $data_cn = [
            'AED' => '阿联酋迪拉姆',
            'AFN' => '阿富汗尼',
            'ALL' => '阿尔巴尼列克',
            'AMD' => '亚美尼亚德拉姆',
            'ANG' => '荷兰盾',
            'AOA' => '安哥拉宽扎',
            'ARS' => '阿根廷比索',
            'AUD' => '澳元',
            'AWG' => '阿鲁巴弗罗林',
            'AZN' => '阿塞拜疆马纳特',
            'BAM' => '波黑可兑换马克',
            'BBD' => '巴巴多斯元',
            'BDT' => '孟加拉国塔卡',
            'BGN' => '保加利亚列弗',
            'BHD' => '巴林第纳尔',
            'BIF' => '布隆迪法郎',
            'BMD' => '百慕大元',
            'BND' => '文莱元',
            'BOB' => '玻利维亚诺',
            'BRL' => '巴西雷亚尔',
            'BSD' => '巴哈马元',
            'BTN' => '不丹努扎姆',
            'BWP' => '博茨瓦纳普拉',
            'BYN' => '新白俄罗斯卢布',
            'BYR' => '白俄罗斯卢布',
            'BZD' => '伯利兹元',
            'CAD' => '加元',
            'CDF' => '刚果法郎',
            'CHF' => '瑞士法郎',
            'CLF' => '智利比索(基金)',
            'CLP' => '智利比索',
            'CNY' => '人民币',
            'COP' => '哥伦比亚比索',
            'CRC' => '哥斯达黎加科朗',
            'CUP' => '古巴比索',
            'CVE' => '佛得角埃斯库多',
            'CZK' => '捷克克朗',
            'DJF' => '吉布提法郎',
            'DKK' => '丹麦克朗',
            'DOP' => '多米尼加比索',
            'DZD' => '阿尔及利亚第纳尔',
            'EGP' => '埃及镑',
            'ERN' => '厄立特里亚纳克法',
            'ETB' => '埃塞俄比亚比尔',
            'EUR' => '欧元',
            'FJD' => '斐济元',
            'FKP' => '福克兰群岛镑',
            'GBP' => '英镑',
            'GEL' => '格鲁吉亚拉里',
            'GHS' => '加纳塞地',
            'GIP' => '直布罗陀镑',
            'GMD' => '冈比亚达拉西',
            'GNF' => '几内亚法郎',
            'GTQ' => '危地马拉格查尔',
            'GYD' => '圭亚那元',
            'HKD' => '港币',
            'HNL' => '洪都拉斯伦皮拉',
            'HRK' => '克罗地亚库纳',
            'HTG' => '海地古德',
            'HUF' => '匈牙利福林',
            'IDR' => '印度尼西亚卢比',
            'ILS' => '以色列新谢克尔',
            'INR' => '印度卢比',
            'IQD' => '伊拉克第纳尔',
            'IRR' => '伊朗里亚尔',
            'ISK' => '冰岛克郎',
            'JMD' => '牙买加元',
            'JOD' => '约旦第纳尔',
            'JPY' => '日元',
            'KES' => '肯尼亚先令',
            'KGS' => '吉尔吉斯斯坦索姆',
            'KHR' => '柬埔寨瑞尔',
            'KMF' => '科摩罗法郎',
            'KPW' => '朝鲜元',
            'KRW' => '韩元',
            'KWD' => '科威特第纳尔',
            'KYD' => '开曼群岛元',
            'KZT' => '哈萨克斯坦坚戈',
            'LAK' => '老挝基普',
            'LBP' => '黎巴嫩镑',
            'LKR' => '斯里兰卡卢比',
            'LRD' => '利比里亚元',
            'LSL' => '莱索托洛蒂',
            'LYD' => '利比亚第纳尔',
            'MAD' => '摩洛哥迪拉姆',
            'MDL' => '摩尔多瓦列伊',
            'MGA' => '马达加斯加阿里亚里',
            'MKD' => '马其顿代纳尔',
            'MMK' => '缅甸元',
            'MNT' => '蒙古图格里克',
            'MOP' => '澳门元',
            'MRO' => '毛里塔尼亚乌吉亚',
            'MUR' => '毛里求斯卢比',
            'MVR' => '马尔代夫拉菲亚',
            'MWK' => '马拉维克瓦查',
            'MXN' => '墨西哥比索',
            'MXV' => '墨西哥(资金)',
            'MYR' => '林吉特',
            'MZN' => '莫桑比克新梅蒂卡尔',
            'NAD' => '纳米比亚元',
            'NGN' => '尼日利亚奈拉',
            'NIO' => '尼加拉瓜新科多巴',
            'NOK' => '挪威克朗',
            'NPR' => '尼泊尔卢比',
            'NZD' => '新西兰元',
            'OMR' => '阿曼里亚尔',
            'PAB' => '巴拿马巴波亚',
            'PEN' => '秘鲁新索尔',
            'PGK' => '巴布亚新几内亚基那',
            'PHP' => '菲律宾比索',
            'PKR' => '巴基斯坦卢比',
            'PLN' => '波兰兹罗提',
            'PYG' => '巴拉圭瓜拉尼',
            'QAR' => '卡塔尔里亚尔',
            'RON' => '罗马尼亚列伊',
            'RSD' => '塞尔维亚第纳尔',
            'RUB' => '俄罗斯卢布',
            'RWF' => '卢旺达法郎',
            'SAR' => '沙特里亚尔',
            'SBD' => '所罗门群岛元',
            'SCR' => '塞舌尔卢比',
            'SDG' => '苏丹磅',
            'SEK' => '瑞典克朗',
            'SGD' => '新加坡元',
            'SHP' => '圣赫勒拿镑',
            'SLL' => '塞拉利昂利昂',
            'SOS' => '索马里先令',
            'SRD' => '苏里南元',
            'SSP' => '南苏丹镑',
            'STD' => '圣多美多布拉',
            'SVC' => '萨尔瓦多科朗',
            'SYP' => '叙利亚镑',
            'SZL' => '斯威士兰里兰吉尼',
            'THB' => '泰铢',
            'TJS' => '塔吉克斯坦索莫尼',
            'TMT' => '土库曼斯坦马纳特',
            'TND' => '突尼斯第纳尔',
            'TOP' => '汤加潘加',
            'TRY' => '土耳其里拉',
            'TTD' => '特立尼达多巴哥元',
            'TWD' => '新台币',
            'TZS' => '坦桑尼亚先令',
            'UAH' => '乌克兰格里夫纳',
            'UGX' => '乌干达先令',
            'USD' => '美元',
            'UYU' => '乌拉圭比索',
            'UZS' => '乌兹别克斯坦苏姆',
            'VEF' => '委内瑞拉玻利瓦尔',
            'VND' => '越南盾',
            'VUV' => '瓦努阿图瓦图',
            'WST' => '萨摩亚塔拉',
            'XAF' => '中非法郎',
            'XAG' => '银价盎司',
            'XAU' => '金价盎司',
            'XCD' => '东加勒比元',
            'XDR' => 'IMF特别提款权',
            'XOF' => '西非法郎',
            'XPD' => '钯价盎司',
            'XPF' => '太平洋法郎',
            'XPT' => '珀价盎司',
            'YER' => '也门里亚尔',
            'ZAR' => '南非兰特',
            'ZMW' => '赞比亚克瓦查',
            'ZWL' => '津巴布韦元',
            'GGP' => '根西岛镑'
        ];

        $data_hk = [
            'AED' => '阿聯酋迪拉姆',
            'AFN' => '阿富汗尼',
            'ALL' => '阿爾巴尼列克',
            'AMD' => '亞美尼亞德拉姆',
            'ANG' => '荷蘭盾',
            'AOA' => '安哥拉寬扎',
            'ARS' => '阿根廷比索',
            'AUD' => '澳元',
            'AWG' => '阿魯巴弗羅林',
            'AZN' => '阿塞拜疆馬納特',
            'BAM' => '波黑可兌換馬克',
            'BBD' => '巴巴多斯元',
            'BDT' => '孟加拉國塔卡',
            'BGN' => '保加利亞列弗',
            'BHD' => '巴林第納爾',
            'BIF' => '布隆迪法郎',
            'BMD' => '百慕大元',
            'BND' => '文萊元',
            'BOB' => '玻利維亞諾',
            'BRL' => '巴西雷亞爾',
            'BSD' => '巴哈馬元',
            'BTN' => '不丹努扎姆',
            'BWP' => '博茨瓦納普拉',
            'BYN' => '新白俄羅斯盧布',
            'BYR' => '白俄羅斯盧布',
            'BZD' => '伯利茲元',
            'CAD' => '加元',
            'CDF' => '剛果法郎',
            'CHF' => '瑞士法郎',
            'CLF' => '智利比索(基金)',
            'CLP' => '智利比索',
            'CNY' => '人民幣',
            'COP' => '哥倫比亞比索',
            'CRC' => '哥斯達黎加科朗',
            'CUP' => '古巴比索',
            'CVE' => '佛得角埃斯庫多',
            'CZK' => '捷克克朗',
            'DJF' => '吉布提法郎',
            'DKK' => '丹麥克朗',
            'DOP' => '多米尼加比索',
            'DZD' => '阿爾及利亞第納爾',
            'EGP' => '埃及鎊',
            'ERN' => '厄立特里亞納克法',
            'ETB' => '埃塞俄比亞比爾',
            'EUR' => '歐元',
            'FJD' => '斐濟元',
            'FKP' => '福克蘭群島鎊',
            'GBP' => '英鎊',
            'GEL' => '格魯吉亞拉里',
            'GHS' => '加納塞地',
            'GIP' => '直布羅陀鎊',
            'GMD' => '岡比亞達拉西',
            'GNF' => '幾內亞法郎',
            'GTQ' => '危地馬拉格查爾',
            'GYD' => '圭亞那元',
            'HKD' => '港幣',
            'HNL' => '洪都拉斯倫皮拉',
            'HRK' => '克羅地亞庫納',
            'HTG' => '海地古德',
            'HUF' => '匈牙利福林',
            'IDR' => '印度尼西亞盧比',
            'ILS' => '以色列新謝克爾',
            'INR' => '印度盧比',
            'IQD' => '伊拉克第納爾',
            'IRR' => '伊朗里亞爾',
            'ISK' => '冰島克郎',
            'JMD' => '牙買加元',
            'JOD' => '約旦第納爾',
            'JPY' => '日元',
            'KES' => '肯尼亞先令',
            'KGS' => '吉爾吉斯斯坦索姆',
            'KHR' => '柬埔寨瑞爾',
            'KMF' => '科摩羅法郎',
            'KPW' => '朝鮮元',
            'KRW' => '韓元',
            'KWD' => '科威特第納爾',
            'KYD' => '開曼群島元',
            'KZT' => '哈薩克斯坦堅戈',
            'LAK' => '老撾基普',
            'LBP' => '黎巴嫩鎊',
            'LKR' => '斯里蘭卡盧比',
            'LRD' => '利比里亞元',
            'LSL' => '萊索托洛蒂',
            'LYD' => '利比亞第納爾',
            'MAD' => '摩洛哥迪拉姆',
            'MDL' => '摩爾多瓦列伊',
            'MGA' => '馬達加斯加阿里亞里',
            'MKD' => '馬其頓代納爾',
            'MMK' => '緬甸元',
            'MNT' => '蒙古圖格里克',
            'MOP' => '澳門元',
            'MRO' => '毛里塔尼亞烏吉亞',
            'MUR' => '毛里求斯盧比',
            'MVR' => '馬爾代夫拉菲亞',
            'MWK' => '馬拉維克瓦查',
            'MXN' => '墨西哥比索',
            'MXV' => '墨西哥(資金)',
            'MYR' => '林吉特',
            'MZN' => '莫桑比克新梅蒂卡爾',
            'NAD' => '納米比亞元',
            'NGN' => '尼日利亞奈拉',
            'NIO' => '尼加拉瓜新科多巴',
            'NOK' => '挪威克朗',
            'NPR' => '尼泊爾盧比',
            'NZD' => '新西蘭元',
            'OMR' => '阿曼里亞爾',
            'PAB' => '巴拿馬巴波亞',
            'PEN' => '秘魯新索爾',
            'PGK' => '巴布亞新幾內亞基那',
            'PHP' => '菲律賓比索',
            'PKR' => '巴基斯坦盧比',
            'PLN' => '波蘭茲羅提',
            'PYG' => '巴拉圭瓜拉尼',
            'QAR' => '卡塔爾里亞爾',
            'RON' => '羅馬尼亞列伊',
            'RSD' => '塞爾維亞第納爾',
            'RUB' => '俄羅斯盧布',
            'RWF' => '盧旺達法郎',
            'SAR' => '沙特里亞爾',
            'SBD' => '所羅門群島元',
            'SCR' => '塞舌爾盧比',
            'SDG' => '蘇丹磅',
            'SEK' => '瑞典克朗',
            'SGD' => '新加坡元',
            'SHP' => '聖赫勒拿鎊',
            'SLL' => '塞拉利昂利昂',
            'SOS' => '索馬里先令',
            'SRD' => '蘇里南元',
            'SSP' => '南蘇丹鎊',
            'STD' => '聖多美多布拉',
            'SVC' => '薩爾瓦多科朗',
            'SYP' => '敘利亞鎊',
            'SZL' => '斯威士蘭里蘭吉尼',
            'THB' => '泰銖',
            'TJS' => '塔吉克斯坦索莫尼',
            'TMT' => '土庫曼斯坦馬納特',
            'TND' => '突尼斯第納爾',
            'TOP' => '湯加潘加',
            'TRY' => '土耳其里拉',
            'TTD' => '特立尼達多巴哥元',
            'TWD' => '新台幣',
            'TZS' => '坦桑尼亞先令',
            'UAH' => '烏克蘭格里夫納',
            'UGX' => '烏干達先令',
            'USD' => '美元',
            'UYU' => '烏拉圭比索',
            'UZS' => '烏茲別克斯坦蘇姆',
            'VEF' => '委內瑞拉玻利瓦爾',
            'VND' => '越南盾',
            'VUV' => '瓦努阿圖瓦圖',
            'WST' => '薩摩亞塔拉',
            'XAF' => '中非法郎',
            'XAG' => '銀價盎司',
            'XAU' => '金價盎司',
            'XCD' => '東加勒比元',
            'XDR' => 'IMF特別提款權',
            'XOF' => '西非法郎',
            'XPD' => '鈀價盎司',
            'XPF' => '太平洋法郎',
            'XPT' => '珀價盎司',
            'YER' => '也門里亞爾',
            'ZAR' => '南非蘭特',
            'ZMW' => '贊比亞克瓦查',
            'ZWL' => '津巴布韋元',
            'GGP' => '根西島鎊'
        ];

        foreach ($data_en as $code => $name_en) {

            // 有一些货币取不到汇率信息，屏蔽掉。
            if (in_array($code, [
                'GGP',
                'SSP',
                'XAG',
                'XAU',
                'XPD',
                'XPT'
            ])) {
                continue;
            }

            Currency::create([
                'code' => $code,
                'name_en' => $name_en,
                'name_zh-CN' => $data_cn[$code],
                'name_zh-HK' => $data_hk[$code]
            ]);
        }
    }
}