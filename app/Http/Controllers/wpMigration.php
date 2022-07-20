<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\wp_migration;
use App\Models\category;
use App\Models\blogs;

use function PHPSTORM_META\type;

class wpMigration extends Controller
{
    
    public function get_api_data($pageno){
        if(file_get_contents('https://www.vsrkwealthcreator.com/wp-json/wp/v2/posts?per_page=10&page=1')){
            $res = json_decode(file_get_contents('https://www.vsrkwealthcreator.com/wp-json/wp/v2/posts?per_page=10&page='.$pageno),true);

            foreach($res as $r)
            {   
                $check = wp_migration::where('postId',$r['id'])->get();
                if(sizeof($check) < 1){
                 $data['postId'] = $r['id'];
                 $data['title'] = $r['title']['rendered'];
                 $data['mediaId'] = $r['featured_media'];
                 $data['description'] = $r['content']['rendered'];
                 $data['categories'] = json_encode($r['categories']);
                 $data['tags'] = json_encode($r['tags']);
                 $data['author'] = $r['yoast_head_json']['author'];
                 wp_migration::create($data);
                }
            }
            $this->wpGetImageCat();
        }
        echo 'Migrate to wp Table';
    }

    public function wpGetImageCat(){
        $allImage = wp_migration::select('postId','mediaId')->whereNull('mediaName')->get();
        $allCat = wp_migration::select('postId','categories')->whereNotNull('categories')->whereNull('catName')->get();
        $alltag = wp_migration::select('postId','tags')->whereNotNull('tags')->whereNull('tagName')->get();
            foreach($allImage as $a){
                if( $a->mediaId != 0) $this->wpImageStore($a->mediaId,$a->postId) ;
            }
            foreach($allCat as $c){
                $this->wpStoreCat($c->categories,$c->postId);
            }
            foreach($alltag as $t){
                $this->wpStoreTags($t->tags,$t->postId);
            }
          
    }
            //https://example.com/wp-json/wp/v2/media/<id>

    private function wpImageStore($Imgid,$postId){
        $mediaApi = json_decode(file_get_contents('https://www.vsrkwealthcreator.com/wp-json/wp/v2/media/'.$Imgid),true);

        wp_migration::where('postId',$postId)->update([
            'mediaName' =>$mediaApi['slug'],
            'mediaLocation' => '/storage/wp_blog/'.$mediaApi['slug'].'.png'
        ]); 
        Storage::disk('public')->put('wp_blog/'.$mediaApi['slug'].'.png', file_get_contents($mediaApi['guid']['rendered']));
    }

    private function wpStoreCat($catId,$postId){
            if(sizeof(json_decode($catId)) > 0){
            foreach(json_decode($catId) as $c){
                $catApi = json_decode(file_get_contents('https://www.vsrkwealthcreator.com/wp-json/wp/v2/categories/'.$c),true);
                $cateNam[] = $catApi['name'];
            }
            $fCatName = json_encode($cateNam);
            wp_migration::where('postId',$postId)->update([
                'catName' =>$fCatName,
            ]);   
        }     
    }

    private function wpStoreTags($tagId,$postId){
        if(sizeof(json_decode($tagId)) > 0){
            foreach(json_decode($tagId) as $c){
                $tagApi = json_decode(file_get_contents('https://www.vsrkwealthcreator.com/wp-json/wp/v2/tags/'.$c),true);
                $tagNam[] = $tagApi['name'];
            }
            $fTagName = json_encode($tagNam);
            wp_migration::where('postId',$postId)->update([
                'tagName' =>$fTagName,
            ]); 
        }
    }

    public function wpToBlog(){
        $rawData = wp_migration::select('title','catName','tagName','mediaLocation','description','author')->whereNotNull('description')->get();
        foreach( $rawData as $row){
            if(!empty($row->description)){
                $checkBlog = blogs::select('id')->where('title', $row->title)->first();
                if(empty($checkBlog)){
                    $media = $row->mediaLocation ?? 'no-media';
                    $categoryId = (strlen($row->catName) > 1) ? $this->getCat($row->catName) : '';
                    $tagId = (strlen($row->tagName) > 1) ? $this->getTag($row->tagName):'';
                    $wpBlogs = blogs::create([
                        'title' => $row->title,
                        'tags' => json_encode($tagId),
                        'categories' =>  json_encode($categoryId),
                        'blogImage' => $media,
                        'descritption' => $row->description,
                        'author' => $row->author
                    ]);
                }
            }
        }
        echo ' Done';
    }

    private function getTag($tags){
        foreach(json_decode($tags) as $t){
             $checktag = category::select('id')->where('name',$t)->first();
             if(empty($checktag)){
                 $tData['name'] = $t;
                 $tData['type'] = 'tag';
                 $tData['for'] = 'other';
                 $checktag = category::create($tData);
             }
             $tagID[] = $checktag->id; 
        }
        return $tagID;
    }
    private function getCat($categories){
        foreach(json_decode($categories) as $c){
            $checkCate = category::select('id')->where('name',$c)->first();
            if(empty($checkCate)){
                $cData['name'] = $c;
                $cData['type'] = 'category';
                $cData['for'] = 'other';
                $checkCate = category::create($cData);
            }
            $catID[] = $checkCate->id; 
        }
        return $catID;
    }
   
}
