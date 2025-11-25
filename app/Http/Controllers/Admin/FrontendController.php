<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Tag;
use App\Models\User;
use App\Models\Faqs;
use App\Models\WebSetting;
use App\Models\BlogArticle;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
//For Schema
use Spatie\SchemaOrg\Schema;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOTools; // Complete SEO tool for flexibility
class FrontendController extends Controller
{
    /**
     * Display the index page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $page = Page::where('slug', 'home')->first();
        return view("website.index", compact('page'));
    }

    /**
     * Display the product show page.
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function productShow($slug)
    {
        $page = Page::where('slug', $slug)->first();
        return view("website.product-show", compact('page'));
    }

    /**
     * Display the product listing page.
     *
     * @return \Illuminate\View\View
     */
    public function productListing()
    {
        $page = Page::where('slug', 'product-listing')->first();
        return view("website.products-listing", compact('page'));
    }

    /**
     * Display the faqs page.
     *
     * @return \Illuminate\View\View
     */
    public function faqs()
    {
        $page    = Page::where('slug', 'faqs')->firstOrFail();
        $setting = WebSetting::first();
        $faqs    = Faqs::take(4)->get();

        return view("website.faqs", compact('page', 'setting', 'faqs'));
    }

    /**
     * Display the login page.
     *
     * @return \Illuminate\View\View
     */
    public function login()
    {
        return view("website.login");
    }

    /*
|--------------------------------------------------------------------------
| Blog List
|--------------------------------------------------------------------------
*/

    /**
     * Display the blog list page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string|null  $categorySlug
     * @return \Illuminate\View\View
     */
    public function bloglist(Request $request, $categorySlug = null)
    {
        $page      = Page::where('slug', 'blog-listing')->first();
        $setting   = WebSetting::first();
        $site_name = config('seotools.opengraph.defaults.site_name', config('app.name'));

        $blogs = collect();
        $query = BlogArticle::where('status', 1)
            ->whereHas('category', function ($q) {
                $q->where('status', 1);
            });

        if ($request->filled('search')) {
            $search = $request->get('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'LIKE', "%{$search}%")
                  ->orWhere('description', 'LIKE', "%{$search}%");
            });
        }

        $category = null;
        if ($categorySlug) {
            $category = BlogCategory::where('slug', $categorySlug)
                ->where('status', 1)
                ->first();

            if ($category) {
                $query->where('blog_category_id', $category->id);
            } else {
                // If category slug is present but not found, we should show no blogs.
            }
        }

        if (!$categorySlug || ($categorySlug && $category)) {
            $blogs = $query->orderBy('updated_at', 'desc')
                ->paginate(6)
                ->appends($request->query());
        }

        foreach ($blogs as $bc) {
            $bc->instructor = User::find($bc->author_id);
        }

        $tags        = Tag::all();
        $categories  = BlogCategory::orderby('views_count', 'desc')->take(7)->get();
        $recentposts = BlogArticle::orderby('created_at', 'desc')->take(4)->get();

        $meta_title = $page->page_name ?? "Latest Blog Articles - EstateGuideBlog";
        $meta_desc  = $page->meta_desc ?? "Browse fresh articles on real estate, finance, health, and more. Updated weekly on EstateGuideBlog.";

        // SEO Meta Info
        SEOTools::setDescription($meta_desc);
        SEOTools::setCanonical(url()->current());

        // Open Graph
        SEOTools::opengraph()->setTitle($meta_title);
        SEOTools::opengraph()->setDescription($meta_desc);
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::opengraph()->addImage(asset('storage/' . ($page->image ?? 'default.png')));
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('site_name', 'EstateGuideBlog');

        // Twitter Card
        SEOTools::twitter()->setTitle($meta_title);
        SEOTools::twitter()->setDescription($meta_desc);
        SEOTools::twitter()->setUrl(url()->current());
        SEOTools::twitter()->setImage(asset('storage/' . ($page->image ?? 'default.png')));
        SEOTools::twitter()->setSite('@YourTwitterHandle'); // Replace with real handle
        SEOTools::twitter()->setType('summary_large_image');

