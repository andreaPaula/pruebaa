<?php
namespace App\Repositories;

use App\Models\Post;
use App\Repositories\AppRepository;
use Illuminate\Http\Request;

class PostsRepository extends AppRepository
{
    protected $model;
    
    public function __construct(Post $model)
    {
        $this->model = $model;
    }
    
    /**
     * set payload data for posts table.
     * 
     * @param Request $request [description]
     * @return array of data for saving.
     */
    protected function setDataPayload(Request $request)
    {
        return [
            'title' => $request->input('title'),
            'author_id' => $request->user()->id,
            'description' => $request->input('description'),
            'status' => $request->input('status'),
        ];
    }
}