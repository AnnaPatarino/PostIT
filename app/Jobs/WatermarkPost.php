<?php

namespace App\Jobs;

use App\Models\Image;
use Spatie\Image\Image as SpatieImage;
use Spatie\Image\Manipulations;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class WatermarkPost implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $article_image_id;
    /**
     * Create a new job instance.
     * 
     * 
     */
    public function __construct($article_image_id)
    {
        $this->article_image_id = $article_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i = Image::find($this->article_image_id); 
        if(!$i){
        
            return;
        }

        $srcPath = storage_path('app/public/' . $i->path);
        $image = file_get_contents($srcPath);

        $image = SpatieImage::load($srcPath);

        $image->watermark(base_path('resources\img\watermark-post.png'))->watermarkPosition(Manipulations::POSITION_CENTER)->watermarkWidth(50,Manipulations::UNIT_PERCENT);

        $image->save($srcPath);

    }
}