        // Schema: Blog List
        $schema = [
            "@context"        => "https://schema.org",
            "@type"           => "ItemList",
            "itemListOrder"   => "http://schema.org/ItemListOrderDescending",
            "itemListElement" => []
        ];

        foreach ($blogs as $index => $blog) {
            $schema['itemListElement'][] = array_filter([
                "@type"       => "ListItem",
                "position"    => $index + 1,
                "url"         => route('blogshow', $blog->slug),
                "name"        => $blog->title,
                "description" => $blog->meta_desc ?? $blog->description,
                "image"       => $blog->image ? asset('storage/' . $blog->image) : null,
                "item"        => [
                    "@type"         => "Article",
                    "headline"      => $blog->title,
                    "description"   => $blog->meta_desc ?? $blog->description,
                    "datePublished" => $blog->created_at->toIso8601String(),
                    "author"        => [
                        "@type" => "Person",
                        "name"  => $blog->instructor->name ?? "Admin",
                    ],
                ],
            ]);
        }

        $schema['mainEntity'] = [
            "@type"         => "ItemList",
            "itemListOrder" => "http://schema.org/ItemListOrderDescending",
            "numberOfItems" => $blogs->count(),
        ];

        $schemaMarkup = json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        // Schema: Breadcrumbs
        $breadcrumbs = [
            "@context"        => "https://schema.org",
            "@type"           => "BreadcrumbList",
            "itemListElement" => [
                [
                    "@type"    => "ListItem",
                    "position" => 1,
                    "name"     => "Home",
                    "item"     => route('home'),
                ],
                [
                    "@type"    => "ListItem",
                    "position" => 2,
                    "name"     => "Blog",
                    "item"     => route('bloglist'),
                ],
            ],
        ];

        if ($categorySlug && isset($category)) {
            $breadcrumbs['itemListElement'][] = [
                "@type"    => "ListItem",
                "position" => 3,
                "name"     => $category->title,
                "item"     => route('bloglist', $category->slug),
            ];
        }

        $breadcrumbsMarkup = json_encode($breadcrumbs, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        return view("website.blog-listing", compact(
            'page',
            'setting',
            'blogs',
            'categories',
            'recentposts',
            'tags',
            'schemaMarkup',
            'breadcrumbsMarkup'
        ));
    }

    /*
|--------------------------------------------------------------------------
| Blog Show
|--------------------------------------------------------------------------
*/

