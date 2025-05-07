<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = [
        //     [
        //         "parent" => [
        //             "id" => 1,
        //             "description" => "Kesehatan",
        //             "child" => [
        //                 [
        //                     "source" => [
        //                         "id" => null,
        //                         "name" => "Yahoo Entertainment"
        //                     ],
        //                     "author" => null,
        //                     "title" => "GameStop raises $2.14 billion amid Roaring Kitty-fueled retail trading frenzy - Yahoo Finance",
        //                     "description" => null,
        //                     "url" => "https://finance.yahoo.com/news/gamestop-raises-2-14-billion-230142169.html",
        //                     "urlToImage" => null,
        //                     "publishedAt" => "2024-06-11T23:01:42Z",
        //                     "content" => "If you click 'Accept all', we and our partners, including 238 who are part of the IAB Transparency & Consent Framework, will also store and/or access information on a device (in other words, use … [+678 chars]"
        //                 ],
        //                 [
        //                     "source" => [
        //                         "id" => "the-wall-street-journal",
        //                         "name" => "The Wall Street Journal"
        //                     ],
        //                     "author" => "Jessica Toonkel",
        //                     "title" => "Exclusive | Shari Redstone Ends Discussions With Skydance on Paramount Deal - The Wall Street Journal",
        //                     "description" => "Redstone likely to pursue sale of National Amusements, the family company that controls Paramount, with other potential bidders",
        //                     "url" => "https://www.wsj.com/business/media/shari-redstones-nai-decides-to-stop-discussions-with-skydance-1b81985b",
        //                     "urlToImage" => "https://images.wsj.net/im-969233/social",
        //                     "publishedAt" => "2024-06-11T22:34:00Z",
        //                     "content" => null
        //                 ],
        //                 [
        //                     "source" => [
        //                         "id" => "usa-today",
        //                         "name" => "USA Today"
        //                     ],
        //                     "author" => "USA TODAY",
        //                     "title" => "Sodas recalled over dyes linked to cancer, FDA says: What to know - USA TODAY",
        //                     "description" => null,
        //                     "url" => "https://www.usatoday.com/story/money/food/2024/06/11/fda-soda-recall-2024-cancer-causing-chemical/74048689007/",
        //                     "urlToImage" => null,
        //                     "publishedAt" => "2024-06-11T22:29:14Z",
        //                     "content" => null
        //                 ],
        //                 [
        //                     "source" => [
        //                         "id" => null,
        //                         "name" => "Newsday"
        //                     ],
        //                     "author" => "Brianne Ledda",
        //                     "title" => "JetBlue adding service out of Islip's Long Island MacArthur Airport to Florida - Newsday",
        //                     "description" => "Starting in October, JetBlue will operate daily service between Islip and Orlando, and four round-trip flights weekly between Islip and Fort Lauderdale and Palm Beach.",
        //                     "url" => "https://www.newsday.com/long-island/towns/jetblue-macarthur-airport-cibcwyvm",
        //                     "urlToImage" => "https://cdn.newsday.com/ace/c:YWYzNzNkMDYtZTYyZi00:MzUyNjli/landscape/1280",
        //                     "publishedAt" => "2024-06-11T21:33:52Z",
        //                     "content" => "JetBlue Airways will start flying out of Long Island MacArthur Airport in Ronkonkoma in October, with nonstop service to three Florida destinations, Islip Town officials said Tuesday.\r\nJetBlue, the s… [+9152 chars]"
        //                 ]
        //             ]
        //         ]
        //     ],
        //     [
        //         "parent" => [
        //             "id" => 2,
        //             "description" => "Life Style",
        //             "child" => [
        //                 [
        //                     "source" => [
        //                         "id" => null,
        //                         "name" => "The Seattle Times"
        //                     ],
        //                     "author" => "Lauren Rosenblatt",
        //                     "title" => "Amazon commits an additional $1.4 billion to affordable housing - The Seattle Times",
        //                     "description" => "Amazon invested $2.2 billion in affordable housing units faster than it expected. Now, it has committed an additional $1.4 billion for more projects.",
        //                     "url" => "https://www.seattletimes.com/business/amazon/amazon-commits-an-additional-1-4-billion-to-affordable-housing/",
        //                     "urlToImage" => "https://images.seattletimes.com/wp-content/uploads/2024/06/06112024_tzr_tzr_164354.jpg?d=1200x630",
        //                     "publishedAt" => "2024-06-11T21:29:42Z",
        //                     "content" => "Amazon is expanding its commitment to affordable housing with an additional $1.4 billion investment to help create and preserve affordable housing units near three major cities, the company announced… [+5207 chars]"
        //                 ],
        //                 [
        //                     "source" => [
        //                         "id" => null,
        //                         "name" => "CNET"
        //                     ],
        //                     "author" => null,
        //                     "title" => "Elon Musk Uses X To Air His Grievances Over Apple, OpenAI Partnership. Here's Why - CNET",
        //                     "description" => "Musk, who's developing an AI chatbot to challenge ChatGPT, said he may ban his employees from using Apple devices after the iPhone maker inked a deal with OpenAI, a company he's suing.",
        //                     "url" => "https://www.cnet.com/tech/mobile/elon-musk-uses-x-to-air-his-grievances-over-apple-openai-partnership-heres-why/",
        //                     "urlToImage" => "https://www.cnet.com/a/img/resize/fbcd9b59ee34f2d8e79be44e51feb621a9ed235b/hub/2024/06/11/f9a2584e-de77-49b1-88d9-9358822139ff/gettyimages-2151277359.jpg?auto=webp&fit=crop&height=675&width=1200",
        //                     "publishedAt" => "2024-06-11T21:28:00Z",
        //                     "content" => "Elon Musk's relationship with Apple and OpenAI seems to be deteriorating. On Monday, Musk took to X, the social media platform formerly known as Twitter, to air his grievances over Apple's recently a… [+2822 chars]"
        //                 ],
        //                 [
        //                     "source" => [
        //                         "id" => null,
        //                         "name" => "CNBC"
        //                     ],
        //                     "author" => "Diana Olick",
        //                     "title" => "Mortgage demand falls to lowest level in more than three months - CNBC",
        //                     "description" => "Mortgage demand fell again last week, as interest rates remained high.",
        //                     "url" => "https://www.cnbc.com/2024/06/11/mortgage-demand-falls-to-lowest-level-in-more-than-three-months.html",
        //                     "urlToImage" => "https://image.cnbcfm.com/api/v1/image/107273295-1694197028495-gettyimages-157362863-img_3619_1_705311.jpeg?v=1694197029&w=1920&h=1080",
        //                     "publishedAt" => "2024-06-11T21:17:00Z",
        //                     "content" => "After showing some signs of life in May, mortgage demand is now falling again, as interest rates remain high. \r\nTotal application volume fell 5% last week compared with the previous week, according t… [+1875 chars]"
        //                 ],
        //                 [
        //                     "source" => [
        //                         "id" => "bloomberg",
        //                         "name" => "Bloomberg"
        //                     ],
        //                     "author" => "Katrina Nicholas",
        //                     "title" => "Crypto Miners in Sweden Return to Low Margins After Energy Bill Surge - Bloomberg",
        //                     "description" => "Higher costs, increased regulation and volatile digital asset prices are making it harder for Sweden's crypto miners to operate profitably.",
        //                     "url" => "https://www.bloomberg.com/news/articles/2024-06-11/crypto-miners-in-sweden-return-to-low-margins-after-energy-bill-surge",
        //                     "urlToImage" => "https://assets.bwbx.io/images/users/iqjWHBFdfxIU/ihU1FWevHbdU/v1/1200x900.jpg",
        //                     "publishedAt" => "2024-06-11T21:00:00Z",
        //                     "content" => "For more than a decade, Sweden has been seen as a haven for cryptocurrency miners, thanks to its abundant supply of cheap renewable energy and stable regulatory environment.\r\nYet after the industry’s… [+3890 chars]"
        //                 ]
        //             ]
        //         ]
        //     ],
        //     [
        //         "parent" => [
        //             "id" => 3,
        //             "description" => "Politik",
        //             "child" => [
        //                 [
        //                     "source" => [
        //                         "id" => null,
        //                         "name" => "Digital Trends"
        //                     ],
        //                     "author" => "Giovanni Colantonio",
        //                     "title" => "Diablo 4's endgame grind is getting a big fix next month - Digital Trends",
        //                     "description" => "Blizzard has announced a massive patch coming to Diablo 4 next month that’ll address player feedback with some sweeping fixes.",
        //                     "url" => "https://www.digitaltrends.com/gaming/diablo-4-1-1-0-patch-announce/",
        //                     "urlToImage" => "https://www.digitaltrends.com/wp-content/uploads/2024/06/diablo-4-endgame-patch.jpg?resize=1200%2C630&p=1",
        //                     "publishedAt" => "2024-06-11T20:58:47Z",
        //                     "content" => "Diablo 4's endgame grind is getting a big fix next month\r\nBy\r\nGiovanni Colantonio\r\nJune 11, 2024\r\nBlizzard Entertainment announced that Diablo 4 will receive a major patch update on July 18. Version… [+2900 chars]"
        //                 ]
        //             ]
        //         ]
        //     ]
        // ];

        $data = '{"parent" : {
                    "id" : 1,
                    "description" : "Kesehatan",
                    "child" : [
                    {
                    "source": {
                        "id": null,
                        "name": "Plos.org"
                    },
                    "author": "J. Bradley Layton, Patricia C. Lloyd, Lauren S. Peetluk, Yixin Jiao, Djeneba Audrey Djibo, Joann F. Gruber, Jie Deng, Christine Bui, An-Chi Lo, Rachel P. Ogilvie, Ron Parambi, Michael Miller, Jennifer Song, Lisa B. Weatherby, Sylvia Cho, Hui Lee Wong, Tainya C. Clarke, Jessica Rose Hervol, Dóra Illei, Elizabeth J. Bell, Grace Wenya Yang, John D. Seeger, Michael Wernecke, Morgan M. Richey, Richard A. Forshee, Steven A. Anderson, Yoganand Chillarige, Cheryl N. McMahill-Walraven, Kandace L. Amend, Mary S. Anthony, Azadeh Shoaibi",
                    "title": "Effectiveness over time of a primary series of the original monovalent COVID-19 vaccines in adults in the United States",
                    "description": "With data from 2 US claims databases (Optum, CVS Health) supplemented with Immunization Information System COVID-19 vaccine records, we evaluated overall and time-specific vaccine effectiveness (VE) of an initial primary series for 3 monovalent COVID-19 vacci…",
                    "url": "https://journals.plos.org/plosone/article?id=10.1371/journal.pone.0320434",
                    "urlToImage": "https://journals.plos.org/plosone/article/figure/image?id=10.1371/journal.pone.0320434.g004&size=inline",
                    "publishedAt": "2025-05-06T14:00:00Z",
                    "content": "Abstract\r\nWith data from 2 US claims databases (Optum, CVS Health) supplemented with Immunization Information System COVID-19 vaccine records, we evaluated overall and time-specific vaccine effective… [+57424 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Plos.org"
                    },
                    "author": "Mehmood Ahmad, Naeem Rasool, Rana Muhammad Zahid Mushtaq, Sammina Mahmood, Abdur Rauf Khalid, Waqas Ahmad, Bilal Mahmood Beg, Mostafa A. Abdel Maksoud, Abdul Aziz Alamri, Adeel Sattar",
                    "title": "Understanding the impact of moxifloxacin on immune function: Findings from cytokine analyses and immunological assays in mice",
                    "description": "(1) Background: Moxifloxacin (MXF) is a fluorinated quinolone antibiotic used most commonly due to its broad spectrum of activity. However, the immunomodulatory effects of MXF remain underexplored. This study aims to investigate the patterns of immunomodulato…",
                    "url": "https://journals.plos.org/plosone/article?id=10.1371/journal.pone.0321961",
                    "urlToImage": "https://journals.plos.org/plosone/article/figure/image?id=10.1371/journal.pone.0321961.g004&size=inline",
                    "publishedAt": "2025-05-06T14:00:00Z",
                    "content": "Abstract\r\n(1) Background: Moxifloxacin (MXF) is a fluorinated quinolone antibiotic used most commonly due to its broad spectrum of activity. However, the immunomodulatory effects of MXF remain undere… [+47480 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Plos.org"
                    },
                    "author": "Mani Kalaivani, Chitralok Hemraj, Varhlunchhungi Varhlunchhungi, Lakshmy Ramakrishnan, Sumit Malhotra, Sanjeev Kumar Gupta, Raman Kumar Marwaha, Ransi Ann Abraham, Monika Arora, Tina Rawal, Maroof Ahmad Khan, Aditi Sinha, Nikhil Tandon",
                    "title": "Cardio-metabolic traits and its socioeconomic differentials among school children including metabolically obese normal weight phenotypes in India: A post-COVID baseline characteristics of LEAP-C cohort",
                    "description": "Background Cardio-metabolic risks emerge in early life and progress further in adult life. In recent times, COVID-19 pandemic aggravated risks owing to poor food security and diet quality. We aimed to assess the prevalence of cardiometabolic traits including …",
                    "url": "https://journals.plos.org/plosone/article?id=10.1371/journal.pone.0321898",
                    "urlToImage": "https://journals.plos.org/plosone/article/figure/image?id=10.1371/journal.pone.0321898.g007&size=inline",
                    "publishedAt": "2025-05-06T14:00:00Z",
                    "content": "Citation: Kalaivani M, Hemraj C, Varhlunchhungi V, Ramakrishnan L, Malhotra S, Gupta SK, et al. (2025) Cardio-metabolic traits and its socioeconomic differentials among school children including meta… [+43435 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Fair Observer"
                    },
                    "author": "Imran Khalid",
                    "title": "Trump’s Attack on Harvard Is Just the Opening Salvo",
                    "description": "“Harvard is a threat to democracy,” declared US President Donald Trump in a Truth Social post. He accused the university of being an “Anti-Semitic, Far Left Institution” and a breeding ground for “crazed lunatics” who “spew fake ANGER AND HATE.” This tirade m…",
                    "url": "https://www.fairobserver.com/politics/trumps-attack-on-harvard-is-just-the-opening-salvo/",
                    "urlToImage": "https://www.fairobserver.com/wp-content/uploads/2025/05/Trumps-Attack-on-Harvard.jpg",
                    "publishedAt": "2025-05-06T13:53:07Z",
                    "content": "“Harvard is a threat to democracy,” declared US President Donald Trump in a Truth Social post. He accused the university of being an “Anti-Semitic, Far Left Institution” and a breeding ground for “cr… [+6812 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "DW (English)"
                    },
                    "author": "Deutsche Welle",
                    "title": "Momia austriaca bien conservada fue embalsamada con un método desconocido hasta ahora: por vía anal",
                    "description": "Un grupo de investigadores encontró en Austria a la primera momia en ser embalsamada a través del recto. Se cree que el cuerpo se trataría de un antiguo capellán con ascendencia aristocrática local. Una momia encontrada en Sankt Thomas am Blasenstein (Austria…",
                    "url": "https://www.dw.com/es/momia-austriaca-bien-conservada-fue-embalsamada-con-un-m%C3%A9todo-desconocido-hasta-ahora-por-v%C3%ADa-anal/a-72449110",
                    "urlToImage": "https://static.dw.com/image/72449928_6.jpg",
                    "publishedAt": "2025-05-06T13:37:00Z",
                    "content": "Una momia encontrada en Sankt Thomas am Blasenstein (Austria) y conocida como el \"capellán secado al aire\" ha sido embalsamada de una manera que hasta ahora era desconocida: por el recto, según detal… [+2797 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Boston Herald"
                    },
                    "author": "Associated Press",
                    "title": "The federal Bureau of Prisons has lots of problems. Reopening Alcatraz is now one of them",
                    "description": "The Bureau of Prisons already struggles with short staffing, chronic violence and crumbling infrastructure.",
                    "url": "https://www.bostonherald.com/2025/05/06/trump-alcatraz-bureau-of-prisons/",
                    "urlToImage": "https://www.bostonherald.com/wp-content/uploads/2025/05/APTOPIX_Trump_Alcatraz_54655_11ba48-1.jpg?w=1024&h=642",
                    "publishedAt": "2025-05-06T11:54:48Z",
                    "content": "By MICHAEL R. SISAK and MICHAEL BALSAMO, Associated Press\r\nEleven inmate deaths in less than two months. More than 4,000 staff vacancies. A $3 billion repair backlog.\r\nAnd now, a stunning directive f… [+5928 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "The Denver Post"
                    },
                    "author": "The Associated Press",
                    "title": "The federal Bureau of Prisons has lots of problems. Reopening Alcatraz is now one of them",
                    "description": "The Bureau of Prisons already struggles with short staffing, chronic violence and crumbling infrastructure.",
                    "url": "https://www.denverpost.com/2025/05/06/trump-alcatraz-bureau-of-prisons/",
                    "urlToImage": "https://www.denverpost.com/wp-content/uploads/2025/05/APTOPIX_Trump_Alcatraz_54655_11ba48-1.jpg?w=1024&h=642",
                    "publishedAt": "2025-05-06T11:54:48Z",
                    "content": "By MICHAEL R. SISAK and MICHAEL BALSAMO, Associated Press\r\nEleven inmate deaths in less than two months. More than 4,000 staff vacancies. A $3 billion repair backlog.\r\nAnd now, a stunning directive f… [+5928 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Lithub.com"
                    },
                    "author": "Dean Van Nguyen",
                    "title": "How New York City’s Radical Social Movements Gave Rise to Hip-Hop",
                    "description": "Lincoln Hospital, Mott Haven, the Bronx. Like many medical centers that serve America’s sprawling metropolises, this striking redbrick building is a sad temple in hip-hop history. On August 27, 1987, DJ Scott La Rock, producer and co-founder of Boogie Down Pr…",
                    "url": "https://lithub.com/how-new-york-citys-radical-social-movements-gave-rise-to-hip-hop/",
                    "urlToImage": "https://s26162.pcdn.co/wp-content/uploads/2025/04/X-Ray-Truck-1.jpg",
                    "publishedAt": "2025-05-06T08:58:09Z",
                    "content": "Lincoln Hospital, Mott Haven, the Bronx. Like many medical centers that serve America’s sprawling metropolises, this striking redbrick building is a sad temple in hip-hop history. On August 27, 1987,… [+15092 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Eleconomista.es"
                    },
                    "author": "elEconomista.es",
                    "title": "Un descubrimiento molecular liderado por químicos podría conducir a pruebas de tuberculosis más sencillas y rápidas",
                    "description": "Químicos del MIT (Estados Unidos) han encontrado una forma de identificar una molécula de azúcar compleja en las paredes celulares de Mycobacterium tuberculosis, el patógeno más mortal del mundo. Este descubrimiento molecular podría conducir a pruebas de tube…",
                    "url": "https://www.eleconomista.es/salud-bienestar/ultimas-noticias/noticias/13349076/05/25/un-descubrimiento-molecular-liderado-por-quimicos-podria-conducir-a-pruebas-de-tuberculosis-mas-sencillas-y-rapidas.html",
                    "urlToImage": "https://s03.s3c.es/imag/_v0/1200x655/3/4/b/quimicos-salud.jpg",
                    "publishedAt": "2025-05-06T08:23:24Z",
                    "content": "Químicos del MIT (Estados Unidos) han encontrado una forma de identificar una molécula de azúcar compleja en las paredes celulares de Mycobacterium tuberculosis, el patógeno más mortal del mundo. Est… [+6163 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Infosalus.com"
                    },
                    "author": null,
                    "title": "Un descubrimiento podría conducir a pruebas de tuberculosis más sencillas y rápidas",
                    "description": "Químicos del MIT (Estados Unidos) han encontrado una forma de identificar una molécula de azúcar compleja en las paredes celulares de Mycobacterium tuberculosis, el patógeno más mortal del mundo. Este descubrimiento molecular podría conducir a pruebas de tube…",
                    "url": "https://www.infosalus.com/salud-investigacion/noticia-descubrimiento-podria-conducir-pruebas-tuberculosis-mas-sencillas-rapidas-20250506073848.html",
                    "urlToImage": "https://img.europapress.es/fotoweb/fotonoticia_20250506073848_1200.jpg",
                    "publishedAt": "2025-05-06T05:38:48Z",
                    "content": "MADRID, 6 May. (EUROPA PRESS) - \r\n   Químicos del MIT (Estados Unidos) han encontrado una forma de identificar una molécula de azúcar compleja en las paredes celulares de Mycobacterium tuberculosis, … [+6194 chars]"
                    },
                    {
                    "source": {
                        "id": "abc-news-au",
                        "name": "ABC News (AU)"
                    },
                    "author": "Tom Hartley and Kate Ainsworth",
                    "title": "I was dying: After a heavy downpour, Luke spent 12 long days fighting for his life",
                    "description": "Luke Bantoft has survived melioidosis but the experience has left him \"petrified\" of returning to his home where he believes he caught it. Experts say the source of the outbreak could be the Bruce Highway upgrade.",
                    "url": "https://www.abc.net.au/news/2025-05-06/deadly-melioidosis-outbreak-queensland-bruce-highway-soil/105174550",
                    "urlToImage": "https://live-production.wcms.abc-cdn.net.au/40ab8abb64e4a380722d3a6cf86c35ba?impolicy=wcms_watermark_news&cropH=2384&cropW=4238&xPos=1&yPos=0&width=862&height=485&imformat=generic",
                    "publishedAt": "2025-05-06T04:57:48Z",
                    "content": "Luke Bantoft knew he was dying.\r\nIt was the middle of March, and the 42-year-old type one diabetic had been experiencing a debilitating \"domino effect\" of symptoms after weeks of rain in Cairns.\r\n\"I … [+10856 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Yahoo Entertainment"
                    },
                    "author": "Sheikh Sabiha ALAM",
                    "title": "US aid cuts push Bangladeshs health sector to the edge",
                    "description": "Bangladesh hoped to celebrate progress towards eradicating tuberculosis this year, having already slashed the numbers dying from the preventable and curable ...",
                    "url": "https://www.yahoo.com/news/us-aid-cuts-push-bangladeshs-030327888.html",
                    "urlToImage": "https://media.zenfs.com/en/afp.com/85f54e3b943519234f6a2b14d923cd7d",
                    "publishedAt": "2025-05-06T03:03:27Z",
                    "content": "Bangladesh hoped to celebrate progress towards eradicating tuberculosis this year, having already slashed the numbers dying from the preventable and curable disease by tens of thousands each year.\r\nI… [+5248 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "NDTV News"
                    },
                    "author": "Ritu Singh",
                    "title": "Rolls Royces, $100 Million Mansion: The Lavish Life Of Balvinder Singh Sahni",
                    "description": "He is the founder and chairman of the RSG Group of Companies, a multi-billion-dirham conglomerate operating in real estate, automotive, industrial equipment, and investments across the Middle East, the US, India, and South Asia.",
                    "url": "https://www.ndtv.com/world-news/rs-80-crore-rolls-royce-number-100-million-mansion-into-the-lavish-life-of-convicted-indian-origin-billionaire-balvinder-singh-sahni-8340535",
                    "urlToImage": "https://c.ndtvimg.com/2025-05/h22aogag_balvinder-singh-sahni_625x300_06_May_25.jpeg",
                    "publishedAt": "2025-05-06T02:43:47Z",
                    "content": "Summary is AI generated, newsroom reviewed.\r\nIndian businessman Balvinder Singh Sahni sentenced to five years in jail.\r\nDubai court confiscated 150 million Dirham and fined him 500,000 Dirham.\r\nSahni… [+3298 chars]"
                    },
                    {
                    "source": {
                        "id": "cbc-news",
                        "name": "CBC News"
                    },
                    "author": null,
                    "title": "Scientists discover 18th-century Austrian mummy was embalmed through the rectum",
                    "description": "Scientists have figured out how the body of an 18th-century Austrian vicar has remained so well-preserved for nearly 300 years — and it’s unlike anything they’ve seen before.",
                    "url": "https://www.cbc.ca/radio/asithappens/austrian-mummy-mystery-1.7526930",
                    "urlToImage": "https://i.cbc.ca/1.7526956.1746474396!/fileImage/httpImage/image.jpg_gen/derivatives/16x9_1180/2323571317.jpg?im=Resize%3D620",
                    "publishedAt": "2025-05-05T22:36:59Z",
                    "content": "Scientists have figured out how the body of an 18th-century Austrian vicar has remained so well-preserved for nearly 300 years and its unlike anything theyve seen before.\r\nKept in a church crypt in… [+5150 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Science Daily"
                    },
                    "author": null,
                    "title": "New molecular label could lead to simpler, faster tuberculosis tests",
                    "description": "Chemists found a way to identify a complex sugar molecule in the cell walls of Mycobacterium tuberculosis, the worlds deadliest pathogen. This labeling could lead to simpler, faster TB tests.",
                    "url": "https://www.sciencedaily.com/releases/2025/05/250505170649.htm",
                    "urlToImage": "https://www.sciencedaily.com/images/scidaily-icon.png",
                    "publishedAt": "2025-05-05T21:06:49Z",
                    "content": "Tuberculosis, the worlds deadliest infectious disease, is estimated to infect around 10 million people each year, and kills more than 1 million annually. Once established in the lungs, the bacteria… [+6323 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Eldiario.es"
                    },
                    "author": "Carlos Hernández",
                    "title": "La desconocida historia de las españolas del campo nazi de Mauthausen",
                    "description": "Al menos trescientas españolas fueron deportadas a campos de concentración nazis en los que sufrieron tanto o más que sus compañeros varones. Carlota García, Angelines Martínez, Feliciana Pintos, Herminia Martorell, Carmen Zapater, Rosita de Silva y Alfonsina…",
                    "url": "https://www.eldiario.es/sociedad/desconocida-historia-espanolas-campo-nazi-mauthausen_1_12272822.html",
                    "urlToImage": "https://static.eldiario.es/clip/a8b230d5-2584-4e2b-a86b-7c90c35cfcef_facebook-watermarked-aspect-ratio_default_0.jpg",
                    "publishedAt": "2025-05-05T20:13:06Z",
                    "content": "Campo de concentración de Mauthausen (Austria), 7 de marzo de 1945. Josep Ester y Joaquín Olaso son dos de los apenas 2.500 republicanos que continúan con vida entre las alambradas del siniestro reci… [+618 chars]"
                    },
                    {
                    "source": {
                        "id": "la-nacion",
                        "name": "La Nacion"
                    },
                    "author": "Alejandro Rapetti",
                    "title": "Escribió una carta en forma de bolero para contarle a su amada que estaba muriendo y se convirtió en un clásico atemporal",
                    "description": "Vivió solo 23 años, pero el tiempo le alcanzó para escribir algunas de las grandes piezas de la canción cubana de la primera mitad del siglo XX",
                    "url": "https://www.lanacion.com.ar/espectaculos/musica/escribio-una-carta-en-forma-de-bolero-para-contarle-a-su-amada-que-estaba-muriendo-y-se-convirtio-en-nid05052025/",
                    "urlToImage": "https://resizer.glanacion.com/resizer/v2/pedro-XH7SPIFUPRDSBA7LJN4Q5334RQ.JPG?auth=3b3bb76d58662703ffda93ab66fa0b085b7f31450ac4f98d2222f52a5776b57c&width=1200&quality=70&smart=false&height=800",
                    "publishedAt": "2025-05-05T19:10:27Z",
                    "content": "De origen cubano, se sabe, el bolero se caracteriza por su ritmo lento y melancólico, melodías dulces y letras que hablan de amor, desamor y nostalgia. Surgió a finales del siglo XIX y a lo largo del… [+6541 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Mail.ru"
                    },
                    "author": "Ольга Шумейко",
                    "title": "Разработан быстрый неинвазивный тест для выявления туберкулеза",
                    "description": "Американские молекулярные биологи отмечают, что метод опирается в своей работе на то, что вызывающая его палочка Коха обладает необычно сложно устроенной внешней оболочкой, покрытой большим числом гликанов.",
                    "url": "https://news.mail.ru/society/66007093/",
                    "urlToImage": "https://news.mail.ru/social_preview/66007093/?time=d8e174deed235ca58da59c1fb9ac81cf",
                    "publishedAt": "2025-05-05T19:05:15Z",
                    "content": ",   (Mycobacterium tuberculosis) , , .           .\r\n,   ,  ,    ,      ,   Mycobacterium tuberculosis       .   ,         , ManLAM.\r\n,       ,    Mycobacterium tuberculosis          -. ,   , , «» ,  … [+12 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Mit.edu"
                    },
                    "author": "Anne Trafton | MIT News",
                    "title": "New molecular label could lead to simpler, faster tuberculosis tests",
                    "description": "MIT chemists found a way to identify a complex sugar molecule in the cell walls of Mycobacterium tuberculosis, the world’s deadliest pathogen. This labeling could lead to simpler, faster TB tests.",
                    "url": "https://news.mit.edu/2025/new-molecular-label-could-lead-simpler-faster-tuberculosis-tests-0505",
                    "urlToImage": "https://news.mit.edu/sites/default/files/images/202505/MIT_TB-Glycans-01-press.jpg",
                    "publishedAt": "2025-05-05T19:00:00Z",
                    "content": "Tuberculosis, the worlds deadliest infectious disease, is estimated to infect around 10 million people each year, and kills more than 1 million annually. Once established in the lungs, the bacterias … [+6828 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Ilgiornale.it"
                    },
                    "author": "redazione@ilgiornale-web.it (Agenzia Adnkronos)",
                    "title": "Giornata mondiale asma, decalogo Iss miglioriamo aria indoor",
                    "description": "Descrizione contenuto Giornata mondiale asma, decalogo Iss miglioriamo aria indoor",
                    "url": "https://www.ilgiornale.it/news/adnkronos/giornata-mondiale-asma-decalogo-iss-miglioriamo-aria-indoor-2474644.html",
                    "urlToImage": "https://img.ilgcdn.com/sites/default/files/styles/social/public/foto/2025/05/05/asma-free.jpeg?_=1746467103",
                    "publishedAt": "2025-05-05T17:45:03Z",
                    "content": "Roma, 5 mag. (Adnkronos Salute) - Domani maggio si celebra la Giornata mondiale dellasma 2025, un evento organizzato annualmente ogni primo martedì di maggio dalla Global Initiative for Asthma (Gina)… [+5996 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Yahoo Entertainment"
                    },
                    "author": "財訊快報",
                    "title": "美眾議員提議，強制輝達晶片植入定位系統，落實出口管制",
                    "description": "【財訊快報／陳孟朔】媒體報導，美國議員計畫在未來幾週內提出法案，強制輝達(Nvidia，美股代碼NVDA)晶片植入定位系統。報導內容提到，監控晶片定位的舉措得到美國兩黨議員的支持，此舉目的在於進一步管控輝達晶片出口行為。美國伊利諾州民主黨國會眾議員福斯特(Bill Foster)計畫在未來幾週內提出一項法案，指示美國監管機構在兩個關鍵領域制定規則：跟蹤晶片售後位置，以確保它們符合出口管制許可；阻止未獲得出口管制適當許可的晶片啟動。這一法案將給予美國商務部六個月的時間來制定相關法規。輝達股價連續兩天急彈5.58美元…",
                    "url": "https://tw.stock.yahoo.com/news/%E7%BE%8E%E7%9C%BE%E8%AD%B0%E5%93%A1%E6%8F%90%E8%AD%B0-%E5%BC%B7%E5%88%B6%E8%BC%9D%E9%81%94%E6%99%B6%E7%89%87%E6%A4%8D%E5%85%A5%E5%AE%9A%E4%BD%8D%E7%B3%BB%E7%B5%B1-%E8%90%BD%E5%AF%A6%E5%87%BA%E5%8F%A3%E7%AE%A1%E5%88%B6-004746299.html",
                    "urlToImage": "https://s.yimg.com/cv/apiv2/social/images/yahoo_default_logo-1200x1200.png",
                    "publishedAt": "2025-05-05T16:47:46Z",
                    "content": "(6665)5Mycobacterium tuberculosis complex, MTBCRifampicinAIESCMID Global 2025AIAIPredicting rifampicin resistance in Mycobacterium tuberculosis complex with a machine learning based MALDI-TOF MS appr… [+60 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Yahoo Entertainment"
                    },
                    "author": "財訊快報",
                    "title": "歐洲銷售連四月衰退，特斯拉股價週一挫跌2.42%",
                    "description": "【財訊快報／陳孟朔】媒體報導，特斯拉(美股代碼TSLA)在歐洲核心市場正面臨嚴峻挑戰。最新數據顯示，今年4月該品牌在六大主要歐洲市場的電動車註冊量年比驟降，最大跌幅高達81%，凸顯其在地緣競爭加劇環境下的增長困境。數據顯示，4月特斯拉在歐洲各地銷量大幅下滑，其中，在瑞典銳減81%，創下兩年半以來最低，因歐洲人更多地購買中國電動汽車，且特斯拉執行長馬斯克因政治觀點而遭到抵制。特斯拉在歐洲大部分地區的銷量已連續四個月下滑。歐洲第一季全電動車總銷量增長28%，而特斯拉卻逆勢大減37.2%。特斯拉4月在瑞典的新車銷量驟降…",
                    "url": "https://tw.stock.yahoo.com/news/%E6%AD%90%E6%B4%B2%E9%8A%B7%E5%94%AE%E9%80%A3%E5%9B%9B%E6%9C%88%E8%A1%B0%E9%80%80-%E7%89%B9%E6%96%AF%E6%8B%89%E8%82%A1%E5%83%B9%E9%80%B1-%E6%8C%AB%E8%B7%8C2-42-004638552.html",
                    "urlToImage": "https://s.yimg.com/cv/apiv2/social/images/yahoo_default_logo-1200x1200.png",
                    "publishedAt": "2025-05-05T16:46:38Z",
                    "content": "(6665)5Mycobacterium tuberculosis complex, MTBCRifampicinAIESCMID Global 2025AIAIPredicting rifampicin resistance in Mycobacterium tuberculosis complex with a machine learning based MALDI-TOF MS appr… [+60 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Yahoo Entertainment"
                    },
                    "author": "財訊快報",
                    "title": "阿波羅示警美不再是「超級例外主義」，川普貿易政策恐促經濟陷停滯",
                    "description": "【財訊快報／劉敏夫】外電報導指出，阿波羅全球管理(Apollo)首席執行長Marco Rowan在接受CNBC採訪時表示，美國正經歷「超級」例外主義的消退，如今只是一個普通的例外國家。Rowan指出，川普政府在貿易問題上的方向是正確的，但其做法製造了高度不確定性，導致經濟「陷入停滯」。同時，美國的國家品牌形象受到損害，因為政府政策帶來了太多出人意料的結果。Rowan指出，在與主要貿易夥伴達成一系列關鍵協議之前，經濟的不確定性難以消除。部分製造業職位確實有機會回流美國，但低階製造業不太可能。Rowan表示，美國存在…",
                    "url": "https://tw.stock.yahoo.com/news/%E9%98%BF%E6%B3%A2%E7%BE%85%E7%A4%BA%E8%AD%A6%E7%BE%8E%E4%B8%8D%E5%86%8D%E6%98%AF-%E8%B6%85%E7%B4%9A%E4%BE%8B%E5%A4%96%E4%B8%BB%E7%BE%A9-%E5%B7%9D%E6%99%AE%E8%B2%BF%E6%98%93%E6%94%BF%E7%AD%96%E6%81%90%E4%BF%83%E7%B6%93%E6%BF%9F%E9%99%B7%E5%81%9C%E6%BB%AF-004618648.html",
                    "urlToImage": "https://s.yimg.com/cv/apiv2/social/images/yahoo_default_logo-1200x1200.png",
                    "publishedAt": "2025-05-05T16:46:18Z",
                    "content": "(6665)5Mycobacterium tuberculosis complex, MTBCRifampicinAIESCMID Global 2025AIAIPredicting rifampicin resistance in Mycobacterium tuberculosis complex with a machine learning based MALDI-TOF MS appr… [+60 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Yahoo Entertainment"
                    },
                    "author": "財訊快報",
                    "title": "發行公司債＋券商降評，蘋果週一追低3.1%，市值失守3兆美元告別一哥寶座",
                    "description": "【財訊快報／陳孟朔】外電引述知情人士報導，蘋果公司(美股代碼AAPL)計劃於週一發行投資級公司債券，為兩年來首次發行公司債。據悉，蘋果公司計劃分最多四批發行債券；其中，期限最長的一部分為10年期債券，初步價格討論集中在比美國國債高出約0.7個百分點的水準。銀行界預計本週將有350億至400億美元的新債發行。其中，包括蘋果在內的工業與科技公司可能占據發行總量的多數。知情人士透露，此次債券發行預計將在今日進行，由巴克萊、美國銀行、高盛集團和摩根大通負責安排。在此之前，蘋果2日遭至少兩家機構下調評級，因最新財報加劇投資…",
                    "url": "https://tw.stock.yahoo.com/news/%E7%99%BC%E8%A1%8C%E5%85%AC%E5%8F%B8%E5%82%B5-%E5%88%B8%E5%95%86%E9%99%8D%E8%A9%95-%E8%98%8B%E6%9E%9C%E9%80%B1-%E8%BF%BD%E4%BD%8E3-1-004412777.html",
                    "urlToImage": "https://s.yimg.com/cv/apiv2/social/images/yahoo_default_logo-1200x1200.png",
                    "publishedAt": "2025-05-05T16:44:12Z",
                    "content": "(6665)5Mycobacterium tuberculosis complex, MTBCRifampicinAIESCMID Global 2025AIAIPredicting rifampicin resistance in Mycobacterium tuberculosis complex with a machine learning based MALDI-TOF MS appr… [+60 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Yahoo Entertainment"
                    },
                    "author": "財訊快報",
                    "title": "恆瑞醫藥香港上市申請獲港交所批准，最快年底前展開IPO",
                    "description": "【財訊快報／劉敏夫】外電報導指出，恆瑞醫藥週一發布公告表示，港交所已經批准該公司的香港上市申請。在赴港上市獲得中國證監會放行後，恆瑞醫藥在4月份的一份公告中表示，公司計畫在香港發行不超過8.15億股股份。知情人士此前透露，本次發行預計募資金額將不少於20億美元，IPO最快可能於年底前進行。越來越多中國內地企業尋求在香港進行第二上市。銀行業人士預計，此類交易將推動今年香港資本市場的股票發行活動回暖。恆瑞醫藥的業務重點包括腫瘤及心血管疾病領域。摩根士丹利、花旗集團及華泰金融控股為本次交易的聯席保薦人。",
                    "url": "https://tw.stock.yahoo.com/news/%E6%81%86%E7%91%9E%E9%86%AB%E8%97%A5%E9%A6%99%E6%B8%AF%E4%B8%8A%E5%B8%82%E7%94%B3%E8%AB%8B%E7%8D%B2%E6%B8%AF%E4%BA%A4%E6%89%80%E6%89%B9%E5%87%86-%E6%9C%80%E5%BF%AB%E5%B9%B4%E5%BA%95%E5%89%8D%E5%B1%95%E9%96%8Bipo-004354836.html",
                    "urlToImage": "https://s.yimg.com/cv/apiv2/social/images/yahoo_default_logo-1200x1200.png",
                    "publishedAt": "2025-05-05T16:43:54Z",
                    "content": "(6665)5Mycobacterium tuberculosis complex, MTBCRifampicinAIESCMID Global 2025AIAIPredicting rifampicin resistance in Mycobacterium tuberculosis complex with a machine learning based MALDI-TOF MS appr… [+60 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Yahoo Entertainment"
                    },
                    "author": "財訊快報",
                    "title": "福特撤回年度財測，示警獲利恐因川普關稅減損15億美元",
                    "description": "【財訊快報／陳孟朔】由於美國總統川普徵收關稅的不確定性，福特汽車(美股代碼F)週一暫停其年度財測，並預告加徵關稅將導致公司調整後的息稅前利潤減少約15億美元。福特公司執行長Jim Farley週一法說會上表示：\"現在要完全瞭解我們的競爭對手對這些關稅的反應還為時過早。但很明顯，在這種新環境下，在美國擁有最大版圖的汽車製造商將擁有很大優勢。\"福特汽車股價盤後追低0.24美元或2.36%至9.93美元，該股週一常態交易期間收低1.07%至10.17美元。福特原本在今年2月時預計2025年的息稅前利潤為70億至85億美…",
                    "url": "https://tw.stock.yahoo.com/news/%E7%A6%8F%E7%89%B9%E6%92%A4%E5%9B%9E%E5%B9%B4%E5%BA%A6%E8%B2%A1%E6%B8%AC-%E7%A4%BA%E8%AD%A6%E7%8D%B2%E5%88%A9%E6%81%90%E5%9B%A0%E5%B7%9D%E6%99%AE%E9%97%9C%E7%A8%85%E6%B8%9B%E6%90%8D15%E5%84%84%E7%BE%8E%E5%85%83-004037018.html",
                    "urlToImage": "https://s.yimg.com/cv/apiv2/social/images/yahoo_default_logo-1200x1200.png",
                    "publishedAt": "2025-05-05T16:40:37Z",
                    "content": "(6665)5Mycobacterium tuberculosis complex, MTBCRifampicinAIESCMID Global 2025AIAIPredicting rifampicin resistance in Mycobacterium tuberculosis complex with a machine learning based MALDI-TOF MS appr… [+60 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Yahoo Entertainment"
                    },
                    "author": "陳依旻｜Yahoo財經特派記者",
                    "title": "抽中有望賺2.5萬元！機電股新兵昶瑞承銷價出爐 報酬率38%",
                    "description": "做吊扇一年賺破億元的機電股新兵昶瑞機電(7642)本月下旬上櫃，近日辦理新股上櫃承銷作業，承銷價出爐，為66.18元，和市價91.4元相比，抽中一張潛在獲利2.52萬元，報酬率38%。",
                    "url": "https://tw.stock.yahoo.com/news/%E6%8A%BD%E4%B8%AD%E6%9C%89%E6%9C%9B%E8%B3%BA25%E8%90%AC%E5%85%83%EF%BC%81%E6%A9%9F%E9%9B%BB%E8%82%A1%E6%96%B0%E5%85%B5%E6%98%B6%E7%91%9E%E6%89%BF%E9%8A%B7%E5%83%B9%E5%87%BA%E7%88%90-%E5%A0%B1%E9%85%AC%E7%8E%8738-003956701.html",
                    "urlToImage": "https://media.zenfs.com/ko/cna.com.tw/b2a0a889d7f56ad931e7c515a4cac955",
                    "publishedAt": "2025-05-05T16:39:56Z",
                    "content": "(6665)5Mycobacterium tuberculosis complex, MTBCRifampicinAIESCMID Global 2025AIAIPredicting rifampicin resistance in Mycobacterium tuberculosis complex with a machine learning based MALDI-TOF MS appr… [+60 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Yahoo Entertainment"
                    },
                    "author": "財訊快報",
                    "title": "PwC在美裁員約1500人，占員工總數2%，集中審計和稅務部門",
                    "description": "【財訊快報／劉敏夫】外電引述英國金融時報的報導指出，知情人士透露，全球四大專業諮詢機構之一的普華永道(PwC)將在美國裁員約1,500人，占其美國7.5萬名員工總數的2%。報導指出，據稱裁員主要集中在審計和稅務業務部門。受影響員工在本週一和週二會接到通知。對於上述消息，普華永道發言人證實了裁員消息，並表示由於員工流失率較低，因此有必要採取這一措施。",
                    "url": "https://tw.stock.yahoo.com/news/pwc%E5%9C%A8%E7%BE%8E%E8%A3%81%E5%93%A1%E7%B4%841500%E4%BA%BA-%E5%8D%A0%E5%93%A1%E5%B7%A5%E7%B8%BD%E6%95%B82-%E9%9B%86%E4%B8%AD%E5%AF%A9%E8%A8%88%E5%92%8C%E7%A8%85%E5%8B%99%E9%83%A8%E9%96%80-003652650.html",
                    "urlToImage": "https://s.yimg.com/cv/apiv2/social/images/yahoo_default_logo-1200x1200.png",
                    "publishedAt": "2025-05-05T16:36:52Z",
                    "content": "(6665)5Mycobacterium tuberculosis complex, MTBCRifampicinAIESCMID Global 2025AIAIPredicting rifampicin resistance in Mycobacterium tuberculosis complex with a machine learning based MALDI-TOF MS appr… [+60 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Yahoo Entertainment"
                    },
                    "author": "財訊快報",
                    "title": "藥華藥血癌新藥美國及全球市佔穩增長，4月營收12.3億元再創高",
                    "description": "【財訊快報／記者何美如報導】藥華藥(6446)罕見血癌新藥Ropeginterferon alfa-2b（簡稱Ropeg，即P1101）於美國行銷策略優化及全球市占率穩健成長，5日公告4月營收12.3億元，月增3.87%，年增83.72%，創單月歷史新高。美國子公司已成功整合團隊，今年的營運大力加速可期。今年以來，開立處方的新醫師與新病人數量持續走高，顯示全球行銷團隊在全面升級過程中已取得初步成效。藥華藥透過麥肯錫式顧問團隊的全面規劃，成功整合其美國子公司中的醫藥、行銷、市場准入及銷售團隊，為今年的營運大力加速，…",
                    "url": "https://tw.stock.yahoo.com/news/%E8%97%A5%E8%8F%AF%E8%97%A5%E8%A1%80%E7%99%8C%E6%96%B0%E8%97%A5%E7%BE%8E%E5%9C%8B%E5%8F%8A%E5%85%A8%E7%90%83%E5%B8%82%E4%BD%94%E7%A9%A9%E5%A2%9E%E9%95%B7-4%E6%9C%88%E7%87%9F%E6%94%B612-3%E5%84%84%E5%85%83%E5%86%8D%E5%89%B5%E9%AB%98-003142499.html",
                    "urlToImage": "https://s.yimg.com/cv/apiv2/social/images/yahoo_default_logo-1200x1200.png",
                    "publishedAt": "2025-05-05T16:31:42Z",
                    "content": "(6665)5Mycobacterium tuberculosis complex, MTBCRifampicinAIESCMID Global 2025AIAIPredicting rifampicin resistance in Mycobacterium tuberculosis complex with a machine learning based MALDI-TOF MS appr… [+60 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Yahoo Entertainment"
                    },
                    "author": "財訊快報",
                    "title": "康聯生醫以AI預測結核抗藥性模型，躍ESCMID 2025國際舞台",
                    "description": "【財訊快報／記者何美如報導】康聯生醫(6665)5日宣布，與研究團隊運用質譜分析搭配機器學習技術，成功開發出能即時預測結核分枝桿菌（Mycobacterium tuberculosis complex, MTBC）對Rifampicin抗藥性的AI模型，並受邀於歐洲臨床微生物與傳染病學會（ESCMID Global 2025）大會上發表研究成果，展現台灣在AI抗藥性分析領域的研發實力與國際影響力。該AI研究由康聯生醫與國家研究單位合作開發，並結合芮弗士醫事檢驗所的臨床資料與質譜平台資源，研究團隊以「Predict…",
                    "url": "https://tw.stock.yahoo.com/news/%E5%BA%B7%E8%81%AF%E7%94%9F%E9%86%AB%E4%BB%A5ai%E9%A0%90%E6%B8%AC%E7%B5%90%E6%A0%B8%E6%8A%97%E8%97%A5%E6%80%A7%E6%A8%A1%E5%9E%8B-%E8%BA%8Descmid-2025%E5%9C%8B%E9%9A%9B%E8%88%9E%E5%8F%B0-002807325.html",
                    "urlToImage": "https://s.yimg.com/cv/apiv2/social/images/yahoo_default_logo-1200x1200.png",
                    "publishedAt": "2025-05-05T16:28:07Z",
                    "content": "(6665)5Mycobacterium tuberculosis complex, MTBCRifampicinAIESCMID Global 2025AIAIPredicting rifampicin resistance in Mycobacterium tuberculosis complex with a machine learning based MALDI-TOF MS appr… [+219 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Milenio"
                    },
                    "author": "Blanca Valadez",
                    "title": "Asma, una enfermedad invisible en las políticas públicas",
                    "description": "El director general especial de Enfermedades Respiratorias Crónicas por parte de la Organización Mundial de la Salud (OMS), José Luis Castro, recordó que durante su infancia era conocido como “el niño de la tos” con quien nadie quería jugar por padecer asma.E…",
                    "url": "https://www.milenio.com/ciencia-y-salud/expertos-llaman-integrar-asma-politicas-publicas-salud",
                    "urlToImage": "https://cdn.milenio.com/uploads/media/2025/05/05/mexico-asma-forma-enfermedades-acceso.jpg",
                    "publishedAt": "2025-05-05T15:03:51Z",
                    "content": "El director general especial de Enfermedades Respiratorias Crónicas por parte de la Organización Mundial de la Salud (OMS), José Luis Castro, recordó que durante su infancia era conocido como el niño… [+7631 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Plos.org"
                    },
                    "author": "Michaile Gizelle Anthony, Graeme Hoddinott, Dzunisani Patience Baloyi, Anneke Catharina Hesseling, Marieke Margreet van der Zalm",
                    "title": "Identifying candidate items for a health-related quality of life measure in young children with respiratory illness: A scoping review of generic and disease-specific measures",
                    "description": "Background Health-related quality of life (HRQoL) in young children affected by respiratory illnesses remains understudied, particularly in low- and middle-income countries (LMICs), where the burden of these diseases is disproportionately high. Existing HRQoL…",
                    "url": "https://journals.plos.org/plosone/article?id=10.1371/journal.pone.0322493",
                    "urlToImage": "https://journals.plos.org/plosone/article/figure/image?id=10.1371/journal.pone.0322493.g003&size=inline",
                    "publishedAt": "2025-05-05T14:00:00Z",
                    "content": "Abstract\r\nBackground\r\nHealth-related quality of life (HRQoL) in young children affected by respiratory illnesses remains understudied, particularly in low- and middle-income countries (LMICs), where … [+45033 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Plos.org"
                    },
                    "author": "Dong Jiang, Lixin Qin, Wenyang Pan, Shixiang Yan",
                    "title": "The value of high-pitch scanning with Sn100kV and ADMIRE in CT examination of tuberculous destroyed lung: Identifying the optimal combination for ultra-low-dose imaging",
                    "description": "Objective To investigate the application value of high-pitch scanning combined with energy spectrum purification using Sn100kV and ADMIRE in CT examinations of patients with tuberculous destroyed lung.   Methods A total of 60 patients with sputum mycobacteriu…",
                    "url": "https://journals.plos.org/plosone/article?id=10.1371/journal.pone.0322374",
                    "urlToImage": "https://journals.plos.org/plosone/article/figure/image?id=10.1371/journal.pone.0322374.g006&size=inline",
                    "publishedAt": "2025-05-05T14:00:00Z",
                    "content": "Abstract\r\nObjective\r\nTo investigate the application value of high-pitch scanning combined with energy spectrum purification using Sn100kV and ADMIRE in CT examinations of patients with tuberculous de… [+29497 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Plos.org"
                    },
                    "author": "Peter Methys Degen, Matúš Medo",
                    "title": "Replicability of bulk RNA-Seq differential expression and enrichment analysis results for small cohort sizes",
                    "description": "Author summary Transcriptomics data from RNA sequencing (RNA-Seq) experiments are complex and challenging to analyze due to their high dimensionality and variability. These experiments often involve limited biological replicates due to practical and financial…",
                    "url": "https://journals.plos.org/ploscompbiol/article?id=10.1371/journal.pcbi.1011630",
                    "urlToImage": "https://journals.plos.org/ploscompbiol/article/figure/image?id=10.1371/journal.pcbi.1011630.g005&size=inline",
                    "publishedAt": "2025-05-05T14:00:00Z",
                    "content": "Citation: Degen PM, Medo M (2025) Replicability of bulk RNA-Seq differential expression and enrichment analysis results for small cohort sizes. PLoS Comput Biol 21(5):\r\n e1011630.\r\nhttps://doi.org/10… [+45060 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Psychology Today"
                    },
                    "author": "Michelle Shreeve MA",
                    "title": "How Curie, Tolkien, and Mandela Can Inspire Parentless Teens",
                    "description": "Many exemplary figures in society grew up without one or both of their parents. Learning about these indivduals can empower parentless teenagers.",
                    "url": "https://www.psychologytoday.com/us/blog/coping-with-parental-death/202505/how-curie-tolkien-and-mandela-can-inspire-parentless-teens",
                    "urlToImage": "https://cdn2.psychologytoday.com/assets/styles/manual_crop_1_91_1_1528x800/public/teaser_image/blog_entry/2025-05/mariecurie.jpg?itok=kx1T71_A",
                    "publishedAt": "2025-05-05T13:08:25Z",
                    "content": "Sometimes after a teenager loses a parent, they might feel alone, especially if there arent any known peers who also lost a parent. Feeling alone while trying to navigate their grief can complicate … [+2453 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "GlobeNewswire"
                    },
                    "author": "The Insight Partners",
                    "title": "Breath Analyzer Market Size Projected to Surge $3.68 Billion Growth by 2030, With CAGR of 15.19% | The Insight Partners",
                    "description": "The global breath analyzer market Key growth drivers include stringent drunk-driving regulations, technological advancements, and increasing adoption across healthcare, law enforcement, and workplace safety sectors. Technologies such as fuel cell, semiconduct…",
                    "url": "https://www.globenewswire.com/news-release/2025/05/05/3074076/0/en/Breath-Analyzer-Market-Size-Projected-to-Surge-3-68-Billion-Growth-by-2030-With-CAGR-of-15-19-The-Insight-Partners.html",
                    "urlToImage": "https://ml.globenewswire.com/Resource/Download/efd8c9da-ac10-487a-a083-ec8f33cad35e",
                    "publishedAt": "2025-05-05T12:47:00Z",
                    "content": "US &amp; Canada, May 05, 2025 (GLOBE NEWSWIRE) -- As per a new, comprehensive report from The Insight Partners, the breath analyzer market is experiencing significant growth owing to the growing tren… [+9435 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "GlobeNewswire"
                    },
                    "author": "Teva Pharmaceutical Industries Ltd",
                    "title": "Teva and Alvotech Announce FDA Approval of Interchangeability for SELARSDI™ (ustekinumab-aekn) with Stelara® (ustekinumab)",
                    "description": "PARSIPPANY, N.J. & REYKJAVÍK, Iceland, May 05, 2025 (GLOBE NEWSWIRE) -- Teva Pharmaceuticals, a U.S. affiliate of Teva Pharmaceutical Industries Ltd. (NYSE and TASE: TEVA), and Alvotech (NASDAQ: ALVO) today announced that the U.S. Food and Drug Administration…",
                    "url": "https://www.globenewswire.com/news-release/2025/05/05/3073976/0/en/Teva-and-Alvotech-Announce-FDA-Approval-of-Interchangeability-for-SELARSDI-ustekinumab-aekn-with-Stelara-ustekinumab.html",
                    "urlToImage": "https://ml-eu.globenewswire.com/Resource/Download/c2001734-949b-4cc2-8021-b4b64eda1f13",
                    "publishedAt": "2025-05-05T11:49:00Z",
                    "content": "\u003Cul\u003E\u003Cli\u003EThe U.S. FDA has approved SELARSDI (ustekinumab-aekn) as interchangeable with the reference biologic Stelara® (ustekinumab) in all presentations matching the reference product, effective as o… [+26598 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Eldiario.es"
                    },
                    "author": "Héctor Farrés",
                    "title": "El cuerpo de un monje del siglo XVIII fue preservado con un método insólito: serrín y telas en el recto",
                    "description": "Técnica desconocida - La hipótesis más plausible es que se embalsamó a Sidler para facilitar su traslado a otra abadía, aunque el viaje no se completó, y por eso su cuerpo acabó conservado en la cripta de un pueblo junto al Danubio\r\nLa momia de la mujer que g…",
                    "url": "https://www.eldiario.es/spin/cuerpo-monje-siglo-xviii-preservado-metodo-insolito-serrin-telas-recto-pm_1_12270780.html",
                    "urlToImage": "https://static.eldiario.es/clip/73eb68b9-241e-49a1-b0b0-94a06df85491_facebook-watermarked-aspect-ratio_default_0.jpg",
                    "publishedAt": "2025-05-05T11:43:00Z",
                    "content": "A Franz Xaver Sidler le metieron ramas, barro y telas por el recto. No fue un accidente ni tampoco sadismo. Esa intervención se produjo como parte de una técnica de embalsamamiento que nadie había re… [+4505 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "GlobeNewswire"
                    },
                    "author": "Alvotech",
                    "title": "Teva and Alvotech Announce FDA Approval of Interchangeability for SELARSDI™ (ustekinumab-aekn) with Stelara® (ustekinumab)",
                    "description": "Teva Pharmaceuticals, a U.S. affiliate of Teva Pharmaceutical Industries Ltd. (NYSE and TASE: TEVA), and Alvotech (NASDAQ: ALVO) today announced that the U.S. Food and Drug Administration (FDA) has approved SELARSDI™ (ustekinumab-aekn) injection as interchang…",
                    "url": "https://www.globenewswire.com/news-release/2025/05/05/3073922/0/en/Teva-and-Alvotech-Announce-FDA-Approval-of-Interchangeability-for-SELARSDI-ustekinumab-aekn-with-Stelara-ustekinumab.html",
                    "urlToImage": "https://ml-eu.globenewswire.com/Resource/Download/17a8091d-68a6-47c1-968e-fcced99f1d44",
                    "publishedAt": "2025-05-05T11:00:00Z",
                    "content": "\u003Cul\u003E\u003Cli\u003EThe U.S. FDA has approved SELARSDI (ustekinumab-aekn) as interchangeable with the reference biologic Stelara® (ustekinumab) in all presentations matching the reference product, effective as o… [+26522 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "ETF Daily News"
                    },
                    "author": "MarketBeat News",
                    "title": "Lexaria Bioscience (NASDAQ:LEXX) versus GlobeImmune (OTCMKTS:GBIM) Critical Analysis",
                    "description": "Lexaria Bioscience (NASDAQ:LEXX – Get Free Report) and GlobeImmune (OTCMKTS:GBIM – Get Free Report) are both medical companies, but which is the better investment? We will contrast the two companies based on the strength of their institutional ownership, risk…",
                    "url": "https://www.etfdailynews.com/2025/05/05/lexaria-bioscience-nasdaqlexx-versus-globeimmune-otcmktsgbim-critical-analysis/",
                    "urlToImage": "https://www.americanbankingnews.com/wp-content/timthumb/timthumb.php?src=https://www.marketbeat.com/logos/globeimmune-inc-logo-1200x675.png&w=240&h=240&zc=2",
                    "publishedAt": "2025-05-05T05:12:47Z",
                    "content": "Lexaria Bioscience (NASDAQ:LEXX – Get Free Report) and GlobeImmune (OTCMKTS:GBIM – Get Free Report) are both medical companies, but which is the better investment? We will contrast the two companies … [+5462 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Thefreedictionary.com"
                    },
                    "author": null,
                    "title": "Leprosy",
                    "description": "Identified primarily by the skin lesions it causes, leprosy is a chronic infectious disease that affects the skin, peripheral nerves in the hands and feet, and mucous membranes of the nose, throat, and eyes. Because of the deformities associated with it, lepr…",
                    "url": "https://encyclopedia.thefreedictionary.com/leprosy",
                    "urlToImage": "http://img.tfd.com/TFDlogo1200x1200.png",
                    "publishedAt": "2025-05-05T04:22:49Z",
                    "content": "For the Biblical term and its varied meanings, see Tzaraath. For other uses, see Leprosy (disambiguation).\r\n\"Leper\" redirects here. It is not to be confused with Ieper, a Belgian city.\r\nLeprosy, also… [+47292 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Lavozdegalicia.es"
                    },
                    "author": "Lucía Cancela",
                    "title": "El lugar al que todavía no han llegado las enfermedades de la vida moderna",
                    "description": "Médicos gallegos describen la atención sanitaria en pueblos descendientes de comunidades indígenas de Argentina",
                    "url": "https://www.lavozdegalicia.es/noticia/lavozdelasalud/enfermedades/2025/05/04/lugar-llegado-enfermedades-vida-moderna/00031746363494642659404.htm",
                    "urlToImage": "https://cflvdg.avoz.es/sc/mbWtdptTODwgnOMTq2oF3wS1_h8=/1280x/2025/03/21/00121742548192667968981/Foto/unacom.png",
                    "publishedAt": "2025-05-05T03:00:00Z",
                    "content": "Cada vez que Víctor Orellana tiene que desplazarse a su lugar de trabajo, un helicóptero lo recoge a él y a su equipo para llevarlos a San José de Chasquivil, un pueblo situado a más de 2.000 metros … [+10704 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Www.abc.es"
                    },
                    "author": "(abc)",
                    "title": "El crimen del envenenado con arsénico de la calle Jacometrezo",
                    "description": "Un crimen horrendo, que daría sin duda hoy en día para uno de esas series del género true crime que tanto gustan en nuestros días, es el que tuvo lugar en diciembre de 1914 en una vivienda de Madrid. Más terrible aún cuando se supo del suceso por la propia …",
                    "url": "https://www.abc.es/espana/madrid/crimen-envenenado-arsenico-calle-jacometrezzo-20250504192014-nt.html",
                    "urlToImage": "https://s3.abcstatics.com/abc/www/multimedia/espana/2025/05/04/ENVENENADO-1-U40616571008Qcz-1024x512@diario_abc.jpg",
                    "publishedAt": "2025-05-05T01:32:11Z",
                    "content": "Un crimen horrendo, que daría sin duda hoy en día para uno de esas series del género true crime que tanto gustan en nuestros días, es el que tuvo lugar en diciembre de 1914 en una vivienda de Madri… [+4368 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Rolling Out"
                    },
                    "author": "Tega Egwabor",
                    "title": "Facts about rheumatoid factor tests every adult should know",
                    "description": "When persistent joint pain strikes, the search for answers often leads to a crucial diagnostic tool: the rheumatoid factor test. This relatively quick blood analysis serves as a window into the immune system’s functioning, potentially revealing why your body …",
                    "url": "https://rollingout.com/2025/05/04/facts-about-rheumatoid-factor-tests/",
                    "urlToImage": "https://rollingout.com/wp-content/uploads/2025/05/shutterstock_1105166675-scaled.jpg",
                    "publishedAt": "2025-05-04T21:30:39Z",
                    "content": "When persistent joint pain strikes, the search for answers often leads to a crucial diagnostic tool: the rheumatoid factor test. This relatively quick blood analysis serves as a window into the immun… [+11605 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Excelsior.com.mx"
                    },
                    "author": "fernando.davila",
                    "title": "Meta cumplida destaca Ssa tras concluir Semana Nacional de Vacunación",
                    "description": "Patricia Rodríguez Calva\r\nCon la aplicación de 2 millones 211 mil 584 dosis, concluyó la Semana Nacional de Vacunación 2025, informó la Secretaría de Salud (Ssa).\r\n\nTE PUEDE INTERESAR: Desplegarán 301 brigadas de vacunación en CDMX; HOY inicia Semana Nacional…",
                    "url": "https://www.excelsior.com.mx/nacional/meta-cumplida-ssa-conclusion-semana-nacional-de-vacunacion/1714097",
                    "urlToImage": "https://www.excelsior.com.mx/media/pictures/2025/05/04/3301550.jpg",
                    "publishedAt": "2025-05-04T20:29:32Z",
                    "content": "Con la aplicación de 2 millones 211 mil 584 dosis, concluyó la Semana Nacional de Vacunación 2025, informó la Secretaría de Salud (Ssa).\r\nTE PUEDE INTERESAR: Desplegarán 301 brigadas de vacunación en… [+2511 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Malay Mail"
                    },
                    "author": "Malay Mail",
                    "title": "Health minister: AI-powered lung health screening offers high accuracy, effectiveness in early detection",
                    "description": "PUTRAJAYA, May 4 — The Health Ministry (MOH) has introduced AI-powered lung health screening to detect lung-related diseases among Malaysians at an early stage. Health Minister...",
                    "url": "https://www.malaymail.com/news/malaysia/2025/05/04/health-minister-ai-powered-lung-health-screening-offers-high-accuracy-effectiveness-in-early-detection/175543",
                    "urlToImage": "https://www.malaymail.com/malaymail/uploads/images/2025/05/04/275039.JPG",
                    "publishedAt": "2025-05-04T20:16:28Z",
                    "content": "PUTRAJAYA, May 4 The Health Ministry (MOH) has introduced AI-powered lung health screening to detect lung-related diseases among Malaysians at an early stage.\r\nHealth Minister Datuk Seri Dzulkefly Ah… [+1882 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Elconfidencial.com"
                    },
                    "author": "P. M.",
                    "title": "¿Quién torea hoy, lunes 5 de mayo, en la feria de toros de Sevilla? Cartel completo de La Maestranza por la Feria de Abril 2025",
                    "description": "El programa taurino de la festividad reúne a figuras y promesas de la disciplina en una semana de espectáculo ideal para todo aficionado.",
                    "url": "https://www.elconfidencial.com/espana/andalucia/2025-05-04/feria-toros-sevilla-lunes-mayo-cartel-completo-maestranza_4121534/",
                    "urlToImage": "https://images.ecestaticos.com/A9vk5QyxzeSjZWZ67Vqduo0VIj4=/0x0:2272x1515/600x315/filters:fill(white):format(jpg):quality(99):watermark(f.elconfidencial.com/file/bae/eea/fde/baeeeafde1b3229287b0c008f7602058.png,0,275,1)/f.elconfidencial.com/original/062/393/cae/062393caed325f6eb6ba1f2c2c61932b.jpg",
                    "publishedAt": "2025-05-04T18:00:00Z",
                    "content": "¿Qué días son festivos en Sevilla por la Feria de Abril 2025 y cuáles no son fiesta?Feria de Sevilla 2025: cuándo empieza y acaba la Feria de AbrilEl próximo lunes dará comienzo la temporada alta de … [+2887 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Nbcnews.na"
                    },
                    "author": null,
                    "title": "Health Ministry introduces digital X-rays to combat TB",
                    "description": "The Ministry of Health and Social Services has taken a major step forward in the fight against tuberculosis with the introduction of artificial intelligence-powered portable chest X-ray machines.",
                    "url": "https://nbcnews.na/node/110770",
                    "urlToImage": "https://nbcnews.na/sites/default/files/styles/large/public/2025-05/Luvindao.JPG?itok=CuCS75Vb",
                    "publishedAt": "2025-05-04T17:06:44Z",
                    "content": "The Ministry of Health and Social Services has taken a major step forward in the fight against tuberculosis with the introduction of artificial intelligence-powered portable chest X-ray machines. \r\nT… [+3388 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "The Star Online"
                    },
                    "author": "The Star Online",
                    "title": "AI used for screening lungs",
                    "description": "PUTRAJAYA: AI-generated lung health screenings are being carried out for targeted groups at seven health clinics nationwide, says Health Minister Datuk Seri Dr Dzulkefly Ahmad. Read full story",
                    "url": "https://www.thestar.com.my/news/nation/2025/05/05/ai-used-for-screening-lungs",
                    "urlToImage": "https://apicms.thestar.com.my/uploads/images/2025/05/05/3298514.JPG",
                    "publishedAt": "2025-05-04T16:00:00Z",
                    "content": "PUTRAJAYA: AI-generated lung health screenings are being carried out for targeted groups at seven health clinics nationwide, says Health Minister Datuk Seri Dr Dzulkefly Ahmad (pic).\r\nAmong the healt… [+3747 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Newsbreak.com"
                    },
                    "author": "Laura Hancock",
                    "title": "Ohio agencies, universities lose millions in health research funding: What’s at stake? - NewsBreak",
                    "description": "COLUMBUS, Ohio - LGBTQ youth suicide reduction, improving the state’s outdated infectious disease reporting database and development of tuberculosis vaccin",
                    "url": "https://www.newsbreak.com/share/3991353378650-ohio-agencies-universities-lose-millions-in-health-research-funding-what-s-at-stake?s=a2&share_destination_id=MjMyNTA2Njc2LTE3NDYzNzMyMTg3NDQ%3D&pd=0FjZbg5T&hl=en_US&send_time=1746373218&actBtn=bottomBar&_f=app_share&trans_data=%7B%22platform%22%3A1%2C%22cv%22%3A%2225.17.1%22%2C%22languages%22%3A%22en%22%7D&sep=ns_foryou_recall_exp_25q2-v7%2Cns_foryou_rank_exp_25q2-v6%2Cns_local_strategy_25q1_exp-v4%2Cns_foryou_blend_exp_25q2-v5%2Cns_foryou_model_exp_25q2_v2-control",
                    "urlToImage": "https://img.particlenews.com/img/id/1czowP_10qmdac800",
                    "publishedAt": "2025-05-04T15:48:53Z",
                    "content": "Meet The Sweet French Bulldog Found On The Streets Now Looking For Love\r\nOn Marthas Vineyard, a resilient French Bulldog named Felecia, or \"Fifi,\" is hoping to find her permanent home through Sandy … [+535 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Nacion.com"
                    },
                    "author": "Jurgen Ureña",
                    "title": "Elogio de las bacterias",
                    "description": "Las bacterias son dioses diminutos a quienes les debemos la vida y la muerte. Son abundancia, enigma y conocimiento.",
                    "url": "https://www.nacion.com/opinion/foros/elogio-de-las-bacterias/6WT7CZZCBVHVTAKPWYL6EGF4VY/story/",
                    "urlToImage": "https://www.nacion.com/resizer/v2/33U4M3QRFZCZPMEUUKCHCZYBTM.jpg?smart=true&auth=468775376cd7796787b9d6383b2002ec7d3db937e9f9ac5e9563d20dc4d261d0&width=1440",
                    "publishedAt": "2025-05-04T14:30:00Z",
                    "content": "En un libro delirante titulado Magnitud imaginaria (1973), el escritor polaco Stanislaw Lem prologa La erúntica: un texto inexistente en el que un filósofo cuenta cómo consiguió enseñar la lengua ing… [+4380 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Latest News in Nigeria & Breaking Naija News 24/7 | LEGIT.NG"
                    },
                    "author": "Olumide Alake",
                    "title": "Danfo Driver Singers: Meet Nigerian Artists Behind Popular Hit Street Song in the Early 2000s",
                    "description": "Legit.ng in the article, shared the story about Nigerian singers Mad Melon and Mountain Black and their iconic Danfo Driver hit street song from the 2000s.",
                    "url": "https://www.legit.ng/entertainment/celebrities/1652871-danfo-driver-singers-meet-nigerian-artists-popular-hit-street-song-early-2000s/",
                    "urlToImage": "https://cdn.legit.ng/images/1200x675/0ba79642329ed2ce.jpeg?v=1",
                    "publishedAt": "2025-05-04T14:29:07Z",
                    "content": "\u003Cul\u003E\u003Cli\u003EDanfo Driver singers late Mad Melon and Mountain Black were part of the popular figures that shaped the Nigerian music industry in the early 2000s\u003C/li\u003E\u003Cli\u003EMad Melon and Mountain Blacks hit s… [+4836 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Europapress.es"
                    },
                    "author": null,
                    "title": "PSOE de Sevilla pregunta en el Parlamento por la presencia de jabalíes en el parque de Miraflores",
                    "description": "El PSOE de Sevilla preguntará a la consejera de Sostenibilidad y Medio Ambiente, Catalina García, en la Comisión de Medio Ambiente sobre la presencia de jabalíes en el parque de Miraflores, situado en el Distrito Norte, el pasado Viernes de Dolores, después d…",
                    "url": "https://www.europapress.es/andalucia/sevilla-00357/noticia-psoe-sevilla-pregunta-parlamento-presencia-jabalies-parque-miraflores-20250504121952.html",
                    "urlToImage": "https://img.europapress.es/fotoweb/fotonoticia_20250504121952_1200.jpg",
                    "publishedAt": "2025-05-04T10:19:52Z",
                    "content": "SEVILLA 4 May. (EUROPA PRESS) - \r\n El PSOE de Sevilla preguntará a la consejera de Sostenibilidad y Medio Ambiente, Catalina García, en la Comisión de Medio Ambiente sobre la presencia de jabalíes en… [+4736 chars]"
                    },
                    {
                    "source": {
                        "id": "new-york-magazine",
                        "name": "New York Magazine"
                    },
                    "author": "Alexander Nazaryan",
                    "title": "Who’s to Blame for the Catastrophe of COVID School Closures?",
                    "description": "A new book tries to make sense of a slow-motion (and preventable) mistake that affected millions of children.",
                    "url": "http://nymag.com/intelligencer/article/whos-to-blame-for-the-catastrophe-of-covid-school-closures.html",
                    "urlToImage": "https://pyxis.nymag.com/v1/imgs/c03/bb6/0d166cafa2a14540e0d8cc184e978daca3-empty-classroom.1x.rsocial.w1200.jpg",
                    "publishedAt": "2025-05-04T09:00:02Z",
                    "content": "I didnt know who journalist David Zweig was until the fall of 2020, when he began to write about the suddenly urgent issue of COVID and schools. My daughter was at home, learning remotely. His kids w… [+13067 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "BusinessLine"
                    },
                    "author": "PT Jyothi Datta",
                    "title": "Wildlife biologists urge Centre to grant rhesus macaques highest protection under the WPA",
                    "description": "Wildlife biologists urge Centre to protect rhesus macaques under Schedule 1 of WPA for conservation and public health.",
                    "url": "https://www.thehindubusinessline.com/news/wildlife-biologists-urge-centre-to-grant-rhesus-macaques-highest-protection-under-the-wpa/article69537232.ece",
                    "urlToImage": "https://bl-i.thgim.com/public/incoming/d2t09w/article69537253.ece/alternates/LANDSCAPE_1200/IMG_iStock-626512198_2_1_U4BF2OGB.jpg",
                    "publishedAt": "2025-05-04T08:48:08Z",
                    "content": "Over 60 wildlife biologists have appealed to the Centre to ensure the highest level of legal protection to the rhesus macaques under Schedule 1 of the Wild Life (Protection) Act, 1972. \r\nIn a letter … [+3316 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "The Star Online"
                    },
                    "author": "The Star Online",
                    "title": "AI-powered lung health screening offers high accuracy, effectiveness in early detection, says Dzulkefly",
                    "description": "PUTRAJAYA: The Health Ministry has introduced AI-powered lung health screening to detect lung-related diseases among Malaysians at an early stage. Read full story",
                    "url": "https://www.thestar.com.my/news/nation/2025/05/04/ai-powered-lung-health-screening-offers-high-accuracy-effectiveness-in-early-detection-says-dzulkefly",
                    "urlToImage": "https://apicms.thestar.com.my/uploads/images/2025/05/04/3297810.JPG",
                    "publishedAt": "2025-05-04T05:49:00Z",
                    "content": "PUTRAJAYA: The Health Ministry has introduced AI-powered lung health screening to detect lung-related diseases among Malaysians at an early stage.\r\nHealth Minister Datuk Seri Dr Dzulkefly Ahmad said … [+1881 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Thefreedictionary.com"
                    },
                    "author": null,
                    "title": "Touch Pieces",
                    "description": "Touch pieces are coins and medals—especially those with special designs or features—whose superstitious owners believe the items have supernatural powers. Thought to be imbued with the power to cure disease, bring good luck, influence behavior, or carry out a…",
                    "url": "https://encyclopedia.thefreedictionary.com/Touch+Pieces",
                    "urlToImage": "http://img.tfd.com/TFDlogo1200x1200.png",
                    "publishedAt": "2025-05-04T04:09:15Z",
                    "content": "A touch piece is a coin or medal believed to cure disease, bring good luck, influence peoples behaviour, carry out a specific practical action, etc.\r\nWhat most touch pieces have in common is that th… [+21319 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Mercola.com"
                    },
                    "author": "communities@mercola.com (Dr. Joseph Mercola)",
                    "title": "What’s the Real Story Behind Vaccines?",
                    "description": "Joe Rogan recently sat down with Dr. Suzanne Humphries, co-author of \"Dissolving Illusions: Disease, Vaccines, and the Forgotten History,\" one of my favorite books on vaccines.1 I previously interviewed Humphries about how vaccine science has been misrepresen…",
                    "url": "https://articles.mercola.com/sites/articles/archive/2025/05/04/whats-the-real-story-behind-vaccines.aspx",
                    "urlToImage": "https://media.mercola.com/ImageServer/Public/2025/May/FB/whats-the-real-story-behind-vaccines-fb.jpg",
                    "publishedAt": "2025-05-04T00:00:00Z",
                    "content": "Mercola proudly supports these charities and organizations. View All \r\nDisclaimer: The entire contents of this website are based upon the opinions of Dr. Mercola, unless otherwise noted. Individual a… [+1007 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Elconfidencial.com"
                    },
                    "author": "P. M.",
                    "title": "¿Quién torea hoy, domingo 4 de mayo, en la feria de toros de Sevilla? Cartel completo de La Maestranza por la Feria de Abril 2025",
                    "description": "El mundo del toro cuenta con grandes citas en la Plaza de Toros de la Real Maestranza de Sevilla durante la celebración de la mítica fiesta tan típica de este momento del año.",
                    "url": "https://www.elconfidencial.com/espana/andalucia/2025-05-03/quien-torea-domingo-feria-toros-sevilla-cartel-completo_4121157/",
                    "urlToImage": "https://images.ecestaticos.com/dCMuV6CDVythtr-ewTmTtn0gMiA=/0x0:2272x1515/600x315/filters:fill(white):format(jpg):quality(99):watermark(f.elconfidencial.com/file/bae/eea/fde/baeeeafde1b3229287b0c008f7602058.png,0,275,1)/f.elconfidencial.com/original/37f/0d4/f81/37f0d4f8124e94a562eb5d501d6ea293.jpg",
                    "publishedAt": "2025-05-03T17:00:00Z",
                    "content": "¿Qué tiempo va a hacer en la Feria de Sevilla 2025? Esto es lo que dicen las previsiones meteorológicasFeria de Sevilla 2025: cuándo empieza y acaba la Feria de AbrilSi bien el mes de abril ha conclu… [+2848 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Allthatsinteresting.com"
                    },
                    "author": "Kaleena Fraga",
                    "title": "The Ill-Fated Lives Of Marie Antoinette’s Four Children, From The Sickly Dauphin To The Exiled Daughter",
                    "description": "Marie-Thérèse, Louis-Joseph, Louis-Charles, and Sophie were the four children of Marie Antoinette and King Louis XVI of France — but despite their initial wealth and power, only one of them survived to adulthood. \nThe post The Ill-Fated Lives Of Marie Antoine…",
                    "url": "https://allthatsinteresting.com/marie-antoinette-children",
                    "urlToImage": "https://allthatsinteresting.com/wordpress/wp-content/uploads/2025/05/the-children-of-marie-antoinette-featured.jpg",
                    "publishedAt": "2025-05-03T15:00:00Z",
                    "content": "Marie-Thérèse, Louis-Joseph, Louis-Charles, and Sophie were the four children of Marie Antoinette and King Louis XVI of France but despite their initial wealth and power, only one of them survived to… [+8469 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "The Atlantic"
                    },
                    "author": "Conor Friedersdorf",
                    "title": "Trump’s El Salvador Scheme Is Cruel and Unusual Punishment",
                    "description": "The Eighth Amendment case against sending deportees to CECOT",
                    "url": "https://www.theatlantic.com/ideas/archive/2025/05/trump-deportation-el-salvador-constitution/682683/",
                    "urlToImage": "https://cdn.theatlantic.com/thumbor/5ZUg8PSCMTqc2UKhkJj7oWm174s=/0x85:3994x2165/1200x625/media/img/mt/2025/05/2025_04_ElSalvadorUSImmigration/original.jpg",
                    "publishedAt": "2025-05-03T14:00:00Z",
                    "content": "As the Trump administration rounds up people it alleges to be illegal aliens and gang members, deports them to El Salvador, and pays to imprison them there without convicting them of any crime, const… [+14790 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Europapress.es"
                    },
                    "author": null,
                    "title": "El PP pide al Principado que anule la medida de aislamiento de ganado trashumante que regresa a Asturias",
                    "description": "El diputado del Partido Popular en la Junta General, Luis Venta, ha anunciado este sábado la presentación de una iniciativa parlamentaria para que el Gobierno asturiano rectifique la Resolución del pasado 20 de marzo que afecta al retorno a Asturias de ganado…",
                    "url": "https://www.europapress.es/asturias/asturias-rural-00671/noticia-pp-pide-principado-anule-medida-aislamiento-ganado-trashumante-regresa-asturias-20250503131539.html",
                    "urlToImage": "https://img.europapress.es/fotoweb/fotonoticia_20250503131539_1200.jpg",
                    "publishedAt": "2025-05-03T11:15:35Z",
                    "content": "OVIEDO 3 May. (EUROPA PRESS) - \r\n El diputado del Partido Popular en la Junta General, Luis Venta, ha anunciado este sábado la presentación de una iniciativa parlamentaria para que el Gobierno asturi… [+2211 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Newsbreak.com"
                    },
                    "author": "Liz Neporent",
                    "title": "Some critically ill 9/11 first responders left without care as health program stalls - NewsBreak",
                    "description": "A 9/11 responder with life-threatening pancreatic cancer was told this week that he couldnt start chemotherapy. Two others with new cancer diagnoses were",
                    "url": "https://www.newsbreak.com/share/3987071179600-some-critically-ill-9-11-first-responders-left-without-care-as-health-program-stalls?s=a2&amp;share_destination_id=MTk3MzQyOTA1LTE3NDYyNDUyNTYzNzI%3D&amp;pd=0DM1u5Bu&amp;hl=en_US&amp;send_time=1746245256&amp;actBtn=topBar&amp;_f=app_share&amp;trans_data=%7B%22platform%22%3A1%2C%22cv%22%3A%2225.17.1%22%2C%22languages%22%3A%22en%22%7D&amp;sep=ns_foryou_recall_exp_25q2-v1%2Cns_foryou_blend_exp_25q2-v7%2Cns_foryou_rank_exp_25q2-v9%2Cns_local_strategy_25q1_exp-v12%2Cns_foryou_model_exp_25q2_v2-v9",
                    "urlToImage": "https://img.particlenews.com/img/id/3mU559_10mSo0He00",
                    "publishedAt": "2025-05-03T09:02:30Z",
                    "content": "A 9/11 responder with life-threatening pancreatic cancer was told this week that he couldnt start chemotherapy. Two others with new cancer diagnoses were also denied treatment, according to Dr. Davi… [+6076 chars]"
                    },
                    {
                    "source": {
                        "id": "cbc-news",
                        "name": "CBC News"
                    },
                    "author": null,
                    "title": "Decades after his death, family repatriates First Nation mans remains 1,200 km back home",
                    "description": "After decades of effort, Percy Onabigons family is repatriating his remains back to Long Lake #58 First Nation in northern Ontario. He was buried more than 1,200 kilometres away after being taken to a residential school without his familys consent.",
                    "url": "https://www.cbc.ca/news/canada/thunder-bay/percy-onabigon-remains-repatriated-residental-school-1.7525722",
                    "urlToImage": "https://i.cbc.ca/1.7525725.1746233235!/fileImage/httpImage/image.jpg_gen/derivatives/16x9_1180/percy-onabigon-exhumation.jpg?im=Resize%3D620",
                    "publishedAt": "2025-05-03T08:00:00Z",
                    "content": "Its a day the Onabigon family has spent decades waiting for: the repatriation of their uncle, Percy Onabigon, back to Long Lake #58 First Nation.\r\nPercy was taken from the northern Ontario community… [+7850 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Yahoo Entertainment"
                    },
                    "author": "Gregory WALTON",
                    "title": "Anxiety, pride as Harvard digs in for Trump blitzkrieg",
                    "description": "Harvard students weave through tree-lined streets and redbrick campus buildings, but beneath the veneer of daily life fear has taken root: the most...",
                    "url": "https://www.yahoo.com/news/anxiety-pride-harvard-digs-trump-071526000.html",
                    "urlToImage": "https://media.zenfs.com/en/afp.com/70a13e8637c58b11a02dafb46728824d",
                    "publishedAt": "2025-05-03T07:15:26Z",
                    "content": "Harvard students weave through tree-lined streets and redbrick campus buildings, but beneath the veneer of daily life fear has taken root: the most prestigious university in the United States is brac… [+4635 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Globalsecurity.org"
                    },
                    "author": "John Pike",
                    "title": "Health workers say disease on rise in Myanmar as aid cuts bite",
                    "description": "In conflict-hit zones on the eastern and western border regions of Myanmar, health workers are reporting rising cases of tuberculosis and other diseases amid global aid cuts from the U.S and other international donors.",
                    "url": "https://www.globalsecurity.org/wmd/library/news/myanmar/2025/myanmar-250502-rfa01.htm",
                    "urlToImage": null,
                    "publishedAt": "2025-05-03T07:04:14Z",
                    "content": "Programs targeting diseases like HIV and tuberculosis have been hit.\r\nBy Kiana Duncan for RFA 2025.05.02 -- In conflict-hit zones on the eastern and western border regions of Myanmar, health workers … [+5829 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "WSIL TV"
                    },
                    "author": "Tami Luhby",
                    "title": "Trump budget proposes $1 trillion for defense, slashes education, foreign aid, environment, health and public assistance",
                    "description": "(CNN) — The White House unveiled a budget blueprint Friday that would pump more money into defense and homeland security, while taking an ax to programs the Trump administration has",
                    "url": "https://www.wsiltv.com/news/trump-budget-proposes-1-trillion-for-defense-slashes-education-foreign-aid-environment-health-and-public/article_c896f8a5-b622-5694-a424-e41f6bf8f8db.html",
                    "urlToImage": "https://bloximages.newyork1.vip.townnews.com/wsiltv.com/content/tncms/assets/v3/editorial/4/50/450845ff-6e64-5c68-baa0-a8a10ea43372/681567b2dda57.image.jpg?crop=1763%2C926%2C0%2C124&resize=1200%2C630&order=crop%2Cresize",
                    "publishedAt": "2025-05-03T05:04:25Z",
                    "content": "(CNN) The White House unveiled a budget blueprint Friday that would pump more money into defense and homeland security, while taking an ax to programs the Trump administration has already targeted, i… [+16326 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Live Science"
                    },
                    "author": "pandora.dewan@futurenet.com (Pandora Dewan)",
                    "title": "Science news this week: International blackouts and T. rex skin handbags",
                    "description": "May 3, 2025: Our weekly roundup of the latest science in the news, as well as a few fascinating articles to keep you entertained over the weekend.",
                    "url": "https://www.livescience.com/space/science-news-this-week-international-blackouts-and-t-rex-skin-handbags",
                    "urlToImage": "https://cdn.mos.cms.futurecdn.net/WhFv54zBCgskVs8oHDTPEd.png",
                    "publishedAt": "2025-05-03T04:00:00Z",
                    "content": "An international blackout across Spain, Portugal and the south of France left millions without electricity early this week\r\n, with experts still unsure what caused the outage.\r\nPortugals national el… [+7741 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Roll Call"
                    },
                    "author": "Sandhya Raman",
                    "title": "At HHS, proposed cuts to medical research and public health programs - Roll Call",
                    "description": "The White House on Friday proposed a fiscal 2026 HHS budget that backs the “Make America Healthy Again” agenda of President Donald Trump.",
                    "url": "https://rollcall.com/2025/05/02/at-hhs-proposed-cuts-to-medical-research-and-public-health-programs/",
                    "urlToImage": "https://rollcall.com/app/uploads/2025/05/hhs_autism_108_041625.jpg",
                    "publishedAt": "2025-05-02T21:26:18Z",
                    "content": "The Trump administration on Friday called for cutting discretionary health spending by about 26 percent in fiscal 2026 and slashing medical research, public health and support service programs.\r\nThe … [+5831 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Newsbreak.com"
                    },
                    "author": "Avril Benoît",
                    "title": "Opinion: Cuts in US nutrition aid will cause tens of thousands of children to die - NewsBreak",
                    "description": "In countries across the world — particularly in the Sahel region of Africa — we are now staring down this year’s hunger gap.",
                    "url": "https://www.newsbreak.com/share/3989472102497-opinion-cuts-in-us-nutrition-aid-will-cause-tens-of-thousands-of-children-to-die?s=a2&amp;share_destination_id=MjA5MTUxNDM2LTE3NDYyMTYxNDIzMDU%3D&amp;pd=0E9ZqGus&amp;hl=en_US&amp;send_time=1746216142&amp;actBtn=bottomBar&amp;_f=app_share&amp;trans_data=%7B%22platform%22%3A1%2C%22cv%22%3A%2225.17.1%22%2C%22languages%22%3A%22en%22%7D&amp;sep=ns_foryou_rank_exp_25q2-v8%2Cns_foryou_blend_exp_25q2-control%2Cns_foryou_model_exp_25q2_v2-v5%2Cns_foryou_recall_exp_25q2-v9%2Cns_local_strategy_25q1_exp-v11",
                    "urlToImage": "https://img.particlenews.com/img/id/1Bbdx7_10otCu7u00",
                    "publishedAt": "2025-05-02T20:03:13Z",
                    "content": "I visited the Doctors Without Borders malnutrition program in Katsina, Nigeria in December. My colleagues there were still traumatized by the hunger gap months earlier, the period between harvests wh… [+6433 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Yale.edu"
                    },
                    "author": "news@yale.edu (Yale News)",
                    "title": "Yale scientist receives major award from Greek philanthropic foundation",
                    "description": "Yale Microbial Sciences Institute faculty member Stavroula Hatzios has been honored by the Bodossaki Foundation, which recognizes distinguished early-career scientists of Greek&nbsp;heritage.",
                    "url": "https://westcampus.yale.edu/news/2025-04-24-stavroula-hatzios-receives-major-award-from-greek-philanthropic-foundation",
                    "urlToImage": "https://westcampus.yale.edu/sites/default/files/2025-04/cd87938b-dd10-4ca5-9516-52e262d74241.jpg",
                    "publishedAt": "2025-05-02T20:01:25Z",
                    "content": "Stavroula Hatzios, associate professor of Molecular, Cellular and Developmental Biology and of Chemistry, has received a major award from the Bodossaki Foundation, which recognizes distinguished earl… [+2428 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Gizmodo.com"
                    },
                    "author": "Ed Cara",
                    "title": "How Trump’s Proposed Budget Will Gut Public Health in America",
                    "description": "If passed, the White Houses budget will slow down medical research and worsen public health problems like the drug overdose crisis.",
                    "url": "https://gizmodo.com/how-trumps-proposed-budget-will-gut-public-health-in-america-2000597521",
                    "urlToImage": "https://gizmodo.com/app/uploads/2025/05/DT.jpg",
                    "publishedAt": "2025-05-02T20:00:12Z",
                    "content": "The Trump administration is hoping to take a sledgehammer to science and public health. In its new proposed budget released this week, the White House is pushing for sweeping cuts to the National Ins… [+4118 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Fijivillage"
                    },
                    "author": "Alipate Narawa",
                    "title": "UNDP and Health Ministry respond to Fiji’s HIV crisis with critical medical supplies",
                    "description": "As part of its urgent response to Fiji’s escalating HIV outbreak, the United Nations Development Programme (UNDP) and the Ministry of Health, has an",
                    "url": "https://www.fijivillage.com/news/UNDP-and-Health-Ministry-respond-to-Fijis-HIV-crisis-with-critical-medical-supplies-4f5r8x/",
                    "urlToImage": "https://www.fijivillage.com/news_images/49716863568152071eb04184d8d57c.jpg",
                    "publishedAt": "2025-05-02T19:44:25Z",
                    "content": "As part of its urgent response to Fijis escalating HIV outbreak, the United Nations Development Programme (UNDP) and the Ministry of Health, has announced the handover of lifesaving HIV and TB medici… [+2334 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Newsbreak.com"
                    },
                    "author": "Avril Benoît",
                    "title": "Opinion: Cuts in US nutrition aid will cause tens of thousands of children to die - NewsBreak",
                    "description": "In countries across the world — particularly in the Sahel region of Africa — we are now staring down this year’s hunger gap.",
                    "url": "https://www.newsbreak.com/share/3989472102497-opinion-cuts-in-us-nutrition-aid-will-cause-tens-of-thousands-of-children-to-die?_f=app_share&amp;pd=0Ao3e8Mq&amp;lang=en_US&amp;send_time=1746212148&amp;trans_data=%7B%22platform%22%3A0%2C%22cv%22%3A%2225.17.1.6%22%2C%22languages%22%3A%22en%22%7D&amp;sep=ns_foryou_rank_exp_25q2-v5%2Cns_foryou_model_exp_25q2_v2-v5%2Cns_foryou_blend_exp_25q2-v1%2Cns_local_strategy_25q1_exp-v13%2Cns_foryou_recall_exp_25q2-v4&amp;s=i2",
                    "urlToImage": "https://img.particlenews.com/img/id/1Bbdx7_10otCu7u00",
                    "publishedAt": "2025-05-02T18:56:13Z",
                    "content": "I visited the Doctors Without Borders malnutrition program in Katsina, Nigeria in December. My colleagues there were still traumatized by the hunger gap months earlier, the period between harvests wh… [+6433 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Www.abc.es"
                    },
                    "author": "(abc)",
                    "title": "Resuelto el misterio de la momia de un vicario austriaco: lo embalsamaron metiéndole trozos de madera y tela por el ano",
                    "description": "Corría el año 1925 cuando el egiptólogo Howard Carter y su equipo retiraron la tapa del tercer y último sarcófago del ajuar funerario de Tutankamón tras 3.300 años sellado en el Valle de los Reyes. Ante sus ojos se reveló la momia de uno de los faraones más f…",
                    "url": "https://www.abc.es/historia/resuelto-misterio-momia-vicario-austriaco-embalsamaron-metiendole-20250502204424-nt.html",
                    "urlToImage": "https://s2.abcstatics.com/abc/www/multimedia/historia/2025/05/02/Momia-klQG--1024x512@diario_abc.JPG",
                    "publishedAt": "2025-05-02T18:44:24Z",
                    "content": "Corría el año 1925 cuando el egiptólogo Howard Carter y su equipo retiraron la tapa del tercer y último sarcófago del ajuar funerario de Tutankamón tras 3.300 años sellado en el Valle de los Reyes. A… [+3900 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "WPLG Local 10"
                    },
                    "author": "Ryan Mackey",
                    "title": "Tuberculosis case reported at Miami federal jail",
                    "description": "Officials confirmed Friday that an inmate at the Federal Detention Center in Miami has tested positive for tuberculosis.",
                    "url": "https://www.local10.com/health/2025/05/02/tuberculosis-case-reported-at-miami-federal-jail/",
                    "urlToImage": "https://res.cloudinary.com/graham-media-group/image/upload/f_auto/q_auto/c_thumb,w_700/v1/media/gmg/QW5R6E4V2NH7DBXSN5X4KZRGKI.jpg?_a=DATAdtccZAA0",
                    "publishedAt": "2025-05-02T18:35:42Z",
                    "content": "MIAMI An inmate at the Federal Detention Center in Miami has tested positive for tuberculosis, officials confirmed Friday. \r\nA spokesperson with the Federal Bureau of Prisons said the agency is worki… [+1435 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Www.df.cl"
                    },
                    "author": "Bloomberg",
                    "title": "Trump anuncia que la Universidad de Harvard perderá su beneficio de exención de impuestos",
                    "description": "En los últimos años, figuras conservadoras han intensificado sus críticas contra Harvard y otras universidades de élite, acusándolas de promover agendas ideológicas liberales y de permitir un aumento del antisemitismo, especialmente en el contexto de las prot…",
                    "url": "https://www.df.cl/internacional/politica/trump-anuncia-que-harvard-perdera-su-exencion-fiscal",
                    "urlToImage": "https://www.df.cl/noticias/site/artic/20250502/imag/foto_0000000120250502115538.jpg",
                    "publishedAt": "2025-05-02T16:55:00Z",
                    "content": "El presidente de Estados Unidos, Donald Trump, anunció este viernes que la Universidad de Harvard perderá su exención fiscal, una designación que le permite evitar impuestos sobre sus ingresos como i… [+2268 chars]"
                    },
                    {
                    "source": {
                        "id": "abc-news",
                        "name": "ABC News"
                    },
                    "author": "Mary Kekatos",
                    "title": "Measles cases surpass 900 in US as infections confirmed in 29 states, CDC data shows",
                    "description": "Measles cases surpass 900 in US as infections confirmed in 29 states, CDC data showsgo.com",
                    "url": "https://abcnews.go.com/Health/measles-cases-surpass-900-us-infections-confirmed-29/story?id=121391716",
                    "urlToImage": "https://i.abcnewsfe.com/a/96cbf0af-721a-49d6-8ca6-c3054c6b7bfb/measles-sign-ap-jt-250311_1741732269895_hpMain_16x9.jpg?w=1600",
                    "publishedAt": "2025-05-02T16:41:36Z",
                    "content": "Measles cases in the U.S. have surpassed 900 as outbreaks continue to spread across the county, according to new Centers for Disease Control and Prevention data published Friday.\r\nA total of 935 case… [+4914 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Yahoo Entertainment"
                    },
                    "author": "Amanda Albright, Elizabeth Rembert, Akayla Gardner and Brooke Sutherland",
                    "title": "Trump Reignites Harvard Feud by Threatening Tax-Exempt Status",
                    "description": "(Bloomberg) -- President Donald Trump said Harvard University would lose its tax-exempt status, stepping up his attack on the Ivy League school with a threat...",
                    "url": "https://finance.yahoo.com/news/trump-says-harvard-lose-tax-115457342.html",
                    "urlToImage": "https://s.yimg.com/ny/api/res/1.2/M0R_FXzI3eyDV46xhcxwQA--/YXBwaWQ9aGlnaGxhbmRlcjt3PTEyMDA7aD04MDA-/https://media.zenfs.com/en/bloomberg_holding_pen_162/24e2e0b8f448bf17f42f35478b3e1b81",
                    "publishedAt": "2025-05-02T16:30:07Z",
                    "content": "(Bloomberg) -- President Donald Trump said Harvard University would lose its tax-exempt status, stepping up his attack on the Ivy League school with a threat that was decried as out of his jurisdicti… [+6698 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Discover Magazine"
                    },
                    "author": "Paul Smaglik",
                    "title": "Well-Preserved Austrian Mummy Reveals Unusual Rectum Embalming Technique",
                    "description": "Learn how the examination of Austrian mummy remains reveals details of his life, but leaves a few mysteries behind.",
                    "url": "https://www.discovermagazine.com/the-sciences/well-preserved-austrian-mummy-reveals-unusual-rectum-embalming-technique",
                    "urlToImage": "https://images.ctfassets.net/cnu0m8re1exe/7KR7mq11LalRpKa62xcQbE/a4ada6777db50e847fa008990e9edeb9/Air-Dried-Chaplain.jpg",
                    "publishedAt": "2025-05-02T16:15:00Z",
                    "content": "We typically associate mummies with ancient Egypt or sometimes cheesy old horror movies. Now a newly described mummy from an unexpected place Austria details in the journal Frontiers in Medicine a pr… [+3559 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "NerdWallet"
                    },
                    "author": "Anna Helhoski",
                    "title": "Pharmaceutical Tariffs And Drug Shortages: How Costs Could Rise",
                    "description": "Pharmaceutical tariffs are likely to drive up drug prices and worsen shortages in the U.S.",
                    "url": "https://www.nerdwallet.com/article/finance/pharma-tariffs-drug-shortages#article",
                    "urlToImage": "https://www.nerdwallet.com/tachyon/2025/05/GettyImages-2163308643.jpg?resize=1440%2C864",
                    "publishedAt": "2025-05-02T16:01:04Z",
                    "content": "The pharmaceutical trade is complicated, largely due to the multiple steps it takes to get finished drug products from production to pharmacy shelves. Companies rely on complex manufacturing chains t… [+8188 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Popular Science"
                    },
                    "author": "Andrew Paul",
                    "title": "Unusual mystery mummy ID’ed in Austrian church",
                    "description": "An exceptionally well-preserved corpse entombed in a small Austrian village’s church crypt has not only provided researchers with a previously unknown method of mummification. An analysis published May 2 in the journal Frontiers in Medicine, also solved the c…",
                    "url": "https://www.popsci.com/science/mummy-austria/",
                    "urlToImage": "https://www.popsci.com/wp-content/uploads/2025/05/Austrian-Mummy.png",
                    "publishedAt": "2025-05-02T14:20:17Z",
                    "content": "An exceptionally well-preserved corpse entombed in a small Austrian villages church crypt has not only provided researchers with a previously unknown method of mummification. An analysis published Ma… [+4151 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Gizmodo.com"
                    },
                    "author": "Lucas Handley",
                    "title": "¡Inaudito!: embalsamamiento anal preserva momia europea durante casi 300 años",
                    "description": "Los científicos hallaron el abdomen lleno de madera y tejido, pero lo extraño es cómo el material llegó hasta allí.",
                    "url": "https://es.gizmodo.com/inaudito-embalsamamiento-anal-preserva-momia-europea-durante-casi-300-anos-2000164018",
                    "urlToImage": "https://es.gizmodo.com/app/uploads/2025/05/Diseno-sin-titulo-2025-05-02T110404.413.jpg",
                    "publishedAt": "2025-05-02T14:12:08Z",
                    "content": "Al hablar de momias lo más probable es que pensemos en el antiguo Egipto. Pero muchas culturas diferentes embalsamaban a sus muertos, y los científicos acaban de encontrar un caso particular e inespe… [+3539 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Plos.org"
                    },
                    "author": "Desalegn Gizaw, Gorfineh Teshome, Kisi Chemeda, Aster Wakjira, Mekonnen Damessa",
                    "title": "Bacterial profile, treatment outcomes, and determinants among adult patients with musculoskeletal infections admitted to Jimma Medical Center: A prospective observational study",
                    "description": "Background The epidemiological characteristics of musculoskeletal infections are constantly evolving. Despite the significant burden of musculoskeletal infections in sub-Saharan Africa, there is a scarcity of data regarding the potential causes and treatment …",
                    "url": "https://journals.plos.org/plosone/article?id=10.1371/journal.pone.0322471",
                    "urlToImage": "https://journals.plos.org/plosone/article/figure/image?id=10.1371/journal.pone.0322471.g004&size=inline",
                    "publishedAt": "2025-05-02T14:00:00Z",
                    "content": "Citation: Gizaw D, Teshome G, Chemeda K, Wakjira A, Damessa M (2025) Bacterial profile, treatment outcomes, and determinants among adult patients with musculoskeletal infections admitted to Jimma Med… [+33638 chars]"
                    },
                    {
                    "source": {
                        "id": "el-mundo",
                        "name": "El Mundo"
                    },
                    "author": "Ricardo F. Colmenero",
                    "title": "Encuentran una extraña esfera de vidrio en el interior de la momia de un capellán del siglo XVIII de una iglesia de Austria",
                    "description": "Franz Xaver Sidler von Rosenegg, capellán de la iglesia de Santo Tomás de Blasenstein, un pequeño pueblo austríaco, y fallecido en 1746, acaba de ser resucitado por...",
                    "url": "https://www.elmundo.es/ciencia-y-salud/ciencia/2025/05/02/68121452fdddff726e8b459b.html",
                    "urlToImage": "https://phantom-elmundo.uecdn.es/2a0d66c045070794ada3009e7e9865c2/crop/0x0/2592x1728/resize/1200/f/webp/assets/multimedia/imagenes/2025/05/02/17461932684845.jpg",
                    "publishedAt": "2025-05-02T13:59:12Z",
                    "content": "Franz Xaver Sidler von Rosenegg, capellán de la iglesia de Santo Tomás de Blasenstein, un pequeño pueblo austríaco, y fallecido en 1746, acaba de ser resucitado por la ciencia. El estado de su cadá… [+3886 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "ScienceBlog.com"
                    },
                    "author": "Frontiers In",
                    "title": "Ancient Mummy Reveals Bizarre Rectal Embalming Technique",
                    "description": "A 300-year-old mystery has been solved through modern science, revealing a preservation method never before documented in the historical record.",
                    "url": "https://scienceblog.com/ancient-mummy-reveals-bizarre-rectal-embalming-technique/",
                    "urlToImage": "https://scienceblog.com/wp-content/uploads/2025/05/mummy.jpeg",
                    "publishedAt": "2025-05-02T13:16:32Z",
                    "content": "A 300-year-old mystery has been solved through modern science, revealing a preservation method never before documented in the historical record. Researchers have discovered that an exceptionally well… [+3129 chars]"
                    },
                    {
                    "source": {
                        "id": "newsweek",
                        "name": "Newsweek"
                    },
                    "author": "Billal Rahman",
                    "title": "ICE Detainee Dies After HIV Undiagnosed for Months During Custody",
                    "description": "Medical experts who reviewed the case for Newsweek said a routine blood test could have saved the 45-year-olds life.",
                    "url": "https://www.newsweek.com/ice-immigration-detainee-dies-hiv-2066705",
                    "urlToImage": "https://d.newsweek.com/en/full/2637368/ice-detainee-dies-after-hiv-undiagnosed.png",
                    "publishedAt": "2025-05-02T11:00:01Z",
                    "content": "A man who died in ICE custody earlier this year from complications related to untreated HIV could have been saved with the help of routine blood tests, medical experts have told Newsweek, raising con… [+9516 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Nakedcapitalism.com"
                    },
                    "author": "Conor Gallagher",
                    "title": "Links 5/2/2025",
                    "description": "Our romatic daily links: Trump team hoards supplies for tariff shock, Covid enters the China-US chat, Waltzs walking papers, and flying squirrel drones.",
                    "url": "https://www.nakedcapitalism.com/2025/05/links-5-2-2025.html",
                    "urlToImage": "https://www.nakedcapitalism.com/wp-content/uploads/2025/05/Screenshot-2025-05-01-at-8.23.06 AM-1024x1024.png",
                    "publishedAt": "2025-05-02T10:55:50Z",
                    "content": "Flying squirrel-inspired drone with foldable wings demonstrates high maneuverability TechXplore\r\nBig investors borrow against private equity holdings amid cash crunch FT\r\nClimate/Environment\r\nCarbon … [+8684 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "The BMJ"
                    },
                    "author": "Beshaw, M. A., Siraj, E. M., Demass, T. B., Lakew, A. M.",
                    "title": "Severity and associated factors of anaemia among rifampicin/multi-drug-resistant tuberculosis patients treated in Alert and St. Peters specialised hospitals, Addis Ababa, Ethiopia: a retrospective cross-sectional study",
                    "description": "Objective To assess the severity of anaemia and associated factors among drug-resistant tuberculosis (DR-TB) patients treated in DR-TB treatment-initiating centers in Addis Ababa, Ethiopia.\n\nDesign A retrospective cross-sectional study.\n\nSettings This study w…",
                    "url": "https://bmjopen.bmj.com/content/15/5/e091111",
                    "urlToImage": "https://bmjopen.bmj.com/pages/wp-content/uploads/sites/7/2019/07/bmjopen-default-cover.png",
                    "publishedAt": "2025-05-02T10:04:09Z",
                    "content": "Introduction\r\nTuberculosis (TB) is the most common infectious disease, causing more deaths annually than HIV and malaria together.1 Globally, about 10 million people fall ill with TB every year,2 and… [+11128 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Www.gov.uk"
                    },
                    "author": "UK Health Security Agency",
                    "title": "UKHSA publishes new analysis of health inequalities in England",
                    "description": "Data shows current state of health inequalities caused by infectious diseases, as well as environmental health hazards",
                    "url": "https://www.gov.uk/government/news/ukhsa-publishes-new-analysis-of-health-inequalities-in-england",
                    "urlToImage": "https://assets.publishing.service.gov.uk/media/6810d75dd521737e2f0f4a9b/s960_health_inequalities_news.png",
                    "publishedAt": "2025-05-02T09:00:07Z",
                    "content": "As part of its commitment to achieving equitable health security outcomes for everyone, the UK Health Security Agency is publishing (Friday 2 May) comprehensive new data, the Health Inequalities in H… [+5002 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Bangkok Post"
                    },
                    "author": "Dave Kendall",
                    "title": "Aid cuts could affect US itself",
                    "description": "\"Armageddon\" is the word veteran human rights campaigner Phil Robertson uses to describe the sudden shutdown of most of the US aid programmes around the world.",
                    "url": "https://www.bangkokpost.com/thailand/general/3012612/aid-cuts-could-affect-us-itself",
                    "urlToImage": "https://static.bangkokpost.com/media/content/20250428/c1_3012612_250502125141_700.jpg",
                    "publishedAt": "2025-05-02T05:45:00Z",
                    "content": "\"Armageddon\" is the word veteran human rights campaigner Phil Robertson uses to describe the sudden shutdown of most of the US aid programmes around the world.\r\nIn January, US President Donald Trump… [+4437 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Live Science"
                    },
                    "author": "Kristina Killgrove",
                    "title": "18th-century monks anus was stuffed with wood chips and fabric to mummify him, researchers discover",
                    "description": "An 18th-century Austrian monk who died of tuberculosis was mummified in an extremely unusual way.",
                    "url": "https://www.livescience.com/archaeology/18th-century-monks-anus-was-stuffed-with-wood-chips-and-fabric-to-mummify-him-researchers-discover",
                    "urlToImage": "https://cdn.mos.cms.futurecdn.net/8QQmfTJZ2uD7PHcPZ4NcNL.png",
                    "publishedAt": "2025-05-02T04:01:00Z",
                    "content": "While analyzing an 18th-century Austrian mummy, researchers discovered that the man died from tuberculosis and was preserved in a very unusual way: with wood chips, twigs and fabric packed into his a… [+4321 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Gizmodo.com"
                    },
                    "author": "Margherita Bassi",
                    "title": "Never-Before-Seen Anal Embalming Method Kept This European Mummy Preserved for Nearly 300 Years",
                    "description": "Scientists found a mummys abdomen filled with wood and fabric—but its how they got in there thats strange.",
                    "url": "https://gizmodo.com/never-before-seen-anal-embalming-method-kept-this-european-mummy-preserved-for-nearly-300-years-2000596249",
                    "urlToImage": "https://gizmodo.com/app/uploads/2025/04/Austrian-mummy.jpg",
                    "publishedAt": "2025-05-02T04:00:19Z",
                    "content": "When you hear the word mummy, chances are you think of ancient Egypt. Many different cultures embalmed their deceased, however, and scientists have just found a particularly unexpected case.\r\nAs deta… [+3119 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Kevinmd.com"
                    },
                    "author": "Koketso Masenya",
                    "title": "When America sneezes, the world catches a cold: Trump’s freeze on HIV/AIDS funding",
                    "description": "On the 20th of January 2025, President Donald Trump signed an executive order that initiated a freeze on foreign aid, including the President’s Emergency Plan for AIDS Relief (PEPFAR). This abrupt suspension of funding has triggered a global health crisis, un…",
                    "url": "https://kevinmd.com/2025/05/when-america-sneezes-the-world-catches-a-cold-trumps-freeze-on-hiv-aids-funding.html",
                    "urlToImage": "https://kevinmd.com/wp-content/uploads/image-4-3.jpg",
                    "publishedAt": "2025-05-01T19:00:05Z",
                    "content": "On the 20th of January 2025, President Donald Trump signed an executive order that initiated a freeze on foreign aid, including the President’s Emergency Plan for AIDS Relief (PEPFAR). This abrupt su… [+5752 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Harvard School of Engineering and Applied Sciences"
                    },
                    "author": "Sydney Boles",
                    "title": "Worth the grind",
                    "description": "The hard work of the competitive process pays off for researchers: \"It means you can do something to try to help people.\"",
                    "url": "https://news.harvard.edu/gazette/story/2025/05/scientists-say-securing-federal-grants-is-worth-the-grind/",
                    "urlToImage": "https://news.harvard.edu/wp-content/uploads/2025/05/research-grant-process-emmons-chavarro.png",
                    "publishedAt": "2025-05-01T18:03:30Z",
                    "content": "For public health researchers, getting a federal grant is a big deal. \r\nMore than 30 years later, Karen Emmons hasnt forgotten her first one. She was an assistant professor in Brown Universitys Depar… [+5047 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "WFTV Orlando"
                    },
                    "author": "James Tutten",
                    "title": "Florida tuberculosis",
                    "description": "Health officials in Broward County are monitoring a possible tuberculosis exposure at a Fort Lauderdale high school.",
                    "url": "https://www.wftv.com/news/local/student-tests-positive-tuberculosis-south-florida-officials-say/UO3AJ6ADF5CHNIEC5GIWYXR534/",
                    "urlToImage": "https://cmg-cmg-tv-10070-prod.cdn.arcpublishing.com/resizer/v2/https%3A%2F%2Fcloudfront-us-east-1.images.arcpublishing.com%2Fcmg%2FK6BMQGGLMNCVZB6S72JMQWILKQ.jpg?auth=c0b66e0c82e1d06d4a747c326fa4b4eb040b7b5abcff10f427ec43a041a89728&width=1200&height=630&smart=true",
                    "publishedAt": "2025-05-01T16:08:27Z",
                    "content": "FOURT LAUDERDALE, Fla. — Health officials in Broward County are monitoring a possible tuberculosis exposure at a Fort Lauderdale high school.\r\nSchool officials said one student recently tested positi… [+404 chars]"
                    },
                    {
                    "source": {
                        "id": null,
                        "name": "Yahoo Entertainment"
                    },
                    "author": null,
                    "title": "Tuberculosis case is confirmed at Florida high school. Here’s what to know",
                    "description": null,
                    "url": "https://consent.yahoo.com/v2/collectConsent?sessionId=1_cc-session_bbea3d23-94c8-498e-8f1e-37ff9e64b952",
                    "urlToImage": null,
                    "publishedAt": "2025-05-01T15:58:04Z",
                    "content": "If you click Accept all, we and our partners, including 240 who are part of the IAB Transparency &amp; Consent Framework, will also store and/or access information on a device (in other words, use … [+702 chars]"
                    }
                    ]
                }}';

        // Dekode string JSON menjadi array PHP
        $array = json_decode($data, true);

        return response()->json([
            'success' => true,
            'message' => 'Success load data',
            'data'  => $array,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
