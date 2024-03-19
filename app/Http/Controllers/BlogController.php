<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('pages.blog.index');
    }

    public function dataTable()
    {
        $blogs = Blog::with('blogCategory', 'blogTags.blogTagList', 'admin')->get();
        $datas = [];        
        foreach ($blogs as $blog) {
            $title = strlen($blog->title) > 25 ? substr($blog->title, 0, 25) . '...' : $blog->title;
            $slug = strlen($blog->slug) > 25 ? substr($blog->slug, 0, 25) . '...' : $blog->slug;
            $description = strlen($blog->description) > 25 ? substr($blog->description, 0, 25) . '...' : $blog->description;
            $author = strlen($blog->admin->name) > 25 ? substr($blog->admin->name, 0, 25) . '...' : $blog->admin->name;
            $tags = $blog->blogTags->pluck('blogTagList.tag')->toArray();
            $limitedTags = array_slice($tags, 0, 3);
            $remainingTagsCount = count($tags) - count($limitedTags);
            if ($remainingTagsCount > 0) {
                $limitedTags[] = '+ ' . $remainingTagsCount . ' lainnya';
            }
            $datas[] = [
                'id' => $blog->id,
                'title' => $title,
                'slug' => $slug,
                'description' => $description,
                'author' => $author,
                'category' => $blog->blogCategory->category,
                'tags' => $limitedTags,
                'status' => $blog->status,
            ];
        }

        return \DataTables::of($datas)->toJson();
    }
}