    /**
     * Display the blog show page.
     *
     * @param  \App\Models\BlogArticle  $articleArticle
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function blogshow(BlogArticle $articleArticle, $slug)
    {
        $setting      = WebSetting::first();
        $article      = BlogArticle::where('slug', $slug)->firstOrFail();
        $page         = ['page_name' => $article->page_title];
        $meta_title   = $article->title ?? "Welcome to Our Main article";
        $meta_desc    = $article->meta_desc ?? "Description of the main article";
        $instructor   = User::find($article->author_id);
        $site_name    = config('seotools.opengraph.defaults.site_name', config('app.name'));
        $tags         = Tag::all();
        $categories   = BlogCategory::orderby('views_count', 'desc')->where('status', '1')->take(7)->get();
        $recentposts  = BlogArticle::orderby('updated_at', 'desc')->where('status', '1')->take(4)->get();
        $popularposts = BlogArticle::with('category')->where('status', '1')
            ->where('id', '!=', $article->id)
            ->orderBy('views_count', 'desc')
            ->take(3)
            ->get();

        // SEO Meta and Open Graph
        SEOTools::setDescription($meta_desc);
        SEOTools::setCanonical(url()->current());

        SEOTools::opengraph()->setTitle($meta_title);
        SEOTools::opengraph()->setDescription($meta_desc);
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::opengraph()->addImage(asset('storage/' . ($article->image ?? 'default.png')));

        SEOTools::twitter()->setTitle($meta_title);
        SEOTools::twitter()->setDescription($meta_desc);
        SEOTools::twitter()->setImage(asset('storage/' . ($article->image ?? 'default.png')));
        SEOTools::twitter()->setUrl(url()->current());
        SEOTools::twitter()->setSite('@YourTwitterHandle');
        SEOTools::twitter()->setType('summary_large_image');

        // Article Schema JSON-LD
        $schemaData = [
            "@context"         => "https://schema.org",
            "@type"            => "NewsArticle",
            "headline"         => $article->title,
            "description"      => $meta_desc,
            "mainEntityOfPage" => [
                "@type" => "WebPage",
                "@id"   => url()->current(),
            ],
            "url"              => url()->current(),
            "image"            => asset('storage/' . ($article->image ?? 'default.png')),
            "datePublished"    => $article->created_at->toIso8601String(),
            "dateModified"     => $article->updated_at->toIso8601String(),
            "articleBody"      => strip_tags($article->description),
            "author"           => [
                "@type" => "Person",
                "name"  => $instructor->name ?? 'Admin',
            ],
            "publisher"        => [
                "@type" => "Organization",
                "@id"   => route('home') . '#organization',
                "name"  => $site_name,
                "logo"  => [
                    "@type" => "ImageObject",
                    "url"   => asset('storage/settings/' . ($setting->site_logo ?? 'default.png')),
                ],
            ],
            "articleSection"   => $article->category->name ?? "Blog",
        ];

        $schemaMarkup = json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        // Breadcrumb Schema JSON-LD
        $breadcrumbs = [
            "@context"        => "https://schema.org",
            "@type"           => "BreadcrumbList",
            "itemListElement" => [
                [
                    "@type"    => "ListItem",
                    "position" => 1,
                    "name"     => "Home",
                    "item"     => route('home'),
                ],
                [
                    "@type"    => "ListItem",
                    "position" => 2,
                    "name"     => "Blog",
                    "item"     => route('bloglist'),
                ],
                [
                    "@type"    => "ListItem",
                    "position" => 3,
                    "name"     => $article->title,
                    "item"     => url()->current(),
                ],
            ],
        ];

        $breadcrumbsMarkup = json_encode($breadcrumbs, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        return view("website.blog-details", compact(
            'instructor',
            'page',));

        $schemaMarkup = json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        return view('website.about-us', compact('page', 'setting', 'schemaMarkup'));
    }

    /*
|--------------------------------------------------------------------------
| Terms Conditions
|--------------------------------------------------------------------------
*/

