<?php

namespace App\Jobs;

use App\Models\News;
use App\Services\ParserService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class NewsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public array $link;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(array $link)
    {
        $this->link = $link;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(ParserService $service)
    {
        $data = $service->parse($this->link['url']);

        foreach ($data['news'] as $new) {

                if (!News::where('guid', $new['guid'])->first()) {

                    $news = new News();

                    $news->fill([
                        'title' => $new['title'],
                        'guid' => $new['guid'],
                        'description' => $new['description'],
                        'category_id' => $this->link['category_id'],
                        'author' => $data['title'],
                        'created_at' => now()
                    ]);
                    $news->save();
                }
            }
    }
}
