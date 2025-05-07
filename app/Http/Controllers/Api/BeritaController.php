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

        $data = [
            [
                "parent" => [
                    "id" => 1,
                    "description" => "Kesehatan",
                    "child" => [
                        [
                            "source" => [
                                "id" => null,
                                "name" => "sehatindonesia.id"
                            ],
                            "author" => "dr. Andini Prasetya",
                            "title" => "Waspadai Tuberkulosis Paru: Penyakit Menular yang Masih Jadi Ancaman Serius",
                            "description" => "Meskipun bisa dicegah dan diobati, tuberkulosis paru tetap menjadi masalah kesehatan utama di Indonesia.",
                            "url" => "https://www.sehatindonesia.id/berita/tbc2025",
                            "urlToImage" => "https://www.sehatindonesia.id/images/tbc_penyuluhan.jpg",
                            "publishedAt" => "2025-05-07",
                            "content" => "Tuberkulosis paru masih menjadi tantangan besar dalam dunia kesehatan di Indonesia. Menurut data Kemenkes, Indonesia menduduki peringkat kedua kasus TBC terbanyak di dunia. Penyakit ini menular melalui udara dan bisa menyerang siapa saja. Gejala umum meliputi batuk lebih dari dua minggu, demam, dan penurunan berat badan. Pencegahan bisa dilakukan dengan vaksinasi BCG, menjaga kebersihan lingkungan, dan memperkuat imunitas tubuh. Pemerintah kini mendorong deteksi dini melalui program nasional 'TOSS TBC' untuk Temukan, Obati Sampai Sembuh."
                        ],
                        [
                            "source" => [
                                "id" => null,
                                "name" => "antaranews.com"
                            ],
                            "author" => "dr. Ina Agustina",
                            "title" => "Deteksi Dini TBC: Kunci Utama Menekan Angka Kematian",
                            "description" => "Deteksi dini tuberkulosis paru dapat menurunkan angka kematian secara signifikan.",
                            "url" => "https://www.antaranews.com/berita/4732257/kemenkes-deteksi-889-ribu-orang-yang-terkena-tb-per-maret-2025",
                            "urlToImage" => "https://www.antaranews.com/images/tbc_deteksi_dini.jpg",
                            "publishedAt" => "2025-03-24",
                            "content" => "Kementerian Kesehatan telah mendeteksi sebanyak 889 ribu kasus tuberkulosis pada awal Maret 2025, yang merupakan 81% dari target deteksi 2024 sebesar 1.090.000 orang. Deteksi dini melalui skrining aktif dan integrasi data dengan rumah sakit serta puskesmas menjadi strategi utama untuk menekan angka kematian akibat TBC."
                        ],
                        [
                            "source" => [
                                "id" => null,
                                "name" => "reuters.com"
                            ],
                            "author" => "dr. Budi Gunadi Sadikin",
                            "title" => "Inovasi Vaksin TBC: Harapan Baru dalam Penanggulangan Penyakit",
                            "description" => "Pengembangan vaksin baru menjadi harapan dalam memerangi tuberkulosis paru.",
                            "url" => "https://www.reuters.com/business/healthcare-pharmaceuticals/indonesia-ramps-up-fight-against-tuberculosis-amid-concerns-economic-impact-2024-06-10/",
                            "urlToImage" => "https://www.reuters.com/images/vaksin_tbc.jpg",
                            "publishedAt" => "2024-06-10",
                            "content" => "Indonesia berencana melakukan uji klinis untuk beberapa vaksin tuberkulosis, termasuk vaksin dari GlaxoSmithKline dan BioNTech. Pengembangan vaksin baru diharapkan dapat mengurangi angka kematian akibat TBC yang mencapai sekitar 134.000 orang pada tahun 2022."
                        ],
                        [
                            "source" => [
                                "id" => null,
                                "name" => "tbindonesia.or.id"
                            ],
                            "author" => "Tim Kerja TBC",
                            "title" => "Peringatan Hari TBC Sedunia 2025: Komitmen Bersama untuk Eliminasi TBC",
                            "description" => "Peringatan Hari TBC Sedunia 2025 menjadi momentum untuk memperkuat komitmen bersama dalam mengakhiri tuberkulosis.",
                            "url" => "https://www.tbindonesia.or.id/semarakan-hari-tbc-sedunia-2025-melalui-gerakan-indonesia-akhiri-tuberkulosis-dengan-komitmen-dan-aksi-nyata-giatkan/",
                            "urlToImage" => "https://www.tbindonesia.or.id/images/giatkan_tbc.jpg",
                            "publishedAt" => "2025-03-24",
                            "content" => "Tema nasional peringatan Hari TBC Sedunia 2025 adalah 'GIATKAN: Gerakan Indonesia Akhiri Tuberkulosis dengan Komitmen dan Aksi Nyata'. Pemerintah mengajak seluruh lapisan masyarakat untuk berperan aktif dalam upaya eliminasi TBC pada tahun 2030 melalui komitmen bersama, investasi berkelanjutan, dan aksi nyata."
                        ],
                        [
                            "source" => [
                                "id" => null,
                                "name" => "kemkes.go.id"
                            ],
                            "author" => "dr. Ina Agustina",
                            "title" => "Peran Teknologi dalam Percepatan Eliminasi Tuberkulosis",
                            "description" => "Pemanfaatan teknologi menjadi salah satu strategi dalam mempercepat eliminasi tuberkulosis.",
                            "url" => "https://kemkes.go.id/id/rilis-kesehatan/47510",
                            "urlToImage" => "https://kemkes.go.id/images/teknologi_tbc.jpg",
                            "publishedAt" => "2025-03-25",
                            "content" => "Pemanfaatan teknologi menjadi salah satu strategi dalam mempercepat eliminasi tuberkulosis.",
                            "url" => "https://kemkes.go.id/id/rilis-kesehatan/47510"
                        ]
                    ]
                ]
            ],
            [
                "parent" => [
                    "id" => 2,
                    "description" => "Life Style",
                    "child" => [
                        [
                            "source" => [
                                "id" => null,
                                "name" => "lifestyleplus"
                            ],
                            "author" => "Rani Oktaviani",
                            "title" => "Gaya Hidup Sehat Cegah Tuberkulosis Paru: Mulai dari Pola Makan hingga Kualitas Tidur",
                            "description" => "Gaya hidup berperan penting dalam mencegah penyakit menular seperti TBC paru.",
                            "url" => "https://www.lifestyleplus.id/artikel/gayahidupcegahTBC",
                            "urlToImage" => "https://www.lifestyleplus.id/images/tbc_lifestyle.jpg",
                            "publishedAt" => "2025-05-07",
                            "content" => "Gaya hidup sehat menjadi salah satu benteng alami dalam mencegah infeksi tuberkulosis paru. Nutrisi seimbang, olahraga teratur, dan tidur cukup dapat memperkuat sistem imun tubuh agar tidak mudah tertular TBC. Dengan perubahan sederhana dalam keseharian, masyarakat bisa ikut menekan angka kasus TBC."
                        ],
                        [
                            "source" => [
                                "id" => null,
                                "name" => "hidupsehat.id"
                            ],
                            "author" => "Aditya Mulyono",
                            "title" => "Udara Bersih dan Sinar Matahari: Kombinasi Alami Cegah TBC Paru di Rumah",
                            "description" => "Menjaga sirkulasi udara dan paparan cahaya alami di rumah sangat penting untuk mencegah penyebaran TBC.",
                            "url" => "https://www.hidupsehat.id/gayahidup/udara-matahari-vs-tbc",
                            "urlToImage" => "https://www.hidupsehat.id/images/ventilasi_tbc.jpg",
                            "publishedAt" => "2025-04-18",
                            "content" => "Ruangan yang lembab dan pengap menjadi tempat favorit bagi bakteri penyebab TBC berkembang. Pastikan rumah memiliki ventilasi baik dan pencahayaan alami yang cukup. Menjemur kasur dan membuka jendela setiap hari dapat membantu mengurangi risiko penularan TBC di lingkungan keluarga."
                        ],
                        [
                            "source" => [
                                "id" => null,
                                "name" => "lifestylefit.id"
                            ],
                            "author" => "dr. Santi Marlina",
                            "title" => "Stop Rokok Sekarang! Merokok Tingkatkan Risiko Tertular Tuberkulosis",
                            "description" => "Merokok terbukti memperlemah paru dan meningkatkan risiko terkena TBC.",
                            "url" => "https://www.lifestylefit.id/kampanye/stop-rokok-tbc",
                            "urlToImage" => "https://www.lifestylefit.id/images/rokok_tbc.jpg",
                            "publishedAt" => "2025-02-28",
                            "content" => "Merokok tidak hanya merusak paru-paru, tetapi juga meningkatkan kerentanan tubuh terhadap infeksi TBC. Zat kimia dalam rokok melemahkan mekanisme pertahanan saluran pernapasan. Berhenti merokok adalah langkah gaya hidup sehat yang langsung mengurangi risiko penularan dan kambuhnya TBC."
                        ],
                        [
                            "source" => [
                                "id" => null,
                                "name" => "gizilife.id"
                            ],
                            "author" => "Nurul Wahyuni",
                            "title" => "Pola Makan Tinggi Protein Bantu Pulihkan Pasien TBC",
                            "description" => "Nutrisi yang tepat mempercepat penyembuhan pasien TBC paru.",
                            "url" => "https://www.gizilife.id/artikel/makanan-sehat-pasien-tbc",
                            "urlToImage" => "https://www.gizilife.id/images/makanan_tbc.jpg",
                            "publishedAt" => "2025-03-10",
                            "content" => "Konsumsi makanan tinggi protein seperti telur, ikan, dan kacang-kacangan sangat dianjurkan bagi pasien tuberkulosis. Nutrisi yang cukup membantu tubuh memperbaiki jaringan yang rusak dan meningkatkan daya tahan. Selain itu, pasien juga dianjurkan menghindari makanan olahan dan tinggi gula."
                        ],
                        [
                            "source" => [
                                "id" => null,
                                "name" => "mindwell.id"
                            ],
                            "author" => "Rika Amelia",
                            "title" => "Meditasi dan Kesehatan Mental: Peran Emosi dalam Proses Penyembuhan TBC",
                            "description" => "Ketahanan mental memainkan peran penting dalam keberhasilan pengobatan TBC.",
                            "url" => "https://www.mindwell.id/artikel/meditasi-untuk-pasien-tbc",
                            "urlToImage" => "https://www.mindwell.id/images/meditasi_tbc.jpg",
                            "publishedAt" => "2025-04-01",
                            "content" => "Proses penyembuhan TBC memerlukan ketekunan dan kestabilan mental. Rasa stres dan kecemasan bisa menurunkan imunitas. Meditasi, yoga, dan teknik pernapasan terbukti membantu pasien lebih fokus dalam pengobatan. Dukungan dari keluarga dan lingkungan juga penting dalam mempercepat pemulihan."
                        ]
                    ]
                ]
            ],
            [
                "parent" => [
                    "id" => 3,
                    "description" => "Politik",
                    "child" => [
                        [
                            "source" => [
                                "id" => null,
                                "name" => "politiknews.id"
                            ],
                            "author" => "Dimas Santosa",
                            "title" => "DPR Dorong Revisi UU Kesehatan untuk Percepat Penanggulangan TBC Paru",
                            "description" => "Komisi IX DPR RI usulkan regulasi baru agar penanganan tuberkulosis lebih terintegrasi dan efektif.",
                            "url" => "https://www.politiknews.id/berita/revisiUU_TBC",
                            "urlToImage" => "https://www.politiknews.id/images/dpr_rapat_tbc.jpg",
                            "publishedAt" => "2025-05-07",
                            "content" => "Dalam rapat kerja bersama Kemenkes, DPR mengusulkan revisi UU Kesehatan untuk memperkuat kebijakan TBC. Tujuannya adalah mempercepat deteksi dini, pengobatan gratis, serta koordinasi lintas sektor. Legislasi ini ditargetkan rampung sebelum akhir 2025."
                        ],
                        [
                            "source" => [
                                "id" => null,
                                "name" => "setneg.go.id"
                            ],
                            "author" => "Rahma Sari",
                            "title" => "Presiden Tegaskan Komitmen Eliminasi TBC 2030 dalam Pidato Kenegaraan",
                            "description" => "Pemerintah menyatakan perang terhadap tuberkulosis sebagai bagian dari visi Indonesia Sehat 2030.",
                            "url" => "https://www.setneg.go.id/berita/pidato-presiden-tbc2030",
                            "urlToImage" => "https://www.setneg.go.id/images/presiden_tbc.jpg",
                            "publishedAt" => "2025-04-17",
                            "content" => "Dalam Sidang Tahunan MPR, Presiden menyebut TBC sebagai 'musuh dalam selimut' yang perlu ditangani bersama. Komitmen nasional diarahkan pada peningkatan anggaran, layanan kesehatan primer, dan kerja sama global. Target Indonesia bebas TBC pada 2030 tetap menjadi prioritas utama."
                        ],
                        [
                            "source" => [
                                "id" => null,
                                "name" => "keuangannegara.id"
                            ],
                            "author" => "Bayu Nugraha",
                            "title" => "Anggaran Penanggulangan TBC 2025 Naik 30%, Fokus pada Daerah Endemis",
                            "description" => "Pemerintah menaikkan anggaran penanggulangan TBC dalam RAPBN 2025, dengan fokus pada daerah padat dan miskin.",
                            "url" => "https://www.keuangannegara.id/berita/anggaran-tbc-naik-2025",
                            "urlToImage" => "https://www.keuangannegara.id/images/anggaran_tbc.jpg",
                            "publishedAt" => "2025-05-01",
                            "content" => "RAPBN 2025 menetapkan kenaikan anggaran program TBC sebesar 30%. Dana ini dialokasikan untuk pengadaan obat, kampanye edukasi, dan pelatihan petugas kesehatan di daerah endemis seperti Papua, NTT, dan Jawa Barat. Langkah ini diharapkan mempercepat eliminasi TBC secara merata."
                        ],
                        [
                            "source" => [
                                "id" => null,
                                "name" => "aseanupdate.id"
                            ],
                            "author" => "Intan Wulandari",
                            "title" => "Kerja Sama ASEAN: Indonesia Pimpin Aliansi Regional Lawan TBC",
                            "description" => "Indonesia memimpin kerja sama ASEAN untuk mengatasi tuberkulosis lintas batas negara.",
                            "url" => "https://www.aseanupdate.id/berita/aliansi-tbc-asean",
                            "urlToImage" => "https://www.aseanupdate.id/images/asean_tbc.jpg",
                            "publishedAt" => "2025-03-26",
                            "content" => "Indonesia menjadi ketua inisiatif ASEAN+ untuk penanggulangan TBC lintas batas, bekerja sama dengan WHO dan Global Fund. Fokusnya adalah harmonisasi data, distribusi obat lintas negara, dan penguatan sistem rujukan regional. Upaya ini juga menjadi diplomasi kesehatan strategis Indonesia di kawasan."
                        ],
                        [
                            "source" => [
                                "id" => null,
                                "name" => "politikdaerah"
                            ],
                            "author" => "Rendy Aditya",
                            "title" => "Bupati dan DPRD Tandatangani Komitmen TBC Bebas di 2028",
                            "description" => "Pemerintah daerah mulai ambil peran aktif dalam eliminasi tuberkulosis dengan deklarasi dan alokasi dana khusus.",
                            "url" => "https://www.politikdaerah.id/berita/komitmen-daerah-bebas-tbc",
                            "urlToImage" => "https://www.politikdaerah.id/images/bupati_tbc.jpg",
                            "publishedAt" => "2025-04-04",
                            "content" => "Di Kabupaten Kendal, Bupati dan DPRD menandatangani nota kesepakatan komitmen 'TBC Bebas 2028'. Mereka menjanjikan dukungan APBD untuk pemeriksaan gratis, pelacakan kasus, dan pembangunan klinik TBC. Model ini diharapkan ditiru daerah lain di Indonesia."
                        ]
                    ]
                ]
            ]
        ];

        return response()->json([
            'success' => true,
            'message' => 'Success load data',
            'data'  => $data,
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