    public function termsAndConditions(Request $request)
    {
        $page = Page::where('slug', 'terms-and-conditions')->first();
        $setting = WebSetting::first();

        $site_name = config('seotools.opengraph.defaults.site_name', config('app.name'));
        $meta_title = $page->page_name ?? "$site_name - Terms & Conditions";
        $meta_desc = $page->meta_desc ?? "Review the terms and conditions of using $site_name, including user obligations and legal rights.";
        $meta_image = asset('storage/settings/' . ($setting->site_logo ?? 'logo.png'));
        $twitter_handle = $setting->site_twitter ?? '@YourSiteHandle'; // <- Adjust manually

        // === SEO Meta Tags ===
        // SEOTools::setTitle($meta_title);
        SEOTools::setDescription($meta_desc);
        SEOTools::setCanonical(url()->current());
        // === OpenGraph Meta ===
        SEOTools::opengraph()
            ->setTitle($meta_title)
            ->setDescription($meta_desc)
            ->setUrl(url()->current())
            ->setType('website')
            ->addImage($meta_image)
            ->setSiteName($site_name);

        // === Twitter Cards ===
        SEOTools::twitter()
            ->setTitle($meta_title)
            ->setDescription($meta_desc)
            ->setUrl(url()->current())
            ->setImage($meta_image)
            ->setSite($twitter_handle);

        // === Schema.org WebPage (Main) ===
        $schema = [
            "@context" => "https://schema.org",
            "@type" => "WebPage",
            "name" => $meta_title,
            "description" => $meta_desc,
            "url" => url()->current(),
            "inLanguage" => "en-US",
            "datePublished" => optional($page->created_at)->toIso8601String(),
            "dateModified" => optional($page->updated_at)->toIso8601String(),
            "mainEntityOfPage" => [
                "@type" => "WebPage",
                "@id" => url()->current()
            ]
        ];

        $schemaMarkup = json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        // === Schema.org WebPage (CreativeWork Extension) ===
        $webPageSchema = [
            "@context" => "https://schema.org",
            "@type" => "CreativeWork",
            "name" => "Terms and Conditions",
            "description" => "This page explains the terms and conditions for using $site_name, including your rights and responsibilities.",
            "inLanguage" => "en-US",
            "url" => url()->current()
        ];
        $webPageSchemaMarkup = json_encode($webPageSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        // === Schema.org Organization Logo ===
        $organizationSchema = [
            "@context" => "https://schema.org",
            "@type" => "Organization",
            "name" => $site_name,
            "url" => url('/'),
            "logo" => [
                "@type" => "ImageObject",
                "url" => $meta_image,
                "width" => 300,
                "height" => 80
            ]
        ];
        $organizationSchemaMarkup = json_encode($organizationSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        // === Schema.org BreadcrumbList ===
        $breadcrumbs = [
            "@context" => "https://schema.org",
            "@type" => "BreadcrumbList",
            "itemListElement" => [
                [
                    "@type" => "ListItem",
                    "position" => 1,
                    "name" => "Home",
                    "item" => url('/')
                ],
                [
                    "@type" => "ListItem",
                    "position" => 2,
                    "name" => "Terms & Conditions",
                    "item" => url()->current()
                ]
            ]
        ];
        $breadcrumbsMarkup = json_encode($breadcrumbs, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        return view('website.terms-and-conditions', compact(
            'page',
            'setting',
            'schemaMarkup',
            'webPageSchemaMarkup',
            'organizationSchemaMarkup',
            'breadcrumbsMarkup'
        ));
    }

    /*
|--------------------------------------------------------------------------
| Privacy Policy
|--------------------------------------------------------------------------
*/

    public function privacy(Request $request)
    {
        $page = Page::where('slug', 'privacy-policy')->firstOrFail();
        $setting = WebSetting::first();

        $site_name = config('seotools.opengraph.defaults.site_name', config('app.name'));
        $meta_title = $page->page_name ?? "$site_name - Privacy Policy";
        $meta_desc = $page->meta_desc ?? "Read the privacy policy of $site_name to understand how we collect, use, store, and protect your data.";
        $meta_image = asset('storage/settings/' . ($setting->site_logo ?? 'logo.png'));
        $current_url = url()->current();
        $twitter_handle = '@EstateGuideBlog'; // ✅ Replace with actual if available

        // === SEO Meta Tags ===
        // SEOTools::setTitle($meta_title);
        SEOTools::setDescription($meta_desc);
        SEOTools::setCanonical($current_url);

        // === OpenGraph Tags ===
        SEOTools::opengraph()
            ->setTitle($meta_title)
            ->setDescription($meta_desc)
            ->setUrl($current_url)
            ->addImage([
                'url' => $meta_image,
                'width' => 300,
                'height' => 80
            ])
            ->setSiteName($site_name)
            ->addProperty('type', 'WebPage');

        // === Twitter Card Tags ===
        SEOTools::twitter()
            ->setTitle($meta_title)
            ->setDescription($meta_desc)
            ->setUrl($current_url)
            ->setImage($meta_image)
            ->setSite($twitter_handle);

        // === JSON-LD Schema.org Markup ===
        $schema = [
            "@context" => "https://schema.org",
            "@type" => "WebPage",
            "name" => $meta_title,
            "description" => $meta_desc,
            "url" => $current_url,
            "inLanguage" => "en-US",
            "dateModified" => now()->toIso8601String(),
            "mainEntity" => [
                "@type" => "CreativeWork",
                "name" => "Privacy Policy",
                "description" => "This page outlines how $site_name collects, uses, stores, and protects user data in compliance with data protection laws."
            ],
            "mainEntityOfPage" => [
                "@type" => "WebPage",
                "@id" => $current_url
            ],
            "publisher" => [
                "@type" => "Organization",
                "name" => $site_name,
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => $meta_image,
                    "width" => 300,
                    "height" => 80
                ]
            ]
        ];
        return view('website.pivacy-policy', compact('page', 'setting', 'schemaMarkup'));
    }
    /*
|--------------------------------------------------------------------------
| Contact Us
|--------------------------------------------------------------------------
*/
    /**
     * Display the contact us page.
     *
     * @return \Illuminate\View\View
     */
    public function contactUs()
    {
        $page           = Page::where('slug', 'contact-us')->firstOrFail();
        $setting        = WebSetting::first();
        $faq            = Faqs::take(4)->get();
        $site_name      = config('seotools.opengraph.defaults.site_name', config('app.name'));
        $meta_title     = $page->page_name ?? "$site_name - Contact Us";
        $meta_desc      = $page->meta_desc ?? "Get in touch with $site_name for inquiries, support, or collaborations.";
        $meta_image     = asset('storage/settings/' . ($setting->site_logo ?? 'logo.png'));
        $current_url    = url()->current();
        $twitter_handle = '@EstateGuideBlog';

        SEOTools::setDescription($meta_desc);
        SEOTools::setCanonical($current_url);

        SEOTools::opengraph()
            ->setTitle($meta_title)
            ->setDescription($meta_desc)
            ->setUrl($current_url)
            ->addImage([
                'url'    => $meta_image,
                'width'  => 300,
                'height' => 80,
            ])
            ->setSiteName($site_name)
            ->addProperty('type', 'website');

        SEOTools::twitter()
            ->setTitle($meta_title)
            ->setDescription($meta_desc)
            ->setUrl($current_url)
            ->setImage($meta_image)
            ->setSite($twitter_handle);

        $schema = [
            "@context"         => "https://schema.org",
            "@type"            => "ContactPage",
            "name"             => $meta_title,
            "description"      => $meta_desc,
            "url"              => $current_url,
            "inLanguage"       => "en-US",
            "dateModified"     => now()->toIso8601String(),
            "mainEntityOfPage" => [
                "@type" => "WebPage",
                "@id"   => $current_url,
            ],
            "publisher"        => [
                "@type" => "Organization",
                "name"  => $site_name,
                "logo"  => [
                    "@type"  => "ImageObject",
                    "url"    => $meta_image,
                    "width"  => 300,
                    "height" => 80,
                ],
            ],
            "potentialAction"  => [
                "@type"  => "CommunicateAction",
                "name"   => "Contact Form Submission",
                "target" => [
                    "@type"         => "EntryPoint",
                    "urlTemplate"   => $current_url . "#contact-form",
                    "inLanguage"    => "en-US",
                    "actionPlatform" => [
                        "http://schema.org/DesktopWebPlatform",
                        "http://schema.org/MobileWebPlatform",
                    ],
                ],
            ],
        ];

        $schemaMarkup = json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        return view('website.contact-us', compact('page', 'setting', 'schemaMarkup', 'faq'));
    }

    /*
|--------------------------------------------------------------------------
| Disclaimer
|--------------------------------------------------------------------------
*/

    public function disclaimer()
    {
        $page = Page::where('slug', 'disclaimer')->firstOrFail();
        $setting = WebSetting::first();

        $site_name = config('seotools.opengraph.defaults.site_name', config('app.name'));
        $meta_title = $page->page_name ?? "$site_name - Disclaimer";
        $meta_desc = $page->meta_desc ?? "Read the disclaimer of $site_name covering content usage, accuracy, and liability limits.";
        $meta_image = asset('storage/settings/' . ($setting->site_logo ?? 'logo.png'));
        $current_url = url()->current();

        // === SEO Meta Tags ===
        // SEOTools::setTitle($meta_title);
        SEOTools::setDescription($meta_desc);
        SEOTools::setCanonical($current_url);

        // === Open Graph ===
        SEOTools::opengraph()
            ->setTitle($meta_title)
            ->setDescription($meta_desc)
            ->setUrl($current_url)
            ->addImage($meta_image)
            ->setSiteName($site_name)
            ->addProperty('type', 'WebPage');

        // === Twitter Card ===
        SEOTools::twitter()
            ->setTitle($meta_title)
            ->setDescription($meta_desc)
            ->setUrl($current_url)
            ->setImage($meta_image)
            ->setSite('@' . preg_replace('/\s+/', '', $site_name));

        // === JSON-LD Schema ===
        $schema = [
            "@context" => "https://schema.org",
            "@type" => "WebPage",
            "name" => $meta_title,
            "description" => $meta_desc,
            "url" => $current_url,
            "inLanguage" => "en-US",
            "datePublished" => optional($page->created_at)->toIso8601String(),
            "dateModified" => optional($page->updated_at)->toIso8601String(),
            "mainEntityOfPage" => [
                "@type" => "WebPage",
                "@id" => $current_url
            ],
            "about" => [
                "@type" => "Thing",
                "name" => "Website Disclaimer Policy"
            ],
            "publisher" => [
                "@type" => "Organization",
                "name" => $site_name,
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => $meta_image,
                    "width" => 300,
                    "height" => 80
                ]
            ]
        ];

        $schemaMarkup = json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        return view('website.disclaimer', compact('page', 'setting', 'schemaMarkup'));
    }
    /*
|--------------------------------------------------------------------------
| returnPolicy
|--------------------------------------------------------------------------
*/

    public function returnPolicy()
    {
        $page = Page::where('slug', 'returnPolicy')->firstOrFail();
        $setting = WebSetting::first();

        $site_name = config('seotools.opengraph.defaults.site_name', config('app.name'));
        $meta_title = $page->page_name ?? "$site_name - returnPolicy";
        $meta_desc = $page->meta_desc ?? "Read the returnPolicy of $site_name covering content usage, accuracy, and liability limits.";
        $meta_image = asset('storage/settings/' . ($setting->site_logo ?? 'logo.png'));
        $current_url = url()->current();

        // === SEO Meta Tags ===
        // SEOTools::setTitle($meta_title);
        SEOTools::setDescription($meta_desc);
        SEOTools::setCanonical($current_url);

        // === Open Graph ===
        SEOTools::opengraph()
            ->setTitle($meta_title)
            ->setDescription($meta_desc)
            ->setUrl($current_url)
            ->addImage($meta_image)
            ->setSiteName($site_name)
            ->addProperty('type', 'WebPage');

        // === Twitter Card ===
        SEOTools::twitter()
            ->setTitle($meta_title)
            ->setDescription($meta_desc)
            ->setUrl($current_url)
            ->setImage($meta_image)
            ->setSite('@' . preg_replace('/\s+/', '', $site_name));

        // === JSON-LD Schema ===
        $schema = [
            "@context" => "https://schema.org",
            "@type" => "WebPage",
            "name" => $meta_title,
            "description" => $meta_desc,
            "url" => $current_url,
            "inLanguage" => "en-US",
            "datePublished" => optional($page->created_at)->toIso8601String(),
            "dateModified" => optional($page->updated_at)->toIso8601String(),
            "mainEntityOfPage" => [
                "@type" => "WebPage",
                "@id" => $current_url
            ],
            "about" => [
                "@type" => "Thing",
                "name" => "Website returnPolicy Policy"
            ],
            "publisher" => [
                "@type" => "Organization",
                "name" => $site_name,
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => $meta_image,
                    "width" => 300,
                    "height" => 80
                ]
            ]
        ];

        $schemaMarkup = json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        return view('website.return-policy', compact('page', 'setting', 'schemaMarkup'));
    }
    /*
|--------------------------------------------------------------------------
| trackOrders
|--------------------------------------------------------------------------
*/

