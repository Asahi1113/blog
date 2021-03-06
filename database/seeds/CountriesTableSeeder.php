<?php

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_en = [
            244 => 'Angola',
            93 => 'Afghanistan',
            355 => 'Albania',
            213 => 'Algeria',
            376 => 'Andorra',
            1264 => 'Anguilla',
            1268 => 'Antigua',
            54 => 'Argentina',
            374 => 'Armenia',
            247 => 'Ascension',
            61 => 'Australia',
            43 => 'Austria',
            994 => 'Azerbaijan',
            1242 => 'Bahamas',
            973 => 'Bahrain',
            880 => 'Bangladesh',
            1246 => 'Barbados',
            375 => 'Belarus',
            32 => 'Belgium',
            501 => 'Belize',
            229 => 'Benin',
            1441 => 'BermudaIs.',
            591 => 'Bolivia',
            267 => 'Botswana',
            55 => 'Brazil',
            673 => 'Brunei',
            359 => 'Bulgaria',
            226 => 'Burkina-faso',
            95 => 'Burma',
            257 => 'Burundi',
            237 => 'Cameroon',
            1 => 'Canada',
            1345 => 'Cayman',
            236 => 'Central',
            235 => 'Chad',
            56 => 'Chile',
            86 => 'China',
            57 => 'Colombia',
            242 => 'Congo',
            682 => 'Cook',
            506 => 'Costa',
            53 => 'Cuba',
            357 => 'Cyprus',
            420 => 'Czech',
            45 => 'Denmark',
            253 => 'Djibouti',
            1890 => 'Dominica',
            593 => 'Ecuador',
            20 => 'Egypt',
            503 => 'EISalvador',
            372 => 'Estonia',
            251 => 'Ethiopia',
            679 => 'Fiji',
            358 => 'Finland',
            33 => 'France',
            594 => 'French',
            241 => 'Gabon',
            220 => 'Gambia',
            995 => 'Georgia',
            49 => 'Germany',
            233 => 'Ghana',
            350 => 'Gibraltar',
            30 => 'Greece',
            1473 => 'Grenada',
            1671 => 'Guam',
            502 => 'Guatemala',
            224 => 'Guinea',
            592 => 'Guyana',
            509 => 'Haiti',
            504 => 'Honduras',
            852 => 'Hongkong',
            36 => 'Hungary',
            354 => 'Iceland',
            91 => 'India',
            62 => 'Indonesia',
            98 => 'Iran',
            964 => 'Iraq',
            353 => 'Ireland',
            972 => 'Israel',
            39 => 'Italy',
            225 => 'IvoryCoast',
            1876 => 'Jamaica',
            81 => 'Japan',
            962 => 'Jordan',
            855 => 'Kampuchea',
            327 => 'Kazakstan',
            254 => 'Kenya',
            82 => 'Korea',
            965 => 'Kuwait',
            996 => 'Kyrgyzstan',
            856 => 'Laos',
            371 => 'Latvia',
            961 => 'Lebanon',
            266 => 'Lesotho',
            231 => 'Liberia',
            218 => 'Libya',
            423 => 'Liechtenstein',
            370 => 'Lithuania',
            352 => 'Luxembourg',
            853 => 'Macao',
            261 => 'Madagascar',
            265 => 'Malawi',
            60 => 'Malaysia',
            960 => 'Maldives',
            223 => 'Mali',
            356 => 'Malta',
            1670 => 'Mariana',
            596 => 'Martinique',
            230 => 'Mauritius',
            52 => 'Mexico',
            373 => 'Moldova,',
            377 => 'Monaco',
            976 => 'Mongolia',
            1664 => 'Montserrat',
            212 => 'Morocco',
            258 => 'Mozambique',
            264 => 'Namibia',
            674 => 'Nauru',
            977 => 'Nepal',
            599 => 'Netheriands',
            31 => 'Netherlands',
            64 => 'NewZealand',
            505 => 'Nicaragua',
            227 => 'Niger',
            234 => 'Nigeria',
            850 => 'North',
            47 => 'Norway',
            968 => 'Oman',
            92 => 'Pakistan',
            507 => 'Panama',
            675 => 'Papua',
            595 => 'Paraguay',
            51 => 'Peru',
            63 => 'Philippines',
            48 => 'Poland',
            689 => 'French',
            351 => 'Portugal',
            1787 => 'PuertoRico',
            974 => 'Qatar',
            262 => 'Reunion',
            40 => 'Romania',
            7 => 'Russia',
            1758 => 'Saint',
            1784 => 'Saint',
            684 => 'Samoa',
            685 => 'Western Samoa',
            378 => 'San',
            239 => 'Sao',
            966 => 'Saudi',
            221 => 'Senegal',
            248 => 'Seychelles',
            232 => 'Sierra',
            65 => 'Singapore',
            421 => 'Slovakia',
            386 => 'Slovenia',
            677 => 'Solomon',
            252 => 'Somali',
            27 => 'South',
            34 => 'Spain',
            94 => 'Sri',
            1758 => 'St.Lucia',
            1784 => 'St.Vincent',
            249 => 'Sudan',
            597 => 'Suriname',
            268 => 'Swaziland',
            46 => 'Sweden',
            41 => 'Switzerland',
            963 => 'Syriaw',
            886 => 'Taiwan',
            992 => 'Tajikstan',
            255 => 'Tanzania',
            66 => 'Thailand',
            228 => 'Togo',
            676 => 'Tonga',
            1868 => 'Trinidad',
            216 => 'Tunisia',
            90 => 'Turkey',
            993 => 'Turkmenistan',
            256 => 'Uganda',
            380 => 'Ukraine',
            971 => 'United',
            44 => 'United',
            1 => 'United',
            598 => 'Uruguay',
            233 => 'Uzbekistan',
            58 => 'Venezuela',
            84 => 'Vietnam',
            967 => 'Yemen',
            381 => 'Yugoslavia',
            27 => 'South',
            263 => 'Zimbabwe',
            243 => 'Zaire',
            260 => 'Zambia'
        ];
        $data_cn = [
            244 => '安哥拉',
            93 => '阿富汗',
            355 => '阿尔巴尼亚',
            213 => '阿尔及利亚',
            376 => '安道尔共和国',
            1264 => '安圭拉岛',
            1268 => '安提瓜和巴布达',
            54 => '阿根廷',
            374 => '亚美尼亚',
            247 => '阿森松',
            61 => '澳大利亚',
            43 => '奥地利',
            994 => '阿塞拜疆',
            1242 => '巴哈马',
            973 => '巴林',
            880 => '孟加拉国',
            1246 => '巴巴多斯',
            375 => '白俄罗斯',
            32 => '比利时',
            501 => '伯利兹',
            229 => '贝宁',
            1441 => '百慕大群岛',
            591 => '玻利维亚',
            267 => '博茨瓦纳',
            55 => '巴西',
            673 => '文莱',
            359 => '保加利亚',
            226 => '布基纳法索',
            95 => '缅甸',
            257 => '布隆迪',
            237 => '喀麦隆',
            1 => '加拿大',
            1345 => '开曼群岛',
            236 => '中非共和国',
            235 => '乍得',
            56 => '智利',
            86 => '中国',
            57 => '哥伦比亚',
            242 => '刚果',
            682 => '库克群岛',
            506 => '哥斯达黎加',
            53 => '古巴',
            357 => '塞浦路斯',
            420 => '捷克',
            45 => '丹麦',
            253 => '吉布提',
            1890 => '多米尼加共和国',
            593 => '厄瓜多尔',
            20 => '埃及',
            503 => '萨尔瓦多',
            372 => '爱沙尼亚',
            251 => '埃塞俄比亚',
            679 => '斐济',
            358 => '芬兰',
            33 => '法国',
            594 => '法属圭亚那',
            241 => '加蓬',
            220 => '冈比亚',
            995 => '格鲁吉亚',
            49 => '德国',
            233 => '加纳',
            350 => '直布罗陀',
            30 => '希腊',
            1473 => '格林纳达',
            1671 => '关岛',
            502 => '危地马拉',
            224 => '几内亚',
            592 => '圭亚那',
            509 => '海地',
            504 => '洪都拉斯',
            852 => '香港',
            36 => '匈牙利',
            354 => '冰岛',
            91 => '印度',
            62 => '印度尼西亚',
            98 => '伊朗',
            964 => '伊拉克',
            353 => '爱尔兰',
            972 => '以色列',
            39 => '意大利',
            225 => '科特迪瓦',
            1876 => '牙买加',
            81 => '日本',
            962 => '约旦',
            855 => '柬埔寨',
            327 => '哈萨克斯坦',
            254 => '肯尼亚',
            82 => '韩国',
            965 => '科威特',
            996 => '吉尔吉斯坦',
            856 => '老挝',
            371 => '拉脱维亚',
            961 => '黎巴嫩',
            266 => '莱索托',
            231 => '利比里亚',
            218 => '利比亚',
            423 => '列支敦士登',
            370 => '立陶宛',
            352 => '卢森堡',
            853 => '澳门',
            261 => '马达加斯加',
            265 => '马拉维',
            60 => '马来西亚',
            960 => '马尔代夫',
            223 => '马里',
            356 => '马耳他',
            1670 => '马里亚那群岛',
            596 => '马提尼克',
            230 => '毛里求斯',
            52 => '墨西哥',
            373 => '摩尔多瓦',
            377 => '摩纳哥',
            976 => '蒙古',
            1664 => '蒙特塞拉特岛',
            212 => '摩洛哥',
            258 => '莫桑比克',
            264 => '纳米比亚',
            674 => '瑙鲁',
            977 => '尼泊尔',
            599 => '荷属安的列斯',
            31 => '荷兰',
            64 => '新西兰',
            505 => '尼加拉瓜',
            227 => '尼日尔',
            234 => '尼日利亚',
            850 => '朝鲜',
            47 => '挪威',
            968 => '阿曼',
            92 => '巴基斯坦',
            507 => '巴拿马',
            675 => '巴布亚新几内亚',
            595 => '巴拉圭',
            51 => '秘鲁',
            63 => '菲律宾',
            48 => '波兰',
            689 => '法属玻利尼西亚',
            351 => '葡萄牙',
            1787 => '波多黎各',
            974 => '卡塔尔',
            262 => '留尼旺',
            40 => '罗马尼亚',
            7 => '俄罗斯',
            1758 => '圣卢西亚',
            1784 => '圣文森特岛',
            684 => '东萨摩亚(美)',
            685 => '西萨摩亚',
            378 => '圣马力诺',
            239 => '圣多美和普林西比',
            966 => '沙特阿拉伯',
            221 => '塞内加尔',
            248 => '塞舌尔',
            232 => '塞拉利昂',
            65 => '新加坡',
            421 => '斯洛伐克',
            386 => '斯洛文尼亚',
            677 => '所罗门群岛',
            252 => '索马里',
            27 => '南非',
            34 => '西班牙',
            94 => '斯里兰卡',
            1758 => '圣卢西亚',
            1784 => '圣文森特',
            249 => '苏丹',
            597 => '苏里南',
            268 => '斯威士兰',
            46 => '瑞典',
            41 => '瑞士',
            963 => '叙利亚',
            886 => '台湾省',
            992 => '塔吉克斯坦',
            255 => '坦桑尼亚',
            66 => '泰国',
            228 => '多哥',
            676 => '汤加',
            1868 => '特立尼达和多巴哥',
            216 => '突尼斯',
            90 => '土耳其',
            993 => '土库曼斯坦',
            256 => '乌干达',
            380 => '乌克兰',
            971 => '阿拉伯联合酋长国',
            44 => '英国',
            1 => '美国',
            598 => '乌拉圭',
            233 => '乌兹别克斯坦',
            58 => '委内瑞拉',
            84 => '越南',
            967 => '也门',
            381 => '南斯拉夫',
            27 => '南非',
            263 => '津巴布韦',
            243 => '扎伊尔',
            260 => '赞比亚'
        ];
        $data_hk = [
            244 => '安哥拉',
            93 => '阿富汗',
            355 => '阿爾巴尼亞',
            213 => '阿爾及利亞',
            376 => '安道爾共和國',
            1264 => '安圭拉島',
            1268 => '安提瓜和巴布達',
            54 => '阿根廷',
            374 => '亞美尼亞',
            247 => '阿森松',
            61 => '澳大利亞',
            43 => '奧地利',
            994 => '阿塞拜疆',
            1242 => '巴哈馬',
            973 => '巴林',
            880 => '孟加拉國',
            1246 => '巴巴多斯',
            375 => '白俄羅斯',
            32 => '比利時',
            501 => '伯利茲',
            229 => '貝寧',
            1441 => '百慕大群島',
            591 => '玻利維亞',
            267 => '博茨瓦納',
            55 => '巴西',
            673 => '文萊',
            359 => '保加利亞',
            226 => '布基納法索',
            95 => '緬甸',
            257 => '布隆迪',
            237 => '喀麥隆',
            1 => '加拿大',
            1345 => '開曼群島',
            236 => '中非共和國',
            235 => '乍得',
            56 => '智利',
            86 => '中國',
            57 => '哥倫比亞',
            242 => '剛果',
            682 => '庫克群島',
            506 => '哥斯達黎加',
            53 => '古巴',
            357 => '塞浦路斯',
            420 => '捷克',
            45 => '丹麥',
            253 => '吉布提',
            1890 => '多米尼加共和國',
            593 => '厄瓜多爾',
            20 => '埃及',
            503 => '薩爾瓦多',
            372 => '愛沙尼亞',
            251 => '埃塞俄比亞',
            679 => '斐濟',
            358 => '芬蘭',
            33 => '法國',
            594 => '法屬圭亞那',
            241 => '加蓬',
            220 => '岡比亞',
            995 => '格魯吉亞',
            49 => '德國',
            233 => '加納',
            350 => '直布羅陀',
            30 => '希臘',
            1473 => '格林納達',
            1671 => '關島',
            502 => '危地馬拉',
            224 => '幾內亞',
            592 => '圭亞那',
            509 => '海地',
            504 => '洪都拉斯',
            852 => '香港',
            36 => '匈牙利',
            354 => '冰島',
            91 => '印度',
            62 => '印度尼西亞',
            98 => '伊朗',
            964 => '伊拉克',
            353 => '愛爾蘭',
            972 => '以色列',
            39 => '意大利',
            225 => '科特迪瓦',
            1876 => '牙買加',
            81 => '日本',
            962 => '約旦',
            855 => '柬埔寨',
            327 => '哈薩克斯坦',
            254 => '肯尼亞',
            82 => '韓國',
            965 => '科威特',
            996 => '吉爾吉斯坦',
            856 => '老撾',
            371 => '拉脫維亞',
            961 => '黎巴嫩',
            266 => '萊索托',
            231 => '利比里亞',
            218 => '利比亞',
            423 => '列支敦士登',
            370 => '立陶宛',
            352 => '盧森堡',
            853 => '澳門',
            261 => '馬達加斯加',
            265 => '馬拉維',
            60 => '馬來西亞',
            960 => '馬爾代夫',
            223 => '馬里',
            356 => '馬耳他',
            1670 => '馬里亞那群島',
            596 => '馬提尼克',
            230 => '毛里求斯',
            52 => '墨西哥',
            373 => '摩爾多瓦',
            377 => '摩納哥',
            976 => '蒙古',
            1664 => '蒙特塞拉特島',
            212 => '摩洛哥',
            258 => '莫桑比克',
            264 => '納米比亞',
            674 => '瑙魯',
            977 => '尼泊爾',
            599 => '荷屬安的列斯',
            31 => '荷蘭',
            64 => '新西蘭',
            505 => '尼加拉瓜',
            227 => '尼日爾',
            234 => '尼日利亞',
            850 => '朝鮮',
            47 => '挪威',
            968 => '阿曼',
            92 => '巴基斯坦',
            507 => '巴拿馬',
            675 => '巴布亞新幾內亞',
            595 => '巴拉圭',
            51 => '秘魯',
            63 => '菲律賓',
            48 => '波蘭',
            689 => '法屬玻利尼西亞',
            351 => '葡萄牙',
            1787 => '波多黎各',
            974 => '卡塔爾',
            262 => '留尼旺',
            40 => '羅馬尼亞',
            7 => '俄羅斯',
            1758 => '聖盧西亞',
            1784 => '聖文森特島',
            684 => '東薩摩亞(美)',
            685 => '西薩摩亞',
            378 => '聖馬力諾',
            239 => '聖多美和普林西比',
            966 => '沙特阿拉伯',
            221 => '塞內加爾',
            248 => '塞舌爾',
            232 => '塞拉利昂',
            65 => '新加坡',
            421 => '斯洛伐克',
            386 => '斯洛文尼亞',
            677 => '所羅門群島',
            252 => '索馬里',
            27 => '南非',
            34 => '西班牙',
            94 => '斯里蘭卡',
            1758 => '聖盧西亞',
            1784 => '聖文森特',
            249 => '蘇丹',
            597 => '蘇里南',
            268 => '斯威士蘭',
            46 => '瑞典',
            41 => '瑞士',
            963 => '敘利亞',
            886 => '台灣省',
            992 => '塔吉克斯坦',
            255 => '坦桑尼亞',
            66 => '泰國',
            228 => '多哥',
            676 => '湯加',
            1868 => '特立尼達和多巴哥',
            216 => '突尼斯',
            90 => '土耳其',
            993 => '土庫曼斯坦',
            256 => '烏干達',
            380 => '烏克蘭',
            971 => '阿拉伯聯合酋長國',
            44 => '英國',
            1 => '美國',
            598 => '烏拉圭',
            233 => '烏茲別克斯坦',
            58 => '委內瑞拉',
            84 => '越南',
            967 => '也門',
            381 => '南斯拉夫',
            27 => '南非',
            263 => '津巴布韋',
            243 => '扎伊爾',
            260 => '贊比亞'
        ];
        $codes = [
            'AC' => '247',
            'AF' => '93',
            'AX' => '358',
            'AL' => '355',
            'DZ' => '213',
            'AD' => '1684',
            'AD' => '376',
            'AO' => '244',
            'AQ' => '672',
            'AI' => '1264',
            'AG' => '1268',
            'AR' => '54',
            'AM' => '374',
            'AW' => '297',
            'AU' => '61',
            'AT' => '43',
            'AZ' => '994',
            'AS' => '684',
            'BS' => '1242',
            'BH' => '973',
            'BD' => '880',
            'BB' => '1246',
            'BY' => '375',
            'BE' => '32',
            'BZ' => '501',
            'BJ' => '229',
            'BM' => '1441',
            'BT' => '975',
            'BO' => '591',
            'BQ' => '5997',
            'BA' => '387',
            'BW' => '267',
            'BR' => '55',
            'IO' => '246',
            'BN' => '673',
            'BG' => '359',
            'BF' => '226',
            'BI' => '257',
            'KH' => '855',
            'CM' => '237',
            'CA' => '1',
            'CV' => '238',
            'KY' => '1345',
            'CF' => '236',
            'TD' => '235',
            'CL' => '56',
            'CN' => '86',
            'CX' => '61',
            'CC' => '61891',
            'CO' => '57',
            'KM' => '269',
            'CG' => '242',
            'CD' => '243',
            'CK' => '682',
            'CR' => '506',
            'HR' => '385',
            'CU' => '53',
            'CW' => '599',
            'CY' => '357',
            'CZ' => '420',
            'DK' => '45',
            'DJ' => '253',
            'DM' => '1767',
            'DO' => '1890',
            'EC' => '593',
            'EG' => '20',
            'SV' => '503',
            'GQ' => '240',
            'ER' => '291',
            'EE' => '372',
            'ET' => '251',
            'FK' => '500',
            'FO' => '298',
            'FJ' => '679',
            'FI' => '358',
            'FR' => '33',
            'GF' => '594',
            'PF' => '689',
            'TF' => '596',
            'GA' => '241',
            'GM' => '220',
            'GE' => '995',
            'DE' => '49',
            'GH' => '233',
            'GI' => '350',
            'GR' => '30',
            'GL' => '299',
            'GD' => '1473',
            'GP' => '590',
            'GU' => '1671',
            'GT' => '502',
            'GG' => '441481',
            'GN' => '224',
            'GW' => '245',
            'GY' => '592',
            'HT' => '509',
            'HN' => '504',
            'HK' => '852',
            'HU' => '36',
            'IS' => '354',
            'IN' => '91',
            'ID' => '62',
            'IR' => '98',
            'IQ' => '964',
            'IE' => '353',
            'IM' => '441624',
            'IL' => '972',
            'IT' => '39',
            'CI' => '225',
            'JM' => '1876',
            'JP' => '81',
            'JE' => '441534',
            'JO' => '962',
            'KZ' => '327',
            'KE' => '254',
            'KI' => '686',
            'KP' => '850',
            'KR' => '82',
            'XK' => '383',
            'KW' => '965',
            'KG' => '996',
            'LA' => '856',
            'LV' => '371',
            'LB' => '961',
            'LS' => '266',
            'LR' => '231',
            'LY' => '218',
            'LI' => '423',
            'LT' => '370',
            'LU' => '352',
            'MO' => '853',
            'MK' => '389',
            'MG' => '261',
            'MW' => '265',
            'MY' => '60',
            'MV' => '960',
            'ML' => '223',
            'MT' => '356',
            'MH' => '692',
            'MQ' => '596',
            'MR' => '222',
            'MU' => '230',
            'YT' => '269',
            'MX' => '52',
            'FM' => '691',
            'MD' => '373',
            'MC' => '377',
            'MN' => '976',
            'ME' => '382',
            'MS' => '1664',
            'MA' => '212',
            'MZ' => '258',
            'MM' => '95',
            'NA' => '264',
            'NR' => '674',
            'NP' => '977',
            'NL' => '31',
            'AN' => '599',
            'NC' => '687',
            'NZ' => '64',
            'NI' => '505',
            'NE' => '227',
            'NG' => '234',
            'NU' => '683',
            'NF' => '672',
            'MP' => '1670',
            'NO' => '47',
            'OM' => '968',
            'PK' => '92',
            'PW' => '680',
            'PS' => '970',
            'PA' => '507',
            'PG' => '675',
            'PY' => '595',
            'PE' => '51',
            'PH' => '63',
            'PN' => '64',
            'PL' => '48',
            'PT' => '351',
            'PR' => '1787',
            'QA' => '974',
            'RE' => '262',
            'RO' => '40',
            'RU' => '7',
            'RW' => '250',
            'BL' => '590',
            'SH' => '290',
            'KN' => '1869',
            'LC' => '1758',
            'MF' => '590',
            'PM' => '508',
            'VC' => '1784',
            'WS' => '685',
            'SM' => '378',
            'ST' => '239',
            'SA' => '966',
            'SN' => '221',
            'RS' => '381',
            'SC' => '248',
            'SL' => '232',
            'SG' => '65',
            'SX' => '1721',
            'SK' => '421',
            'SI' => '386',
            'SB' => '677',
            'SO' => '252',
            'ZA' => '27',
            'GS' => '500',
            'SS' => '211',
            'ES' => '34',
            'LK' => '94',
            'SD' => '249',
            'SR' => '597',
            'SJ' => '47',
            'SZ' => '268',
            'SE' => '46',
            'CH' => '41',
            'SY' => '963',
            'TW' => '886',
            'TJ' => '992',
            'TZ' => '255',
            'TH' => '66',
            'TL' => '670',
            'TG' => '228',
            'TK' => '690',
            'TO' => '676',
            'TT' => '1868',
            'TN' => '216',
            'TR' => '90',
            'TM' => '993',
            'TC' => '1649',
            'TV' => '688',
            'UG' => '256',
            'UA' => '380',
            'AE' => '971',
            'GB' => '44',
            'US' => '1',
            'UY' => '598',
            'UZ' => '998',
            'VU' => '678',
            'VA' => '379',
            'VE' => '58',
            'VN' => '84',
            'VI' => '1340',
            'VG' => '1284',
            'WF' => '681',
            'EH' => '212',
            'YE' => '967',
            'ZM' => '260',
            'ZW' => '263'
        ];
        $codes = array_flip($codes);

        $languages = [
            'US' => 'en',
            'CN' => 'zh-CN',
            'HK' => 'zh-HK',
            'TW' => 'zh-HK'
        ];

        foreach ($data_en as $area_code => $name_en) {
            Country::create([
                'code' => $codes[$area_code],
                'area_code' => $area_code,
                'name_en' => $name_en,
                'name_zh-CN' => $data_cn[$area_code],
                'name_zh-HK' => $data_hk[$area_code],
                'language' => (string) @$languages[$codes[$area_code]]
            ]);
        }
    }
}
