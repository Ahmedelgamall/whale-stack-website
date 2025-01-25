<?php

namespace App\Console\Commands;

use App\Enums\PageType;
use App\Models\Blog;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SiteMapCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:site-map';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap.xml file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = Sitemap::create();

        // Static Pages
        $sitemap->add(Url::create('/')
            ->setLastModificationDate(now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setPriority(1.0));
        $sitemap->add(Url::create('/projects')
            ->setLastModificationDate(now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setPriority(1.0));
        $sitemap->add(Url::create('/about-us')
            ->setLastModificationDate(now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setPriority(1.0));
        $sitemap->add(Url::create('/blogs')
            ->setLastModificationDate(now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setPriority(1.0));
        $sitemap->add(Url::create('/contact-us')
            ->setLastModificationDate(now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setPriority(1.0));

        // Dynamic Pages
        $blogs = Blog::all();
        foreach ($blogs as $blog) {
            $sitemap->add(Url::create(route('web.show.blog', $blog->slug))
                ->setLastModificationDate($blog->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.8));
        }

        // Write to a file
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully!');
    }
}