    public function cancellation()
    {
        $page = Page::where('slug', 'cancellation')->firstOrFail();
        $setting = WebSetting::first();

        $site_name = config('seotools.opengraph.defaults.site_name', config('app.name'));
        $meta_title = $page->page_name ?? "$site_name - cancellation";
        $meta_desc = $page->meta_desc ?? "Read the cancellation of $site_name covering content usage, accuracy, and liability limits.";
        $meta_image = asset('storage/settings/' . ($setting->site_logo ?? 'logo.png'));
        $current_url = url()->current();

        // === SEO Meta Tags ===
        // SEOTools::setTitle($meta_title);
        SEOTools::setDescription($meta_desc);
        SEOTools::setCanonical($current_url);

        // === Open Graph ===
        SEOTools::opengraph()
            ->setTitle($meta_title)
            ->setDescription($meta_desc)
            ->setUrl($current_url)
            ->addImage($meta_image)
            ->setSiteName($site_name)
            ->addProperty('type', 'WebPage');

        // === Twitter Card ===
        SEOTools::twitter()
            ->setTitle($meta_title)
            ->setDescription($meta_desc)
            ->setUrl($current_url)
            ->setImage($meta_image)
            ->setSite('@' . preg_replace('/\s+/', '', $site_name));

        // === JSON-LD Schema ===
        $schema = [
            "@context" => "https://schema.org",
            "@type" => "WebPage",
            "name" => $meta_title,
            "description" => $meta_desc,
            "url" => $current_url,
            "inLanguage" => "en-US",
            "datePublished" => optional($page->created_at)->toIso8601String(),
            "dateModified" => optional($page->updated_at)->toIso8601String(),
            "mainEntityOfPage" => [
                "@type" => "WebPage",
                "@id" => $current_url
            ],
            "about" => [
                "@type" => "Thing",
                "name" => "Website cancellation Policy"
            ],
            "publisher" => [
                "@type" => "Organization",
                "name" => $site_name,
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => $meta_image,
                    "width" => 300,
                    "height" => 80
                ]
            ]
        ];

