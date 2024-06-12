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
                            "source" => [
                                "id" => null,
                                "name" => "Yahoo Entertainment"
                            ],
                            "author" => null,
                            "title" => "GameStop raises $2.14 billion amid Roaring Kitty-fueled retail trading frenzy - Yahoo Finance",
                            "description" => null,
                            "url" => "https://finance.yahoo.com/news/gamestop-raises-2-14-billion-230142169.html",
                            "urlToImage" => null,
                            "publishedAt" => "2024-06-11T23:01:42Z",
                            "content" => "If you click 'Accept all', we and our partners, including 238 who are part of the IAB Transparency & Consent Framework, will also store and/or access information on a device (in other words, use … [+678 chars]"
                        ],
                        [
                            "source" => [
                                "id" => "the-wall-street-journal",
                                "name" => "The Wall Street Journal"
                            ],
                            "author" => "Jessica Toonkel",
                            "title" => "Exclusive | Shari Redstone Ends Discussions With Skydance on Paramount Deal - The Wall Street Journal",
                            "description" => "Redstone likely to pursue sale of National Amusements, the family company that controls Paramount, with other potential bidders",
                            "url" => "https://www.wsj.com/business/media/shari-redstones-nai-decides-to-stop-discussions-with-skydance-1b81985b",
                            "urlToImage" => "https://images.wsj.net/im-969233/social",
                            "publishedAt" => "2024-06-11T22:34:00Z",
                            "content" => null
                        ],
                        [
                            "source" => [
                                "id" => "usa-today",
                                "name" => "USA Today"
                            ],
                            "author" => "USA TODAY",
                            "title" => "Sodas recalled over dyes linked to cancer, FDA says: What to know - USA TODAY",
                            "description" => null,
                            "url" => "https://www.usatoday.com/story/money/food/2024/06/11/fda-soda-recall-2024-cancer-causing-chemical/74048689007/",
                            "urlToImage" => null,
                            "publishedAt" => "2024-06-11T22:29:14Z",
                            "content" => null
                        ],
                        [
                            "source" => [
                                "id" => null,
                                "name" => "Newsday"
                            ],
                            "author" => "Brianne Ledda",
                            "title" => "JetBlue adding service out of Islip's Long Island MacArthur Airport to Florida - Newsday",
                            "description" => "Starting in October, JetBlue will operate daily service between Islip and Orlando, and four round-trip flights weekly between Islip and Fort Lauderdale and Palm Beach.",
                            "url" => "https://www.newsday.com/long-island/towns/jetblue-macarthur-airport-cibcwyvm",
                            "urlToImage" => "https://cdn.newsday.com/ace/c:YWYzNzNkMDYtZTYyZi00:MzUyNjli/landscape/1280",
                            "publishedAt" => "2024-06-11T21:33:52Z",
                            "content" => "JetBlue Airways will start flying out of Long Island MacArthur Airport in Ronkonkoma in October, with nonstop service to three Florida destinations, Islip Town officials said Tuesday.\r\nJetBlue, the s… [+9152 chars]"
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
                                "name" => "The Seattle Times"
                            ],
                            "author" => "Lauren Rosenblatt",
                            "title" => "Amazon commits an additional $1.4 billion to affordable housing - The Seattle Times",
                            "description" => "Amazon invested $2.2 billion in affordable housing units faster than it expected. Now, it has committed an additional $1.4 billion for more projects.",
                            "url" => "https://www.seattletimes.com/business/amazon/amazon-commits-an-additional-1-4-billion-to-affordable-housing/",
                            "urlToImage" => "https://images.seattletimes.com/wp-content/uploads/2024/06/06112024_tzr_tzr_164354.jpg?d=1200x630",
                            "publishedAt" => "2024-06-11T21:29:42Z",
                            "content" => "Amazon is expanding its commitment to affordable housing with an additional $1.4 billion investment to help create and preserve affordable housing units near three major cities, the company announced… [+5207 chars]"
                        ],
                        [
                            "source" => [
                                "id" => null,
                                "name" => "CNET"
                            ],
                            "author" => null,
                            "title" => "Elon Musk Uses X To Air His Grievances Over Apple, OpenAI Partnership. Here's Why - CNET",
                            "description" => "Musk, who's developing an AI chatbot to challenge ChatGPT, said he may ban his employees from using Apple devices after the iPhone maker inked a deal with OpenAI, a company he's suing.",
                            "url" => "https://www.cnet.com/tech/mobile/elon-musk-uses-x-to-air-his-grievances-over-apple-openai-partnership-heres-why/",
                            "urlToImage" => "https://www.cnet.com/a/img/resize/fbcd9b59ee34f2d8e79be44e51feb621a9ed235b/hub/2024/06/11/f9a2584e-de77-49b1-88d9-9358822139ff/gettyimages-2151277359.jpg?auto=webp&fit=crop&height=675&width=1200",
                            "publishedAt" => "2024-06-11T21:28:00Z",
                            "content" => "Elon Musk's relationship with Apple and OpenAI seems to be deteriorating. On Monday, Musk took to X, the social media platform formerly known as Twitter, to air his grievances over Apple's recently a… [+2822 chars]"
                        ],
                        [
                            "source" => [
                                "id" => null,
                                "name" => "CNBC"
                            ],
                            "author" => "Diana Olick",
                            "title" => "Mortgage demand falls to lowest level in more than three months - CNBC",
                            "description" => "Mortgage demand fell again last week, as interest rates remained high.",
                            "url" => "https://www.cnbc.com/2024/06/11/mortgage-demand-falls-to-lowest-level-in-more-than-three-months.html",
                            "urlToImage" => "https://image.cnbcfm.com/api/v1/image/107273295-1694197028495-gettyimages-157362863-img_3619_1_705311.jpeg?v=1694197029&w=1920&h=1080",
                            "publishedAt" => "2024-06-11T21:17:00Z",
                            "content" => "After showing some signs of life in May, mortgage demand is now falling again, as interest rates remain high. \r\nTotal application volume fell 5% last week compared with the previous week, according t… [+1875 chars]"
                        ],
                        [
                            "source" => [
                                "id" => "bloomberg",
                                "name" => "Bloomberg"
                            ],
                            "author" => "Katrina Nicholas",
                            "title" => "Crypto Miners in Sweden Return to Low Margins After Energy Bill Surge - Bloomberg",
                            "description" => "Higher costs, increased regulation and volatile digital asset prices are making it harder for Sweden's crypto miners to operate profitably.",
                            "url" => "https://www.bloomberg.com/news/articles/2024-06-11/crypto-miners-in-sweden-return-to-low-margins-after-energy-bill-surge",
                            "urlToImage" => "https://assets.bwbx.io/images/users/iqjWHBFdfxIU/ihU1FWevHbdU/v1/1200x900.jpg",
                            "publishedAt" => "2024-06-11T21:00:00Z",
                            "content" => "For more than a decade, Sweden has been seen as a haven for cryptocurrency miners, thanks to its abundant supply of cheap renewable energy and stable regulatory environment.\r\nYet after the industry’s… [+3890 chars]"
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
                                "name" => "Digital Trends"
                            ],
                            "author" => "Giovanni Colantonio",
                            "title" => "Diablo 4's endgame grind is getting a big fix next month - Digital Trends",
                            "description" => "Blizzard has announced a massive patch coming to Diablo 4 next month that’ll address player feedback with some sweeping fixes.",
                            "url" => "https://www.digitaltrends.com/gaming/diablo-4-1-1-0-patch-announce/",
                            "urlToImage" => "https://www.digitaltrends.com/wp-content/uploads/2024/06/diablo-4-endgame-patch.jpg?resize=1200%2C630&p=1",
                            "publishedAt" => "2024-06-11T20:58:47Z",
                            "content" => "Diablo 4's endgame grind is getting a big fix next month\r\nBy\r\nGiovanni Colantonio\r\nJune 11, 2024\r\nBlizzard Entertainment announced that Diablo 4 will receive a major patch update on July 18. Version… [+2900 chars]"
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
