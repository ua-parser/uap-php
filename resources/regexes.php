<?php
return array (
  'user_agent_parsers' =>
  array (
    0 =>
    array (
      'regex' => '^(Luminary)[Stage]+/(\\d+) CFNetwork',
    ),
    1 =>
    array (
      'regex' => '(ESPN)[%20| ]+Radio/(\\d+)\\.(\\d+)\\.(\\d+) CFNetwork',
    ),
    2 =>
    array (
      'regex' => '(Antenna)/(\\d+) CFNetwork',
      'family_replacement' => 'AntennaPod',
    ),
    3 =>
    array (
      'regex' => '(TopPodcasts)Pro/(\\d+) CFNetwork',
    ),
    4 =>
    array (
      'regex' => '(MusicDownloader)Lite/(\\d+)\\.(\\d+)\\.(\\d+) CFNetwork',
    ),
    5 =>
    array (
      'regex' => '^(.*)-iPad\\/(\\d+)(?:\\.(\\d+)|)(?:\\.(\\d+)|)(?:\\.(\\d+)|) CFNetwork',
    ),
    6 =>
    array (
      'regex' => '^(.*)-iPhone/(\\d+)(?:\\.(\\d+)|)(?:\\.(\\d+)|)(?:\\.(\\d+)|) CFNetwork',
    ),
    7 =>
    array (
      'regex' => '^(.*)/(\\d+)(?:\\.(\\d+)|)(?:\\.(\\d+)|)(?:\\.(\\d+)|) CFNetwork',
    ),
    8 =>
    array (
      'regex' => '^(Luminary)/(\\d+)(?:\\.(\\d+)|)(?:\\.(\\d+)|)',
    ),
    9 =>
    array (
      'regex' => '(espn\\.go)',
      'family_replacement' => 'ESPN',
    ),
    10 =>
    array (
      'regex' => '(espnradio\\.com)',
      'family_replacement' => 'ESPN',
    ),
    11 =>
    array (
      'regex' => 'ESPN APP$',
      'family_replacement' => 'ESPN',
    ),
    12 =>
    array (
      'regex' => '(audioboom\\.com)',
      'family_replacement' => 'AudioBoom',
    ),
    13 =>
    array (
      'regex' => ' (Rivo) RHYTHM',
    ),
    14 =>
    array (
      'regex' => '(CFNetwork)(?:/(\\d+)\\.(\\d+)(?:\\.(\\d+)|)|)',
      'family_replacement' => 'CFNetwork',
    ),
    15 =>
    array (
      'regex' => '(Pingdom\\.com_bot_version_)(\\d+)\\.(\\d+)',
      'family_replacement' => 'PingdomBot',
    ),
    16 =>
    array (
      'regex' => '(PingdomTMS)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'PingdomBot',
    ),
    17 =>
    array (
      'regex' => ' (PTST)/(\\d+)(?:\\.(\\d+)|)$',
      'family_replacement' => 'WebPageTest.org bot',
    ),
    18 =>
    array (
      'regex' => 'X11; (Datanyze); Linux',
    ),
    19 =>
    array (
      'regex' => '(NewRelicPinger)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'NewRelicPingerBot',
    ),
    20 =>
    array (
      'regex' => '(Tableau)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Tableau',
    ),
    21 =>
    array (
      'regex' => 'AppleWebKit/\\d+\\.\\d+.* Safari.* (CreativeCloud)/(\\d+)\\.(\\d+).(\\d+)',
      'family_replacement' => 'Adobe CreativeCloud',
    ),
    22 =>
    array (
      'regex' => '(Salesforce)(?:.)\\/(\\d+)\\.(\\d?)',
    ),
    23 =>
    array (
      'regex' => '(\\(StatusCake\\))',
      'family_replacement' => 'StatusCakeBot',
    ),
    24 =>
    array (
      'regex' => '(facebookexternalhit)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'FacebookBot',
    ),
    25 =>
    array (
      'regex' => 'Google.*/\\+/web/snippet',
      'family_replacement' => 'GooglePlusBot',
    ),
    26 =>
    array (
      'regex' => 'via ggpht\\.com GoogleImageProxy',
      'family_replacement' => 'GmailImageProxy',
    ),
    27 =>
    array (
      'regex' => 'YahooMailProxy; https://help\\.yahoo\\.com/kb/yahoo-mail-proxy-SLN28749\\.html',
      'family_replacement' => 'YahooMailProxy',
    ),
    28 =>
    array (
      'regex' => '(Twitterbot)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Twitterbot',
    ),
    29 =>
    array (
      'regex' => '/((?:Ant-|)Nutch|[A-z]+[Bb]ot|[A-z]+[Ss]pider|Axtaris|fetchurl|Isara|ShopSalad|Tailsweep)[ \\-](\\d+)(?:\\.(\\d+)|)(?:\\.(\\d+)|)',
    ),
    30 =>
    array (
      'regex' => '\\b(008|Altresium|Argus|BaiduMobaider|BoardReader|DNSGroup|DataparkSearch|EDI|Goodzer|Grub|INGRID|Infohelfer|LinkedInBot|LOOQ|Nutch|OgScrper|PathDefender|Peew|PostPost|Steeler|Twitterbot|VSE|WebCrunch|WebZIP|Y!J-BR[A-Z]|YahooSeeker|envolk|sproose|wminer)/(\\d+)(?:\\.(\\d+)|)(?:\\.(\\d+)|)',
    ),
    31 =>
    array (
      'regex' => '(MSIE) (\\d+)\\.(\\d+)([a-z]\\d|[a-z]|);.* MSIECrawler',
      'family_replacement' => 'MSIECrawler',
    ),
    32 =>
    array (
      'regex' => '(DAVdroid)/(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
    ),
    33 =>
    array (
      'regex' => '(Google-HTTP-Java-Client|Apache-HttpClient|Go-http-client|scalaj-http|http%20client|Python-urllib|HttpMonitor|TLSProber|WinHTTP|JNLP|okhttp|aihttp|reqwest|axios|unirest-(?:java|python|ruby|nodejs|php|net))(?:[ /](\\d+)(?:\\.(\\d+)|)(?:\\.(\\d+)|)|)',
    ),
    34 =>
    array (
      'regex' => '(Pinterest(?:bot|))/(\\d+)(?:\\.(\\d+)|)(?:\\.(\\d+)|)[;\\s(]+\\+https://www.pinterest.com/bot.html',
      'family_replacement' => 'Pinterestbot',
    ),
    35 =>
    array (
      'regex' => '(CSimpleSpider|Cityreview Robot|CrawlDaddy|CrawlFire|Finderbots|Index crawler|Job Roboter|KiwiStatus Spider|Lijit Crawler|QuerySeekerSpider|ScollSpider|Trends Crawler|USyd-NLP-Spider|SiteCat Webbot|BotName\\/\\$BotVersion|123metaspider-Bot|1470\\.net crawler|50\\.nu|8bo Crawler Bot|Aboundex|Accoona-[A-z]{1,30}-Agent|AdsBot-Google(?:-[a-z]{1,30}|)|altavista|AppEngine-Google|archive.{0,30}\\.org_bot|archiver|Ask Jeeves|[Bb]ai[Dd]u[Ss]pider(?:-[A-Za-z]{1,30})(?:-[A-Za-z]{1,30}|)|bingbot|BingPreview|blitzbot|BlogBridge|Bloglovin|BoardReader Blog Indexer|BoardReader Favicon Fetcher|boitho.com-dc|BotSeer|BUbiNG|\\b\\w{0,30}favicon\\w{0,30}\\b|\\bYeti(?:-[a-z]{1,30}|)|Catchpoint(?: bot|)|[Cc]harlotte|Checklinks|clumboot|Comodo HTTP\\(S\\) Crawler|Comodo-Webinspector-Crawler|ConveraCrawler|CRAWL-E|CrawlConvera|Daumoa(?:-feedfetcher|)|Feed Seeker Bot|Feedbin|findlinks|Flamingo_SearchEngine|FollowSite Bot|furlbot|Genieo|gigabot|GomezAgent|gonzo1|(?:[a-zA-Z]{1,30}-|)Googlebot(?:-[a-zA-Z]{1,30}|)|Google SketchUp|grub-client|gsa-crawler|heritrix|HiddenMarket|holmes|HooWWWer|htdig|ia_archiver|ICC-Crawler|Icarus6j|ichiro(?:/mobile|)|IconSurf|IlTrovatore(?:-Setaccio|)|InfuzApp|Innovazion Crawler|InternetArchive|IP2[a-z]{1,30}Bot|jbot\\b|KaloogaBot|Kraken|Kurzor|larbin|LEIA|LesnikBot|Linguee Bot|LinkAider|LinkedInBot|Lite Bot|Llaut|lycos|Mail\\.RU_Bot|masscan|masidani_bot|Mediapartners-Google|Microsoft .{0,30} Bot|mogimogi|mozDex|MJ12bot|msnbot(?:-media {0,2}|)|msrbot|Mtps Feed Aggregation System|netresearch|Netvibes|NewsGator[^/]{0,30}|^NING|Nutch[^/]{0,30}|Nymesis|ObjectsSearch|OgScrper|Orbiter|OOZBOT|PagePeeker|PagesInventory|PaxleFramework|Peeplo Screenshot Bot|PlantyNet_WebRobot|Pompos|Qwantify|Read%20Later|Reaper|RedCarpet|Retreiver|Riddler|Rival IQ|scooter|Scrapy|Scrubby|searchsight|seekbot|semanticdiscovery|SemrushBot|Simpy|SimplePie|SEOstats|SimpleRSS|SiteCon|Slackbot-LinkExpanding|Slack-ImgProxy|Slurp|snappy|Speedy Spider|Squrl Java|Stringer|TheUsefulbot|ThumbShotsBot|Thumbshots\\.ru|Tiny Tiny RSS|Twitterbot|WhatsApp|URL2PNG|Vagabondo|VoilaBot|^vortex|Votay bot|^voyager|WASALive.Bot|Web-sniffer|WebThumb|WeSEE:[A-z]{1,30}|WhatWeb|WIRE|WordPress|Wotbox|www\\.almaden\\.ibm\\.com|Xenu(?:.s|) Link Sleuth|Xerka [A-z]{1,30}Bot|yacy(?:bot|)|YahooSeeker|Yahoo! Slurp|Yandex\\w{1,30}|YodaoBot(?:-[A-z]{1,30}|)|YottaaMonitor|Yowedo|^Zao|^Zao-Crawler|ZeBot_www\\.ze\\.bz|ZooShot|ZyBorg)(?:[ /]v?(\\d+)(?:\\.(\\d+)(?:\\.(\\d+)|)|)|)',
    ),
    36 =>
    array (
      'regex' => '\\b(Boto3?|JetS3t|aws-(?:cli|sdk-(?:cpp|go|java|nodejs|ruby2?|dotnet-(?:\\d{1,2}|core)))|s3fs)/(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
    ),
    37 =>
    array (
      'regex' => '\\[(FBAN/MessengerForiOS|FB_IAB/MESSENGER);FBAV/(\\d+)(?:\\.(\\d+)(?:\\.(\\d+)|)|)',
      'family_replacement' => 'Facebook Messenger',
    ),
    38 =>
    array (
      'regex' => '\\[FB.*;(FBAV)/(\\d+)(?:\\.(\\d+)|)(?:\\.(\\d+)|)',
      'family_replacement' => 'Facebook',
    ),
    39 =>
    array (
      'regex' => '\\[FB.*;',
      'family_replacement' => 'Facebook',
    ),
    40 =>
    array (
      'regex' => '(?:\\/[A-Za-z0-9\\.]+|) {0,5}([A-Za-z0-9 \\-_\\!\\[\\]:]{0,50}(?:[Aa]rchiver|[Ii]ndexer|[Ss]craper|[Bb]ot|[Ss]pider|[Cc]rawl[a-z]{0,50}))[/ ](\\d+)(?:\\.(\\d+)(?:\\.(\\d+)|)|)',
    ),
    41 =>
    array (
      'regex' => '((?:[A-Za-z][A-Za-z0-9 -]{0,50}|)[^C][^Uu][Bb]ot)\\b(?:(?:[ /]| v)(\\d+)(?:\\.(\\d+)|)(?:\\.(\\d+)|)|)',
    ),
    42 =>
    array (
      'regex' => '((?:[A-z0-9]{1,50}|[A-z\\-]{1,50} ?|)(?: the |)(?:[Ss][Pp][Ii][Dd][Ee][Rr]|[Ss]crape|[Cc][Rr][Aa][Ww][Ll])[A-z0-9]{0,50})(?:(?:[ /]| v)(\\d+)(?:\\.(\\d+)|)(?:\\.(\\d+)|)|)',
    ),
    43 =>
    array (
      'regex' => '(HbbTV)/(\\d+)\\.(\\d+)\\.(\\d+) \\(',
    ),
    44 =>
    array (
      'regex' => '(Chimera|SeaMonkey|Camino|Waterfox)/(\\d+)\\.(\\d+)\\.?([ab]?\\d+[a-z]*|)',
    ),
    45 =>
    array (
      'regex' => '(SailfishBrowser)/(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
      'family_replacement' => 'Sailfish Browser',
    ),
    46 =>
    array (
      'regex' => '\\[(Pinterest)/[^\\]]+\\]',
    ),
    47 =>
    array (
      'regex' => '(Pinterest)(?: for Android(?: Tablet|)|)/(\\d+)(?:\\.(\\d+)|)(?:\\.(\\d+)|)',
    ),
    48 =>
    array (
      'regex' => 'Mozilla.*Mobile.*(Instagram).(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    49 =>
    array (
      'regex' => 'Mozilla.*Mobile.*(Flipboard).(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    50 =>
    array (
      'regex' => 'Mozilla.*Mobile.*(Flipboard-Briefing).(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    51 =>
    array (
      'regex' => 'Mozilla.*Mobile.*(Onefootball)\\/Android.(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    52 =>
    array (
      'regex' => '(Snapchat)\\/(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    53 =>
    array (
      'regex' => '(Twitter for (?:iPhone|iPad)|TwitterAndroid)(?:\\/(\\d+)\\.(\\d+)|)',
      'family_replacement' => 'Twitter',
    ),
    54 =>
    array (
      'regex' => '(Firefox)/(\\d+)\\.(\\d+) Basilisk/(\\d+)',
      'family_replacement' => 'Basilisk',
    ),
    55 =>
    array (
      'regex' => '(PaleMoon)/(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
      'family_replacement' => 'Pale Moon',
    ),
    56 =>
    array (
      'regex' => '(Fennec)/(\\d+)\\.(\\d+)\\.?([ab]?\\d+[a-z]*)',
      'family_replacement' => 'Firefox Mobile',
    ),
    57 =>
    array (
      'regex' => '(Fennec)/(\\d+)\\.(\\d+)(pre)',
      'family_replacement' => 'Firefox Mobile',
    ),
    58 =>
    array (
      'regex' => '(Fennec)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Firefox Mobile',
    ),
    59 =>
    array (
      'regex' => '(?:Mobile|Tablet);.*(Firefox)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Firefox Mobile',
    ),
    60 =>
    array (
      'regex' => '(Namoroka|Shiretoko|Minefield)/(\\d+)\\.(\\d+)\\.(\\d+(?:pre|))',
      'family_replacement' => 'Firefox ($1)',
    ),
    61 =>
    array (
      'regex' => '(Firefox)/(\\d+)\\.(\\d+)(a\\d+[a-z]*)',
      'family_replacement' => 'Firefox Alpha',
    ),
    62 =>
    array (
      'regex' => '(Firefox)/(\\d+)\\.(\\d+)(b\\d+[a-z]*)',
      'family_replacement' => 'Firefox Beta',
    ),
    63 =>
    array (
      'regex' => '(Firefox)-(?:\\d+\\.\\d+|)/(\\d+)\\.(\\d+)(a\\d+[a-z]*)',
      'family_replacement' => 'Firefox Alpha',
    ),
    64 =>
    array (
      'regex' => '(Firefox)-(?:\\d+\\.\\d+|)/(\\d+)\\.(\\d+)(b\\d+[a-z]*)',
      'family_replacement' => 'Firefox Beta',
    ),
    65 =>
    array (
      'regex' => '(Namoroka|Shiretoko|Minefield)/(\\d+)\\.(\\d+)([ab]\\d+[a-z]*|)',
      'family_replacement' => 'Firefox ($1)',
    ),
    66 =>
    array (
      'regex' => '(Firefox).*Tablet browser (\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'MicroB',
    ),
    67 =>
    array (
      'regex' => '(MozillaDeveloperPreview)/(\\d+)\\.(\\d+)([ab]\\d+[a-z]*|)',
    ),
    68 =>
    array (
      'regex' => '(FxiOS)/(\\d+)\\.(\\d+)(\\.(\\d+)|)(\\.(\\d+)|)',
      'family_replacement' => 'Firefox iOS',
    ),
    69 =>
    array (
      'regex' => '(Flock)/(\\d+)\\.(\\d+)(b\\d+?)',
    ),
    70 =>
    array (
      'regex' => '(RockMelt)/(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    71 =>
    array (
      'regex' => '(Navigator)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Netscape',
    ),
    72 =>
    array (
      'regex' => '(Navigator)/(\\d+)\\.(\\d+)([ab]\\d+)',
      'family_replacement' => 'Netscape',
    ),
    73 =>
    array (
      'regex' => '(Netscape6)/(\\d+)\\.(\\d+)\\.?([ab]?\\d+|)',
      'family_replacement' => 'Netscape',
    ),
    74 =>
    array (
      'regex' => '(MyIBrow)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'My Internet Browser',
    ),
    75 =>
    array (
      'regex' => '(UC? ?Browser|UCWEB|U3)[ /]?(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'UC Browser',
    ),
    76 =>
    array (
      'regex' => '(Opera Tablet).*Version/(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
    ),
    77 =>
    array (
      'regex' => '(Opera Mini)(?:/att|)/?(\\d+|)(?:\\.(\\d+)|)(?:\\.(\\d+)|)',
    ),
    78 =>
    array (
      'regex' => '(Opera)/.+Opera Mobi.+Version/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Opera Mobile',
    ),
    79 =>
    array (
      'regex' => '(Opera)/(\\d+)\\.(\\d+).+Opera Mobi',
      'family_replacement' => 'Opera Mobile',
    ),
    80 =>
    array (
      'regex' => 'Opera Mobi.+(Opera)(?:/|\\s+)(\\d+)\\.(\\d+)',
      'family_replacement' => 'Opera Mobile',
    ),
    81 =>
    array (
      'regex' => 'Opera Mobi',
      'family_replacement' => 'Opera Mobile',
    ),
    82 =>
    array (
      'regex' => '(Opera)/9.80.*Version/(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
    ),
    83 =>
    array (
      'regex' => '(?:Mobile Safari).*(OPR)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Opera Mobile',
    ),
    84 =>
    array (
      'regex' => '(?:Chrome).*(OPR)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Opera',
    ),
    85 =>
    array (
      'regex' => '(Coast)/(\\d+).(\\d+).(\\d+)',
      'family_replacement' => 'Opera Coast',
    ),
    86 =>
    array (
      'regex' => '(OPiOS)/(\\d+).(\\d+).(\\d+)',
      'family_replacement' => 'Opera Mini',
    ),
    87 =>
    array (
      'regex' => 'Chrome/.+( MMS)/(\\d+).(\\d+).(\\d+)',
      'family_replacement' => 'Opera Neon',
    ),
    88 =>
    array (
      'regex' => '(hpw|web)OS/(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
      'family_replacement' => 'webOS Browser',
    ),
    89 =>
    array (
      'regex' => '(luakit)',
      'family_replacement' => 'LuaKit',
    ),
    90 =>
    array (
      'regex' => '(Snowshoe)/(\\d+)\\.(\\d+).(\\d+)',
    ),
    91 =>
    array (
      'regex' => 'Gecko/\\d+ (Lightning)/(\\d+)\\.(\\d+)\\.?((?:[ab]?\\d+[a-z]*)|(?:\\d*))',
    ),
    92 =>
    array (
      'regex' => '(Firefox)/(\\d+)\\.(\\d+)\\.(\\d+(?:pre|)) \\(Swiftfox\\)',
      'family_replacement' => 'Swiftfox',
    ),
    93 =>
    array (
      'regex' => '(Firefox)/(\\d+)\\.(\\d+)([ab]\\d+[a-z]*|) \\(Swiftfox\\)',
      'family_replacement' => 'Swiftfox',
    ),
    94 =>
    array (
      'regex' => '(rekonq)/(\\d+)\\.(\\d+)(?:\\.(\\d+)|) Safari',
      'family_replacement' => 'Rekonq',
    ),
    95 =>
    array (
      'regex' => 'rekonq',
      'family_replacement' => 'Rekonq',
    ),
    96 =>
    array (
      'regex' => '(conkeror|Conkeror)/(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
      'family_replacement' => 'Conkeror',
    ),
    97 =>
    array (
      'regex' => '(konqueror)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Konqueror',
    ),
    98 =>
    array (
      'regex' => '(WeTab)-Browser',
    ),
    99 =>
    array (
      'regex' => '(Comodo_Dragon)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Comodo Dragon',
    ),
    100 =>
    array (
      'regex' => '(Symphony) (\\d+).(\\d+)',
    ),
    101 =>
    array (
      'regex' => 'PLAYSTATION 3.+WebKit',
      'family_replacement' => 'NetFront NX',
    ),
    102 =>
    array (
      'regex' => 'PLAYSTATION 3',
      'family_replacement' => 'NetFront',
    ),
    103 =>
    array (
      'regex' => '(PlayStation Portable)',
      'family_replacement' => 'NetFront',
    ),
    104 =>
    array (
      'regex' => '(PlayStation Vita)',
      'family_replacement' => 'NetFront NX',
    ),
    105 =>
    array (
      'regex' => 'AppleWebKit.+ (NX)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'NetFront NX',
    ),
    106 =>
    array (
      'regex' => '(Nintendo 3DS)',
      'family_replacement' => 'NetFront NX',
    ),
    107 =>
    array (
      'regex' => '(Silk)/(\\d+)\\.(\\d+)(?:\\.([0-9\\-]+)|)',
      'family_replacement' => 'Amazon Silk',
    ),
    108 =>
    array (
      'regex' => '(Puffin)/(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
    ),
    109 =>
    array (
      'regex' => 'Windows Phone .*(Edge)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Edge Mobile',
    ),
    110 =>
    array (
      'regex' => '(EdgA)/(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Edge Mobile',
    ),
    111 =>
    array (
      'regex' => '(EdgiOS)/(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Edge Mobile',
    ),
    112 =>
    array (
      'regex' => '(SamsungBrowser)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Samsung Internet',
    ),
    113 =>
    array (
      'regex' => '(SznProhlizec)/(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
      'family_replacement' => 'Seznam prohlížeč',
    ),
    114 =>
    array (
      'regex' => '(coc_coc_browser)/(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
      'family_replacement' => 'Coc Coc',
    ),
    115 =>
    array (
      'regex' => '(baidubrowser)[/\\s](\\d+)(?:\\.(\\d+)|)(?:\\.(\\d+)|)',
      'family_replacement' => 'Baidu Browser',
    ),
    116 =>
    array (
      'regex' => '(FlyFlow)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Baidu Explorer',
    ),
    117 =>
    array (
      'regex' => '(MxBrowser)/(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
      'family_replacement' => 'Maxthon',
    ),
    118 =>
    array (
      'regex' => '(Crosswalk)/(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    119 =>
    array (
      'regex' => '(Line)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'LINE',
    ),
    120 =>
    array (
      'regex' => '(MiuiBrowser)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'MiuiBrowser',
    ),
    121 =>
    array (
      'regex' => '(Mint Browser)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Mint Browser',
    ),
    122 =>
    array (
      'regex' => '(TopBuzz)/(\\d+).(\\d+).(\\d+)',
      'family_replacement' => 'TopBuzz',
    ),
    123 =>
    array (
      'regex' => 'Mozilla.+Android.+(GSA)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Google',
    ),
    124 =>
    array (
      'regex' => '(MQQBrowser/Mini)(?:(\\d+)(?:\\.(\\d+)|)(?:\\.(\\d+)|)|)',
      'family_replacement' => 'QQ Browser Mini',
    ),
    125 =>
    array (
      'regex' => '(MQQBrowser)(?:/(\\d+)(?:\\.(\\d+)|)(?:\\.(\\d+)|)|)',
      'family_replacement' => 'QQ Browser Mobile',
    ),
    126 =>
    array (
      'regex' => '(QQBrowser)(?:/(\\d+)(?:\\.(\\d+)\\.(\\d+)(?:\\.(\\d+)|)|)|)',
      'family_replacement' => 'QQ Browser',
    ),
    127 =>
    array (
      'regex' => 'Version/.+(Chrome)/(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Chrome Mobile WebView',
    ),
    128 =>
    array (
      'regex' => '; wv\\).+(Chrome)/(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Chrome Mobile WebView',
    ),
    129 =>
    array (
      'regex' => '(CrMo)/(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Chrome Mobile',
    ),
    130 =>
    array (
      'regex' => '(CriOS)/(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Chrome Mobile iOS',
    ),
    131 =>
    array (
      'regex' => '(Chrome)/(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+) Mobile(?:[ /]|$)',
      'family_replacement' => 'Chrome Mobile',
    ),
    132 =>
    array (
      'regex' => ' Mobile .*(Chrome)/(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Chrome Mobile',
    ),
    133 =>
    array (
      'regex' => '(chromeframe)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Chrome Frame',
    ),
    134 =>
    array (
      'regex' => '(SLP Browser)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Tizen Browser',
    ),
    135 =>
    array (
      'regex' => '(SE 2\\.X) MetaSr (\\d+)\\.(\\d+)',
      'family_replacement' => 'Sogou Explorer',
    ),
    136 =>
    array (
      'regex' => '(Rackspace Monitoring)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'RackspaceBot',
    ),
    137 =>
    array (
      'regex' => '(PyAMF)/(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    138 =>
    array (
      'regex' => '(YaBrowser)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Yandex Browser',
    ),
    139 =>
    array (
      'regex' => '(Chrome)/(\\d+)\\.(\\d+)\\.(\\d+).* MRCHROME',
      'family_replacement' => 'Mail.ru Chromium Browser',
    ),
    140 =>
    array (
      'regex' => '(AOL) (\\d+)\\.(\\d+); AOLBuild (\\d+)',
    ),
    141 =>
    array (
      'regex' => '(PodCruncher|Downcast)[ /]?(\\d+)(?:\\.(\\d+)|)(?:\\.(\\d+)|)(?:\\.(\\d+)|)',
    ),
    142 =>
    array (
      'regex' => ' (BoxNotes)/(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    143 =>
    array (
      'regex' => '(Whale)/(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+) Mobile(?:[ /]|$)',
      'family_replacement' => 'Whale',
    ),
    144 =>
    array (
      'regex' => '(Whale)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Whale',
    ),
    145 =>
    array (
      'regex' => '(1Password)/(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    146 =>
    array (
      'regex' => '(Ghost)/(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    147 =>
    array (
      'regex' => '(Slack_SSB)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Slack Desktop Client',
    ),
    148 =>
    array (
      'regex' => '(HipChat)/?(\\d+|)',
      'family_replacement' => 'HipChat Desktop Client',
    ),
    149 =>
    array (
      'regex' => '\\b(MobileIron|FireWeb|Jasmine|ANTGalio|Midori|Fresco|Lobo|PaleMoon|Maxthon|Lynx|OmniWeb|Dillo|Camino|Demeter|Fluid|Fennec|Epiphany|Shiira|Sunrise|Spotify|Flock|Netscape|Lunascape|WebPilot|NetFront|Netfront|Konqueror|SeaMonkey|Kazehakase|Vienna|Iceape|Iceweasel|IceWeasel|Iron|K-Meleon|Sleipnir|Galeon|GranParadiso|Opera Mini|iCab|NetNewsWire|ThunderBrowse|Iris|UP\\.Browser|Bunjalloo|Google Earth|Raven for Mac|Openwave|MacOutlook|Electron|OktaMobile)/(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    150 =>
    array (
      'regex' => 'Microsoft Office Outlook 12\\.\\d+\\.\\d+|MSOffice 12',
      'family_replacement' => 'Outlook',
      'v1_replacement' => '2007',
    ),
    151 =>
    array (
      'regex' => 'Microsoft Outlook 14\\.\\d+\\.\\d+|MSOffice 14',
      'family_replacement' => 'Outlook',
      'v1_replacement' => '2010',
    ),
    152 =>
    array (
      'regex' => 'Microsoft Outlook 15\\.\\d+\\.\\d+',
      'family_replacement' => 'Outlook',
      'v1_replacement' => '2013',
    ),
    153 =>
    array (
      'regex' => 'Microsoft Outlook (?:Mail )?16\\.\\d+\\.\\d+|MSOffice 16',
      'family_replacement' => 'Outlook',
      'v1_replacement' => '2016',
    ),
    154 =>
    array (
      'regex' => 'Microsoft Office (Word) 2014',
    ),
    155 =>
    array (
      'regex' => 'Outlook-Express\\/7\\.0.*',
      'family_replacement' => 'Windows Live Mail',
    ),
    156 =>
    array (
      'regex' => '(Airmail) (\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
    ),
    157 =>
    array (
      'regex' => '(Thunderbird)/(\\d+)\\.(\\d+)(?:\\.(\\d+(?:pre|))|)',
      'family_replacement' => 'Thunderbird',
    ),
    158 =>
    array (
      'regex' => '(Postbox)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Postbox',
    ),
    159 =>
    array (
      'regex' => '(Barca(?:Pro)?)/(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
      'family_replacement' => 'Barca',
    ),
    160 =>
    array (
      'regex' => '(Lotus-Notes)/(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
      'family_replacement' => 'Lotus Notes',
    ),
    161 =>
    array (
      'regex' => 'Superhuman',
      'family_replacement' => 'Superhuman',
    ),
    162 =>
    array (
      'regex' => '(Vivaldi)/(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    163 =>
    array (
      'regex' => '(Edge?)/(\\d+)(?:\\.(\\d+)|)(?:\\.(\\d+)|)(?:\\.(\\d+)|)',
      'family_replacement' => 'Edge',
    ),
    164 =>
    array (
      'regex' => '(brave)/(\\d+)\\.(\\d+)\\.(\\d+) Chrome',
      'family_replacement' => 'Brave',
    ),
    165 =>
    array (
      'regex' => '(Chrome)/(\\d+)\\.(\\d+)\\.(\\d+)[\\d.]* Iron[^/]',
      'family_replacement' => 'Iron',
    ),
    166 =>
    array (
      'regex' => '\\b(Dolphin)(?: |HDCN/|/INT\\-)(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
    ),
    167 =>
    array (
      'regex' => '(HeadlessChrome)(?:/(\\d+)\\.(\\d+)\\.(\\d+)|)',
    ),
    168 =>
    array (
      'regex' => '(Evolution)/(\\d+)\\.(\\d+)\\.(\\d+\\.\\d+)',
    ),
    169 =>
    array (
      'regex' => '(RCM CardDAV plugin)/(\\d+)\\.(\\d+)\\.(\\d+(?:-dev|))',
    ),
    170 =>
    array (
      'regex' => '(bingbot|Bolt|AdobeAIR|Jasmine|IceCat|Skyfire|Midori|Maxthon|Lynx|Arora|IBrowse|Dillo|Camino|Shiira|Fennec|Phoenix|Flock|Netscape|Lunascape|Epiphany|WebPilot|Opera Mini|Opera|NetFront|Netfront|Konqueror|Googlebot|SeaMonkey|Kazehakase|Vienna|Iceape|Iceweasel|IceWeasel|Iron|K-Meleon|Sleipnir|Galeon|GranParadiso|iCab|iTunes|MacAppStore|NetNewsWire|Space Bison|Stainless|Orca|Dolfin|BOLT|Minimo|Tizen Browser|Polaris|Abrowser|Planetweb|ICE Browser|mDolphin|qutebrowser|Otter|QupZilla|MailBar|kmail2|YahooMobileMail|ExchangeWebServices|ExchangeServicesClient|Dragon|Outlook-iOS-Android)/(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
    ),
    171 =>
    array (
      'regex' => '(Chromium|Chrome)/(\\d+)\\.(\\d+)(?:\\.(\\d+)|)(?:\\.(\\d+)|)',
    ),
    172 =>
    array (
      'regex' => '(IEMobile)[ /](\\d+)\\.(\\d+)',
      'family_replacement' => 'IE Mobile',
    ),
    173 =>
    array (
      'regex' => '(BacaBerita App)\\/(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    174 =>
    array (
      'regex' => '^(bPod|Pocket Casts|Player FM)$',
    ),
    175 =>
    array (
      'regex' => '^(AlexaMediaPlayer|VLC)/(\\d+)\\.(\\d+)\\.([^.\\s]+)',
    ),
    176 =>
    array (
      'regex' => '^(AntennaPod|WMPlayer|Zune|Podkicker|Radio|ExoPlayerDemo|Overcast|PocketTunes|NSPlayer|okhttp|DoggCatcher|QuickNews|QuickTime|Peapod|Podcasts|GoldenPod|VLC|Spotify|Miro|MediaGo|Juice|iPodder|gPodder|Banshee)/(\\d+)\\.(\\d+)(?:\\.(\\d+)|)(?:\\.(\\d+)|)',
    ),
    177 =>
    array (
      'regex' => '^(Peapod|Liferea)/([^.\\s]+)\\.([^.\\s]+|)\\.?([^.\\s]+|)',
    ),
    178 =>
    array (
      'regex' => '^(bPod|Player FM) BMID/(\\S+)',
    ),
    179 =>
    array (
      'regex' => '^(Podcast ?Addict)/v(\\d+) ',
    ),
    180 =>
    array (
      'regex' => '^(Podcast ?Addict) ',
      'family_replacement' => 'PodcastAddict',
    ),
    181 =>
    array (
      'regex' => '(Replay) AV',
    ),
    182 =>
    array (
      'regex' => '(VOX) Music Player',
    ),
    183 =>
    array (
      'regex' => '(CITA) RSS Aggregator/(\\d+)\\.(\\d+)',
    ),
    184 =>
    array (
      'regex' => '(Pocket Casts)$',
    ),
    185 =>
    array (
      'regex' => '(Player FM)$',
    ),
    186 =>
    array (
      'regex' => '(LG Player|Doppler|FancyMusic|MediaMonkey|Clementine) (\\d+)\\.(\\d+)\\.?([^.\\s]+|)\\.?([^.\\s]+|)',
    ),
    187 =>
    array (
      'regex' => '(philpodder)/(\\d+)\\.(\\d+)\\.?([^.\\s]+|)\\.?([^.\\s]+|)',
    ),
    188 =>
    array (
      'regex' => '(Player FM|Pocket Casts|DoggCatcher|Spotify|MediaMonkey|MediaGo|BashPodder)',
    ),
    189 =>
    array (
      'regex' => '(QuickTime)\\.(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    190 =>
    array (
      'regex' => '(Kinoma)(\\d+)',
    ),
    191 =>
    array (
      'regex' => '(Fancy) Cloud Music (\\d+)\\.(\\d+)',
      'family_replacement' => 'FancyMusic',
    ),
    192 =>
    array (
      'regex' => 'EspnDownloadManager',
      'family_replacement' => 'ESPN',
    ),
    193 =>
    array (
      'regex' => '(ESPN) Radio (\\d+)\\.(\\d+)(?:\\.(\\d+)|) ?(?:rv:(\\d+)|) ',
    ),
    194 =>
    array (
      'regex' => '(podracer|jPodder) v ?(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
    ),
    195 =>
    array (
      'regex' => '(ZDM)/(\\d+)\\.(\\d+)[; ]?',
    ),
    196 =>
    array (
      'regex' => '(Zune|BeyondPod) (\\d+)(?:\\.(\\d+)|)[\\);]',
    ),
    197 =>
    array (
      'regex' => '(WMPlayer)/(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    198 =>
    array (
      'regex' => '^(Lavf)',
      'family_replacement' => 'WMPlayer',
    ),
    199 =>
    array (
      'regex' => '^(RSSRadio)[ /]?(\\d+|)',
    ),
    200 =>
    array (
      'regex' => '(RSS_Radio) (\\d+)\\.(\\d+)',
      'family_replacement' => 'RSSRadio',
    ),
    201 =>
    array (
      'regex' => '(Podkicker) \\S+/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Podkicker',
    ),
    202 =>
    array (
      'regex' => '^(HTC) Streaming Player \\S+ / \\S+ / \\S+ / (\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
    ),
    203 =>
    array (
      'regex' => '^(Stitcher)/iOS',
    ),
    204 =>
    array (
      'regex' => '^(Stitcher)/Android',
    ),
    205 =>
    array (
      'regex' => '^(VLC) .*version (\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    206 =>
    array (
      'regex' => ' (VLC) for',
    ),
    207 =>
    array (
      'regex' => '(vlc)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'VLC',
    ),
    208 =>
    array (
      'regex' => '^(foobar)\\S+/([^.\\s]+)\\.([^.\\s]+|)\\.?([^.\\s]+|)',
    ),
    209 =>
    array (
      'regex' => '^(Clementine)\\S+ ([^.\\s]+)\\.([^.\\s]+|)\\.?([^.\\s]+|)',
    ),
    210 =>
    array (
      'regex' => '(amarok)/([^.\\s]+)\\.([^.\\s]+|)\\.?([^.\\s]+|)',
      'family_replacement' => 'Amarok',
    ),
    211 =>
    array (
      'regex' => '(Custom)-Feed Reader',
    ),
    212 =>
    array (
      'regex' => '(iRider|Crazy Browser|SkipStone|iCab|Lunascape|Sleipnir|Maemo Browser) (\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    213 =>
    array (
      'regex' => '(iCab|Lunascape|Opera|Android|Jasmine|Polaris|Microsoft SkyDriveSync|The Bat!) (\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
    ),
    214 =>
    array (
      'regex' => '(Kindle)/(\\d+)\\.(\\d+)',
    ),
    215 =>
    array (
      'regex' => '(Android) Donut',
      'v1_replacement' => '1',
      'v2_replacement' => '2',
    ),
    216 =>
    array (
      'regex' => '(Android) Eclair',
      'v1_replacement' => '2',
      'v2_replacement' => '1',
    ),
    217 =>
    array (
      'regex' => '(Android) Froyo',
      'v1_replacement' => '2',
      'v2_replacement' => '2',
    ),
    218 =>
    array (
      'regex' => '(Android) Gingerbread',
      'v1_replacement' => '2',
      'v2_replacement' => '3',
    ),
    219 =>
    array (
      'regex' => '(Android) Honeycomb',
      'v1_replacement' => '3',
    ),
    220 =>
    array (
      'regex' => '(MSIE) (\\d+)\\.(\\d+).*XBLWP7',
      'family_replacement' => 'IE Large Screen',
    ),
    221 =>
    array (
      'regex' => '(Nextcloud)',
    ),
    222 =>
    array (
      'regex' => '(mirall)/(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    223 =>
    array (
      'regex' => '(ownCloud-android)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Owncloud',
    ),
    224 =>
    array (
      'regex' => '(OC)/(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+) \\(Skype for Business\\)',
      'family_replacement' => 'Skype',
    ),
    225 =>
    array (
      'regex' => '(Obigo)InternetBrowser',
    ),
    226 =>
    array (
      'regex' => '(Obigo)\\-Browser',
    ),
    227 =>
    array (
      'regex' => '(Obigo|OBIGO)[^\\d]*(\\d+)(?:.(\\d+)|)',
      'family_replacement' => 'Obigo',
    ),
    228 =>
    array (
      'regex' => '(MAXTHON|Maxthon) (\\d+)\\.(\\d+)',
      'family_replacement' => 'Maxthon',
    ),
    229 =>
    array (
      'regex' => '(Maxthon|MyIE2|Uzbl|Shiira)',
      'v1_replacement' => '0',
    ),
    230 =>
    array (
      'regex' => '(BrowseX) \\((\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    231 =>
    array (
      'regex' => '(NCSA_Mosaic)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'NCSA Mosaic',
    ),
    232 =>
    array (
      'regex' => '(POLARIS)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Polaris',
    ),
    233 =>
    array (
      'regex' => '(Embider)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Polaris',
    ),
    234 =>
    array (
      'regex' => '(BonEcho)/(\\d+)\\.(\\d+)\\.?([ab]?\\d+|)',
      'family_replacement' => 'Bon Echo',
    ),
    235 =>
    array (
      'regex' => '(TopBuzz) com.alex.NewsMaster/(\\d+).(\\d+).(\\d+)',
      'family_replacement' => 'TopBuzz',
    ),
    236 =>
    array (
      'regex' => '(TopBuzz) com.mobilesrepublic.newsrepublic/(\\d+).(\\d+).(\\d+)',
      'family_replacement' => 'TopBuzz',
    ),
    237 =>
    array (
      'regex' => '(TopBuzz) com.topbuzz.videoen/(\\d+).(\\d+).(\\d+)',
      'family_replacement' => 'TopBuzz',
    ),
    238 =>
    array (
      'regex' => '(iPod|iPhone|iPad).+GSA/(\\d+)\\.(\\d+)\\.(\\d+) Mobile',
      'family_replacement' => 'Google',
    ),
    239 =>
    array (
      'regex' => '(iPod|iPhone|iPad).+Version/(\\d+)\\.(\\d+)(?:\\.(\\d+)|).*[ +]Safari',
      'family_replacement' => 'Mobile Safari',
    ),
    240 =>
    array (
      'regex' => '(iPod|iPod touch|iPhone|iPad);.*CPU.*OS[ +](\\d+)_(\\d+)(?:_(\\d+)|).* AppleNews\\/\\d+\\.\\d+\\.\\d+?',
      'family_replacement' => 'Mobile Safari UI/WKWebView',
    ),
    241 =>
    array (
      'regex' => '(iPod|iPhone|iPad).+Version/(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
      'family_replacement' => 'Mobile Safari UI/WKWebView',
    ),
    242 =>
    array (
      'regex' => '(iPod|iPod touch|iPhone|iPad).* Safari',
      'family_replacement' => 'Mobile Safari',
    ),
    243 =>
    array (
      'regex' => '(iPod|iPod touch|iPhone|iPad)',
      'family_replacement' => 'Mobile Safari UI/WKWebView',
    ),
    244 =>
    array (
      'regex' => '(Watch)(\\d+),(\\d+)',
      'family_replacement' => 'Apple $1 App',
    ),
    245 =>
    array (
      'regex' => '(Outlook-iOS)/\\d+\\.\\d+\\.prod\\.iphone \\((\\d+)\\.(\\d+)\\.(\\d+)\\)',
    ),
    246 =>
    array (
      'regex' => '(AvantGo) (\\d+).(\\d+)',
    ),
    247 =>
    array (
      'regex' => '(OneBrowser)/(\\d+).(\\d+)',
      'family_replacement' => 'ONE Browser',
    ),
    248 =>
    array (
      'regex' => '(Avant)',
      'v1_replacement' => '1',
    ),
    249 =>
    array (
      'regex' => '(QtCarBrowser)',
      'v1_replacement' => '1',
    ),
    250 =>
    array (
      'regex' => '^(iBrowser/Mini)(\\d+).(\\d+)',
      'family_replacement' => 'iBrowser Mini',
    ),
    251 =>
    array (
      'regex' => '^(iBrowser|iRAPP)/(\\d+).(\\d+)',
    ),
    252 =>
    array (
      'regex' => '^(Nokia)',
      'family_replacement' => 'Nokia Services (WAP) Browser',
    ),
    253 =>
    array (
      'regex' => '(NokiaBrowser)/(\\d+)\\.(\\d+).(\\d+)\\.(\\d+)',
      'family_replacement' => 'Nokia Browser',
    ),
    254 =>
    array (
      'regex' => '(NokiaBrowser)/(\\d+)\\.(\\d+).(\\d+)',
      'family_replacement' => 'Nokia Browser',
    ),
    255 =>
    array (
      'regex' => '(NokiaBrowser)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Nokia Browser',
    ),
    256 =>
    array (
      'regex' => '(BrowserNG)/(\\d+)\\.(\\d+).(\\d+)',
      'family_replacement' => 'Nokia Browser',
    ),
    257 =>
    array (
      'regex' => '(Series60)/5\\.0',
      'family_replacement' => 'Nokia Browser',
      'v1_replacement' => '7',
      'v2_replacement' => '0',
    ),
    258 =>
    array (
      'regex' => '(Series60)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Nokia OSS Browser',
    ),
    259 =>
    array (
      'regex' => '(S40OviBrowser)/(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Ovi Browser',
    ),
    260 =>
    array (
      'regex' => '(Nokia)[EN]?(\\d+)',
    ),
    261 =>
    array (
      'regex' => '(PlayBook).+RIM Tablet OS (\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'BlackBerry WebKit',
    ),
    262 =>
    array (
      'regex' => '(Black[bB]erry|BB10).+Version/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'BlackBerry WebKit',
    ),
    263 =>
    array (
      'regex' => '(Black[bB]erry)\\s?(\\d+)',
      'family_replacement' => 'BlackBerry',
    ),
    264 =>
    array (
      'regex' => '(OmniWeb)/v(\\d+)\\.(\\d+)',
    ),
    265 =>
    array (
      'regex' => '(Blazer)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Palm Blazer',
    ),
    266 =>
    array (
      'regex' => '(Pre)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Palm Pre',
    ),
    267 =>
    array (
      'regex' => '(ELinks)/(\\d+)\\.(\\d+)',
    ),
    268 =>
    array (
      'regex' => '(ELinks) \\((\\d+)\\.(\\d+)',
    ),
    269 =>
    array (
      'regex' => '(Links) \\((\\d+)\\.(\\d+)',
    ),
    270 =>
    array (
      'regex' => '(QtWeb) Internet Browser/(\\d+)\\.(\\d+)',
    ),
    271 =>
    array (
      'regex' => '(PhantomJS)/(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    272 =>
    array (
      'regex' => '(AppleWebKit)/(\\d+)(?:\\.(\\d+)|)\\+ .* Safari',
      'family_replacement' => 'WebKit Nightly',
    ),
    273 =>
    array (
      'regex' => '(Version)/(\\d+)\\.(\\d+)(?:\\.(\\d+)|).*Safari/',
      'family_replacement' => 'Safari',
    ),
    274 =>
    array (
      'regex' => '(Safari)/\\d+',
    ),
    275 =>
    array (
      'regex' => '(OLPC)/Update(\\d+)\\.(\\d+)',
    ),
    276 =>
    array (
      'regex' => '(OLPC)/Update()\\.(\\d+)',
      'v1_replacement' => '0',
    ),
    277 =>
    array (
      'regex' => '(SEMC\\-Browser)/(\\d+)\\.(\\d+)',
    ),
    278 =>
    array (
      'regex' => '(Teleca)',
      'family_replacement' => 'Teleca Browser',
    ),
    279 =>
    array (
      'regex' => '(Phantom)/V(\\d+)\\.(\\d+)',
      'family_replacement' => 'Phantom Browser',
    ),
    280 =>
    array (
      'regex' => '(Trident)/(7|8)\\.(0)',
      'family_replacement' => 'IE',
      'v1_replacement' => '11',
    ),
    281 =>
    array (
      'regex' => '(Trident)/(6)\\.(0)',
      'family_replacement' => 'IE',
      'v1_replacement' => '10',
    ),
    282 =>
    array (
      'regex' => '(Trident)/(5)\\.(0)',
      'family_replacement' => 'IE',
      'v1_replacement' => '9',
    ),
    283 =>
    array (
      'regex' => '(Trident)/(4)\\.(0)',
      'family_replacement' => 'IE',
      'v1_replacement' => '8',
    ),
    284 =>
    array (
      'regex' => '(Espial)/(\\d+)(?:\\.(\\d+)|)(?:\\.(\\d+)|)',
    ),
    285 =>
    array (
      'regex' => '(AppleWebKit)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Apple Mail',
    ),
    286 =>
    array (
      'regex' => '(Firefox)/(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    287 =>
    array (
      'regex' => '(Firefox)/(\\d+)\\.(\\d+)(pre|[ab]\\d+[a-z]*|)',
    ),
    288 =>
    array (
      'regex' => '([MS]?IE) (\\d+)\\.(\\d+)',
      'family_replacement' => 'IE',
    ),
    289 =>
    array (
      'regex' => '(python-requests)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Python Requests',
    ),
    290 =>
    array (
      'regex' => '\\b(Windows-Update-Agent|Microsoft-CryptoAPI|SophosUpdateManager|SophosAgent|Debian APT-HTTP|Ubuntu APT-HTTP|libcurl-agent|libwww-perl|urlgrabber|curl|PycURL|Wget|aria2|Axel|OpenBSD ftp|lftp|jupdate|insomnia|fetch libfetch|akka-http|got)(?:[ /](\\d+)(?:\\.(\\d+)|)(?:\\.(\\d+)|)|)',
    ),
    291 =>
    array (
      'regex' => '(Python/3\\.\\d{1,3} aiohttp)/(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    292 =>
    array (
      'regex' => '(Python/3\\.\\d{1,3} aiohttp)/(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    293 =>
    array (
      'regex' => '(Java)[/ ]{0,1}\\d+\\.(\\d+)\\.(\\d+)[_-]*([a-zA-Z0-9]+|)',
    ),
    294 =>
    array (
      'regex' => '^(Cyberduck)/(\\d+)\\.(\\d+)\\.(\\d+)(?:\\.\\d+|)',
    ),
    295 =>
    array (
      'regex' => '^(S3 Browser) (\\d+)-(\\d+)-(\\d+)(?:\\s*http://s3browser\\.com|)',
    ),
    296 =>
    array (
      'regex' => '(S3Gof3r)',
    ),
    297 =>
    array (
      'regex' => '\\b(ibm-cos-sdk-(?:core|java|js|python))/(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
    ),
    298 =>
    array (
      'regex' => '^(rusoto)/(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    299 =>
    array (
      'regex' => '^(rclone)/v(\\d+)\\.(\\d+)',
    ),
    300 =>
    array (
      'regex' => '^(Roku)/DVP-(\\d+)\\.(\\d+)',
    ),
    301 =>
    array (
      'regex' => '(Kurio)\\/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Kurio App',
    ),
    302 =>
    array (
      'regex' => '^(Box(?: Sync)?)/(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    303 =>
    array (
      'regex' => '^(ViaFree|Viafree)-(?:tvOS-)?[A-Z]{2}/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'ViaFree',
    ),
  ),
  'os_parsers' =>
  array (
    0 =>
    array (
      'regex' => 'HbbTV/\\d+\\.\\d+\\.\\d+ \\( ;(LG)E ;NetCast 4.0',
      'os_v1_replacement' => '2013',
    ),
    1 =>
    array (
      'regex' => 'HbbTV/\\d+\\.\\d+\\.\\d+ \\( ;(LG)E ;NetCast 3.0',
      'os_v1_replacement' => '2012',
    ),
    2 =>
    array (
      'regex' => 'HbbTV/1.1.1 \\(;;;;;\\) Maple_2011',
      'os_replacement' => 'Samsung',
      'os_v1_replacement' => '2011',
    ),
    3 =>
    array (
      'regex' => 'HbbTV/\\d+\\.\\d+\\.\\d+ \\(;(Samsung);SmartTV([0-9]{4});.*FXPDEUC',
      'os_v2_replacement' => 'UE40F7000',
    ),
    4 =>
    array (
      'regex' => 'HbbTV/\\d+\\.\\d+\\.\\d+ \\(;(Samsung);SmartTV([0-9]{4});.*MST12DEUC',
      'os_v2_replacement' => 'UE32F4500',
    ),
    5 =>
    array (
      'regex' => 'HbbTV/1\\.1\\.1 \\(; (Philips);.*NETTV/4',
      'os_v1_replacement' => '2013',
    ),
    6 =>
    array (
      'regex' => 'HbbTV/1\\.1\\.1 \\(; (Philips);.*NETTV/3',
      'os_v1_replacement' => '2012',
    ),
    7 =>
    array (
      'regex' => 'HbbTV/1\\.1\\.1 \\(; (Philips);.*NETTV/2',
      'os_v1_replacement' => '2011',
    ),
    8 =>
    array (
      'regex' => 'HbbTV/\\d+\\.\\d+\\.\\d+.*(firetv)-firefox-plugin (\\d+).(\\d+).(\\d+)',
      'os_replacement' => 'FireHbbTV',
    ),
    9 =>
    array (
      'regex' => 'HbbTV/\\d+\\.\\d+\\.\\d+ \\(.*; ?([a-zA-Z]+) ?;.*(201[1-9]).*\\)',
    ),
    10 =>
    array (
      'regex' => '(Windows Phone) (?:OS[ /])?(\\d+)\\.(\\d+)',
    ),
    11 =>
    array (
      'regex' => '(CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone)[ +]+(\\d+)[_\\.](\\d+)(?:[_\\.](\\d+)|).*Outlook-iOS-Android',
      'os_replacement' => 'iOS',
    ),
    12 =>
    array (
      'regex' => '(Android)[ \\-/](\\d+)(?:\\.(\\d+)|)(?:[.\\-]([a-z0-9]+)|)',
    ),
    13 =>
    array (
      'regex' => '(Android) Donut',
      'os_v1_replacement' => '1',
      'os_v2_replacement' => '2',
    ),
    14 =>
    array (
      'regex' => '(Android) Eclair',
      'os_v1_replacement' => '2',
      'os_v2_replacement' => '1',
    ),
    15 =>
    array (
      'regex' => '(Android) Froyo',
      'os_v1_replacement' => '2',
      'os_v2_replacement' => '2',
    ),
    16 =>
    array (
      'regex' => '(Android) Gingerbread',
      'os_v1_replacement' => '2',
      'os_v2_replacement' => '3',
    ),
    17 =>
    array (
      'regex' => '(Android) Honeycomb',
      'os_v1_replacement' => '3',
    ),
    18 =>
    array (
      'regex' => '(Android) (\\d+);',
    ),
    19 =>
    array (
      'regex' => '^UCWEB.*; (Adr) (\\d+)\\.(\\d+)(?:[.\\-]([a-z0-9]+)|);',
      'os_replacement' => 'Android',
    ),
    20 =>
    array (
      'regex' => '^UCWEB.*; (iPad|iPh|iPd) OS (\\d+)_(\\d+)(?:_(\\d+)|);',
      'os_replacement' => 'iOS',
    ),
    21 =>
    array (
      'regex' => '^UCWEB.*; (wds) (\\d+)\\.(\\d+)(?:\\.(\\d+)|);',
      'os_replacement' => 'Windows Phone',
    ),
    22 =>
    array (
      'regex' => '^(JUC).*; ?U; ?(?:Android|)(\\d+)\\.(\\d+)(?:[\\.\\-]([a-z0-9]+)|)',
      'os_replacement' => 'Android',
    ),
    23 =>
    array (
      'regex' => '(android)\\s(?:mobile\\/)(\\d+)(?:\\.(\\d+)(?:\\.(\\d+)|)|)',
      'os_replacement' => 'Android',
    ),
    24 =>
    array (
      'regex' => '(Silk-Accelerated=[a-z]{4,5})',
      'os_replacement' => 'Android',
    ),
    25 =>
    array (
      'regex' => '(x86_64|aarch64)\\ (\\d+)\\.(\\d+)\\.(\\d+).*Chrome.*(?:CitrixChromeApp)$',
      'os_replacement' => 'Chrome OS',
    ),
    26 =>
    array (
      'regex' => '(XBLWP7)',
      'os_replacement' => 'Windows Phone',
    ),
    27 =>
    array (
      'regex' => '(Windows ?Mobile)',
      'os_replacement' => 'Windows Mobile',
    ),
    28 =>
    array (
      'regex' => '(Windows 10)',
      'os_replacement' => 'Windows',
      'os_v1_replacement' => '10',
    ),
    29 =>
    array (
      'regex' => '(Windows (?:NT 5\\.2|NT 5\\.1))',
      'os_replacement' => 'Windows',
      'os_v1_replacement' => 'XP',
    ),
    30 =>
    array (
      'regex' => '(Windows NT 6\\.1)',
      'os_replacement' => 'Windows',
      'os_v1_replacement' => '7',
    ),
    31 =>
    array (
      'regex' => '(Windows NT 6\\.0)',
      'os_replacement' => 'Windows',
      'os_v1_replacement' => 'Vista',
    ),
    32 =>
    array (
      'regex' => '(Win 9x 4\\.90)',
      'os_replacement' => 'Windows',
      'os_v1_replacement' => 'ME',
    ),
    33 =>
    array (
      'regex' => '(Windows NT 6\\.2; ARM;)',
      'os_replacement' => 'Windows',
      'os_v1_replacement' => 'RT',
    ),
    34 =>
    array (
      'regex' => '(Windows NT 6\\.2)',
      'os_replacement' => 'Windows',
      'os_v1_replacement' => '8',
    ),
    35 =>
    array (
      'regex' => '(Windows NT 6\\.3; ARM;)',
      'os_replacement' => 'Windows',
      'os_v1_replacement' => 'RT 8',
      'os_v2_replacement' => '1',
    ),
    36 =>
    array (
      'regex' => '(Windows NT 6\\.3)',
      'os_replacement' => 'Windows',
      'os_v1_replacement' => '8',
      'os_v2_replacement' => '1',
    ),
    37 =>
    array (
      'regex' => '(Windows NT 6\\.4)',
      'os_replacement' => 'Windows',
      'os_v1_replacement' => '10',
    ),
    38 =>
    array (
      'regex' => '(Windows NT 10\\.0)',
      'os_replacement' => 'Windows',
      'os_v1_replacement' => '10',
    ),
    39 =>
    array (
      'regex' => '(Windows NT 5\\.0)',
      'os_replacement' => 'Windows',
      'os_v1_replacement' => '2000',
    ),
    40 =>
    array (
      'regex' => '(WinNT4.0)',
      'os_replacement' => 'Windows',
      'os_v1_replacement' => 'NT 4.0',
    ),
    41 =>
    array (
      'regex' => '(Windows ?CE)',
      'os_replacement' => 'Windows',
      'os_v1_replacement' => 'CE',
    ),
    42 =>
    array (
      'regex' => 'Win(?:dows)? ?(95|98|3.1|NT|ME|2000|XP|Vista|7|CE)',
      'os_replacement' => 'Windows',
      'os_v1_replacement' => '$1',
    ),
    43 =>
    array (
      'regex' => 'Win16',
      'os_replacement' => 'Windows',
      'os_v1_replacement' => '3.1',
    ),
    44 =>
    array (
      'regex' => 'Win32',
      'os_replacement' => 'Windows',
      'os_v1_replacement' => '95',
    ),
    45 =>
    array (
      'regex' => '^Box.*Windows/([\\d.]+);',
      'os_replacement' => 'Windows',
      'os_v1_replacement' => '$1',
    ),
    46 =>
    array (
      'regex' => '(Tizen)[/ ](\\d+)\\.(\\d+)',
    ),
    47 =>
    array (
      'regex' => '((?:Mac[ +]?|; )OS[ +]X)[\\s+/](?:(\\d+)[_.](\\d+)(?:[_.](\\d+)|)|Mach-O)',
      'os_replacement' => 'Mac OS X',
    ),
    48 =>
    array (
      'regex' => '\\w+\\s+Mac OS X\\s+\\w+\\s+(\\d+).(\\d+).(\\d+).*',
      'os_replacement' => 'Mac OS X',
      'os_v1_replacement' => '$1',
      'os_v2_replacement' => '$2',
      'os_v3_replacement' => '$3',
    ),
    49 =>
    array (
      'regex' => ' (Dar)(win)/(9).(\\d+).*\\((?:i386|x86_64|Power Macintosh)\\)',
      'os_replacement' => 'Mac OS X',
      'os_v1_replacement' => '10',
      'os_v2_replacement' => '5',
    ),
    50 =>
    array (
      'regex' => ' (Dar)(win)/(10).(\\d+).*\\((?:i386|x86_64)\\)',
      'os_replacement' => 'Mac OS X',
      'os_v1_replacement' => '10',
      'os_v2_replacement' => '6',
    ),
    51 =>
    array (
      'regex' => ' (Dar)(win)/(11).(\\d+).*\\((?:i386|x86_64)\\)',
      'os_replacement' => 'Mac OS X',
      'os_v1_replacement' => '10',
      'os_v2_replacement' => '7',
    ),
    52 =>
    array (
      'regex' => ' (Dar)(win)/(12).(\\d+).*\\((?:i386|x86_64)\\)',
      'os_replacement' => 'Mac OS X',
      'os_v1_replacement' => '10',
      'os_v2_replacement' => '8',
    ),
    53 =>
    array (
      'regex' => ' (Dar)(win)/(13).(\\d+).*\\((?:i386|x86_64)\\)',
      'os_replacement' => 'Mac OS X',
      'os_v1_replacement' => '10',
      'os_v2_replacement' => '9',
    ),
    54 =>
    array (
      'regex' => 'Mac_PowerPC',
      'os_replacement' => 'Mac OS',
    ),
    55 =>
    array (
      'regex' => '(?:PPC|Intel) (Mac OS X)',
    ),
    56 =>
    array (
      'regex' => '^Box.*;(Darwin)/(10)\\.(1\\d)(?:\\.(\\d+)|)',
      'os_replacement' => 'Mac OS X',
    ),
    57 =>
    array (
      'regex' => '(Apple\\s?TV)(?:/(\\d+)\\.(\\d+)|)',
      'os_replacement' => 'ATV OS X',
    ),
    58 =>
    array (
      'regex' => '(CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone|CPU IPhone OS)[ +]+(\\d+)[_\\.](\\d+)(?:[_\\.](\\d+)|)',
      'os_replacement' => 'iOS',
    ),
    59 =>
    array (
      'regex' => '(iPhone|iPad|iPod); Opera',
      'os_replacement' => 'iOS',
    ),
    60 =>
    array (
      'regex' => '(iPhone|iPad|iPod).*Mac OS X.*Version/(\\d+)\\.(\\d+)',
      'os_replacement' => 'iOS',
    ),
    61 =>
    array (
      'regex' => '(CFNetwork)/(5)48\\.0\\.3.* Darwin/11\\.0\\.0',
      'os_replacement' => 'iOS',
    ),
    62 =>
    array (
      'regex' => '(CFNetwork)/(5)48\\.(0)\\.4.* Darwin/(1)1\\.0\\.0',
      'os_replacement' => 'iOS',
    ),
    63 =>
    array (
      'regex' => '(CFNetwork)/(5)48\\.(1)\\.4',
      'os_replacement' => 'iOS',
    ),
    64 =>
    array (
      'regex' => '(CFNetwork)/(4)85\\.1(3)\\.9',
      'os_replacement' => 'iOS',
    ),
    65 =>
    array (
      'regex' => '(CFNetwork)/(6)09\\.(1)\\.4',
      'os_replacement' => 'iOS',
    ),
    66 =>
    array (
      'regex' => '(CFNetwork)/(6)(0)9',
      'os_replacement' => 'iOS',
    ),
    67 =>
    array (
      'regex' => '(CFNetwork)/6(7)2\\.(1)\\.13',
      'os_replacement' => 'iOS',
    ),
    68 =>
    array (
      'regex' => '(CFNetwork)/6(7)2\\.(1)\\.(1)4',
      'os_replacement' => 'iOS',
    ),
    69 =>
    array (
      'regex' => '(CF)(Network)/6(7)(2)\\.1\\.15',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '7',
      'os_v2_replacement' => '1',
    ),
    70 =>
    array (
      'regex' => '(CFNetwork)/6(7)2\\.(0)\\.(?:2|8)',
      'os_replacement' => 'iOS',
    ),
    71 =>
    array (
      'regex' => '(CFNetwork)/709\\.1',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '8',
      'os_v2_replacement' => '0.b5',
    ),
    72 =>
    array (
      'regex' => '(CF)(Network)/711\\.(\\d)',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '8',
    ),
    73 =>
    array (
      'regex' => '(CF)(Network)/(720)\\.(\\d)',
      'os_replacement' => 'Mac OS X',
      'os_v1_replacement' => '10',
      'os_v2_replacement' => '10',
    ),
    74 =>
    array (
      'regex' => '(CF)(Network)/(760)\\.(\\d)',
      'os_replacement' => 'Mac OS X',
      'os_v1_replacement' => '10',
      'os_v2_replacement' => '11',
    ),
    75 =>
    array (
      'regex' => 'CFNetwork/7.* Darwin/15\\.4\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '9',
      'os_v2_replacement' => '3',
      'os_v3_replacement' => '1',
    ),
    76 =>
    array (
      'regex' => 'CFNetwork/7.* Darwin/15\\.5\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '9',
      'os_v2_replacement' => '3',
      'os_v3_replacement' => '2',
    ),
    77 =>
    array (
      'regex' => 'CFNetwork/7.* Darwin/15\\.6\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '9',
      'os_v2_replacement' => '3',
      'os_v3_replacement' => '5',
    ),
    78 =>
    array (
      'regex' => '(CF)(Network)/758\\.(\\d)',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '9',
    ),
    79 =>
    array (
      'regex' => 'CFNetwork/808\\.3 Darwin/16\\.3\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '10',
      'os_v2_replacement' => '2',
      'os_v3_replacement' => '1',
    ),
    80 =>
    array (
      'regex' => '(CF)(Network)/808\\.(\\d)',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '10',
    ),
    81 =>
    array (
      'regex' => 'CFNetwork/.* Darwin/17\\.\\d+.*\\(x86_64\\)',
      'os_replacement' => 'Mac OS X',
      'os_v1_replacement' => '10',
      'os_v2_replacement' => '13',
    ),
    82 =>
    array (
      'regex' => 'CFNetwork/.* Darwin/16\\.\\d+.*\\(x86_64\\)',
      'os_replacement' => 'Mac OS X',
      'os_v1_replacement' => '10',
      'os_v2_replacement' => '12',
    ),
    83 =>
    array (
      'regex' => 'CFNetwork/8.* Darwin/15\\.\\d+.*\\(x86_64\\)',
      'os_replacement' => 'Mac OS X',
      'os_v1_replacement' => '10',
      'os_v2_replacement' => '11',
    ),
    84 =>
    array (
      'regex' => 'CFNetwork/.* Darwin/(9)\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '1',
    ),
    85 =>
    array (
      'regex' => 'CFNetwork/.* Darwin/(10)\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '4',
    ),
    86 =>
    array (
      'regex' => 'CFNetwork/.* Darwin/(11)\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '5',
    ),
    87 =>
    array (
      'regex' => 'CFNetwork/.* Darwin/(13)\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '6',
    ),
    88 =>
    array (
      'regex' => 'CFNetwork/6.* Darwin/(14)\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '7',
    ),
    89 =>
    array (
      'regex' => 'CFNetwork/7.* Darwin/(14)\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '8',
      'os_v2_replacement' => '0',
    ),
    90 =>
    array (
      'regex' => 'CFNetwork/7.* Darwin/(15)\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '9',
      'os_v2_replacement' => '0',
    ),
    91 =>
    array (
      'regex' => 'CFNetwork/8.* Darwin/16\\.5\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '10',
      'os_v2_replacement' => '3',
    ),
    92 =>
    array (
      'regex' => 'CFNetwork/8.* Darwin/16\\.6\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '10',
      'os_v2_replacement' => '3',
      'os_v3_replacement' => '2',
    ),
    93 =>
    array (
      'regex' => 'CFNetwork/8.* Darwin/16\\.7\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '10',
      'os_v2_replacement' => '3',
      'os_v3_replacement' => '3',
    ),
    94 =>
    array (
      'regex' => 'CFNetwork/8.* Darwin/(16)\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '10',
    ),
    95 =>
    array (
      'regex' => 'CFNetwork/8.* Darwin/17\\.0\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '11',
      'os_v2_replacement' => '0',
    ),
    96 =>
    array (
      'regex' => 'CFNetwork/8.* Darwin/17\\.2\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '11',
      'os_v2_replacement' => '1',
    ),
    97 =>
    array (
      'regex' => 'CFNetwork/8.* Darwin/17\\.3\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '11',
      'os_v2_replacement' => '2',
    ),
    98 =>
    array (
      'regex' => 'CFNetwork/8.* Darwin/17\\.4\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '11',
      'os_v2_replacement' => '2',
      'os_v3_replacement' => '6',
    ),
    99 =>
    array (
      'regex' => 'CFNetwork/8.* Darwin/17\\.5\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '11',
      'os_v2_replacement' => '3',
    ),
    100 =>
    array (
      'regex' => 'CFNetwork/9.* Darwin/17\\.6\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '11',
      'os_v2_replacement' => '4',
    ),
    101 =>
    array (
      'regex' => 'CFNetwork/9.* Darwin/17\\.7\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '11',
      'os_v2_replacement' => '4',
      'os_v3_replacement' => '1',
    ),
    102 =>
    array (
      'regex' => 'CFNetwork/8.* Darwin/(17)\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '11',
    ),
    103 =>
    array (
      'regex' => 'CFNetwork/9.* Darwin/18\\.0\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '12',
      'os_v2_replacement' => '0',
    ),
    104 =>
    array (
      'regex' => 'CFNetwork/9.* Darwin/(18)\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '12',
    ),
    105 =>
    array (
      'regex' => 'CFNetwork/.* Darwin/',
      'os_replacement' => 'iOS',
    ),
    106 =>
    array (
      'regex' => '\\b(iOS[ /]|iOS; |iPhone(?:/| v|[ _]OS[/,]|; | OS : |\\d,\\d/|\\d,\\d; )|iPad/)(\\d{1,2})[_\\.](\\d{1,2})(?:[_\\.](\\d+)|)',
      'os_replacement' => 'iOS',
    ),
    107 =>
    array (
      'regex' => '\\((iOS);',
    ),
    108 =>
    array (
      'regex' => '(watchOS)/(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
      'os_replacement' => 'WatchOS',
    ),
    109 =>
    array (
      'regex' => 'Outlook-(iOS)/\\d+\\.\\d+\\.prod\\.iphone',
    ),
    110 =>
    array (
      'regex' => '(iPod|iPhone|iPad)',
      'os_replacement' => 'iOS',
    ),
    111 =>
    array (
      'regex' => '(tvOS)[/ ](\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
      'os_replacement' => 'tvOS',
    ),
    112 =>
    array (
      'regex' => '(CrOS) [a-z0-9_]+ (\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
      'os_replacement' => 'Chrome OS',
    ),
    113 =>
    array (
      'regex' => '([Dd]ebian)',
      'os_replacement' => 'Debian',
    ),
    114 =>
    array (
      'regex' => '(Linux Mint)(?:/(\\d+)|)',
    ),
    115 =>
    array (
      'regex' => '(Mandriva)(?: Linux|)/(?:[\\d.-]+m[a-z]{2}(\\d+).(\\d)|)',
    ),
    116 =>
    array (
      'regex' => '(Symbian[Oo][Ss])[/ ](\\d+)\\.(\\d+)',
      'os_replacement' => 'Symbian OS',
    ),
    117 =>
    array (
      'regex' => '(Symbian/3).+NokiaBrowser/7\\.3',
      'os_replacement' => 'Symbian^3 Anna',
    ),
    118 =>
    array (
      'regex' => '(Symbian/3).+NokiaBrowser/7\\.4',
      'os_replacement' => 'Symbian^3 Belle',
    ),
    119 =>
    array (
      'regex' => '(Symbian/3)',
      'os_replacement' => 'Symbian^3',
    ),
    120 =>
    array (
      'regex' => '\\b(Series 60|SymbOS|S60Version|S60V\\d|S60\\b)',
      'os_replacement' => 'Symbian OS',
    ),
    121 =>
    array (
      'regex' => '(MeeGo)',
    ),
    122 =>
    array (
      'regex' => 'Symbian [Oo][Ss]',
      'os_replacement' => 'Symbian OS',
    ),
    123 =>
    array (
      'regex' => 'Series40;',
      'os_replacement' => 'Nokia Series 40',
    ),
    124 =>
    array (
      'regex' => 'Series30Plus;',
      'os_replacement' => 'Nokia Series 30 Plus',
    ),
    125 =>
    array (
      'regex' => '(BB10);.+Version/(\\d+)\\.(\\d+)\\.(\\d+)',
      'os_replacement' => 'BlackBerry OS',
    ),
    126 =>
    array (
      'regex' => '(Black[Bb]erry)[0-9a-z]+/(\\d+)\\.(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
      'os_replacement' => 'BlackBerry OS',
    ),
    127 =>
    array (
      'regex' => '(Black[Bb]erry).+Version/(\\d+)\\.(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
      'os_replacement' => 'BlackBerry OS',
    ),
    128 =>
    array (
      'regex' => '(RIM Tablet OS) (\\d+)\\.(\\d+)\\.(\\d+)',
      'os_replacement' => 'BlackBerry Tablet OS',
    ),
    129 =>
    array (
      'regex' => '(Play[Bb]ook)',
      'os_replacement' => 'BlackBerry Tablet OS',
    ),
    130 =>
    array (
      'regex' => '(Black[Bb]erry)',
      'os_replacement' => 'BlackBerry OS',
    ),
    131 =>
    array (
      'regex' => '(K[Aa][Ii]OS)\\/(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
      'os_replacement' => 'KaiOS',
    ),
    132 =>
    array (
      'regex' => '\\((?:Mobile|Tablet);.+Gecko/18.0 Firefox/\\d+\\.\\d+',
      'os_replacement' => 'Firefox OS',
      'os_v1_replacement' => '1',
      'os_v2_replacement' => '0',
      'os_v3_replacement' => '1',
    ),
    133 =>
    array (
      'regex' => '\\((?:Mobile|Tablet);.+Gecko/18.1 Firefox/\\d+\\.\\d+',
      'os_replacement' => 'Firefox OS',
      'os_v1_replacement' => '1',
      'os_v2_replacement' => '1',
    ),
    134 =>
    array (
      'regex' => '\\((?:Mobile|Tablet);.+Gecko/26.0 Firefox/\\d+\\.\\d+',
      'os_replacement' => 'Firefox OS',
      'os_v1_replacement' => '1',
      'os_v2_replacement' => '2',
    ),
    135 =>
    array (
      'regex' => '\\((?:Mobile|Tablet);.+Gecko/28.0 Firefox/\\d+\\.\\d+',
      'os_replacement' => 'Firefox OS',
      'os_v1_replacement' => '1',
      'os_v2_replacement' => '3',
    ),
    136 =>
    array (
      'regex' => '\\((?:Mobile|Tablet);.+Gecko/30.0 Firefox/\\d+\\.\\d+',
      'os_replacement' => 'Firefox OS',
      'os_v1_replacement' => '1',
      'os_v2_replacement' => '4',
    ),
    137 =>
    array (
      'regex' => '\\((?:Mobile|Tablet);.+Gecko/32.0 Firefox/\\d+\\.\\d+',
      'os_replacement' => 'Firefox OS',
      'os_v1_replacement' => '2',
      'os_v2_replacement' => '0',
    ),
    138 =>
    array (
      'regex' => '\\((?:Mobile|Tablet);.+Gecko/34.0 Firefox/\\d+\\.\\d+',
      'os_replacement' => 'Firefox OS',
      'os_v1_replacement' => '2',
      'os_v2_replacement' => '1',
    ),
    139 =>
    array (
      'regex' => '\\((?:Mobile|Tablet);.+Firefox/\\d+\\.\\d+',
      'os_replacement' => 'Firefox OS',
    ),
    140 =>
    array (
      'regex' => '(BREW)[ /](\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    141 =>
    array (
      'regex' => '(BREW);',
    ),
    142 =>
    array (
      'regex' => '(Brew MP|BMP)[ /](\\d+)\\.(\\d+)\\.(\\d+)',
      'os_replacement' => 'Brew MP',
    ),
    143 =>
    array (
      'regex' => 'BMP;',
      'os_replacement' => 'Brew MP',
    ),
    144 =>
    array (
      'regex' => '(GoogleTV)(?: (\\d+)\\.(\\d+)(?:\\.(\\d+)|)|/[\\da-z]+)',
    ),
    145 =>
    array (
      'regex' => '(WebTV)/(\\d+).(\\d+)',
    ),
    146 =>
    array (
      'regex' => '(CrKey)(?:[/](\\d+)\\.(\\d+)(?:\\.(\\d+)|)|)',
      'os_replacement' => 'Chromecast',
    ),
    147 =>
    array (
      'regex' => '(hpw|web)OS/(\\d+)\\.(\\d+)(?:\\.(\\d+)|)',
      'os_replacement' => 'webOS',
    ),
    148 =>
    array (
      'regex' => '(VRE);',
    ),
    149 =>
    array (
      'regex' => '(Fedora|Red Hat|PCLinuxOS|Puppy|Ubuntu|Kindle|Bada|Sailfish|Lubuntu|BackTrack|Slackware|(?:Free|Open|Net|\\b)BSD)[/ ](\\d+)\\.(\\d+)(?:\\.(\\d+)|)(?:\\.(\\d+)|)',
    ),
    150 =>
    array (
      'regex' => '(Linux)[ /](\\d+)\\.(\\d+)(?:\\.(\\d+)|).*gentoo',
      'os_replacement' => 'Gentoo',
    ),
    151 =>
    array (
      'regex' => '\\((Bada);',
    ),
    152 =>
    array (
      'regex' => '(Windows|Android|WeTab|Maemo|Web0S)',
    ),
    153 =>
    array (
      'regex' => '(Ubuntu|Kubuntu|Arch Linux|CentOS|Slackware|Gentoo|openSUSE|SUSE|Red Hat|Fedora|PCLinuxOS|Mageia|(?:Free|Open|Net|\\b)BSD)',
    ),
    154 =>
    array (
      'regex' => '(Linux)(?:[ /](\\d+)\\.(\\d+)(?:\\.(\\d+)|)|)',
    ),
    155 =>
    array (
      'regex' => 'SunOS',
      'os_replacement' => 'Solaris',
    ),
    156 =>
    array (
      'regex' => '\\(linux-gnu\\)',
      'os_replacement' => 'Linux',
    ),
    157 =>
    array (
      'regex' => '\\(x86_64-redhat-linux-gnu\\)',
      'os_replacement' => 'Red Hat',
    ),
    158 =>
    array (
      'regex' => '\\((freebsd)(\\d+)\\.(\\d+)\\)',
      'os_replacement' => 'FreeBSD',
    ),
    159 =>
    array (
      'regex' => 'linux',
      'os_replacement' => 'Linux',
    ),
    160 =>
    array (
      'regex' => '^(Roku)/DVP-(\\d+)\\.(\\d+)',
    ),
  ),
  'device_parsers' =>
  array (
    0 =>
    array (
      'regex' => '(?:(?:iPhone|Windows CE|Windows Phone|Android).*(?:(?:Bot|Yeti)-Mobile|YRSpider|BingPreview|bots?/\\d|(?:bot|spider)\\.html)|AdsBot-Google-Mobile.*iPhone)',
      'regex_flag' => 'i',
      'device_replacement' => 'Spider',
      'brand_replacement' => 'Spider',
      'model_replacement' => 'Smartphone',
    ),
    1 =>
    array (
      'regex' => '(?:DoCoMo|\\bMOT\\b|\\bLG\\b|Nokia|Samsung|SonyEricsson).*(?:(?:Bot|Yeti)-Mobile|bots?/\\d|(?:bot|crawler)\\.html|(?:jump|google|Wukong)bot|ichiro/mobile|/spider|YahooSeeker)',
      'regex_flag' => 'i',
      'device_replacement' => 'Spider',
      'brand_replacement' => 'Spider',
      'model_replacement' => 'Feature Phone',
    ),
    2 =>
    array (
      'regex' => ' PTST/\\d+(?:\\.)?\\d+$',
      'device_replacement' => 'Spider',
      'brand_replacement' => 'Spider',
    ),
    3 =>
    array (
      'regex' => 'X11; Datanyze; Linux',
      'device_replacement' => 'Spider',
      'brand_replacement' => 'Spider',
    ),
    4 =>
    array (
      'regex' => '\\bSmartWatch *\\( *([^;]+) *; *([^;]+) *;',
      'device_replacement' => '$1 $2',
      'brand_replacement' => '$1',
      'model_replacement' => '$2',
    ),
    5 =>
    array (
      'regex' => 'Android Application[^\\-]+ - (Sony) ?(Ericsson|) (.+) \\w+ - ',
      'device_replacement' => '$1 $2',
      'brand_replacement' => '$1$2',
      'model_replacement' => '$3',
    ),
    6 =>
    array (
      'regex' => 'Android Application[^\\-]+ - (?:HTC|HUAWEI|LGE|LENOVO|MEDION|TCT) (HTC|HUAWEI|LG|LENOVO|MEDION|ALCATEL)[ _\\-](.+) \\w+ - ',
      'regex_flag' => 'i',
      'device_replacement' => '$1 $2',
      'brand_replacement' => '$1',
      'model_replacement' => '$2',
    ),
    7 =>
    array (
      'regex' => 'Android Application[^\\-]+ - ([^ ]+) (.+) \\w+ - ',
      'device_replacement' => '$1 $2',
      'brand_replacement' => '$1',
      'model_replacement' => '$2',
    ),
    8 =>
    array (
      'regex' => '; *([BLRQ]C\\d{4}[A-Z]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '3Q $1',
      'brand_replacement' => '3Q',
      'model_replacement' => '$1',
    ),
    9 =>
    array (
      'regex' => '; *(?:3Q_)([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '3Q $1',
      'brand_replacement' => '3Q',
      'model_replacement' => '$1',
    ),
    10 =>
    array (
      'regex' => 'Android [34].*; *(A100|A101|A110|A200|A210|A211|A500|A501|A510|A511|A700(?: Lite| 3G|)|A701|B1-A71|A1-\\d{3}|B1-\\d{3}|V360|V370|W500|W500P|W501|W501P|W510|W511|W700|Slider SL101|DA22[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Acer',
      'model_replacement' => '$1',
    ),
    11 =>
    array (
      'regex' => '; *Acer Iconia Tab ([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Acer',
      'model_replacement' => '$1',
    ),
    12 =>
    array (
      'regex' => '; *(Z1[1235]0|E320[^/]*|S500|S510|Liquid[^;/]*|Iconia A\\d+)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Acer',
      'model_replacement' => '$1',
    ),
    13 =>
    array (
      'regex' => '; *(Acer |ACER )([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Acer',
      'model_replacement' => '$2',
    ),
    14 =>
    array (
      'regex' => '; *(Advent |)(Vega(?:Bean|Comb|)).*?(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Advent',
      'model_replacement' => '$2',
    ),
    15 =>
    array (
      'regex' => '; *(Ainol |)((?:NOVO|[Nn]ovo)[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Ainol',
      'model_replacement' => '$2',
    ),
    16 =>
    array (
      'regex' => '; *AIRIS[ _\\-]?([^/;\\)]+) *(?:;|\\)|Build)',
      'regex_flag' => 'i',
      'device_replacement' => '$1',
      'brand_replacement' => 'Airis',
      'model_replacement' => '$1',
    ),
    17 =>
    array (
      'regex' => '; *(OnePAD[^;/]+?)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => '$1',
      'brand_replacement' => 'Airis',
      'model_replacement' => '$1',
    ),
    18 =>
    array (
      'regex' => '; *Airpad[ \\-]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Airpad $1',
      'brand_replacement' => 'Airpad',
      'model_replacement' => '$1',
    ),
    19 =>
    array (
      'regex' => '; *(one ?touch) (EVO7|T10|T20)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Alcatel One Touch $2',
      'brand_replacement' => 'Alcatel',
      'model_replacement' => 'One Touch $2',
    ),
    20 =>
    array (
      'regex' => '; *(?:alcatel[ _]|)(?:(?:one[ _]?touch[ _])|ot[ \\-])([^;/]+?)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => 'Alcatel One Touch $1',
      'brand_replacement' => 'Alcatel',
      'model_replacement' => 'One Touch $1',
    ),
    21 =>
    array (
      'regex' => '; *(TCL)[ _]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => '$1',
      'model_replacement' => '$2',
    ),
    22 =>
    array (
      'regex' => '; *(Vodafone Smart II|Optimus_Madrid)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Alcatel $1',
      'brand_replacement' => 'Alcatel',
      'model_replacement' => '$1',
    ),
    23 =>
    array (
      'regex' => '; *BASE_Lutea_3(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Alcatel One Touch 998',
      'brand_replacement' => 'Alcatel',
      'model_replacement' => 'One Touch 998',
    ),
    24 =>
    array (
      'regex' => '; *BASE_Varia(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Alcatel One Touch 918D',
      'brand_replacement' => 'Alcatel',
      'model_replacement' => 'One Touch 918D',
    ),
    25 =>
    array (
      'regex' => '; *((?:FINE|Fine)\\d[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Allfine',
      'model_replacement' => '$1',
    ),
    26 =>
    array (
      'regex' => '; *(ALLVIEW[ _]?|Allview[ _]?)((?:Speed|SPEED).*?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Allview',
      'model_replacement' => '$2',
    ),
    27 =>
    array (
      'regex' => '; *(ALLVIEW[ _]?|Allview[ _]?|)(AX1_Shine|AX2_Frenzy)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Allview',
      'model_replacement' => '$2',
    ),
    28 =>
    array (
      'regex' => '; *(ALLVIEW[ _]?|Allview[ _]?)([^;/]*?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Allview',
      'model_replacement' => '$2',
    ),
    29 =>
    array (
      'regex' => '; *(A13-MID)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Allwinner',
      'model_replacement' => '$1',
    ),
    30 =>
    array (
      'regex' => '; *(Allwinner)[ _\\-]?([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Allwinner',
      'model_replacement' => '$1',
    ),
    31 =>
    array (
      'regex' => '; *(A651|A701B?|A702|A703|A705|A706|A707|A711|A712|A713|A717|A722|A785|A801|A802|A803|A901|A902|A1002|A1003|A1006|A1007|A9701|A9703|Q710|Q80)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Amaway',
      'model_replacement' => '$1',
    ),
    32 =>
    array (
      'regex' => '; *(?:AMOI|Amoi)[ _]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Amoi $1',
      'brand_replacement' => 'Amoi',
      'model_replacement' => '$1',
    ),
    33 =>
    array (
      'regex' => '^(?:AMOI|Amoi)[ _]([^;/]+?) Linux',
      'device_replacement' => 'Amoi $1',
      'brand_replacement' => 'Amoi',
      'model_replacement' => '$1',
    ),
    34 =>
    array (
      'regex' => '; *(MW(?:0[789]|10)[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Aoc',
      'model_replacement' => '$1',
    ),
    35 =>
    array (
      'regex' => '; *(G7|M1013|M1015G|M11[CG]?|M-?12[B]?|M15|M19[G]?|M30[ACQ]?|M31[GQ]|M32|M33[GQ]|M36|M37|M38|M701T|M710|M712B|M713|M715G|M716G|M71(?:G|GS|T|)|M72[T]?|M73[T]?|M75[GT]?|M77G|M79T|M7L|M7LN|M81|M810|M81T|M82|M92|M92KS|M92S|M717G|M721|M722G|M723|M725G|M739|M785|M791|M92SK|M93D)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Aoson $1',
      'brand_replacement' => 'Aoson',
      'model_replacement' => '$1',
    ),
    36 =>
    array (
      'regex' => '; *Aoson ([^;/]+?)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => 'Aoson $1',
      'brand_replacement' => 'Aoson',
      'model_replacement' => '$1',
    ),
    37 =>
    array (
      'regex' => '; *[Aa]panda[ _\\-]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Apanda $1',
      'brand_replacement' => 'Apanda',
      'model_replacement' => '$1',
    ),
    38 =>
    array (
      'regex' => '; *(?:ARCHOS|Archos) ?(GAMEPAD.*?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Archos $1',
      'brand_replacement' => 'Archos',
      'model_replacement' => '$1',
    ),
    39 =>
    array (
      'regex' => 'ARCHOS; GOGI; ([^;]+);',
      'device_replacement' => 'Archos $1',
      'brand_replacement' => 'Archos',
      'model_replacement' => '$1',
    ),
    40 =>
    array (
      'regex' => '(?:ARCHOS|Archos)[ _]?(.*?)(?: Build|[;/\\(\\)\\-]|$)',
      'device_replacement' => 'Archos $1',
      'brand_replacement' => 'Archos',
      'model_replacement' => '$1',
    ),
    41 =>
    array (
      'regex' => '; *(AN(?:7|8|9|10|13)[A-Z0-9]{1,4})(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Archos $1',
      'brand_replacement' => 'Archos',
      'model_replacement' => '$1',
    ),
    42 =>
    array (
      'regex' => '; *(A28|A32|A43|A70(?:BHT|CHT|HB|S|X)|A101(?:B|C|IT)|A7EB|A7EB-WK|101G9|80G9)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Archos $1',
      'brand_replacement' => 'Archos',
      'model_replacement' => '$1',
    ),
    43 =>
    array (
      'regex' => '; *(PAD-FMD[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Arival',
      'model_replacement' => '$1',
    ),
    44 =>
    array (
      'regex' => '; *(BioniQ) ?([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Arival',
      'model_replacement' => '$1 $2',
    ),
    45 =>
    array (
      'regex' => '; *(AN\\d[^;/]+|ARCHM\\d+)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Arnova $1',
      'brand_replacement' => 'Arnova',
      'model_replacement' => '$1',
    ),
    46 =>
    array (
      'regex' => '; *(?:ARNOVA|Arnova) ?([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Arnova $1',
      'brand_replacement' => 'Arnova',
      'model_replacement' => '$1',
    ),
    47 =>
    array (
      'regex' => '; *(?:ASSISTANT |)(AP)-?([1789]\\d{2}[A-Z]{0,2}|80104)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Assistant $1-$2',
      'brand_replacement' => 'Assistant',
      'model_replacement' => '$1-$2',
    ),
    48 =>
    array (
      'regex' => '; *(ME17\\d[^;/]*|ME3\\d{2}[^;/]+|K00[A-Z]|Nexus 10|Nexus 7(?: 2013|)|PadFone[^;/]*|Transformer[^;/]*|TF\\d{3}[^;/]*|eeepc)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Asus $1',
      'brand_replacement' => 'Asus',
      'model_replacement' => '$1',
    ),
    49 =>
    array (
      'regex' => '; *ASUS[ _]*([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Asus $1',
      'brand_replacement' => 'Asus',
      'model_replacement' => '$1',
    ),
    50 =>
    array (
      'regex' => '; *Garmin-Asus ([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Garmin-Asus $1',
      'brand_replacement' => 'Garmin-Asus',
      'model_replacement' => '$1',
    ),
    51 =>
    array (
      'regex' => '; *(Garminfone)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Garmin $1',
      'brand_replacement' => 'Garmin-Asus',
      'model_replacement' => '$1',
    ),
    52 =>
    array (
      'regex' => '; (\\@TAB-[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Attab',
      'model_replacement' => '$1',
    ),
    53 =>
    array (
      'regex' => '; *(T-(?:07|[^0]\\d)[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Audiosonic',
      'model_replacement' => '$1',
    ),
    54 =>
    array (
      'regex' => '; *(?:Axioo[ _\\-]([^;/]+?)|(picopad)[ _\\-]([^;/]+?))(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => 'Axioo $1$2 $3',
      'brand_replacement' => 'Axioo',
      'model_replacement' => '$1$2 $3',
    ),
    55 =>
    array (
      'regex' => '; *(V(?:100|700|800)[^;/]*)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Azend',
      'model_replacement' => '$1',
    ),
    56 =>
    array (
      'regex' => '; *(IBAK\\-[^;/]*)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => '$1',
      'brand_replacement' => 'Bak',
      'model_replacement' => '$1',
    ),
    57 =>
    array (
      'regex' => '; *(HY5001|HY6501|X12|X21|I5)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Bedove $1',
      'brand_replacement' => 'Bedove',
      'model_replacement' => '$1',
    ),
    58 =>
    array (
      'regex' => '; *(JC-[^;/]*)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Benss $1',
      'brand_replacement' => 'Benss',
      'model_replacement' => '$1',
    ),
    59 =>
    array (
      'regex' => '; *(BB) ([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Blackberry',
      'model_replacement' => '$2',
    ),
    60 =>
    array (
      'regex' => '; *(BlackBird)[ _](I8.*?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => '$1',
      'model_replacement' => '$2',
    ),
    61 =>
    array (
      'regex' => '; *(BlackBird)[ _](.*?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => '$1',
      'model_replacement' => '$2',
    ),
    62 =>
    array (
      'regex' => '; *([0-9]+BP[EM][^;/]*|Endeavour[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Blaupunkt $1',
      'brand_replacement' => 'Blaupunkt',
      'model_replacement' => '$1',
    ),
    63 =>
    array (
      'regex' => '; *((?:BLU|Blu)[ _\\-])([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Blu',
      'model_replacement' => '$2',
    ),
    64 =>
    array (
      'regex' => '; *(?:BMOBILE )?(Blu|BLU|DASH [^;/]+|VIVO 4\\.3|TANK 4\\.5)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Blu',
      'model_replacement' => '$1',
    ),
    65 =>
    array (
      'regex' => '; *(TOUCH\\d[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Blusens',
      'model_replacement' => '$1',
    ),
    66 =>
    array (
      'regex' => '; *(AX5\\d+)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Bmobile',
      'model_replacement' => '$1',
    ),
    67 =>
    array (
      'regex' => '; *([Bb]q) ([^;/]+?);?(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'bq',
      'model_replacement' => '$2',
    ),
    68 =>
    array (
      'regex' => '; *(Maxwell [^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'bq',
      'model_replacement' => '$1',
    ),
    69 =>
    array (
      'regex' => '; *((?:B-Tab|B-TAB) ?\\d[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Braun',
      'model_replacement' => '$1',
    ),
    70 =>
    array (
      'regex' => '; *(Broncho) ([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => '$1',
      'model_replacement' => '$2',
    ),
    71 =>
    array (
      'regex' => '; *CAPTIVA ([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Captiva $1',
      'brand_replacement' => 'Captiva',
      'model_replacement' => '$1',
    ),
    72 =>
    array (
      'regex' => '; *(C771|CAL21|IS11CA)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Casio',
      'model_replacement' => '$1',
    ),
    73 =>
    array (
      'regex' => '; *(?:Cat|CAT) ([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Cat $1',
      'brand_replacement' => 'Cat',
      'model_replacement' => '$1',
    ),
    74 =>
    array (
      'regex' => '; *(?:Cat)(Nova.*?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Cat $1',
      'brand_replacement' => 'Cat',
      'model_replacement' => '$1',
    ),
    75 =>
    array (
      'regex' => '; *(INM8002KP|ADM8000KP_[AB])(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Cat',
      'model_replacement' => 'Tablet PHOENIX 8.1J0',
    ),
    76 =>
    array (
      'regex' => '; *(?:[Cc]elkon[ _\\*]|CELKON[ _\\*])([^;/\\)]+) ?(?:Build|;|\\))',
      'device_replacement' => '$1',
      'brand_replacement' => 'Celkon',
      'model_replacement' => '$1',
    ),
    77 =>
    array (
      'regex' => 'Build/(?:[Cc]elkon)+_?([^;/_\\)]+)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Celkon',
      'model_replacement' => '$1',
    ),
    78 =>
    array (
      'regex' => '; *(CT)-?(\\d+)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Celkon',
      'model_replacement' => '$1$2',
    ),
    79 =>
    array (
      'regex' => '; *(A19|A19Q|A105|A107[^;/\\)]*) ?(?:Build|;|\\))',
      'device_replacement' => '$1',
      'brand_replacement' => 'Celkon',
      'model_replacement' => '$1',
    ),
    80 =>
    array (
      'regex' => '; *(TPC[0-9]{4,5})(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'ChangJia',
      'model_replacement' => '$1',
    ),
    81 =>
    array (
      'regex' => '; *(Cloudfone)[ _](Excite)([^ ][^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2 $3',
      'brand_replacement' => 'Cloudfone',
      'model_replacement' => '$1 $2 $3',
    ),
    82 =>
    array (
      'regex' => '; *(Excite|ICE)[ _](\\d+[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Cloudfone $1 $2',
      'brand_replacement' => 'Cloudfone',
      'model_replacement' => 'Cloudfone $1 $2',
    ),
    83 =>
    array (
      'regex' => '; *(Cloudfone|CloudPad)[ _]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Cloudfone',
      'model_replacement' => '$1 $2',
    ),
    84 =>
    array (
      'regex' => '; *((?:Aquila|Clanga|Rapax)[^;/]+?)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => '$1',
      'brand_replacement' => 'Cmx',
      'model_replacement' => '$1',
    ),
    85 =>
    array (
      'regex' => '; *(?:CFW-|Kyros )?(MID[0-9]{4}(?:[ABC]|SR|TV)?)(\\(3G\\)-4G| GB 8K| 3G| 8K| GB)? *(?:Build|[;\\)])',
      'device_replacement' => 'CobyKyros $1$2',
      'brand_replacement' => 'CobyKyros',
      'model_replacement' => '$1$2',
    ),
    86 =>
    array (
      'regex' => '; *([^;/]*)Coolpad[ _]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Coolpad',
      'model_replacement' => '$1$2',
    ),
    87 =>
    array (
      'regex' => '; *(CUBE[ _])?([KU][0-9]+ ?GT.*?|A5300)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Cube',
      'model_replacement' => '$2',
    ),
    88 =>
    array (
      'regex' => '; *CUBOT ([^;/]+?)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => '$1',
      'brand_replacement' => 'Cubot',
      'model_replacement' => '$1',
    ),
    89 =>
    array (
      'regex' => '; *(BOBBY)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => '$1',
      'brand_replacement' => 'Cubot',
      'model_replacement' => '$1',
    ),
    90 =>
    array (
      'regex' => '; *(Dslide [^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Danew',
      'model_replacement' => '$1',
    ),
    91 =>
    array (
      'regex' => '; *(XCD)[ _]?(28|35)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Dell $1$2',
      'brand_replacement' => 'Dell',
      'model_replacement' => '$1$2',
    ),
    92 =>
    array (
      'regex' => '; *(001DL)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Dell $1',
      'brand_replacement' => 'Dell',
      'model_replacement' => 'Streak',
    ),
    93 =>
    array (
      'regex' => '; *(?:Dell|DELL) (Streak)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Dell $1',
      'brand_replacement' => 'Dell',
      'model_replacement' => 'Streak',
    ),
    94 =>
    array (
      'regex' => '; *(101DL|GS01|Streak Pro[^;/]*)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Dell $1',
      'brand_replacement' => 'Dell',
      'model_replacement' => 'Streak Pro',
    ),
    95 =>
    array (
      'regex' => '; *([Ss]treak ?7)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Dell $1',
      'brand_replacement' => 'Dell',
      'model_replacement' => 'Streak 7',
    ),
    96 =>
    array (
      'regex' => '; *(Mini-3iX)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Dell $1',
      'brand_replacement' => 'Dell',
      'model_replacement' => '$1',
    ),
    97 =>
    array (
      'regex' => '; *(?:Dell|DELL)[ _](Aero|Venue|Thunder|Mini.*?|Streak[ _]Pro)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Dell $1',
      'brand_replacement' => 'Dell',
      'model_replacement' => '$1',
    ),
    98 =>
    array (
      'regex' => '; *Dell[ _]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Dell $1',
      'brand_replacement' => 'Dell',
      'model_replacement' => '$1',
    ),
    99 =>
    array (
      'regex' => '; *Dell ([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Dell $1',
      'brand_replacement' => 'Dell',
      'model_replacement' => '$1',
    ),
    100 =>
    array (
      'regex' => '; *(TA[CD]-\\d+[^;/]*)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Denver',
      'model_replacement' => '$1',
    ),
    101 =>
    array (
      'regex' => '; *(iP[789]\\d{2}(?:-3G)?|IP10\\d{2}(?:-8GB)?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Dex',
      'model_replacement' => '$1',
    ),
    102 =>
    array (
      'regex' => '; *(AirTab)[ _\\-]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'DNS',
      'model_replacement' => '$1 $2',
    ),
    103 =>
    array (
      'regex' => '; *(F\\-\\d[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Fujitsu',
      'model_replacement' => '$1',
    ),
    104 =>
    array (
      'regex' => '; *(HT-03A)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'HTC',
      'model_replacement' => 'Magic',
    ),
    105 =>
    array (
      'regex' => '; *(HT\\-\\d[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'HTC',
      'model_replacement' => '$1',
    ),
    106 =>
    array (
      'regex' => '; *(L\\-\\d[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'LG',
      'model_replacement' => '$1',
    ),
    107 =>
    array (
      'regex' => '; *(N\\-\\d[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Nec',
      'model_replacement' => '$1',
    ),
    108 =>
    array (
      'regex' => '; *(P\\-\\d[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Panasonic',
      'model_replacement' => '$1',
    ),
    109 =>
    array (
      'regex' => '; *(SC\\-\\d[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Samsung',
      'model_replacement' => '$1',
    ),
    110 =>
    array (
      'regex' => '; *(SH\\-\\d[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Sharp',
      'model_replacement' => '$1',
    ),
    111 =>
    array (
      'regex' => '; *(SO\\-\\d[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'SonyEricsson',
      'model_replacement' => '$1',
    ),
    112 =>
    array (
      'regex' => '; *(T\\-0[12][^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Toshiba',
      'model_replacement' => '$1',
    ),
    113 =>
    array (
      'regex' => '; *(DOOV)[ _]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'DOOV',
      'model_replacement' => '$2',
    ),
    114 =>
    array (
      'regex' => '; *(Enot|ENOT)[ -]?([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Enot',
      'model_replacement' => '$2',
    ),
    115 =>
    array (
      'regex' => '; *[^;/]+ Build/(?:CROSS|Cross)+[ _\\-]([^\\)]+)',
      'device_replacement' => 'CROSS $1',
      'brand_replacement' => 'Evercoss',
      'model_replacement' => 'Cross $1',
    ),
    116 =>
    array (
      'regex' => '; *(CROSS|Cross)[ _\\-]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Evercoss',
      'model_replacement' => 'Cross $2',
    ),
    117 =>
    array (
      'regex' => '; *Explay[_ ](.+?)(?:[\\)]| Build)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Explay',
      'model_replacement' => '$1',
    ),
    118 =>
    array (
      'regex' => '; *(IQ.*?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Fly',
      'model_replacement' => '$1',
    ),
    119 =>
    array (
      'regex' => '; *(Fly|FLY)[ _](IQ[^;]+?|F[34]\\d+[^;]*?);?(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Fly',
      'model_replacement' => '$2',
    ),
    120 =>
    array (
      'regex' => '; *(M532|Q572|FJL21)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Fujitsu',
      'model_replacement' => '$1',
    ),
    121 =>
    array (
      'regex' => '; *(G1)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Galapad',
      'model_replacement' => '$1',
    ),
    122 =>
    array (
      'regex' => '; *(Geeksphone) ([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => '$1',
      'model_replacement' => '$2',
    ),
    123 =>
    array (
      'regex' => '; *(G[^F]?FIVE) ([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Gfive',
      'model_replacement' => '$2',
    ),
    124 =>
    array (
      'regex' => '; *(Gionee)[ _\\-]([^;/]+?)(?:/[^;/]+|)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Gionee',
      'model_replacement' => '$2',
    ),
    125 =>
    array (
      'regex' => '; *(GN\\d+[A-Z]?|INFINITY_PASSION|Ctrl_V1)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Gionee $1',
      'brand_replacement' => 'Gionee',
      'model_replacement' => '$1',
    ),
    126 =>
    array (
      'regex' => '; *(E3) Build/JOP40D',
      'device_replacement' => 'Gionee $1',
      'brand_replacement' => 'Gionee',
      'model_replacement' => '$1',
    ),
    127 =>
    array (
      'regex' => '\\sGIONEE[-\\s_](\\w*)',
      'regex_flag' => 'i',
      'device_replacement' => 'Gionee $1',
      'brand_replacement' => 'Gionee',
      'model_replacement' => '$1',
    ),
    128 =>
    array (
      'regex' => '; *((?:FONE|QUANTUM|INSIGNIA) \\d+[^;/]*|PLAYTAB)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'GoClever $1',
      'brand_replacement' => 'GoClever',
      'model_replacement' => '$1',
    ),
    129 =>
    array (
      'regex' => '; *GOCLEVER ([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'GoClever $1',
      'brand_replacement' => 'GoClever',
      'model_replacement' => '$1',
    ),
    130 =>
    array (
      'regex' => '; *(Glass \\d+)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Google',
      'model_replacement' => '$1',
    ),
    131 =>
    array (
      'regex' => '; *(Pixel.*?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Google',
      'model_replacement' => '$1',
    ),
    132 =>
    array (
      'regex' => '; *(GSmart)[ -]([^/]+)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Gigabyte',
      'model_replacement' => '$1 $2',
    ),
    133 =>
    array (
      'regex' => '; *(imx5[13]_[^/]+)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Freescale $1',
      'brand_replacement' => 'Freescale',
      'model_replacement' => '$1',
    ),
    134 =>
    array (
      'regex' => '; *Haier[ _\\-]([^/]+)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Haier $1',
      'brand_replacement' => 'Haier',
      'model_replacement' => '$1',
    ),
    135 =>
    array (
      'regex' => '; *(PAD1016)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Haipad $1',
      'brand_replacement' => 'Haipad',
      'model_replacement' => '$1',
    ),
    136 =>
    array (
      'regex' => '; *(M701|M7|M8|M9)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Haipad $1',
      'brand_replacement' => 'Haipad',
      'model_replacement' => '$1',
    ),
    137 =>
    array (
      'regex' => '; *(SN\\d+T[^;\\)/]*)(?: Build|[;\\)])',
      'device_replacement' => 'Hannspree $1',
      'brand_replacement' => 'Hannspree',
      'model_replacement' => '$1',
    ),
    138 =>
    array (
      'regex' => 'Build/HCL ME Tablet ([^;\\)]+)[\\);]',
      'device_replacement' => 'HCLme $1',
      'brand_replacement' => 'HCLme',
      'model_replacement' => '$1',
    ),
    139 =>
    array (
      'regex' => '; *([^;\\/]+) Build/HCL',
      'device_replacement' => 'HCLme $1',
      'brand_replacement' => 'HCLme',
      'model_replacement' => '$1',
    ),
    140 =>
    array (
      'regex' => '; *(MID-?\\d{4}C[EM])(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Hena $1',
      'brand_replacement' => 'Hena',
      'model_replacement' => '$1',
    ),
    141 =>
    array (
      'regex' => '; *(EG\\d{2,}|HS-[^;/]+|MIRA[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Hisense $1',
      'brand_replacement' => 'Hisense',
      'model_replacement' => '$1',
    ),
    142 =>
    array (
      'regex' => '; *(andromax[^;/]+?)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => 'Hisense $1',
      'brand_replacement' => 'Hisense',
      'model_replacement' => '$1',
    ),
    143 =>
    array (
      'regex' => '; *(?:AMAZE[ _](S\\d+)|(S\\d+)[ _]AMAZE)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'AMAZE $1$2',
      'brand_replacement' => 'hitech',
      'model_replacement' => 'AMAZE $1$2',
    ),
    144 =>
    array (
      'regex' => '; *(PlayBook)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'HP $1',
      'brand_replacement' => 'HP',
      'model_replacement' => '$1',
    ),
    145 =>
    array (
      'regex' => '; *HP ([^/]+)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'HP $1',
      'brand_replacement' => 'HP',
      'model_replacement' => '$1',
    ),
    146 =>
    array (
      'regex' => '; *([^/]+_tenderloin)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'HP TouchPad',
      'brand_replacement' => 'HP',
      'model_replacement' => 'TouchPad',
    ),
    147 =>
    array (
      'regex' => '; *(HUAWEI |Huawei-|)([UY][^;/]+) Build/(?:Huawei|HUAWEI)([UY][^\\);]+)\\)',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Huawei',
      'model_replacement' => '$2',
    ),
    148 =>
    array (
      'regex' => '; *([^;/]+) Build[/ ]Huawei(MT1-U06|[A-Z]+\\d+[^\\);]+)[^\\);]*\\)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Huawei',
      'model_replacement' => '$2',
    ),
    149 =>
    array (
      'regex' => '; *(S7|M860) Build',
      'device_replacement' => '$1',
      'brand_replacement' => 'Huawei',
      'model_replacement' => '$1',
    ),
    150 =>
    array (
      'regex' => '; *((?:HUAWEI|Huawei)[ \\-]?)(MediaPad) Build',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Huawei',
      'model_replacement' => '$2',
    ),
    151 =>
    array (
      'regex' => '; *((?:HUAWEI[ _]?|Huawei[ _]|)Ascend[ _])([^;/]+) Build',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Huawei',
      'model_replacement' => '$2',
    ),
    152 =>
    array (
      'regex' => '; *((?:HUAWEI|Huawei)[ _\\-]?)((?:G700-|MT-)[^;/]+) Build',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Huawei',
      'model_replacement' => '$2',
    ),
    153 =>
    array (
      'regex' => '; *((?:HUAWEI|Huawei)[ _\\-]?)([^;/]+) Build',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Huawei',
      'model_replacement' => '$2',
    ),
    154 =>
    array (
      'regex' => '; *(MediaPad[^;]+|SpringBoard) Build/Huawei',
      'device_replacement' => '$1',
      'brand_replacement' => 'Huawei',
      'model_replacement' => '$1',
    ),
    155 =>
    array (
      'regex' => '; *([^;]+) Build/(?:Huawei|HUAWEI)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Huawei',
      'model_replacement' => '$1',
    ),
    156 =>
    array (
      'regex' => '; *([Uu])([89]\\d{3}) Build',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Huawei',
      'model_replacement' => 'U$2',
    ),
    157 =>
    array (
      'regex' => '; *(?:Ideos |IDEOS )(S7) Build',
      'device_replacement' => 'Huawei Ideos$1',
      'brand_replacement' => 'Huawei',
      'model_replacement' => 'Ideos$1',
    ),
    158 =>
    array (
      'regex' => '; *(?:Ideos |IDEOS )([^;/]+\\s*|\\s*)Build',
      'device_replacement' => 'Huawei Ideos$1',
      'brand_replacement' => 'Huawei',
      'model_replacement' => 'Ideos$1',
    ),
    159 =>
    array (
      'regex' => '; *(Orange Daytona|Pulse|Pulse Mini|Vodafone 858|C8500|C8600|C8650|C8660|Nexus 6P|ATH-.+?) Build[/ ]',
      'device_replacement' => 'Huawei $1',
      'brand_replacement' => 'Huawei',
      'model_replacement' => '$1',
    ),
    160 =>
    array (
      'regex' => '; *((?:[A-Z]{3})\\-L[A-Za0-9]{2})[\\)]',
      'device_replacement' => 'Huawei $1',
      'brand_replacement' => 'Huawei',
      'model_replacement' => '$1',
    ),
    161 =>
    array (
      'regex' => '; *HTC[ _]([^;]+); Windows Phone',
      'device_replacement' => 'HTC $1',
      'brand_replacement' => 'HTC',
      'model_replacement' => '$1',
    ),
    162 =>
    array (
      'regex' => '; *(?:HTC[ _/])+([^ _/]+)(?:[/\\\\]1\\.0 | V|/| +)\\d+\\.\\d[\\d\\.]*(?: *Build|\\))',
      'device_replacement' => 'HTC $1',
      'brand_replacement' => 'HTC',
      'model_replacement' => '$1',
    ),
    163 =>
    array (
      'regex' => '; *(?:HTC[ _/])+([^ _/]+)(?:[ _/]([^ _/]+)|)(?:[/\\\\]1\\.0 | V|/| +)\\d+\\.\\d[\\d\\.]*(?: *Build|\\))',
      'device_replacement' => 'HTC $1 $2',
      'brand_replacement' => 'HTC',
      'model_replacement' => '$1 $2',
    ),
    164 =>
    array (
      'regex' => '; *(?:HTC[ _/])+([^ _/]+)(?:[ _/]([^ _/]+)(?:[ _/]([^ _/]+)|)|)(?:[/\\\\]1\\.0 | V|/| +)\\d+\\.\\d[\\d\\.]*(?: *Build|\\))',
      'device_replacement' => 'HTC $1 $2 $3',
      'brand_replacement' => 'HTC',
      'model_replacement' => '$1 $2 $3',
    ),
    165 =>
    array (
      'regex' => '; *(?:HTC[ _/])+([^ _/]+)(?:[ _/]([^ _/]+)(?:[ _/]([^ _/]+)(?:[ _/]([^ _/]+)|)|)|)(?:[/\\\\]1\\.0 | V|/| +)\\d+\\.\\d[\\d\\.]*(?: *Build|\\))',
      'device_replacement' => 'HTC $1 $2 $3 $4',
      'brand_replacement' => 'HTC',
      'model_replacement' => '$1 $2 $3 $4',
    ),
    166 =>
    array (
      'regex' => '; *(?:(?:HTC|htc)(?:_blocked|)[ _/])+([^ _/;]+)(?: *Build|[;\\)]| - )',
      'device_replacement' => 'HTC $1',
      'brand_replacement' => 'HTC',
      'model_replacement' => '$1',
    ),
    167 =>
    array (
      'regex' => '; *(?:(?:HTC|htc)(?:_blocked|)[ _/])+([^ _/]+)(?:[ _/]([^ _/;\\)]+)|)(?: *Build|[;\\)]| - )',
      'device_replacement' => 'HTC $1 $2',
      'brand_replacement' => 'HTC',
      'model_replacement' => '$1 $2',
    ),
    168 =>
    array (
      'regex' => '; *(?:(?:HTC|htc)(?:_blocked|)[ _/])+([^ _/]+)(?:[ _/]([^ _/]+)(?:[ _/]([^ _/;\\)]+)|)|)(?: *Build|[;\\)]| - )',
      'device_replacement' => 'HTC $1 $2 $3',
      'brand_replacement' => 'HTC',
      'model_replacement' => '$1 $2 $3',
    ),
    169 =>
    array (
      'regex' => '; *(?:(?:HTC|htc)(?:_blocked|)[ _/])+([^ _/]+)(?:[ _/]([^ _/]+)(?:[ _/]([^ _/]+)(?:[ _/]([^ /;]+)|)|)|)(?: *Build|[;\\)]| - )',
      'device_replacement' => 'HTC $1 $2 $3 $4',
      'brand_replacement' => 'HTC',
      'model_replacement' => '$1 $2 $3 $4',
    ),
    170 =>
    array (
      'regex' => 'HTC Streaming Player [^\\/]*/[^\\/]*/ htc_([^/]+) /',
      'device_replacement' => 'HTC $1',
      'brand_replacement' => 'HTC',
      'model_replacement' => '$1',
    ),
    171 =>
    array (
      'regex' => '(?:[;,] *|^)(?:htccn_chs-|)HTC[ _-]?([^;]+?)(?: *Build|clay|Android|-?Mozilla| Opera| Profile| UNTRUSTED|[;/\\(\\)]|$)',
      'regex_flag' => 'i',
      'device_replacement' => 'HTC $1',
      'brand_replacement' => 'HTC',
      'model_replacement' => '$1',
    ),
    172 =>
    array (
      'regex' => '; *(A6277|ADR6200|ADR6300|ADR6350|ADR6400[A-Z]*|ADR6425[A-Z]*|APX515CKT|ARIA|Desire[^_ ]*|Dream|EndeavorU|Eris|Evo|Flyer|HD2|Hero|HERO200|Hero CDMA|HTL21|Incredible|Inspire[A-Z0-9]*|Legend|Liberty|Nexus ?(?:One|HD2)|One|One S C2|One[ _]?(?:S|V|X\\+?)\\w*|PC36100|PG06100|PG86100|S31HT|Sensation|Wildfire)(?: Build|[/;\\(\\)])',
      'regex_flag' => 'i',
      'device_replacement' => 'HTC $1',
      'brand_replacement' => 'HTC',
      'model_replacement' => '$1',
    ),
    173 =>
    array (
      'regex' => '; *(ADR6200|ADR6400L|ADR6425LVW|Amaze|DesireS?|EndeavorU|Eris|EVO|Evo\\d[A-Z]+|HD2|IncredibleS?|Inspire[A-Z0-9]*|Inspire[A-Z0-9]*|Sensation[A-Z0-9]*|Wildfire)[ _-](.+?)(?:[/;\\)]|Build|MIUI|1\\.0)',
      'regex_flag' => 'i',
      'device_replacement' => 'HTC $1 $2',
      'brand_replacement' => 'HTC',
      'model_replacement' => '$1 $2',
    ),
    174 =>
    array (
      'regex' => '; *HYUNDAI (T\\d[^/]*)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Hyundai $1',
      'brand_replacement' => 'Hyundai',
      'model_replacement' => '$1',
    ),
    175 =>
    array (
      'regex' => '; *HYUNDAI ([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Hyundai $1',
      'brand_replacement' => 'Hyundai',
      'model_replacement' => '$1',
    ),
    176 =>
    array (
      'regex' => '; *(X700|Hold X|MB-6900)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Hyundai $1',
      'brand_replacement' => 'Hyundai',
      'model_replacement' => '$1',
    ),
    177 =>
    array (
      'regex' => '; *(?:iBall[ _\\-]|)(Andi)[ _]?(\\d[^;/]*)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'iBall',
      'model_replacement' => '$1 $2',
    ),
    178 =>
    array (
      'regex' => '; *(IBall)(?:[ _]([^;/]+?)|)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'iBall',
      'model_replacement' => '$2',
    ),
    179 =>
    array (
      'regex' => '; *(NT-\\d+[^ ;/]*|Net[Tt]AB [^;/]+|Mercury [A-Z]+|iconBIT)(?: S/N:[^;/]+|)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'IconBIT',
      'model_replacement' => '$1',
    ),
    180 =>
    array (
      'regex' => '; *(IMO)[ _]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'IMO',
      'model_replacement' => '$2',
    ),
    181 =>
    array (
      'regex' => '; *i-?mobile[ _]([^/]+)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => 'i-mobile $1',
      'brand_replacement' => 'imobile',
      'model_replacement' => '$1',
    ),
    182 =>
    array (
      'regex' => '; *(i-(?:style|note)[^/]*)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => 'i-mobile $1',
      'brand_replacement' => 'imobile',
      'model_replacement' => '$1',
    ),
    183 =>
    array (
      'regex' => '; *(ImPAD) ?(\\d+(?:.)*?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Impression',
      'model_replacement' => '$1 $2',
    ),
    184 =>
    array (
      'regex' => '; *(Infinix)[ _]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Infinix',
      'model_replacement' => '$2',
    ),
    185 =>
    array (
      'regex' => '; *(Informer)[ \\-]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Informer',
      'model_replacement' => '$2',
    ),
    186 =>
    array (
      'regex' => '; *(TAB) ?([78][12]4)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Intenso $1',
      'brand_replacement' => 'Intenso',
      'model_replacement' => '$1 $2',
    ),
    187 =>
    array (
      'regex' => '; *(?:Intex[ _]|)(AQUA|Aqua)([ _\\.\\-])([^;/]+?) *(?:Build|;)',
      'device_replacement' => '$1$2$3',
      'brand_replacement' => 'Intex',
      'model_replacement' => '$1 $3',
    ),
    188 =>
    array (
      'regex' => '; *(?:INTEX|Intex)(?:[_ ]([^\\ _;/]+))(?:[_ ]([^\\ _;/]+)|) *(?:Build|;)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Intex',
      'model_replacement' => '$1 $2',
    ),
    189 =>
    array (
      'regex' => '; *([iI]Buddy)[ _]?(Connect)(?:_|\\?_| |)([^;/]*) *(?:Build|;)',
      'device_replacement' => '$1 $2 $3',
      'brand_replacement' => 'Intex',
      'model_replacement' => 'iBuddy $2 $3',
    ),
    190 =>
    array (
      'regex' => '; *(I-Buddy)[ _]([^;/]+?) *(?:Build|;)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Intex',
      'model_replacement' => 'iBuddy $2',
    ),
    191 =>
    array (
      'regex' => '; *(iOCEAN) ([^/]+)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'iOCEAN',
      'model_replacement' => '$2',
    ),
    192 =>
    array (
      'regex' => '; *(TP\\d+(?:\\.\\d+|)\\-\\d[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'ionik $1',
      'brand_replacement' => 'ionik',
      'model_replacement' => '$1',
    ),
    193 =>
    array (
      'regex' => '; *(M702pro)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Iru',
      'model_replacement' => '$1',
    ),
    194 =>
    array (
      'regex' => '; *(DE88Plus|MD70)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Ivio',
      'model_replacement' => '$1',
    ),
    195 =>
    array (
      'regex' => '; *IVIO[_\\-]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Ivio',
      'model_replacement' => '$1',
    ),
    196 =>
    array (
      'regex' => '; *(TPC-\\d+|JAY-TECH)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Jaytech',
      'model_replacement' => '$1',
    ),
    197 =>
    array (
      'regex' => '; *(JY-[^;/]+|G[234]S?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Jiayu',
      'model_replacement' => '$1',
    ),
    198 =>
    array (
      'regex' => '; *(JXD)[ _\\-]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'JXD',
      'model_replacement' => '$2',
    ),
    199 =>
    array (
      'regex' => '; *Karbonn[ _]?([^;/]+) *(?:Build|;)',
      'regex_flag' => 'i',
      'device_replacement' => '$1',
      'brand_replacement' => 'Karbonn',
      'model_replacement' => '$1',
    ),
    200 =>
    array (
      'regex' => '; *([^;]+) Build/Karbonn',
      'device_replacement' => '$1',
      'brand_replacement' => 'Karbonn',
      'model_replacement' => '$1',
    ),
    201 =>
    array (
      'regex' => '; *(A11|A39|A37|A34|ST8|ST10|ST7|Smart Tab3|Smart Tab2|Titanium S\\d) +Build',
      'device_replacement' => '$1',
      'brand_replacement' => 'Karbonn',
      'model_replacement' => '$1',
    ),
    202 =>
    array (
      'regex' => '; *(IS01|IS03|IS05|IS\\d{2}SH)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Sharp',
      'model_replacement' => '$1',
    ),
    203 =>
    array (
      'regex' => '; *(IS04)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Regza',
      'model_replacement' => '$1',
    ),
    204 =>
    array (
      'regex' => '; *(IS06|IS\\d{2}PT)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Pantech',
      'model_replacement' => '$1',
    ),
    205 =>
    array (
      'regex' => '; *(IS11S)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'SonyEricsson',
      'model_replacement' => 'Xperia Acro',
    ),
    206 =>
    array (
      'regex' => '; *(IS11CA)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Casio',
      'model_replacement' => 'GzOne $1',
    ),
    207 =>
    array (
      'regex' => '; *(IS11LG)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'LG',
      'model_replacement' => 'Optimus X',
    ),
    208 =>
    array (
      'regex' => '; *(IS11N)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Medias',
      'model_replacement' => '$1',
    ),
    209 =>
    array (
      'regex' => '; *(IS11PT)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Pantech',
      'model_replacement' => 'MIRACH',
    ),
    210 =>
    array (
      'regex' => '; *(IS12F)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Fujitsu',
      'model_replacement' => 'Arrows ES',
    ),
    211 =>
    array (
      'regex' => '; *(IS12M)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Motorola',
      'model_replacement' => 'XT909',
    ),
    212 =>
    array (
      'regex' => '; *(IS12S)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'SonyEricsson',
      'model_replacement' => 'Xperia Acro HD',
    ),
    213 =>
    array (
      'regex' => '; *(ISW11F)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Fujitsu',
      'model_replacement' => 'Arrowz Z',
    ),
    214 =>
    array (
      'regex' => '; *(ISW11HT)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'HTC',
      'model_replacement' => 'EVO',
    ),
    215 =>
    array (
      'regex' => '; *(ISW11K)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Kyocera',
      'model_replacement' => 'DIGNO',
    ),
    216 =>
    array (
      'regex' => '; *(ISW11M)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Motorola',
      'model_replacement' => 'Photon',
    ),
    217 =>
    array (
      'regex' => '; *(ISW11SC)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Samsung',
      'model_replacement' => 'GALAXY S II WiMAX',
    ),
    218 =>
    array (
      'regex' => '; *(ISW12HT)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'HTC',
      'model_replacement' => 'EVO 3D',
    ),
    219 =>
    array (
      'regex' => '; *(ISW13HT)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'HTC',
      'model_replacement' => 'J',
    ),
    220 =>
    array (
      'regex' => '; *(ISW?[0-9]{2}[A-Z]{0,2})(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'KDDI',
      'model_replacement' => '$1',
    ),
    221 =>
    array (
      'regex' => '; *(INFOBAR [^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'KDDI',
      'model_replacement' => '$1',
    ),
    222 =>
    array (
      'regex' => '; *(JOYPAD|Joypad)[ _]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Kingcom',
      'model_replacement' => '$1 $2',
    ),
    223 =>
    array (
      'regex' => '; *(Vox|VOX|Arc|K080)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => '$1',
      'brand_replacement' => 'Kobo',
      'model_replacement' => '$1',
    ),
    224 =>
    array (
      'regex' => '\\b(Kobo Touch)\\b',
      'device_replacement' => '$1',
      'brand_replacement' => 'Kobo',
      'model_replacement' => '$1',
    ),
    225 =>
    array (
      'regex' => '; *(K-Touch)[ _]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Ktouch',
      'model_replacement' => '$2',
    ),
    226 =>
    array (
      'regex' => '; *((?:EV|KM)-S\\d+[A-Z]?)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => '$1',
      'brand_replacement' => 'KTtech',
      'model_replacement' => '$1',
    ),
    227 =>
    array (
      'regex' => '; *(Zio|Hydro|Torque|Event|EVENT|Echo|Milano|Rise|URBANO PROGRESSO|WX04K|WX06K|WX10K|KYL21|101K|C5[12]\\d{2})(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Kyocera',
      'model_replacement' => '$1',
    ),
    228 =>
    array (
      'regex' => '; *(?:LAVA[ _]|)IRIS[ _\\-]?([^/;\\)]+) *(?:;|\\)|Build)',
      'regex_flag' => 'i',
      'device_replacement' => 'Iris $1',
      'brand_replacement' => 'Lava',
      'model_replacement' => 'Iris $1',
    ),
    229 =>
    array (
      'regex' => '; *LAVA[ _]([^;/]+) Build',
      'device_replacement' => '$1',
      'brand_replacement' => 'Lava',
      'model_replacement' => '$1',
    ),
    230 =>
    array (
      'regex' => '; *(?:(Aspire A1)|(?:LEMON|Lemon)[ _]([^;/]+))_?(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Lemon $1$2',
      'brand_replacement' => 'Lemon',
      'model_replacement' => '$1$2',
    ),
    231 =>
    array (
      'regex' => '; *(TAB-1012)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Lenco $1',
      'brand_replacement' => 'Lenco',
      'model_replacement' => '$1',
    ),
    232 =>
    array (
      'regex' => '; Lenco ([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Lenco $1',
      'brand_replacement' => 'Lenco',
      'model_replacement' => '$1',
    ),
    233 =>
    array (
      'regex' => '; *(A1_07|A2107A-H|S2005A-H|S1-37AH0) Build',
      'device_replacement' => '$1',
      'brand_replacement' => 'Lenovo',
      'model_replacement' => '$1',
    ),
    234 =>
    array (
      'regex' => '; *(Idea[Tp]ab)[ _]([^;/]+);? Build',
      'device_replacement' => 'Lenovo $1 $2',
      'brand_replacement' => 'Lenovo',
      'model_replacement' => '$1 $2',
    ),
    235 =>
    array (
      'regex' => '; *(Idea(?:Tab|pad)) ?([^;/]+) Build',
      'device_replacement' => 'Lenovo $1 $2',
      'brand_replacement' => 'Lenovo',
      'model_replacement' => '$1 $2',
    ),
    236 =>
    array (
      'regex' => '; *(ThinkPad) ?(Tablet) Build/',
      'device_replacement' => 'Lenovo $1 $2',
      'brand_replacement' => 'Lenovo',
      'model_replacement' => '$1 $2',
    ),
    237 =>
    array (
      'regex' => '; *(?:LNV-|)(?:=?[Ll]enovo[ _\\-]?|LENOVO[ _])(.+?)(?:Build|[;/\\)])',
      'device_replacement' => 'Lenovo $1',
      'brand_replacement' => 'Lenovo',
      'model_replacement' => '$1',
    ),
    238 =>
    array (
      'regex' => '[;,] (?:Vodafone |)(SmartTab) ?(II) ?(\\d+) Build/',
      'device_replacement' => 'Lenovo $1 $2 $3',
      'brand_replacement' => 'Lenovo',
      'model_replacement' => '$1 $2 $3',
    ),
    239 =>
    array (
      'regex' => '; *(?:Ideapad |)K1 Build/',
      'device_replacement' => 'Lenovo Ideapad K1',
      'brand_replacement' => 'Lenovo',
      'model_replacement' => 'Ideapad K1',
    ),
    240 =>
    array (
      'regex' => '; *(3GC101|3GW10[01]|A390) Build/',
      'device_replacement' => '$1',
      'brand_replacement' => 'Lenovo',
      'model_replacement' => '$1',
    ),
    241 =>
    array (
      'regex' => '\\b(?:Lenovo|LENOVO)+[ _\\-]?([^,;:/ ]+)',
      'device_replacement' => 'Lenovo $1',
      'brand_replacement' => 'Lenovo',
      'model_replacement' => '$1',
    ),
    242 =>
    array (
      'regex' => '; *(MFC\\d+)[A-Z]{2}([^;,/]*),?(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Lexibook',
      'model_replacement' => '$1$2',
    ),
    243 =>
    array (
      'regex' => '; *(E[34][0-9]{2}|LS[6-8][0-9]{2}|VS[6-9][0-9]+[^;/]+|Nexus 4|Nexus 5X?|GT540f?|Optimus (?:2X|G|4X HD)|OptimusX4HD) *(?:Build|;)',
      'device_replacement' => '$1',
      'brand_replacement' => 'LG',
      'model_replacement' => '$1',
    ),
    244 =>
    array (
      'regex' => '[;:] *(L-\\d+[A-Z]|LGL\\d+[A-Z]?)(?:/V\\d+|) *(?:Build|[;\\)])',
      'device_replacement' => '$1',
      'brand_replacement' => 'LG',
      'model_replacement' => '$1',
    ),
    245 =>
    array (
      'regex' => '; *(LG-)([A-Z]{1,2}\\d{2,}[^,;/\\)\\(]*?)(?:Build| V\\d+|[,;/\\)\\(]|$)',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'LG',
      'model_replacement' => '$2',
    ),
    246 =>
    array (
      'regex' => '; *(LG[ \\-]|LG)([^;/]+)[;/]? Build',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'LG',
      'model_replacement' => '$2',
    ),
    247 =>
    array (
      'regex' => '^(LG)-([^;/]+)/ Mozilla/.*; Android',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'LG',
      'model_replacement' => '$2',
    ),
    248 =>
    array (
      'regex' => '(Web0S); Linux/(SmartTV)',
      'device_replacement' => 'LG $1 $2',
      'brand_replacement' => 'LG',
      'model_replacement' => '$1 $2',
    ),
    249 =>
    array (
      'regex' => '; *((?:SMB|smb)[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Malata',
      'model_replacement' => '$1',
    ),
    250 =>
    array (
      'regex' => '; *(?:Malata|MALATA) ([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Malata',
      'model_replacement' => '$1',
    ),
    251 =>
    array (
      'regex' => '; *(MS[45][0-9]{3}|MID0[568][NS]?|MID[1-9]|MID[78]0[1-9]|MID970[1-9]|MID100[1-9])(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Manta',
      'model_replacement' => '$1',
    ),
    252 =>
    array (
      'regex' => '; *(M1052|M806|M9000|M9100|M9701|MID100|MID120|MID125|MID130|MID135|MID140|MID701|MID710|MID713|MID727|MID728|MID731|MID732|MID733|MID735|MID736|MID737|MID760|MID800|MID810|MID820|MID830|MID833|MID835|MID860|MID900|MID930|MID933|MID960|MID980)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Match',
      'model_replacement' => '$1',
    ),
    253 =>
    array (
      'regex' => '; *(GenxDroid7|MSD7.*?|AX\\d.*?|Tab 701|Tab 722)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Maxx $1',
      'brand_replacement' => 'Maxx',
      'model_replacement' => '$1',
    ),
    254 =>
    array (
      'regex' => '; *(M-PP[^;/]+|PhonePad ?\\d{2,}[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Mediacom $1',
      'brand_replacement' => 'Mediacom',
      'model_replacement' => '$1',
    ),
    255 =>
    array (
      'regex' => '; *(M-MP[^;/]+|SmartPad ?\\d{2,}[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Mediacom $1',
      'brand_replacement' => 'Mediacom',
      'model_replacement' => '$1',
    ),
    256 =>
    array (
      'regex' => '; *(?:MD_|)LIFETAB[ _]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => 'Medion Lifetab $1',
      'brand_replacement' => 'Medion',
      'model_replacement' => 'Lifetab $1',
    ),
    257 =>
    array (
      'regex' => '; *MEDION ([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Medion $1',
      'brand_replacement' => 'Medion',
      'model_replacement' => '$1',
    ),
    258 =>
    array (
      'regex' => '; *(M030|M031|M035|M040|M065|m9)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Meizu $1',
      'brand_replacement' => 'Meizu',
      'model_replacement' => '$1',
    ),
    259 =>
    array (
      'regex' => '; *(?:meizu_|MEIZU )(.+?) *(?:Build|[;\\)])',
      'device_replacement' => 'Meizu $1',
      'brand_replacement' => 'Meizu',
      'model_replacement' => '$1',
    ),
    260 =>
    array (
      'regex' => '; *(?:Micromax[ _](A111|A240)|(A111|A240)) Build',
      'regex_flag' => 'i',
      'device_replacement' => 'Micromax $1$2',
      'brand_replacement' => 'Micromax',
      'model_replacement' => '$1$2',
    ),
    261 =>
    array (
      'regex' => '; *Micromax[ _](A\\d{2,3}[^;/]*) Build',
      'regex_flag' => 'i',
      'device_replacement' => 'Micromax $1',
      'brand_replacement' => 'Micromax',
      'model_replacement' => '$1',
    ),
    262 =>
    array (
      'regex' => '; *(A\\d{2}|A[12]\\d{2}|A90S|A110Q) Build',
      'regex_flag' => 'i',
      'device_replacement' => 'Micromax $1',
      'brand_replacement' => 'Micromax',
      'model_replacement' => '$1',
    ),
    263 =>
    array (
      'regex' => '; *Micromax[ _](P\\d{3}[^;/]*) Build',
      'regex_flag' => 'i',
      'device_replacement' => 'Micromax $1',
      'brand_replacement' => 'Micromax',
      'model_replacement' => '$1',
    ),
    264 =>
    array (
      'regex' => '; *(P\\d{3}|P\\d{3}\\(Funbook\\)) Build',
      'regex_flag' => 'i',
      'device_replacement' => 'Micromax $1',
      'brand_replacement' => 'Micromax',
      'model_replacement' => '$1',
    ),
    265 =>
    array (
      'regex' => '; *(MITO)[ _\\-]?([^;/]+?)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Mito',
      'model_replacement' => '$2',
    ),
    266 =>
    array (
      'regex' => '; *(Cynus)[ _](F5|T\\d|.+?) *(?:Build|[;/\\)])',
      'regex_flag' => 'i',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Mobistel',
      'model_replacement' => '$1 $2',
    ),
    267 =>
    array (
      'regex' => '; *(MODECOM |)(FreeTab) ?([^;/]+?)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => '$1$2 $3',
      'brand_replacement' => 'Modecom',
      'model_replacement' => '$2 $3',
    ),
    268 =>
    array (
      'regex' => '; *(MODECOM )([^;/]+?)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Modecom',
      'model_replacement' => '$2',
    ),
    269 =>
    array (
      'regex' => '; *(MZ\\d{3}\\+?|MZ\\d{3} 4G|Xoom|XOOM[^;/]*) Build',
      'device_replacement' => 'Motorola $1',
      'brand_replacement' => 'Motorola',
      'model_replacement' => '$1',
    ),
    270 =>
    array (
      'regex' => '; *(Milestone )(XT[^;/]*) Build',
      'device_replacement' => 'Motorola $1$2',
      'brand_replacement' => 'Motorola',
      'model_replacement' => '$2',
    ),
    271 =>
    array (
      'regex' => '; *(Motoroi ?x|Droid X|DROIDX) Build',
      'regex_flag' => 'i',
      'device_replacement' => 'Motorola $1',
      'brand_replacement' => 'Motorola',
      'model_replacement' => 'DROID X',
    ),
    272 =>
    array (
      'regex' => '; *(Droid[^;/]*|DROID[^;/]*|Milestone[^;/]*|Photon|Triumph|Devour|Titanium) Build',
      'device_replacement' => 'Motorola $1',
      'brand_replacement' => 'Motorola',
      'model_replacement' => '$1',
    ),
    273 =>
    array (
      'regex' => '; *(A555|A85[34][^;/]*|A95[356]|ME[58]\\d{2}\\+?|ME600|ME632|ME722|MB\\d{3}\\+?|MT680|MT710|MT870|MT887|MT917|WX435|WX453|WX44[25]|XT\\d{3,4}[A-Z\\+]*|CL[iI]Q|CL[iI]Q XT) Build',
      'device_replacement' => '$1',
      'brand_replacement' => 'Motorola',
      'model_replacement' => '$1',
    ),
    274 =>
    array (
      'regex' => '; *(Motorola MOT-|Motorola[ _\\-]|MOT\\-?)([^;/]+) Build',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Motorola',
      'model_replacement' => '$2',
    ),
    275 =>
    array (
      'regex' => '; *(Moto[_ ]?|MOT\\-)([^;/]+) Build',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Motorola',
      'model_replacement' => '$2',
    ),
    276 =>
    array (
      'regex' => '; *((?:MP[DQ]C|MPG\\d{1,4}|MP\\d{3,4}|MID(?:(?:10[234]|114|43|7[247]|8[24]|7)C|8[01]1))[^;/]*)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Mpman',
      'model_replacement' => '$1',
    ),
    277 =>
    array (
      'regex' => '; *(?:MSI[ _]|)(Primo\\d+|Enjoy[ _\\-][^;/]+?)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => '$1',
      'brand_replacement' => 'Msi',
      'model_replacement' => '$1',
    ),
    278 =>
    array (
      'regex' => '; *Multilaser[ _]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Multilaser',
      'model_replacement' => '$1',
    ),
    279 =>
    array (
      'regex' => '; *(My)[_]?(Pad)[ _]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1$2 $3',
      'brand_replacement' => 'MyPhone',
      'model_replacement' => '$1$2 $3',
    ),
    280 =>
    array (
      'regex' => '; *(My)\\|?(Phone)[ _]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1$2 $3',
      'brand_replacement' => 'MyPhone',
      'model_replacement' => '$3',
    ),
    281 =>
    array (
      'regex' => '; *(A\\d+)[ _](Duo|)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'MyPhone',
      'model_replacement' => '$1 $2',
    ),
    282 =>
    array (
      'regex' => '; *(myTab[^;/]*)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Mytab',
      'model_replacement' => '$1',
    ),
    283 =>
    array (
      'regex' => '; *(NABI2?-)([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Nabi',
      'model_replacement' => '$2',
    ),
    284 =>
    array (
      'regex' => '; *(N-\\d+[CDE])(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Nec',
      'model_replacement' => '$1',
    ),
    285 =>
    array (
      'regex' => '; ?(NEC-)(.*?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Nec',
      'model_replacement' => '$2',
    ),
    286 =>
    array (
      'regex' => '; *(LT-NA7)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Nec',
      'model_replacement' => 'Lifetouch Note',
    ),
    287 =>
    array (
      'regex' => '; *(NXM\\d+[A-Za-z0-9_]*|Next\\d[A-Za-z0-9_ \\-]*|NEXT\\d[A-Za-z0-9_ \\-]*|Nextbook [A-Za-z0-9_ ]*|DATAM803HC|M805)(?: Build|[\\);])',
      'device_replacement' => '$1',
      'brand_replacement' => 'Nextbook',
      'model_replacement' => '$1',
    ),
    288 =>
    array (
      'regex' => '; *(Nokia)([ _\\-]*)([^;/]*) Build',
      'regex_flag' => 'i',
      'device_replacement' => '$1$2$3',
      'brand_replacement' => 'Nokia',
      'model_replacement' => '$3',
    ),
    289 =>
    array (
      'regex' => '; *(Nook ?|Barnes & Noble Nook |BN )([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Nook',
      'model_replacement' => '$2',
    ),
    290 =>
    array (
      'regex' => '; *(NOOK |)(BNRV200|BNRV200A|BNTV250|BNTV250A|BNTV400|BNTV600|LogicPD Zoom2)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Nook',
      'model_replacement' => '$2',
    ),
    291 =>
    array (
      'regex' => '; Build/(Nook)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Nook',
      'model_replacement' => 'Tablet',
    ),
    292 =>
    array (
      'regex' => '; *(OP110|OliPad[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Olivetti $1',
      'brand_replacement' => 'Olivetti',
      'model_replacement' => '$1',
    ),
    293 =>
    array (
      'regex' => '; *OMEGA[ _\\-](MID[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Omega $1',
      'brand_replacement' => 'Omega',
      'model_replacement' => '$1',
    ),
    294 =>
    array (
      'regex' => '^(MID7500|MID\\d+) Mozilla/5\\.0 \\(iPad;',
      'device_replacement' => 'Omega $1',
      'brand_replacement' => 'Omega',
      'model_replacement' => '$1',
    ),
    295 =>
    array (
      'regex' => '; *((?:CIUS|cius)[^;/]*)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Openpeak $1',
      'brand_replacement' => 'Openpeak',
      'model_replacement' => '$1',
    ),
    296 =>
    array (
      'regex' => '; *(Find ?(?:5|7a)|R8[012]\\d{1,2}|T703\\d{0,1}|U70\\d{1,2}T?|X90\\d{1,2})(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Oppo $1',
      'brand_replacement' => 'Oppo',
      'model_replacement' => '$1',
    ),
    297 =>
    array (
      'regex' => '; *OPPO ?([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Oppo $1',
      'brand_replacement' => 'Oppo',
      'model_replacement' => '$1',
    ),
    298 =>
    array (
      'regex' => '; *(?:Odys\\-|ODYS\\-|ODYS )([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Odys $1',
      'brand_replacement' => 'Odys',
      'model_replacement' => '$1',
    ),
    299 =>
    array (
      'regex' => '; *(SELECT) ?(7)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Odys $1 $2',
      'brand_replacement' => 'Odys',
      'model_replacement' => '$1 $2',
    ),
    300 =>
    array (
      'regex' => '; *(PEDI)_(PLUS)_(W)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Odys $1 $2 $3',
      'brand_replacement' => 'Odys',
      'model_replacement' => '$1 $2 $3',
    ),
    301 =>
    array (
      'regex' => '; *(AEON|BRAVIO|FUSION|FUSION2IN1|Genio|EOS10|IEOS[^;/]*|IRON|Loox|LOOX|LOOX Plus|Motion|NOON|NOON_PRO|NEXT|OPOS|PEDI[^;/]*|PRIME[^;/]*|STUDYTAB|TABLO|Tablet-PC-4|UNO_X8|XELIO[^;/]*|Xelio ?\\d+ ?[Pp]ro|XENO10|XPRESS PRO)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Odys $1',
      'brand_replacement' => 'Odys',
      'model_replacement' => '$1',
    ),
    302 =>
    array (
      'regex' => '; (ONE [a-zA-Z]\\d+)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'OnePlus $1',
      'brand_replacement' => 'OnePlus',
      'model_replacement' => '$1',
    ),
    303 =>
    array (
      'regex' => '; (ONEPLUS [a-zA-Z]\\d+)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'OnePlus $1',
      'brand_replacement' => 'OnePlus',
      'model_replacement' => '$1',
    ),
    304 =>
    array (
      'regex' => '; *(TP-\\d+)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Orion $1',
      'brand_replacement' => 'Orion',
      'model_replacement' => '$1',
    ),
    305 =>
    array (
      'regex' => '; *(G100W?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'PackardBell $1',
      'brand_replacement' => 'PackardBell',
      'model_replacement' => '$1',
    ),
    306 =>
    array (
      'regex' => '; *(Panasonic)[_ ]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => '$1',
      'model_replacement' => '$2',
    ),
    307 =>
    array (
      'regex' => '; *(FZ-A1B|JT-B1)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Panasonic $1',
      'brand_replacement' => 'Panasonic',
      'model_replacement' => '$1',
    ),
    308 =>
    array (
      'regex' => '; *(dL1|DL1)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Panasonic $1',
      'brand_replacement' => 'Panasonic',
      'model_replacement' => '$1',
    ),
    309 =>
    array (
      'regex' => '; *(SKY[ _]|)(IM\\-[AT]\\d{3}[^;/]+).* Build/',
      'device_replacement' => 'Pantech $1$2',
      'brand_replacement' => 'Pantech',
      'model_replacement' => '$1$2',
    ),
    310 =>
    array (
      'regex' => '; *((?:ADR8995|ADR910L|ADR930L|ADR930VW|PTL21|P8000)(?: 4G|)) Build/',
      'device_replacement' => '$1',
      'brand_replacement' => 'Pantech',
      'model_replacement' => '$1',
    ),
    311 =>
    array (
      'regex' => '; *Pantech([^;/]+).* Build/',
      'device_replacement' => 'Pantech $1',
      'brand_replacement' => 'Pantech',
      'model_replacement' => '$1',
    ),
    312 =>
    array (
      'regex' => '; *(papyre)[ _\\-]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Papyre',
      'model_replacement' => '$2',
    ),
    313 =>
    array (
      'regex' => '; *(?:Touchlet )?(X10\\.[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Pearl $1',
      'brand_replacement' => 'Pearl',
      'model_replacement' => '$1',
    ),
    314 =>
    array (
      'regex' => '; PHICOMM (i800)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Phicomm $1',
      'brand_replacement' => 'Phicomm',
      'model_replacement' => '$1',
    ),
    315 =>
    array (
      'regex' => '; PHICOMM ([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Phicomm $1',
      'brand_replacement' => 'Phicomm',
      'model_replacement' => '$1',
    ),
    316 =>
    array (
      'regex' => '; *(FWS\\d{3}[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Phicomm $1',
      'brand_replacement' => 'Phicomm',
      'model_replacement' => '$1',
    ),
    317 =>
    array (
      'regex' => '; *(D633|D822|D833|T539|T939|V726|W335|W336|W337|W3568|W536|W5510|W626|W632|W6350|W6360|W6500|W732|W736|W737|W7376|W820|W832|W8355|W8500|W8510|W930)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Philips',
      'model_replacement' => '$1',
    ),
    318 =>
    array (
      'regex' => '; *(?:Philips|PHILIPS)[ _]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Philips $1',
      'brand_replacement' => 'Philips',
      'model_replacement' => '$1',
    ),
    319 =>
    array (
      'regex' => 'Android 4\\..*; *(M[12356789]|U[12368]|S[123])\\ ?(pro)?(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Pipo $1$2',
      'brand_replacement' => 'Pipo',
      'model_replacement' => '$1$2',
    ),
    320 =>
    array (
      'regex' => '; *(MOMO[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Ployer',
      'model_replacement' => '$1',
    ),
    321 =>
    array (
      'regex' => '; *(?:Polaroid[ _]|)((?:MIDC\\d{3,}|PMID\\d{2,}|PTAB\\d{3,})[^;/]*?)(\\/[^;/]*|)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Polaroid',
      'model_replacement' => '$1',
    ),
    322 =>
    array (
      'regex' => '; *(?:Polaroid )(Tablet)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Polaroid',
      'model_replacement' => '$1',
    ),
    323 =>
    array (
      'regex' => '; *(POMP)[ _\\-](.+?) *(?:Build|[;/\\)])',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Pomp',
      'model_replacement' => '$2',
    ),
    324 =>
    array (
      'regex' => '; *(TB07STA|TB10STA|TB07FTA|TB10FTA)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Positivo',
      'model_replacement' => '$1',
    ),
    325 =>
    array (
      'regex' => '; *(?:Positivo |)((?:YPY|Ypy)[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Positivo',
      'model_replacement' => '$1',
    ),
    326 =>
    array (
      'regex' => '; *(MOB-[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'POV',
      'model_replacement' => '$1',
    ),
    327 =>
    array (
      'regex' => '; *POV[ _\\-]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'POV $1',
      'brand_replacement' => 'POV',
      'model_replacement' => '$1',
    ),
    328 =>
    array (
      'regex' => '; *((?:TAB-PLAYTAB|TAB-PROTAB|PROTAB|PlayTabPro|Mobii[ _\\-]|TAB-P)[^;/]*)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'POV $1',
      'brand_replacement' => 'POV',
      'model_replacement' => '$1',
    ),
    329 =>
    array (
      'regex' => '; *(?:Prestigio |)((?:PAP|PMP)\\d[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Prestigio $1',
      'brand_replacement' => 'Prestigio',
      'model_replacement' => '$1',
    ),
    330 =>
    array (
      'regex' => '; *(PLT[0-9]{4}.*?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Proscan',
      'model_replacement' => '$1',
    ),
    331 =>
    array (
      'regex' => '; *(A2|A5|A8|A900)_?(Classic|)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Qmobile',
      'model_replacement' => '$1 $2',
    ),
    332 =>
    array (
      'regex' => '; *(Q[Mm]obile)_([^_]+)_([^_]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Qmobile $2 $3',
      'brand_replacement' => 'Qmobile',
      'model_replacement' => '$2 $3',
    ),
    333 =>
    array (
      'regex' => '; *(Q\\-?[Mm]obile)[_ ](A[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Qmobile $2',
      'brand_replacement' => 'Qmobile',
      'model_replacement' => '$2',
    ),
    334 =>
    array (
      'regex' => '; *(Q\\-Smart)[ _]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Qmobilevn',
      'model_replacement' => '$2',
    ),
    335 =>
    array (
      'regex' => '; *(Q\\-?[Mm]obile)[ _\\-](S[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Qmobilevn',
      'model_replacement' => '$2',
    ),
    336 =>
    array (
      'regex' => '; *(TA1013)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Quanta',
      'model_replacement' => '$1',
    ),
    337 =>
    array (
      'regex' => '; (RCT\\w+)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'RCA',
      'model_replacement' => '$1',
    ),
    338 =>
    array (
      'regex' => '; RCA (\\w+)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'RCA $1',
      'brand_replacement' => 'RCA',
      'model_replacement' => '$1',
    ),
    339 =>
    array (
      'regex' => '; *(RK\\d+),?(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Rockchip',
      'model_replacement' => '$1',
    ),
    340 =>
    array (
      'regex' => ' Build/(RK\\d+)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Rockchip',
      'model_replacement' => '$1',
    ),
    341 =>
    array (
      'regex' => '; *(SAMSUNG |Samsung |)((?:Galaxy (?:Note II|S\\d)|GT-I9082|GT-I9205|GT-N7\\d{3}|SM-N9005)[^;/]*)\\/?[^;/]* Build/',
      'device_replacement' => 'Samsung $1$2',
      'brand_replacement' => 'Samsung',
      'model_replacement' => '$2',
    ),
    342 =>
    array (
      'regex' => '; *(Google |)(Nexus [Ss](?: 4G|)) Build/',
      'device_replacement' => 'Samsung $1$2',
      'brand_replacement' => 'Samsung',
      'model_replacement' => '$2',
    ),
    343 =>
    array (
      'regex' => '; *(SAMSUNG |Samsung )([^\\/]*)\\/[^ ]* Build/',
      'device_replacement' => 'Samsung $2',
      'brand_replacement' => 'Samsung',
      'model_replacement' => '$2',
    ),
    344 =>
    array (
      'regex' => '; *(Galaxy(?: Ace| Nexus| S ?II+|Nexus S| with MCR 1.2| Mini Plus 4G|)) Build/',
      'device_replacement' => 'Samsung $1',
      'brand_replacement' => 'Samsung',
      'model_replacement' => '$1',
    ),
    345 =>
    array (
      'regex' => '; *(SAMSUNG[ _\\-]|)(?:SAMSUNG[ _\\-])([^;/]+) Build',
      'device_replacement' => 'Samsung $2',
      'brand_replacement' => 'Samsung',
      'model_replacement' => '$2',
    ),
    346 =>
    array (
      'regex' => '; *(SAMSUNG-|)(GT\\-[BINPS]\\d{4}[^\\/]*)(\\/[^ ]*) Build',
      'device_replacement' => 'Samsung $1$2$3',
      'brand_replacement' => 'Samsung',
      'model_replacement' => '$2',
    ),
    347 =>
    array (
      'regex' => '(?:; *|^)((?:GT\\-[BIiNPS]\\d{4}|I9\\d{2}0[A-Za-z\\+]?\\b)[^;/\\)]*?)(?:Build|Linux|MIUI|[;/\\)])',
      'device_replacement' => 'Samsung $1',
      'brand_replacement' => 'Samsung',
      'model_replacement' => '$1',
    ),
    348 =>
    array (
      'regex' => '; (SAMSUNG-)([A-Za-z0-9\\-]+).* Build/',
      'device_replacement' => 'Samsung $1$2',
      'brand_replacement' => 'Samsung',
      'model_replacement' => '$2',
    ),
    349 =>
    array (
      'regex' => '; *((?:SCH|SGH|SHV|SHW|SPH|SC|SM)\\-[A-Za-z0-9 ]+)(/?[^ ]*|) Build',
      'device_replacement' => 'Samsung $1',
      'brand_replacement' => 'Samsung',
      'model_replacement' => '$1',
    ),
    350 =>
    array (
      'regex' => '; *((?:SC)\\-[A-Za-z0-9 ]+)(/?[^ ]*|)\\)',
      'device_replacement' => 'Samsung $1',
      'brand_replacement' => 'Samsung',
      'model_replacement' => '$1',
    ),
    351 =>
    array (
      'regex' => ' ((?:SCH)\\-[A-Za-z0-9 ]+)(/?[^ ]*|) Build',
      'device_replacement' => 'Samsung $1',
      'brand_replacement' => 'Samsung',
      'model_replacement' => '$1',
    ),
    352 =>
    array (
      'regex' => '; *(Behold ?(?:2|II)|YP\\-G[^;/]+|EK-GC100|SCL21|I9300) Build',
      'device_replacement' => 'Samsung $1',
      'brand_replacement' => 'Samsung',
      'model_replacement' => '$1',
    ),
    353 =>
    array (
      'regex' => '; *((?:SCH|SGH|SHV|SHW|SPH|SC|SM)\\-[A-Za-z0-9]{5,6})[\\)]',
      'device_replacement' => 'Samsung $1',
      'brand_replacement' => 'Samsung',
      'model_replacement' => '$1',
    ),
    354 =>
    array (
      'regex' => '; *(SH\\-?\\d\\d[^;/]+|SBM\\d[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Sharp',
      'model_replacement' => '$1',
    ),
    355 =>
    array (
      'regex' => '; *(SHARP[ -])([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Sharp',
      'model_replacement' => '$2',
    ),
    356 =>
    array (
      'regex' => '; *(SPX[_\\-]\\d[^;/]*)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Simvalley',
      'model_replacement' => '$1',
    ),
    357 =>
    array (
      'regex' => '; *(SX7\\-PEARL\\.GmbH)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Simvalley',
      'model_replacement' => '$1',
    ),
    358 =>
    array (
      'regex' => '; *(SP[T]?\\-\\d{2}[^;/]*)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Simvalley',
      'model_replacement' => '$1',
    ),
    359 =>
    array (
      'regex' => '; *(SK\\-.*?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'SKtelesys',
      'model_replacement' => '$1',
    ),
    360 =>
    array (
      'regex' => '; *(?:SKYTEX|SX)-([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Skytex',
      'model_replacement' => '$1',
    ),
    361 =>
    array (
      'regex' => '; *(IMAGINE [^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Skytex',
      'model_replacement' => '$1',
    ),
    362 =>
    array (
      'regex' => '; *(SmartQ) ?([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => '$1',
      'model_replacement' => '$2',
    ),
    363 =>
    array (
      'regex' => '; *(WF7C|WF10C|SBT[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Smartbitt',
      'model_replacement' => '$1',
    ),
    364 =>
    array (
      'regex' => '; *(SBM(?:003SH|005SH|006SH|007SH|102SH)) Build',
      'device_replacement' => '$1',
      'brand_replacement' => 'Sharp',
      'model_replacement' => '$1',
    ),
    365 =>
    array (
      'regex' => '; *(003P|101P|101P11C|102P) Build',
      'device_replacement' => '$1',
      'brand_replacement' => 'Panasonic',
      'model_replacement' => '$1',
    ),
    366 =>
    array (
      'regex' => '; *(00\\dZ) Build/',
      'device_replacement' => '$1',
      'brand_replacement' => 'ZTE',
      'model_replacement' => '$1',
    ),
    367 =>
    array (
      'regex' => '; HTC(X06HT) Build',
      'device_replacement' => '$1',
      'brand_replacement' => 'HTC',
      'model_replacement' => '$1',
    ),
    368 =>
    array (
      'regex' => '; *(001HT|X06HT) Build',
      'device_replacement' => '$1',
      'brand_replacement' => 'HTC',
      'model_replacement' => '$1',
    ),
    369 =>
    array (
      'regex' => '; *(201M) Build',
      'device_replacement' => '$1',
      'brand_replacement' => 'Motorola',
      'model_replacement' => 'XT902',
    ),
    370 =>
    array (
      'regex' => '; *(ST\\d{4}.*)Build/ST',
      'device_replacement' => 'Trekstor $1',
      'brand_replacement' => 'Trekstor',
      'model_replacement' => '$1',
    ),
    371 =>
    array (
      'regex' => '; *(ST\\d{4}.*?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Trekstor $1',
      'brand_replacement' => 'Trekstor',
      'model_replacement' => '$1',
    ),
    372 =>
    array (
      'regex' => '; *(Sony ?Ericsson ?)([^;/]+) Build',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'SonyEricsson',
      'model_replacement' => '$2',
    ),
    373 =>
    array (
      'regex' => '; *((?:SK|ST|E|X|LT|MK|MT|WT)\\d{2}[a-z0-9]*(?:-o|)|R800i|U20i) Build',
      'device_replacement' => '$1',
      'brand_replacement' => 'SonyEricsson',
      'model_replacement' => '$1',
    ),
    374 =>
    array (
      'regex' => '; *(Xperia (?:A8|Arc|Acro|Active|Live with Walkman|Mini|Neo|Play|Pro|Ray|X\\d+)[^;/]*) Build',
      'regex_flag' => 'i',
      'device_replacement' => '$1',
      'brand_replacement' => 'SonyEricsson',
      'model_replacement' => '$1',
    ),
    375 =>
    array (
      'regex' => '; Sony (Tablet[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Sony $1',
      'brand_replacement' => 'Sony',
      'model_replacement' => '$1',
    ),
    376 =>
    array (
      'regex' => '; Sony ([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Sony $1',
      'brand_replacement' => 'Sony',
      'model_replacement' => '$1',
    ),
    377 =>
    array (
      'regex' => '; *(Sony)([A-Za-z0-9\\-]+)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => '$1',
      'model_replacement' => '$2',
    ),
    378 =>
    array (
      'regex' => '; *(Xperia [^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Sony',
      'model_replacement' => '$1',
    ),
    379 =>
    array (
      'regex' => '; *(C(?:1[0-9]|2[0-9]|53|55|6[0-9])[0-9]{2}|D[25]\\d{3}|D6[56]\\d{2})(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Sony',
      'model_replacement' => '$1',
    ),
    380 =>
    array (
      'regex' => '; *(SGP\\d{3}|SGPT\\d{2})(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Sony',
      'model_replacement' => '$1',
    ),
    381 =>
    array (
      'regex' => '; *(NW-Z1000Series)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Sony',
      'model_replacement' => '$1',
    ),
    382 =>
    array (
      'regex' => 'PLAYSTATION 3',
      'device_replacement' => 'PlayStation 3',
      'brand_replacement' => 'Sony',
      'model_replacement' => 'PlayStation 3',
    ),
    383 =>
    array (
      'regex' => '(PlayStation (?:Portable|Vita|\\d+))',
      'device_replacement' => '$1',
      'brand_replacement' => 'Sony',
      'model_replacement' => '$1',
    ),
    384 =>
    array (
      'regex' => '; *((?:CSL_Spice|Spice|SPICE|CSL)[ _\\-]?|)([Mm][Ii])([ _\\-]|)(\\d{3}[^;/]*)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1$2$3$4',
      'brand_replacement' => 'Spice',
      'model_replacement' => 'Mi$4',
    ),
    385 =>
    array (
      'regex' => '; *(Sprint )(.+?) *(?:Build|[;/])',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Sprint',
      'model_replacement' => '$2',
    ),
    386 =>
    array (
      'regex' => '\\b(Sprint)[: ]([^;,/ ]+)',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Sprint',
      'model_replacement' => '$2',
    ),
    387 =>
    array (
      'regex' => '; *(TAGI[ ]?)(MID) ?([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1$2$3',
      'brand_replacement' => 'Tagi',
      'model_replacement' => '$2$3',
    ),
    388 =>
    array (
      'regex' => '; *(Oyster500|Opal 800)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Tecmobile $1',
      'brand_replacement' => 'Tecmobile',
      'model_replacement' => '$1',
    ),
    389 =>
    array (
      'regex' => '; *(TECNO[ _])([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Tecno',
      'model_replacement' => '$2',
    ),
    390 =>
    array (
      'regex' => '; *Android for (Telechips|Techvision) ([^ ]+) ',
      'regex_flag' => 'i',
      'device_replacement' => '$1 $2',
      'brand_replacement' => '$1',
      'model_replacement' => '$2',
    ),
    391 =>
    array (
      'regex' => '; *(T-Hub2)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Telstra',
      'model_replacement' => '$1',
    ),
    392 =>
    array (
      'regex' => '; *(PAD) ?(100[12])(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Terra $1$2',
      'brand_replacement' => 'Terra',
      'model_replacement' => '$1$2',
    ),
    393 =>
    array (
      'regex' => '; *(T[BM]-\\d{3}[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Texet',
      'model_replacement' => '$1',
    ),
    394 =>
    array (
      'regex' => '; *(tolino [^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Thalia',
      'model_replacement' => '$1',
    ),
    395 =>
    array (
      'regex' => '; *Build/.* (TOLINO_BROWSER)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Thalia',
      'model_replacement' => 'Tolino Shine',
    ),
    396 =>
    array (
      'regex' => '; *(?:CJ[ -])?(ThL|THL)[ -]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Thl',
      'model_replacement' => '$2',
    ),
    397 =>
    array (
      'regex' => '; *(T100|T200|T5|W100|W200|W8s)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Thl',
      'model_replacement' => '$1',
    ),
    398 =>
    array (
      'regex' => '; *(T-Mobile[ _]G2[ _]Touch) Build',
      'device_replacement' => '$1',
      'brand_replacement' => 'HTC',
      'model_replacement' => 'Hero',
    ),
    399 =>
    array (
      'regex' => '; *(T-Mobile[ _]G2) Build',
      'device_replacement' => '$1',
      'brand_replacement' => 'HTC',
      'model_replacement' => 'Desire Z',
    ),
    400 =>
    array (
      'regex' => '; *(T-Mobile myTouch Q) Build',
      'device_replacement' => '$1',
      'brand_replacement' => 'Huawei',
      'model_replacement' => 'U8730',
    ),
    401 =>
    array (
      'regex' => '; *(T-Mobile myTouch) Build',
      'device_replacement' => '$1',
      'brand_replacement' => 'Huawei',
      'model_replacement' => 'U8680',
    ),
    402 =>
    array (
      'regex' => '; *(T-Mobile_Espresso) Build',
      'device_replacement' => '$1',
      'brand_replacement' => 'HTC',
      'model_replacement' => 'Espresso',
    ),
    403 =>
    array (
      'regex' => '; *(T-Mobile G1) Build',
      'device_replacement' => '$1',
      'brand_replacement' => 'HTC',
      'model_replacement' => 'Dream',
    ),
    404 =>
    array (
      'regex' => '\\b(T-Mobile ?|)(myTouch)[ _]?([34]G)[ _]?([^\\/]*) (?:Mozilla|Build)',
      'device_replacement' => '$1$2 $3 $4',
      'brand_replacement' => 'HTC',
      'model_replacement' => '$2 $3 $4',
    ),
    405 =>
    array (
      'regex' => '\\b(T-Mobile)_([^_]+)_(.*) Build',
      'device_replacement' => '$1 $2 $3',
      'brand_replacement' => 'Tmobile',
      'model_replacement' => '$2 $3',
    ),
    406 =>
    array (
      'regex' => '\\b(T-Mobile)[_ ]?(.*?)Build',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Tmobile',
      'model_replacement' => '$2',
    ),
    407 =>
    array (
      'regex' => ' (ATP[0-9]{4})(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Tomtec',
      'model_replacement' => '$1',
    ),
    408 =>
    array (
      'regex' => ' *(TOOKY)[ _\\-]([^;/]+?) ?(?:Build|;)',
      'regex_flag' => 'i',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Tooky',
      'model_replacement' => '$2',
    ),
    409 =>
    array (
      'regex' => '\\b(TOSHIBA_AC_AND_AZ|TOSHIBA_FOLIO_AND_A|FOLIO_AND_A)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Toshiba',
      'model_replacement' => 'Folio 100',
    ),
    410 =>
    array (
      'regex' => '; *([Ff]olio ?100)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Toshiba',
      'model_replacement' => 'Folio 100',
    ),
    411 =>
    array (
      'regex' => '; *(AT[0-9]{2,3}(?:\\-A|LE\\-A|PE\\-A|SE|a|)|AT7-A|AT1S0|Hikari-iFrame/WDPF-[^;/]+|THRiVE|Thrive)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Toshiba $1',
      'brand_replacement' => 'Toshiba',
      'model_replacement' => '$1',
    ),
    412 =>
    array (
      'regex' => '; *(TM-MID\\d+[^;/]+|TOUCHMATE|MID-750)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Touchmate',
      'model_replacement' => '$1',
    ),
    413 =>
    array (
      'regex' => '; *(TM-SM\\d+[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Touchmate',
      'model_replacement' => '$1',
    ),
    414 =>
    array (
      'regex' => '; *(A10 [Bb]asic2?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Treq',
      'model_replacement' => '$1',
    ),
    415 =>
    array (
      'regex' => '; *(TREQ[ _\\-])([^;/]+?)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Treq',
      'model_replacement' => '$2',
    ),
    416 =>
    array (
      'regex' => '; *(X-?5|X-?3)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Umeox',
      'model_replacement' => '$1',
    ),
    417 =>
    array (
      'regex' => '; *(A502\\+?|A936|A603|X1|X2)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Umeox',
      'model_replacement' => '$1',
    ),
    418 =>
    array (
      'regex' => '(TOUCH(?:TAB|PAD).+?)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => 'Versus $1',
      'brand_replacement' => 'Versus',
      'model_replacement' => '$1',
    ),
    419 =>
    array (
      'regex' => '(VERTU) ([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Vertu',
      'model_replacement' => '$2',
    ),
    420 =>
    array (
      'regex' => '; *(Videocon)[ _\\-]([^;/]+?) *(?:Build|;)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'Videocon',
      'model_replacement' => '$2',
    ),
    421 =>
    array (
      'regex' => ' (VT\\d{2}[A-Za-z]*)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Videocon',
      'model_replacement' => '$1',
    ),
    422 =>
    array (
      'regex' => '; *((?:ViewPad|ViewPhone|VSD)[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Viewsonic',
      'model_replacement' => '$1',
    ),
    423 =>
    array (
      'regex' => '; *(ViewSonic-)([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'Viewsonic',
      'model_replacement' => '$2',
    ),
    424 =>
    array (
      'regex' => '; *(GTablet.*?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Viewsonic',
      'model_replacement' => '$1',
    ),
    425 =>
    array (
      'regex' => '; *([Vv]ivo)[ _]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'vivo',
      'model_replacement' => '$2',
    ),
    426 =>
    array (
      'regex' => '(Vodafone) (.*?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => '$1',
      'model_replacement' => '$2',
    ),
    427 =>
    array (
      'regex' => '; *(?:Walton[ _\\-]|)(Primo[ _\\-][^;/]+?)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => 'Walton $1',
      'brand_replacement' => 'Walton',
      'model_replacement' => '$1',
    ),
    428 =>
    array (
      'regex' => '; *(?:WIKO[ \\-]|)(CINK\\+?|BARRY|BLOOM|DARKFULL|DARKMOON|DARKNIGHT|DARKSIDE|FIZZ|HIGHWAY|IGGY|OZZY|RAINBOW|STAIRWAY|SUBLIM|WAX|CINK [^;/]+?)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => 'Wiko $1',
      'brand_replacement' => 'Wiko',
      'model_replacement' => '$1',
    ),
    429 =>
    array (
      'regex' => '; *WellcoM-([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Wellcom $1',
      'brand_replacement' => 'Wellcom',
      'model_replacement' => '$1',
    ),
    430 =>
    array (
      'regex' => '(?:(WeTab)-Browser|; (wetab) Build)',
      'device_replacement' => '$1',
      'brand_replacement' => 'WeTab',
      'model_replacement' => 'WeTab',
    ),
    431 =>
    array (
      'regex' => '; *(AT-AS[^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Wolfgang $1',
      'brand_replacement' => 'Wolfgang',
      'model_replacement' => '$1',
    ),
    432 =>
    array (
      'regex' => '; *(?:Woxter|Wxt) ([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Woxter $1',
      'brand_replacement' => 'Woxter',
      'model_replacement' => '$1',
    ),
    433 =>
    array (
      'regex' => '; *(?:Xenta |Luna |)(TAB[234][0-9]{2}|TAB0[78]-\\d{3}|TAB0?9-\\d{3}|TAB1[03]-\\d{3}|SMP\\d{2}-\\d{3})(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Yarvik $1',
      'brand_replacement' => 'Yarvik',
      'model_replacement' => '$1',
    ),
    434 =>
    array (
      'regex' => '; *([A-Z]{2,4})(M\\d{3,}[A-Z]{2})([^;\\)\\/]*)(?: Build|[;\\)])',
      'device_replacement' => 'Yifang $1$2$3',
      'brand_replacement' => 'Yifang',
      'model_replacement' => '$2',
    ),
    435 =>
    array (
      'regex' => '; *((Mi|MI|HM|MI-ONE|Redmi)[ -](NOTE |Note |)[^;/]*) (Build|MIUI)/',
      'device_replacement' => 'XiaoMi $1',
      'brand_replacement' => 'XiaoMi',
      'model_replacement' => '$1',
    ),
    436 =>
    array (
      'regex' => '; *((Mi|MI|HM|MI-ONE|Redmi)[ -](NOTE |Note |)[^;/\\)]*)',
      'device_replacement' => 'XiaoMi $1',
      'brand_replacement' => 'XiaoMi',
      'model_replacement' => '$1',
    ),
    437 =>
    array (
      'regex' => '; *(MIX) (Build|MIUI)/',
      'device_replacement' => 'XiaoMi $1',
      'brand_replacement' => 'XiaoMi',
      'model_replacement' => '$1',
    ),
    438 =>
    array (
      'regex' => '; *((MIX) ([^;/]*)) (Build|MIUI)/',
      'device_replacement' => 'XiaoMi $1',
      'brand_replacement' => 'XiaoMi',
      'model_replacement' => '$1',
    ),
    439 =>
    array (
      'regex' => '; *XOLO[ _]([^;/]*tab.*)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => 'Xolo $1',
      'brand_replacement' => 'Xolo',
      'model_replacement' => '$1',
    ),
    440 =>
    array (
      'regex' => '; *XOLO[ _]([^;/]+?)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => 'Xolo $1',
      'brand_replacement' => 'Xolo',
      'model_replacement' => '$1',
    ),
    441 =>
    array (
      'regex' => '; *(q\\d0{2,3}[a-z]?)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => 'Xolo $1',
      'brand_replacement' => 'Xolo',
      'model_replacement' => '$1',
    ),
    442 =>
    array (
      'regex' => '; *(PAD ?[79]\\d+[^;/]*|TelePAD\\d+[^;/])(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'Xoro $1',
      'brand_replacement' => 'Xoro',
      'model_replacement' => '$1',
    ),
    443 =>
    array (
      'regex' => '; *(?:(?:ZOPO|Zopo)[ _]([^;/]+?)|(ZP ?(?:\\d{2}[^;/]+|C2))|(C[2379]))(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1$2$3',
      'brand_replacement' => 'Zopo',
      'model_replacement' => '$1$2$3',
    ),
    444 =>
    array (
      'regex' => '; *(ZiiLABS) (Zii[^;/]*)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'ZiiLabs',
      'model_replacement' => '$2',
    ),
    445 =>
    array (
      'regex' => '; *(Zii)_([^;/]*)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'ZiiLabs',
      'model_replacement' => '$2',
    ),
    446 =>
    array (
      'regex' => '; *(ARIZONA|(?:ATLAS|Atlas) W|D930|Grand (?:[SX][^;]*?|Era|Memo[^;]*?)|JOE|(?:Kis|KIS)\\b[^;]*?|Libra|Light [^;]*?|N8[056][01]|N850L|N8000|N9[15]\\d{2}|N9810|NX501|Optik|(?:Vip )Racer[^;]*?|RacerII|RACERII|San Francisco[^;]*?|V9[AC]|V55|V881|Z[679][0-9]{2}[A-z]?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'ZTE',
      'model_replacement' => '$1',
    ),
    447 =>
    array (
      'regex' => '; *([A-Z]\\d+)_USA_[^;]*(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'ZTE',
      'model_replacement' => '$1',
    ),
    448 =>
    array (
      'regex' => '; *(SmartTab\\d+)[^;]*(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'ZTE',
      'model_replacement' => '$1',
    ),
    449 =>
    array (
      'regex' => '; *(?:Blade|BLADE|ZTE-BLADE)([^;/]*)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'ZTE Blade$1',
      'brand_replacement' => 'ZTE',
      'model_replacement' => 'Blade$1',
    ),
    450 =>
    array (
      'regex' => '; *(?:Skate|SKATE|ZTE-SKATE)([^;/]*)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'ZTE Skate$1',
      'brand_replacement' => 'ZTE',
      'model_replacement' => 'Skate$1',
    ),
    451 =>
    array (
      'regex' => '; *(Orange |Optimus )(Monte Carlo|San Francisco)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1$2',
      'brand_replacement' => 'ZTE',
      'model_replacement' => '$1$2',
    ),
    452 =>
    array (
      'regex' => '; *(?:ZXY-ZTE_|ZTE\\-U |ZTE[\\- _]|ZTE-C[_ ])([^;/]+?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => 'ZTE $1',
      'brand_replacement' => 'ZTE',
      'model_replacement' => '$1',
    ),
    453 =>
    array (
      'regex' => '; (BASE) (lutea|Lutea 2|Tab[^;]*?)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => 'ZTE',
      'model_replacement' => '$1 $2',
    ),
    454 =>
    array (
      'regex' => '; (Avea inTouch 2|soft stone|tmn smart a7|Movistar[ _]Link)(?: Build|\\) AppleWebKit)',
      'regex_flag' => 'i',
      'device_replacement' => '$1',
      'brand_replacement' => 'ZTE',
      'model_replacement' => '$1',
    ),
    455 =>
    array (
      'regex' => '; *(vp9plus)\\)',
      'device_replacement' => '$1',
      'brand_replacement' => 'ZTE',
      'model_replacement' => '$1',
    ),
    456 =>
    array (
      'regex' => '; ?(Cloud[ _]Z5|z1000|Z99 2G|z99|z930|z999|z990|z909|Z919|z900)(?: Build|\\) AppleWebKit)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Zync',
      'model_replacement' => '$1',
    ),
    457 =>
    array (
      'regex' => '; ?(KFOT|Kindle Fire) Build\\b',
      'device_replacement' => 'Kindle Fire',
      'brand_replacement' => 'Amazon',
      'model_replacement' => 'Kindle Fire',
    ),
    458 =>
    array (
      'regex' => '; ?(KFOTE|Amazon Kindle Fire2) Build\\b',
      'device_replacement' => 'Kindle Fire 2',
      'brand_replacement' => 'Amazon',
      'model_replacement' => 'Kindle Fire 2',
    ),
    459 =>
    array (
      'regex' => '; ?(KFTT) Build\\b',
      'device_replacement' => 'Kindle Fire HD',
      'brand_replacement' => 'Amazon',
      'model_replacement' => 'Kindle Fire HD 7"',
    ),
    460 =>
    array (
      'regex' => '; ?(KFJWI) Build\\b',
      'device_replacement' => 'Kindle Fire HD 8.9" WiFi',
      'brand_replacement' => 'Amazon',
      'model_replacement' => 'Kindle Fire HD 8.9" WiFi',
    ),
    461 =>
    array (
      'regex' => '; ?(KFJWA) Build\\b',
      'device_replacement' => 'Kindle Fire HD 8.9" 4G',
      'brand_replacement' => 'Amazon',
      'model_replacement' => 'Kindle Fire HD 8.9" 4G',
    ),
    462 =>
    array (
      'regex' => '; ?(KFSOWI) Build\\b',
      'device_replacement' => 'Kindle Fire HD 7" WiFi',
      'brand_replacement' => 'Amazon',
      'model_replacement' => 'Kindle Fire HD 7" WiFi',
    ),
    463 =>
    array (
      'regex' => '; ?(KFTHWI) Build\\b',
      'device_replacement' => 'Kindle Fire HDX 7" WiFi',
      'brand_replacement' => 'Amazon',
      'model_replacement' => 'Kindle Fire HDX 7" WiFi',
    ),
    464 =>
    array (
      'regex' => '; ?(KFTHWA) Build\\b',
      'device_replacement' => 'Kindle Fire HDX 7" 4G',
      'brand_replacement' => 'Amazon',
      'model_replacement' => 'Kindle Fire HDX 7" 4G',
    ),
    465 =>
    array (
      'regex' => '; ?(KFAPWI) Build\\b',
      'device_replacement' => 'Kindle Fire HDX 8.9" WiFi',
      'brand_replacement' => 'Amazon',
      'model_replacement' => 'Kindle Fire HDX 8.9" WiFi',
    ),
    466 =>
    array (
      'regex' => '; ?(KFAPWA) Build\\b',
      'device_replacement' => 'Kindle Fire HDX 8.9" 4G',
      'brand_replacement' => 'Amazon',
      'model_replacement' => 'Kindle Fire HDX 8.9" 4G',
    ),
    467 =>
    array (
      'regex' => '; ?Amazon ([^;/]+) Build\\b',
      'device_replacement' => '$1',
      'brand_replacement' => 'Amazon',
      'model_replacement' => '$1',
    ),
    468 =>
    array (
      'regex' => '; ?(Kindle) Build\\b',
      'device_replacement' => 'Kindle',
      'brand_replacement' => 'Amazon',
      'model_replacement' => 'Kindle',
    ),
    469 =>
    array (
      'regex' => '; ?(Silk)/(\\d+)\\.(\\d+)(?:\\.([0-9\\-]+)|) Build\\b',
      'device_replacement' => 'Kindle Fire',
      'brand_replacement' => 'Amazon',
      'model_replacement' => 'Kindle Fire$2',
    ),
    470 =>
    array (
      'regex' => ' (Kindle)/(\\d+\\.\\d+)',
      'device_replacement' => 'Kindle',
      'brand_replacement' => 'Amazon',
      'model_replacement' => '$1 $2',
    ),
    471 =>
    array (
      'regex' => ' (Silk|Kindle)/(\\d+)\\.',
      'device_replacement' => 'Kindle',
      'brand_replacement' => 'Amazon',
      'model_replacement' => 'Kindle',
    ),
    472 =>
    array (
      'regex' => '(sprd)\\-([^/]+)/',
      'device_replacement' => '$1 $2',
      'brand_replacement' => '$1',
      'model_replacement' => '$2',
    ),
    473 =>
    array (
      'regex' => '; *(H\\d{2}00\\+?) Build',
      'device_replacement' => '$1',
      'brand_replacement' => 'Hero',
      'model_replacement' => '$1',
    ),
    474 =>
    array (
      'regex' => '; *(iphone|iPhone5) Build/',
      'device_replacement' => 'Xianghe $1',
      'brand_replacement' => 'Xianghe',
      'model_replacement' => '$1',
    ),
    475 =>
    array (
      'regex' => '; *(e\\d{4}[a-z]?_?v\\d+|v89_[^;/]+)[^;/]+ Build/',
      'device_replacement' => 'Xianghe $1',
      'brand_replacement' => 'Xianghe',
      'model_replacement' => '$1',
    ),
    476 =>
    array (
      'regex' => '\\bUSCC[_\\-]?([^ ;/\\)]+)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Cellular',
      'model_replacement' => '$1',
    ),
    477 =>
    array (
      'regex' => 'Windows Phone [^;]+; .*?IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?|)(?:ALCATEL)[^;]*; *([^;,\\)]+)',
      'device_replacement' => 'Alcatel $1',
      'brand_replacement' => 'Alcatel',
      'model_replacement' => '$1',
    ),
    478 =>
    array (
      'regex' => 'Windows Phone [^;]+; .*?IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?|WpsLondonTest; ?|)(?:ASUS|Asus)[^;]*; *([^;,\\)]+)',
      'device_replacement' => 'Asus $1',
      'brand_replacement' => 'Asus',
      'model_replacement' => '$1',
    ),
    479 =>
    array (
      'regex' => 'Windows Phone [^;]+; .*?IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?|)(?:DELL|Dell)[^;]*; *([^;,\\)]+)',
      'device_replacement' => 'Dell $1',
      'brand_replacement' => 'Dell',
      'model_replacement' => '$1',
    ),
    480 =>
    array (
      'regex' => 'Windows Phone [^;]+; .*?IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?|WpsLondonTest; ?|)(?:HTC|Htc|HTC_blocked[^;]*)[^;]*; *(?:HTC|)([^;,\\)]+)',
      'device_replacement' => 'HTC $1',
      'brand_replacement' => 'HTC',
      'model_replacement' => '$1',
    ),
    481 =>
    array (
      'regex' => 'Windows Phone [^;]+; .*?IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?|)(?:HUAWEI)[^;]*; *(?:HUAWEI |)([^;,\\)]+)',
      'device_replacement' => 'Huawei $1',
      'brand_replacement' => 'Huawei',
      'model_replacement' => '$1',
    ),
    482 =>
    array (
      'regex' => 'Windows Phone [^;]+; .*?IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?|)(?:LG|Lg)[^;]*; *(?:LG[ \\-]|)([^;,\\)]+)',
      'device_replacement' => 'LG $1',
      'brand_replacement' => 'LG',
      'model_replacement' => '$1',
    ),
    483 =>
    array (
      'regex' => 'Windows Phone [^;]+; .*?IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?|)(?:rv:11; |)(?:NOKIA|Nokia)[^;]*; *(?:NOKIA ?|Nokia ?|LUMIA ?|[Ll]umia ?|)(\\d{3,10}[^;\\)]*)',
      'device_replacement' => 'Lumia $1',
      'brand_replacement' => 'Nokia',
      'model_replacement' => 'Lumia $1',
    ),
    484 =>
    array (
      'regex' => 'Windows Phone [^;]+; .*?IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?|)(?:NOKIA|Nokia)[^;]*; *(RM-\\d{3,})',
      'device_replacement' => 'Nokia $1',
      'brand_replacement' => 'Nokia',
      'model_replacement' => '$1',
    ),
    485 =>
    array (
      'regex' => '(?:Windows Phone [^;]+; .*?IEMobile/[^;\\)]+[;\\)]|WPDesktop;) ?(?:ARM; ?Touch; ?|Touch; ?|)(?:NOKIA|Nokia)[^;]*; *(?:NOKIA ?|Nokia ?|LUMIA ?|[Ll]umia ?|)([^;\\)]+)',
      'device_replacement' => 'Nokia $1',
      'brand_replacement' => 'Nokia',
      'model_replacement' => '$1',
    ),
    486 =>
    array (
      'regex' => 'Windows Phone [^;]+; .*?IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?|)(?:Microsoft(?: Corporation|))[^;]*; *([^;,\\)]+)',
      'device_replacement' => 'Microsoft $1',
      'brand_replacement' => 'Microsoft',
      'model_replacement' => '$1',
    ),
    487 =>
    array (
      'regex' => 'Windows Phone [^;]+; .*?IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?|WpsLondonTest; ?|)(?:SAMSUNG)[^;]*; *(?:SAMSUNG |)([^;,\\.\\)]+)',
      'device_replacement' => 'Samsung $1',
      'brand_replacement' => 'Samsung',
      'model_replacement' => '$1',
    ),
    488 =>
    array (
      'regex' => 'Windows Phone [^;]+; .*?IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?|WpsLondonTest; ?|)(?:TOSHIBA|FujitsuToshibaMobileCommun)[^;]*; *([^;,\\)]+)',
      'device_replacement' => 'Toshiba $1',
      'brand_replacement' => 'Toshiba',
      'model_replacement' => '$1',
    ),
    489 =>
    array (
      'regex' => 'Windows Phone [^;]+; .*?IEMobile/[^;\\)]+[;\\)] ?(?:ARM; ?Touch; ?|Touch; ?|WpsLondonTest; ?|)([^;]+); *([^;,\\)]+)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => '$1',
      'model_replacement' => '$2',
    ),
    490 =>
    array (
      'regex' => '(?:^|; )SAMSUNG\\-([A-Za-z0-9\\-]+).* Bada/',
      'device_replacement' => 'Samsung $1',
      'brand_replacement' => 'Samsung',
      'model_replacement' => '$1',
    ),
    491 =>
    array (
      'regex' => '\\(Mobile; ALCATEL ?(One|ONE) ?(Touch|TOUCH) ?([^;/]+?)(?:/[^;]+|); rv:[^\\)]+\\) Gecko/[^\\/]+ Firefox/',
      'device_replacement' => 'Alcatel $1 $2 $3',
      'brand_replacement' => 'Alcatel',
      'model_replacement' => 'One Touch $3',
    ),
    492 =>
    array (
      'regex' => '\\(Mobile; (?:ZTE([^;]+)|(OpenC)); rv:[^\\)]+\\) Gecko/[^\\/]+ Firefox/',
      'device_replacement' => 'ZTE $1$2',
      'brand_replacement' => 'ZTE',
      'model_replacement' => '$1$2',
    ),
    493 =>
    array (
      'regex' => '\\(Mobile; ALCATEL([A-Za-z0-9\\-]+); rv:[^\\)]+\\) Gecko/[^\\/]+ Firefox/[^\\/]+ KaiOS/',
      'device_replacement' => 'Alcatel $1',
      'brand_replacement' => 'Alcatel',
      'model_replacement' => '$1',
    ),
    494 =>
    array (
      'regex' => '\\(Mobile; LYF\\/([A-Za-z0-9\\-]+)\\/.+;.+rv:[^\\)]+\\) Gecko/[^\\/]+ Firefox/[^\\/]+ KAIOS/',
      'device_replacement' => 'LYF $1',
      'brand_replacement' => 'LYF',
      'model_replacement' => '$1',
    ),
    495 =>
    array (
      'regex' => '\\(Mobile; Nokia_([A-Za-z0-9\\-]+)_.+; rv:[^\\)]+\\) Gecko/[^\\/]+ Firefox/[^\\/]+ KAIOS/',
      'device_replacement' => 'Nokia $1',
      'brand_replacement' => 'Nokia',
      'model_replacement' => '$1',
    ),
    496 =>
    array (
      'regex' => 'Nokia(N[0-9]+)([A-Za-z_\\-][A-Za-z0-9_\\-]*)',
      'device_replacement' => 'Nokia $1',
      'brand_replacement' => 'Nokia',
      'model_replacement' => '$1$2',
    ),
    497 =>
    array (
      'regex' => '(?:NOKIA|Nokia)(?:\\-| *)(?:([A-Za-z0-9]+)\\-[0-9a-f]{32}|([A-Za-z0-9\\-]+)(?:UCBrowser)|([A-Za-z0-9\\-]+))',
      'device_replacement' => 'Nokia $1$2$3',
      'brand_replacement' => 'Nokia',
      'model_replacement' => '$1$2$3',
    ),
    498 =>
    array (
      'regex' => 'Lumia ([A-Za-z0-9\\-]+)',
      'device_replacement' => 'Lumia $1',
      'brand_replacement' => 'Nokia',
      'model_replacement' => 'Lumia $1',
    ),
    499 =>
    array (
      'regex' => '\\(Symbian; U; S60 V5; [A-z]{2}\\-[A-z]{2}; (SonyEricsson|Samsung|Nokia|LG)([^;/]+?)\\)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => '$1',
      'model_replacement' => '$2',
    ),
    500 =>
    array (
      'regex' => '\\(Symbian(?:/3|); U; ([^;]+);',
      'device_replacement' => 'Nokia $1',
      'brand_replacement' => 'Nokia',
      'model_replacement' => '$1',
    ),
    501 =>
    array (
      'regex' => 'BB10; ([A-Za-z0-9\\- ]+)\\)',
      'device_replacement' => 'BlackBerry $1',
      'brand_replacement' => 'BlackBerry',
      'model_replacement' => '$1',
    ),
    502 =>
    array (
      'regex' => 'Play[Bb]ook.+RIM Tablet OS',
      'device_replacement' => 'BlackBerry Playbook',
      'brand_replacement' => 'BlackBerry',
      'model_replacement' => 'Playbook',
    ),
    503 =>
    array (
      'regex' => 'Black[Bb]erry ([0-9]+);',
      'device_replacement' => 'BlackBerry $1',
      'brand_replacement' => 'BlackBerry',
      'model_replacement' => '$1',
    ),
    504 =>
    array (
      'regex' => 'Black[Bb]erry([0-9]+)',
      'device_replacement' => 'BlackBerry $1',
      'brand_replacement' => 'BlackBerry',
      'model_replacement' => '$1',
    ),
    505 =>
    array (
      'regex' => 'Black[Bb]erry;',
      'device_replacement' => 'BlackBerry',
      'brand_replacement' => 'BlackBerry',
    ),
    506 =>
    array (
      'regex' => '(Pre|Pixi)/\\d+\\.\\d+',
      'device_replacement' => 'Palm $1',
      'brand_replacement' => 'Palm',
      'model_replacement' => '$1',
    ),
    507 =>
    array (
      'regex' => 'Palm([0-9]+)',
      'device_replacement' => 'Palm $1',
      'brand_replacement' => 'Palm',
      'model_replacement' => '$1',
    ),
    508 =>
    array (
      'regex' => 'Treo([A-Za-z0-9]+)',
      'device_replacement' => 'Palm Treo $1',
      'brand_replacement' => 'Palm',
      'model_replacement' => 'Treo $1',
    ),
    509 =>
    array (
      'regex' => 'webOS.*(P160U(?:NA|))/(\\d+).(\\d+)',
      'device_replacement' => 'HP Veer',
      'brand_replacement' => 'HP',
      'model_replacement' => 'Veer',
    ),
    510 =>
    array (
      'regex' => '(Touch[Pp]ad)/\\d+\\.\\d+',
      'device_replacement' => 'HP TouchPad',
      'brand_replacement' => 'HP',
      'model_replacement' => 'TouchPad',
    ),
    511 =>
    array (
      'regex' => 'HPiPAQ([A-Za-z0-9]+)/\\d+.\\d+',
      'device_replacement' => 'HP iPAQ $1',
      'brand_replacement' => 'HP',
      'model_replacement' => 'iPAQ $1',
    ),
    512 =>
    array (
      'regex' => 'PDA; (PalmOS)/sony/model ([a-z]+)/Revision',
      'device_replacement' => '$1',
      'brand_replacement' => 'Sony',
      'model_replacement' => '$1 $2',
    ),
    513 =>
    array (
      'regex' => '(Apple\\s?TV)',
      'device_replacement' => 'AppleTV',
      'brand_replacement' => 'Apple',
      'model_replacement' => 'AppleTV',
    ),
    514 =>
    array (
      'regex' => '(QtCarBrowser)',
      'device_replacement' => 'Tesla Model S',
      'brand_replacement' => 'Tesla',
      'model_replacement' => 'Model S',
    ),
    515 =>
    array (
      'regex' => '(iPhone|iPad|iPod)(\\d+,\\d+)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Apple',
      'model_replacement' => '$1$2',
    ),
    516 =>
    array (
      'regex' => '(iPad)(?:;| Simulator;)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Apple',
      'model_replacement' => '$1',
    ),
    517 =>
    array (
      'regex' => '(iPod)(?:;| touch;| Simulator;)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Apple',
      'model_replacement' => '$1',
    ),
    518 =>
    array (
      'regex' => '(iPhone)(?:;| Simulator;)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Apple',
      'model_replacement' => '$1',
    ),
    519 =>
    array (
      'regex' => '(Watch)(\\d+,\\d+)',
      'device_replacement' => 'Apple $1',
      'brand_replacement' => 'Apple',
      'model_replacement' => '$1$2',
    ),
    520 =>
    array (
      'regex' => '(Apple Watch)(?:;| Simulator;)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Apple',
      'model_replacement' => '$1',
    ),
    521 =>
    array (
      'regex' => '(HomePod)(?:;| Simulator;)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Apple',
      'model_replacement' => '$1',
    ),
    522 =>
    array (
      'regex' => 'iPhone',
      'device_replacement' => 'iPhone',
      'brand_replacement' => 'Apple',
      'model_replacement' => 'iPhone',
    ),
    523 =>
    array (
      'regex' => 'CFNetwork/.* Darwin/\\d.*\\(((?:Mac|iMac|PowerMac|PowerBook)[^\\d]*)(\\d+)(?:,|%2C)(\\d+)',
      'device_replacement' => '$1$2,$3',
      'brand_replacement' => 'Apple',
      'model_replacement' => '$1$2,$3',
    ),
    524 =>
    array (
      'regex' => 'CFNetwork/.* Darwin/\\d+\\.\\d+\\.\\d+ \\(x86_64\\)',
      'device_replacement' => 'Mac',
      'brand_replacement' => 'Apple',
      'model_replacement' => 'Mac',
    ),
    525 =>
    array (
      'regex' => 'CFNetwork/.* Darwin/\\d',
      'device_replacement' => 'iOS-Device',
      'brand_replacement' => 'Apple',
      'model_replacement' => 'iOS-Device',
    ),
    526 =>
    array (
      'regex' => 'Outlook-(iOS)/\\d+\\.\\d+\\.prod\\.iphone',
      'brand_replacement' => 'Apple',
      'device_replacement' => 'iPhone',
      'model_replacement' => 'iPhone',
    ),
    527 =>
    array (
      'regex' => 'acer_([A-Za-z0-9]+)_',
      'device_replacement' => 'Acer $1',
      'brand_replacement' => 'Acer',
      'model_replacement' => '$1',
    ),
    528 =>
    array (
      'regex' => '(?:ALCATEL|Alcatel)-([A-Za-z0-9\\-]+)',
      'device_replacement' => 'Alcatel $1',
      'brand_replacement' => 'Alcatel',
      'model_replacement' => '$1',
    ),
    529 =>
    array (
      'regex' => '(?:Amoi|AMOI)\\-([A-Za-z0-9]+)',
      'device_replacement' => 'Amoi $1',
      'brand_replacement' => 'Amoi',
      'model_replacement' => '$1',
    ),
    530 =>
    array (
      'regex' => '(?:; |\\/|^)((?:Transformer (?:Pad|Prime) |Transformer |PadFone[ _]?)[A-Za-z0-9]*)',
      'device_replacement' => 'Asus $1',
      'brand_replacement' => 'Asus',
      'model_replacement' => '$1',
    ),
    531 =>
    array (
      'regex' => '(?:asus.*?ASUS|Asus|ASUS|asus)[\\- ;]*((?:Transformer (?:Pad|Prime) |Transformer |Padfone |Nexus[ _]|)[A-Za-z0-9]+)',
      'device_replacement' => 'Asus $1',
      'brand_replacement' => 'Asus',
      'model_replacement' => '$1',
    ),
    532 =>
    array (
      'regex' => '(?:ASUS)_([A-Za-z0-9\\-]+)',
      'device_replacement' => 'Asus $1',
      'brand_replacement' => 'Asus',
      'model_replacement' => '$1',
    ),
    533 =>
    array (
      'regex' => '\\bBIRD[ \\-\\.]([A-Za-z0-9]+)',
      'device_replacement' => 'Bird $1',
      'brand_replacement' => 'Bird',
      'model_replacement' => '$1',
    ),
    534 =>
    array (
      'regex' => '\\bDell ([A-Za-z0-9]+)',
      'device_replacement' => 'Dell $1',
      'brand_replacement' => 'Dell',
      'model_replacement' => '$1',
    ),
    535 =>
    array (
      'regex' => 'DoCoMo/2\\.0 ([A-Za-z0-9]+)',
      'device_replacement' => 'DoCoMo $1',
      'brand_replacement' => 'DoCoMo',
      'model_replacement' => '$1',
    ),
    536 =>
    array (
      'regex' => '([A-Za-z0-9]+)_W;FOMA',
      'device_replacement' => 'DoCoMo $1',
      'brand_replacement' => 'DoCoMo',
      'model_replacement' => '$1',
    ),
    537 =>
    array (
      'regex' => '([A-Za-z0-9]+);FOMA',
      'device_replacement' => 'DoCoMo $1',
      'brand_replacement' => 'DoCoMo',
      'model_replacement' => '$1',
    ),
    538 =>
    array (
      'regex' => '\\b(?:HTC/|HTC/[a-z0-9]+/|)HTC[ _\\-;]? *(.*?)(?:-?Mozilla|fingerPrint|[;/\\(\\)]|$)',
      'device_replacement' => 'HTC $1',
      'brand_replacement' => 'HTC',
      'model_replacement' => '$1',
    ),
    539 =>
    array (
      'regex' => 'Huawei([A-Za-z0-9]+)',
      'device_replacement' => 'Huawei $1',
      'brand_replacement' => 'Huawei',
      'model_replacement' => '$1',
    ),
    540 =>
    array (
      'regex' => 'HUAWEI-([A-Za-z0-9]+)',
      'device_replacement' => 'Huawei $1',
      'brand_replacement' => 'Huawei',
      'model_replacement' => '$1',
    ),
    541 =>
    array (
      'regex' => 'HUAWEI ([A-Za-z0-9\\-]+)',
      'device_replacement' => 'Huawei $1',
      'brand_replacement' => 'Huawei',
      'model_replacement' => '$1',
    ),
    542 =>
    array (
      'regex' => 'vodafone([A-Za-z0-9]+)',
      'device_replacement' => 'Huawei Vodafone $1',
      'brand_replacement' => 'Huawei',
      'model_replacement' => 'Vodafone $1',
    ),
    543 =>
    array (
      'regex' => 'i\\-mate ([A-Za-z0-9]+)',
      'device_replacement' => 'i-mate $1',
      'brand_replacement' => 'i-mate',
      'model_replacement' => '$1',
    ),
    544 =>
    array (
      'regex' => 'Kyocera\\-([A-Za-z0-9]+)',
      'device_replacement' => 'Kyocera $1',
      'brand_replacement' => 'Kyocera',
      'model_replacement' => '$1',
    ),
    545 =>
    array (
      'regex' => 'KWC\\-([A-Za-z0-9]+)',
      'device_replacement' => 'Kyocera $1',
      'brand_replacement' => 'Kyocera',
      'model_replacement' => '$1',
    ),
    546 =>
    array (
      'regex' => 'Lenovo[_\\-]([A-Za-z0-9]+)',
      'device_replacement' => 'Lenovo $1',
      'brand_replacement' => 'Lenovo',
      'model_replacement' => '$1',
    ),
    547 =>
    array (
      'regex' => '(HbbTV)/[0-9]+\\.[0-9]+\\.[0-9]+ \\([^;]*; *(LG)E *; *([^;]*) *;[^;]*;[^;]*;\\)',
      'device_replacement' => '$1',
      'brand_replacement' => '$2',
      'model_replacement' => '$3',
    ),
    548 =>
    array (
      'regex' => '(HbbTV)/1\\.1\\.1.*CE-HTML/1\\.\\d;(Vendor/|)(THOM[^;]*?)[;\\s].{0,30}(LF[^;]+);?',
      'device_replacement' => '$1',
      'brand_replacement' => 'Thomson',
      'model_replacement' => '$4',
    ),
    549 =>
    array (
      'regex' => '(HbbTV)(?:/1\\.1\\.1|) ?(?: \\(;;;;;\\)|); *CE-HTML(?:/1\\.\\d|); *([^ ]+) ([^;]+);',
      'device_replacement' => '$1',
      'brand_replacement' => '$2',
      'model_replacement' => '$3',
    ),
    550 =>
    array (
      'regex' => '(HbbTV)/1\\.1\\.1 \\(;;;;;\\) Maple_2011',
      'device_replacement' => '$1',
      'brand_replacement' => 'Samsung',
    ),
    551 =>
    array (
      'regex' => '(HbbTV)/[0-9]+\\.[0-9]+\\.[0-9]+ \\([^;]*; *(?:CUS:([^;]*)|([^;]+)) *; *([^;]*) *;.*;',
      'device_replacement' => '$1',
      'brand_replacement' => '$2$3',
      'model_replacement' => '$4',
    ),
    552 =>
    array (
      'regex' => '(HbbTV)/[0-9]+\\.[0-9]+\\.[0-9]+',
      'device_replacement' => '$1',
    ),
    553 =>
    array (
      'regex' => 'LGE; (?:Media\\/|)([^;]*);[^;]*;[^;]*;?\\); "?LG NetCast(\\.TV|\\.Media|)-\\d+',
      'device_replacement' => 'NetCast$2',
      'brand_replacement' => 'LG',
      'model_replacement' => '$1',
    ),
    554 =>
    array (
      'regex' => 'InettvBrowser/[0-9]+\\.[0-9A-Z]+ \\([^;]*;(Sony)([^;]*);[^;]*;[^\\)]*\\)',
      'device_replacement' => 'Inettv',
      'brand_replacement' => '$1',
      'model_replacement' => '$2',
    ),
    555 =>
    array (
      'regex' => 'InettvBrowser/[0-9]+\\.[0-9A-Z]+ \\([^;]*;([^;]*);[^;]*;[^\\)]*\\)',
      'device_replacement' => 'Inettv',
      'brand_replacement' => 'Generic_Inettv',
      'model_replacement' => '$1',
    ),
    556 =>
    array (
      'regex' => '(?:InettvBrowser|TSBNetTV|NETTV|HBBTV)',
      'device_replacement' => 'Inettv',
      'brand_replacement' => 'Generic_Inettv',
    ),
    557 =>
    array (
      'regex' => 'Series60/\\d\\.\\d (LG)[\\-]?([A-Za-z0-9 \\-]+)',
      'device_replacement' => '$1 $2',
      'brand_replacement' => '$1',
      'model_replacement' => '$2',
    ),
    558 =>
    array (
      'regex' => '\\b(?:LGE[ \\-]LG\\-(?:AX|)|LGE |LGE?-LG|LGE?[ \\-]|LG[ /\\-]|lg[\\-])([A-Za-z0-9]+)\\b',
      'device_replacement' => 'LG $1',
      'brand_replacement' => 'LG',
      'model_replacement' => '$1',
    ),
    559 =>
    array (
      'regex' => '(?:^LG[\\-]?|^LGE[\\-/]?)([A-Za-z]+[0-9]+[A-Za-z]*)',
      'device_replacement' => 'LG $1',
      'brand_replacement' => 'LG',
      'model_replacement' => '$1',
    ),
    560 =>
    array (
      'regex' => '^LG([0-9]+[A-Za-z]*)',
      'device_replacement' => 'LG $1',
      'brand_replacement' => 'LG',
      'model_replacement' => '$1',
    ),
    561 =>
    array (
      'regex' => '(KIN\\.[^ ]+) (\\d+)\\.(\\d+)',
      'device_replacement' => 'Microsoft $1',
      'brand_replacement' => 'Microsoft',
      'model_replacement' => '$1',
    ),
    562 =>
    array (
      'regex' => '(?:MSIE|XBMC).*\\b(Xbox)\\b',
      'device_replacement' => '$1',
      'brand_replacement' => 'Microsoft',
      'model_replacement' => '$1',
    ),
    563 =>
    array (
      'regex' => '; ARM; Trident/6\\.0; Touch[\\);]',
      'device_replacement' => 'Microsoft Surface RT',
      'brand_replacement' => 'Microsoft',
      'model_replacement' => 'Surface RT',
    ),
    564 =>
    array (
      'regex' => 'Motorola\\-([A-Za-z0-9]+)',
      'device_replacement' => 'Motorola $1',
      'brand_replacement' => 'Motorola',
      'model_replacement' => '$1',
    ),
    565 =>
    array (
      'regex' => 'MOTO\\-([A-Za-z0-9]+)',
      'device_replacement' => 'Motorola $1',
      'brand_replacement' => 'Motorola',
      'model_replacement' => '$1',
    ),
    566 =>
    array (
      'regex' => 'MOT\\-([A-z0-9][A-z0-9\\-]*)',
      'device_replacement' => 'Motorola $1',
      'brand_replacement' => 'Motorola',
      'model_replacement' => '$1',
    ),
    567 =>
    array (
      'regex' => 'Nintendo WiiU',
      'device_replacement' => 'Nintendo Wii U',
      'brand_replacement' => 'Nintendo',
      'model_replacement' => 'Wii U',
    ),
    568 =>
    array (
      'regex' => 'Nintendo (DS|3DS|DSi|Wii);',
      'device_replacement' => 'Nintendo $1',
      'brand_replacement' => 'Nintendo',
      'model_replacement' => '$1',
    ),
    569 =>
    array (
      'regex' => '(?:Pantech|PANTECH)[ _-]?([A-Za-z0-9\\-]+)',
      'device_replacement' => 'Pantech $1',
      'brand_replacement' => 'Pantech',
      'model_replacement' => '$1',
    ),
    570 =>
    array (
      'regex' => 'Philips([A-Za-z0-9]+)',
      'device_replacement' => 'Philips $1',
      'brand_replacement' => 'Philips',
      'model_replacement' => '$1',
    ),
    571 =>
    array (
      'regex' => 'Philips ([A-Za-z0-9]+)',
      'device_replacement' => 'Philips $1',
      'brand_replacement' => 'Philips',
      'model_replacement' => '$1',
    ),
    572 =>
    array (
      'regex' => '(SMART-TV); .* Tizen ',
      'device_replacement' => 'Samsung $1',
      'brand_replacement' => 'Samsung',
      'model_replacement' => '$1',
    ),
    573 =>
    array (
      'regex' => 'SymbianOS/9\\.\\d.* Samsung[/\\-]([A-Za-z0-9 \\-]+)',
      'device_replacement' => 'Samsung $1',
      'brand_replacement' => 'Samsung',
      'model_replacement' => '$1',
    ),
    574 =>
    array (
      'regex' => '(Samsung)(SGH)(i[0-9]+)',
      'device_replacement' => '$1 $2$3',
      'brand_replacement' => '$1',
      'model_replacement' => '$2-$3',
    ),
    575 =>
    array (
      'regex' => 'SAMSUNG-ANDROID-MMS/([^;/]+)',
      'device_replacement' => '$1',
      'brand_replacement' => 'Samsung',
      'model_replacement' => '$1',
    ),
    576 =>
    array (
      'regex' => 'SAMSUNG(?:; |[ -/])([A-Za-z0-9\\-]+)',
      'regex_flag' => 'i',
      'device_replacement' => 'Samsung $1',
      'brand_replacement' => 'Samsung',
      'model_replacement' => '$1',
    ),
    577 =>
    array (
      'regex' => '(Dreamcast)',
      'device_replacement' => 'Sega $1',
      'brand_replacement' => 'Sega',
      'model_replacement' => '$1',
    ),
    578 =>
    array (
      'regex' => '^SIE-([A-Za-z0-9]+)',
      'device_replacement' => 'Siemens $1',
      'brand_replacement' => 'Siemens',
      'model_replacement' => '$1',
    ),
    579 =>
    array (
      'regex' => 'Softbank/[12]\\.0/([A-Za-z0-9]+)',
      'device_replacement' => 'Softbank $1',
      'brand_replacement' => 'Softbank',
      'model_replacement' => '$1',
    ),
    580 =>
    array (
      'regex' => 'SonyEricsson ?([A-Za-z0-9\\-]+)',
      'device_replacement' => 'Ericsson $1',
      'brand_replacement' => 'SonyEricsson',
      'model_replacement' => '$1',
    ),
    581 =>
    array (
      'regex' => 'Android [^;]+; ([^ ]+) (Sony)/',
      'device_replacement' => '$2 $1',
      'brand_replacement' => '$2',
      'model_replacement' => '$1',
    ),
    582 =>
    array (
      'regex' => '(Sony)(?:BDP\\/|\\/|)([^ /;\\)]+)[ /;\\)]',
      'device_replacement' => '$1 $2',
      'brand_replacement' => '$1',
      'model_replacement' => '$2',
    ),
    583 =>
    array (
      'regex' => 'Puffin/[\\d\\.]+IT',
      'device_replacement' => 'iPad',
      'brand_replacement' => 'Apple',
      'model_replacement' => 'iPad',
    ),
    584 =>
    array (
      'regex' => 'Puffin/[\\d\\.]+IP',
      'device_replacement' => 'iPhone',
      'brand_replacement' => 'Apple',
      'model_replacement' => 'iPhone',
    ),
    585 =>
    array (
      'regex' => 'Puffin/[\\d\\.]+AT',
      'device_replacement' => 'Generic Tablet',
      'brand_replacement' => 'Generic',
      'model_replacement' => 'Tablet',
    ),
    586 =>
    array (
      'regex' => 'Puffin/[\\d\\.]+AP',
      'device_replacement' => 'Generic Smartphone',
      'brand_replacement' => 'Generic',
      'model_replacement' => 'Smartphone',
    ),
    587 =>
    array (
      'regex' => 'Android[\\- ][\\d]+\\.[\\d]+; [A-Za-z]{2}\\-[A-Za-z]{0,2}; WOWMobile (.+)( Build[/ ]|\\))',
      'brand_replacement' => 'Generic_Android',
      'model_replacement' => '$1',
    ),
    588 =>
    array (
      'regex' => 'Android[\\- ][\\d]+\\.[\\d]+\\-update1; [A-Za-z]{2}\\-[A-Za-z]{0,2} *; *(.+?)( Build[/ ]|\\))',
      'brand_replacement' => 'Generic_Android',
      'model_replacement' => '$1',
    ),
    589 =>
    array (
      'regex' => 'Android[\\- ][\\d]+(?:\\.[\\d]+)(?:\\.[\\d]+|); *[A-Za-z]{2}[_\\-][A-Za-z]{0,2}\\-? *; *(.+?)( Build[/ ]|\\))',
      'brand_replacement' => 'Generic_Android',
      'model_replacement' => '$1',
    ),
    590 =>
    array (
      'regex' => 'Android[\\- ][\\d]+(?:\\.[\\d]+)(?:\\.[\\d]+|); *[A-Za-z]{0,2}\\- *; *(.+?)( Build[/ ]|\\))',
      'brand_replacement' => 'Generic_Android',
      'model_replacement' => '$1',
    ),
    591 =>
    array (
      'regex' => 'Android[\\- ][\\d]+(?:\\.[\\d]+)(?:\\.[\\d]+|); *[a-z]{0,2}[_\\-]?[A-Za-z]{0,2};?( Build[/ ]|\\))',
      'device_replacement' => 'Generic Smartphone',
      'brand_replacement' => 'Generic',
      'model_replacement' => 'Smartphone',
    ),
    592 =>
    array (
      'regex' => 'Android[\\- ][\\d]+(?:\\.[\\d]+)(?:\\.[\\d]+|); *\\-?[A-Za-z]{2}; *(.+?)( Build[/ ]|\\))',
      'brand_replacement' => 'Generic_Android',
      'model_replacement' => '$1',
    ),
    593 =>
    array (
      'regex' => 'Android \\d+?(?:\\.\\d+|)(?:\\.\\d+|); ([^;]+?)(?: Build|\\) AppleWebKit).+? Mobile Safari',
      'brand_replacement' => 'Generic_Android',
      'model_replacement' => '$1',
    ),
    594 =>
    array (
      'regex' => 'Android \\d+?(?:\\.\\d+|)(?:\\.\\d+|); ([^;]+?)(?: Build|\\) AppleWebKit).+? Safari',
      'brand_replacement' => 'Generic_Android_Tablet',
      'model_replacement' => '$1',
    ),
    595 =>
    array (
      'regex' => 'Android \\d+?(?:\\.\\d+|)(?:\\.\\d+|); ([^;]+?)(?: Build|\\))',
      'brand_replacement' => 'Generic_Android',
      'model_replacement' => '$1',
    ),
    596 =>
    array (
      'regex' => '(GoogleTV)',
      'brand_replacement' => 'Generic_Inettv',
      'model_replacement' => '$1',
    ),
    597 =>
    array (
      'regex' => '(WebTV)/\\d+.\\d+',
      'brand_replacement' => 'Generic_Inettv',
      'model_replacement' => '$1',
    ),
    598 =>
    array (
      'regex' => '^(Roku)/DVP-\\d+\\.\\d+',
      'brand_replacement' => 'Generic_Inettv',
      'model_replacement' => '$1',
    ),
    599 =>
    array (
      'regex' => '(Android 3\\.\\d|Opera Tablet|Tablet; .+Firefox/|Android.*(?:Tab|Pad))',
      'regex_flag' => 'i',
      'device_replacement' => 'Generic Tablet',
      'brand_replacement' => 'Generic',
      'model_replacement' => 'Tablet',
    ),
    600 =>
    array (
      'regex' => '(Symbian|\\bS60(Version|V\\d)|\\bS60\\b|\\((Series 60|Windows Mobile|Palm OS|Bada); Opera Mini|Windows CE|Opera Mobi|BREW|Brew|Mobile; .+Firefox/|iPhone OS|Android|MobileSafari|Windows *Phone|\\(webOS/|PalmOS)',
      'device_replacement' => 'Generic Smartphone',
      'brand_replacement' => 'Generic',
      'model_replacement' => 'Smartphone',
    ),
    601 =>
    array (
      'regex' => '(hiptop|avantgo|plucker|xiino|blazer|elaine)',
      'regex_flag' => 'i',
      'device_replacement' => 'Generic Smartphone',
      'brand_replacement' => 'Generic',
      'model_replacement' => 'Smartphone',
    ),
    602 =>
    array (
      'regex' => '(bot|BUbiNG|zao|borg|DBot|oegp|silk|Xenu|zeal|^NING|CCBot|crawl|htdig|lycos|slurp|teoma|voila|yahoo|Sogou|CiBra|Nutch|^Java/|^JNLP/|Daumoa|Daum|Genieo|ichiro|larbin|pompos|Scrapy|snappy|speedy|spider|msnbot|msrbot|vortex|^vortex|crawler|favicon|indexer|Riddler|scooter|scraper|scrubby|WhatWeb|WinHTTP|bingbot|BingPreview|openbot|gigabot|furlbot|polybot|seekbot|^voyager|archiver|Icarus6j|mogimogi|Netvibes|blitzbot|altavista|charlotte|findlinks|Retreiver|TLSProber|WordPress|SeznamBot|ProoXiBot|wsr\\-agent|Squrl Java|EtaoSpider|PaperLiBot|SputnikBot|A6\\-Indexer|netresearch|searchsight|baiduspider|YisouSpider|ICC\\-Crawler|http%20client|Python-urllib|dataparksearch|converacrawler|Screaming Frog|AppEngine-Google|YahooCacheSystem|fast\\-webcrawler|Sogou Pic Spider|semanticdiscovery|Innovazion Crawler|facebookexternalhit|Google.*/\\+/web/snippet|Google-HTTP-Java-Client|BlogBridge|IlTrovatore-Setaccio|InternetArchive|GomezAgent|WebThumbnail|heritrix|NewsGator|PagePeeker|Reaper|ZooShot|holmes|NL-Crawler|Pingdom|StatusCake|WhatsApp|masscan|Google Web Preview|Qwantify|Yeti|OgScrper)',
      'regex_flag' => 'i',
      'device_replacement' => 'Spider',
      'brand_replacement' => 'Spider',
      'model_replacement' => 'Desktop',
    ),
    603 =>
    array (
      'regex' => '^(1207|3gso|4thp|501i|502i|503i|504i|505i|506i|6310|6590|770s|802s|a wa|acer|acs\\-|airn|alav|asus|attw|au\\-m|aur |aus |abac|acoo|aiko|alco|alca|amoi|anex|anny|anyw|aptu|arch|argo|bmobile|bell|bird|bw\\-n|bw\\-u|beck|benq|bilb|blac|c55/|cdm\\-|chtm|capi|comp|cond|dall|dbte|dc\\-s|dica|ds\\-d|ds12|dait|devi|dmob|doco|dopo|dorado|el(?:38|39|48|49|50|55|58|68)|el[3456]\\d{2}dual|erk0|esl8|ex300|ez40|ez60|ez70|ezos|ezze|elai|emul|eric|ezwa|fake|fly\\-|fly_|g\\-mo|g1 u|g560|gf\\-5|grun|gene|go.w|good|grad|hcit|hd\\-m|hd\\-p|hd\\-t|hei\\-|hp i|hpip|hs\\-c|htc |htc\\-|htca|htcg)',
      'regex_flag' => 'i',
      'device_replacement' => 'Generic Feature Phone',
      'brand_replacement' => 'Generic',
      'model_replacement' => 'Feature Phone',
    ),
    604 =>
    array (
      'regex' => '^(htcp|htcs|htct|htc_|haie|hita|huaw|hutc|i\\-20|i\\-go|i\\-ma|i\\-mobile|i230|iac|iac\\-|iac/|ig01|im1k|inno|iris|jata|kddi|kgt|kgt/|kpt |kwc\\-|klon|lexi|lg g|lg\\-a|lg\\-b|lg\\-c|lg\\-d|lg\\-f|lg\\-g|lg\\-k|lg\\-l|lg\\-m|lg\\-o|lg\\-p|lg\\-s|lg\\-t|lg\\-u|lg\\-w|lg/k|lg/l|lg/u|lg50|lg54|lge\\-|lge/|leno|m1\\-w|m3ga|m50/|maui|mc01|mc21|mcca|medi|meri|mio8|mioa|mo01|mo02|mode|modo|mot |mot\\-|mt50|mtp1|mtv |mate|maxo|merc|mits|mobi|motv|mozz|n100|n101|n102|n202|n203|n300|n302|n500|n502|n505|n700|n701|n710|nec\\-|nem\\-|newg|neon)',
      'regex_flag' => 'i',
      'device_replacement' => 'Generic Feature Phone',
      'brand_replacement' => 'Generic',
      'model_replacement' => 'Feature Phone',
    ),
    605 =>
    array (
      'regex' => '^(netf|noki|nzph|o2 x|o2\\-x|opwv|owg1|opti|oran|ot\\-s|p800|pand|pg\\-1|pg\\-2|pg\\-3|pg\\-6|pg\\-8|pg\\-c|pg13|phil|pn\\-2|pt\\-g|palm|pana|pire|pock|pose|psio|qa\\-a|qc\\-2|qc\\-3|qc\\-5|qc\\-7|qc07|qc12|qc21|qc32|qc60|qci\\-|qwap|qtek|r380|r600|raks|rim9|rove|s55/|sage|sams|sc01|sch\\-|scp\\-|sdk/|se47|sec\\-|sec0|sec1|semc|sgh\\-|shar|sie\\-|sk\\-0|sl45|slid|smb3|smt5|sp01|sph\\-|spv |spv\\-|sy01|samm|sany|sava|scoo|send|siem|smar|smit|soft|sony|t\\-mo|t218|t250|t600|t610|t618|tcl\\-|tdg\\-|telm|tim\\-|ts70|tsm\\-|tsm3|tsm5|tx\\-9|tagt)',
      'regex_flag' => 'i',
      'device_replacement' => 'Generic Feature Phone',
      'brand_replacement' => 'Generic',
      'model_replacement' => 'Feature Phone',
    ),
    606 =>
    array (
      'regex' => '^(talk|teli|topl|tosh|up.b|upg1|utst|v400|v750|veri|vk\\-v|vk40|vk50|vk52|vk53|vm40|vx98|virg|vertu|vite|voda|vulc|w3c |w3c\\-|wapj|wapp|wapu|wapm|wig |wapi|wapr|wapv|wapy|wapa|waps|wapt|winc|winw|wonu|x700|xda2|xdag|yas\\-|your|zte\\-|zeto|aste|audi|avan|blaz|brew|brvw|bumb|ccwa|cell|cldc|cmd\\-|dang|eml2|fetc|hipt|http|ibro|idea|ikom|ipaq|jbro|jemu|jigs|keji|kyoc|kyok|libw|m\\-cr|midp|mmef|moto|mwbp|mywa|newt|nok6|o2im|pant|pdxg|play|pluc|port|prox|rozo|sama|seri|smal|symb|treo|upsi|vx52|vx53|vx60|vx61|vx70|vx80|vx81|vx83|vx85|wap\\-|webc|whit|wmlb|xda\\-|xda_)',
      'regex_flag' => 'i',
      'device_replacement' => 'Generic Feature Phone',
      'brand_replacement' => 'Generic',
      'model_replacement' => 'Feature Phone',
    ),
    607 =>
    array (
      'regex' => '^(Ice)$',
      'device_replacement' => 'Generic Feature Phone',
      'brand_replacement' => 'Generic',
      'model_replacement' => 'Feature Phone',
    ),
    608 =>
    array (
      'regex' => '(wap[\\-\\ ]browser|maui|netfront|obigo|teleca|up\\.browser|midp|Opera Mini)',
      'regex_flag' => 'i',
      'device_replacement' => 'Generic Feature Phone',
      'brand_replacement' => 'Generic',
      'model_replacement' => 'Feature Phone',
    ),
  ),
);