        $schemaMarkup = json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        return view('website.cancellation', compact('page', 'setting', 'schemaMarkup'));
    }
    /*
|--------------------------------------------------------------------------
| trackOrders
|--------------------------------------------------------------------------
*/

    public function trackOrders()
    {
        $page = Page::where('slug', 'trackOrders')->firstOrFail();
        $setting = WebSetting::first();

        $site_name = config('seotools.opengraph.defaults.site_name', config('app.name'));
        $meta_title = $page->page_name ?? "$site_name - trackOrders";
        $meta_desc = $page->meta_desc ?? "Read the trackOrders of $site_name covering content usage, accuracy, and liability limits.";
        $meta_image = asset('storage/settings/' . ($setting->site_logo ?? 'logo.png'));
        $current_url = url()->current();

        // === SEO Meta Tags ===
        // SEOTools::setTitle($meta_title);
        SEOTools::setDescription($meta_desc);
        SEOTools::setCanonical($current_url);

        // === Open Graph ===
        SEOTools::opengraph()
            ->setTitle($meta_title)
            ->setDescription($meta_desc)
            ->setUrl($current_url)
            ->addImage($meta_image)
            ->setSiteName($site_name)
            ->addProperty('type', 'WebPage');

        // === Twitter Card ===
        SEOTools::twitter()
            ->setTitle($meta_title)
            ->setDescription($meta_desc)
            ->setUrl($current_url)
            ->setImage($meta_image)
            ->setSite('@' . preg_replace('/\s+/', '', $site_name));

        // === JSON-LD Schema ===
        $schema = [
            "@context" => "https://schema.org",
            "@type" => "WebPage",
            "name" => $meta_title,
            "description" => $meta_desc,
            "url" => $current_url,
            "inLanguage" => "en-US",
            "datePublished" => optional($page->created_at)->toIso8601String(),
            "dateModified" => optional($page->updated_at)->toIso8601String(),
            "mainEntityOfPage" => [
                "@type" => "WebPage",
                "@id" => $current_url
            ],
            "about" => [
                "@type" => "Thing",
                "name" => "Website trackOrders Policy"
            ],
            "publisher" => [
                "@type" => "Organization",
                "name" => $site_name,
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => $meta_image,
                    "width" => 300,
                    "height" => 80
                ]
            ]
        ];

        $schemaMarkup = json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        return view('website.track-orders', compact('page', 'setting', 'schemaMarkup'));
    }
}
