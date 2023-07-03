<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            ["id" => "1", "name" => "MISSING COUNTRY", "code_2" => "--", "code_3" => "---",],
            ["id" => "4", "name" => "Afghanistan", "code_2" => "AF", "code_3" => "AFG",],
            ["id" => "8", "name" => "Albania", "code_2" => "AL", "code_3" => "ALB",],
            ["id" => "12", "name" => "Algeria", "code_2" => "DZ", "code_3" => "DZA",],
            ["id" => "16", "name" => "American Samoa", "code_2" => "AS", "code_3" => "ASM",],
            ["id" => "20", "name" => "Andorra", "code_2" => "AD", "code_3" => "AND",],
            ["id" => "24", "name" => "Angola", "code_2" => "AO", "code_3" => "AGO",],
            ["id" => "660", "name" => "Anguilla", "code_2" => "AI", "code_3" => "AIA",],
            ["id" => "10", "name" => "Antarctica", "code_2" => "AQ", "code_3" => "ATA",],
            ["id" => "28", "name" => "Antigua and Barbuda", "code_2" => "AG", "code_3" => "ATG",],
            ["id" => "32", "name" => "Argentina", "code_2" => "AR", "code_3" => "ARG",],
            ["id" => "51", "name" => "Armenia", "code_2" => "AM", "code_3" => "ARM",],
            ["id" => "533", "name" => "Aruba", "code_2" => "AW", "code_3" => "ABW",],
            ["id" => "36", "name" => "Australia", "code_2" => "AU", "code_3" => "AUS",],
            ["id" => "40", "name" => "Austria", "code_2" => "AT", "code_3" => "AUT",],
            ["id" => "31", "name" => "Azerbaijan", "code_2" => "AZ", "code_3" => "AZE",],
            ["id" => "44", "name" => "Bahamas (the)", "code_2" => "BS", "code_3" => "BHS",],
            ["id" => "48", "name" => "Bahrain", "code_2" => "BH", "code_3" => "BHR",],
            ["id" => "50", "name" => "Bangladesh", "code_2" => "BD", "code_3" => "BGD",],
            ["id" => "52", "name" => "Barbados", "code_2" => "BB", "code_3" => "BRB",],
            ["id" => "112", "name" => "Belarus", "code_2" => "BY", "code_3" => "BLR",],
            ["id" => "56", "name" => "Belgium", "code_2" => "BE", "code_3" => "BEL",],
            ["id" => "84", "name" => "Belize", "code_2" => "BZ", "code_3" => "BLZ",],
            ["id" => "204", "name" => "Benin", "code_2" => "BJ", "code_3" => "BEN",],
            ["id" => "60", "name" => "Bermuda", "code_2" => "BM", "code_3" => "BMU",],
            ["id" => "64", "name" => "Bhutan", "code_2" => "BT", "code_3" => "BTN",],
            ["id" => "68", "name" => "Bolivia (Plurinational State of)", "code_2" => "BO", "code_3" => "BOL",],
            ["id" => "535", "name" => "Bonaire, Sint Eustatius and Saba", "code_2" => "BQ", "code_3" => "BES",],
            ["id" => "70", "name" => "Bosnia and Herzegovina", "code_2" => "BA", "code_3" => "BIH",],
            ["id" => "72", "name" => "Botswana", "code_2" => "BW", "code_3" => "BWA",],
            ["id" => "74", "name" => "Bouvet Island", "code_2" => "BV", "code_3" => "BVT",],
            ["id" => "76", "name" => "Brazil", "code_2" => "BR", "code_3" => "BRA",],
            ["id" => "86", "name" => "British Indian Ocean Territory (the)", "code_2" => "IO", "code_3" => "IOT",],
            ["id" => "96", "name" => "Brunei Darussalam", "code_2" => "BN", "code_3" => "BRN",],
            ["id" => "100", "name" => "Bulgaria", "code_2" => "BG", "code_3" => "BGR",],
            ["id" => "854", "name" => "Burkina Faso", "code_2" => "BF", "code_3" => "BFA",],
            ["id" => "108", "name" => "Burundi", "code_2" => "BI", "code_3" => "BDI",],
            ["id" => "132", "name" => "Cabo Verde", "code_2" => "CV", "code_3" => "CPV",],
            ["id" => "116", "name" => "Cambodia", "code_2" => "KH", "code_3" => "KHM",],
            ["id" => "120", "name" => "Cameroon", "code_2" => "CM", "code_3" => "CMR",],
            ["id" => "124", "name" => "Canada", "code_2" => "CA", "code_3" => "CAN",],
            ["id" => "136", "name" => "Cayman Islands (the)", "code_2" => "KY", "code_3" => "CYM",],
            ["id" => "140", "name" => "Central African Republic (the)", "code_2" => "CF", "code_3" => "CAF",],
            ["id" => "148", "name" => "Chad", "code_2" => "TD", "code_3" => "TCD",],
            ["id" => "152", "name" => "Chile", "code_2" => "CL", "code_3" => "CHL",],
            ["id" => "156", "name" => "China", "code_2" => "CN", "code_3" => "CHN",],
            ["id" => "162", "name" => "Christmas Island", "code_2" => "CX", "code_3" => "CXR",],
            ["id" => "166", "name" => "Cocos (Keeling) Islands (the)", "code_2" => "CC", "code_3" => "CCK",],
            ["id" => "170", "name" => "Colombia", "code_2" => "CO", "code_3" => "COL",],
            ["id" => "174", "name" => "Comoros (the)", "code_2" => "KM", "code_3" => "COM",],
            ["id" => "180", "name" => "Congo (the Democratic Republic of the)", "code_2" => "CD", "code_3" => "COD",],
            ["id" => "178", "name" => "Congo (the)", "code_2" => "CG", "code_3" => "COG",],
            ["id" => "184", "name" => "Cook Islands (the)", "code_2" => "CK", "code_3" => "COK",],
            ["id" => "188", "name" => "Costa Rica", "code_2" => "CR", "code_3" => "CRI",],
            ["id" => "191", "name" => "Croatia", "code_2" => "HR", "code_3" => "HRV",],
            ["id" => "192", "name" => "Cuba", "code_2" => "CU", "code_3" => "CUB",],
            ["id" => "531", "name" => "Curaçao", "code_2" => "CW", "code_3" => "CUW",],
            ["id" => "196", "name" => "Cyprus", "code_2" => "CY", "code_3" => "CYP",],
            ["id" => "203", "name" => "Czechia", "code_2" => "CZ", "code_3" => "CZE",],
            ["id" => "384", "name" => "Côte d'Ivoire", "code_2" => "CI", "code_3" => "CIV",],
            ["id" => "208", "name" => "Denmark", "code_2" => "DK", "code_3" => "DNK",],
            ["id" => "262", "name" => "Djibouti", "code_2" => "DJ", "code_3" => "DJI",],
            ["id" => "212", "name" => "Dominica", "code_2" => "DM", "code_3" => "DMA",],
            ["id" => "214", "name" => "Dominican Republic (the)", "code_2" => "DO", "code_3" => "DOM",],
            ["id" => "218", "name" => "Ecuador", "code_2" => "EC", "code_3" => "ECU",],
            ["id" => "818", "name" => "Egypt", "code_2" => "EG", "code_3" => "EGY",],
            ["id" => "222", "name" => "El Salvador", "code_2" => "SV", "code_3" => "SLV",],
            ["id" => "226", "name" => "Equatorial Guinea", "code_2" => "GQ", "code_3" => "GNQ",],
            ["id" => "232", "name" => "Eritrea", "code_2" => "ER", "code_3" => "ERI",],
            ["id" => "233", "name" => "Estonia", "code_2" => "EE", "code_3" => "EST",],
            ["id" => "748", "name" => "Eswatini", "code_2" => "SZ", "code_3" => "SWZ",],
            ["id" => "231", "name" => "Ethiopia", "code_2" => "ET", "code_3" => "ETH",],
            ["id" => "238", "name" => "Falkland Islands (the) [Malvinas]", "code_2" => "FK", "code_3" => "FLK",],
            ["id" => "234", "name" => "Faroe Islands (the)", "code_2" => "FO", "code_3" => "FRO",],
            ["id" => "242", "name" => "Fiji", "code_2" => "FJ", "code_3" => "FJI",],
            ["id" => "246", "name" => "Finland", "code_2" => "FI", "code_3" => "FIN",],
            ["id" => "250", "name" => "France", "code_2" => "FR", "code_3" => "FRA",],
            ["id" => "254", "name" => "French Guiana", "code_2" => "GF", "code_3" => "GUF",],
            ["id" => "258", "name" => "French Polynesia", "code_2" => "PF", "code_3" => "PYF",],
            ["id" => "260", "name" => "French Southern Territories (the)", "code_2" => "TF", "code_3" => "ATF",],
            ["id" => "266", "name" => "Gabon", "code_2" => "GA", "code_3" => "GAB",],
            ["id" => "270", "name" => "Gambia (the)", "code_2" => "GM", "code_3" => "GMB",],
            ["id" => "268", "name" => "Georgia", "code_2" => "GE", "code_3" => "GEO",],
            ["id" => "276", "name" => "Germany", "code_2" => "DE", "code_3" => "DEU",],
            ["id" => "288", "name" => "Ghana", "code_2" => "GH", "code_3" => "GHA",],
            ["id" => "292", "name" => "Gibraltar", "code_2" => "GI", "code_3" => "GIB",],
            ["id" => "300", "name" => "Greece", "code_2" => "GR", "code_3" => "GRC",],
            ["id" => "304", "name" => "Greenland", "code_2" => "GL", "code_3" => "GRL",],
            ["id" => "308", "name" => "Grenada", "code_2" => "GD", "code_3" => "GRD",],
            ["id" => "312", "name" => "Guadeloupe", "code_2" => "GP", "code_3" => "GLP",],
            ["id" => "316", "name" => "Guam", "code_2" => "GU", "code_3" => "GUM",],
            ["id" => "320", "name" => "Guatemala", "code_2" => "GT", "code_3" => "GTM",],
            ["id" => "831", "name" => "Guernsey", "code_2" => "GG", "code_3" => "GGY",],
            ["id" => "324", "name" => "Guinea", "code_2" => "GN", "code_3" => "GIN",],
            ["id" => "624", "name" => "Guinea-Bissau", "code_2" => "GW", "code_3" => "GNB",],
            ["id" => "328", "name" => "Guyana", "code_2" => "GY", "code_3" => "GUY",],
            ["id" => "332", "name" => "Haiti", "code_2" => "HT", "code_3" => "HTI",],
            ["id" => "334", "name" => "Heard Island and McDonald Islands", "code_2" => "HM", "code_3" => "HMD",],
            ["id" => "336", "name" => "Holy See (the)", "code_2" => "VA", "code_3" => "VAT",],
            ["id" => "340", "name" => "Honduras", "code_2" => "HN", "code_3" => "HND",],
            ["id" => "344", "name" => "Hong Kong", "code_2" => "HK", "code_3" => "HKG",],
            ["id" => "348", "name" => "Hungary", "code_2" => "HU", "code_3" => "HUN",],
            ["id" => "352", "name" => "Iceland", "code_2" => "IS", "code_3" => "ISL",],
            ["id" => "356", "name" => "India", "code_2" => "IN", "code_3" => "IND",],
            ["id" => "360", "name" => "Indonesia", "code_2" => "ID", "code_3" => "IDN",],
            ["id" => "364", "name" => "Iran (Islamic Republic of)", "code_2" => "IR", "code_3" => "IRN",],
            ["id" => "368", "name" => "Iraq", "code_2" => "IQ", "code_3" => "IRQ",],
            ["id" => "372", "name" => "Ireland", "code_2" => "IE", "code_3" => "IRL",],
            ["id" => "833", "name" => "Isle of Man", "code_2" => "IM", "code_3" => "IMN",],
            ["id" => "376", "name" => "Israel", "code_2" => "IL", "code_3" => "ISR",],
            ["id" => "380", "name" => "Italy", "code_2" => "IT", "code_3" => "ITA",],
            ["id" => "388", "name" => "Jamaica", "code_2" => "JM", "code_3" => "JAM",],
            ["id" => "392", "name" => "Japan", "code_2" => "JP", "code_3" => "JPN",],
            ["id" => "832", "name" => "Jersey", "code_2" => "JE", "code_3" => "JEY",],
            ["id" => "400", "name" => "Jordan", "code_2" => "JO", "code_3" => "JOR",],
            ["id" => "398", "name" => "Kazakhstan", "code_2" => "KZ", "code_3" => "KAZ",],
            ["id" => "404", "name" => "Kenya", "code_2" => "KE", "code_3" => "KEN",],
            ["id" => "296", "name" => "Kiribati", "code_2" => "KI", "code_3" => "KIR",],
            ["id" => "408", "name" => "Korea (the Democratic People's Republic of)", "code_2" => "KP", "code_3" => "PRK",],
            ["id" => "410", "name" => "Korea (the Republic of)", "code_2" => "KR", "code_3" => "KOR",],
            ["id" => "414", "name" => "Kuwait", "code_2" => "KW", "code_3" => "KWT",],
            ["id" => "417", "name" => "Kyrgyzstan", "code_2" => "KG", "code_3" => "KGZ",],
            ["id" => "418", "name" => "Lao People's Democratic Republic (the)", "code_2" => "LA", "code_3" => "LAO",],
            ["id" => "428", "name" => "Latvia", "code_2" => "LV", "code_3" => "LVA",],
            ["id" => "422", "name" => "Lebanon", "code_2" => "LB", "code_3" => "LBN",],
            ["id" => "426", "name" => "Lesotho", "code_2" => "LS", "code_3" => "LSO",],
            ["id" => "430", "name" => "Liberia", "code_2" => "LR", "code_3" => "LBR",],
            ["id" => "434", "name" => "Libya", "code_2" => "LY", "code_3" => "LBY",],
            ["id" => "438", "name" => "Liechtenstein", "code_2" => "LI", "code_3" => "LIE",],
            ["id" => "440", "name" => "Lithuania", "code_2" => "LT", "code_3" => "LTU",],
            ["id" => "442", "name" => "Luxembourg", "code_2" => "LU", "code_3" => "LUX",],
            ["id" => "446", "name" => "Macao", "code_2" => "MO", "code_3" => "MAC",],
            ["id" => "450", "name" => "Madagascar", "code_2" => "MG", "code_3" => "MDG",],
            ["id" => "454", "name" => "Malawi", "code_2" => "MW", "code_3" => "MWI",],
            ["id" => "458", "name" => "Malaysia", "code_2" => "MY", "code_3" => "MYS",],
            ["id" => "462", "name" => "Maldives", "code_2" => "MV", "code_3" => "MDV",],
            ["id" => "466", "name" => "Mali", "code_2" => "ML", "code_3" => "MLI",],
            ["id" => "470", "name" => "Malta", "code_2" => "MT", "code_3" => "MLT",],
            ["id" => "584", "name" => "Marshall Islands (the)", "code_2" => "MH", "code_3" => "MHL",],
            ["id" => "474", "name" => "Martinique", "code_2" => "MQ", "code_3" => "MTQ",],
            ["id" => "478", "name" => "Mauritania", "code_2" => "MR", "code_3" => "MRT",],
            ["id" => "480", "name" => "Mauritius", "code_2" => "MU", "code_3" => "MUS",],
            ["id" => "175", "name" => "Mayotte", "code_2" => "YT", "code_3" => "MYT",],
            ["id" => "484", "name" => "Mexico", "code_2" => "MX", "code_3" => "MEX",],
            ["id" => "583", "name" => "Micronesia (Federated States of)", "code_2" => "FM", "code_3" => "FSM",],
            ["id" => "498", "name" => "Moldova (the Republic of)", "code_2" => "MD", "code_3" => "MDA",],
            ["id" => "492", "name" => "Monaco", "code_2" => "MC", "code_3" => "MCO",],
            ["id" => "496", "name" => "Mongolia", "code_2" => "MN", "code_3" => "MNG",],
            ["id" => "499", "name" => "Montenegro", "code_2" => "ME", "code_3" => "MNE",],
            ["id" => "500", "name" => "Montserrat", "code_2" => "MS", "code_3" => "MSR",],
            ["id" => "504", "name" => "Morocco", "code_2" => "MA", "code_3" => "MAR",],
            ["id" => "508", "name" => "Mozambique", "code_2" => "MZ", "code_3" => "MOZ",],
            ["id" => "104", "name" => "Myanmar", "code_2" => "MM", "code_3" => "MMR",],
            ["id" => "516", "name" => "Namibia", "code_2" => "NA", "code_3" => "NAM",],
            ["id" => "520", "name" => "Nauru", "code_2" => "NR", "code_3" => "NRU",],
            ["id" => "524", "name" => "Nepal", "code_2" => "NP", "code_3" => "NPL",],
            ["id" => "528", "name" => "Netherlands (the)", "code_2" => "NL", "code_3" => "NLD",],
            ["id" => "540", "name" => "New Caledonia", "code_2" => "NC", "code_3" => "NCL",],
            ["id" => "554", "name" => "New Zealand", "code_2" => "NZ", "code_3" => "NZL",],
            ["id" => "558", "name" => "Nicaragua", "code_2" => "NI", "code_3" => "NIC",],
            ["id" => "562", "name" => "Niger (the)", "code_2" => "NE", "code_3" => "NER",],
            ["id" => "566", "name" => "Nigeria", "code_2" => "NG", "code_3" => "NGA",],
            ["id" => "570", "name" => "Niue", "code_2" => "NU", "code_3" => "NIU",],
            ["id" => "574", "name" => "Norfolk Island", "code_2" => "NF", "code_3" => "NFK",],
            ["id" => "580", "name" => "Northern Mariana Islands (the)", "code_2" => "MP", "code_3" => "MNP",],
            ["id" => "578", "name" => "Norway", "code_2" => "NO", "code_3" => "NOR",],
            ["id" => "512", "name" => "Oman", "code_2" => "OM", "code_3" => "OMN",],
            ["id" => "586", "name" => "Pakistan", "code_2" => "PK", "code_3" => "PAK",],
            ["id" => "585", "name" => "Palau", "code_2" => "PW", "code_3" => "PLW",],
            ["id" => "275", "name" => "Palestine, State of", "code_2" => "PS", "code_3" => "PSE",],
            ["id" => "591", "name" => "Panama", "code_2" => "PA", "code_3" => "PAN",],
            ["id" => "598", "name" => "Papua New Guinea", "code_2" => "PG", "code_3" => "PNG",],
            ["id" => "600", "name" => "Paraguay", "code_2" => "PY", "code_3" => "PRY",],
            ["id" => "604", "name" => "Peru", "code_2" => "PE", "code_3" => "PER",],
            ["id" => "608", "name" => "Philippines (the)", "code_2" => "PH", "code_3" => "PHL",],
            ["id" => "612", "name" => "Pitcairn", "code_2" => "PN", "code_3" => "PCN",],
            ["id" => "616", "name" => "Poland", "code_2" => "PL", "code_3" => "POL",],
            ["id" => "620", "name" => "Portugal", "code_2" => "PT", "code_3" => "PRT",],
            ["id" => "630", "name" => "Puerto Rico", "code_2" => "PR", "code_3" => "PRI",],
            ["id" => "634", "name" => "Qatar", "code_2" => "QA", "code_3" => "QAT",],
            ["id" => "807", "name" => "Republic of North Macedonia", "code_2" => "MK", "code_3" => "MKD",],
            ["id" => "642", "name" => "Romania", "code_2" => "RO", "code_3" => "ROU",],
            ["id" => "643", "name" => "Russian Federation (the)", "code_2" => "RU", "code_3" => "RUS",],
            ["id" => "646", "name" => "Rwanda", "code_2" => "RW", "code_3" => "RWA",],
            ["id" => "638", "name" => "Réunion", "code_2" => "RE", "code_3" => "REU",],
            ["id" => "652", "name" => "Saint Barthélemy", "code_2" => "BL", "code_3" => "BLM",],
            ["id" => "654", "name" => "Saint Helena, Ascension and Tristan da Cunha", "code_2" => "SH", "code_3" => "SHN",],
            ["id" => "659", "name" => "Saint Kitts and Nevis", "code_2" => "KN", "code_3" => "KNA",],
            ["id" => "662", "name" => "Saint Lucia", "code_2" => "LC", "code_3" => "LCA",],
            ["id" => "663", "name" => "Saint Martin (French part)", "code_2" => "MF", "code_3" => "MAF",],
            ["id" => "666", "name" => "Saint Pierre and Miquelon", "code_2" => "PM", "code_3" => "SPM",],
            ["id" => "670", "name" => "Saint Vincent and the Grenadines", "code_2" => "VC", "code_3" => "VCT",],
            ["id" => "882", "name" => "Samoa", "code_2" => "WS", "code_3" => "WSM",],
            ["id" => "674", "name" => "San Marino", "code_2" => "SM", "code_3" => "SMR",],
            ["id" => "678", "name" => "Sao Tome and Principe", "code_2" => "ST", "code_3" => "STP",],
            ["id" => "682", "name" => "Saudi Arabia", "code_2" => "SA", "code_3" => "SAU",],
            ["id" => "686", "name" => "Senegal", "code_2" => "SN", "code_3" => "SEN",],
            ["id" => "688", "name" => "Serbia", "code_2" => "RS", "code_3" => "SRB",],
            ["id" => "690", "name" => "Seychelles", "code_2" => "SC", "code_3" => "SYC",],
            ["id" => "694", "name" => "Sierra Leone", "code_2" => "SL", "code_3" => "SLE",],
            ["id" => "702", "name" => "Singapore", "code_2" => "SG", "code_3" => "SGP",],
            ["id" => "534", "name" => "Sint Maarten (Dutch part)", "code_2" => "SX", "code_3" => "SXM",],
            ["id" => "703", "name" => "Slovakia", "code_2" => "SK", "code_3" => "SVK",],
            ["id" => "705", "name" => "Slovenia", "code_2" => "SI", "code_3" => "SVN",],
            ["id" => "90", "name" => "Solomon Islands", "code_2" => "SB", "code_3" => "SLB",],
            ["id" => "706", "name" => "Somalia", "code_2" => "SO", "code_3" => "SOM",],
            ["id" => "710", "name" => "South Africa", "code_2" => "ZA", "code_3" => "ZAF",],
            ["id" => "239", "name" => "South Georgia and the South Sandwich Islands", "code_2" => "GS", "code_3" => "SGS",],
            ["id" => "728", "name" => "South Sudan", "code_2" => "SS", "code_3" => "SSD",],
            ["id" => "724", "name" => "Spain", "code_2" => "ES", "code_3" => "ESP",],
            ["id" => "144", "name" => "Sri Lanka", "code_2" => "LK", "code_3" => "LKA",],
            ["id" => "729", "name" => "Sudan (the)", "code_2" => "SD", "code_3" => "SDN",],
            ["id" => "740", "name" => "Suriname", "code_2" => "SR", "code_3" => "SUR",],
            ["id" => "744", "name" => "Svalbard and Jan Mayen", "code_2" => "SJ", "code_3" => "SJM",],
            ["id" => "752", "name" => "Sweden", "code_2" => "SE", "code_3" => "SWE",],
            ["id" => "756", "name" => "Switzerland", "code_2" => "CH", "code_3" => "CHE",],
            ["id" => "760", "name" => "Syrian Arab Republic", "code_2" => "SY", "code_3" => "SYR",],
            ["id" => "158", "name" => "Taiwan (Province of China)", "code_2" => "TW", "code_3" => "TWN",],
            ["id" => "762", "name" => "Tajikistan", "code_2" => "TJ", "code_3" => "TJK",],
            ["id" => "834", "name" => "Tanzania, United Republic of", "code_2" => "TZ", "code_3" => "TZA",],
            ["id" => "764", "name" => "Thailand", "code_2" => "TH", "code_3" => "THA",],
            ["id" => "626", "name" => "Timor-Leste", "code_2" => "TL", "code_3" => "TLS",],
            ["id" => "768", "name" => "Togo", "code_2" => "TG", "code_3" => "TGO",],
            ["id" => "772", "name" => "Tokelau", "code_2" => "TK", "code_3" => "TKL",],
            ["id" => "776", "name" => "Tonga", "code_2" => "TO", "code_3" => "TON",],
            ["id" => "780", "name" => "Trinidad and Tobago", "code_2" => "TT", "code_3" => "TTO",],
            ["id" => "788", "name" => "Tunisia", "code_2" => "TN", "code_3" => "TUN",],
            ["id" => "792", "name" => "Turkey", "code_2" => "TR", "code_3" => "TUR",],
            ["id" => "795", "name" => "Turkmenistan", "code_2" => "TM", "code_3" => "TKM",],
            ["id" => "796", "name" => "Turks and Caicos Islands (the)", "code_2" => "TC", "code_3" => "TCA",],
            ["id" => "798", "name" => "Tuvalu", "code_2" => "TV", "code_3" => "TUV",],
            ["id" => "800", "name" => "Uganda", "code_2" => "UG", "code_3" => "UGA",],
            ["id" => "804", "name" => "Ukraine", "code_2" => "UA", "code_3" => "UKR",],
            ["id" => "784", "name" => "United Arab Emirates (the)", "code_2" => "AE", "code_3" => "ARE",],
            ["id" => "826", "name" => "United Kingdom of Great Britain and Northern Ireland (the)", "code_2" => "GB", "code_3" => "GBR",],
            ["id" => "581", "name" => "United States Minor Outlying Islands (the)", "code_2" => "UM", "code_3" => "UMI",],
            ["id" => "840", "name" => "United States of America (the)", "code_2" => "US", "code_3" => "USA",],
            ["id" => "858", "name" => "Uruguay", "code_2" => "UY", "code_3" => "URY",],
            ["id" => "860", "name" => "Uzbekistan", "code_2" => "UZ", "code_3" => "UZB",],
            ["id" => "548", "name" => "Vanuatu", "code_2" => "VU", "code_3" => "VUT",],
            ["id" => "862", "name" => "Venezuela (Bolivarian Republic of)", "code_2" => "VE", "code_3" => "VEN",],
            ["id" => "704", "name" => "Viet Nam", "code_2" => "VN", "code_3" => "VNM",],
            ["id" => "92", "name" => "Virgin Islands (British)", "code_2" => "VG", "code_3" => "VGB",],
            ["id" => "850", "name" => "Virgin Islands (U.S.)", "code_2" => "VI", "code_3" => "VIR",],
            ["id" => "876", "name" => "Wallis and Futuna", "code_2" => "WF", "code_3" => "WLF",],
            ["id" => "732", "name" => "Western Sahara", "code_2" => "EH", "code_3" => "ESH",],
            ["id" => "887", "name" => "Yemen", "code_2" => "YE", "code_3" => "YEM",],
            ["id" => "894", "name" => "Zambia", "code_2" => "ZM", "code_3" => "ZMB",],
            ["id" => "716", "name" => "Zimbabwe", "code_2" => "ZW", "code_3" => "ZWE",],
            ["id" => "248", "name" => "Åland Islands", "code_2" => "AX", "code_3" => "ALA",],


        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
