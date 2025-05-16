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
        $data = [
            [
                "parent" => [
                    "id" => 1,
                    "description" => "Kesehatan",
                    "child" => [
                        [
                            "author" => "Mehmood Ahmad, Naeem Rasool, Rana Muhammad Zahid Mushtaq, Sammina Mahmood, Abdur Rauf Khalid, Waqas Ahmad, Bilal Mahmood Beg, Mostafa A. Abdel Maksoud, Abdul Aziz Alamri, Adeel Sattar",
                            "title" => "Understanding the impact of moxifloxacin on immune function: Findings from cytokine analyses and immunological assays in mice",
                            "description" => "(1) Background: Moxifloxacin (MXF) is a fluorinated quinolone antibiotic used most commonly due to its broad spectrum of activity. However, the immunomodulatory effects of MXF remain underexplored. This study aims to investigate the patterns of immunomodulato…",
                            "url" => "https://journals.plos.org/plosone/article?id=10.1371/journal.pone.0321961",
                            "urlToImage" => "https://journals.plos.org/plosone/article/figure/image?id=10.1371/journal.pone.0321961.g004&size=inline",
                            "publishedAt" => "2025-05-06T14:00:00Z",
                            "content" => "Abstract\r\n(1) Background: Moxifloxacin (MXF) is a fluorinated quinolone antibiotic used most commonly due to its broad spectrum of activity. However, the immunomodulatory effects of MXF remain undere… [+47480 chars]"
                        ],
                        [
                            "source" => [
                                "id" => null,
                                "name" => "Plos.org"
                            ],
                            "author" => "Mani Kalaivani, Chitralok Hemraj, Varhlunchhungi Varhlunchhungi, Lakshmy Ramakrishnan, Sumit Malhotra, Sanjeev Kumar Gupta, Raman Kumar Marwaha, Ransi Ann Abraham, Monika Arora, Tina Rawal, Maroof Ahmad Khan, Aditi Sinha, Nikhil Tandon",
                            "title" => "Cardio-metabolic traits and its socioeconomic differentials among school children including metabolically obese normal weight phenotypes in India: A post-COVID baseline characteristics of LEAP-C cohort",
                            "description" => "Background Cardio-metabolic risks emerge in early life and progress further in adult life. In recent times, COVID-19 pandemic aggravated risks owing to poor food security and diet quality. We aimed to assess the prevalence of cardiometabolic traits including …",
                            "url" => "https://journals.plos.org/plosone/article?id=10.1371/journal.pone.0321898",
                            "urlToImage" => "https://journals.plos.org/plosone/article/figure/image?id=10.1371/journal.pone.0321898.g007&size=inline",
                            "publishedAt" => "2025-05-06T14:00:00Z",
                            "content" => "Citation: Kalaivani M, Hemraj C, Varhlunchhungi V, Ramakrishnan L, Malhotra S, Gupta SK, et al. (2025) Cardio-metabolic traits and its socioeconomic differentials among school children including meta… [+43435 chars]"
                        ],
                        [
                            "source" => [
                                "id" => null,
                                "name" => "Fair Observer"
                            ],
                            "author" => "Imran Khalid",
                            "title" => "Trump’s Attack on Harvard Is Just the Opening Salvo",
                            "description" => "“Harvard is a threat to democracy,” declared US President Donald Trump in a Truth Social post. He accused the university of being an “Anti-Semitic, Far Left Institution” and a breeding ground for “crazed lunatics” who “spew fake ANGER AND HATE.” This tirade m…",
                            "url" => "https://www.fairobserver.com/politics/trumps-attack-on-harvard-is-just-the-opening-salvo/",
                            "urlToImage" => "https://www.fairobserver.com/wp-content/uploads/2025/05/Trumps-Attack-on-Harvard.jpg",
                            "publishedAt" => "2025-05-06T13:53:07Z",
                            "content" => "“Harvard is a threat to democracy,” declared US President Donald Trump in a Truth Social post. He accused the university of being an “Anti-Semitic, Far Left Institution” and a breeding ground for “cr… [+6812 chars]"
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
                                "id" => "breitbart-news",
                                "name" => "Breitbart News"
                            ],
                            "author" => "Patrick K. O'Donnell, Patrick K. O'Donnell",
                            "title" => "Exclusive--O'Donnell: 'The Shot Heard Round the World,' Subjects Become Citizens, Lexington and Concord and the 250th Anniversary of the Start of the Revolutionary War",
                            "description" => "This week marks the 250th anniversary of the Battles of Lexington and Concord and the start of the Revolutionary War. Farmers, tradesmen, laborers, and mariners--Americans of all stripes–came together to defend themselves against the most professional army in…",
                            "url" => "https://www.breitbart.com/politics/2025/04/19/exclusive-odonnell-the-shot-heard-round-the-world-subjects-become-citizens-lexington-and-concord-and-the-250th-anniversary-of-the-start-of-the-revolutionary-war/",
                            "urlToImage" => "https://media.breitbart.com/media/2025/04/Battle_of_Lexington_painting-640x335.jpeg",
                            "publishedAt" => "2025-04-19T12:00:07Z",
                            "content" => "This week marks the 250th anniversary of the Battles of Lexington and Concord and the start of the Revolutionary War. Farmers, tradesmen, laborers, and mariners–Americans of all stripescame together … [+17237 chars]"
                        ],
                        [
                            "author" => null,
                            "title" => "Nazar - Demilitarize",
                            "description" => "Following his breakthrough 2020 debut, Nazar returns to Hyperdub with a vocal-led and personal record that wrestles with fractured ambient kuduro.",
                            "url" => "https://ra.co/reviews/36273",
                            "urlToImage" => "https://static.ra.co/images/reviews/2025/nazar-demilitarize-cover.jpg",
                            "publishedAt" => "2025-04-25T09:00:00Z",
                            "content" => "\u003Cul\u003E\u003Cli\u003E\u003C/li\u003E\u003Cli\u003E\u003C/li\u003E\u003Cli\u003E\u003C/li\u003E\u003Cli\u003EFollowing his breakthrough 2020 debut, Nazar returns to Hyperdub with a vocal-led and personal record that wrestles with fractured ambient kuduro.\u003C/li\u003E\u003Cli\u003E\r\n\u003C/li\u003E\u003Cl… [+5674 chars]"
                        ],
                        [
                            "source" => [
                                "id" => null,
                                "name" => "Toronto Star"
                            ],
                            "author" => "Sarah Murdoch Special To The Star",
                            "title" => "Toronto Star bestsellers for April 9, 2025",
                            "description" => "Toronto Star bestsellers for April 9, 2025thestar.com",
                            "url" => "https://www.thestar.com/entertainment/books/toronto-star-bestsellers-for-april-9-2025/article_8aa81a69-40da-4302-a60b-eea593326fc1.html",
                            "urlToImage" => "https://bloximages.chicago2.vip.townnews.com/thestar.com/content/tncms/assets/v3/editorial/6/91/6915ec12-685c-541c-b26e-904803695b17/67ec0ab1a45f8.image.jpg?crop=1000%2C525%2C0%2C70",
                            "publishedAt" => "2025-04-10T00:42:12Z",
                            "content" => "Donald Trump has long been a category unto himself on the non-fiction bestseller list, inspiring biographies, political analyses and tell-alls by family members, former aides and appointees. Moreover… [+4577 chars]"
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
                                "name" => "Lithub.com"
                            ],
                            "author" => "Steven W. Thrasher",
                            "title" => "Urgent Lessons From a Heroic Early AIDS Doctor: On the Legacy of Joseph Sonnabend",
                            "description" => "It’s not at every memorial where mourners are not just handed a program of the service, but also given a pamphlet on how to have safe gay sex in a time of disease. Then again, Joseph Sonnabend (1933-2021) was not just any doctor. Dr. Sonnabend—or “Joe” as mos…",
                            "url" => "https://lithub.com/urgent-lessons-from-a-heroic-early-aids-doctor-on-the-legacy-of-joseph-sonnabend/",
                            "urlToImage" => "https://s26162.pcdn.co/wp-content/uploads/2025/04/joseph-sonnabend.jpg",
                            "publishedAt" => "2025-04-24T12:17:25Z",
                            "content" => "Its not at every memorial where mourners are not just handed a program of the service, but also given a pamphlet on how to have safe gay sex in a time of disease.\r\nThen again, Joseph Sonnabend (1933-… [+11931 chars]"
                        ],
                        [
                            "author" => "Theo Burman",
                            "title" => "DOGE: What Did Elon Musk Get Done in 100 Days?",
                            "description" => "Musk has been the defining figure of the second Trump administration, though his time in the White House may be coming to an end.",
                            "url" => "https://www.newsweek.com/doge-elon-musk-100-days-2064728",
                            "urlToImage" => "https://d.newsweek.com/en/full/2625863/doge-what-did-elon-musk-get-done.png",
                            "publishedAt" => "2025-04-29T10:48:01Z",
                            "content" => "For the first 100 days of Donald Trump's presidency, billionaire and close ally Elon Musk has been central to the president's strategy and the public presentation of his administration.\r\nAs head of t… [+7770 chars]"
                        ],
                        [
                            "source" => [
                                "id" => null,
                                "name" => "GlobeNewswire"
                            ],
                            "author" => "EBC Tech Limited",
                            "title" => "EBC Financial Group Deepens Commitment to United to Beat Malaria with Renewed Global Partnership and First-Ever 5K Run Sponsorship",
                            "description" => "From strategic partnership to global employee action, EBC joins the global movement to end malaria for good.......",
                            "url" => "https://www.globenewswire.com/news-release/2025/04/28/3069074/0/en/EBC-Financial-Group-Deepens-Commitment-to-United-to-Beat-Malaria-with-Renewed-Global-Partnership-and-First-Ever-5K-Run-Sponsorship.html",
                            "urlToImage" => "https://ml.globenewswire.com/Resource/Download/5524516f-39bf-47df-9440-42674a2eaf1e",
                            "publishedAt" => "2025-04-28T11:06:00Z",
                            "content" => "WASHINGTON, April 28, 2025 (GLOBE NEWSWIRE) -- As the world marks World Malaria Day 2025 under the theme Malaria Ends With Us: Reinvest, Reimagine, Reignite, EBC Financial Group (EBC) is renewing its… [+11549 chars]"
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
